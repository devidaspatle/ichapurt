<?php

namespace App\Http\Controllers;
use App\Bidhistory;
use Illuminate\Http\Request;

class BidhistoryController extends Controller
{
    public function index()
    {
        $bidhistorys = Bidhistory::all();
        return view('bidhistorys.index',compact('bidhistorys'));
    }
   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
         $bidhistorys = Bidhistory::find($id);
        return view('bidhistorys.view',compact('bidhistorys')); 
    }

    
    public function edit($id)
    {
        $bidhistory = Customer::find($id);
       
        return view('bidhistorys.edit', compact('bidhistory'));
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
