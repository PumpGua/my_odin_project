-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2019 at 09:44 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodify`
--

-- --------------------------------------------------------

--
-- Table structure for table `calories`
--

CREATE TABLE `calories` (
  `id` int(11) NOT NULL,
  `foodid` varchar(233) NOT NULL,
  `name` varchar(333) NOT NULL,
  `calories` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calories`
--

INSERT INTO `calories` (`id`, `foodid`, `name`, `calories`) VALUES
(1, '345dwef32rf3sfsfd', 'lays waffers', '180'),
(2, 'du8sd82hdsjdha', 'balaji waffers', '165'),
(3, 'sf3tfsf3fsadf3s', 'parleg biscuit', '260'),
(4, 'j8o5i7jtyhdfgerge', 'krackjack biscuit', '300'),
(5, 'bisg8s8gd8s88', 'maggi noodles', '345'),
(6, 'sf939whf9sdfjs', 'pepsi can', '156');

-- --------------------------------------------------------

--
-- Table structure for table `intakes`
--

CREATE TABLE `intakes` (
  `id` int(11) NOT NULL,
  `intakeid` varchar(122) NOT NULL,
  `calorieid` varchar(122) NOT NULL,
  `uid` varchar(122) NOT NULL,
  `date` varchar(122) NOT NULL,
  `time` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intakes`
--

INSERT INTO `intakes` (`id`, `intakeid`, `calorieid`, `uid`, `date`, `time`) VALUES
(54, 'RIevEdk4zrJ1gM', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '08:31:53AM'),
(55, 'lJNIO3WEZH5nXq', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '08:31:53AM'),
(56, 'l4rorJZnrW4v5d', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '08:31:53AM'),
(57, 'mGkOrqlcYDj2Jt', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '08:31:53AM'),
(58, 'yTBmDsYmCqusLh', 'du8sd82hdsjdha', 'bSYfMmW4tWmPN6', '13/10/2019', '08:33:44AM'),
(60, 'jOiaFafkw7jU65', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '09:33:34AM'),
(61, 'yseZFr4WTzxIzA', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '09:33:34AM'),
(62, '2Be4kV5VlZCTIx', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '09:33:34AM'),
(63, 'PT4WyGIpvMEGjZ', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '09:33:34AM'),
(70, 'GJqeBchEIKwvBb', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(71, 'OpW1OrADNZWGhn', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(72, 'xKkbmqzZV73Seh', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(73, 'vZoM42Y4iZSjM9', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(74, '2GGCbvuqUF1F9d', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(75, 'GJAiSWW5NxmSl5', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(76, '8LFgrrSSpEwLmz', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(77, 'nJlc6vYgR6zLOv', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(78, 'nEFz4xg9VVsxxt', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(79, 'PvV8YctY12NWGl', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(80, '42g3KbVcHCJ9WU', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(81, 'vi7P1a3Jh3owb7', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(82, 'k8VdTcWU9EN4T8', '345dwef32rf3sfsfd', '2RIqL6yHWWwdqI', '13/10/2019', '10:31:07AM'),
(83, 'fBxK3WPZ2zpptq', 'sf939whf9sdfjs', '2RIqL6yHWWwdqI', '13/10/2019', '10:32:59AM'),
(84, '2STWLdvnLm7Azz', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(85, 'I8LNjkdvSXmtuc', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(86, 'JLdMWC2Uxl5L6K', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(87, 'rNmkYGNW2JWvJs', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(88, 'ZUWE6u6OKgcfm6', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(89, '9WrJzFczMbdMWm', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(90, '7Nedqwu2V9MDWx', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(91, 'yEOBqfPoW49kSd', 'sf3tfsf3fsadf3s', 'bSYfMmW4tWmPN6', '13/10/2019', '10:48:42AM'),
(92, '1CnxAURLJ7nDth', 'sf3tfsf3fsadf3s', 'bSYfMmW4