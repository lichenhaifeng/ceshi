<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>奔跑者服务申请系统</title>

    <link href="{{URL('admin/css/index.css')}}" rel="stylesheet" />

    <link href="{{URL('admin/css/themes/default/easyui.css')}}" rel="stylesheet" />

    <link href="{{URL('admin/css/themes/icon.css')}}" rel="stylesheet" />

    <link href="{{URL('admin/css/demo.css')}}" rel="stylesheet" />

    <script src="{{URL('admin/script/jquery.min.js')}}"></script>

    <script src="{{URL('admin/script/jquery.easyui.min.js')}}"></script>

    <script>

        $(function () {

            bindEvent();

        });

        function bindEvent() {

            $(".btn_menu").click(function () {

                var title = $(this).text();

                var url = $(this).attr("url");

                var isSelect = $("#container").tabs('exists', title);

                if (isSelect) {

                    $("#container").tabs('select', title);

                    return;

                }

                $("#container").tabs('add', {

                    title: title,

                    content: CreateContent(url),

                    closable: true

                });

            });

        }



        function CreateContent(url) {

            var strHtml = '<iframe src="' + url + '" scrolling="no" frameborder="0" fit="true" style="height:110%;width:100%;min-height:600px;"></iframe>';

            return strHtml;

        }

    </script>    

    <style>
        #time{ font-size:20px; margin-right: 20px;}
    </style>

</head>

<body>


    <div id="layout_div" class="easyui-layout">

        <div data-options="region:'north',border:false" style="overflow:hidden; height:70px;background:#338FCC;padding:10px;padding-left:30px;">

            <div style="float:left; height:70px;">



            </div>

            <div style="color:#fff  ;font-size:2em; float:left;margin-left:30px;">

                奔跑者申请系统

            </div>
            <div style="float:right;height:70px; margin-right:50px;">
                <span id="time"></span>
                <script type="text/javascript">

                //定时执行fun函数
                setInterval('fun()',100);
                function fun(){
                //获取系统时间
                var time=new Date();
                //将时间转换为字符串格式
                aa=time.toLocaleString();
                //写入到span里，写入内容为上一项获取的系统时间
                document.getElementById('time').innerHTML=aa;
                }

                </script>
                <span>  <a href="{{URL("admin/suo")}}">锁屏</a> </span>
                <span>您好，<font color="red">{{$name}}</font>！<img src="{{$row->img}}" alt="" width="35" height="35">&nbsp;&nbsp;</span>

                <span><a href="{{URL('admin/tuichu')}}">注销</a></span>

            </div>

        </div>

        <div data-options="region:'west',split:false,title:'菜单',collapsible:false" style="width:170px;">

            <div id="menu" class="easyui-accordion" fit="true">

                <!-- a标签url属性中填写（/控制器名称/视图名称） -->

                <div title="管理员管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{url('admin/user_list')}}">用户管理</a></li>

                    </ul>

                </div>

                <div title="礼品管理" data-options="iconCls:'icon-tip'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{url('admin/group_list')}}">礼品管理</a></li>

                    </ul>

                </div>

                <div title="活动管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/activitylists')}}">活动管理</a></li>

                    </ul>

                </div>

                <div title="配送员管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/peilists')}}">配送员管理</a></li>

                    </ul>

                </div>
                <div title="用户管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/userlists')}}">前台用户管理</a></li>

                    </ul>

                </div>
                <div title="广告栏添加" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

                    <ul class="easyui-tree">

                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/guang')}}">广告添加</a></li>

                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/gao')}}">广告列表</a></li>

                    </ul>

                </div>
                <div title="订单管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

    <ul class="easyui-tree">


        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/ding')}}">订单列表</a></li>

    </ul>

</div>
<div title="礼品兑换" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">

    <ul class="easyui-tree">


        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/li')}}">礼品列表</a></li>

    </ul>

</div>
                <!-- <div title="视频管理" data-options="iconCls:'icon-man'" style="overflow:auto;padding:10px;">
                
                    <ul class="easyui-tree">
                
                        <li><a href="javascript:;" class="btn_menu" url="{{URL('admin/shipin')}}">视频管理</a></li>
                
                    </ul>
                
                </div> -->

            </div>



        </div>

        <div data-options="region:'south',border:false" style="height:50px; font-size:15px; color:#fff; background:#338FCC;padding:10px; text-align:center">

            © 2016 - 奔跑者申请系统

        </div>

        <div data-options="region:'center'" style="overflow:hidden">

            <div class="easyui-tabs" fit="true" id="container">

                <div title="主页" style="padding:10px">

                    欢迎使用奔跑者申请服务系统

                    <!--<iframe src="/list.html" scrolling="no" frameborder="0" height="1000" width="1100" style="overflow:hidden; margin-bottom:10px;"></iframe>-->

                </div>

            </div>



        </div>

    </div>

</body>



</html>

