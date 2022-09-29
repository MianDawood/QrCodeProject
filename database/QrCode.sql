-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2022 at 02:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QrCode`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrCode_table`
--

CREATE TABLE `qrCode_table` (
  `qr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qr_content` varchar(80) DEFAULT NULL,
  `qr_category` varchar(80) DEFAULT NULL,
  `qr_bgcolor` varchar(80) DEFAULT NULL,
  `qr_colorType` varchar(80) DEFAULT NULL,
  `qr_dotColorGradiantType` varchar(80) DEFAULT NULL,
  `qr_dotEyeColorGradiantType` varchar(80) DEFAULT NULL,
  `qr_singleColor` varchar(80) DEFAULT NULL,
  `qr_gradiantColorOne` varchar(80) DEFAULT NULL,
  `qr_gradiantColorTwo` varchar(80) DEFAULT NULL,
  `qr_singleEyeColor` varchar(80) DEFAULT NULL,
  `qr_gradiantEyeColorOne` varchar(80) DEFAULT NULL,
  `qr_gradiantEyeColorTwo` varchar(80) DEFAULT NULL,
  `qr_qrImage` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrCode_table`
--

INSERT INTO `qrCode_table` (`qr_id`, `user_id`, `qr_content`, `qr_category`, `qr_bgcolor`, `qr_colorType`, `qr_dotColorGradiantType`, `qr_dotEyeColorGradiantType`, `qr_singleColor`, `qr_gradiantColorOne`, `qr_gradiantColorTwo`, `qr_singleEyeColor`, `qr_gradiantEyeColorOne`, `qr_gradiantEyeColorTwo`, `qr_qrImage`) VALUES
(1, 3, 'www.qrcfjdaslkfjdklasjfdklsajflkdjaskl fjdode.com', 'url', '#BE1E95', 'single', 'linear', 'linear', '#A0D120', '', '', '#1625C7', '', '', 'logo.png'),
(3, 3, 'www.fdjkasl fjdode.com', 'url', '#BE1E95', 'single', 'linear', 'linear', '#A0D120', '', '', '#1625C7', '', '', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `qr_logo`
--

CREATE TABLE `qr_logo` (
  `logo_id` int(11) NOT NULL,
  `logo_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr_logo`
--

INSERT INTO `qr_logo` (`logo_id`, `logo_name`, `user_id`) VALUES
(1, '1513332_1005933196146543_962701336477246398_n.jpg', 3),
(2, 'Screenshot from 2021-11-10 20-18-30.png', 3),
(3, 'WhatsApp Image 2022-09-14 at 8.07.27 PM.jpeg', 3),
(4, 'Screenshot from 2021-11-10 20-18-30.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'MianAizaz', 'user@gmail.com', '11223344'),
(2, 'admin', 'admin@gmail.com', 'aizaz123'),
(3, 'dawood@gmail.com', 'admin@admin.com', '1234'),
(4, 'dawood@gmail.com', 'dfasdfasdf', '1234'),
(5, 'dawood@gmail.com', 'dfasdfasdfdfasdf', '1234'),
(6, 'dawood@gmail.com', 'admin@admin.com', '1234'),
(7, 'MianAizaz', 'partner@gmail.com', '$2y$10$W82Lp763p4LpdvdikYevPux2QQth42uAXNBGWxf0zc.8S8Bzd8jla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrCode_table`
--
ALTER TABLE `qrCode_table`
  ADD PRIMARY KEY (`qr_id`);

--
-- Indexes for table `qr_logo`
--
ALTER TABLE `qr_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrCode_table`
--
ALTER TABLE `qrCode_table`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qr_logo`
--
ALTER TABLE `qr_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
