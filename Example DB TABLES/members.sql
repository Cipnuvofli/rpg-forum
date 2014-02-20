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
-- Database: `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` text NOT NULL,
  `Joindate` date NOT NULL,
  `Postcount` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Writeins` int(11) NOT NULL,
  `email` text NOT NULL,
  `birthday` date NOT NULL,
  `Likes received` int(11) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Salt` text NOT NULL,
  `Avatar` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Signature` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Joindate`, `Postcount`, `Password`, `Writeins`, `email`, `birthday`, `Likes received`, `Rank`, `Salt`, `Avatar`, `id`, `Signature`) VALUES
('JosephPenrod', '2013-05-01', 1, '$2a$05$/LFKW7J1spkDuiLEgV8fl.hgtFp969C.2wFzifnC5F62d4I/Ugkk6', 0, 'JosephPenrod@my.unt.edu', '0000-00-00', 0, 0, '/LFKW7J1spkDuiLEgV8fl', 'Images/Avatars/BaldursGate_D.jpg', 2, 'The Sound of a babbling brook makes me want to babble.'),
('Test', '2013-05-02', 1, '$2a$05$lWgltYwm44bqS4nGbA613.Ut14zaysBzFjb59tKi.gLDBvT1ng4ne', 0, 'Test@test.com', '2001-01-01', 0, 2, 'lWgltYwm44bqS4nGbA613', 'Images/Avatars/Frank_Horrigan.jpg', 3, ''),
('Blarg', '2013-10-08', 0, '$2a$05$ZMy5eTSg7MI6NewPa08vT.Ae722LPmFXuSoVGA34k1vku5NiOzGU.', 0, 'test@test.com', '0000-00-00', 0, 2, 'ZMy5eTSg7MI6NewPa08vT', 'images/avatars/stratos.jpg', 4, ''),
('Blarg', '2013-12-05', 0, '$2a$05$sf2zNDqAMgleDfxuEyONp.00R9C0ZOURYoInOBN.MrqtGVxhUVYKe', 0, 'blarg@blarg.com', '0000-00-00', 0, 2, 'sf2zNDqAMgleDfxuEyONp', 'images/avatars/1.jpg', 5, ''),
('Blargi', '2013-12-05', 0, '$2a$05$hG8mSPJRWOOIdQmV/fAeK./2OQZ5Kid0Lc8T1wT7vjHMvCo9FRB6y', 0, 'Blarg1@blarg.com', '2001-01-01', 0, 2, 'hG8mSPJRWOOIdQmV/fAeK', 'images/avatars/1.jpg', 6, ''),
('Two', '2013-12-05', 0, '$2a$05$18HJ9j4l04X7Z2KdPrOuO.a9uHkZwDYuyLggdzK3TevWKr2sCC0I6', 0, '2@2.com', '2002-02-02', 0, 3, '18HJ9j4l04X7Z2KdPrOuO', 'images/avatars/1.jpg', 7, ''),
('Three', '2013-12-05', 0, '$2a$05$sfebEPjsSfOJT/1SZA9W0.uKhibnClnWcVEJ8.GZc42AuS/CR74wO', 0, '3@3.com', '0000-00-00', 0, 2, 'sfebEPjsSfOJT/1SZA9W0', 'images/avatars/1.jpg', 8, ''),
('Four', '2013-12-05', 0, '$2a$05$Ku5mCEO.8EUanrtoxqO/W.B/5DmSiPMxXqtiTZAv6RDHdkX22dqim', 0, '4@4.com', '1998-05-01', 0, 2, 'Ku5mCEO.8EUanrtoxqO/W', 'images/avatars/1.jpg', 9, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
