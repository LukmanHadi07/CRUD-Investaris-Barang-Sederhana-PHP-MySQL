-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2022 pada 18.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `native`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'lukman', 'b5bbc8cf472072baffe920e4e28ee29c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `Tahun_Pem` varchar(100) NOT NULL,
  `Harga_B` varchar(100) NOT NULL,
  `keadaan_b` varchar(100) NOT NULL,
  `Kuantitas_B` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `Tahun_Pem`, `Harga_B`, `keadaan_b`, `Kuantitas_B`) VALUES
(3, 'Kursi', '2017', 'Rp.1.000.000', 'Baik', '2'),
(4, 'Televisi', '2016', 'Rp.4.000.000', 'Baik', '1'),
(5, 'Gorder', '2020', 'Rp. 100.00 / Unit', 'Rusak', '10'),
(6, 'Televisi', '2016', 'Rp. 100.00 / Unit', 'Baik', '2'),
(7, 'Meja', '2020', 'Rp.12.000.000', 'Baik', '5'),
(8, 'Kursi', '2020', 'Rp.1.000.000', 'Baik', '10'),
(9, 'Laptop', '2020', 'Rp.5.000.000 / Unit', 'Baik', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala`
--

CREATE TABLE `kepala` (
  `id` int(11) NOT NULL,
  `nip_kepala` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepala`
--

INSERT INTO `kepala` (`id`, `nip_kepala`, `nama`, `email`, `jabatan`, `alamat`) VALUES
(1, '07120190006', 'Lukman Hadi', 'Lukmanhadi2000@gmail.com', 'Kepala Dinas Perindag', 'Desa Jabung'),
(2, '07120190038', 'Deny Andrian', 'Deni2010@gmail.com', 'Kasubag Umum', 'Sugio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `nohp_pegawai` varchar(100) NOT NULL,
  `email_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nohp_pegawai`, `email_pegawai`, `alamat_pegawai`) VALUES
(1, 'nama_pegawai', '095445948545', 'lukmanhadi2000@gmail.com', 'Jabung '),
(2, 'nama_pegawai', '394390493094', 'skdlskldksl@gmail.com', 'skdosidoisd'),
(3, 'nama_pegawai', '3434', '343434@gmail.com', 'sdsd'),
(4, 'nama_pegawai', '343434', 'lukmanhadi2000@gmail.com', 'sds'),
(5, 'nama_pegawai', '343434343', 'lukmanhadi2000@gmail.com', 'ere');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `kepala`
--
ALTER TABLE `kepala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kepala`
--
ALTER TABLE `kepala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
