<?php 

if (empty($_POST["name"])){
	die("A Name is required");
}

if (empty($_POST["message"])){
	die(" A message is required");
}

if ( ! preg_match("/[0-2]/", $_POST["priority"])){
	die("Priority must contain at least 1 choice");
}

if (empty($_POST["terms"])){
	die("You must agree with our terms and conditions");
}


?>
 