-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 10:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `contact`, `subject`, `message`) VALUES
(3, 'Dan Koech Tuitoek', 'dankoechtuitoek@gmail.com', '0769301162', 'land 0wnership', 'hello?my name is dan koech from kakamega i need to...sell 50 cres of land\r\n'),
(4, 'remmy', 'rchepkangor@gmail.com', '0797864546', 'buying land', 'i want to buy 10 acres of land'),
(5, 'fred nyachomo', 'fred2@gmail.com', '0700123456', 'land 0wnership', 'i want to sell a land '),
(6, 'collins kemboi', 'collins677@gmail.com', '0744336786', 'buying land', 'i want to buy 5 acres of land'),
(7, 'emanuel mwangi', 'manu@gmail.com', '0783867873', 'buying land', 'buying land '),
(15, 'fredd', 'fred2@gmail.com', '0797864546', 'fnfddf', 'fhdhtrhrt'),
(16, 'Dan Koech Tuitoek', 'dankoechtuitoek@gmail.com', '0797864546', 'land 0wnership', 'hjfjyufhjf'),
(17, 'Dan Koech Tuitoek', 'liwe254@gmail.com', '0744336786', 'courses revision', 'nnn'),
(18, 'Dan Koech Tuitoek', 'liwe254@gmail.com', '0744336786', 'courses revision', 'nnn'),
(19, 'Dan Koech Tuitoek', 'briancheruiyott@gmail.com', '0700123456', 'land 0wnership', 'hhh'),
(20, 'Dan Koech Tuitoek', 'briancheruiyott@gmail.com', '0700123456', 'land 0wnership', 'hhh'),
(21, 'Dan Koech Tuitoek', 'briancheruiyott@gmail.com', '0744336786', 'land 0wnership', 'ggg'),
(22, 'Dan Koech Tuitoek', 'dankoechtuitoek@gmail.com', '0744336786', 'buying land', 'buying land');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `image`, `fullname`, `phonenumber`, `email`, `location`, `size`, `price`, `status`, `description`) VALUES
(28, '', 'dan koech', '0734343443', 'dankoechtuitoek@gmail.com', 'Baringo, Eldama Ravine', '14acres', '4000000', '1', 'its green and perfect for use'),
(31, '5.jpg', 'rose ', '0734343443', 'rchepkangor@gmail.com', 'eldoret', '5 acres', '5000000', '0', 'its green and perfect for use'),
(32, '', 'laban chelagat', '0769301160', 'laban@gmail.com', 'mombasa', '14acre', '5,000,000', '1', 'its green and perfect for use'),
(34, '4.jpg', 'dan', '0734343443', 'dankoechtuitoek@gmail.com', 'Baringo, Eldama Ravine', '14acre', '2000000', '0', 'its green and perfect for use');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phonenumber`, `email`, `username`, `password`, `usertype`) VALUES
(7, 'dan', '0769301162', 'dankoechtuitoek@gmail.com', 'dan', '123456', 'admin'),
(8, 'brian cheruiyot', '0700122334', 'briancheruiyott@gmail.com', 'brian', '1234', 'user'),
(18, 'stacy', '0745565456', 'stacy1@gmail.com', 'stacy', '12345678', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
