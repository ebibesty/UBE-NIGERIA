<?php 

$gender = "";
$mobileNumber = $_POST["telephone"];

if (empty($_POST["first-name"])){
	die("Your first name is required");
}
if (empty($_POST["last-name"])){
	die("Your last name is required");
}
if (isset($_POST["gen"])){
	$error = $error . "empty gender <br/>";
}
else{
	$gender = $_POST["gen"];
	if($gender == "Male"){
		$Mchecked = "checked";
	}
	else if ($gender == "Female"){
		$Fchecked = "checked";
	}
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))die("Valid email is required");

if (strlen($_POST["password"]) < 8){
	# code...
	die("Password must contains at least 8 character");
}
if ( ! preg_match("/[a-z]/i", $_POST["password"])){
	die("Password must contains at least 1 letter");
}
if ( ! preg_match("/[0-9]/", $_POST["password"])){
	die("Password must contains at least 1 number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
	# code...
	die("Passwords must match");
}

// $mysqli = require__DIR__ . "/database.php";

// $sql = "INSERT INTO user (name, email, password_hash(VALUES (?, ?, ?)");
// $SMTM -> mysql->smtm_init();

// if {
// 	! $stmt - > prepare ($sql)){
// 	die("SQL error: " . $mysqli->error);
// }

// $password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
// print_r($_POST);
// var_dump($password_hash);
// echo "$password_hash";
 header("location: ../html/myprojects.html");
 ?>	
 