-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 08:56 PM
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
(1, 'remofg54110@gmail.com', 'David', 'P', 'mhb', 'ngc', '64654f', b'1', b'0', 'Images/profilePics/WIN_20201204_21_01_53_Pro.jpg'),
(2, 'rethesh@gmail.com', 'Davidehte', 'P', 'eh', 'tehehts', 'eheh', b'1', b'1', 'Images/testImg.jpg'),
(3, 'test@gmail.com', 'testFname', 'testLname', 'testUser', 'test123', 'Q1W E3R', b'0', b'0', 'Images/profilePics/wall.jpg'),
(4, 'test2@gmail.com', 'Test2Fname', 'Test2Lname', 'Test2', 'test123', '9I8 0P9', b'0', b'0', 'Images/testImg.jpg'),
(5, 'test3@gmail.com', 'Test3Fname', 'Test3Lname', 'Test3', 'test123', '7T8 3U9', b'0', b'0', 'Images/testImg.jpg'),
(6, 'bob23@gmail.com', 'TestFname', 'TestLname', 'Bob23', 'bob123', '1Q2 3E4', b'0', b'0', 'Images/profilePics/Giant.jpg'),
(7, 'clarissa@gmail.com', 'TestFname', 'TestLname', 'Clarissa09', 'clarissa123', '1q2 3e4', b'0', b'0', 'Images/profilePics/light.jpg'),
(8, 'steven@gmail.com', 'TestFname', 'TestLname', 'Steven_Mark', 'steven123', '1Q2 3E4', b'0', b'0', 'Images/profilePics/icon.jpg'),
(9, 'kyle@gmail.com', 'TestFname', 'TestLname', 'Kyle07', 'kyle123', '1Q2 3E4', b'0', b'0', 'Images/profilePics/android.jpg'),
(10, 'marley@gmail.com', 'TestFname', 'TestLname', 'Marley_07', 'marley123', '1Q2 3E4', b'0', b'0', 'Images/profilePics/obito.jpg'),
(11, 'yuno@gmail.com', 'TestFname', 'TestLname', 'Yuno29', 'yuno123', '9I8 0P9', b'0', b'0', 'Images/profilePics/einstein.jpg'),
(12, 'ken@gmail.com', 'Ken', 'Ray', 'KenTheOne', 'ken123', '2O3 0U9', b'0', b'0', 'Images/profilePics/clown.jpg'),
(13, 'raymond@gmail.com', 'TestFname', 'TestLname', 'raymond95', 'raymond123', '0O9 I8U', b'0', b'0', 'Images/profilePics/sponge.jpg');

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

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`assetId`, `title`, `text1`, `text2`, `imageLink`, `type`, `enabled`) VALUES
(1, 'Fast and Efficient Team', 'We have the best professionals at our disposal ready to build the best PC build of your needs.', '', 'Images\\assets\\computer-repair.jpg', 'homeCards', b'1'),
(2, 'Sign In and Customize Your PC', 'Our home made tool to select pc parts in our inventory for your build.', 'Signup.php', 'Images\\assets\\maxresdefault.jpg', 'homeCards', b'1'),
(3, 'Ready to Your Door', 'We work with the most competent delivery services to send you your PC and deliver it within 2 to 3 business days.', '', 'Images\\assets\\factor.jpg', 'homeCards', b'1');

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

--
-- Dumping data for table `custombuilds`
--

INSERT INTO `custombuilds` (`customBuildId`, `accountId`, `buildName`, `buildCreationTime`, `buildOrderedTime`, `buildOrdered`, `buildFeatured`, `buildComment`) VALUES
(18, 1, 'Rockinator', '2021-05-14', '0000-00-00', b'1', b'1', 'A try best build for noobs'),
(35, 1, 'Basic 2000', '2021-05-14', '0000-00-00', b'0', b'1', 'A basic build for a basic person'),
(36, 1, 'EyeBrows 90', '2021-05-14', '0000-00-00', b'0', b'1', 'For the ones with clear eyes'),
(42, 1, 'Untitled', '2021-05-14', '0000-00-00', b'0', b'0', '');

-- --------------------------------------------------------

--
-- Table structure for table `ordereditems`
--

