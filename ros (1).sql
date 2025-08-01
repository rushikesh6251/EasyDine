-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 08:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ros`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('rushikesh@gmail.com', '1234567890'),
('rushikesh@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_mrp` varchar(200) NOT NULL,
  `Item_type` varchar(200) NOT NULL,
  `item_quantity` varchar(200) NOT NULL,
  `customer_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `email`, `password`, `address`, `mno`) VALUES
(2, 'rushikesh', 'rushikesh@gmail.com', '1234567890', 'akkalkot road solapur', '9834908765'),
(3, 'rohit', 'rohit69@gmail.com', '1234567890', '1234567890-1234567', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cp` varchar(200) NOT NULL,
  `sp` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemid`, `name`, `cp`, `sp`, `type`, `quantity`) VALUES
(6, 'Veg Pizza', '100', '200', 'Main Course', '100'),
(7, 'Pepsi', '100', '200', 'Bevrages', '100'),
(8, 'Veg Pizza', '100', '130', 'Main Course', '20'),
(9, 'Aloo Fry', '180', '250', 'Main Course', '30'),
(10, 'Dal Fry', '170', '220', 'Main Course', '35'),
(11, 'Palak Paneer', '145', '250', 'Main Course', '18'),
(12, 'Coke', '170', '35', 'Bevrages', '150'),
(13, 'Sprite', '22', '35', 'Bevrages', '110');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `unique_order_id` varchar(200) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `mrp` varchar(200) NOT NULL,
  `item_type` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `total_amount` varchar(200) NOT NULL,
  `delivery_add` varchar(200) NOT NULL,
  `delivery_mno` varchar(200) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `ordertime` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`unique_order_id`, `order_id`, `item_name`, `mrp`, `item_type`, `quantity`, `total_amount`, `delivery_add`, `delivery_mno`, `customer_id`, `transaction_id`, `ordertime`, `status`) VALUES
('78673711', 79, 'Veg Pizza', '200', 'Main Course', '3', '1135', 'qwertdsa', '987654378', 'rushikesh@gmail.com', '434h3435vb', '2024-04-08 23:17:06', 'Pending'),
('78673711', 80, 'Aloo Fry', '250', 'Main Course', '2', '1135', 'qwertdsa', '987654378', 'rushikesh@gmail.com', '434h3435vb', '2024-04-08 23:17:06', 'Pending'),
('78673711', 81, 'Coke', '35', 'Bevrages', '1', '1135', 'qwertdsa', '987654378', 'rushikesh@gmail.com', '434h3435vb', '2024-04-08 23:17:06', 'Pending'),
('74949687', 82, 'Veg Pizza', '130', 'Main Course', '11', '1430', 'solapur main road', '9856903900', 'rushikesh@gmail.com', 'FDDG4DGSGSG', '2024-04-08 23:19:24', 'Pending'),
('20153452', 83, 'Veg Pizza', '200', 'Main Course', '1', '1335', 'St stand solapur', '08569890079', 'rohit69@gmail.com', 'VGFD4SFSA2A', '2024-04-08 23:40:32', 'Pending'),
('20153452', 84, 'Aloo Fry', '250', 'Main Course', '1', '1335', 'St stand solapur', '08569890079', 'rohit69@gmail.com', 'VGFD4SFSA2A', '2024-04-08 23:40:32', 'Pending'),
('20153452', 85, 'Coke', '35', 'Bevrages', '1', '1335', 'St stand solapur', '08569890079', 'rohit69@gmail.com', 'VGFD4SFSA2A', '2024-04-08 23:40:32', 'Pending'),
('20153452', 86, 'Aloo Fry', '250', 'Main Course', '1', '1335', 'St stand solapur', '08569890079', 'rohit69@gmail.com', 'VGFD4SFSA2A', '2024-04-08 23:40:32', 'Pending'),
('20153452', 87, 'Veg Pizza', '200', 'Main Course', '3', '1335', 'St stand solapur', '08569890079', 'rohit69@gmail.com', 'VGFD4SFSA2A', '2024-04-08 23:40:32', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `shift` varchar(200) NOT NULL,
  `mno` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `designation`, `salary`, `shift`, `mno`, `address`) VALUES
(3, 'Rohit Salunke', 'juniorchef', '35000', '12Am-6PM', '8569890079', 'St stand solapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
