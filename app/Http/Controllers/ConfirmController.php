<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use Illuminate\Support\Facades\DB;

class ConfirmController extends Controller
{
    public function index(Request $request)
    {
        $travel_id=($request->input("travel_id"));
        $name=($request->input("name"));
        $start=($request->input("start"));
        $total=($request->input("total"));
        $data=['travel_id'=>$travel_id,'name'=>"$name",'start'=>"$start",'total'=>"$total"];
            return view('confirm',$data);
    }
    public function edit(Request $request)

    {
        $needconfirmtravel=Travel::find($request->input('travel_id'));
        $needconfirmtravel->pay=1;
        $needconfirmtravel->save();
        return redirect('/travel');
    }
}
