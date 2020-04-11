<?php
  header('Content-type: text/html; charset=utf-8');
  $dbhost = 'localhost';
  $dbname = 'olmaverick_1511';
  $dbpass = 'w7*Y6S7k';
  $dbuser = 'olmaverick_1511';
  
  $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
  $email  = $_POST['email'];//принимаем из запроса через AJAX
  $pass   = $_POST['pass' ];
//  var_dump($email);
//  var_dump($pass);
  
  $result =$mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
  $result =$result->fetch_assoc();//преобразуем в массив
 // var_dump($result);
  
  if (!password_verify($pass,$result['pass'])) exit('0');
  echo '2';
