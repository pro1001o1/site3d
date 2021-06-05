        <script src ="https://code.jquery.com/jquery-3.6.0.min.js" type = "text/javascript"></script>
        <script src ="scripts/slick.min.js" type = "text/javascript"></script>
        <script src ="scripts/slider.js" type = "text/javascript"></script>
        <script src = "smoothscroll-for-websites-master/SmoothScroll.js" type = "text/javascript"></script>
        <script src = "scripts/top-button.js" type = "text/javascript"></script>
        <script src = "scripts/modals.js" type = "text/javascript"></script>
        <script src = "scripts/progress.js" type = "text/javascript"></script>
        <div class="modal fade" id="db_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Таблица свободных исполнителей
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
            		include 'php_files/connect.php';
            		$query ="SELECT email, login, name FROM users WHERE have_project = '0' AND role = '1'";
            		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            		if($result){
                		$rows = mysqli_num_rows($result); 
                		echo "
                		<table style = 'border-collapse: separate;border-spacing: 5px;background: #ECE9E0;color: #656665;border: 16px solid #ECE9E0;border-radius: 20px;'>
                    		<tr>
                        		<th style = 'font-size: 18px;padding: 10px;'>
                            		Email
                        		</th>
                        		<th style = 'font-size: 18px;padding: 10px;'>
                            		Логин
                        		</th>
                        		<th style = 'font-size: 18px;padding: 10px;'>
                            		Имя
                        		</th>
                    		</tr>";
                		for ($i = 0 ; $i < $rows ; ++$i){
                    		$row = mysqli_fetch_row($result);
                    		echo "<tr>";
                			for ($j = 0 ; $j < 3 ; ++$j) echo "<td style = 'background: #F5D7BF;padding: 10px;'>$row[$j]</td>";
                			echo "</tr>";
                		}
                		echo "</table>";
                		mysqli_free_result($result);
            		}
            		mysqli_close($link);?>
                 	</div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="db_projects" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style = "width:270%; margin-left:-400px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Таблица свободных исполнителей
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
            		include 'php_files/connect.php';
            		$query ="SELECT * FROM projects WHERE have_project = '0' AND past_project = '0'";
            		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            		if($result){
                		$rows = mysqli_num_rows($result); 
                		echo "
                		<table style = 'border-collapse: separate;border-spacing: 5px;background: #ECE9E0;color: #656665;border: 16px solid #ECE9E0;border-radius: 20px;'>
                    		<tr>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Количество комнат
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Количество квадратных метров
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Логин
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Название проекта
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Техническое задание
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Срок выполнения (в днях)
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Цена
                        		</th>
                        		<th style = 'font-size: 18px;padding: 12px;'>
                            		Сложность проекта
                        		</th>

                    		</tr>";
                		for ($i = 0 ; $i < $rows ; ++$i){
                    		$row = mysqli_fetch_row($result);
                    		echo "<tr>";
                			for ($j = 0 ; $j < 8 ; ++$j) echo "<td style = 'background: #F5D7BF;padding: 10px;'>$row[$j]</td>";
                			echo "</tr>";
                		}
                		echo "</table>";
                		mysqli_free_result($result);
            		}
            		mysqli_close($link);?>
                 	</div>
                </div>
            </div>
        </div>
    </body>
</html>