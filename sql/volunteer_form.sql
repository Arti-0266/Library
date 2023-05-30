-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 07:56 AM
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
-- Table structure for table `volunteer_form`
--

CREATE TABLE `volunteer_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `gender` enum('Female','Male','Other') NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `do_you_have_any_past_volunteering_experience` varchar(100) NOT NULL,
  `how_would_you_like_to_help_us` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_form`
--

INSERT INTO `volunteer_form` (`id`, `name`, `email`, `contact`, `occupation`, `address`, `pincode`, `gender`, `qualification`, `do_you_have_any_past_volunteering_experience`, `how_would_you_like_to_help_us`) VALUES
(2, 'razi', 'razi@gmail.com', '6677755581', 'student', 'kokar', '776677', 'Male', 'UG', '6 month', 'like to help in any way'),
(3, 'sneha', 'sneha@gmail.com', '9911001122', 'teacher', 'ramghar', '908978', 'Female', 'BBA', 'no', 'any kind of support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
