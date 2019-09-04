-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 06:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `timestamp`) VALUES
(1, 'Meet', 'meet@123.com', 'zdfdfdfdf', '2019-08-26 23:42:46'),
(2, 'hir', 'hir@abc.com', 'hey this is hir nice to meet you!!!!', '2019-08-26 23:47:50'),
(3, 'hitesh', 'hit@qwe.com', 'hey nice website!!!', '2019-08-26 23:49:19'),
(4, 'Raju', 'raju@raju.com', 'hey this is my ,essage!!!!!', '2019-08-26 23:51:11'),
(5, 'Meet', 'hir@abc.com', 'rhgfhgfhg', '2019-08-26 23:54:29'),
(6, 'Meet', 'hir@abc.com', 'rhgfhgfhg', '2019-08-26 23:58:11'),
(7, 'Meet', 'hir@abc.com', 'rhgfhgfhg', '2019-08-27 00:09:47'),
(8, 'Meet', 'hir@abc.com', 'rhgfhgfhg', '2019-08-27 00:10:08'),
(9, 'Meet', 'hir@abc.com', 'rhgfhgfhg', '2019-08-27 00:12:40'),
(10, 'Aditya', 'adi@tya.com', 'this is GOOD!!!!!!', '2019-08-27 00:13:48'),
(11, 'john doe', 'doe@abc.com', 'gooooooddddddd........', '2019-09-04 19:38:21'),
(12, 'doe john', 'hey@hey.com', 'geyy hey hey hey hey \r\ndfhgkfdhg\r\ndkfghjdfkgh\r\ndlfljkldhg', '2019-09-04 19:40:30'),
(13, 'usha', 'usha@123.com', 'medsghdksgkjsdgjsdf', '2019-09-04 19:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(11) NOT NULL,
  `offer_title` varchar(200) NOT NULL,
  `offer_description` varchar(1000) DEFAULT NULL,
  `offer_type` varchar(50) NOT NULL,
  `offer_img` varchar(25) NOT NULL,
  `offer_expiry` date DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_title`, `offer_description`, `offer_type`, `offer_img`, `offer_expiry`, `timestamp`) VALUES
(1, 'eg0', '#Diwali #diwalioffers #DiwaliDeals #DiwaliSale\r\n#For #BSNL & #MTNL Special: #Get 15% Cashback on #Prepaid #Recharge done on MobiKwik App or website, To get this offer , follow the below given steps –\r\nHow to get this offer –\r\nClick here for the offer page\r\nFill your offer detail\r\n\r\nsold by Mobikwik\r\n\r\nSelling price: 100 Rupees\r\n\r\nOffer Price: 60 Rupees\r\n\r\nUse coupon code – 8OCT16\r\n\r\nMake final payment\r\nTerms & Conditions:\r\nBSNL & MTNL Special: Get 15% Cashback on Prepaid Recharge done on MobiKwik App or website.\r\nMinimum amount spend to redeem the cashback is Rs.10\r\nMaximum cashback is fixed at Rs.40\r\nThe code can be Redeemed once per user.\r\nCoupon redemption & Payment should be done on MobiKwik’s Android, Windows(version 10 or above), iOS App or website.\r\nThe offer is applicable for all MobiKwik users on BSNL & MTNL operators only.\r\nOffer is valid from 12:00PM till 11:59PM, 8th October.\r\nMobiKwik has the right to end or call back any or all of its offer without prior notice.\r\n\r\n', 'mobile', 'one.jpg', NULL, '2019-09-04 18:58:30'),
(2, 'eg1', 'this is Description', 'freebies', 'two.jpg', NULL, '2019-09-04 20:28:12'),
(3, 'eg2', 'this is eg2', 'freebies', 'three.jpg', NULL, '2019-09-04 20:59:33'),
(4, 'eg3', 'this is eg3', 'mobile', 'one.jpg', '2019-09-18', '2019-09-04 20:59:33'),
(5, 'eg4', 'this is eg4', 'freebies', 'two.jpg', '2019-09-27', '2019-09-04 21:00:28'),
(6, 'eg4', 'this is eg4', 'mobile', 'three.jpg', '2019-09-25', '2019-09-04 21:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(355) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `Timestamp`) VALUES
(1, '0', '0', '0', '$2y$10$QpZDbmAnwjDQvG73Sirj7.bCVbEruvbCDEqM81y8L7e', '2019-08-25 18:36:09'),
(2, 'Harry thakkar', 'h123', 'harry@abc.com', '$2y$10$oE/0iyAMRb.ZUROr9OWjDu.SgLvgXOol0ozX.XUorJ8', '2019-08-25 18:36:51'),
(3, 'hiral', 'hiral123', '123@abca.com', '$2y$10$1EgM9gaYRihM1TeMG2JGfeUgFFh55s0etNnMRjt4ww6', '2019-08-25 22:11:45'),
(4, 'Meet', 'meet05', 'meet@abc.com', '$2y$10$izUfThfMkED517Iwb2eUpeIS0RiSb7F294C8MpqwyEs', '2019-08-25 22:38:54'),
(5, 'Meet', 'meet007', 'meet@meet.com', '$2y$10$.hjIn/De8fXuWsoMf2jUZufKvY.esqirOoHBjBnfmfd', '2019-08-25 22:47:03'),
(6, 'sonal', 'sonal07', 'sonal@abc.com', '$2y$10$8LM0EpO6XXsIv07TVPEf6uTByWyzGWUJm7wAY5sN33B', '2019-08-25 23:15:22'),
(7, 'Hitesh', 'hit007', 'hit@asd.com', '$2y$10$Hja0FxKogqBE0llxqO18xuJCELubOvwCuLgmgcqS9AuPZzvbRG79W', '2019-08-25 23:32:30'),
(8, 'user', 'user01', 'user@user.com', '$2y$10$2Xuvnw7QRdYw7CjlbjayvuUELEgX5iJAMxC3Kgw3/Rzwqbq2fV.42', '2019-08-25 23:52:18'),
(9, 'ram', 'ramu', 'ram@sita.com', '$2y$10$wM13hEOZgNmXiKJYhZAKlekYffcOHu.CyOzOmSDr3BMdEOljwDZ16', '2019-08-26 00:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
