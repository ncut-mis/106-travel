<?php

namespace App\Http\Controllers;

use App\File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use App\Guide;
use App\Attraction;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {

        $attraction=Auth::user()->guides->attractions;



        $schedule_match=DB::select('select  start,attraction_id from schedules order by id ASC ');
        $today = date('Y-m-d') ;
        //dd($schedule_match);

        //$attraction1=Attraction::where('reservation','1')->get();
        //$attraction2=Attraction::where('status','1')->get();

        $data=[
            'attraction'=>$attraction,'schedule_match'=>$schedule_match,'today'=>$today
        ];


        return view('reservation',$data);
    }
}
