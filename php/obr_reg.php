<?php
  header('Content-type: text/html; charset=utf-8');
  $dbhost = 'localhost';
  $dbname = 'olmaverick_1511';
  $dbpass = 'w7*Y6S7k';
  $dbuser = 'olmaverick_1511';
  
  $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  //var_dump($mysqli);
  
  $email     = $_POST['email'   ];//принимаем из запроса через AJAX
  $name      = $_POST['name'    ];
  $lastname  = $_POST['lastname'];
  $pass      = $_POST['pass'    ];
  
  if (empty($email)or empty($name) or empty($lastname) or empty($pass)) exit('0');
  
  $email     = mb_strtolower($email);//переводим строку емейла в нижний регистр
  $pass      = password_hash($pass,PASSWORD_BCRYPT,['cost'=> 12]);
  
  $result   = $mysqli->query("SELECT `email` FROM `users` WHERE `email`='$email'");//форма кавычек важна!!! 
  //не вставлять лишние пробелы!!!
  //var_dump($result);
  
  if (!empty($result->num_rows)) exit('1');
  
  $mysqli->query("INSERT INTO `users`(`name`,`lastname`,`email`,`pass`) VALUES ('$name','$lastname','$email','$pass')");
  echo '2';
 
  $text="Вы зарегистрировались на сайте ПНХ.РУ";
  $result=mail($email, 
   'Письмо с сайта', 
   "Имя: $name, E-mail: $email,
    Сообщение:
      $text");
     
  ?>
