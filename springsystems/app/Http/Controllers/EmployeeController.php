<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->employee_first_name = $request->employeeFirstName;
        $employee->employee_last_name = $request->employeeLastName;
        $employee->company_id = $request->employeeCompany;
        $employee->save();
        return redirect('/')->with('status', 'Employee has been added');
    }
}
