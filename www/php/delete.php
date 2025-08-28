<?php
// require_once('studentdb.php');
$conn = mysqli_connect("localhost", "root","","messagedb");
	// write query for all pizzas

if (isset($_GET['id'])) {
	# code...
	$s_id = $_GET['id'];
	$del_sql = "Delete from message Where id ='$s_id'";
	$data = mysqli_query($conn,$del_sql);
}



$sql ="SELECT * From message";

	
	// $sql ="SELECT * From message WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	// $row = mysqli_fetch_assoc($result);

	// mysql_free_result($result);
	// mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" type="text/css" href="../css/php1.css">
</head>
<body>

<div class="container">
				<h1>SHOW CONTACT DETAILS</h1>
		<div class="todo-app">
			<h2>CONTACT INFORMATIONS FROM BACKEND(DATABASE)<img src="../images/" alt=""></h2>
			<h2 class="success"><?php echo "The Record has been deleted"; ?></h2>
			<div>
				<table>
					<tr>
						<?php 


					while ($row = mysqli_fetch_assoc($result))
					{
					?>
					<td><?php echo $row ['id'];?></td>
					<td><?php echo $row ['name'];?></td>
					<td><?php echo $row ['body'];?></td>
					<td><?php echo $row ['priority'];?></td>
					<td><?php echo $row ['type'];?></td>
					<td><a href="delete.php?id=<?php  echo $row["id"]  ?>">Edit</td></td>
					<td><a href="delete.php?id=<?php  echo $row["id"]  ?>">Delete</td></td>
					</tr>
					<?php
					}
					?>

				</table>
				
			<div class="row">
	</div>
</div>
	</div>
</form>

</body>
</html>