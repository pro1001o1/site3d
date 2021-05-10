<?php
session_start();
include 'connect.php';
$query_city = "SELECT city FROM profiles WHERE login = '$log'";
$result_city = mysqli_query($link, $query_city) or die (mysqli_error($link));
$city_vyvod = mysqli_fetch_row($result_city);
$_SESSION['city'] = $city_vyvod[0];

$query_date = "SELECT date FROM profiles WHERE login = '$log'";
$result_date = mysqli_query($link, $query_date) or die (mysqli_error($link));
$date_vyvod = mysqli_fetch_row($result_date);
$_SESSION['date'] = $date_vyvod[0];

$query_gender = "SELECT gender FROM profiles WHERE login = '$log'";
$result_gender = mysqli_query($link, $query_gender) or die (mysqli_error($link));
$gender_vyvod = mysqli_fetch_row($result_gender);
$_SESSION['gender'] = $gender_vyvod[0];

$query_log = "SELECT login FROM users WHERE login = '$log'";
$result_name = mysqli_query($link, $query_name) or die (mysqli_error($link));
$name_vyvod = mysqli_fetch_row($result_name);
$_SESSION['name'] = $name_vyvod[0];

$log = $_SESSION['login'];
$date = $_SESSION['date'];
$city = $_SESSION['city'];
$gender = $_SESSION['gender'];

?>