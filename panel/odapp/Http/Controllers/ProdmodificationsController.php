<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProdmodificationsController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('prodmodifications.index',compact('products'));
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

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
