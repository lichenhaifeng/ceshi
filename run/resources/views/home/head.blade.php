<!DOCTYPE html>

<html>

  <head>

    <title>RunnyMan!</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="author" content="某手机网站模板 html5code.net" />

    <meta name="keywords" content="这里填写你的关键字" />

    <meta name="description" content="科蚁网（html5code.net）是最专业的HTML5移动建站资源分享、交流学习生态圈，为大家提供更多的手机建站资源。" />

    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <link href="{{URL('home/css/style.css')}}" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{{URL('home/js/jquery-1.7.2.min.js')}}"></script>

    <script src="{{URL('home/js/common.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{URL('home/js/jquery.form.js')}}"></script>



  

    <script type="text/javascript"> 

      $(document).ready(function(){

        $('#frm').ajaxForm({

          success: complete,

          dataType: 'json',

          beforeSubmit: check

        });

        function check(){

          if($("#MessageTitle").val()==""){

            alert("标题不能为空");

            $("#MessageTitle").focus();

            return false;

          }if( $("#verifycode").val() == ""){

            alert("验证码不能为空！");

            $("#verifycode").focus();

            return false;

          }     

          return true;

        }

        function complete(data){

          if (data.status==1){

            alert("提交成功!");

            $('#frm').resetForm();

          }else if(data.status==0){

            alert(data.info);

          }

          ChangeCode();

        };

        $('#frm').submit(function(){

          //$('#frmAddBanner').ajaxSubmit();  

          return false;  //为了防止普通浏览器进行表单提交和产生页面导航（防止页面刷新？）返回false  

        });



        $('#frm1').ajaxForm({

          success: complete1,

          dataType: 'json',

          beforeSubmit: check1

        });

        function check1(){

          if($("#GuestName").val()==""){

            alert("姓名不能为空");

            $("#GuestName").focus();

            return false;

          }if($("#Phone").val()==""){

            alert("手机号不能为空");

            $("#Phone").focus();

            return false;

          }if($("#Qhaddress").val()==""){

            alert("取货地址不能为空");

            $("#Qhaddress").focus();

            return false;

          }if($("#Fhaddress").val()==""){

            alert("发货地址不能为空");

            $("#Fhaddress").focus();

            return false;

          }if($("#Postcodes").val()==""){

            alert("邮编不能为空");

            $("#Postcodes").focus();

            return false;

          }if($("#MessageContent").val()==""){

            alert("内容不能为空");

            $("#MessageContent").focus();

            return false;

          }if( $("#verifycode").val() == ""){

            alert("验证码不能为空！");

            $("#verifycode").focus();

            return false;

          }

          return true;

        }

        function complete1(data){

          if (data.status==1){

            alert("提交成功!");

            $('#frm1').resetForm();

                }else if(data.status==0){

            alert(data.info);

          }

          ChangeCode();

        };

        $('#frm1').submit(function(){

          //$('#frmAddBanner').ajaxSubmit();  

          return false;  //为了防止普通浏览器进行表单提交和产生页面导航（防止页面刷新？）返回false  

        });



      });

    </script>

    <script>  

      function ChangeCode(){

        var timenow = new Date().getTime();

        var obj = document.getElementById('code');

        if( obj ) obj.src = "<>"+timenow;

      }

    </script>

  </head>

  <body class="body_product">

    <!--顶部开始-->

    <div id="top">

     <!--频道导航 开始-->

      <script>        

        window.onload = function (){

          var oWin = document.getElementById("window");

          var oLay = document.getElementById("overlay");  

          var oBtn = document.getElementById("popmenu");

          var oClose = document.getElementById("close");

          oBtn.onclick = function (){oLay.style.display = "block";oWin.style.display = "block"  };

          oLay.onclick = function (){oLay.style.display = "none";oWin.style.display = "none"  }

        };

      </script>

      <div style="margin-bottom:55px;">

        <div id="toolbar">

          <div class="fixed-green">


            <a class="ui-btn-back" href="javascript:history.go(-1)"></a>

            <a class="ui-btn-home" href="{{URL('/runman')}}"></a>

          </div>

        </div>

     

        

      </div>  

    </div>

    <!--频道导航 结束-->

  </div>