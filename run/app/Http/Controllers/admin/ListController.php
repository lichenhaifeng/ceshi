<?php 

namespace App\Http\Controllers\admin;

use DB;

use App\Http\Controllers\Controller;

class ListController extends Controller {

	//申请记录
	public function index()
	{
		return view('admin/list');
	}
}