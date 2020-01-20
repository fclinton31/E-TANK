-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 11:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` varchar(16) NOT NULL,
  `idNumber` varchar(14) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CellNumber` varchar(12) NOT NULL,
  `createDate` varchar(10) DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'customer',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `logged_On` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `idNumber`, `FirstName`, `Surname`, `Gender`, `Email`, `CellNumber`, `createDate`, `role`, `active`, `password`, `username`, `logged_On`) VALUES
('910529', '9105295299083', 'z', 'z', 'Male', 'dludlec.b@gmail.com', '0834271834', '2019-07-18', 'customer', 1, '9083', '910529', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int(5) NOT NULL,
  `userId` varchar(19) NOT NULL,
  `tankId` varchar(5) NOT NULL,
  `Details` varchar(50) NOT NULL,
  `dateadded` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `userId`, `tankId`, `Details`, `dateadded`) VALUES
(0, '9105295299083', '1', ' Bought 0.058823529411764705 liters of Unleaded-95', '2019-05-21 15:23:10.471224'),
(0, '9105295388093', '3', 'Bought 100 liters of Diesel and it costs R10000', '2019-05-21 15:27:03.578281'),
(0, '9105295388093', '3', 'Bought 100 liters of Diesel and it costs R10000', '2019-05-21 15:27:03.579289'),
(0, '9105295299083', '2', 'Bought 5 liters of Unleaded-93 and it costs R82.5', '2019-05-21 23:10:48.096218'),
(0, '9105295299083', '2', 'Bought 5 liters of Unleaded-93 and it costs R82.5', '2019-05-21 23:10:48.098217'),
(0, '9105295299083', '1', 'Bought 1 liters of Unleaded-95 and it costs R 17', '2019-05-23 05:50:42.491720'),
(0, '9105295299083', '1', 'Bought 1 liters of Unleaded-95 and it costs R 17', '2019-05-23 05:50:42.496724'),
(0, '9105295299083', '1', 'Bought 44 liters of Unleaded-95 and it costs R 748', '2019-05-23 05:51:12.242719'),
(0, '9105295299083', '1', 'Bought 44 liters of Unleaded-95 and it costs R 748', '2019-05-23 05:51:12.244719'),
(0, '9105295299083', '2', 'Bought 2 liters of Unleaded-93 and it costs R 33', '2019-05-23 05:52:27.347719'),
(0, '9105295299083', '2', 'Bought 2 liters of Unleaded-93 and it costs R 33', '2019-05-23 05:52:27.349717'),
(0, '9105295299083', '1', 'Bought 500 liters of Unleaded-95 and it costs R 85', '2019-05-26 14:57:18.487653'),
(0, '9105295299083', '1', 'Bought 500 liters of Unleaded-95 and it costs R 85', '2019-05-26 14:57:18.491606');

-- --------------------------------------------------------

--
-- Table structure for table `staffmember`
--

CREATE TABLE `staffmember` (
  `staffID` varchar(15) NOT NULL,
  `idNumber` varchar(15) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Surname` varchar(35) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(13) NOT NULL,
  `role` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `logged_On` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffmember`
--

INSERT INTO `staffmember` (`staffID`, `idNumber`, `Firstname`, `Surname`, `Email`, `Gender`, `username`, `password`, `role`, `active`, `logged_On`) VALUES
('9102653', '22222222', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'Admin', 0, 1),
('3333', '9254258422535', 'sdsd', 'kk', 'cebo@dndnd.com', 'male', '12345', '12345', 'supplier', 1, 0),
('910529', '9105295299083', 'x', 'shezi', 'dludlec.b@gmail.com', 'Male', '910529', '9083', 'supplier', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tank`
--

CREATE TABLE `tank` (
  `Id` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Liters` decimal(20,2) NOT NULL,
  `AmountPerLiter` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank`
--

INSERT INTO `tank` (`Id`, `Name`, `Liters`, `AmountPerLiter`) VALUES
(1, 'Unleaded-95', '510.00', '17.00'),
(2, 'Unleaded-93', '953.00', '16.50'),
(3, 'Diesel', '752.00', '100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tank`
--
ALTER TABLE `tank`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tank`
--
ALTER TABLE `tank`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
