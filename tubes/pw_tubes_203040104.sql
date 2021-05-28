-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 10:05 AM
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
-- Database: `pw_tubes_203040104`
--

-- --------------------------------------------------------

--
-- Table structure for table `cheval`
--

CREATE TABLE `cheval` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheval`
--

INSERT INTO `cheval` (`id`, `picture`, `name`, `color`, `stok`, `price`, `category`) VALUES
(1, 'det-black.jpg', 'airy casual', 'black, white, grey', 25, 'Rp 429k', 'Casual'),
(2, 'det-canvas-cream.jpg', 'creamy star', 'cream', 0, 'Rp 149k', 'Canvas'),
(3, 'det-canvas-white.jpg', 'lovely canvas', 'white', 33, 'Rp 99k', 'Canvas'),
(4, 'det-grey.jpg', 'airy sport', 'black, grey', 4, 'Rp 649k', 'Sport'),
(5, 'det-greyorange.jpg', 'trilay pastel', 'grey, purple', 12, 'Rp 379k', 'Casual'),
(6, 'det-orange.jpg', 'run airy', 'white-orange, black-red', 7, 'Rp 279k', 'Runshoes'),
(7, 'det-pink.jpg', 'yeazy air', 'yellow, pink, grey', 39, 'Rp 449k', 'Casual'),
(8, 'det-white.jpg', 'air simply', 'red, cream, white, black, grey', 55, 'Rp 249k', 'Casual'),
(9, 'det-white-pink.jpg', 'maxy run', 'white, pink', 8, 'Rp 329k', 'Runshoes'),
(10, 'det-white-rainbow.jpg', 'rainbow maxy', 'only on picture', 20, 'Rp 379k', 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admintubes', '$2y$10$VsEVT0S7d5lAm6uStE83FuJPZw1nfmMW6ZfrOtZ.5.QYRnSG/PifC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cheval`
--
ALTER TABLE `cheval`
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
-- AUTO_INCREMENT for table `cheval`
--
ALTER TABLE `cheval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
