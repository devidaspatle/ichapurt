<?php

namespace App\Http\Controllers;
use App\Projector;
use App\Asset;
use App\Make;
use App\Modeles;
use App\Processor;
use App\Desktop;
use App\Imports\ProjectorImport;
use App\Exports\ProjectorExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ProjectorController extends Controller
{
     public function index()
    {
        $projectors = Projector::all();
        return view('projectors.index',compact('projectors'));
    }

    public function create()
    {
        $projectors = Projector::all();
        $assets = Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $processors = Processor::all();
        return view('projectors.create')->with(compact(['projectors','assets','makes','models','processors']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'make'=>'required',
            'model'=>'required',
            'serial_number'=>'required',
            'txtcondition'=>'required'

        ]);
        $formInput=$request->all();
        Projector::create($formInput);
        return redirect()->route('projectors.index')->with('message','Projector added successfully.');
    }

    public function edit($id)
    {
        $assets= Asset::all();
        $makes = Make::all();
        $models = Modeles::all();
        $projector = Projector::findOrFail($id);
      return view('projectors.edit',compact( 'projector','makes','models'));
    }

   public function update(Request $request, $id)
    {
        $projector = Projector::find($id);
        $projector->make = $request->get('make');
        $projector->model = $request->get('model');
        $projector->serial_number = $request->get('serial_number');
        $projector->txtcondition = $request->get('txtcondition');
        $projector->save();

        return redirect()->route('projectors.index')->with('message','Projector has been updated successfully.');
    }
    public function show($id)
    {
        $projectors = Projector::findOrFail($id);
        return view('projectors.view',compact('projectors'));
    }
    public function destroy($id)
    {
        $projector = Projector::findOrFail($id);
        $projector->delete();
        return redirect()->back();
    }

    public function projectorImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xlsx,xls' 
           ]);
        Excel::import(new ProjectorImport, $request->file('file')->store('temp'));
        return back();
    }

     public function get_projector_data()
    {
        return  Excel::download(new ProjectorExport, 'projectors.xlsx');
    }
}
