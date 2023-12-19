<?php

namespace App\Http\Controllers;

use App\Webcam;
use App\Make;
use \App\Modeles;
use App\Desktop;
use App\Asset;
use\App\Assest;
use App\Imports\WebcamImport;
use App\Exports\WebcamExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class WebcamController extends Controller
{
    public function index()
    {
        $webcams = Webcam::all();
        return view('webcams.index',compact('webcams'));
    }

    public function create()
    {
        $webcams = Webcam::all();

        $desktops = Desktop::all();

        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('webcams.create')->with(compact(['webcams','assets','desktops','makes','models']));
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
        Webcam::create($formInput);
        return redirect()->route('webcams.index')->with('message','Webcam added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $webcam  = Webcam::findOrFail($id);
        //dd($desktop->hdd);
      return view('webcams.edit',compact( 'webcam','makes','models'));
    }

   public function update(Request $request, $id)
    {

        $webcam = Webcam::find($id);
        $webcam->make = $request->get('make');
        $webcam->model = $request->get('model');
        $webcam->serial_number = $request->get('serial_number');
        $webcam->txtcondition = $request->get('txtcondition');
        $webcam->save();

        return redirect()->route('webcams.index')->with('message','webcam has been updated successfully.');
    }
    public function show($id)
    {
        $webcams = Webcam::findOrFail($id);
        return view('webcams.view',compact('webcams'));
    }
    public function destroy($id)
    {
        $Webcam = Webcam::findOrFail($id);
        $Webcam->delete();
        return redirect()->back();
    }

     public function webcamImport(Request $request)
    { 

        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new WebcamImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_webcam_data()
    {
        return  Excel::download(new WebcamExport, 'webcams.xlsx');
    }
}
