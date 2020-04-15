<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$result=mail('olga-exit@list.ru', 
   'Письмо с сайта', 
   "Имя: $name, E-mail: $email, Сообщение: $text");
//echo $result?"ok!":"error!";
?>
