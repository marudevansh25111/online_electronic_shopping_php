-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `no` decimal(10,0) NOT NULL,
  `password` varchar(255) NOT NULL,
  `product` mediumtext DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `Address`, `no`, `password`, `product`, `Price`) VALUES
(1, 'aaaaaaaaaaa', 'gauravsinhkmori@gmail.com', 'from india', '7016277110', '123412345', 'aaaaaaaaaaa , dell LAPTOP , Latest Video Camera', 42000),
(2, 'gaurav', 'e', 'from bhavanagar', '9825771990', 'MORI111', 'Tesla Car , COMPUTER , Simple Camera , Vivo Mobile V10 , Basic LCD Tv', 56734),
(3, 'avadh', 'gauravsinhkmori@gmail.com', 'Bhavnagar', '9898989898', 'mori111', NULL, NULL),
(4, 'Devansh', 'marudevansh25111@gmail.com', 'Rajkot', '9898989898', '12341234', NULL, NULL),
(5, 'Seema Mori', 'simamori70@gmail.com', 'CM - 28/7,Avadh Steel Traders ,Kalvibid ,Bhavanagar,', '7016277110', 'mori', 'Tesla Car', 2000000),
(6, 'gaurav', 'gkmori444@gmail.com', 'CM - 28/7,Avadh Steel Traders ,Kalvibid ,Bhavanagar,', '9898989898', '12341234', NULL, NULL),
(7, 'Arjunsinh Mori', 'moriarjun44@gmail.com', 'Surat', '9898989898', 'mori', 'Tesla Car', 2000000),
(8, 'maurya mori', 'gkmori444@gmail.com', 'from india gujarat', '7878787878', 'mori', 'Latest Techno. Washi', 45000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
