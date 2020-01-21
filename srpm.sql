-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2020 at 02:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_harga`
--

CREATE TABLE `detail_harga` (
  `id` int(20) NOT NULL,
  `waktu_id` int(10) NOT NULL,
  `kendaraan_id` int(20) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_harga`
--

INSERT INTO `detail_harga` (`id`, `waktu_id`, `kendaraan_id`, `harga`) VALUES
(1, 1, 2, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `d_kendaraan`
--

CREATE TABLE `d_kendaraan` (
  `id` int(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `kendaraan_id` int(20) NOT NULL,
  `nopol_kendaraan` varchar(10) NOT NULL,
  `warna_kendaraan` varchar(20) NOT NULL,
  `tahun_pembuatan` varchar(10) NOT NULL,
  `daya_listrik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_kendaraan`
--

INSERT INTO `d_kendaraan` (`id`, `status`, `kendaraan_id`, `nopol_kendaraan`, `warna_kendaraan`, `tahun_pembuatan`, `daya_listrik`) VALUES
(1, 0, 2, '12345', 'biru', '2009', '250'),
(2, 0, 2, '12345', 'biru', '2009', '120');

-- --------------------------------------------------------

--
-- Table structure for table `j_kendaraan`
--

CREATE TABLE `j_kendaraan` (
  `id` int(20) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `j_kendaraan`
--

INSERT INTO `j_kendaraan` (`id`, `jenis`) VALUES
(1, 'mvp'),
(2, 'svp');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_id` int(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `jenis_id`, `merk`, `images`) VALUES
(1, 'serena', 1, 'honda', ''),
(2, 'serena', 2, 'nissan', ''),
(3, 'nama', 2, 'toyota', ''),
(4, 'nama', 1, 'suzuki', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nmr_tlp` varchar(20) NOT NULL,
  `ktp` varchar(40) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `sim` varchar(50) NOT NULL,
  `tgl_awal` varchar(12) NOT NULL,
  `tgl_akhir` varchar(12) NOT NULL,
  `jenis_id` int(10) NOT NULL,
  `kendaraan_id` int(10) NOT NULL,
  `waktu_id` int(10) NOT NULL,
  `lama_sewa` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL,
  `status` int(2) NOT NULL,
  `kode_trx` varchar(20) NOT NULL,
  `bukti_trx` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '390ba5f6b5f18dd4c63d7cda170a0c74', 1),
(2, 'pemilik', 'pemilik@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(20) NOT NULL,
  `lama_peminjaman` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `lama_peminjaman`) VALUES
(1, '12'),
(2, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_harga`
--
ALTER TABLE `detail_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_kendaraan`
--
ALTER TABLE `d_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `j_kendaraan`
--
ALTER TABLE `j_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_harga`
--
ALTER TABLE `detail_harga`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_kendaraan`
--
ALTER TABLE `d_kendaraan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `j_kendaraan`
--
ALTER TABLE `j_kendaraan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
