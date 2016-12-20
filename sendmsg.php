<html>
<head>
<meta charset="utf-8">
<title>留言板</title>
</head>

<body style="background-color:pink;">
<center>
<h1>留言板</h1>
<h1>(๑•ᴗ•๑)</h2>
想要<a href = login.php >重新登录</a>吗？

<div class = "biaodan">
<form method="post" action="sendmsgcheck.php"> 

 <p> 留言：
	<input type = "text" name = "sendmsg" size="40" style="width:500px;hight:200px">
 </p>
 <p> 
	用户名：
	<input type = "text" name = "name" value="<?php echo $_COOKIE['name'];?>">
 </p>
   <input type="submit" name="sub" value="提交"> 
</form>
</div>

</body>


</html>
