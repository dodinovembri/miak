-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2019 pada 06.54
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
(8, 'Telor', 'buah'),
(9, 'tepung', 'kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
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
('A001', 'Gelatin', 8394, 2000, 'kg', 2000, 900, 3, 2.05, 2108, 474, 8219, 16849, 'B'),
('A002', 'Tepung Terigu', 1987395, 3000, 'kg', 2000, 90, 23, 2.05, 9428, 212, 126027, 258356, 'B'),
('A003', 'Susu Cair', 987895, 1000, 'liter', 2000, 40, 3, 2.05, 10000, 100, 8219, 16849, 'B'),
('A004', 'Telur', 6273, 100, 'buah', 2000, 3, 3, 2.05, 1633, 100, 16, 34, 'B'),
('A005', 'Mentega', 366395, 3000, 'buah', 2000, 90, 3, 2.05, 4110, 92, 3123, 6403, 'B'),
('A006', 'Cokelat Bubuk', 987395, 3000, 'kg', 2000, 60, 3, 2.05, 8165, 122, 8219, 16849, 'B'),
('A007', 'Selai Strawberry', 1987395, 45000, 'kg', 2000, 1350, 3, 2.05, 2434, 822, 16438, 33699, 'B'),
('A008', 'Selai Blueberry', 987895, 45000, 'kg', 2000, 900, 3, 2.05, 2108, 474, 8219, 16849, 'B'),
('A009', 'Selai Nanas', 987395, 45000, 'buah', 2000, 1350, 3, 2.05, 1721, 581, 8219, 16849, 'B'),
('B001', 'Cokelat', 984895, 1000, 'kg', 2000, 30, 2, 2.05, 11547, 87, 5479, 11233, 'B');

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
('A1', 'Roti Tawar'),
('A2', 'Roti Mentega');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komposisi`
--

CREATE TABLE `komposisi` (
  `id_komposisi` int(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `gelatin` int(11) NOT NULL,
  `tepung_terigu` int(11) NOT NULL,
  `susu_cair` int(11) NOT NULL,
  `telur` int(11) NOT NULL,
  `mentega` int(11) NOT NULL,
  `coklat_bubuk` int(11) NOT NULL,
  `selai_strawberry` int(11) NOT NULL,
  `selai_blueberry` int(11) NOT NULL,
  `selai_nanas` int(11) NOT NULL,
  `coklat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'A1', 8, 2),
(6, 'A1', 9, 12),
(7, 'A2', 8, 2),
(10, 'A2', 9, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_barang`
--

CREATE TABLE `m_barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_barang`
--

INSERT INTO `m_barang` (`id_barang`, `nama_barang`) VALUES
('A001', 'Gelatin'),
('A002', 'Tepung Terigu'),
('A003', 'Susu Cair'),
('A004', 'Telur'),
('A005', 'Mentega'),
('A006', 'Cokelat Bubuk'),
('A007', 'Selai Strawberry'),
('A008', 'Selai Blueberry'),
('A009', 'Selai Nanas'),
('B001', 'Cokelat');

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
(1, 1, 'A1', '2019-07-25', '8', 4),
(2, 1, 'A1', '2019-07-25', '9', 48),
(3, 2, 'A2', '2019-07-25', '8', 26),
(4, 2, 'A2', '2019-07-25', '9', 338);

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
(1, 'A1', '2019-07-25', 2),
(2, 'A2', '2019-07-25', 13);

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
-- Indeks untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id_komposisi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `komposisis`
--
ALTER TABLE `komposisis`
  ADD PRIMARY KEY (`id_komposisi`);

--
-- Indeks untuk tabel `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id_komposisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komposisis`
--
ALTER TABLE `komposisis`
  MODIFY `id_komposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `orderan_untuk_supplier`
--
ALTER TABLE `orderan_untuk_supplier`
  MODIFY `id_orderan_untuk_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `trx_bk`
--
ALTER TABLE `trx_bk`
  MODIFY `id_trx_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `trx_bm`
--
ALTER TABLE `trx_bm`
  MODIFY `id_orderan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trx_pelanggan`
--
ALTER TABLE `trx_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  ADD CONSTRAINT `komposisi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang_tersedia` (`id_barang_tersedia`);

--
-- Ketidakleluasaan untuk tabel `orderan_untuk_supplier`
--
ALTER TABLE `orderan_untuk_supplier`
  ADD CONSTRAINT `orderan_untuk_supplier_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `trx_bk`
--
ALTER TABLE `trx_bk`
  ADD CONSTRAINT `trx_bk_ibfk_1` FOREIGN KEY (`pesanan`) REFERENCES `barang_tersedia` (`id_barang_tersedia`);

--
-- Ketidakleluasaan untuk tabel `trx_bm`
--
ALTER TABLE `trx_bm`
  ADD CONSTRAINT `trx_bm_ibfk_1` FOREIGN KEY (`pesanan`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
