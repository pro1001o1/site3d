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
    <img src = "img/firstpage.png" style = "width:1920px; height:1080px;">
    <header>
        <p class = "logo">Логотип</p>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span style = "background-color:white;"></span>
            </label> 
            <ul class="menu__box">
                <div class = "toform_back">
                    <div class = "toform3">
                    <form method = "POST" class = "form-auth" align = "center" action = "cabinet.php">
                        <img src = "img/profile_pic.png" style = "width:120px;height:120px; margin-top: 40px;">
                        <p style = "margin-top:8px;color:#7D7D7D; font-family: Roboto;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;" type ="file">Выбрать фотографию профиля</p>
                        <h4>Имя профиля</h4>
                        <input type = "text" name = "login" class = "form-control" placeholder="Имя профиля" required pattern = "[A-Z]{1}[A-Za-z0-9]{1,9}" title = "Заглавная,а также строчные буквы латинского алфавита и цифры,9 символов" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;"><?php echo $_SESSION['login']; ?>
                        <h4>Пол</h4>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>Выберите пол</option>
                            <option value="1">Мужской</option>
                            <option value="2">Женский</option>
                        </select>
                        <h4>Дата рождения</h4>
                        <input type = "date" name = "date" class = "form-control" placeholder = "Дата" style = "width: 280px;height: 36px;margin-left: 40px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                        <h4>Город</h4>
                        <input type = "text" name = "city" class = "form-control" placeholder="Город" required style = "margin-top:16px; margin-bottom:36px;margin-left:40px; width:280px;height:36px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 16px;border-radius:1px solid #B8B8B8;border-radius:18px;">
                        <button class="btn" type = "submit" style = "width: 280px;height: 36px;left: 40px;top: 305px;background: #F6CE3A;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);border-radius: 18px;font-family: Segoe UI;font-style: normal;font-weight: normal;font-size: 12px;line-height: 12px;color: black;text-transform: uppercase;">Войти</button>
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