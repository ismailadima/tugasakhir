-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2015 pada 05.27
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_adventure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id_account` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('superadmin','admin','staff') DEFAULT 'staff',
  PRIMARY KEY (`id_account`),
  UNIQUE KEY `username` (`username`),
  KEY `id_level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `level`) VALUES
(1, 'superadmin', '3f8830f4f5c147d78d20705d68fa9065', 'superadmin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'ismail', 'ismail', 'staff'),
(4, 'aji', '8d045450ae16dc81213a75b725ee2760', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_jbarang` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_jbarang` (`id_jbarang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `jumlah`, `stok`, `harga`, `gambar`, `id_jbarang`) VALUES
(1, 'Handy Talky (HT) Digital', 'Baterai Charge Li-ion', 15, 15, '25000', '', 4),
(2, 'Handsfree Biasa', 'Suicom, Kenwood, Olinca', 20, 20, '8000', '', 4),
(3, 'Handsfree Tube (Selang)', 'Strandar', 20, 15, '15000', '', 4),
(4, 'Super Stik HT', 'Hi GAIN NH-31 / GNR-21 P', 20, 17, '10000', '', 4),
(5, 'Megaphone TOA ZR-2015s / ZR-1015', 'Baterai Tgg x 3', 10, 10, '25000', '', 4),
(6, 'Tas Carrier 30-35 Liter', 'Tanpa Cover Bag', 40, 10, '11000', '', 1),
(7, 'Tas Carrier 40 Liter', 'Tanpa Cover Bag', 30, 25, '12000', '', 1),
(8, 'Tas Carrier 50 Liter', 'Tanpa Cover Bag', 30, 5, '13000', '', 1),
(9, 'Tas Carrier 60 Liter', 'Tanpa Cover Bag', 30, 2, '14000', '', 1),
(10, 'Tas Carrier 70-80 Liter', 'Tanpa Cover Bag', 30, 30, '16000', '', 1),
(11, 'Tas Carrier 100 Liter', 'Tanpa Cover Bag', 30, 30, '18000', '', 1),
(12, 'Cover Bag', 'All Size (40-100 L)', 100, 63, '5000', '', 1),
(13, 'Matras', 'Single, Size 185 x 60 cm', 100, 75, '3000', '', 2),
(14, 'Tenda Dome 2 orang Rei', 'Size 185 x 120 x 99 cm', 30, 15, '25000', '', 2),
(15, 'Tenda Dome 2 orang Bestway', 'Size 206 x 145 x 99 cm', 40, 25, '25000', '', 2),
(16, 'Tenda Dome 2 orang Rei Double Cover', 'Size (60+120) x 210 x 120 cm', 50, 40, '30000', '', 2),
(17, 'Tenda Dome 4 orang Bestway', 'Size 240 x 210 x 130 cm', 50, 15, '35000', '', 2),
(18, 'Tenda Dome 5-6 orang Rei', 'Size 350 x 250 x 140 cm', 40, 4, '50000', '', 2),
(19, 'Tenda Dome 6-7 orang Great Outdoor', 'Size (130+230) x 290 x 170 cm', 40, 30, '60000', '', 2),
(20, 'Tenda Dome 7-8 orang Big Dome', 'Size 300 x 300 x 190 cm', 30, 25, '70000', '', 2),
(21, 'Tenda Dome 10-15 orang', 'Size 400 x 400 x 210 cm', 25, 25, '100000', '', 2),
(22, 'Tenda Pramuka Biasa + Patok 12 Pcs', 'Kapasitas 8 - 10 orang', 30, 30, '30000', '', 2),
(23, 'Sleeping Bag (SB) Dacron', 'User High up to 185 cm', 100, 45, '6000', '', 3),
(24, 'Sleeping Bag (SB) Single Polar', 'User High up to 185 cm', 100, 30, '7000', '', 3),
(25, 'Sleeping Bag (SB) Double Polar', 'User High up to 185 cm', 100, 5, '9000', '', 3),
(26, 'Headlamp Energizer HLD 3 (tanpa baterai)', 'Baterai A3 x 3', 40, 20, '7000', '', 5),
(27, 'Headlamp Energizer HLD 6 (tanpa baterai)', 'Baterai A3 x 3', 50, 40, '13000', '', 5),
(28, 'Headlamp Eiger LED (tanpa baterai)', 'Baterai A3 x 3', 30, 28, '7000', '', 5),
(29, 'Senter Tangan/Handlamp (tanpa baterai)', 'Baterai A3 x 3', 50, 4, '6000', '', 5),
(30, 'Lampu Tenda (tanpa baterai)', 'Baterai A3 x 3', 50, 40, '6000', '', 5),
(31, 'Kompor Gas Mini Gasmate', 'Tanpa Gas', 100, 20, '10000', '', 6),
(32, 'Kompor Gas Portable Hi-Cook 103', 'Tanpa Gas', 70, 50, '15000', '', 6),
(33, 'Nisting', 'Local (1 set = 3 rantang)', 100, 30, '7000', '', 6),
(34, 'Kompas Bidik', 'Local', 25, 20, '5000', '', 7),
(35, 'Webbing', 'Local, 5 meter', 40, 28, '5000', '', 8),
(36, 'Tali Frusik', '1,5 meter (loop) diameter 7mm', 40, 40, '5000', '', 7),
(37, 'Seat Harness', 'ABC/DMM/Eiger', 50, 30, '40000', '', 8),
(38, 'Carabiner Screw', 'Eiger UIAA/CAMP', 40, 24, '11000', '', 8),
(39, 'Figure of Eight', 'CAMP', 40, 40, '11000', '', 8),
(40, 'Helm Caving / Panjat', 'CAMP Rock Star', 100, 70, '30000', '', 8),
(41, 'Tali Tambang', 'Diameter 3 cm', 100, 50, '25000', '', 7),
(42, 'Terpal 3x4 Meter', 'Plastik', 100, 20, '12000', '', 7),
(43, 'Terpal 4x6 Meter', 'Plastik', 100, 40, '20000', '', 7),
(44, 'Patok/Pasak Pramuka', 'Besi', 150, 40, '500', '', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_barang`
--

CREATE TABLE IF NOT EXISTS `daftar_barang` (
  `id_dbarang` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` int(10) DEFAULT NULL,
  `id_transaksi` int(10) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_dbarang`),
  KEY `id_barang` (`id_barang`),
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `daftar_barang`
--

INSERT INTO `daftar_barang` (`id_dbarang`, `id_barang`, `id_transaksi`, `jumlah`, `harga`) VALUES
(1, 31, 1, 4, NULL),
(2, 6, 2, 1, NULL),
(3, 7, 1, 4, NULL),
(5, 12, 9, 3, 30000),
(11, 15, 9, 2, 100000),
(13, 7, 9, 2, 48000),
(14, 10, 9, 5, 160000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id_jbarang` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jbarang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jbarang`, `jenis_barang`) VALUES
(1, 'Tas'),
(2, 'Tenda'),
(3, 'Peralatan Tidur'),
(4, 'Alat Komunikasi'),
(5, 'Alat Penerangan'),
(6, 'Peralatan Masak'),
(7, 'Lain-lain'),
(8, 'Caving');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text,
  `phone` varchar(30) NOT NULL,
  `id_account` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_account` (`id_account`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `first_name`, `last_name`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `phone`, `id_account`) VALUES
(1, 'Markus', 'Wahyu', 'Laki-laki', 'Yogyakarta', '1988-11-05', 'Samirono, Sleman', '08123647189', 2),
(3, 'Ismail', 'Adima', 'Laki-laki', 'Semarang', '1994-05-15', 'Sendowo G82', '08156706780', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(150) DEFAULT NULL,
  `alamat` text,
  `jenis_identitas` varchar(10) DEFAULT NULL,
  `nomor_identitas` varchar(100) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `status` enum('Belum kembali','Sudah kembali') DEFAULT 'Belum kembali',
  `id_pegawai` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_peminjam`, `alamat`, `jenis_identitas`, `nomor_identitas`, `tgl_pinjam`, `tgl_kembali`, `total_harga`, `phone`, `status`, `id_pegawai`) VALUES
(1, 'Rio Fajar', 'Kaligoro', 'KTP', '10380123807912', '2015-06-10', '2015-06-12', NULL, '01830180', 'Belum kembali', 3),
(2, 'Rizal Wildan', 'Kayen Menur', 'KTP', '018230710730', '2015-06-11', '2015-06-12', NULL, '0130710', 'Belum kembali', 3),
(7, 'Wahyu Trianto', 'Trenggalek', 'KTP', '01830180', '2015-06-11', '2015-06-13', NULL, '08136816283', 'Belum kembali', 3),
(8, 'Yuda Hermawan', 'Sendowo G82', 'KTP', '0183180', '2015-06-13', '2015-06-14', NULL, '0183819312', 'Belum kembali', 1),
(9, 'Wahyu Trianto', 'Trenggalek', 'KTP', '131231', '2015-06-02', '2015-06-04', 338000, '1311', 'Belum kembali', 1);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jbarang`) REFERENCES `jenis_barang` (`id_jbarang`);

--
-- Ketidakleluasaan untuk tabel `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD CONSTRAINT `daftar_barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `daftar_barang_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
