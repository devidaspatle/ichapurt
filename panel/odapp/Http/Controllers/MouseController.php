<?php

namespace App\Http\Controllers;
use App\Mouse;
use App\Make;
use \App\Modeles;
use App\ Desktop;
use App\Asset;
use\App\Fulldesktop;
use App\Imports\MouseImport;
use App\Exports\MouseExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class MouseController extends Controller
{
    public function index()
    {   
        $status = 'Y';
        $mouses = Mouse::all();
        $fulldesktops = Fulldesktop::where('status', $status)->get();
        return view('mouses.index',compact('mouses','fulldesktops'));
    }

    public function create()
    {
        $mouses = Mouse::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('mouses.create')->with(compact(['mouses','assets','desktops','makes','models']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'serial_number' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Mouse::create($formInput);
        return redirect()->route('mouses.index')->with('message','Mouse added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $mouse  = Mouse::findOrFail($id);
        //dd($desktop->hdd);
      return view('mouses.edit',compact( 'mouse','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $mouse = Mouse::find($id);
        $mouse->make = $request->get('make');
        $mouse->model = $request->get('model');
        $mouse->serial_number = $request->get('serial_number');
        $mouse->txtcondition = $request->get('txtcondition');
        $mouse->save();

        return redirect()->route('mouses.index')->with('message','Mouse  has been updated successfully.');
    }
    public function show($id)
    {
        $mouses = Mouse::findOrFail($id);
         return view('mouses.view',compact('mouses'));
    }
    public function destroy($id)
    {
        $mouse = Mouse::findOrFail($id);
        $mouse->delete();
        return redirect()->back();
    }


     public function mouseImport(Request $request)
    { 
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new MouseImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_mouse_data()
    {
        return  Excel::download(new MouseExport, 'mouses.xlsx');
    }
}
