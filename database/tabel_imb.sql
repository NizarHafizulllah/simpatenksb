-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2017 pada 20.42
-- Versi Server: 5.6.20
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
-- Struktur dari tabel `imb`
--

CREATE TABLE IF NOT EXISTS `imb` (
  `no_regis` varchar(20) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `nama_petugas_verifikasi` varchar(100) NOT NULL,
  `pimb` enum('ada','tidak ada') NOT NULL,
  `ktp` enum('ada','tidak ada') NOT NULL,
  `foto` enum('ada','tidak ada') NOT NULL,
  `sertifikat_tanah` enum('ada','tidak ada') NOT NULL,
  `pbb` enum('ada','tidak ada') NOT NULL,
  `bap` enum('ada','tidak ada') NOT NULL,
  `penelitian_tanah` enum('ada','tidak ada') NOT NULL,
  `setuju_sempada_tanah` enum('ada','tidak ada') NOT NULL,
  `rekom_dishub` enum('ada','tidak ada') NOT NULL,
  `tek_gamabar_rencana` enum('ada','tidak ada') NOT NULL,
  `tek_instalasi_air` enum('ada','tidak ada') NOT NULL,
  `tek_penelitian_tanah` enum('ada','tidak ada') NOT NULL,
  `tek_pengaman` enum('ada','tidak ada') NOT NULL,
  `sistem_drainase` enum('ada','tidak ada') NOT NULL,
  `status` int(1) NOT NULL,
  `kabupaten` char(13) NOT NULL,
  `kecamatan` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imb`
--

INSERT INTO `imb` (`no_regis`, `nama_pemohon`, `alamat`, `tgl_verifikasi`, `nama_petugas_verifikasi`, `pimb`, `ktp`, `foto`, `sertifikat_tanah`, `pbb`, `bap`, `penelitian_tanah`, `setuju_sempada_tanah`, `rekom_dishub`, `tek_gamabar_rencana`, `tek_instalasi_air`, `tek_penelitian_tanah`, `tek_pengaman`, `sistem_drainase`, `status`, `kabupaten`, `kecamatan`) VALUES
('fsasf', 'asfasf', 'asfasfasf', '2017-06-07', 'sfasfasf', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 0, '52_7', '52_7_1'),
('IMB/003/Jereweh/001', 'Indra Setiawan', 'Brang bara ', '2017-06-01', 'Nizar Hafizullah', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 0, '52_7', '52_7_1'),
('IMB/003/Jereweh/002', 'Indra Setiawan', 'Brang bara ', '2017-06-01', 'Nizar Hafizullah', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 0, '52_7', '52_7_1'),
('IMB/Jereweh/20177', 'Fitrah Arisandi', 'Jlan. Lempeh No II ', '0000-00-00', '', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 0, '', '52_7_1'),
('REGIS/IMB/001/JEREWE', 'Nizar Hafizullah', 'Jlan. Osap Sio III', '2017-06-06', 'Amrul Kadir', 'tidak ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'tidak ada', 'tidak ada', 'ada', 0, '52_7', '52_7_1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imb`
--
ALTER TABLE `imb`
 ADD PRIMARY KEY (`no_regis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
