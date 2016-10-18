<?php



namespace App\Http\Controllers\home;



use DB;

use Request,Input,Session;

use App\Http\Controllers\Controller;

header("content-type:text/html;charset=utf8");

class ActController extends Controller {



    //首页展示

    public function index()

    {

    	$res = DB::table('run_gift')->get();

    	// print_r($res);die;

        return view('home/activity')->with('arr',$res);

    }



    // 礼品详情页

    public function activitylist()

    {

    	$id = $_GET['id'];

    	$res = DB::table('run_gift')->where('l_id','=',$id)->first();

    	// print_r($res);die;

        return view('home/activitylist')->with('arr',$res);

    }

    // 礼品添加
    public function gift()
    {
        $data = Request::all();
        unset($data['_token'],$data['ProductName']);
        $res = DB::table('run_gift')
                ->where('l_id','=',$data['l_id'])
                ->first();
         //print_r($data);die;
        $uid = session::get('id');
        $res1 = DB::table('run_user')
                ->where('id','=',$uid)
                ->first();
        $data['id'] = $uid;
        $data['g_status'] = 0;
        // print_r($data);die;
        // print_r($res1->num);die;
        if(empty($uid)){
            echo "<script>alert('你还没有登陆，请先登录！');window.location.href='../xin';</script>";
        }else{
            if($data['g_sum']*$res->l_num>$res1->num){
                echo "<script>alert('您的积分貌似不太够，再逛逛吧！');window.location.href='javascript:history.go(-1)';</script>";
            }else{
                $arr = DB::table('run_gifts')->insert($data);
                if($arr){
                    DB::table('run_gift')
                        ->where('l_id','=',$data['l_id'])
                        ->update(['l_sum'=>$res->l_sum-$data['g_sum']]);
                    DB::table('run_user')
                        ->where('id','=',$uid)
                        ->update(['num'=>$res1->num-$data['g_sum']*$res->l_num]);
                    echo "<script>alert('兑换申请已提交，请等待审核！');window.location.href='activity';</script>";
                }
                
            }
         
    }
    



}