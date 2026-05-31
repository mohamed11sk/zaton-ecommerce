-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2025 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `password`, `id`) VALUES
('admin', 'admin', 0),
('ahmed', '123', 1),
('taha', '456', 2),
('lotfy', '789', 3),
('zead', '147', 4),
('ali', '258', 5),
('abdo', '369', 6),
('bsjb', 'jbndkfs', 7),
('ajsnn', 'nsajn', 8);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `massage`) VALUES
('ahmed', 'ahmed@me.com', 'test', 'hellooooooo are this work'),
('taha', 'taha@zaton.mkhlil', 'test', 'al ptats al ptats sokhna khals sokna khals'),
('jojo', 'jojo@here.com', 'test', 'helooooooo'),
('sdicbwb', 'djnskjncsjdn@jhbvsdaj.csd', 'dfkjsk', 'jdksj'),
('dgdf', 'dfgdg@jazjh.ssz', 'KSDALMK', 'MCKASLKCMSKLD'),
('saxdasdd', 'asd@saxu.as', 'asx', 'msakx'),
('Alaa Elsayed Farouk Ahmed Mohamed', 'srorr8872@gmail.com', 'FSDF', ''),
('Alaa Elsayed Farouk Ahmed Mohamed', 'srorr8872@gmail.com', 'FSDF', ''),
('Mohamed Elsayed Ahmed Hussien', 'srorr8872@gmail.com', 'FSDF', 'ghmj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
