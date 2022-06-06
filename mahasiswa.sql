-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2021 pada 09.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tanggal lahir` date NOT NULL,
  `jenis kelamin` varchar(2) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `warga negara` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `password`, `tanggal lahir`, `jenis kelamin`, `prodi`, `warga negara`, `status`, `keterangan`) VALUES
('M3119068', 'NUR AISYAH SHOLLIHAH', '12345678', '1998-04-26', 'ma', 'Fisika', 'wni', 'aktif', 'Suka tidur'),
('M3119069', 'AIDAH MUBATTILAH', '11110001', '2000-05-16', 'ma', 'informatika', 'wna', 'aktif', 'Suka begadang'),
('M3119070', 'IBRAHIM HANIF', '34567890', '1989-07-04', 'fe', 'kimia', 'wni', 'aktif', 'Dota profesional player');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
