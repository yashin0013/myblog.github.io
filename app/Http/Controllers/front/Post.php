<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function home()
    {
        $data['result']=DB::table('posts')->orderBy('id','desc')->get();
        return view('front/index',$data);
    }

    public function post($id)
    {
        $data['result']=DB::table('posts')->where('slug',$id)->get();
        return view('front/post',$data);
    }
}
