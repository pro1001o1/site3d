<?php
session_start();
include 'connect.php';
if($_SESSION['role'] == "0"){
	$house3 = $_POST['houses3'];
	$s_meter3 = $_POST['squaremeters3'];
	$login = $_POST['login'];
	$project_name = $_POST['project_name'];
	$zadanie = $_POST['zadanie'];
	$srok3 = $house3 * 3;
	$price3 = $s_meter3 * 2300;
	$dificulty = "Hard";
	$have_project = "1";
	if(isset($_POST['submit3'])){
	$query="INSERT INTO projects (rooms,meters,login,project_name,zadanie,srok,price,dificulty,performer,performer_name,have_project,progress,past_project) VALUES ('$house3', '$s_meter3','$login', '$project_name', '$zadanie', '$srok3', '$price3', '$dificulty', 0, 0, 0, 0, 0)";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		
		$query= "UPDATE users SET have_project = '$have_project' WHERE login = '$login'";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		header('Location: /cabinet.php');
	}
} 
?>