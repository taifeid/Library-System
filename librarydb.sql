-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 04:40 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

-- CREATE TABLE IF NOT EXISTS `people` (
----   `id` varchar(11) NOT NULL AUTO_INCREMENT,
--   `ISBN` varchar(11) ,
--   `BookName` varchar(30) NOT NULL,
--   `Publisher` varchar(30) NOT NULL,
--   `Price` varchar(30) NOT NULL,
--   `Borrowing date` varchar(30) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
-- Table structure for table `Books`
--


--
-- Dumping data for table `books`
--
INSERT INTO `books` (`ISBN`, `book_name`, `price`, `borrowing_date`,`Comment`,`member_name`,`member_email`) VALUES
('654321', 'Calculus',  120.75, '20-11-2022','work hard!','Taif BinEid' ,'taif@mail.com'),
('123456', 'English-101', 150.75, '22-11-2022','','Norah Ahmad' ,'norah@mail.com' ),
('741852', 'Clean Code',  170.75, '11-11-2022', 'my favorite book','Saleh Mohammed' ,'saleh@mail.com'),
('852741', 'PHP and MySQL',  88.50,'15-01-2022','I recommend to read this book','Abdulaziz rashed' ,'abdulaziz@mail.com'),
('297134', 'Design pattren', 90.95,'06-06-2022','Laila Mohammed' , 'I like it!','Laila@mail.com'),
('789123', 'Coders at work', 144.44,'20-05-2022', 'Intersted!!','Faisel Abdullah' ,'Faisel@mail.com');

--
