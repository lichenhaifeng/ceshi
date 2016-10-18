<center>

    <table border="1">
        <h4><a href="{{url('tian')}}">添加管理员</a></h4>
        <tr>
            <td><input type="checkbox"> </td>
            <td>用户头像</td>
            <td>姓名</td>

            <td>邮箱</td>
            <td>手机号</td>
            <td>操作</td>
        </tr>
        @foreach($user as $v)
            <tr  id="fo">
                <td><input type="checkbox"  value="{{$v['u_id']}}" name="chckBox"   ></td>
                <td><img src="../{{$v['img']}}"  width="100" height="100"> </td>
                <td><span  onclick="ji({{$v['u_id']}})" id="s1{{$v['u_id']}}">{{$v['username']}}</span>
                    <input  type="text" value="{{$v['username']}}" id="s2{{$v['u_id']}}" style="display: none" onblur="kk({{$v['u_id']}})">
                </td>

                <td><span  onclick="em({{$v['u_id']}})" id="s3{{$v['u_id']}}">{{$v['email']}}</span>
                    <input  type="text" value="{{$v['email']}}" id="s4{{$v['u_id']}}" style="display: none" onblur="ail({{$v['u_id']}})">
                </td>
                <td><span  onclick="ph({{$v['u_id']}})" id="s5{{$v['u_id']}}">{{$v['photo']}}</span>
                    <input  type="text" value="{{$v['photo']}}" id="s6{{$v['u_id']}}" style="display: none" onblur="ot({{$v['u_id']}})">
                </td>

                <td><a href="#" onclick="fun({{$v['u_id']}})">删除</a></td>
            </tr>
        @endforeach
        <tr><input type="button"  value="批量删除"  onclick="deleSeltedRecords()" ></tr>
    </table>

</center>
