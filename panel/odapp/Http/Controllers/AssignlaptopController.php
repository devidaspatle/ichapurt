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
use App\Product;
use App\Monitor;
use App\Laptop;
use App\Mouse;
use App\Keyboard;
use Illuminate\Http\Request;

class AssignlaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::where('status','Y')->get();
        return view('assignlaptops.index',compact('laptops'));
    }

    
    public function create()
    {
     
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
         return view('assignlaptops.create',compact('assignprot','productids','products','locations','campus','monitors','keyboards','mouses','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors'));
        }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
            $product = new Product;
            $product->location = Location::where('id',$input['location'])->value('name');
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            $product->office = College::where('id',$input['office'])->value('name');
            $serial_number = Laptop::where('id', $val)->value('serial_number');

            $product->department = $input['department'];
            $product->employee = $input['employee'];
            $product->employeeid = $input['employeeid'];
            $product->asset_type = 'Laptop';
            //$product->monitor_code = 'MON'.''.$input['monitor_code'];
            //$product->keyboard_code = 'KEY'.''.$input['keyboard_code'];
            //$product->mouse_code = 'MOU'.''.$input['mouse_code'];
            $product->comment = $input['comment'];
             $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/' 
            .substr(strtoupper($product->office), 0, 3).'/'.$val;
            
          $product = Product::where('productId',$val)->update(["asset_code" => $product->asset_code, "location" => $product->location,"campus" => $product->campus,"office" => $product->office,"department" => $input['department'],
          "employee" => $input['employee'],"employeeid" => $input['employeeid'],"asset_type" => 'Laptop' ,"serial_number" => $serial_number,
          "comment" => $input['comment'],"updated_at" => now()]);

          $laptops = Laptop::where('id',$val)->update(["status" => 'N']);

          //$storeproduct = Storeproduct::where('id',$val)->update(["status" => 'N']);
          //$storemonitor = Monitor::where('id',$input['monitor_code'])->update(["status" => 'N']);
         // $storekeyboard = Keyboard::where('id',$input['keyboard_code'])->update(["status" => 'N']);
          //$storemouse = Mouse::where('id',$input['mouse_code'])->update(["status" => 'N']);
          
         // $product->save();
        }
        return redirect()->route('assignlaptops.index')->with('message','College  has been updated successfully.');
    }

    public function transfer(Request $request, $id)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
            $product = new Product;
            $product->location = Location::where('id',$input['location'])->value('name');
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            $product->office = College::where('id',$input['office'])->value('name');
            $serial_number = Laptop::where('id', $val)->value('serial_number');

            $product->department = $input['department'];
            $product->employee = $input['employee'];
            $product->employeeid = $input['employeeid'];
            $product->asset_type = 'Laptop';
            //$product->monitor_code = 'MON'.''.$input['monitor_code'];
            //$product->keyboard_code = 'KEY'.''.$input['keyboard_code'];
            //$product->mouse_code = 'MOU'.''.$input['mouse_code'];
            $product->comment = $input['comment'];
             $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/' 
            .substr(strtoupper($product->office), 0, 3).'/'.$val;
            
          $product = Product::where('productId',$val)->update(["asset_code" => $product->asset_code, "location" => $product->location,"campus" => $product->campus,"office" => $product->office,"department" => $input['department'],
          "employee" => $input['employee'],"employeeid" => $input['employeeid'],"asset_type" => 'Laptop' ,"serial_number" => $serial_number,
          "comment" => $input['comment'],"updated_at" => now()]);

          $laptops = Laptop::where('id',$val)->update(["status" => 'N']);

          //$storeproduct = Storeproduct::where('id',$val)->update(["status" => 'N']);
          //$storemonitor = Monitor::where('id',$input['monitor_code'])->update(["status" => 'N']);
         // $storekeyboard = Keyboard::where('id',$input['keyboard_code'])->update(["status" => 'N']);
          //$storemouse = Mouse::where('id',$input['mouse_code'])->update(["status" => 'N']);
          
         // $product->save();
        }
        return redirect()->route('assignlaptops.index')->with('message','College  has been updated successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
