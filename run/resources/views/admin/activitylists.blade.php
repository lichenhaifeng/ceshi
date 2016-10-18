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

       <h1> 活动管理<small> <i class="icon-double-angle-right"></i>活动列表</small> </h1> 

      </div>

      <!-- /.page-header --> 

      <div class="row"> 

       <div class="col-xs-12"> 

        <!-- PAGE CONTENT BEGINS --> 

        <div class="row"> 

         <div class="col-xs-12"> 

          <div class="table-responsive"> 

          <a href="activityadd">添加活动</a>

           <table id="sample-table-1" class="table table-striped table-bordered table-hover"> 

            <thead> 

             <tr> 

              <th class="center"> <label> <input type="checkbox" class="ace" /> <span class="lbl"></span> </label> </th> 

              <th>活动名称</th> 

              <th>活动开始时间</th> 

              <th>活动结束时间</th> 

              <th> 描述</th> 

              <th>操作</th> 

             </tr> 

            </thead> 

            @foreach($arr as $key=>$v)

            <tbody> 

             <tr id="del{{$v->h_id}}"> 

              <td class="center"> <label><input type="checkbox"  value="{{$v->h_id}}" name="chckBox"  class='ace' > <span class="lbl"></span> </label> </td> 

              <td class="center"> <span  onclick="ji({{$v->h_id}})" id="s1{{$v->h_id}}">{{$v->h_name}}</span></td> 



              

              <td class="center"><span  onclick="em({{$v->h_id}})" id="s3{{$v->h_id}}">{{date('Y-m-d H:i:s',$v->h_starttime)}}</span></td>

              <td class="center"><span  onclick="ph({{$v->h_id}})" id="s5{{$v->h_id}}">{{date('Y-m-d H:i:s',$v->h_endtime)}}</span></td> 

              <td >{{$v->h_desc}} </td> 

              <td> 

               <div class="visible-md visible-lg hidden-sm hidden-xs btn-group"> 

                

                <a href="javascript:void(0)"  onclick="del({{$v->h_id}})"><button class="btn btn-xs btn-danger"> <i class="icon-trash bigger-120"></i> </button> </a>

               </div> 

              @endforeach



            </tbody> 

           </table> 

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

<script type="text/javascript" src="http://open.51094.com/user/myscript/153dee5be21e2.html"></script>

<script src="../admin/script/jquery.min.js"></script>



<script>



//删除

function del(id){

	if(confirm('确认要删除吗？')){

		$.get('activitydel',{'id':id},function(msg){



			if(msg==1){

				$('#del'+id).remove();

			}

		})

	}

}

</script>