<?php

namespace App\Http\Controllers;

use App\Modeles;
use App\Make;
use Illuminate\Http\Request;

class ModelesController extends Controller
{
      public function index()
    {
        $modeles = Modeles::all();
        $makes = Make::all();
        return view('modeles.index',compact('modeles','makes'));
    }

    public function create()
    {
        $modeles = Modeles::all();
        $makes = Make::all();
        return view('modeles.create')->with(compact(['modeles']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'make'=>'required',
        ]);
        $formInput=$request->all();
        Modeles::create($formInput);
        return redirect()->route('modeles.index')->with('message','Model added successfully.');
    }

    public function edit($id)
    {
        $makes = Make::all();
        $modele = Modeles::findOrFail($id);
        return view('modeles.edit', compact('modele','makes'));
    }

    public function update(Request $request,  $id)
    {
        $modele = Modeles::findOrFail($id);
        $modele->make = $request->get('make');
        $modele->model = $request->get('model');
        $modele->updated_at = date('Y-m-d H:i:s');
        $modele->save();
        return redirect()->route('modeles.index')->with('message','Modele  has been updated successfully.');
    }

    public function destroy($id)
    {
        $modeles = Modeles::findOrFail($id);
        $modeles->delete();
        return redirect()->back();
    }
}
