<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productexprot;
use App\Vendor;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Screen;
use App\Slot;
use App\Hdd;
use App\Processor;
use App\Asset;
use App\Exports\StoreproductExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductexprotController extends Controller
{

    public function index()
    {
        $products = Productexprot::all();
        return view('productexpts.index',compact('products'));
    }

    public function create()
    {
         $products = Productexprot::all();
        //  $locations = Location::all();
        //  $campus = Campus::all();
        //  $departments = Department::all();
        //  $offices = College::all();
         $vendors = Vendor::all();
         $makes = Make::all();
         $models = Modeles::all();
         $rams = Ram::all();
         $screens = Screen::all();
         $slots = Slot::all();
         $hdds = Hdd::all();
         $assets = Asset::all();
         $processors = Processor::all();

        return view('productexpts.create',compact('products','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));
    }


    public function store(Request $request)
    {
        Productexprot::query()->delete();
        $formInput=$request->all();
        Productexprot::create($formInput);
        return  Excel::download(new StoreproductExport , 'product_format.xlsx');
    }


    public function show($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function export()
    {
        $assets = Asset::all();
       return view('productexpts.edit',compact('assets'));
    }

}
