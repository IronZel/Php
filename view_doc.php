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
            $id = $_GET['doc_id'];
            include 'settings.php';
            $query = "select name, date_accept, date_entry from documents where doc_id = '".$id."'";
            $result = mysql_query($query);
            //mysqli_query($link, $query);
            if (!$result) {
                $message  = 'Nevernyi zapros: ' . mysql_error() . "\n";
                $message .= 'Zapros celyi: ' . $query;
                die($message);
            }
            ?>
                                                                          
                            <?php
            while ($row = mysql_fetch_assoc($result, MYSQL_ASSOC)) {?>
                            
                                <?php    
                //echo '<td><a href="view_doc.php?doc_id='.$row['doc_id'].'">просмотреть</a>';
                echo $row['name'].'<br/>';
                echo $row['date_accept'].'<br/>';
                echo $row['date_entry'].'<br/>';
                
            ?>
                           
                <?php    

}
            //echo mysql_result($result, 0); // выведет имя третьего сотрудника
            //print($myResult);
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