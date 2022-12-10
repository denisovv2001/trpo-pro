-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2022 at 03:35 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pstgu`
--

-- --------------------------------------------------------

--
-- Table structure for table `game ad`
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
  `foto` varchar(2000) NOT NULL COMMENT 'ссылка на фото'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game ad`
--

INSERT INTO `game ad` (`id_game`, `users_id`, `game_name`, `sity`, `age`, `quality_min`, `quality_max`, `min_time`, `max_time`, `comment`, `present`, `foto`) VALUES
(1, 2, 'uno', 'Москва', 5, 2, 10, 15, 30, 'развлечение для всех возрастов и любой компании. Она захватывает своей непринужденностью и понятностью. В игре есть все: азарт, веселье, скорость, непрерывное взаимодействие. А для организации процесса понадобятся только карты, которые можно просто положить в карман.', 1, 'https://master-games.info/dlya-detey/uno'),
(2, 7, 'Шерлок Холмс, детектив-консультант', 'Москва', 14, 2, 5, 90, 120, 'Игра понравится: поклонникам самого известного в мире детектива; любителям викторианской эпохи; ценителям детективных игр; дружной компании, находящейся в поисках отличного развлечения; семье, любящей интересно проводить время вместе; коллекционерам отличных настолок.', 1, 'https://master-games.info/dlya-detey/sherlok-holms-detektiv-konsultant'),
(3, 8, 'моя первая монополия', 'Екатеринбург', 5, 2, 4, 30, 45, 'Игра яркая, качественная, но мы из нее быстро выросли, к сожалению. Правила, на мой взгляд, не очень продуманы, так как деньги быстро заканчиваются в игре.', 1, 'https://www.igroved.ru/games/monopoly/my-first-monopoly/'),
(4, 10, 'Имаджинариум', 'Новосибирск', 12, 2, 7, 30, 30, 'Рисовка очень зацепила. было чем полюбоваться и подумать', 0, 'https://market.yandex.ru/product--dopolnenie-dlia-nastolnoi-igry-cosmodrome-games-imadzhinarium-eto-byl-tiazhelyi-god/1701241211?cpc=cL1Ag_EWB4tXOMxccZLnm_voZnMGB0ZgzWCD1Na-kmUT4asnM8xO4aegHbVeEuJP5g2tXPgAJy-9A94V2I0LKR8m-eJC9AN7QXN9G8h-bNyVCnzn-EqZem1KoVx8prTkf3FZEr9qA1fpkNnME8okNrsGXE57lNpGbmnTxrTX_YYwc0ZroiooUQ%2C%2C&from-show-uid=16700110807978065128100001&sku=1701241211&do-waremd5=h1wHFr04FQ4dutqcTT7SdQ&sponsored=1&cpa=1'),
(5, 1, 'шашки', 'Москва', 6, 2, 2, 5, 45, 'Размер, см : 30 х 30', 1, 'https://market.yandex.ru/product--shashki-klassika-shashki-derevo-doska-derevo-30kh30-sm-miks/101764922602?cpc=SyXkThX_mEe2-DYsxPtrDmVoxiM9Fk5er2cfRUpCyqxVQnRBtWGOGhrBLhFi10Mlc0luq-4zKKd3nyvALCAFUKfOqtdIHkKm3mjOYTapr1HPxcpPKp7O7Sl6YDIYV9viVOS8uepO10T8iyFwZSqmWq5b2X7IUG7wzlW4U04sogAzZwzC96WGpA%2C%2C&from-show-uid=16700018131354155781300001&sku=101764922602&do-waremd5=iuzNqll8yCTeKNIwWpbToA&sponsored=1&cpa=1'),
(7, 2, 'лото', 'Москва', 8, 2, 10, 20, 20, 'можно играть большой компанией', 1, 'https://master-games.info/dlya-detey/loto'),
(8, 5, 'лото', 'Москва', 8, 2, 10, 20, 20, 'Одно из трех наших лучших лото с бочонками. Все комплектующие к нему имеют высокое качество, так как изготовлены на новом оборудовании и оснастке. Березовые бочонки из сухого массива березы находятся в плотном большом мешке, удобном не только для хранения, но и для игры. В мешке поменьше вы найдете 150 ярких пластиковых жетонов. Они понадобятся игрокам для закрытия на карточках клеток сыгравших номеров. Комплект карточек стандартный, на хорошем картоне.', 0, 'https://market.yandex.ru/product--loto-desiatoe-korolevstvo-skomorokhi/1778081729?text=%D0%BB%D0%BE%D1%82%D0%BE&cpc=Oipn0HcKejXI9DVD2Ex04sFE4oOFk18fiLlR9RhL6iFtPaVXMB5_JU_tsFNDMYIUk1oOk2E7uNl2dg8De3V1qeesj0NQCoSOzSXimInE4zZgQMxgTAWD6vY-KGbGreHNoHs8ge2H2FPTNNsfl5V7CofWLmKf30-zvO89-2nHCad4cI2oywgZFQ%2C%2C&rs=eJwzEglgrGLlmH35PNssRo4Luy_su9h0YR8AV3cJ_w%2C%2C&sku=664870850&do-waremd5=9YtLrKxN534H9YRnIu8jGw&sponsored=1&cpa=1&nid=67223'),
(9, 1, 'шахматы', 'Москва', 9, 2, 2, 3, 120, 'Набор «Шахматы» - это классическая настольная игра. В эту игру любят поиграть как дети, так и взрослые. Правила игры просты и интуитивно понятны. Настольная игра отличается оригинальным внешним видом и изготовлено из качественной древесины', 1, 'https://market.yandex.ru/product--orlovskaia-ladia-shakhmaty-obikhodnye-lakirovannye-s-doskoi-r-1/661772002?text=%D1%88%D0%B0%D1%85%D0%BC%D0%B0%D1%82%D1%8B%20%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8F%D0%BD%D0%BD%D1%8B%D0%B5&cpc=DT17rcQNPKeoMlyTIDN8uB5ltEurSwZCAOeHx4Ri5-SW_jO4iOGsGQn_tqnMaNGKS0Itg9NI4sLuU-r81WAT02u7ryL-UpUl1-_UCxAUhuQIFzFi59kxA4mVriWCSsI-AlA_j102Y2XqwR0jEYSRRVrV5PAX3DW99SbHFeEGkKw%2C&rs=eJwBMQDO_zIvUAF6BQjB0s8GmgEj0YjQsNGF0LzQsNGC0Ysg0LTQtdGA0LXQstGP0L3QvdGL0LVxWR0m&sku=661772002&do-waremd5=pWjSSWOdehZWMaUXGStlDA&cpa=1&nid=67217'),
(10, 2, 'Шакал', 'Москва', 16, 2, 4, 90, 150, 'Вы — капитан пиратской шхуны, которая прибыла к берегам необитаемого острова. На острове спрятано множество сокровищ. Хочется быстрее найти их, раскопать и забить золотыми монетами трюм. Одна беда — с других сторон к острову подплывают конкуренты. Так что на разведку нет времени: высаживайте команду на остров и начинайте поиски кладов.', 0, 'https://market.yandex.ru/product--nastolnaia-igra-magellan-shakal/1724111541?clid=1601&utm_source=yandex&utm_medium=search&utm_campaign=ymp_offer_dp_kids_ultracorfix_bko_dyb_search_rus&utm_term=10682647%7C1724111541&utm_content=cid%3A78843404%7Cgid%3A5041631561%7Caid%3A12836053484%7Cph%3A2906312%7Cpt%3Apremium%7Cpn%3A3%7Csrc%3Anone%7Cst%3Asearch%7Crid%3A2906312%7Ccgcid%3A0&sku=1724111541&cpa=1'),
(12, 1, 'Имаджинариум', 'Москва', 12, 2, 7, 30, 30, 'Имаджинариум — очень необычная игра, которая понравится и детям, и взрослым. Эта игра прокачивает взаимопонимание между людьми, а для победы нужно проявить фантазию и эмпатию. В наборе 98 карточек с потрясающими иллюстрациями, на каждую из которых могут возникнуть сотни ассоциаций. Каждый кон игроки берут карточки и по очереди загадывают ассоциации, выкладывая карточку рубашкой вверх. Остальные игроки выкладывают подходящие под образ иллюстрации. После, путем голосования, пытаются определить изначальную картинку. Для победы нужно загадывать образы туманно, но одновременно и понятно для других. Если вашу карточку отгадали, но не все игроки — вы получаете победные очки, и ваш цветной крылатый слон движется по полю вперёд!', 1, 'https://market.yandex.ru/product--nastolnaia-igra-cosmodrome-games-imadzhinarium/1729321719?text=%D0%B8%D0%BC%D0%B0%D0%B4%D0%B6%D0%B8%D0%BD%D0%B0%D1%80%D0%B8%D1%83%D0%BC&cpc=PiYd5DNwY03OQVUMePaye1Wy9yFUIOYlxWYZaEFzQq-kGKLNCVEszuEhWsfJPsgIWD-Vr7JobrK47wakB1Q2kZ8ygxxIOBWMDSkisxx-F4uNGFu4OySFuHfJlGVoLEKuBR1vb2v5fR1r9XrS-5kVYxLRa1INzPfjTUzpSogCRZHAU1bICv3BBw%2C%2C&rs=eJwzSudgFLLnkrqw48KeCxsu7L2w5cI2IHvvhQ0XGy7suNh8YY-QBFQOQ0aKhYNFgENhgl8AYxUrx_SmHtZZjDgVAwBtbD0I&sku=1729321719&do-waremd5=2CZIMIqWcAEpxNrgqF1hgA&cpa=1&nid=59742'),
(13, 5, 'uno', 'Москва', 7, 2, 10, 15, 45, 'классическая карточная игра, где нужно совмещать цвета и цифры. Игроки ходят по очереди и выкладывают карту, соответствующую по цвету или номеру карте на столе', 0, 'https://market.yandex.ru/product--nastolnaia-igra-uno-kartochnaia-igra-uno-igry-dlia-kompanii/1477289386?text=%D1%83%D0%BD%D0%BE&cpc=Zuyuh-WCCFjnnSo_em3BQbtdipLyPYn_OVdJTerQ7WgqQHE3dPeIEo1n8L0igFt8BMaaqXWgcxPnvKWkpLUeJgKYqFNNq9zebZq6FlAH9B1ljNJSNSZjxsO_zqZeQmF8Ivh54UI9f810OW3Cd6qT7FEAhBK1DuiHWJELdvnACZo%2C&sku=101497365739&do-waremd5=TIGc3I8bd8CgP19BY7XTLQ&cpa=1&nid=59742'),
(14, 5, 'манчкин', 'Москва', 6, 2, 6, 60, 60, 'Для детской игры- очень хорошо. Для взрослых конечно скучновато, но тоже можно, с детьми норм.', 0, 'https://market.yandex.ru/product--nastolnaia-igra-hobby-world-manchkin-tashchi-sokrovishcha/1723939275?cpc=W9Nw5p-O6ri81LCgfyUxlFBcsMlwXMI0FK4QpEFTUTgQIRNXjhYPNsEfuXgNcSgAXDNf2yY0PQ57M2hZho1BVXSdC7G9xEFIPEcNgd8kzL_ZEk2H2kkk_5uLedVsZRWylK_91MBx0SKAm_n_0JCAxj6DlNhvbV3dR0zj89KwlUZ1hs7eoAQZWA%2C%2C&from-show-uid=16700054681730382311600004&sku=1723939275&do-waremd5=DOqnuJVnMQIdDHHEZ8RrUQ&sponsored=1&cpa=1'),
(15, 7, 'свинтус', 'Москва', 6, 2, 10, 10, 30, 'прекрасное развлечение для большой и маленькой компании, для маленьких и взрослых, для шумной компании и серьезных офисных работников.', 1, 'https://master-games.info/dlya-detey/svintus'),
(16, 7, 'шашки', 'Москва', 4, 2, 2, 5, 15, 'Правила игры просты и интуитивно понятны. Кроме того, фигурками из набора игры можно играть и в нетрадиционные игры — поддавки, уголки или в «Чапаева». Игра поставляется в пластмассовой коробке, которую удобно перевозить с собой в небольшой сумке.', 0, 'https://market.yandex.ru/product--strom-shashki-u625/766630610?text=%D1%88%D0%B0%D1%88%D0%BA%D0%B8&cpc=RD-XcafRFVGv8KfF8Whzjw8TCb0Ow6G4mpJGtjK6576bm1Jh4oloIsT26SbjchxitJWKdb2Gw4ACpDQYniOEMzKxEBkl1vfdTmAFLwF6sUVI4ZL5_B4WJ3BsnI6il9WpPkzLsrpytHQPi0MsYb8_ZT9yxdVqikiJjAcLPyB1PDmQ79tx4iH8Uw%2C%2C&rs=eJwzEgtgrGLlOHjpPNssRq6LHRc2APGuCzsAbnYLcg%2C%2C&sku=766630610&do-waremd5=keZhQ_R-yr4P_KHYzWES-Q&cpa=1&nid=67217'),
(17, 8, 'Доббль', 'Екатеринбург', 6, 2, 8, 15, 20, 'Это очень весело. Удобная баночка - можно брать в поездки, на пляж, в поход', 1, 'https://www.igroved.ru/games/dobble-series/dobble/'),
(18, 8, 'мафия', 'Екатеринбург', 8, 6, 20, 60, 90, 'Ночь. Тускло пробивающийся свет луны. Небольшой домик. В одной из комнат атмосфера напряжения, волнения и желания дойти до конца. \"Город засыпает. Просыпается МАФИЯ!\" Так начинается одна из самых увлекательных и захватывающих игр для большой компании. Её обожают подростки, взрослые, студенты, школьники. Можно подарить этой игре несколько свободных часов и получить колоссальное настроение взамен. Ну а если вам попался замечательный ведущий, то вам повезло вдвойне. Главное, в первую ночь остаться живым)))) хотя это ни сколько не испортит вечер и игру)))) По секрету вам скажу, мы раньше названия персонажей писали на бумажках (листочках). Главное, знать правила. Удачи вам и хороших игр!!', 0, 'https://www.igroved.ru/games/mafia-series/mafia-lifestyle-new/'),
(19, 9, 'Шакал', 'Санкт-Петербург', 8, 2, 4, 90, 150, 'Игра «Шакал» придется по вкусу: Поклонникам пиратской романтики, обожающим творчество Стивенсона и другие тематические произведения. Детям и подросткам. Это отличное развлечение для любого праздника. Взрослым, обожающим тематические вечеринки и настольные игры.', 1, 'https://master-games.info/dlya-detey/shakal'),
(20, 9, 'барабашка', 'Санкт-Петербург', 6, 2, 8, 20, 30, 'Игра хороша как для детей, так и для веселой взрослой компании. А дети если натренируются, то порой дадут форы и родителям. Внимание, логика, реакция все это развивается и поднимается на уровень выше с Барабашкой!', 0, 'https://www.igroved.ru/games/geistesblitz-series/geistesblitz/'),
(21, 9, 'uno', 'Санкт-Петербург', 7, 2, 10, 10, 45, 'вы просто собираете компанию, достаёте УНО, читаете правила и через 10 минут играете.', 0, 'https://www.igroved.ru/games/uno-series/uno/'),
(22, 10, 'запретный остров', 'Челябинск', 10, 2, 4, 30, 30, 'отлично подойдет для использования в качестве развлечения для дружной семьи, регулярно проводящей вместе вечерний досуг.', 1, 'https://master-games.info/dlya-detey/zapretnyy-ostrov/'),
(23, 10, 'имаджинариум', 'Челябинск', 12, 4, 7, 50, 60, 'Упаковка хорошая, карты просто улет! Самая лучшая подборка', 0, 'https://market.yandex.ru/product--dopolnenie-dlia-nastolnoi-igry-cosmodrome-games-imadzhinarium-praim-taim/642448147?cpc=HfJaBsgQzzowT7QHRlTQDdtRGzOCQJ9D4w7RQ0By7kDqUVnDq8Xmnp5_f84XYKH8E-XDXdZHT4pkfgsDZTDHDxIWmxWvVKXNcYS5R2KVGhMRd1MxLk5awfmlirwekO3CtkejhrJ6CaCjj8wkYWjYIckenlD-aBc2w5lKHrOPImIhgN6un8eo7A%2C%2C&from-show-uid=16700547719169189446200004&sku=642448147&do-waremd5=_DljjpOQgg5d6y3wajjopg&sponsored=1&cpa=1'),
(24, 10, 'доббль', 'Челябинск', 6, 2, 8, 15, 15, 'На реакцию и внимание Развитие навыков ', 1, 'https://market.yandex.ru/product--nastolnaia-igra-dobbl-miks/101772081909?cpc=53usx5YL7ZwfqFlIKe7bbshtjKlr5ZcDHiQrdZeMArrn4W6sSk5n4exRnmBVOa5j28SUZWUlN-NrKX59C8FYnvokTuuRcEDGx8pL2vwWCBUa2hwPFNqBINMyC2_-Aymp85vQCOV4p_mn-Ud1fpoIeZ4qjF22-hwIKJctm8HtBD0eQ1bNpWszDg%2C%2C&from-show-uid=16700562945608404131400004&sku=101772081909&do-waremd5=2upL5FbMjDMpPlKayOhCbw&sponsored=1&cpa=1'),
(25, 8, 'диксит', 'Kazan', 8, 3, 12, 30, 30, 'Несколько карточек потерялось, всё остальное на месте', 1, 'https://market.yandex.ru/product--nastolnaia-igra-stil-zhizni-diksit-odisseia/1728515743?sku=1728515743&utm_term=10682647%7C1728515743&src_pof=1648&icookie=PWY4OyYGnJPboTNKGDti4i22eAnoLyLZHrWMdBIjipuOTITZ7Jyk843hLl3uaXqzy9Np0GK9glARziZzgk8VMSWgic0%3D&yclid=7340404311059662911&clid=1601&utm_source_service=web&utm_source=yandex&utm_medium=search&utm_campaign=ymp_offer_cpc_1_bko_dyb_search_rus-rostov&utm_content=cid%3A80637964%7Cgid%3A5077605850%7Caid%3A13076173363%7Cph%3A3113049%7Cpt%3Apremium%7Cpn%3A2%7Csrc%3Anone%7Cst%3Asearch%7Crid%3A3113049%7Ccgcid%3A8477692&adjust_t=fs3pybh&adjust_ya_click_id=7340404311059662911&no-pda-redir=1');

