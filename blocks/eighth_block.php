<div class = "container-fluid" id = "eighth">
    <div class = "container"style = "margin-left:195px;">
        <h2 style = "padding-top:130px;">Наши контакты</h2>
        <h4 style = "padding-top:16px;">Если у вас есть желание с нами поработать, или у вас есть какие то вопросы,<br>оставь свои контакты ниже. И наши менеджеры с вами обязательно<br>свяжутся.</h4>
        <form method = "POST" action="php_files/mail_send.php">
            <div class="mb-3">
                    <input type="text" class="form-control"  aria-describedby="emailHelp" style = "width:320px; border-bottom:1px solid #b8b8b8;margin-top:60px;border-left:0px;border-right:0px;border-top:0px;border-radius:0px;background-color:#f1f1f1" placeholder = "Имя" name = "name">
                    <input type="text" class="form-control"  aria-describedby="emailHelp" style = "width:320px; border-bottom:1px solid #b8b8b8;margin-top:20px;border-left:0px;border-right:0px;border-top:0px;border-radius:0px;background-color:#f1f1f1" placeholder = "Номер телефона" name = "ph_number">
                    <input type="text" class="form-control"  aria-describedby="emailHelp" style = "width:320px; border-bottom:1px solid #b8b8b8;margin-top:20px;border-left:0px;border-right:0px;border-top:0px;border-radius:0px;background-color:#f1f1f1" placeholder = "Почта" name = "email">
                    <input type="text" class="form-control"  aria-describedby="emailHelp" style = "width:320px; border-bottom:1px solid #b8b8b8;margin-top:20px;border-left:0px;border-right:0px;border-top:0px;border-radius:0px;background-color:#f1f1f1" placeholder = "Комментарий" name = "comment">
                    <button type="button" class="btn btn-warning" style = "width:320px; height:36px;border-radius:18px; margin-top:60px;font-family: Segoe UI; font-size:12px; font-style:normal;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15); background-color: #F6CE3A" name = "submit_send">
                        ОТПРАВИТЬ
                    </button>
            </div>
        </form>
        <?php
if(isset($_POST['submit_send'])){
$to      = $_POST['email'];
$subject = 'Ожидайте ответа';
$message = 'Привет,пошел нахуй';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
header("Location: index.php");
}
?>
    </div>
    <div class = "container" id = "contacts">
        <div class = "container" style = "margin-left:95px">
            <h2 style = "padding-top:130px;">
                Наши контакты
            </h2>
            <h4 style = "padding-top:58px;">
                Телефон
            </h4>
            <p style = "padding-top:8px;">
                +7(954)-545-52-85
            </p>
            <h4 style = "padding-top:24px;">
                Адрес
            </h4>
            <p style = "padding-top:8px;">
                УР, гор. Ижевск, ул.Петрова, д.9, кв.10
            </p>
            <h4 style = "padding-top:24px;">
                Почта
            </h4>
            <p style = "padding-top:8px;">
                owngame.official@gmail.com
            </p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.647678038656!2d37.6105690494315!3d55.72987480820821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b050897b54b%3A0x98aa3f7bdd6c1dbb!2sGolden%20HEEL!5e0!3m2!1sru!2sru!4v1616954652901!5m2!1sru!2sru" width="764" height="426" style="border:0; margin-left:-12px;margin-top:39px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class ="navigation8">
        <a href = "#first">
            <div class="round_b">
            </div>
        </a>
        <a href = "#second">
            <div class="round1_b">
            </div>
        </a>
        <a href = "#third">
            <div class="round2_b">
            </div>
        </a>
        <a href = "#fourth">
            <div class="round3_b">
            </div>
        </a>
        <a href = "#fifth">
            <div class="round4_b">
            </div>
        </a>
        <a href = "#sixth">
            <div class="round5_b">
            </div>
        </a>
        <h4 class = "numpage_b" style = "color:grey;margin-left:-5px;margin-top:10px;font-family: 'Roboto';font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;text-align: center;">
            07|
        </h4>
    </div>
</div>