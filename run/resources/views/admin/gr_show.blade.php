<center>

    <table border="1">
        <h4><a href="{{url('pin')}}">添加礼品</a></h4>
        <tr>
            <td><input type="checkbox"> </td>
            <td>礼品名称</td>
            <td>礼品数量</td>
            <td>礼品积分</td>
            <td>礼品头像</td>
            <td>操作</td>
        </tr>
        @foreach($user as $v)
            <tr  id="fo">
                <td><input type="checkbox"  value="{{$v['l_id']}}" name="chckBox"   ></td>

                <td><span  onclick="ji({{$v['l_id']}})" id="s1{{$v['l_id']}}">{{$v['l_name']}}</span>
                    <input  type="text" value="{{$v['l_name']}}" id="s2{{$v['l_id']}}" style="display: none" onblur="kk({{$v['l_id']}})">
                </td>

                <td><span  onclick="em({{$v['l_id']}})" id="s3{{$v['l_id']}}">{{$v['l_sum']}}</span>
                    <input  type="text" value="{{$v['l_sum']}}" id="s4{{$v['l_id']}}" style="display: none" onblur="ail({{$v['l_id']}})">
                </td>
                <td><span  onclick="ph({{$v['l_id']}})" id="s5{{$v['l_id']}}">{{$v['l_num']}}</span>
                    <input  type="text" value="{{$v['l_num']}}" id="s6{{$v['l_id']}}" style="display: none" onblur="ot({{$v['l_id']}})">
                </td>
                <td><img src="../{{$v['l_img']}}" width="100" height="100"></td>
                <td><a href="#" onclick="fun({{$v['l_id']}})">删除</a></td>
            </tr>
        @endforeach
        <tr><input type="button"  value="批量删除"  onclick="deleSeltedRecords()" ></tr>
    </table>

</center>