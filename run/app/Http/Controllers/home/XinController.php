<?php 



namespace App\Http\Controllers\Home;

use DB,Request,Session,Mail,Captcha,Validator, Redirect,Input;

use App\Http\Dsf\open51094;

use App\Http\Email\mail1;

use App\Http\Controllers\Controller;


class XinController extends Controller {



	//首页展示

	public function index()

	{

		$id = session::get('id');

		if($id){

			$data = DB::table('run_user')->where('id','=',$id)->get();

			return view('home/Merchants',['data'=>$data,'uid'=>$id]);

		}else{

			return view('home/login');

		}



	}



	//第三方登陆

	public function login()

	{


		$code = Request::get('code');

		//获取用户信息
		$open = new open51094();

		$arr = $open->me($code);



		//判断是否是第一次登陆

		$data = DB::table('run_user')->where('uniq','=',$arr['uniq'])->get();

		if($data){

		foreach($data as $key=>$v){

			$id = $v->id;

			$username = $v->username;

		}



		session::put('id',$id);

		session::put('username',$username);



	}

		if($data){

			return redirect('/runman');

		}else{

			return view('home/login_name',['uniq'=>$arr['uniq'],'img'=>$arr['img']]);

		}

	}

//修改个人信息
	public function infoupdateok(){
		$newname=Request::input('newname');
		$newpwd=Request::input('newpwd');
		$newemail=Request::input('newemail');
		$newphoto=Request::input('newphoto');
		$id=Request::input('id');
		$re=DB::table('run_user')->where('id',$id)->update(array(
				'username'=>$newname,
				'password'=>$newpwd,
				'email'=>$newemail,
				'photo'=>$newphoto,
			));
		if($re){
			return 1;
		}
	}


	public  function bang()

	{

		$username = Request::Input('username');

		$password = Request::Input('password');

		$email = Request::Input('email');

		$phone = Request::Input('phone');

		$type = Request::Input('type');

		$uniq = Request::Input('uniq');

		$img = Request::Input('img');

		$data = DB::table('run_user')

			->insert(

						['username'=>$username,'password'=>$password,'email'=>$email,'uniq'=>$uniq,'img'=>$img,'photo'=>$phone,'type'=>$type,'num'=>0]

					);

		$data = DB::table('run_user')->get();

		foreach($data as $key=>$v){

			$id = $v->id;

			$username = $v->username;

		}



		session::put('id',$id);

		session::put('username',$username);



		return redirect('/runman');

	}



	public function login_yz()

	{



		$rules = [
            "cpt" => 'required|captcha'
        ];
        $messages = [
            'cpt.required' => '请输入验证码',
            'cpt.captcha' => '验证码错误，请重试'
        ];

        $validator = Validator::make(Input::all(), $rules, $messages);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $name = Request::Input('name');

		$password = Request::Input('password');

		$data = DB::table('run_user')->where('username','=',$name)->where('password','=',$password)->get();

		if($data){



			foreach($data as $key=>$v){

			$id = $v->id;

			$username = $v->username;

		}



			session::put('id',$id);

			session::put('username',$username);

			return redirect('/runman');

		}else{

			echo "<script>alert('用户名或密码不正确');window.location.href='./xin';</script>";

		}
        }


		

	}



	//用户注册

	public function Register()

	{

		return view('home/register');

	}


	//注册验证唯一性  用户名
	public function wyi(){
		$username =  Request::Input('username') ;
		if($username){
			$arr = DB::table('run_user')->where('username','=',$username)->get();
			if($arr){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}

	//注册验证唯一性  邮箱
	public function wyip(){
		$email =  Request::Input('email') ;
		if($email){
			$arr = DB::table('run_user')->where('email','=',$email)->get();
			if($arr){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}

	//注册验证唯一性  手机号
	public function wyie(){
		$phone =  Request::Input('phone') ;
		if($phone){
			$arr = DB::table('run_user')->where('photo','=',$phone)->get();
			if($arr){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}


	//前台注册

	public function register_add()

	{

		$name = Request::Input('username');

		$pwd = Request::Input('password');

		$mail = Request::Input('mobile_phone');

		$id_card = Request::Input('id_card');

		$type = Request::Input('type');

		$data = DB::table('run_user')->insert(['username'=>$name,'password'=>$pwd,'email'=>$mail,'photo'=>$id_card,'type'=>$type,'num'=>0]);

		return redirect('xin');

	}



	// 兑换记录查询
	public function giftlist(){
		$id = $_GET['id'];
		$arr = DB::table('run_gifts')
				->join('run_gift','run_gifts.l_id','=','run_gift.l_id')
				->where('id','=',$id)
				->get();
		return view('home/giftlist')->with('arr',$arr);
	}


	//修改头像

	public function tou()

	{

		$id = Session::get('id');

		$file = Request::file('myfile');

		$filedir="home/login/img/";

		$imagesName=$file->getClientOriginalName();

		$filename=$filedir.$imagesName;

		$file->move($filedir,$imagesName);

		

		$arr = DB::table('run_user')->where('id','=',$id)->update(['img'=>$filename]);

		if($arr){

			return redirect('xin');

		}

	}

	//邮箱发送验证码
	public function yan(){


		$email = Request::Input('mail');
		//print_r($email);die;
		$code = 'aaaaa';
		$yan = rand(100000,999999);
		
		
		$conf = array(
	    'host'     => 'smtp.163.com',
	    'port'     => '25',
	    'user'     => '13521948284@163.com',
	    'password' => 'chf521521',
	     );

		$rcpt = array(
		    "$email",
		    );

		$header = array(
		    'to_name'   => '您好',
		    'from_name' => 'XX集团',
		    'subject'   => '奔跑者账号验证码',
		    );

		$body = "您的验证码为".$yan;

		$mail = new mail1($conf, $rcpt, $header, $body);

		$mail->send_mail();


		echo $yan;
		//print_r($mail->msg);
	}

	public function mews() {
        return Captcha::create('default');
    }

    //前台退出
    public function tuichu()
    {
    	Session::flush();
    	return redirect('xin');
    }

}