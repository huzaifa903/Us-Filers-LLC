<?php

namespace App\Http\Controllers\Api;

use App\Models\Policies;
use App\Models\Project;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPolicy(Project $project_id)
    {
        try {
            // $policy = Policies::where('project_id', $project_id->id)->first();

            $policy = Policies::join('project', 'policies.project_id', '=', 'project.id')
                ->where('policies.project_id', $project_id->id)
                ->select('policies.*', 'project.name as project_name')
                ->first();

            // dd($policy);

            return response()->json(['data' => $policy, 'status' => 200], 200);
        } catch (Exception $e) {
            return response()->json(['data' => $e, 'status' => 500], 500);
        }
    }
}
