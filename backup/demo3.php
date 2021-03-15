
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "food_map";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 
 
// 使用 sql 创建数据表
$sql = "CREATE TABLE USERS (
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "create failed: " . $conn->error;
}
 
$conn->close();
?>
