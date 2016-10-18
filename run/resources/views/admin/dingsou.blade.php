<div class="page-content" id="ss">

    <div class="page-header">

        <h1> 订单管理<small> <i class="icon-double-angle-right"></i>订单列表</small> </h1>

    </div>

    <!-- /.page-header -->

    <div class="row">

        <div class="col-xs-12">

            <!-- PAGE CONTENT BEGINS -->

            <div class="row">

                <div class="col-xs-12">

                    <div class="table-responsive">



                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">

                            <h4>  <input type="text"  id="sou" value="{{$sou}}" ><input type="button" value="搜索" onclick="sou()"> </h4>

                            <tr>

                                <td>订单id </td>

                                <th>订单号</th>

                                <th>用户</th>

                                <th>地址</th>

                                <th>礼品简介</th>

                                <th>状态</th>

                            </tr>

                            @foreach($user as $key=>$v)

                                <tbody>

                                <tr>
                                    <td class="center">{{$v->o_id}}</td>
                                    <td class="center">{{$v->o_bian}}</td>

                                    <td class="center">{{$v->username}} </td>
                                    <td class="center">{{$v->o_dizhi}} </td>
                                    <td class="center"> {{$v->o_text}}</td>
                                    <td class="center">
                                        @if($v->o_type==1)
                                            等待抢单
                                        @elseif($v->o_type==2)
                                            正在配送
                                        @elseif($v->o_type==3)
                                            等待用户确认
                                        @else
                                            完成
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
