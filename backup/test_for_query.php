
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "food_web";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 
 
$sql = "SELECT username, userpass  FROM USERS";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo  " user_name: " . $row["username"]. " " . $row["userpass"]. "<br>";
    }
} else {
    echo "0 result";
}
$conn->close();
?>
