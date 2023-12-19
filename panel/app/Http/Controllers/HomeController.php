<?php

namespace App\Http\Controllers;
use App\Jodichart;
use App\Mattakaresult;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $now = date('Y-m-d');
        // $jodicharts = Jodichart::all();
         $mattakaresults = Mattakaresult::where('created_at', '=', $now)->get();
        return view('home',compact('mattakaresults'));
        
       
    }
}
