<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <style>
    p{
        font-size: 15px;
    }

    p input{
        /*width: 200px;*/
        height: 20px;
    }

    </style>
</head>
<body>
 <!--    <center> -->
        <p style="font-size:30px">配送员添加</p>
        <form action="peiaddpro" method="post">

        <p><input type="button" value="+" onclick="jia(this)"/>名称：<input type="text" name="username[]" placeholder="请输入用户名"/>密码：<input type="password" name="password[]" placeholder="请输入密码"/>邮箱：<input type="text" name="email[]" placeholder="请输入邮箱"/>手机号：<input type="text" name="photo[]" placeholder="请输入手机号"/></p>

        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <p><button id="btn">提交</button></p>

        </form>
<!--     </center> -->
</body>
</html>

<script src="../admin/script/jquery.min.js"></script>
<script>
    function jia(obj){
        $(obj).parent().append("<p><input type='button' value='+' onclick='jia(this)'/>名称：<input type='text' name='username[]' placeholder='请输入用户名'/>密码：<input type='password' name='password[]' placeholder='请输入密码'/>邮箱：<input type='text' name='email[]' placeholder='请输入邮箱'/>手机号：<input type='text' name='photo[]' placeholder='请输入手机号'/><input type='button' value='-' onclick='jian(this)'/></p>");
        
    }

    function jian(obj){
        $(obj).parent().remove();
    }

   // $('#btn').click(function(){
   //       //接值
   //  var username=document.getElementsByName('username');
   //  var password=document.getElementsByName('password');
   //  var email=document.getElementsByName('email');
   //  var photo=document.getElementsByName('photo');
   //  alert(password);
   //  //jquery的ajax
   //  $.post('peiaddpro',{'username':username,'password':password,'emial':email,'photo':photo},function(msg){
   //      alert(msg);
   //  });
   // });

</script>