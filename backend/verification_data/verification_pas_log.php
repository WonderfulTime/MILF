<?php

// супер-глобальный массив $_GET
// супер-глобальный массив $_POST


include('D:\Programming\OPS\OSPanel\domains\Quote\backend\includes\db.php');// подключение файла



$login= $_GET['login'];
$password= $_GET['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$password' ");

if(mysqli_num_rows($count) == 0 ) //проверка на наличие зарег пользователя

{

echo 'Вы не зарегистрированы!';

} else 

{

echo 'Добро пожаловать,'.' '. $login. '!';

echo "<meta http-equiv='Refresh' content='1; URL=http://Quote/frontend/main_page.html'>"; //когда доделаем, убрать  на content='0;
//"http://Quote/frontend/main_page.html"
}












?>