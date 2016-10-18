<?php

namespace App\Http\Controllers\admin;

use DB;
use Request,Input;
use App\Http\Controllers\Controller;
use Redirect,Response;
class DingController extends Controller
{

    //订单展示
    public function show()
    {
        $users = DB::table('run_user')
            ->join('run_order','run_order.id','=','run_user.id')
            ->paginate(5);
      // print_r($users);die;
        return view('admin.ding',['user'=>$users]);
    }
    public function sou()
    {
         $sou=Request::input('sou');
        $users = DB::table('run_user')
            ->join('run_order','run_order.id','=','run_user.id')
            ->where('username','like',"%$sou%")
            ->paginate(5);

        return view('admin.dingsou',['user'=>$users,'sou'=>$sou]);
    }
}