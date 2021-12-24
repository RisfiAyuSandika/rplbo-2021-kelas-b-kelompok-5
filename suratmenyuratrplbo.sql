-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2021 at 02:23 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` suratmenyuratrplbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(8) NOT NULL,
  `nama_pengguna` varchar(16) NOT NULL,
  `kata_sandi` varchar(100) NOT NULL,
  `peran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `kata_sandi`, `peran`, `created_at`, `updated_at`) VALUES
(1, 'ketuaTu', '$2y$10$6nkvYYazeGAaEjcWyHAcv.AryCIBrNqxhxpzCtAdJQn5BpbKxU00W', 'ketuaTu', '2021-12-23 20:18:11', '2021-12-23 19:20:29'),
(3, 'stafTu', 'fee1460d76ab8f4f5ee2422167ed70c9', 'stafTu', '2021-12-23 18:41:11', '2021-12-23 18:41:11'),
(4, 'resepsionis', '3aeff485f68b360d076de3d73f9247ad', 'resepsionis', '2021-12-23 18:41:24', '2021-12-23 18:41:24'),
(5, 'kepalaSekolah', '566e5a286627735e54fa1fbc2afc901e', 'kepalaSekolah', '2021-12-23 18:41:44', '2021-12-23 18:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(12) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `file_surat` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_legalisir`
--

CREATE TABLE `surat_legalisir` (
  `id` int(12) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tahun_tamat` year(4) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `file_surat` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_legalisir`
--
ALTER TABLE `surat_legalisir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_legalisir`
--
ALTER TABLE `surat_legalisir`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
