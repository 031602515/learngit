<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>用户登陆</title>
</head>
<center>

<body style="background-color:pink;">


<?php

//header("content-type:text/html;charset=utf-8");

$con=mysql_connect("localhost","root","20161211") or die("数据库连接失败");

mysql_query("set names utf8");

mysql_select_db("hxy");

$name=$_POST['name'];//$name是提交的（name）name的变量

$pwd=md5($_POST['pwd']);//$pwd是提交的（name）pwd的变量


$sql="select * from MyGuests where Username='{$name}'"; 
//↑从MyGuests中选取所有Username=$name的变量

$result=mysql_query($sql); //查询

$num=mysql_num_rows($result); //获取记录数

if($num){ // 如果用户存在

   $row=mysql_fetch_array($result);//取出用户所在的行

   if($pwd===$row['Userpw']){// 如果提交的（name）pwd==数据库中的Userpw
    echo "成！功！登！录！";
	header("location:sendmsg.php");
    }
	else
	{
		echo "密码不正确";
		echo "<a href='login.php'>返回</a>";
	} 

}

else
	
{

 echo "用户不存在";

 echo "<a href='login.php'>返回</a>";

}
?>


</body>
</html>
