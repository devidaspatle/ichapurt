<?php

namespace App\Http\Controllers;

use App\Employee;
use App\College;
use App\Department;
use App\Exports\EmployeeExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }

     public function create()
    {
        $employees = Employee::all();
        $colleges = College::all();
        $departments = Department::all();
        return view('employees.create')->with(compact(['employees','departments','colleges']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'employee_code'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'date_of_birth'=>'required',
            'city'=>'required',
            'department_id'=>'required',
            'office'=>'required',
            'comment'=>'required'
        ]);
        $formInput=$request->all();
        Employee::create($formInput);
        return redirect()->route('employees.index')->with('message','Employee added successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $colleges = College::all();
        $departments = Department::all();
        
        return view('employees.edit', compact('employee','departments','colleges'));
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.view', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->fullname = $request->get('fullname');
        $employee->employee_code = $request->get('employee_code');
        $employee->mobile = $request->get('mobile');
        $employee->email = $request->get('email');
        $employee->date_of_birth = $request->get('date_of_birth');
        $employee->city = $request->get('city');
        $employee->department_id = $request->get('department_id');
        $employee->office = $request->get('office');
        $employee->comment = $request->get('comment');
        $employee->currentStatus = 'Y';
        $employee->updated_at = date('Y-m-d H:i:s');
        $employee->save();
     
        return redirect()->route('employees.index')->with('message','Employee  has been updated successfully.');
    }
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back();
    }

    public function get_employee_data()
    {
        return  Excel::download(new EmployeeExport, 'employees.xlsx');
    }
}
