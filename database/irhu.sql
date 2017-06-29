-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 09:53 AM
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
-- Table structure for table `irhu`
--

CREATE TABLE IF NOT EXISTS `irhu` (
  `no_regis` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `fc_ktp` enum('Ada','Tidak Ada') NOT NULL,
  `fc_imb` enum('Ada','Tidak Ada') NOT NULL,
  `fc_akta_notaris` enum('Ada','Tidak Ada') NOT NULL,
  `fc_ho` enum('Ada','Tidak Ada') NOT NULL,
  `fc_npwp` enum('Ada','Tidak Ada') NOT NULL,
  `fc_tdp` enum('Ada','Tidak Ada') NOT NULL,
  `pas_photo` enum('Ada','Tidak Ada') NOT NULL,
  `fc_situ` enum('Ada','Tidak Ada') NOT NULL,
  `materai_6000` enum('Ada','Tidak Ada') NOT NULL,
  `tgl_verivikasi` date NOT NULL,
  `nama_petugas_verivikasi` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
