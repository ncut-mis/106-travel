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
        $sum_total=$request->input("sum_total");
        $travel_id=($request->input("travel_id"));
        $name=($request->input("name"));
        $start=($request->input("start"));
        $total=($request->input("total"));
        $data=['travel_id'=>$travel_id,'name'=>"$name",'start'=>"$start",'total'=>"$total",'sum_total'=>$sum_total];
            return view('confirm',$data);
    }
    public function edit(Request $request)

    {
        $howtopay=$request->input('paymethods');
        dd($howtopay);
        $total=$request->input('total');
        $today= date ("Y-m-d H:i:s" , mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
        $needconfirmtravel=Travel::find($request->input('travel_id'));
        $needconfirmtravel->pay=1;
        $needconfirmtravel->paytime=$today;
        $needconfirmtravel->total=$total;
        $needconfirmtravel->save();
        return redirect('/travel');
    }
}
