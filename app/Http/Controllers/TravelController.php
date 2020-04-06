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
        $travels=Travel::orderBy('id','ASC')->get();
//        $a=Auth::user()->members->travels;
//        $q=1;
//        dd($a);
//        foreach ($a as $a){
//            $b=$travels->id;
//        }
//        dd($b);
//        $c=Travel::find(1)->schedule;
        $data=['travels'=>$travels];
        return view('travel',$data);


    }
    public function destroy()
    {
//        Travel::destroy();
//        return redirect('/travel');

    }
    public function update()
    {


    }

}
