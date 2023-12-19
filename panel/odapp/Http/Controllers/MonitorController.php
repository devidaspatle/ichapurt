<?php

namespace App\Http\Controllers;

use App\Monitor;
use App\Asset;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Screen;
use App\Hdd;
use App\Processor;
use App\Desktop;
use\App\Fulldesktop;
use App\Imports\MonitorImport;
use App\Exports\MonitorExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index()
    {
        $status = 'Y';
        $monitors = Monitor::all();
        $fulldesktops = Fulldesktop::where('status', $status)->get();
        return view('monitors.index',compact('monitors','fulldesktops'));
    }

    public function create()
    {
        $monitors = Monitor::all();
        $assets = Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $screens = Screen::all();
        $hdds = Hdd::all();
        $processors = Processor::all();

        return view('monitors.create')->with(compact(['monitors','assets','makes','models','rams','screens','hdds','processors']));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => ' required',
            'serial_number' => ' required',
            'screen_size' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Monitor::create($formInput);
        return redirect()->route('monitors.index')->with('message','Monitor added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $screens = Screen::all();
        $rams = Ram::all();
        $hdds = Hdd::all();
        $processors = Processor::all();
        $monitor = Monitor::findOrFail($id);

      return view('monitors.edit',compact( 'monitor','makes','models','screens','rams','hdds','processors'));
    }

   public function update(Request $request, $id)
    {
        $monitor = Monitor::find($id);
        $monitor->make = $request->get('make');
        $monitor->model = $request->get('model');
        $monitor->serial_number = $request->get('serial_number');
        $monitor->screen_size = $request->get('screen_size');
        $monitor->txtcondition= $request->get('txtcondition');
        $monitor->save();

        return redirect()->route('monitors.index')->with('message','Monitor  has been updated successfully.');
    }

    public function destroy($id)
    {
        $Monitor = Monitor::findOrFail($id);
        $Monitor->delete();
        return redirect()->back();
    }
    public function show($id)
    {
        $monitors = Monitor::findOrFail($id);
        //dd($products);
        return view('monitors.view',compact('monitors'));
    }

     public function monitorImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new MonitorImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_monitor_data()
    {
        return  Excel::download(new MonitorExport, 'monitors.xlsx');
    }
}
