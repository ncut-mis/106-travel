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

        $guide=Auth::user()->guides;
        $user_id =$request->input("user_id");
        $user_name =$request->input("user_name");
        $data=['user_id'=>$user_id,'user_name'=>$user_name,'guide'=>$guide];

        return view('/upload',$data);
    }

    public function upload(Request $request)
    {
        $a=$request->input('a');
        $user_id=$request->input("upload_id");
        $a=Auth::user();
        $id_card =$request->input("id_card");
        $fontsize =$request->input("fontsize");
        $photo =$request->input("photo");
        $license =$request->input("license");
        $photo_name =$request->input("photo_name");
        $license_name =$request->input("license_name");
        $motive =$request->input("motive");
        $guide = Guide::where('user_id',$user_id)->first();
        $guide->id_card =$id_card;
        $guide->fontsize =$fontsize;
        if(!empty($photo_name)){
        $guide->photo ='../storage/'.$request->file('photo')->store('image');//存檔&上傳檔名
        }
        if(!empty($license_name))
        {
        $guide->license ='../storage/'.$request->file('license')->store('image');
        }
        $guide->motive =$motive;
        $guide->save();
        $request->input("t1");
        return view('/fhome',[ 'a' => $a]);
    }






    public function index2(Request $request){
        $guide=Auth::user()->guides;
        $user_id =$request->input("user_id");
        $user_name =$request->input("user_name");
        $data=['user_id'=>$user_id,'user_name'=>$user_name,'guide'=>$guide];

        return view('/upload2',$data);
    }


    public function upload2(Request $request)
    {
        $a=$request->input('a');
        $user_id=$request->input("upload_id");
        $a=Auth::user();
        $image_title =$request->input("image_title");
        $image_content =$request->input("image_content");
        $video_title =$request->input("video_title");
        $video =$request->input("video");
        $video_content =$request->input("video_content");
        $image = $request->file('image');
        $guide = Guide::where('user_id',$user_id)->first();
        $guide->image_title =$image_title;
        $guide->image_content =$image_content;
        if(!empty($image))
        $guide->image ='../storage/'.$request->file('image')->store('image');//存檔&上傳檔名
        $guide->video =$video;
        $guide->video_title =$video_title;
        $guide->video_content =$video_content;
        $guide->save();
        return view('/fhome',[ 'a' => $a,  ]);

    }

}
