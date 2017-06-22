-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 08:43 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpatendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ho`
--

CREATE TABLE IF NOT EXISTS `ho` (
  `no_regis` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `fk_ktp_pemohon` enum('ada','tidak ada') NOT NULL,
  `fk_sertifikat_tanah` enum('ada','tidak ada') NOT NULL,
  `fk_surat_peruntukan_tanah` enum('ada','tidak ada') NOT NULL,
  `fk_imb` enum('ada','tidak ada') NOT NULL,
  `spt_keberatan_pemilik_tanah` enum('ada','tidak ada') NOT NULL,
  `spt_keberatan_tetangga` enum('ada','tidak ada') NOT NULL,
  `sp_gagguan_pencemaran` enum('ada','tidak ada') NOT NULL,
  `fk_storan_ho` enum('ada','tidak ada') NOT NULL,
  `materai_6000` enum('ada','tidak ada') NOT NULL,
  `fk_situ` enum('ada','tidak ada') NOT NULL,
  `fc_npwp` enum('ada','tidak ada') NOT NULL,
  `berita_acara` enum('ada','tidak ada') NOT NULL,
  `pas_photo` enum('ada','tidak ada') NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `nama_petugas_verifikasi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ho`
--
ALTER TABLE `ho`
 ADD PRIMARY KEY (`no_regis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
