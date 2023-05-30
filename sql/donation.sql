-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 07:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `gender` enum('Female','Male','other') NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `no_of_donated_books` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`user_id`, `name`, `email`, `contact`, `occupation`, `gender`, `address`, `pincode`, `no_of_donated_books`) VALUES
(7, 'shyam', 'shyam@gmail.com', '8767897588', '', 'Male', 'mainpur', '667383', 2),
(8, 'hey ', 'this@isatest.com', '87987987', 'ignore', 'Female', 'lets c', '9797', 14),
(10, 'sandy', 'sandy@gmail.com', '8745643744', 'who care', 'Female', 'lost', '98776', 87),
(11, 'sony', 'sony@gmail.com', '8977667578', 'student', 'Female', 'land', '986899', 78),
(13, 'meera', 'meera@mail.com', '787865698', 'teacher', 'Female', 'hold', '87896', 43),
(16, 'rekha', 'rekha@gmail.com', '876665546', 'busy', 'Female', 'agra', '676879', 34),
(18, 'priya', 'priya@gmail.com', '876579966', 'student', 'Female', 'patna', '998778', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
