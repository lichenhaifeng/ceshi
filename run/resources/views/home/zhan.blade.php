@include('home/head')
    <!--顶部结束-->
  <div id="content">
   <div class="job">
    <ul class="wxlist">
     <li>
      <div class="JobName">
       我的战绩
      </div>
      <table cellpadding="0" cellspacing="0" border="1" class="jobtable">
       <tbody>
        <tr>
         <th>订单号</th>
         <th>用户</th>
         <th>地址</th>
         <th>礼品简介</th>
         <th>状态</th>
        </tr>
        @foreach($arr as $v)
        <tr>
         <td>{{$v->o_bian}}</td>
         <td>{{$v->username}}</td>
         <td><?php echo str_replace(mb_substr($v->o_dizhi,3,5),".....", $v->o_dizhi) ?></td>
         <td>{{$v->o_text}}</td>
         <td>
          <?php if($v->o_type==2){
              echo "正在配送";
            }else if($v->o_type==3){
              echo "等待用户确认";
            }else{
              echo "已完成";
            }?>
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
