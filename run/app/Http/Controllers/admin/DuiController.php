<?php

namespace App\Http\Controllers\admin;

use DB;
use Request,Input;
use App\Http\Controllers\Controller;
use Redirect,Response;
class DuiController extends Controller
{

    //兑换礼品展示
    public function show()
    {
        $users = DB::table('run_gift')
            ->join('run_gifts','run_gifts.l_id','=','run_gift.l_id')
            ->paginate(5);
        // print_r($users);die;
        return view('admin.dui',['user'=>$users]);
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
    public function shen()
    {
        $id=Request::input('id');
       $re= DB::table('run_gifts')
            ->where('g_id',$id)
            ->update(['g_status' => 1]);
     if($re){
         $users = DB::table('run_gift')
             ->join('run_gifts','run_gifts.l_id','=','run_gift.l_id')
             ->paginate(5);
         // print_r($users);die;
         return view('admin.duiti',['user'=>$users]);
     }else{
         echo "<script>alert('审核失败');location.href='admin/li'</script>";
     }


    }
    public function shenbu()
    {
        $id = Request::input('id');
        $re = DB::table('run_gifts')
            ->where('g_id', $id)
            ->update(['g_status' => 2]);
        if ($re) {
            $users = DB::table('run_gift')
                ->join('run_gifts','run_gifts.l_id','=','run_gift.l_id')
                ->paginate(5);
            // print_r($users);die;
            return view('admin.duiti',['user'=>$users]);
        } else {
            echo "<script>alert('审核失败');location.href='admin/li'</script>";
        }
    }
    public function duisou()
    {
        $sou = Request::input('sou');
        $users = DB::table('run_gift')
            ->join('run_gifts','run_gifts.l_id','=','run_gift.l_id')
            ->where('g_name','like',"%$sou%")
            ->paginate(5);
        return view('admin.duisou',['user'=>$users,'sou'=>$sou]);
    }
  }