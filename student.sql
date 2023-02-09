-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 11:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_information_consultant`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` varchar(20) NOT NULL,
  `id_room` varchar(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `id_room`, `firstname`, `lastname`, `address`, `tel`, `gender`) VALUES
('611221254-5', 'IS1A', 'พลอยใส', 'หน้าม้า', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'หญิง'),
('611522124-4', 'IS1A', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('611522201-2', 'IS2A', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('611522201-3', 'IS1A', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('611522201-4', 'IS3A', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('611522224-8', 'IS4B', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('611524124-4', 'IS3A', 'พลอยใส', 'หน้าม้า', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'หญิง'),
('611722124-4', 'IS4A', 'พลอยใส', 'หน้าม้า', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'หญิง'),
('612220124-5', 'IS4A', 'ปกรณ์', 'กินปลากรอบ', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'ชาย'),
('618148224-4', 'IS4B', 'พลอยใส', 'หน้าม้า', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'หญิง'),
('618157224-4', 'IS2A', 'พลอยใส', 'หน้าม้า', '115/445 ถ.มิตรภาพ อ.เมือง ต.ในเมือง จ.นครราชสีมา', '084-599-4487', 'หญิง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_room` (`id_room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
