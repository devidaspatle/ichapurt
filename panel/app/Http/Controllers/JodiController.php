<?php

namespace App\Http\Controllers;

use App\Jodi;
use Illuminate\Http\Request;
use App\Exports\JodiExport;
use Maatwebsite\Excel\Facades\Excel;


class JodiController extends Controller
{
    
    public function index()
    {
        $jodis = Jodi::all();
        //$jodis = Jodi::query()->orderBy('id', 'DESC')->get();
        return view('jodis.index',compact('jodis'));
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
       $jodis = Jodi::find($id);
       return view('jodis.view', compact('jodis'));
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
    
    public function get_jodi_data(Request $request)
    {
        return  Excel::download(new JodiExport , 'jodis_report.xlsx');
    }
    
}
