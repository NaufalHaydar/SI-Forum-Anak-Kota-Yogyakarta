-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 02:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfakta`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama_berita`, `deskripsi`, `gambar`, `tgl_terbit`) VALUES
(0, 'pelecehan anak dibawah umur', 'pelecehan anak dibawah umur terjadi di wilayah Z dengan korban umur 10th (AR) dan pelaku yang merupakan tetangganya dengan umur 25th (DB)', '', '2021-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `dataanggota`
--

CREATE TABLE `dataanggota` (
  `id` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataanggota`
--

INSERT INTO `dataanggota` (`id`, `nama_lengkap`, `posisi`, `tgl_lahir`, `jkel`) VALUES
('Fakta04', 'Agista S', 'Ketua FAKTA', '1998-11-09', 'P'),
('Fakta05', 'Anggita A', 'Duta FAKTA', '1999-12-25', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `dataforumanak`
--

CREATE TABLE `dataforumanak` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tingkatan` varchar(15) NOT NULL,
  `jumlah_anggota` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataforumanak`
--

INSERT INTO `dataforumanak` (`id`, `nama`, `tingkatan`, `jumlah_anggota`, `deskripsi`) VALUES
('FK01', 'Forum Anak Kecamatan Mergangsan', 'Kecamatan', '35', 'Forum ini berada di wilayah kecamatan Mergangsan, Yogyakarta.'),
('FK02', 'Forum Anak Umbulharjo', 'Kecamatan', '45', 'Forum ini berada di wilayah kecamatan Umbulharjo, Yogyakarta.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `level` varchar(10) DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'user', 'kangit77@gmail.com', 'user', 'user'),
(3, 'M Naufal Haydar N', 'muhammad1800018084@webmail.uad.ac.id', 'mnaufalhn', 'user'),
(88, 'admin1', 'admin1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataanggota`
--
ALTER TABLE `dataanggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataforumanak`
--
ALTER TABLE `dataforumanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
