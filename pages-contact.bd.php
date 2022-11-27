<?php
	// file name pages-contact.bd.php
	// проверяем, что данные пришли
	if (isset($_POST["email"]) && isset($_POST["text"])) 
	{
		// объявление переменной mail
		$mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 
		
		// комментарий пользователя
		$inputtext = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
		
		// обращение к БД
		//$mysql = new mysqli('ssh-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');
  		$mysql = new mysqli_connect('localhost','root','root','pstgu');
		

		$mysql->query("INSERT INTO `technical support` (`@mail`, `comment`) VALUES('$mail', '$inputtext') ") ;

		$mysql->close();
		//'' - переменные данного документа
		//`` - переменные названия столбцов таблицы без автоматического ключа (id requst)
	}	
?>