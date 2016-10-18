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
       <h1> 用户管理<small> <i class="icon-double-angle-right"></i>用户注册列表</small> </h1> 
      </div>
      <!-- /.page-header --> 
      <div class="row"> 
       <div class="col-xs-12"> 
        <!-- PAGE CONTENT BEGINS --> 
        <div class="row"> 
         <div class="col-xs-12"> 
          <div class="table-responsive"> 
         <!--  <a href="peiadd">配送员添加</a> -->
           <table id="sample-table-1" class="table table-striped table-bordered table-hover"> 

            <tr>
				<th><input type="checkbox" id="all"/></th>
        <th>头像</th>
				<th>用户名</th>
				<th>邮箱</th>
				<th>手机号</th>
        <th>积分</th>
			</tr>
            @foreach($data as $key=>$v)
            <tbody> 
             <tr id="lis{{$v->id}}">
              <td class="center"><input type="checkbox" name="xuan[]" value="{{$v->id}}" /></td> 
              <td><img src="{{$v->img}}" alt="" width="35" height="35"></td>
              <td class="center">{{$v->username}}</td> 

              
              <td class="center">{{$v->email}}</td>
              <td value="<?php echo $v->id; ?>"><span class="name"><?php echo $v->photo; ?></span></td> 
              <td>{{$v->num}}</td>
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
//批量删除
	function deleSeltedRecords(){
		if(confirm('确认要删除吗？')){
      var xuan=document.getElementsByName('xuan[]');
    var str='';
    for(i=0;i<xuan.length;i++){

      if(xuan[i].checked==true){

        str+=','+xuan[i].value;
      }
    }
    var id=str.substr(1);
    var arr = id.split(',');
    $.get('peidelall',{'id':id},function(msg){
      
        if(msg==1){
          for(var i in arr){
            $('#lis'+arr[i]).remove();
            
          }
        }else{
          alert('至少选择一条数据');
        }
        // alert(msg)
    });
    }
	}
	

	//手机号即点即改
 $(document).on('click','span',function(){  
         old_val=$(this).html(); 
        $(this).parent().html("<input type=\'text\' value="+old_val+">");  
         
    })  
  
    $(document).on('blur','input[type=text]',function(){  
        var obj=$(this); 
        var id=$(this).parent().attr('value'); //获取要修改内容的id  
        var val=$(this).val(); //获取修改后的值 
        $.ajax({  
            type:'get',  
            url:'peiupdate',  
            data:{  
                id:id,  
                val:val,
                // old_val:old_val  
            },  
            success:function(msg){  
                if(msg == 1){  
                     obj.parent().html("<span class='name'>"+val+"</span>"); 
                }
  				// alert(msg);
            }  
        })  
    })


    //全选全不选
    
	$("#all").click(function(){
		var xuan=document.getElementsByName('xuan[]');  
	        
	        for(i=0;i<xuan.length;i++){
	        	if(this.checked){
	        		xuan[i].checked=true;
	        	}else{    
	        		xuan[i].checked=false;
	    		}    
			
			}
	});  
</script>