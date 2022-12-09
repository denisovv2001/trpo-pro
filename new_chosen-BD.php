<?php 
    session_start();
    include 'forms/conect.php';

    $game_id = $_GET['id_game'];
  
    $users_id = $_SESSION['user']['id'];
    
    $mysql->query("INSERT INTO `chosen` (`game_id`, `user_id`) 
    VALUES('$game_id', '$users_id')");
    header('Location: chosen.php');
    $result->free();
    $mysql->close();  
?>
        