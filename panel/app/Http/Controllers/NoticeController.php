<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
   
    public function index()
    {
        $notices = Notice::all();
        return view('notices.index',compact('notices'));
    }

    public function create()
    {
        $notices = Notice::all();
        return view('notices.create',compact('notices'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        $formInput=$request->all();
        Notice::create($formInput);
        return redirect()->route('notices.index')->with('message','Transfer Point added successfully.');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $notices = Notice::find($id);
      
        return view('notices.edit', compact('notices'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
          ]);

        $notices = Notice::find($id);
        $notices->title = $request->get('title');
        $notices->description = $request->get('description');
        $notices->updated_at = now();
        $notices->save();
        return redirect('/notices')->with('success', 'Transfer Point  has been updated Successfully');
    }

    public function destroy($id)
    {
        $notices = Notice::find($id);
        $notices->delete();
        return redirect('/notices')->with('success', 'Transfer point  has been deleted Successfully');
    }
}
