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
			$id = $_GET['id'];
            $query = "SELECT documents.doc_id, documents.name_doc, documents.date_accept, documents.date_entry, concat(heads.surname, ' ', Substring(heads.name from 1 for 1), '.', Substring(heads.patronymic from 1 for 1), '.') as head_name from documents, heads where documents.head_id = heads.head_id and documents.id = ".$id;
            $sql = "SELECT `surname`, Substring(`name` from 1 for 1), Substring(`patronymic` from 1 for 1) from `documents`, `heads` where 'head_id'='head_id'";
            $result = mysqli_query($connect, $query);
            
            ?>
                               
			
            <?php
            $row = mysqli_fetch_assoc($result);
//			while($row = mysqli_fetch_assoc($result) ) {
//			echo "<br>$row[name] $row[date_accept] $row[date_entry]";
//			}
            if (!$query) {
                $message  = 'Nevernyi zapros: ' . mysql_error() . "\n";
                $message .= 'Zapros celyi: ' . $query;
                die($message);
            }
			//----------------Запрос----------------------
            ?>


                <!-- Image and text -->
       <div class="jumbotron">
                      <h2 class="display-4">Просмотр документа</h2>
					  <h2 class="display-6">Название документа<button type="button" class="btn btn-danger">Отменен</button></h2>
					  <p class="lead"></p>
                      <hr class="my-4">
                      <p>

                            <table border="1" cellpadding="10" class="">
                                  <col style="width: 200px;">
                                  <thead>
                                      <tr>
                                          <th>ID Документа</th>
                                          <th>Название документа</th>
                                          <th>Дата подписания</th>
                                          <th>Дата принятия</th>
                                          <th>Руководитель</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><?php echo $row['doc_id']    ?></td>
                                          <td><?php echo $row['name_doc'] ?></td>
                                          <td><?php echo $row['date_accept'] ?></td>
                                          <td><?php echo $row['date_entry'] ?></td>
                                          <td><?php echo $row['head_name'] ?></td>
                                      </tr>  
                                  </tbody>
                            </table>
						<div class="col-3 form-group">
                                  <br><a class=" btn btn-secondary btn-sm" href="Документ.docx" href="#">Скачать документ для просмотра</a>
                        </div>
                        <div>
					<h4 class="display-6">Изменяющий документ</h4>
					<hr class="my-4">
                            <table border="1" cellpadding="10" class="">
                                  <col style="width: 200px;">
                                  <thead>
                                      <tr><th>ID Документа</th><th>Название документа</th><th>Дата подписания</th><th>ID Руководителя</th></tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Данные</td><td>данные</td><td>данные</td><td>данные</td>
                                      </tr>  
                                  </tbody>
                            </table>
						<div class="col-3 form-group">
                                  <br><a class=" btn btn-secondary btn-sm" href="Документ.docx" href="#">Скачать документ для просмотра</a>
						</div>
						<p><hr>
                        </div>

                        <div>
					<h4 class="display-6">Отменяющий документ</h4>
					<hr class="my-4">
                            <table border="1" cellpadding="10" class="">
                                  <col style="width: 200px;">
                                  <thead>
                                      <tr><th>ID Документа</th><th>Название документа</th><th>Дата подписания</th><th>ID Руководителя</th></tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Данные</td><td>данные</td><td>данные</td><td>данные</td>
                                      </tr>  
                                  </tbody>
                            </table>
						<div class="col-3 form-group">
                                  <br><a class=" btn btn-secondary btn-sm" href="Документ.docx" href="#">Скачать документ для просмотра</a>
						</div>
						<p><hr>
                            <div class="col-auto">
                                <a class="btn btn-primary" href="edit_doc.html">Перейти к редактированию</a>
                                <a class="btn btn-secondary" href="lists_docs.html">Вернуться к списку документов</a>
                            </div>
                        </div>

                <footer class="footer">
                        <strong></strong>
                </footer>
        
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>