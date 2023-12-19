<?php

namespace App\Http\Controllers;

use App\Winhistory;
use Illuminate\Http\Request;

class WinhistoryController extends Controller
{
    public function index()
    {
        $winhistorys = Winhistory::all();
        return view('winhistorys.index',compact('winhistorys'));
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
}
