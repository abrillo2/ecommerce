-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2019 at 02:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy status`
--

DROP TABLE IF EXISTS `buy status`;
CREATE TABLE IF NOT EXISTS `buy status` (
  `status` int(1) NOT NULL,
  `request_Id` int(11) NOT NULL,
  PRIMARY KEY (`status`,`request_Id`),
  KEY `request_Id` (`request_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `buy_request`
--

DROP TABLE IF EXISTS `buy_request`;
CREATE TABLE IF NOT EXISTS `buy_request` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `category_Id` int(11) DEFAULT NULL,
  `sub_category_Id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_Id` (`category_Id`),
  KEY `sub_category_Id` (`sub_category_Id`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `buy_request`
--

INSERT INTO `buy_request` (`id`, `name`, `user_email`, `category_Id`, `sub_category_Id`, `price`, `info`, `status`, `date`) VALUES
(98, 'abrillo', 'it.abreham.ararsa@gmail.com', 3, 3, 123, 'afdfa', 0, '2019-03-19 13:45:04'),
(99, 'abrillo', 'it.abreham.ararsa@gmail.com', 3, 3, 123, 'afdfa', 0, '2019-03-19 13:46:09'),
(100, 'efjwopafjeo', 'masum@gmail.com', 4, 4, 34543, 'fjwpofejo', 0, '2019-03-23 17:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `chat` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_Id` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chat`, `user_Id`, `status`) VALUES
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com:1', 'adfadf', 'fitsum.alemu@gmail.com', 1),
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com:2', 'afdafsd', 'fitsum.alemu@gmail.com', 1),
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com:3', 'hi', 'fitsum.alemu@gmail.com', 1),
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com:4', 'hi', 'fitsum.alemu@gmail.com', 1),
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com:5', 'sfgsfdg', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:alexalazar@gmail.com:1', 'hey', 'alexalazar@gmail.com', 1),
('haftu@gmail.com:alexalazar@gmail.com:2', 'helo', 'haftu@gmail.com', 1),
('haftu@gmail.com:alexalazar@gmail.com:3', 'helo', 'haftu@gmail.com', 1),
('haftu@gmail.com:alexalazar@gmail.com:4', 'alesh', 'alexalazar@gmail.com', 1),
('haftu@gmail.com:alexalazar@gmail.com:5', 'alesh', 'alexalazar@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:1', 'hello', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:10', 'hello', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:11', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:12', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:13', 'hey heeeeeeeeeeeeeeeeeeeeelin', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:14', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:15', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:16', 'what\'s up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:17', 'what\'s up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:18', 'not much', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:19', 'not much', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:2', 'hello', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:20', 'really?', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:21', 'really?', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:22', 'yep', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:23', 'yep', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:24', 'hi', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:25', 'hi', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:26', 'hello', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:27', 'hello', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:28', 'yes?', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:29', 'yes?', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:3', 'hi hilina', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:30', 'yet nesh', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:31', 'bet', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:32', 'bet', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:33', 'hi', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:34', 'hi', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:35', 'helo', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:36', 'helo', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:37', 'can you hear me', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:38', 'can you hear me', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:39', 'hey', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:4', 'hi hilina', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:40', 'hey', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:41', 'oh you\'re breaking up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:42', 'oh you\'re breaking up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:43', 'holo', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:44', 'holo', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:45', 'adfadf', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:46', 'what up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:47', 'what up', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:48', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:49', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:5', 'hello fitsum', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:50', 'holo', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:51', 'holo', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:52', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:53', 'hi', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:54', 'hola', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:55', 'hola', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:6', 'hello fitsum', 'haftu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:7', 'hey hilu', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:8', 'hey hilu', 'fitsum.alemu@gmail.com', 1),
('haftu@gmail.com:fitsum.alemu@gmail.com:9', 'hello', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:1', 'hello', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:10', 'yeah?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:11', 'yeah?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:12', 'hello', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:13', 'hello', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:14', 'wtf', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:15', 'wtf', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:16', 'hey', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:17', 'hey', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:19', 'can you here me now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:20', 'after referesh', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:21', 'after referesh', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:23', 'hello?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:24', 'hello?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:25', 'hello?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:26', 'abrillo?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:27', 'abrillo?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:28', 'hey', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:29', 'hey', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:3', 'hi buddy?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:30', 'browsers acting wier', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:31', 'browsers acting wier', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:32', 'ikr', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:33', 'ikr', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:34', 'holo', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:35', 'holo', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:36', 'I said holo', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:37', 'I said holo', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:39', 'I\'ve to reload btw', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:4', 'ru ther man', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:40', 'really?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:41', 'really?', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:43', 'yes', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:44', 'adfadfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:5', 'ru ther man', 'fitsum.alemu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:7', 'yea', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com:9', 'hey man', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:1', 'hi hilina', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:10', 'hi abrillo', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:101', 'yeah', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:102', 'oh', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:103', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:104', 'afaf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:105', 'adfadfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:106', 'adfadfdaf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:107', 'soooo', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:108', 'soooo', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:109', 'hahaha', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:11', 'adfadfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:110', 'hahaha', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:111', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:112', 'adfafd', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:113', 'adfafd', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:114', 'adfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:115', 'adfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:117', 'whatjQuery33108519924604283429_1553329657124??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:119', 'whatjQuery33108519924604283429_1553329657124??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:12', 'this needs another work', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:121', 'whatjQuery33108519924604283429_1553329657126??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:123', 'whatjQuery33108519924604283429_1553329657126??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:124', 'whatjQuery33108519924604283429_1553329657126??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:125', 'whatjQuery33108519924604283429_1553329657126??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:127', 'whatjQuery33108519924604283429_1553329657126??', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:128', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:129', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:13', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:130', 'adfadfaaaaaaaaaaaaaaa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:131', 'adfadfaaaaaaaaaaaaaaa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:133', 'reallyjQuery33105405009221048998_1553329706544?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:134', 'really?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:135', 'really?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:136', 'yes?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:137', 'yes?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:138', 'I\'m to confused rn', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:139', 'I\'m to confused rn', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:14', 'what 1', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:140', 'fgsdfgs', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:141', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:142', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:143', 'adfadfsdafsda', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:144', 'adfadfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:145', 'oi', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:146', 'oi', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:148', 'hey helina', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:15', 'what 2-', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:150', 'holo', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:152', 'wtf is wrogn with this chat', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:154', 'adfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:155', 'leweta naw', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:156', 'leweta naw', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:157', 'bye', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:158', 'bye', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:159', '', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:16', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:17', 'hey, it\'s sorted now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:18', 'I know thanks', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:19', 'realy', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:2', 'adfafd', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:20', 'yes', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:21', 'fuck of', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:22', 'hey', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:23', 'hello', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:24', 'hey', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:25', 'what\'s up', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:26', 'nothing much', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:27', 'I\'m confsed rn', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:28', 'adfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:29', 'hi', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:3', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:30', 'holo', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:31', 'holo again', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:32', '', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:33', '', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:34', 'what\'s happeining abrillo', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:35', 'i don\'t know baby', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:36', 'hey hilina', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:37', 'hey abrillo', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:38', 'holo', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:39', 'holo', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:4', 'adfadf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:40', 'what?', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:41', 'can you hear me?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:42', 'what about now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:43', 'what?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:44', 'what about now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:45', 'what about now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:46', 'what?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:47', 'what about now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:48', 'what about now', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:49', 'what?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:5', 'sgfsgdf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:50', 'adfdaf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:51', 'so know it works?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:52', 'I guess', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:53', 'well that\'s good', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:54', 'yeah I guess so', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:55', 'so what now?', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:56', 'perfect it I guess', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:57', 'adfasdf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:58', 'adfasdf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:59', 'adfasdf', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:6', 'aadfadfadfad', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:60', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:61', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:62', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:63', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:64', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:65', 'adfadfa', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:66', 'yegebaw', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:67', 'yegebaw', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:68', 'adfds', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:69', 'adfds', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:7', 's', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:70', 'now it a little bit perfected', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:71', 'now it a little bit perfected', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:72', 'yeah I know', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:73', 'yeah I know', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:74', 'you\'re spamming my pm', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:75', 'you\'re spamming my pm', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:76', 'why is it sedning twice', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:77', 'why is it sedning twice', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:78', '', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:79', '', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:8', 's', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:80', '', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:81', '', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:82', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:83', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:84', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:85', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:86', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:87', 'adfadf', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:88', '', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:89', 'adfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:9', 'a', 'it.abreham.ararsa@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:90', 'adfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:91', 'adfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:92', 'adfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:93', 'yeah', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:95', 'adfad', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:97', 'what happened now', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:haftu@gmail.com:99', 'are you there', 'haftu@gmail.com', 1),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:10', 'yeah baby', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:11', 'okay I\'m able to store chats now', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:12', 'SDsdaf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:13', 'SDsdaf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:14', 'adfadf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:15', 'it works buty', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:16', 'adfadf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:17', 'not bye i said die', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:18', 'afadfad', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:19', 'adfadf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:20', 'adfadf', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:21', 'what the fuck', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:22', 'sfgfg', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:23', 'what\'s with the time and staff', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:24', 'so', 'it.abreham.ararsa@gmail.com', 0),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com:9', 'yeah baby', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:1', 'hello', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:2', 'hi', 'fitsum.alemu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:3', 'I\'m happy about this rn', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:4', 'I\'m happy about this rn', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:5', 'I\'m happy', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:6', 'okie', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:7', 'so I gave it id', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:8', 'it works now?', 'fitsum.alemu@gmail.com', 1),
('memesibatu@gmail.com:fitsum.alemu@gmail.com:9', 'yep', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:haftu@gmail.com:1', 'adfadfa', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:1', 'hi', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:10', 'everything gud', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:11', 'dadfadfadf', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:12', 'here we come', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:13', 'here we come', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:14', 'hello', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:15', 'hello', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:16', 'this is abreham', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:17', 'this is abreham', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:18', 'this is mimi', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:19', 'hello', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:2', 'helo', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:20', 'what\'s up', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:21', 'nothing much', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:22', 'oh really', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:23', 'what do you mean', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:3', 'hi', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:4', 'hi', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:5', 'it\'s wierd I\'m not getting naything', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:6', 'it\'s wierd I\'m not getting naything', 'it.abreham.ararsa@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:7', 'oh now it\'s comming', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:8', 'oh now it\'s comming', 'memesibatu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com:9', 'about now', 'memesibatu@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:1', 'hi', 'wtf@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:2', 'hi', 'wtf@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:3', 'holo', 'haftu@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:4', 'holo', 'haftu@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:5', 'now it\'s comming obviously', 'wtf@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:6', 'now it\'s comming obviously', 'wtf@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:7', 'yeah', 'haftu@gmail.com', 1),
('wtf@gmail.com:haftu@gmail.com:8', 'yeah', 'haftu@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:1', 'hi', 'wtf@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:2', 'hi', 'wtf@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:3', 'helo', 'it.abreham.ararsa@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:4', 'helo', 'it.abreham.ararsa@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:5', 'yep', 'wtf@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:6', 'yep', 'wtf@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:7', 'yep', 'it.abreham.ararsa@gmail.com', 1),
('wtf@gmail.com:it.abreham.ararsa@gmail.com:8', 'yep', 'it.abreham.ararsa@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`name`) VALUES
('adama'),
('addis ababa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`name`) VALUES
('ease addis'),
('north addis');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
CREATE TABLE IF NOT EXISTS `division` (
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`name`) VALUES
('4 killo\r\n'),
('5 killo');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE IF NOT EXISTS `favorite` (
  `product_id` int(100) NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`product_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`product_id`, `user_id`) VALUES
(92, 'haftu@gmail.com'),
(93, 'haftu@gmail.com'),
(103, 'haftu@gmail.com'),
(92, 'it.abreham.ararsa@gmail.com'),
(93, 'it.abreham.ararsa@gmail.com'),
(96, 'it.abreham.ararsa@gmail.com'),
(99, 'it.abreham.ararsa@gmail.com'),
(100, 'it.abreham.ararsa@gmail.com'),
(101, 'it.abreham.ararsa@gmail.com'),
(92, 'memesibatu@gmail.com'),
(94, 'memesibatu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `user_email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `use_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `notification`, `status`, `user_email`, `link`) VALUES
(1, 'Please Complete Your Profile', 1, 'it.abreham.ararsa@gmail.com', ''),
(2, 'hello mr.', 1, 'it.abreham.ararsa@gmail.com', ''),
(3, 'Please Complete Your Profile', 1, 'it.belete.tekle@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(4, 'Please Complete Your Profile', 1, 'fitsum.alemu@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(5, 'Please Complete Your Profile', 1, 'alexalazar@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(6, 'Please Complete Your Profile', 1, 'adanech@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(7, 'hello there', 1, 'adanech@gmail.com', NULL),
(8, 'hello again', 1, 'adanech@gmail.com', NULL),
(9, 'Please Complete Your Profile', 1, 'adfa@fadf.com', 'http://localhost/ecommerce/profile/userProfile'),
(10, 'Please Complete Your Profile', 1, 'meme@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(11, 'Please Complete Your Profile', 1, 'medeme@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(12, 'Please Complete Your Profile', 1, 'dada@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(13, 'Please Complete Your Profile', 1, 'dadadada@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(14, 'Please Complete Your Profile', 1, 'wtf@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(15, 'Please Complete Your Profile', 1, 'fitsu123m@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(16, 'Please Complete Your Profile', 1, 'mimi.sibatu@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(17, 'Please Complete Your Profile', 1, 'mimi@gmail.com', 'https://d7517073.ngrok.io/ecommerce/profile/userProfile'),
(18, 'Please Complete Your Profile', 1, 'abriloo@gmail.com', 'https://7b1d2ed4.ngrok.io/ecommerce/profile/userProfile'),
(19, 'Please Complete Your Profile', 0, 'abc@gmail.com', ' https://764bac7d.ngrok.io/ecommerce/profile/userProfile'),
(20, 'Please Complete Your Profile', 0, 'it.tamirat.lakew@gmail.com', ' http://localhost/ecommerce/profile/userProfile'),
(21, 'Please Complete Your Profile', 1, 'haftu@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(22, 'Please Complete Your Profile', 1, 'fitsum@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(23, 'Please Complete Your Profile', 1, 'memesibatu@gmail.com', 'http://localhost/ecommerce/profile/userProfile'),
(24, 'Please Complete Your Profile', 0, 'masum@gmail.com', 'https://0684d1ca.ngrok.io/ecommerce/profile/userProfile');

-- --------------------------------------------------------

--
-- Table structure for table `prodcut_description_value`
--

DROP TABLE IF EXISTS `prodcut_description_value`;
CREATE TABLE IF NOT EXISTS `prodcut_description_value` (
  `description` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description_value` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `product_Id` int(11) NOT NULL,
  PRIMARY KEY (`description`,`product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `prodcut_description_value`
--

INSERT INTO `prodcut_description_value` (`description`, `description_value`, `product_Id`) VALUES
('C-rates', '1341', 98),
('Capacity', '134', 98),
('Cold_cranking_amps', '1341', 98),
('Load', '1341', 98),
('Specific_energy_and_energy_density', '134', 98),
('Specific_power', '134', 98),
('Voltage', '134', 98),
('brand', 'HP', 99),
('brand', 'HP', 102),
('ram', '4 GB', 99),
('ram', '4gb', 102),
('singlebutton', '', 98),
('singlebutton', '', 99),
('singlebutton', '', 102),
('singlebutton', '', 103),
('singlebutton', '', 104),
('singlebutton', '', 105);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `category_Id` int(11) DEFAULT NULL,
  `sub_category_Id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_Id` (`category_Id`),
  KEY `sub_category_Id` (`sub_category_Id`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `user_email`, `category_Id`, `sub_category_Id`, `price`, `info`, `status`, `date`) VALUES
(92, 'HP desktop', 'it.abreham.ararsa@gmail.com', 3, 5, 12000, 'it\'s very awesome desktop', 0, '2019-03-18 10:21:49'),
(93, 'Hammer', 'it.abreham.ararsa@gmail.com', 2, 2, 120, 'brand new hammer with only 12 miles driven', 0, '2019-03-18 10:59:39'),
(94, 'smart laptop', 'it.abreham.ararsa@gmail.com', 3, 3, 120, 'This is the best laptop you have ever seen in your entire life', 0, '2019-03-18 13:41:50'),
(96, 'adfadf', 'it.abreham.ararsa@gmail.com', 3, 3, 123, 'adfadf', 0, '2019-03-19 12:39:25'),
(98, 'Batterie', 'it.abreham.ararsa@gmail.com', 5, 16, 12000, 'In the following paragraphs are listed the primary characteristics of a battery, along with the corresponding descriptions.', 0, '2019-03-19 16:56:29'),
(99, 'abrillo', 'it.abreham.ararsa@gmail.com', 5, 16, 123, 'adfadf', 0, '2019-03-19 17:19:53'),
(100, 'lap top', 'it.abreham.ararsa@gmail.com', 3, 3, 120, 'best laptop ever', 0, '2019-03-19 17:22:44'),
(101, 'brand new laptop', 'it.abreham.ararsa@gmail.com', 3, 3, 120, 'This is the description', 0, '2019-03-19 17:25:33'),
(102, 'brand new laptop', 'it.abreham.ararsa@gmail.com', 3, 3, 120, 'This is the description', 0, '2019-03-19 17:26:03'),
(103, 'bmw', 'haftu@gmail.com', 2, 2, 12000, 'Delve into the fascinating world of BMW. Read inspiring stories and interviews, watch exciting videos and receive helpful answers to the most pressing questions ...', 0, '2019-03-20 12:39:40'),
(104, 'bazuka', 'fitsum.alemu@gmail.com', 2, 2, 120, 'bazuka', 0, '2019-03-23 12:14:46'),
(105, 'zxczxcz', 'memesibatu@gmail.com', 7, NULL, 123, 'zcvzcv', 0, '2019-03-23 17:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(2, 'viechle '),
(3, 'Electronics'),
(4, 'fashion'),
(5, 'Automotive Parts'),
(6, 'Commercial Vehicles'),
(7, 'Clothing'),
(8, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `product_pics`
--

DROP TABLE IF EXISTS `product_pics`;
CREATE TABLE IF NOT EXISTS `product_pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `product_Id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_Id` (`product_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product_pics`
--

INSERT INTO `product_pics` (`id`, `name`, `product_Id`) VALUES
(19, 'item_XL_24410514_35700312 _1).jpg', 92),
(20, 'item_XL_24410514_35700312.jpg', 92),
(21, 'cac00hus051a0101.png', 93),
(22, 'download.jpg', 93),
(23, 'apple-macbook-pro-15-inch-2017-14.jpg', 94),
(24, 'c229f3c53905e3c0575ef2ca65e07bc9-320-80.jpg', 94),
(25, 'whichlaptop-top-2x1-lowres1024-1355.jpg', 94),
(26, '5c1d0786c65f123ed0242b96-750-563.jpg', 94),
(29, 'item_XL_24410514_35700312.jpg', 96),
(30, 'item_XL_24410514_35700312 _1).jpg', 96),
(35, '65-85-_4_.jpg', 98),
(36, 'images _1).jpg', 98),
(37, 'images.jpg', 98),
(38, 'overdrive31agm-300x283.jpg', 98),
(39, 'B1103601350.jpg', 98),
(40, 'images _1).jpg', 99),
(41, 'images.jpg', 99),
(42, '65-85-_4_.jpg', 99),
(43, 'c229f3c53905e3c0575ef2ca65e07bc9-320-80.jpg', 100),
(44, 'item_XL_24410514_35700312 _1).jpg', 100),
(45, 'item_XL_24410514_35700312.jpg', 100),
(46, 'c229f3c53905e3c0575ef2ca65e07bc9-320-80.jpg', 102),
(47, 'whichlaptop-top-2x1-lowres1024-1355.jpg', 102),
(48, 'images _5).jpg', 103),
(49, 'images _4).jpg', 103),
(50, 'images _3).jpg', 103),
(51, 'images _2).jpg', 103),
(52, 'images _3).jpg', 103),
(53, 'images _4).jpg', 103),
(54, '00016_Onboarding Blue _1).png', 104),
(55, 'fashion-person-woman-apple.png', 104),
(56, 'GrabFM!@3x.png', 105),
(57, 'Screenshot _2).png', 105);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

DROP TABLE IF EXISTS `product_sub_category`;
CREATE TABLE IF NOT EXISTS `product_sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `category_Id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_Id` (`category_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`id`, `name`, `category_Id`) VALUES
(2, '20', 2),
(3, 'Laptop', 3),
(4, 'men\'s wear', 4),
(5, 'desktop', 3),
(16, 'Automotive Batteries', 5),
(17, 'Automotive Body, Trim and Glass', 5),
(18, 'Automotive Commodities', 5),
(19, 'Automotive Drivetrain and Transmission Components', 5),
(20, 'Automotive Fuel Systems', 5);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `owner_Id` int(11) NOT NULL,
  `category_Id` int(11) DEFAULT NULL,
  `sub_category_Id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_Id` (`category_Id`),
  KEY `sub_category_Id` (`sub_category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `request_pic`
--

DROP TABLE IF EXISTS `request_pic`;
CREATE TABLE IF NOT EXISTS `request_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `request_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `request_id` (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `request_pic`
--

INSERT INTO `request_pic` (`id`, `name`, `request_id`) VALUES
(1, 'apple-macbook-pro-15-inch-2017-14.jpg', 99),
(2, 'whichlaptop-top-2x1-lowres1024-1355.jpg', 99),
(3, 'c229f3c53905e3c0575ef2ca65e07bc9-320-80.jpg', 99),
(4, 'images.jpg', 100),
(5, 'images3.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `sell status`
--

DROP TABLE IF EXISTS `sell status`;
CREATE TABLE IF NOT EXISTS `sell status` (
  `status` int(2) NOT NULL,
  `product_Id` int(11) NOT NULL,
  PRIMARY KEY (`status`,`product_Id`),
  KEY `product_Id` (`product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_product_description`
--

DROP TABLE IF EXISTS `sub_category_product_description`;
CREATE TABLE IF NOT EXISTS `sub_category_product_description` (
  `sub_category_ID` int(11) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`sub_category_ID`,`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sub_category_product_description`
--

INSERT INTO `sub_category_product_description` (`sub_category_ID`, `description`) VALUES
(3, 'brand'),
(3, 'ram'),
(16, 'C-rates'),
(16, 'Capacity'),
(16, 'Cold cranking amps'),
(16, 'Load'),
(16, 'Specific energy and energy density'),
(16, 'Specific power'),
(16, 'Voltage');

-- --------------------------------------------------------

--
-- Table structure for table `total_chat`
--

DROP TABLE IF EXISTS `total_chat`;
CREATE TABLE IF NOT EXISTS `total_chat` (
  `id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `total_chat` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `total_chat`
--

INSERT INTO `total_chat` (`id`, `total_chat`) VALUES
('fitsum.alemu@gmail.com:fitsum.alemu@gmail.com', 5),
('haftu@gmail.com:alexalazar@gmail.com', 5),
('haftu@gmail.com:fitsum.alemu@gmail.com', 55),
('it.abreham.ararsa@gmail.com:fitsum.alemu@gmail.com', 44),
('it.abreham.ararsa@gmail.com:haftu@gmail.com', 159),
('it.abreham.ararsa@gmail.com:it.abreham.ararsa@gmail.com', 24),
('memesibatu@gmail.com:fitsum.alemu@gmail.com', 9),
('memesibatu@gmail.com:haftu@gmail.com', 1),
('memesibatu@gmail.com:it.abreham.ararsa@gmail.com', 23),
('wtf@gmail.com:haftu@gmail.com', 8),
('wtf@gmail.com:it.abreham.ararsa@gmail.com', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_Id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_profile_pic` varchar(255) COLLATE utf8mb4_bin DEFAULT '100.png',
  `national_Id` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `street_number` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_privellege` int(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`user_Id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `phone_number` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_Id`, `user_name`, `user_profile_pic`, `national_Id`, `user_password`, `user_email`, `phone_number`, `street_number`, `police_station`, `city`, `district`, `division`, `post_code`, `user_privellege`) VALUES
(51, 'Md Masum', '100.png', '3724837', 'Masum!2345', 'suzhoc@gmail.com', '238492378', 'afehiwoh', 'fhaoweh', 'addis', 'north', '4', '384938', 3),
(56, 'abreham Ararsa', 'abrehamArarsa.png', '123', 'Theman123', 'it.abreham.ararsa@gmail.com', '', '', '', 'adama', 'ease', '4', '', 3),
(57, 'Belete Tekle', '100.png', NULL, 'Theman123', 'it.belete.tekle@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(58, 'ftisum alemu', '100.png', NULL, 'Theman123', 'fitsum.alemu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(59, 'alazar', '100.png', NULL, 'Theman123', 'alexalazar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(60, 'adanech admasu', '100.png', NULL, 'Themanaad123', 'adanech@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(61, 'abreham Ararsa', 'abrehamArarsa.jpg', '123', 'Theman123', 'adfa@fadf.com', '0937659865', '123', '4 killo', 'adama', 'ease', '4', 'adfad', 3),
(62, 'meme meme', 'memememe.png', '123', 'Theman123', 'meme@gmail.com', '0937659866', '', '', 'adama', 'ease', '4', '', 3),
(63, 'me me', '100.png', '', 'Theman123', 'medeme@gmail.com', 'null', '', '', 'adama', 'ease', '4', '', 3),
(64, 'da da', '100.png', '', 'Theman123', 'dada@gmail.com', '123', '', '', 'adama', 'ease', '4', '', 3),
(65, 'dada dada', '100.png', '', 'Themanaad@amtired123', 'dadadada@gmail.com', 'NULL', '', '', 'adama', 'ease', '4', '', 3),
(66, 'wtf', '100.png', '123', 'Theman123', 'wtf@gmail.com', NULL, 'adfadf', '', 'adama', 'ease', '4', '', 3),
(67, 'adfad', 'adfad.png', '123', 'Theman123', 'fitsu123m@gmail.com', NULL, '', '', 'adama', 'ease', '4', '', 3),
(68, 'mimi sibatu', '100.png', NULL, 'Theman123', 'mimi.sibatu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(69, 'bebe bebe', '100.png', '123', 'Theman123', 'mimi@gmail.com', NULL, '', '', 'adama', 'ease', '4', '', 3),
(70, 'adfadf', 'adfadf.jpg', NULL, 'Themanaad123', 'abriloo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(71, 'ABC', 'ABC.jpg', '', 'Abc!2345', 'abc@gmail.com', NULL, '', '', 'adama', 'ease', '4', '', 3),
(72, 'tamirat lakew', '100.png', NULL, 'Themanaad@amtired123', 'it.tamirat.lakew@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(73, 'hilina', 'hilina.png', NULL, 'Theman123', 'haftu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(74, 'fitsum alemu', '100.png', NULL, 'Theman123', 'fitsum@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(75, 'mimi sibatu', 'mimisibatu.jpg', '123', 'Theman123', 'memesibatu@gmail.com', 'hhjhj', '', '', 'adama', 'ease', '4', '', 3),
(76, 'Md Masum', '100.png', NULL, 'Abc!23456', 'masum@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy status`
--
ALTER TABLE `buy status`
  ADD CONSTRAINT `buy status_ibfk_1` FOREIGN KEY (`request_Id`) REFERENCES `request` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy_request`
--
ALTER TABLE `buy_request`
  ADD CONSTRAINT `buy_request_ibfk_1` FOREIGN KEY (`category_Id`) REFERENCES `product_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `buy_request_ibfk_2` FOREIGN KEY (`sub_category_Id`) REFERENCES `product_sub_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_Id`) REFERENCES `product_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sub_category_Id`) REFERENCES `product_sub_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`user_email`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pics`
--
ALTER TABLE `product_pics`
  ADD CONSTRAINT `product_pics_ibfk_1` FOREIGN KEY (`product_Id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD CONSTRAINT `product_sub_category_ibfk_1` FOREIGN KEY (`category_Id`) REFERENCES `product_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`category_Id`) REFERENCES `product_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`sub_category_Id`) REFERENCES `product_sub_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `request_pic`
--
ALTER TABLE `request_pic`
  ADD CONSTRAINT `request_pic_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `buy_request` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sell status`
--
ALTER TABLE `sell status`
  ADD CONSTRAINT `sell status_ibfk_1` FOREIGN KEY (`product_Id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category_product_description`
--
ALTER TABLE `sub_category_product_description`
  ADD CONSTRAINT `sub_category_product_description_ibfk_1` FOREIGN KEY (`sub_category_ID`) REFERENCES `product_sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
