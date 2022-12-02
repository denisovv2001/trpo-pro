<?php
  $username = filter_var(trim($_POST['username']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  //   назвал переменные и настроил фильтры


  $mysql = new mysqli ('localhost','root','root','pstgu');
  $result = $mysql->query("SELECT * FROM `personal data` WHERE  `password` = '$password' AND `nickname` = '$username'");
  $user = $result->fetch_assoc(); 
  
  if ($user['nickname'] == '' ){
    header('Location: /trpo-pro/login-error.php');
    exit();
  }
 
  


  $mysql->close();

  header('Location: /trpo-pro/catalog.php');
?>
