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
<div class="page-content" id="ss">
    <div class="page-header">
        <h1> 兑换管理<small> <i class="icon-double-angle-right"></i>兑换列表</small> </h1>
    </div>
    <!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                            <h4>  <input type="text"  id="sou" value="{{$sou}}"><input type="button" value="搜索" onclick="sou()"> </h4>
                            <tr>
                                <td>礼品名</td>

                                <th>兑换人</th>

                                <th>手机号</th>

                                <th>地址</th>

                                <th>礼品简介</th>

                                <th>状态</th>

                            </tr>

                            @foreach($user as $key=>$v)

                                <tbody>

                                <tr>
                                    <td class="center">{{$v->l_name}}</td>
                                    <td class="center">{{$v->g_name}}</td>

                                    <td class="center">{{$v->g_phone}} </td>
                                    <td class="center">{{$v->g_address}} </td>
                                    <td class="center"> {{$v->g_remark}}</td>
                                    <td class="center">
                                        @if($v->g_status==0)
                                            <input type="button" value="通过" onclick="shen({{$v->g_id}})" >||  <input type="button" value="不通过" onclick="shenbu({{$v->g_id}})" >
                                        @elseif($v->g_status==1)
                                            审核通过
                                        @else($v->g_status==2)
                                            审核未通过
                                        @endif
                                    </td>
                                @endforeach




                                </tbody>

                        </table>
                        {!! $user->render() !!}


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
    //搜索
    function   sou(){
        var sou= $("#sou").val();
        if(sou==""){
            alert("搜索为空");
        }
        $.ajax({

            type: "get",

            url: "{{url('duisou')}}",

            data: "sou="+sou,

            success: function(msg){
                $("#ss").html(msg)
            }

        });
    }
    //审核通过
    function   shen(id){

        $.ajax({

            type: "get",

            url: "{{url('shen')}}",

            data: "id="+id,

            success: function(msg){
                $("#ss").html(msg)
            }

        });
    }
    //审核不通过
    function   shenbu(id){

        $.ajax({

            type: "get",

            url: "{{url('shenbu')}}",

            data: "id="+id,

            success: function(msg){
                $("#ss").html(msg)
            }

        });
    }



</script>