-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 01:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_database`
--
CREATE DATABASE IF NOT EXISTS `hms_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hms_database`;

-- --------------------------------------------------------

--
-- Table structure for table `hms`
--

CREATE TABLE `hms` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PermanentAddress` varchar(100) NOT NULL,
  `PresentAddress` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hms`
--

INSERT INTO `hms` (`id`, `FirstName`, `MiddleName`, `LastName`, `Email`, `PermanentAddress`, `PresentAddress`, `Phone`, `Website`, `Gender`, `Religion`, `DateOfBirth`, `UserName`, `UserPassword`) VALUES
(0, 'abir', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 'abir', 'Shafin', 'SHAFIN', '', '', '', '', '', '', '', '', '', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sdddddddddddd', 'sssssssssssssssssssssssssssw', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'dddd', 'dddd', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'dddd', 'dddd', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'dddd', 'dddd', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'ffffffff', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', '', '', '', 'shafixxxx', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'sssssssssssssssss', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'xxxxxxxxxxxx', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', '', '', '', 'shafixxxx', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'fffffffffff', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'wwwwwwww', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', '', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'dddddddddddddd', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', 'gender', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'wwwwww', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', 'gender', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'rrrrrrrrrrrrrrrr', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', 'gender', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'ssssssssssssssssssssssssss', 'sssssssssssssssssssssssssss', '33686786', 'www.google.com', 'gender', '', '', 'shafi', ''),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'sssssssssssssssssssssssssss', '33686786', 'www.w3schools.com', 'gender', '', '', 'shafi', '333'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', '33686786', 'https://www.w3schools.com', 'gender', '', '', 'Fahmi', '222'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', '33686786', 'https://www.w3schools.com', 'gender', '', '', 'shafi', '555'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', '33686786', 'https://www.w3schools.com', 'gender', '', '', 'shafi', '11111'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', '33686786', 'https://www.w3schools.com', 'FEMALE', '', '', 'shafi', '44444'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'xaaaxax', 'aaaaaaaaaaaaaax', '33686786', 'www.google.com', 'MALE', '', '', 'shafi', '1234'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'xaaaxax', 'aaaaaaaaaaaaaax', '33686786', 'www.google.com', 'MALE', 'HINDU ', '', 'shafi', '777'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'xaaaxax', 'aaaaaaaaaaaaaax', '33686786', 'www.google.com', 'MALE', 'HINDU ', '1989-06-13 ', 'shafi', '232'),
(0, 'abir', 'Shafin', 'SHAFIN', 'ahmedshafinahmedshafin@gmail.com', 'xaaaxax', 'aaaaaaaaaaaaaax', '33686786', 'www.google.com', 'MALE', 'HINDU ', '1989-06-13 ', 'shafi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `hmsdatabase`
--

CREATE TABLE `hmsdatabase` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PermanentAddress` varchar(100) NOT NULL,
  `PresentAddress` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL,
  `UserConfirmPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hmsdatabase_doctor`
--

CREATE TABLE `hmsdatabase_doctor` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `DoctorTime` varchar(100) NOT NULL,
  `DoctorRoom` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmsdatabase_doctor`
--

INSERT INTO `hmsdatabase_doctor` (`id`, `FirstName`, `LastName`, `DoctorTime`, `DoctorRoom`, `Phone`) VALUES
(9, 'Selim', 'Reza', '08 AM to 08 PM', '404', '0123654794');

-- --------------------------------------------------------

--
-- Table structure for table `hmsdatabase_roombook`
--

CREATE TABLE `hmsdatabase_roombook` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `CheckIn` varchar(100) NOT NULL,
  `CheckOut` varchar(100) NOT NULL,
  `RoomNo` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `RoomType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmsdatabase_roombook`
--

INSERT INTO `hmsdatabase_roombook` (`id`, `FirstName`, `LastName`, `CheckIn`, `CheckOut`, `RoomNo`, `Phone`, `RoomType`) VALUES
(11, 'Fahim', 'Islam', '2019-12-12', '2022-12-12', '404', '0198745632', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `hmsdatabase_salary`
--

CREATE TABLE `hmsdatabase_salary` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmsdatabase_salary`
--

INSERT INTO `hmsdatabase_salary` (`id`, `FirstName`, `LastName`, `Designation`, `Salary`) VALUES
(13, 'Jenny', 'Jessia', 'Doctor', '25,000');

-- --------------------------------------------------------

--
-- Table structure for table `hmsdatabase_staff`
--

CREATE TABLE `hmsdatabase_staff` (
  `id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `StaffDesignation` varchar(100) NOT NULL,
  `StaffPresentAddress` varchar(100) NOT NULL,
  `StaffPermanentAddress` varchar(100) NOT NULL,
  `StaffTime` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmsdatabase_staff`
--

INSERT INTO `hmsdatabase_staff` (`id`, `FirstName`, `LastName`, `StaffDesignation`, `StaffPresentAddress`, `StaffPermanentAddress`, `StaffTime`, `Phone`) VALUES
(12, 'Jack', 'Rose', 'Doctor', 'Dhaka', 'Dhaka', '08 AM to 08 PM', '0123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hmsdatabase`
--
ALTER TABLE `hmsdatabase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmsdatabase_doctor`
--
ALTER TABLE `hmsdatabase_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmsdatabase_roombook`
--
ALTER TABLE `hmsdatabase_roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmsdatabase_salary`
--
ALTER TABLE `hmsdatabase_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmsdatabase_staff`
--
ALTER TABLE `hmsdatabase_staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmsdatabase`
--
ALTER TABLE `hmsdatabase`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hmsdatabase_doctor`
--
ALTER TABLE `hmsdatabase_doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hmsdatabase_roombook`
--
ALTER TABLE `hmsdatabase_roombook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmsdatabase_salary`
--
ALTER TABLE `hmsdatabase_salary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hmsdatabase_staff`
--
ALTER TABLE `hmsdatabase_staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
