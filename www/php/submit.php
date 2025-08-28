<!DOCTYPE>
<html>
<head>
	<title>Congratulations</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">

<?php 
$v1 = $_POST["ftest1"];
$w1 = $_POST["stest1"];
$x1 = $_POST["ttest1"];
$y1 = $_POST["exam1"];
$z1 = $_POST["bf1"];
$b1 = $v1 + $w1 + $x1 + $y1;
$a1 = "Total =";
$c1 = ($b1 + $z1)/2;
$d1 = "Average = ";
$e1 = "Grade = ";
$f1 = "Remarks = ";

// $grade = $c;
if ($c1 >= 75) {
	$grade1 = "A1";
}
elseif ($c1 >= 70 ){
	$grade1 = "B2";
}
elseif ($c1 >= 65 ){ 
	$grade1 = "B3";
}
elseif ($c1 >= 60 ){ 
	$grade = "C4";
}
elseif ($c1 >= 55 ){ 
	$grade = "C5";
}
elseif ($c1 >= 50 ){ 
	$grade1 = "C6";
}
elseif ($c1 >= 45 ){
		$grade1 = "D7";
}
elseif ($c1 >= 40 ){ 
	$grade1 = "E8";
}
else $grade1 = "F9";


if ($c1 >= 75) {
	$pos1 = "Congratulations!";
}
elseif ($c1 >= 70 ){
	$pos1 = "Very Good";
}
elseif ($c1 >= 65 ){
	$pos1 = "Good";
}
elseif ($c1 >= 60 ){ 
	$pos1 = "Credit";
}
elseif ($c1 >= 55 ){ 
	$pos1 = "Credit";
}
elseif ($c1 >= 50 ){ 
	$pos1 = "Credit";
}
elseif ($c1 >= 45 ){
		$pos = "Pass";
}
else $pos1 = "Fail";
?>
<?php

$v = $_POST["ftest"];
$w = $_POST["stest"];
$x = $_POST["ttest"];
$y = $_POST["exam"];
$z = $_POST["bf"];
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
<?php 
// $link = header("location: ../html/student-grade-calculator.html");
?> 
</head>
<body>
<div class="container">
				<h1> MABEST ACADEMY RESULT PROCESSING <img src="../images/" alt=""></h1>
		<div class="todo-app">
			<h2>BROADSHEET CALCULATOR FOR SUBJECT TEACHERS<img src="../images/" alt=""></h2>
			<div class="row">
		<table>
			<!-- <th>Student Database</th> -->
			<tr>
			    <th id="sn">S/N</th>
			    <th>Names</th>
			    <th>TEST 1</th>
			    <th>TEST 2</th>
			    <th>TEST 3</th>
			    <th>EXAM</th>
			    <th>B.FRD</th>
			    <th>TOTAL</th>
			    <th>AVERAGE</th>
			    <th>GRADE</th>
			    <th>REMARKS</th>
			    <th>UPDATE</th>
			  </tr>
			  <tr class="record">
			  	<td id="no">1.</td>
			    <td ><?php echo $_POST["name"]; ?></td>
			    <td ><?php echo $v; ?></td>
			    <td ><?php echo $w; ?></td>
			    <td ><?php echo $x; ?></td>
			    <td ><?php echo $y; ?></td>
			    <td ><?php echo $z; ?></td>
			    <td ><?php echo $b; ?></td>
			    <td ><?php echo $c; ?></td>
			    <td ><?php echo $grade; ?></td>
			    <td ><?php echo $pos; ?></td>
			    <td><a href="../html/student-grade-calculator.html" id="submit1">Update</a></td>
			   <!--  <td id="prc"><button onclick="addTask()">Add</button></td> -->
			  </tr>
<tr class="record">
			  	<td id="no">2.</td>
			    <td ><?php echo $_POST["name1"]; ?></td>
			    <td ><?php echo $v1; ?></td>
			    <td ><?php echo $w1; ?></td>
			    <td ><?php echo $x1; ?></td>
			    <td ><?php echo $y1; ?></td>
			    <td ><?php echo $z1; ?></td>
			    <td ><?php echo $b1; ?></td>
			    <td ><?php echo $c1; ?></td>
			    <td ><?php echo $grade1; ?></td>
			    <td ><?php echo $pos1; ?></td>
			    <td><a href="../html/student-grade-calculator.html" id="submit1">Update</a></td>
			   <!--  <td id="prc"><button onclick="addTask()">Add</button></td> -->
			  </tr>
		</table>
	</div>
</div>
	</div>
</form>
</body>
<!-- <?php 

echo $_POST["name"]; ?> <br>
Your Result for Data Processing is<br><br>
<?php echo "FTest = " ."   ". $v; ?><br><br>
<?php echo "STest = " ."   ". $w; ?><br><br>
<?php echo "TTest = " ."   ". $x; ?><br><br>
<?php echo "Examt = " ."   ". $y; ?><br><br>
<?php echo "Brought F = " ."   ". $z; ?><br><br>
<?php echo $a ."  ". $b;	?><br><br>
<?php echo $d ."  ". $c;	?><br><br>
<?php echo $e ."  ". $grade;	?><br><br>
<?php echo $f ."  ". $pos;	?><br><br>

<!- </div> -->
-->
</html>