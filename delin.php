<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>删除留言中</title>
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

$id = $_GET['id']; 
$sql="delete from msgs where id='".$id."'"; 
mysql_query($sql,$con);

$mark  = mysql_affected_rows();
 
if($mark>0)
{
 echo "删除成功";
}else
{
 echo  "删除失败";
 echo  "</br>";
 echo "请检查留言id是否存在";
 //die('Error: ' . mysql_error());
 
}
 echo  "</br>";
 echo  "</br>";
echo "<a href = 'seebook.php'>查看留言板</a>";
mysql_close($con);
?>

</body>
</html>
