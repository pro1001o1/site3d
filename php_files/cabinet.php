<?php 
session_start();
include 'php_files/connect.php';
if (!isset($_SESSION['login'])){
	header('Location: /index.php');
}
else{
	$date = $_SESSION['date'];
	$name = $_SESSION['name'];
	$login = $_SESSION['login'];
}
if($_SESSION['role'] == "2")
	$log = $_POST['login_user'];
	$log_perf = $_POST['login_performer'];
	$query_log_user = "SELECT login FROM projects WHERE login = '$log'";
	$result_log_user = mysqli_query($link,$query_log_user);
	$log_user_vyvod = mysqli_fetch_row($result_log_user);
	$query_name_perf = "SELECT name FROM users WHERE login = '$log_perf'";
	$result_name_perf = mysqli_query($link,$query_name_perf);
	$name_perf_vyvod = mysqli_fetch_row($result_name_perf);
	$vyvod_name_perf = $name_perf_vyvod[0];
	if($log == $log_user_vyvod[0]){
    	$query_fill = "UPDATE projects SET performer = '$log_perf', performer_name = '$vyvod_name_perf', have_project = 1 WHERE login = '$log' AND past_project = 0";
    	$result = mysqli_query($link, $query_fill);
        $query_fill_perf = "UPDATE users SET have_project = 1 WHERE login = '$log_perf'";
        $result_fill_perf = mysqli_query($link, $query_fill_perf);
	}
if($_SESSION['role'] == "0"){
    $query_pn = "SELECT project_name FROM projects WHERE login = '$login'"; 
    $result_pn = mysqli_query($link, $query_pn);
    $result1 = mysqli_fetch_row($result_pn);
    $vyvod_pn = $result1[0];
    $vyvod_pn2 = $result1[1];
    $vyvod_pn3 = $result1[2];
    $query_zad = "SELECT zadanie FROM projects WHERE login = '$login'"; 
    $result_zad = mysqli_query($link, $query_zad);
    $result2 = mysqli_fetch_row($result_zad);
    $vyvod_zad = $result2[0];
    $vyvod_zad2 = $result2[1];
    $vyvod_zad3 = $result2[2];
    $query_meters = "SELECT meters FROM projects WHERE login = '$login'"; 
    $result_meters = mysqli_query($link, $query_meters);
    $result3 = mysqli_fetch_row($result_meters);
    $vyvod_meters = $result3[0];
    $vyvod_meters2 = $result3[1];
    $vyvod_meters3 = $result3[2];
    $query_perf = "SELECT performer_name FROM projects WHERE login = '$login'"; 
    $result_perf = mysqli_query($link, $query_perf);
    $result4 = mysqli_fetch_row($result_perf);
    $vyvod_perf = $result4[0];
    $vyvod_perf2 = $result4[1];
    $vyvod_perf3 = $result4[2];
}
if($_SESSION['role'] == "1"){
    $query_pn_perf = "SELECT project_name FROM projects WHERE performer = '$login'"; 
    $result_pn_perf = mysqli_query($link, $query_pn_perf);
    $result1_perf = mysqli_fetch_row($result_pn_perf);
    $vyvod_pn_perf = $result1_perf[0];
    $query_zad_perf = "SELECT zadanie FROM projects WHERE performer = '$login'"; 
    $result_zad_perf = mysqli_query($link, $query_zad_perf);
    $result2_perf = mysqli_fetch_row($result_zad_perf);
    $vyvod_zad_perf = $result2_perf[0];
    $query_meters_perf = "SELECT meters FROM projects WHERE performer = '$login'"; 
    $result_meters_perf = mysqli_query($link, $query_meters_perf);
    $result3_perf = mysqli_fetch_row($result_meters_perf);
    $vyvod_meters_perf = $result3_perf[0];
    $query_perf_perf = "SELECT performer_name FROM projects WHERE performer = '$login'"; 
    $result_perf_perf = mysqli_query($link, $query_perf_perf);
    $result4_perf = mysqli_fetch_row($result_perf_perf);
    $vyvod_perf_perf = $result4_perf[0];

    $query_log = "SELECT login FROM projects WHERE performer = '$login'";
    $result_log = mysqli_query($link,$query_log);
    $log_vyvod = mysqli_fetch_row($result_log);
    $vyvod_log = $log_vyvod[0];
    $query_log_pf = "SELECT performer FROM projects WHERE performer = '$login'";
    $result_log_pf = mysqli_query($link,$query_log_pf);
    $log_vyvod_pf = mysqli_fetch_row($result_log_pf);
    $vyvod_log_pf = $log_vyvod_pf[0];

    $uploadname=basename($_FILES['image_uploads']['name']);
    $uploadpath='images_user/'.$uploadname; 
    if (move_uploaded_file($_FILES['image_uploads']['tmp_name'], $uploadpath)) {
        $query="INSERT INTO images (img_path, login) VALUES ('$uploadpath','$vyvod_log')";
        $result = mysqli_query($link, $query);
    }  
    $goal = $_POST['goal'];
    if(isset($_POST['submit_info'])){
        $query_progress="UPDATE projects SET progress = '$goal' WHERE login = '$vyvod_log'";
        mysqli_query($link, $query_progress);
    } 
    if(isset($_POST['submit_finish'])){
        $query_fin = "UPDATE projects SET past_project = 1, have_project = 0, progress = 0 WHERE login  = '$vyvod_log'";
        mysqli_query($link, $query_fin);
        $query_hp_users_pf = "UPDATE users SET have_project = 0 WHERE login = '$vyvod_log_pf'";
        mysqli_query ($link,$query_hp_users_pf);
        $query_hp_users = "UPDATE users SET have_project = 0 WHERE login = '$vyvod_log'";
        mysqli_query ($link,$query_hp_users);
        header ("Location: cabinet.php");
    }
}
?>