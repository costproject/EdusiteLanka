-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2023 at 10:00 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `teach_user_form2`
--

DROP TABLE IF EXISTS `teach_user_form2`;
CREATE TABLE IF NOT EXISTS `teach_user_form2` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `ProLink` varchar(100) DEFAULT 'sample.php',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teach_user_form2`
--

INSERT INTO `teach_user_form2` (`id`, `name`, `email`, `subject`, `password`, `image`, `info`, `ProLink`) VALUES
(7, 'Sandun Siwantha', 'science@gmail.com', 'SCIENCE', '202cb962ac59075b964b07152d234b70', 'img1.jpg', 
  'I\'m a dedicated and experienced Science teacher who is passionate about inspiring students to pursue 
  their interests in the natural world. With a Bachelor\'s degree in Science and a teaching certification, 
  Sandun has a strong foundation in the subject matter and pedagogical techniques required to effectively teach 
  Science. He has several years of experience teaching students of various levels and backgrounds, and is skilled 
  in creating engaging lesson plans and hands-on activities that promote student learning and curiosity.', 'sample.php'),
(8, 'P. Sadhushan', 'math@gmail.com', 'MATH', '202cb962ac59075b964b07152d234b70', 'img2.jpg', 'I\'m a highly skilled 
  and experienced Mathematics teacher who is passionate about helping students develop their mathematical thinking 
  and problem-solving skills. With a Bachelor\'s degree in Mathematics and a teaching certification, Sadhushan has a 
  strong foundation in the subject matter and pedagogical techniques required to effectively teach Mathematics. He has 
  several years of experience teaching students of various levels and backgrounds, and is skilled in creating engaging 
  lesson plans and activities that promote student learning and curiosity.', 'PSadhushan.php'),
(9, 'Senuri Kavindya', 'Eng@gmail.com', 'ENGLISH', '202cb962ac59075b964b07152d234b70', 'img3.jpg', 'I\'m a dynamic and 
  enthusiastic English teacher who is dedicated to helping students develop their language skills and become effective 
  communicators. With a Bachelor\'s degree in English and a teaching certification, Senuri has a strong foundation in 
  the subject matter and pedagogical techniques required to effectively teach English. She has several years of experience 
  teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and activities that
   promote student learning and foster a love of language.', 'sample.php'),
(10, 'Muditha Udayangani', 'ict@gmail.com', 'ICT', '202cb962ac59075b964b07152d234b70', 'img4.jpg', 'I\'m a knowledgeable 
  and experienced ICT teacher who is passionate about helping students develop their technical skills and become effective
   problem-solvers. With a Bachelor\'s degree in Computer Science and a teaching certification, Muditha has a strong foundation 
   in the subject matter and pedagogical techniques required to effectively teach ICT. She has several years of experience 
   teaching students of various levels and backgrounds, and is skilled in creating engaging lesson plans and activities 
   that promote student learning and creativity.', 'sample.php');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(5, 'Student Name', 'std@gmail.com', '202cb962ac59075b964b07152d234b70', '003.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
