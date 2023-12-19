<?php
namespace App\Http\Controllers;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Hdd;
use App\Processor;
use App\Monitor;
use App\Mouse;
use App\Keyboard;
use App\Desktop;
use App\Asset;
use App\Imports\FulldesktopImport;
use App\Exports\FulldesktopExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Fulldesktop;
use Illuminate\Http\Request;

class FulldesktopController extends Controller
{
    public function index()
    {
        $fulldesktops = Fulldesktop::all();
        
        return view('fulldesktops.index',compact('fulldesktops'));
    }

    public function create()
    {
        $status = 'Y';
        $fulldesktops = Fulldesktop::all();
        $assets= Asset::all();
        $cpus = Desktop::where('status', $status)->get();
        $monitors = Monitor::where('status', $status)->get();
        $mouses = Mouse::where('status', $status)->get();
        $keyboards = Keyboard::where('status', $status)->get();
      
        return view('fulldesktops.create')->with(compact(['fulldesktops','cpus','monitors','mouses','keyboards']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'cpu_serial_number' => 'required',
            'monitor_serial_number' => 'required',
            'mouse_serial_number' => 'required',
            'keyboard_serial_number' => 'required',
            'txtcondition'=>'required'
        ]);

          $formInput=$request->all();
          //echo $request->get('monitor_serial_number');
          $storemdesktop = Desktop::where('serial_number',$request->get('cpu_serial_number'))->update(["status" => 'N']);
          $storemonitor = Monitor::where('serial_number',$request->get('monitor_serial_number'))->update(["status" => 'N']);
          $storekeyboard = Keyboard::where('serial_number',$request->get('keyboard_serial_number'))->update(["status" => 'N']);
          $storemouse = Mouse::where('serial_number',$request->get('mouse_serial_number'))->update(["status" => 'N']);
        //die;
          Fulldesktop::create($formInput);
        //return redirect()->route('fulldesktops.index')->with('message','Pair Desktop added successfully.');
    }

    public function edit($id)
    {

        $cpus= Desktop::all();
        $monitors= Monitor::all();
        $mouses = Mouse::all();
        $keyboards = Keyboard::all();
        $fulldesktop  = Fulldesktop::findOrFail($id);
        //dd($desktop);
      return view('fulldesktops.edit',compact( 'fulldesktop','cpus','monitors','mouses','keyboards','fulldesktop'));
    }

   public function update(Request $request, $id)
    {
       
        $fulldesktop = Fulldesktop::find($id);
        
        $fulldesktop->cpu_serial_number = $request->get('cpu_serial_number');
        $fulldesktop->monitor_serial_number = $request->get('monitor_serial_number');
        $fulldesktop->mouse_serial_number = $request->get('mouse_serial_number');
        $fulldesktop->keyboard_serial_number = $request->get('keyboard_serial_number');
        $fulldesktop->txtcondition = $request->get('txtcondition');
        //$storeproduct = Storeproduct::where('id',$val)->update(["status" => 'N']);
       
        $fulldesktop->save();

       // return redirect()->route('fulldesktops.index')->with('message','Pair Desktop  has been updated successfully.');
    }


    public function destroy($id)
    {
        $fulldesktop = Fulldesktop::findOrFail($id);
        $fulldesktop->delete();
        return redirect()->back();
    }
    
    public function show($id)
    {
        $fulldesktops = Fulldesktop::findOrFail($id);
        //dd($products);
        return view('fulldesktops.view',compact('fulldesktops'));
    }

    public function fulldesktopImport(Request $request)
    {
        
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new FulldesktopImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_pairdesktop_data()
    {
        return  Excel::download(new FulldesktopExport, 'pairdesktops.xlsx');
    }


}
