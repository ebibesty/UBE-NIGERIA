<?php

require_once('tutorialdb.php');

	// write query for all pizzas

	$sql = 'SELECT * FROM users';

	// make query & get result
	 $result = mysqli_query($conn, $sql);

// echo "SUCCESSFUL!";
	 $row = mysqli_fetch_assoc($result);

// free result from memory
	 mysqli_free_result($result);

// close connection
	 mysqli_close($conn);

	 // print_r($row)
// require_once ('config/db.php');
// require_once ('config/functions.php');
// $result = dislay_data();


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="refresh" content="30">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/php.css">
	<!-- 	<link rel="stylesheet" type="text/css" href="../css/boostrap.min.css"> -->
		<title>Fetch the data from database
		</title>
</head>	
<body class="bg">	
<div class="container">
<div class="row mt-5">
<div class="col">
<div class="card mt-5">
	<div class="card-header">
		<h2 class="display-6 text-center"> Fetch Data From Database in Php</h2>
	</div>
	<div class="card-body">
		<table>
			<tr class="bg-dark">
			<td> User ID</td>
			<td> First Name</td>
			<td> Last Name</td>
			<td> Email</td>
			<td> Edit</td>
			<td> Delete</td>
			</tr>

			<tr>
					<td><?php echo $row ['user_id']; ?></td>
					<td><?php echo $row['last']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><a href="#" class="btn btn-primary">Edit</td>
					<td><a href="#" class="btn btn-danger">Delete</td>
			</tr>
			<!-- <tr class="bg-dark">
					<td><?php echo $row ['user_id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['last']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><a href="#" class="btn btn-primary">Edit</td>
					<td><a href="#" class="btn btn-danger">Delete</td>
			</tr> -->
			</table>
		
	</div>					
</div>
</div>
</div>
</div>		
</body>

</html>