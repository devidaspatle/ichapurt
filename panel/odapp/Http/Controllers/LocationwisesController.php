<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\College;
use App\Campus;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class LocationwisesController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        $campus = Campus::all();
        $offices = College::all();
        return view('locationwises.index',compact('products','campus','offices'));
    }
    public function searches(Request $request){
        $campues = $request->input('campus_name');
        $officee = $request->input('office');

        $products = Product::query()
            ->where('campus', 'LIKE', "%{$campues}%")
            ->orWhere('office', 'LIKE', "%{$officee}%")
            ->get();

         return  Excel::download(new ProductExport , 'location_wise_products.xlsx');
    }
}
