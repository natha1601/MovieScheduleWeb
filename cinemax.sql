-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 07:06 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemax`
--

-- --------------------------------------------------------

--
-- Table structure for table `studio1`
--

CREATE TABLE `studio1` (
  `id_studio1` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `poster` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio1`
--

INSERT INTO `studio1` (`id_studio1`, `hari`, `jam_mulai`, `jam_akhir`, `judul`, `keterangan`, `poster`, `link`) VALUES
(1, 'Senin', '00:28:00', '00:00:01', 'Coco', 'saasdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'film6', 'https://www.youtube.com/embed/Rvr68u6k5sI'),
(2, 'Senin', '12:00:00', '14:00:00', 'Justice Leuage', 'Dipicu oleh kepercayaannya terhadap kemanusiaan dan terinspirasi oleh tindakan tanpa pamrih Superman (Henry Cavill), Bruce Wayne (Ben Affleck) mengumpulkan sekutu baru Diana Prince untuk menghadapi ancaman yang lebih besar lagi. Bersama-sama, Batman dan Wonder Woman bekerja sama untuk merekrut tim untuk melawan musuh yang baru dibangun ini. Meskipun terbentuknya liga pahlawan yang belum pernah terjadi sebelumnya - Batman, Wonder Woman, Aquaman, Cyborg dan Flash - mungkin sudah terlambat untuk menyelamatkan planet ini dari serangan dengan proporsi bencana.', 'film1', 'https://www.youtube.com/embed/3cxixDgHUYw'),
(3, 'Selasa', '14:15:00', '15:45:00', 'Keluarga Tak Kasat Mata', 'sssasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'film2', 'https://www.youtube.com/embed/UBvRVgO_GDs');

-- --------------------------------------------------------

--
-- Table structure for table `studio2`
--

CREATE TABLE `studio2` (
  `id_studio2` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `poster` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio2`
--

INSERT INTO `studio2` (`id_studio2`, `hari`, `jam_mulai`, `jam_akhir`, `judul`, `keterangan`, `poster`, `link`) VALUES
(1, 'Sabtu', '22:00:00', '23:00:00', 'Jigsaw', 'Korban tewas berjatuhan di seantero kota, masing-masing dengan cara yang unik dan mengenaskan. Setelah penyelidikan berjalan, bukti menunjuk pada satu orang tersangka: John Kramer, seorang pria yang dikenal dengan julukan Jigsaw, yang sudah meninggal selama 10 tahun.', 'film5', 'https://www.youtube.com/embed/vPP6aIw1vgY');

-- --------------------------------------------------------

--
-- Table structure for table `studio3`
--

CREATE TABLE `studio3` (
  `id_studio3` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `poster` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio3`
--

INSERT INTO `studio3` (`id_studio3`, `hari`, `jam_mulai`, `jam_akhir`, `judul`, `keterangan`, `poster`, `link`) VALUES
(1, 'Sabtu', '22:00:00', '23:00:00', 'Murder on the Orient Express', 'Detektif Belgia ternama, Hercule Poirot (Kenneth Branagh) mencoba memecahkan misteri pembunuhan yang terjadi pada pengusaha Amerika Ratchett (Johnny Depp) dalam kereta mewah yang melintasi benua Eropa. 13 orang penumpang dalam kereta itu mungkin adalah sang pelaku pembunuhan. Sang detektif harus memecahkan misteri ini sebelum pembunuhan terjadi lagi.', 'film4', 'https://www.youtube.com/embed/Mq4m3yAoW8E');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `nama`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studio1`
--
ALTER TABLE `studio1`
  ADD PRIMARY KEY (`id_studio1`);

--
-- Indexes for table `studio2`
--
ALTER TABLE `studio2`
  ADD PRIMARY KEY (`id_studio2`);

--
-- Indexes for table `studio3`
--
ALTER TABLE `studio3`
  ADD PRIMARY KEY (`id_studio3`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studio1`
--
ALTER TABLE `studio1`
  MODIFY `id_studio1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studio2`
--
ALTER TABLE `studio2`
  MODIFY `id_studio2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studio3`
--
ALTER TABLE `studio3`
  MODIFY `id_studio3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
