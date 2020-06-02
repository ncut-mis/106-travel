<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use App\Attraction;
use App\Photo;

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
                 if ($attraction != NULL &&$attraction1 != NULL &&$attraction2 != NULL &&$attraction3 != NULL && $attraction->reservation!=1 && $attraction1->reservation!=1 && $attraction2->reservation!=1 && $attraction3->reservation!=1)
                 {
                     break;
                 }
             }
                 $photo=Photo::where('attraction_id',$attraction_id)->first();
                 $photo1=Photo::where('attraction_id',$attraction_id1)->first();
                 $photo2=Photo::where('attraction_id',$attraction_id2)->first();
                 $photo3=Photo::where('attraction_id',$attraction_id3)->first();
                 $content=$attraction->content;
             $content1=$attraction1->content;
             $content2=$attraction2->content;
             $content3=$attraction3->content;
             $content4=mb_substr( $content, 0 , 20,"utf-8");
             $content5=mb_substr( $content1, 0 , 20,"utf-8" );
             $content6=mb_substr( $content2, 0 , 20 ,"utf-8");
             $content7=mb_substr( $content3, 0 , 20,"utf-8" );
             $data=['user'=>$user,'attraction'=>$attraction,'attraction1'=>$attraction1,'attraction2'=>$attraction2,'attraction3'=>$attraction3,
                 'attraction_id3'=>$attraction_id3,'attraction_id2'=>$attraction_id2,'attraction_id1'=>$attraction_id1,'attraction_id'=>$attraction_id
                 ,'photo'=>$photo,'photo1'=>$photo1,'photo2'=>$photo2,'photo3'=>$photo3,'content4'=>$content4
                 ,'content5'=>$content5,'content6'=>$content6,'content7'=>$content7
             ];

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
