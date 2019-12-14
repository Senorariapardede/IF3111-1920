-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 04:02 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplelapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `laporan` longtext NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `laporan`, `aspek`, `lampiran`, `waktu`) VALUES
(8, 'Banyak yang belum diketahui, jadi harus belajar lagi', 'Mahasiswa', 'Lampiran Foto Kegiatan.docx', '2019-12-14 21:44:59'),
(9, 'Banyak yang belum diketahui', 'Mahasiswa', 'Lampiran Foto Kegiatan.docx', '2019-12-14 21:21:37'),
(10, 'Banyak fasilitas yang masih belum dimanfaatkan dengan baik. Sangat disayangkan, benar-benar sangat disayangkan. Fasilitas yang ada sebaiknya digunakan dengan maksimal. Jagalah sesuatu yang telah diberi ke kita', 'Infrastruktur', '160166-appetite-template-16x9.pptx', '2019-12-14 21:47:00'),
(11, 'Kenapa banyak sekali mahasiwa mengerjakan tugas saat sudah deadline??\r\nKetika ditanya seperti itu rata-rata mereka menjawab \'sudah terbiasa untuk deadliner\'. padahal yang sebenarnya mereka tidak tau bagaimana memanajemen waktu dengan baik. belum mengetahui perbedaan hasil yang didapat ketika mengerjakan tugas dengan sedikit demi sedikit dan dengan mengerjakan tugas ketika sudah deadline.', 'Mahasiswa', 'Screenshot (8).png', '2019-12-14 22:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
