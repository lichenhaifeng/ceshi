  <style>



  table tr td{



    text-align: center;

  }

    table tr th{



    text-align: center;

  }

  </style>

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

  <!--[if lte IE 8]>

      <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />

    <![endif]--> 

  <!-- inline styles related to this page --> 

  <!-- ace settings handler --> 

  <script src="{{url('assets/js/ace-extra.min.js')}}"></script> 



     <div class="page-content"> 

      <div class="page-header"> 

       <h1> 礼品管理<small> <i class="icon-double-angle-right"></i>礼品列表</small> </h1> 

      </div>

      <!-- /.page-header --> 

      <div class="row"> 

       <div class="col-xs-12"> 

        <!-- PAGE CONTENT BEGINS --> 

        <div class="row"> 

         <div class="col-xs-12"> 

          <div class="table-responsive"> 



           <table id="sample-table-1" class="table table-striped table-bordered table-hover"> 

            <h4><a href="{{url('pin')}}">添加礼品</a></h4>

            <tr>

                <td><input type="checkbox"> </td>

                <th>礼品名称</th>

                <th>礼品数量</th>

                <th>礼品积分</th>

                <th>礼品头像</th>

                <th>操作</th>

            </tr>

            @foreach($user as $key=>$v)

            <tbody> 

             <tr  id="fo{{$v->l_id}}">

              <td class="center"> <input type="checkbox"  value="{{$v->l_id}}" name="chckBox"   > </td> 

              <td class="center"><span  onclick="ji({{$v->l_id}})" id="s1{{$v->l_id}}">{{$v->l_name}}</span>

                    <input  type="text" value="{{$v->l_name}}" id="s2{{$v->l_id}}" style="display: none" onblur="kk({{$v->l_id}})"> </td> 



              

              <td class="center"><span  onclick="em({{$v->l_id}})" id="s3{{$v->l_id}}">{{$v->l_sum}}</span>

                    <input  type="text" value="{{$v->l_sum}}" id="s4{{$v->l_id}}" style="display: none" onblur="ail({{$v->l_id}})"></td>

              <td class="center"><span  onclick="ph({{$v->l_id}})" id="s5{{$v->l_id}}">{{$v->l_num}}</span>

                    <input  type="text" value="{{$v->l_num}}" id="s6{{$v->l_id}}" style="display: none" onblur="ot({{$v->l_id}})"></td> 

              <td class="hidden-480"><img src="{{URL($v->l_img)}}" width="50" height="50"></td> 

              <td> 

               <div class="visible-md visible-lg hidden-sm hidden-xs btn-group"> 

                

                <a href="javascript:void(0)" onclick="fun({{$v->l_id}})"><button class="btn btn-xs btn-danger"> <i class="icon-trash bigger-120"></i> </button> </a>

               </div> 

              @endforeach



            </tbody> 

           </table> 

           <tr><input type="button"  value="批量删除"  onclick="deleSeltedRecords()" ></tr>

           <div align="center">

            

           </div>

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

 

  <div style="display:none">

  </div>   

 </body>  

 <script src="{{URL('admin/script/jquery-2.1.4.min.js')}}"></script>

<script>

    function   fun(id){

        // alert(id)

        if(confirm("确定要删除数据么")){

        $.ajax({

            type: "get",

            url: "{{url('dee')}}",

            data: "id="+id,

            success: function(msg){

                if(msg==1){

                    $("#fo"+id).remove()

                }else{

                    alert("删除失败")

                }

            }

        });

    }

    }

    //名称极点极改

    function   ji(id){

        $("#s1"+id).css("display","none");

        $("#s2"+id).css("display","block").focus();

    }

    function   kk(id){

        re=$("#s2"+id).val()

        $.ajax({

            type: "get",

            url: "{{url('na')}}",

            data: "id="+id+"&re="+re,

            success: function(msg){

                if(msg==1){

                    $("#s1"+id).html(re);

                    $("#s1"+id).css("display","block");

                    $("#s2"+id).css("display","none");

                }else{

                    alert("修改失败")

                }

            }

        });

    }

    //数量极点极改

    function   em(id){

        $("#s3"+id).css("display","none");

        $("#s4"+id).css("display","block").focus();

    }

    function   ail(id){

        re=$("#s4"+id).val()

        $.ajax({

            type: "get",

            url: "{{url('su')}}",

            data: "id="+id+"&re="+re,

            success: function(msg){

                if(msg==1){

                    $("#s3"+id).html(re);

                    $("#s3"+id).css("display","block");

                    $("#s4"+id).css("display","none");

                }else{

                    alert("修改失败")

                }

            }

        });

    }

    //积分极点极改

    function   ph(id){

        $("#s5"+id).css("display","none");

        $("#s6"+id).css("display","block").focus();

    }

    function   ot(id){

        re=$("#s6"+id).val()

        //alert($re)

        $.ajax({

            type: "get",

            url: "{{url('nu')}}",

            data: "id="+id+"&re="+re,

            success: function(msg){

                if(msg==1){

                    $("#s5"+id).html(re);

                    $("#s5"+id).css("display","block");

                    $("#s6"+id).css("display","none");

                }else{

                    alert("修改失败")

                }

            }

        });

    }

    //批量删除

    function deleSeltedRecords() {

        var chckBox = document.getElementsByName("chckBox");

        //alert(chckBox)

        var num = chckBox.length;

        var ids = "";

        for (var index = 0; index < num; index++) {

            if (chckBox[index].checked) {

                ids += chckBox[index].value + ",";

            }

        }

        var ids= ids.substring(0,ids.length -1);

        // alert(ids)

        var arr = ids.split(',');

        if(confirm("确定要删除数据吗")){

        $.ajax({

            type: "get",

            url: "{{url('dede')}}",

            data: "id="+ids,

            success: function(msg){

                  if(msg==1){

                        for(var i in arr){

                            $('#fo'+arr[i]).remove();

                            

                        }   

                  }else{

                    alert('删除失败');

                  }

            }

        });



    }

    }



</script>