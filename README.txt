Ресурсы проекта по разработке приложения по обмену настольнымим играми:
1. figma: 
https://www.figma.com/file/jvhodNizdyCKX8yE4ekKlD/Untitled?node-id=0%3A1

2. google documents:
https://docs.google.com/document/d/1QXuiPf-LjJsX-cn1aHYKOuGZaMR9D1PTzBRbPurF94Y/edit#

3. GitHub:
https://github.com/denisivv2001/trpo-pro

4.Сайт: http://worldbynastolok.ru/

5. Хост: https://cp.hoster.ru



Запуск проекта
1) сохраним файлы из репозитория на комп:
	Открой проводник в windows. Выбери папку (C:\MAMP\htdocs) куда хочешь загрузить шаблон сайта
	В пути напиши cmd и нажимай Enter
	В cmd пиши: git clone https://github.com/denisovv2001/trpo-pro.git
	Открываем папку trpo-pro
2) подключись к локальной базе данных
	в /forms/conect.php комментируем третью строчку [два //] и убираем во второй комментарий
	[при загрузке изменений на git делаем обратное действие]
3) запусти программу MAMP
	[если mysql Server не подключился, переподключись (stop server и затем start server) к серверу]
	нажимаешь кнопку Open WebStart page 
	Конфигурацию базы данных смотри в Configure your MySQL databases with phpMyAdmin (http://localhost/MAMP/phpmyadmin.php?lang=en).
	В браузере вбиваешь localhost - всё. Должен запуститься локально сайт.

Содержание проекта:
PHP страницы
	catalog.php 			- каталог
	catalog-search-BD.php 		- каталок с заданным товаром (после поиска)
	chosen.php 			- избранное
	header.php			- шапка сайта
	index.php 			- главный экран
	my_game.php 			- мои игры
	new_game_to_shop.php 		- создать объявление
	pages-blank.php			- ОШИБКА 404
	pages-contact.php 		- техническая поддержка
	pages-contact-BD.php 		- Запросы к таблице БД technical support
	pages-error-404.php
	pages-login.php 			- вход
	pages-login-BD.php 			- запросы к таблице БД
	pages-register.php 			- регистрация
	pages-register-BD.php 		- Запросы к таблице БД
	product_card.php 			- карточка товара
	side-menu.php 				- боковое меню
	users-profile.php 			- профиль
	
	База данных:
		pstgu.sql					- база данных для локального подключения
		srv182064_pstgu_new.sql		- база данных для удалённого подключения
		состоит из трёх таблиц: 
		1) game ad 			- список игр на сайте
			поля: 
				id_game; 		(уникальный идентификатор)
				users_id; 		(пользовотельский идентификатор - внешний ключ)
				game_name; 		(название игры)
				sity; 			(город, где находится игра)
				age; 			(возрастное ограничение - нижнее значение, например, игра от 14)
				quality_min; 	(минимальное количество игроков)
				quality_max; 	(максимальное количество игроков)
				min_time; 		(минимальное время игры)	
				max_time;		(максимальное время игры)
				comment; 		(описание или комментарий владельца о игре)
				present; 		(bool переменная 0 - игра даром, 1 - игра по обмену)
				foto.			(фото игры одно или несколько, пока ссылка на него)
		2) personal data	- даннные пользователей
			поля: 
				users_id; 		(первичный ключ для каждого человека)
				login; 			(имя пользователя)
				password; 		(пароль - используется при входе в аккаунт)
				nickname; 		(прозвище - используется при входе в аккаунт)
				sity; 			(город, в котором проживает человек)
				@mail; 			(электронная почта пользователя)
				foto			(фотография профиля человека)
		3) tehnical support - техническая поддержка
			поля: 
				id request 	(номер запроса в БД); 
				matter		(тема запроса);
				@mail 		(почта пользователя); 
				comment 	(текст запроса пользователя).
	Папки
		assets
		catalog - содержит php файлы, отвечающие за разные виды сортировки. А файл out_all_card.php отображает все игры
		documentation - техническая документация
		forms - содержит php файл для подключения к базе данных



Загрузка на github
	Документацию, список литературы смотрите в папке documentation/что-почитать.txt
	Основные команды при работе с Git находятся в файле documentation/git-важные-команды.txt

Выгрузка проекта на хост из github через putty
	открываем программу putty, указываем имя хоста. Подключаемся (Open).
	В открывшемся окне вводим логин и пароль
	[вставка текста в консоль putty командой (“Shift” + “insert”) ]
	Затем вводим последовательность комманд для копирования проекта с github на сайт
		git clone https://github.com/denisovv2001/trpo-pro.git 
		cd worldbynastolok.ru
		rm -rfv *
		cd ..
		cd trpo-pro
		mv * ~/worldbynastolok.ru
		cd ..
		rm -rf trpo-pro


trpo-pro
	В данном репозитории на GitHub размещаются результаты выполнения задач командой. 
	Доработанные модули нужно помещать в каталог с соответствующим названием. 
	Если нужного каталого нет - его надо создать самостоятельно. 
	На экзамене будем демонстрировать свои успехи на основе содержимого данного репозитория.
