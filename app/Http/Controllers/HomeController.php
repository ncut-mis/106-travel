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
         if(Auth::user()->type==1)
             return view('home');
        else if(Auth::user()->type==2)
            //記得修改index路游為導遊登入後頁面
        return view('index');
        else
            //記得修改index路游為業者登入後頁面
            return view('index');
    }
}
