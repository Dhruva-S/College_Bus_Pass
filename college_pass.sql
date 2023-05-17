-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 12:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_pass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `bus_id` varchar(255) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `starting_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`bus_id`, `seat_no`, `usn`, `booking_date`, `email_id`, `starting_location`) VALUES
('MNG2', 1, '4NM18CS130', '2020-12-22', 'sdm@gmail.com', 'Belman'),
('MNG2', 2, '4nm18me420', '2020-12-22', 'ep@rediff.com', 'Kateel'),
('MNG2', 3, '4nm17cs001', '2023-05-17', 'rd@gmail.com', 'Bejai'),
('MNG3', 1, '4NM18CS139', '2020-12-22', 'pshaw@gmail.com', 'Panambur'),
('MNG3', 2, '4NM18CS152', '2020-12-22', 'kp@gmail.com', 'Panambur');

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_id` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `total_strength` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_id`, `reg_no`, `total_strength`) VALUES
('MNG1', 'KA-19-MA-7048', 0),
('MNG2', 'KA-19-GH-8086', 3),
('MNG3', 'KA-19-FB-1441', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bus_routes`
--

CREATE TABLE `bus_routes` (
  `starting_location` varchar(255) NOT NULL,
  `bus_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_routes`
--

INSERT INTO `bus_routes` (`starting_location`, `bus_id`) VALUES
('Bejai', 'MNG2'),
('Belman', 'MNG2'),
('Jyothi', 'MNG1'),
('Kateel', 'MNG2'),
('Kottara', 'MNG1'),
('Ladyhill', 'MNG3'),
('Mulky', 'MNG3'),
('Padubidri', 'MNG1'),
('Panambur', 'MNG3');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `bus_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `bus_id`) VALUES
('d1', 'Samit D.M', 'MNG1'),
('d2', 'Ryan M', 'MNG2'),
('d3', 'Dhruva S', 'MNG3');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `starting_location` varchar(255) NOT NULL,
  `bus_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`starting_location`, `bus_fees`) VALUES
('Bejai', 10000),
('Belman', 5000),
('Jyothi', 20000),
('Kateel', 10000),
('Kottara', 18000),
('Ladyhill', 20000),
('Mulky', 15000),
('Padubidri', 10000),
('Panambur', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email_id`, `username`, `password`) VALUES
('ep@rediff.com', 'Ellyse Perry', 'cricketer@austrial'),
('kp@gmail.com', 'Kevin Pietersen', '12345'),
('pshaw@gmail.com', 'prithvi shaw', '12345'),
('rd@gmail.com', 'rahul dravid', '$2y$10$Itk3zg3Y71WOCKBGf3SmjOb4yuK.pPnlE.RWbSe92jN1a81/2l50m'),
('sdm@gmail.com', 'Samit D Manvar', 'sdm12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `starting_location` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `dob`, `year`, `branch`, `address`, `mobile_no`, `starting_location`, `email_id`, `gender`) VALUES
('4nm17cs001', 'rahul dravid', '1970-02-17', 'first', 'civil', 'xyz', 123, 'Bejai', 'rd@gmail.com', 'male'),
('4NM18CS130', 'Samit D Manvar', '2000-01-01', 'third', 'cse', '1st Cross,Belman', 1122334455, 'Belman', 'sdm@gmail.com', 'male'),
('4NM18CS139', 'prithvi shaw', '2000-01-01', 'first', 'civil', 'opposite petrol pump,mangalore', 1234567891, 'Panambur', 'pshaw@gmail.com', 'male'),
('4NM18CS152', 'kevin P', '1990-06-27', 'fourth', 'cse', 'No.221 B ,Baker Street,Panambur', 1122334455, 'Panambur', 'kp@gmail.com', 'male'),
('4nm18me420', 'Ellyse Perry', '1995-07-06', 'second', 'mechanical', '2nd Cross,Kateel', 2147483647, 'Kateel', 'ep@rediff.com', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`bus_id`,`seat_no`),
  ADD KEY `bookfk1` (`usn`),
  ADD KEY `bookfk2` (`email_id`),
  ADD KEY `bookfk3` (`starting_location`);

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`starting_location`,`bus_id`),
  ADD KEY `busfk1` (`bus_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `dfk1` (`bus_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`starting_location`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `sfk1` (`starting_location`),
  ADD KEY `sfk2` (`email_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `bookfk1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookfk2` FOREIGN KEY (`email_id`) REFERENCES `signup` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookfk3` FOREIGN KEY (`starting_location`) REFERENCES `fees` (`starting_location`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD CONSTRAINT `busfk1` FOREIGN KEY (`bus_id`) REFERENCES `bus_details` (`bus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `busfk2` FOREIGN KEY (`starting_location`) REFERENCES `fees` (`starting_location`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `dfk1` FOREIGN KEY (`bus_id`) REFERENCES `bus_details` (`bus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `sfk1` FOREIGN KEY (`starting_location`) REFERENCES `fees` (`starting_location`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sfk2` FOREIGN KEY (`email_id`) REFERENCES `signup` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
