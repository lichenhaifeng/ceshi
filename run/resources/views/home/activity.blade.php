  @include('home/head')
    <!--顶部结束-->
    <div id="content">
     <div class="product">
      <ul class="channellist">
      @foreach($arr as $v)
        <li>
          <a href="activitylist?id={{$v->l_id}}">
            <div class="ChannelIcon">
              <img src="{{URL($v->l_img)}}" />
            </div>
            <div class="ChannelName">
              {{$v->l_name}}
            </div>
          </a>
        </li>
      @endforeach
      </ul>
      <div class="clear"></div>
     </div>
    </div>
    <!--页脚开始-->
    @include('home/foot')
    <!--页脚结束-->
  </body>
</html>