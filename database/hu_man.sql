-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 08:22 AM
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
-- Database: `hu_man`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_size` varchar(5) NOT NULL,
  `product_color` varchar(20) NOT NULL,
  `product_stock` int(10) NOT NULL,
  `brand-logo` varchar(100) NOT NULL,
  `product_fabric` varchar(20) NOT NULL,
  `product_style` varchar(20) NOT NULL,
  `product_pattern` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name`, `product_img`, `product_desc`, `product_type`, `product_price`, `product_size`, `product_color`, `product_stock`, `brand-logo`, `product_fabric`, `product_style`, `product_pattern`, `country`) VALUES
(1, 'Men suit', 'cover1.png', 'tjdfjshfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhdsfkjsdhfhjfhjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'suit', 5000, 'M', 'Black', 200, 'woodland.jpg', 'cotton', 'two pice', 'abc', 'india'),
(2, 'woodland shoes', 'cover2.png', 'dhfkjshhhhhhhhhhhhhhh', 'shoes', 10000, '08', 'white', 200, 'ass', 'lather', 'formal', 'akdh', 'india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
