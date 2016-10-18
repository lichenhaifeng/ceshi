<?php 

namespace App\Http\Controllers\home;

use DB,Request,Session;

use App\Http\Controllers\Controller;

class RobController extends Controller {

	//首页展示
	public function rob_list()
	{
		$res = DB::table('run_order')->join('run_user', 'run_user.id', '=', 'run_order.id')->where('run_order.o_type','=','1')->get();
    	 //print_r($res);die;

        return view('home/rob_list')->with('arr',$res);
	}
	public function rob_x()
	{
		$arr['o_id']=Request::get('id');
		$arr['id']=Session::get('id');
		$res=DB::table('run_order_u')->insert($arr);
		if ($res) {
			$re=DB::table('run_order')->where('o_id','=',$arr['o_id'])->update(array('o_type' => 2));
			if ($re) {
				return 1;
			}
			return 0;
		}else{
			return 0;
		}
	}
	public function melist()
	{
		$id=Session::get('id');
		$res=DB::table('run_order_u')
		->join('run_order', 'run_order.o_id', '=', 'run_order_u.o_id')
		->join('run_user', 'run_user.id', '=', 'run_order_u.id')
		->get();
		return view('home/melist')->with('arr',$res);
	}

	 public function zhan(){
        $id = Session::get('id');
        $arr = DB::table('run_order_u')
                ->join('run_order','run_order.o_id','=','run_order_u.o_id')
                ->join('run_user','run_user.id','=','run_order_u.id')
                ->where('run_order.o_type','=','4')
                ->where('run_order_u.id','=',$id)
                ->get();
        return view('home/zhan')->with('arr',$arr);
    }
}