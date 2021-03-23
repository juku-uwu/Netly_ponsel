-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Des 2020 pada 13.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_netly`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bersihbulanan`
--

CREATE TABLE `tb_bersihbulanan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `totalkeuntungan` varchar(50) NOT NULL,
  `totallebihan` varchar(50) NOT NULL,
  `totalkeluaran` varchar(50) NOT NULL,
  `totalbersih` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bersihbulanan`
--

INSERT INTO `tb_bersihbulanan` (`id`, `bulan`, `cabang`, `totalkeuntungan`, `totallebihan`, `totalkeluaran`, `totalbersih`) VALUES
(3, 'Januari/2020', 'Netly 1', '200000', '1000000', '500000', 700000),
(4, 'Januari/2020', 'Netly 2', '1000000', '1000000', '500000', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keuntunganharian`
--

CREATE TABLE `tb_keuntunganharian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `uang_kembali` varchar(200) NOT NULL,
  `hsl_pagi` varchar(200) NOT NULL,
  `hsl_sore` varchar(200) NOT NULL,
  `hsl_malam` varchar(200) NOT NULL,
  `total` varchar(100) NOT NULL,
  `lebihan` varchar(200) NOT NULL,
  `total_hari_ini` varchar(100) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keuntunganharian`
--

INSERT INTO `tb_keuntunganharian` (`id`, `tanggal`, `cabang`, `uang_kembali`, `hsl_pagi`, `hsl_sore`, `hsl_malam`, `total`, `lebihan`, `total_hari_ini`, `catatan`) VALUES
(1, '2020-12-18', 'Netly 2', '200000', '900000', '200000', '900000', '2000000', '10000', '1810000', ''),
(2, '2020-12-27', 'Netly 1', '350000', '100000', '500000', '500000', '1100000', '250000', '1000000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kryw`
--

CREATE TABLE `tb_kryw` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kryw`
--

INSERT INTO `tb_kryw` (`id`, `nik`, `nama`, `jenis_kelamin`, `alamat`, `telp`) VALUES
(2, '6371030211980004', 'Ahmad Riyadi Arridho', 'Laki-Laki', 'uuahdwuhwdu', '(+62)888-0192-8398'),
(3, '637204040198001', 'joko prabowo', 'Laki-Laki', 'jl.berkat mufakat', '(+62)896-5526-9701');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaranharian`
--

CREATE TABLE `tb_pengeluaranharian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pagi` int(11) NOT NULL,
  `siang` int(11) NOT NULL,
  `malam` int(11) NOT NULL,
  `totalpengeluaran` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengeluaranharian`
--

INSERT INTO `tb_pengeluaranharian` (`id`, `tanggal`, `pagi`, `siang`, `malam`, `totalpengeluaran`, `deskripsi`, `cabang`) VALUES
(2, '2020-11-02', 5000, 9000, 10000, 24000, 'Makan', 'Netly 1'),
(3, '2020-12-27', 10000, 10000, 25000, 45000, 'makan', 'Netly 2'),
(4, '2020-12-27', 75500, 0, 500000, 575500, 'pagi : parfum 10k habis 7 malam:sales andre', 'Netly 1'),
(5, '2020-12-27', 50000, 50000, 1000, 101000, 'na', 'Netly 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `kuota` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id`, `provider`, `kuota`, `harga`, `deskripsi`) VALUES
(1, 'XL', '3', '20000', ''),
(2, 'Axis', '4,5', '15000', ''),
(3, 'Telkomsel', '2.5 GB', '15000', 'vocher'),
(4, 'Telkomsel', '3.5gb', '25000', 'vocher');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `email`, `level`) VALUES
(1, 'admin', '??????', '21232f297a57a5a743894a0e4a801fc3', '??????', 'admin'),
(2, 'anu', 'Riyadi', '89a4b5bd7d02ad1e342c960e6a98365c', 'anu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bersihbulanan`
--
ALTER TABLE `tb_bersihbulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_keuntunganharian`
--
ALTER TABLE `tb_keuntunganharian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kryw`
--
ALTER TABLE `tb_kryw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengeluaranharian`
--
ALTER TABLE `tb_pengeluaranharian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bersihbulanan`
--
ALTER TABLE `tb_bersihbulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_keuntunganharian`
--
ALTER TABLE `tb_keuntunganharian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kryw`
--
ALTER TABLE `tb_kryw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaranharian`
--
ALTER TABLE `tb_pengeluaranharian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
