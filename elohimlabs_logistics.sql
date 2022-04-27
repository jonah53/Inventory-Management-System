-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2022 at 03:15 AM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elohimlabs_logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `Auth_ID` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Rights` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`Auth_ID`, `Username`, `Password`, `Rights`) VALUES
(1, 'manager', '1d0258c2440a8d19e716292b231e3190', 1),
(2, 'supervisor', '09348c20a019be0318387c08df7a783d', 2),
(3, 'clerk', '34776981fa47aa6cf3f2915d11bae051', 3),
(4, 'engineer', '9d127ff383d595262c67036f50493133', 4);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_ID` bigint(20) NOT NULL,
  `Batch_No` varchar(100) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_ID`, `Batch_No`, `Name`, `Description`) VALUES
(1, '122135445466', 'Yaka Meter', '<p>Single phase meters</p>');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `Pic_ID` bigint(20) NOT NULL,
  `Filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`Pic_ID`, `Filename`) VALUES
(1, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `Req_ID` bigint(20) NOT NULL,
  `Req_Date` timestamp NULL DEFAULT current_timestamp(),
  `Req_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_items`
--

CREATE TABLE `requisition_items` (
  `Requisition` bigint(20) NOT NULL,
  `Item` bigint(20) NOT NULL,
  `Status` enum('Pending','Approved','Dispatched') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `R_ID` smallint(6) NOT NULL,
  `Rights` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`R_ID`, `Rights`) VALUES
(1, 'Manager'),
(2, 'Warehouse Supervisor'),
(3, 'Warehouse Clerk'),
(4, 'Site Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` bigint(20) NOT NULL,
  `ID_No` varchar(50) DEFAULT NULL,
  `Title` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ONames` varchar(100) DEFAULT NULL,
  `Gender` enum('Other','Male','Female') DEFAULT 'Male',
  `Phone` varchar(25) NOT NULL,
  `Phone2` varchar(25) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Picture` bigint(20) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Station` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `ID_No`, `Title`, `Surname`, `Name`, `ONames`, `Gender`, `Phone`, `Phone2`, `Email`, `Picture`, `Username`, `Station`) VALUES
(3, 'MN11223', 'Mr.', 'Kasule', 'Peter', NULL, 'Male', '0701123456', NULL, 'kasulepeter@gmail.com', 1, 'manager', 1),
(4, 'SS112234', 'Ms.', 'Nakafeero', 'Diana', NULL, 'Female', '0702123456', NULL, 'ndiana@gmail.com', 1, 'supervisor', 2),
(5, 'CL123345', 'Mr.', 'Otim', 'Ambrose', 'Okello', 'Male', '0701323456', NULL, 'oao@gmail.com', 1, 'clerk', 1),
(6, 'CL233445', 'Eng.', 'Ametu', 'Agnes', NULL, 'Female', '0701423456', NULL, 'aagnes@gmail.com', 1, 'engineer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `WH_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Type` enum('Main','Site') DEFAULT 'Site'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`WH_ID`, `Name`, `Location`, `Type`) VALUES
(1, 'Head Quarters', 'Namanve', 'Site'),
(2, 'Buloba Site Warehouse', 'Buloba', 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `wh_entry`
--

CREATE TABLE `wh_entry` (
  `Entry_ID` bigint(20) NOT NULL,
  `Warehouse` int(11) NOT NULL,
  `Item` bigint(20) NOT NULL,
  `Quantity` bigint(20) NOT NULL,
  `Unit_Of_Measurement` varchar(255) DEFAULT NULL,
  `Origin` varchar(255) DEFAULT NULL,
  `Requisition` bigint(20) DEFAULT NULL,
  `Recipient` bigint(20) DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wh_entry`
--

INSERT INTO `wh_entry` (`Entry_ID`, `Warehouse`, `Item`, `Quantity`, `Unit_Of_Measurement`, `Origin`, `Requisition`, `Recipient`, `Entry_Date`) VALUES
(1, 1, 1, 24, 'Meters', 'Imported', NULL, 3, '2022-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `wh_exit`
--

CREATE TABLE `wh_exit` (
  `Exit_ID` bigint(20) NOT NULL,
  `Warehouse` int(11) NOT NULL,
  `Requisition` bigint(20) DEFAULT NULL,
  `Item` bigint(20) NOT NULL,
  `Quantity` bigint(20) NOT NULL,
  `Unit_Of_Measurement` varchar(255) DEFAULT NULL,
  `Destination` varchar(255) DEFAULT NULL,
  `Dispatcher` bigint(20) NOT NULL,
  `Dispatch_Vehicle` varchar(25) DEFAULT NULL,
  `Driver` varchar(50) DEFAULT NULL,
  `Driver_Phone` varchar(25) DEFAULT NULL,
  `Exit_Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`Auth_ID`),
  ADD KEY `Rights` (`Rights`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`Pic_ID`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`Req_ID`),
  ADD KEY `Req_by` (`Req_by`);

--
-- Indexes for table `requisition_items`
--
ALTER TABLE `requisition_items`
  ADD PRIMARY KEY (`Requisition`,`Item`),
  ADD KEY `Item` (`Item`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `Picture` (`Picture`),
  ADD KEY `Station` (`Station`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`WH_ID`);

--
-- Indexes for table `wh_entry`
--
ALTER TABLE `wh_entry`
  ADD PRIMARY KEY (`Entry_ID`),
  ADD KEY `Requisition` (`Requisition`),
  ADD KEY `Recipient` (`Recipient`);

--
-- Indexes for table `wh_exit`
--
ALTER TABLE `wh_exit`
  ADD PRIMARY KEY (`Exit_ID`),
  ADD KEY `Warehouse` (`Warehouse`),
  ADD KEY `Item` (`Item`),
  ADD KEY `Dispatcher` (`Dispatcher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `Auth_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `Pic_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `Req_ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `R_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `WH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wh_entry`
--
ALTER TABLE `wh_entry`
  MODIFY `Entry_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wh_exit`
--
ALTER TABLE `wh_exit`
  MODIFY `Exit_ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`Rights`) REFERENCES `rights` (`R_ID`);

--
-- Constraints for table `requisition`
--
ALTER TABLE `requisition`
  ADD CONSTRAINT `requisition_ibfk_1` FOREIGN KEY (`Req_by`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `requisition_items`
--
ALTER TABLE `requisition_items`
  ADD CONSTRAINT `requisition_items_ibfk_1` FOREIGN KEY (`Requisition`) REFERENCES `requisition` (`Req_ID`),
  ADD CONSTRAINT `requisition_items_ibfk_2` FOREIGN KEY (`Item`) REFERENCES `item` (`Item_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `auth` (`Username`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Picture`) REFERENCES `picture` (`Pic_ID`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`Station`) REFERENCES `warehouse` (`WH_ID`);

--
-- Constraints for table `wh_entry`
--
ALTER TABLE `wh_entry`
  ADD CONSTRAINT `wh_entry_ibfk_1` FOREIGN KEY (`Requisition`) REFERENCES `requisition` (`Req_ID`),
  ADD CONSTRAINT `wh_entry_ibfk_2` FOREIGN KEY (`Recipient`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `wh_exit`
--
ALTER TABLE `wh_exit`
  ADD CONSTRAINT `wh_exit_ibfk_1` FOREIGN KEY (`Warehouse`) REFERENCES `warehouse` (`WH_ID`),
  ADD CONSTRAINT `wh_exit_ibfk_2` FOREIGN KEY (`Item`) REFERENCES `item` (`Item_ID`),
  ADD CONSTRAINT `wh_exit_ibfk_3` FOREIGN KEY (`Dispatcher`) REFERENCES `users` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
