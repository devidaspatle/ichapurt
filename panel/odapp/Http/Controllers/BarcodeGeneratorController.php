<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BarcodeGeneratorController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('barcodes.index',compact('products'));
    }

    public function imgbarcode()
    {
        return view('img-barcode');
    }

    public function searchs(Request $request){
        $search = $request->input('search');
      
        $products = Product::query()
            ->where('asset_code', 'LIKE', "%{$search}%")
            ->orWhere('purchase_date', 'LIKE', "%{$search}%")
            ->get();
        return view('barcodes.index', compact('products'));
    }
}
