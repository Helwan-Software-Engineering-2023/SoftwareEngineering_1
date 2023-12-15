-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 01:07 AM
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
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Cairo'),
(2, 'Alexandria'),
(3, 'Suez'),
(4, 'Test'),
(5, 'ahmed'),
(6, 'test5'),
(7, 'a7a');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `goup_id` int(11) DEFAULT NULL,
  `client_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `text`, `file`, `goup_id`, `client_Id`) VALUES
(1, 'xsxsxs', 'sssssssss', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_vaccination_center`
--

CREATE TABLE `reserve_vaccination_center` (
  `reservation_Numbere` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Vaccine_id` int(11) NOT NULL,
  `Vaccination_center_id` int(11) NOT NULL,
  `first_dose_date` varchar(100) NOT NULL,
  `first_taken` varchar(100) NOT NULL,
  `second_dose_date` varchar(100) NOT NULL,
  `second_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve_vaccination_center`
--

INSERT INTO `reserve_vaccination_center` (`reservation_Numbere`, `user_id`, `Vaccine_id`, `Vaccination_center_id`, `first_dose_date`, `first_taken`, `second_dose_date`, `second_taken`) VALUES
(2, 1, 3, 10, '2023-12-20', 'true', '2024-01-20', 'true'),
(4, 2, 1, 10, '2023-12-21', 'true', '2024-01-25', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `CityId` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `CityId`, `phone`, `address`, `role`, `type`) VALUES
(1, 'ahmed', 'test', '123', 1, '01023215637', 'ajhduvfuiohoe', 'User', NULL),
(2, 'ahmed', 'Ahmed7112', '123', 1, '01023215637', 'ajhduvfuiohoe', 'User', NULL),
(5, 'ahmed', 'cross', '123', 3, '01023215637', 'ajhduvfuiohoe', 'User', NULL),
(6, 'ahmed', 'ahmed7113', '123', 5, '01023215637', 'ajhduvfuiohoe', 'User', NULL),
(7, 'ahmk3', 'ahmed711', '123', 1, '000000', 'l;jef', 'User', NULL),
(8, 'jhfo2i', 'jlhfouw', '789', 1, '0000000', 'kw;jf', 'User', NULL),
(10, 'ashraf', 'ashraf@gmail.com', '15602011', 1, '000000000000000', 'knflwjgi', 'vaccination_center', 'private'),
(11, 'Belbesy', 'Belbesy@gmail.com', '123456789', 2, '248525332', 'bolak abo el3la', 'vaccination_center', 'government'),
(12, 'ahmed', 'ashraf', '456', 1, '0000000', 'hwuohfow', 'User', NULL),
(13, 'ahmed', 'ahmed@admin.com', '711091', 1, '01023215637', 'No_Address', 'admin', NULL),
(14, 'test1', 'test4@gmail', '1234', 2, '249562598', 'No_Address', 'vaccination_center', 'private'),
(16, 'test6', 'test65', '1234', 3, '54965236589', 'auujcbax', 'vaccination_center', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Vaccine_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gap` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Valid_age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Vaccine_id`, `Name`, `Gap`, `Description`, `Valid_age`) VALUES
(1, 'ahmed', '14', 'njrwghlengoijlwk', '18'),
(3, 'tarek', '15', 'nrejwjfi', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_vaccination_center`
--
ALTER TABLE `reserve_vaccination_center`
  ADD PRIMARY KEY (`reservation_Numbere`),
  ADD KEY `Vac_FK` (`Vaccine_id`),
  ADD KEY `User_FK` (`user_id`),
  ADD KEY `Fk_vc` (`Vaccination_center_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city` (`CityId`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserve_vaccination_center`
--
ALTER TABLE `reserve_vaccination_center`
  MODIFY `reservation_Numbere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `Vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserve_vaccination_center`
--
ALTER TABLE `reserve_vaccination_center`
  ADD CONSTRAINT `Fk_vc` FOREIGN KEY (`Vaccination_center_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Vac_FK` FOREIGN KEY (`Vaccine_id`) REFERENCES `vaccine` (`Vaccine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`CityId`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
