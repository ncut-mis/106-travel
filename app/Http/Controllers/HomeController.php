<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;

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
//        $a=Auth::user()->type;
////        dd($a);
         if(Auth::user()->type=="會員")

             return view('mhome');
        else if(Auth::user()->type=="導遊")
        {
            $a=Auth::user();
            return view('fhome',[ 'a' => $a]);
        }

        else if(Auth::guides()->pass==1)
        {
            $a=Auth::user();
            return view('ghome',[ 'a' => $a]);
        }

        else if (Auth::user()->type=="平台業者")
        {
            return view('thome');
            //header("localhost:8000/Trader/index.php");
        }

        //else
            //return view('index');
    }
}
