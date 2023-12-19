<?php

namespace App\Http\Controllers;

use App\Keyboard;
use App\Make;
use \App\Modeles;
use App\Desktop;
use App\Asset;
use\App\Fulldesktop;
use App\Imports\KeyboardImport;
use App\Exports\KeyboardExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index()
    {   
        $status = 'Y';
        $keyboards = Keyboard::all();
        $fulldesktops = Fulldesktop::where('status', $status)->get();
        return view('keyboards.index',compact('keyboards','fulldesktops'));
    }

    public function create()
    {
        $keyboards = Keyboard::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('keyboards.create')->with(compact(['keyboards','assets','desktops','makes','models']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required|string|max:20',
            'serial_number'=>'required|string|max:20',
            'txtcondition'=>'required|string|max:20'
        ]);
        $formInput=$request->all();
        Keyboard::create($formInput);
        return redirect()->route('keyboards.index')->with('message','keyboard added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $keyboard  = Keyboard::findOrFail($id);
        //dd($desktop->hdd);
      return view('keyboards.edit',compact( 'keyboard','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $keyboard = keyboard ::find($id);
        $keyboard->make = $request->get('make');
        $keyboard->model = $request->get('model');
        $keyboard->txtcondition = $request->get('txtcondition');
        $keyboard->save();

        return redirect()->route('keyboards.index')->with('message','keyboard has been updated successfully.');
    }
    public function show($id)
    {
        $keyboards = Keyboard::findOrFail($id);
        return view('keyboards.view',compact('keyboards'));
    }
    public function destroy($id)
    {
        $keyboard = Keyboard::findOrFail($id);
        $keyboard->delete();
        return redirect()->back();
    }

     public function keyboardImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new KeyboardImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_keyboard_data()
    {
        return  Excel::download(new KeyboardExport, 'keyboards.xlsx');
    }
}
