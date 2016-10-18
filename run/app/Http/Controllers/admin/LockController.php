<?php

namespace App\Http\Controllers\admin;

use DB,Request,Session;

use App\Http\Controllers\Controller;

class LockController extends Controller
{

    //首页展示

    public function suo()
    {
     $id = Session::get('uid');
      $username = Session::get('name');
        setcookie('lastvisit', $_SERVER['HTTP_REFERER']);
       // $aaa = $_SERVER['HTTP_REFERER'];
      //  echo $aaa;die;
        //print_r($aaa);die;
        //echo $username;die;
        //Session::flush();
    //location.reload();
        return view('admin/suo')->with('username',$username);
    }
    function jie(){
        $username = Session::get('name');
        $password = $_POST['password'];
        //$last = $_COOKIE['lastvisit'];
        //echo $last;die;
       //echo $password;die;
        $arr_admin = DB::table('run_users')->where('username',$username)->first();
       // print_r($arr_admin);die;
        //print_r($arr_admin->password);die;
        if ($password==$arr_admin->password) {
            Session::put('name',$arr_admin->username);
            Session::put('uid',$arr_admin->u_id);
            //return "<script>history.go(-2)</script>";
            if(isset($_COOKIE['lastvisit']) && $_COOKIE['lastvisit']!=""){
                echo '<script>window.location.href="'.$_COOKIE['lastvisit'].'";</script>';
            }
        } else {
            echo "<script>alert('密码错误');location.href='cuo'</script>";
        }

    }
    public function cuo()
    {
        $id = Session::get('uid');
        $username = Session::get('name');
       // setcookie('lastvisit', $_SERVER['HTTP_REFERER']);
        // $aaa = $_SERVER['HTTP_REFERER'];
        //  echo $aaa;die;
        //print_r($aaa);die;
        //echo $username;die;
        //Session::flush();
        //location.reload();
        return view('admin/suo')->with('username',$username);
    }
}
