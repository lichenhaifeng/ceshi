<?php



namespace App\Http\Controllers\home;



use DB;

use Request,Input;

use App\Http\Controllers\Controller;



class IndexController extends Controller {



    //首页展示

    public function index()

    {

    	
        return view('home/index');

    }

    

}