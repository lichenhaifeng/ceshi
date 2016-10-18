<?php 

namespace App\Http\Controllers\admin;

use DB,Request,Validator;

use App\Http\Controllers\Controller;

class PeiController extends Controller {


	//配送员添加
	public function peiadd(){
		return view('admin/peiadd');
	}

	public function peiaddpro(){
		$data=Request::all();
		// print_r($data);die;
		unset($data['_token']);




		$count=count($data['username']);
		for($i=0;$i<$count;$i++){
			DB::table('run_user')->insert(array(
					'username'=>$data['username'][$i],
					'password'=>$data['password'][$i],
					'email'=>$data['email'][$i],
					'photo'=>$data['photo'][$i]
				));
		}

		return "<script>alert('添加成功');location.href='peilists'</script>";
	}

	// 配送员信息列表
	public function peilists(){

		$data=DB::table('run_user')->where('type',1)->OrderBy('id','desc')->get();
		// print_r($data);die;
		return view('admin/peilist',['data'=>$data]);
	}

	//配送员信息批量删除
	public function peidelall(){
		$id=Request::input('id');
		// echo $id;die;
		if(empty($id)){
			return 0;
		}else{
			DB::delete("delete from run_user where id in($id)");
			return 1;
		}
		
	}

	//几点即改
	public function peiupdate(){
		$id=Request::input('id');
		$val=Request::input('val');
		// $old_val=Request::input('old_val');
		DB::table('run_user')->where('id',$id)->update(array(
				'photo'=>$val
			));
		return 1;
	}
}