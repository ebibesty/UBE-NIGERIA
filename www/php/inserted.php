<?php
require_once('messagedb.php');


if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$message = $_POST["message"];
	$priority = $_POST["priority"];
	$type = $_POST["type"];
	$terms = $_POST["terms"];
	// $books = $_POST["books"];
	// $book = "";
	// foreach($books as $row){
	// 	$books .= $row . ",";
	// }

	if(! $terms){
		die("Terms must be accepted");
	}
// print_r($_POST);
	// var_dump($name, $message, $priority, $type, $terms);

// 	echo "The Record has been saved";
// }


$sql = "INSERT INTO message VALUES(''. '$name', '$message', '$priority', '$type', 'terms')";
		// VALUES(?, ?, ?, ?) ";
mysqli_query($conn, $sql);

echo 
"
<script> alert('Data inserted succcesfully');</script>

";

?>
<!-- <script> alert('Data inserted succcesfully');</script> -->