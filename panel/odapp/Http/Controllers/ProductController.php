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
use App\Storeproduct;
use App\Monitor;
use App\Desktop;
use App\Mouse;
use App\Keyboard;
use DataTables;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    public function searchResult($search)
    {
        $products = Product::where('serial_number', 'LIKE', $search)->get();
        return view('products.index',compact('products'));
    }



    public function getCampus(Request $request)
    {
        $data['campus'] = Campus::where("location_id",$request->location_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }

    public function getOffices(Request $request)
    {
        $data['offices'] = College::where("campus_id",$request->campus_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }

    public function getModel(Request $request)
    {
        $data['models'] = Modeles::where("make",$request->make_id)
                    ->get(["model","id"]);
        return response()->json($data);
    }

    public function create()
    {
        $products = Product::all();
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
        // dd($products );

        return view('products.create',compact('products','locations','campus','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));
    }

    public function store(Request $request)
    {
        $formInput = 'PROD'.''.rand('10','9999999');
        $formInput=$request->all();
        Product::create($formInput);
        return redirect()->route('products.index')->with('message','Product added successfully.');
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
       
        //dd($products);
        return view('products.view',compact('products'));
    }

    public function edit($id)
    {
        $status = 'Y';
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
        $product = Product::findOrFail($id);
        $monitor_code = $product->monitor_code;
	    $keyboard_code = $product->keyboard_code;
	    $mouse_code = $product->mouse_code;
        $monitors = Monitor::where('id', $monitor_code)->get();
        $mouses = Mouse::where('id', $mouse_code)->get();
        $keyboards = Keyboard::where('id', $keyboard_code)->get();
       

        return view('products.edit',compact('product','locations','campus','monitors','keyboards','mouses','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));
    }

    public function update(Request $request, $id)
    {

          $product = Product::find($id);

          $product->location = $request->get('location');
          $product->campus = $request->get('campus');
          $product->office = $request->get('office');
          $product->department = $request->get('department');
          $product->employee = $request->get('employee');
          $product->employeeid = $request->get('employeeid');
          $product->comment = $request->get('comment');
          $product->save();

        //$formInput=$request->all();
        //Product::create($formInput);
        return redirect()->route('products.index')->with('message','Product  has been updated successfully.');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
    public function get_products_data ()
    {
        return  Excel::download(new ProductExport , 'products.xlsx');
    }

    public function updateStatus(Request $request)
    {
        $product = product::find($request->product_id);
        $product->status = $request->status;
        $product->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}


