-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2014 at 05:08 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `threads`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `threadid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` longtext NOT NULL,
  `poster` text NOT NULL,
  `Story` tinyint(1) NOT NULL,
  PRIMARY KEY (`postid`),
  UNIQUE KEY `postid` (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `threadid`, `timestamp`, `content`, `poster`, `Story`) VALUES
(1, 1, '0000-00-00 00:00:00', 'Blah', 'JosephPenrod', 1),
(2, 2, '0000-00-00 00:00:00', 'HAUU', 'JosephPenrod', 0),
(3, 1, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(4, 1, '0000-00-00 00:00:00', '[x]UPDATE!', 'JosephPenrod', 1),
(5, 1, '0000-00-00 00:00:00', 'Not an update', 'JosephPenrod', 0),
(6, 3, '0000-00-00 00:00:00', 'fdsgdsaedfasf', 'JosephPenrod', 1),
(7, 4, '0000-00-00 00:00:00', 'SPAM', 'JosephPenrod', 0),
(8, 1, '0000-00-00 00:00:00', 'FSGSDS', 'Test', 0),
(9, 2, '0000-00-00 00:00:00', 'SPAM', 'JosephPenrod', 0),
(10, 1, '0000-00-00 00:00:00', 'Ding', 'JosephPenrod', 0),
(11, 1, '0000-00-00 00:00:00', 'Bonk', 'JosephPenrod', 0),
(12, 1, '0000-00-00 00:00:00', 'Ahoy', 'JosephPenrod', 0),
(13, 1, '0000-00-00 00:00:00', 'BONKBONK', 'JosephPenrod', 0),
(14, 1, '0000-00-00 00:00:00', 'ASDFG', 'JosephPenrod', 1),
(15, 1, '0000-00-00 00:00:00', 'FDSF', 'JosephPenrod', 0),
(16, 1, '0000-00-00 00:00:00', 'FSKLFJS:LIER', 'JosephPenrod', 0),
(17, 1, '0000-00-00 00:00:00', 'BON', 'JosephPenrod', 0),
(18, 1, '0000-00-00 00:00:00', 'Test', 'Test', 0),
(21, 5, '0000-00-00 00:00:00', 'TY', 'JosephPenrod', 0),
(23, 5, '2013-12-05 11:20:21', 'The sound of a babbling brook makes me want to babble', 'Test', 0),
(24, 6, '0000-00-00 00:00:00', 'HONK', 'JosephPenrod', 1),
(38, 17, '0000-00-00 00:00:00', '', 'JosephPenrod', 0),
(39, 18, '0000-00-00 00:00:00', '', '', 0),
(48, 0, '0000-00-00 00:00:00', 'TEST', 'JosephPenrod', 0),
(49, 0, '0000-00-00 00:00:00', 'adfaewrafd', 'JosephPenrod', 0),
(50, 0, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(51, 19, '0000-00-00 00:00:00', 'BONKBONK', 'JosephPenrod', 1),
(52, 19, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(53, 20, '0000-00-00 00:00:00', 'AHOY', 'JosephPenrod', 1),
(54, 20, '0000-00-00 00:00:00', 'LOCK', 'JosephPenrod', 1),
(55, 21, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(56, 20, '0000-00-00 00:00:00', 'FDSS', 'JosephPenrod', 1),
(57, 23, '0000-00-00 00:00:00', 'LOCKLOCK', 'JosephPenrod', 1),
(60, 5, '0000-00-00 00:00:00', 'INSERT LOCK REASON HERE', 'JosephPenrod', 0),
(65, 25, '2013-12-05 17:07:29', 'BLARG', 'Three', 0),
(67, 26, '2013-12-05 16:34:04', 'Ahoy!', 'Four', 0),
(70, 0, '0000-00-00 00:00:00', 'STR\r\n\r\nINT\r\nWIS', 'Four', 0),
(71, 0, '0000-00-00 00:00:00', 'TEST', 'Four', 0),
(75, 26, '0000-00-00 00:00:00', 'HONHON', 'Four', 0),
(76, 24, '0000-00-00 00:00:00', 'TEst', 'JosephPenrod', 0),
(77, 24, '0000-00-00 00:00:00', 'Blah', 'JosephPenrod', 0),
(78, 27, '0000-00-00 00:00:00', 'Blank Character Sheet', 'JosephPenrod', 0),
(79, 0, '0000-00-00 00:00:00', 'Blah', 'JosephPenrod', 0),
(80, 28, '0000-00-00 00:00:00', 'Blank Character Sheet', 'JosephPenrod', 0),
(82, 29, '0000-00-00 00:00:00', 'Blank Character Sheet', 'JosephPenrod', 0),
(83, 25, '0000-00-00 00:00:00', 'STR DEX CON INT WIS CHA', 'Three', 0),
(84, 30, '0000-00-00 00:00:00', 'Blank Character Sheet', 'Three', 0),
(85, 24, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(86, 31, '0000-00-00 00:00:00', 'Blank Character Sheet', 'JosephPenrod', 0),
(87, 24, '0000-00-00 00:00:00', 'Ahoy', 'JosephPenrod', 0),
(88, 24, '0000-00-00 00:00:00', 'Ahoy2', 'JosephPenrod', 0),
(89, 4, '0000-00-00 00:00:00', 'Test reply', 'JosephPenrod', 0),
(90, 4, '0000-00-00 00:00:00', 'Test reply 2', 'JosephPenrod', 0),
(91, 32, '0000-00-00 00:00:00', 'Blank Character Sheet', 'Test', 0),
(92, 19, '0000-00-00 00:00:00', 'STORYPOST', 'JosephPenrod', 1),
(93, 6, '0000-00-00 00:00:00', 'Blarg', 'Test', 0),
(94, 4, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(95, 4, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(96, 4, '0000-00-00 00:00:00', 'Test', 'JosephPenrod', 0),
(97, 4, '0000-00-00 00:00:00', 'SPAMSPAM', 'Test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postdate` date NOT NULL,
  `title` text NOT NULL,
  `originalposter` text NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `genre` text NOT NULL,
  `postcount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `postdate`, `title`, `originalposter`, `locked`, `genre`, `postcount`) VALUES
(4, '2013-07-10', 'SPAMSPAM', 'JosephPenrod', 0, 'Generic', 8),
(5, '2013-12-05', 'BLARG', 'JosephPenrod', 1, 'Quest', 6),
(6, '2013-12-05', 'HONK', 'JosephPenrod', 0, 'Fiction', 1),
(19, '2013-12-05', 'BONK', 'JosephPenrod', 0, 'Quest', 2),
(23, '2013-12-05', 'LOCKDEMO', 'JosephPenrod', 1, 'Quest', 0),
(24, '2013-12-05', 'CSheets', 'JosephPenrod', 0, 'CharacterSheets', 17),
(25, '2013-12-05', 'CSheets', 'Three', 0, 'CharacterSheets', 17),
(26, '2013-12-05', 'CSheets', 'Four', 0, 'CharacterSheets', 17),
(27, '2013-12-05', 'CSheets', 'JosephPenrod', 0, 'CharacterSheets', 17),
(28, '2013-12-05', 'CSheets', 'JosephPenrod', 0, 'CharacterSheets', 17),
(29, '2013-12-05', 'CSheets', 'JosephPenrod', 0, 'CharacterSheets', 17),
(30, '2013-12-05', 'CSheets', 'Three', 0, 'CharacterSheets', 17),
(31, '2013-12-05', 'CSheets', 'JosephPenrod', 0, 'CharacterSheets', 17),
(32, '2013-12-05', 'CSheets', 'Test', 0, 'CharacterSheets', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
