@include('home/head')
    <!--顶部结束-->
    <div  id="content" >
      <div class="guestbook">
        <ul class="wxlist">
          <li>
            <div class="ChannelName"><h1>在线留言</h1></div>
            <form method="post" id="frm" action="/channel/guestbookadd/l/cn">
              <table border="0" cellpadding="0" cellspacing="3" class="guestbooktable">
                <tr>
                  <td class="t1"><span class="required">标题*</span></td>
                  <td class="t2"><input id="MessageTitle" name="MessageTitle" type="text"  maxlength="100" value="" /></td>
                </tr>
                <tr>
                  <td class="t1">内容</td>
                  <td class="t2"><textarea id="MessageContent"   name="MessageContent"></textarea></td>
                </tr>
                <tr>
                  <td class="t1">姓名</td>
                  <td class="t2"><input id="GuestName" name="GuestName" type="text"  maxlength="100" value="" /></td>
                </tr>
                <tr>
                  <td class="t1">电话</td>
                  <td class="t2"><input id="Contact" name="Contact" type="text"  maxlength="100" value="" /></td>
                </tr>
                <tr>
                  <td class="t1"><span class="required">验证码*</span></td>
                  <td class="t2"><input id="verifycode" style="width:80px; " name="verifycode" type="text" maxlength="4" />&nbsp;<img  src="<>"  onclick="ChangeCode()" style="cursor:pointer;" id="code"  align="absMiddle"  alt="重新获取验证码"  title="重新获取验证码" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input class="ui-btn-submit" type="submit" name="submit"  value="提交" /></td>
                </tr>
              </table>
              <input type="hidden" name="__hash__" value="20e9069c074db1487c38924f89012b3f_b88e23258e1340f488f4b0c6cf9116f3" />
            </form>
          </li>
        </ul>
      </div>
    </div>
    <!--页脚开始-->
    @include('home/foot')
    <!--页脚结束-->
  </body>
</html>