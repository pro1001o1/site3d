<?php
session_start();
include 'connect.php';
if($_SESSION['role'] == "0"){
	$house1 = $_POST['houses1'];
	$s_meter1 = $_POST['squaremeters1'];
	$login = $_POST['login'];
	$project_name = $_POST['project_name'];
	$zadanie = $_POST['zadanie'];
	$srok1 = $house1 * 3;
	$price1 = $s_meter1 * 1000;
	$dificulty = "Easy";
	$have_project = "1";
	if(isset($_POST['submit1'])){
	$query_project="INSERT INTO projects (rooms,meters,login,project_name,zadanie,srok,price,dificulty,performer,performer_name,have_project,progress,past_project) VALUES ('$house1', '$s_meter1', '$login', '$project_name', '$zadanie', '$srok1', '$price1', '$dificulty', 0, 0, 0, 0, 0)";
	$result_project = mysqli_query($link, $query_project) or die("Ошибка " . mysqli_error($link));

	$query= "UPDATE users SET have_project = '$have_project' WHERE login = '$login'";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		header('Location: /cabinet.php');
	}
}
?>