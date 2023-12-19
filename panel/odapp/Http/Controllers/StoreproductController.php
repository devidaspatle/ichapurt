<?php

namespace App\Http\Controllers;
use App\Storeproduct;
use App\Exports\StoreproductExport;
use App\Imports\BulkImport;
use Illuminate\Http\Request;
use App\Vendor;
use App\Make;
use App\Modeles;
use App\Ram;
use App\Screen;
use App\Slot;
use App\Hdd;
use App\Processor;
use App\Asset;
use Maatwebsite\Excel\Facades\Excel;

class StoreproductController extends Controller
{
    public function create()
    {

         $storeproducts = Storeproduct::all();
         return view('storeproducts.create')->with(compact(['storeproducts']));
    }
      

    public function index()
    {
        $assets = Asset::all();
        $storeproducts = Storeproduct::all();
        $desktops = Desktop::all();
        return view('storeproducts.index',compact('storeproducts','assets'));
    }

    public function show($id)
    {
        $storeproducts = Storeproduct::findOrFail($id);
        //$countrys = \DB::table('tbl_country')->get();
        //$states = \DB::table('tbl_state')->get();
        return view('storeproducts.view', compact('storeproducts'));
    }

    public function edit($id)
    {
        $vendors = Vendor::all();
        $makes = Make::all();
        $models = Modeles::all();
        $rams = Ram::all();
        $screens = Screen::all();
        $slots = Slot::all();
        $hdds = Hdd::all();
        $assets = Asset::all();
        $processors = Processor::all();
        $storeproducts = Storeproduct::findOrFail($id);
        return view('storeproducts.edit', compact('vendors','makes','models','rams','screens','slots','hdds','assets','processors','storeproducts'));
    }

    public function update(Request $request, $id)
    { 
          $product = Storeproduct::find($id);
          $product->labname = $request->get('labname');
          $product->asset_type = $request->get('asset_type');
          $product->make = $request->get('make');
          $product->model = $request->get('model');
          $product->serial_number = $request->get('serial_number');
          $product->processor = $request->get('processor');
          $product->ram = $request->get('ram');
          $product->hdd = $request->get('hdd');
          $product->screen_size = $request->get('screen_size');
          $product->slot = $request->get('slot');
          $product->power_backup = $request->get('power_backup');
          $product->vendor = $request->get('vendor');
          $product->purchase_date = $request->get('purchase_date');
          $product->warranty = $request->get('warranty');
          $product->comment = $request->get('comment');
          $product->save();
        
        return redirect()->route('storeproducts.index')->with('message','Product  has been updated successfully.');
    }

    public function destroy($id)
    {
        $storeproduct = Storeproduct::findOrFail($id);
        $storeproduct->delete();
        return redirect()->back();
    }

    public function importExportView()
    {
       return view('importexport');
    }
    public function import() 
    {
        Excel::import(new BulkImport,request()->file('file'));
           
        return back();
    }

    public function get_store_products_data ()
    {
        return  Excel::download(new StoreproductExport , 'store_products.xlsx');
    }
}
