<?php

namespace App\Http\Controllers;
use App\Rfdivice;
use App\Make;
use \App\Modeles;
use App\ Desktop;
use App\Asset;
use App\Imports\RfdiviceImport;
use App\Exports\RfdiviceExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class RfdiviceController extends Controller
{
    public function index()
    {
        $rfdivices = Rfdivice::all();
        return view('rfdivices.index',compact('rfdivices'));
    }

    public function create()
    {
        $rfdivices = Rfdivice::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('rfdivices.create')->with(compact(['rfdivices','assets','desktops','makes','models']));

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'serial_number' => 'required',
            'txtcondition'=>'required',
        ]);
        $formInput=$request->all();
        Rfdivice::create($formInput);
        return redirect()->route('rfdivices.index')->with('message','Rfdivice added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rfdivice  = Rfdivice::findOrFail($id);
        //dd($desktop->hdd);
      return view('rfdivices.edit',compact( 'rfdivice','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $rfdivice = Rfdivice::find($id);
        $rfdivice->make = $request->get('make');
        $rfdivice->model = $request->get('model');
        $rfdivice->serial_number = $request->get('serial_number');
        $rfdivice->txtcondition= $request->get('txtcondition');
        $rfdivice->save();

        return redirect()->route('rfdivices.index')->with('message','Rfdivice  has been updated successfully.');
    }
    public function show($id)
    {
        $rfdivices = Rfdivice::findOrFail($id);
        return view('rfdivices.view',compact('rfdivices'));
    }
    public function destroy($id)
    {
        $rfdivice = Rfdivice::findOrFail($id);
        $rfdivice->delete();
        return redirect()->back();
    }

     public function rfdiviceImport(Request $request)
    {   
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new RfdiviceImport, $request->file('file')->store('temp'));
        return back();
    }
     public function get_rfdivice_data()
    {
        return  Excel::download(new RfdiviceExport, 'rfdivices.xlsx');
    }
}
