<?php
session_start();
require $_SERVER['DOCUMENT_ROOT']."\backend/includes/db_rb.php";

echo $_SESSION['data_getter'];








?>
<script>
  function addElement() {
    var newDiv = document.createElement("div") // предположим эта хуета делает див элементы. Пустые, но создает
    newDiv.setAttribute('class', 'post') // Эта хуета дает этому див элементу класс. Вроде бы
    var data = <?php echo $quote->text ?> // А вот тут я предположил, что можно просто так взять и присвоить переменной значение из таблицы
    var id = <?php echo $row["id"] ?> //тут я зачм-то получаю ид каждой цитаты
    if (id != null) { // Вот тут начинается жопа так как я не пониал, что делаю
    for (i = 0; i <= id; i++) {
    var content = document.innerHTML = '<span class="post-content">data</span>' // да я просто не могу норм написать. НО в теории это легко делается. Поэтому мне и нужна была твоя помощь с координацией по пыхе и бд

    newDiv.appenChild(content) // тут значение премеенной идут в новосозданный див
      }
    }                                                           // памаги давай я сейчас запушу. этот файл должен срабатывать при загрузке страницы и при публикации нового поста и я не ебу как это сделать. примерно понимаю. ну это да но как бы. давай ты сейчас заинлудишь все и посмотрим
  }
</script>
