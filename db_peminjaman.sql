-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc37.remi
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2026 at 12:49 PM
-- Server version: 10.5.18-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(100) DEFAULT NULL,
  `kelas` varchar(6) DEFAULT NULL,
  `barang` varchar(100) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `jam_pinjam` time DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jam_kembali` time DEFAULT NULL,
  `status` enum('Dipinjam','Kembali') DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama_peminjam`, `kelas`, `barang`, `qty`, `tgl_pinjam`, `jam_pinjam`, `tgl_kembali`, `jam_kembali`, `status`) VALUES
(1, 'finley', '9b', 'bola voli pantai', 2, '2026-01-20', '09:00:00', '2026-01-31', '12:16:07', 'Dipinjam'),
(2, 'a', '8i', 'a', 1, '2011-10-11', '14:00:00', '2026-01-31', '12:19:24', 'Dipinjam'),
(3, 'a', 'a', 'a', 1, '2011-12-12', '14:10:00', '2026-01-31', '12:16:17', 'Dipinjam'),
(4, 'a', 'a', 'a', 1, '2011-12-12', '14:10:00', '2026-01-31', '12:29:37', 'Kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
