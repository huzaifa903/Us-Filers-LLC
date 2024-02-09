<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\LogsController;
use App\Models\Countries;
use App\Models\States;

class CountryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $name = $request->name;
        $perPage = $request->input('perPage', session('perPage', 10));
        session(['perPage' => $perPage]);


        $countries = Countries::when($name, function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('country.index', compact('countries', 'perPage'));
    }

    public function add()
    {
        return view('country.add');
    }

    public function store(Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $country = Countries::create([
                'name' => $request->name,
                'status' => 1,
            ]);

            $logController->createLog(__METHOD__, 'success', 'Country Created.', auth()->user(), '');

            return redirect()->to('/countries')->with('success', 'New Record Created SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', $e, auth()->user(), '');

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function edit(Countries $country)
    {
        // dd($state->id);
        // $states = States::where('id', $state->id)->first();
        // dd($state);
        return view('country.edit', compact('country'));
    }

    public function update(Countries $country, Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $country = Countries::where('id', $country->id)->update([
                'name' => $request->name,
                'status' => 1,
            ]);

            $logController->createLog(__METHOD__, 'success', 'Edited Country', auth()->user(), json_encode($country));

            return redirect()->to('/countries')->with('success', 'Record Updated SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', 'Error on Edited State', auth()->user(), json_encode($country));

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function delete($id)
    {
        try {
            $country = Countries::find($id);
            $country->delete();

            return redirect()->back()->with('success', 'Record Deleted Succesfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
