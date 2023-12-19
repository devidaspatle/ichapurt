<?php

namespace App\Http\Controllers;

use App\Modification;
use Illuminate\Http\Request;

class ModificationController extends Controller
{
   
    public function index()
    {
        $modifications = Modification::all();
        return view('modifications.index',compact('modifications'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Modification $modification)
    {
        //
    }

   
    public function edit(Modification $modification)
    {
        //
    }

    public function update(Request $request, Modification $modification)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
