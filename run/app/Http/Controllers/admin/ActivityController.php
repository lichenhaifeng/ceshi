<?php 

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use DB,Request,Validator;


class ActivityController extends Controller {

	//活动添加
	public function activityadd(){
		return view('admin/activityadd');
	}

	public function activityaddpro(){
		$data=Request::all();
		unset($data['_token']);
		$data['h_starttime']=strtotime($data['h_starttime']);
		$data['h_endtime']=strtotime($data['h_endtime']);
		// print_r($data);die;
		//添加入库
		$re=DB::table('run_activity')->insert($data);
		if($re){
			return "<script>alert('添加成功');location.href='activitylists'</script>";
		}else{
			return "<script>alert('添加失败');location.href='activityadd'</script>";
		}
	}
	//活动列表
	public function activitylists(){
		$arr=DB::table('run_activity')->OrderBy('h_id','desc')->get();
		return view('admin/activitylists',['arr'=>$arr]);
	}


	//删除
	public function activitydel(){
		$h_id=Request::input('id');
		$re=DB::table('run_activity')->where('h_id',$h_id)->delete();
		if($re){
			// $arr=DB::table('run_activity')->OrderBy('h_id','desc')->get();
			// return view('admin/activitylists',['arr'=>$arr]);
			return 1;
		}
	}
}