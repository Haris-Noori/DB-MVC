-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 11:27 PM
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
-- Database: `hms_db`
--
DROP DATABASE IF EXISTS hms_db;
CREATE DATABASE hms_db;
USE hms_db;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(4) NOT NULL,
  `email` varchar(24) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `email`, `name`, `password`) VALUES
(1, 'rehmat@gmail.com', 'rehmat', 'rehmat'),
(2, 'mubeen@gmail.com', 'mubeen', 'mubeen'),
(3, 'haris@gmail.com', 'haris', 'haris');

-- --------------------------------------------------------

--
-- Table structure for table `bookedroom`
--

CREATE TABLE `bookedroom` (
  `room_fk` int(4) NOT NULL,
  `customerID_fk` int(4) NOT NULL,
  `boooked_date` date NOT NULL,
  `checkedOutDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `room_type`, `price`) VALUES
(1, 'Single Seater', 4000),
(2, 'VIP- Single', 8000),
(3, 'VIP- Double', 10000),
(4, 'Double Seater', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `checkedin_room`
--

CREATE TABLE `checkedin_room` (
  `roomID_fk` int(4) NOT NULL,
  `customerID_fk` int(4) NOT NULL,
  `operatorID_fk` int(4) NOT NULL,
  `date_checkedIn` date NOT NULL,
  `date_checkedOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phoneNo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(4) NOT NULL,
  `operatorID_fk` int(4) NOT NULL,
  `customerID_fk` int(4) NOT NULL,
  `room_fk` int(4) NOT NULL,
  `amount_ch` int(6) DEFAULT NULL,
  `gen_date` date DEFAULT NULL,
  `checkedIn` int(6) DEFAULT NULL,
  `checkedOut` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `operatorID` int(4) NOT NULL,
  `email` varchar(24) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`operatorID`, `email`, `name`, `password`) VALUES
(10, 'haris@mail.com', 'haris', 'tea');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(4) NOT NULL,
  `cat_fk` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `cat_fk`, `status`) VALUES
(2, 1, 'booked'),
(3, 1, 'booked'),
(4, 2, 'reserved'),
(5, 3, 'available'),
(6, 4, 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookedroom`
--
ALTER TABLE `bookedroom`
  ADD KEY `room_fk` (`room_fk`),
  ADD KEY `customerID_fk` (`customerID_fk`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_id` (`cat_id`);

--
-- Indexes for table `checkedin_room`
--
ALTER TABLE `checkedin_room`
  ADD KEY `roomID_fk` (`roomID_fk`),
  ADD KEY `customerID_fk` (`customerID_fk`),
  ADD KEY `operatorID_fk` (`operatorID_fk`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `customerID` (`customerID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`),
  ADD KEY `room_fk` (`room_fk`),
  ADD KEY `customerID_fk` (`customerID_fk`),
  ADD KEY `operatorID_fk` (`operatorID_fk`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`operatorID`),
  ADD UNIQUE KEY `operatorID` (`operatorID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD KEY `cat_fk` (`cat_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `operatorID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookedroom`
--
ALTER TABLE `bookedroom`
  ADD CONSTRAINT `bookedroom_ibfk_1` FOREIGN KEY (`room_fk`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `bookedroom_ibfk_2` FOREIGN KEY (`customerID_fk`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`room_fk`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`customerID_fk`) REFERENCES `customer` (`customerID`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`operatorID_fk`) REFERENCES `operator` (`operatorID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`cat_fk`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
