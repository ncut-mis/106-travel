<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use App\Attraction;
use App\file;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $a=Auth::user()->type;
////        dd($a);
         if(Auth::user()->type=="會員")
         {
             $user = Auth::user();
             while(true) {
                 $attractionalastid = Attraction::all()->last()->id;
                 $begin=1;
                 $end=$attractionalastid;
                 $limit=4;
                 $rand_array = range($begin, $end);
                 shuffle($rand_array);//呼叫現成的陣列隨機排列函式
                 $random5=array_slice($rand_array, 0, $limit);//擷取前$limit個
                     $attraction = Attraction::where('id', $random5[0])->first();
                     if ($attraction != NULL)
                         $attraction_id = $attraction->id;

                     $attraction1 = Attraction::where('id', $random5[1])->first();
                     if ($attraction1 != NULL)
                         $attraction_id1 = $attraction1->id;

                     $attraction2 = Attraction::where('id', $random5[2])->first();
                     if ($attraction2 != NULL)
                         $attraction_id2 = $attraction2->id;
                     $attraction3 = Attraction::where('id', $random5[3])->first();
                     if ($attraction3 != NULL)
                         $attraction_id3 = $attraction3->id;

                 if ($attraction != NULL &&$attraction1 != NULL &&$attraction2 != NULL &&$attraction3 != NULL && $attraction->resservation!=1 && $attraction1->resservation!=1 && $attraction2->resservation!=1 && $attraction3->resservation!=1)
                 {
//                     $photo=File::where('attraction_id',$attraction)->get();
//                     $photo1=File::where('attraction_id',$attraction_id1)->get();
//                     $photo2=File::where('attraction_id',$attraction_id2)->get();
//                     $photo3=File::where('attraction_id',$attraction_id3)->get();
                     break;
                 }

             }

//             dd($photo,$photo1,$photo2,$photo3);
             $data=['user'=>$user,'attraction'=>$attraction,'attraction1'=>$attraction1,'attraction2'=>$attraction2,'attraction3'=>$attraction3];
             //,'photo'=>$photo,'photo1'=>$photo1,'photo2'=>$photo2,'photo3'=>$photo3
             return view('mhome', $data);
         }
         else if(Auth::user()->guides->pass==0)
         {
             $a=Auth::user();
             return view('fhome',[ 'a' => $a]);
         }
        else if(Auth::user()->guides->pass=="1")
        {
            $a=Auth::user();
            return view('ghome',[ 'a' => $a]);
        }


        else if (Auth::user()->type=="平台業者")
        {
            return view('thome');
            //header("localhost:8000/Trader/index.php");
        }

       // else
            //return view('home');
            else if(Auth::user()->guides->pass=="2")
            {
                $a=Auth::user();
                return view('home',[ 'a' => $a]);
            }
            
    }
}
