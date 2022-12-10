<?php
	// В файле pages-contact-BD.php выполняется обработка запроса к таблице БД technical support

	// проверяем, что данные с клавиатуры пришли
	if (isset($_POST["email"]) && isset($_POST["text"]))
	{
		// объявление переменной mail - почта
		$mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 

		// комментарий пользователя
		$inputtext = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

		include 'forms/conect.php'; // подключаемся к БД
		include 'header.php'; // подключаем шапку
		include 'side-menu.php'; // подключаем боковое меню

  		// запись данных в таблицу technical support в ячейки @mail и comment
		$record = $mysql->query("INSERT INTO `technical support` (`@mail`, `comment`) VALUES('$mail', '$inputtext') ");
		
		if(!$record){ // ошибка в запросе
			echo '<div class="card mt-2 text-center">
        	<div class="card-body">
        	<h5 class="card-title">Внимание</h5>
        	<p class="card-text">В доступе отказано :((</p>
        	<a href="pages-contact.php" class="btn btn-warning    ">Вернуться в техническую поддержку</a>
        	</div>
        	</div>';
		}
		else{ // всё прошло удачно, в БД записались данные
			echo '<div class="card mt-2 text-center">
	        <div class="card-body">
	        <h5 class="card-title">Внимание</h5>
	        <p class="card-text">Благодарим за обращение! Оно успешно отправлено.</p>
	        <a href="pages-contact.php" class="btn btn-warning    ">Вернуться в техническую поддержку</a>
	        </div>
	        </div>';
		}

		// закрытие БД
		$mysql->close();
	}	
?>