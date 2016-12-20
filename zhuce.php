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
<?php
$nameErr = $password="";
$name = $passwordErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "名字是必需的";
    }
    else
    {
        $name = test_input($_POST["name"]);
       
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr = "只允许字母和空格"; 
        }
    }
    

	if (empty($_POST["password"]))
	{
		$nameErr = "密码是必需的";
	}
	else
	{
		$password = test_input($_POST["password"]);
	}
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<form method="post" action="in.php"> 

 <p>  名字: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
 </p>
 
 <p> 
   密码：<input type="password" name="password">
	<span class="error">* <?php echo $passwordErr;?></span>
 </p>
	
   <input type="submit" name="submit" value="提交"> 
</form>


</body>
</html>
