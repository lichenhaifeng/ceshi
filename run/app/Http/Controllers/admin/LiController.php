<?php

namespace App\Http\Controllers\admin;

use DB;
use Request,Input;
use App\Http\Controllers\Controller;
use Redirect,Response;
class LiController extends Controller
{

    //礼品添加
    public function index()
    {
        return view('admin/group_add');
    }
    //礼品展示
    public function show()
    {
        $users = DB::table('run_gift')->get();
        //print_r($users);die;
        return view('admin.group_list',['user'=>$users]);

    }
    //极点极改
    public   function  na(){
        $id= Request::input('id');
        $re= Request::input('re');
        //echo $re,$id;die;

        $re= DB::table('run_gift')
            ->where('l_id',$id)
            ->update(array('l_name' => $re));
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //极点极改
    public   function  su(){
        $id= Request::input('id');
        $re= Request::input('re');
        //echo $re,$id;die;

        $re= DB::table('run_gift')
            ->where('l_id',$id)
            ->update(array('l_sum' => $re));
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //极点极改
    public   function  nu(){
        $id= Request::input('id');
        $re= Request::input('re');
        //echo $re,$id;die;

        $re= DB::table('run_gift')
            ->where('l_id',$id)
            ->update(array('l_num' => $re));
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //礼品添加
    public function add()
    {
        $name= Request::input('l_name');
        $sum= Request::input('l_sum');
        $num= Request::input('l_num');
        $file = Request::file('myfile');
        //echo  $file;die;
        $filedir="img/";
        $imagesName=$file->getClientOriginalName();
        $filename=$filedir.$imagesName;
        $file->move($filedir,$imagesName);
        $img =$filename;
        // print_r($img);die;
        $re= DB::table('run_gift')->insert([
            ['l_name'=>$name,'l_sum'=>$sum,'l_num'=>$num,'l_img'=>$img],
        ]);
        if($re){
            echo "<script>alert('添加成功');location.href='sh'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='sh'</script>";
        }
    }
    //删除
    public   function  de(){
        $id= Request::input('id');
        $re=DB::table('run_gift')->where('l_id', '=', $id)->delete();
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //批量删除
    public   function  dede(){
        $id= Request::input('id');

        //  $id=substr($id,3);
        // echo  $id;die;
        $re= DB::delete("delete from run_gift where l_id in ($id)");

        if($re){
            echo 1;
        }else{
            echo    2;
        }

    }
}