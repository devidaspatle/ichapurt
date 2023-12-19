<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fund;
use App\Customer;

class FoundControllerer extends Controller
{
    public function index()
    {
        $funds = Fund::all();
        $customers = Customer::all();
        return view('funds.index',compact('funds','customers'));
    }

    public function create()
    {
        $funds = Fund::all();
        return view('funds.create',compact('funds'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'customerid'=>'required',
             'point'=>'required'
        ]);
        $formInput=$request->all();
       
        Fund::create($formInput);
        return redirect()->route('funds.index')->with('message','Customer Fund added successfully.');
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
        //
    }
}
