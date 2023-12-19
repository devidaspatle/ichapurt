<?php

namespace App\Http\Controllers;
use App\Switchs;
use App\Make;
use App\Modeles;
use App\Asset;
use App\Imports\SwitchImport;
use App\Exports\SwitchsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index()
    {
        $switchs = Switchs::all();
        return view('switchs.index',compact('switchs'));
    }

    public function create()
    {
        $switchs = Switchs::all();
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();

        return view('switchs.create')->with(compact(['switchs','assets','makes','models']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'string|max:20',
            'model' => 'required',
            'serial_number' => 'required',
            'noofport' => 'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Switchs::create($formInput);
        return redirect()->route('switchs.index')->with('message','Switch added successfully.');
    }

    public function edit($id)
    {
        $switch = Switchs::findOrFail($id);
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        return view('switchs.edit', compact('makes','models','switch'));
    }

    public function update(Request $request, $id)
    {
        $switch = Switchs::find($id);
        $switch->make = $request->get('make');
        $switch->model = $request->get('model');
        $switch->serial_number = $request->get('serial_number');
        $switch->noofport = $request->get('noofport');
        $switch->txtcondition = $request->get('txtcondition');
        $switch->save();
        return redirect()->route('switchs.index')->with('message','Switch  has been updated successfully.');
    }
    public function show($id)
    {
        $switchs = Switchs::findOrFail($id);
        //dd($products);
        return view('switchs.view',compact('switchs'));
    }
    public function destroy($id)
    {
        $switch= Switchs::findOrFail($id);
        $switch->delete();
        return redirect()->back();
    }

     public function switchImport(Request $request)
    {   
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new SwitchImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_switch_data()
    {
        return  Excel::download(new SwitchsExport, 'switchs.xlsx');

    }
}
?>