-- --------------------------------------------------------

--
-- Table structure for table `personal data`
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
-- Dumping data for table `personal data`
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
(38, 'Rafic Slim', 'rafi2022', 'rafi', 'Москва', 'rafi@mail.ru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technical support`
--

CREATE TABLE `technical support` (
  `id request` int(20) NOT NULL,
  `matter` text NOT NULL COMMENT 'тема запроса',
  `@mail` varchar(30) NOT NULL COMMENT 'почта пользователя',
  `comment` text NOT NULL COMMENT 'текст обращения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technical support`
--

INSERT INTO `technical support` (`id request`, `matter`, `@mail`, `comment`) VALUES
(1, '', 'lkdafnnblk@mail.ru', 'Нет главной страницы...'),
(11, '', 'simat@mail.ru', 'Не удаётся отправить запрос в базу данных...'),
(12, '', 'simat@mail.ru', 'В тех. поддержке не реализован выбор темы'),
(14, '', 'bazil@mail.ru', 'Данные моего профиля не отображаются');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game ad`
--
ALTER TABLE `game ad`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `personal data`
--
ALTER TABLE `personal data`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `@mail` (`@mail`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `@mail_2` (`@mail`),
  ADD KEY `@mail_4` (`@mail`);
ALTER TABLE `personal data` ADD FULLTEXT KEY `@mail_3` (`@mail`);

--
-- Indexes for table `technical support`
--
ALTER TABLE `technical support`
  ADD PRIMARY KEY (`id request`),
  ADD KEY `@mail` (`@mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game ad`
--
ALTER TABLE `game ad`
  MODIFY `id_game` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal data`
--
ALTER TABLE `personal data`
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `technical support`
--
ALTER TABLE `technical support`
  MODIFY `id request` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game ad`
--
ALTER TABLE `game ad`
  ADD CONSTRAINT `game ad_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `personal data` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
