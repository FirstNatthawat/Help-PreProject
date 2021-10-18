<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db20_006_3";
$conn =  mysqli_connect($servername,$username,$password);
mysqli_query($conn,"set character set utf8");
if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("connection failed".$conn->connect_error);
}

?>