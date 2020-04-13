<?php
  session_start();
  header('Content-type: text/html; charset=utf-8');
  $dbhost = 'localhost';
  $dbname = 'olmaverick_1511';
  $dbpass = 'w7*Y6S7k';
  $dbuser = 'olmaverick_1511';
  $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
  $about = $_GET    ['about'];
  $value = $_GET    ['value'];
  $id    = $_SESSION['id'];
  
  $mysqli->query("UPDATE `users` SET `$about`='$value' WHERE `id`='$id'");
  $_SESSION[$about] = $value;
