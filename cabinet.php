<?php
include "php_files/cabinet.php";
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
                        <div class ="toform_back_cab">
                        <h2 style = "position: relative;left: -96px;top: 24px;">Личная информация</h2>
                            <div class = "toform_block_info">
                                <img src = "img/profile_pic.png" style = "margin-top:40px;margin-left:-360px;width:48px;height:48px;">
                                <h3><?php echo $name;?></h1>
                                <a href = 'editprofile.php'><img src = "img/change.png" style = "width:20px;height:20px;margin-top:-110px;margin-left:-130px;"></a>
                                <h4 align = "left">Основная информация</h4>
                                <p align = "left">Пол: 
                                    <?php 
                                    if($_SESSION['gender'] == "male"){
                                        echo "Мужской";
                                    }
                                    else{
                                        echo "Женский";
                                    }
                                    ?>
                                    </p>
                                <p align = "left">Дата рождения: <?php echo date('d.m.Y',strtotime($date));?></p>
                                <p align = "left">Город: <?php echo $_SESSION['city'];?></p> 
                                <h4 align = "left">Контактная информация</h4>
                                <p align = "left">E-mail: <?php echo $_SESSION['email'];?></p>
                            <?php echo "<a href = 'php_files/logout.php' class = 'btn btn-warning'>Выйти</a>";?>
                            </div>
                            <h2 style = "position: relative;left: -76px;top:80px;">Действующие проекты</h2>
                            <div class = "toform_block_next_projects">
                            </div>
                            <h2 style = "position: relative;left: -76px;top: 136px;">Прошлые проекты</h2>
                            <div class = "toform_block_prev_projects">
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
            </div> 
            <a id="back2Top" title="Наверх" href="#first">&#10148;</a> 
        </div> 
                           