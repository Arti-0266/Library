-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 07:55 AM
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
-- Table structure for table `request_books`
--

CREATE TABLE `request_books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `institute_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` enum('Female','Male','Other') NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `type_of_books` varchar(50) NOT NULL,
  `total_no_of_books` varchar(20) NOT NULL,
  `purpose_of_books` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_books`
--

INSERT INTO `request_books` (`id`, `name`, `institute_name`, `email`, `contact`, `gender`, `address`, `pincode`, `occupation`, `type_of_books`, `total_no_of_books`, `purpose_of_books`) VALUES
(1, 'Puja Kumari', 'RU', 'puja@gmail.com', '5463723929', 'Female', 'Goa', '878890', 'student', 'eductional', '10', 'for study'),
(2, 'Amar ', 'Metas', 'aman@gmail.com', '9182734657', 'Male', 'mumbai', '67845', 'teacher', 'english', '5', 'for student'),
(3, 'neetu', 'name ', 'neetu@mail.com', '98984565656', 'Female', 'name is adddress', '8987946', 'occupation', 'litrature', '100', 'no purpose bus u hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_books`
--
ALTER TABLE `request_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_books`
--
ALTER TABLE `request_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
