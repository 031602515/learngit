<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>发送留言到留言板</title>
</head>


<body style="background-color:pink;">
<center>
<?php
$con = mysql_connect("localhost","root","20161211");
mysql_query("set names utf8");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hxy", $con);

$sql="INSERT INTO msgs (msg,name) VALUES('$_POST[sendmsg]','$_POST[name]')";
//插入表单
if (!mysql_query($sql,$con))//没有插入
  {
  die('Error: ' . mysql_error());
  }
echo "留言已经发送到留言板";
echo "</br>";
echo "<a href='seebook.php'>查看留言板</a>";
?>

</body>
</html>
