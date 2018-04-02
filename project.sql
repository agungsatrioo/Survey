-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 02:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `pt` varchar(20) NOT NULL,
  `pu` varchar(20) NOT NULL,
  `mudah` varchar(15) NOT NULL,
  `sesuai` varchar(15) NOT NULL,
  `pasti` varchar(15) NOT NULL,
  `disiplin` varchar(15) NOT NULL,
  `petugas` varchar(15) NOT NULL,
  `mampu` varchar(15) NOT NULL,
  `cepat` varchar(15) NOT NULL,
  `adil` varchar(15) NOT NULL,
  `sopan` varchar(15) NOT NULL,
  `wajar` varchar(15) NOT NULL,
  `sesuai2` varchar(15) NOT NULL,
  `tepat` varchar(15) NOT NULL,
  `nyaman` varchar(15) NOT NULL,
  `aman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `nama`, `umur`, `jk`, `pt`, `pu`, `mudah`, `sesuai`, `pasti`, `disiplin`, `petugas`, `mampu`, `cepat`, `adil`, `sopan`, `wajar`, `sesuai2`, `tepat`, `nyaman`, `aman`) VALUES
(3, 'Muhammad Ihsan', '30', 'Laki Laki', 'S1', 'Pegawai Swasta', '3', '3', '2', '4', '3', '3', '2', '4', '2', '1', '3', '4', '3', '3'),
(4, 'Viranti Ningsih', '23', 'Perempuan', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '2', '3', '4', '3', '4', '3', '4', '2', '1', '3', '3', '4', '2', '3'),
(5, 'Saska Dwinti', '26', 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '4', '3', '4', '3', '3', '3', '4', '4', '3', '3', '4', '3', '4', '2'),
(6, 'Muhammad Irfan', '19', 'Laki Laki', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(7, 'Calvin Arauna Purba', '30', 'Laki Laki', 'S2', 'PNS/TNI/POLRI', '3', '2', '3', '3', '3', '3', '4', '1', '4', '3', '3', '4', '4', '3'),
(8, 'Daffa Radinfanka', '25', 'Laki Laki', 'SLTP Sederajat', 'Wiraswasta/Usahawan', '3', '2', '3', '3', '4', '2', '3', '3', '4', '3', '3', '4', '3', '3'),
(9, 'Nurul Fatimah', '25', 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '3', '4', '4', '2', '4', '4', '3', '4', '4', '2', '4', '4', '3', '3'),
(10, 'Annisa Fadhilla Nur', '19', 'Perempuan', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '2', '2', '3', '4', '3', '2', '3', '2', '3', '4', '4', '3', '4', '4'),
(11, 'Rafifah Zahra', '26', 'Perempuan', 'Diploma', 'Wiraswasta/Usahawan', '4', '3', '4', '3', '4', '3', '4', '2', '4', '3', '4', '3', '4', '3'),
(12, 'January Dhea Putri', '20', 'Perempuan', 'SLTA Sederajat', 'Pelajar/Mahasiswa', '4', '3', '3', '4', '2', '4', '3', '4', '3', '4', '3', '4', '2', '3'),
(13, 'Cici SIti Widya', '30', 'Perempuan', 'S2', 'Pegawai Swasta', '4', '4', '3', '4', '3', '2', '4', '3', '3', '4', '2', '2', '3', '3'),
(14, 'Fahmi Ahmad Fauzi', '23', 'Laki Laki', 'Diploma', 'Pelajar/Mahasiswa', '3', '2', '4', '4', '3', '4', '3', '4', '4', '4', '4', '3', '4', '4'),
(15, 'Aufa Ismail', '21', 'Laki Laki', 'SLTP Sederajat', 'Wiraswasta/Usahawan', '2', '4', '3', '3', '3', '4', '4', '3', '4', '3', '4', '3', '3', '4'),
(16, 'Salma Aulia Andari', '35', 'Perempuan', 'SD Sederajat', 'Pegawai Swasta', '3', '3', '3', '3', '3', '4', '3', '4', '3', '4', '3', '4', '3', '4'),
(17, 'Ferdy Firmansyah', '40', 'Laki Laki', 'S1', 'Wiraswasta/Usahawan', '3', '4', '1', '4', '4', '4', '3', '4', '4', '3', '4', '3', '4', '3'),
(18, 'Muhammad Ridwan Firdaus', '26', 'Laki Laki', 'Diploma', 'Wiraswasta/Usahawan', '3', '3', '4', '4', '4', '3', '4', '3', '4', '4', '3', '3', '4', '3'),
(19, 'Salma Hanifah', '23', 'Perempuan', 'S1', 'Pegawai Swasta', '3', '4', '4', '3', '4', '3', '4', '4', '3', '4', '3', '4', '4', '4'),
(20, 'Nur Fatwa Oryza', '28', 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '3', '4', '3', '4', '4', '2', '4', '4', '4', '4', '3', '4', '3', '4'),
(21, 'Sindy Sintia', '32', 'Perempuan', 'S1', 'PNS/TNI/POLRI', '4', '2', '4', '4', '4', '2', '3', '4', '4', '2', '4', '4', '2', '4'),
(22, 'Rizal Khoirudien', '42', 'Laki Laki', 'S2', 'Wiraswasta/Usahawan', '4', '4', '3', '4', '2', '3', '4', '4', '4', '3', '2', '4', '3', '4'),
(23, 'Elvira Natalia', '29', 'Perempuan', 'S1', 'Wiraswasta/Usahawan', '3', '4', '4', '3', '4', '2', '4', '3', '4', '3', '3', '4', '4', '3'),
(24, 'Sholeh Nur Udin', '39', 'Laki Laki', 'SLTA Sederajat', 'Wiraswasta/Usahawan', '3', '4', '4', '3', '4', '2', '3', '3', '4', '4', '4', '3', '4', '3'),
(25, 'Shinta Nurlela', '24', 'Perempuan', 'S1', 'Pelajar/Mahasiswa', '3', '4', '4', '2', '2', '4', '2', '4', '2', '3', '4', '4', '4', '3'),
(26, 'Afifah Khorimah', '36', 'Perempuan', 'S1', 'PNS/TNI/POLRI', '4', '3', '3', '4', '3', '3', '4', '3', '3', '4', '3', '4', '3', '3'),
(27, 'Raymond Tirta Kelana', '24', 'Laki Laki', 'Diploma', 'Pelajar/Mahasiswa', '4', '3', '3', '2', '3', '3', '4', '2', '4', '2', '4', '2', '4', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
