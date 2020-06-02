<?php

namespace App\Http\Controllers;

use App\User;
use App\Guide;
use App\Attraction;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use http\Env\Response;
use App\File;
use App\Video;


class GhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $attraction=Auth::user()->guides->attractions;

        $schedule_match1=DB::select("select  start,attraction_id from schedules");
        if(!empty($_GET['date'])) {
            $t = $_GET['date'];
            $date1 = date("Y-$t-01");

            $date2 = date("Y-$t-31");
            $schedule_match1=DB::select("select  start,attraction_id from schedules where start between '$date1' and '$date2'");
        }


        $today = date('Y-m-d') ;

        $data=['attraction'=>$attraction,'today'=>$today,'schedule_match1'=>$schedule_match1];
        return view('ghistory.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
