<?php

namespace App\Http\Controllers\admin;

use DB;
use Request,Input;
use App\Http\Controllers\Controller;
use Redirect,Response;
class UserController extends Controller {

    //首页展示
    public function index()
    {
        return view('admin/user_list');
    }
    //用户添加
    public function add()
    {
        $name= Request::input('username');
        $password= Request::input('password');
        $email= Request::input('email');
        $photo= Request::input('photo');

        $file = Request::file('myfile');
        //echo  $file;die;
        $filedir="img/";
        $imagesName=$file->getClientOriginalName();
        $filename=$filedir.$imagesName;
        $file->move($filedir,$imagesName);
        $img =$filename;
      // print_r($img);die;
       $re= DB::table('run_users')->insert([
           ['username'=>$name,'password'=>$password,'email'=>$email,'photo'=>$photo,'img'=>$img],
        ]);
        if($re){
         echo "<script>alert('添加成功');location.href='show'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='show'</script>";
        }
    }
    public function show()
    {
        $users = DB::table('run_users')->get();
        //print_r($users);die;
        return view('admin.user_show',['user'=>$users]);
    }
    //删除
    public   function  del(){
        $id= Request::input('id');
        $re=DB::table('run_users')->where('u_id', '=', $id)->delete();
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //极点极改
    public   function  ji(){
        $id= Request::input('id');
        $re= Request::input('re');
        //echo $re,$id;die;

        $re= DB::table('run_users')
            ->where('u_id',$id)
            ->update(array('username' => $re));
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //极点极改
    public   function  em(){
        $id= Request::input('id');
        $re= Request::input('re');
        //echo $re,$id;die;

        $re= DB::table('run_users')
            ->where('u_id',$id)
            ->update(array('email' => $re));
        if($re){
            echo  "1";
        }else{
            echo     "2";
        }
    }
    //极点极改
    public   function  ph(){
        $id= Request::input('id');
        $re= Request::input('re');
       //echo $re,$id;die;

        $re= DB::table('run_users')
            ->where('u_id',$id)
            ->update(array('photo' => $re));
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
        $re= DB::delete("delete from run_users where u_id in ($id)");

        if($re){
            echo 1;
        }else{
            echo 2;
        }

    }


    //前台用户信息
    public function userlists(){
        $data=DB::table('run_user')->where('type',0)->OrderBy('id','desc')->get();
        // print_r($data);die;
        return view('admin/userlists',['data'=>$data]);
    }
}