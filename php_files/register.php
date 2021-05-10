<?php
session_start();
include 'connect.php';
if(isset($_POST['email']) && isset ($_POST['login']) && isset ($_POST['name']) && isset ($_POST['password'])){
    $email = $_POST['email'];	
    $log = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

    $query_log = "SELECT login FROM users WHERE email = '$email'";
    $result_log = mysqli_query($link,$query_log);
    $log_vyvod = mysqli_fetch_row($result_log);
    $query_email = "SELECT email FROM users WHERE login = '$log'";
    $result_email = mysqli_query($link,$query_email);
    $email_vyvod = mysqli_fetch_row($result_email);

        $err_log_exist = "Пользователь с таким логином зарегистрирован,повторите попытку";
        $err_email_exist = "Такой email зарегистрирован,повторите попытку";
        $err_log_uncorrect = "Логин должен состоять из строчных букв латинского алфавита,а также из тире и нижних подчеркиваний. Длина - от 3 до 16 символов";
        $err_email_uncorrect = "Электронная почта должна состоять по образцу:name@mail.ru";
        $err_name_uncorrect = "Имя должно состоять из русских букв,максимум-20 символов";
        $err_pass_uncorrect = "Пароль должен состоять из строчных букв латинского алфавита,а также из цифр и точек. Длина - от 10 до 20 символов";
        
    if($log_vyvod[0]==$log || !preg_match("/^[a-z0-9_-]{3,16}$/" , $_POST['login']) || !preg_match("/^[А-Я]{1}[а-я]{1,15}$/" , $name) || !preg_match("/^[a-zA-Z0-9.]{10,20}+$/", $pass) || $email_vyvod[0]==$email ||!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i" , $email)){
        header("Location: /register.php");
    }
    if($log_vyvod[0] != $log && $email_vyvod[0] != $email && preg_match("/^[a-z0-9_-]{3,16}$/" , $_POST['login']) && preg_match("/^[А-Я]{1}[а-я]{1,15}$/" , $name) && preg_match("/^[a-zA-Z0-9.]{10,20}+$/", $pass) && preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i" , $email)){
    $query = "INSERT INTO users (email, login, name, password) VALUES ('$email', '$log', '$name', '$hash_pass')";
    $result = mysqli_query($link, $query);
    header("Location: /index.php");
    }
}
?>