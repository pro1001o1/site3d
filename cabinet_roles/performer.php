<h2 style = "position: relative;left: -96px;top: 24px;">Личная информация</h2>
    <div class = "toform_block_info">
        <img src = "img/profile_pic.png" style = "margin-top:40px;margin-left:-360px;width:48px;height:48px;">
        <h3><?php echo $name;?></h1>
        <h4 align = "left">Контактная информация</h4>
        <p align = "left">E-mail: <?php echo $_SESSION['email'];?></p>
        <?php echo "<a href = 'php_files/logout.php' class = 'btn btn-warning'>Выйти</a>";?>
    </div>
    <h2 style = "position: relative;left: -76px;top:80px;">Текущий проект</h2>
    <div class = "toform_block_next_projects">
        <?php
        $log = $_SESSION['login'];
            $query_have_project_perf = "SELECT have_project FROM users WHERE login = '$log'";
            $result_have_project_perf = mysqli_query($link,$query_have_project_perf);
            $have_project_vyvod_perf = mysqli_fetch_row($result_have_project_perf);
            $vyvod_have_project_perf = $have_project_vyvod_perf[0];

            $query_have_project = "SELECT have_project FROM projects WHERE performer = '$log'";
            $result_have_project = mysqli_query($link,$query_have_project);
            $have_project_vyvod = mysqli_fetch_row($result_have_project);
            $vyvod_have_project = $have_project_vyvod[0];

            if($vyvod_have_project_perf == 0){
                      echo "<h4 align = 'left'>
                        Пока нет заказов,чилльте
                      </h4>";
            }
            if($vyvod_have_project_perf == 1 && $vyvod_have_project == 0){
                             echo "<h4 align = 'left'>
                        Заказы есть, назначают исполнителя,ждите
                      </h4>";
            }
            if($vyvod_have_project_perf == 1 && $vyvod_have_project == 1){
                include 'currentproject_perf.php';
            }
            ?>
    </div>
    
    <?php
    $query_prog = "SELECT progress FROM projects WHERE performer = '$login'";
    $result_prog = mysqli_query($link,$query_prog);
    $prog_vyvod = mysqli_fetch_row($result_prog);
    $vyvod_prog = $prog_vyvod[0];
    switch($vyvod_prog){
        case "0":echo "<h2 style = 'position: relative;left: -76px;top: 136px;'>
        Обновление проекта
    </h2>
    <div class = 'toform_block_prev_projects'>
        <form enctype = 'multipart/form-data' method = 'POST'>
            <h4 style = 'position: relative;top: 40px;right:85px;'>
                Выберите этап разработки проекта
            </h4>
            <input id='goal' type='number' name='goal' value='0' min = '0' max ='1' style = 'position: relative;margin-top: 20px;right: 165px;top:20px;'>
            <h4 style = 'position: relative;right:90px;top:30px;'>
                Выберите загружаемые картинки<br>(форматы .png, .jpg)
            </h4>
            <input type='file' id='image_uploads' name='image_uploads' accept='.jpg, .jpeg, .png' style = 'margin-right:100px;margin-top:30px;'>
            <button type='submit' name = 'submit_info' class='btn btn-primary' style = 'width:168px; height:36px;border-radius:18px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A; margin-right:230px;margin-top:20px;S'>
                Добавить информацию
            </button>
        </form>
    </div>";break;
        case "1":echo "<h2 style = 'position: relative;left: -76px;top: 136px;'>
        Обновление проекта
    </h2>
    <div class = 'toform_block_prev_projects'>
        <form enctype = 'multipart/form-data' method = 'POST'>
            <h4 style = 'position: relative;top: 40px;right:85px;'>
                Выберите этап разработки проекта
            </h4>
            <input id='goal' type='number' name='goal' value='1' min = '1' max ='2' style = 'position: relative;margin-top: 20px;right: 165px;top:20px;'>
            <h4 style = 'position: relative;right:90px;top:30px;'>
                Выберите загружаемые картинки<br>(форматы .png, .jpg)
            </h4>
            <input type='file' id='image_uploads' name='image_uploads' accept='.jpg, .jpeg, .png' style = 'margin-right:100px;margin-top:30px;'>
            <button type='submit' name = 'submit_info' class='btn btn-primary' style = 'width:168px; height:36px;border-radius:18px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A; margin-right:230px;margin-top:20px;S'>
                Добавить информацию
            </button>
        </form>
    </div>";break;
        case "2":echo "<h2 style = 'position: relative;left: -76px;top: 136px;'>
        Обновление проекта
    </h2>
    <div class = 'toform_block_prev_projects'>
        <form enctype = 'multipart/form-data' method = 'POST'>
            <h4 style = 'position: relative;top: 40px;right:85px;'>
                Выберите этап разработки проекта
            </h4>
            <input id='goal' type='number' name='goal' value='2' min = '2' max ='3' style = 'position: relative;margin-top: 20px;right: 165px;top:20px;'>
            <h4 style = 'position: relative;right:90px;top:30px;'>
                Выберите загружаемые картинки<br>(форматы .png, .jpg)
            </h4>
            <input type='file' id='image_uploads' name='image_uploads' accept='.jpg, .jpeg, .png' style = 'margin-right:100px;margin-top:30px;'>
            <button type='submit' name = 'submit_info' class='btn btn-primary' style = 'width:168px; height:36px;border-radius:18px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A; margin-right:230px;margin-top:20px;S'>
                Добавить информацию
            </button>
        </form>
    </div>";break;
        case "3":echo " ";break;
    }
    ?>