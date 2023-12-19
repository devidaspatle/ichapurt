<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    
    public function index()
    {
        $transfers = Transfer::all();
        return view('transfers.index',compact('transfers'));
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

  
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
