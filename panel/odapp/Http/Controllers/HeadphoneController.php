<?php

namespace App\Http\Controllers;

use App\Headphone;
use App\Make;
use App\Modeles;
use App\Desktop;
use App\Asset;
use\App\Assest;
use App\Imports\HeadphoneImport;
use App\Exports\HeadphoneExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class HeadphoneController extends Controller
{
    public function index()
    {
        $headphones = Headphone::all();
        return view('headphones.index',compact('headphones'));
    }

    public function create()
    {
        $headphones = Headphone::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('headphones.create')->with(compact(['headphones','assets','desktops','makes','models']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Headphone::create($formInput);
        return redirect()->route('headphones.index')->with('message','Headphone added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $headphone  = Headphone::findOrFail($id);
      return view('headphones.edit',compact( 'headphone','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $headphone = Headphone::find($id);
        $headphone->make = $request->get('make');
        $headphone->model = $request->get('model');
        $headphone->txtcondition = $request->get('txtcondition');
        $headphone->save();

        return redirect()->route('headphones.index')->with('message','Headphone  has been updated successfully.');
    }
    public function show($id)
    {
        $headphones = Headphone::findOrFail($id);
        return view('headphones.view',compact('headphones'));
    }
    public function destroy($id)
    {
        $headphone = Headphone::findOrFail($id);
        $headphone->delete();
        return redirect()->back();
    }
     public function headphoneImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new HeadphoneImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_headphone_data()
    {
        return  Excel::download(new HeadphoneExport, 'headphones.xlsx');
    }
}

