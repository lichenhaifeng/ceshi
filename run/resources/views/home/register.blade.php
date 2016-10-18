<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>注册</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <link href="{{URL('home/login/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL('home/login/css/newGlobal.css')}}" rel="stylesheet" />
        <script type="text/javascript" src="{{URL('home/login/js/zepto.js')}}"></script>
    </head>
    <body>
        <div class="header">
            <a href="{{URL('/runman')}}" class="home">
                <span class="header-icon header-icon-home"></span>
                <span class="header-name">主页</span>
            </a>
            <div class="title" id="titleString">注册</div>
            <a href="javascript:history.go(-1);" class="back">
                <span class="header-icon header-icon-return"></span>
                <span class="header-name">返回</span>
            </a>
        </div>
        <div id='han'> </div>
        <div class="container width80 pt20">
            <form name="aspnetForm" method="post" action="register_add" id="aspnetForm" class="form-horizontal" onsubmit = "return check()">
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
                    <input name="mobile_phone" type="text" onkeyup="fun2()" id="mobile_phone" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入邮箱" />
                    <span id='list2'></span>
                </div>
               <div class="control-group">
                    <input type="text" id='yzm' onblur="yzm2()" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button"  onMouseUp="yan()" id="btn" value='免费获取验证码' />
                    <div id='yzm1'></div>
                </div>
                <div class="control-group">
                    <input name="id_card" type="text" id="id_card" onblur="fun3()" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入手机号" />
                    <span id='list3'></span>
                </div>
                <div class="control-group">
                    <input type="radio" name='type' checked='checked' value='0'/>&nbsp;配送员&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name='type' value='1'/>&nbsp;普通用户
                </div>
                <div class="control-group">
                    <button id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">立即注册</button>
                </div>
                <div class="control-group">已有账号？
                    <a href="xin" id="ctl00_ContentPlaceHolder1_RegBtn">立即登录</a>
                </div>
                <div class="control-group">
                    或者使用合作账号一键登录：<br />
                    <a class="servIco ico_qq" href="qlogin.aspx"></a>
                    <a class="servIco ico_sina" href="default.htm"></a>
                </div>
            </form>
        </div>
        <div class="footer">
            <div class="gezifooter">
                <a href="Login" class="ui-link">立即登陆</a>
                <font color="#878787">|</font>
                <a href="Register" class="ui-link">免费注册</a>
                <font color="#878787">|</font>
                <a href="../www.gridinn.com/@display=pc" class="ui-link">电脑版</a>
            </div>
            <div class="gezifooter">
                <p style="color:#bbb;">奔跑着 &copy; 版权所有 2016-2018</p>
            </div>
        </div>
    </body>
    <script>
        function fun(){
            var username = $('#username').val();
            
                    var reg =/^[a-zA-z]\w{3,15}$/;
                    if(reg.test(username)) {
                        $.get("{{URL('home/wyi')}}",{'username':username},function(e){
                            if(e==1){
                            $('#list').html('已存在该用户');
                            $('#list').css('color','red');
                            return false;
                        }
                        })
                        $('#list').html('');
                        $('#list').css('color','green');
                        return true;
                    }else{
                        $('#list').html('字母、数字、下划线组成，字母开头，4-16位');
                        $('#list').css('color','red');
                        return false;
                    }
            
            
        }

        function fun1(){
            var password = $('#password').val();
            var reg=/^[a-z | A-Z]\w{5,15}$/;
            if(reg.test(password)){
                $('#list1').html('');
                $('#list1').css('color','green')
                return true;
            }else{
                $('#list1').html('6-16位字符，字母开头');
                $('#list1').css('color','red')
                return false;
            }
        }

        function fun2(){
            mobile_phone = $('#mobile_phone').val();
            var reg=/^\w+@\w+\.com|cn|net$/;
            if(reg.test(mobile_phone)){
                $.get("{{URL('home/wyip')}}",{'email':mobile_phone},function(e){
                if(e==1){
                    $('#list2').html('邮箱已被注册');
                    $('#list2').css('color','red');
                    return false;
                }

                })
                $('#list2').html('');
                $('#list2').css('color','green');
                return true;
            }else{
                $('#list2').html('邮箱不正确');
                $('#list2').css('color','red');
                return false;
            }   
            
        }

        function fun3(){
            var id_card = $('#id_card').val();
                    var reg=/^1[34578]\d{9}$/;
                    if(reg.test(id_card)){
                        $.get("{{URL('home/wyie')}}",{'phone':id_card},function(e){
                        if(e==1){
                            $('#list3').html('手机号已被注册');
                            $('#list3').css('color','red');
                            return false;
                        }

                        })
                        $('#list3').html('');
                        $('#list3').css('color','green');
                        return true;
                    }else{
                        $('#list3').html('手机号格式不正确');
                        $('#list3').css('color','red');
                        return false;
                    }            
            
        }

        function yzm2(){
        var yzm = $('#yzm').val();
        var hui = $('#hui').val();
        
        if(yzm==''){
            $('#yzm1').html('验证码不能为空');
            $('#yzm1').css('color','red');
            return false;
        }

        if(hui!=yzm){
            $('#yzm1').html('验证码不正确');
            $('#yzm1').css('color','red');
            return false;
        }else{
            $('#yzm1').html('');
            $('#yzm1').css('color','green');
            return true;
        }
    }

        function check(){
            if(fun() && fun1() && fun2() && yzm2()){
                return true;
            }else{
                return false; 
            }

        }

        //邮箱地址到yan
        function yan(){
        var mail = $('#mobile_phone').val();
        var list2 = $('#list2').text();
        if(mail==''){
            
        }else if(list2=='邮箱已被注册'){
            
        }else if(list2=='邮箱不正确'){
            
        }else if(list2==''){
            $.get("{{URL('home/yan')}}",{'mail':mail},function(e){
                $('#hui').remove();
                $('#han').append("<input type='hidden' id='hui' value='"+e+"'>");
            })
        }

        } 
    </script>

    <!-- 验证码距离下次发送的时间 -->
<script type="text/javascript">
    var wait=60;
    function time(o) {

            if (wait == 0) {
                o.removeAttribute("disabled");           
                o.value="免费获取验证码";
                wait = 60;
            } else {
                o.setAttribute("disabled", true);
                o.value="重新发送(" + wait + ")";
                wait--;
                setTimeout(function() {
                    time(o)
                },
                1000)
            }
        }
    document.getElementById("btn").onclick=function(){
        var mail = $('#mobile_phone').val();
        var list2 = $('#list2').text();
        if(mail==''){
            
        }else if(list2=='邮箱已被注册'){
            
        }else if(list2=='邮箱不正确'){
            
        }else if(list2==''){
           time(this);
        }
         
    }

</script>

</html>