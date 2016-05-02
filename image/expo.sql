-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 03:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `puzzle`
--

CREATE TABLE IF NOT EXISTS `puzzle` (
`id_puzzle` int(10) NOT NULL,
  `nama_gbr` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle`
--

INSERT INTO `puzzle` (`id_puzzle`, `nama_gbr`, `pertanyaan`, `jawaban`) VALUES
(1, 'Malin Kundang', 'Siapa nama tokoh cerita legenda tersebut?', 'Malin Kundang'),
(2, 'Upin Ipin', ' Siapa tokoh kartun di atas?', 'Upin Ipin'),
(3, 'Sasando', ' Apa nama alat musik tradisional diatas?', 'Sasando'),
(4, 'Lapangan Tenis', ' Untuk olahraga apa area tersebut digunakan?', 'Tenis'),
(5, 'Siskamling', 'SISKAMLING adalah singkatan dari?', 'Sistem Keamanan Lingkungan'),
(6, 'Kambing', 'Makanan hewan ini adalah ?', 'Tumbuhan'),
(7, 'Pakaian Melayu', 'Apa nama pakaian adat berikut ini?', 'Pakaian Melayu '),
(8, 'Danau Toba', 'Apakah nama danau tersebut?', 'Danau Toba'),
(9, 'Megawati', 'Siapakan nama mantan presiden Indonesia tersebut?', 'Megawati Soerkarno Putri'),
(10, 'Airport', 'Apa bahasa inggris bandara? ', 'Airport'),
(11, 'Bandung', 'Apa ibukota provinsi Jawa barat? ', 'Bandung'),
(12, 'SSK2', 'Apa nama bandara di pekanbaru?', 'Sultan Syarif Kasim 2'),
(13, 'Pantai', 'Batas antara daratan dan lautan adalah?', 'Pantai'),
(14, 'SoemanHS', 'Apakah nama perpustakaan terbesar di pekanbaru?', 'Soeman HS'),
(15, 'Rumah Gadang', 'Apakah nama rumah adat yang berasal dari sumatera barat ini?', ' Rumah Gadang'),
(16, 'Nelayan', 'Mereka adalah orang - orang yang bekerja untuk menangkap ikan, siapakah mereka?', 'Nelayan'),
(17, 'Congklak', 'Apakah nama mainan ini?', 'Congklak'),
(18, 'Borobudur', 'Apakah nama salah satu keajaiban dunia tersebut?', 'Candi Borobudur'),
(19, 'Ki Hajar Dewantara', 'Siapakah nama bapak pendidikan Indonesia?', 'Ki Hajar Dewantara'),
(20, 'Doraemon', 'Siapakah nama kartun berbentuk kucing tersebut?', 'Doraemon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `puzzle`
--
ALTER TABLE `puzzle`
 ADD PRIMARY KEY (`id_puzzle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `puzzle`
--
ALTER TABLE `puzzle`
MODIFY `id_puzzle` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
