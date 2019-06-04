<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$insert = mysqli_query($connect,"INSERT INTO sr (email,password) VALUES ('" . $_POST['email'] . "','" . $_POST['password'] . "')");
header("Location: http://begimjan/sr/index2.php");

?>