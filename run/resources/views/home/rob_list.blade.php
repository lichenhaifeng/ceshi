@include('home/head')

  <!--顶部结束-->

  <div id="content">

   <div class="product">

    <ul class="channellist">

    @foreach($arr as $v)

      <li>

        

          <div style="text-align:center;">

          <a href="Javascript:void(0)" onclick="que({{$v->o_id}})">

              <B>姓名：</B>{{$v->username}}

               <br>

               电话：{{$v->o_photo}}

               <br>

              地址：{{$v->o_dizhi}}

               <br>

              物价：{{$v->o_money}}￥&nbsp;&nbsp;

              <?php if ($v->o_zhifu==1){ ?>

                <font color="red"> 支付宝支付</font>&nbsp;&nbsp;

              <?php }else{ ?>

              <font color="red"> 货到付款</font>&nbsp;&nbsp;

              <?php } ?>

              备注：{{$v->o_text}}

               <br>

              <?php echo date("Y-m-d H:i:s",$v->o_time);?>  

              </a>

          </div>

   

      </li>

    @endforeach

    </ul>

    <div class="clear"></div>

   </div>

  </div>

  <!--页脚开始-->

  <div id="footer">

    @include('home/foot')
<script type="text/javascript">

  function que (id) {

   

        if(confirm("确定要下单吗？")){



        $.ajax({



            type: "get",



            url: "{{url('home/rob_x')}}",



            data: "id="+id,



            success: function(msg){



                if(msg==1){

                    alert("下单成功，给用户打个电话，确认一下吧。")

                    location.reload()

                    



                }else{



                    alert("删除失败")



                }



            }



        });



    }

  }

</script>