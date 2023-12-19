<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class RequestdeactiveController extends Controller
{
    public function index()
    {
        $products = Product::with(['products' => function($query) { $query->where('currentStatus','=', 0); }])->where('currentStatus', 0)->get();
     
        return view('requesttransfers.index',compact('products'));
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
