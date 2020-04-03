<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;

class TravelController extends Controller
{
    public function index()
    {
        $travels=Travel::orderBy('id','DESC')->get();
        $a=Auth::user()->members->travels;
        $q=1;
//        foreach ($a as $a){
//            $b=$travels->schedule->id;
//
//        }
        $c=Travel::find(1)->schedule;
            dd($c);
        $data=['travels'=>$travels];
        return view('travel',$data);


    }

}
