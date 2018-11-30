-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 23, 2018 at 10:08 PM
=======
-- Generation Time: Nov 24, 2018 at 01:10 AM
>>>>>>> master
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `status`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `pc` varchar(5) NOT NULL,
  `nrp` varchar(18) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `pc`, `nrp`, `awal`, `akhir`) VALUES
(5, '1', 'hehe', '0000-00-00', '0000-00-00'),
(6, '1', 'hehe', '0001-01-01', '0002-01-01');

-- --------------------------------------------------------

--
>>>>>>> master
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `Nama` varchar(64) NOT NULL,
  `NRP` varchar(18) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Dosen` varchar(64) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Awal` date NOT NULL,
  `Akhir` date NOT NULL,
  `Spesifikasi` varchar(200) NOT NULL,
  `Kebutuhan` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Form` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `Nama`, `NRP`, `Telepon`, `Email`, `Dosen`, `NIP`, `Awal`, `Akhir`, `Spesifikasi`, `Kebutuhan`, `Status`, `Form`) VALUES
(11, 'hehe', 'hehe', 'hehe', 'hehe', 'hehe', '123', '0002-12-02', '0003-01-02', 'hehe', 'hehe', 'Pending', '/temp/ncc_form_12.pdf'),
(12, 'hehe', 'hehe', 'hehe', 'hehe', 'hehe', '123', '0002-12-02', '0003-01-02', 'hehe', 'hehe', 'Pending', '/temp/ncc_form_12.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
>>>>>>> master
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> master

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
