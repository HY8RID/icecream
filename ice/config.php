<?php 

$uname = "root";
$password = "";
$sname = "localhost";

$db_name = "icecream";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
else{
	echo "Great Success";
}
