<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $company = new Company;
        $company->company_name = $request->companyName;
        $company->company_address = $request->companyAddress;
        $company->save();
        return redirect('/')->with('status', 'Company has been added');
    }
}
