<?php

namespace App\Http\Controllers\admin;

use Request,Input,DB;

use App\Http\Controllers\Controller;

class ShipinController extends Controller
{

    //兑换礼品展示
    public function index()
    {
    	return view('admin/shipin1');
    }

    public function shipin()
    {
    	print_r($_FILES["file"]);
	    $name = $_FILES["file"]["name"]; //中文可能乱码使用iconv函数  
	    move_uploaded_file($_FILES["file"]["tmp_name"],iconv("UTF-8","gb2312",'file/'.$name));  

    }

}