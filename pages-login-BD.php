<?php
session_start();
include 'forms/conect.php';

  $username = filter_var(trim($_POST['username']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  //   назвал переменные и настроил фильтры


  
  $result = $mysql->query("SELECT * FROM `personal data` WHERE  `password` = '$password' AND `nickname` = '$username'");
  $user = $result->fetch_assoc(); 

  
  $_SESSION['user'] = [
    "id" => $user['users_id'],
    "name" => $user['login'],
    "city" => $user['sity'],
    "email" => $user['@mail'] ];

  
  if ($user['nickname'] == '' ){
    header('Location: login-error.php');
    exit();
  }
 
  
  


  $mysql->close();

  header('Location: users-profile.php');
?>
