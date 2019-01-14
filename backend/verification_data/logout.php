<?php
session_start();
require $_SERVER['DOCUMENT_ROOT']."\backend/libs/rb.php";

unset($_SESSION['logged_user']); //очистка сессии

header ('Location: http://Quote/frontend/index.php'); //перекидываем "гостя" на глав странницу













?>
