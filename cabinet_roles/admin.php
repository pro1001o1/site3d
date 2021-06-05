<h2 style = "position: relative;left: -96px;top: 24px;">Личная информация</h2>
    <div class = "toform_block_info">
        <img src = "img/profile_pic.png" style = "margin-top:40px;margin-left:-360px;width:48px;height:48px;">
            <h3><?php echo $name;?></h1>
            <h4 align = "left">Основная информация</h4>
            <p align = "left">E-mail: <?php echo $_SESSION['email'];?></p>
            <?php echo "<a href = 'php_files/logout.php' class = 'btn btn-warning'>Выйти</a>";?>
    </div>
    <h2 style = "position: relative;left: -26px;top:80px;">Информация о заказе проекта</h2>
    <div class = "toform_block_next_projects">                   
    <h4 style = "position: relative;right:130px;top:40px;">Таблица исполнителей</h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#db_users" style = "width:168px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A;margin-right:230px;">
            Открыть таблицу
        </button>
    <h4 style = "position: relative;right:100px;top:40px;">Таблица заказанных проектов</h4>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#db_projects" style = "width:168px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A; margin-right:230px;">
            Открыть таблицу
        </button>
    </div>
    <h2 style = "position: relative;top:130px;">Передача проекта на исполнение</h2>
    <div class = "toform_block_prev_projects">
        <form method = "POST">
            <h4 style = "position: relative;right:140px;top:20px;">
                Логин заказчика
            </h4>
            <input type = "text" name = "login_user" class = "form-control" placeholder="Логин заказчика" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;margin-top:30px;">
            <h4 style = "position: relative;right:130px;top:20px;">
                Логин исполнителя
            </h4>
            <input type = "text" name = "login_performer" class = "form-control" placeholder="Логин исполнителя" required style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;margin-top:30px;">
            <button type="submit" class="btn btn-primary" style = "width:168px; height:36px;border-radius:18px;font-family: Segoe UI; font-size:12px; font-style:normal;background: #F6CE3A;color:black;border-color:#F6CE3A; margin-right:230px;">
                Отправить исполнителю
            </button>
        </form>
    </div>