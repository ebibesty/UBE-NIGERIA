<?php
include('students.php');

$name = $_POST["name"];
$test1 = $_POST["test1"];
$test2 = $_POST["test2"];
$test3 = $_POST["test3"];
$exam = $_POST["exam"];
$bf = $_POST["bf"];



$sql = "INSERT INTO datas (name, test1, test2, test3, exam, bf)
		VALUES(?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "siiiii",
					$name,
					$test1,
					$test2,
					$test3,
					$exam,
					$bf);

mysqli_stmt_execute($stmt);

if($sql){
	echo "<script>
	alert('The Record has been saved');
	</script>";
}
else{
	echo "<script>
	alert('There is an error');
	</script>";
}

?>