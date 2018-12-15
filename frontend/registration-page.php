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

      if (R::count('users', "login = ?", array($data['login'])) > 0) //проверка на совпадение данных при регистрации( за место ? будут стоять данные)
        {
          $errors[] = 'Пользователь с таким логином уже зарегистрирован!';
        }

        if (R::count('users', "email = ?", array($data['email'])) > 0) //проверка на совпадение данных при регистрации( за место ? будут стоять данные)
          {
            $errors[] = 'Пользователь с такой почтой уже зарегистрирован!';
          }

    if(empty($errors) )   //проверка на пустоту массива с ошибками
      {
        //то зарегистрировать пользователя //используем технологию подготовленных запросов! // безопасность от sql инъекции //использование библиотеки RBPHP
        $user = R::dispense('users'); // создание таблицы пользователей в бд
        $user-> email = $data['email'];
        $user-> login = $data['login'];
        $user-> password = password_hash($data['password'], PASSWORD_DEFAULT); //шифрование пароля по алгоритму bcrypt с помощью библиотеки RBPHP
        //PASSWORD_DEFAULT - стандартная константа
        R::store($user); // сохранение бд
        echo '<div style= "color:green;">'.'Успешная регистрация, перейдите на страницу входа!'. //вывод 1-й ошибки из массива
        '</div><hr/>';

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
    <button id="index-button" class="login-form" name="do_signup">Sign up</button>
    </form>
    <form action="http://Quote/frontend/index.html">
    <button id="secondary-button" class="login-form">Log In</button>
    </form>
  </div>
</body>
</html>
