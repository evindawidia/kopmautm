-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopmautm`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `nama_anggota` text DEFAULT NULL,
  `alamat_anggota` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `no_telpon_anggota` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `level_id`, `gender_id`, `prodi_id`, `nama_anggota`, `alamat_anggota`, `email`, `no_telpon_anggota`, `date_created`, `password`) VALUES
(1, 1, 1, 1, 'Admin', 'Universitas Trunojoyo Madura', 'adminkopma@gmail.com', '088726389123', '2020-12-08', 'admin01'),
(2, 2, 2, 3, 'Pengurus 1', 'Bangkalan', 'pengurus@gmail.com', '085123678351', '2020-12-25', 'pengurus01'),
(3, 3, 1, 6, 'Evinda Widia', 'Pacet, Mojokerto', 'evinda@gmail.com', '083218392193', '2020-12-25', 'evinda01'),
(7, 3, 1, 4, 'Utami Dewi', 'Kamal Bangkalan', 'utamidewi@gmail.com', '081234569876', '2021-01-06', 'utami1'),
(8, 1, 2, 6, 'admin2', 'Bangkalan', 'admin2@gmail.com', '089837456123', '2021-01-12', 'admin02');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama_barang` text DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `supplier_id`, `kategori_id`, `nama_barang`, `harga_jual`, `harga_beli`, `image`, `deskripsi`, `stock`, `date_created`) VALUES
(1, 1, 1, 'Tropicana Slim Hokkaido Cheese Cookies 100gr', 15000, 17200, 'http://localhost/kopmautm//public/upload/image1.jpeg', 'Merek : Tropicana SlimKadaluarsa : Maret 2022Umur Simpan : 18 Bulan', 2650, '2021-01-12'),
(2, 1, 2, 'Somethinc Level 1% Retinol 20ml', 120000, 155000, 'http://localhost/kopmautm//public/upload/image6.jpeg', 'Merek : SomethincBentuk Produk : GelJenis Kulit : SensitiveKegunaan : Melembabkan/MoisturizingKadaluarsa : Juli 2022', 54, '2021-01-12'),
(3, 2, 3, 'Acrylic Maries 30ml Paint Acrylic Colour', 12500, 9000, 'http://localhost/kopmautm//public/upload/image3.jpeg', 'Merek : MariesTipe : Cat AcrylicJenis : Satuan', 4092, '2021-01-12'),
(4, 2, 4, 'Duapola Remple Amunzen Cardigan 8821', 129000, 90000, 'http://localhost/kopmautm//public/upload/image4.jpeg', 'Merk : EizaBahan : MoscrepeUkuran : All Size', 2, '2021-01-12'),
(5, 3, 5, 'Logitech B170 Wireless Mouse', 100000, 80000, 'http://localhost/kopmautm//public/upload/image5.jpeg', 'Merek : LogitechTipe : WirelessGaransi : 1 Tahun', 3460, '2021-01-12'),
(7, 3, 6, 'Cypriz Fry Pan Marble Induksi 26cm FP-0633', 135000, 100000, 'http://localhost/kopmautm//public/upload/image2.jpeg', 'Merek : CyruzBahan : KeramikUkuran : 26 cm (diemater)', 30, '2021-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_det_pembelian` int(11) NOT NULL,
  `pembelian_id` int(11) DEFAULT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_det_pembelian`, `pembelian_id`, `barang_id`, `jumlah_beli`, `date_created`) VALUES
(1, 1, 1, 3, '2021-01-12'),
(2, 1, 4, 2, '2021-01-08'),
(4, 4, 5, 2, '2021-01-09'),
(12, 6, 1, 1, '2021-01-19'),
(13, 7, 3, 2, '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `date_created`) VALUES
(1, 'Teknik', '2020-12-11'),
(2, 'FISIB', '2020-12-12'),
(3, 'Hukum', '2020-12-13'),
(4, 'Pertanian', '2020-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id_gender`, `jenis_kelamin`, `date_created`) VALUES
(1, 'PEREMPUAN', '2020-12-15'),
(2, 'LAKI-LAKI', '2020-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `date_created`) VALUES
(1, 'Makanan & Minuman', '2020-12-01'),
(2, 'Perawatan & Kecantikan', '2020-12-02'),
(3, 'Buku & Alat Tulis', '2020-12-03'),
(4, 'Fashion', '2020-12-04'),
(5, 'Elektronik', '2020-12-05'),
(6, 'Perlengkapan Rumah', '2020-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `ket_level` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `ket_level`, `date_created`) VALUES
(1, 'Admin', '2020-12-01'),
(2, 'Pengurus', '2020-12-02'),
(3, 'Member', '2020-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `log_pembayaran`
--

CREATE TABLE `log_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `stat_bayar_id` int(11) DEFAULT NULL,
  `pengajuan_id` int(11) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_pembayaran`
--

INSERT INTO `log_pembayaran` (`id_pembayaran`, `stat_bayar_id`, `pengajuan_id`, `tanggal_bayar`) VALUES
(1, 1, 1, '2020-12-17'),
(2, 2, 1, '2020-12-18'),
(3, 2, 4, '2021-01-06'),
(4, 1, 4, '2021-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `anggota_id` int(11) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `status_beli_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `anggota_id`, `tanggal_beli`, `status_beli_id`) VALUES
(1, 3, '2020-12-26', 2),
(4, 7, '2021-01-08', 1),
(6, 3, '2021-01-19', 2),
(7, 3, '2021-01-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `anggota_id` int(11) DEFAULT NULL,
  `stat_pengajuan_id` int(11) DEFAULT NULL,
  `tanggal_ajuan` date DEFAULT NULL,
  `jumlah_pinjam` int(11) DEFAULT NULL,
  `jumlah_cicilan` int(11) DEFAULT NULL,
  `tenor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `anggota_id`, `stat_pengajuan_id`, `tanggal_ajuan`, `jumlah_pinjam`, `jumlah_cicilan`, `tenor`) VALUES
(1, 3, 1, '2021-01-12', 100000, 10000, 10),
(4, 7, 1, '2021-01-05', 200000, 10000, 20),
(6, 3, 1, '2021-01-19', 200000, 20000, 10),
(7, 7, 1, '2021-01-19', 500000, 25000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `fakultas_id` int(11) DEFAULT NULL,
  `nama_prodi` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `fakultas_id`, `nama_prodi`, `date_created`) VALUES
(1, 1, 'Teknik Informatika', '2020-12-14'),
(2, 1, 'Teknik Industri', '2020-12-14'),
(3, 1, 'Teknik Elektro', '2020-12-14'),
(4, 2, 'Psikologi', '2020-12-14'),
(5, 2, 'Sastra Inggris', '2020-12-14'),
(6, 3, 'Hukum', '2020-12-14'),
(7, 4, 'Agribisnis', '2020-12-14'),
(8, 4, 'Agroteknologi', '2020-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `restock`
--

CREATE TABLE `restock` (
  `id_restock` int(11) NOT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `tanggal_beli_stock` date DEFAULT NULL,
  `jumlah_beli_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restock`
--

INSERT INTO `restock` (`id_restock`, `barang_id`, `tanggal_beli_stock`, `jumlah_beli_stock`) VALUES
(1, 5, '2020-12-23', 10);

-- --------------------------------------------------------

--
-- Table structure for table `status_beli`
--

CREATE TABLE `status_beli` (
  `id_status_beli` int(11) NOT NULL,
  `status_beli` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_beli`
--

INSERT INTO `status_beli` (`id_status_beli`, `status_beli`, `date_created`) VALUES
(1, 'Belum Checkout', '2020-12-21'),
(2, 'Sudah Checkout', '2020-12-21'),
(3, 'Lunas', '2020-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `status_pembayaran`
--

CREATE TABLE `status_pembayaran` (
  `id_stat_bayar` int(11) NOT NULL,
  `status_bayar` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pembayaran`
--

INSERT INTO `status_pembayaran` (`id_stat_bayar`, `status_bayar`, `date_created`) VALUES
(1, 'Tepat', '2020-12-21'),
(2, 'Telat', '2020-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `status_pengajuan`
--

CREATE TABLE `status_pengajuan` (
  `id_stat_pengajuan` int(11) NOT NULL,
  `status_pengajuan` varchar(20) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pengajuan`
--

INSERT INTO `status_pengajuan` (`id_stat_pengajuan`, `status_pengajuan`, `date_created`) VALUES
(1, 'diterima', '2020-12-21'),
(2, 'ditolak', '2020-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(20) DEFAULT NULL,
  `alamat_supplier` text DEFAULT NULL,
  `no_telpon_supplier` varchar(17) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_telpon_supplier`, `date_created`) VALUES
(1, 'supplier 1', 'Dsn. Mojoroto, Desa Petak, Kec Pacet, Kab. Mojokerto', '088228483826', '2021-01-12'),
(2, 'supplier 2', 'Dsn. Pandan Arum, Desa Pandan, Kec. Puri, Kab. Mojokerto', '081234892184', '2020-12-18'),
(3, 'supplier 3', 'Dsn. Brangkal, Desa. Sooko, Kec. Sooko, Kab. Mojokerto', '086357281938', '2020-12-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `anggota_ibfk_1` (`gender_id`),
  ADD KEY `anggota_ibfk_2` (`prodi_id`),
  ADD KEY `anggota_ibfk_3` (`level_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_ibfk_1` (`kategori_id`),
  ADD KEY `barang_ibfk_2` (`supplier_id`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_det_pembelian`),
  ADD KEY `detail_pembelian_ibfk_1` (`barang_id`),
  ADD KEY `detail_pembelian_ibfk_2` (`pembelian_id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `log_pembayaran`
--
ALTER TABLE `log_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `log_pembayaran_ibfk_3` (`stat_bayar_id`),
  ADD KEY `log_pembayaran_ibfk_2` (`pengajuan_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `pembelian_ibfk_1` (`anggota_id`),
  ADD KEY `status_beli_id` (`status_beli_id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `pengajuan_ibfk_3` (`anggota_id`),
  ADD KEY `pengajuan_ibfk_4` (`stat_pengajuan_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `prodi_ibfk_1` (`fakultas_id`);

--
-- Indexes for table `restock`
--
ALTER TABLE `restock`
  ADD PRIMARY KEY (`id_restock`),
  ADD KEY `restock_ibfk_1` (`barang_id`);

--
-- Indexes for table `status_beli`
--
ALTER TABLE `status_beli`
  ADD PRIMARY KEY (`id_status_beli`);

--
-- Indexes for table `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  ADD PRIMARY KEY (`id_stat_bayar`);

--
-- Indexes for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
  ADD PRIMARY KEY (`id_stat_pengajuan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_det_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_pembayaran`
--
ALTER TABLE `log_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restock`
--
ALTER TABLE `restock`
  MODIFY `id_restock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_beli`
--
ALTER TABLE `status_beli`
  MODIFY `id_status_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  MODIFY `id_stat_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
  MODIFY `id_stat_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_ibfk_3` FOREIGN KEY (`level_id`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_pembayaran`
--
ALTER TABLE `log_pembayaran`
  ADD CONSTRAINT `log_pembayaran_ibfk_2` FOREIGN KEY (`pengajuan_id`) REFERENCES `pengajuan` (`id_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_pembayaran_ibfk_3` FOREIGN KEY (`stat_bayar_id`) REFERENCES `status_pembayaran` (`id_stat_bayar`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`status_beli_id`) REFERENCES `status_beli` (`id_status_beli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_3` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ibfk_4` FOREIGN KEY (`stat_pengajuan_id`) REFERENCES `status_pengajuan` (`id_stat_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id_fakultas`) ON UPDATE CASCADE;

--
-- Constraints for table `restock`
--
ALTER TABLE `restock`
  ADD CONSTRAINT `restock_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
