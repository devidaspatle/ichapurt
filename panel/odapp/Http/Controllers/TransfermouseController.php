<?php

namespace App\Http\Controllers;
use App\Location;
use App\Campus;
use App\College;
use App\Mouse;
use Illuminate\Http\Request;

class TransfermouseController extends Controller
{
    public function index()
    {
        $mouses = Mouse::where('status',  'Y')->where('office', NULL)->get();
        return view('transfermouses.index',compact('mouses'));
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
         return view('transfermouses.create',compact('assignprot','productids','locations','campus','offices'));
        }

    public function update(Request $request)
    {
        $input = $request->all();
        $productid = $input['productid'];
        $productdatas = explode(",", $productid);

        foreach($productdatas as $val) 
        { 
            $product = new Mouse;
            $product->location = Location::where('id',$input['location'])->value('name');
            $product->campus = Campus::where('id',$input['campus'])->value('name');
            $product->office = College::where('id',$input['office'])->value('name');
            
          $product = Mouse::where('id',$val)->update(["location" => $product->location, "campus" => $product->campus,"campus" => $product->campus,"office" => $product->office,"updated_at" => now()]);
         
        }
        return redirect()->route('transfermouses.index')->with('message','College  has been Assign successfully.');
    }

   

    public function destroy($id)
    {
        //
    }
}
