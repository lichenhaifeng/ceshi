还有<span id='numDiv'>3</span>秒自动跳转，或者<a href="{{URL('run')}}">点此登录</a>

<script type="text/javascript">
var num=3;
var interval=setInterval(function(){
if(num==0){
window.location.href="{{URL('run')}}"; 
}
numDiv.innerHTML=num--;
},1000);
</script>