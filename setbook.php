<?php
$servername = "localhost";
$username = "root";
$password = "20161211";
$dbname = "hxy";

$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query("set names utf8");

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 使用 sql 创建数据表
$sql = "CREATE TABLE msgs 
(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
msg text(200) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table msgs created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
