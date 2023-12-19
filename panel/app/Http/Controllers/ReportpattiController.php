<?php

namespace App\Http\Controllers;

use App\Category;
use App\Patti;
use Illuminate\Http\Request;
use App\Exports\SingleExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportpattiController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $pattis = Patti::all();
        return view('reportpattis.index',compact('pattis','categories'));
    }
    
    public function get_patti_data(Request $request)
    {
        return  Excel::download(new PattiExport , 'pattis_report.xlsx');
    }
    
    public function filterByProperty(Request $request)
    {
         $categories = Category::all();
       $pattis = Patti::where('category_name', $request->category_name)->get();
        return view('reportpattis.index',compact('pattis','categories'));
    }
}
