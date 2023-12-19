<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\Country;
use App\State;
use App\Exports\VendorExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VendorController extends Controller
{
   
    public function index()
    {

        $vendors = Vendor::all();
        return view('vendors.index',compact('vendors'));
    }
  public function create()
    {
        $vendors = Vendor::all();
        $countrys =  Country::all();
        $states =  State::all();
        //$users = DB::table('users')->get();
        return view('vendors.create')->with(compact(['vendors','states','countrys']));
    }

   

    public function store(Request $request)
    {
        //echo "hello";
        $this->validate($request,[
            'vendor_name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address'=>'required'
        ]);
        $formInput=$request->all();
        //print_r($formInput);
        //die;
        Vendor::create($formInput);
        return redirect()->route('vendors.index')->with('message','Vendor added successfully.');
    }

    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);
     
        return view('vendors.view', compact('vendor','states','countrys'));
    }

    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        $countrys =  Country::all();
        $states =  State::all();
        return view('vendors.edit', compact('vendor','states','countrys'));
    }

    public function update(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        $vendor->vendor_name = $request->get('vendor_name');
        $vendor->mobile = $request->get('mobile');
        $vendor->email = $request->get('email');
        $vendor->country = $request->get('country');
        $vendor->state = $request->get('state');
        $vendor->city = $request->get('city');
        $vendor->address = $request->get('address');
        $vendor->currentStatus = 'Y';
        $vendor->updated_at = date('Y-m-d H:i:s');
        $vendor->save();
     
        return redirect()->route('vendors.index')->with('message','Vendor  has been updated successfully.');
    }

    
    

    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect()->back();
    }

    public function get_vendor_data()
    {
        return  Excel::download(new VendorExport , 'vendor.xlsx');
    }
}
