-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 02:19 PM
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
-- Table structure for table `p3a`
--

CREATE TABLE IF NOT EXISTS `p3a` (
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
  `rekom_dinas` enum('ada','tidak ada') NOT NULL,
  `program_kerja` enum('ada','tidak ada') NOT NULL,
  `daftar_anggota` enum('ada','tidak ada') NOT NULL,
  `daftar_pengurus` enum('ada','tidak ada') NOT NULL,
  `kecamatan` char(13) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `no_rekom` varchar(30) NOT NULL,
  `nama_camat` varchar(100) NOT NULL,
  `nip_camat` varchar(50) NOT NULL,
  `tgl_rekom` date NOT NULL,
  `siup_asli` enum('ada','tidak ada') NOT NULL,
  `tgl_register` date NOT NULL,
  `no_register` varchar(20) NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p3a`
--

INSERT INTO `p3a` (`id`, `nama_pemohon`, `alamat`, `kewarganegaraan`, `no_ktp`, `npwpd`, `alamat_usaha`, `merek_usaha`, `klasif_perusahaan`, `jenis_usaha`, `retribusi_perthn_f`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `no_tlp`, `matrai`, `jenis_permohonan`, `adrt`, `fc_notaris`, `rekom_lurah`, `rekom_dinas`, `program_kerja`, `daftar_anggota`, `daftar_pengurus`, `kecamatan`, `kabupaten`, `no_rekom`, `nama_camat`, `nip_camat`, `tgl_rekom`, `siup_asli`, `tgl_register`, `no_register`, `nama_petugas_verifikasi`, `tgl_verifikasi`, `status`) VALUES
('240f465aa059652e25d4e1648120dce9', 'Jaelani', 'Jln. Osap Sio', 'Indonesia', '73847387487874', '838473874837', 'Jln. Mangga', 'Jangan Ganggu', 'Ilegal', 'Jasa Pukul Orang', 50000, 'Sumbawa', '1995-06-06', 'Mahasiswa', '082927238438', 'ada', 'baru', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '52_7_5', '52_7', '', 'Amitollah', '93898394893', '0000-00-00', 'tidak ada', '2017-09-06', '32423423', 'Nizar Hafizullah', '2017-08-30', 2),
('b3ca6641b8fdc94d1a1c13d46b4b403c', 'ika sriwahyuni', 'jln semangka', 'indonesia', '0746257483', 'jskhjghstydsy', 'Jl Tamrin', 'Servis HP', 'baru', 'jasa', 100000, 'labangka', '1995-10-15', 'mahasiswi', '08338283957', 'ada', 'baru', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '52_7_1', '52_7', '', 'H. saguni', '0987419', '0000-00-00', 'ada', '2017-09-06', '01idn', 'nizar', '2017-09-05', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
