<?php

namespace App\Http\Controllers;

use App\Fundrequest;

use App\Customer;
use Illuminate\Http\Request;

class FundrequestController extends Controller
{
    public function index()
    {
        $fundrequests = Fundrequest::all();
        $customers = Customer::all();
        return view('fundrequests.index',compact('fundrequests','customers'));
    }

    public function create()
    {
          $fundrequests = Fundrequest::all();
          $customers = Customer::all();
        return view('fundrequests.create',compact('fundrequests','customers'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'customerId'=>'required',
            'point'=>'required'
        ]);
        $formInput=$request->all();
        Fundrequest::create($formInput);
        return redirect()->route('fundrequests.index')->with('message','Fund Requests added successfully.');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $fundrequests = Fundrequest::find($id);
        $customers = Customer::all();
        return view('fundrequests.edit', compact('fundrequests','customers'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'customerId'=>'required',
            'pay_point'=>'required'
          ]);

        $fundrequests = Fundrequest::find($id);
        $fundrequests->customerId = $request->get('customerId');
        $fundrequests->pay_point = $request->get('pay_point');
        $fundrequests->updated_at = now();
        $fundrequests->currentStatus = 'Paid';
        $fundrequests->save();
        return redirect('/fundrequests')->with('success', 'Fund Requests  has been updated Successfully');
    }

    public function destroy($id)
    {
        $fundrequests = Fundrequest::find($id);
        $fundrequests->delete();
        return redirect('/fundrequests')->with('success', 'Fund Requests  has been deleted Successfully');
    }
}