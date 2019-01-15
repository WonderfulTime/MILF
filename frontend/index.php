<?php
session_start();
require $_SERVER['DOCUMENT_ROOT']."\backend/includes/db_rb.php";

 ?>
 <!-- исправить ! ниже -->
<?php if(isset($_SESSION['logged_user']) ) :     //проверка на наличие пользователя !начало! //если переменная заполнена, то пользователь найден
  ?>



  <html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
        <div class="logo" href="/index.php" aria-label="Home" accesskey="1">
          <img src="https://cs11.pikabu.ru/post_img/big/2018/10/04/10/15386746561455930.png" width="50" height="50" alt="home">
        </div>
        <div class="nav-bar">
          <div class="dropmenu">
          <button class="settings-button">
            <i class="material-icons">settings</i>
          </button>
          <div class="dropcontent">
            <a href="#">settings</a>
            <a href="http://Quote/backend/verification_data/logout.php">logout</a>
          </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <div class="post-container">
          <div class="post">  <!-- форма для отправки цитат на сервер -->
            <form id="form-box" method="GET" action="http://Quote/frontend/index.php" autocomplete="off" >
              <textarea id="quote-input" class="input-form" name="text" type="text" placeholder="some quote"></textarea> <!-- проставь сдесь соответствующие имена id и классов -->

              <button id="index-button" class="login-form btn" name = "Done_quote">Done</button>
            </form>
          </div>

          <?php
              $data = $_GET;
              if (isset($data['Done_quote']) )
                {
                  $quote = R::dispense('quotes'); // создание таблицы цитат в бд
                  $quote-> text = $data['text'];
                  R::store($quote);
                }


          ?>
<?php
          $quote_id = $quote->id;
          $quote = R::load('quotes', $quote_id);
          ?>
          <div class="post">
            <?php echo $quote->text; // работаем с данными, как с объектом
             ?>
          </div>
          <div class="post">
            <?php $quote_id = $quote->id-1;
            $quote = R::load('quotes', $quote_id);
             echo $quote->text; // работаем с данными, как с объектом
             ?>
          </div>
          <div class="post">
            <?php $quote_id = $quote->id-2;
            $quote = R::load('quotes', $quote_id);
            echo $quote->text; // работаем с данными, как с объектом
             ?>
          </div>
          <div class="post">
            <?php $quote_id = $quote->id-3;
            $quote = R::load('quotes', $quote_id);
            echo $quote->text; // работаем с данными, как с объектом
             ?>
          </div>



  <?php $_SESSION['data_getter'] = $quote; ?>   <!--DELETE  -->









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
