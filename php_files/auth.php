<?php
session_start();
require 'connect.php';
if(isset($_POST['login']) and isset($_POST['password'])){
$log = $_POST['login'];
$pass = $_POST['password'];
$query = "SELECT password FROM users WHERE login ='$log'";
$query2 = "SELECT email FROM users WHERE login ='$log'";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
$result2 = mysqli_query($link, $query2) or die (mysqli_error($link));
$result1 = mysqli_fetch_row($result);
$result12 = mysqli_fetch_row($result2);
$_SESSION['email']=$result12[0];
if (isset($result1[0])){
$_SESSION['login'] = $log;
}
}
if (password_verify($pass, $result1[0])){
	header("Location: /cabinet.php");
}
?>