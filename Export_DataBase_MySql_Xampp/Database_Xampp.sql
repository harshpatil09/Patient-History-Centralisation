-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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
-- Table structure for table `1234554321`
--

CREATE TABLE `1234554321` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `1245856956`
--

CREATE TABLE `1245856956` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `1245856956`
--

INSERT INTO `1245856956` (`id`, `Diagnosis`, `Treatment`, `Hospital_treated`, `Files`) VALUES
(1, 'Fever ', 'Medical', 'North Star', 'Harsh_patil_NorthStar_reports.pdf'),
(2, 'Acute bronchitis', 'Antibiotics (e.g., Amoxicillin) for acute bronchit', 'Mercy Hospital', 'Harsh_patil_MercyHospital_reports.pdf'),
(3, 'Hypertension', 'Antihypertensive medications (e.g., Lisinopril) fo', 'St. Joseph\'s Medical Center', 'Harsh_patil_Joseph\'sMedicalCenter_reports.pdf'),
(4, 'Major depressive disorder', 'Selective serotonin reuptake inhibitors (SSRIs) fo', 'Memorial Hospital', 'Harsh_patil_MemorialHospital_reports.pdf'),
(5, 'Osteoarthritis', 'Nonsteroidal anti-inflammatory drugs (NSAIDs) for ', 'Good Samaritan Hospital', 'Harsh_patil_GoodSamaritanHospital_reports.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `5287414569`
--

CREATE TABLE `5287414569` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `5463764912`
--

CREATE TABLE `5463764912` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `5637289304`
--

CREATE TABLE `5637289304` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `6798341084`
--

CREATE TABLE `6798341084` (
  `id` int(11) NOT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Treatment` varchar(50) DEFAULT NULL,
  `Hospital_treated` varchar(50) DEFAULT NULL,
  `Files` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_login`
--

CREATE TABLE `hospital_login` (
  `h_name` varchar(60) NOT NULL,
  `reg_no` int(10) NOT NULL,
  `h_email` varchar(30) NOT NULL,
  `h_phone` int(20) NOT NULL,
  `h_city` varchar(30) NOT NULL,
  `h_speciality` varchar(40) NOT NULL,
  `h_password` varchar(30) NOT NULL,
  `repeat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_login`
--

INSERT INTO `hospital_login` (`h_name`, `reg_no`, `h_email`, `h_phone`, `h_city`, `h_speciality`, `h_password`, `repeat`) VALUES
('abcd', 123, 'theharshpati109@gmail.com', 123456, 'Kolhapur', 'cardio', '', ''),
('North Star', 223145675, 'northstar12@gmail.com', 123456789, 'Kolhapur', 'cardio', '', ''),
('linux', 2345, 'linux12@gmail.com', 456123, 'Kolhapur', 'cardio', '', ''),
('king', 999, 'king12@gmail.com', 123468, 'Kolhapur', 'cardio', 'Pass@123', ''),
('Adhar', 111, 'adhar12@gmail.com', 456123789, 'Kolhapur', 'All', 'adhar1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientName` varchar(30) NOT NULL,
  `Aadhar` int(20) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `BirthDate` varchar(30) NOT NULL,
  `p_email` varchar(40) NOT NULL,
  `p_contact` int(60) NOT NULL,
  `City` varchar(20) NOT NULL,
  `p_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientName`, `Aadhar`, `bgroup`, `BirthDate`, `p_email`, `p_contact`, `City`, `p_password`) VALUES
('harsh patil', 9999999, 'A+', '', 'harsh12@gmail.com', 2147483647, 'Kolhapur', ''),
('jaydeep', 36363636, 'A+', '', 'jay12@gmail.com', 456123789, 'Kolhapur', 'jaydeep123'),
('atharva', 21456, 'A+', '', 'athar@gmail.com', 4561238, 'Kolhapur', 'atharva123'),
('Harsh Patil', 1234567890, 'z+', '2023-10-14', 'har@gmail.com', 75395, 'kolhapur', ''),
('abhay', 123456789, 'A+', '2023-10-19', 'abhay@gmail.com', 52525252, 'Kolhapur', ''),
('Kali', 0, 'A+', '2023-10-18', 'kali@gmail.com', 789456123, 'Kolhapur', ''),
('Harsh Patil', 2020202020, 'A+', '2004-08-12', 'harsh@gmail.com', 2147483647, 'Kolhapur', ''),
('Harsh D. Patil', 2147483647, 'A+', '2024-03-16', 'theharshpati109@gmail.com', 2147483647, 'Kolhapur', ''),
('Harsh Dilipkumar Patil', 2147483647, 'A+', '2024-03-17', 'theharshpati109@gmail.com', 2147483647, 'Kolhapur', ''),
('Harsh Dilipkumar Patil', 2147483647, 'A+', '2024-03-30', 'theharshpati109@gmail.com', 852147963, 'Kolhapur', ''),
('Harsh D. Patil', 1245856956, 'A+', '2024-03-08', 'theharshpat@gmail.com', 2147483647, 'Kolhapur', ''),
('Jaydeep Kine', 1234554321, 'B+', '2024-03-15', 'jk@gmail.com', 2147483647, 'Pune', ''),
('Utkarsh Malav', 2147483647, 'O+', '2024-03-16', 'Uttu@gmail.com', 2147483647, 'Solapur', ''),
('Siddhesh Patil', 2147483647, 'A-', '2023-11-16', 'sp@gmail.com', 852136479, 'Mumbai', ''),
('Atharva Donkar', 2147483647, 'O-', '2023-07-05', 'atharva@gmail.com', 2147483647, 'Sangli', ''),
('Salman Landge', 2147483647, 'O+', '2024-03-21', 'salman@gmail.com', 2147483647, 'Satar', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1234554321`
--
ALTER TABLE `1234554321`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1245856956`
--
ALTER TABLE `1245856956`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5287414569`
--
ALTER TABLE `5287414569`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5463764912`
--
ALTER TABLE `5463764912`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5637289304`
--
ALTER TABLE `5637289304`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6798341084`
--
ALTER TABLE `6798341084`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1234554321`
--
ALTER TABLE `1234554321`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `1245856956`
--
ALTER TABLE `1245856956`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `5287414569`
--
ALTER TABLE `5287414569`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `5463764912`
--
ALTER TABLE `5463764912`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `5637289304`
--
ALTER TABLE `5637289304`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `6798341084`
--
ALTER TABLE `6798341084`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
