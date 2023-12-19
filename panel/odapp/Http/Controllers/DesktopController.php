<?php

namespace App\Http\Controllers;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Hdd;
use App\Processor;
use App\Desktop;
use App\Fulldesktop;
use App\Asset;
use App\Imports\DesktopImport;
use App\Exports\DesktopExport;
use Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    public function index()
    {
        $status = 'Y';
        $desktops = Desktop::all();
        
        $fulldesktops = Fulldesktop::where('status', $status)->get();
        return view('desktops.index',compact('desktops','fulldesktops'));
    }

    public function create()
    {
        $desktops = Desktop::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $hdds = Hdd::all();
        $processors = Processor::all();
        return view('desktops.create')->with(compact(['desktops','makes','models','rams','hdds','processors']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'required',
            'model' => 'required',
            'serial_number' => 'required|min:5|max:15',
            'processor' => 'required|',
            'ram' => 'required',
            'hdd' => 'required',
            'txtcondition'=>'required'
          ]);
          $formInput=$request->all();
        Desktop::create($formInput);
        //dd($formInput);
        return redirect()->route('desktops.index')->with('message','Desktop added successfully.');
    }

    public function edit($id)
    {

        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $hdds = Hdd::all();
        $processors = Processor::all();
        $desktop  = Desktop::findOrFail($id);
        //dd($desktop);
      return view('desktops.edit',compact( 'desktop','makes','models','rams','hdds','processors'));
    }

   public function update(Request $request, $id)
    {

        $desktop = Desktop::find($id);
        $desktop->make = $request->get('make');
        $desktop->model = $request->get('model');
        $desktop->serial_number = $request->get('serial_number');
        $desktop->processor = $request->get('processor');
        $desktop->ram = $request->get('ram');
        $desktop->hdd = $request->get('hdd');
        $desktop->txtcondition = $request->get('txtcondition');
        $desktop->save();

        return redirect()->route('desktops.index')->with('message','Desktop  has been updated successfully.');
    }


    public function destroy($id)
    {
        $desktop = Desktop::findOrFail($id);
        $desktop->delete();
        return redirect()->back();
    }
    public function show($id)
    {
        $desktops = Desktop::findOrFail($id);
        //dd($products);
        return view('desktops.view',compact('desktops'));
    }

    public function desktopImport(Request $request)
    { 
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new DesktopImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_desktop_data()
    {
        return  Excel::download(new DesktopExport, 'desktops.xlsx');
    }


}
