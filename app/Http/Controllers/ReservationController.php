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
        $attraction=Attraction::where('reservation','1')->get();



        $data=[
            'attraction'=>$attraction,
        ];


        return view('reservation',$data);
    }
}
