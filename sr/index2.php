<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');

?>
<form action="insert2.php" method="POST">
	
	<p>
		введите email:
	</p>
	<input type="text" name="email">
	<p>
		введите пароль:
	</p>
    <input type="text" name="password">
    <button>
    		Войти
    </button>
</form>
</body>
</html>