<?php
session_start();
include 'php_files/connect.php';
if(isset($_POST['submit'])){
$log=$_POST['login'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$city = $_POST['city']
$query = "INSERT INTO profiles (login, gender, date, city) VALUES ('$log', '$gender', '$date', '$city')";
$result = mysqli_query($link, $query);
header("Location: /cabinet.php");
}
?>