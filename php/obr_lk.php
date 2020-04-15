<?php
session_start();
$session_is_empty=empty($_SESSION['id']);//true если пусто!
$site_url = 'http://'.$_SERVER['HTTP_HOST'].'/mysite/';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/24acb3cffb.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?=$title?></title>
    <style><?=$style?></style>
  </head>
  <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Мой сайт</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=$site_url?>index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$site_url?>articles/index.php">Article</a>
          </li>
          
          </ul>
          <?php if($session_is_empty):?>
          <a class="btn btn-outline-success my-2 my-sm-0" href="<?=$site_url?>auth.php">Вход</a>&nbsp;<!--пробел-->
          <a class="btn btn-outline-success my-2 my-sm-0" href="<?=$site_url?>reg.php">Регистрация</a>
          <?php else: ?>
          <a class="btn btn-outline-success my-2 my-sm-0" href="<?=$site_url?>php/exit.php">Выход</a>;
          <?php endif; ?>
      </div>
    </nav>
