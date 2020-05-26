<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Travel;
use App\Schedule;
use App\Member;
use Auth;
use App\Attraction;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Parser\Tokenizer\TokenizerPatterns;

class ReservationController extends Controller
{
    public function index()
    {

        $attraction=Auth::user()->guides->attractions;

//        $schedule_match=Auth::user()->members->travels;


        //$attraction1=Attraction::where('reservation','1')->get();
        //$attraction2=Attraction::where('status','1')->get();

        $data=[
            'attraction'=>$attraction
        ];


        return view('reservation',$data);
    }
}
