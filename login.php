<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: php_files/cabinet.php");
}
?>
<?php
include 'php_files/connect.php';
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
                        <div class = "toform">
                            <div class = "auth">
                               <a href = "index.php"class="btn" style = "width:62px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;    border-bottom: none; margin-left: -220px;margin-top: 28px;">
                                    Вход
                                </a>  
                            </div>
                            <div class = "reg">
                               <a class="btn" style = "width:112px; height:37px;font-family: Segoe UI; font-size:14px; font-style:normal;background: white;border-left:none;border-right:none;border-top:none;border-bottom:1px solid #F6CE3A;margin-bottom: 20px;margin-top: -46px;">
                                    Регистрация
                                </a>
                            </div>
                            <form method = "POST" class = "form-reg" align = "center">
                                <?php if (isset($smsg)){ ?>
                            <div class = "alert alert-success" role = "alert">
                                <?php echo $smsg;?> 
                            </div>
                                <?php } ?>
                                <?php if (isset($fsmsg)){ ?>
                            <div class = "alert alert-danger" role = "alert">
                                <?php echo $fsmsg;?>    
                            </div>
                                <?php } ?>
                            <input type = "text" name = "login" class = "form-control" placeholder="Имя профиля" required pattern = "[A-Z]{1}[A-Za-z0-9]{1,9}" title = "Заглавная,а также строчные буквы латинского алфавита и цифры,9 символов" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;">
                            <input type = "text" name = "name" class = "form-control" placeholder="Никнейм" required pattern="[А-Я]{1}[а-я]{1,15}" title = "Заглавная и строчные буквы русского алфавита,максимум-16 символов" style = "margin-top:16px;width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;">
                            <input type = "password" name = "password" class = "form-control" placeholder="Пароль" required pattern = "[A-Z]{1}[a-z0-9]{1,15}" title = "Заглавная,а также строчные буквы латинского алфавита и цифры,15 символов"style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;">
                            <button class="btn" type = "submit" style = "width: 280px;height: 36px;left: 40px;top: 305px;background: #BBD843;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);border-radius: 18px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 12px;color: #FFFFFF;text-transform: uppercase;">Зарегистрироваться</button>
                            </form>
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
        if(isset($_POST['login']) && isset($_POST['password'])){
    $log = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $query = "INSERT INTO users (login, name, password) VALUES ('$log', '$name', '$pass')";
    $result = mysqli_query($link, $query);

    if($result){
        $smsg = "Регистрация прошла успешно";
    }
    else{
        $fsmsg = "Ошибка";
    }
}
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