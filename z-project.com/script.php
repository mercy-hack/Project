

<?php
#<p>Допустим ваша конфигурация:</p>
if (isset($_GET['width']) or isset($_GET['height']) or isset($_GET['logicalProcess']) ) {
    $data = $_GET["width"]. "x". $_GET["height"]. " - Разрешение экрана, ". $_GET["logicalProcess"]. " - Кол-во ядер процессора, ". $_GET["videocard"]. " - Видеокарта. ";
    // Но так и быть добавлять файл в БД я не стану, да и не думаю, что кто-то запустит сервис
}
else {
   echo $width = "--", "x";
   echo $height = "--"," - Разрешение экрана ";
   echo $logicalProcess = "--", " - Кол-во ядер ";
   #echo $videocard = "--", " - Видеокарта ";
    //Ну значит чего-то не хватает, но в любом случае какие-то данные можно получить
}

?>
<?php $filed = "configuration.txt";
file_put_contents($filed, $data);
?>

<?php

?>
