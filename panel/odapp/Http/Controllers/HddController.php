<?php

namespace App\Http\Controllers;

use App\Hdd;
use Illuminate\Http\Request;

class HddController extends Controller
{

    public function index()
    {
        $hdds = Hdd::all();
        return view('hdds.index',compact('hdds'));
    }

    public function create()
    {
        $hdds = Hdd::all();
        return view('hdds.create')->with(compact(['hdds']));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Hdd::create($formInput);
        return redirect()->route('hdds.index')->with('message','Hdd added successfully.');
    }

    public function edit($id)
    {
        $hdd = Hdd::findOrFail($id);
        return view('hdds.edit', compact('hdd'));
    }

    public function update(Request $request, $id)
    {
        $hdd = Hdd::find($id);
        $hdd->name = $request->get('name');
        $hdd->updated_at = date('Y-m-d H:i:s');
        $hdd->save();
        return redirect()->route('hdds.index')->with('message','Hard Disk Drives  has been updated successfully.');
    }

    public function destroy($id)
    {
        $hdd = Hdd::findOrFail($id);
        $hdd->delete();
        return redirect()->back();
    }
}
