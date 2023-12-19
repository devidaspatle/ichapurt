<?php

namespace App\Http\Controllers;
use App\Jodi;
use App\Category;
use Illuminate\Http\Request;



class ReportjodiController extends Controller
{
    
    public function index()
    {
        $jodis = Jodi::query()
        ->where('category_name', '=',  $request->category_name)
        ->orderBy('id', 'DESC')->get();
        $categories = Category::all();
        return view('reportjodis.index',compact('jodis','categories'));
    }
    
    public function get_jodi_data(Request $request)
    {
        return  Excel::download(new JodiExport , 'jodis_report.xlsx');
    }
    
    public function filterByJodi(Request $request)
    {
        $categories = Category::all();
       $jodis = Jodi::where('category_name', '$request->category_name')->get();
        //dd($jodis);
        return view('reportjodis.index',compact('jodis','categories'));
         
    }
    
}
