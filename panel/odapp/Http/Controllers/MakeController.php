<?php

namespace App\Http\Controllers;

use App\Make;
use Illuminate\Http\Request;
use App\Http\Requests;
class MakeController extends Controller
{
    public function index()
    {
        $makes = Make::all();
        return view('makes.index',compact('makes'));
    }

    public function create()
    {
        $makes = Make::all();
        return view('makes.create')->with(compact(['makes']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Make::create($formInput);
        return redirect()->route('makes.index')->with('message','Make added successfully.');
    }

    public function edit($id)
    {
        $make = Make::findOrFail($id);
        return view('makes.edit', compact('make'));
    }

    public function update(Request $request, $id)
    {
        $makes = Make::find($id);
        $makes->name = $request->get('name');
        $makes->updated_at = date('Y-m-d H:i:s');
        $makes->save();
        return redirect()->route('makes.index')->with('message','Make  has been updated successfully.');
    }
    public function destroy($id)
    {
        $make = Make::findOrFail($id);
        $make->delete();
        return redirect()->back();
    }
}
