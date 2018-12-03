<?php

// в php сть для подкл файлов 4 функции : 
// include -если файл не был найден, выводит ошибку и продолжает работу
// include_once - если файл был ранее подключён, то не подключит и ничего на экран не выведет

// require - если не найдёт файл, то выдаст ФАТАЛЬНУЮ ОШИБКУ
// require_once - 


require_once "config.php";// подключение файла настроек данных входа

$connection = mysqli_connect( //передача инфы через ассоциативный массив в файле config.php
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']

);

if ($connection == false){ //если не удалось подключиться

	echo 'Не удалось подключиться к базе данных! <br/>';
	echo mysqli_connect_error();// описание ошибки
	exit(); //завершение программы
} else{

	echo 'Удачное соединение с БД<br/>';
}




?>