CREATE TABLE `ordereditems` (
  `orderedItemId` int(8) NOT NULL,
  `customBuildId` int(7) NOT NULL,
  `pcPartId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordereditems`
--

INSERT INTO `ordereditems` (`orderedItemId`, `customBuildId`, `pcPartId`) VALUES
(8, 18, 4),
(10, 18, 46),
(11, 18, 54),
(12, 18, 70),
(13, 18, 81),
(28, 35, 11),
(30, 35, 45),
(31, 35, 57),
(32, 35, 71),
(36, 36, 41),
(37, 36, 58),
(38, 36, 65),
(74, 35, 80),
(75, 36, 84),
(77, 36, 30),
(78, 36, 14),
(79, 42, 12);

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

--
-- Dumping data for table `pcparts`
--

INSERT INTO `pcparts` (`pcPartId`, `pcPartName`, `pcPartImageLink`, `pcPartDescription`, `pcPartPrice`, `pcPartInventory`, `pcPartType`, `pcPartWattage`, `pcPartCompatibility`, `pcPartOrderedTimes`) VALUES
(1, 'AMD Ryzen 5 3600', 'Images/PartsPics/Ryzen5.jpg', '6 cores and 12 processing threads bundled with the quiet AMD wraith stealth cooler max temps 95°C.\r\n4 2 GHz max boost unlocked for overclocking 35 MB of game cache DDR4 3200 support.\r\nFor the advanced socket AM4 platform can support PCIe 4 0 on x570 motherboards.', 234.99, 35, 0, 65, 2, 0),
(2, 'AMD Ryzen 7 3700x', 'Images/PartsPics/Ryzen7x.jpg', '8 Cores and 16 processing threads, bundled with the AMD Wraith Prism cooler with color-controlled LED support.\r\n4.4 GHz Max Boost, unlocked for overclocking, 36 MB of game Cache, ddr-3200 support.\r\nFor the advanced socket AM4 platform, can support PCIe 4.0 on x570 motherboards.', 458.16, 15, 0, 65, 2, 0),
(3, 'AMD Ryzen 5 5600x', 'Images/PartsPics/Ryzen55600x.jpg', 'AMD\'s fastest 6 core processor for mainstream desktop, with 12 processing threads.\r\n4.6 GHz Max Boost, unlocked for overclocking, 35 MB of cache, DDR-3200 support.\r\nFor the advanced Socket AM4 platform, can support PCIe 4.0 on X570 and B550 motherboards.', 439.99, 25, 0, 65, 2, 0),
(4, 'AMD Ryzen 7 5800x', 'Images/PartsPics/Ryzen75800x.jpg', 'AMD\'s fastest 8 core processor for mainstream desktop, with 16 processing threads.\r\n4.7 GHz Max Boost, unlocked for overclocking, 36 MB of cache, DDR-3200 support.\r\nFor the advanced Socket AM4 platform, can support PCIe 4.0 on X570 and B550 motherboards.', 569.99, 12, 0, 105, 2, 0),
(5, 'AMD Ryzen 9 5950XX', 'Images/PartsPics/Ryzen95950x.jpg', '16 cores and 32 processing threads.\r\n4.9 GHz Max Boost, unlocked for overclocking, 72 MB of cache, DDR-3200 support.\r\nFor the advanced Socket AM4 platform, can support PCIe 4.0 on X570 and B550 motherboards.', 1534.79, 11, 0, 105, 2, 0),
(6, 'AMD Ryzen 5 3600X', 'Images/PartsPics/Ryzen53600x.jpg', '6 Cores and 12 processing threads, bundled with the powerful AMD Wraith Spire cooler.\r\n4.4 GHz Max Boost, unlocked for overclocking, 35 MB of game Cache, ddr-3200 support.\r\nFor the advanced socket AM4 platform, can support PCIe 4.0 on x570 motherboards.', 367.89, 35, 0, 95, 2, 0),
(7, 'AMD Ryzen 9 5900X', 'Images/PartsPics/Ryzen95900x.jpg', '12 cores and 24 processing threads.\r\n4.8 GHz Max Boost, unlocked for overclocking, 70 MB of cache, DDR-3200 support.\r\nFor the advanced Socket AM4 platform, can support PCIe 4.0 on X570 and B550 motherboards.', 896.75, 16, 0, 105, 2, 0),
(8, 'AMD Ryzen 9 3900X', 'Images/PartsPics/Ryzen93900x.jpg', '12 Cores and 24 processing threads, bundled with the AMD Wraith Prism cooler with color controlled LED support.\r\n4.6 GHz Max Boost, unlocked for overclocking, 70 MB of game Cache, DDR 3200 support.\r\nFor the advanced socket AM4 platform, can support PCIe 4.0 on x570 motherboards.', 669.99, 23, 0, 105, 2, 0),
(9, 'Intel Core i7-10700K', 'Images/PartsPics/Inteli710700k.jpg', '8 Cores / 16 Threads\r\nSocket type LGA 1200\r\nUp to 5.1 GHz unlocked\r\nCompatible with Intel 400 series chipset based motherboards\r\nIntel Turbo Boost Max Technology 3.0 support\r\nIntel Optane Memory support', 470.17, 19, 0, 125, 1, 0),
(10, 'Intel Core i9-10900K', 'Images/PartsPics/Inteli910900k.jpg', '10 Cores / 20 Threads\r\nSocket type LGA 1200\r\nUp to 5. 3 GHz unlocked\r\nCompatible with Intel 400 series chipset based motherboards\r\nIntel Turbo Boost Max Technology 3. 0 support\r\nIntel Optane Memory support', 666.81, 23, 0, 125, 1, 0),
(11, 'Intel Core i5-10600K', 'Images/PartsPics/Inteli510600k.jpg', '6 Cores / 12 Threads\r\nSocket Type LGA 1200. Bus Speed is 8 GT/s\r\nUp to 4. 8 GHz Unlocked\r\nCompatible with Intel 400 series chipset based motherboards\r\nIntel Optane Memory Support', 304.1, 53, 0, 125, 1, 0),
(12, 'Intel Core i9-10850K', 'Images/PartsPics/Inteli910850k.jpg', '10 core/20 threads\r\nUp to 5.2ghz Unlocked\r\nCompatible with Intel 400 series chipset based motherboards\r\nIntel Turbo Boost Max Technology 3.0 Support', 574.84, 27, 0, 125, 1, 0),
(13, 'Intel Core i7-9700K', 'Images/PartsPics/Inteli79700k.jpg', '8 cores / 8 threads; Max Memory Bandwidth: 41.6 GB/s\r\n3.60 GHz up to 4.90 GHz / 12 MB cache\r\nCompatible only with motherboards based on intel 300 series chipsets\r\nIntel Optane memory supported', 440.91, 21, 0, 95, 1, 0),
(14, 'Intel Core i5-11600K', 'Images/PartsPics/Inteli511600k.jpg', '# of Cores 6\r\n# of Threads 12\r\nProcessor Base Frequency 3.90 GHz\r\nMax Turbo Frequency 4.90 GHz\r\nCache 12 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.90 GHz', 390.89, 25, 0, 125, 1, 0),
(15, 'Intel Core i7-11700K', 'Images/PartsPics/Inteli711700k.jpg', '# of Cores 8\r\n# of Threads 16\r\nProcessor Base Frequency 3.60 GHz\r\nMax Turbo Frequency 5.00 GHz\r\nCache 16 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Max Technology 3.0 Frequency 5.00 GHz\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.90 GHz', 603.58, 17, 0, 125, 1, 0),
(16, 'Intel Core i9-9900K', 'Images/PartsPics/Inteli99900k.jpg', '# of Cores 8\r\n# of Threads 16\r\nProcessor Base Frequency 3.60 GHz\r\nMax Turbo Frequency 5.00 GHz\r\nCache 16 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 5.00 GHz', 551.72, 14, 0, 95, 1, 0),
(17, 'Intel Core i5-9600K', 'Images/PartsPics/Inteli59600k.jpg', '# of Cores 6\r\n# of Threads 6\r\nProcessor Base Frequency 3.70 GHz\r\nMax Turbo Frequency 4.60 GHz\r\nCache 9 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.60 GHz', 334.85, 16, 0, 95, 1, 0),
(18, 'Intel Core i7-8700K', 'Images/PartsPics/Inteli78700k.jpg', '# of Cores 6\r\n# of Threads 12\r\nProcessor Base Frequency 3.70 GHz\r\nMax Turbo Frequency 4.70 GHz\r\nCache 12 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.70 GHz', 540.36, 26, 0, 95, 1, 0),
(19, 'Intel Core i7-7700K', 'Images/PartsPics/Inteli77700k.jpg', '# of Cores 4\r\n# of Threads 8\r\nProcessor Base Frequency 4.20 GHz\r\nMax Turbo Frequency 4.50 GHz\r\nCache 8 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\n# of QPI Links 0\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.50 GHz', 661.08, 37, 0, 91, 1, 0),
(20, 'Intel Core i5-3570K', 'Images/PartsPics/Inteli53570k.jpg', '# of Cores 4\r\n# of Threads 4\r\nProcessor Base Frequency 3.40 GHz\r\nMax Turbo Frequency 3.80 GHz\r\nCache 6 MB Intel® Smart Cache\r\nBus Speed 5 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 3.80 GHz', 221.98, 55, 0, 77, 1, 0),
(21, 'Intel Core i7-6700K', 'Images/PartsPics/Inteli76700k.jpg', '# of Cores 4\r\n# of Threads 8\r\nProcessor Base Frequency 4.00 GHz\r\nMax Turbo Frequency 4.20 GHz\r\nCache 8 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\n# of QPI Links 0\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.20 GHz', 596.69, 20, 0, 91, 1, 0),
(22, 'Intel Core i9-10980XE', 'Images/PartsPics/Inteli910980xe.jpg', '# of Cores 18\r\n# of Threads 36\r\nProcessor Base Frequency 3.00 GHz\r\nMax Turbo Frequency 4.60 GHz\r\nCache 24.75 MB Intel® Smart Cache\r\nBus Speed 8 GT/s DMI3\r\nIntel® Turbo Boost Max Technology 3.0 Frequency 4.80 GHz', 1481.39, 7, 0, 165, 1, 0),
(23, 'Intel Core i5-6600K', 'Images/PartsPics/Inteli56600k.jpg', '# of Cores 4\r\n# of Threads 4\r\nProcessor Base Frequency 3.50 GHz\r\nMax Turbo Frequency 3.90 GHz\r\nCache 6 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 3.90 GHz', 383.83, 39, 0, 91, 1, 0),
(24, 'Intel Core i7-4790K', 'Images/PartsPics/Inteli74790k.jpg', '# of Cores 4\r\n# of Threads 8\r\nProcessor Base Frequency 4.00 GHz\r\nMax Turbo Frequency 4.40 GHz\r\nCache 8 MB Intel® Smart Cache\r\nBus Speed 5 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.40 GHz', 431.14, 28, 0, 88, 1, 0),
(25, 'Intel Core i7-9700', 'Images/PartsPics/Inteli79700.jpg', '# of Cores 8\r\n# of Threads 8\r\nProcessor Base Frequency 3.00 GHz\r\nMax Turbo Frequency 4.70 GHz\r\nCache 12 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.70 GHz', 379.26, 15, 0, 65, 1, 0),
(26, 'Intel Core i7-8700', 'Images/PartsPics/Inteli78700.jpg', '# of Cores 6\r\n# of Threads 12\r\nProcessor Base Frequency 3.20 GHz\r\nMax Turbo Frequency 4.60 GHz\r\nCache 12 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.60 GHz', 329.73, 15, 0, 65, 1, 0),
(27, 'Intel Core i5-8600K', 'Images/PartsPics/Inteli58600k.jpg', '# of Cores 6\r\n# of Threads 6\r\nProcessor Base Frequency 3.60 GHz\r\nMax Turbo Frequency 4.30 GHz\r\nCache 9 MB Intel® Smart Cache\r\nBus Speed 8 GT/s\r\nIntel® Turbo Boost Technology 2.0 Frequency 4.30 GHz', 374.8, 20, 0, 95, 1, 0),
(28, 'MSI B450 TOMAHAWK MAX', 'Images/PartsPics/MSIB450.jpg', 'CPU Support \r\nSupports 1st, 2nd and 3rd Gen AMD Ryzen™ / Ryzen™ with\r\nRadeon™ Vega Graphics and 2nd Gen AMD Ryzen™ with\r\nRadeon™ Graphics / Athlon™ with Radeon™ Vega Graphics\r\nDesktop Processors for Socket AM4\r\n\r\nCPU Socket Socket AM4\r\nChipset AMD® B450 Chipset\r\n\r\nGraphics Interface\r\n1 x PCI-E 3.0 x16 slot + 1 x PCI-E 2.0 x16 slot\r\nSupport 2-way CrossFire\r\n\r\nDisplay Interface \r\nHDMI, DVI-D – Requires Processor Graphics\r\n\r\nMemory Support \r\n4 DIMMs, Dual Channel DDR4-4133\r\n\r\nExpansion Slots \r\n3 x PCI-E x1 slots\r\n\r\nStorage \r\n1 x M.2 slot, 6 x SATA 6Gb/s\r\n\r\nUSB ports \r\n2 x USB 3.2(Gen2) + 4 x USB 3.2(Gen1) + 6 x USB 2.0\r\nLAN \r\nRealtek®8111H Gigabit LAN\r\n\r\nAudio \r\n8-Channel(7.1) HD Audio with Audio Boost', 122.59, 26, 1, 70, 2, 0),
(29, 'MSI Z390-A PRO', 'Images/PartsPics/MSIZ390APRO.jpg', 'CPU Support \r\nSupports 9th/8th Gen Intel®\r\nCore™ / Pentium®\r\nGold / Celeron® processors\r\n\r\nCPU Socket \r\nLGA 1151\r\n\r\nChipset \r\nIntel®Z390 Chipset\r\n\r\nGraphics Interface\r\n2 x PCI-E 3.0 x16 slots\r\nSupport 2-way AMD® CrossFire™ Technology\r\n\r\nDisplay Interface \r\nDisplayPort, DVI-D & VGA - Requires Processor Graphics\r\n\r\nMemory Support \r\n4 DIMMs, Dual Channel DDR4 up to 4400\r\n\r\nExpansion Slots \r\n4 x PCI-E x1 slots\r\n\r\nStorage \r\n1 x Turbo M.2 slot, supports Intel® OptaneTM Technology\r\n6 x SATA 6Gb/s\r\n\r\nSATA RAID \r\nRAID 0, 1, 5, 10 – Available on ports SATA1 to SATA6\r\n\r\nUSB ports \r\n2 x USB 3.1(Gen2) Type A+C + 6 x USB 3.1(Gen1) + 6 x\r\nUSB 2.0\r\n\r\nLAN \r\nIntel® I219-V Gigabit LAN\r\n\r\nAudio \r\n8-Channel(7.1) HD Audio with Audio Boost\r\n', 129.99, 35, 1, 70, 1, 0),
(30, 'Asus TUF GAMING X570-PLUS (WI-', 'Images/PartsPics/ASUSTUFX570PRO.jpg', 'CPU\r\nAMD AM4 Socket AMD RyzenTM 5000 Series Processors/AMD RyzenTM 4000 G-Series Processors/AMD RyzenTM 3000 Series Processors/AMD RyzenTM 2000 Series Processors/AMD RyzenTM 3000 G-Series Processors/AMD RyzenTM 2000 G-Series Processors Processors\r\n\r\nChipset\r\nAMD X570\r\n\r\nMemory\r\n4 x DIMM, Max. 128GB, DDR4 5100(O.C)/4800(O.C.)/4600(O.C)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3200(O.C.)/3000(O.C.)/2933(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory\r\nDual Channel Memory Architecture\r\n\r\nGraphic\r\nIntegrated Graphics in AMD Ryzen™ 4000 G-Series/ 3000 G-Series/ 2000 G-Series Desktop Processors\r\nMulti-VGA output support : HDMI/DisplayPort   ports\r\n- Supports HDMI 1.4b with max. resolution 4096  x 2160  @ 24  Hz / 2560  x 1600  @ 60  Hz\r\n- Supports DisplayPort with max. resolution 4096  x 2160  @ 60  Hz\r\n\r\nMulti-GPU Support\r\nSupports AMD CrossFireX™ Technology\r\n\r\nExpansion Slots\r\nAMD Ryzen™ 5000 Series/ 4000 G-Series/ 3000 Series Desktop Processors\r\n1 x PCIe 4.0 x16 (x16 mode)\r\nAMD RyzenTM 4000 G-Series / 2000 Series Processors\r\n1 x PCIe 3.0 x16 (x16 mode)\r\nAMD RyzenTM 3000 G-Series / 2000 G-Series Processors\r\n1 x PCIe 3.0/2.0 x16 (x8 mode)\r\nAMD X570 chipset\r\n1 x PCIe 4.0 x16 (max at x4 mode)\r\n2 x PCIe 4.0 x1\r\n\r\nStorage\r\nAMD RyzenTM 3000 Series Processors :\r\n1 x M.2 Socket 3, with M Key, Type 2242/2260/2280/22110(PCIE 4.0 x4 and SATA modes) storage devices support\r\nAMD Ryzen™ 4000 G-Series/ 3000 G-Series/ 2000 Series/ 2', 192, 35, 1, 70, 1, 0),
(31, 'Asus TUF GAMING X570-PLUS (WI-', 'Images/PartsPics/ASUSTUFX570PRO.jpg', 'CPU\r\nAMD AM4 Socket AMD RyzenTM 5000 Series Processors/AMD RyzenTM 4000 G-Series Processors/AMD RyzenTM 3000 Series Processors/AMD RyzenTM 2000 Series Processors/AMD RyzenTM 3000 G-Series Processors/AMD RyzenTM 2000 G-Series Processors Processors\r\n\r\nChipset\r\nAMD X570\r\n\r\nMemory\r\n4 x DIMM, Max. 128GB, DDR4 5100(O.C)/4800(O.C.)/4600(O.C)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3200(O.C.)/3000(O.C.)/2933(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory\r\nDual Channel Memory Architecture\r\n\r\nGraphic\r\nIntegrated Graphics in AMD Ryzen™ 4000 G-Series/ 3000 G-Series/ 2000 G-Series Desktop Processors\r\nMulti-VGA output support : HDMI/DisplayPort   ports\r\n- Supports HDMI 1.4b with max. resolution 4096  x 2160  @ 24  Hz / 2560  x 1600  @ 60  Hz\r\n- Supports DisplayPort with max. resolution 4096  x 2160  @ 60  Hz\r\n\r\nMulti-GPU Support\r\nSupports AMD CrossFireX™ Technology\r\n\r\nExpansion Slots\r\nAMD Ryzen™ 5000 Series/ 4000 G-Series/ 3000 Series Desktop Processors\r\n1 x PCIe 4.0 x16 (x16 mode)\r\nAMD RyzenTM 4000 G-Series / 2000 Series Processors\r\n1 x PCIe 3.0 x16 (x16 mode)\r\nAMD RyzenTM 3000 G-Series / 2000 G-Series Processors\r\n1 x PCIe 3.0/2.0 x16 (x8 mode)\r\nAMD X570 chipset\r\n1 x PCIe 4.0 x16 (max at x4 mode)\r\n2 x PCIe 4.0 x1\r\n\r\nStorage\r\nAMD RyzenTM 3000 Series Processors :\r\n1 x M.2 Socket 3, with M Key, Type 2242/2260/2280/22110(PCIE 4.0 x4 and SATA modes) storage devices support\r\nAMD Ryzen™ 4000 G-Series/ 3000 G-Series/ 2000 Series/ 2', 192.99, 24, 1, 70, 2, 0),
(32, 'Gigabyte Z390 AORUS PRO WIFI', 'Images/PartsPics/GIGABYTEZ390AORUSPRO.jpg', 'CPU\r\nSupport for 9th and 8th Generation Intel® Core™ i9 processors/ Intel® Core™ i7 processors/ Intel® Core™ i5 processors/ Intel® Core™ i3 processors/ Intel® Pentium® processors/ Intel® Celeron® processors in the LGA1151 package\r\nL3 cache varies with CPU\r\n\r\nChipset\r\nIntel® Z390 Express Chipset\r\n\r\nMemory\r\n4 x DDR4 DIMM sockets supporting up to 128GB (32GB single DIMM capacity) of system memory\r\nDual channel memory architecture\r\nSupport for DDR4 4266(O.C.) / 4133(O.C.) / 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666 / 2400 / 2133 MHz memory modules\r\nSupport for ECC Un-buffered DIMM 1Rx8/2Rx8 memory modules (operate in non-ECC mode)\r\nSupport for non-ECC Un-buffered DIMM 1Rx8/2Rx8/1Rx16 memory modules\r\nSupport for Extreme Memory Profile (XMP) memory modules\r\n\r\nOnboard Graphics\r\nIntegrated Graphics Processor-Intel® HD Graphics support:\r\n1 x HDMI port, supporting a maximum resolution of 4096x2160@30 Hz\r\n* Support for HDMI 1.4 version and HDCP 2.2.\r\n\r\nAudio\r\nRealtek® ALC1220-VB codec\r\n* The back panel line out jack supports DSD audio.\r\nHigh Definition Audio\r\n2/4/5.1/7.1-channel\r\nSupport for S/PDIF Out\r\n\r\nLAN\r\nIntel® GbE LAN chip (10/100/1000 Mbit)\r\n\r\nWireless Communication module\r\nIntel® CNVi interface 802.11a/b/g/n/ac, supporting 2.4/5 GHz Dual-Band\r\nBLUETOOTH 5\r\nSupport for 11ac 160 MHz wireless standard and up to 1.73 Gbps data rate\r\n\r\nExpansion Slots\r\n', 229.99, 60, 1, 70, 1, 0),
(33, 'ASRock B365 Pro4', 'Images/PartsPics/ASROCKB365PRO4.jpg', 'Supports 9th and 8th Gen Intel® Core™ processors (Socket 1151)\r\nSupports DDR4 2666\r\n2 PCIe 3.0 x16, 2 PCIe 3.0 x1, 1 M.2 Key E for WiFi\r\nAMD Quad CrossFireX™\r\nGraphics Output Options: HDMI, DVI-D, D-Sub\r\n7.1 CH HD Audio (Realtek ALC892 Audio Codec), ELNA Audio Caps\r\n6 SATA3, 2 Ultra M.2 (1 x PCIe Gen3 x4 & SATA3, 1 x PCIe Gen3 x4)\r\n8 USB 3.1 Gen1 (2 Front, 5 Rear, 1 Type-C)\r\nIntel® Gigabit LAN', 95.99, 45, 1, 70, 1, 0),
(34, 'Asus ROG STRIX B550-A GAMING', 'Images/PartsPics/ASUSROGSTRIXB550A.jpg', 'CPU\r\nAMD AM4 Socket for AMD Ryzen™ 5000 Series/ 4000 G-Series/ 3000 Series Desktop Processors\r\n\r\nChipset\r\nAMD B550\r\n\r\nMemory\r\nAMD RyzenTM 4000 G-Series Processors\r\n4 x DIMM, Max. 128GB, DDR4 5100(O.C)/4800(O.C.)/4600(O.C)/4400(O.C)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3600(O.C.)/3466(O.C.)/3200/3000/2800/2666/2400/2133 MHz Un-buffered Memory\r\n4 x DIMM, Max. 128GB, DDR4 4600(O.C)/4400(O.C)/4133(O.C.)/4000(O.C.)/3866(O.C.)/3600(O.C.)/3466(O.C.)/3200/3000/2800/2666/2400/2133 MHz Un-buffered Memory\r\nOptiMem II\r\nDual Channel Memory Architecture\r\nECC Memory (ECC mode) support varies by CPU.\r\n\r\nGraphic\r\n1 x HDMI 2.1(4K@60HZ)\r\n1 x DisplayPort  1.2\r\n*Graphics specifications may vary between CPU types.\r\nIntegrated Graphics Processor\r\n\r\nMulti-GPU Support\r\nSupports AMD 2-Way CrossFireX Technology\r\n\r\nExpansion Slots\r\nAMD Ryzen™ 5000 Series/ 3000 Series Desktop Processors\r\nAMD B550 Chipset\r\n1 x PCIe 3.0 x16 (x4 mode) *\r\n3 x PCIe 3.0 x1\r\n1 x PCIe 4.0 x16 (x16 mode)\r\n1 x PCIe 3.0 x16 (x16 mode)\r\n\r\nStorage\r\nAMD RyzenTM 4000 G-Series Processor : \r\nAMD Ryzen™ 5000 Series/ 3000 Series Desktop Processors \r\n1 x M.2_1 socket 3, with M key, type 2242/2260/2280/22110 storage devices support (SATA & PCIE 3.0 x 4 mode)*\r\n1 x M.2_2 socket 3, with M key, type 2242/2260/2280/22110 storage devices support (SATA & PCIE 3.0 x 4 mode)\r\nTotal supports 2 x M.2 slot(s) and 6 x SATA 6Gb/s ports\r\n1 x M.2_1 socket 3, with M key, type 2242/2260/2280/22110 storage devices support(SATA & PCIe 4.0 x4 mode)\r\nAMD B550 Chipse', 162.99, 32, 1, 70, 2, 0),
(35, 'Gigabyte X570 AORUS MASTER', 'Images/PartsPics/GIGABYTEX570AORUSMASTER.jpg', 'Supports AMD Ryzen™ 5000 Series / 3rd Gen Ryzen™/ 2nd Gen Ryzen™/ 2nd Gen Ryzen™ with Radeon™ Vega Graphics/ Ryzen™ with Radeon™ Vega Graphics Processors\r\nDual Channel ECC/ Non-ECC Unbuffered DDR4, 4 DIMMs\r\nDirect 14 Phases Infineon Digital VRM Solution with PowIRstage\r\nAdvanced Thermal Design with Fins-Array Heatsink and Direct Touch Heatpipe\r\nTriple Ultra-Fast NVMe PCIe 4.0/3.0 x4 M.2 with Triple Thermal Guards\r\nIntel® WiFi 6 802.11ax 2T2R & BT 5\r\nRear 125dB SNR AMP-UP Audio with ALC1220-VB & ESS SABRE 9118 DAC with WIMA Audio Capacitors\r\nRealtek® 2.5GbE + Intel® Gigabit LAN with cFosSpeed\r\nUSB TurboCharger for Mobile Device Fast Charge Support\r\nRGB FUSION 2.0 with Multi-Zone Addressable LED Light Show Design, Supports Addressable LED & RGB LED Strips\r\nSmart Fan 5 Features Multiple Temperature Sensors, Hybrid Fan Headers with FAN STOP and Noise Detection\r\nFront & Rear USB 3.2 Gen2 Type-C™ Headers\r\nAdopts a high quality ball bearing fan which guarantees 60,000 working hours.', 369.99, 26, 1, 70, 2, 0),
(36, 'Gigabyte Z390 GAMING X', 'Images/PartsPics/GIGABYTEZ390GAMINGX.jpg', 'Supports 9th and 8th Gen Intel® Core™ Processors\r\nDual Channel Non-ECC Unbuffered DDR4\r\nNew 10+2 Phases Digital PWM Design\r\nDual Ultra-Fast M.2 with PCIe Gen3 X4 (1 with Thermal Guard) & SATA interface\r\n2-Way CrossFire™ Multi-Graphics Support with PCIe Armor and Ultra Durable™ Design\r\nIntel® Native USB 3.1 Gen2 Type-A\r\nIntel® GbE LAN with cFosSpeed Internet Accelerator Software\r\nUltra Durable™ 25KV ESD and 15KV Surge LAN Protection\r\nHigh Quality Audio Capacitors and Audio Noise Guard with LED Trace Path Lighting\r\nSupport RGB Lighting Effect in Full Colors\r\nCEC 2019 Ready, Save Power With a Simple Click\r\nSmart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP\r\nLightning-Fast Intel® Thunderbolt™ 3 AIC Support\r\nIntel® Optane™ Memory Ready', 149.99, 32, 1, 70, 1, 0),
(37, 'Asus ROG MAXIMUS XI FORMULA', 'Images/PartsPics/ASUSROGMAXIMUSXIFORMULA.jpg', 'LGA1151 socket for 9th/8th -gen Intel® Core™ desktop processors\r\nCrossChill EK III and Water Cooling Zone: Keep your system cool when the action heats up\r\nROG Eco-System: ASUS-exclusive Aura Sync RGB lighting, including headers for both standard and addressable RGB strips\r\nGaming connectivity: Aquantia 5G LAN, Intel Gigabit Ethernet, LANGuard, 2x2 802.11ac Wi-Fi, Dual M.2, USB 3.1 Gen 2 Type-A and Type-C™ connectors\r\n5-way Optimization: Automated system-wide tuning, providing AI Overclocking and cooling profiles trailor-made for your rig\r\nGaming Audio: SupremeFX and Sonic Studio III – High fidelity audio that draws you deeper into the action', 1499.99, 5, 1, 70, 1, 0),
(38, 'ASRock Z390 Pro4', 'Images/PartsPics/ASROCKZ390PRO4.jpg', 'Supports 9th and 8th Gen Intel® Core™ processors (Socket 1151)\r\n10 Power Phase Design\r\nSupports DDR4 4300MHz+ (OC)\r\n2 PCIe 3.0 x16, 3 PCIe 3.0 x1, 1 M.2 (Key E) For WiFi\r\nAMD Quad CrossFireX™ and CrossFireX™\r\nGraphics Output Options: HDMI, DVI-D, D-Sub\r\n7.1 CH HD Audio (Realtek ALC892 Audio Codec), ELNA Audio Caps\r\n6 SATA3, 2 Ultra M.2 (PCIe Gen3 x4 & SATA3)\r\n2 USB 3.1 Gen2 (Rear Type-A+C), 6 USB 3.1 Gen1 (4 Front, 2 Rear)\r\nIntel® Gigabit LAN', 112.97, 36, 1, 70, 1, 0),
(39, 'MSI MAG B550 TOMAHAWK', 'Images/PartsPics/MSIMAGB550.jpg', 'Supports AMD Ryzen™ 5000 & 3000 Series desktop processors (not compatible with AMD Ryzen™ 5 3400G & Ryzen™ 3 3200G) and AMD Ryzen™ 4000 G-Series desktop processors\r\nSupports DDR4 Memory, up to 5100+(OC) MHz\r\nLightning Fast Game experience: PCIe 4.0, Lightning Gen 4 x4 M.2 with M.2 Shield Frozr, AMD Turbo USB 3.2 Gen 2\r\nPremium Thermal Solution: Extended Heatsink Design with additional choke thermal pad rated for 7W/mk and PCB with 2oz thickened copper are built for high performance system and non-stop gaming experience.\r\nEnhanced Power Design: 10+2+1 Duet Rail Power System, Digital PWM, Core Boost, DDR4 Boost.\r\nLatest Network Solution: Onboard 2.5G LAN plus Gigabit LAN with LAN Manager deliver the best online experience without lag.\r\nMystic Light: 16.8 million colors / 29 effects controlled in one click. Mystic Light Extension supports RGB and RAINBOW LED strip.\r\nPre-installed I/O Shielding: Better EMI protection and more convenience for installation.\r\nAudio Boost: Reward your ears with studio grade sound quality for the most immersive gaming experience.\r\nMulti-GPU: With Steel Armor PCI-E slots. Supports 2-Way AMD Crossfire™', 174.95, 21, 1, 70, 2, 0),
(40, 'Asus ROG Crosshair VIII Dark H', 'Images/PartsPics/ASUSROGCROSSHAIRVIIIDARKHERO.jpg', 'Amd AM4 socket:  ready for 2nd, and 3rd Gen AMD Ryzen processors and up to two M. 2 drives, USB 3. 2 Gen2, and AMD storemi TO maximize connectivity and speed.\r\nComprehensive thermal design: active PCH heatsink, M. 2 aluminum heatsink and ROG cooling zone.Supports up to 32-Bit/192kHz playback\r\nHigh-performance networking: integrated 2. 5 Gaps Ethernet and Gigabit Ethernet, both with ASUS LANGuard protection, and support for GameFirst V software.\r\n5-Way Optimization: automated system-wide tuning, providing overclocking and cooling profiles that are tailor made for your rig.\r\nDiy friendly design: pre-mounted I/O shield, ASUS safe Slot, BIOS Flashback and premium components for maximum endurance.\r\n\r\n', 595.97, 23, 1, 70, 2, 0),
(41, 'Corsair Vengeance LPX 16 GB', 'Images/PartsPics/CorsairVengeanceLPX.jpg', 'VENGEANCE LPX memory is designed for high-performance overclocking. The heatspreader is made of pure aluminum for faster heat dissipation, and the eight-layer PCB helps manage heat and provides superior overclocking headroom.\r\n\r\nSpeed: DDR4-3200\r\n\r\nModules: 2 x 8GB', 133.98, 60, 2, 14, 0, 0),
(42, 'Corsair Vengeance RGB Pro 16GB', 'Images/PartsPics/CorsairVengeanceRGBPro.jpg', 'CORSAIR VENGEANCE RGB PRO Series DDR4 overclocked memory lights up your PC with mesmerizing dynamic multi-zone RGB lighting, while delivering the best in DDR4 performance.\r\n\r\nSpeed: DDR4-3200\r\n\r\nModule: 2 x 8GB', 144.99, 60, 2, 14, 0, 0),
(43, 'Crucial Ballistix 16 GB', 'Images/PartsPics/CrucialBallistix.jpg', 'Engineered for the latest AMD and Intel platforms\r\nXMP 2.0 support for automatic overclocking or run at JEDEC default profile\r\nModern aluminum heat spreader available in multiple colors to match your system build or style\r\n\r\nSpeed: DDR4-3200\r\n\r\nModules: 2 x 8GB', 124.16, 60, 2, 14, 0, 0),
(44, 'G.Skill Trident Z RGB 16 GB', 'Images/PartsPics/GSKILLTridentZRGBSeries.jpg', 'Series	Trident Z RGB\r\nModel	F4-3200C16D-16GTZR\r\nType	DDR4\r\nLighting	RGB\r\nCapacity	16GB\r\nSpeed (MHz)	DDR4 3200\r\nTiming	16-18-18-38\r\nMemory Channels	Dual Channel\r\nCas Latency	CL16\r\nVoltage	1.35V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	G.skill', 191.93, 54, 2, 14, 0, 0),
(45, 'G.Skill Ripjaws V 16 GB', 'Images/PartsPics/GSKILLRipjawsVSeries16.jpg', 'Series	Ripjaws V\r\nModel	F4-3200C16D-16GVKB\r\nType	DDR4\r\nLighting	None\r\nCapacity	16GB\r\nSpeed (MHz)	DDR4 3200\r\nTiming	16-18-18-38\r\nMemory Channels	Dual Channel\r\nCas Latency	16\r\nVoltage	1.35V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	G.SKILL', 177.11, 36, 2, 14, 0, 0),
(46, 'G.Skill Ripjaws V Series 32 GB', 'Images/PartsPics/GSKILLRipJawsVSeries32.jpg', 'DDR4-3200Mhz, cl16-18-18-38 timing\r\n16Gb (2 x 16gb) total capacity\r\nVoltage 1.35v\r\nDesigned with a low voltage of 1.2v1.35v At ddr4 standard\r\nXmp 2.0 Ready', 275.92, 40, 2, 29, 0, 0),
(47, 'Kingston HyperX Fury 16 GB', 'Images/PartsPics/KingstonHyperxFury.jpg', 'Series	HyperX Fury\r\nModel	HX316C10FRK2/16\r\nType	DDR3\r\nLighting	None\r\nCapacity	16GB\r\nSpeed (MHz)	DDR3 1600 MHz\r\nTiming	10-10-10-30\r\nMemory Channels	Dual Channel\r\nCas Latency	10\r\nVoltage	1.5 V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	Kingston', 137.95, 35, 2, 14, 0, 0),
(48, 'Team T-FORCE VULCAN Z 16 GB', 'Images/PartsPics/TeamTForceVulcanZ.jpg', 'Brand	Team\r\nSeries	T-FORCE VULCAN Z\r\nModel	TLZGD416G3200HC16FDC01\r\nType	DDR4\r\nLighting	None\r\nCapacity	16GB\r\nSpeed (MHz)	DDR4 3200\r\nMemory Channels	Dual Channel\r\nCas Latency	16\r\nTiming	16-20-20-40\r\nVoltage	1.35V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non ECC', 129.9, 40, 2, 14, 0, 0),
(49, 'Corsair Vengeance RGB Pro 32 G', 'Images/PartsPics/CorsairVengeanceRGBPro32.jpg', 'Series	Vengeance RGB PRO\r\nModel	CMW32GX4M4C3200C16W\r\nType	DDR4\r\nLighting	RGB\r\nCapacity	32GB\r\nSpeed (MHz)	DDR4 3200\r\nTiming	16-18-18-36\r\nMemory Channels	Quad Channel\r\nCas Latency	CL16\r\nVoltage	1.35V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	Corsair', 350.65, 29, 2, 29, 0, 0),
(50, 'ADATA XPG SPECTRIX D60G 16 GB', 'Images/PartsPics/ADATAXPGSpectrix.jpg', 'Series	XPG SPECTRIX D60G\r\nModel	AX4U320038G16A-DT60\r\nType	DDR4 RGB\r\nLighting	RGB\r\nCapacity	16GB\r\nSpeed (MHz)	3200MHz\r\nTiming	16-20-20\r\nMemory Channels	Dual Channel\r\nCas Latency	CL16\r\nVoltage	1.35V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	ADATA', 137.95, 16, 2, 14, 0, 0),
(51, 'G.Skill Aegis 16 GB', 'Images/PartsPics/GSKILLAegis.jpg', 'Series	Aegis\r\nModel	F4-3000C16D-16GISB\r\nType	DDR4\r\nLighting	None\r\nCapacity	16GB\r\nSpeed (MHz)	DDR4 3000\r\nTiming	16-18-18-38\r\nMemory Channels	Dual Channel\r\nCas Latency	CL16\r\nVoltage	1.2V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	G.SKILL', 145, 16, 2, 14, 0, 0),
(52, 'G.Skill Aegis 16 GB', 'Images/PartsPics/GSKILLAegis.jpg', 'Series	Aegis\r\nModel	F4-3000C16D-16GISB\r\nType	DDR4\r\nLighting	None\r\nCapacity	16GB\r\nSpeed (MHz)	DDR4 3000\r\nTiming	16-18-18-38\r\nMemory Channels	Dual Channel\r\nCas Latency	CL16\r\nVoltage	1.2V\r\nRegistered/Unbuffered	Unbuffered\r\nError Checking	Non-ECC\r\nBrand	G.SKILL', 145.94, 22, 2, 14, 0, 0),
(53, 'Corsair Dominator Platinum RGB', 'Images/PartsPics/CorsairDominator.jpg', 'Fan Included No\r\nMemory Series DOMINATOR PLATINUM RGB\r\nMemory Type DDR4\r\nMemory Size 64GB Kit (4 x 16GB)\r\nTested Latency 18-19-19-39\r\nTested Voltage 1.35V\r\nTested Speed 3600MHz\r\nMemory Color BLACK\r\nLED Lighting RGB\r\nSingle Zone / Multi-Zone Lighting Individually Addressable\r\nSPD Latency 15-15-15-36\r\nSPD Speed 2133MHz\r\nSPD Voltage 1.2V\r\nSpeed Rating PC4-28800 (3600MHz)\r\nCompatibility Intel 300 Series,Intel 400 Series,Intel 500 Series,AMD TRX40\r\nHeat Spreader Anodized Aluminum\r\nPackage Memory Format DIMM\r\nPerformance Profile XMP 2.0\r\nPackage Memory Pin 288', 1316.4, 10, 2, 58, 0, 0),
(54, 'Seagate Barracuda Compute', 'Images/PartsPics/SeagateBarraCude2TB.jpg', 'Hard Drive	2 TB Mechanical Hard Disk\r\nBrand	Seagate\r\nItem model number	ST2000DMZ08\r\nProduct Dimensions	14.71 x 10.16 x 2.01 cm; 417.3 Grams\r\nItem Dimensions L x W x H	14.7 x 10.2 x 2 centimeters\r\nFlash memory size	2\r\nHard Disk Interface	Serial ATA\r\nHard drive rotational speed	7200 RPM', 73.29, 150, 3, 20, 0, 0),
(55, 'Samsung 970 Evo 1TB', 'Images/PartsPics/Samsung970Evo.jpg', 'Hard Drive	1 TB Solid State Hard Drive\r\nBrand	Samsung\r\nSeries	970 EVO\r\nItem model number	MZ-V7E1T0BW\r\nOperating System	Windows 10 Built 10240\r\nProduct Dimensions	2.21 x 8 x 2.29 cm; 50 Grams\r\nItem Dimensions L x W x H	22 x 80 x 23 millimeters\r\nColor	Black/Red\r\nFlash memory size	1\r\nBatteries	1 Lithium ion batteries required.', 249.99, 70, 3, 10, 0, 0),
(56, 'Samsung 970 Evo 500GB', 'Images/PartsPics/Samsung970Evo.jpg', 'Hard Drive	500GB Solid State Hard Drive\r\nBrand	Samsung\r\nSeries	970 EVO\r\nItem model number	MZ-V7E1T0BW\r\nOperating System	Windows 10 Built 10240\r\nProduct Dimensions	2.21 x 8 x 2.29 cm; 50 Grams\r\nItem Dimensions L x W x H	22 x 80 x 23 millimeters\r\nColor	Black/Red\r\nFlash memory size	1\r\nBatteries	1 Lithium ion batteries required.', 116.11, 50, 3, 10, 0, 0),
(57, 'Samsung 860 Evo 1TB', 'Images/PartsPics/Samsung860Evo.jpg', 'Hard Drive	1 TB Sequential read speeds of up to 550 MB/s and sequential write speeds of up to 520 MB/s, making it ideal for storing and rendering large format files such as 4K video and 3D data.\r\nNumber of USB 2.0 Ports	1\r\nBrand	Samsung\r\nSeries	860 EVO 2.5\" Internal SSD\r\nItem model number	896RC\r\nHardware Platform	PC, Mac\r\nOperating System	Windows 8/Windows 7/Windows Server 2003 (32-bit and 64-bit), Vista (SP1 and above), XP (SP2 and above), MAC OSX, and Linux\r\nProduct Dimensions	10.01 x 7.01 x 0.69 cm; 51 Grams\r\nItem Dimensions L x W x H	10 x 7 x 0.7 centimeters\r\nFlash memory size	1000\r\nHard Disk Interface	SATA 6 GB/s\r\nHard drive rotational speed	550 MB', 149.99, 55, 3, 10, 0, 0),
(58, 'Western Digital Blue SN550 1TB', 'Images/PartsPics/WesternDigitalBlueSN550.jpg', 'Hard Drive	1 TB Solid State Hard Drive\r\nBrand	Western Digital\r\nSeries	SN550\r\nItem model number	WDS100T2B0C\r\nHardware Platform	PC, Linux, Mac\r\nProduct Dimensions	8 x 2.2 x 0.24 cm; 5.67 Grams\r\nItem Dimensions L x W x H	8 x 2.2 x 0.2 centimeters\r\nColor	Blue\r\nFlash memory size	1', 152.27, 35, 3, 10, 0, 0),
(59, 'Western Digital Caviar Blue 1T', 'Images/PartsPics/WesternDigitalCaviarBlue.jpg', 'Hard Drive	1 TB Mechanical Hard Disk\r\nNumber of USB 2.0 Ports	1\r\nBrand	Western Digital\r\nSeries	Blue\r\nItem model number	WD10EZEX\r\nHardware Platform	PC\r\nOperating System	Windows 10, Windows 8.1, Windows 7, macOS High Sierra, Sierra El Capitan\r\nProduct Dimensions	14.73 x 10.16 x 2.54 cm; 440 Grams\r\nItem Dimensions L x W x H	14.7 x 10.2 x 2.5 centimeters\r\nColor	Blue\r\nMemory Type	DDR3 SDRAM\r\nFlash memory size	1 TB\r\nHard Disk Interface	Serial ATA-600\r\nHard drive rotational speed	7200 RPM', 57.47, 40, 3, 20, 0, 0),
(60, 'Samsung 980 Pro 1TB', 'Images/PartsPics/Samsung980Pro.jpg', 'Hard Drive	1TB Solid State Hard Drive\r\nBrand	Samsung\r\nSeries	980 PRO\r\nItem model number	MZ-V8P500B/AM\r\nProduct Dimensions	8 x 2.2 x 0.24 cm; 82 Grams\r\nItem Dimensions L x W x H	8 x 2.2 x 0.2 centimeters\r\nFlash memory size	500', 309.99, 45, 3, 10, 0, 0),
(61, 'Kingston A400 240GB', 'Images/PartsPics/KingstonA400.jpg', 'Hard Drive	240 GB Solid State Hard Drive\r\nWireless Standard	802.11a\r\nBrand	Kingston\r\nSeries	SA400S37/240G\r\nItem model number	SA400S37/240G\r\nProduct Dimensions	10.01 x 0.71 x 6.99 cm; 40.82 Grams\r\nItem Dimensions L x W x H	10 x 0.7 x 7 centimeters\r\nColor	Sata3\r\nMemory Type	Unknown\r\nFlash memory size	240 GB', 44.83, 25, 3, 10, 0, 0),
(62, 'Seagate BarraCuda 4TB', 'Images/PartsPics/SeagateBarraCuda4TB.jpg', 'Hard Drive	4 TB Mechanical Hard Disk\r\nBrand	Seagate\r\nSeries	ST4000DM004\r\nItem model number	ST4000DMZ04\r\nHardware Platform	PC\r\nProduct Dimensions	14.71 x 10.16 x 2.01 cm; 490 Grams\r\nItem Dimensions L x W x H	14.7 x 10.2 x 2 centimeters\r\nFlash memory size	4\r\nHard Disk Interface	Serial ATA\r\nHard drive rotational speed	5400 RPM', 118.88, 30, 3, 20, 0, 0),
(63, 'Crucial P1 1TB', 'Images/PartsPics/CrucialP1.jpg', 'Hard Drive	1 TB Solid State Hard Drive\r\nBrand	Crucial\r\nSeries	Crucial P1\r\nItem model number	CT1000P1SSD8\r\nHardware Platform	PC; Mac\r\nProduct Dimensions	7.98 x 0.2 x 2.18 cm; 16.78 Grams\r\nItem Dimensions L x W x H	8 x 0.2 x 2.2 centimeters\r\nFlash memory size	1000', 163.28, 30, 3, 10, 0, 0),
(64, 'Crucial P2 500GB', 'Images/PartsPics/CrucialP2.jpg', 'Hard Drive	500 GB Solid State Hard Drive\r\nBrand	Crucial\r\nSeries	Crucial P2 500GB 3D NAND NVMe PCIe M.2 SSD - CT500P2SSD8\r\nItem model number	CT500P2SSD8\r\nProduct Dimensions	7.98 x 0.2 x 2.18 cm; 17 Grams\r\nItem Dimensions L x W x H	8 x 0.2 x 2.2 centimeters\r\nFlash memory size	500', 86.2, 30, 3, 10, 0, 0),
(65, 'NVIDIA FE RTX3070', 'Images/PartsPics/NVIDIAFoundersEditionRTX3070.jpg', 'Product Name\r\nNVIDIA GeForce RTX 3070 8GB GDDR6 PCI Express 4.0 Graphics Card\r\n\r\nBrand\r\nNVIDIA\r\n\r\nGPU Chipset Manufacturer\r\nNVIDIA\r\n\r\nGraphics Processing Unit (GPU)Specifications Info info\r\nNVIDIA GeForce RTX 3070\r\n\r\nModel Number\r\n9001G1422510000\r\n\r\nColor\r\nDark Platinum and Black\r\n\r\nColor Category\r\nSilver', 649.99, 6, 4, 220, 0, 0),
(66, 'NVIDIA FE GeForce RTX3060Ti', 'Images/PartsPics/NVIDIAFoundersEditionGeForceRTX3060Ti.jpg', '8GB of high-speed GDDR6 video memory is powerful enough to render graphics-rich games with a maximum resolution of 7680 x 4320 to keep you totally immersed in your gameplay\r\n1.41MHz core clock speed and 1,665MHz boost clock speed keep up with the most intense, demanding gaming action\r\nPowered by Ampere-NVIDIA\'s 2nd-generation RTX architecture with advanced streaming processors to deliver incredible performance while editing videos and playing games\r\nEnhanced ray-tracing cores and tensor cores ensure your game\'s graphics appear more realistic than ever\r\nAntialiasing and anisotropic filtering helps keep the images crisp, sharp, and smooth\r\nSupports Microsoft DirectX 12 Ultimate, Vulkan RT API, and Open GL 4.6 for optimising your gameplay with realistic image details and lighting effects\r\nHDMI and DisplayPort outputs allow you to connect your monitor or other display units easily\r\nSupports multiple monitor setups for an enhanced gaming experience\r\nPCI Express 4.0 interface makes it easy to install this GPU on your gaming rig\r\nCompatible with Windows 10 64-bit and Linux 64-bit operating systems', 549.99, 10, 4, 200, 0, 0),
(67, 'NVIDIA FE Geforce RTX3080', 'Images/PartsPics/NVIDIAFoundersEditionGeForceRTX3080.jpg', 'Product Name\r\nNVIDIA GeForce RTX 3080 10GB GDDR6X PCI Express 4.0 Graphics Card\r\n\r\nBrand\r\nNVIDIA\r\n\r\nGPU Chipset Manufacturer\r\nNVIDIA\r\n\r\nGraphics Processing Unit (GPU)Specifications Info info\r\nNVIDIA GeForce RTX 3080\r\n\r\nModel Number\r\n9001G1332530000\r\n\r\nColor\r\nTitanium and Black\r\n\r\nColor Category\r\nSilver', 850.18, 5, 4, 320, 0, 0),
(68, 'EVGA FTW3 GeForce RTX3090', 'Images/PartsPics/EVGAFTW3ULTRAGAMINGGeForceRTX3090.jpg', 'Memory Speed	19500 MHz\r\nGraphics coprocessor	Nvidia GeForce RTX 3090\r\nChipset brand	NVIDIA\r\nGraphics Memory Size	24 GB\r\nBrand	EVGA\r\nItem model number	24G-P5-3987-KR\r\nParcel Dimensions	38.4 x 24.31 x 11.2 cm; 2.15 Kilograms', 1669.99, 6, 4, 350, 0, 0),
(69, 'Asus Phoenix GTX 1050 Ti', 'Images/PartsPics/AsusPhoenix1050ti.jpg', '\r\nMax screen resolution	7680 x 4320\r\nMemory Speed	1392 MHz\r\nGraphics coprocessor	NVIDIA GeForce GTX 1050 Ti\r\nChipset brand	NVIDIA\r\nCard description	Geforce GTX 1050\r\nGraphics Memory Size	4\r\nNumber of USB 2.0 Ports	1\r\nBrand	Asus\r\nSeries	PH-GTX1050TI-4G\r\nItem model number	GTX 1050 TI\r\nProduct Dimensions	19.3 x 3.81 x 11.18 cm; 544.31 Grams\r\nItem Dimensions L x W x H	19.3 x 3.8 x 11.2 centimeters\r\nNumber of Processors	1', 309.84, 24, 4, 75, 0, 0),
(70, 'MSI GAMING X GTX 1660S ', 'Images/PartsPics/MSIGAMINGXGeForceGTX1660SUPER.jpg', 'Model	GeForce GTX 1660 SUPERTM GAMING X\r\nChipset Manufacturer	NVIDIA\r\nGPU	GeForce GTX 1660 SUPER\r\nBoost Clock	1830 MHz\r\nMemory Size	6GB\r\nMemory Type	GDDR6\r\nMemory Clock	14 Gpbs\r\nMemory Interface	192-bit\r\nCooler	Double Fans\r\nInterface	PCI Express 3.0\r\nMaximum Resolution	7680 x 4320\r\nHDMI	HDMI 2.0b x 1\r\nDisplayPort	DisplayPort x 3 (v1.4)\r\nDimensions	247 x 127 x 46 mm\r\nHDCP Support	2.2\r\nCUDA	1408 Units\r\nBrand	MSI\r\nPower Consumption	125 W\r\nPower connectors	8-pin x 1\r\nWeight (Card / Package)	862g / 1460 g\r\nDirectX Version Support	12 API\r\nOpenGL Version Support	4.5', 429.99, 16, 4, 125, 0, 0),
(71, 'MSI GAMING X GeForce RTX 2060S', 'Images/PartsPics/MSIGAMINGXGeForceRTX2060SUPER.jpg', 'Max screen resolution	7680x4320\r\nMemory Speed	14 GHz\r\nGraphics coprocessor	NVIDIA GeForce RTX 2060 Super\r\nChipset brand	MSI\r\nCard description	Powered by NVIDIA Turing with NVIDIA GeForce RTX 2060 SUPER\r\nGraphics Memory Size	8 GB\r\nBrand	MSI\r\nSeries	RTX 2060 Super Gaming X\r\nItem model number	RTX 2060 Super Gaming X\r\nProduct Dimensions	24.89 x 5.08 x 12.7 cm; 997.9 Grams\r\nItem Dimensions L x W x H	24.9 x 5.1 x 12.7 centimeters', 599.99, 26, 4, 175, 0, 0),
(72, 'Sapphire NITRO+ Radeon RX 580', 'Images/PartsPics/SapphireNITRO+RadeonRX580.jpg', 'Max screen resolution	3840 x 2160\r\nRAM	8 GB\r\nMemory Speed	1750 MHz\r\nGraphics coprocessor	AMD Radeon RX 480\r\nChipset brand	AMD\r\nGraphics Memory Size	8 GB\r\nBrand	Sapphire\r\nItem model number	11265-01-20G\r\nProduct Dimensions	26 x 13.5 x 4.3 cm; 1.26 Kilograms\r\nItem Dimensions L x W x H	26 x 13.5 x 4.3 centimeters\r\nMemory Type	Rambus Memory', 379.99, 22, 4, 185, 0, 0),
(73, 'Gigabyte GAMING OC RX5700XT', 'Images/PartsPics/GigabyteGAMINGOCRadeonRX5700XT.jpg', 'Memory Speed	14000 MHz\r\nGraphics coprocessor	AMD Radeon RX 5700\r\nChipset brand	AMD\r\nCard description	RADEON RX 5700 XT\r\nGraphics Memory Size	8 GB\r\nBrand	GIGABYTE\r\nSeries	GV-R57XTGAMING OC-8GD\r\nItem model number	GV-R57XTGAMING OC-8GD\r\nProduct Dimensions	28 x 11.4 x 5 cm; 1.5 Kilograms\r\nItem Dimensions L x W x H	28 x 11.4 x 5 centimeters', 589.31, 18, 4, 225, 0, 0),
(74, 'Sapphire PULSE RX6700XT', 'Images/PartsPics/SapphirePULSERX6700XT.jpg', 'Brand	Sapphire\r\nChipset Manufacturer	AMD\r\nGPU	RX 6700 XT\r\nModel	11306-02-20G\r\nMemory Size	12GB\r\nMemory Type	GDDR6\r\nInterface	PCI Express 4.0\r\nCooler	Double Fans', 749.99, 11, 4, 230, 0, 0),
(75, 'MSI GAMING X TRIO RX6800XT', 'Images/PartsPics/MSIGAMINGXTRIORX6800XT.jpg', 'Brand	MSI\r\nChipset Manufacturer	AMD\r\nGPU	Radeon RX 6800 XT\r\nModel	Radeon™ RX 6800 XT GAMING X TRIO 16G\r\nMemory Size	16GB\r\nStream Processors	4608\r\nBoost Clock	Up to 2285 MHz\r\nGame Clock	Up to 2045 MHz\r\nMemory Type	GDDR6\r\nMemory Clock	16 Gbps\r\nMemory Interface	256-bIt\r\nCooler	Triple Fans\r\nInterface	PCI Express 4.0\r\nMaximum Resolution	7680 x 4320\r\nHDMI	1x HDMI 2.1\r\nDisplayPort	3 x DisplayPort 1.4a\r\nDimensions	324 x 141 x 55mm\r\nHDCP Support	Yes\r\nPower consumption	300W\r\nPower connectors	8-pin x2\r\nRecommended PSU	750W\r\nDirectX Version Support	12 API', 1199.99, 14, 4, 300, 0, 0),
(76, 'NVIDIA FE RTX 2070 SUPER', 'Images/PartsPics/NVIDIAFERTX2070SUPER.jpg', 'Max screen resolution	7680 x 4320\r\nMemory Speed	1770 MHz\r\nGraphics coprocessor	NVIDIA CUDA Cores\r\nChipset brand	NVIDIA\r\nGraphics Memory Size	8 GB\r\nBrand	NVidia\r\nItem model number	900-1G180-2515-000\r\nProduct Dimensions	22.86 x 10.16 x 10.16 cm; 2.04 Kilograms\r\nItem Dimensions L x W x H	22.9 x 10.2 x 10.2 centimeters\r\nNumber of Processors	2560', 689.99, 18, 4, 215, 0, 0),
(77, 'XFX Speedster RX6900XT', 'Images/PartsPics/XFXSpeedsterMERC319UltraRX6900XT.jpg', '16GB 256-Bit GDDR6\r\nCore Clock 1950 MHz\r\nBoost Clock 2365 MHz\r\n1 x HDMI 2.1 2 x DisplayPort 1.4\r\n5120 Stream Processors\r\nPCI Express 4.0', 1539.99, 6, 4, 300, 0, 0),
(78, 'NZXT H510', 'Images/PartsPics/NZXTH510.jpg', 'Brand	NZXT\r\nItem model number	CA-H510B-B1\r\nProduct Dimensions	42.8 x 21 x 46 cm; 7.8 Kilograms\r\nItem Dimensions L x W x H	42.8 x 21 x 46 centimeters\r\nColor	Black', 100.08, 56, 5, 0, 0, 0),
(79, 'Corsair 4000D Airflow', 'Images/PartsPics/Corsair4000DAirflow.jpg', 'Wireless Standard	802.11a\r\nBrand	Corsair\r\nItem model number	CC-9011201-WW\r\nProduct Dimensions	45.3 x 23 x 46.6 cm; 7.85 Kilograms\r\nItem Dimensions L x W x H	45.3 x 23 x 46.6 centimeters\r\nColor	Black', 137.39, 65, 5, 0, 0, 0),
(80, 'Corsair 275R Airflow', 'Images/PartsPics/Corsair275RAirflow.jpg', 'Wireless Standard	802.11a\r\nBrand	Corsair\r\nSeries	CORSAIR 275R Airflow Mid-Tower ATX Case, Black\r\nItem model number	CC-9011181-WW\r\nProduct Dimensions	45.7 x 21.6 x 45.5 cm; 8 Kilograms\r\nItem Dimensions L x W x H	45.7 x 21.6 x 45.5 centimeters\r\nColor	Black', 114.96, 55, 5, 0, 0, 0),
(81, 'Lian Li PCO11 Dynamic', 'Images/PartsPics/LianLiPCO11Dynamic.jpg', 'Case Type	Mid Tower\r\nModel	PC-O11 Dynamic\r\nSeries	PC-O11 Dynamic\r\nBrand	Lian-Li\r\nStructure	Dual chamber\r\nDimensions	(W)272mm x(H)446mm x(D)445mm\r\nMotherboard Type	E-ATX / ATX / Micro-ATX / Mini-itx\r\nVGA Card	length =420mm , height =159mm\r\nCPU Cooling	=155mm\r\nPSU	2,(L)210mm~255mm(max)\r\nFilter	(Top) x1,(Side) x2, (Bottom) x1\r\nColor	White\r\nCase Material	SECC, Tempered Glass, Aluminum\r\nSide Panel Window	Yes\r\nMotherboard Support	eATX\r\nFront Ports	USB3.0 x2 , HD Audio USB3.1 Type-C x1 , HD Audio\r\nCooling	FAN SUPPORT Top: 120mm x3 / 140mm x2; Side: 120mm x3; Bottom: 120mm x3\r\nRADIATOR SUPPORT 120x 360mm / 120x 240mm / 140x 280mm\r\nExpansion Slots	8\r\nWith Power Supply	No\r\nExternal 5.25\" Drive Bay	No\r\nInternal 2.5\" Drive Bays	4\r\nInternal 3.5\" Drive Bays	2', 211.6, 40, 5, 0, 0, 0),
(82, 'Phanteks Eclipse P300A Mesh', 'Images/PartsPics/PhanteksEclipseP300AMesh.jpg', 'Case Type	Mid Tower\r\nModel	PH-EC300ATG_BK\r\nSeries	Phantex\r\nCase Material	Steel chassis, steel exterior, ABS, glass\r\nMotherboard Support	eATX\r\nFront Ports	2x USB 3.0, Mic, Headphone\r\nDimensions	200 mm x 450 mm x 400 mm\r\nColor	Black\r\nSide Panel Window	Yes\r\nCooling	Front: 2 x 120mm or 2 x 140mm fan; Top: 1 x 120mm or 1 x 140mm fan; Rear: 1 x 120mm fan (included)\r\nRadiator Support	Front: 240mm / 280mm; Rear: 120mm\r\nWith Power Supply	No\r\nExternal 5.25\" Drive Bay	No\r\nInternal 2.5\" Drive Bays	2\r\nInternal 3.5\" Drive Bays	2\r\nExpansion Slots	7', 86.2, 36, 5, 0, 0, 0),
(83, 'Phanteks Eclipse P400A Digital', 'Images/PartsPics/PhanteksEclipseP400ADigital.jpg', '\r\nCase Type	Mid Tower\r\nModel	PH-EC400ATG_DBK01\r\nSeries	Eclipse P400A\r\nBrand	Phanteks\r\nMotherboard Support	eATX\r\nFront Ports	2x USB 3.0, Mic, Headphone, Reset, LED control (Digital Versions), 3-speed Fan controller (Non Digital Version)\r\nColor	Black\r\nCase Material	Powder coated steel chassis Tempered glass side panel\r\nSide Panel Window	Yes\r\nCooling	Fan Support: Front: 3 x 120mm (3 x 120mm D-RGB fan included) or 2 x 140mm fan, Top: 2 x 120mm or 2 x 140mm fan, Rear: 1 x 120mm fan\r\nRadiator Options: Front - Up to 360mm, Rear - Up to 120mm\r\nExpansion Slots	7\r\nWith Power Supply	No\r\nExternal 5.25\" Drive Bay	No\r\nInternal 2.5\" Drive Bays	2\r\nInternal 3.5\" Drive Bays	2\r\nDimensions	210 mm x 465 mm x 470 mm', 114.96, 26, 5, 0, 0, 0),
(84, 'NZXT H510 Elite', 'Images/PartsPics/NZXTH510Elite.jpg', 'Case Type	Mid Tower\r\nModel	CA-H510E-B1\r\nSeries	H510 Elite\r\nBrand	NZXT\r\nWeight	7.5 kg\r\nCable Management	19-23mm\r\nGPU Clearance	Up to 381mm\r\nCPU Cooler	Up to 165mm\r\nReservoir & Pump	Up to 180mm (Along cable bar), Up to 86mm (Along bottom panel)\r\nFilters	All Air Intakes\r\nSmart Device V2	3x Fan channels with Max 10W per channel output* 2x RGB LED channels, each support up to 4x HUE 2 addressable LED strips or 5x Aer RGB 2 fans Built-in noise detection module\r\nRGB LED Lighting	2x Integrated Aer RGB 2 140mm Fans 1x Integrated addressable LED Strip\r\nVertical GPU Mount	2 Slots\r\nSpeed	500-1,500 RPM\r\nAirflow	30.39 - 91.19 CFM\r\nNoise	22 - 33 dBA\r\nAir Pressure	0.17 1.52mm-H2O\r\nBearing	Fluid Dynamic Bearing\r\nFan Connector	4-Pin PWM\r\nWarranty	2 Years\r\nMotherboard Support	ATX\r\nExpansion Slots	7\r\nColor	Black\r\nCase Material	SGCC Steel, Tempered Glass\r\nSide Panel Window	Yes\r\nFront Ports	1x USB 3.1 Gen 2 Type-C 1x USB 3.1 Gen 1 Type-A 1x Headset Audio Jack\r\nCooling	FAN SUPPORT Front: 2x 140 or 2x 120mm with Pull | Rear: 1x 120mm | Front: 2x 120/ 2x 140mm (2x AER RGB 2 140mm included) | Top: 1x 120mm/ 1x 140mm | Rear: 1x 120mm (1x AER F120 Case Version Included)\r\nRADIATOR SUPPORT Front - 60mm | Rear: 60mm\r\nWith Power Supply	No\r\nExternal 5.25\" Drive Bay	No\r\nInternal 2.5\" Drive Bays	3\r\nInternal 3.5\" Drive Bays	3\r\nDimensions	W: 210mm H: 460mm D: 428mm', 212.68, 36, 5, 0, 0, 0),
(85, 'Fractal Design Meshify C', 'Images/PartsPics/FractalDesignMeshifyC.jpg', 'Case Type	Mid Tower\r\nModel	FD-CA-MESH-C-BKO-TG\r\nSeries	Meshify\r\nBrand	Fractal Design\r\nType	ATX Mid Tower\r\nWeight	6.5 kg\r\nColor	Black\r\nDimension	395 x 212 x 440mm\r\nMotherboard Support	ATX\r\nExpansion Slots	7\r\nFront Ports	3 x USB 3.0 / Audio\r\nCooling	Fan Option: Front: 2 x 140mm / 3 x 120mm fan (1 x Dynamic X2 GP-12 included) Rear: 1 x Dynamic X2 GP-12 (included) Top: 2 x 120mm / 2 x 140mm fan\r\nPower Supply	ATX\r\nWarranty	Limited Warranty period (parts): 1 year. Limited Warranty period (labor): 1 year\r\nCase Material	Steel, ABS plastic, Tempered glass\r\nDimensions	395 x 212 x 440 mm\r\nMotherboard Compatibility	ATX, mATX, ITX\r\nSide Panel Window	Yes\r\nWith Power Supply	No\r\nExternal 5.25\" Drive Bay	No\r\nInternal 2.5\" Drive Bays	3\r\nInternal 3.5\" Drive Bays	2', 154.63, 41, 5, 0, 0, 0),
(86, 'Thermaltake Level 20', 'Images/PartsPics/ThermaltakeLevel20.jpg', 'P/N\r\nCA-1L2-00S1WN-00\r\n\r\nSERIES\r\nLevel 20\r\n\r\nMODEL\r\nLevel 20 VT\r\n\r\nCASE TYPE\r\nMicro Case\r\n\r\nDIMENSION (H X W X D)\r\n348 x 330 x 430 mm\r\n(13.7 x 13 x 16.9 inch)\r\n\r\nNET WEIGHT\r\n8.66 kg / 19.09 lb\r\n\r\nSIDE PANEL\r\n4mm Tempered Glass x 4(Left & Right & Front & Top)\r\n\r\nCOLOR\r\nExterior & Interior : Black\r\n\r\nMATERIAL\r\nSPCC\r\n\r\nCOOLING SYSTEM\r\nFront (intake) :\r\n200 x 200 x 30 mm fan (800rpm, 13dBA)\r\n\r\nDRIVE BAYS\r\n-ACCESSIBLE\r\n-HIDDEN\r\n3.5’’ or 2.5” x 3 , 2.5’’ x 3\r\n\r\nEXPANSION SLOTS\r\n5\r\n\r\nMOTHERBOARDS\r\n6.7” x 6.7” (Mini ITX) , 9.6” x 9.6” (Micro ATX)\r\n\r\nI/O PORT\r\nUSB 3.0 x 2,USB 2.0 x 2, HD Audio x 1\r\n\r\nPSU\r\nStandard PS2 PSU (optional)\r\n\r\nFAN SUPPORT\r\nFront:\r\n2 x 120mm, 2 x 140mm, 1 x 200mm\r\nTop:\r\n4 x 120mm, 2 x 140mm\r\nRear:\r\n1 x 120mm, 1 x 140mm\r\nBottom:\r\n2 x 120mm\r\n\r\nRADIATOR SUPPORT\r\nFront:\r\n1 x 240mm, 1 x 140mm, 1 x 180mm(200mm series)\r\nTop:\r\n2 x 240mm, 1 x 280mm, 1 x 180mm(200mm series)\r\nRear:\r\n1 x 120mm\r\n\r\nCLEARANCE\r\nCPU cooler height limitation: 185mm\r\nVGA length limitation: 350mm\r\nPSU length limitation: 200mm (With Bottom Fan)', 1299.99, 5, 5, 0, 0, 0),
(87, 'MUSETEX Phantom', 'Images/PartsPics/MUSETEXPhantom.jpg', 'Brand	MUSETEX\r\nManufacturer	Musetex\r\nHardware Platform	PC\r\nBatteries included	No\r\nbatteries required	No\r\nMaterial Type	ABS, Tempered Glass, Alloy Steel\r\nForm Factor	Mid Tower\r\nManufacturer	Musetex\r\nProduct Dimensions	26.67 x 49.53 x 49.53 cm; 7.94 Kilograms\r\nASIN	B07MDFYW3N', 190.15, 26, 5, 0, 0, 0),
(88, 'Asus ROG Strix Helios', 'Images/PartsPics/AsusROGStrixHelios.jpg', 'Brand	Asus\r\nSeries	GX601 ROG STRIX HELIOS CASE/BK/AL/WITH HANDLE\r\nItem model number	GX601\r\nProduct Dimensions	56.49 x 24.89 x 59.08 cm; 18 Kilograms\r\nItem Dimensions L x W x H	56.5 x 24.9 x 59.1 centimeters\r\nColor	Black', 397.99, 12, 5, 0, 0, 0),
(89, 'be quiet! Pure Base 500DX', 'Images/PartsPics/bequiet!PureBase500DX.jpg', 'Brand	Be quiet!\r\nSeries	BGW38\r\nItem model number	BGW38\r\nItem Weight	17.16 pounds\r\nProduct Dimensions	20 x 11.5 x 19.75 inches\r\nItem Dimensions LxWxH	20 x 11.5 x 19.75 inches\r\nColor	WHITE\r\nManufacturer	be quiet\r\nASIN	B087D7KNL9\r\nDate First Available	April 25, 2020', 139.99, 19, 5, 0, 0, 0),
(90, 'Corsair RM (2019) 750W', 'Images/PartsPics/CorsairRM 2019)750W.jpg', 'Model	CP-9020195-NA\r\nWeight	1.6 kg\r\nWarranty	10 Years\r\nModular	Full Modular\r\nMaximum Power	750W\r\nEnergy Efficiency	80 PLUS Gold Certified\r\nMTBF	100,000 hours\r\nDimension	150 x 86 x 160 mm\r\nType	ATX12V v2.52 / EPS12V v2.92\r\nMain Connector	24Pin\r\n+12V Rails	Single\r\nSLI	SLI Ready\r\nCrossFire	CrossFire Ready\r\nOver Voltage Protection	Yes\r\nInput Voltage	100 - 240 V\r\nInput Frequency Range	47 - 63 Hz\r\nInput Current	10 - 5 A\r\nOutput	+3.3V@20A, +5V@20A, +12V@62.5A, -12V@0.3A, +5VSB@3A\r\nColor	Black\r\nPower Supplier Form Factor	ATX\r\nFan LED	None\r\nFan Size	135MM\r\nSeries	RM Series\r\nATX 12V Connector	2\r\nATX Connector	1\r\nPCI-Express Connector	6\r\nSATA Power Connector	10\r\nPFC	Active', 154.99, 74, 6, 0, 0, 0);

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
(5, 6, 'Cheap price with really good quality. \r\nDefinitely recommended!', 5),
(6, 7, 'Took a long time to get my build ready, but definitely worth it!', 4),
(7, 8, 'Horrible service!!! My order has been delivered with the wrong parts!!! I want my money back!!!', 1),
(8, 9, 'I got my build today, powered on and I am ready to game. A fast and cheap service!', 5),
(9, 10, 'This is incredible. The Custom PC came in today and it is just the way I imagined it. I love it!', 5),
(10, 11, 'Why did it take months for my build to arrive??? I like my custom build but no one should wait this long!', 2),
(11, 12, 'My order has been delivered in 2 days!!! If you want a fast and reliable service, this is the place!', 5),
(12, 13, 'Wow, can\'t believe they have the exact build I was looking for on the front page! Thank You, this is exactly what I needed!', 5),
(13, 1, 'I like this service', 3);

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
  MODIFY `accountId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `assetId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custombuilds`
--
ALTER TABLE `custombuilds`
  MODIFY `customBuildId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ordereditems`
--
ALTER TABLE `ordereditems`
  MODIFY `orderedItemId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `pcparts`
--
ALTER TABLE `pcparts`
  MODIFY `pcPartId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
