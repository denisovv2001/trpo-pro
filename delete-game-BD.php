<?php
session_start();
include 'forms/conect.php';
$id = $_POST['id_game'];

$mysql->query ("DELETE FROM `game ad` WHERE `game ad`.`id_game` = '$id'");


header('Location: my_game.php');
?> 