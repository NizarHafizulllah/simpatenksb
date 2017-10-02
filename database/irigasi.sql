-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 09:23 AM
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
-- Table structure for table `irigasi`
--

CREATE TABLE IF NOT EXISTS `irigasi` (
  `id` char(32) NOT NULL,
  `tgl_register` date NOT NULL,
  `no_register` varchar(20) NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `no_rekom` varchar(20) NOT NULL,
  `tgl_rekom` date NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `negara_pemohon` varchar(50) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `npwpd` varchar(50) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `merk_usaha` varchar(50) NOT NULL,
  `klasifikasi_usaha` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `retribusi` double(11,2) NOT NULL,
  `nama_camat` varchar(100) NOT NULL,
  `nip_camat` varchar(100) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `kecamatan` char(13) NOT NULL,
  `jenis_permohonan` enum('baru','lama') NOT NULL,
  `siup_asli` enum('ada','tidak ada') NOT NULL,
  `peta_lokasi` enum('ada','tidak ada') NOT NULL,
  `daftar_perusahaan` enum('ada','tidak ada') NOT NULL,
  `fc_npwpd` enum('ada','tidak ada') NOT NULL,
  `fc_akte` enum('ada','tidak ada') NOT NULL,
  `dok_lingkungan` enum('ada','tidak ada') NOT NULL,
  `rekom_desa` enum('ada','tidak ada') NOT NULL,
  `ktp` enum('ada','tidak ada') NOT NULL,
  `sp_materai` enum('ada','tidak ada') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `retribusi_perthn_f` double NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irigasi`
--

INSERT INTO `irigasi` (`id`, `tgl_register`, `no_register`, `tgl_verifikasi`, `nama_petugas_verifikasi`, `no_rekom`, `tgl_rekom`, `nama_pemohon`, `negara_pemohon`, `no_ktp`, `alamat`, `npwpd`, `alamat_usaha`, `merk_usaha`, `klasifikasi_usaha`, `jenis_usaha`, `retribusi`, `nama_camat`, `nip_camat`, `kabupaten`, `kecamatan`, `jenis_permohonan`, `siup_asli`, `peta_lokasi`, `daftar_perusahaan`, `fc_npwpd`, `fc_akte`, `dok_lingkungan`, `rekom_desa`, `ktp`, `sp_materai`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `no_telp`, `retribusi_perthn_f`, `status`) VALUES
('', '2017-09-20', '1509876', '2017-08-29', 'nizar', '', '0000-00-00', 'ika sriwahyuni', 'indonesia', '454546688787', 'jln dungu', 'jkshfaa', 'jln irian', 'kakilima', 'gugup', 'jasa', 0.00, 'Nizar Hafizullah', '7346726347236', '52_7', '52_7_1', 'baru', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'labangka', '1995-10-15', 'mahasiswa', '085338283957', 50000, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
