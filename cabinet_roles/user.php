<?php
$query_avatar = "SELECT avatar_path FROM profiles WHERE login = '$login'";
    $result_avatar = mysqli_query($link,$query_avatar);
    $log_avatar = mysqli_fetch_row($result_avatar);
    $vyvod_avatar = $log_avatar[0];
?>
<h2 style = "position: relative;left: -96px;top: 24px;">Личная информация</h2>
    <div class = "toform_block_info">
        <img src = "<?php echo $vyvod_avatar;?>" style = "margin-top:40px;margin-left:-360px;width:48px;height:48px; border:1px;border-radius:25px;">
        <h3>
            <?php 
                echo $name;
            ?>
        </h3>
        <a href = 'editprofile.php'>
            <img src = "img/change.png" style = "width:20px;height:20px;margin-top:-110px;margin-left:-130px;">
        </a>
        <h4 align = "left">
            Основная информация
        </h4>
        <p align = "left">
            Пол: 
            <?php 
                if($_SESSION['gender'] == "male"){
                    echo "Мужской";
                }
                else{
                    echo "Женский";
                }
                ?>
        </p>
        <p align = "left">
            Дата рождения:
            <?php
                echo date('d.m.Y',strtotime($date));
            ?>
        </p>
        <p align = "left">
            Город: 
            <?php
                echo $_SESSION['city'];
            ?>
        </p> 
        <h4 align = "left">
            Контактная информация
        </h4>
        <p align = "left">
            E-mail:
            <?php
                echo $_SESSION['email'];
            ?>
        </p>
        <?php
            echo "<a href = 'php_files/logout.php' class = 'btn btn-warning'>Выйти</a>";
        ?>
    </div>
<h2 style = "position: relative;left: -76px;top:80px;">
    Действующие проекты
</h2>
    <div class = "toform_block_next_projects">
        <?php
            $log = $_SESSION['login'];
            $query_have_project_users = "SELECT have_project FROM users WHERE login = '$log'";
            $result_have_project_users = mysqli_query($link,$query_have_project_users);
            $have_project_vyvod_users = mysqli_fetch_row($result_have_project_users);
            $vyvod_have_project_users = $have_project_vyvod_users[0];

            $query_have_project = "SELECT have_project FROM projects WHERE login = '$log'";
            $result_have_project = mysqli_query($link,$query_have_project);
            $have_project_vyvod = mysqli_fetch_row($result_have_project);
            $vyvod_have_project = $have_project_vyvod[0];
            
            if($vyvod_have_project_users == 0){
                      echo "<h4 align = 'left'>
                        У вас нет ни одного заказа
                      </h4>
                      <a href = '#third'>
                        <p align = 'left' style = 'color:black;text-decoration:none'>
                            Заказать?
                        </p>
                      </a>";
            }
            if($vyvod_have_project_users == 1 && $vyvod_have_project == 0){
                 echo "<h4 align = 'left'>
                        Ваш заказ ищет исполнителя,ожидайте...
                      </h4>";
            }
            if($vyvod_have_project_users == 1 && $vyvod_have_project == 1){
                include 'currentproject.php';
            }
        ?>    
    </div><?php
    $query_fin_project = "SELECT past_project FROM projects WHERE login = '$login'";
    $result_fin_project = mysqli_query($link,$query_fin_project);
    $have_fin_project = mysqli_fetch_row($result_fin_project);
    $vyvod_fin_project = $have_fin_project[0];

    $query_img = "SELECT img_path FROM images WHERE login = '$login'";
    $result_img = mysqli_query($link,$query_img);
    while($img_vyvod = mysqli_fetch_array($result_img))
    {
    $rows[] = $img_vyvod;
    }
    $vyvod_img_first = $rows[0][0];
    $vyvod_img_second = $rows[1][0];
    $vyvod_img_third = $rows[2][0];

    if($vyvod_fin_project == "1"){
    echo "<h2 style = 'position: relative;left: -76px;top: 136px;'>
        Прошлые проекты
    </h2>
    <div class = 'toform_block_prev_projects'>
    <h4 align = 'left'>" . $vyvod_pn . "</h4>
    <p align = 'left'>" . $vyvod_zad . "</p> 
    <p align ='left'>Площадь:" . $vyvod_meters . " м2</p>
    <p align = 'left'>Имя:" . $vyvod_perf . "</p>
    <div class='dropdown' style = 'margin-top: 60px;margin-right: 270px;'>
        <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false'style = 'background-color:#F1F1F1;color:black;outline: none !important;border: 0 !important;box-shadow:none;'>
            Изображения
        </button>
    <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton' style = 'width:440px;height:140px;border:none; background-color:#F1F1F1;'>
    <li>
    <img src = '" . $vyvod_img_first . "'style = 'width:130px;height:130px;'>
    <img src = '" . $vyvod_img_second . "' style = 'width:130px;height:130px;margin-left:20px;'>
    <img src = '" . $vyvod_img_third . "'  style = 'width:130px;height:130px;margin-left:20px;'>
    </div>
    ";
    }
    else{
    echo " ";
    }
    ?>