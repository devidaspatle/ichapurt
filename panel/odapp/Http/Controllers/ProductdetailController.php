<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductdetailController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('productexports.index',compact('products'));
    }
}
