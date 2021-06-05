<?php
session_start();
$log = $_SESSION['login'];
$pass = $_SESSION['pass'];
$role = $_SESSION['role'];
if (!isset($_SESSION['login'])){
	header('Location: /');
}
?>
<!DOCTYPE html>
    <head>
        <title>
            Спасибо за регистрацию
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel = "stylesheet" media = "(max-width:1600px)" href = "1600px_x_900px.css">
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
<div class = "container-fluid" style = "padding-right: 0px;padding-left: 0px;" id = "first">
    <img src = "img/firstpage.png" style = "width:1920px; height:1080px;">
    <header>
    <img src = "img/logo.png" style = "margin-left:40px;margin-top:12px;width:80px;">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" checked>
            <label class="menu__btn" for="menu__toggle">
                <span style = "background-color:white;"></span>
            </label> 
            <ul class="menu__box">
                <div class = "toform_back">
                    <div class = "toform_thanks">
                        <img src = "img/profile_pic.png" style = "width:120px;height:120px; margin-top: 40px;"> 
                        <h4>Спасибо за регистрацию!</h4>
                        <p>
                            Ваш логин для входа: <?php echo $log;?><br>
                            Ваш пароль для входа: <?php echo $pass;?><br>
                            Ваша роль на сайте: 
                            <?php 
                            if ($role == "0"){
                                echo "Обычный пользователь";
                            }
                            if ($role == "1"){
                                echo "Исполняющий заказы";
                            }
                            if ($role == "2"){
                                echo "Дающий заказы";
                            }
                            ?>
                        </p> 
                        <a href = "/">
                        <button type="button" class="btn btn-warning" style = "width:280px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;text-decoration:none;">
                        ПРОДОЛЖИТЬ
                        </button>
                        </a>
                    </div>
                </div>
            </ul>
        </div>    
    </header>
    <div class = "container" id = "info_container">
        <h1>
            3d visualization
        </h1>
        <h3 style = "margin-top:16px;">
        Мы реализуем Ваши идеи с особой тщательностью, небезраз-<br>
        -личием и энтузиазмом. Нам под силу воссоздать 3D объекты<br>
        различной сложности – от элементов интерьера до <br>
        территорий с комплексной застройкой. 
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
	include 'blocks/seventh_block.php';
	include 'blocks/eighth_block.php';
	include 'blocks/footer.php';
	include 'blocks/scripts_end.php';
?>