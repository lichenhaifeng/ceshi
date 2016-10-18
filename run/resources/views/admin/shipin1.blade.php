<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	    <div  id="drop_area" style="border:3px dashed silver;width:200px; height:200px">将图片拖拽到此</div>  
    	<button onclick="xhr2()">ajax上传</button>  
</body>
<script>
		    document.addEventListener("drop",function(e){  //拖离   
        e.preventDefault();      
    })  
    document.addEventListener("dragleave",function(e){  //拖后放   
        e.preventDefault();      
    })  
    document.addEventListener("dragenter",function(e){  //拖进  
        e.preventDefault();      
    })  
    document.addEventListener("dragover",function(e){  //拖来拖去    
        e.preventDefault();      
    })  
	    var box = document.getElementById('drop_area'); //拖拽区域     
    	box.addEventListener("drop",function(e){           
        var fileList = e.dataTransfer.files; //获取文件对象    
        //检测是否是拖拽文件到页面的操作            
        if(fileList.length == 0){                
            return false;            
        }             
        //拖拉图片到浏览器，可以实现预览功能    
        //规定视频格式  
        Array.prototype.S=String.fromCharCode(2);  
        Array.prototype.in_array=function(e){  
            var r=new RegExp(this.S+e+this.S);  
            return (r.test(this.S+this.join(this.S)+this.S));  
        };  
        var video_type=["video/mp4","video/ogg"];  
        
        //创建一个url连接,供src属性引用  
        var fileurl = window.URL.createObjectURL(fileList[0]);                
        if(fileList[0].type.indexOf('image') === 0){  //如果是图片  
            var str="<img width='200px' height='200px' src='"+fileurl+"'>";  
            document.getElementById('drop_area').innerHTML=str;                   
        }else if(video_type.in_array(fileList[0].type)){   //如果是规定格式内的视频   
        	             
            var str="<video width='200px' height='200px' controls='controls' src='"+fileurl+"'></video>";  
            document.getElementById('drop_area').innerHTML=str;        
        }else{ //其他格式，输出文件名  
            //alert("不预览");  
            var str="文件名字:"+fileList[0].name;  
            document.getElementById('drop_area').innerHTML=str;      
        }         
        resultfile = fileList[0];             
    },false);  

        function xhr2(){  
        var xhr = new XMLHttpRequest();//第一步  
        //新建一个FormData对象  
        var formData = new FormData(); //++++++++++  
        //追加文件数据  
        formData.append('file', resultfile);  
        formData.append('_token',"{{csrf_token()}}" );
        //post方式  
        xhr.open('POST', "{{URL('shipin/ti')}}"); //第二步骤  
        //发送请求  
        xhr.send(formData);  //第三步骤  
        //ajax返回  
        xhr.onreadystatechange = function(){ //第四步  
    　　　　if ( xhr.readyState == 4 && xhr.status == 200 ) {  
    　　　　　　console.log( xhr.responseText );        
    　　　　}  
    　　};  
        //设置超时时间  
        xhr.timeout = 10000;  
        xhr.ontimeout = function(event){  
    　　　　alert('请求超时！');  
    　　}           
    }  
</script>
</html>