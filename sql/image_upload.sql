-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 12:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `medicine` varchar(20) NOT NULL,
  `mquantity` varchar(20) NOT NULL,
  `product` varchar(20) NOT NULL,
  `pquantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `name`, `email`, `phone`, `address`, `blood_group`, `gender`, `dob`, `medicine`, `mquantity`, `product`, `pquantity`) VALUES
(80, 'w3logo.jfif', '', 'z', 'z', 'z', 'z', 'A+', 'male', '0001-01-01', 'x', 'y', '', ''),
(81, 'w3logo.jfif', '', 'z', 'z', 'z', 'z', 'A+', 'male', '0001-01-01', 'x', 'y', '', ''),
(82, 'w3logo.jfif', '', 'q', 'q', 'q', 'q', 'A+', 'male', '0003-03-03', 'q', '12', '', ''),
(83, 'w3logo.jfif', '', 'q', 'q', 'q', 'q', 'A+', 'male', '0003-03-03', 'q', '12', '', ''),
(84, 'w3logo.jfif', '', 'w', 'w', 'w', 'w', 'A+', 'male', '0005-05-05', 'seclo', '12', '', ''),
(85, 'w3logo.jfif', '', 'w', 'w', 'w', 'w', 'A+', 'male', '0005-05-05', 'seclo', '12', '', ''),
(86, 'w3logo.jfif', '', 'e', 'e', 'e', 'e', 'A+', 'male', '0007-07-07', 'alve', '33', '', ''),
(87, 'w3logo.jfif', '', 'e', 'e', 'e', 'e', 'A+', 'male', '0007-07-07', 'alve', '33', '', ''),
(88, 'w3logo.jfif', '', 'r', 'r', 'r', 'r', 'A+', 'male', '0008-08-08', '8', '8', '', ''),
(89, 'w3logo.jfif', '', '9', '9', '9', '9', 'A+', 'male', '0099-09-09', '9', '9', '', ''),
(90, 'w3logo.jfif', '', '9', '9', '9', '9', 'A+', 'male', '0099-09-09', '9', '9', '', ''),
(91, 'w3logo.jfif', '', '9', '9', '9', '9', 'A+', 'male', '0099-09-09', '9', '9', '', ''),
(92, 'w3logo.jfif', '', 'uu', 'uu', 'uu', 'uu', 'A+', 'male', '0000-00-00', 'jj', 'jj', '', ''),
(93, 'w3logo.jfif', '', 'q', 'q', 'q', 'q', 'A+', 'male', '0003-03-03', '2nd med', '2', '', ''),
(94, 'w3logo.jfif', '', 'w', 'w', 'w', 'w', 'A+', 'male', '2021-07-01', 'w', 'w', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(20) NOT NULL,
  `m_name` text NOT NULL,
  `m_quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_items`
--

CREATE TABLE `tbl_order_items` (
  `order_items_id` int(11) NOT NULL,
  `order_id` varchar(150) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_items`
--

INSERT INTO `tbl_order_items` (`order_items_id`, `order_id`, `item_name`, `item_quantity`, `item_unit`) VALUES
(1, '60e6d89a06dcb', 'fg', 12, 'Gallon'),
(2, '60e6d89b126fe', 'fg', 12, 'Gallon'),
(3, '60e6d89b4a4fe', 'fg', 12, 'Gallon'),
(4, '60e6d8b028eb0', 'fg', 12, 'Gallon'),
(5, '60e6d8b028eb0', 'd', 7, 'Box'),
(6, '60e6d8b1c3645', 'fg', 12, 'Gallon'),
(7, '60e6d8b1c3645', 'd', 7, 'Box'),
(8, '60e6d8b1f0ea7', 'fg', 12, 'Gallon'),
(9, '60e6d8b1f0ea7', 'd', 7, 'Box'),
(10, '60e6df78a4c08', 'k', 7, 'Kg'),
(11, '60e6df79b9219', 'k', 7, 'Kg'),
(12, '60e6df7c3c944', 'k', 7, 'Kg'),
(13, '60e6df7c909a3', 'k', 7, 'Kg'),
(14, '60e6df7cbcd36', 'k', 7, 'Kg'),
(15, '60e6df7d1b272', 'k', 7, 'Kg'),
(16, '60e6df7d671de', 'k', 7, 'Kg'),
(17, '60e6df7db12e6', 'k', 7, 'Kg'),
(18, '60e6df7df125d', 'k', 7, 'Kg'),
(19, '60e6df7e3b981', 'k', 7, 'Kg'),
(20, '60e6df7e73988', 'k', 7, 'Kg'),
(21, '60e6df7ec7eea', 'k', 7, 'Kg'),
(22, '60e6e189184b6', 'z', 6, 'Nos'),
(23, '60e6e189184b6', 'x', 7, 'Liters'),
(24, '60e6e18bb4d0e', 'z', 6, 'Nos'),
(25, '60e6e18bb4d0e', 'x', 7, 'Liters'),
(26, '60e6e20e6cafb', 'z', 6, 'Nos'),
(27, '60e6e20e6cafb', 'x', 7, 'Liters'),
(28, '60e6e20f52bfa', 'z', 6, 'Nos'),
(29, '60e6e20f52bfa', 'x', 7, 'Liters'),
(30, '60e6e20f9487a', 'z', 6, 'Nos'),
(31, '60e6e20f9487a', 'x', 7, 'Liters'),
(32, '60e6e20fc9975', 'z', 6, 'Nos'),
(33, '60e6e20fc9975', 'x', 7, 'Liters'),
(34, '60e6e21006cff', 'z', 6, 'Nos'),
(35, '60e6e21006cff', 'x', 7, 'Liters');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`unit_id`, `unit_name`) VALUES
(1, 'Bags'),
(2, 'Bottles'),
(3, 'Box'),
(4, 'Dozens'),
(5, 'Feet'),
(6, 'Gallon'),
(7, 'Grams'),
(8, 'Inch'),
(9, 'Kg'),
(10, 'Liters'),
(11, 'Meter'),
(12, 'Nos'),
(13, 'Packet'),
(14, 'Rolls');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  ADD PRIMARY KEY (`order_items_id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
