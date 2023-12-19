<?php

namespace App\Http\Controllers;
use App\Product;
use App\Location;
use App\Campus;
use App\Department;
use App\College;
use App\Vendor;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Screen;
use App\Slot;
use App\Hdd;
use App\Processor;
use App\Asset;
use Illuminate\Http\Request;

class RequesttransferController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('requesttransfers.index',compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
         $formInput=$request->all();
        Product::create($formInput);
        return redirect()->route('products.index')->with('message','Product added successfully.');
    }

   
    public function show($id)
    {
        $products = Product::findOrFail($id);
        $locations = Location::all();
        $campus = Campus::all();
        $departments = Department::all();
        $offices = College::all();
        $vendors = Vendor::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $screens = Screen::all();
        $slots = Slot::all();
        $hdds = Hdd::all();
        $assets = Asset::all();
        $processors = Processor::all();
      
       return view('requesttransfers.edit',compact('products','locations','campus','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));  
    }

   
    public function edit($id)
    {
         $products = Product::findOrFail($id);
         $locations = Location::all();
         $campus = Campus::all();
         $departments = Department::all();
         $offices = College::all();
         $vendors = Vendor::all();
         $makes = Make::all();
         $models = Modeles::all();
         $rams = Ram::all();
         $screens = Screen::all();
         $slots = Slot::all();
         $hdds = Hdd::all();
         $assets = Asset::all();
         $processors = Processor::all();
       
        return view('requesttransfers.edit',compact('products','locations','campus','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));
    }

    public function update(Request $request, $id)
    {
        $formInput=$request->all();
        Product::create($formInput);
        return redirect()->route('requesttransfers.index')->with('message','Product added successfully.');
    }

    public function destroy($id)
    {
        $requesttransfers = Campus::findOrFail($id);
        $requesttransfers->delete();
        return redirect()->back();
    }
}
