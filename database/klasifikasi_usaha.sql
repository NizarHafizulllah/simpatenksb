-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2017 pada 03.43
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
-- Struktur dari tabel `klasifikasi_usaha`
--

CREATE TABLE IF NOT EXISTS `klasifikasi_usaha` (
`id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `id_kecamatan` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `klasifikasi_usaha`
--

INSERT INTO `klasifikasi_usaha` (`id`, `kode`, `klasifikasi`, `id_kecamatan`) VALUES
(2, '3647', 'Perdagangan', '52_7_1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasifikasi_usaha`
--
ALTER TABLE `klasifikasi_usaha`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasifikasi_usaha`
--
ALTER TABLE `klasifikasi_usaha`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
