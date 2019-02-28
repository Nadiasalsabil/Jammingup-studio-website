-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2019 pada 22.30
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

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
-- Struktur dari tabel `j_article`
--

CREATE TABLE `j_article` (
  `id_article` int(5) NOT NULL,
  `article` varchar(40) NOT NULL,
  `description` varchar(800) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `tgl_post` date NOT NULL,
  `isi` varchar(250) NOT NULL,
  `sumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `j_article`
--

INSERT INTO `j_article` (`id_article`, `article`, `description`, `picture`, `tgl_post`, `isi`, `sumber`) VALUES
(12, 'Meeting Jammingup Studio', 'Dan dari pertemuan inilah kami mendapatkan ide - ide untuk mengembangkan jammming up Studio kedepannya serta project pertama Jammingup Studio yang akan kami garap bersama - sama . dan dari sini pula kami membuat sebuah struktur untuk mempermudah kerja kami dalam mengerjakan setiap tugas-tugas project untuk Jammingup Studio. Kami mengharapkan Jammingup Studio Kedepannya bisa lebih berkembang dan berkembang lagi', 'slide2.jpg', '2019-06-02', '0', 'Jammingup Studio'),
(13, 'Women inTech', 'Kita lahir dari seorang wanita. Wanita yang dulunya perempuan dan kemudian diberikan hak dan kewajiban sebagai seorang Ibu yang layak diberikan titel sebagai seorang Wanita. Di dalam kiprahnya sebagai seorang wanita, dia memiliki pedamping dan juga memiliki keturunan yang akan meneruskan dirinya', 'g2.jpg', '2019-02-01', '0', 'Jammingup Studio'),
(14, 'Jammingup Studio bagi - bagi T-Shirt', 'Ngoding akan makin kece kalau memakai JAMMINGUP STUDIO Official T-Shirt. Design simple nan elegan. Kalau kamu JAMMINGUP STUDIO member, wajib memiliki T-Shirt ini. Kamu bisa mendapatkannya di JAMMINGUP STUDIO\'s Official T-Shirt.  Limited Edition', 'kaos.png', '2019-02-08', '', 'Jammingup Studio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `j_user`
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
-- Dumping data untuk tabel `j_user`
--

INSERT INTO `j_user` (`id`, `username`, `password`, `email`, `nama`, `ttl`, `twibbon`, `level`) VALUES
(1, 'nico', '410ec15153a6dff0bed851467309bcbd', '', 'Nico Schrisandy', '07 Juni 1997', '', 'admin'),
(2, 'nadia', 'a2e8cea3392da09d1d31be3fca68efed', 'salsabilnadia7@gmail.com', 'Nadia Salsabil', 'Jakarta, 07 Juni 199', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `j_article`
--
ALTER TABLE `j_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `j_user`
--
ALTER TABLE `j_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `j_article`
--
ALTER TABLE `j_article`
  MODIFY `id_article` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `j_user`
--
ALTER TABLE `j_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
