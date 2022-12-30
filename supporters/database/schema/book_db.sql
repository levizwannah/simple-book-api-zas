-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_serialNumber` varchar(50) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_pageCount` int(10) UNSIGNED NOT NULL,
  `book_createdAt` datetime DEFAULT current_timestamp(),
  `book_updatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_serialNumber`, `book_author`, `book_pageCount`, `book_createdAt`, `book_updatedAt`) VALUES
(2, 'Book 2', '123456B', 'Levi Author Kamara', 1200, '2022-12-29 16:41:11', '2022-12-29 16:41:11'),
(3, 'Spider Farm', '123456BC', 'Levi Author Kamara', 1200, '2022-12-29 16:41:25', '2022-12-29 16:41:55'),
(4, 'Marked on Head', '123456BCA', 'Levi Author Kamara', 1200, '2022-12-29 16:44:32', '2022-12-29 16:44:32'),
(5, 'Marked on Head', '123456BCEE', 'Levi Author Kamara', 1200, '2022-12-29 16:44:45', '2022-12-29 16:45:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
