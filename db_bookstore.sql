-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 06.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bookstoreinformatics`
--

CREATE TABLE `tb_bookstoreinformatics` (
  `id_buku` varchar(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `penerbit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bookstoreinformatics`
--

INSERT INTO `tb_bookstoreinformatics` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
('B1001', 'Bisnis', 'Bisnis Online', '75.000', '9', 'Penerbit Informatika'),
('B1002', 'Bisnis', 'Etika Bisnis dan Tanggung  Jawab Sosial', '67.500', '20', 'Penerbit Informatika'),
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem Informasi', '50.000', '60', 'Penerbit Informatika'),
('K1002', 'Keilmuan', 'Artifical Intelligence', '45.000', '60', 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi ', '40.000', '25', 'Penerbit Informatika'),
('K3004', 'Keilmuan', 'Cloud Computing Technology', '85.000', '15', 'Penerbit Informatika'),
('N1001', 'Novel', 'Cahaya Di Penjuru Hati ', '68.000', '10', 'Andi Offset'),
('N1002', 'Novel', 'Aku Ingin Cerita', '48.000', '12', 'Danendra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` varchar(50) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `alamat`, `kota`, `telepon`) VALUES
('SP01 ', 'Penerbit Informatika', 'Jl. Buah Batu No. 121', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '022-5201215');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bookstoreinformatics`
--
ALTER TABLE `tb_bookstoreinformatics`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
