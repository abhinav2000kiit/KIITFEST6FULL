-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 07:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiitfest6`
--

-- --------------------------------------------------------

--
-- Table structure for table `chickensoup`
--

CREATE TABLE `chickensoup` (
  `idno` int(5) NOT NULL,
  `Pname` varchar(70) DEFAULT NULL,
  `Email` varchar(70) NOT NULL,
  `Ppassword` varchar(70) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `whatsapp` varchar(10) DEFAULT NULL,
  `Ayear` int(1) DEFAULT NULL,
  `College` varchar(70) DEFAULT NULL,
  `Pstate` varchar(20) DEFAULT NULL,
  `District` varchar(40) DEFAULT NULL,
  `Picture` varchar(200) DEFAULT NULL,
  `Collegeid` varchar(70) DEFAULT NULL,
  `People` int(5) NOT NULL DEFAULT 0,
  `Caexperience` varchar(1) DEFAULT 'x',
  `Prole` int(2) NOT NULL DEFAULT 0,
  `Paid` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chickensoup`
--

INSERT INTO `chickensoup` (`idno`, `Pname`, `Email`, `Ppassword`, `mobile`, `whatsapp`, `Ayear`, `College`, `Pstate`, `District`, `Picture`, `Collegeid`, `People`, `Caexperience`, `Prole`, `Paid`) VALUES
(8, 'Anubhav Dutta', 'anubhavdutta@hotmail.com', '51a614033caa1cd879234b5142d6885b', '8827472135', '8827472135', 1, 'KIIT University', 'Chhattisgarh', 'Balod', NULL, '', 0, 'n', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chickensoup`
--
ALTER TABLE `chickensoup`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chickensoup`
--
ALTER TABLE `chickensoup`
  MODIFY `idno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
