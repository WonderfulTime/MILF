<?php
require $_SERVER['DOCUMENT_ROOT']."\backend/includes/db_rb.php"; //подключение базы данных через библиотеку ReadBeanPHP


$data = $_POST; //все переменные, возвращаемые по методу POST присваиваю переменной $data

if (isset($data['do_signup']) ) // **1 проверка нажатия кнопки //если существует в переменной data 'нажатая кнопка', то продолжается скрипт...
  {   //**2
    // тут регистрируем

    $errors = array();
    if (trim($data['login']) == '' ) // trim - обрезает пробелы
      {
        $errors[] = 'Введите логин!';
      }

    if (trim($data['email']) == '' ) // trim - обрезает пробелы
      {
        $errors[] = 'Введите почту!';
      }

    if ($data['password'] == '' )
      {
        $errors[] = 'Введите пароль!';
      }
    if ($data['password_2'] != $data['password'] )
      {
        $errors[] = 'Повторный пароль введён неверно!';
      }

    if(empty($errors) )   //проверка на пустоту массива с ошибками
      {
        //то зарегистрировать пользователя
        // !!доделать!!

      }else
        {
          echo '<div style= "color:red;">'.array_shift($errors). //вывод 1-й ошибки из массива
          '</div><hr/>';
        }

  }     //**2

?>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quote | Register</title>
</head>
<body>
  <div id="registration-box">
    <p id="Title">SHIT</p>
    <form action="http://Quote/frontend/registration-page.php"  method="POST">
    <input id="rgstr-box" class="index-input login-form" type="email" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>">
    <input id="rgstr-box" class="index-input login-form" type="text" name="login" placeholder="Login" value="<?php echo @$data['login']; ?>">
    <input id="rgstr-box" class="index-input login-form" type="password" name="password" placeholder="Password">
    <input id="rgstr-box" class="index-input login-form" type="password" name="password_2" placeholder="Confirm">
    <button id="login-button" class="login-form" name="do_signup">Sign up</button>
    </form>
    <button id="secondary-button" class="login-form" action="http://http://quote/frontend/index.html">Log In</button>
  </div>
</body>
</html>
