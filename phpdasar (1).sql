-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nomor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `gambar`, `nomor`) VALUES
(1, 'Mooncke', 'Rp.35.000,-', '623750af7e40b.png', 63468),
(2, 'bear coco', 'Rp.30.000,-', '62374f2365393.jpg', 53758),
(4, 'Spons Milk Cup ', 'Rp.38.000.-', '6237511cdee5a.jpg', 73594),
(5, 'Owl Cake', 'Rp.75.000,-', '62375290d6eaf.jpg', 5378),
(7, 'Lion Cup', 'Rp.15.000,-', '623847688c7c7.jpg', 8795384);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'kahoot', '$2y$10$2Kwsef1lhfCb/Li8ynWFjOD8dnrjPUJtBmRETfGkc0dYkqvY2wInC'),
(4, 'devi', '$2y$10$HfIMXxqtPsj/.PaDcluzAOvdmUctKbaC51LcDd7lECsUmWfQkgzKW'),
(5, 'tata', '$2y$10$ZKJeQ31e49Je5WfTWIiFf.quCLfuvnH5BUy./1mVcJdCl3Ks3.nWW'),
(6, 'user', '$2y$10$UWfhawpdcLsindWIBEZOf..7hvsu/pWxXZCX5K1oAsmtITKj30BHu'),
(7, 'rara', '$2y$10$gLTsBWjr25o8.xgR9ta7wuuQNh0o4A07.37AlF2vAHEfT9dl1UVti'),
(8, 'user1', '$2y$10$YV6EaojGh9a1hlJEa3JpBeK4kMiTzruD7O61BXUIQGmX8h.RYJOi6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
