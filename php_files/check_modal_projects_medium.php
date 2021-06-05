<?php
session_start();
include 'connect.php';
if($_SESSION['role'] == "0"){
	$house2 = $_POST['houses2'];
	$s_meter2 = $_POST['squaremeters2'];
	$login = $_POST['login'];
	$project_name = $_POST['project_name'];
	$zadanie = $_POST['zadanie'];
	$srok2 = $house2 * 3;
	$price2 = $s_meter2 * 1650;
	$dificulty = "Medium";
	$have_project = "1";
	if(isset($_POST['submit2'])){
		$query="INSERT INTO projects (rooms, meters, login, project_name, zadanie, srok, price, dificulty,performer,performer_name,progress,have_project,past_project) VALUES ('$house2', '$s_meter2','$login', '$project_name', '$zadanie', '$srok2', '$price2', '$dificulty', 0, 0, 0, 0, 0)";
		$result = mysqli_query($link, $query);
		
		$query= "UPDATE users SET have_project = '$have_project' WHERE login = '$login'";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		header('Location: /cabinet.php');
	}
}
?>