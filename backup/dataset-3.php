
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "food_web";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 
 
$sql = "INSERT INTO USERS (username, userpass)
VALUES ('Red', 'nmsl')";
 
if ($conn->query($sql) === TRUE) {
    echo "new data has been successfully inserted1";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
