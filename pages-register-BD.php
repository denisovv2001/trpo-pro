<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);
  $username = filter_var(trim($_POST['username']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  $sity = 'Москва';
  $foto = '1';
  //   назвал переменные и настроил фильтры

  if(mb_strlen($name) > 20){
    echo "Длина имени не более 20 символов";
    exit();
  }

  if(mb_strlen($email) > 30){
    echo "Длина мейла не более 30 символов";
    exit();
  }
  if(mb_strlen($username) > 20){
    echo "Длина username не более 20 символов";
    exit();
  }
  if(mb_strlen($password) > 20){
    echo "Длина пароля не более 20 символов";
    exit();
  }
  

  //   проверки длинны

  $mysql = new mysqli('ssh-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');
  $mysql->query("INSERT INTO `personal data` (`login`, `password`, `nickname`, `sity`, `@mail`, `foto`) 
  VALUES('$name', '$password', '$username', '$sity', '$email', '$foto') ") ;
  $mysql->close();




?>
