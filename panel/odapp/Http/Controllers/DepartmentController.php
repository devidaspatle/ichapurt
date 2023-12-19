<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('departments.index',compact('departments'));
    }
   
    public function create()
    {
        $departments = Department::all();
        return view('departments.create')->with(compact(['makes']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Department::create($formInput);
        return redirect()->route('departments.index')->with('message','Department added successfully.');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->name = $request->get('name');
        $department->updated_at = date('Y-m-d H:i:s');
        $department->save();
        return redirect()->route('departments.index')->with('message','Department  has been updated successfully.');
    }
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back();
    }
}
