<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class IndexController extends Controller
{
    public function index()
    {
        $a=Auth::user();

        return view('index',['a1'=>$a]);
    }
    public function update(Request $request)
    {
        $b = User::where('id', $request->input("update_id"))->first();

        $b->email = $request->input("update_email");
        $b->name = $request->input("update_name");
        $b->sex = $request->input("update_sex");
        $b->birthday = $request->input("update_birthday");
        $b->phone = $request->input("update_phone");
        $b->save();

        return redirect('/index');
    }
}

