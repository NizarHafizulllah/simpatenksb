-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 09:21 AM
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
-- Table structure for table `mikro`
--

CREATE TABLE IF NOT EXISTS `mikro` (
  `id` char(32) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `npwpd` varchar(100) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `merek_usaha` varchar(50) NOT NULL,
  `klasif_perusahaan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `retribusi_perthn_f` double NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `matrai` enum('ada','tidak ada') NOT NULL,
  `jenis_permohonan` enum('baru','ulang') NOT NULL,
  `adrt` enum('ada','tidak ada') NOT NULL,
  `fc_notaris` enum('ada','tidak ada') NOT NULL,
  `rekom_lurah` enum('ada','tidak ada') NOT NULL,
  `program_kerja` enum('ada','tidak ada') NOT NULL,
  `daftar_pengurus` enum('ada','tidak ada') NOT NULL,
  `kecamatan` char(13) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `no_rekom` varchar(30) NOT NULL,
  `tgl_rekom` date NOT NULL,
  `nip_camat` varchar(50) NOT NULL,
  `nama_camat` varchar(100) NOT NULL,
  `siup_asli` enum('ada','tidak ada') NOT NULL,
  `tgl_register` date NOT NULL,
  `no_register` varchar(20) NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `status` int(12) NOT NULL,
  `jenis_koperasi` varchar(100) NOT NULL,
  `ukuran_luas_usaha` varchar(100) NOT NULL,
  `status_bangunan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mikro`
--

INSERT INTO `mikro` (`id`, `nama_pemohon`, `alamat`, `kewarganegaraan`, `no_ktp`, `npwpd`, `alamat_usaha`, `merek_usaha`, `klasif_perusahaan`, `jenis_usaha`, `retribusi_perthn_f`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `no_tlp`, `matrai`, `jenis_permohonan`, `adrt`, `fc_notaris`, `rekom_lurah`, `program_kerja`, `daftar_pengurus`, `kecamatan`, `kabupaten`, `no_rekom`, `tgl_rekom`, `nip_camat`, `nama_camat`, `siup_asli`, `tgl_register`, `no_register`, `nama_petugas_verifikasi`, `tgl_verifikasi`, `status`, `jenis_koperasi`, `ukuran_luas_usaha`, `status_bangunan`) VALUES
('296f69615defa1b43c15d19d83e84eca', 'yuni Hartinu', 'jln. manggis', 'indonesia', '454546688787', 'jkshfaa', 'jln irian', 'biji bunga mawar', 'baru', 'jasa', 50000, 'labangka', '1995-10-15', 'mahasiswa', '08636740897', 'ada', 'baru', 'ada', 'ada', 'ada', 'ada', 'ada', '52_7_1', '52_7', '', '0000-00-00', '7346726347236', 'Nizar Hafizullah', 'ada', '2017-09-16', '1509876', 'nizar', '2017-08-29', 2, '', '300 m', 'baru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
