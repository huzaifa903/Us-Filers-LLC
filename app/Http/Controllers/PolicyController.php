<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\LogsController;
use App\Models\Policies;
use App\Models\Project;
use Illuminate\Support\Facades\URL;

class PolicyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $name = $request->name;
        // $mr_no = $request->mr_no;
        // $phone_no = $request->phone_no;
        $name = $request->name;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $perPage = $request->input('perPage', session('perPage', 10));
        session(['perPage' => $perPage]);

        $policies =  Policies::when($name, function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when($startDate, function ($query) use ($startDate) {
            $query->whereDate('start_date', '=', $startDate);
        })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate('end_date', '=', $endDate);
            })->orderBy('created_at', 'desc')
            ->paginate($perPage);


        // $policies = Policies::with('patient_type')->when($name, function ($query) use ($name) {
        //     $query->where('name', 'like', '%' . $name . '%');
        // })->when($phone_no, function ($query) use ($phone_no) {
        //     $query->where('phone_no', 'like', '%' . $phone_no . '%');
        // })->when($mr_no, function ($query) use ($mr_no) {
        //     $query->where('id', 'like', '%' . $mr_no . '%');
        // })->orderBy('created_at', 'desc')
        //     ->paginate($perPage);



        return view('policy.index', compact('policies', 'perPage'));
    }



    public function add()
    {
        $projects = Project::all();
        return view('policy.add', compact('projects'));
    }

    public function store(Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
                'start_date_policy' => 'required',
                'end_date_policy' => 'required',
                'file' => $request->hasFile('file') ? 'required' : '',
            ]);


            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads/policy/'), $imageName);
            } else {
                $imageName = "";
            }

            $policy = Policies::create([
                'name' => $request->name,
                'start_date' => Carbon::parse($request->start_date_policy),
                'end_date' => Carbon::parse($request->end_date_policy),
                'file' => @$imageName,
                'project_id' => $request->project_id,
                'policy_url' => 'https://gocpolicy.tumbitech.net/uploads/policy/' . @$imageName,
                'status' => 1,
                'added_by' => auth()->user()->id,
                'created_at' => now(),
            ]);

            $logController->createLog(__METHOD__, 'success', 'Policy Created.', auth()->user(), '');

            return redirect()->to('/policies')->with('success', 'New Record Created SuccessFully!');
        } catch (Exception $e) {
            dd($e);
            $logController->createLog(__METHOD__, 'error', $e, auth()->user(), '');

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function edit(Policies $policy)
    {
        $policy = Policies::where('id', $policy->id)->first();
        $projects = Project::all();
        // dd($policy);
        return view('policy.edit', compact('policy', 'projects'));
    }

    public function update(Policies $policy, Request $request, LogsController $logController)
    {
        try {

            // $request->validate([
            //     'name' => 'required',
            //     'start_date_policy' => 'required',
            //     'end_date_policy' => 'required',
            //     'file' => 'required',
            // ]);

            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads/policy'), $imageName);
            } else {
                $imageName = $policy->file;
            }

            $policy = Policies::where('id', $policy->id)->update([
                'name' => $request->name,
                'start_date' => Carbon::parse($request->start_date_policy),
                'end_date' => Carbon::parse($request->end_date_policy),
                'file' => @$imageName,
                'project_id' => $request->project_id,
                'policy_url' => 'https://gocpolicy.tumbitech.net/uploads/policy/' . @$imageName,
                'status' => 1,
                'added_by' => auth()->user()->id,
                'created_at' => now(),
            ]);

            $logController->createLog(__METHOD__, 'success', 'Edited Policy', auth()->user(), json_encode($policy));

            return redirect()->to('/policies')->with('success', 'Record Updated SuccessFully!');
        } catch (Exception $e) {
            // dd($e);
            $logController->createLog(__METHOD__, 'error', 'Error on Edited Policy', auth()->user(), json_encode($policy));

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function delete($id)
    {
        try {
            $policy = Policies::find($id);
            $policy->delete();

            return redirect()->back()->with('success', 'Record Deleted Succesfully!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
