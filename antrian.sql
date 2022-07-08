-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 01:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `waktu_panggil` varchar(50) DEFAULT current_timestamp(),
  `waktu_selesai` varchar(50) DEFAULT NULL,
  `pelayanan_id` int(11) NOT NULL,
  `loket_id` int(11) NOT NULL,
  `antrian_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `tanggal`, `status`, `waktu_panggil`, `waktu_selesai`, `pelayanan_id`, `loket_id`, `antrian_last`) VALUES
(1, '22-07-06 08:16:25', 'selesai', NULL, NULL, 4, 1, NULL),
(2, '22-07-06 08:28:44', 'selesai', NULL, NULL, 4, 1, NULL),
(3, '22-07-06 08:28:45', 'selesai', NULL, NULL, 4, 1, NULL),
(4, '22-07-06 08:28:45', 'selesai', NULL, NULL, 4, 1, NULL),
(5, '22-07-06 08:28:46', 'selesai', NULL, NULL, 4, 1, NULL),
(6, '22-07-06 08:28:47', 'selesai', NULL, NULL, 4, 1, NULL),
(7, '22-07-06 08:28:48', 'selesai', NULL, NULL, 5, 1, NULL),
(8, '22-07-06 08:28:50', 'selesai', NULL, NULL, 5, 1, NULL),
(9, '22-07-06 08:28:50', 'selesai', NULL, NULL, 5, 1, NULL),
(10, '22-07-06 08:28:52', 'selesai', NULL, NULL, 6, 1, NULL),
(11, '22-07-06 08:28:54', 'selesai', NULL, NULL, 6, 1, NULL),
(12, '22-07-06 08:28:56', 'selesai', NULL, NULL, 7, 1, NULL),
(13, '22-07-06 08:28:57', 'selesai', NULL, NULL, 7, 1, NULL),
(14, '22-07-06 09:15:24', 'selesai', NULL, NULL, 4, 1, NULL),
(15, '22-07-06 10:29:15', 'selesai', NULL, NULL, 7, 1, NULL),
(16, '22-07-06 10:29:44', 'selesai', NULL, NULL, 7, 1, NULL),
(17, '22-07-06 10:30:19', 'selesai', NULL, NULL, 4, 1, NULL),
(18, '22-07-06 10:31:28', 'selesai', NULL, NULL, 4, 1, NULL),
(19, '22-07-06 10:31:29', 'selesai', NULL, NULL, 4, 1, NULL),
(20, '22-07-06 10:31:30', 'selesai', NULL, NULL, 4, 1, NULL),
(21, '22-07-06 10:58:00', 'selesai', NULL, NULL, 6, 1, NULL),
(22, '22-07-06 10:58:01', 'selesai', NULL, NULL, 6, 1, NULL),
(23, '22-07-06 10:58:02', 'selesai', NULL, NULL, 6, 1, NULL),
(24, '22-07-06 10:58:04', 'selesai', NULL, NULL, 7, 1, NULL),
(25, '22-07-06 11:00:53', 'selesai', NULL, NULL, 4, 1, NULL),
(26, '22-07-06 11:02:22', 'selesai', NULL, NULL, 4, 1, NULL),
(27, '22-07-06 11:02:40', 'selesai', NULL, NULL, 4, 1, NULL),
(28, '22-07-06 11:03:17', 'selesai', NULL, NULL, 4, 1, NULL),
(29, '22-07-06 11:03:27', 'selesai', NULL, NULL, 4, 1, NULL),
(30, '22-07-06 11:03:32', 'selesai', NULL, NULL, 5, 1, NULL),
(31, '22-07-06 11:31:40', 'selesai', NULL, NULL, 4, 1, NULL),
(32, '22-07-06 11:32:59', 'selesai', NULL, NULL, 5, 1, NULL),
(33, '22-07-06 21:54:52', 'selesai', NULL, NULL, 4, 1, NULL),
(34, '22-07-06 21:57:11', 'berlansung', NULL, NULL, 5, 1, NULL),
(35, '22-07-06 21:57:15', 'selesai', NULL, NULL, 6, 1, NULL),
(36, '22-07-06 21:57:18', 'berlansung', NULL, NULL, 7, 1, NULL),
(37, '22-07-06 21:57:27', 'selesai', NULL, NULL, 4, 1, NULL),
(38, '22-07-06 21:57:30', 'selesai', NULL, NULL, 4, 1, NULL),
(39, '22-07-06 21:57:33', 'selesai', NULL, NULL, 4, 1, NULL),
(40, '22-07-06 22:26:02', 'selesai', NULL, NULL, 4, 1, NULL),
(41, '22-07-06 22:38:01', 'selesai', NULL, NULL, 4, 1, NULL),
(42, '22-07-07 02:18:42', 'selesai', NULL, NULL, 4, 1, NULL),
(43, '22-07-07 02:18:45', 'selesai', NULL, NULL, 4, 1, NULL),
(44, '22-07-07 02:19:22', 'selesai', NULL, NULL, 4, 1, NULL),
(45, '22-07-07 02:19:25', 'selesai', NULL, NULL, 4, 1, NULL),
(46, '22-07-07 02:19:27', 'selesai', NULL, NULL, 4, 1, NULL),
(47, '22-07-07 02:19:30', 'selesai', NULL, NULL, 4, 1, NULL),
(48, '22-07-07 02:22:47', 'selesai', NULL, NULL, 4, 1, NULL),
(49, '22-07-07 02:23:18', 'selesai', NULL, NULL, 4, 1, NULL),
(50, '22-07-07 04:23:08', 'selesai', NULL, NULL, 4, 1, NULL),
(51, '22-07-07 04:23:08', 'selesai', NULL, NULL, 4, 1, NULL),
(52, '22-07-07 05:25:43', 'selesai', NULL, NULL, 4, 1, NULL),
(53, '22-07-07 05:25:43', 'selesai', NULL, NULL, 4, 1, NULL),
(54, '22-07-07 05:39:27', 'selesai', NULL, NULL, 4, 1, NULL),
(55, '22-07-07 05:39:27', 'selesai', NULL, NULL, 4, 1, NULL),
(56, '22-07-07 05:44:05', 'mengantri', NULL, NULL, 5, 1, NULL),
(57, '22-07-07 05:44:05', 'mengantri', NULL, NULL, 5, 1, NULL),
(58, '22-07-07 05:46:43', 'mengantri', NULL, NULL, 5, 1, NULL),
(59, '22-07-07 05:46:43', 'mengantri', NULL, NULL, 5, 1, NULL),
(60, '22-07-07 08:07:04', 'selesai', NULL, NULL, 4, 1, NULL),
(61, '22-07-07 08:07:04', 'selesai', NULL, NULL, 4, 1, NULL),
(62, '22-07-08 01:49:22', 'selesai', NULL, NULL, 4, 1, NULL),
(63, '22-07-08 01:49:22', 'selesai', NULL, NULL, 4, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
