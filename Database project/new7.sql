-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new7`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Number_Of_Employees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Name`, `Employee_ID`, `Number_Of_Employees`) VALUES
(101, 'Software Engineering', 1, 28),
(102, 'Data Science', 2, 1),
(103, 'Network Security Intelligence', 3, 4),
(104, 'Machine learning Engineering', 4, 5),
(105, 'Web Development', 5, 2),
(106, 'Application Development', 6, 14),
(107, 'Database Management System', 7, 3),
(108, 'Cyber Security', 8, 9),
(109, 'Game Graphics Design', 9, 2),
(110, 'Mathematics', 10, 1),
(111, 'Game Developer', 11, 1),
(112, 'Product Management', 12, 1),
(113, 'Artificial Intelligence Engineer', 13, 2),
(114, 'UI/UX Designer', 14, 7);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Employee_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Birthdate` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Employee_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Birthdate`, `Address`) VALUES
(1, 'Joynal', 'Abedin', 'Likon', 'Male', '01.04.2001', 'Motijhil'),
(2, 'Bijoy', 'Sarker', 'Bishal', 'Male', '10.11.2000', 'Keranigonj'),
(3, 'Rasin', 'Hasan', 'Shad', 'Male', '31.01.2004', 'Shariatpur'),
(4, 'Shorov', 'Paul', 'Joy', 'Male', '05.12.2001', 'Mawa'),
(5, 'Maria', 'Ferdous', 'Mita', 'Female', '12.12.1990', 'Jurain'),
(6, 'Istiak', 'Ahmed', 'Tushar', 'Male', '11.07.2010', 'Tikatuli'),
(7, 'Nazifa', 'Tasnim', '...', 'Female', '15.03.2004', 'Uttara'),
(8, 'Hemal', '...', 'Ahmed', 'Male', '20.09.2002', 'Motijhil'),
(9, 'Tanveer', 'Ratul', '...', 'Male', '01.07.2001', 'Old Dhaka'),
(10, 'Raisha', 'Risha', '...', 'Female', '30.10.2005', 'Dhaka'),
(11, 'Akik', 'Ahad', 'Ahmed', 'Male', '29.02.1999', 'Basabo'),
(12, 'Pritom', 'Anthony', 'Cruise', 'Male', '30.02.1969', 'Tongi'),
(13, 'Nadia', 'Afroj', 'Orin', 'Female', '25.03.1998', 'Noakhali'),
(14, 'Imtiaj', 'Uddin', '...', 'Male', '05.05.1980', 'Noakhali');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(11) NOT NULL,
  `Project_Name` varchar(255) NOT NULL,
  `Department_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Project_Name`, `Department_ID`) VALUES
(1001, 'IOS Developer', 101),
(1002, 'Prediction Making', 102),
(1003, 'Wireless Networking', 103),
(1004, 'Predict Species from Images', 104),
(1005, 'Search Engine Optimization ', 105),
(1006, 'Java Virtual Machine', 106),
(1007, 'Cloud Management', 107),
(1008, 'DOS Detection', 108),
(1009, 'Design Games Graphics', 109),
(1010, 'Implement Computational Geometry', 110),
(1011, 'Generate 3D Animation', 111),
(1012, 'Market Research & User Research', 112),
(1013, 'Data Mining and Knowledge Mapping', 113),
(1014, 'Design One UI', 114);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'Rasin Hasan Shad', '2468'),
(4, 'Bijoy Sarker', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE `works_on` (
  `Employee_ID` int(11) NOT NULL,
  `Project_ID` int(11) NOT NULL,
  `Hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works_on`
--

INSERT INTO `works_on` (`Employee_ID`, `Project_ID`, `Hours`) VALUES
(3, 1003, '24 hours'),
(2, 1002, '12 days'),
(1, 1001, '1 year'),
(4, 1004, '95 days'),
(5, 1005, '202 hours'),
(6, 1006, '7 months'),
(7, 1007, '204 hours'),
(8, 1008, '8 months'),
(9, 1009, '98 weeks'),
(10, 1010, '7 months'),
(11, 1011, '366 days'),
(12, 1012, '10 months'),
(13, 1013, '100 days'),
(14, 1014, '2.5 years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_ID`),
  ADD KEY `Employee_ID` (`Employee_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `works_on`
--
ALTER TABLE `works_on`
  ADD KEY `Employee_ID` (`Employee_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employees` (`Employee_ID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`);

--
-- Constraints for table `works_on`
--
ALTER TABLE `works_on`
  ADD CONSTRAINT `works_on_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employees` (`Employee_ID`),
  ADD CONSTRAINT `works_on_ibfk_2` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
