<?php
    include 'forms/conect.php'; 
   
    $game_name = $_POST['gamename'];
    $sity = $_POST['sity'];
    $age = $_POST['age'];
    $min_time = $_POST['mintime'];
    $max_time = filter_var(trim($_POST['maxtime']),FILTER_SANITIZE_STRING);
    $quality_min = $_POST['qualitymin'];
    $quality_max = filter_var(trim($_POST['qualitymax']),FILTER_SANITIZE_STRING);
    $present = $_POST['present'];
    $comment = filter_var(trim($_POST['comment']),FILTER_SANITIZE_STRING);
    $foto_one = $_FILES['foto1'];
    $foto_two = $_FILES['foto2'];
    $foto_three = $_FILES['foto3'];
    $r = 3;

    echo "$present asdcdwcsdc";

    $mysql->query("INSERT INTO `game ad` (`users_id`, `game_name`, `sity`, `age`, `quality_min`, `quality_max`, `min_time`, `max_time`, `comment`, `present`, `foto`) 
    VALUES('1', '$game_name', '$sity', '$age', '$quality_min', '$quality_max', '$min_time', '$max_time', '$comment', '$present', '$foto')");
    $mysql->close();
?>
