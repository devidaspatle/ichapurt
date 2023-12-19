<?php

namespace App\Http\Controllers;

use App\Wifidivice;
use App\Make;
use App\Modeles;
use App\Desktop;
use App\Asset;
use App\Imports\WifidiviceImport;
use App\Exports\WifidiviceExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class WifidiviceController extends Controller
{
    public function index()
    {
        $wifidivices = Wifidivice::all();
        return view('wifidivices.index',compact('wifidivices'));
    }

    public function create()
    {
        $wifidivices = Wifidivice::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('wifidivices.create')->with(compact(['wifidivices','assets','desktops','makes','models']));
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
        Wifidivice::create($formInput);
        return redirect()->route('wifidivices.index')->with('message','Wifidivice added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $wifidivice  = Wifidivice::findOrFail($id);
        //dd($desktop->hdd);
      return view('wifidivices.edit',compact( 'wifidivice','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $wifidivice = Wifidivice::find($id);
        $wifidivice->make = $request->get('make');
        $wifidivice->model = $request->get('model');
        $wifidivice->serial_number = $request->get('serial_number');
        $wifidivice->txtcondition = $request->get('txtcondition');
        $wifidivice->save();

        return redirect()->route('wifidivices.index')->with('message','Wifidivice  has been updated successfully.');
    }
    public function show($id)
    {
        $wifidivices = Wifidivice::findOrFail($id);
        return view('wifidivices.view',compact('wifidivices'));
    }
    public function destroy($id)
    {
        $Wifidivice = Wifidivice::findOrFail($id);
        $Wifidivice->delete();
        return redirect()->back();
    }
     public function wifidiviceImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new WifidiviceImport, $request->file('file')->store('temp'));
        return back();
    }
    public function get_wifidivice_data()
    {
        return  Excel::download(new WifidiviceExport, 'wifidivices.xlsx');
    }
}
