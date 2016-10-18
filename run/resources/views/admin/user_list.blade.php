  <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" /> 

  <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}" /> 

  <!--[if IE 7]>

      <link rel="stylesheet" href="../assets/css/font-awesome-ie7.min.css" />

    <![endif]--> 

  <!-- page specific plugin styles --> 

  <!-- fonts --> 

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> 

  <!-- ace styles --> 

  <link rel="stylesheet" href="{{url('assets/css/ace.min.css')}}" /> 

  <link rel="stylesheet" href="{{url('assets/css/ace-rtl.min.css')}}" /> 

  <link rel="stylesheet" href="{{url('assets/css/ace-skins.min.css')}}" /> 

     <div class="page-content"> 

      <div class="page-header"> 

       <h1> 用户管理<small> <i class="icon-double-angle-right"></i>用户添加</small> </h1> 

      </div>

      <!-- /.page-header --> 

      <div class="row"> 

       <div class="col-xs-12"> 

        <!-- PAGE CONTENT BEGINS --> 

        <div class="row"> 

         <div class="col-xs-12"> 

          <div class="table-responsive"> 

          

          <form action="{{url('user_add')}}" method="post" enctype="multipart/form-data"  onsubmit="return  sad()">

          <center>

           <table id="sample-table-1" class="table table-striped table-bordered table-hover"> 

            <tr>

              <td align="center">姓名：</td>

              <td>

                <input type="text"  class="easyui-textbox"   id="name"  name="username"  onblur="s_name()"/>

                <span id="k_name"></span>

              </td>

            </tr>

            <tr>

              <td align="center">密码：</td>

              <td>

                <input type="password"  class="easyui-textbox"    id="pwd" name="password"  onblur="c_pwd()"/>

                <span id="k_pwd"></span>

              </td>

            </tr>

            <tr>

                <td align="center">邮箱：</td>

                <td><input type="text"  class="easyui-textbox"  id="email"  name="email"  onblur="c_email()"/>

                <spans id="k_email"></span></td>

            </tr>

            <tr>

              <td align="center">手机号：</td>

              <td>

                <input type="text"  class="easyui-textbox"   id="photo" name="photo" onblur="c_photo()" />

                <span id="k_photo"></span>

              </td>

            </tr>

            <tr>

              <td align="center">用户头像：</td>

              <td>

               <span class="file"><input type="file"   name="myfile" id="myfile" onblur="c_myfile()" /> </span><span id="k_myfile"></span>

              </td>

            </tr>

            <tr>

              <td align="right"><input type="reset" class="btn"></td>

              <td align="left">

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <input type="submit" class="btn btn-info" value="添加" />

              </td>

            

            </tr>

           </table> 

           </center>

           </form>

           

          </div>

          <!-- /.table-responsive --> 

         </div>

         <!-- /span --> 

        </div>

        <!-- /row --> 

        <div class="hr hr-18 dotted hr-double"></div> 

        <div class="hr hr-18 dotted hr-double"></div> 

        </td> 

             </tr> 

            </tbody> 

           </table> 

          </div> 

         </div> 

        </div> 

        <div id="modal-table" class="modal fade" tabindex="-1"> 

         <div class="modal-dialog"> 

          <div class="modal-content"> 

           <div class="modal-header no-padding"> 

            <div class="table-header"> 

             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <span class="white">&times;</span> </button> Results for &quot;Latest Registered Domains 

            </div> 

           </div> 

           <div class="modal-body no-padding"> 

           </div> 

           <div class="modal-footer no-margin-top"> 

            <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal"> <i class="icon-remove"></i> Close </button> 

            <ul class="pagination pull-right no-margin"> 

             <li class="prev disabled"> <a href="#"> <i class="icon-double-angle-left"></i> </a> </li> 

             <li class="active"> <a href="#">1</a> </li> 

             <li> <a href="#">2</a> </li> 

             <li> <a href="#">3</a> </li> 

             <li class="next"> <a href="#"> <i class="icon-double-angle-right"></i> </a> </li> 

            </ul> 

           </div> 

          </div>

          <!-- /.modal-content --> 

         </div>

         <!-- /.modal-dialog --> 

        </div>

        <!-- PAGE CONTENT ENDS --> 

       </div>

       <!-- /.col --> 

      </div>

      <!-- /.row --> 

     </div>

     <!-- /.page-content --> 

    </div>

    <!-- /.main-content --> 

    <div class="ace-settings-container" id="ace-settings-container"> 

     <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn"> 

      <i class="icon-cog bigger-150"></i> 

     </div> 

     <div class="ace-settings-box" id="ace-settings-box"> 

      <div> 

       <div class="pull-left"> 

        <select id="skin-colorpicker" class="hide"> <option data-skin="default" value="#438EB9">#438EB9</option> <option data-skin="skin-1" value="#222A2D">#222A2D</option> <option data-skin="skin-2" value="#C6487E">#C6487E</option> <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option> </select> 

       </div> 

       <span>&nbsp; Choose Skin</span> 

      </div> 

      <div> 

       <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" /> 

       <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label> 

      </div> 

      <div> 

       <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" /> 

       <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label> 

      </div> 

      <div> 

       <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" /> 

       <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label> 

      </div> 

      <div> 

       <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" /> 

       <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label> 

      </div> 

      <div> 

       <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" /> 

       <label class="lbl" for="ace-settings-add-container"> Inside <b>.container</b> </label> 

      </div> 

     </div> 

    </div>

    <!-- /#ace-settings-container --> 

   </div>

   <!-- /.main-container-inner --> 

   <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a> 

  </div>

  <!-- /.main-container --> 

  <!-- basic scripts --> 

  <!--[if !IE]> --> 

  <!-- <![endif]--> 

  <!--[if IE]>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<![endif]--> 

  <!--[if !IE]> --> 

  <script type="text/javascript">

      window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");

    </script> 

  <!-- <![endif]--> 

  <!--[if IE]>

