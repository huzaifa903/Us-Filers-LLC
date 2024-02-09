<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\LogsController;

class ProjectController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // dd($request->all());


        $name = $request->name;
        $perPage = $request->input('perPage', session('perPage', 10));
        session(['perPage' => $perPage]);


        $project = Project::when($name,function($query) use ($name){
            $query->where('name', 'like', '%' . $name . '%');
        })->orderBy('created_at', 'desc')
        ->paginate($perPage);

        return view('project.index', compact('project', 'perPage'));


    }

    public function add()
    {
        return view('project.add');
    }

    public function store(Request $request , LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',

            ]);


            $project = Project::create([
                'name' => $request->name,
                'status' => 1,
            ]);
            $logController->createLog(__METHOD__, 'success', 'Project Created.', auth()->user(), '');


            return redirect()->to('/project')->with('success', 'New Record Created SuccessFully!');
        } catch (Exception $e) {
            $logController->createLog(__METHOD__, 'error', $e , auth()->user(), '');


            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function edit(Project $project )
    {
        $project = Project::where('id', $project->id)->first();

        return view('project.edit', compact('project'));
    }

    public function update(Project $project, Request $request ,LogsController $logController)
    {
        try {
            $request->validate([
                'name' => 'required',

            ]);

            $project = Project::where('id', $project->id)->update([
                'name' => $request->name,
                'status' => 1,
            ]);
            $logController->createLog(__METHOD__, 'success', 'Edited Project', auth()->user(), json_encode($project));


            return redirect()->to('/project')->with('success', 'Record Updated SuccessFully!');
        } catch (Exception $e) {
            // dd($e);

            $logController->createLog(__METHOD__, 'error', 'Error on Edited Project', auth()->user(), json_encode($project));

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function delete($id)
    {
        try {
            $project = Project::find($id);
            $project->delete();

            return redirect()->back()->with('success', 'Record Deleted Succesfully!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
