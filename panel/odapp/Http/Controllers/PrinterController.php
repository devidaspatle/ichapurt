<?php

namespace App\Http\Controllers;

use App\Printer;
use App\Asset;
use App\Make;
use App\Modeles;
use App\Desktop;
use App\Imports\PrinterImport;
use App\Exports\PrinterExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PrinterController extends Controller
{ public function index()
    {
        $printers = Printer::all();
        return view('printers.index',compact('printers'));
    }

    public function create()
    {
        $printers = Printer::all();
        $assets = Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('printers.create')->with(compact(['printers','assets','makes','models']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'serial_number' => 'required',
            'printer_type' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Printer::create($formInput);
        return redirect()->route('printers.index')->with('message','Printer added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $printer  = Printer::findOrFail($id);
        //dd($desktop->hdd);
      return view('printers.edit',compact( 'printer','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $printer = Printer::find($id);
        $printer->make = $request->get('make');
        $printer->model = $request->get('model');
        $printer->serial_number = $request->get('serial_number');
        $printer->printer_type= $request->get('printer_type');
        $printer->txtcondition= $request->get('txtcondition');


        $printer->save();

        return redirect()->route('printers.index')->with('message','Printer has been updated successfully.');
    }
    public function show($id)
    {
        $printers = Printer::findOrFail($id);
        return view('printers.view',compact('printers'));
    }
    public function destroy($id)
    {
        $printer = Printer::findOrFail($id);
        $printer->delete();
        return redirect()->back();
    }


     public function printerImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new PrinterImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_printer_data()
    {
        return  Excel::download(new PrinterExport, 'printers.xlsx');
    }
}
