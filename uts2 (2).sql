-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2024 at 02:10 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts2`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `umur` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `asal` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `sd` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `smp` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `smp2` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `smk` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `kuliah` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `hobbi` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `hobbi2` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `umur`, `asal`, `email`, `sd`, `smp`, `smp2`, `smk`, `kuliah`, `hobbi`, `hobbi2`) VALUES
(2, 'M. Dhafa Raihansyah', '19 Tahun', 'Rancaekek, Bandung', 'dhafaaaraihan@gmail.com', 'SDN RANCANILEM, Rancaekek', 'SMPN 2 Teluk Jambe Barat, Karawang Barat', 'SMP Pasundan Rancaekek, Rancaekek', 'SMK Bakti Nusantara 666, Cileunyi', 'Masoem University, Cipacing', 'bermain game', 'bermain sepak bola');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `komentar`, `tanggal`) VALUES
(2, 'dhafaskaty@gmail.com', 'saran aja', '2024-03-18'),
(4, 'dhafaaaraihan@gmail.com', 'untuk fitur kontak saya agar lebih bagus lagi UI nya', '2024-03-18'),
(5, 'tukangloating@gmail.com', 'untuk fitur kontak saya coba tampilkan whatsapp atau email agar lebih mudah untuk komunikasi ', '2024-03-19'),
(27, 'dhafa@gmail.com', 'cara bikin nasi goreng', '2024-03-19'),
(28, 'tukangloating@gmail.com', 'testtt boss', '2024-03-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
