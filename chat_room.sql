-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 07:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat_room`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_info`
--

CREATE TABLE IF NOT EXISTS `chat_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username1` varchar(20) NOT NULL,
  `Username2` varchar(20) NOT NULL,
  `Message` varchar(150) DEFAULT NULL,
  `Time` varchar(10) DEFAULT NULL,
  `Status` tinyint(4) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `chat_info`
--

INSERT INTO `chat_info` (`Id`, `Username1`, `Username2`, `Message`, `Time`, `Status`, `Email`, `Password`) VALUES
(2, 'sapumal', '', NULL, NULL, 0, 'sappa@gmail.com', 'aaa'),
(3, 'sameera', '', NULL, NULL, 0, 'sameera@gmail.com', 'sss'),
(4, 'aaa', '', NULL, NULL, 1, 'aaa@aaa', 'aaa'),
(5, 'sss', '', NULL, NULL, 1, 'sss@sss', 'sss'),
(6, 'qqq', '', NULL, NULL, 0, 'qqqq@qq', 'qqq'),
(7, '123', '', NULL, NULL, 1, '123@123', '123'),
(8, '123', '', NULL, NULL, 1, '123@123', '123'),
(9, 'www', '', NULL, NULL, 1, 'ww@ww', 'ww'),
(10, 'mm', '', NULL, NULL, 0, 'mm@mm', 'mm'),
(11, 'dd', '', NULL, NULL, 1, 'dd@dd', 'dd'),
(12, 'sameera', 'sapumal', 'hi machan', '3:10pm', 0, '', ''),
(13, 'qqq', '', NULL, NULL, 0, 'qqq@q', 'qqq'),
(14, 'sameera', 'sapumal', 'hi machow', '9:51am', 0, '', ''),
(15, 'sameera', 'sapumal', 'fsdlfsldk', '9:51am', 0, '', ''),
(16, 'sapumal', 'sameera', 'sdaadhjahb7', '9:52am', 0, '', ''),
(17, 'sapumal', 'sameera', 'dsjdhsajdh', '9:52am', 0, '', ''),
(18, 'sameera', 'aaa', 'sdkajdhskjadha', '10:30am', 0, '', ''),
(19, 'sameera', 'sapumal', 'hi machan', '10:32am', 0, '', ''),
(20, 'sameera', 'sapumal', 'dshgshdg', '10:34am', 0, '', ''),
(21, 'sameera', 'aaa', ' =8 ', '4:06pm', 0, '', ''),
(22, 'sameera', 'aaa', ' B-) ', '4:06pm', 0, '', ''),
(23, 'sameera', 'aaa', '123', '4:06pm', 0, '', ''),
(24, 'sapumal', 'aaa', ' I-)  X(  X(  &lt;3_  &lt;3_  :Z  :Z  :Z ', '1:16am', 0, '', ''),
(25, 'sapumal', 'aaa', 'ado', '1:16am', 0, '', ''),
(26, 'sapumal', 'aaa', 'hi', '1:17am', 0, '', ''),
(27, 'sapumal', 'aaa', 'dds', '1:17am', 0, '', ''),
(28, 'sameera', 'aaa', ' B-)  B-)  B-) ', '11:54pm', 0, '', ''),
(29, 'sameera', 'aaa', ' &gt;:P ', '11:54pm', 0, '', ''),
(30, 'sameera', 'aaa', 'sameera madushan', '11:55pm', 0, '', ''),
(31, 'sameera', 'aaa', 'dasd', '11:55pm', 0, '', ''),
(32, 'sameera', 'aaa', 'dasdsdsad', '11:55pm', 0, '', ''),
(33, 'Sameera', '', NULL, NULL, 0, 'sameera@sada.com', 'sss'),
(34, 'Sameera', '', NULL, NULL, 1, 'sameera@gmail.com', '321321321');

-- --------------------------------------------------------

--
-- Table structure for table `emoticons`
--

CREATE TABLE IF NOT EXISTS `emoticons` (
  `chars` varchar(10) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`chars`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emoticons`
--

INSERT INTO `emoticons` (`chars`, `image`) VALUES
('8-}', 'mad.png'),
(':(', 'sad.png'),
(':)', 'happy.png'),
(':-&', 'sick.png'),
(':-)', 'smiley.png'),
(':-*', 'moa.png'),
(':-/', 'not_sure.png'),
(':-8', 'wink.png'),
(':-<	', 'depressed.png'),
(':-?', 'confused.png'),
(':-B', 'nerd.png'),
(':-D', 'laugh.png'),
(':-II', 'teeth.png'),
(':-oo', 'scream.png'),
(':-O_', 'surprised.png'),
(':-P', 'tongue.png'),
(':-Y', 'yummi.png'),
(':1', 'cry.png'),
(':5>', 'shy.png'),
(':x', 'flirt.png'),
(':Z', 'crazy.png'),
('<3<3', 'inlove.png'),
('<3_', 'heart.png'),
('=8', 'facepalm.png'),
('>:P', 'devil.png'),
('B-)', 'cool.png'),
('I-)', 'sleeping.png'),
('X(', 'angry.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
