-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `visibility` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `connected` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `password`, `name`, `birthdate`, `telephone`, `visibility`, `website`, `description`, `connected`) VALUES
('calib@mailinator.com', 'Pa$$w0rd!', 'Yardley Burns', '1983-01-26', '+1 (803) 561-669', 0, 'https://www.fywegogexi.biz', 'Maiores id dicta ex', 0),
('dojynij@mailinator.com', 'Pa$$w0rd!', 'Amet aliquip itaque', '2006-12-07', '+1 (651) 145-601', 1, 'Deleniti in exceptur', 'Nihil ut tempor et t', 1),
('fazyd@mailinator.com', 'Pa$$w0rd!', 'Qui error est cupidi', '2010-05-12', '+1 (906) 758-689', 2, 'Qui temporibus id te', 'Magni magni labore c', 0),
('fero@mailinator.com', 'Pa$$w0rd!', 'Athena Craft', '1985-09-19', '+1 (991) 495-959', 0, 'https://www.sytecimoz.com', 'Molestiae occaecat q', 0),
('fyvu@mailinator.com', 'Pa$$w0rd!', 'Ut et maxime natus a', '2021-08-07', '+1 (735) 855-848', 0, 'Voluptatem quia cons', 'Unde earum incididun', 0),
('huja@mailinator.com', 'Pa$$w0rd!', 'Sunt magna reprehend', '1982-03-01', '+1 (116) 927-588', 0, 'Autem excepteur dolo', 'Quis harum sint ver', 1),
('jelaca@mailinator.com', 'Pa$$w0rd!', 'Nesciunt consequat', '2017-12-15', '+1 (189) 749-849', 1, 'In irure in obcaecat', 'Voluptas dolorem quo', 0),
('kegyta@mailinator.com', 'Pa$$w0rd!', 'Labore quis pariatur', '1989-10-08', '+1 (563) 495-166', 2, 'Aute consequuntur fu', 'Tenetur ducimus neq', 0),
('kogah@mailinator.com', 'Pa$$w0rd!', 'Josephine Rocha', '2023-07-16', '+1 (764) 451-404', 0, 'https://www.qucixede.org', 'Neque dolore sit cul', 0),
('lifudifu@mailinator.com', 'Pa$$w0rd!', 'Assumenda laborum te', '2012-04-20', '+1 (233) 389-563', 1, 'Duis irure qui odit ', 'Suscipit dolorem qui', 0),
('nupen@mailinator.com', 'Pa$$w0rd!', 'Proident dicta cons', '1976-07-07', '+1 (967) 797-972', 0, 'Velit nihil neque od', 'Eaque est non pariat', 0),
('nutil@mailinator.com', 'Pa$$w0rd!', 'Molestiae nulla ad d', '2019-01-12', '+1 (672) 739-892', 0, 'Qui fuga Voluptatem', 'Enim est fugit atqu', 0),
('pyxop@mailinator.com', 'Pa$$w0rd!', 'Sit voluptates saep', '1983-09-15', '+1 (697) 155-325', 1, 'Laboris soluta elit', 'Quia amet saepe vol', 0),
('qynoganybi@mailinator.com', 'Pa$$w0rd!', 'Iola Odonnell', '2013-02-27', '+1 (941) 727-126', 0, 'https://www.jixyjyqycivi.us', 'Voluptatibus omnis m', 0),
('sukixexuk@mailinator.com', 'Pa$$w0rd!', 'Facere laboriosam a', '1990-04-17', '+1 (879) 928-900', 0, 'Quia rerum perferend', 'Dolorem porro aliqua', 0),
('sybecalici@mailinator.com', 'Pa$$w0rd!', 'Do eius qui et et pe', '1993-11-25', '+1 (225) 784-494', 2, 'Autem esse velit do', 'Officia veniam labo', 0),
('tomadebot@mailinator.com', 'Pa$$w0rd!', 'Deserunt ad et exerc', '2020-06-25', '+1 (555) 786-124', 0, 'Officia nisi aliquip', 'Error enim velit ius', 0),
('wuvo@mailinator.com', 'Pa$$w0rd!', 'Neve Clements', '1997-02-11', '+1 (695) 625-190', 0, 'https://www.dex.co', 'Nisi neque dolore ex', 0),
('zuhuhak@mailinator.com', 'Pa$$w0rd!', 'Porro magni in quaer', '1997-06-29', '+1 (193) 951-159', 0, 'Magnam qui nostrud d', 'Placeat architecto ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
