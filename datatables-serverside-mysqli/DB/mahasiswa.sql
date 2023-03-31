-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 10:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`nim` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `notelp`) VALUES
(2, 'Hakko Bio Richard', 'Cikarang', '1990-09-27', 'Perum BKI', '085694984803'),
(3, 'Andi Mardianto', 'Bekasi', '1990-02-15', 'Pilar - Cikarang', '08569897845'),
(4, 'Eko Harahap', 'Pilar Barat', '1995-12-12', 'Wangkal Asem', '085656451232'),
(5, 'Antonio Bonaparte', 'Cirebon', '1989-01-23', 'Walahir', '085694876532'),
(6, 'Deriz Ramadhan', 'Bekasi', '0000-00-00', 'Sempu - Jababeka', '8945675213'),
(7, 'Ujang Sarujang', 'Bekasi', '1988-12-30', 'Sukatani', '085698756432'),
(8, 'Patrio', 'Lemahabang', '1997-12-04', 'Cikarang', '08569865321478'),
(9, 'Syahril Ammar', 'Bekasi', '1989-01-23', 'Sukatani', '2859874521'),
(10, 'Syahrul', 'Cirebon', '1990-02-15', 'Bekasi', '085694876532'),
(11, 'Doni', 'Bekasi', '1995-12-12', 'Tambun', '085698756432'),
(12, 'Rombe', 'Cikarang', '1985-04-25', 'Perum PCH', '087854653212'),
(13, 'Dimas', 'Brebes', '1984-02-12', 'Perum BKI', '086598475213'),
(14, 'Paijo', 'Purwokerto', '1988-12-04', 'Perumahan Rakyat', '08569487521'),
(15, 'Paimin', 'Solo', '1985-06-20', 'Cikarang', '085698756432'),
(16, 'Sebas', 'Tambelang', '1989-01-23', 'Tambelang Indah', '089865321456'),
(17, 'Siffa', 'Bekasi', '1990-02-15', 'Cikarang', '02356487951'),
(18, 'Hendra', 'Bekasi', '1985-06-20', 'Perumahan Bersih', '085694878523'),
(19, 'Bani', 'Cikarang', '1984-02-12', 'Sukatani', '085694878523'),
(20, 'Boy', 'Cikarang', '1985-06-20', 'Buni Asih', '0854995293564'),
(21, 'Andri', 'Brebes', '1987-12-12', 'Cikarang Barat', '08569878545213'),
(22, 'Yusuf', 'Bekasi', '1983-02-01', 'Kaum Utara', '0859485126321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `nim` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
