<?php

namespace App\Http\Controllers\admin;

use DB;
use Request,Input;
use App\Http\Controllers\Controller;
use Redirect,Response;
class GuangController extends Controller
{

    //用户添加
    public function index()
    {
     return view("admin.guang");
    }
    public function add()
    {
        $file = Request::file('myfile');
        //echo  $file;die;
        $filedir = "img/";
        $imagesName = $file->getClientOriginalName();
        $filename = $filedir . $imagesName;
        $file->move($filedir, $imagesName);
        $img =$filename;
        $re= DB::table('run_guang')->insert([
            ['img'=>$img],
        ]);
        if($re){
            echo "<script>alert('添加成功');location.href='admin/guang'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='admin/guang'</script>";
        }
    }
    public function show()
    {
        $users = DB::table('run_guang')->get();
        //print_r($users);die;
        return view('admin.guang_show',['user'=>$users]);
    }
    //删除
    public   function  del(){
        $id= Request::input('id');
        $re=DB::table('run_guang')->where('id', '=', $id)->delete();
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //批量删除
    public   function  de(){
        $id= Request::input('id');

        //  $id=substr($id,3);
        // echo  $id;die;
        $re= DB::delete("delete from run_guang where id in ($id)");

        if($re){
            echo 1;
        }else{
            echo 2;
        }

    }

}