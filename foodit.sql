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
(57, 'mGkOrqlcYDj2Jt', 'sf3tfsf3fsad