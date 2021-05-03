<?php
session_start();
require 'connect.php';
if(isset($_POST['login']) and isset($_POST['password'])){
$log = $_POST['login'];
$pass = $_POST['password'];
$query = "SELECT password FROM users WHERE login ='$log'";
$query2 = "SELECT email FROM users WHERE login ='$log'";
$query3 = "SELECT login FROM profiles WHERE login = '$log'";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
$result2 = mysqli_query($link, $query2) or die (mysqli_error($link));
$result3 = mysqli_query($link, $query3) or die (mysqli_error($link));
$result1 = mysqli_fetch_row($result);
$result12 = mysqli_fetch_row($result2);
$result123 = mysqli_fetch_row($result3);
$_SESSION['email']=$result12[0];
if (isset($result1[0])){
$_SESSION['login'] = $log;
}
}
if (password_verify($pass, $result1[0]) && !isset($result123[0]) ){
	header("Location: /profile.php");
}
if (password_verify($pass, $result1[0]) && isset($result123[0]) ){
	header("Location: /cabinet.php");
}
?>