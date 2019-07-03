-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 02:28 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--
CREATE DATABASE IF NOT EXISTS `klinik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `klinik`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(1) NOT NULL DEFAULT '1',
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`, `status`) VALUES
(1, 'Almubarok', 'admin', 'admin', '1', '1'),
(2, 'admin', 'admin123', 'admin123', '1', '0'),
(3, 'Mr. X', 'noname', 'nopassword', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(10) NOT NULL AUTO_INCREMENT,
  `tempat_lahir_dokter` varchar(100) NOT NULL,
  `tanggal_lahir_dokter` date NOT NULL,
  `nama_dokter` varchar(40) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `alamat_dokter` varchar(60) NOT NULL,
  `no_telp_dokter` varchar(20) NOT NULL,
  `jk_dokter` varchar(2) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `level` varchar(1) NOT NULL DEFAULT '2',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `tempat_lahir_dokter`, `tanggal_lahir_dokter`, `nama_dokter`, `spesialis`, `alamat_dokter`, `no_telp_dokter`, `jk_dokter`, `status`, `level`, `username`, `password`) VALUES
(3, 'Bantul', '1978-12-11', 'dr. Herri Kurnia, Sp. A', 'Anak', 'Bantul', '08123456789', 'L', '1', '2', 'herri', 'herri123'),
(4, 'Makassar', '1976-03-16', 'dr. Rizky Aulia Dwiyanti, Sp. M', 'Mata', 'Warung Boto', '08321654987', 'P', '1', '2', 'kiki', 'kiki123'),
(7, 'brebes', '1997-11-04', 'drg. Calicul', 'gigi', 'veteran', '082389347654', 'L', '1', '2', 'calicul', 'calicul'),
(8, 'medan', '1999-03-04', 'dr. Imam', 'umum', 'pasir pengaraian', '082378456737', 'L', '1', '2', 'imam', 'imamaja'),
(9, 'x', '1999-03-27', 'dokter', 'x', 'x', '08239840985989', 'L', '1', '2', 'dokter', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE IF NOT EXISTS `jadwal_dokter` (
  `id_jadwal_dokter` int(10) NOT NULL AUTO_INCREMENT,
  `id_dokter` int(10) NOT NULL,
  `id_poli` int(10) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwal_dokter`),
  KEY `id_poli` (`id_poli`),
  KEY `id_dokter` (`id_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal_dokter`, `id_dokter`, `id_poli`, `hari`, `jam`) VALUES
(1, 3, 1, 'Jumat', 'sore'),
(2, 3, 1, 'Sabtu', 'pagi'),
(3, 7, 2, 'jumat', 'pagi'),
(4, 4, 1, 'jumat', 'pagi');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_perawat`
--

CREATE TABLE IF NOT EXISTS `jadwal_perawat` (
  `id_jadwal_perawat` int(10) NOT NULL AUTO_INCREMENT,
  `id_perawat` int(10) NOT NULL,
  `id_poli` int(10) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwal_perawat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jadwal_perawat`
--

INSERT INTO `jadwal_perawat` (`id_jadwal_perawat`, `id_perawat`, `id_poli`, `hari`, `jam`) VALUES
(1, 3, 1, 'senin', 'pagi');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(10) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `stock` int(10) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `gambar`, `jenis_obat`, `berat`, `harga`, `stock`, `id_supplier`, `status`) VALUES
(1, 'Paracetamol', 'pwq', 'pill', '500mg', 10000, 100, 3, '0'),
(2, 'OBH', 'fiosi', 'sirup', '100ml', 20000, 100, 2, '1'),
(3, 'PCC', 'wkwkw', 'pil', '500mg', 10000, 5, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(100) NOT NULL,
  `tempat_lahir_pasien` varchar(100) NOT NULL,
  `tanggal_lahir_pasien` date NOT NULL,
  `jk_pasien` varchar(100) NOT NULL,
  `gol_darah_pasien` varchar(100) NOT NULL,
  `no_telepon_pasien` varchar(13) NOT NULL,
  `pekerjaan_pasien` varchar(100) NOT NULL,
  `wali_pasien` varchar(100) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `kelurahan_pasien` varchar(100) NOT NULL,
  `kecamatan_pasien` varchar(100) NOT NULL,
  `kota_pasien` varchar(100) NOT NULL,
  `provinsi_pasien` varchar(100) NOT NULL,
  `no_rm` varchar(10) NOT NULL,
  `nik_pasien` varchar(20) NOT NULL,
  `no_kk_pasien` varchar(20) NOT NULL,
  `no_bbjs_pasien` varchar(20) NOT NULL,
  `status_pasien` varchar(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tempat_lahir_pasien`, `tanggal_lahir_pasien`, `jk_pasien`, `gol_darah_pasien`, `no_telepon_pasien`, `pekerjaan_pasien`, `wali_pasien`, `alamat_pasien`, `kelurahan_pasien`, `kecamatan_pasien`, `kota_pasien`, `provinsi_pasien`, `no_rm`, `nik_pasien`, `no_kk_pasien`, `no_bbjs_pasien`, `status_pasien`) VALUES
(1, 'A', 'a', '2018-12-03', 'Laki-laki', 'A', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', '1234231345', 'a', 'a', '32', '0'),
(2, 'desy', 'psp', '1998-12-20', 'Perempuan', 'B', '0867986587546', 'mahasiswa', 'agus', 'pasir', 'gelora', 'rambah', 'pasir pengaraian', 'riau', '604723', '09320982390', '83409', '8309', '1'),
(3, 'abc', 'b', '2000-08-11', 'Laki-laki', 'A', '0989970909', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '270364', '7890', '79075788', '67890', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(100) NOT NULL,
  `tempat_lahir_pegawai` varchar(100) NOT NULL,
  `tgl_lahir_pegawai` date NOT NULL,
  `alamat_pegawai` varchar(100) NOT NULL,
  `no_tlpn_pegawai` varchar(13) NOT NULL,
  `jk_pegawai` varchar(10) NOT NULL,
  `tgl_masuk_sebagai_pegawai` varchar(100) NOT NULL,
  `level` varchar(1) NOT NULL DEFAULT '',
  `status` varchar(1) NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir_pegawai`, `tgl_lahir_pegawai`, `alamat_pegawai`, `no_tlpn_pegawai`, `jk_pegawai`, `tgl_masuk_sebagai_pegawai`, `level`, `status`, `username`, `password`) VALUES
(3, 'Ika', 'riau', '1998-11-05', 'kusuma negara', '083278459823', 'P', '2018-11-07', '4', '1', 'ika123', 'ika123'),
(4, 'ice', 'pasir pengaraian', '1999-04-23', 'kali urang', '082378298237', 'P', '2018-11-25', '3', '1', 'icedoang', 'icedoang'),
(5, 'zulva', 'psp', '1995-02-20', 'magelang', '088328382992', 'L', '2018-11-13', '5', '0', 'zulva', 'zulvahendri'),
(6, 'q', 'iojoi', '2018-10-01', 'iu', '90023092309', 'L', '2016-08-08', '6', '0', 'kasir', 'jjsee'),
(7, 'apoteker', 'x', '2000-03-23', 'x', '08337838938', 'L', '2010-02-08', '3', '1', 'apoteker', 'apoteker'),
(8, 'perawat', 'x', '2018-11-26', 'x', '082179389298', 'L', '2018-12-04', '4', '1', 'perawat', 'perawat'),
(9, 'resepsionis', 'x', '2018-12-04', 'x', '08327282', 'L', '2018-12-04', '5', '1', 'resepsionis', 'resepsionis'),
(10, 'kasir', 'x', '2018-11-26', 'x', '083829829832', 'P', '2018-11-26', '6', '1', 'kasir', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE IF NOT EXISTS `periksa` (
  `id_periksa` int(10) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) NOT NULL,
  `no_rm` varchar(100) NOT NULL,
  `id_resep` int(11) DEFAULT NULL,
  `tgl_periksa` date NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `jumlah_tagihan` int(11) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `jam` varchar(100) NOT NULL,
  `status_bayar` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id_periksa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id_periksa`, `id_pasien`, `no_rm`, `id_resep`, `tgl_periksa`, `id_dokter`, `id_pegawai`, `jumlah_tagihan`, `status`, `jam`, `status_bayar`) VALUES
(1, 1, '1234231345', 1, '2018-11-30', 3, 4, 0, '1', '', '1'),
(2, 1, '1', 1, '2018-12-01', 4, 5, 0, '1', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
  `id_poli` int(10) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `status`) VALUES
(1, 'Poli Mata', '1'),
(2, 'Poli Penyakit Dalam', '1'),
(3, 'Poli Jantung', '1'),
(4, 'Poli THT', '0'),
(5, 'Poli Anak', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `no_rm` int(11) NOT NULL,
  `diagnosa` text NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  UNIQUE KEY `no_rm` (`no_rm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rm`, `diagnosa`, `riwayat_penyakit`) VALUES
(1, 'sakit aja', 'belum tau');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL,
  `id_dokter` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_resep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_obat`, `id_dokter`, `tanggal`, `status`) VALUES
(1, 1, 1, '2018-07-12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(10) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `no_telp_supplier` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `Alamat`, `no_telp_supplier`, `email`, `status`) VALUES
(1, 'Joko', 'gunung kidul', '082398785634', 'joko@gmail.com', '0'),
(2, 'mahmud', 'magelang', '085678654365', 'mahmud@gmail.com', '1'),
(3, 'Banu', 'Klaten', '087589567854', 'banu@gmail.com', '1'),
(4, 'Inun', 'bantul', '086798237698', 'inun@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_obat_in`
--

CREATE TABLE IF NOT EXISTS `transaksi_obat_in` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_box` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi_obat_in`
--

INSERT INTO `transaksi_obat_in` (`id_transaksi`, `tgl_transaksi`, `id_supplier`, `id_obat`, `jumlah_box`, `totalharga`, `status`) VALUES
(1, '2018-07-12', 1, 1, 10, 25000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_obat_out`
--

CREATE TABLE IF NOT EXISTS `transaksi_obat_out` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaksi_obat_out`
--

INSERT INTO `transaksi_obat_out` (`id_transaksi`, `tgl_transaksi`, `id_periksa`, `id_pasien`, `id_obat`, `jumlah_obat`, `totalharga`, `status`) VALUES
(1, '2018-12-08', 1, 1, 1, 50, 100000, '1'),
(2, '2017-02-03', 2, 1, 1, 3, 15000, '0'),
(3, '2018-03-06', 3, 2, 5, 5, 25000, '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `jadwal_dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`),
  ADD CONSTRAINT `jadwal_dokter_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
