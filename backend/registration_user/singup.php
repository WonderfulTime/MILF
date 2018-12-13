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

<form action="http://Quote/backend/registration_user/singup.php" method="POST">  <!--  сменить все методы на POST  -->

  <p>
    <p><strong>Логин:</strong></p>
    <input type="text" name ="login" value="<?php echo @$data['login']; ?>"> <!-- @ - убирает ошибки, если нет переменной 'login' -->
  </p>

  <p>
    <p><strong>Почта:</strong></p>
    <input type="email" name ="email" value="<?php echo @$data['email']; ?>">
  </p>

  <p>
    <p><strong>Пароль:</strong></p>
    <input type="password" name ="password">
  </p>

  <p>
    <p><strong>Повторите пароль:</strong></p>
    <input type="password" name ="password_2">
  </p>


  <p>
    <button type="submit" name="do_signup">Зарегистрироваться</button> <!-- **1  -->
  </p>
  <p>
    <button type="button" name="return-to-auth" action="http://http://quote/frontend/index.html">Back to login</button>
  </p>
</form>

<!--Валера. добавь кнопку для возврата, путь: http://http://quote/frontend/index.html  -->
