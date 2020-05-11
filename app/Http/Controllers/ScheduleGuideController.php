<?php

namespace App\Http\Controllers;

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

        $attraction=DB::select('select * from attractions order by id DESC ');
        $travel_id=$request->input("travel_id");
        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,
            'schedule_id'=>$schedule_id,'travel_id'=>$travel_id,'schedule'=>$schedule];
        return view('scheduleguideindex',$data);

    }
    public function index2(Request $request)
    {
        $schedule= Schedule::where('id', $request->input("schedule_id"))->first();
        $schedule_region=$schedule->region;
        $schedule_id=$schedule->id;
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

    $attraction_id=Attraction::where('id', $request->input("attraction_id"))->first();
    $guide_id=$attraction_id->guide_id;

    $travel_id=$request->input("travel_id");
    $travel=Travel::where('id', $request->input("travel_id"))->first();
    $travel_name=$travel->name;
    $travel_start=$travel->start;
    $schedule->guide_id=$request->input("match_id");
    $schedule->save();
    $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
        ,'guide_id'=>$guide_id, 'travel_id' =>$travel_id,'name'=>$travel_name,'b1'=>$schedule,'start'=>$travel_start];


    return view('schedules.edit',$data);
}
    public function show(request $request,$id)
    {

        $travel_id=$request->input("travel_id");
        $schedule= Schedule::where('id', $request->input("schedule"))->first();
        $schedule_id=$schedule->id;
        $schedule_region=$schedule->region;
        $schedule_name=$schedule->name;
        $attraction=Attraction::where('id', $request->input("attraction_id"))->first();
        $guide_id=$attraction->guide_id;
        $b = Attraction::where('id', $id)->first();
        $files = get_files(storage_path('app/public/attractions/'.$b->id));

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name,'schedule_id'=>$schedule_id
                ,'files' =>$files,'guide_id'=>$guide_id,'travel_id'=>$travel_id,'schedule'=>$schedule];



        return view('scheduleguideshow',$data);
    }
}
