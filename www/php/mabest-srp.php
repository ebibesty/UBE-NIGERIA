<?php
// require_once('studentdb.php');
$conn = mysqli_connect("localhost", "root","","students");
	// write query for all pizzas

if (isset($_GET['id'])) {
	# code...
	$s_id = $_GET['id'];
	$del_sql = "Delete from datas Where id ='$s_id'";
	$data = mysqli_query($conn,$del_sql);
}



$sql ="SELECT * From datas";

	
	// $sql ="SELECT * From message WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	// $row = mysqli_fetch_assoc($result);

	// mysql_free_result($result);
	// mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="refresh" content="30">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/php1.css">

	<!-- 	<link rel="stylesheet" type="text/css" href="../css/boostrap.min.css"> -->
		<title>MABEST ACADEMY RESULT PROCESSING
		</title>
</head>	
<body class="bg">	
<div class="container1">
<div class="row mt-5">
<div class="col">
<div class="card mt-5">
	<div class="card-header">
	<!-- 	<h2 class="display-6 text-center"> Fetch Data From Database in Php</h2> -->
		<h1> MABEST ACADEMY RESULT PROCESSING <img class="mabest" src="../images/mabest.png" alt="mabest"></h1>
		<div class="todo-app">
			<h2>BROADSHEET CALCULATOR FOR SUBJECT TEACHERS<img src="../images/" alt=""></h2>
			<div class="row">
	</div>
	<div class="card-body1">
		<table>
			<tr class="bg-dark">
			    <td class="td4" id="sn">StdID</td>
			    <td class="td1">Names</td>
			    <td class="td2">TEST 1</td>
			    <td class="td2">TEST 2</td>
			    <td class="td2">TEST 3</td>
			    <td class="td4">EXAM</td>
			    <td class="td4">B.FRD</td>
			    <td class="td4">TOTAL</td>
			    <td class="td4">AVERAGE</td>
			    <td class="td4">GRADE</td>
			    <td class="td1">REMARKS</td>
			    <td class="td4">UPDATE</td>
			    <td class="td4">DELETE</td>
			</tr>

			<tr >
				<?php 
					
					while ($row = mysqli_fetch_assoc($result))
				{
$v = $row ['test1'];;
$w = $row ['test2'];;
$x = $row ['test3'];;
$y = $row ['exam'];;
$z = $row ['bf'];;
$b = $v + $w + $x + $y;
$a = "Total =";
$c = ($b + $z)/2;
$d = "Average = ";
$e = "Grade = ";
$f = "Remarks = ";

// $grade = $c;
if ($c >= 75) {
	$grade = "A1";
}
elseif ($c >= 70 ){
	$grade = "B2";
}
elseif ($c >= 65 ){ 
	$grade = "B3";
}
elseif ($c >= 60 ){ 
	$grade = "C4";
}
elseif ($c >= 55 ){ 
	$grade = "C5";
}
elseif ($c >= 50 ){ 
	$grade = "C6";
}
elseif ($c >= 45 ){
		$grade = "D7";
}
elseif ($c >= 40 ){ 
	$grade = "E8";
}
else $grade = "F9";


if ($c >= 75) {
	$pos = "Congratulations!";
}
elseif ($c >= 70 ){
	$pos = "Very Good";
}
elseif ($c >= 65 ){
	$pos = "Good";
}
elseif ($c >= 60 ){ 
	$pos = "Credit";
}
elseif ($c >= 55 ){ 
	$pos = "Credit";
}
elseif ($c >= 50 ){ 
	$pos = "Credit";
}
elseif ($c >= 45 ){
		$pos = "Pass";
}
else $pos = "Fail";

				?>

				<td class="td4">Std0<?php echo $row ['id']; ?></td> 
				<td class="td5"><?php echo $row ['name']; ?></td>
				<td class="td2"><?php echo $row ['test1']; ?></td>
				<td class="td2"><?php echo $row ['test2']; ?></td>
				<td class="td2"><?php echo $row ['test3']; ?></td>
				<td class="td1"><?php echo $row ['exam']; ?></td>
				<td class="td1"><?php echo $row ['bf']; ?></td> 
				<td class="td2"><?php echo $b; ?></td>
			    <td class="td2"><?php echo $c; ?></td>
			    <td class="td2"><?php echo $grade; ?></td>
			    <td class="td2"><?php echo $pos; ?></td>
			    <td class="td3"><a href="mabest-srp.php?id=<?php  echo $row["id"]  ?>">Edit</td>
				<td class="td3"><a href="mabest-srp.php?id=<?php  echo $row["id"]  ?>">Delete</td>
					
					</tr>
					<?php
					}
					?>

			</table>
		
	</div>					
</div>
</div>
</div>
</div>		
</body>

</html>