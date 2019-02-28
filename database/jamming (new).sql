-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 03:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamming`
--

-- --------------------------------------------------------

--
-- Table structure for table `j_article`
--

CREATE TABLE `j_article` (
  `id_article` int(5) NOT NULL,
  `article` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_article`
--

INSERT INTO `j_article` (`id_article`, `article`, `description`, `picture`) VALUES
(2, 'Teknologi Terbaru 2019', 'wefnlwenfiwneiljadlns', 'Screenshot_2018-03-14-09-15-25.png');

-- --------------------------------------------------------

--
-- Table structure for table `j_document`
--

CREATE TABLE `j_document` (
  `id` int(5) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `j_galery`
--

CREATE TABLE `j_galery` (
  `id` int(5) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_galery`
--

INSERT INTO `j_galery` (`id`, `gambar`, `deskripsi`) VALUES
(2, 'kaos.png', 'Meeting pertama menghasilkan desain baju Jamming ');

-- --------------------------------------------------------

--
-- Table structure for table `j_portofolio`
--

CREATE TABLE `j_portofolio` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `jenis_portofolio` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `video` varchar(40) NOT NULL,
  `roles` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `j_user`
--

CREATE TABLE `j_user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `twibbon` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_user`
--

INSERT INTO `j_user` (`id`, `username`, `password`, `email`, `nama`, `ttl`, `twibbon`, `level`) VALUES
(1, 'nico', '410ec15153a6dff0bed851467309bcbd', '', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `j_article`
--
ALTER TABLE `j_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `j_document`
--
ALTER TABLE `j_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `j_galery`
--
ALTER TABLE `j_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `j_portofolio`
--
ALTER TABLE `j_portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `j_user`
--
ALTER TABLE `j_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `j_article`
--
ALTER TABLE `j_article`
  MODIFY `id_article` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `j_document`
--
ALTER TABLE `j_document`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `j_galery`
--
ALTER TABLE `j_galery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `j_portofolio`
--
ALTER TABLE `j_portofolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `j_user`
--
ALTER TABLE `j_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `j_portofolio`
--
ALTER TABLE `j_portofolio`
  ADD CONSTRAINT `j_portofolio_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `j_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
