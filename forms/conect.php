<?php
    $mysql = new mysqli('localhost', 'root', 'root', 'pstgu'); 
    //$mysqli = new mysqli('mysql-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');
    mysqli_set_charset($mysql, 'utf8'); //чинит кодировку

    if(!$mysql){
        die('БД не подключена');
    }
?>
