-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 05:11 AM
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
-- Database: `busreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_name` text NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `fare` int(50) NOT NULL,
  `seats_available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_name`, `source`, `destination`, `fare`, `seats_available`) VALUES
('Bhaktapur-Pokhara 8:00am Volvo Non-AC', 'Bhaktapur', 'Pokhara', 660, -31),
('Pokhara-Chitwan 6:30am Volvo Non-AC', 'Pokhara', 'Chitwan', 650, 44),
('Illam-Kathmandu 6:45am Volvo Non-AC', 'Illam', 'Kathmandu', 650, 30),
('Kathmandu-Dolakha 7:00am volvo AC ', 'Kathmandu', 'Dolakha', 700, 50),
('Lumbini-Pokhara 7:00am volvo non AC ', 'Lumbini', 'Pokhara', 600, 50);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `passenger_name` text NOT NULL,
  `age` int(3) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `bus_name` text NOT NULL,
  `Journey_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user__details`
--

CREATE TABLE `user__details` (
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `cont_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user__details`
--

INSERT INTO `user__details` (`name`, `email`, `password`, `cont_num`) VALUES
('Basu', 'basukalasaurav@gmail.com', '987651', '9860171758'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
