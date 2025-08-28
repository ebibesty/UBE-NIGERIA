<?php

$conn = mysqli_connect("localhost", "root","","tutorials");

if(!$conn){
	die("connection Error");
	/*echo 'Connection error:'.mysql_connect_errno();*/
}

echo "SUCCESSFUL!";


?>