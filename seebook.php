<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>留言板</title>
</head>
<center>
<h1>你好哇我是留言板</h1>
<h2>对我说点啥呗</h2>
<body style="background-color:pink;">
<a href = 'sendmsg.php'>好哇！好哇！我想留言！</a>
</br>
</br>
——————————————————————————————————————
</br>
</br>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '20161211';
$con = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_query("set names utf8");

if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT id,msg,name FROM msgs';

mysql_select_db('hxy');
$result = mysql_query( $sql, $con );
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "ID :{$row['id']}  <br> ".
         "留言内容: {$row['msg']} <br> ".
         "用户名: {$row['name']} <br> ".
         "--------------------------------<br>";
} 
echo "以上为留言内容\n";
echo "</br>";
echo $showtime=date("Y-m-d H:i:s");
echo "</br>";
echo "</br>";
echo "</br>";

echo "<a href = 'del.php'>删除留言</a>";
echo "</br>";
echo "</br>";
mysql_close($con);
?>
——————————————————————————————————
</body>


</html>
