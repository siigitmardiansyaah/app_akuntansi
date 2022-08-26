-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 11:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuntansi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `no_akun` varchar(100) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `debit` float NOT NULL,
  `kredit` float NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `dibuat_oleh` varchar(100) NOT NULL,
  `tanggal_buat` timestamp NULL DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `no_akun`, `nama_akun`, `debit`, `kredit`, `bulan`, `tahun`, `dibuat_oleh`, `tanggal_buat`, `diedit_oleh`, `tanggal_edit`) VALUES
(1, '1000.01', 'Kas Kecil', 1080920, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(2, '1000.02', 'Kas', 0, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(3, '1000.04', 'Kas BSI', 1121870000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', 'Sigit', '2022-08-26 07:38:59'),
(4, '1000.05', 'Kas BSI 2', 7003950, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(5, '1100', 'Piutang Usaha', 38820600, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(6, ' 1100.01', 'Piutang Barang', 123504000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(7, '1100.05', 'Piutang Pinjaman 0%', 24550000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(8, '1100.07', 'Investasi Penggemukan Sapi', 225000000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(9, '1200', 'Persediaan Barang', 6751320, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(10, '1700.05', 'Inventaris', 901700000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(11, '1710.02.01', 'Akumulasi penyusutan Inventaris', 0, 802471000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(12, '2000.01', 'Simpanan sukarela', 0, 204087000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(13, '2000.05', 'Hutang Pajak Final', 0, 11123600, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(14, '2000.06', 'Hutang Dana Sosial', 0, 11676900, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(15, '2000.07', ' Hutang Dana Kesejahteraan', 0, 2363320, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(16, '2000.08', ' Hutang Pajak Daerah', 0, 3054300, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(17, '2000.09', 'Hutang Dana Pendidikan', 0, 9889540, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(18, '2000.11', 'Hutang bagi hasil simpanan sukarela', 0, 10162000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(19, '2000.13', ' Hutang Dana Pengawas dan Pengurus', 0, 8625, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(20, '2000.14', 'Hutang Dana Pembangunan ', 0, 17339100, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(21, '2000.17', 'Bonus Juara Ke 3', 0, 217100, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(22, '3000.01', 'Simpanan Pokok', 0, 8200000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(23, '3000.02', 'Simpanan Wajib', 0, 655725000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(24, '3000.03', 'Modal Hibah', 0, 104250000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(25, '3000.04', 'Cadangan Modal', 0, 308422000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(26, '3000.06', 'SHU Tahun Berjalan', 0, 264435000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(27, '4000.01', 'Pendapatan Jasa Parkir', 0, 78075500, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(28, '4000.02', 'Pendapatan UPKC', 0, 9376000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(29, '4000.03', 'Pendapatan Islamic Mart', 0, 1721600, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(30, '4000.04', 'Pendapatan Kantin', 0, 4273500, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(31, '4000.05', 'Pendapatan Penj. Barang Secara Kredit', 0, 1448650, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(32, '4000.06', 'Pendapatan Usaha Lain-lain', 0, 12430000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(33, '4000.08', 'Pendapatan Kedai Kopsyar', 0, 974374, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(34, '4000.09', 'Pend. Parkir Di Terima Di Muka', 0, 1550000, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(36, '6201.01', 'Biaya Gaji', 37459000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(37, '6201.02.01 ', 'Insentive Security', 800000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(38, '6201.02.02', 'Insentive Pengurus', 2800000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(39, '6201.04', 'Biaya Asuransi Karyawan', 232107, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(40, '6203.01', 'Biaya Konvensasi Listrik dan Air', 3500000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(41, '6203.02.01', 'Biaya Kerjasama YNI', 10000000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(42, '6203.03.02', 'Biaya Perlengkapan Parkir', 250000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(43, '6203.03.05', 'Biaya Perlengkapan Kantin', 45000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', 'Sigit', '2022-08-26 03:00:02'),
(44, '6203.04', 'Biaya Lain-lain', 707500, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(45, '6203.05', 'Biaya Konsumsi', 1078240, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(46, '6203.08.01', 'Biaya Perawatan Parkir', 1228500, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', 'Sigit', '2022-08-26 03:19:02'),
(47, '6203.08.04', 'Biaya Sewa Server', 500000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(48, '6203.12.01', 'Biaya ATK', 1447500, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(49, '7100.99', 'Pendapatan lain-lain', 0, 2724.85, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(50, '7200.02', 'Biaya ADM Bank & Buku Cek/Giro', 63000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(51, '7200.04', 'Biaya Survey', 150000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(52, '1710.06', 'Akumulasi Penyusutan  Tolkid Pintu Belakang', 0, 578563, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(53, '5000.01', 'Biaya Pemakaian Persediaan Barang Parkir', 355000, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', 'Sigit', '2022-08-26 01:15:05'),
(54, '5000.02', 'Biaya Pemakain Persediaan barang UPKC', 2238800, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(55, '6203.05.01', 'Biaya Penyusutan Inventaris ', 5824830, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(56, '6203.05.01.1', 'Biaya Penyusutan Tolkid Pintu Belakang', 578563, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(57, '6203.05.02', 'Biaya Penyusutan Inventaris IC Mart', 347225, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(58, '6203.06', 'Biaya Bagi hasil simpanan sukarela .', 724324, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(59, '6303.07.01', 'Biaya Pajak Final', 541498, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(60, '6203.07.02', 'Biaya Pajak Daerah', 3054300, 0, 'Januari', '2022', 'Sigit', '2022-08-25 02:23:45', '', '0000-00-00 00:00:00'),
(62, 'PUL1', 'Pedagang Binaan', 10000000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:51:58', NULL, NULL),
(63, 'PUL2', 'Forklip', 1500000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:52:38', NULL, NULL),
(64, 'PUL3', 'Administrasi UKB', 150000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:53:25', NULL, NULL),
(65, 'PUL4', 'Retribusi Pedagang Harian', 780000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:53:54', NULL, NULL),
(66, '6201.02.02', 'Insentive Pengurus', 2800000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:58:36', 'Sigit', '2022-08-26 01:20:22'),
(67, '6201.02.01 ', 'Insentive Security', 800000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 00:59:11', 'Sigit', '2022-08-26 01:19:58'),
(68, 'PUL5', 'Bagi Hasil Investasi Penggemukan Sapi', 21500000, 0, 'Mei', '2022', 'Sigit', '2022-08-26 01:12:03', 'Sigit', '2022-08-26 02:04:26'),
(69, '6204.09.01', 'Biaya Lembur Lebaran', 1200000, 0, 'Mei', '2022', 'Sigit', '2022-08-26 01:12:44', 'Sigit', '2022-08-26 03:35:47'),
(70, '6203.03.01', 'Biaya Perlengkapan Kantor', 97500, 0, 'Januari', '2022', 'Sigit', '2022-08-26 01:13:53', 'Sigit', '2022-08-26 01:15:53'),
(72, '6203.03.06', 'Biaya Perlengkapan IC Mart', 137000, 0, 'Januari', '2022', 'Sigit', '2022-08-26 01:18:50', 'Sigit', '2022-08-26 03:10:07'),
(73, 'PUL6', 'Laba Investasi Domba', 8150000, 0, 'Juli', '2022', 'Sigit', '2022-08-26 02:33:33', NULL, NULL),
(74, 'PUL7', 'Laba Investasi Sapi', 9000000, 0, 'Juli', '2022', 'Sigit', '2022-08-26 02:34:21', NULL, NULL),
(75, 'PUL8', 'Administrasi Keanggotaan', 50000, 0, 'Juli', '2022', 'Sigit', '2022-08-26 02:35:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `foto`, `role`) VALUES
(1, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'Sigit', '1661218406800.png', 'Admin'),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 'Sigit', '', 'User'),
(4, 'admin1', '098f6bcd4621d373cade4e832627b4f6', 'admin1', '1661216676754.png', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
