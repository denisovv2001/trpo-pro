<?php
session_start();
include 'forms/conect.php';
$id = $_GET['id_game'];

$mysql->query ("DELETE FROM `chosen` WHERE `chosen`.`game_id` = '$id'");

header('Location: chosen.php');
?> 