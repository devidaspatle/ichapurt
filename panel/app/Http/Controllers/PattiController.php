<?php

namespace App\Http\Controllers;

use App\Patti;
use Illuminate\Http\Request;
use App\Exports\PattiExport;
use Maatwebsite\Excel\Facades\Excel;

class PattiController extends Controller
{
     
    public function index()
    {
        $pattis = Patti::all();
        //$pattis = Patti::query()->orderBy('id', 'DESC')->get();
        return view('pattis.index',compact('pattis'));
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
        $pattis = Patti::find($id);
        return view('pattis.show', compact('pattis'));
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
    
    public function get_patti_data(Request $request)
    {
        return  Excel::download(new PattiExport, 'patti_report.xlsx');
    }
}
