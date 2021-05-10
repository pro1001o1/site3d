<?php 
session_start();
if (!isset($_SESSION['login'])){
	header('Location: /');
}
$date = $_SESSION['date'];
$name = $_SESSION['name'];
?>
