<?php
session_start();
require 'php_files/connect.php';
if(isset($_POST['login']) and isset($_POST['password'])){
$log = $_POST['login'];
$pass = $_POST['password'];
$query = "SELECT password FROM users WHERE login ='$log'";
$query2 = "SELECT email FROM users WHERE login ='$log'";
$query3 = "SELECT login FROM profiles WHERE login = '$log'";
$query4 = "SELECT login FROM users WHERE login = '$log'";

$result = mysqli_query($link, $query) or die (mysqli_error($link));
$result2 = mysqli_query($link, $query2) or die (mysqli_error($link));
$result3 = mysqli_query($link, $query3) or die (mysqli_error($link));
$result4 = mysqli_query($link, $query4) or die (mysqli_error($link));

$result1 = mysqli_fetch_row($result);
$result12 = mysqli_fetch_row($result2);
$result123 = mysqli_fetch_row($result3);
$result1234 = mysqli_fetch_row($result4);

$_SESSION['email']=$result12[0];
$err_log_uncorrect = "Логин должен состоять из строчных букв латинского алфавита,а также из тире и нижних подчеркиваний. Длина - от 3 до 16 символов";
$err_pass_uncorrect = "Пароль должен состоять из строчных букв латинского алфавита,а также из цифр и точек. Длина - от 10 до 20 символов";
if (isset($result1[0])){
$_SESSION['login'] = $log;
}
}
if (password_verify($pass, $result1[0]) && !isset($result123[0]) ){
	header("Location: /profile.php");
}
if (password_verify($pass, $result1[0]) && isset($result123[0]) ){
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
    $query_name = "SELECT name FROM users WHERE login = '$log'";
	$result_name = mysqli_query($link, $query_name) or die (mysqli_error($link));
	$name_vyvod = mysqli_fetch_row($result_name);
    $_SESSION['name'] = $name_vyvod[0];
	header("Location: /cabinet.php");
}
?>