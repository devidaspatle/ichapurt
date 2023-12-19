<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundhistoryControllerer extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }

    public function create()
    {
          $customers = Customer::all();
        return view('customers.create',compact('customers'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'mobile'=>'required',
            'password'=>'required',
            'cpassword'=>'required'
        ]);
        $formInput=$request->all();
        Customer::create($formInput);
        return redirect()->route('customers.index')->with('message','Customer added successfully.');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customers = Customer::find($id);
       
        return view('customers.edit', compact('customers'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'mobile'=>'required'
          ]);

        $customers = Customer::find($id);
        $customers->name = $request->get('name');
        $customers->mobile = $request->get('mobile');
        $customers->password = $request->get('password');
       
        $customers->save();
        return redirect('/customers')->with('success', 'Customer has been updated Successfully');
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        return redirect('/customers')->with('success', 'Customer has been deleted Successfully');
    }
}