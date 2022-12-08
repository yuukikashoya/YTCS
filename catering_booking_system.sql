-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 10:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(55) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `admin_username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `unique_id` int(55) NOT NULL,
  `admin_rank` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `password`, `status`, `unique_id`, `admin_rank`) VALUES
(1, 'Arriane Asis', 'master', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'offline', 212121, 2),
(2, 'John Lloyd Miranda', 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', 'offline', 212121, 2),
(19, 'yuki', 'super_admin', '356a192b7913b04c54574d18c28d46e6395428ab', 'offline', 212121, 1),
(23, 'John Lloyd Miranda', 'john', '356a192b7913b04c54574d18c28d46e6395428ab', 'offline', 212121, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `an_id` int(255) NOT NULL,
  `an` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`an_id`, `an`) VALUES
(2, 'good evening every one  this funtion will come soon'),
(4, 'coming soon!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(55) NOT NULL,
  `client_name` varchar(55) NOT NULL,
  `client_username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `address` varchar(70) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `unique_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_username`, `password`, `address`, `contact`, `birthday`, `email`, `status`, `unique_id`) VALUES
(14, 'aron', 'aron', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'qwe', '423423423', '2022-10-26', '34223@gmail.com', 'offline', 1624299434),
(15, 'John Lloyd Miranda', 'BSIT', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'bahay', '412312312523423', '2022-09-27', '07006728@dwc-legazpi.edu', 'online', 1178267994),
(16, 'local', 'local', '939bb46a04c3640c8c427e92b1b557e882e2d2a0', 'local', '312', '2022-10-31', 'yukimiranda26@gmail.com', 'offline', 163751382);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `img_name`, `file`) VALUES
(30, 'sample 1', '6391aed0522422.89302940.jpg'),
(31, 'sample 2', '6391aed94a1b42.71450486.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(98, 212121, 1178267994, 'hello'),
(99, 1178267994, 212121, 'gfghdfg'),
(100, 212121, 1178267994, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `ref`
--

CREATE TABLE `ref` (
  `id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `total` int(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `date_ref` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref`
--

INSERT INTO `ref` (`id`, `service_id`, `name`, `username`, `event_date`, `total`, `event_type`, `date_ref`) VALUES
(1, 11, '', 'BSIT', '2022-03-12', 45550, 'Birthday', '2022-12-07'),
(2, 12, 'John Lloyd Miranda', 'BSIT', '2022-09-17', 4500, 'Organizational', '2022-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(255) NOT NULL,
  `client_username` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `bundle` varchar(255) NOT NULL,
  `pax` int(255) NOT NULL,
  `time_start` time NOT NULL,
  `time_ends` time NOT NULL,
  `date` date NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_zip_code` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `invitation` varchar(255) NOT NULL,
  `sets` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `client_username`, `client_name`, `email`, `contact`, `bundle`, `pax`, `time_start`, `time_ends`, `date`, `street`, `city`, `postal_zip_code`, `photo`, `invitation`, `sets`) VALUES
(13, 'BSIT', 'John Lloyd Miranda', '07006728@dwc-legazpi.edu', '123', 'Weddings', 200, '16:51:00', '19:51:00', '2022-12-12', 'gapo', 'leagazpi', '4500', 'yes', 'yes', 'Set A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `an_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
