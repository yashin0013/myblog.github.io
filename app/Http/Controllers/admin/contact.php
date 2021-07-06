<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function list()
    {
        $data['result']=DB::table('contacts')->orderBy('id','desc')->get();
        return view('admin/contact/list',$data);
    }
}
