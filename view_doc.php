<!DOCTYPE html>
<html>
    <head>
        <title>Редактирование документа</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
                               <!---меню--->      
          
          <?php
		    //-----------Меню и подключение к БД-------------
            include 'menu.php';
            include 'settings.php';
			//-----------Меню и подключение к БД-------------
			
			//-----------------Запрос----------------------
			$id = $_GET['doc_id'];
            $query = mysql_query($connect, 'SELECT `name`, `date_accept`, `date_entry` FROM `documents` order by `doc_id` DESC where `doc_id` = `.$id.`');
            ?>
			
            <?php
			while($row = mysqli_fetch_assoc($query) ) {
			echo "<br>$row[name] $row[date_accept] $row[date_entry]";
			}
            if (!$query) {
                $message  = 'Nevernyi zapros: ' . mysql_error() . "\n";
                $message .= 'Zapros celyi: ' . $query;
                die($message);
            }
			//----------------Запрос----------------------
            ?>


                <!-- Image and text -->
        <div class="logo">
          <p class="navbar-brand">
            <img src="../images/Freelance-coder.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            ADMINISTRATION
          </p>
        </div>
        
        <div class="kab navbar">
          <a class="kab_tx navbar-brand">Личный кабинет</a>
        </div>
                
        <div class="rab_obl">
            <form>
              <div class="col form-group">
                <label for="exampleFormControlInput1">Номер документа</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="№123">
              </div>
              <div class="col form-group">
                <label for="exampleFormControlInput1">Наименование документа</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="о предварительном согласовании...">
              </div>
              <div class="col form-group">
                <label for="exampleFormControlInput1">Должность утверждающего документ</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Заместиель директора по финансовой деятельности">
              </div>
              <div class="col-4 form-group">
                <label for="exampleFormControlInput1">ФИО утверждающего документ</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Иванов Иван Иванович">
              </div>
                <div class="col form-row" >
                  <div class="col-3 orm-group">
                    <label for="exampleFormControlInput1">Дата принятия документа</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="01 января 2018 года">
                  </div>
                  <div class="col-3 orm-group">
                    <label for="exampleFormControlInput1">Дата вступления документа</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="01 января 2018 года">
                  </div>
                </div>
              <form>
              <div class="col form-group">
                <label for="exampleFormControlFile1">Загрузите файл документа</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </form>   
        </div>

        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>