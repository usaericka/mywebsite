-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 08:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(35, 'dsa', 'dsa@gmail.com', 'dasd'),
(36, 'dsa', 'dsa@gmail.com', 'dasd'),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '[value-2]', '[value-3]', '[value-4]'),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', ''),
(62, '', '', ''),
(63, '', '', ''),
(64, '', '', ''),
(65, '', '', ''),
(66, '', '', ''),
(67, '', '', ''),
(68, 'Ericka Faye Tolentino', 'erickafayetolentino@yahoo.com', ' dadwdqds'),
(69, 'qwq', 'dsa@gmail.com', ' Hello'),
(70, 'qwq', 'dsa@gmail.com', ' Hello'),
(71, 'dasd', 'dsa@gmail.com', ' dadw'),
(72, 'dasd', 'dsa@gmail.com', ' dadw'),
(73, 'asd', 'erickafayetolentino@yahoo.com', ' dasdw'),
(74, 'asd', 'eftolentino@usa.edu.ph', ' sadw'),
(75, 'sa', 'erickafayetolentino@yahoo.com', ' dasdwds'),
(76, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' aefasde'),
(77, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' aefasde'),
(78, 'qwq', 'dsa@gmail.com', ' Hello'),
(79, '', '', ' '),
(80, '', '', ' '),
(81, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' Hello'),
(82, 'sadad', 'dsa@gmail.com', ' dadwdsa'),
(83, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' Hello'),
(84, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' Hello'),
(85, 'mary', 'dsa@gmail.com', ' laskdds'),
(86, 'mary', 'dsa@gmail.com', ' laskdds'),
(87, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' Hello'),
(88, 'Jerhel', 'dsa@gmail.com', ' lasda'),
(89, 'Ericka Faye Tolentino', 'dsa@gmail.com', ' aksndkadsad '),
(90, 'Max', 'dsa@gmail.com', ' snkasnc '),
(91, 'Max', 'dsa@gmail.com', ' snkasnc '),
(92, 'as', 'dsa@gmail.com', ' sa'),
(93, 'as', 'dsa@gmail.com', ' sa'),
(94, 'as', 'dsa@gmail.com', ' dasdwds'),
(95, 'as', 'dsa@gmail.com', ' dasdwds'),
(96, 'dasd', 'dsd@gmail.com', ' dsada  wd'),
(97, 'dasd', 'dsd@gmail.com', ' dawdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
