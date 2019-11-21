-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 03:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tv`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_id`, `password`, `age`, `date`) VALUES
(1, 'vedanth', 'hiiamvedanth@gmail.com', '1234567890', 20, '0000-00-00'),
(8, 'surya', 'surya@gmail.com', '123', 20, '0000-00-00'),
(11, 'teju', 'tejnishreddy168@gmail.com', '56789', 20, '0000-00-00'),
(19, 'sumukh', 'sumukh@gmail.com', '123', 20, '0000-00-00'),
(22, 'shreesha', 'sd@sd', '123', 20, '2017-11-22'),
(23, 'rahul', 'rahul@gmail.com', '123', 20, '2017-11-24'),
(24, 'spoorthi', 'spoo@gmail.com', '123', 20, '2017-11-24');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `date` BEFORE INSERT ON `users` FOR EACH ROW SET new.date=CURRENT_DATE
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
