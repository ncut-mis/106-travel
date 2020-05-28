<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Guide;
use App\Attraction;

class UploadController extends Controller
{
    public function index(Request $request){
        $user_id =$request->input("user_id");
        $user_name =$request->input("user_name");
        $data=['user_id'=>$user_id,'user_name'=>$user_name];
     
        return view('/upload',$data);
    }

    public function upload(Request $request)
    {
       
        mb_internal_encoding('UTF-8');
        $user_id=$request->input("upload_id");
        $user_name =$request->input("user_name");
        $id_card =$request->input("id_card");
        $fontsize =$request->input("fontsize");
        $motive =$request->input("motive");
        $guide = Guide::where('user_id',$user_id)->first();
        $guide->id_card =$id_card;
        $guide->fontsize =$fontsize;
        $guide->name =$user_name;
        $guide->photo ='../106-project2/public/storage/'.$request->file('photo')->store('image');//存檔&上傳檔名
        $guide->license ='../106-project2/public/storage/'.$request->file('license')->store('image');
        $guide->motive =$motive;
        $guide->save();
      
      

        
        
    }






    public function index2(Request $request){
        $user_id =$request->input("user_id");
        $data=['user_id'=>$user_id];
     
        return view('/upload2',$data);
    }


    public function upload2(Request $request)
    {
       

       
      

        
        
    }

}
