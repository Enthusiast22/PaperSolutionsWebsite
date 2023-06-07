-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 11:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


create database `papersol`;
use `papersol`;

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `image`) VALUES
(1, 'admin', '7756908815', 'admin@gmail.com', 'password', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(6) NOT NULL,
  `itemid` int(6) NOT NULL,
  `userid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `itemid`, `userid`) VALUES
(21, 5, 2),
(22, 4, 1),
(23, 9, 1),
(24, 9, 1),
(26, 27, 0),
(27, 27, 0),
(29, 56, 6),
(30, 46, 6);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(9) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `branch` text NOT NULL,
  `subject` text NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(90) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `sol` varchar(30) NOT NULL DEFAULT 'js',
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `Title`, `category`, `branch`, `subject`, `year`, `image`, `discription`, `sol`, `price`) VALUES
(27, 'sem 1', 'engineering', 'computer', 'DBMS', 2019, '30008601_8-kelloggs-chocos.jpg', 'sem 6 may-june', 'js', '405'),
(39, 'sem 1', 'engineering', 'computer', 'DBMS', 2019, '', 'sem 5 may-june', 'js', '100'),
(46, 'may-jun', 'engineering', 'Computer', 'M-III', 2019, '', '', 'm3', '200'),
(47, 'may-jun', 'engineering', 'Computer', 'DSA', 2019, '', '', 'dsa', '150'),
(48, 'may-jun', 'engineering', 'Computer', 'SPM', 2019, '', '', 'spm', '100'),
(49, 'may-jun', 'engineering', 'Computer', 'PPL', 2019, '', '', 'ppl', '200'),
(50, 'may-jun', 'engineering', 'Computer', 'IOT', 2019, '', '', 'iot', '200'),
(51, 'may-jun', 'engineering', 'Computer', 'DBSM', 2018, '', '', 'dbsm', '250'),
(52, 'may-jun', 'engineering', 'Mechanical', 'Fluid Mechanics', 2019, '', '', 'fm', '200'),
(53, 'may-jun', 'engineering', 'Mechanical', 'Robotics', 2019, '', '', 'rb', '200'),
(54, 'may-jun', 'pharmacy', '', 'PHARMACEUTICS- I', 2018, '', '', 'js', '200'),
(55, 'may-jun', 'pharmacy', '', 'PHARMACEUTICS- I', 2019, '', '', 'js', '200'),
(56, 'may-jun', 'pharmacy', '', 'Human Anatomy and Physiology', 2018, '', '', 'js', '200'),
(57, 'may-jun', 'pharmacy', '', 'Human Anatomy and Physiology', 2019, '', '', 'js', '200'),
(58, 'may-jun', 'pharmacy', '', 'Industrial Pharmacy', 2018, '', '', 'js', '200'),
(59, 'may-jun', 'pharmacy', '', 'Industrial Pharmacy', 2019, '', '', 'js', '200'),
(60, 'may-jun', 'pharmacy', '', 'Pharmaceutical Inorganic Chemistry', 2019, '', '', 'js', '200'),
(61, 'may-jun', 'pharmacy', '', 'Pharmaceutical Inorganic Chemistry', 2018, '', '', 'js', '200'),
(62, 'may-jun', 'management', '', 'management accounting', 2018, '', '', 'js', '200'),
(63, 'may-jun', 'management', '', 'human resource management', 2018, '', '', 'js', '200'),
(64, 'may-jun', 'management', '', 'marketing management', 2018, '', '', 'js', '200'),
(65, 'may-jun', 'management', '', 'marketing management', 2019, '', '', 'js', '200'),
(66, 'may-jun', 'management', '', 'management accounting', 2019, '', '', 'js', '200'),
(67, 'may-jun', 'management', '', 'operations management', 2019, '', '', 'js', '200'),
(68, 'may-jun', 'management', '', 'human resource management', 2019, '', '', 'js', '200'),
(69, 'sem 5 may-jun', '', 'comp', '', 2021, '', '', 'iot', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(3) NOT NULL,
  `cardnumber` int(10) NOT NULL,
  `card_expairy` varchar(60) NOT NULL,
  `cvc_code` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `userid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardnumber`, `card_expairy`, `cvc_code`, `amount`, `userid`) VALUES
(1, 2147483647, '11/19', 789, 101, 1),
(2, 2147483647, '03/22', 878, 62, 1),
(3, 2147483647, '12/21', 123, 82, 1),
(4, 2147483647, '21/19', 123, 0, 1),
(5, 2147483647, '22/2022', 212, 0, 1),
(6, 2147483647, '', 213, 0, 1),
(7, 6555454, '', 655, 0, 6),
(8, 11321321, '', 213, 0, 0),
(9, 1235465, '', 123, 0, 6),
(10, 213213, '', 132, 0, 6),
(11, 123456789, '', 123, 0, 6),
(12, 12345654, '', 123, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `name`, `email`, `college`, `subject`) VALUES
(1, 'muktaMam', 'mukta@gmail.com', 'DYPCOE', 'IOT'),
(2, 'gohil', 'gohil@gmail.com', 'DYPCOE', 'DBMS'),
(3, 'shanti', 'shanti@gmail.com', 'DYPCOE', 'IOT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'Shashank Kumar', '1234567890', 'shashankkumar269@gmail.com', 'password'),
(5, 'Akanksha Jadhav', '9325498464', 'akankshajadhav966@gmail.com', 'abc123'),
(6, 'rutu', '22659823', 'rutu@gmail.com', 'rutu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
