-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footballclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) DEFAULT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `booking_id`, `created_at`, `product_id`, `total`) VALUES
(1, 6, '2020-12-04 21:17:13', NULL, '120000'),
(2, 5, '2020-12-04 21:18:14', NULL, '2888000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`) VALUES
(1, 'Fanta', '15000'),
(2, 'Nuoc khoang Lavie ', '5000'),
(3, 'Tra da', '20000'),
(4, 'Pepsi', '13000'),
(5, 'Mirinda', '11000'),
(6, 'Cocacola', '13000'),
(7, 'Sua Trai Cay Nutri Boost', '20000'),
(8, 'Cafe Sua Birdy', '25000'),
(9, 'Sting Thai Warior', '18000'),
(10, 'Redbull', '30000'),
(11, 'Cam Ep Twister ', '25000'),
(12, 'Tra Xanh C2', '13000'),
(13, 'Tra Olong Tea Plus ', '14000'),
(14, 'Active Chanh Muoi ', '16000'),
(15, 'Tra Bi Dao Wonderfarm ', '11000');
-- --------------------------------------------------------

--
-- Table structure for table `schedule_booking`
--

CREATE TABLE `schedule_booking` (
  `id` int(11) NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `booking_contact` varchar(255) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_booking`
--

INSERT INTO `schedule_booking` (`id`, `booking_name`, `booking_contact`, `time_start`, `time_end`, `status`, `create_at`) VALUES
(1, 'Ha Ngoc My', '0905098562', '2020-12-01 16:15:00', '2020-12-01 16:59:00', 0, '2020-12-01 16:18:50'),
(3, 'Vo Duy Linh', '0823146732', '2020-12-01 17:15:00', '2020-12-01 17:35:00', 0, '2020-12-01 17:17:50'),
(4, 'Trinh Thi Mai Han', '07154242143', '2020-12-01 18:43:00', '2020-12-01 18:47:00', 0, '2020-12-01 18:43:40'),
(5, 'Nguyen Ngoc Phien', '0953260024', '2020-12-01 19:43:00', '2020-12-01 19:47:00', 1, '2020-12-01 19:44:57'),
(6, 'Nguyen Trong Nhan', '0812532054', '2020-12-01 20:43:00', '2020-12-01 20:47:00', 1, '2020-12-01 20:44:57'),
(7, 'Dang Thanh Tam', '0983515032', '2020-12-02 9:43:00', '2020-12-02 9:47:00', 1, '2020-12-02 9:44:57'),
(8, 'Ta Quoc Huu', '0724194302', '2020-12-02 11:43:00', '2020-12-02 11:47:00', 1, '2020-12-02 11:44:57'),
(9, 'Vo Ngoc Thanh Minh ', '0925304312', '2020-12-02 16:43:00', '2020-12-02 16:47:00', 1, '2020-12-02 16:44:57'),
(10, 'Ha Ngoc Tram', '0842956183', '2020-12-03 22:02:00', '2020-12-03 23:02:00', 1, '2020-12-03 22:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `schedule_booking` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
