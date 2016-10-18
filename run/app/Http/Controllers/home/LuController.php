<?php 



namespace App\Http\Controllers\home;



use DB,Request;



use App\Http\Controllers\Controller;



class LuController extends Controller {



	//首页展示

	public function lu_list()

	{

		return view('home/lu_list');

	}

	public function add()

	{

		$all=Request::All('');

		$all['o_bian'] =  date("YmdHis",time());  

		$all['id'] = 1 ;  

		$all['o_type'] = 1 ;  

		$all['o_time'] = time() ;  

		unset($all['_token']);

		//print_r($all);die;

		$re = DB::table('run_order')->insert($all);

		if ($re) {

			echo "<script>alert('录单成功');location.href='/run/public/runman'</script>";

			

		}else{

			echo 0;

		}

	}

}