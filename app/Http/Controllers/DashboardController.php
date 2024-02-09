<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\DayMaster;
use App\Models\Patients;
use App\Models\Payments;
use App\Models\Policies;
use App\Models\Procedure;
use App\Models\Project;
use App\Models\States;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $state_count = States::count();
        $policy_count = Policies::count();
        return view('dashboard', compact('state_count', 'policy_count'));
    }
}
