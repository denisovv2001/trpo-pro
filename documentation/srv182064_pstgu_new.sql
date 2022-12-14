-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: mysql-182064.srv.hoster.ru
-- Время создания: Дек 14 2022 г., 10:36
-- Версия сервера: 10.3.27-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `srv182064_pstgu_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chosen`
--

CREATE TABLE `chosen` (
  `game_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chosen`
--

INSERT INTO `chosen` (`game_id`, `user_id`) VALUES
(1, 0),
(2, 2),
(36, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `game ad`
--

CREATE TABLE `game ad` (
  `id_game` int(20) NOT NULL,
  `users_id` int(20) NOT NULL,
  `game_name` varchar(100) NOT NULL COMMENT 'название игры',
  `sity` varchar(20) NOT NULL COMMENT 'Город',
  `age` int(20) NOT NULL COMMENT 'возрастное ограничение',
  `quality_min` int(20) NOT NULL COMMENT 'мин. кол-во игроков',
  `quality_max` int(20) NOT NULL COMMENT 'мак. кол-во игроков',
  `min_time` int(20) NOT NULL COMMENT 'мин. время игры',
  `max_time` int(20) NOT NULL COMMENT 'мак. время игры',
  `comment` text NOT NULL COMMENT 'описание',
  `present` int(1) NOT NULL COMMENT '0 - даром, 1 - обмен',
  `foto1` varchar(250) NOT NULL,
  `foto2` varchar(250) NOT NULL,
  `foto3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game ad`
--

INSERT INTO `game ad` (`id_game`, `users_id`, `game_name`, `sity`, `age`, `quality_min`, `quality_max`, `min_time`, `max_time`, `comment`, `present`, `foto1`, `foto2`, `foto3`) VALUES
(1, 2, 'uno', 'Москва', 5, 2, 10, 15, 30, 'развлечение для всех возрастов и любой компании. Она захватывает своей непринужденностью и понятностью. В игре есть все: азарт, веселье, скорость, непрерывное взаимодействие. А для организации процесса понадобятся только карты, которые можно просто положить в карман.', 1, '', '', ''),
(2, 7, 'Шерлок Холмс, детектив-консультант', 'Москва', 14, 2, 5, 90, 120, 'Игра понравится: поклонникам самого известного в мире детектива; любителям викторианской эпохи; ценителям детективных игр; дружной компании, находящейся в поисках отличного развлечения; семье, любящей интересно проводить время вместе; коллекционерам отличных настолок.', 1, '', '', ''),
(3, 8, 'моя первая монополия', 'Екатеринбург', 5, 2, 4, 30, 45, 'Игра яркая, качественная, но мы из нее быстро выросли, к сожалению. Правила, на мой взгляд, не очень продуманы, так как деньги быстро заканчиваются в игре.', 1, '', '', ''),
(4, 10, 'Имаджинариум', 'Новосибирск', 12, 2, 7, 30, 30, 'Рисовка очень зацепила. было чем полюбоваться и подумать', 0, '', '', ''),
(5, 1, 'шашки', 'Москва', 6, 2, 2, 5, 45, 'Размер, см : 30 х 30', 1, '', '', ''),
(7, 2, 'лото', 'Москва', 8, 2, 10, 20, 20, 'можно играть большой компанией', 1, '', '', ''),
(8, 5, 'лото', 'Москва', 8, 2, 10, 20, 20, 'Одно из трех наших лучших лото с бочонками. Все комплектующие к нему имеют высокое качество, так как изготовлены на новом оборудовании и оснастке. Березовые бочонки из сухого массива березы находятся в плотном большом мешке, удобном не только для хранения, но и для игры. В мешке поменьше вы найдете 150 ярких пластиковых жетонов. Они понадобятся игрокам для закрытия на карточках клеток сыгравших номеров. Комплект карточек стандартный, на хорошем картоне.', 0, '', '', ''),
(10, 2, 'Шакал', 'Москва', 16, 2, 4, 90, 150, 'Вы — капитан пиратской шхуны, которая прибыла к берегам необитаемого острова. На острове спрятано множество сокровищ. Хочется быстрее найти их, раскопать и забить золотыми монетами трюм. Одна беда — с других сторон к острову подплывают конкуренты. Так что на разведку нет времени: высаживайте команду на остров и начинайте поиски кладов.', 0, '', '', ''),
(12, 1, 'Имаджинариум', 'Москва', 12, 2, 7, 30, 30, 'Имаджинариум — очень необычная игра, которая понравится и детям, и взрослым. Эта игра прокачивает взаимопонимание между людьми, а для победы нужно проявить фантазию и эмпатию. В наборе 98 карточек с потрясающими иллюстрациями, на каждую из которых могут возникнуть сотни ассоциаций. Каждый кон игроки берут карточки и по очереди загадывают ассоциации, выкладывая карточку рубашкой вверх. Остальные игроки выкладывают подходящие под образ иллюстрации. После, путем голосования, пытаются определить изначальную картинку. Для победы нужно загадывать образы туманно, но одновременно и понятно для других. Если вашу карточку отгадали, но не все игроки — вы получаете победные очки, и ваш цветной крылатый слон движется по полю вперёд!', 1, '', '', ''),
(13, 5, 'uno', 'Москва', 7, 2, 10, 15, 45, 'классическая карточная игра, где нужно совмещать цвета и цифры. Игроки ходят по очереди и выкладывают карту, соответствующую по цвету или номеру карте на столе', 0, '', '', ''),
(14, 5, 'манчкин', 'Москва', 6, 2, 6, 60, 60, 'Для детской игры- очень хорошо. Для взрослых конечно скучновато, но тоже можно, с детьми норм.', 0, '', '', ''),
(15, 7, 'свинтус', 'Москва', 6, 2, 10, 10, 30, 'прекрасное развлечение для большой и маленькой компании, для маленьких и взрослых, для шумной компании и серьезных офисных работников.', 1, '', '', ''),
(16, 7, 'шашки', 'Москва', 4, 2, 2, 5, 15, 'Правила игры просты и интуитивно понятны. Кроме того, фигурками из набора игры можно играть и в нетрадиционные игры — поддавки, уголки или в «Чапаева». Игра поставляется в пластмассовой коробке, которую удобно перевозить с собой в небольшой сумке.', 0, '', '', ''),
(17, 8, 'Доббль', 'Екатеринбург', 6, 2, 8, 15, 20, 'Это очень весело. Удобная баночка - можно брать в поездки, на пляж, в поход', 1, '', '', ''),
(18, 8, 'мафия', 'Екатеринбург', 8, 6, 20, 60, 90, 'Ночь. Тускло пробивающийся свет луны. Небольшой домик. В одной из комнат атмосфера напряжения, волнения и желания дойти до конца. \"Город засыпает. Просыпается МАФИЯ!\" Так начинается одна из самых увлекательных и захватывающих игр для большой компании. Её обожают подростки, взрослые, студенты, школьники. Можно подарить этой игре несколько свободных часов и получить колоссальное настроение взамен. Ну а если вам попался замечательный ведущий, то вам повезло вдвойне. Главное, в первую ночь остаться живым)))) хотя это ни сколько не испортит вечер и игру)))) По секрету вам скажу, мы раньше названия персонажей писали на бумажках (листочках). Главное, знать правила. Удачи вам и хороших игр!!', 0, '', '', ''),
(19, 9, 'Шакал', 'Санкт-Петербург', 8, 2, 4, 90, 150, 'Игра «Шакал» придется по вкусу: Поклонникам пиратской романтики, обожающим творчество Стивенсона и другие тематические произведения. Детям и подросткам. Это отличное развлечение для любого праздника. Взрослым, обожающим тематические вечеринки и настольные игры.', 1, '', '', ''),
(20, 9, 'барабашка', 'Санкт-Петербург', 6, 2, 8, 20, 30, 'Игра хороша как для детей, так и для веселой взрослой компании. А дети если натренируются, то порой дадут форы и родителям. Внимание, логика, реакция все это развивается и поднимается на уровень выше с Барабашкой!', 0, '', '', ''),
(21, 9, 'uno', 'Санкт-Петербург', 7, 2, 10, 10, 45, 'вы просто собираете компанию, достаёте УНО, читаете правила и через 10 минут играете.', 0, '', '', ''),
(22, 10, 'запретный остров', 'Челябинск', 10, 2, 4, 30, 30, 'отлично подойдет для использования в качестве развлечения для дружной семьи, регулярно проводящей вместе вечерний досуг.', 1, '', '', ''),
(23, 10, 'имаджинариум', 'Челябинск', 12, 4, 7, 50, 60, 'Упаковка хорошая, карты просто улет! Самая лучшая подборка', 0, '', '', ''),
(24, 10, 'доббль', 'Челябинск', 6, 2, 8, 15, 15, 'На реакцию и внимание Развитие навыков ', 1, '', '', ''),
(25, 1, 'qwe', 'Москва', 5, 3, 4, 1, 2, 'qwert', 0, '', '', ''),
(26, 1, 'www', 'Санкт-Петербург', 3, 4, 5, 2, 3, 'qwdqwd', 1, '', '', ''),
(27, 1, 'ww', 'Новосибирск', 3, 2, 5, 1, 120, 'qwerty', 1, '', '', ''),
(28, 2, 'Лото', 'Екатеринбург', 3, 2, 5, 1, 200, 'Лото', 1, '', '', ''),
(29, 2, 'Game007', 'Екатеринбург', 3, 2, 5, 1, 200, '007', 0, '', '', ''),
(30, 2, '33 коровы', 'Москва', 6, 2, 3, 1, 30, 'Коровки', 1, '', '', ''),
(31, 37, '123', 'Москва', 4, 3, 4, 1, 2, 'йцукен', 1, '', '', ''),
(32, 2, 'Тест фото', 'Санкт-Петербург', 5, 2, 20, 10, 30, 'тестим', 0, 'photo_2022-12-01_23-23-19.jpg', 'ndicnwi.jpg', 'Схема данных (1).png'),
(33, 2, 'Тест2', 'Москва', 5, 2, 10, 5, 200, 'тестим2', 0, 'photo_2022-12-01_23-23-19.jpg', 'Схема данных (1).png', 'ndicnwi.jpg'),
(34, 2, '1', 'Город...', 5, 1, 4, 1, 5, '1', 0, 'изображение_2022-12-10_125459281.png', 'ndicnwi.jpg', 'Схема данных (1).png'),
(35, 2, 'CyberPank', 'Москва', 12, 2, 10, 10, 50, 'После грандиозной войны корпораций, когда ядерные взрывы выжгли последние остатки привычной цивилизации, небо покраснело, а людям пришлось выживать. Здесь – каждый сам за себя.\r\n\r\nВам предстоит помочь своему персонажу выжить в этом мрачном будущем. Запомните правила этого сурового мира:\r\n\r\nВнешность важнее содержания\r\nГлавное – правильный настрой\r\nЖиви на грани\r\nК чёрту правила', 1, 'CyberpunkRED_01-1024x1024-wm.jpg', 'igroved_cyberpunk-red-startovij-nabor_02.jpg', 'q93_5b937f8018c7de62bad57c2525d7c95c9ee085bda4667504bdba8b3bfed90ae7.jpg'),
(36, 2, 'Пираты2', 'Москва', 6, 1, 1, 1, 1, 'sdfsdfsdf', 1, 'CyberpunkRED_01-1024x1024-wm.jpg', 'igroved_cyberpunk-red-startovij-nabor_02.jpg', ''),
(37, 2, '11212', 'Москва', 1, 1, 1, 11, 1, '121212 1 12', 1, 'CyberpunkRED_01-1024x1024-wm.jpg', 'igroved_cyberpunk-red-startovij-nabor_02.jpg', 'q93_5b937f8018c7de62bad57c2525d7c95c9ee085bda4667504bdba8b3bfed90ae7.jpg'),
(38, 2, '12 4214', 'Москва', 1, 1, 1, 1, 1, '1212 1 2 213', 1, 'CyberpunkRED_01-1024x1024-wm.jpg', 'igroved_cyberpunk-red-startovij-nabor_02.jpg', ''),
(39, 64, 'Пираты34', 'Москва', 12, 1, 1, 1, 1, '12321321 123213 1 123123', 1, 'CyberpunkRED_01-1024x1024-wm.jpg', 'igroved_cyberpunk-red-startovij-nabor_02.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `personal data`
--

CREATE TABLE `personal data` (
  `users_id` int(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `sity` varchar(20) NOT NULL,
  `@mail` varchar(40) NOT NULL,
  `foto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `personal data`
--

INSERT INTO `personal data` (`users_id`, `login`, `password`, `nickname`, `sity`, `@mail`, `foto`) VALUES
(1, 'Simatov Ivan', 'simak2022', 'simak', 'Moscow', 'simak@mail.ru', 1),
(2, 'Korolyov Ivan', 'korol2022', 'vanyk', 'Moscow', 'vanyk@mail.ru', 1),
(5, 'Tarasenko Daniil', 'Taras2022', 'denchik', 'Moscow', 'denchik@mail.ru', 1),
(7, 'Denisov Vasilij', 'Denis2022', 'bazil', 'Moscow', 'bazil@mail.ru', 1),
(8, 'Karaseva Diana', 'karas2022', 'dina', 'Ekaterinburg', 'dina@mail.ru', 1),
(9, 'Gerasimov Aleksandr', 'geras2022', 'geras', 'Saint-Petersburg', 'geras@gmail.com', 1),
(10, 'Belyaeva Taisiya', 'belya2022', 'belya', 'Novosibirsk', 'belya@gmail.com', 1),
(11, 'Golubev Artyom', 'golub2022', 'golub', 'Chelyabinsk', 'golub@gmail.com', 1),
(12, 'CHernyh Georgij', 'cher2022', 'cher', 'Saint-Petersburg', 'cher@gmail.com', 1),
(13, 'Matveev YUrij', 'matv2022', 'matv', 'Ekaterinburg', 'matv@mail.ru', 1),
(14, 'CHernova Miroslava', 'cher2022', 'cher', 'Saint-Petersburg', 'cher@mail.ru', 1),
(15, 'Prokof\'ev Arsenij', 'prok2022', 'prok', 'Kazan', 'prok@gmail.com', 2),
(16, 'Dmitrieva Viktoriya', 'dmit2022', 'dmit', 'Chelyabinsk', 'dmit@gmail.com', 1),
(17, 'Skvorcova Aleksandra', 'skvo2022', 'skvo', 'Saint-Petersburg', 'skvo@gmail.com', 3),
(18, 'Kalmykov Emir', 'kalm2022', 'kalm', 'Krasnodar', 'kalm@gmail.com', 7),
(24, 'петр', '123', 'petr', 'Москва', 'pit@gma.re', 1),
(28, 'Петя Колокин', '123', 'petr2', 'Москва', '123@fr.ue', 1),
(32, 'Козлина', '123', 'koz123', 'Москва', 'koxel@gr.ti', 1),
(34, 'ВАня', '123', 'van123', 'Москва', '123@fds.rt', 1),
(37, 'Даня Тарасиков', '123', 'den123', 'Москва', '123@fm.ri', 1),
(38, 'Rafic Slim', 'rafi2022', 'rafi', 'Москва', 'rafi@mail.ru', 1),
(39, 'Ваня', '123', 'redbox12', 'Москва', '123@gm.ru', 1),
(42, 'qwer', '0000', 'qwer', 'Москва', 'ca@yandex.ru', 1),
(45, 'a', '0000', 'asa', 'Москва', 'carlllMarksss@yandex.ru', 1),
(48, 'a', '0000', 'aaa', 'Москва', 'd@yandex.ru', 1),
(49, 't', '0000', 'ttt', 'Москва', 'sa@yan', 1),
(51, 'abc', '0000', 'abc', 'Москва', 'abc@y', 1),
(52, 'aaaa', 'a', 'aaaa', 'Москва', 'aaaa@yandex.ru', 1),
(53, 'ffg', '12345', 'ffgg', 'Москва', 'khvvjhv@mail.ru', 1),
(57, 'ffg1233', '123453', 'ffgg123', 'Москва', 'khvvjh33v@mail.ru', 1),
(58, 'Петя Локхин', '123', 'vanyk45', 'Москва', '12@gm.ru', 1),
(60, 'KKK', '0000', 'KKK', 'Москва', 'kkk@mail.ru', 1),
(61, 'Ваня Мороз', '123', 'vanyk98', 'Москва', 'hwfkdas@gm.ru', 1),
(62, 'Саня Явпорядке', '123', 'sanya_v_poryadk', 'Москва', '12_San@gm.ru', 1),
(64, 'Петя лопатваr', '123', 'vanyk1234', 'Москва', '12213@gm.ru', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `technical support`
--

CREATE TABLE `technical support` (
  `id request` int(20) NOT NULL,
  `matter` text NOT NULL COMMENT 'тема запроса',
  `@mail` varchar(30) NOT NULL COMMENT 'почта пользователя',
  `comment` text NOT NULL COMMENT 'текст обращения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `technical support`
--

INSERT INTO `technical support` (`id request`, `matter`, `@mail`, `comment`) VALUES
(1, '', 'lkdafnnblk@mail.ru', 'Нет главной страницы...'),
(11, '', 'simat@mail.ru', 'Не удаётся отправить запрос в базу данных...'),
(12, '', 'simat@mail.ru', 'В тех. поддержке не реализован выбор темы'),
(14, '', 'bazil@mail.ru', 'Данные моего профиля не отображаются'),
(15, '', 'belya@gmail.com', 'Не могу добавить в избранное игру'),
(16, '', '123@gm.ru', 'Ничего не работает, Василий'),
(17, '', 'rafi@mail.ru', 'Всё работает'),
(18, '', 'ca@yandex.ru', 'Все плохо'),
(19, '', 'ca@yandex.ru', 'Проблема');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game ad`
--
ALTER TABLE `game ad`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `users_id` (`users_id`);

--
-- Индексы таблицы `personal data`
--
ALTER TABLE `personal data`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `@mail` (`@mail`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `@mail_2` (`@mail`),
  ADD KEY `@mail_4` (`@mail`);
ALTER TABLE `personal data` ADD FULLTEXT KEY `@mail_3` (`@mail`);

--
-- Индексы таблицы `technical support`
--
ALTER TABLE `technical support`
  ADD PRIMARY KEY (`id request`),
  ADD KEY `@mail` (`@mail`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `game ad`
--
ALTER TABLE `game ad`
  MODIFY `id_game` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `personal data`
--
ALTER TABLE `personal data`
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `technical support`
--
ALTER TABLE `technical support`
  MODIFY `id request` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `game ad`
--
ALTER TABLE `game ad`
  ADD CONSTRAINT `game ad_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `personal data` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
