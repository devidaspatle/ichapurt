<?php
namespace App\Http\Controllers;
use App\Location;
use App\Campus;
use App\Department;
use App\College;
use App\Vendor;
use App\Make;
use App\Modeles;
use App\Headphone;
use App\Product;

use Illuminate\Http\Request;

class AssignheadphoneController extends Controller
{
    public function index()
    {
        $headphones = Headphone::where('status','Y')->get();
        return view('assignheadphones.index',compact('headphones'));
    }

    public function create() {
        // Form validation
        // $this->validate($request,[
        //     'location' => 'required',
        //     'campus' => 'required',
        //     'office'=>'required',
        //     'department'=>'required',
        //     'employee' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        //     'employeeid'=>'required',
        //     'comment' => 'required'
        //  ]);
        //  $formInput=$request->all();
        //  dd($formInput);
        //  Headphone::create($formInput);
        //  return redirect()->route('headphones.create');
    }

    public function store(Request $request)
    {
         $status = 'Y';
         $locations = Location::all();
         $campus = Campus::all();
         $departments = Department::all();
         $offices = College::all();
         $vendors = Vendor::all();
         $makes = Make::all();
         $models = Modeles::all();
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
         return view('assignheadphones.create',compact('assignprot','productids','locations','campus','departments','offices','vendors','makes','models'));
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
            $serial_number = '1222';

            $product->department = $input['department'];
            $product->employee = $input['employee'];
            $product->employeeid = $input['employeeid'];
            $product->comment = $input['comment'];
            $product->asset_code = substr(strtoupper($product->location), 0, 3).'/'.substr(strtoupper($product->campus), 0, 3).'/' 
            .substr(strtoupper($product->office), 0, 3).'/HEA0'.$val;
            
          $product = Product::where('productId',$val)->update(["asset_code" => $product->asset_code, "location" => $product->location,"campus" => $product->campus,"office" => $product->office,"department" => $input['department'],
          "employee" => $input['employee'],"employeeid" => $input['employeeid'],"asset_type" => 'Headphone',"serial_number" => $serial_number,
          "comment" => $input['comment'],"updated_at" => now()]);

          $headphones = Headphone::where('id',$val)->update(["status" => 'N']);

         // $product->save();
        }
        return redirect()->route('assignheadphones.index')->with('message','Product  has been updated successfully.');
    }
    public function destroy($id)
    {
        //
    }
}
