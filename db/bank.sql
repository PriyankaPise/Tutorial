-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Priyanka', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(5) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `middlename` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `adharno` varchar(12) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `accno` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `firstname`, `middlename`, `lastname`, `email`, `mobileno`, `adharno`, `dob`, `accno`, `balance`, `address`, `city`, `gender`) VALUES
(1, 'Divya', 'Shivaji', 'Gadekar', 'divya12@gmail.com', '8978675645', '567453421678', '2000-02-04', '001', '19800', 'Nevasa', 'Nagar', 'Female'),
(2, 'Aarti', 'Prabhakar', 'Shinde', 'aarti@gmail.com', '9089786756', '234556748765', '1998-08-21', '002', '3500', 'Shivaji Chowk', 'Pune', 'Female'),
(3, 'Atul', 'Sidhu', 'Kale', 'atul@gmail.com', '8978675643', '345245322345', '1992-07-18', '003', '5750', 'Datrange Mala', 'Gao', 'Male'),
(5, 'Nilesh', 'Ramdas', 'Pise', 'nilesh@gmail.com', '8897865645', '567434526781', '1998-08-20', '005', '16500', 'Balikashrm Road', 'Ahmednagar', 'Male'),
(6, 'Sona', 'Sunil', 'Jagtap', 'sona@gmail.com', '8978675645', '897865756345', '1999-06-16', '006', '5750', 'Hatampura', 'Ahmednagr', 'Male'),
(7, 'Sunanda', 'Radhasham', 'Shidde', 'suna@gmail.com', '8978675463', '45345278659', '2005-06-09', '007', '2500', 'ngar', 'Nagar', 'Female'),
(8, 'Swati', 'Durgaprasd', 'Dethe', 'swati27@gmail.com', '8967456385', '234567852453', '1997-06-27', '008', '5600', 'Nepti Naka', 'Ahmednagar', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `adharno` varchar(50) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `qual` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `firstname`, `lastname`, `email`, `password`, `mobileno`, `adharno`, `empid`, `dob`, `qual`, `address`) VALUES
(1, 'Subhash', 'Pathak', 'subhash.pathak1996@gmail.com', '12345', '8605697412', '789645342341', '2554', '1996-01-28', 'BSC', 'Tisgao'),
(2, 'Monika', 'Gadekar', 'monika@gmail.com', '12345', '8978675645', '345245636785', '5252', '1996-10-19', 'MCA', 'Borude Mala,Ahmednagar'),
(3, 'Sneha', 'Bihani', 'sneha@gmail.com', '12345', '8978675645', '786756453425', '3505', '1996-06-22', 'B.COM', 'Shrirampur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
