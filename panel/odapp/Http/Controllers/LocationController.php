<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    public function index()
    {
        $locations = Location::all();
        return view('locations.index',compact('locations'));
    }

     public function create()
    {
        $locations = Location::all();
        return view('locations.create')->with(compact(['locations']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Location::create($formInput);
        return redirect()->route('locations.index')->with('message','Location added successfully.');
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->name = $request->get('name');
        $location->updated_at = date('Y-m-d H:i:s');
        $location->save();
        return redirect()->route('locations.index')->with('message','Make  has been updated successfully.');
    }
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->back();
    }
}
