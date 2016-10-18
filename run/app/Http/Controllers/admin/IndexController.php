<?php 



namespace App\Http\Controllers\admin;



use DB,Session;



use App\Http\Controllers\Controller;



class IndexController extends Controller {



	//首页展示

	public function index()

	{
		$name=Session::get("name");
		$row=DB::table('run_users')->where('username',$name)->first();
		// print_r($row);die;
		//echo $name;die;
        return view('admin/index',['name'=>$name,'row'=>$row]);

	}

    public function Audit_list()

    {

        return view('admin/Audit_list');

    }

}