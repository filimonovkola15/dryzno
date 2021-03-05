<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets\style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
</head>
<body>
	<nav>
		<?php
     if ($_COOKIE['user']==''):
      ?>
      <div class="row">
        <div class="fon"><div>
        
         
         <div class="col">
           <div class="collor"><h1>Форма авторизации</h1></div>
           <form  action="php/auth.php" method="post">
             <input type="text" class="form-control" name="login" value="" id="login" placeholder="Введите ваш логин"><br>

             <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-warning"  type ="submit" >Авторизация</button>
           </form>
         </div>
           <?php else:?>
             <p><?php $_COOKIE['user'] ?><a href="php/exit.php">выход</a> </p>
         <?php endif; ?>

        </body>
  </html>