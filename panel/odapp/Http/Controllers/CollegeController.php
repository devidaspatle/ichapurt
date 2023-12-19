<?php

namespace App\Http\Controllers;

use App\College;
use App\Campus;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        $campus = Campus::all();
        return view('colleges.index',compact('colleges','campus'));
    }

    public function create()
    {
        $college = College::all();
        $campus = Campus::all();
        return view('colleges.create')->with(compact(['college','campus']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'campus_id'=>'required'
        ]);
        $formInput=$request->all();
        College::create($formInput);
        return redirect()->route('colleges.index')->with('message','College added successfully.');
    }

    public function edit($id)
    {  
        $campus = Campus::all();
        $college = College::findOrFail($id);
        return view('colleges.edit', compact('college','campus'));
    }

    public function update(Request $request,  $id)
    {
        $college = College::findOrFail($id);
        $college->name = $request->get('name');
        $college->campus_id = $request->get('campus_id');
        $college->updated_at = date('Y-m-d H:i:s');
        $college->save();
        return redirect()->route('colleges.index')->with('message','College  has been updated successfully.');
    }
    public function destroy($id)
    {
        $college = College::findOrFail($id);
        $college->delete();
        return redirect()->back();
    }
}
