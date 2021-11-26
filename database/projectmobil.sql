-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 12:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `datak`
--

CREATE TABLE `datak` (
  `plat_nomor` varchar(10) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `status` enum('Bebas','Disewa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datak`
--

INSERT INTO `datak` (`plat_nomor`, `gambar`, `merk`, `tipe`, `warna`, `status`) VALUES
('Court 1', 's2.jpg', 'Interlock', '25m x 15m', 'National Standarts', 'Bebas'),
('Court 2', 's1.jpg', 'Synthetic Turf', '42m x 25m', 'International standarts', 'Bebas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(8, 'sagita', 'sagita', 'user'),
(9, 'tomo', 'cuk123', 'user'),
(10, 'farhan', 'wkwk', 'user'),
(11, 'dixa', '321', 'user'),
(12, 'fshdq', 'serah', 'user'),
(13, '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_ktp` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN','','') NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_ktp`, `nama`, `tgl_lhr`, `jk`, `no_telp`, `alamat`, `username`, `password`) VALUES
('123', 'Ilham Utomo', '1995-11-21', 'LAKI-LAKI', 2147483647, 'Klaten', 'tomo', 'cuk123'),
('123454', 'testimonial', '1998-11-09', 'LAKI-LAKI', 34224, 'dunno', 'dixa', '321'),
('414325', 'Farras Suduk', '1998-04-22', 'LAKI-LAKI', 2147483647, 'Temanggung', 'fshdq', 'serah'),
('4421', 'Farhan Utama', '1998-10-10', 'LAKI-LAKI', 2147483647, 'SIAK', 'farhan', 'wkwk');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_sewa` int(11) NOT NULL,
  `id_ktp` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `hasil_denda` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_sewa`, `id_ktp`, `nama`, `plat_nomor`, `merk`, `tipe`, `warna`, `tgl_sewa`, `tgl_kembali`, `jam_selesai`, `tgl_dikembalikan`, `hasil_denda`, `total_harga`) VALUES
(26, '123454', 'testimonial', 'Court 1', 'Interlock', '25m x 15m', 'National Standarts', '2018-11-05', '08:00:00', '09:00:00', '0000-00-00', 0, 0),
(27, '123454', 'testimonial', 'Court 2', 'Synthetic Turf', '42m x 25m', 'International standarts', '2018-11-30', '08:00:00', '11:00:00', '0000-00-00', 0, 0),
(28, '123454', 'testimonial', 'Court 2', 'Synthetic Turf', '42m x 25m', 'International standarts', '2019-11-11', '08:00:00', '13:00:00', '0000-00-00', 0, 37200000),
(29, '414325', 'Farras Suduk', 'Court 2', 'Synthetic Turf', '42m x 25m', 'International standarts', '2018-11-06', '18:00:00', '19:00:00', '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datak`
--
ALTER TABLE `datak`
  ADD PRIMARY KEY (`plat_nomor`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
