<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walletsbal;
use App\Customer;

class WalletsbalController extends Controller
{
    public function index()
    {
        $walletsbals = Walletsbal::all();
        $customers = Customer::all();
        return view('walletsbals.index',compact('walletsbals','customers'));
    }

    public function create()
    {
        $walletsbals = Walletsbal::all();
        return view('walletsbals.create',compact('walletsbals'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'customerId'=>'required',
            'point'=>'required'
        ]);
        $formInput=$request->all();
        Walletsbal::create($formInput);
        return redirect()->route('walletsbals.index')->with('message','Paint  added successfully.');
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

   
    public function destroy($id)
    {
        //
    }
}
