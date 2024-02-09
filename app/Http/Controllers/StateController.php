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
use App\Models\States;

class StateController extends BaseController
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


        $states = States::when($name, function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('state.index', compact('states', 'perPage'));
    }

    public function add()
    {
        return view('state.add');
    }

    public function store(Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $state = States::create([
                'name' => $request->name,
                'status' => 1,
            ]);

            $logController->createLog(__METHOD__, 'success', 'State Created.', auth()->user(), '');

            return redirect()->to('/states')->with('success', 'New Record Created SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', $e, auth()->user(), '');

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function edit(States $state)
    {
        // dd($state->id);
        // $states = States::where('id', $state->id)->first();
        // dd($state);
        return view('state.edit', compact('state'));
    }

    public function update(States $state, Request $request, LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $state = States::where('id', $state->id)->update([
                'name' => $request->name,
                'status' => 1,
            ]);

            $logController->createLog(__METHOD__, 'success', 'Edited State', auth()->user(), json_encode($state));

            return redirect()->to('/states')->with('success', 'Record Updated SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', 'Error on Edited State', auth()->user(), json_encode($state));

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function delete($id)
    {
        try {
            $state = States::find($id);
            $state->delete();

            return redirect()->back()->with('success', 'Record Deleted Succesfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
