<?php
session_start();
include 'php_files/connect.php';
$login =$_SESSION['login'];
$query_log = "SELECT login FROM profiles WHERE login = '$login'";
$result_log = mysqli_query($link,$query_log);
$log_log = mysqli_fetch_row($result_log);
$vyvod_log = $log_log[0];
$query_avatar = "SELECT avatar_path FROM profiles WHERE login = '$login'";
$result_avatar = mysqli_query($link,$query_avatar);
$log_avatar = mysqli_fetch_row($result_avatar);
$vyvod_avatar = $log_avatar[0];
$query_date = "SELECT date FROM profiles WHERE login = '$login'";
$result_date = mysqli_query($link,$query_date);
$log_date = mysqli_fetch_row($result_date);
$vyvod_date = $log_date[0];
$query_city = "SELECT city FROM profiles WHERE login = '$login'";
$result_city = mysqli_query($link,$query_city);
$log_city = mysqli_fetch_row($result_city);
$vyvod_city = $log_city[0];
?>
<!DOCTYPE html>
    <head>
        <title>
            Изменение профиля
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
            <input id="menu__toggle" type="checkbox" checked/>
            <label class="menu__btn" for="menu__toggle">
                <span style = "background-color:white;"></span>
            </label> 
            <ul class="menu__box">
                <div class = "toform_back">
                    <div class = "toform3">
                    <form method = "POST" class = "form-auth" align = "center" action = "php_files/editprofile.php">
                        <img src = "<?php echo $vyvod_avatar ?>" id = "avatar"/>
                        <input type = "file" accept="image/*" id="file_input" name = "avatar" onchange = "loadFile(event)" >
                        <label for = "file_input" class = "file_choose">
                            Выбрать фотографию профиля
                        </label>
                        <script>
                            var loadFile = function(event) {
                                var reader = new FileReader();
                                reader.onload = function(){
                                    var output = document.getElementById('avatar');
                                    output.src = reader.result;
                                    };
                                reader.readAsDataURL(event.target.files[0]);
                                };
                        </script>

                        <h4>Имя профиля</h4>
                        <?php echo $log;?>
                        <input type = "text" name = "login" class = "form-control" placeholder="Имя профиля" required title = "Заглавная,а также строчные буквы латинского алфавита и цифры,9 символов" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;" value = "<?php echo $vyvod_log;?>" id = "disabledInput" disabled>
                        <h4>Пол</h4>
                        <select class="form-select" aria-label="Default select example" name = "gender" required>
                            <option disabled>Выберите пол</option>
                            <option value="male" <?php if ($gender == "male") echo "selected"?>>Мужской</option>
                            <option value="female"<?php if ($gender == "female") echo "selected"?>>Женский</option>
                        </select>
                        <h4>Дата рождения</h4>
                        <input type = "date" name = "date" class = "form-control" placeholder = "Дата" required style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;" value = "<?php echo $vyvod_date;?>">
                        <h4>Город</h4>
                        <input type = "text" name = "city" class = "form-control" placeholder="Город" required style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;" value = "<?php echo $vyvod_city;?>">
                        <button class="btn" type = "submit" style = "width: 280px;height: 36px;left: 40px;top: 305px;background: #F6CE3A;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);border-radius: 18px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 12px;color: black;text-transform: uppercase;">Войти</button>
                            </form>  
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