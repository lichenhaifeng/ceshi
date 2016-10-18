<?php 



namespace App\Http\Controllers\home;



use DB,Session;



use App\Http\Controllers\Controller;



class HomeController extends Controller {



	//首页展示

	public function index()

	{

		$id=Session::get('id');

		$res = DB::table('run_user')->where('id','=',$id)->first();

		$users=DB::table('run_guang')->get();

        //print_r($res);die;

		//return view('home/index',[=>]);

        return view('home/index')->with('arr',$res)->with('user',$users);

	}

}