 <?php
$query_log_zakaz = "SELECT have_project FROM users WHERE login = '$login'";
$result_log_zakaz = mysqli_query($link,$query_log_zakaz);
$log_zakaz_vyvod = mysqli_fetch_row($result_log_zakaz);
$vyvod_log_zakaz = $log_zakaz_vyvod[0];
 ?>
 <div class = "container-fluid" style = "background-color:#F1F1F1;padding-right: 0px;padding-left: 0px;" id = "third">
            <div class = "container" id = "info_container3">
                <h2>
                    Наши пакеты
                </h2>
                <h4>
                    Здесь вы можете увидеть предлагаемые пакеты услуг для наших клиентов и рассчитать примерную стоимость работы.
                </h4>
            </div>
            <div class ="navigation3">
               <a href = "#first"><div class="round_b"></div></a>
               <a href = "#second"><div class="round1_b"></div></a>
               <h4 class = "numpage_b" style = "color:grey;margin-left:-5px;margin-top:10px;font-family: 'Roboto';font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;text-align: center;">03|</h4>
               <a href = "#fourth"><div class="round3_b" style = "margin-top:10px"></div></a>
               <a href = "#fifth"><div class="round4_b"></div></a>
               <a href = "#seventh"><div class="round6_b"></div></a>
               <a href = "#eighth"><div class="round7_b"></div></a>
                </div>
            <div class="row row-cols-1 row-cols-md-3 g-4" id = "cards">
                <div class="col" style = "padding-right:22px">
                    <div class="card w-480 h-500" id = "card">
                        <div class="card-body">
                            <h2 class="card-title">Простой</h2>
                            <h4>В него входят: </h4>
                            <p class="card-text">
                            Описание пакета, который описывает<br>
                            описание описание пакета услуг. Описание<br>
                            пакеталлл, который описывает описание<br>
                            описание пакета услуг. Описание пакета,<br>
                            который описывает описание описание<br>
                            пакета услуг. Описание пакета, который<br>
                            описывает описание описание пакета услуг.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style = "width:190px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal; border: 1px solid #F7CE3A;box-sizing: border-box;border-radius: 18px;color:#F6CE3A; background:none;">
                            РАССЧИТАТЬ СТОИМОСТЬ
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                            Пакет "Простой"
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            if (!isset($_SESSION['role'])){
                                                echo '<a href = "register.php">Зарегистрируйтесь</a> на сайте,чтобы заказать проект';    
                                            }
                                            if ($vyvod_log_zakaz == "0"){
                                                include 'modal_function/easy.php';    
                                            }
                                            if($vyvod_log_zakaz == "1"){
                                                echo "Вы уже заказали проект";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style = "padding-left:22px;padding-right:22px;">
                    <div class="card w-480 h-500" id = "card">
                        <div class="card-body">
                            <h2 class="card-title">Средний</h2>
                            <h4>В него входят: </h4>
                            <p class="card-text">
                            Описание пакета, который описывает<br>
                            описание описание пакета услуг. Описание<br>
                            пакеталлл, который описывает описание<br>
                            описание пакета услуг. Описание пакета,<br>
                            который описывает описание описание<br>
                            пакета услуг. Описание пакета, который<br>
                            описывает описание описание пакета услуг.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal2" style = "width:190px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal; border: 1px solid #F7CE3A;box-sizing: border-box;border-radius: 18px;color:#F6CE3A; background:none;">
                            РАССЧИТАТЬ СТОИМОСТЬ
                            </button>
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                            Пакет "Средний"
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php
                                            if (!isset($_SESSION['role'])){
                                                echo '<a href = "register.php">Зарегистрируйтесь</a> на сайте,чтобы заказать проект';    
                                            }
                                            if ($vyvod_log_zakaz == "0"){
                                                include 'modal_function/medium.php';    
                                            }
                                            if($vyvod_log_zakaz == "1"){
                                                echo "Вы уже заказали проект";
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style = "padding-left:22px;">
                    <div class="card w-480 h-500" id = "card">
                        <div class="card-body">
                            <h2 class="card-title">Сложный</h2>
                            <h4>В него входят: </h4>
                            <p class="card-text">
                            Описание пакета, который описывает<br>
                            описание описание пакета услуг. Описание<br>
                            пакеталлл, который описывает описание<br>
                            описание пакета услуг. Описание пакета,<br>
                            который описывает описание описание<br>
                            пакета услуг. Описание пакета, который<br>
                            описывает описание описание пакета услуг.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal3" style = "width:190px; height:36px;border-radius:18px; margin-top:40px;font-family: Segoe UI; font-size:12px; font-style:normal; border: 1px solid #F7CE3A;box-sizing: border-box;border-radius: 18px;color:#F6CE3A; background:none;">
                            РАССЧИТАТЬ СТОИМОСТЬ
                            </button>
                            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                            Пакет "Сложный"
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            if (!isset($_SESSION['role'])){
                                                echo '<a href = "register.php">Зарегистрируйтесь</a> на сайте,чтобы заказать проект';    
                                            }
                                            if ($vyvod_log_zakaz == "0"){
                                                include 'modal_function/hard.php';    
                                            }
                                            if($vyvod_log_zakaz == "1"){
                                                    echo "Вы уже заказали проект";
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src = "img/thirdblock.png" id = "thirdblock">
        </div>