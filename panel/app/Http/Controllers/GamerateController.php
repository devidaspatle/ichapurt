<?php

namespace App\Http\Controllers;
use App\Gamerate;
use Illuminate\Http\Request;

class GamerateController extends Controller
{
     public function index()
    {
        $gamerates = Gamerate::all();
        return view('gamerates.index',compact('gamerates'));
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
