<?php

// супер-глобальный массив $_GET
// супер-глобальный массив $_POST


// include('D:\Programming\OPS\OSPanel\domains\Quote\backend\includes\db.php');// подключение файла
//require $_SERVER['DOCUMENT_ROOT']."\backend/includes/db_rb.php"; //подключение базы данных через библиотеку ReadBeanPHP


// $login= $_GET['login'];
// $password= $_GET['password'];
//
// $count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$password' ");
//
// if(mysqli_num_rows($count) == 0 ) //проверка на наличие зарег пользователя
//
// {
//
// echo 'Вы не зарегистрированы!';
//
// } else
//
// {
//
// echo 'Добро пожаловать,'.' '. $login. '!';
//
// echo "<meta http-equiv='Refresh' content='1; URL=http://Quote/frontend/main_page.html'>"; //когда доделаем, убрать  на content='0;
// //"http://Quote/frontend/main_page.html"
// }

require $_SERVER['DOCUMENT_ROOT']."\backend/includes/db_rb.php"; //подключение базы данных через библиотеку ReadBeanPHP

$data = $_POST;
$user = R::findOne( 'users', 'login = ? ', array($data['login']) );
  if ($user)
  {
    //логин найден в бд
    if (password_verify($data['password'], $user->password) )//
    {

      /// всё хорошо, пользователь залогинился
      $_SESSION['logged_user'] = $user;

      echo '<div style= "color:green;">'.'Успешная регистрация!'.'Добро пожаловать!'; //вывод 1-й ошибки из массива
      '</div><hr/>';

      echo "<meta http-equiv='Refresh' content='1; URL=http://Quote/frontend/main_page.html'>"; //когда доделаем, убрать  на content='0;


    } else//
      {
        $errors[] = 'Пароль введён неверно!';
      }
  } else
    {
      $errors[] = 'Пользователь с таким логином не идентифицирован!';
    }

        if( ! empty($errors) )   //проверка на не пустоту массива с ошибками
          {
            echo '<div style= "color:red;">'.array_shift($errors). //вывод 1-й ошибки из массива
            '</div><hr/>';

              echo "<meta http-equiv='Refresh' content='2; URL=http://Quote/frontend/index.html'>"; // когда найдена ошибка перекидывает пользователя на окно входа
          }















?>
