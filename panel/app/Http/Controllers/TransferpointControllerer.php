<?php

namespace App\Http\Controllers;
use App\Transferpoint;
use App\Customer;

use Illuminate\Http\Request;

class TransferpointControllerer extends Controller
{
    public function index()
    {
        $transferpoints = Transferpoint::all();
        $customers = Customer::all();
        return view('transferpoints.index',compact('transferpoints','customers'));
    }

    public function create()
    {
          $transferpoints = Transferpoint::all();
          $customers = Customer::all();
        return view('transferpoints.create',compact('transferpoints','customers'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'customerId'=>'required',
            'pay_point'=>'required'
        ]);
        $formInput=$request->all();
        Transferpoint::create($formInput);
        return redirect()->route('transferpoints.index')->with('message','Transfer Point added successfully.');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $transferpoints = Transferpoint::find($id);
        $customers = Customer::all();
        return view('transferpoints.edit', compact('transferpoints','customers'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'customerId'=>'required',
            'pay_point'=>'required'
          ]);

        $transferpoints = Transferpoint::find($id);
        $transferpoints->customerId = $request->get('customerId');
        $transferpoints->pay_point = $request->get('pay_point');
        $transferpoints->updated_at = now();
        $transferpoints->currentStatus = 'Paid';
        $transferpoints->save();
        return redirect('/transferpoints')->with('success', 'Transfer Point  has been updated Successfully');
    }

    public function destroy($id)
    {
        $transferpoints = Transferpoint::find($id);
        $transferpoints->delete();
        return redirect('/transferpoints')->with('success', 'Transfer point  has been deleted Successfully');
    }
}