<?php

namespace App\Http\Controllers;

use App\Screen;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
   public function index()
    {
        $screens = Screen::all();
        return view('screens.index',compact('screens'));
    }

    public function create()
    {
        $screens = Screen::all();
        return view('screens.create')->with(compact(['screens']));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Screen::create($formInput);
        return redirect()->route('screens.index')->with('message','Screen added successfully.');
    }

    public function edit($id)
    {
        $screen = Screen::findOrFail($id);
        return view('screens.edit', compact('screen'));
    }

    public function update(Request $request, $id)
    {
        $screen = Screen::find($id);
        $screen->name = $request->get('name');
        $screen->updated_at = date('Y-m-d H:i:s');
        $screen->save();
        return redirect()->route('screens.index')->with('message','Screen Size  has been updated successfully.');
    }

    public function destroy($id)
    {
        $screen = Screen::findOrFail($id);
        $screen->delete();
        return redirect()->back();
    }
}
