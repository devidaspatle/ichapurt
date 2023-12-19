<?php

namespace App\Http\Controllers;
use App\Location;
use App\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    
    public function index()
    {
        $campus = Campus::all();
        $locations = Location::all();
        return view('campus.index',compact('campus','locations'));
    }

    public function create()
    {
        $campus = Campus::all();
        return view('campus.create')->with(compact(['campus']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required', 
            'location_id'=>'required'
        ]);
        $formInput=$request->all();
        Campus::create($formInput);
        
        return redirect()->route('campus.index')->with('message','Campus added successfully.');
    }

    public function edit($id)
    {
        $campus = Campus::findOrFail($id);
        $locations = Location::all();
        return view('campus.edit', compact('campus','locations'));
    }

    public function update(Request $request,  $id)
    {
        $campus = Campus::findOrFail($id);
        $campus->name = $request->get('name');
        $campus->location_id = $request->get('location_id');
        $campus->updated_at = date('Y-m-d H:i:s');
        $campus->save();
        return redirect()->route('campus.index')->with('message','Campus  has been updated successfully.');
    }
    public function destroy($id)
    {
        $campus = Campus::findOrFail($id);
        $campus->delete();
        return redirect()->back();
    }
}
