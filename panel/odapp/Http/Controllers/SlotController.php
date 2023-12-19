<?php

namespace App\Http\Controllers;

use App\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{

     public function index()
    {
        $slots = Slot::all();
        return view('slots.index',compact('slots'));
    }

    public function create()
    {
        $slots = Slot::all();
        return view('slots.create')->with(compact(['slots']));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Slot::create($formInput);
        return redirect()->route('slots.index')->with('message','Slot added successfully.');
    }

    public function edit($id)
    {
        $slot = Slot::findOrFail($id);
        return view('slots.edit', compact('slot'));
    }

    public function update(Request $request, $id)
    {
        $slot = Slot::find($id);
        $slot->name = $request->get('name');
        $slot->updated_at = date('Y-m-d H:i:s');
        $slot->save();
        return redirect()->route('slots.index')->with('message','Slot  has been updated successfully.');
    }
    public function destroy($id)
    {
        $slot = Slot::findOrFail($id);
        $slot->delete();
        return redirect()->back();
    }
}
