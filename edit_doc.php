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
            include 'menu.php';
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
              
                <!--формы к заполнению (установить required)-->
        <div class="rab_obl">
            <form action="create_doc.php" method="POST">
              <div class="col-2 form-group">
                <label for="formGroupExampleInput">Номер документа</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="№">
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
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Введите имя">
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
              <input type="submit" value="Сохранить" class="save_btn col-1 btn btn-primary">
          </form> 
        </div>

        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
