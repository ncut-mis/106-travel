<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    public function index()
    {
//        $travels=Travel::orderBy('id','ASC')->get();

//        $travels=Auth::user()->members;
//        $travels = Travel::orderBy('id', 'DESC')->get();

        $travels=Auth::user()->members->travels;
        $travels1=Auth::user()->members->travels;
        $chgpage=Auth::user()->members->travels()->paginate(3);
        $chgpage1=Auth::user()->members->travels()->paginate(3);
        $today = date('Y-m-d') ;

//        $a=Auth::user()->members->travels;
//        $q=1;
//        dd($a);
//        foreach ($a as $a){
//            $b=$travels->id;
//        }
//        dd($b);
//        $c=Travel::find(1)->schedule;
//dd($travels);
        $data=['travels'=>$travels,'chgpage'=>$chgpage,'today'=>$today,'travels1'=>$travels1,'chgpage1'=>$chgpage1];
        return view('travel',$data);


    }

    public function show($id)
    {
        $travel = DB:: select ('select * from travels where id=?',[$id]);

        $data=[
            'travel'=>$travel[0],
        ];

        return view('travels.show',$data);
    }


    public function destroy(Request $request)
    {
        $deletetra = Travel::where('id', $request->input("delete_id"))->delete();
        $deleteSch = Schedule::where('travel_id', $request->input("delete_id"))->delete();
        return redirect('/travel');
    }
    public function edit(Request $request)

    {
        //修改不動到日期
//        if($start=$request->input("update_update") && $end=$request->input("update_end")) {
//            $travel = Travel::where('id', $request->input("update_id"))->first();
//            $travel->name = $request->input("update_name");
//            $travel->start = $request->input("update_start");
//            $travel->end = $request->input("update_end");
//            $travel->save();
//        }
            //刪掉修改後的Schedules及travel，並加入修改後的日期Travel,Schedules
            $delschedule = Schedule::where('travel_id', $request->input("update_id"))->delete();
            $deltravel = Travel::where('id', $request->input("update_id"))->delete();
            $Travels=new \App\Travel();
            $start=($request->input("update_start"));
            $end=($request->input("update_end"));
            $date=floor((strtotime($end)-strtotime($start))/86400+1);
            $Travels->name=$request->input('update_name');
            $Travels->start=$request->input('update_start');
            $Travels->end=$request->input('update_end');
            $Travels->total=0;
            $Travels->pay=0;
            $Travels->member_id=auth()->user()->members->id;
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

        return redirect('/travel');
    }
    public function update()
    {


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
        $Travels->member_id=auth()->user()->members->id;
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
    public function cancel(Request $request)
    {
        $canceltravel= Travel::find($request->input("cancel_id"));
        $canceltravel->pay=0;
        $canceltravel->save();
//        $cancelschedulesguid=Schedule::where('travel_id',$request->input("cancel_id")->update(['guides'=>'']));
        return redirect('/travel');
    }

}
