<?php
include('messagedb.php');


if (isset($_GET['id'])) {
	# code...
	$s_id = $_GET['id'];
	$del_sql = "Delete from message Where id ='$s_id'";
	$data = mysqli_query($conn,$del_sql);
}


// if(isset($_GET['name'])) {
// 	# code...
// 	$s_name = $_GET['name'];
// 	$update_sql = "Update from datas Where name ='$s_name'";
// 	$data = mysqli_query($conn,$del_sql);
// }

$sql ='SELECT * From message';

// Execute query
$result = mysqli_query($conn, $sql);

// echo "SUCCESSFUL!";


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
				<h1>SHOW CONTACT DETAILS</h1>
		<div class="todo-app">
			<h2>CONTACT INFORMATIONS FROM BACKEND(DATABASE)<img src="../images/" alt=""></h2>
			<h2 class="success"><?php echo "The Record has been saved"; ?></h2>
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
					<!-- <td><button class="del">Delete</button></td> -->
					<td><a href="view.php?name=<?php  echo $row["name"]  ?>">Edit</td>
					<td><a href="view.php?id=<?php  echo $row["id"]  ?>">Delete</td>

					</tr>
					<?php
					}
					?>

<!-- 				</tr> -->
				</table>
			<div class="row">
	</div>
</div>
	</div>
</form>

</body>
</html>