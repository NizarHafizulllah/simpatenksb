-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 05:19 PM
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
-- Table structure for table `siu`
--

CREATE TABLE IF NOT EXISTS `siu` (
  `id` char(32) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `ukuran_luas_usaha` varchar(50) NOT NULL,
  `lokasi_usaha` text NOT NULL,
  `status_bangunan_tempat_usaha` varchar(100) NOT NULL,
  `npwpd` varchar(100) NOT NULL,
  `negara_pemohon` varchar(30) NOT NULL,
  `nik_pemohon` varchar(30) NOT NULL,
  `klasifikasi_usaha` varchar(50) NOT NULL,
  `tgl_register` date NOT NULL,
  `no_register` varchar(20) NOT NULL,
  `jenis_permohonan` enum('baru','lama') NOT NULL,
  `ktp` enum('ada','tidak ada') NOT NULL,
  `fc_hak_tanah` enum('ada','tidak ada') NOT NULL,
  `sp_desa` enum('ada','tidak ada') NOT NULL,
  `sp_materai` enum('ada','tidak ada') NOT NULL,
  `denah_lokasi` enum('ada','tidak ada') NOT NULL,
  `foto` enum('ada','tidak ada') NOT NULL,
  `fc_pbb` enum('ada','tidak ada') NOT NULL,
  `rekom_uptd` enum('ada','tidak ada') NOT NULL,
  `gambar_bangunan` enum('ada','tidak ada') NOT NULL,
  `instalasi_air` enum('ada','tidak ada') NOT NULL,
  `rekom_desa` enum('ada','tidak ada') NOT NULL,
  `siup_asli` enum('ada','tidak ada') NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `kecamatan` char(13) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `nama_camat` varchar(100) NOT NULL,
  `nip_camat` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `retribusi_perthn_f` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siu`
--

INSERT INTO `siu` (`id`, `nama_pemohon`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `alamat`, `no_telp`, `nama_usaha`, `jenis_usaha`, `ukuran_luas_usaha`, `lokasi_usaha`, `status_bangunan_tempat_usaha`, `npwpd`, `negara_pemohon`, `nik_pemohon`, `klasifikasi_usaha`, `tgl_register`, `no_register`, `jenis_permohonan`, `ktp`, `fc_hak_tanah`, `sp_desa`, `sp_materai`, `denah_lokasi`, `foto`, `fc_pbb`, `rekom_uptd`, `gambar_bangunan`, `instalasi_air`, `rekom_desa`, `siup_asli`, `tgl_verifikasi`, `nama_petugas_verifikasi`, `kecamatan`, `kabupaten`, `nama_camat`, `nip_camat`, `status`, `retribusi_perthn_f`) VALUES
('0f2326e9feff4f6581548193e34796ca', 'rodia', 'labangka', '1995-10-15', 'mahasiswa', 'jln jikh', '085338283957', 'salon indah', 'jasa', '300 m', 'jln uma beringin', 'baru', 'jkshfaa', 'indonesia', '775253628176837', 'yunkid', '2017-09-06', '82972646', 'baru', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '2017-09-07', 'nizar', '52_7_1', '52_7', 'Nizar Hafizullah', '7346726347236', 2, 3000000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
