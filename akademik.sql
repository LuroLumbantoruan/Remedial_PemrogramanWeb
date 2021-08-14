-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 04:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama_Mhs`, `Jenis_Kelamin`, `Kelas`) VALUES
(311910110, 'Andi', 'Laki-laki', 'TI.19.B.1'),
(311910230, 'Linda', 'Perempuan', 'TI.19.B.3'),
(311910412, 'Doni', 'Laki-laki', 'TI.19.B.4'),
(311910540, 'Aldi', 'Laki-laki', 'TI.19.B.2');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NIM` int(10) NOT NULL,
  `Nama_Mhs` varchar(50) NOT NULL,
  `NilaiPemrograman` int(4) NOT NULL,
  `NilaiBasisData` int(4) NOT NULL,
  `NilaiRPL` int(4) NOT NULL,
  `NilaiKomnas` int(4) NOT NULL,
  `Jumlah_Nilai` int(6) NOT NULL,
  `Rata2` float NOT NULL,
  `Predikat_Yudisium` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIM`, `Nama_Mhs`, `NilaiPemrograman`, `NilaiBasisData`, `NilaiRPL`, `NilaiKomnas`, `Jumlah_Nilai`, `Rata2`, `Predikat_Yudisium`) VALUES
(311910110, 'Andi', 90, 80, 95, 78, 343, 85.75, 'A, Sangat Memuaskan'),
(311910230, 'Linda', 86, 60, 87, 90, 323, 80.75, 'A, Sangat Memuaskan'),
(311910412, 'Doni', 50, 65, 55, 70, 240, 60, 'C, Cukup Memuaskan'),
(311910540, 'Aldi', 90, 95, 86, 89, 360, 90, 'A, Sangat Memuaskan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311910541;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
