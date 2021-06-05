<?php
session_start();
include 'connect.php';

if(isset($_SESSION['login'])){
$log=$_SESSION['login'];
$gender = $_POST['gender'];
$date = date('Y-m-d',strtotime($_POST['date']));
$city = $_POST['city'];

$query = "INSERT INTO profiles (login, gender, date, city, avatar_path) VALUES ('$log', '$gender', '$date', '$city', 0)";
$result = mysqli_query($link, $query);

$uploadname_avatar=basename($_FILES['avatar']['name']);
$uploadpath_avatar='../avatars/'. $uploadname_avatar;
if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadpath_avatar);
    $query="UPDATE profiles SET avatar_path = '$uploadpath_avatar' WHERE login = '$log'";
    mysqli_query($link, $query);
} 
$_SESSION['gender']=$gender;
$_SESSION['date']=$date;
$_SESSION['city']=$city;
$query_name = "SELECT name FROM users WHERE login = '$log'";
$result_name = mysqli_query($link,$query_name);
$email_vyvod = mysqli_fetch_row($result_name);
$_SESSION['name'] = $email_vyvod[0];
header("Location: /cabinet.php");
}
?>