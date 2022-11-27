-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2022 at 11:46 PM
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
  `passvord` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `sity` varchar(20) NOT NULL,
  `@mail` varchar(30) NOT NULL,
  `foto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal data`
--

INSERT INTO `personal data` (`users_id`, `login`, `password`, `passvord`, `nickname`, `sity`, `@mail`, `foto`) VALUES
(1, 'simat_i', '3330ds', '3330ds', 'simakkk', 'москва', 'simat@mail.ru', 1),
(2, 'korol_i', '7atguygfa', '7atguygfa', 'vanykoroleff', 'москва', 'lkdafnnblk@mail.ru', 1);

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
(1, 'lkdafnnblk@mail.ru', 'Нет главной страницы...');

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
  ADD KEY `users_id` (`users_id`),
  ADD KEY `@mail` (`@mail`);

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
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technical support`
--
ALTER TABLE `technical support`
  MODIFY `id request` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game ad`
--
ALTER TABLE `game ad`
  ADD CONSTRAINT `game ad_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `personal data` (`users_id`);

--
-- Constraints for table `technical support`
--
ALTER TABLE `technical support`
  ADD CONSTRAINT `technical support_ibfk_1` FOREIGN KEY (`@mail`) REFERENCES `personal data` (`@mail`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
