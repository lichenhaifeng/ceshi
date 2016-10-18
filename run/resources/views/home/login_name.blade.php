<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />

        <meta content="yes" name="apple-mobile-web-app-capable" />

        <link href="{{URL('home/login/css/bootstrap.min.css')}}" rel="stylesheet" />

        <link href="{{URL('home/login/css/newGlobal.css')}}" rel="stylesheet" />

        <script type="text/javascript" src="{{URL('home/login/js/zepto.js')}}"></script>

    </head>

    

    <body>

        <div class="header">

            <h2>信息绑定</h2>

        </div>

        <div class="container width80 pt20">

            <form name="aspnetForm" method="post" action="{{URL('home/bang')}}" id="aspnetForm" class="form-horizontal" onsubmit = "return check()">

            <input type="hidden" name='uniq' value="<?php echo $uniq; ?>" />

			<input type="hidden" name='img' value="<?php echo $img; ?>" />

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="control-group">

                    <input name="username" type="text" onblur="fun()" id="username" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入用户名" />

                    <span id='list'></span>

                </div>

                <div class="control-group">

                    <input name="password" type="password" onblur="fun1()" id="password" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入密码" />

                    <span id='list1'></span>

                </div>

                <div class="control-group">

                    <input name="email" type="text" onblur="fun2()" id="mobile_phone" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入邮箱" />

                    <span id='list2'></span>

                </div>

                <div class="control-group">

                    <input name="phone" type="text" id="id_card" onblur="fun3()" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入手机号" />

                    <span id='list3'></span>

                </div>

                <div class="control-group">

                    <input type="radio" name='type' checked='checked' value='0'/>&nbsp;配送员&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="radio" name='type' value='1'/>&nbsp;普通用户

                </div>

                <div class="control-group">

                    <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">立即注册</button></div>

               

                </div>

            </form>

        </div>

        

    </body>

<script>

    function fun(){

        var username = document.getElementById('username').value;

                var reg =/^[a-zA-z]\w{3,15}$/;

                if (reg.test(username)) {

                    document.getElementById('list').innerHTML='用户名正确';

                    document.getElementById('list').style.color='green';

                    return true;

                }else{

                    document.getElementById('list').innerHTML='字母、数字、下划线组成，字母开头，4-16位';

                    document.getElementById('list').style.color='red';

                    return false;

                }

        

    }

    function fun1(){

        var password = document.getElementById('password').value;

        var reg=/^\w{5,15}$/;

        if(reg.test(password)){

            document.getElementById('list1').innerHTML='密码正确';

            document.getElementById('list1').style.color='green';



            return true;

        }else{

            document.getElementById('list1').innerHTML='6-16位字符，字母开头';

            document.getElementById('list1').style.color='red';

            return false;

        }

    }

    function fun2(){

        var mobile_phone = document.getElementById('mobile_phone').value;

                var reg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(reg.test(mobile_phone)){

                    document.getElementById('list2').innerHTML='邮箱正确';

                    document.getElementById('list2').style.color='green';

                    return true;

                }else{

                    document.getElementById('list2').innerHTML='邮箱格式不正确';

                    document.getElementById('list2').style.color='red';

                    return false;

                }

        

    }

    function fun3(){

        var id_card = document.getElementById('id_card').value;

                var reg=/^1[34578]\d{9}$/;

                if(reg.test(id_card)){

                    document.getElementById('list3').innerHTML='手机号正确';

                    document.getElementById('list3').style.color='green';

                    return true;

                }else{

                    document.getElementById('list3').innerHTML='手机号格式不正确';

                    document.getElementById('list3').style.color='red';

                    return false;

                }

        

    }

    function check(){

        if(fun() && fun1() && fun2()){

            return true;

        }else{

            return false;

        }

       

    }

</script>

</html>