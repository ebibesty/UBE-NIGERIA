<?php
include('messagedb.php');
include('validation.php');
// include('val.php');

$name = $_POST["name"];
$message = $_POST["message"];
$priority = $_POST["priority"];
$type = $_POST["type"];
$terms = $_POST["terms"];

if(! $terms){
	die("Terms must be accepted");
}


$sql = "INSERT INTO message (name, body, priority, type)
		VALUES(?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
					$name,
					$message,
					$priority,
					$type);

mysqli_stmt_execute($stmt);

if($sql){
	echo "The Record has been saved";
}
else{
	echo "There is an error";
}

?>

