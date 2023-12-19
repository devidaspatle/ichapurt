<?php

namespace App\Http\Controllers;

use App\Singleakata;
use Illuminate\Http\Request;
use App\Exports\SingleExport;
use Maatwebsite\Excel\Facades\Excel;


class SingleakataController extends Controller
{
     
    public function index()
    {
       $singleakatas = Singleakata::all();
      // $singleakatas = Singleakata::query()->orderBy('id', 'DESC')->get();
       return view('singleakatas.index',compact('singleakatas'));
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
        $singleakatas = Singleakata::find($id);
        return view('singleakatas.view', compact('singleakatas'));
    }

    public function edit(Jodi $jodi)
    {
        //
    }

   
    public function update(Request $request, Jodi $jodi)
    {
        //
    }

    public function destroy(Jodi $jodi)
    {
        //
    }
    
     public function get_single_data(Request $request)
    {
        return  Excel::download(new SingleExport , 'singles_report.xlsx');
    }
}
