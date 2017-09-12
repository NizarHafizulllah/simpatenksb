-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 07:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
-- Table structure for table `menara`
--

CREATE TABLE IF NOT EXISTS `menara` (
  `id` char(32) NOT NULL,
  `no_register` varchar(20) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `npwpd` varchar(100) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `merek_usaha` varchar(50) NOT NULL,
  `klasif_perusahaan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `retribusi_perthn_f` double NOT NULL,
  `matrai` enum('ada','tidak ada') NOT NULL,
  `fc_ktp` enum('ada','tidak ada') NOT NULL,
  `photo` enum('ada','tidak ada') NOT NULL,
  `fc_pajak` enum('ada','tidak ada') NOT NULL,
  `fc_akte` enum('ada','tidak ada') NOT NULL,
  `siup_asli` enum('ada','tidak ada') NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_rekom` date NOT NULL,
  `no_rekom` varchar(30) NOT NULL,
  `tgl_register` date NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `kecamatan` char(13) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `nama_camat` varchar(100) NOT NULL,
  `nip_camat` varchar(50) NOT NULL,
  `jenis_permohonan` enum('baru','ulang') NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menara`
--

INSERT INTO `menara` (`id`, `no_register`, `nama_pemohon`, `tgl_lahir`, `tempat_lahir`, `pekerjaan`, `alamat`, `kewarganegaraan`, `no_ktp`, `npwpd`, `alamat_usaha`, `merek_usaha`, `klasif_perusahaan`, `jenis_usaha`, `retribusi_perthn_f`, `matrai`, `fc_ktp`, `photo`, `fc_pajak`, `fc_akte`, `siup_asli`, `status`, `tgl_rekom`, `no_rekom`, `tgl_register`, `tgl_verifikasi`, `nama_petugas_verifikasi`, `kecamatan`, `kabupaten`, `nama_camat`, `nip_camat`, `jenis_permohonan`, `no_tlp`) VALUES
('f0b4ae2f71135b5b005343338800ce7d', '1509876', 'ika sriwahyuni', '1995-10-15', 'labangka', 'mahasiswa', 'Jl. semangka', 'indonesia', '000123745847', 'jkshfaa', 'jln irian', 'sangkar burung ayam', 'baru', 'jasa', 50000, 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 2, '2017-09-08', '', '2017-09-08', '2017-08-29', 'nizar', '52_7_1', '52_7', 'burhan', '123456789', 'baru', '08636740897');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
