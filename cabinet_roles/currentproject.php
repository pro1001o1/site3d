<h4 align = "left">
    <?php 
        echo $vyvod_pn;
    ?>
</h4>
<p align = "left">
    <?php
        echo $vyvod_zad;
    ?>
</p> 
<p align ="left">Площадь:
    <?php
        echo $vyvod_meters;
    ?> 
м2
</p>
<p align = "left">Имя:
    <?php
        echo $vyvod_perf;
    ?>
</p>
<div class="progress" style = "width:400px; height:12px; margin-left:40px;position:relative;top:120px;visibility:hidden;">
<div class="progress-bar" role="progressbar" style="width:0%;background-color:#F7CE3A;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    
</div>
</div>
    <?php
    $query_img = "SELECT img_path FROM images WHERE login = '$login'";
    $result_img = mysqli_query($link,$query_img);
    while($img_vyvod = mysqli_fetch_array($result_img))
    {
    $rows[] = $img_vyvod;
    }
    $vyvod_img_first = $rows[0][0];
    $vyvod_img_second = $rows[1][0];
    $vyvod_img_third = $rows[2][0];

    $query_prog = "SELECT progress FROM projects WHERE login = '$login'";
    $result_prog = mysqli_query($link,$query_prog);
    $prog_vyvod = mysqli_fetch_row($result_prog);
    $vyvod_prog = $prog_vyvod[0];

switch ($vyvod_prog){
    case "0":  echo "<div class='progress' style = 'width:400px; height:12px; margin-left:40px;position:relative;top:55px'>
        <div class='progress-bar' role='progressbar' style='width:0%;background-color:#F7CE3A;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
        </div>
        </div>";
break;
    case "1":  echo "<div class='progress' style = 'width:400px; height:12px; margin-left:40px;position:relative;top:55px'>
        <div class='progress-bar' role='progressbar' style='width:40%;background-color:#F7CE3A;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
        </div>
        </div>
        <img src = 'img/flag.png' id = 'round1_flag'>
        <div id = 'round1'></div>";
    break;
    case "2":  echo "<div class='progress' style = 'width:400px; height:12px; margin-left:40px;position:relative;top:55px'>
        <div class='progress-bar' role='progressbar' style='width:70%;background-color:#F7CE3A;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
        </div>
        </div>
        <img src = 'img/flag.png' id = 'round1_flag'>
        <div id = 'round1'></div>
        <img src = 'img/flag.png' id = 'round2_flag'>
        <div id = 'round2'></div>";
    break;
    case "3":  echo "<div class='progress' style = 'width:400px; height:12px; margin-left:40px;position:relative;top:55px'>
        <div class='progress-bar' role='progressbar' style='width:100%;background-color:#F7CE3A;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
        </div>
        </div>
        <img src = 'img/flag.png' id = 'round1_flag'>
        <div id = 'round1'></div>
        <img src = 'img/flag.png' id = 'round2_flag'>
        <div id = 'round2'></div>
        <img src = 'img/flag.png' id = 'round3_flag'>
        <div id = 'round3'></div>";
    }
    ?>
    
<div class="dropdown" style = "margin-top: 100px;margin-right: 275px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"style = "background-color:white;color:black;outline: none !important;border: 0 !important;box-shadow:none;">
    Изображения
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style = "width:440px;height:140px;border:none;margin-top: 30px;">
    <li>
        <?php
            switch ($vyvod_prog){
                case "0":echo "<p> Картинок нет,но вы держитесь :( </p>";break;
                case "1":echo "<img src = '" . $vyvod_img_first . "'  style = 'width:150px;height:150px;'>";break;
                case "2":echo "<img src = '" . $vyvod_img_first . "'  style = 'width:150px;height:150px;margin-left:20px;'>";
                    echo "<img src = '" . $vyvod_img_second . "' style = 'width:150px;height:150px;'>";break;
                case "3":echo "<img src = '" . $vyvod_img_first . "'style = 'width:150px;height:150px;margin-left:20px;'>";
                    echo "<img src = '" . $vyvod_img_second . "' style = 'width:150px;height:150px;margin-left:20px;'>";
                    echo "<img src = '" . $vyvod_img_third . "'  style = 'width:150px;height:150px;'>";break;
            }?>
    </li>
  </ul>
</div>