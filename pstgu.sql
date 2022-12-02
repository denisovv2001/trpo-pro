-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 09:59 AM
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
  `game name` varchar(30) NOT NULL,
  `sity` varchar(20) NOT NULL,
  `age from` int(20) NOT NULL,
  `age to` int(20) NOT NULL,
  `quality min` int(20) NOT NULL,
  `quality max` int(20) NOT NULL,
  `time` int(20) NOT NULL,
  `comment` text NOT NULL,
  `present/ exchange` int(10) NOT NULL,
  `foto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game ad`
--

INSERT INTO `game ad` (`id_game`, `users_id`, `game name`, `sity`, `age from`, `age to`, `quality min`, `quality max`, `time`, `comment`, `present/ exchange`, `foto`) VALUES
(1, 2, 'uno', 'москва', 0, 99, 2, 10, 10, 'йжДЬМЬЩДЭТФВЫМТФВМБьыпждо3т д3дл4оешртцшгнмргннфводлтрломршгфмншгуршмтлослоиопрцкшгнпшггцЩГш', 1, 1),
(5, 1, 'шашки', 'москва', 0, 100, 2, 2, 20, 'у.ььидршг пурморфвлволыомлфрломрячломдяодмоыдлтппбуттаивячьтьимлоырлморвяломилоомщшуоцдлвпрыловятмолриыфпл', 1, 1),
(7, 2, 'лото', 'москва', 0, 100, 2, 50, 20, 'йцпйцкрейт', 1, 1),
(8, 2, 'лото', 'москва', 0, 100, 2, 50, 20, 'йцпйцкрейт', 1, 1),
(9, 2, 'шахматы', 'москва', 0, 100, 2, 2, 30, 'ФВдиььжыаьфиь', 1, 1);

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
(18, 'Kalmykov Emir', 'kalm2022', 'kalm', 'Krasnodar', 'kalm@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `technical support`
--

CREATE TABLE `technical support` (
  `id request` int(20) NOT NULL,
  `@mail` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technical support`
--

INSERT INTO `technical support` (`id request`, `@mail`, `comment`) VALUES
(1, 'lkdafnnblk@mail.ru', 'Нет главной страницы...'),
(11, 'simat@mail.ru', 'Не удаётся отправить запрос в базу данных...'),
(12, 'simat@mail.ru', 'В тех. поддержке не реализован выбор темы');

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
  MODIFY `id_game` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal data`
--
ALTER TABLE `personal data`
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `technical support`
--
ALTER TABLE `technical support`
  MODIFY `id request` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game ad`
--
ALTER TABLE `game ad`
  ADD CONSTRAINT `game ad_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `personal datas` (`users_id`);

--
-- Constraints for table `technical support`
--
ALTER TABLE `technical support`
  ADD CONSTRAINT `technical support_ibfk_1` FOREIGN KEY (`@mail`) REFERENCES `personal datas` (`@mail`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
