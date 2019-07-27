-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2019 pada 10.24
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
-- Database: `miak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `nama_bahan_baku` varchar(100) NOT NULL,
  `satuan_bahan_baku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan_baku`, `satuan_bahan_baku`) VALUES
(2, 'Telor', 'Buah'),
(3, 'Kentang', 'kg'),
(4, 'merica', 'buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(20) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `biaya_pemesanan` int(11) NOT NULL,
  `biaya_penyimpanan` int(11) NOT NULL,
  `lt` int(11) NOT NULL,
  `sl` float NOT NULL,
  `eoq` int(11) NOT NULL,
  `frekuensi_pemesanan` int(11) NOT NULL,
  `rop` int(11) NOT NULL,
  `ss` int(11) NOT NULL,
  `status` enum('B','P','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah`, `harga`, `satuan`, `biaya_pemesanan`, `biaya_penyimpanan`, `lt`, `sl`, `eoq`, `frekuensi_pemesanan`, `rop`, `ss`, `status`) VALUES
(2, 'Telor', 1000000, 20000, NULL, 5000, 2400, 7, 2.05, 65, 15, 19, 39, 'B'),
(3, 'Kentang', 42, 4000, NULL, 200, 800, 7, 2.05, 32, 63, 38, 79, 'B'),
(4, 'merica', 3000000, 2000, NULL, 200, 220, 7, 2.05, 74, 41, 58, 118, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_tersedia`
--

CREATE TABLE `barang_tersedia` (
  `id_barang_tersedia` varchar(11) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_tersedia`
--

INSERT INTO `barang_tersedia` (`id_barang_tersedia`, `nama`) VALUES
('A1', 'Roti Bakar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komposisis`
--

CREATE TABLE `komposisis` (
  `id_komposisi` int(11) NOT NULL,
  `id_barang_tersedia` varchar(20) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komposisis`
--

INSERT INTO `komposisis` (`id_komposisi`, `id_barang_tersedia`, `id_bahan_baku`, `jumlah`) VALUES
(1, 'A1', 3, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan_untuk_supplier`
--

CREATE TABLE `orderan_untuk_supplier` (
  `id_orderan_untuk_supplier` int(11) NOT NULL,
  `id_pesanan` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('B','P','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderan_untuk_supplier`
--

INSERT INTO `orderan_untuk_supplier` (`id_orderan_untuk_supplier`, `id_pesanan`, `jumlah`, `satuan`, `tgl`, `status`) VALUES
(1, '3', 32, '', '2019-07-27', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Pimpinan'),
(3, 'Kepala Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_bk`
--

CREATE TABLE `trx_bk` (
  `id_trx_bk` int(11) NOT NULL,
  `id_trx_pelanggan` int(11) NOT NULL,
  `pesanan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trx_bk`
--

INSERT INTO `trx_bk` (`id_trx_bk`, `id_trx_pelanggan`, `pesanan`, `tgl`, `bahan`, `jumlah`) VALUES
(1, 1, 'A1', '2019-07-27', '3', 6000);

--
-- Trigger `trx_bk`
--
DELIMITER $$
CREATE TRIGGER `update` AFTER INSERT ON `trx_bk` FOR EACH ROW BEGIN
	UPDATE barang SET jumlah=jumlah-NEW.jumlah
	WHERE id_barang=NEW.bahan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_bm`
--

CREATE TABLE `trx_bm` (
  `id_orderan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `pesanan` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trx_bm`
--

INSERT INTO `trx_bm` (`id_orderan`, `tgl`, `pesanan`, `jumlah`) VALUES
(1, '2019-07-27', '3', 32);

--
-- Trigger `trx_bm`
--
DELIMITER $$
CREATE TRIGGER `tg_stock_update` AFTER INSERT ON `trx_bm` FOR EACH ROW BEGIN
	UPDATE barang SET jumlah=jumlah+NEW.jumlah
    WHERE id_barang=NEW.pesanan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_pelanggan`
--

CREATE TABLE `trx_pelanggan` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trx_pelanggan`
--

INSERT INTO `trx_pelanggan` (`id`, `id_barang`, `tgl`, `jumlah`) VALUES
(1, 'A1', '2019-07-27', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `jabatan`, `password`, `role`) VALUES
(1, '1', 'Dodi Novembri', 'KK', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
(2, '2', 'Dodi Novembri', 'Kepala Kantor', 'dc82a0e0107a31ba5d137a47ab09a26b', 2),
(3, '3', 'Dodi Novembri', 'KK', 'dc82a0e0107a31ba5d137a47ab09a26b', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_tersedia`
--
ALTER TABLE `barang_tersedia`
  ADD PRIMARY KEY (`id_barang_tersedia`);

--
-- Indeks untuk tabel `komposisis`
--
ALTER TABLE `komposisis`
  ADD PRIMARY KEY (`id_komposisi`);

--
-- Indeks untuk tabel `orderan_untuk_supplier`
--
ALTER TABLE `orderan_untuk_supplier`
  ADD PRIMARY KEY (`id_orderan_untuk_supplier`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `trx_bk`
--
ALTER TABLE `trx_bk`
  ADD PRIMARY KEY (`id_trx_bk`),
  ADD KEY `trx_bk_ibfk_1` (`pesanan`);

--
-- Indeks untuk tabel `trx_bm`
--
ALTER TABLE `trx_bm`
  ADD PRIMARY KEY (`id_orderan`),
  ADD KEY `trx_bm_ibfk_1` (`pesanan`);

--
-- Indeks untuk tabel `trx_pelanggan`
--
ALTER TABLE `trx_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komposisis`
--
ALTER TABLE `komposisis`
  MODIFY `id_komposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `orderan_untuk_supplier`
--
ALTER TABLE `orderan_untuk_supplier`
  MODIFY `id_orderan_untuk_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `trx_bk`
--
ALTER TABLE `trx_bk`
  MODIFY `id_trx_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `trx_bm`
--
ALTER TABLE `trx_bm`
  MODIFY `id_orderan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `trx_pelanggan`
--
ALTER TABLE `trx_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `trx_bk`
--
ALTER TABLE `trx_bk`
  ADD CONSTRAINT `trx_bk_ibfk_1` FOREIGN KEY (`pesanan`) REFERENCES `barang_tersedia` (`id_barang_tersedia`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
