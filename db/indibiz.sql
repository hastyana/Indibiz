-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 03, 2024 at 11:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribut`
--

CREATE TABLE `attribut` (
  `id_item` int(10) NOT NULL,
  `nama_item` varchar(500) NOT NULL,
  `harga_item` int(20) NOT NULL,
  `kecepatan_item` int(10) NOT NULL,
  `peruntukan_item` varchar(1000) NOT NULL,
  `spesial` varchar(500) NOT NULL,
  `gambar_item` varchar(1000) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `item_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attribut`
--

INSERT INTO `attribut` (`id_item`, `nama_item`, `harga_item`, `kecepatan_item`, `peruntukan_item`, `spesial`, `gambar_item`, `kategori`, `keterangan`, `item_status`) VALUES
(46, 'Paket Bisnis 1', 664000, 50, 'Bisnis', 'Ya', '2b129bfdcc2942a3bd3d9aab98a988b4.HSI B2B.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 5 perangkat', '1'),
(47, 'Paket Bisnis 2', 479000, 50, 'Bisnis', 'Ya', '51de466e9ba4ae300333ebc7207483b5.HSI B2B.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 5 perangkat', '1'),
(48, 'Paket Bisnis 3', 639000, 50, 'Bisnis', 'Ya', '954ba072d2c8196601d38313a80b02dd.HSI B2B.png', 'Paket 2P (Internet+Televisi)', 'Cocok digunakan untuk maks 5 perangkat', '1'),
(49, 'Paket Perusahaan 1', 904000, 100, 'Perusahaan', 'Ya', 'cedb7a12f4cccf6f08d0271508a07313.HSI B2B.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(50, 'Paket Pemerintahan 1', 914000, 100, 'Pemerintahan', 'Ya', '7a24903cfb5e807efa727d24dff8a987.HSI B2B.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(51, 'Paket Bisnis 4', 439000, 50, 'Bisnis', 'Ya', '23a65e344332b4a0c9f1482a5ea8cfdb.HSI B2B.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 5 perangkat', '1'),
(52, 'Paket Bisnis 5', 894000, 100, 'Bisnis', 'Ya', '43c0801b8b20c0d61012c9029031c5bc.HSI B2B.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(53, 'Paket Bisnis 6', 709000, 100, 'Bisnis', 'Ya', '5bb493f7b981bf0b5ca2beb10d22c951.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(54, 'Paket Bisnis 7', 869000, 100, 'Bisnis', 'Ya', '6dfb945087e61ce6217e2aeb5982ecab.logo.png', 'Paket 2P (Internet+Televisi)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(55, 'Paket Bisnis 8', 669000, 100, 'Bisnis', 'Ya', '6fb3b51259942300f4744e0d015289fc.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(56, 'Paket Bisnis 9', 1274000, 200, 'Bisnis', 'Ya', '3aca2e4325858e3d13c713f57e739665.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(57, 'Paket Bisnis 10', 1089000, 200, 'Bisnis', 'Ya', 'ba6695ff4e72f941a4182b6e1f4903db.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(58, 'Paket Bisnis 11', 1249000, 200, 'Bisnis', 'Ya', '84482ebc75d4133480888cebec6b3995.logo.png', 'Paket 2P (Internet+Televisi)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(59, 'Paket Bisnis 12', 1049000, 200, 'Bisnis', 'Ya', '8d2e0f55f648c48d3e5cbab48578cb17.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(60, 'Paket Bisnis 13', 1724000, 300, 'Bisnis', 'Ya', '523b41fc506c7708232de3337b326ea6.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 30 perangkat', '1'),
(61, 'Paket Bisnis 14', 1499000, 300, 'Bisnis', 'Ya', '9d761e506cd3f086551c308aba02de57.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 30 perangkat', '1'),
(62, 'Paket Perusahaan 2', 719000, 100, 'Perusahaan', 'Ya', 'db550f166626549c4207fd5a4a73d10c.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(63, 'Paket Perusahaan 3', 679000, 100, 'Perusahaan', 'Ya', '2bcfebe72f5b9af6660281ddb50cd16c.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(64, 'Paket Perusahaan 4', 1284000, 200, 'Perusahaan', 'Ya', '406e550c319c098463e444c4ca0dc376.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(65, 'Paket Perusahaan 5', 1099000, 200, 'Perusahaan', 'Ya', 'd7c1c2e27c1a649d190d56dbdcc53c25.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(66, 'Paket Perusahaan 6', 1059000, 200, 'Perusahaan', '', '6590b3bbe7789b68cc946d073e56d489.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(67, 'Paket Perusahaan 7', 1734000, 300, 'Perusahaan', 'Ya', 'a8bb57cf00f33045412881edd051cce3.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 30 perangkat', '1'),
(68, 'Paket Perusahaan 8', 1509000, 300, 'Perusahaan', 'Ya', 'a416cbdbe353f1b99a23c71fd23e781a.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 30 perangkat', '1'),
(69, 'Paket Pemerintahan 2', 729000, 100, 'Pemerintahan', 'Ya', '37e4c80e48636de752569c29672aea3a.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(70, 'Paket Pemerintahan 3', 689000, 100, 'Pemerintahan', 'Ya', '87a5d071c059f17b03083b34e04d5e03.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 10 perangkat', '1'),
(71, 'Paket Pemerintahan 4', 1294000, 200, 'Pemerintahan', 'Ya', 'ffbef0aec728f889436d0f3bd750d878.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(72, 'Paket Pemerintahan 5', 1209000, 200, 'Pemerintahan', 'Ya', '397935f6f98dc1c67072fb7512105ee8.logo.png', 'Paket 2P (Internet+Phone)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(73, 'Paket Pemerintahan 6', 1069000, 200, 'Pemerintahan', 'Ya', '3618da8e68018b8058f1828f41dd9a5e.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 20 perangkat', '1'),
(74, 'Paket Pemerintahan 7', 1744000, 300, 'Pemerintahan', 'Ya', '59aa39aceae53578eb3f3681d79506cf.logo.png', 'Paket 3P (Internet+TV+Phone)', 'Cocok digunakan untuk maks 30 perangkat', '1'),
(75, 'Paket Pemerintahan 8', 1519000, 300, 'Pemerintahan', 'Ya', '027920ad74a21118be87aa2d938fc131.logo.png', 'Paket 1P (Internet)', 'Cocok digunakan untuk maks 30 perangkat', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Paket 1P (Internet)'),
(7, 'Paket 2P (Internet+Televisi)'),
(8, 'Paket 2P (Internet+Phone)'),
(9, 'Paket 3P (Internet+TV+Phone)');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(10) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggal_berlangganan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_konfirmasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `nama`, `email`, `telp`, `pesan`, `keterangan`, `tanggal_berlangganan`, `tanggal_konfirmasi`) VALUES
(5, 4, 'Satrio', 'satrio@email.com', '6285867681476', 'Paket Bisnis 8', 'Berlangganan', '2024-06-03 11:34:14', '2024-06-03'),
(6, 3, 'Hastyana', 'hastyana@email.com', '6285172447731', 'Paket Pemerintahan 1', 'Tidak Berlangganan', '2024-06-03 11:41:56', '2024-06-03'),
(7, 5, 'Naufal', 'naufal@email.com', '628230305872', 'Paket Bisnis 3', 'Berlangganan', '2024-06-03 11:44:47', '2024-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nama_user` varchar(1000) NOT NULL,
  `telp_user` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_user`, `telp_user`, `level`, `tanggal`) VALUES
(1, 'admin1', 'Admin1', 'admin1@gmail.com', 'Admin', '0830303058', 'admin', '2024-06-03 11:24:58'),
(2, 'admin2', 'Admin2', 'admin1@gmail.com', 'Admin', '0830303058', 'admin', '2024-06-03 11:25:13'),
(3, 'hastyana', 'Has123', 'hastyana@email.com', 'Hastyana', '6285172447731', 'user', '2024-06-03 11:31:29'),
(4, 'satrio', 'Sat123', 'satrio@email.com', 'Satrio', '6285867681476', 'user', '2024-06-03 11:31:43'),
(5, 'naufal', 'Naufal123', 'naufal@email.com', 'Naufal', '628230305872', 'user', '2024-06-03 11:32:07'),
(6, 'dicky', 'Dicky123', 'dicky@email.com', 'Dicky', '628230305872', 'user', '2024-06-03 11:32:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribut`
--
ALTER TABLE `attribut`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribut`
--
ALTER TABLE `attribut`
  MODIFY `id_item` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
