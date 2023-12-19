<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Make;
use App\Modeles;
use App\Asset;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;


class ProductwisesController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $makes = Make::all();
        $models = Modeles::all();
        $assets = Asset::all();

        //dd($models);
        return view('productwises.index',compact('products','makes','models','assets'));
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
    public function searchd(Request $request){
        $search = $request->input('asset_type');

        $products = Product::query()
            ->where('asset_type', 'LIKE', "%{$search}%")
            ->orWhere('model', 'LIKE', "%{$search}%")
            ->get();
        return  Excel::download(new ProductExport , 'search_products.xlsx');
    }
}
