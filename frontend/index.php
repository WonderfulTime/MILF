<?php
session_start();
require $_SERVER['DOCUMENT_ROOT']."\backend/libs/rb.php";
 ?>
 <!-- исправить ! ниже -->
<?php if(isset($_SESSION['logged_user']) ) :     //проверка на наличие пользователя !начало! //если переменная заполнена, то пользователь найден
  ?>
  Добро пожаловать, <?php echo  $_SESSION['logged_user']->login ; ?>  !<!-- логин пользователя из переменной -->
<!-- место для дизигна начало-->
  <br/><a href ="http://Quote/backend/verification_data/logout.php"> Разлогин </a>



  <html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MILF</title>
  </head>
  <body>
    <!-- <script src="addElement.js" async></script> -->
    <div class="page-content">
      <div class="header">
        <!-- <div class="logo" href="/index.php" aria-label="Home" accesskey="1">
          <i class="material-icons"> accessibility </i>
        </div> -->
        <div class="nav-bar">
          <ul>
            <li>
              <a href="/index.php"><i class="material-icons"> accessibility </i></a>
            </li>
            <li>
              <a href="something">some1</a>
            </li>
            <li>
              <a href="something1">some2</a>
            </li>
            <li>
              <a href="something2">some3</a>
            </li>
            <li>
              <a href="something3">some4</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-body">
        <div class="post-container">
          <div class="post">
            some text about that one thing that happened last daaasy some text about that one thing that happened last daaasy some text about that one thing that happened last daaasy one thing that happened last daaasy one thing that happened last daaasy one thing that happened last daaasy one thing that happened last daaasy one thing that happened last daaasy one thing that happened last daaasy
          </div>
          <div class="post">
            some text
          </div>
          <div class="post">
            some text ая и на рускам магу hurr durr
          </div>
        </div>
      </div>
    </div>

    <script language="php">     include('http://Quote/frontend/includes/db_rb.php'); // подключение файла     </script>
    <!-- <script src="index.js" type="text/javascript"></script> -->
  </body>
  </html>



<!-- место для дизигна конец-->

<?php else : //если массив пуст, то вывод на экран авторизации и регистрации
  ?>
Вы не авторизованы, пройдите по нужной ссылке ниже! </br>
  <a href = "http://Quote/frontend/login.html" > Авторизоваться </a> <br/>
  <a href = "http://Quote/frontend/registration-page.php" > Зарегистрироваться </a> <br/>
<?php endif;
                                                //проверка на наличие пользователя !конец!
?>
