<?php // Подключение к базе данных через библиотеку RedBeanPHP 

require $_SERVER['DOCUMENT_ROOT']."\backend/libs/rb.php"; //подключение библиотеки по абсолютному пути

R::setup( 'mysql:host=localhost;dbname=quote',
        'root', '' ); //for both mysql or mariaDB //данные для подключения к базе данных

session_start();
            //метод сессий
?>
