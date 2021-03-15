<?php
$hostName = "localhost";
$usrName = "root";
$passWord = "root";
$port = "3306";
$dbname = "food_map";
$content = mysqli_connect($hostName,$usrName,$passWord,$dbname,$port);
mysqli_set_charset($content,'utf-8');
if(!$content){
    die("connect failed!：".mysqli_connect_error());
}else{
    echo "connect success!";
}
$sql="select * from food_users";

$res=$content->query（$sql）；

$data=$res->fetch_all（）；

var_dump（$data）；
mysqli_close($content);
?>