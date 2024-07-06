-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 04:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_of_science`
--

-- --------------------------------------------------------

--
-- Table structure for table `sing_up`
--

CREATE TABLE `sing_up` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `level` int(3) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sing_up`
--

INSERT INTO `sing_up` (`id`, `first_name`, `last_name`, `email`, `phone`, `level`, `password`) VALUES
(1, 'eman', 'haggag', 'eh8925766@gmail.com', '01014455597', 1, '$2y$10$lr8pnEaqCU58R2.9iHEeeOKMYD4BovOtL/nZJ0RIKXpNqTu5BhZ1K'),
(2, 'Abdo', 'Haggag', 'abdohaggag233@gmail.com', '12456789562', 3, '$2y$10$vaAmbdsClsPTQNfLfW2YdOYnHhYJ8SaYuqxr/FR.7tLDY8abxVy.S'),
(3, 'eman', 'haggag', 'ehaggag30@gmail.com', '01014455597', 2, '$2y$10$2e0xBUN2fyENH4U6Juum4u0SIVCpM0M4wB9wZs0AJrpn4BD9al442'),
(4, 'eman', 'haggag', 'eh8925766@gmail.com', '01014455597', 1, '$2y$10$cLVi0YNMN5/NP6qkx6Jm.esZmWo.FGBXs3i0JUWB5y9jvRfLIsP6e'),
(6, 'Abdo', 'haggag', 'ehaggag30@gmail.com', '01014455597', 1, '$2y$10$alTB5qUrOzd.VFxvg4LuVebiVz70fzAc5gKFAYz5tUuKSDhqgkeFi'),
(7, 'eman', 'haggag', 'eh8925766@gmail.com', '01014455597', 1, '$2y$10$/YdLbnVKLaQvhuJHtmHAHeX1WtpUr7ClU6bCQp.a7DgxQ.5JcZ7K.'),
(8, 'eman', 'haggag', 'eman.haggag.315@gb.com', '01024623586', 3, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sing_up`
--
ALTER TABLE `sing_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sing_up`
--
ALTER TABLE `sing_up`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
