<?php
session_start();
include 'connect.php';
if(isset($_SESSION['login'])){
$log=$_SESSION['login'];
$gender = $_POST['gender'];
$date = date('Y-m-d',strtotime($_POST['date']));
$city = $_POST['city'];
$query = "UPDATE profiles SET login = '$log', gender = '$gender', date = '$date', city = '$city',avatar_path = 0 WHERE login = '$log'";
mysqli_query($link, $query);

$uploadname_avatar=basename($_FILES['avatar']['name']);
$uploadpath_avatar='../avatars/'. $uploadname_avatar;
if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadpath_avatar);
    $query_avatar="UPDATE profiles SET avatar_path = '$uploadpath_avatar' WHERE login = '$log'";
    mysqli_query($link, $query_avatar);
} 
$_SESSION['gender']=$gender;
$_SESSION['date']=$date;
$_SESSION['city']=$city;
header("Location: /cabinet.php");
}
?>