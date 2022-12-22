-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 10:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webthaylam`
--

-- --------------------------------------------------------

--
-- Table structure for table `catelogy`
--

CREATE TABLE `catelogy` (
  `catID` int(11) NOT NULL,
  `catName` varchar(150) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catelogy`
--

INSERT INTO `catelogy` (`catID`, `catName`, `amount`, `status`) VALUES
(1, 'Áo', 5, 1),
(2, 'Quần', 5, 1),
(3, 'Giày', 5, 1),
(4, 'Balo', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oderdetail`
--

CREATE TABLE `oderdetail` (
  `id` int(11) NOT NULL,
  `pricesale` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `createAt` datetime DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `amount`, `status`, `createAt`, `updateAt`, `userID`) VALUES
(1, 1, 1, NULL, NULL, 6),
(2, 2, 1, '2022-12-21 14:19:02', '2022-12-21 14:19:02', 63);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `price`, `amount`, `image`, `description`, `status`, `catID`) VALUES
(9, 'áo thun', 45, 4, 'ao1.jpg', 'ao dep lam', 1, 1),
(11, 'balo', 222, 3, 'balo3.jpg', 'balo rat dep', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `state` tinyint(2) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `email`, `password`, `phone`, `address`, `gender`, `role`, `state`, `createAt`) VALUES
(6, 'Phan Mai Thien Vu', 'vuphan212@gmail.com', '6a0d8f756dfa9c1cd69fed28423ec8ca', '0903833633', 'q8, tp.HCM', 'man', 'user', 0, '2022-12-12 15:03:44'),
(56, 'asdasd', 'asdasd@gmail.com', '80246e34a840fcc61754fa8430eba482', '0903833633', 'fdfsdf', 'man', 'admin', 1, '2022-12-20 10:55:23'),
(57, 'asdasd', 'asdasd@gmail.com', '58da34a5e060e8d1e79b8e600f6a1813', '0903833633', 'fdfsdf', 'man', 'admin', 1, '2022-12-20 10:56:27'),
(58, 'aaaaaaaaaaaaaa', 'test1@gmail.com', '0ff0c8f6ae9f57c1781019649cd212f3', '0903833633', 'dadsad', 'woman', 'admin', 0, '2022-12-20 11:24:06'),
(63, 'hehehe', 'hehe@gmail.com', '58da34a5e060e8d1e79b8e600f6a1813', '0123465789', 'dasdasd', 'man', 'admin', 1, '2022-12-21 10:41:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catelogy`
--
ALTER TABLE `catelogy`
  ADD PRIMARY KEY (`catID`,`catName`,`amount`,`status`);

--
-- Indexes for table `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oderdetail_product_fk_idx` (`productID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `order_user_fk_idx` (`userID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `product_category_fk_idx` (`catID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catelogy`
--
ALTER TABLE `catelogy`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oderdetail`
--
ALTER TABLE `oderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD CONSTRAINT `oderdetail_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`catID`) REFERENCES `catelogy` (`catID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
