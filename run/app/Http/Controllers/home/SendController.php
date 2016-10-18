<?php

namespace App\Http\Controllers\home;

use DB;
use Request,Input,Session;
use App\Http\Controllers\Controller;

class SendController extends Controller {

    //首页展示
    public function index()
    {
        return view('home/sendexpress');
    }
    //寄件添加
    public function send()
    {
        return view('home/send');
    }
}