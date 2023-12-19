<?php

namespace App\Http\Controllers;
use App\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function index()
    {
        $processors = Processor::all();
        return view('processors.index',compact('processors'));
    }

    public function create()
    {
        $processor = Processor::all();
        return view('processors.create')->with(compact(['processor']));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Processor::create($formInput);
        return redirect()->route('processors.index')->with('message','Processor added successfully.');
    }

    public function edit($id)
    {
        $processor = Processor::findOrFail($id);
        return view('processors.edit', compact('processor'));
    }

    public function update(Request $request, $id)
    {
        $processor = Processor::find($id);
        $processor->name = $request->get('name');
        $processor->updated_at = date('Y-m-d H:i:s');
        $processor->save();
        return redirect()->route('processors.index')->with('message','Processor  has been updated successfully.');
    }

    public function destroy($id)
    {
        $processor = Processor::findOrFail($id);
        $processor->delete();
        return redirect()->back();
    }
}
