@include('home/head')

  <!--顶部结束-->

    <script type="text/javascript">	function ChangeOrderCode(){

    		var timenow = new Date().getTime();

    		var obj = document.getElementById('OrderCode'); 

    		if( obj ) obj.src = '<>'+timenow;

    	}

    </script>

    <div class="order">

      <ul class="wxlist">

        <li>

          <div class="WantOrder"><h1>我要寄件</h1></div>

          <form method="post" id="frmOrder" action="add">

            <table border="0px" cellpadding="0px" cellspacing="3px" class="ordertable">

              <tbody>

                <tr>

                  <td class="t1">电话</td>

                  <td class="t2"><input id="Telephone" name="o_photo" type="text" maxlength="100" value="" /></td>

                </tr>

                <tr>

                  <td class="t1">物价</td>

                  <td class="t2"><input id="QQ" name="o_money" type="text" maxlength="100" value="" /></td>

                </tr>

                <tr>

                  <td class="t1">支付方式</td>

                  <td >

                    <input type="radio" name="o_zhifu" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支付宝 

                    <input type="radio" name="o_zhifu" value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;货到付款

                  </td>

                </tr>

                <tr>

                  <td class="t1">地址</td>

                  <td class="t2"><input id="Address" name="o_dizhi" type="text" maxlength="100" value="" /></td>

                </tr>

                <tr>

                  <td class="t1">备注</td>

                  <td class="t2"><textarea id="Remark" name="o_text"></textarea></td>

                </tr>

                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <tr>

                  <td colspan="2"><input class="ui-btn-submit" type="submit" value="提交订单" /></td>

                </tr>

              </tbody>

            </table>

          </form>

        </li>

      </ul>

    </div>

    <!--在线订购 结束-->

    </div>

  </div>

  <!--页脚开始-->

  @include('home/foot')

  <!--页脚结束-->

 </body>

</html>