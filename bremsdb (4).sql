-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 09:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bremsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_items`
--

CREATE TABLE IF NOT EXISTS `added_items` (
  `ItemDetailID` varchar(10) NOT NULL,
  `ItemID` varchar(45) DEFAULT NULL,
  `OfficialID` varchar(45) DEFAULT NULL,
  `QuantityAdded` varchar(45) DEFAULT NULL,
  `DateAdded` date DEFAULT NULL,
  PRIMARY KEY (`ItemDetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `borrowing_request`
--

CREATE TABLE IF NOT EXISTS `borrowing_request` (
  `BorReqID` varchar(10) NOT NULL,
  `DateTime` datetime DEFAULT NULL,
  `DateTimeReturned` datetime DEFAULT NULL,
  `Purpose` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BorReqID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `borrow_request_detail`
--

CREATE TABLE IF NOT EXISTS `borrow_request_detail` (
  `BorReqID` varchar(10) NOT NULL,
  `ItemID` varchar(45) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BorReqID`,`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deactivate`
--

CREATE TABLE IF NOT EXISTS `deactivate` (
  `DeactivateID` varchar(10) NOT NULL,
  `Reason` date DEFAULT NULL,
  PRIMARY KEY (`DeactivateID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `DocID` int(11) NOT NULL AUTO_INCREMENT,
  `DocDescription` varchar(45) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `DocStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`DocID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`DocID`, `DocDescription`, `Price`, `DocStatus`) VALUES
(1, 'asdfa', '2', 'inactive'),
(2, 'sdf', '1000', 'inactive'),
(3, 'Business Permit', '1000', 'active'),
(4, 'Business Clearance', '150', 'active'),
(5, 'Barangay ID', '10', 'active'),
(6, 'Certificate of Indigency', '0', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `dr_details`
--

CREATE TABLE IF NOT EXISTS `dr_details` (
  `DocReqID` varchar(10) NOT NULL,
  `DocID` varchar(10) NOT NULL,
  `Purpose` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DocReqID`,`DocID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `EventID` varchar(10) NOT NULL,
  `EventDesc` varchar(45) DEFAULT NULL,
  `Organizer` varchar(45) DEFAULT NULL,
  `TimeFrom` time DEFAULT NULL,
  `TimeTo` time DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
  `FacilityID` int(11) NOT NULL AUTO_INCREMENT,
  `FacilityCategory` varchar(45) NOT NULL,
  `FacilityDesc` varchar(45) NOT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `FacilityStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`FacilityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`FacilityID`, `FacilityCategory`, `FacilityDesc`, `Address`, `FacilityStatus`) VALUES
(1, 'Sports', 'Basketball Court', 'Peralta St.', 'active'),
(2, 'Educational', 'Library', 'Peralta St.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `facility_request`
--

CREATE TABLE IF NOT EXISTS `facility_request` (
  `FacilityReqID` varchar(10) NOT NULL,
  `FacilityID` varchar(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TimeFrom` time DEFAULT NULL,
  `TimeTo` time DEFAULT NULL,
  `Purpose` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`FacilityReqID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facility_schedule`
--

CREATE TABLE IF NOT EXISTS `facility_schedule` (
  `FacilitySchedID` varchar(10) NOT NULL,
  `FacilityID` varchar(10) DEFAULT NULL,
  `Day` varchar(45) DEFAULT NULL,
  `OpeningTime` time DEFAULT NULL,
  `ClosingTime` time DEFAULT NULL,
  PRIMARY KEY (`FacilitySchedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `FamilyID` int(10) NOT NULL AUTO_INCREMENT,
  `FamilyType` varchar(45) NOT NULL,
  `FamilyHeadID` int(11) NOT NULL,
  `FamilyStatus` varchar(45) NOT NULL,
  PRIMARY KEY (`FamilyID`),
  KEY `FamilyHeadID` (`FamilyHeadID`),
  KEY `FamilyHeadID_2` (`FamilyHeadID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`FamilyID`, `FamilyType`, `FamilyHeadID`, `FamilyStatus`) VALUES
(1, 'Single Parent', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE IF NOT EXISTS `family_member` (
  `FMemberNo` int(10) NOT NULL AUTO_INCREMENT,
  `FamilyID` varchar(10) NOT NULL,
  `FResidentID` int(11) NOT NULL,
  `RelationToHead` varchar(45) NOT NULL,
  `FMemberStat` varchar(8) NOT NULL,
  PRIMARY KEY (`FMemberNo`),
  KEY `ResidentID` (`FResidentID`),
  KEY `ResidentID_2` (`FResidentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE IF NOT EXISTS `household` (
  `HouseholdID` int(11) NOT NULL AUTO_INCREMENT,
  `HouseOwner` varchar(50) NOT NULL,
  `HouseholdStat` varchar(10) NOT NULL,
  `Old_HouseNo` varchar(45) NOT NULL,
  `New_HouseNo` varchar(45) NOT NULL,
  `Old_Street` varchar(45) NOT NULL,
  `New_Street` varchar(45) NOT NULL,
  `Old_PurokNo` int(2) NOT NULL,
  `New_PurokNo` int(2) NOT NULL,
  PRIMARY KEY (`HouseholdID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`HouseholdID`, `HouseOwner`, `HouseholdStat`, `Old_HouseNo`, `New_HouseNo`, `Old_Street`, `New_Street`, `Old_PurokNo`, `New_PurokNo`) VALUES
(1, 'Jomari Ramos', 'active', '1915-A', '1918-B', 'Taal St.', 'Taal St.', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `household_member`
--

CREATE TABLE IF NOT EXISTS `household_member` (
  `HMemberNo` int(11) NOT NULL AUTO_INCREMENT,
  `HouseholdMemberID` varchar(10) NOT NULL,
  `HouseholdCategory` varchar(45) NOT NULL,
  PRIMARY KEY (`HMemberNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_inventory`
--

CREATE TABLE IF NOT EXISTS `item_inventory` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemDesc` varchar(45) DEFAULT NULL,
  `ItemQuantity` int(11) DEFAULT NULL,
  `ItemAvailableQty` int(11) DEFAULT NULL,
  `ItemStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item_inventory`
--

INSERT INTO `item_inventory` (`ItemID`, `ItemDesc`, `ItemQuantity`, `ItemAvailableQty`, `ItemStatus`) VALUES
(1, 'ball', 0, 0, 'inactive'),
(2, 'ball', 0, 0, 'active'),
(3, 'ball', 0, 0, 'active'),
(4, 'Tent', 0, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `nonresident`
--

CREATE TABLE IF NOT EXISTS `nonresident` (
  `RequestorID` varchar(10) NOT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `MidName` varchar(45) DEFAULT NULL,
  `BirthDate` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`RequestorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `PersonnelID` int(11) NOT NULL AUTO_INCREMENT,
  `ResidentID` int(11) DEFAULT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Position` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PersonnelID`),
  KEY `ResidentID` (`ResidentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`PersonnelID`, `ResidentID`, `Category`, `Position`, `Status`) VALUES
(1, 1, 'Council', 'Kagawad', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_account`
--

CREATE TABLE IF NOT EXISTS `personnel_account` (
  `OfficialID` varchar(10) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`OfficialID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `ReqID` varchar(10) NOT NULL,
  `OfficialID` varchar(10) DEFAULT NULL,
  `RequestorID` varchar(10) DEFAULT NULL,
  `ReqDate` date DEFAULT NULL,
  `EventID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ReqID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resident_economicstatus`
--

CREATE TABLE IF NOT EXISTS `resident_economicstatus` (
  `REconStatNo` int(10) NOT NULL AUTO_INCREMENT,
  `ResidentID` int(11) NOT NULL,
  `Occupation` varchar(45) DEFAULT NULL,
  `IncomePerMonth` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`REconStatNo`),
  KEY `ResidentID` (`ResidentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resident_economicstatus`
--

INSERT INTO `resident_economicstatus` (`REconStatNo`, `ResidentID`, `Occupation`, `IncomePerMonth`) VALUES
(1, 1, 'Carperter', '0-4999');

-- --------------------------------------------------------

--
-- Table structure for table `resident_education`
--

CREATE TABLE IF NOT EXISTS `resident_education` (
  `REducNo` int(10) NOT NULL AUTO_INCREMENT,
  `ResidentID` int(11) NOT NULL,
  `CurrentEducStat` varchar(15) NOT NULL,
  `RecentYear` varchar(45) NOT NULL,
  `LiteracyWrite` varchar(10) NOT NULL,
  `LiteracyRead` varchar(15) NOT NULL,
  `HighestAttainment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`REducNo`),
  KEY `ResidentID` (`ResidentID`),
  KEY `ResidentID_2` (`ResidentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resident_education`
--

INSERT INTO `resident_education` (`REducNo`, `ResidentID`, `CurrentEducStat`, `RecentYear`, `LiteracyWrite`, `LiteracyRead`, `HighestAttainment`) VALUES
(1, 1, 'No', 'Null', 'Yes', 'Yes', 'College Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `resident_personaldata`
--

CREATE TABLE IF NOT EXISTS `resident_personaldata` (
  `ResidentID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `MidName` varchar(45) DEFAULT NULL,
  `Gender` varchar(45) DEFAULT NULL,
  `CivilStatus` varchar(45) DEFAULT NULL,
  `Religion` varchar(45) DEFAULT NULL,
  `Citizenship` varchar(45) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthPlace` varchar(45) DEFAULT NULL,
  `Height` varchar(45) DEFAULT NULL,
  `Weight` varchar(45) DEFAULT NULL,
  `HealthStatus` varchar(45) DEFAULT NULL,
  `DateOfResidency` date DEFAULT NULL,
  `VotingStatus` varchar(45) DEFAULT NULL,
  `Province` varchar(45) NOT NULL,
  `MobileNo` varchar(15) NOT NULL,
  `LandlineNo` varchar(15) NOT NULL,
  `EmailAdd` varchar(45) NOT NULL,
  `ResidentStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`ResidentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resident_personaldata`
--

INSERT INTO `resident_personaldata` (`ResidentID`, `LastName`, `FirstName`, `MidName`, `Gender`, `CivilStatus`, `Religion`, `Citizenship`, `BirthDate`, `BirthPlace`, `Height`, `Weight`, `HealthStatus`, `DateOfResidency`, `VotingStatus`, `Province`, `MobileNo`, `LandlineNo`, `EmailAdd`, `ResidentStatus`) VALUES
(1, 'Ramos', 'Jomari', 'Gustilo', 'Male', 'Single', 'Christian', 'Filipino', '1997-07-08', 'Makati', '1.73', '74', 'Normal', '2012-01-01', 'Not Registered', 'Negros Occidental', '09972200308', '6293349', 'franzgustilo@gmail.com', 'Active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `family_member`
--
ALTER TABLE `family_member`
  ADD CONSTRAINT `family_member_ibfk_1` FOREIGN KEY (`FResidentID`) REFERENCES `resident_personaldata` (`ResidentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`ResidentID`) REFERENCES `resident_personaldata` (`ResidentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resident_economicstatus`
--
ALTER TABLE `resident_economicstatus`
  ADD CONSTRAINT `resident_economicstatus_ibfk_1` FOREIGN KEY (`ResidentID`) REFERENCES `resident_personaldata` (`ResidentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resident_education`
--
ALTER TABLE `resident_education`
  ADD CONSTRAINT `resident_education_ibfk_1` FOREIGN KEY (`ResidentID`) REFERENCES `resident_personaldata` (`ResidentID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
