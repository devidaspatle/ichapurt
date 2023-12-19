<?php

namespace App\Http\Controllers;

use App\Scanner;
use App\Make;
use App\Modeles;
use App\Product;
use App\Desktop;
use App\Asset;
use\App\Assest;
use App\Imports\ScannerImport;
use App\Exports\ScannerExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ScannerController extends Controller
{
    public function index()
    {
        $scanners = Scanner::all();
        return view('scanners.index',compact('scanners'));
    }

    public function create()
    {
        $scanners = Scanner::all();
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        return view('scanners.create')->with(compact(['assets','desktops','makes','models','scanners']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'serial_number' => 'required',
            'scanner_type' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Scanner::create($formInput);
        return redirect()->route('scanners.index')->with('message','Scanner added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $scanner = Scanner::findOrFail($id);
      return view('scanners.edit',compact( 'scanner','makes','models'));
    }

   public function update(Request $request, $id)
    {
        $scanner = Scanner::find($id);
        $scanner->make = $request->get('make');
        $scanner->model = $request->get('model');
        $scanner->serial_number = $request->get('serial_number');
        $scanner->scanner_type = $request->get('scanner_type');
        $scanner->txtcondition = $request->get('txtcondition');
        $scanner->save();
        //dd($request->get('scanner_type'));


        return redirect()->route('scanners.index')->with('message','Scanner has been updated successfully.');
    }
    public function show($id)
    {
        $scanners = Scanner::findOrFail($id);
        return view('scanners.view',compact('scanners'));
    }

    public function destroy($id)
    {
        $Scanner = Scanner::findOrFail($id);
        $Scanner->delete();
        return redirect()->back();
    }

     public function scannerImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new ScannerImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_scanner_data()
    {
        return  Excel::download(new ScannerExport, 'scanners.xlsx');
    }
}
