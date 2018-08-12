-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 09:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `Order_id` int(10) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Storage` varchar(15) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Customer_id` int(20) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`Order_id`, `Brand`, `Product_Name`, `Price`, `Color`, `Storage`, `Quantity`, `Customer_id`, `Customer_Name`, `Address`, `Phone_no`, `dateTime`, `Payment`) VALUES
(49, 'Huawei', 'honor 9', 76000, 'Black', '64 Gb', 2, 0, '', '', '', '2018-08-10 10:00:58', 'unpaid'),
(51, 'Apple', 'IPhone X', 100000, 'Black', '128 Gb', 1, 0, '', '', '', '2018-08-10 10:00:58', 'Paid'),
(53, 'Apple', 'IPhone X', 200000, 'Black', '64 Gb', 2, 0, '', '', '', '2018-08-10 10:02:16', 'Paid'),
(67, 'Xiaomi', 'Note 5', 28000, 'Black', '64 Gb', 1, 0, '', '', '', '2018-08-10 16:40:40', 'unpaid'),
(95, 'Huawei', 'P 20', 492000, 'Black', '64 Gb', 6, 0, '', '', '', '2018-08-11 20:36:14', 'Paid'),
(99, 'Huawei', 'P 20', 246000, 'Black', '64 Gb', 3, 22, '', '', '', '2018-08-11 20:45:48', 'Paid'),
(100, 'Huawei', 'P 20', 656000, 'White', '128 Gb', 8, 22, 'ibtida', 'nikunja-2', '01612795858', '2018-08-11 20:48:55', 'Paid'),
(101, 'Oneplus', 'oneplus 6', 47500, 'Black', '64 Gb', 1, 0, '', '', '', '2018-08-12 18:21:52', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `Product_id` int(5) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Stock` int(5) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`Product_id`, `Brand`, `Product_Name`, `Price`, `Stock`, `Details`, `Image`) VALUES
(6, 'Huawei', 'honor 9', 35000, 12, 'is in stock', 'productimage/Huaweihonor-9.jpg'),
(7, 'Apple', 'IPhone 8', 76000, 20, 'is in stock', 'productimage/AppleIPhone-8.jpg'),
(8, 'Oneplus', 'oneplus 6', 47500, 12, 'is in stock', 'productimage/Oneplusoneplus-6.jpg'),
(9, 'Oneplus', 'oneplus 3', 35000, 10, 'is in stock', 'productimage/Oneplusoneplus-3.jpg'),
(10, 'Samsung', 'S9', 72000, 15, 'is in stock', 'productimage/SamsungS9.jpg'),
(11, 'Huawei', 'P 20', 82000, 29, 'is in stock', 'productimage/HuaweiP-20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Customer_id` int(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `User_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Customer_id`, `Username`, `Email`, `Phone_no`, `Address`, `Password`, `User_Type`) VALUES
(16, 'ibtida420', 'sk.muhtasimibtida@gmail.com', '01612795858', 'nikunja', '202cb962ac59075b964b07152d234b70', 'Admin'),
(22, 'ibtida', 'sk.muhtasimibtida@gmail.com', '01612795858', 'nikunja', '202cb962ac59075b964b07152d234b70', 'Customer'),
(29, 'ibtida4203423523', 'sk.muhtasimibtida@gmail.com', '01612795858', 'nikunja', '202cb962ac59075b964b07152d234b70', 'Customer'),
(31, 'z', 'rafi@m.insta.kim', '01612795858', 'nikunja', '202cb962ac59075b964b07152d234b70', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Customer_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `Order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `Product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
