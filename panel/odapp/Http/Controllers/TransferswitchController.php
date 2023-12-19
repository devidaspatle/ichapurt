<?php

namespace App\Http\Controllers;
use App\Location;
use App\Campus;
use App\College;
use App\Switchs;
use Illuminate\Http\Request;

class TransferswitchController extends Controller
{
    public function index()
    {
        $switchs = Switchs::where('status',  'Y')->where('office', NULL)->get();
        return view('transferswitchs.index',compact('switchs'));
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
         return view('transferswitchs.create',compact('assignprot','productids','locations','campus','offices'));
        }

    public function update(Request $request)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
            $product = new Switchs;
            $product->location = Location::where('id',$input['location'])->value('name');
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            $product->office = College::where('id',$input['office'])->value('name');
            
          $product = Switchs::where('id',$val)->update(["location" => $product->location, "campus" => $product->campus,"campus" => $product->campus,"office" => $product->office,"updated_at" => now()]);
         
        }
        return redirect()->route('transferswitchs.index')->with('message','College  has been Assign successfully.');
    }

   

    public function destroy($id)
    {
        //
    }
}
