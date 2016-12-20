<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>注册结果</title>

</head>
<center>
<body style="background-color:RosyBrown ;"> 

<?php
$con = mysql_connect("localhost","root","20161211");//连接
mysql_query("set names utf8");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hxy", $con);//如果成功返回True

$pass=md5($_POST['password']);

$sql="INSERT INTO MyGuests (Username,Userpw) VALUES('$_POST[name]','$pass')";
//插入表单
if (!mysql_query($sql,$con))//没有插入
  {
  die('Error: ' . mysql_error());
  }
echo "注册成功";
echo "</br>";
echo "<a href = 'login.php' >登录</a>";
//echo "$pass";
mysql_close($con)//关闭数据库连接
?>
