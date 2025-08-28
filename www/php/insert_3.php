<?php
require_once('messagedb.php');


// if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$message = $_POST["message"];
	$priority = $_POST["priority"];
	$type = $_POST["type"];
	$terms = $_POST["terms"];
	// $terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);
	if(! $terms){
		die("Terms must be accepted");
	}
// print_r($_POST);
	// var_dump($name, $message, $priority, $type, $terms);

// 	echo "The Record has been saved";
// }


$sql = "INSERT INTO message(name, body, priority, type) 
	VALUES(?, ?, ?, ?)";
mysqli_query($conn, $sql);

stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
	die(mysqli_error($conn));
}

mysqli_smt_bind_param($stmt, "ssii",
			$name,
			$message,
			$priority,
			$type);
mysqli_smt_execute($stmt);
echo "<script> alert('Data inserted succcesfully');</script>
";

?>
<!-- <script> alert('Data inserted succcesfully');</script> -->

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body class="body1">


<div class="container1">

<h1>CONTACT</h1>

<form action="insert.php" method="post">
	<label class="name1" for="name">Name</label>
	<input class="name2" type="text" id="name" name="name">

	<label class="message" for="message">Message</label>
	<textarea id="message" name="message"></textarea>

	<label for="priority1">Priority</label>
	<select class="priority" id="priority" name="priority">
		<option value="1">Low</option>
		<option value="2">Medium</option>
		<option value="3">High</option>
	</select>
	<fieldset>
		<legend>Type</legend>
			<label class="legend1">
				<input type="radio" name="type" value="1" checked> 
				Complaint
			</label>
			<label class="legend2">
				<input type="radio" name="type">
				Suggestion
			</label>
	</fieldset>

	<label>
	<input type="checkbox" name="terms">
	I agree to the terms and conditions
	</label>
	<br>
	<button class="submit1">Send</button>

</form>

</div>

</body>
</html>
<!-- <?php 





// echo "Connection Successful.";









// var_dump($name, $message, $priority, $type, $terms);
// print_r($_POST);
?>