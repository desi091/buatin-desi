-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Agu 2025 pada 06.58
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hewan`
--

CREATE TABLE `db_hewan` (
  `Id` int(11) NOT NULL,
  `Nama_hewan` varchar(50) NOT NULL,
  `Jenis_hewan` varchar(20) NOT NULL,
  `Asal` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `db_hewan`
--

INSERT INTO `db_hewan` (`Id`, `Nama_hewan`, `Jenis_hewan`, `Asal`, `Jumlah`) VALUES
(1, 'Sapi', 'Herbivora', 'Asia ', 20),
(2, 'Harimau', 'Karnivora', 'Asia', 30),
(3, 'Ayam', 'Omnivora', 'Indonesia ', 58),
(4, 'Kelinci', 'Herbivora', 'Eropa', 20),
(5, 'Beruang', 'Omnivora', 'Amerika ', 38);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_hewan`
--
ALTER TABLE `db_hewan`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
