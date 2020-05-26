-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2020 pada 18.49
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_infak`
--

CREATE TABLE `tb_infak` (
  `id_infak` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_infak`
--

INSERT INTO `tb_infak` (`id_infak`, `nama`, `keterangan`, `tanggal`, `jumlah`) VALUES
(67, 'yahdi ', 'sedekah', '04/08/2020 3:35 AM', '500000'),
(69, 'nadia', 'sedekah', '05/09/2020 3:34 AM', '500000'),
(71, 'nadia anggi', 'sedekah', '05/09/2020 3:34 AM', '500000'),
(75, 'fitri', 'sedekah', '21-05-2020 19:24:58', '500000'),
(76, 'yahdi almukaram', 'sedekah', '21-05-2020 19:39:40', '1000000'),
(96, 'ardiman', 'kotak amala minggu lalu', '25-05-2020 20:23:42', '1000000'),
(97, 'yusi hadriyani', 'infak ', '25-05-2020 20:25:17', '5000000'),
(98, 'nadia', 'sedekah', '25-05-2020 20:29:43', '10000'),
(99, 'yahdi almukaram', 'sedekah', '25-05-2020 20:46:54', '500000'),
(104, 'lutvi furkon', 'sedekah', '04/28/2020 1:54 AM', '500000'),
(105, 'nadia', 'infak ', '05/26/2020 2:05 AM', '500000'),
(107, 'yusi', 'sedekah', '05/29/2020 2:08 AM', '500000'),
(108, 'yusi hadnriyani', 'sedekah', '05/29/2020 2:08 AM', '500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `kegiatan`, `tanggal`, `jumlah`) VALUES
(5, 'korban', '05/09/2020 3:34 AM', '500000'),
(6, 'gotoroyong', '05/09/2020 3:34 AM', '500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(30) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `create_at`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'yahdi', '58d432c74ad12fc7d0f30300771bec18', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_infak`
--
ALTER TABLE `tb_infak`
  ADD PRIMARY KEY (`id_infak`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_infak`
--
ALTER TABLE `tb_infak`
  MODIFY `id_infak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