<script type="text/javascript">

 window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");

</script>

<![endif]--> 

  <script type="text/javascript">

      if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

    </script> 

  <script src="../assets/js/bootstrap.min.js"></script> 

  <script src="../assets/js/typeahead-bs2.min.js"></script> 

  <!-- page specific plugin scripts --> 

  <script src="../assets/js/jquery.dataTables.min.js"></script> 

  <script src="../assets/js/jquery.dataTables.bootstrap.js"></script> 

  <!-- ace scripts --> 

  <script src="../assets/js/ace-elements.min.js"></script> 

  <script src="../assets/js/ace.min.js"></script> 

  <!-- inline scripts related to this page --> 

 <script src="admin/script/jquery-2.1.4.min.js"></script>

<script type="text/javascript">

    flag=false;

    function s_name() {

        //alert(1);die;

        var   re=document.getElementById('name').value;

        qq=/^\w{1,}$/;

        if(re==""){

            document.getElementById('k_name').innerHTML="不能为空";

            flag=false;

        }

        else{

            ww=qq.test(re);

            if(!ww){

                document.getElementById('k_name').innerHTML="格式不正确";

                flag=false;

            }else{

                document.getElementById('k_name').innerHTML="ok"

                flag=true;

            }



        }







    }

    function c_pwd(){

        //alert(1);die;

        var   re=document.getElementById('pwd').value;

        qq=/^\w{1,}$/;

        if(re==""){

            document.getElementById('k_pwd').innerHTML="不能为空";

            flag=false;

        }else{

            ww=qq.test(re);



            if(!ww){

                document.getElementById('k_pwd').innerHTML="格式不正确";

                flag=false;

            }else{

                document.getElementById('k_pwd').innerHTML="ok";

                flag=true;

            }

        }



    }

    function c_email(){

        //alert(1);die;

        var   re=document.getElementById('email').value;

        var qq = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;



        if(re==""){

            document.getElementById('k_email').innerHTML="不能为空";

            flag=false;

        }else{

            ww=qq.test(re);

            if(!ww){

                document.getElementById('k_email').innerHTML="格式不正确";

                flag=false;

            }else{

                document.getElementById('k_email').innerHTML="ok";

                flag=true;

            }

        }



    }

    function c_photo(){

        //alert(1);die;

        var   re=document.getElementById('photo').value;

        qq=/^1[34578]\d{9}$/;



        if(re==""){

            document.getElementById('k_photo').innerHTML="不能为空";

            flag=false;

        }else{

            ww=qq.test(re);

            if(!ww){

                document.getElementById('k_photo').innerHTML="格式不正确";

                flag=false;

            }else{

                document.getElementById('k_photo').innerHTML="ok";

                flag=true;

            }

        }



    }

    function c_myfile(){

        //alert(1);die;

        var   re=document.getElementById('myfile').value;



        if(re==""){

            document.getElementById('k_myfile').innerHTML="不能为空";

            flag=false;

        }

    }

   function sad(){

       if(flag==true){

           return true;

       }else{

           return false;

       }

   }

</script>



  <div style="display:none">

  </div>   

 </body>

</html>

