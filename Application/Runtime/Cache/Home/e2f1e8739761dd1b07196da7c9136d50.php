<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="/lj/index.php/Home/Index/register" method="POST">
        用户姓名：
        <input type="text" name="username"/>
        <br/>
        用户密码：
        <input type="password" name="password"/>
        <br/>
        <input type="submit" />
    </form>
</body>
</html>