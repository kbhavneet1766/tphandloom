-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 06:22 AM
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
-- Database: `ekart`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_users`
--

CREATE TABLE `master_users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_users`
--

INSERT INTO `master_users` (`u_id`, `email`, `phone_no`, `password`) VALUES
(3, 'testing@testing.com', 2147483647, 'dc724af18fbdd4e59189f5fe768a5f8311527050'),
(4, 'hello@hello.com', 2147483647, 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(5, 'hello@test.com', 2147483647, '3f14ce7c4a8db6eafd12708db4726e3b997cda4d');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(50) NOT NULL,
  `Order_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`, `Order_Date`) VALUES
(1, 'Rishav Kumar', '7894561263', 'phoch se bahr', 'COD', '2024-04-17 04:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(11) DEFAULT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(1, 'Cushion', 350, 1),
(1, 'TINY TOON BEDSHEET', 350, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_users`
--
ALTER TABLE `master_users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD KEY `Order_Id` (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_users`
--
ALTER TABLE `master_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD CONSTRAINT `user_orders_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `order_manager` (`Order_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
