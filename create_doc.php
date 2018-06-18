<!DOCTYPE html>
<html>
    <head>
        <title>Тестовый сайт</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
                <div class="wrapper">

                <header class="header">
                        <strong></strong>
                             
          
          <?php
		    //-----------Меню и подключение к БД-------------
            include 'menu.php';
            include 'settings.php';
			//-----------Меню и подключение к БД-------------
			
			//----------------Запрос----------------------
            $query = 'SELECT `name`, `date_accept`, `date_entry` FROM `documents` order by `doc_id` DESC';
            $result = mysqli_query($connect, $query);
            //$row = mysqli_fetch_assoc($result) ;
            //print_r($row);
			while($row = mysqli_fetch_assoc($result)) {
			echo "<br>$row[name] $row[date_accept] $row[date_entry]";
			}
            if (!$query) {
                $message  = 'Nevernyi zapros: ' . mysql_error() . "\n";
                $message .= 'Zapros celyi: ' . $query;
                die($message);
            }
			//----------------Запрос----------------------
            ?>


        </header> 

                <main class="content">
                        <strong></strong>
                   
                    <div class="jumbotron">
                      <h2 class="display-4">Создать документ</h2>
                      <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
                      <hr class="my-4">
                      <p>
                        <form>
                              <div class="col-2 form-group">
                                <label for="formGroupExampleInput">Номер документа</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="123">
                              </div>
                              <div class="col-10 form-group">
                                <label for="exampleFormControlTextarea1">Наименование документа</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="о предварительном согласовании...">
                              </div>
                              <div class="col-6 form-group">
                                <label for="exampleFormControlSelect1">Должность утверждающего документ</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Глава администрации</option>
                                  <option>Специалист по финансам</option>
                                  <option>Специалит по бюджету</option>
                                  <option>Землеустроитель</option>
                                  <option>Заведующий хозяйством</option>
                                </select>
                              </div>
                              <div class="col-4 form-group">
                                <label for="exampleFormControlInput1">ФИО утверждающего документ</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Иванов Иван Иванович">
                              </div>
                                <div class="col form-row" >
                                  <div class="col-3 orm-group">
                                    <label for="exampleFormControlInput1">Дата принятия документа</label>
                                    <input type="date" name="calendar" class="form-control" id="exampleFormControlInput1" placeholder="01 января 2018 года">
                                  </div>
                                  <div class="col-3 orm-group">
                                    <label for="exampleFormControlInput1">Дата вступления документа</label>
                                    <input type="date" name="calendar" class="form-control" id="exampleFormControlInput1" placeholder="01 января 2018 года">
                                  </div>
                                </div>

                              <div class="col-3 form-group">
                                  <label for="exampleFormControlFile1">Загрузите файл документа</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                              <input type="submit" value="Создать" class="save_btn col-1 btn btn-primary">
                              <a class="btn btn-secondary" href="lists_docs.html">Вернуться к списку документов</a>
                        </form> 
                    </div>
                </main>

                <footer class="footer">
                        <strong></strong>
                </footer>
         </div>                
                        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>