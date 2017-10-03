-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Okt 2017 pada 09.11
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
-- Struktur dari tabel `profil_kecamatan`
--

CREATE TABLE IF NOT EXISTS `profil_kecamatan` (
`id` int(11) NOT NULL,
  `id_kecamatan` varchar(12) NOT NULL,
  `tahun_pembentukan` varchar(4) NOT NULL,
  `nama_camat` varchar(150) NOT NULL,
  `nip_camat` varchar(100) NOT NULL,
  `no_perda_pembentukan` varchar(10) NOT NULL,
  `alamat_kecamatan` text NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil_kecamatan`
--

INSERT INTO `profil_kecamatan` (`id`, `id_kecamatan`, `tahun_pembentukan`, `nama_camat`, `nip_camat`, `no_perda_pembentukan`, `alamat_kecamatan`, `tentang`) VALUES
(1, 'JEREWEH', '2014', 'Nizar Hafizullah', '7346726347236', '4', 'Jl. Olat Maras No 1, Telp. (0371)625921', '<table align="left" border="1" cellpadding="1" cellspacing="1" style="width:400px">\n	<tbody>\n		<tr>\n			<td><img alt="" src="http://disparekraf.sumbawabaratkab.go.id/images/wisata_thumb/TiuKalela.jpg" style="float:left; height:267px; width:400px" /></td>\n		</tr>\n	</tbody>\n</table>\n\n<h1>&nbsp;<strong>Kecamatan Jereweh&nbsp;</strong></h1>\n\n<p><strong>&nbsp;</strong>Kecamatan Jereweh memiliki pesona air terjun yang indah. kecamatan jereweh memiliki beberapa desa&nbsp;</p>\n\n<p>&nbsp;<strong>1. Desa Belo</strong></p>\n\n<p><strong>&nbsp;2. Desa Beru</strong></p>\n\n<p><strong>&nbsp;3. Desa Dasan Anyar</strong></p>\n\n<p><strong>&nbsp;4. Desa Goa</strong></p>\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil_kecamatan`
--
ALTER TABLE `profil_kecamatan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil_kecamatan`
--
ALTER TABLE `profil_kecamatan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
