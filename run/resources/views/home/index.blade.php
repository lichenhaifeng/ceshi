<!DOCTYPE html>


<html>

 <head>

  <title>奔跑者</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="author" content="某手机网站模板 html5code.net" />

  <meta name="keywords" content="这里填写你的关键字" />

  <meta name="description" content="科蚁网（html5code.net）是最专业的HTML5移动建站资源分享、交流学习生态圈，为大家提供更多的手机建站资源。" />

  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

  <link href="{{URL('home/css/style.css')}}" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="{{URL('home/js/jquery-1.7.2.min.js')}}"></script>

  <script src="{{URL('home/js/common.js')}}" type="text/javascript"></script>

 </head>

 <body>

  <!--页眉开始-->

  <div id="header">

   <!--幻灯片 开始-->

   <script type="text/javascript" src="{{URL('home/js/jquery.flexslider-min.js')}}"></script>

   <script type="text/javascript">          $(document).ready(function() {



                $('.myflexslider').flexslider({



                        controlNav: true, 



                        directionNav: false,



                        animation: "slide",



                        //manualControls: ".myflexslider .slidenav"



                    });



          });



        </script>

   <div class="myflexslider" style="margin-top:1px;">

    <ul class="slides">

     @foreach($user as $v)
        <li><img src="{{URL($v->img)}}" width="100%" height="500" /></li>

    @endforeach

    </ul>

   </div>

   <!--幻灯片 结束-->

  </div>

  <div id="content">

   <!--导航开始-->

    <?php if (Session::get('id')=="") { ?>
         
            <ul class="channellist">

    <li><a href="home/activity">

      <div class="ChannelIcon">

       <img src="home/images/news.jpg" />

      </div>

      <div class="ChannelName">

       活动中心

      </div></a></li>

    <li><a href="{{URL('xin')}}">

      <div class="ChannelIcon">

       <img src="home/images/1409023353.jpg" />

      </div>

      <div class="ChannelName">

       个人中心

      </div></a></li>

    
      


     <li><a href="home/lu">

      <div class="ChannelIcon">

       <img src="home/images/1408672415.jpg" />

      </div>

      <div class="ChannelName">

       我要寄件

      </div></a></li>
     <li><a href="home/rob">
 
   <div class="ChannelIcon">
 
    <img src="home/images/1408672427.jpg" />
 
   </div>
  
   <div class="ChannelName">
 
    配送池
 
   </div></a></li>
 
   <li><a href="home/melist">
 
   <div class="ChannelIcon">
 
    <img src="home/images/about.jpg" />
 
   </div>
 
   <div class="ChannelName">
 
    我的订单
 
   </div></a></li>
   <li>
          <a href="{{URL('home/zhan')}}">
            <div class="ChannelIcon"><img src="home/images/1409023367.jpg" /></div>
            <div class="ChannelName">我的战绩</div>
          </a>
        </li>

    <li><a href="home/jiaru">

     <div class="ChannelIcon">

      <img src="home/images/1408672443.jpg" />

     </div>

     <div class="ChannelName">

      加入我们
     </div></a></li>

   
   
<!--
   <li><a href="Message.html">

     <div class="ChannelIcon">

      <img src="home/images/1408672456.jpg" />

     </div>

     <div class="ChannelName">

      在线留言

     </div></a></li>

   <li><a href="Contact.html">

     <div class="ChannelIcon">

      <img src="home/images/1408672469.jpg" />

     </div>

     <div class="ChannelName">

      联系我们

     </div></a></li> -->

   </ul>
   <?php } else { ?> 
             <ul class="channellist">

    <li><a href="home/activity">

      <div class="ChannelIcon">

       <img src="home/images/news.jpg" />

      </div>

      <div class="ChannelName">

       活动中心

      </div></a></li>

    <li><a href="{{URL('xin')}}">

      <div class="ChannelIcon">

       <img src="home/images/1409023353.jpg" />

      </div>

      <div class="ChannelName">

       个人中心

      </div></a></li>

    
      <?php if ($arr->type==1) {?>
      


     <li><a href="home/lu">

      <div class="ChannelIcon">

       <img src="home/images/1408672415.jpg" />

      </div>

      <div class="ChannelName">

       我要寄件

      </div></a></li>
      <li><a href="{{URL('home/ding')}}">
   
     <div class="ChannelIcon">
   
      <img src="home/images/1408672443.jpg" />
   
     </div>
   
     <div class="ChannelName">
   
      订单支付
   
     </div></a></li>
<?php } else { ?>
     <li><a href="home/rob">
 
   <div class="ChannelIcon">
 
    <img src="home/images/1408672427.jpg" />
 
   </div>
  
   <div class="ChannelName">
 
    配送池
 
   </div></a></li>
 
   <li><a href="home/melist">
 
   <div class="ChannelIcon">
 
    <img src="home/images/about.jpg" />
 
   </div>
 
   <div class="ChannelName">
 
    我的订单
 
   </div></a></li>
   <li>
          <a href="{{URL('home/zhan')}}">
            <div class="ChannelIcon"><img src="home/images/1409023367.jpg" /></div>
            <div class="ChannelName">我的战绩</div>
          </a>
        </li>

<?php }  ?>
    <li><a href="home/jiaru">

     <div class="ChannelIcon">

      <img src="home/images/1408672443.jpg" />

     </div>

     <div class="ChannelName">

      加入我们
     </div></a></li>

   
   <!--  <li><a href="Recruitment.html">

     <div class="ChannelIcon">

      <img src="home/images/1408672443.jpg" />

     </div>

     <div class="ChannelName">

      招贤纳士

     </div></a></li>

   <li><a href="Message.html">

     <div class="ChannelIcon">

      <img src="home/images/1408672456.jpg" />

     </div>

     <div class="ChannelName">

      在线留言

     </div></a></li>

   <li><a href="Contact.html">

     <div class="ChannelIcon">

      <img src="home/images/1408672469.jpg" />

     </div>

     <div class="ChannelName">

      联系我们

     </div></a></li> -->

   </ul>
    <?php } ?>

   <!--导航结束-->

   <div class="clear"></div>

  </div>

  <!--页脚开始-->
  @include('home/foot')
  <!--页脚结束-->

 </body>

</html>