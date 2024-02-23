-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 05:10 AM
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
-- Database: `hu_man`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon_tbl`
--

CREATE TABLE `coupon_tbl` (
  `c_id` int(20) NOT NULL,
  `c_image` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_code` varchar(20) NOT NULL,
  `c_amount` varchar(50) NOT NULL,
  `mini_amount` int(11) DEFAULT NULL,
  `c_status` varchar(20) NOT NULL DEFAULT 'ACTIVE',
  `c_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon_tbl`
--

INSERT INTO `coupon_tbl` (`c_id`, `c_image`, `c_name`, `c_code`, `c_amount`, `mini_amount`, `c_status`, `c_date`) VALUES
(8, 'first_fifty.jpg', '  FIRST ORDER', 'FIRST50', ' 50% OFF', 0, 'ACTIVE', '2024-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_tbl`
--

CREATE TABLE `emp_tbl` (
  `emp_id` int(20) NOT NULL,
  `emp_img` varchar(100) NOT NULL DEFAULT 'u1.jpg',
  `emp_name` varchar(30) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `DOJ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_tbl`
--

INSERT INTO `emp_tbl` (`emp_id`, `emp_img`, `emp_name`, `emp_email`, `emp_phone`, `role`, `status`, `DOJ`) VALUES
(4, 's.jpg', 'yash', 'smit@gmail.com', '7894561230', 'Accountant', 'ACTIVE', '2100-02-20'),
(5, 's.jpg', 'yash', 'smit@gmail.com', '9328327995', 'Accountant', 'ACTIVE', '0000-00-00'),
(6, 'Screenshot 2023-12-28 094955.png', 'hbh', 'smit@gmail.com', '7894561230', 'Manager', 'ACTIVE', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `ID` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `order_date` datetime(6) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `payment_details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`ID`, `order_id`, `p_img`, `p_name`, `customer_name`, `customer_email`, `quantity`, `price`, `payment`, `status`, `order_date`, `customer_address`, `payment_details`) VALUES
(1, 1101, 'E:/cover.png', 'shirt', 'yash', 'yash@gmail.com', 20, 1000, 'cod', 'delivered', '2024-02-21 11:41:20.000000', 'abcdhahdjh', 'cod');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(20) NOT NULL,
  `profile_img` varchar(100) DEFAULT 'u1.jpg',
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `DOJ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon_tbl`
--
ALTER TABLE `coupon_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon_tbl`
--
ALTER TABLE `coupon_tbl`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
