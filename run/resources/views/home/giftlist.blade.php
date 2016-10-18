@include('home/head')
  <!--顶部结束-->
  <div id="content">
   <div class="job">
    <ul class="wxlist">
     <li>
      <div class="JobName">
       兑换记录
      </div>
      <table cellpadding="0" cellspacing="0" border="0" class="jobtable">
       <tbody>
        <tr>
         <th>礼品名</th>
         <th>兑换人</th>
         <th>手机号</th>
         <th>地址</th>
         <th>礼品图</th>
         <th>礼品简介</th>
         <th>状态</th>
        </tr>
        @foreach($arr as $v)
        <tr>
         <td>{{$v->l_name}}</td>
         <td>{{$v->g_name}}</td>
         <td>{{$v->g_phone}}</td>
         <td>{{$v->g_address}}</td>
         <td><img src="{{$v->l_img}}" width="50" height="50" alt=""></td>
         <td>{{$v->g_remark}}</td>
         <td>
            @if($v->g_status==0)
              耐心等待审核
            @else
              审核成功
            @endif
         </td>
        </tr>
        @endforeach
       </tbody>
      </table></li>
    </ul>
    <div class="clear"></div>
   </div>
  </div>
  <!--页脚开始-->
  @include('home/foot')
  <!--页脚结束-->
 </body>
</html>