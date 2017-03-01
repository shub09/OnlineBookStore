-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2013 at 08:57 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookdb`
--
CREATE DATABASE IF NOT EXISTS `bookdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookdb`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `isbn_no` int(11) NOT NULL,
  `category` varchar(12) NOT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `isbn_no` (`isbn_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `author`, `price`, `isbn_no`, `category`) VALUES
(1, '1984 A Novel', 'George Orwell', 550, 10001, 'fiction'),
(2, 'The Da Vinci Code', 'Don Brown', 430, 10002, 'fiction'),
(3, 'Life Of Pi', 'Yann Martel', 450, 10003, 'fiction'),
(4, 'The War Of Worlds', 'H. G. Wells', 650, 10004, 'fiction'),
(5, 'The Kite Runner', 'Khaled Hosseini', 200, 10005, 'fiction'),
(6, 'The House of Hades', 'Rick Riordan', 600, 10006, 'fiction'),
(7, 'Midnight''s Children', 'Salman Rushdie', 500, 10007, 'fiction'),
(8, 'The Hobbit', 'J. R. R. Tolkien', 460, 10008, 'fiction'),
(9, 'Contact', 'Carl Sagan', 480, 10009, 'fiction'),
(10, 'Chanakya''s Chant', 'Ashwin Sanghi', 700, 10010, 'fiction'),
(11, 'The Great Indian Novel', 'Shashi Tharoor', 299, 10011, 'fiction'),
(12, 'The Immortals of Meluha', 'Amish Tripathi', 450, 10012, 'fiction'),
(13, 'Wings of Fire', 'APJ Abdul Kalam', 450, 20013, 'nonfiction'),
(14, 'A Brief History of Time', 'Stephen Hawking', 500, 20014, 'nonfiction'),
(15, 'Eat, Pray, Love', 'Elizabeth Gilbert', 600, 20015, 'nonfiction'),
(16, 'Into the Wild', 'Jon Krakauer', 350, 20016, 'nonfiction'),
(17, 'On Writing', 'Stephen King', 400, 20017, 'nonfiction'),
(18, 'Outliers: The Story of Success', 'Malcolm Gladwell', 500, 20018, 'nonfiction'),
(19, 'Word Power Made Easy', 'Norman Lewis', 200, 30019, 'technical'),
(20, 'Data Structures and Algorithms', 'Narasimha Karumanchi', 385, 30020, 'technical'),
(21, 'Six Thinking Hats', 'Edward De Bono', 550, 30021, 'technical'),
(22, 'The Speed of Time', 'Sharad B. Nalawade', 250, 30022, 'technical'),
(23, 'Java: The Complete Reference', 'Herbert Schildt', 370, 30023, 'technical'),
(24, 'Linux Kernel Development', 'Robert Love', 430, 30024, 'technical');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL DEFAULT '',
  `lname` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Shishir', 'Ambastha', 'shish@gmail.com', 'nebula');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
