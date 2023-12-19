<?php

namespace App\Http\Controllers;
use App\Banjaccount;
use App\Customer;
use Illuminate\Http\Request;

class BanjaccountController extends Controller
{
     public function index()
    {
        $banjaccounts = Banjaccount::all();
        $customers = Customer::all();
        return view('banjaccounts.index',compact('banjaccounts'));
    }
   
    public function create()
    {
        $customers = Customer::all();
        $banjaccounts = Banjaccount::all();
      return view('banjaccounts.create')->with(compact('banjaccounts','customers'));
    }

   
    public function store(Request $request)
    {
         $this->validate($request,[
            'customerid'=>'required',
            'accountno'=>'required',
            'bankname'=>'required',
            'ifsc_code'=>'required',
            'acholder'=>'required',
        ]);
        $formInput=$request->all();
        Banjaccount::create($formInput);
        return redirect()->route('banjaccounts.index')->with('message','Bank Details added successfully.');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customers = Customer::all();
        $banjaccounts = Banjaccount::find($id);
       
        return view('banjaccounts.edit', compact('banjaccounts','customers'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'customerid'=>'required',
            'accountno'=>'required',
            'bankname'=>'required',
            'ifsc_code'=>'required',
            'acholder'=>'required'
          ]);

        $banjaccounts = Banjaccount::find($id);
        $banjaccounts->customerid = $request->get('customerid');
        $banjaccounts->accountno = $request->get('accountno');
        $banjaccounts->bankname = $request->get('bankname');
        $banjaccounts->ifsc_code = $request->get('ifsc_code');
        $banjaccounts->acholder = $request->get('acholder');
       
        $banjaccounts->save();
        return redirect('/banjaccounts')->with('success', 'Banjaccount has been updated Successfully');
    }

    public function destroy($id)
    {
        $banjaccounts = Banjaccount::find($id);
        $banjaccounts->delete();
        return redirect('/banjaccounts')->with('success', 'Banjaccount has been deleted Successfully');
    }
}
