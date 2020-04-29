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

        $attraction=DB::select('select * from attractions order by id DESC ');

        $data=['schedule_region'=>$schedule_region,'attraction'=>$attraction,'schedule_name'=>$schedule_name];
        return view('scheduleguideindex',$data);

    }

}
