<?php

namespace App\Http\Controllers;

use App\Models\Designator;
use App\Models\States;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormOrderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Select Package
    public function selectionAdd()
    {
        if (session()->has('company_info')) {
            return redirect('/company-information');
        } elseif (session()->has('state_filing')) {
            return redirect('/state-filing');
        } elseif (session()->has('form_data')) {
            return redirect('/contact-person-details');
        } elseif (session()->has('selected_business')) {
            return redirect('package-selection');
        } else {
            return view('form.package_selection');
        }
    }

    public function selectionStore(Request $request)
    {
        $request->session()->put('selected_business', $request->all());
        // dd(Session::get('selected_business'));
        return redirect('contact-person-details');
    }

    // Contact Info
    public function contactPersonAdd(Request $request)
    {
        $states = States::all();

        return view('form.contact_details', compact('states'));
    }

    public function contactPersonStore(Request $request)
    {
        $request->session()->put('contact_person', $request->all());
        return redirect('/state-filing');
    }

    // State Filing 
    public function stateFilingAdd(Request $request)
    {
        $stateFilingType = Session::get('state_filing.state_filing_type');
        return view('form.state_filing', compact('stateFilingType'));
    }

    public function stateFilingStore(Request $request)
    {
        $request->session()->put('state_filing', $request->all());
        return redirect('/company-information');
    }

    // Company Info
    public function companyInfoAdd(Request $request)
    {
        $designator = Designator::all();
        $company_info = Session::get('company_info');

        // dd($company_info);

        return view('form.company_info', compact('designator', 'company_info'));
    }

    public function companyInfoStore(Request $request)
    {
        $request->session()->put('company_info', $request->all());
        return redirect('/platinum-kit-invite');
    }

    // Platinum Kit
    public function platinumKitAdd(Request $request)
    {
        return view('form.platinum-invite');
    }

    public function platinumKitStore(Request $request)
    {
        return redirect('/process-members');
    }

    // Process Members
    public function processMemberAdd(Request $request)
    {
        $person = Session::get('contact_person');
        $company_info = Session::get('company_info');
        return view('form.members', compact('company_info', 'person'));
    }

    public function processMemberStore(Request $request)
    {
        return redirect('/register-agent');
    }

    // Register Agent
    public function registerAgentAdd(Request $request)
    {
        return view('form.register-agent');
    }

    public function registerAgentStore(Request $request)
    {
        return redirect('/register-agent');
    }
}
