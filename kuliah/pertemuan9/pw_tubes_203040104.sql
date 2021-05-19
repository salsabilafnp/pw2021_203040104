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
-- Database: `pw_tubes_203040104`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id_barang` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id_barang`, `picture`, `name`, `description`, `price`, `category`) VALUES
(1, 'black.jpg', 'airy casual', 'Sneakers for hangout and casual-look. The available colors are black, white, and grey.', 'Rp 429k', 'Casual'),
(2, 'canvas-cream.jpg', 'creamy star', 'High-canvas shoes. The available colors is only cream.', 'Rp 149k', 'Canvas'),
(3, 'canvas-white.jpg', 'lovely canvas', 'Low-canvas shoes. The available colors is only white.', 'Rp 99k', 'Canvas'),
(4, 'grey.jpg', 'airy sport', 'Sneakers for sport and hangout. The available colors are black and grey.', 'Rp 649k', 'Sport'),
(5, 'greyorange.jpg', 'trilay pastel', 'High-sneakers for hangout and casual-look. The available colors is only grey-purple (same as on picture).', 'Rp 379k', 'Casual'),
(6, 'orange.jpg', 'run airy', 'Runshoes for men and women. The available colors are white-orange and blak-red.', 'Rp 279k', 'Runshoes'),
(7, 'pink.jpg', 'yeazy air', 'Low-sneakers for women. The available colors are yellow, pink, and grey.', 'Rp 449k', 'Casual'),
(8, 'white.jpg', 'air simply', 'Low-sneakers for men, only checklist as highlight. The available colors are red, cream, white, black, and grey.', 'Rp 249k', 'Casual'),
(9, 'white-pink.jpg', 'maxy run', 'Runshoes for women. The available colors are white, and pink.', 'Rp 329k', 'Runshoes'),
(10, 'white-rainbow.jpg', 'rainbow maxy', 'Rainbow sneakers for hangout, available colors is only on pict.', 'Rp 379k', 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$pjUzpKnYw3fHsHUI2Vak9Owf8XybPjBljUBIQfXURfVYkGzDJ61Fu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
