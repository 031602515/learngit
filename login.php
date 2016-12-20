<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>用户登陆</title>
</head>
<center>

<body style="background-color:pink;">

<?php
if($_COOKIE['name']!='')//如果cookie存在
	{
		$CKNAME = $_COOKIE['name'];//把cookie填入表格
	}
if($_COOKIE['password']!='')
	{
		$CKPWD = $_COOKIE['password'];
	}

?>

<form name="myform" method="POST" action="logincheck.php">

<input type="text" name="name" value="<?=$CKNAME;?>" /><br/>
<input type="password" name="pwd" value="<?=$CKPWD;?>" /><br/>
<input type="submit" name="sub" value="登录" />

</form>


<?
if($_POST['sub']!='')//提交
{
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];//$pwd=提交表单中的密码
	if($pwd!=$CKPWD)//如果提交的密码和cookie中的密码不同
	{
		$pwd = md5($pwd);//把提交的密码加密
	}
	
	setcookie("name", $name, time()+3600*24*30);
    setcookie("password", $pwd, time()+3600*24*30);//并且存入cookie中
}
?>


</body>
</html>
