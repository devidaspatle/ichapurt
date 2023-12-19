<?php

namespace App\Http\Controllers;
use App\Location;
use App\Campus;
use App\College;
use App\Desktop;
use Illuminate\Http\Request;

class TransferdesktopController extends Controller
{
    public function index()
    {
        $desktops  = Desktop::where('status',  'Y')->where('office', NULL)->get();
        return view('transferdesktops.index',compact('desktops'));
    }
    
    public function store(Request $request)
    {
       
         $productid = $request->input('productid');
         $productids = implode(',', $productid);
        
         $productdatas = explode(",", $productids);
         $locations= Location::all();
         $campus = Campus::all();
         $offices = College::all();
         $assignprot = 1;
         return view('transferdesktops.create',compact('assignprot','productids','locations','campus','offices'));
        }

   


    public function update(Request $request)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
            $product = new Desktop;
            $product->location = Location::where('id',$input['location'])->value('name');
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            $product->office = College::where('id',$input['office'])->value('name');
            
          $product = Desktop::where('id',$val)->update(["location" => $product->location, "campus" => $product->campus,"campus" => $product->campus,"office" => $product->office,"updated_at" => now()]);
         
        }
        return redirect()->route('transferdesktops.index')->with('message','College  has been Assign successfully.');
    }

   

    public function destroy($id)
    {
        //
    }
}
