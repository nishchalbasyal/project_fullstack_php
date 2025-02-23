-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 11:26 AM
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
-- Database: `ebpearls_asgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Nishchal', 'nischalbasyal2003@gmail.com', '0'),
(4, 'Nishchal', 'nischalbasyal2003@gmail.com', '0'),
(11, 'NBC VNW', 'nbc@mail.com', 'sdadbahb asbdajhdvn jasdhasbd asjdhhasb');

-- --------------------------------------------------------

--
-- Table structure for table `outsource_payments`
--

CREATE TABLE `outsource_payments` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `p_desc` varchar(600) NOT NULL,
  `icons` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outsource_payments`
--

INSERT INTO `outsource_payments` (`id`, `name`, `p_desc`, `icons`) VALUES
(1, 'Access up to $100,000', 'We fund each invoice once approved and collect payment to optimise your cash flow.', 'assets/icons/earth_icon.svg'),
(3, 'You choose invoices to get paid', 'Self-serve online portal available 24/7 or connect from your CRM or invoicing platform.​', 'assets/icons/earth_icon.svg'),
(5, 'Simple pricing', 'Only pay for what you use, if you don’t need us, there are no costs.​', 'assets/icons/earth_icon.svg'),
(7, 'Click and quick', 'We fund each invoice once approved and collect payment to optimise your cash flow.', 'assets/icons/earth_icon.svg'),
(9, 'Flexible', 'Self-serve online portal available 24/7 or connect from your CRM or invoicing platform.​', 'assets/icons/earth_icon.svg'),
(11, 'Invest in your business', 'Only pay for what you use, if you don’t need us, there are no costs.​', 'assets/icons/earth_icon.svg');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(70) NOT NULL,
  `t_name` varchar(60) NOT NULL,
  `t_details` varchar(60) NOT NULL,
  `t_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `t_name`, `t_details`, `t_status`) VALUES
(4, 'Drinking water', '', 0),
(5, 'Reading Books', '', 0),
(6, 'Playing Football', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsource_payments`
--
ALTER TABLE `outsource_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `outsource_payments`
--
ALTER TABLE `outsource_payments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
