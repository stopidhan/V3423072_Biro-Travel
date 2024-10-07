-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 04:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buzzjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_orders`
--

CREATE TABLE `ticket_orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `package` varchar(100) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_orders`
--

INSERT INTO `ticket_orders` (`id`, `name`, `password`, `gender`, `services`, `package`, `notes`, `created_at`) VALUES
(1, 'Raihan Kafi Hufayda', '$2y$10$/NTqgiepMQ5cOkokLFPrJeuaOyVqck6AzzSy6LsbnMUK60mxCGhgS', 'L', 'meal, wifi', 'VIP Jakarta', '123', '2024-09-28 10:49:22'),
(2, 'Raihan Kafi Hufayda', '$2y$10$.CJyjC.IJN5/TnTkp7hSue7UhrhRiGsahy1lJ0evk3vH9A5mRdz9W', 'L', 'meal, wifi', 'VIP Jakarta', '123', '2024-09-28 10:49:55'),
(3, 'Raihan Kafi Hufayda', '$2y$10$0X.flX0qpt4Zg2oo4CQVg.uaroRgeFiqQ8O8JcmOKgBZUyLhWTbke', 'L', 'meal, wifi', 'VIP Jakarta', '123', '2024-09-28 10:49:59'),
(4, 'Raihan Kafi Hufayda', '$2y$10$3wwgDkMec0.3UQMsvciYruiYcj9/C2ZOSPwgCBogX/iL6QqamJzi2', 'L', 'meal, wifi', 'VIP Jakarta', '123', '2024-09-28 10:50:02'),
(5, 'Raihan Kafi Hufayda', '$2y$10$.YxuWMZShVmNFjX5WSu4w.EzsyCGm/wJLBxt885473n9MqHl8MeJu', 'L', 'meal', 'VIP Malang', '123123', '2024-09-28 11:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
