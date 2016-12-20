<?php
$servername = "localhost";
$username = "root";
$password = "20161211";
$dbname = "hxy";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query("set names utf8");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Username VARCHAR(30) NOT NULL,
Userpw VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>
