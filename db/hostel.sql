-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 03:01 PM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`username`, `password`) VALUES
('smart', 'smart');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_info`
--

CREATE TABLE `hostel_info` (
  `id` int(11) NOT NULL,
  `HostelName` varchar(100) DEFAULT NULL,
  `HostelType` varchar(100) DEFAULT NULL,
  `HostelPrice` varchar(100) DEFAULT NULL,
  `HostelLocation` varchar(122) DEFAULT NULL,
  `HostelDetails` varchar(250) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `NormalPrice` varchar(122) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_info`
--

INSERT INTO `hostel_info` (`id`, `HostelName`, `HostelType`, `HostelPrice`, `HostelLocation`, `HostelDetails`, `Location`, `NormalPrice`) VALUES
(8, 'santinagar boys hostel', 'male', '10000', 'santinagara', 'à¤¸à¥à¤¨à¥à¤¦à¤° à¤° à¤¶à¤¾à¤¨à¥à¤¤ à¤¬à¤¾à¤¤à¤¾à¤µà¤°à¤£à¤®à¤¾ à¤…à¤¬à¤¸à¥à¤¥à¤¿à¤¤ à¤¸à¤¾à¤¨à¥à¤¤à¤¿à¤¨à¤—à¤° à¤¬à¥à¤¯à¥‹à¤‡à¤œ à¤¹à¥‹à¤¸à¥à¤Ÿà¤² à¤®à¤¾ à¤­à¤°à¥à¤¨à¤¾ à¤–à¥à¤²à¥à¤¯à¥‹ à¤®à¤¾à¤¸à¤¿à¤• à¤°à¥ à¥§à¥¦à¥¦à¥¦à¥¦ à¤®à¤¾ à¤¹à¤¾ï', 'image/5b445f2fa6580.jpg', '12000'),
(9, 'Roshan Boys hostel', 'male', '7000', 'baneswor', 'ashgdjas  hjsdghesgjf', 'image/5b445f534ddeb.JPG', '9000'),
(10, 'smarikaa girls Hostel', 'female', '6500', 'baneswor', 'ashgdjas  hjsdghesgjf', 'image/5b445f7c0fc4d.jpg', '8500'),
(11, 'smarikaa girls Hostel', 'male', '6500', 'baneswor', 'ashgdjas  hjsdghesgjf', 'image/5b445f9536faf.jpg', '7500'),
(14, 'quality Boys Hostel', 'male', '10000', 'kalanki ', 'dfjsjdhfjksd  bdfjbsdfhbj n jbjsdfjdsbjf nssdbfd', 'image/5b449878157a7.png', '11000'),
(15, 'kharel Boys Hostel', 'male', '12000', 'baneshwor', 'dammi hostel', 'image/5b44b214d5c96.png', '1200000'),
(16, 'suprim Boys Hostel', 'male', '8000', 'baneswor', '', 'image/5b44b4fb68563.png', '1200000'),
(17, 'suprim Boys Hostel', 'male', '8000', 'baneswor', '', 'image/5b44b50f8bc47.png', '1200000'),
(19, 'Aone  Girls Hostel', 'female', '8000', 'baneswor', '', 'image/5b44b577e1ca6.png', '1200000'),
(20, 'kiran Boys Hostel', '', '11000', 'thimi', '    khatra hostel', 'image/5b45a021b6015.png', '15000'),
(21, 'kiran Boys Hostel', '', '11000', 'thimi', '    khatra hostel', 'image/5b45a04750128.png', '15000'),
(22, 'kiran girls Hostel', '', '8000', 'thimi', '    sxsdd', 'image/5b45a11b3d97a.png', '12000'),
(23, 'kiran girls Hostel', 'female', '8000', 'thimi', 'asdasd', 'image/5b45a14a56110.png', '11000'),
(24, 'kiran girls Hostel', '', '8000', 'thimi', '    sxsdd', 'image/5b45a1a237e49.png', '12000'),
(25, '', '', '', '', '    ', 'image/5b45a2214953d.png', ''),
(26, '', '', '', '', '    ', 'image/5b45a2339b78a.png', ''),
(27, 'kiran Boys Hostel', 'male', '7000', 'thimi', '    asdsdfdss', 'image/5b45a2b6df023.png', '15000'),
(28, 'kiran girls Hostel', 'female', '7000', 'thimi', '    asdsdfdss', 'image/5b45a2d918820.png', '15000'),
(30, 'Roshan Boys hostel', 'male', '8000', 'santinagar', '    jjhpoygfjm  dviodccn ', 'image/5b45b26cc54f6.png', '9000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `hostel_info`
--
ALTER TABLE `hostel_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel_info`
--
ALTER TABLE `hostel_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
