<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$file = fopen("file.txt","at");
fwrite($file,"\n $name:$surname \n");
fclose($file);

{
   header ('Location: index2.html');  // перенаправление на нужную страницу
   exit();    // прерываем работу скрипта, чтобы забыл о прошлом
}
?>
