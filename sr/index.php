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
<form action="insert.php" method="POST">
	<p>
		Зарегистрироваться
	</p>
	<p>
		введите email:
	</p>
	<input type="text" name="email">
	<p>
		введите пароль:
	</p>
    <input type="text" name="password">
    <button>
    	Зарегистрироваться
    </button>
</form>

</body>
</html>