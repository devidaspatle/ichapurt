<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;
use DataTables; 

class AssetController extends Controller
{
   
    public function index()
    {
        
        $assetes = Asset::all();
        return view('assetes.index',compact('assetes'));
    }

    public function create()
    {
        $assetes = Asset::all();
        return view('assetes.create')->with(compact(['assetes']));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $formInput=$request->all();
        Asset::create($formInput);
        return redirect()->route('assetes.index')->with('message','Asset added successfully.');
     }
    public function show(Asset $asset)
    {
        //
    }

    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assetes.edit', compact('asset'));
    }

    public function update(Request $request, $id)
    {
        $asset = Asset::find($id);
        $asset->name = $request->get('name');
        $asset->updated_at = date('Y-m-d H:i:s');
        $asset->save();
        return redirect()->route('assetes.index')->with('message','Asset  has been updated successfully.');
    }
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        return redirect()->back();
    }
}
