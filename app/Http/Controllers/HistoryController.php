<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {

        $travels=Auth::user()->members->travels;
        if($travels->pay=1)
        $chgpage=Auth::user()->members->travels()->paginate(2);
        $today = date('Y-m-d') ;
        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today];
        return view('history.index',$data);
    }
    public function store(Request $request)
    {
//        $lastid=0;
//        $userlast = Travel()::SELECT('id')->orderBy('id', 'desc')->first();
//        if($userlast==""){
//            $lastid=0;
//        }else{
//            $lastid=$userlast->id;
//        }
//        $a['id']=$lastid+1;
//        $a['name']=$request->input('name');
//        $a['start']=$request->input('start');
//        $a['end']=$request->input('end');
//        $a['total']=0;
//        $a['pay']=0;
//        $a['member_id']=auth()->user()->id;
//
//        DB::insert('insert into travels(name,start,end,total,pay,member_id) values (?,?,?,?,?,?)',
//            [$a['name'],$a['start'],$a['end'],$a['total'],$a['pay'],$a['member_id']]);
        //算出總共出遊幾天
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);

        //新增旅遊
        $Travels=new \App\Travel();
        $Travels->name=$request->input('name');
        $Travels->start=$request->input('start');
        $Travels->end=$request->input('end');
        $Travels->total=0;
        $Travels->pay=0;
        $Travels->member_id=auth()->user()->id;
        $Travels->save();

        for($i=0;$i<$date;$i++) {
            $schedules = [
                [
                    'start' => $start,'end'=>$start]
            ];

            foreach($schedules as $schedule) {
                $Travels->schedules()->create(($schedule));
            };

            $start = strtotime($start);
            $start = strtotime("+1 day",$start);
            $start= date("Y-m-d",$start);
        }
        return redirect()->route('travel');
    }
    public function show(Request $request)
    {
        $name=($request->input("name"));
        $start=($request->input("start"));
        $end=($request->input("end"));
        $date=floor((strtotime($end)-strtotime($start))/86400+1);
        $b=Travel::find($request->input("id"))->schedules;

        $cc=($request->input("id"));
        $travel_id=($request->input("id"));
        $total=($request->input("total"));
        $data=['b1'=>$b,'cc'=>$cc,'date'=>$date,'start'=>$start,'end'=>$end,'travel_id'=>$travel_id,'name'=>$name,'total'=>$total];

        return view('history.show',$data);
    }
}

