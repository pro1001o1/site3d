<?php
session_start();
include 'php_files/connect.php';
if(isset($_POST['email']) && isset ($_POST['login']) && isset ($_POST['name']) && isset ($_POST['password'])){
    $email = $_POST['email'];	
    $log = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

    $query_log = "SELECT login FROM users WHERE login = '$log'";
    $result_log = mysqli_query($link,$query_log);
    $log_vyvod = mysqli_fetch_row($result_log);
    $query_email = "SELECT email FROM users WHERE email = '$email'";
    $result_email = mysqli_query($link,$query_email);
    $email_vyvod = mysqli_fetch_row($result_email);
    $vyvod_email = $email_vyvod;
    $vyvod_log = $log_vyvod;
        $err_log_exist = "Пользователь с таким логином зарегистрирован,повторите попытку";
        $err_email_exist = "Такой email зарегистрирован,повторите попытку";
        $err_log_uncorrect = "Логин должен состоять из строчных букв латинского алфавита,а также из тире и нижних подчеркиваний. Длина - от 3 до 16 символов";
        $err_email_uncorrect = "Электронная почта должна состоять по образцу:name@mail.ru";
        $err_name_uncorrect = "Имя должно состоять из заглавной и строчных букв латинского алфавита,максимум-20 символов";
        $err_pass_uncorrect = "Пароль должен состоять из строчных букв латинского алфавита,а также из цифр и точек. Длина - от 10 до 20 символов";

        if(is_null($email_vyvod) && is_null($log_vyvod) && preg_match("/^[A-Z]{1}[a-z]{1,15}$/" , $name) && preg_match("/^[a-zA-Z0-9.]+$/", $pass)){
        $query = "INSERT INTO users (email, login, name, password) VALUES ('$email', '$log', '$name', '$hash_pass')";
        $result = mysqli_query($link, $query);
        header("Location: /");
        }
        else{
            echo "ничего не вышло";
        }
    }
?>
<!DOCTYPE html>
    <head>
        <title>
            Главная страница
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
<div class = "container-fluid" style = "padding-right: 0px;padding-left: 0px;" id = "first">
            <img src = "img/firstpage.png" style = "width:1930px; height:1080px;">
            <header>
                <p class = "logo">Логотип</p>
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" checked>
                    <label class="menu__btn" for="menu__toggle">
                      <span style = "background-color:white;"></span>
                    </label>
                    <ul class="menu__box">
                        <div class = "toform_back">
                        <div class = "toform2">
                            <div class = "auth">
                               <a href = "index.php"class="btn" style = "width:62px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;border-bottom: none; margin-left: -119px;margin-top: 28px;">
                                    Вход
                                </a>  
                            </div>
                            <div class = "reg">
                               <a class="btn" style = "width:112px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;border-bottom:1px solid #F6CE3A; border-radius:0;margin-bottom: 20px;margin-top: -46px;margin-right: -67px;color:#F6CE3A">
                                    Регистрация
                                </a>
                            </div>
                            <form method = "POST" class = "form-reg" align = "center">
                            <input type = "email" name = "email" class = "form-control" placeholder="Email" required pattern = "[^@\s]+@[^@\s]+\.[^@\s]+"value = "<?php echo $email;?>" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                            <p style = "font-size:12px;">
                                <?php
                                    if($email_vyvod[0]==$email){
                                        echo $err_email_exist;
                                    }
                                    else{
                                        unset($email_vyvod[0]);
                                    }
                                    if(!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i" , $email)){
                                        echo $err_email_uncorrect;
                                    }
                                ?>
                            </p>
                            <input type = "text" name = "login" class = "form-control" placeholder="Логин" required value = "<?php echo $log;?>" title = "Заглавная и строчные буквы русского алфавита,максимум-16 символов" style = "margin-top:16px;width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                            <p style = "font-size:12px;">
                                <?php
                                    if($log_vyvod[0]==$log){
                                        echo $err_log_exist;
                                    }
                                    else{
                                        unset($log_vyvod[0]);
                                    }
                                    if(!preg_match("/^[a-z0-9_-]{3,16}$/" , $log)){
                                        echo $err_log_uncorrect;
                                    }
                                ?>
                            </p>
                            <input type = "text" name = "name" class = "form-control" placeholder="Имя профиля" required value = "<?php echo $name;?>" title = "Заглавная,а также строчные буквы латинского алфавита и цифры,9 символов" style = "
                            margin-top:16px;width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                            <p style = "font-size:12px;">
                                <?php
                                    if(!preg_match("/^[A-Z]{1}[a-z]{1,15}$/" , $name)){
                                        echo $err_name_uncorrect;
                                    }
                                ?>
                            </p>
                            <input type = "password" name = "password" class = "form-control" placeholder="Пароль" required value = "<?php echo $pass;?>" title = "Заглавная,а также строчные буквы латинского алфавита и цифры,15 символов"style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                            <p style = "font-size:12px;">
                                <?php
                                    if (!preg_match("/^[a-zA-Z0-9.]+$/", $pass)) {
                                        echo $err_pass_uncorrect;
                                    }
                                ?>
                            </p>
                            <button class="btn" type = "submit" style = "width: 280px;height: 36px;left: 40px;top: 305px;background: #F6CE3A;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);border-radius: 18px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 12px;color: black;text-transform: uppercase;">
                                Зарегистрироваться
                            </button>
                            <?php
                                
                            ?>
                            </form>
                        </div>
                    </div>
                    </ul>
                </div>
            </header>
            <div class = "container" style = "position:absolute; margin-left:190px;top:391px;">
                <h1>
                    3d visualization
                </h1>
                <h3 style = "margin-top:16px;">
                    Товарищи! консультация с широким активом позволяет<br> 
                    выполнять важные задания по разработке систем массового участия.<br> 
                    Идейные соображения высшего порядка, а также укрепление.
                </h3>
                <button type="button" class="btn btn-warning" style = "width:168px; height:36px;border-radius:18px; margin-top:60px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;">
                    УЗНАТЬ О КОМПАНИИ
                </button>
                <div class ="navigation1">
                    <h4 class = "numpage" style = "color:white;margin-left:-5px;">01|</h4>
                    <a href = "#second"><div class="round1_w"></div></a>
                    <a href = "#third"><div class="round2_w"></div></a>
                    <a href = "#fourth"><div class="round3_w"></div></a>
                    <a href = "#fifth"><div class="round4_w"></div></a>
                    <a href = "#sixth"><div class="round5_w"></div></a>
                    <a href = "#seventh"><div class="round6_w"></div></a>
                    <a href = "#eighth"><div class="round7_w"></div></a>
                </div>
            </div> 
            <a id="back2Top" title="Наверх" href="#first">&#10148;</a> 
        </div>
<?php
include 'blocks/second_block.php';
include 'blocks/third_block.php';
include 'blocks/fourth_block.php';
include 'blocks/fifth_block.php';
include 'blocks/sixth_block.php';
include 'blocks/seventh_block.php';
include 'blocks/eighth_block.php';
include 'blocks/footer.php';
include 'blocks/scripts_end.php';
?>