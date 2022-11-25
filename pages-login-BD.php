<?php
  $username = filter_var(trim($_POST['username']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  //   назвал переменные и настроил фильтры


  $mysql = new mysqli ('ssh-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');
  $result = $mysql->query("SELECT * FROM `personal data` WHERE `password` = '$password' AND `nickname` = '$username'");
  $user = $result->fetch_assoc(); 
  
  
  if ($user != $username){
    echo "введи норамльно";
  } 
  // if(count($user) == null) {
  //   echo "Nfrjq gjkmpjdfntm, yt yfqlty";
  //   exit();
  // }
  setcookie( 'use' , $use );



  $mysql->close();
?>
