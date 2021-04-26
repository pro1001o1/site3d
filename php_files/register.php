<?php
session_start();
include 'php_files/connect.php';
if(isset($_POST['login']) && isset($_POST['password'])){
$email = $_POST['email'];	
$log = $_POST['login'];
$name = $_POST['name'];
$pass = $_POST['password'];
$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
$query = "INSERT INTO users (email, login, name, password) VALUES ('$email', '$log', '$name', '$hash_pass')";
$result = mysqli_query($link, $query);
header("Location: /index.php");
}
?>