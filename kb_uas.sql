-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:15 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kb_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(5) UNSIGNED ZEROFILL NOT NULL,
  `tgl_history` date NOT NULL,
  `jenis_hewan` enum('Sapi','Kambing','Domba','Unta') NOT NULL,
  `umur_hewan` decimal(10,0) NOT NULL,
  `kondisi_hewan` varchar(255) NOT NULL,
  `hasil` enum('Halal/Layak','Makruh','Haram/Tidak Layak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `tgl_history`, `jenis_hewan`, `umur_hewan`, `kondisi_hewan`, `hasil`) VALUES
(00001, '2019-07-07', 'Sapi', '24', 'null', 'Halal/Layak'),
(00002, '2019-07-07', 'Sapi', '20', 'null', 'Haram/Tidak Layak'),
(00003, '2019-07-07', 'Kambing', '30', '[\"kuping terpotong\",\"tanduk pecah\"]', 'Makruh'),
(00004, '2019-07-07', 'Domba', '30', '[\"tanduk pecah\"]', 'Makruh'),
(00005, '2019-07-07', 'Unta', '50', '[\"kuping terpotong\",\"tanduk pecah\"]', 'Haram/Tidak Layak'),
(00006, '2019-07-07', 'Kambing', '3', '[\"buta sebelah\",\"pincang kaki\",\"sakit parah\"]', 'Haram/Tidak Layak'),
(00007, '2019-07-07', 'Sapi', '50', '[\"kuping terpotong\",\"tanduk pecah\"]', 'Makruh'),
(00008, '2019-07-07', 'Domba', '12', 'null', 'Halal/Layak'),
(00009, '2019-07-07', 'Unta', '90', 'null', 'Halal/Layak'),
(00010, '2019-07-07', 'Unta', '24', '[\"buta sebelah\",\"pincang kaki\",\"sakit parah\",\"kuping terpotong\",\"tanduk pecah\"]', 'Haram/Tidak Layak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('administrator','guest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
