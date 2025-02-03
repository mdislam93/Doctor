-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 02:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `password`, `created_datetime`, `status`) VALUES
(1, 'md aminur', 'aminur', 'amin12', '2026-09-22 18:30:00', 1),
(2, 'Aminur', 'Aminur123', '12345', '2023-09-27 05:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `primary_contact_number` varchar(15) NOT NULL,
  `secondary_contact_number` varchar(15) DEFAULT NULL,
  `address` text NOT NULL,
  `adharcard_number` varchar(20) NOT NULL,
  `pancard_number` varchar(20) NOT NULL,
  `joining_date` date NOT NULL,
  `speciality_id` int(11) DEFAULT NULL,
  `visit_time_from` time DEFAULT NULL,
  `visit_time_to` time DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `STATUS` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors1`
--

CREATE TABLE `doctors1` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `primary_contact_number` varchar(15) NOT NULL,
  `secondary_contact_number` varchar(15) DEFAULT NULL,
  `address` text NOT NULL,
  `adharcard_number` varchar(20) NOT NULL,
  `pancard_number` varchar(20) NOT NULL,
  `joining_date` date NOT NULL,
  `speciality_id` int(11) DEFAULT NULL,
  `visit_time_from` time DEFAULT NULL,
  `visit_time_to` time DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `STATUS` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors1`
--

INSERT INTO `doctors1` (`id`, `fullname`, `email_id`, `primary_contact_number`, `secondary_contact_number`, `address`, `adharcard_number`, `pancard_number`, `joining_date`, `speciality_id`, `visit_time_from`, `visit_time_to`, `created_date`, `username`, `PASSWORD`, `STATUS`) VALUES
(1, 'Dr Anas', 'anas12@gmail.com', '9064548607', '9083928205', 'Birbhum', '611649741315', 'AMIN456', '2023-09-28', 2, '18:31:00', '18:33:00', '2023-09-26 13:18:47', 'anas12', 'anas12', 1),
(5, 'Dr Anas sk', 'anas12@gmail.com', '9064548655', '9083928250', 'Birbhum1', '611649741315', 'AMIN455', '2023-09-28', 2, '18:31:00', '18:33:00', '2023-09-26 13:22:50', 'anas1', 'anas1', 1),
(6, 'Ram', 'abc@gmail.com', '7845674567', '8956784567', 'Barasat', '7845673456', 'GNFDR345', '2023-09-26', 2, '21:50:00', '22:50:00', '2023-09-26 16:19:53', 'AV123', '53547865', 1),
(8, 'DR PRADIP ', 'pradi12@gmail.com', '974589547', '974586582', 'burdwan', '325505858240', 'AMIN456', '2023-09-26', 2, '14:18:00', '23:22:00', '2023-09-26 17:56:11', 'anas122', '12354', 1),
(9, 'DR.ANAS', 'amas12@gmail.com', '9749467594', '9734601048', 'MURSHIDABAD', '258975648752', '456', '2023-09-27', 2, '00:38:00', '00:37:00', '2023-09-26 19:04:34', 'aminurislam', '123456789', 1),
(10, 'asd', 'asd@gmail.com', '4545454545', '4546545687', 'koklata', '457896547896', 'ABCDE1234F', '2023-10-04', 2, '19:22:00', '19:23:00', '2023-10-04 13:47:53', 'anas', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_patient_allocation`
--

CREATE TABLE `doctor_patient_allocation` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `appointment_datetime` datetime DEFAULT NULL,
  `last_appointment_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_patient_allocation1`
--

CREATE TABLE `doctor_patient_allocation1` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `appointment_datetime` datetime DEFAULT NULL,
  `last_appointment_datetime` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_patient_allocation1`
--

INSERT INTO `doctor_patient_allocation1` (`id`, `doctor_id`, `patient_id`, `disease_name`, `appointment_datetime`, `last_appointment_datetime`, `status`) VALUES
(1, 1, 1, 'shgdfsdkufjhgsdf', '2023-09-26 23:30:00', '2023-09-26 12:29:00', 0),
(5, 6, 2, 'XYZ', '2023-09-26 09:52:00', '2023-09-26 10:54:00', 0),
(6, 6, 1, 'sds', '2023-09-26 14:26:00', '2023-09-26 23:32:00', 0),
(7, 1, 1, 'clevcale', '2023-09-27 04:41:00', '2023-09-27 06:41:00', 3),
(8, 1, 7, 'fever', '2023-10-14 19:19:00', '2023-10-26 19:23:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `primary_contact_number` varchar(15) NOT NULL,
  `secondary_contact_number` varchar(15) DEFAULT NULL,
  `address` text NOT NULL,
  `adharcard_number` varchar(20) NOT NULL,
  `pancard_number` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `STATUS` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fullname`, `primary_contact_number`, `secondary_contact_number`, `address`, `adharcard_number`, `pancard_number`, `username`, `PASSWORD`, `STATUS`) VALUES
(1, 'Md Aminur', '9083928205', '9749467594', 'Ekghoria Ojharapara', '325505858240', '225', 'aminur1', 'amin12', 1),
(2, 'Pradip', '8947574948', '4784589596', 'Barasat', '6473264534', 'GNFD3547', 'Pradip', '5635467', 1),
(3, 'Md Aminur', '9083928205', '9749758455', 'Ekghoria Ojharapara', '555885855855', 'ABCDE1234F', 'aminur', '12345678', 0),
(4, 'AMINUR ISLAM', '9083928205', '9749467594', 'MURSHIDABAD', '325505858241', 'ABCDE1234F', 'aminurislam', '123456789', 1),
(6, 'Md Aminur', '9083928205', '9083928205', 'Ekghoria Ojharapara', '325505858240', 'ABCDE1234F', 'aminur125478', '7454584545', 1),
(7, 'abc', '9999999999', '9999999999', 'barasat', '555555555555', 'ABCDE1234F', 'abcd', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `speciality_id` (`speciality_id`);

--
-- Indexes for table `doctors1`
--
ALTER TABLE `doctors1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `doctor_patient_allocation`
--
ALTER TABLE `doctor_patient_allocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `doctor_patient_allocation1`
--
ALTER TABLE `doctor_patient_allocation1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors1`
--
ALTER TABLE `doctors1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor_patient_allocation`
--
ALTER TABLE `doctor_patient_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_patient_allocation1`
--
ALTER TABLE `doctor_patient_allocation1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`speciality_id`) REFERENCES `specialties` (`id`);

--
-- Constraints for table `doctor_patient_allocation`
--
ALTER TABLE `doctor_patient_allocation`
  ADD CONSTRAINT `doctor_patient_allocation_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `doctor_patient_allocation_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
