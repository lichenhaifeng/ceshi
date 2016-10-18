<?php 
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Request,Session;


class JiaController extends Controller {
	
	public function jiaru(){
		return view('home/jiaru');
	}
}