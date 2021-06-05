<?php
session_start();
require 'php_files/connect.php';
if(isset($_SESSION['login'])){
    header("Location: cabinet.php");
}
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

$query_role = "SELECT role FROM users WHERE login = '$log'";
	$result_role = mysqli_query($link, $query_role) or die (mysqli_error($link));
	$role_vyvod = mysqli_fetch_row($result_role);
    $_SESSION['role'] = $role_vyvod[0];
$_SESSION['email']=$result12[0];
$error_auth = "Неверный логин и/или пароль, повторите попытку";
}
if (password_verify($pass, $result1[0]) && !isset($result123[0]) && $_SESSION['role'] == "0" && isset($result1[0])){
    $_SESSION['login'] = $log;
	header("Location: /profile.php");
}
if (password_verify($pass, $result1[0]) && isset($result123[0]) && $_SESSION['role'] == "0" && isset($result1[0])){
    $_SESSION['login'] = $log;
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
    $query_role = "SELECT role FROM users WHERE login = '$log'";
	$result_role = mysqli_query($link, $query_role) or die (mysqli_error($link));
	$role_vyvod = mysqli_fetch_row($result_role);
    $_SESSION['role'] = $role_vyvod[0];
	header("Location: /cabinet.php");
}
if (password_verify($pass, $result1[0]) && $_SESSION['role'] == "1" && isset($result1[0])){
    $_SESSION['login'] = $log;
    $query_name = "SELECT name FROM users WHERE login = '$log'";
	$result_name = mysqli_query($link, $query_name) or die (mysqli_error($link));
	$name_vyvod = mysqli_fetch_row($result_name);
    $_SESSION['name'] = $name_vyvod[0];
    $query_role = "SELECT role FROM users WHERE login = '$log'";
	$result_role = mysqli_query($link, $query_role) or die (mysqli_error($link));
	$role_vyvod = mysqli_fetch_row($result_role);
    $_SESSION['role'] = $role_vyvod[0];
	header("Location: /cabinet.php");
}
if (password_verify($pass, $result1[0]) && $_SESSION['role'] == "2" && isset($result1[0])){
    $_SESSION['login'] = $log;
    $query_name = "SELECT name FROM users WHERE login = '$log'";
	$result_name = mysqli_query($link, $query_name) or die (mysqli_error($link));
	$name_vyvod = mysqli_fetch_row($result_name);
    $_SESSION['name'] = $name_vyvod[0];
    $query_role = "SELECT role FROM users WHERE login = '$log'";
	$result_role = mysqli_query($link, $query_role) or die (mysqli_error($link));
	$role_vyvod = mysqli_fetch_row($result_role);
    $_SESSION['role'] = $role_vyvod[0];
	header("Location: /cabinet.php");
}
?>
<!DOCTYPE html>
    <head>
        <title>
            NEWLAYER STUDIO | Главная
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
        <link rel = "stylesheet" href = "style.css">
        <link rel = "stylesheet" media = "(max-width:1600px)" href = "1600px_x_900px.css">
        <link rel = "stylesheet" media = "(max-width:1366px)" href = "1366px_x_768px.css">
    </head>
    <body>
<div class = "container-fluid" style = "padding-right: 0px;padding-left: 0px;" id = "first">
    <img src = "img/firstpage.png" class = "firstblock">
    <header id = "header">
        <img src = "img/logo.png" style = "margin-left:40px;margin-top:12px;width:80px;">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" <?php if(isset($error_auth)){ echo "checked";}?>>
            <label class="menu__btn" for="menu__toggle">
                <span style = "background-color:white;"></span>
            </label> 
            <ul class="menu__box">
                <div class = "toform_back">
                    <div class = "toform1">
                        <div class = "auth">
                             <a class="btn" style = "width:62px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;border-bottom:1px solid #F6CE3A;border-radius: 0; margin-left: -119px;margin-top: 28px;color:#F6CE3A">
                                Вход
                            </a>  
                        </div>
                        <div class = "reg">
                            <a href = "register.php" class="btn" style = "width:112px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;border-bottom:none;margin-bottom: 20px;margin-top: -46px; margin-right: -67px;">
                                Регистрация
                            </a>
                        </div>
                        <form method = "POST" class = "form-auth" align = "center" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type = "text" name = "login" class = "form-control" placeholder="Логин" required title = "Заглавная,а также строчные буквы латинского алфавита и цифры,9 символов" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                        <input type = "password" name = "password" class = "form-control" placeholder="Пароль" required title = "Заглавная,а также строчные буквы латинского алфавита и цифры,15 символов" style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                        <p style = "font-size:12px;margin-top:-20px;margin-bottom:20px;">
                            <?php
                                if($result1234[0] != $login || !password_verify($pass, $result1[0])){
                                    if(isset($error_auth)){
                                        echo $error_auth;
                                        unset ($error_auth);
                                    }
                                }
                            ?>
                        </p>
                        <button class="btn" type = "submit" style = "width: 280px;height: 36px;left: 40px;top: 305px;background: #F6CE3A;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);border-radius: 18px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 12px;color: black;text-transform: uppercase;">Войти</button>
                        </form>  
                    </div>
                </div>    
            </ul>
        </div>    
    </header>
    <div class = "container" id = "info_container">
        <h1>
            newlayer studio
        </h1>
        <h3 style = "margin-top:16px;">
        Мы реализуем Ваши идеи с особой тщательностью, небезраз-<br>
        -личием и энтузиазмом. Нам под силу воссоздать 3D объекты<br>
        различной сложности – от элементов интерьера до <br>
        территорий с комплексной застройкой. 
        </h3>
        <a href = "#second" style = "text-decoration:none;">
        <button type="button" class="btn btn-warning" style = "width:168px; height:36px;border-radius:18px; margin-top:60px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;">
            УЗНАТЬ О КОМПАНИИ
        </button>
        </a>
        <div class ="navigation1">
            <h4 class = "numpage" style = "color:white;margin-left:-5px;">01|</h4>
            <a href = "#second"><div class="round1_w"></div></a>
            <a href = "#third"><div class="round2_w"></div></a>
            <a href = "#fourth"><div class="round3_w"></div></a>
            <a href = "#fifth"><div class="round4_w"></div></a>
            <a href = "#seventh"><div class="round6_w"></div></a>
            <a href = "#eighth"><div class="round7_w"></div></a>
        </div>
    </div> 
    <a id="back2Top" title="Наверх" href="#first">&#10148;</a> 
</div> 