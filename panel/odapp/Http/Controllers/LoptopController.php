<?php

namespace App\Http\Controllers;

use App\Laptop;
use App\Asset;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Hdd;
use App\Processor;
use App\Desktop;
use App\Imports\LaptopImport;
use App\Exports\LaptopExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class LoptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index',compact('laptops'));
    }

    public function create()
    {
        $laptops = Laptop::all();
        $assets = Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $hdds = Hdd::all();
        $processors = Processor::all();

        return view('laptops.create')->with(compact(['assets','makes','models','rams','hdds','processors']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make' => 'required|string|max:20',
            'model' =>'required',
            'serial_number' =>'required',
            'processor' =>'required',
            'ram' =>'required',
            'hdd' =>'required',
            'txtcondition'=>'required'
        ]);
        $formInput=$request->all();
        Laptop::create($formInput);
    return redirect()->route('laptops.index')->with('message','Laptop added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $hdds = Hdd::all();
        $processors = Processor::all();
        $laptop  = Laptop::findOrFail($id);
    return view('laptops.edit',compact( 'laptop','makes','models','rams','hdds','processors'));
    }

   public function update(Request $request, $id)
    {

        $laptop = Laptop::find($id);
        $laptop->make = $request->get('make');
        $laptop->model = $request->get('model');
        $laptop->serial_number = $request->get('serial_number');
        $laptop->ram = $request->get('ram');
        $laptop->hdd = $request->get('hdd');
        $laptop->processor = $request->get('processor');
        $laptop->txtcondition = $request->get('txtcondition');
        $laptop->save();

        return redirect()->route('laptops.index')->with('message','Laptop  has been updated successfully.');
    }

    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();
        return redirect()->back();
    }
    public function show($id)
    {
        $laptops = Laptop::findOrFail($id);
        //dd($products);
        return view('laptops.view',compact('laptops'));
    }


    public function laptopImport(Request $request)
    {   

        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new LaptopImport, $request->file('file')->store('temp'));
        return back();
    }

    public function get_laptop_data()
    {
        return  Excel::download(new LaptopExport, 'laptops.xlsx');
    }
}
