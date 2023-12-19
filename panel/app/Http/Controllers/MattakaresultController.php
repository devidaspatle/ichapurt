<?php

namespace App\Http\Controllers;
use App\Mattakaresult;
use App\Category;
use Illuminate\Http\Request;

class MattakaresultController extends Controller
{
     
    public function index()
    {
        $categories = Category::all();
        //$mattakaresults = Mattakaresult::all();
       $mattakaresults = Mattakaresult::query()->orderBy('id', 'DESC')->get();
        return view('mattakaresults.index',compact('mattakaresults'));
        
    }

    public function create()
    {
        $mattakaresults = Mattakaresult::all();
        $categories = Category::all();
        return view('mattakaresults.create')->with(compact('mattakaresults','categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'required',
            'single_akata'=>'required',
            'jodi'=>'required',
            'double_pati'=>'required',
            'mattaka_number'=>'required'  
        ]);
        $formInput=$request->all();
        Mattakaresult::create($formInput);
        return redirect()->route('mattakaresults.index')->with('message','Mattakaresult added successfully.');
    }

    public function show(Mattakaresult $Mattakaresult)
    {
        //
    }

 
    public function edit($id)
    {
        $categories = Category::all();
        $mattakaresults = Mattakaresult::find($id);
       
        return view('mattakaresults.edit', compact('mattakaresults','categories'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'=>'required',
            'single_akata'=>'required',
            'jodi'=>'required',
            'double_pati'=>'required',
            'mattaka_number'=>'required' 
          ]);
        
        $mattakaresults = Mattakaresult::find($id);
        $mattakaresults->category_name = $request->get('category_name');
        $mattakaresults->single_akata = $request->get('single_akata');
        $mattakaresults->jodi = $request->get('jodi');
        $mattakaresults->double_pati = $request->get('double_pati');
        $mattakaresults->mattaka_number = $request->get('mattaka_number');
        $mattakaresults->save();
        return redirect('/mattakaresults')->with('success', 'Mattakaresult has been updated Successfully');
    }

    public function destroy($id)
    {
        $mattakaresults = Mattakaresult::find($id);
        $mattakaresults->delete();
        return redirect('/mattakaresults')->with('success', 'Mattakaresult has been deleted Successfully');
    }
}