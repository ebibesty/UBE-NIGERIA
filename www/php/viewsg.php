<!DOCTYPE html>
<html>
<head>
	<title>STUDENT ASSESMENT FORM</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body class="body1">


<div class="container1">

<h1>STUDENT ASSESMENT FORM</h1>

<form action="sgval.php" method="post">
	<tr class="record">
			   <td class="td5"><?php echo $row ['name']; ?></td>
			    <td id="tst1" ><input class="tst1" type="text" name="tst1"></td>
			    <td id="tst2" ><input class="tst2" type="text" name="tst2"></td>
			    <td id="tst2" ><input class="tst3" type="text" name="tst2"></td>
			    <td id="exam" ><input class="exam" type="text" name="exam"></td>
			    <td id="bfwd"><input class="bfwd" type="text" name="bfwd"></td>
			    <td id="prc"><button onclick="addTask()">Add</button></td>
			  </tr>

</form>

</div>

</body>
</html>