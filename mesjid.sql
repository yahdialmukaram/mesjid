-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2020 pada 22.50
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
(5, 'yusi', 'sedekah', '14-05-2020 22:34:22', '500000'),
(7, 'putri', 'infak', '14-05-2020 22:36:16', '50000'),
(8, 'yahdi almukaram', 'infak', '14-05-2020 22:44:04', '20000'),
(9, 'udin', 'sedekah', '14-05-2020 22:46:57', '500000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_infak`
--
ALTER TABLE `tb_infak`
  ADD PRIMARY KEY (`id_infak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_infak`
--
ALTER TABLE `tb_infak`
  MODIFY `id_infak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
