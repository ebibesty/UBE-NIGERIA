<?php
include('messagedb.php');

if(isset($_POST["submit"])){
$name = $_POST["name"];
$message = $_POST["message"];
$priority = $_POST["priority"];
$type = $_POST["type"];
$terms = $_POST["terms"];
// filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);
// if(! $terms){
// 	die("Terms must be accepted");
// }

$sql = "INSERT INTO message (name, body, priority, type, terms)
		VALUES('$name', '$message', '$priority', '$type', 'terms')";
		// VALUES(?, ?, ?, ?) ";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
					$name,
					$message,
					$priority,
					$type,
					$terms);

mysqli_stmt_execute($stmt);
}

echo "The Record has been saved";

?>


<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>




<div class="container">
				<h1>CONTACT</h1>
		<div class="todo-app">
			<h2>CONTACT INFORMATIONS FROM BACKEND(DATABASE)<img src="../images/" alt=""></h2>

			<div class="row">


		<table>
			<tr>
			    <th id="sn">S/N</th>
			    <th>Names</th>
			    <th>TEST 1</th>
			    <th>TEST 2</th>
			    <th>TEST 3</th>
			  
			  </tr>
			  <tr class="record">
			  	<td id="no">1.</td>
			    <td ><?php echo $_GET["name"]; ?></td>
			    <td ><?php echo $_GET["message"]; ?></td>
			    <td ><?php echo $_GET["priority"]; ?></td>
			    <td ><?php echo $_GET["type"]; ?></td>
			    <td ><?php echo $_GET["terms"]; ?></td>
				<td><a href="../html/student-grade-calculator.html" id="submit1">Update</a></td>
			    <td id="prc"><button onclick="addTask()">Add</button></td>
			  </tr>
		</table>
	</div>
</div>
	</div>
</form>

</body>
</html>
<!-- <?php 





// echo "Connection Successful.";









// var_dump($name, $message, $priority, $type, $terms);
// print_r($_POST);
?>