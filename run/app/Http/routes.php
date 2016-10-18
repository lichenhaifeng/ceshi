<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//登陆
Route::any('admin/Login','admin\LoginController@index');

Route::any('run/denglu','admin\Lo ginController@rdenglu');
//登陆验证
Route::any('admin/login_yz','admin\LoginController@login_yz');
//防非法登录
Route::group(["middleware" => 'zhong'], function() {
//后台推出
Route::any('admin/tuichu','admin\LoginController@tuichu');
//首页
Route::any('run','admin\IndexController@index');
//申请记录
Route::any('admin/list','admin\ListController@index');
//申请快递
Route::any('admin/apply','admin\AppleController@index');
//用户管理
Route::any('admin/user_list','admin\UserController@show');
//用户添加
Route::any('/user_add','admin\UserController@add');
//用户展示
Route::any('/show','admin\UserController@show');
//用户添加
Route::any('/tian','admin\UserController@index');
//用户删除
Route::any('/del','admin\UserController@del');
//极点极改
Route::any('/ji','admin\UserController@ji');
//邮箱极点极改
Route::any('/em','admin\UserController@em');
//手机号极点极改
Route::any('/ph','admin\UserController@ph');
//批量删除
Route::any('/de', 'admin\UserController@de');
//礼品添加
Route::any('admin/group_list', 'admin\LiController@show');
//礼品名称修改
Route::any('/na', 'admin\LiController@na');
//礼品数量修改
Route::any('/su', 'admin\LiController@su');
//礼品积分修改
Route::any('/nu', 'admin\LiController@nu');
//添加礼品
Route::any('/pin', 'admin\LiController@index');
//添加礼品
Route::any('/group_add', 'admin\LiController@add');
//礼品展示
Route::any('/sh','admin\LiController@show');
//礼品删除
Route::any('/dee', 'admin\LiController@de');
//礼品批量删除de
Route::any('/dede', 'admin\LiController@dede');
//后台订单管理
Route::any('admin/ding','admin\DingController@show');
//后台订单搜索
Route::any('/sou','admin\DingController@sou');
//后台订单搜索
Route::any('admin/li','admin\DuiController@show');
//后台兑换审核
 Route::any('/shen','admin\DuiController@shen');
//后台兑换审核
 Route::any('/shenbu','admin\DuiController@shenbu');
//后台兑换搜索
 Route::any('/duisou','admin\DuiController@duisou');
//配送员添加
Route::any('admin/peiadd','admin\PeiController@peiadd');
Route::any('admin/peiaddpro','admin\PeiController@peiaddpro');
//配送员列表
Route::any('admin/peilists','admin\PeiController@peilists');
Route::any('admin/peidelall','admin\PeiController@peidelall');

//前台用户信息
Route::get('admin/userlists','admin\UserController@userlists');

//几点技改
Route::any('admin/peiupdate','admin\PeiController@peiupdate');

//活动管理
Route::any('admin/activityadd','admin\ActivityController@activityadd');
Route::any('admin/activityaddpro','admin\ActivityController@activityaddpro');
Route::any('admin/activitylists','admin\ActivityController@activitylists');
Route::any('admin/activitydel','admin\ActivityController@activitydel');


//后台锁屏
Route::any('admin/suo','admin\LockController@suo');
 //后台锁屏
Route::any('admin/jiesuo','admin\LockController@jie');
//后台CUO
Route::any('admin/cuo','admin\LockController@cuo');
 //后台广告添加
 Route::any('admin/guang','admin\GuangController@index');
//后台广告展示
Route::any('admin/gao','admin\GuangController@show');
 //后台广告展示
Route::any('/guang_add','admin\GuangController@add');
//后台广告单删
Route::any('/dg','admin\GuangController@del');
 //后台广告批删
Route::any('/dgao','admin\GuangController@de');
//后台订单管理
Route::any('admin/ding','admin\DingController@show');


});


//首页
Route::any('/runman','home\HomeController@index');

//登录
Route::any('xin','home\XinController@index');
Route::any('xin/login','home\XinController@login');
Route::any('home/bang','home\XinController@bang');
Route::post('login_yz','home\XinController@login_yz');
Route::any('Register','home\XinController@Register');
Route::post('register_add','home\XinController@register_add');
//邮件验证码
Route::any('home/yan','home\XinController@yan');
//验证唯一性
Route::any('home/wyi','home\XinController@wyi');
Route::any('home/wyip','home\XinController@wyip');
Route::any('home/wyie','home\XinController@wyie');

Route::group(["middleware" => 'qian'], function() {

//修改个人信息
Route::any('home/infoupdateok','home\XinController@infoupdateok');
//修改头像
Route::any('home/tou','home\XinController@tou');

//录单首页
Route::any('home/lu','home\LuController@lu_list');
//录单添加
Route::any('home/add','home\LuController@add');

Route::any('giftlist','home\XinController@giftlist');
// 邮件寄送
Route::any('home/sendexpress','home\SendController@index');
Route::any('home/send','home\SendController@index');
// 活动中心
Route::any('home/activity','home\ActController@index');
Route::any('home/activitylist','home\ActController@activitylist');
Route::any('home/gift','home\ActController@gift');




Route::any('captcha','XinController@mews');
Route::post('test/cpt','TextController@cpt');


//抢单首页
Route::any('home/rob','home\RobController@rob_list');
//抢单
Route::any('home/rob_x','home\RobController@rob_x');
//查看我的订单
Route::any('home/melist','home\RobController@melist');

Route::any('home/zhan','home\RobController@zhan');
});

//加入我们
Route::any('home/jiaru','home\JiaController@jiaru');

//前台退出
Route::any('home/tuichu','home\XinController@tuichu');

Route::any('shipin','admin\ShipinController@index');
Route::any('shipin/ti','admin\ShipinController@shipin');

Route::any('home/ding','home\DingController@index');