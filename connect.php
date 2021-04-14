<?php 
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
$db_name = "users";

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) 
        or die("Ошибка " . mysqli_error($link)); 
?>