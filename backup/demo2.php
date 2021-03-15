
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
 
mysqli_close($conn);
?>
