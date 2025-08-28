<!DOCTYPE html>
<html>
<head>
	<title>CONTACT FORM</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body class="body1">


<div class="container1">

<h1>CONTACT</h1>

<form action="val.php" method="post">
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