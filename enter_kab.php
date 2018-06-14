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
                
        <div class="rab_obl">
            <form>
              <div class="col-5 form-group">
                <label for="exampleInputEmail1">Email почта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="col-5 form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
              </div>
              <div class="col-1 form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
              </div>
              <button type="submit" class="col-1 btn btn-primary">Войти</button>
            </form>
        </div>

        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
