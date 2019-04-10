-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 10:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `nama_gambar`, `ukuran`, `tipe`) VALUES
(5, 'robin', 'citayam', 'laki-laki', 'Islam', 'm', '28151162_2206094286284556_8400451346548916224_n.jpg', 48117, 'image/jpeg'),
(6, 'adam', 'kkkk', 'laki-laki', 'Islam', 'x', '24127116_205998139987669_7990685134066024448_n.jpg', 63247, 'image/jpeg'),
(7, 'sjkx', 'jkhj', 'perempuan', 'Islam', 'jk', '18512553_1459042080824810_3216722967589289984_n.jpg', 109557, 'image/jpeg'),
(8, 'jnj', 'bj', 'laki-laki', 'Islam', 'jkn', '974ef4dff738c22dd9c5df192e96bf899e2fa7ae_hq.jpg', 51670, 'image/jpeg'),
(9, 'ff', 'f', 'laki-laki', 'Islam', 'f', 'Dn29zY9UwAEwlHM (1).jpg', 97827, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
