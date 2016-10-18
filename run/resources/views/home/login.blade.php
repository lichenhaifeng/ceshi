<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>登陆</title>

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

<div class="title" id="titleString">登陆</div>

<a href="javascript:history.go(-1);" class="back">

            <span class="header-icon header-icon-return"></span>

            <span class="header-name">返回</span>

        </a>

 </div>

 

    <div class="container width80 pt20">

 <form name="aspnetForm" method="post" action="login_yz" id="aspnetForm" class="form-horizontal">

 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

<div>

<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />

<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />

<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />

</div>



<script type="text/javascript">

//<![CDATA[

var theForm = document.forms['aspnetForm'];

if (!theForm) {

    theForm = document.aspnetForm;

}

function __doPostBack(eventTarget, eventArgument) {

    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {

        theForm.__EVENTTARGET.value = eventTarget;

        theForm.__EVENTARGUMENT.value = eventArgument;

        theForm.submit();

    }

}

//]]>

</script>





<div>



	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQLZmqilDgLJ4fq4BwL90KKTCAKqkJ77CQKI+JrmBdPJophKZ3je4aKMtEkXL+P8oASc" />

</div>

  <div class="control-group">

      <input name="name" type="text" id="ctl00_ContentPlaceHolder1_txtUserName" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入账号" />

  </div>

  <div class="control-group">

      <input name="password" type="password" id="ctl00_ContentPlaceHolder1_txtPassword" class="width100 input" style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入密码" />

  </div>

  <div class="control-group">
         
        <input type="hidden" value="POST" name="_method"><!--
     --><input type="hidden" value="{{ csrf_token() }}" name="_token" /><!--
     --><input type="text" name="cpt" value="" /><!--
     --><img src="{{ url('captcha/mews') }}" onclick="this.src='{{ url('captcha/mews') }}?r='+Math.random();" alt="">
  
  </div>

  <div class="control-group">
      @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  </div>

  <div class="control-group">

   

      

     <a class="fr" href="GetPassword.aspx">忘记密码？</a>

 

  </div>

     <div class="control-group">

       <span class="red"></span>

   </div>

  <div class="control-group">

         <button onClick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">立即登陆</button>

  </div>

    <div class="control-group">

         还没账号？<a href="Register" id="ctl00_ContentPlaceHolder1_RegBtn">立即免费注册</a>

  </div>

  <div class="control-group">

        或者使用合作账号一键登录：<br/>

        <script type="text/javascript" src="http://open.51094.com/user/myscript/157a88bae0fb0b.html"></script>

        <span id="hzy_fast_login"></span>

  </div>

</form>

  </div>





  <div class="footer">

  <div class="gezifooter">

      

      <a href="Login" class="ui-link">立即登陆</a> <font color="#878787">|</font> 

       <a href="Register" class="ui-link">免费注册</a> <font color="#878787">|</font>                 

                  


  </div>

  <div class="gezifooter">

    <p style="color:#bbb;">奔跑者 &copy; 版权所有 2012-2014</p>

  </div>

  </div>



</body>

</html>

