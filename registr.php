<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets\registr.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
     if ($_COOKIE['user']==''):
      ?>
      <div class="row">
      	<div class="fon">
        
         <div class="col">
           
           <div class="collor"><h1>Форма регистрации</h1></div>
           <form  action="php/check.php" method="post">
             <input type="text" class="form-control" name="login"  id="login" placeholder="Введите ваш логин"><br>

             <input type="text" class="form-control" name="name"  id="name" placeholder="Введите ваше имя"><br>

             <input type="password" class="form-control" name="pass"  id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-warning"  type ="submit" >Регистрация</button>
           </form>
         </div>	
             
            <?php endif; ?>

</body>
</html>