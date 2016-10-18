@include('home/head')
    <!--顶部结束-->
    <div  id="content">
      <div  class="single">
        <ul class="wxlist">
          <li>
            <div class="ChannelName">
            <span>个人中心</span>
            <span style="padding-left:500px"><a href="{{URL('home/tuichu')}}">退出</a></span>
            
            </div>
            <form action="{{URL('home/tou')}}" method='post' enctype="multipart/form-data">
                    <input type="file" id="btn_img" name="myfile" style="display:none">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    
                  </form>
            
            <div class="ChannelPicture">
              @foreach($data as $key=>$v)
                <?php if($v->img){ ?>
                  <img src="{{$v->img}}" onclick="open_img()"  alt="" />
                <?php }else{ ?>
                  <img src="{{URL('home/login/img/1.jpg')}}" onclick="open_img()"  alt="" />
                <?php } ?>
                <input type="button" id='list1' onclick="fun()" value="上传图片">
                <div id='list' style="display:none">
                  
                </div>
                当前积分为 {{$v->num}}
              @endforeach
            </div>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  
    <!--页脚开始-->
   <div id="footer">

   <!-- 微信分享导引 开始-->

  <script>        

    function openGuide(){ document.getElementById('guide').style.display='block'; }

    function closeGuide(){ document.getElementById('guide').style.display=''; }

  </script>

  <div id="guide" onclick="closeGuide()">

  <img src="images/guide.png" />

  </div>

  <!-- 微信分享导引 结束-->

 <!--  快捷按钮 开始
 
 <div class="plug-div">
 
 <div class="plug-phone">
 
  <div class="plug-menu themeStyle">
 
   <span class="close"></span>
 
  </div>
 
  <div class="themeStyle plug-btn plug-btn1 close">
 
   <a href="{{URL('/runman')}}"><span style="background-image: url({{URL('home/ky_img/home.png')}});"></span></a>
 
  </div>
 
  <div class="themeStyle plug-btn plug-btn2 close">
 
   <a href="Contact.html"><span style="background-image: url({{URL('home/ky_img/tel.png')}});"></span></a>
 
  </div>
 
  <div class="themeStyle plug-btn plug-btn3 close">
 
   <a href="About.html"><span style="background-image: url({{URL('home/ky_img/aboutus.png')}});"></span></a>
 
  </div>
 
  <div class="themeStyle plug-btn plug-btn4 close">
 
   <a href="Message.html"><span style="background-image: url({{URL('home/ky_img/guestbook.png')}});"></span></a>
 
  </div>
 
  <div class="plug-btn plug-btn5 close"></div>
 
 </div>
 
 </div>
 
 快捷按钮 结束 -->
 <div class="tool">
    <table border="0">
     <tbody>
      <tr>
       <td><a class="btn" onclick="infoupdate()" id="up" ><img src="{{URL('home/images/send.png')}}" width="32px" align="absmiddle" />修改个人信息</a><a class="btn" style="display:none" id="uppro" ><img src="{{URL('home/images/send.png')}}" width="32px" align="absmiddle" />修改</a></td> 
       <td><a class="btn" href="{{URL('giftlist')}}?id={{$uid}}"><img src="{{URL('home/images/friend.png')}}" width="32px" align="absmiddle" />查看兑换记录</a></td> 
      </tr>
     </tbody>
    </table>
   </div>

   <center>

       <div>

       <?php foreach ($data as $key => $v): ?>
            <hr><b>姓名</b>：&nbsp;&nbsp;&nbsp;<span id="username"><?php echo $v->username?></span><input type="text" id="newname" value="{{$v->username}}" style="display:none" ><br>
            <b>密码</b>：&nbsp;&nbsp;&nbsp;<span id="password">******</span><input type="text" id="newpwd" value="{{$v->password}}" style="display:none" ><br>
            <b>邮箱</b>：&nbsp;&nbsp;&nbsp;<span id="email"><?php echo $v->email?></span><input type="text" id="newemail" value="{{$v->email}}" style="display:none"><br>  
            <b>手机号</b>：&nbsp;&nbsp;&nbsp;<span id="photo"><?php echo $v->photo?></span><input type="text" id="newphoto" value="{{$v->photo}}" style="display:none"><br><hr>
            <input type="hidden" id="id" value="<?php echo $v->id?>">
            <input type="hidden" id="oldpassword" value="<?php echo $v->password?>">
       <?php endforeach ?>
   </div>
</center>

<script>
    function infoupdate(){
        username=$('#username').html();
        password=$('#oldpassword').val();
        email=$('#email').html();
        photo=$('#photo').html();

        $('#username').hide();
        $('#password').hide();
        $('#email').hide();
        $('#photo').hide();
        $('#up').hide();
        $('#uppro').show();

        $('#newname').show();
        $('#newpwd').show();
        $('#newemail').show();
        $('#newphoto').show();
    }

    //修改个人信息
    $('#uppro').click(function(){
        var newname=$('#newname').val();
        var newpwd=$('#newpwd').val();
        var newemail=$('#newemail').val();
        var newphoto=$('#newphoto').val();
        var id=$('#id').val();
        if(newname==username && newpwd==password && newemail==email && newphoto==photo){
            alert('请至少修改一个个人信息');
        }else{
             $.get('home/infoupdateok',{'id':id,'newname':newname,'newpwd':newpwd,'newemail':newemail,'newphoto':newphoto},function(msg){
                if(msg==1){
                            $('#username').html(newname);
                            $('#oldpassword').html(newpwd);
                            $('#email').html(newemail);
                            $('#photo').html(newphoto);

                            $('#username').show();
                            $('#password').show();
                            $('#email').show();
                            $('#photo').show();
                            $('#newname').hide();
                            $('#newpwd').hide();
                            $('#newemail').hide();
                            $('#newphoto').hide();
                            $('#up').show();
                            $('#uppro').hide();
                }
            })
        }
    });
</script>
  <div>

    <ul class="wxlist">

      <a href="#top"><li><div class="GoTop"><img src="{{URL('home/images/top.png')}}" />回顶部</div></li></a>

    </ul>

  </div> 

  <div class="copyright">

   ©2016 1409PHPE 五组 奔跑者. <br>所有资源仅供学习与参考，版权归原作者，最终解释权归1409PHPE五组所有。 

  </div>
  <div class="copyright" style="float:left">
  友情链接：
            
            <a href="http://www.ishansong.com/" target="_blank"><img src="home/yqlinks/img/yq5.png" alt="闪送" width='100' height="20"></a>&nbsp;&nbsp;
            <a href="http://www.rrkd.cn/" target="_blank"><img src="home/yqlinks/img/yq3.png" alt="人人快递" width='100' height="20"></a>&nbsp;&nbsp;
            <a href="http://gklife.com.cn/" target="_blank"><img src="home/yqlinks/img/yq4.jpg" alt="极客快送" width='100' height="20"></a>&nbsp;&nbsp;
            <a href="http://www.rufengda.com/index.html" target="_blank"><img src="home/yqlinks/img/yq2.png" alt="如风达" width='100' height="20"></a>
    </div>

</div>
   

    <!--页脚结束-->
  </body>
</html>

   <script>

        function fun(){

            document.getElementById('list').style.display='';

            document.getElementById('list1').style.display='none';

        }

        function open_img(){
          $('#btn_img').click();
          
        }

   </script>