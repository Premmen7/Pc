-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 09:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyyourpcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountId` int(4) NOT NULL,
  `accountEmail` varchar(35) NOT NULL,
  `accountFirstname` varchar(15) NOT NULL,
  `accountLastname` varchar(15) NOT NULL,
  `accountUsername` varchar(15) NOT NULL,
  `accountPassword` varchar(20) NOT NULL,
  `accountPostalCode` varchar(10) NOT NULL,
  `accountAdmin` bit(1) NOT NULL DEFAULT b'0',
  `accountRestricted` bit(1) NOT NULL DEFAULT b'0',
  `accountProfileImageLink` varchar(500) NOT NULL DEFAULT 'Images/testImg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountId`, `accountEmail`, `accountFirstname`, `accountLastname`, `accountUsername`, `accountPassword`, `accountPostalCode`, `accountAdmin`, `accountRestricted`, `accountProfileImageLink`) VALUES
(1, 'remofg54110@gmail.com', 'David', 'P', 'mhbmvvv', 'ngc', '64654', b'0', b'0', 'Images/profilePics/resultGraph8.PNG'),
(2, 'rethesh@gmail.com', 'Davidehte', 'P', 'eh', 'tehehts', 'eheh', b'0', b'0', 'Images/testImg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `assetId` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text1` varchar(2000) NOT NULL,
  `text2` varchar(1500) NOT NULL,
  `imageLink` varchar(500) NOT NULL,
  `type` varchar(25) NOT NULL,
  `enabled` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custombuilds`
--

CREATE TABLE `custombuilds` (
  `customBuildId` int(5) NOT NULL,
  `accountId` int(4) NOT NULL,
  `buildName` varchar(25) NOT NULL DEFAULT 'Untitled',
  `buildCreationTime` date NOT NULL,
  `buildOrderedTime` date NOT NULL,
  `buildOrdered` bit(1) NOT NULL,
  `buildFeatured` bit(1) NOT NULL,
  `buildComment` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordereditems`
--

CREATE TABLE `ordereditems` (
  `orderedItemId` int(8) NOT NULL,
  `customBuildId` int(7) NOT NULL,
  `pcPartId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pcparts`
--

CREATE TABLE `pcparts` (
  `pcPartId` int(7) NOT NULL,
  `pcPartName` varchar(30) NOT NULL,
  `pcPartImageLink` varchar(500) NOT NULL,
  `pcPartDescription` varchar(1500) NOT NULL,
  `pcPartPrice` double NOT NULL,
  `pcPartInventory` int(11) NOT NULL,
  `pcPartType` int(11) NOT NULL,
  `pcPartWattage` int(11) NOT NULL,
  `pcPartCompatibility` int(11) NOT NULL DEFAULT 0,
  `pcPartOrderedTimes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(5) NOT NULL,
  `accountId` int(4) NOT NULL,
  `reviewContent` varchar(2000) NOT NULL,
  `reviewScore` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `accountId`, `reviewContent`, `reviewScore`) VALUES
(1, 2, 'wff', 3),
(2, 2, 'wvawv', 2),
(3, 2, 'bvcwu wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwuav', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountId`),
  ADD UNIQUE KEY `ACCOUNT_accountUsername_UNIQUE` (`accountUsername`) USING BTREE;

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`assetId`);

--
-- Indexes for table `custombuilds`
--
ALTER TABLE `custombuilds`
  ADD PRIMARY KEY (`customBuildId`),
  ADD KEY `CUSTOMBUILDS_accountId_FK` (`accountId`);

--
-- Indexes for table `ordereditems`
--
ALTER TABLE `ordereditems`
  ADD PRIMARY KEY (`orderedItemId`),
  ADD KEY `ORDEREDITEMS_customBuildId_FK` (`customBuildId`),
  ADD KEY `ORDEREDITEMS_pcPartId_FK` (`pcPartId`);

--
-- Indexes for table `pcparts`
--
ALTER TABLE `pcparts`
  ADD PRIMARY KEY (`pcPartId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `REVIEWS_accountId_FK` (`accountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `assetId` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custombuilds`
--
ALTER TABLE `custombuilds`
  MODIFY `customBuildId` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordereditems`
--
ALTER TABLE `ordereditems`
  MODIFY `orderedItemId` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pcparts`
--
ALTER TABLE `pcparts`
  MODIFY `pcPartId` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custombuilds`
--
ALTER TABLE `custombuilds`
  ADD CONSTRAINT `CUSTOMBUILDS_accountId_FK` FOREIGN KEY (`accountId`) REFERENCES `accounts` (`accountId`) ON DELETE CASCADE;

--
-- Constraints for table `ordereditems`
--
ALTER TABLE `ordereditems`
  ADD CONSTRAINT `ORDEREDITEMS_customBuildId_FK` FOREIGN KEY (`customBuildId`) REFERENCES `custombuilds` (`customBuildId`) ON DELETE CASCADE,
  ADD CONSTRAINT `ORDEREDITEMS_pcPartId_FK` FOREIGN KEY (`pcPartId`) REFERENCES `pcparts` (`pcPartId`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `REVIEWS_accountId_FK` FOREIGN KEY (`accountId`) REFERENCES `accounts` (`accountId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
