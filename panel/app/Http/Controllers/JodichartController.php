<?php

namespace App\Http\Controllers;
use App\Jodichart;
use App\Category;
use Illuminate\Http\Request;

class JodichartController extends Controller
{
   
    public function index()
    {
        $jodicharts = Jodichart::orderBy('id', 'DESC')->get();

        return view('jodicharts.index',compact('jodicharts'));
    }

    public function create()
    {
        $jodicharts = Jodichart::all();
        $categories = Category::all();
        return view('jodicharts.create',compact('jodicharts','categories'));
    }

    public function store(Request $request)
    {
     if($request->day_name == 'Monday'){  
      $jodicharts = new Jodichart();
      $jodicharts->mond = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }

     if($request->day_name == 'Tuesday'){  
      $jodicharts = new Jodichart();
      $jodicharts->tuesd = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }
     if($request->day_name == 'Wednesday'){  
      $jodicharts = new Jodichart();
      $jodicharts->wedn = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }
     if($request->day_name == 'Thuersday'){  
      $jodicharts = new Jodichart();
      $jodicharts->thusd = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }
     if($request->day_name == 'Friday'){  
      $jodicharts = new Jodichart();
      $jodicharts->frid = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }
      if($request->day_name == 'Saturday'){  
      $jodicharts = new Jodichart();
      $jodicharts->satus = $request->jodi;
      $jodicharts->mattka_type = $request->mattka_type;
      $jodicharts->mattaka_date = $request->mattaka_date;
      $jodicharts->save();
     }
       return redirect()->route('jodicharts.index')->with('message','Jodichart added successfully.');
    }


    public function edit($id)
    {
        $jodicharts = Jodichart::find($id);
       
        return view('jodicharts.edit', compact('jodicharts'));
    }

    
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'day_name'=>'required',
            'jodi'=>'required'
          ]);

        $jodicharts = Jodichart::find($id);
        if($request->get('day_name')=='Monday'){
        $jodicharts->mond = $request->get('jodi');
        $jodicharts->save();
        }
        if($request->get('day_name')=='Tuesday'){
        $jodicharts->tuesd = $request->get('jodi');
        $jodicharts->save();
        }
        if($request->get('day_name')=='Wednesday'){
        $jodicharts->wedn = $request->get('jodi');
        $jodicharts->save();
        }
        if($request->get('day_name')=='Thuersday'){
        $jodicharts->thusd = $request->get('jodi');
        $jodicharts->save();
        }
        if($request->get('day_name')=='Friday'){
        $jodicharts->frid = $request->get('jodi');
        $jodicharts->save();
        }
        if($request->get('day_name')=='Saturday'){
        $jodicharts->satus = $request->get('jodi');
        $jodicharts->save();
        }
       
        return redirect('/jodicharts')->with('success', 'Jodi chart has been updated Successfully');
    }

    public function destroy($id)
    {
        $categories = Jodichart::find($id);
        $categories->delete();
        return redirect('/Jodicharts')->with('success', 'Jodi chart has been deleted Successfully');
    }
   
}
