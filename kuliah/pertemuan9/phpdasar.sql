-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 04:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Salsabila FNP', '203040104', 'salsabilafnp@mail.com', 'Teknik Informatika', 'salsabila.jpg'),
(2, 'Fadila C', '182010025', 'fadilachoi@mail.com', 'Pendidikan Bahasa Sunda', 'fadila.jpg'),
(3, 'Neng Santi M', '181030013', 'nengsantim@mail.com', 'Keperawatan', 'santi.jpg'),
(4, 'Annisa RT', '184040115', 'regitatriar@mail.com', 'Ekonomi Pembangunan', 'annisa.jpg'),
(5, 'Priscila RC Br P', '191010030', 'priscilarotua@mail.com', 'Hukum', 'priscila.jpg'),
(6, 'Putri Eripta L', '193060100', 'putriel@mail.com', 'Teknik Perencanaan Wilayah dan Kota', 'put.jpg'),
(7, 'Tasya AH', '195030089', 'tasyaap@mail.com', 'Statistika', 'tasya.jpeg'),
(8, 'Isna HT', '192030001', 'isnaht@mail.com', 'Teknik Kimia', 'isna.jpg'),
(9, 'Ahmad Bayu', '142050129', 'ahmadbayu@mail.com', 'Pendidikan Kimia', 'abay.jpg'),
(10, 'Fauzy VP', '14201078', 'fauzyvp@mail.com', 'Pendidikan Bahasa Indonesia', 'fauzy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
