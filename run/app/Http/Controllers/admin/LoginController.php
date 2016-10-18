<?php 

namespace App\Http\Controllers\admin;

use DB,Request,Session;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

	//首页展示

	public function index()
	{
		return view('admin/login');
	}

	//验证登陆信息是否正确

	public function login_yz()

	{

		/*
			@code  验证码
			@codevote 图片验证码
			@name  用户名
			@pwd   密码
		 */

		$code = Request::Input('code');

		$codevote = Request::Input('codevote');

		$name = Request::Input('name');

		$pwd = Request::Input('pwd');

		//echo $name.",".$pwd;die;

		//判断验证码是否正确

		if(strcasecmp($code,$codevote)!=0){

			echo '验证码错误';

		}else{

		//判断用户名是否正确

		$data = DB::table('run_users')

					->where('username','=',$name)

					->where('password','=',$pwd)

					->get();



		if(empty($data)){

			echo '用户名或密码错误';

		}else{

			foreach($data as $key=>$v){

				$id = $v->u_id;

			}

			Session::put('uid',$id);

			Session::put('name',$name);

			echo '登陆成功';

		}

	}

}

	//退出

	public function tuichu()

	{

		Session::flush();
		return redirect('admin/Login');

	}

	public function rdenglu()
	{
		return view('admin/denglu');
	}

}