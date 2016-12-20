<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>注册页面</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<center>
<body style="background-color:RosyBrown;"> 
<h1>来注册！</h1>


<form method="post" action="in.php"> 

 <p>  名字: <input type="text" name="name" >
   <span class="error">*</span>
 </p>
 
 <p> 
   密码：<input type="password" name="password">
	<span class="error">* </span>
 </p>
	
   <input type="submit" name="submit" value="提交"> 
</form>
 <?php
if (isset($_REQUEST['submit']))
{
    if (empty($_POST["name"]))
    {
      echo" <script>alert('用户名不能为空!')</script>";
    }
 
    

	if (empty($_POST["password"]))
	{
		
      echo" <script>alert('密码不能为空!')</script>";
	}
}
?>

</body>
</html>
