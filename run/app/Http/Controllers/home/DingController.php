<?php 

namespace App\Http\Controllers\home;

use DB,Session;

use App\Http\Controllers\Controller;

class DingController extends Controller {

	//首页展示

	public function index()

	{
		//代支付
		$id = Session::get('id');
		$data = DB::table('run_order')->join('run_user','run_order.id','=','run_user.id')->where('run_order.id','=',$id)->get();
		return view('home/ding',['data'=>$data]);
	}
}