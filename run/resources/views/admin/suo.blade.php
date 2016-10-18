<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>lock</title>
    <style type="text/css">
        .body{background-image:url("../im/123.png")}
    </style>
</head>
<body class="body">
<div align="center" style="margin-top:300px">
    <h1>{{$username}}</h1><br />
    <form action="jiesuo" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="password" name="password" />
        <input type="submit" value="解锁" />
    </form>
</div>
</body>
</html>