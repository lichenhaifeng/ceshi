@include('home/head')
  <!--顶部结束-->
  <div id="content">
   <div class="product">
    <ul class="wxlist">
     <li><h1>{{$arr->l_name}}</h1>
      <div class="InfoPicture">
       <img src="{{URL($arr->l_img)}}" alt="这里是礼品图片" />
      </div>
      <div class="f2">
       所需积分：{{$arr->l_num}}
      </div></li>
    </ul>
    <!--在线订购 开始-->
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">    
    $(document).ready(function(){
      $('#frmOrder').ajaxForm({
          url:'gift'
          success: complete,
          dataType: 'json',
          beforeSubmit: check
      });
      function check(){
        if( $("#verifycode").val() == ""){
            alert("验证码不能为空！");
            $("#verifycode").focus();
            return false;
          }     
          return true;
      }
      function complete(data){
          if (data.status==1){
              alert(data.info);
              $('#frmOrder').resetForm();
              $("#ProductName").val("这里是产品名称");
          }else if(data.status==0){
              alert(data.info);
          }
          ChangeOrderCode();
      };
      $('#frmOrder').submit(function(){  // 提交表单
        //$('#frmAddBanner').ajaxSubmit();  
        return false;  //为了防止普通浏览器进行表单提交和产生页面导航（防止页面刷新？）返回false  
      });
    });
</script>
<script type="text/javascript"> 
  function ChangeOrderCode(){
    var timenow = new Date().getTime();
    var obj = document.getElementById('OrderCode'); 
    if(obj)obj.src = '<>'+timenow;
  }
</script>
    <div class="order">
     <ul class="wxlist">
      <li>
       <div class="WantOrder">
        <h1>我要兑换</h1>
       </div>
       <form method="post" id="frmOrder" action="gift" onsubmit = "return check()">
        <table border="0px" cellpadding="0px" cellspacing="3px" class="ordertable">
         <tbody>
          <tr>
           <td class="t1">兑换礼品名称</td>
           <td class="t2">{{$arr->l_name}}<input id="ProductName" name="ProductName" type="hidden" maxlength="100" value="{{$arr->l_name}}" /></td>
          </tr>
          <tr>
           <td class="t1">姓名</td>
           <td class="t2"><input id="g_name" name="g_name" type="text" maxlength="100" onblur="fun()" value="" /><span id='list'></span></td>
          </tr>
          <tr>
           <td class="t1">兑换数量</td>
           <td class="t2"><input id="g_sum" name="g_sum" type="text" maxlength="100" onblur="fun4()" value="" /><span id='list4'></span>
           </td>
          </tr>
          <tr>
           <td class="t1">电话</td>
           <td class="t2"><input id="g_phone" name="g_phone" type="text" maxlength="100" onblur="fun3()" value="" /><span id='list3'></span></td>
          </tr>
          <tr>
           <td class="t1">QQ</td>
           <td class="t2"><input id="g_qq" name="g_qq" type="text" maxlength="100" onblur="fun1()" value="" /><span id='list1'></span></td>
          </tr>
          <tr>
           <td class="t1">Email</td>
           <td class="t2"><input id="g_email" name="g_email" type="text" maxlength="100" onblur="fun2()" value="" /><span id='list2'></span></td>
          </tr>
          <tr>
           <td class="t1">地址</td>
           <td class="t2"><input id="g_address" name="g_address" type="text" maxlength="100" value="" /></td>
          </tr>
          <tr>
           <td class="t1">备注</td>
           <td class="t2"><textarea id="g_remark" name="g_remark"></textarea></td>
          </tr>
          
          <tr>
           <td colspan="2">
           <input type="hidden" name="l_id" value="{{$arr->l_id}}">
           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
           <input class="ui-btn-submit" type="submit" value="提交订单" />
           </td>
          </tr>
         </tbody>
        </table>
        <!-- <input type="hidden" name="__hash__" value="25546544" /> -->
       </form></li>
     </ul>
    </div>
    <!--在线订购 结束-->
   </div>
  </div>
  <script>
    function fun(){
        var g_name = document.getElementById('g_name').value;
        var reg =/^([\u4e00-\u9fa5]{2,4})$/;
        // ([\u4e00-\u9fa5]{2,4})
        if (reg.test(g_name)) {
            document.getElementById('list').innerHTML='用户名正确';
            document.getElementById('list').style.color='green';
            return true;
        }else{
            document.getElementById('list').innerHTML='2-4位汉字组成';
            document.getElementById('list').style.color='red';
            return false;
        }
        
    }
    function fun1(){
        var g_qq = document.getElementById('g_qq').value;
        var reg=/^\d{5,10}$/;
        if(reg.test(g_qq)){
            document.getElementById('list1').innerHTML='QQ号格式正确';
            document.getElementById('list1').style.color='green';
            return true;
        }else{
            document.getElementById('list1').innerHTML='QQ号格式不正确';
            document.getElementById('list1').style.color='red';
            return false;
        }
        
    }
    function fun2(){
        var g_email = document.getElementById('g_email').value;
        var reg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(reg.test(g_email)){
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
        var g_phone = document.getElementById('g_phone').value;
        var reg=/^1[34578]\d{9}$/;
        if(reg.test(g_phone)){
            document.getElementById('list3').innerHTML='手机号正确';
            document.getElementById('list3').style.color='green';
            return true;
        }else{
            document.getElementById('list3').innerHTML='手机号格式不正确';
            document.getElementById('list3').style.color='red';
            return false;
        }
    }
    function fun4(){
        var g_sum = document.getElementById('g_sum').value;
        
        
         if (g_sum > 0) {
          var reg=/^\d{1,}$/;
              if(reg.test(g_sum)){
              document.getElementById('list4').innerHTML='正确';
              document.getElementById('list4').style.color='green';
              return true;            
              }else{
                  document.getElementById('list4').innerHTML='请输入正确的数量';
                  document.getElementById('list4').style.color='red';
                  return false;
              }
          } else{
              document.getElementById('list4').innerHTML='数量至少为1';
              document.getElementById('list4').style.color='red';
              return false;
          };
        
    }
    function check(){
        if(fun()&&fun1()&&fun2()&&fun3()){
            return true;
        }else{
            return false;
        }
       
    }
  </script>
  <!--页脚开始-->
  @include('home/foot')
  <!--页脚结束-->
 </body>
</html>