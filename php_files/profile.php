<?php
session_start();
include 'connect.php';
if($_SESSION['login']==$_POST['login']){
$log=$_POST['login'];
$gender = $_POST['gender'];
$date = date('Y-m-d',strtotime($_POST['date']));
$city = $_POST['city'];
$query = "INSERT INTO profiles (login, gender, date, city) VALUES ('$log', '$gender', '$date', '$city')";
$result = mysqli_query($link, $query);
$_SESSION['gender']=$gender;
$_SESSION['date']=$date;
$_SESSION['city']=$city;
$name = $_SESSION['name'];
header("Location: /cabinet.php");
}
?>