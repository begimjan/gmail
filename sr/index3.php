<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
					$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
					$result = mysqli_query($connect, "SELECT * FROM sr WHERE email='"  . $_POST['email'] . "' , '" . $_POST['password'] . "' '")
					?>
	<p>
			welcome!
	</p>


</body>
</html>