-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Mei 2015 pada 04.00
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
-- Struktur dari tabel `tb_account`
--

CREATE TABLE IF NOT EXISTS `tb_account` (
  `id_account` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('superadmin','admin','staff') DEFAULT 'staff',
  PRIMARY KEY (`id_account`),
  UNIQUE KEY `username` (`username`),
  KEY `id_level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_account`
--

INSERT INTO `tb_account` (`id_account`, `username`, `password`, `level`) VALUES
(1, 'superadmin', '3f8830f4f5c147d78d20705d68fa9065', 'superadmin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'ismail', 'f3b32717d5322d7ba7c505c230785468', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_jbarang` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY `nama_barang` (`nama_barang`),
  KEY `id_jbarang` (`id_jbarang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `jumlah`, `stok`, `harga`, `gambar`, `id_jbarang`) VALUES
(1, 'Handy Talky (HT) Digital', 'Baterai Charge Li-ion', 15, 15, '25.000', '', 4),
(2, 'Handsfree Biasa', 'Suicom, Kenwood, Olinca', 20, 20, '8.000', '', 4),
(3, 'Handsfree Tube (Selang)', 'Strandar', 20, 15, '15.000', '', 4),
(4, 'Super Stik HT', 'Hi GAIN NH-31 / GNR-21 P', 20, 17, '10.000', '', 4),
(5, 'Megaphone TOA ZR-2015s/ZR-1015', 'Baterai Tgg x 3', 10, 10, '25.000', '', 4),
(6, 'Tas Carrier 30-35 liter', 'Tanpa Cover Bag', 30, 10, '11.000', '', 1),
(7, 'Tas Carrier 40 liter', 'Tanpa Cover Bag', 30, 25, '12.000', '', 1),
(8, 'Tas Carrier 50 liter', 'Tanpa Cover Bag', 30, 5, '13.000', '', 1),
(9, 'Tas Carrier 60 liter', 'Tanpa Cover Bag', 30, 2, '14.000', '', 1),
(10, 'Tas Carrier 70 - 80 liter', 'Tanpa Cover Bag', 30, 30, '16.000', '', 1),
(11, 'Tas Carrier 100 liter', 'Tanpa Cover Bag', 30, 30, '18.000', '', 1),
(12, 'Cover Bag', 'All Size (40-100 L)', 100, 63, '4.000', '', 1),
(13, 'Matras', 'Single, Size 185 x 60 cm', 100, 75, '3.000', '', 3),
(14, 'Tenda Dome 2 orang Rei', 'Size 185 x 120 x 99 cm', 30, 15, '25.000', '', 2),
(15, 'Tenda Dome 2 orang Bestway', 'Size 206 x 145 x 99 cm', 40, 25, '25.000', '', 2),
(16, 'Tenda Dome 2 orang Rei Double Cover', 'Size (60+120) x 210 x 120 cm', 50, 40, '30.000', '', 2),
(17, 'Tenda Dome 4 orang Bestway', 'Size 240 x 210 x 130 cm', 50, 15, '35.000', '', 2),
(18, 'Tenda Dome 5-6 orang Rei', 'Size 350 x 250 x 140 cm', 40, 4, '50.000', '', 2),
(19, 'Tenda Dome 6-7 orang Great Outdoor', 'Size (130+230) x 290 x 170 cm', 40, 30, '60.000', '', 2),
(20, 'Tenda Dome 7-8 orang Big Dome', 'Size 300 x 300 x 190 cm', 30, 25, '70.000', '', 2),
(21, 'Tenda Dome Rotary 10-15 orang', 'Size 400 x 400 x 210 cm', 25, 25, '100.000', '', 2),
(22, 'Tenda pramuka biasa + patok 12 pcs', 'Kapasitas 8 - 10 orang', 30, 30, '30.000', '', 2),
(23, 'Sleeping Bag Dacron', 'User High up to 185 cm', 100, 45, '6.000', '', 3),
(24, 'Sleeping Bag Single Polar', 'User High up to 185 cm', 100, 30, '7.000', '', 3),
(25, 'Sleeping Bag Double Polar', 'User High up to 185 cm', 100, 5, '9.000', '', 3),
(26, 'Headlamp Energizer HLD 3', 'Baterai A3 x 3', 40, 20, '7.000', '', 5),
(27, 'Headlamp Energizer HLD 6', 'Baterai A3 x 3', 50, 40, '13.000', '', 5),
(28, 'Headlamp Eiger LED', 'Baterai A3 x 3', 30, 28, '7.000', '', 5),
(29, 'Handlamp Cree Kecil Police', 'Baterai A3 x 3', 50, 4, '6.000', '', 5),
(30, 'Lampu Tenda Cree', 'Baterai A3 x 3', 50, 40, '6.000', '', 5),
(31, 'Kompor Gas Mini Gasmate', 'Tanpa Gas', 100, 20, '10.000', '', 6),
(32, 'Kompor Gas Portable Hi-Cook 103', 'Tanpa Gas', 70, 50, '15.000', '', 6),
(33, 'Nisting', 'Local (1 set = 3 rantang)', 100, 30, '7.000', '', 6),
(34, 'Kompas Bidik', 'Local', 25, 20, '5.000', '', 7),
(35, 'Webbing', 'Local, 5 meter', 40, 30, '5.000', '', 8),
(36, 'Tali Frusik', '1,5 meter (loop) diameter 7mm', 40, 40, '5.000', '', 7),
(37, 'Seat Harness', 'ABC/DMM/Eiger', 50, 30, '40.000', '', 8),
(38, 'Carabiner Screw', 'Eiger UIAA/CAMP', 40, 24, '11.000', '', 8),
(39, 'Figure of Eight', 'CAMP', 40, 40, '11.000', '', 8),
(40, 'Helm Caving, Panjat', 'CAMP Rock Star', 100, 70, '30.000', '', 8),
(41, 'Tali Tambang (non plastik)', 'Diameter 3 cm', 100, 50, '25.000', '', 7),
(42, 'Terpal 3x4 meter', 'Plastik', 100, 20, '12;000', '', 7),
(43, 'Terpal 4x6 meter', 'Plastik', 100, 40, '20.000', '', 7),
(44, 'Patok/Pasak Pramuka ', 'Besi', 150, 40, '500', '', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_brg`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_brg` (
  `id_dbarang` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` int(10) DEFAULT NULL,
  `id_transaksi` int(10) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_dbarang`),
  KEY `id_barang` (`id_barang`),
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_barang`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_barang` (
  `id_jbarang` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jbarang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_jenis_barang`
--

INSERT INTO `tb_jenis_barang` (`id_jbarang`, `jenis_barang`) VALUES
(1, 'Tas'),
(2, 'Tenda'),
(3, 'Peralatan Tidur'),
(4, 'Komunikasi'),
(5, 'Penerangan'),
(6, 'Peralatan Masak'),
(7, 'Lain-lain'),
(8, 'Caving');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `alamat` text,
  `id_account` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_account` (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(150) DEFAULT NULL,
  `alamat` text,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `jenis_identitas` varchar(10) DEFAULT NULL,
  `nomor_identitas` varchar(100) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `id_pegawai` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_jbarang`) REFERENCES `tb_jenis_barang` (`id_jbarang`);

--
-- Ketidakleluasaan untuk tabel `tb_daftar_brg`
--
ALTER TABLE `tb_daftar_brg`
  ADD CONSTRAINT `tb_daftar_brg_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_daftar_brg_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `tb_account` (`id_account`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
