-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 05:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1
-- By Ncube Ntokozo
-- ncuben@solusi.ac.zw
-- +263712948663

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `ID` int(11) NOT NULL,
  `orphanage_name` varchar(255) NOT NULL,
  `orphanage_address` varchar(255) DEFAULT NULL,
  `orphanage_capacity` int(11) DEFAULT NULL,
  `orphanage_district` varchar(255) DEFAULT NULL,
  `orphanage_website` varchar(255) DEFAULT NULL,
  `orphanage_cell` bigint(11) DEFAULT NULL,
  `orphanage_billercode` int(5) DEFAULT NULL,
  `orphanage_type` varchar(255) DEFAULT NULL,
  `orphanage_yearly_fund` int(11) DEFAULT NULL,
  `orphanage_other_needs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`ID`, `orphanage_name`, `orphanage_address`, `orphanage_capacity`, `orphanage_district`, `orphanage_website`, `orphanage_cell`, `orphanage_billercode`, `orphanage_type`, `orphanage_yearly_fund`, `orphanage_other_needs`) VALUES
(10, 'Ntokozo Childrens Home', 'P O Solusi\r\nBulawayo', 500, 'Beitbridge', 'www.ntokozo.org.zw', 774002534, 56235, 'Boys Only', 50000, 'Computers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
