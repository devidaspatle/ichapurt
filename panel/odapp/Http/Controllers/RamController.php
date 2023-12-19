<?php

namespace App\Http\Controllers;

use App\Ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
   public function index()
    {
        $rams = Ram::all();
        return view('rams.index',compact('rams'));
    }

    public function create()
    {
        $rams = Ram::all();
        return view('rams.create')->with(compact(['rams']));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Ram::create($formInput);
        return redirect()->route('rams.index')->with('message','Ram added successfully.');
    }

    public function edit($id)
    {
        $ram = Ram::findOrFail($id);
        return view('rams.edit', compact('ram'));
    }

    public function update(Request $request, $id)
    {
        $ram = Ram::find($id);
        $ram->name = $request->get('name');
        $ram->updated_at = date('Y-m-d H:i:s');
        $ram->save();
        return redirect()->route('rams.index')->with('message','Ram  has been updated successfully.');
    }

    public function destroy($id)
    {
        $ram = Ram::findOrFail($id);
        $ram->delete();
        return redirect()->back();
    }
}
