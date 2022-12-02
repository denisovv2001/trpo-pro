<?php
	// В файле pages-contact-BD.php выполняется обработка запроса к таблице БД technical support

	// проверяем, что данные с клавиатуры пришли
	if (isset($_POST["email"]) && isset($_POST["text"]))
	{
		// объявление переменной mail - почта
		$mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 

		// комментарий пользователя
		$inputtext = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

		try
		{
			echo "Спасибо за Ваше обращение! ";
			echo "попытка подключить БД... ";
			// подключаемся к серверу ('host=адрес_сервера', 'имя_пользователя', 'пароль' 'dbname=имя_базы_данных')
			$mysql = new mysqli('ssh-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');

	  		//$mysql = new mysqli('localhost','root','root','pstgu'); //< или подключаемся к локальному серверу, если работаем на своей машине
	  		echo "Datebase connection established";

	  		// запись новой строчки данных в таблицу technical support в ячейки @mail и comment
	  		/*
	  			'переменные_данного_документа' 
				`переменные_названия_столбцов_таблицы`
	  		*/
			$mysql->query("INSERT INTO `technical support` (`@mail`, `comment`) VALUES('$mail', '$inputtext') ") ;


			// закрытие БД
			$mysql->close();
		}
		// исключение при неудачном подключении к БД
		catch (mysqlException $e)
		{
			echo "Connction failed: " . $e->getMessage();
		}
	}	
?>