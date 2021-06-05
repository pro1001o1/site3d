<form action = "php_files/check_modal_projects_medium.php" method = "POST">
        <label for="customRange2" class="form-label">Количество помещений</label>
        <input type="range" class="form-range" min="1" max="10" id="houses2" value = "1" oninput="fun2()" name = "houses2">
        <label for="customRange2" class="form-label">Количество квадратных метров</label>
        <input type="range" class="form-range" min="30" max="200" id="squaremeters2" value = "30" oninput="fun2()" name = "squaremeters2">

        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id = "login" name = "login">
        <label for="project_name" class="form-label">Название проекта</label>
        <input type="text" class="form-control" id = "project_name" name = "project_name">
        <label for="zadanie" class="form-label">Техническое задание</label>
        <input type="text" class="form-control" id = "zadanie" name = "zadanie">

        <p>Количество помещений: </p>
        <p id = "vyvod_house2" style = "margin-left:190px;margin-top:-40px;">1</p>
        <p>Количество квадратных метров: </p>
        <p id = "vyvod_sqmeters2" style = "margin-left:250px;margin-top:-40px;">30</p>
        <p>Срок выполнения: </p>
        <p id = "srok2" style = "margin-left:150px;margin-top:-40px;">3</p>
        <p style = "margin-left:170px;margin-top:-40px">дней(-ня)</p>
        <p>Общая стоимость: </p>
        <p id = "price2" style = "margin-left:150px;margin-top:-40px;">49500</p>
        <p style = "margin-left:205px;margin-top:-40px">₽</p>
        <button type="submit" class="btn btn-primary" name = "submit2">
        Заказать проект
        </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
        Закрыть
        </button>
        </form>