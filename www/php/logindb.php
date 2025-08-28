<?php
// $host = "localhost";
// $dbname = "login_db";
// $username = "root";
// $password = "";

$conn = mysqli_connect("localhost", "root","","login_db");
if(!$conn){
	die("connection Error");
	/*echo 'Connection error:'.mysql_connect_errno();*/
}

// $mysql = new mysqli(hostname:	$host, 
// 					username:	$username,
// 					password:	$password,
// 					database:	$dbname);
// if (mysqli->connect_errno)
// {
// 	die("connection error:" . $mysqli->connect_error);
// }

// return $mysql;

?>