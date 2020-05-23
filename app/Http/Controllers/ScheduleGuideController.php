<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use App\Guide;
use App\Attraction;
use Illuminate\Support\Facades\DB;

class ScheduleGuideController extends Controller
{
    public function index(Request $request)
    {

        $schedule= Schedule::where('id', $request->input("id"))->first();
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $schedule_id=($request->input("id"));
        $total=$request->input('total');
        $attraction=DB::select('select * from attractions order by id DESC ');
        $travel_id=$request->input("travel_id");
        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,
            'schedule_id'=>$schedule_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'total'=>$total];
        return view('scheduleguideindex',$data);

    }
    public function index2(Request $request)
    {
        $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $schedule_id=($request->input("id"));

        $travel_id=$request->input("travel_id");


        $attraction=DB::select('select * from attractions order by id DESC ');

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,
            'schedule_id'=>$schedule_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'schedule_id'=>$schedule_id];
        return view('scheduleguideindex',$data);

    }
    public function reindex(Request $request)
{
    $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
    $schedule_id=$schedule->id;
    $schedule_region=$schedule->region;
    $schedule_name=$schedule->name;
    $attraction=DB::select('select * from attractions order by id DESC ');

    $member_name=Auth::User()->name;
    $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
    $attraction_id->member_name=$member_name;
    $attraction_id->reservation=1;
    $schedule->attraction_id=$request->input("attraction_id");
    $attraction_id->save();
    $reservation=$attraction_id->reservation;
    $guide_id=$attraction_id->guide_id;
    $travel_id=$request->input("travel_id");
    $travel=Travel::where('id', $request->input("travel_id"))->first();
    $travel_name=$travel->name;
    $travel_start=$travel->start;
    $schedule->guide_id=$request->input("match_id");
    $schedule->save();
    $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
        ,'guide_id'=>$guide_id, 'travel_id' =>$travel_id,'name'=>$travel_name,'b1'=>$schedule,'start'=>$travel_start,'attraction_id'=>$attraction_id,
        'reservation'=>$reservation];


    return view('schedules.edit',$data);
}
    public function show(request $request,$id)
    {
        $guide_name=Auth::User();
        $travel_id=$request->input("travel_id");
        $total=$request->input('$total');
        dd($total);
        $schedule= Schedule::where('id', $request->input("schedule"))->first();
        $schedule_id=$schedule->id;
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $attraction=Attraction::where('id', $request->input("attraction_id"))->first();
        $attraction_id=$attraction->id;
        $reservation=$attraction->reservation;
        $guide_id=$attraction->guide_id;

        $b = Attraction::where('id', $id)->first();

        $files=File::Where('attraction_id',$attraction_id)->orderBy('created_at','DESC')->paginate(30);
        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
                ,'files' =>$files,'guide_id'=>$guide_id,'travel_id'=>$travel_id,'schedule'=>$schedule,'reservation'=>$reservation,
            'total'=>$total];



        return view('scheduleguideshow',$data);
    }
}
