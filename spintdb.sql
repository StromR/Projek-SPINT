-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 04:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spintdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `filterumur` (IN `date1` DATE, IN `date2` DATE)  SELECT * FROM user WHERE birthday BETWEEN date1 AND date2$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TambahSignUp` (`firstname` VARCHAR(100), `lastname` VARCHAR(100), `username` VARCHAR(100), `username2` VARCHAR(100), `birthday` DATE, `gender` VARCHAR(100), `game` VARCHAR(100), `mmr` INT, `email` VARCHAR(100), `email2` VARCHAR(100), `password` VARCHAR(100), `password2` VARCHAR(100))  BEGIN
INSERT INTO user (firstname,lastname,username,username2,birthday,gender,game, mmr,email,email2,password,password2) VALUES (firstname,lastname,username,username2,birthday,gender,game, mmr,email,email2,password,password2);

END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `birthdayfilter` (`date1` DATE, `date2` DATE) RETURNS DATE RETURN (SELECT birthday FROM user WHERE birthday > @date1 AND birthday < @date2)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(26, '3', 'upload/valorant-ace.png', 'Aku kemarin main valo dapet ACE dong, tapi lawannya goldly', '1622642405'),
(28, '16', 'upload/savage jilong.jpg', 'asik dapet savage', '1622643010'),
(31, '1', 'upload/5 buletan.png', 'Op banget sih ini hero', '1622646512'),
(32, '1', 'upload/WANEELLA pixel art.gif', 'Aestetik', '1622646577');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `game` varchar(100) NOT NULL,
  `mmr` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `game`, `mmr`, `email`, `email2`, `password`, `password2`, `profile_picture`) VALUES
(1, 'admin', '1', 'admin1', 'admin1', '2000-11-01', 'male', 'Mobile Legends', 500, 'admin@spint.com', 'admin@spint.com', 'admin', 'admin', 'upload/bg-login.png'),
(2, 'admin', '2', 'admin2', 'admin2', '2001-02-01', 'female', 'Dota 2', 1230, 'admin2@spint.com', 'admin2@spint.com', '12345', '12345', ''),
(3, 'Lemon', 'Nilo', 'lemonilo', 'lemonilo', '1999-10-10', 'male', 'Mobile Legends', 90, 'lemonilo@gmail.com', 'lemonilo@gmail.com', '1234', '1234', 'upload/029587800_1552372394-LEMON_RRQ.jpg'),
(16, 'Bocil', 'Ajaib', '1234', '1234', '2004-12-23', 'male', 'Valorant', 1000, 'bovil@gmail.com', 'bovil@gmail.com', '123', '123', 'upload/boyfriend ; sunoo.jpg'),
(17, 'test', 'test', 'wanieun', 'wanieun', '1911-01-01', 'male', 'Mobile Legends', 1000, 'test@gmail.com', 'test@gmail.com', 'naonsia', 'naonsia', '');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `copy_user_data` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO user_data (email, date) VALUES
(NEW.email, CURRENT_TIMESTAMP())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `data_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`data_id`, `email`, `date`) VALUES
(1, 'joji@spint.com', '2021-05-28'),
(2, 'bovil@gmail.com', '2021-06-01'),
(3, 'admin@spint.com', '2021-06-01'),
(4, 'admin2@spint.com', '2021-06-01'),
(5, 'lemonilo@gmail.com', '2021-06-01'),
(6, 'bovil@gmail.com', '2021-06-02'),
(7, 'bovil@gmail.com', '2021-06-02'),
(8, 'bovil@gmail.com', '2021-06-02'),
(9, 'bovil1@gmail.com', '2021-06-02'),
(10, 'bovil11@gmail.com', '2021-06-02'),
(11, 'bovil@gmail.com', '2021-06-02'),
(12, 'test@gmail.com', '2021-06-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
