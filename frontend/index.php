<?php
session_start();
require $_SERVER['DOCUMENT_ROOT']."\backend/libs/rb.php";
 ?>
 <!-- исправить ! ниже -->
<?php if(isset($_SESSION['logged_user']) ) :     //проверка на наличие пользователя !начало! //если переменная заполнена, то пользователь найден
  ?>
  Добро пожаловать, <?php $_SESSION['logged_user']->login; ?>  !<!-- логин пользователя из переменной -->

  <br/><a href ="http://Quote/backend/verification_data/logout.php"> Разлогин </a>
<?php else : //если массив пуст, то вывод на экран авторизации и регистрации
  ?>

  <a href = "http://Quote/frontend/login.html" > Авторизоваться </a> <br/>
  <a href = "http://Quote/frontend/registration-page.php" > Зарегистрироваться </a> <br/>
<?php endif;
                                                //проверка на наличие пользователя !конец!
?>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MILF</title>
</head>
<body>
  <script src="addElement.js" async></script>
  <div id="orig-div">hi1</div>
  <button id="add-elem-button" onclick="addElement()">+</button>


  <script language="php">     include('http://Quote/frontend/includes/db_rb.php'); // подключение файла     </script>
  <script src="index.js" type="text/javascript"></script>
</body>
</html>
