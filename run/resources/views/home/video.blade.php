  @include('home/head')
  <!--顶部结束-->
  <div id="content">
   <div class="video">
    <!-- 图文样式 列表开始-->
    <ul class="wxlist">
     <a href="info/199.html"><li style="width:auto">
       <div class="InfoTitle">
        陶瓷宣传专题片
       </div>
       <div class="InfoTime">
        2014-09-09
       </div>
       <div class="InfoSContent"></div>
       <div class="ShowInfo">
        点击查看详情&gt;&gt;
       </div></li></a>
    </ul>
    <div class="page"></div>
    <!-- 图文样式 列表结束-->
    <div class="clear"></div>
    <ul class="wxlist">
     <li>
      <form name="frmInfoSearch" method="post" action="/channel/search/l/cn">
       <div>
        <input name="Keywords" value="" style="height:30px" type="text" placeholder="请输入关键词" />
       </div>
       <div>
        <input name="btnSearch" class="ui-btn-submit" type="submit" value="站内搜索" />
       </div>
       <input type="hidden" name="__hash__" value="f355ebfe7253f78f55d116abd7fb6f19_6ba59d348db9620a677a220eea84e48c" />
      </form></li>
    </ul>
    <div class="clear"></div>
   </div>
  </div>
  <!--页脚开始-->
  @include('home/foot')
  <!--页脚结束-->
 </body>
</html>