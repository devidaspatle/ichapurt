<?php

namespace App\Http\Controllers;
use App\Category;
use App\Singleakata;
use Illuminate\Http\Request;
use App\Exports\SingleExport;
use Maatwebsite\Excel\Facades\Excel;


class ReportsingleController extends Controller
{
    
    public function index(Request $request)
    {
         $singles = Singleakata::query()
        ->where('category_name', '=',  $request->category_name)
        ->orderBy('id', 'DESC')->get();
        $categories = Category::all();
        return view('reportsingles.index',compact('singles','categories'));
    }
    
    public function get_single_data(Request $request)
    {
        return  Excel::download(new SingleExport , 'singles_report.xlsx');
    }
    
    public function filterByProperty(Request $request)
    {
        $categories = Category::all();
        $singles = Singleakata::query()
        ->where('category_name', '=',  $request->category_name)->get();
        //$registers = Register::where('created_at', date('Y-m-d', strtotime($request->stdate)))->get();
        //dd($registers);
        //die;
        return view('reportsingles.index',compact('singles','categories'));

    }
}
