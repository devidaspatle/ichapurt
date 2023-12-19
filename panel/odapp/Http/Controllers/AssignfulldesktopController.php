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
use App\Desktop;
use App\Fulldesktop;
use App\Mouse;
use App\Keyboard;
use Illuminate\Http\Request;

class AssignfulldesktopController extends Controller
{
    public function index()
    {
        $fulldesktops = Fulldesktop::where('status','Y')->get();
        return view('assignfulldesktops.index',compact('fulldesktops'));
    }

    public function create()
    {
     
    }

    public function store(Request $request)
    {
         $status = 'Y';
         $products= Product::all();
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
         $mouses = Mouse::where('status', $status)->get();
         $keyboards = Keyboard::where('status', $status)->get();
         $productid = $request->input('productid');
         $productids =$productid;
         $productids = implode(',', $productid);
        
         $productdatas = explode(",", $productids);
        
         //$val = $productid; 
         foreach($productdatas as $val) 
         {
             $productiddd = $val;
             $product = new Product;
             $product->productId = $productiddd;
             $product->save();
         }
         $assignprot = 1;
         return view('assignfulldesktops.create',compact('assignprot','productids','products','locations','campus','monitors','keyboards','mouses','departments','offices','vendors','makes','models','rams','screens','slots','hdds','processors'));
        }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
            $cpu_serial_number = Fulldesktop::where('id', $val)->value('cpu_serial_number');
            $monitor_serial_number = Fulldesktop::where('id', $val)->value('monitor_serial_number');
            $keyboard_serial_number	 = Fulldesktop::where('id', $val)->value('keyboard_serial_number');
            $mouse_serial_number = Fulldesktop::where('id', $val)->value('mouse_serial_number');

            $cpu_code =  Desktop::where('serial_number', $cpu_serial_number)->value('id');
            $monitor_code = Monitor::where('serial_number', $monitor_serial_number)->value('id');
            $keyboard_code	 = Mouse::where('serial_number', $keyboard_serial_number)->value('id');
            $mouse_code = Keyboard::where('serial_number', $mouse_serial_number)->value('id');

            $product->department = $input['department'];
            $product->employee = $input['employee'];
            $product->employeeid = $input['employeeid'];
            $product->asset_type = 'Pairdesktop';
            $product->monitor_code = 'MON'.''.$monitor_code;
            $product->keyboard_code = 'KEY'.''.$keyboard_code;
            $product->mouse_code = 'MOU'.''.$mouse_code;
            $product->comment = $input['comment'];
            $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/' 
            .substr(strtoupper($product->office), 0, 3).'/'.$product->monitor_code.'/'.$product->keyboard_code.'/'.$product->mouse_code.'/0'.$val;
            
         $products = Product::where('productId',$val)->update(["asset_code" => $product->asset_code, "location" => $product->location,"campus" => $product->campus,"office" => $product->office,"department" => $input['department'],
          "employee" => $input['employee'],"employeeid" => $input['employeeid'],"asset_type" => 'Pairdesktop', "serial_number" => $cpu_serial_number,"monitor_code" =>$monitor_code,"keyboard_code" => $keyboard_code,
          "mouse_code" => $mouse_code,"comment" => $input['comment'],"updated_at" => now()]);

//die;
           $fulldesktops = Fulldesktop::where('id',$val)->update(["status" => 'N']);

         // $product->save();
        }

        return redirect()->route('assignfulldesktops.index')->with('message','College  has been updated successfully.');
    }
    public function destroy($id)
    {
        //
    }
}
