<?php

namespace App\Http\Controllers;
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
use App\Assignprots;
use App\Product;
use App\Storeproduct;
use App\Monitor;
use App\Desktop;
use App\Mouse;
use App\Keyboard;
use App\Laptop;
use Illuminate\Http\Request;

class AssignprotsController extends Controller
{
   
    public function index()
    {
        $desktops = Desktop::where('status','Y')->get();
        $laptops = Laptop::where('status','Y')->get();
        $products = Product::all();
        return view('assignprots.index',compact('products','desktops','laptops'));
    }

     public function create(Request $request)
    {
      
         $status = 'Y';
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
         $monitors = Monitor::where('status', $status)->get();
         $keyboards = Mouse::where('status', $status)->get();
         $mouses = Keyboard::where('status', $status)->get();
        return view('assignprots.create',compact('products','locations','campus','monitors','keyboards','mouses','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));

    }

    public function store(Request $request)
    {
         $status = 'Y';
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
         $monitors = Monitor::where('status', $status)->get();
         $keyboards = Mouse::where('status', $status)->get();
         $mouses = Keyboard::where('status', $status)->get();
         $productid = $request->input('productid');
         $productids = implode(',', $productid);
         $productdatas = explode(",", $productids);
        
         foreach($productdatas as $val) 
         {
             $productiddd = $val;
             $product = new Product;
             $product->productId = $productiddd;
             $product->save();
         }
         $assignprot = 1;
         return view('assignprots.create',compact('assignprot','productids','products','locations','campus','monitors','keyboards','mouses','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors','assets'));
        }


    public function storeproduct(Request $request)
    {

          $productes = Product::latest('id')->first(); 
          $product_code = $productes->id;
          $input = $request->all();
          $product = new Product;
          $product->location = $input['location'];
          $product->campus = $input['campus'];
          $product->office = $input['office'];
          $product->department = $input['department'];
          $product->employee = $input['employee'];
          $product->employeeid = $input['employeeid'];
          $product->asset_type = $input['asset_type'];
          $product->monitor_code = 'MON'.''.$input['monitor_code'];
          $product->keyboard_code = 'KEY'.''.$input['keyboard_code'];
          $product->mouse_code = 'MOU'.''.$input['mouse_code'];
          $product->comment = $input['comment'];
          $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/'
          .substr(strtoupper($product->office), 0, 3).'/'.$product->monitor_code.'/'.$product->keyboard_code.'/'.$product->mouse_code.'/'.'00'.$product_code;
        
          $product->save();
      
        return redirect()->route('products.index')->with('message','Product added successfully.');
    }

    public function show($id)
    {
        $assignprots = Storeproduct::findOrFail($id);
       
        return view('assignprots.view', compact('assignprots'));
    }

    public function edit($id)
    {
        $storeproducts = Storeproduct::findOrFail($id);
        return view('storeproducts.edit', compact('storeproducts'));
    }
    public function update(Request $request, Assignprots $assignprots)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
           
            $product = new Product;
            //$productes = Product::latest('id')->first(); 
            //$product_code = $productes->id;

            //$product->locationid = $input['location'];
            $product->location = Location::where('id',$input['location'])->value('name');
            //$product->campusid = $input['campus'];
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            //$product->officeid = $input['office'];
            $product->office = College::where('id',$input['office'])->value('name');

            $product->department = $input['department'];
            $product->employee = $input['employee'];
            $product->employeeid = $input['employeeid'];
            $product->asset_type = $input['asset_type'];
            $product->monitor_code = 'MON'.''.$input['monitor_code'];
            $product->keyboard_code = 'KEY'.''.$input['keyboard_code'];
            $product->mouse_code = 'MOU'.''.$input['mouse_code'];
            $product->comment = $input['comment'];
             $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/' 
            .substr(strtoupper($product->office), 0, 3).'/'.$product->monitor_code.'/'.$product->keyboard_code.'/'.$product->mouse_code.'/00'.$val;
            
          $product = Product::where('productId',$val)->update(["asset_code" => $product->asset_code, "location" => $product->location,"campus" => $product->campus,"office" => $product->office,"department" => $input['department'],
          "employee" => $input['employee'],"employeeid" => $input['employeeid'],"asset_type" => $input['asset_type'] ,"monitor_code" => $input['monitor_code'],"keyboard_code" => $input['keyboard_code'],
          "mouse_code" => $input['mouse_code'],"comment" => $input['comment']]);

          $desktops = Desktop::where('id',$val)->update(["status" => 'N']);

          //$storeproduct = Storeproduct::where('id',$val)->update(["status" => 'N']);
          $storemonitor = Monitor::where('id',$input['monitor_code'])->update(["status" => 'N']);
          $storekeyboard = Keyboard::where('id',$input['keyboard_code'])->update(["status" => 'N']);
          $storemouse = Mouse::where('id',$input['mouse_code'])->update(["status" => 'N']);
          
         // $product->save();
        }
        return redirect()->route('assignprots.index')->with('message','College  has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignprots  $assignprots
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
   
}
