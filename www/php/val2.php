<?php
include('messagedb.php');
// include('validation.php');
// include('val.php');

$name = $_POST["name"];

$sql = "INSERT INTO message (name)
		VALUES(?)";


$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s",
					$name);


mysqli_stmt_execute($stmt);

if($sql){
	echo "
	The Record has been saved";

}
else{
	echo "There is an error";
}


?>

