
<?php
$servername = "localhost";
$username = "root";
$password = "root";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
 
// 创建数据库
$sql = "CREATE DATABASE food_web";
if (mysqli_query($conn, $sql)) {
    echo "mission success";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 
 
// 使用 sql 创建数据表
$sql = "CREATE TABLE USERS (
username VARCHAR(30) NOT NULL,
userpass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "create failed: " . $conn->error;
}

mysqli_close($conn);
?>
