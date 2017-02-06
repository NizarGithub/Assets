-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2015 at 07:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL,
  `topik` varchar(150) NOT NULL,
  `tgl` varchar(2) NOT NULL,
  `bln` varchar(2) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `topik`, `tgl`, `bln`, `thn`, `tanggal`, `keterangan`, `aktif`) VALUES
(9, 'Rapat kilang dilapangan', '12', '08', '2015', '2015-08-12', '&lt;p&gt;Mulai pukul 9 pagi WIB&lt;/p&gt;\r\n', 'Y'),
(10, 'Rapat pembahasan kilang', '12', '08', '2015', '2015-08-12', '&lt;p&gt;Akan dimulai pukul 09:00 WIB sampai dengan selesai&lt;/p&gt;\r\n', 'Y'),
(11, 'Rapat project lapangan', '13', '08', '2015', '2015-08-13', '&lt;p&gt;Rapat ini akan dimulai pada pukul 09:00 WIB sampai jam istirahat&lt;/p&gt;\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `alat_ndt`
--

DROP TABLE IF EXISTS `alat_ndt`;
CREATE TABLE IF NOT EXISTS `alat_ndt` (
  `id_alat` int(11) NOT NULL,
  `description` text NOT NULL,
  `merk` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `peminjam` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_ndt`
--

INSERT INTO `alat_ndt` (`id_alat`, `description`, `merk`, `serial`, `jumlah`, `ket`, `peminjam`) VALUES
(1, 'This is a example data from NDT tables', 'IBeESNay', '989-NHJ07', '89', 'This is a example data from NDT tables', 'Nay ');

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

DROP TABLE IF EXISTS `anggaran`;
CREATE TABLE IF NOT EXISTS `anggaran` (
  `id_angg` int(11) NOT NULL,
  `description` text NOT NULL,
  `anggaran` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id_angg`, `description`, `anggaran`, `tahun`, `pic`, `status`) VALUES
(1, '&lt;p&gt;sample data&lt;/p&gt;\r\n', 'sample data', 2015, 'sample data', 'sample data');

-- --------------------------------------------------------

--
-- Table structure for table `around`
--

DROP TABLE IF EXISTS `around`;
CREATE TABLE IF NOT EXISTS `around` (
  `id_ar` int(11) NOT NULL,
  `no` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `kepada` text NOT NULL,
  `tembusan` varchar(20) NOT NULL,
  `perihal` text NOT NULL,
  `t_lanjut` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `around`
--

INSERT INTO `around` (`id_ar`, `no`, `tgl`, `kepada`, `tembusan`, `perihal`, `t_lanjut`) VALUES
(1, '111111', '2015-07-15', 'sample data', 'sample data', '&lt;p&gt;sample data&lt;/p&gt;\r\n', 'sample dat');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_pekerja`
--

DROP TABLE IF EXISTS `artikel_pekerja`;
CREATE TABLE IF NOT EXISTS `artikel_pekerja` (
  `id_art` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel_pekerja`
--

INSERT INTO `artikel_pekerja` (`id_art`, `judul`, `tahun`, `pengarang`, `ket`, `filename`) VALUES
(1, 'Sampel judul artikel pkerja', 2016, 'IBeESNay', 'sampel data untuk keterangan', 'Artikel-pekerja_161224_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `atk`
--

DROP TABLE IF EXISTS `atk`;
CREATE TABLE IF NOT EXISTS `atk` (
  `id_atk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atk`
--

INSERT INTO `atk` (`id_atk`, `nama`, `jumlah`, `keterangan`) VALUES
(2, 'Pensil', '4', '-'),
(3, 'Ball poin', '6', '-'),
(4, 'Penghapus', '3', '-');

-- --------------------------------------------------------

--
-- Table structure for table `bejana`
--

DROP TABLE IF EXISTS `bejana`;
CREATE TABLE IF NOT EXISTS `bejana` (
  `id_bejana` int(11) NOT NULL,
  `sn` varchar(100) NOT NULL,
  `no_ijin` varchar(100) NOT NULL,
  `ijin_habis` date NOT NULL,
  `merk` varchar(50) NOT NULL,
  `kapasitas` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bejana`
--

INSERT INTO `bejana` (`id_bejana`, `sn`, `no_ijin`, `ijin_habis`, `merk`, `kapasitas`) VALUES
(8, '8768', '887', '1998-09-23', 'IBeESNay', '98'),
(9, '8768', '887', '2015-09-24', 'IBeESNay', '8'),
(10, '8768', '887', '2015-09-25', 'IBeESNay', '8'),
(11, '8768', '887', '2015-09-26', 'IBeESNay', '98'),
(12, '8768', '887', '1998-09-27', 'IBeESNay', '87'),
(13, '8768', '887', '2015-08-02', 'IBeESNay', '87'),
(14, '8768', '887', '1998-09-29', 'IBeESNay', '87');

-- --------------------------------------------------------

--
-- Table structure for table `cat_book`
--

DROP TABLE IF EXISTS `cat_book`;
CREATE TABLE IF NOT EXISTS `cat_book` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_book`
--

INSERT INTO `cat_book` (`id_cat`, `name`) VALUES
(1, 'Tak berkategori'),
(2, 'Unit 11'),
(3, 'Unit 25'),
(4, 'Unit 12'),
(5, 'Unit 14');

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

DROP TABLE IF EXISTS `cleaning`;
CREATE TABLE IF NOT EXISTS `cleaning` (
  `id_cl` int(11) NOT NULL,
  `tagno` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaning`
--

INSERT INTO `cleaning` (`id_cl`, `tagno`, `schedule`, `ket`) VALUES
(1, '98-G087', '2015-08-07', 'sample data untuk keterangan'),
(3, '98-JHN', '2015-08-02', '-'),
(4, '09-NJU', '2015-08-09', '-'),
(5, '96-JUK', '2015-08-04', '-');

-- --------------------------------------------------------

--
-- Table structure for table `cormon`
--

DROP TABLE IF EXISTS `cormon`;
CREATE TABLE IF NOT EXISTS `cormon` (
  `id_cormon` int(11) NOT NULL,
  `unit_cor` varchar(100) NOT NULL,
  `equipment` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cormon`
--

INSERT INTO `cormon` (`id_cormon`, `unit_cor`, `equipment`, `filename`) VALUES
(2, 'sample data', 'sample data', 'Cormon_476013_emerald_dragon_ps_gradients_31689.zip');

-- --------------------------------------------------------

--
-- Table structure for table `corner_book`
--

DROP TABLE IF EXISTS `corner_book`;
CREATE TABLE IF NOT EXISTS `corner_book` (
  `id_eb` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corner_book`
--

INSERT INTO `corner_book` (`id_eb`, `judul`, `tahun`, `pengarang`, `ket`, `filename`) VALUES
(1, 'Corner 1', 1999, 'IBeESNay', '&lt;p&gt;Hanya kamu yang kamu inginkan&lt;/p&gt;\r\n', 'CB_309570_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `corro_mapp`
--

DROP TABLE IF EXISTS `corro_mapp`;
CREATE TABLE IF NOT EXISTS `corro_mapp` (
  `id_cm` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `cm` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(150) NOT NULL,
  `size` varchar(10) NOT NULL,
  `hits` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corro_mapp`
--

INSERT INTO `corro_mapp` (`id_cm`, `unit`, `cm`, `tahun`, `ket`, `filename`, `size`, `hits`) VALUES
(1, 'Unit 1', 'CM', '1999', '-', 'Corrosion-mapp_842346_ujian_online.zip', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

DROP TABLE IF EXISTS `css`;
CREATE TABLE IF NOT EXISTS `css` (
  `id_css` int(11) NOT NULL,
  `edisi` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`id_css`, `edisi`, `tahun`, `filename`) VALUES
(2, 'Sample 1', 2001, ''),
(3, 'Sample 2', 2002, ''),
(4, 'Sample 3', 2003, ''),
(5, 'Sample 4', 2004, ''),
(6, 'Sample 5', 2005, ''),
(7, 'ddd', 0000, 'naynedyjas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

DROP TABLE IF EXISTS `daemons`;
CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

DROP TABLE IF EXISTS `drawing`;
CREATE TABLE IF NOT EXISTS `drawing` (
  `id_draw` int(11) NOT NULL,
  `unit_draw` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`id_draw`, `unit_draw`, `description`, `filename`) VALUES
(2, 'sample data', 'sample data', 'Others-drawing_445800_francisco_lucas_font_6493.zip');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(11) NOT NULL,
  `tag_no` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `material` varchar(50) NOT NULL,
  `temp_design` varchar(30) NOT NULL,
  `temp_operasi` varchar(30) NOT NULL,
  `pre_design` varchar(30) NOT NULL,
  `pre_operasi` varchar(30) NOT NULL,
  `fluida_service` varchar(50) NOT NULL,
  `corrosion` varchar(50) NOT NULL,
  `dimension` varchar(30) NOT NULL,
  `jumlah_tube` varchar(10) NOT NULL,
  `thickness_design` varchar(30) NOT NULL,
  `thickness_actual` varchar(30) NOT NULL,
  `thn_buat` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_ndt`
--

DROP TABLE IF EXISTS `form_ndt`;
CREATE TABLE IF NOT EXISTS `form_ndt` (
  `id_form` int(11) NOT NULL,
  `description` text NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_ndt`
--

INSERT INTO `form_ndt` (`id_form`, `description`, `ket`, `filename`) VALUES
(1, '&lt;p&gt;This is a example data from FORM tables&lt;/p&gt;\r\n', 'This is a example data from FORM tables', 'FNDT_213653_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `foto_rutin`
--

DROP TABLE IF EXISTS `foto_rutin`;
CREATE TABLE IF NOT EXISTS `foto_rutin` (
  `id_fr` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `ket` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_rutin`
--

INSERT INTO `foto_rutin` (`id_fr`, `foto`, `ket`, `aktif`) VALUES
(2, 'Foto_Rutin_54011_c2.png', '&lt;p&gt;sample data&amp;nbsp&lt;/p&gt;\r\n', 'Y'),
(3, '', 'Bike To Work', 'N'),
(4, 'Foto_Rutin_75317_C360_2014-06-13-06-23-09-809.jpg', '-', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `foto_ta`
--

DROP TABLE IF EXISTS `foto_ta`;
CREATE TABLE IF NOT EXISTS `foto_ta` (
  `id_fta` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `ket` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_ta`
--

INSERT INTO `foto_ta` (`id_fta`, `foto`, `ket`, `aktif`) VALUES
(7, 'Foto_TA_44341_slide-4.jpg', '-', 'Y'),
(8, 'Foto_TA_35592_image-bg.jpg', '-', 'Y'),
(9, '', 'Bike To Work', 'Y'),
(10, 'Foto_TA_92019_20140613_062413.jpg', 'Bike To Work', 'Y'),
(11, 'Foto_TA_83037_C360_2014-06-13-06-22-54-090.jpg', 'Bike To Work', 'Y'),
(12, 'Foto_TA_41954_C360_2014-06-13-06-24-10-988.jpg', 'Bike To Work', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `furnace`
--

DROP TABLE IF EXISTS `furnace`;
CREATE TABLE IF NOT EXISTS `furnace` (
  `id_furnace` int(11) NOT NULL,
  `tag_no` varchar(20) NOT NULL,
  `sn` varchar(15) NOT NULL,
  `size` varchar(10) NOT NULL,
  `thickness` varchar(30) NOT NULL,
  `material` varchar(40) NOT NULL,
  `service` text NOT NULL,
  `press` varchar(10) NOT NULL,
  `temp` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `skkp` varchar(100) NOT NULL,
  `expired` date NOT NULL,
  `area` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `digunakan` year(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furnace`
--

INSERT INTO `furnace` (`id_furnace`, `tag_no`, `sn`, `size`, `thickness`, `material`, `service`, `press`, `temp`, `date`, `skkp`, `expired`, `area`, `keterangan`, `digunakan`) VALUES
(1, '14-F-105', 'F5672', '219 mm', '18,24 mm', 'TP316L SS', 'HCH2', '79 Kg/cm2', '360 C', '2010-05-10', '5794/48-6/F/SKPP/18.01/DJM/2010', '2013-05-15', 'LGO-HTU', 'Sedang proses sertifikasi', 1996),
(2, '11-F-101', 'R-2156301F', '176 mm', '7,11 mm', 'A312 P9', 'DESALTED CRUDE', '10 Kg/cm2', '280 C', '2010-07-19', '-', '2013-05-18', 'CDU', '-', 1996);

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

DROP TABLE IF EXISTS `gammu`;
CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Table structure for table `group_pegawai`
--

DROP TABLE IF EXISTS `group_pegawai`;
CREATE TABLE IF NOT EXISTS `group_pegawai` (
  `id_group` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_pegawai`
--

INSERT INTO `group_pegawai` (`id_group`, `nama`, `ket`) VALUES
(1, 'Stationary &amp; Statutory Engineer', '-'),
(2, 'Rotating Equipment Engineer', '-'),
(3, 'Statutory Engineer', '-'),
(4, 'Lead of Stationary &amp; Statutory Eq. Inspection Engineer', '-'),
(5, 'Ref. Ins &amp; Cons Engineer', '-'),
(6, 'Jr Engineer II Stat. Insp.', '-'),
(7, 'Junior Engineer II Stat. Insp.', '-'),
(8, 'Junior Engineer I Stat. Insp.', '-'),
(9, 'Technician I Stationary Insp.', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ilmiah`
--

DROP TABLE IF EXISTS `ilmiah`;
CREATE TABLE IF NOT EXISTS `ilmiah` (
  `id_ilm` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilmiah`
--

INSERT INTO `ilmiah` (`id_ilm`, `judul`, `tahun`, `pengarang`, `ket`, `filename`) VALUES
(1, 'Teknik perbaikan condensor rusak', 1998, 'SunardI', 'Teknik ini biasa dilakukan untuk mengatasi maslah pada inti mesin', 'Ilmiah_317474_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Triggers `inbox`
--
DROP TRIGGER IF EXISTS `inbox_timestamp`;
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox`
 FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_oncall`
--

DROP TABLE IF EXISTS `jadwal_oncall`;
CREATE TABLE IF NOT EXISTS `jadwal_oncall` (
  `id_jadwal` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tgl` varchar(2) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_akhir` varchar(2) NOT NULL,
  `bulan_akhir` varchar(2) NOT NULL,
  `tahun_akhir` varchar(4) NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_oncall`
--

INSERT INTO `jadwal_oncall` (`id_jadwal`, `id_petugas`, `tgl`, `bulan`, `tahun`, `tanggal`, `tgl_akhir`, `bulan_akhir`, `tahun_akhir`, `tanggal_akhir`, `keterangan`, `aktif`) VALUES
(4, 3, '14', '08', '2015', '2015-08-14', '', '', '', '0000-00-00', '-', 'Y'),
(10, 21, '11', '08', '2015', '2015-08-11', '', '', '', '0000-00-00', '-', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ndt`
--

DROP TABLE IF EXISTS `jenis_ndt`;
CREATE TABLE IF NOT EXISTS `jenis_ndt` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_ndt`
--

INSERT INTO `jenis_ndt` (`id_jenis`, `nama`, `ket`) VALUES
(1, 'Visual', '-'),
(2, 'LPT', '-'),
(3, 'Thermography', '-'),
(4, 'Alloy Analyzer', '-'),
(5, 'Thickness', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

DROP TABLE IF EXISTS `kursus`;
CREATE TABLE IF NOT EXISTS `kursus` (
  `id_kurs` int(11) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `uploader` varchar(5) NOT NULL DEFAULT '1',
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kurs`, `materi`, `filename`, `uploader`, `aktif`) VALUES
(1, 'Dunia Komputer', 'Materi_619903_ujian_online.zip', '1', 'Y'),
(2, 'Tentang perbaikan Pipe', 'Materi_230072_jasnay1tr.png', '1', 'Y'),
(3, 'Cara Memperbaiki Mesin Tanki', 'Materi_73974_jasnay1tr.png', '11', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_bulanan`
--

DROP TABLE IF EXISTS `laporan_bulanan`;
CREATE TABLE IF NOT EXISTS `laporan_bulanan` (
  `id_lap` int(11) NOT NULL,
  `description` text NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` year(4) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_bulanan`
--

INSERT INTO `laporan_bulanan` (`id_lap`, `description`, `bulan`, `tahun`, `filename`) VALUES
(1, 'sample data deskripsi laporan', 'Juni', 1996, 'Laporan-bulanan_498748_75_photoshop_gradients_31685.zip');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_ndt`
--

DROP TABLE IF EXISTS `laporan_ndt`;
CREATE TABLE IF NOT EXISTS `laporan_ndt` (
  `id_ndt` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `requestor` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `permintaan` text NOT NULL,
  `tag_no` varchar(100) NOT NULL,
  `filename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

DROP TABLE IF EXISTS `log_book`;
CREATE TABLE IF NOT EXISTS `log_book` (
  `id_log` int(11) NOT NULL,
  `unit_log` varchar(100) NOT NULL,
  `equipment` varchar(100) NOT NULL,
  `fact` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id_log`, `unit_log`, `equipment`, `fact`, `rekomendasi`, `ket`, `filename`) VALUES
(1, 'sample data', 'sample data', 'sample data', 'sample data', '&lt;p&gt;sample data&lt;/p&gt;\r\n', 'Log-book_66802_35_photoshop_7_tree_brush_39759.zip');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

DROP TABLE IF EXISTS `log_user`;
CREATE TABLE IF NOT EXISTS `log_user` (
  `id_log` int(11) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `aktifitas` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id_log`, `id_user`, `aktifitas`, `tanggal`, `waktu`) VALUES
(1, '1', 'Menghapus data furnace', '2015-07-04', '13:09:18'),
(3, '13', 'Mengubah data profil pengguna', '2015-08-11', '12:57:27'),
(4, '1', 'Mengubah data profil pengguna', '2015-08-12', '15:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `member_sms`
--

DROP TABLE IF EXISTS `member_sms`;
CREATE TABLE IF NOT EXISTS `member_sms` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `hits` int(11) DEFAULT '0',
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_sms`
--

INSERT INTO `member_sms` (`id_member`, `nama`, `no_telp`, `hits`, `aktif`) VALUES
(4, 'SunardI', '+6285290156462', 73, 'Y'),
(5, 'Agis Rahma Herdiana', '+6285987898999', 0, 'Y'),
(6, 'M. Surya Pradana', '+6285676554654', 0, 'Y'),
(7, 'IBeESNay', '+6285290167654', 0, 'Y'),
(8, 'Dudin Nurjaman', '+6285724339553', 8, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `metering`
--

DROP TABLE IF EXISTS `metering`;
CREATE TABLE IF NOT EXISTS `metering` (
  `id_met` int(11) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `no_ijin` varchar(100) NOT NULL,
  `ijin_habis` date NOT NULL,
  `tag_no` varchar(100) NOT NULL,
  `prover` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(10) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `test` date NOT NULL,
  `link_sn` varchar(20) NOT NULL,
  `ijin` varchar(5) NOT NULL,
  `berita` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metering`
--

INSERT INTO `metering` (`id_met`, `sn`, `no_ijin`, `ijin_habis`, `tag_no`, `prover`, `service`, `type`, `size`, `volume`, `manufacture`, `remark`, `test`, `link_sn`, `ijin`, `berita`) VALUES
(0, '2222222', '11111111', '2015-07-10', '111111', 'sample datas', 'sample datas', 'sample datas', '461', '461', 'sample datas', 'sample datas', '2015-07-23', 'sample datas', 'N', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(11) NOT NULL,
  `module` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id_module`, `module`, `ket`, `aktif`) VALUES
(2, 'E-Book', '&lt;p&gt;Elctronic Book&lt;/p&gt;\r\n', 'Y'),
(3, 'Foto', '&lt;p&gt;Image Capture&lt;/p&gt;\r\n', 'Y'),
(4, 'Engine Docs', '&lt;p&gt;Engine Document&lt;/p&gt;\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ndt_personil`
--

DROP TABLE IF EXISTS `ndt_personil`;
CREATE TABLE IF NOT EXISTS `ndt_personil` (
  `id_personil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qualifikasi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndt_personil`
--

INSERT INTO `ndt_personil` (`id_personil`, `nama`, `qualifikasi`, `alamat`, `no_telp`, `ket`) VALUES
(2, 'Nay', 'Graduate', '&lt;p&gt;IBS&lt;/p&gt;\r\n', '08989w', '&lt;p&gt;-&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `onstream`
--

DROP TABLE IF EXISTS `onstream`;
CREATE TABLE IF NOT EXISTS `onstream` (
  `id_ons` int(11) NOT NULL,
  `unit_ons` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fact` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onstream`
--

INSERT INTO `onstream` (`id_ons`, `unit_ons`, `description`, `fact`, `rekomendasi`, `ket`, `filename`) VALUES
(1, '', 'sample data deskripsi', 'sample data fact', 'sample data rekomendasi', 'sample data keterangan', 'Onstream-inspection_580139_emerald_dragon_ps_gradients_31689.zip');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

DROP TABLE IF EXISTS `outbox`;
CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Triggers `outbox`
--
DROP TRIGGER IF EXISTS `outbox_timestamp`;
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

DROP TABLE IF EXISTS `outbox_multipart`;
CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pelat_pekerja`
--

DROP TABLE IF EXISTS `pelat_pekerja`;
CREATE TABLE IF NOT EXISTS `pelat_pekerja` (
  `id_pp` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `filename` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelat_pekerja`
--

INSERT INTO `pelat_pekerja` (`id_pp`, `keterangan`, `filename`) VALUES
(1, 'Daftar Pelatihan Pekerja Tahun 2015', 'Pelatihan-pekerja_918762_anarchistic_font_6491.zip');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

DROP TABLE IF EXISTS `pengaturan`;
CREATE TABLE IF NOT EXISTS `pengaturan` (
  `ID` varchar(10) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_url` varchar(100) NOT NULL,
  `app_email` varchar(50) NOT NULL,
  `favicon` varchar(150) NOT NULL,
  `jumlah_paging` int(5) NOT NULL,
  `auto_reply_sms` enum('Yes','No') NOT NULL,
  `register_member_sms` enum('Yes','No') NOT NULL,
  `register_user` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`ID`, `app_name`, `app_url`, `app_email`, `favicon`, `jumlah_paging`, `auto_reply_sms`, `register_member_sms`, `register_user`) VALUES
('ID_1135', 'EDMS - Pertamina RU VI Balongan', 'http://www.ibeesnay.com/pertamina/', 'ibeesnay@yahoo.com', '', 15, 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_oncall`
--

DROP TABLE IF EXISTS `petugas_oncall`;
CREATE TABLE IF NOT EXISTS `petugas_oncall` (
  `id_petugas` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `kantor` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_oncall`
--

INSERT INTO `petugas_oncall` (`id_petugas`, `id_group`, `nama`, `email`, `alamat`, `no_telp`, `kantor`, `foto`, `aktif`) VALUES
(3, 8, 'Arditya Raharja', 'arditya.raharja@pertamina.com', 'Jl. Bontang No. 430 BP', '0811299418', '6353', 'Petugas_OnCall_54204_749812.jpg', 'N'),
(7, 4, 'Agus Wurlijanto', 'wurlijanto@pertamina.com', '&lt;p&gt;Jl. Plaju No.13 BP&lt;/p&gt;', '08112425922', '6341', 'Petugas_OnCall_95711_713872.jpg', 'N'),
(8, 5, 'Mutamakin', 'mutamakin@pertamina.com', '&lt;p&gt;Jl. P.Sambu No.68 BP&lt;/p&gt;\r\n', '08156419317', '6348', 'Petugas_OnCall_97246_733628.jpg', 'N'),
(9, 6, 'Dedy Apriyadi', 'dedy.apriyadi@pertamina.com', '&lt;p&gt;Jl. Dumai&amp;nbsp;No. 114&lt;/p&gt;', '081511012131', '6346', 'Petugas_OnCall_93218_upload.png', 'N'),
(10, 6, 'Agustinus Pindoan Panjaitan', 'agustinus.pp@pertamina.com', '&lt;p&gt;Jl. Dumai 3 No. 114&lt;/p&gt;', '089630873823', '6343', 'Petugas_OnCall_66506_upload.png', 'N'),
(11, 7, 'Dani Cahyono', 'danicahyono@pertamina.com', '&lt;p&gt;Jl. Cilacap IV No. 221 BP&lt;/p&gt;\r\n', '085220100840', '6345', 'Petugas_OnCall_59206_747873.jpg', 'N'),
(12, 7, 'Mirwan Prasetiyo Soeweify', 'mirwan.prasetiyo@pertamina.com', '&lt;p&gt;Jl. Bontang IV No. 488 BP&lt;/p&gt;\r\n', '081380000696', '6355', 'Petugas_OnCall_15711_748653.jpg', 'N'),
(13, 8, 'Hasta Yustika Adi', 'hasta.adi@pertamina.com', '&lt;p&gt;Jl. Bontang II No.431 BP&lt;/p&gt;\r\n', '08122981413', '6356', 'Petugas_OnCall_51125_749822.jpg', 'N'),
(14, 8, 'Yanto Karnosaputra', 'yanto.karnosaputra@pertamina.com', '&lt;p&gt;Jl. Bontang II No. 432 BP&lt;/p&gt;\r\n', '085222229649', '6352', 'Petugas_OnCall_90657_750573.jpg', 'Y'),
(15, 8, 'Haeckel Bayyan Amil Valerat', 'haeckal.valerat@pertamina.com', '&lt;p&gt;Jl. Cilacap III No. 193 BP&lt;/p&gt;\r\n', '081313355827', '6350', 'Petugas_OnCall_62030_750923.jpg', 'N'),
(16, 8, 'Urfiyan Indra Lokavani', 'urfiyan.lokavani@pertamina.com', '&lt;p&gt;Jl. Cilacap II No. 138 BP&lt;/p&gt;\r\n', '085224315988', '6354', 'Petugas_OnCall_31827_750936.jpg', 'N'),
(17, 8, 'Brammantyo Nugroho', 'brammantyo.nugroho@pertamina.com', '&lt;p&gt;Jl. Cilacap III No.194 BP&lt;/p&gt;\r\n', '081315156453', '6344', 'Petugas_OnCall_40917_751809.jpg', 'N'),
(18, 8, 'Heri Sudrajat', 'heri.sudrajat@pertamina.com', '&lt;p&gt;Jl. Cilacap II No.155 BP&lt;/p&gt;\r\n', '087738483538', '6357', 'Petugas_OnCall_77905_751825.jpg', 'N'),
(19, 8, 'Bayu Suryawan', 'bayu.suryawan@pertamina.com', '&lt;p&gt;Jl. Cilacap I No.124 BP&lt;/p&gt;\r\n', '081235723531', '6621', 'Petugas_OnCall_76879_752033.jpg', 'N'),
(20, 8, 'Yosua', 'yosua2@pertamina.com', '&lt;p&gt;Jl. Cilacap III No.196 BP&lt;/p&gt;\r\n', '081350244295', '6347', 'Petugas_OnCall_39783_752188.jpg', 'N'),
(21, 8, 'Raswita', 'raswita@pertamina.com', '&lt;p&gt;Desa Serengseng Blok Lurah Kec. Krangkeng&lt;/p&gt;\r\n', '081313111313', '6349', 'Petugas_OnCall_62440_748469.jpg', 'N'),
(22, 8, 'Zamzam Khalidin', 'zamzam.khalidin@pertamina.com', '&lt;p&gt;-&lt;/p&gt;\r\n', '085659266984', '6622', 'Petugas_OnCall_67173_748504.jpg', 'N'),
(23, 8, 'Muhamad Fanani', 'muhamad.fanani@pertamina.com', '&lt;p&gt;Jl. Cilacap III NO.195 BP&lt;/p&gt;', '081221112136', '-', 'Petugas_OnCall_92260_upload.png', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2015-06-22 05:43:21', '2015-06-22 05:07:01', '2015-06-22 05:43:31', 'yes', 'yes', '354429048179421', 'Gammu 1.33.0, Windows XP SP3, GCC 4.7, MinGW 3.11', 0, 27, 7, 7);

--
-- Triggers `phones`
--
DROP TRIGGER IF EXISTS `phones_timestamp`;
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pink_book`
--

DROP TABLE IF EXISTS `pink_book`;
CREATE TABLE IF NOT EXISTS `pink_book` (
  `id_pb` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL DEFAULT '0',
  `filename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pipe`
--

DROP TABLE IF EXISTS `pipe`;
CREATE TABLE IF NOT EXISTS `pipe` (
  `id_pipe` int(11) NOT NULL,
  `line_no` varchar(15) NOT NULL,
  `ins` varchar(5) NOT NULL,
  `nps` varchar(10) NOT NULL,
  `nps_sch` varchar(150) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `vl` varchar(10) NOT NULL,
  `untuk` varchar(50) NOT NULL,
  `press_desg` decimal(10,0) NOT NULL,
  `press_opr` decimal(10,0) NOT NULL,
  `temp_desg` varchar(5) NOT NULL,
  `temp_opr` varchar(5) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pipe`
--

INSERT INTO `pipe` (`id_pipe`, `line_no`, `ins`, `nps`, `nps_sch`, `dari`, `service`, `vl`, `untuk`, `press_desg`, `press_opr`, `temp_desg`, `temp_opr`, `remarks`) VALUES
(2, 'sample data', 'sampl', 'sample dat', 'sample data', 'sample data', 'sample data', 'sample dat', 'sample data', '0', '0', 'sampl', 'sampl', 'sample data');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_prod` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `produksi` varchar(100) NOT NULL,
  `fungsi` text NOT NULL,
  `asal` varchar(30) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_prod`, `merk`, `produksi`, `fungsi`, `asal`, `agent`, `kontak`, `ket`, `filename`) VALUES
(1, 'Nokia', '', 'Nelpon', 'Indonesia', 'Telkomsel', '098778878', '-', 'Produk_278320_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `quality_plan`
--

DROP TABLE IF EXISTS `quality_plan`;
CREATE TABLE IF NOT EXISTS `quality_plan` (
  `id_qp` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `equipment` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(150) NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_plan`
--

INSERT INTO `quality_plan` (`id_qp`, `unit`, `equipment`, `ket`, `filename`, `hits`) VALUES
(1, 'VI', 'sampel data equipment', 'sampel data keterangan', 'Quality-plan_623596_ujian_online.zip', 0);

-- --------------------------------------------------------

--
-- Table structure for table `read_coc`
--

DROP TABLE IF EXISTS `read_coc`;
CREATE TABLE IF NOT EXISTS `read_coc` (
  `unit` varchar(20) NOT NULL,
  `id_rcoc` int(11) NOT NULL,
  `readness` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_coc`
--

INSERT INTO `read_coc` (`unit`, `id_rcoc`, `readness`, `tahun`, `ket`, `filename`) VALUES
('', 1, 'sample data untuk readness', 2015, 'sample data untuk keterangan', 'COC_830657_emerald_dragon_ps_gradients_31689.zip');

-- --------------------------------------------------------

--
-- Table structure for table `read_ta`
--

DROP TABLE IF EXISTS `read_ta`;
CREATE TABLE IF NOT EXISTS `read_ta` (
  `id_rta` int(11) NOT NULL,
  `readness` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rek_coc`
--

DROP TABLE IF EXISTS `rek_coc`;
CREATE TABLE IF NOT EXISTS `rek_coc` (
  `id_coc` int(11) NOT NULL,
  `description` text NOT NULL,
  `no` varchar(100) NOT NULL,
  `fact` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rek_ta`
--

DROP TABLE IF EXISTS `rek_ta`;
CREATE TABLE IF NOT EXISTS `rek_ta` (
  `id_ta` int(11) NOT NULL,
  `description` text NOT NULL,
  `no` varchar(100) NOT NULL,
  `fact` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seig`
--

DROP TABLE IF EXISTS `seig`;
CREATE TABLE IF NOT EXISTS `seig` (
  `id_seig` int(11) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seig`
--

INSERT INTO `seig` (`id_seig`, `description`, `filename`) VALUES
(2, 'sample data', 'SEIG_297241_tree_brush_40278.zip');

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

DROP TABLE IF EXISTS `sentitems`;
CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2015-06-22 01:36:19', '2015-06-22 01:36:02', '2015-06-22 01:36:19', NULL, '004D00610061006600200066006F0072006D00610074002000610074006100750020006B006500790077006F007200640020007000650072006D0069006E007400610061006E002000730061006C00610068002E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Maaf format atau keyword permintaan salah.', 1, '', 1, 'SendingOKNoReport', -1, 239, 255, ''),
('2015-06-22 01:37:54', '2015-06-22 01:37:35', '2015-06-22 01:37:54', NULL, '004A007500640075006C0020003A00200043006100720061002000420061006700610069006D0061006E00610020004D0065006D0062007500610074002000500072006F006700720061006D', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Judul : Cara Bagaimana Membuat Program', 2, '', 1, 'SendingOKNoReport', -1, 240, 255, ''),
('2015-06-22 03:41:32', '2015-06-22 03:41:00', '2015-06-22 03:41:32', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 3, '', 1, 'SendingOKNoReport', -1, 241, 255, ''),
('2015-06-22 03:41:37', '2015-06-22 03:41:00', '2015-06-22 03:41:37', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 5, '', 1, 'SendingOKNoReport', -1, 242, 255, ''),
('2015-06-22 03:41:42', '2015-06-22 03:41:01', '2015-06-22 03:41:42', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 8, '', 1, 'SendingOKNoReport', -1, 243, 255, ''),
('2015-06-22 03:41:47', '2015-06-22 03:41:01', '2015-06-22 03:41:47', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 7, '', 1, 'SendingOKNoReport', -1, 244, 255, ''),
('2015-06-22 03:41:52', '2015-06-22 03:41:01', '2015-06-22 03:41:52', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 4, '', 1, 'SendingOKNoReport', -1, 245, 255, ''),
('2015-06-22 03:41:57', '2015-06-22 03:41:01', '2015-06-22 03:41:57', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032003C00620072003E00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066003C00620072003E004400690061006D00650074006500720020003A00200031003600380039003C00620072003E00540069006E0067006700690020003A002000310038003700380037003C00620072003E004B006100700061007300690074006100730020003A00200038003700360032003900390032003C00620072003E0049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D00310037003C00620072003E0054006100680075006E00200064006900620075006100740020003A00200032003000310035003C00620072003E00500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E00500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D00320033003C00620072003E0049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D0032003C00620072003E0048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033003C00620072003E00550073006500720020003A002000490042006500450053004E00610079003C00620072003E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22<br>Type : Floating Roof<br>Diameter : 1689<br>Tinggi : 18787<br>Kapasitas : 8762992<br>Ijin Kalibrasi : Sn./298-92927-2<br>Kalibrasi Habis : 2015-06-17<br>Tahun dibuat : 2015<br>Penggunaan Kalibrasi : Sn./298-92927-2<br>Penggunaan Habis : 2015-06-23<br>Ijin SKKP : Sn./298-92927-2<br>Habis SKKP : 2015-06-23<br>User : IBeESNay<br>', 6, '', 1, 'SendingOKNoReport', -1, 246, 255, ''),
('2015-06-22 03:46:04', '2015-06-22 03:45:57', '2015-06-22 03:46:04', NULL, '0054006500730074002000640061007400650020003A0020002000540079007000650020003A00200020004400690061006D00650074006500720020003A0020002000540069006E0067006700690020003A00200020004B006100700061007300690074006100730020003A002000200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200020004B0061006C0069006200720061007300690020004800610062006900730020003A002000200054006100680075006E00200064006900620075006100740020003A0020002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A0020002000500065006E006700670075006E00610061006E0020004800610062006900730020003A002000200049006A0069006E00200053004B004B00500020003A002000200048006100620069007300200053004B004B00500020003A0020002000550073006500720020003A0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date :  Type :  Diameter :  Tinggi :  Kapasitas :  Ijin Kalibrasi :  Kalibrasi Habis :  Tahun dibuat :  Penggunaan Kalibrasi :  Penggunaan Habis :  Ijin SKKP :  Habis SKKP :  User : ', 9, '', 1, 'SendingOKNoReport', -1, 247, 255, ''),
('2015-06-22 03:46:09', '2015-06-22 03:45:57', '2015-06-22 03:46:09', NULL, '0054006500730074002000640061007400650020003A0020002000540079007000650020003A00200020004400690061006D00650074006500720020003A0020002000540069006E0067006700690020003A00200020004B006100700061007300690074006100730020003A002000200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200020004B0061006C0069006200720061007300690020004800610062006900730020003A002000200054006100680075006E00200064006900620075006100740020003A0020002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A0020002000500065006E006700670075006E00610061006E0020004800610062006900730020003A002000200049006A0069006E00200053004B004B00500020003A002000200048006100620069007300200053004B004B00500020003A0020002000550073006500720020003A0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date :  Type :  Diameter :  Tinggi :  Kapasitas :  Ijin Kalibrasi :  Kalibrasi Habis :  Tahun dibuat :  Penggunaan Kalibrasi :  Penggunaan Habis :  Ijin SKKP :  Habis SKKP :  User : ', 10, '', 1, 'SendingOKNoReport', -1, 248, 255, ''),
('2015-06-22 03:47:15', '2015-06-22 03:46:43', '2015-06-22 03:47:15', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032002000540079007000650020003A00200046006C006F006100740069006E006700200052006F006F00660020004400690061006D00650074006500720020003A00200031003600380039002000540069006E0067006700690020003A0020003100380037003800370020004B006100700061007300690074006100730020003A0020003800370036003200390039003200200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D00320020004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D0031003700200054006100680075006E00200064006900620075006100740020003A00200032003000310035002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032002000500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D0032003300200049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D003200200048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033002000550073006500720020003A002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22 Type : Floating Roof Diameter : 1689 Tinggi : 18787 Kapasitas : 8762992 Ijin Kalibrasi : Sn./298-92927-2 Kalibrasi Habis : 2015-06-17 Tahun dibuat : 2015 Penggunaan Kalibrasi : Sn./298-92927-2 Penggunaan Habis : 2015-06-23 Ijin SKKP : Sn./298-92927-2 Habis SKKP : 2015-06-23 User : IBeESNay', 11, '', 1, 'SendingOKNoReport', -1, 249, 255, ''),
('2015-06-22 03:48:50', '2015-06-22 03:48:43', '2015-06-22 03:48:50', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar.', 12, '', 1, 'SendingOKNoReport', -1, 250, 255, ''),
('2015-06-22 03:49:55', '2015-06-22 03:49:48', '2015-06-22 03:49:55', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020006400690062006C006F006B00690072002E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau diblokir.', 13, '', 1, 'SendingOKNoReport', -1, 251, 255, ''),
('2015-06-22 03:51:31', '2015-06-22 03:51:07', '2015-06-22 03:51:31', NULL, '0054006500730074002000640061007400650020003A0020002000540079007000650020003A00200020004400690061006D00650074006500720020003A0020002000540069006E0067006700690020003A00200020004B006100700061007300690074006100730020003A002000200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200020004B0061006C0069006200720061007300690020004800610062006900730020003A002000200054006100680075006E00200064006900620075006100740020003A0020002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A0020002000500065006E006700670075006E00610061006E0020004800610062006900730020003A002000200049006A0069006E00200053004B004B00500020003A002000200048006100620069007300200053004B004B00500020003A0020002000550073006500720020003A0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date :  Type :  Diameter :  Tinggi :  Kapasitas :  Ijin Kalibrasi :  Kalibrasi Habis :  Tahun dibuat :  Penggunaan Kalibrasi :  Penggunaan Habis :  Ijin SKKP :  Habis SKKP :  User : ', 14, '', 1, 'SendingOKNoReport', -1, 252, 255, ''),
('2015-06-22 03:57:36', '2015-06-22 03:57:07', '2015-06-22 03:57:36', NULL, '0046006F0072006D0061007400200074006900640061006B0020006C0065006E0067006B00610070002C002000730069006C00610068006B0061006E0020006D006100730075006B0061006E0020005400610067004E0075006D006200650072002E0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Format tidak lengkap, silahkan masukan TagNumber. ', 15, '', 1, 'SendingOKNoReport', -1, 253, 255, ''),
('2015-06-22 03:58:41', '2015-06-22 03:58:08', '2015-06-22 03:58:41', NULL, '004400610074006100200074006900640061006B00200064006900740065006D0075006B0061006E002E0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Data tidak ditemukan. ', 16, '', 1, 'SendingOKNoReport', -1, 254, 255, ''),
('2015-06-22 03:59:46', '2015-06-22 03:59:29', '2015-06-22 03:59:46', NULL, '0046006F0072006D0061007400200074006900640061006B0020006C0065006E0067006B00610070002C002000730069006C00610068006B0061006E0020006D006100730075006B0061006E0020005400610067004E0075006D006200650072002E0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Format tidak lengkap, silahkan masukan TagNumber. ', 17, '', 1, 'SendingOKNoReport', -1, 255, 255, ''),
('2015-06-22 04:00:51', '2015-06-22 04:00:40', '2015-06-22 04:00:51', NULL, '004400610074006100200074006900640061006B00200064006900740065006D0075006B0061006E002E0020', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Data tidak ditemukan. ', 18, '', 1, 'SendingOKNoReport', -1, 0, 255, ''),
('2015-06-22 04:02:58', '2015-06-22 04:02:41', '2015-06-22 04:02:58', NULL, '0054006500730074002000640061007400650020003A00200032003000310035002D00300036002D00320032002000540079007000650020003A00200046006C006F006100740069006E006700200052006F006F00660020004400690061006D00650074006500720020003A00200031003600380039002000540069006E0067006700690020003A0020003100380037003800370020004B006100700061007300690074006100730020003A0020003800370036003200390039003200200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D00320020004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D0031003700200054006100680075006E00200064006900620075006100740020003A00200032003000310035002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032002000500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D0032003300200049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D003200200048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033002000550073006500720020003A002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Test date : 2015-06-22 Type : Floating Roof Diameter : 1689 Tinggi : 18787 Kapasitas : 8762992 Ijin Kalibrasi : Sn./298-92927-2 Kalibrasi Habis : 2015-06-17 Tahun dibuat : 2015 Penggunaan Kalibrasi : Sn./298-92927-2 Penggunaan Habis : 2015-06-23 Ijin SKKP : Sn./298-92927-2 Habis SKKP : 2015-06-23 User : IBeESNay', 19, '', 1, 'SendingOKNoReport', -1, 1, 255, ''),
('2015-06-22 04:05:04', '2015-06-22 04:04:42', '2015-06-22 04:05:04', NULL, '0054004400200032003000310035002D00300036002D003200320020000A00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F00660020004400690061006D00650074006500720020003A00200031003600380039002000540069006E0067006700690020003A0020003100380037003800370020004B006100700061007300690074006100730020003A0020003800370036003200390039003200200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D00320020004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D0031003700200054006100680075006E00200064006900620075006100740020003A00200032003000310035002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032002000500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D0032003300200049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D003200200048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033002000550073006500720020003A002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD 2015-06-22 \nType : Floating Roof Diameter : 1689 Tinggi : 18787 Kapasitas : 8762992 Ijin Kalibrasi : Sn./298-92927-2 Kalibrasi Habis : 2015-06-17 Tahun dibuat : 2015 Penggunaan Kalibrasi : Sn./298-92927-2 Penggunaan Habis : 2015-06-23 Ijin SKKP : Sn./298-92927-2 Habis SKKP : 2015-06-23 User : IBeESNay', 20, '', 1, 'SendingOKNoReport', -1, 2, 255, ''),
('2015-06-22 04:14:36', '2015-06-22 04:13:48', '2015-06-22 04:14:36', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020006400690062006C006F006B00690072002E', 'INDOSAT', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau diblokir.', 21, '', 1, 'SendingError', -1, -1, 255, ''),
('2015-06-22 04:26:41', '2015-06-22 04:26:10', '2015-06-22 04:26:41', NULL, '004D00610061006600200066006F0072006D00610074002000610074006100750020006B006500790077006F007200640020007000650072006D0069006E007400610061006E002000730061006C00610068002E', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'Maaf format atau keyword permintaan salah.', 22, '', 1, 'SendingOKNoReport', -1, 4, 255, ''),
('2015-06-22 04:27:18', '2015-06-22 04:27:07', '2015-06-22 04:27:18', NULL, '005400440020003A00200032003000310035002D00300036002D00320032000A00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066000A004400690061006D00650074006500720020003A00200031003600380039000A00480069006700680020003A002000310038003700380037000A004300610070006100630069007400790020003A0020003800370036003200390039003200200049006A0069006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D00320020004B0061006C0069006200720061007300690020004800610062006900730020003A00200032003000310035002D00300036002D0031003700200054006100680075006E00200064006900620075006100740020003A00200032003000310035002000500065006E006700670075006E00610061006E0020004B0061006C0069006200720061007300690020003A00200053006E002E002F003200390038002D00390032003900320037002D0032002000500065006E006700670075006E00610061006E0020004800610062006900730020003A00200032003000310035002D00300036002D0032003300200049006A0069006E00200053004B004B00500020003A00200053006E002E002F003200390038002D00390032003900320037002D003200200048006100620069007300200053004B004B00500020003A00200032003000310035002D00300036002D00320033002000550073006500720020003A002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD : 2015-06-22\nType : Floating Roof\nDiameter : 1689\nHigh : 18787\nCapacity : 8762992 Ijin Kalibrasi : Sn./298-92927-2 Kalibrasi Habis : 2015-06-17 Tahun dibuat : 2015 Penggunaan Kalibrasi : Sn./298-92927-2 Penggunaan Habis : 2015-06-23 Ijin SKKP : Sn./298-92927-2 Habis SKKP : 2015-06-23 User : IBeESNay', 23, '', 1, 'SendingOKNoReport', -1, 5, 255, ''),
('2015-06-22 04:29:54', '2015-06-22 04:29:32', '2015-06-22 04:29:54', NULL, '005400440020003A00200032003000310035002D00300036002D00320032000A00540079007000650020003A00200046006C006F006100740069006E006700200052006F006F0066000A004400690061006D00650074006500720020003A00200031003600380039000A00480069006700680020003A002000310038003700380037000A004300610070006100630069007400790020003A00200038003700360032003900390032000A0049004B0020003A00200053006E002E002F003200390038002D00390032003900320037002D0032000A004B00480020003A00200032003000310035002D00300036002D00310037000A0044006900620075006100740020003A00200032003000310035000A0050004B0020003A00200053006E002E002F003200390038002D00390032003900320037002D0032000A005000480020003A00200032003000310035002D00300036002D00320033000A004900530020003A00200053006E002E002F003200390038002D00390032003900320037002D0032000A004800530020003A00200032003000310035002D00300036002D00320033000A00550073006500720020003A002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD : 2015-06-22\nType : Floating Roof\nDiameter : 1689\nHigh : 18787\nCapacity : 8762992\nIK : Sn./298-92927-2\nKH : 2015-06-17\nDibuat : 2015\nPK : Sn./298-92927-2\nPH : 2015-06-23\nIS : Sn./298-92927-2\nHS : 2015-06-23\nUser : IBeESNay', 24, '', 1, 'SendingOKNoReport', -1, 6, 255, ''),
('2015-06-22 04:31:31', '2015-06-22 04:31:18', '2015-06-22 04:31:31', NULL, '0054004400200032003000310035002D00300036002D00320032000A005400790070006500200046006C006F006100740069006E006700200052006F006F0066000A004400690061006D006500740065007200200031003600380039000A0048006900670068002000310038003700380037000A0043006100700061006300690074007900200038003700360032003900390032000A0049004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A004B004800200032003000310035002D00300036002D00310037000A00440069006200750061007400200032003000310035000A0050004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A0050004800200032003000310035002D00300036002D00320033000A0049005300200053006E002E002F003200390038002D00390032003900320037002D0032000A0048005300200032003000310035002D00300036002D00320033000A0055007300650072002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD 2015-06-22\nType Floating Roof\nDiameter 1689\nHigh 18787\nCapacity 8762992\nIK Sn./298-92927-2\nKH 2015-06-17\nDibuat 2015\nPK Sn./298-92927-2\nPH 2015-06-23\nIS Sn./298-92927-2\nHS 2015-06-23\nUser IBeESNay', 25, '', 1, 'SendingOKNoReport', -1, 7, 255, ''),
('2015-06-22 04:34:38', '2015-06-22 04:34:07', '2015-06-22 04:34:38', NULL, '0054004400200032003000310035002D00300036002D00320032000A005400790070006500200046006C006F006100740069006E006700200052006F006F0066000A00440069006100200031003600380039000A0048006900670068002000310038003700380037000A00430061007000200038003700360032003900390032000A0049004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A004B004800200032003000310035002D00300036002D00310037000A00440069006200750061007400200032003000310035000A0050004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A0050004800200032003000310035002D00300036002D00320033000A0049005300200053006E002E002F003200390038002D00390032003900320037002D0032000A0048005300200032003000310035002D00300036002D00320033000A0055007300650072002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD 2015-06-22\nType Floating Roof\nDia 1689\nHigh 18787\nCap 8762992\nIK Sn./298-92927-2\nKH 2015-06-17\nDibuat 2015\nPK Sn./298-92927-2\nPH 2015-06-23\nIS Sn./298-92927-2\nHS 2015-06-23\nUser IBeESNay', 26, '', 1, 'SendingOKNoReport', -1, 8, 255, ''),
('2015-06-22 04:39:13', '2015-06-22 04:38:40', '2015-06-22 04:39:13', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau diblokir.', 27, '', 1, 'SendingOKNoReport', -1, 9, 255, ''),
('2015-06-22 04:40:18', '2015-06-22 04:39:53', '2015-06-22 04:40:18', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau diblokir.', 28, '', 1, 'SendingOKNoReport', -1, 10, 255, ''),
('2015-06-22 04:41:24', '2015-06-22 04:41:01', '2015-06-22 04:41:24', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 29, '', 1, 'SendingOKNoReport', -1, 11, 255, ''),
('2015-06-22 04:42:29', '2015-06-22 04:42:04', '2015-06-22 04:42:29', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 30, '', 1, 'SendingOKNoReport', -1, 12, 255, ''),
('2015-06-22 04:43:34', '2015-06-22 04:43:13', '2015-06-22 04:43:34', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 31, '', 1, 'SendingOKNoReport', -1, 13, 255, ''),
('2015-06-22 04:44:40', '2015-06-22 04:44:15', '2015-06-22 04:44:40', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 32, '', 1, 'SendingOKNoReport', -1, 14, 255, ''),
('2015-06-22 04:45:45', '2015-06-22 04:45:20', '2015-06-22 04:45:45', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 33, '', 1, 'SendingOKNoReport', -1, 15, 255, ''),
('2015-06-22 04:46:51', '2015-06-22 04:46:25', '2015-06-22 04:46:51', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 34, '', 1, 'SendingOKNoReport', -1, 16, 255, ''),
('2015-06-22 04:47:57', '2015-06-22 04:47:33', '2015-06-22 04:47:57', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 35, '', 1, 'SendingOKNoReport', -1, 17, 255, ''),
('2015-06-22 04:49:02', '2015-06-22 04:48:41', '2015-06-22 04:49:02', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 36, '', 1, 'SendingOKNoReport', -1, 18, 255, ''),
('2015-06-22 05:07:36', '2015-06-22 05:07:02', '2015-06-22 05:07:36', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 37, '', 1, 'SendingOKNoReport', -1, 19, 255, ''),
('2015-06-22 05:07:41', '2015-06-22 05:07:02', '2015-06-22 05:07:41', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '+6285782667244', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 38, '', 1, 'SendingOKNoReport', -1, 20, 255, ''),
('2015-06-22 05:08:23', '2015-06-22 05:07:43', '2015-06-22 05:08:23', NULL, '0054004400200032003000310035002D00300036002D00320032000A005400790070006500200046006C006F006100740069006E006700200052006F006F0066000A00440069006100200031003600380039000A0048006900670068002000310038003700380037000A00430061007000200038003700360032003900390032000A0049004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A004B004800200032003000310035002D00300036002D00310037000A00440069006200750061007400200032003000310035000A0050004B00200053006E002E002F003200390038002D00390032003900320037002D0032000A0050004800200032003000310035002D00300036002D00320033000A0049005300200053006E002E002F003200390038002D00390032003900320037002D0032000A0048005300200032003000310035002D00300036002D00320033000A0055007300650072002000490042006500450053004E00610079', '+6285290156462', 'Default_No_Compression', '', '+62816124', -1, 'TD 2015-06-22\nType Floating Roof\nDia 1689\nHigh 18787\nCap 8762992\nIK Sn./298-92927-2\nKH 2015-06-17\nDibuat 2015\nPK Sn./298-92927-2\nPH 2015-06-23\nIS Sn./298-92927-2\nHS 2015-06-23\nUser IBeESNay', 39, '', 1, 'SendingOKNoReport', -1, 21, 255, ''),
('2015-06-22 05:08:58', '2015-06-22 05:08:25', '2015-06-22 05:08:58', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 40, '', 1, 'SendingOKNoReport', -1, 22, 255, ''),
('2015-06-22 05:09:02', '2015-06-22 05:08:43', '2015-06-22 05:09:02', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '+6285782667244', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 41, '', 1, 'SendingOKNoReport', -1, 23, 255, ''),
('2015-06-22 05:10:08', '2015-06-22 05:09:38', '2015-06-22 05:10:08', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 42, '', 1, 'SendingOKNoReport', -1, 24, 255, ''),
('2015-06-22 05:11:13', '2015-06-22 05:10:48', '2015-06-22 05:11:13', NULL, '004D006F0068006F006E0020006D006100610066002C0020006E006F006D006F007200200061006E00640061002000620065006C0075006D0020007400650072006400610066007400610072002000610074006100750020007300750064006100680020006400690062006C006F006B00690072002E', '32665027', 'Default_No_Compression', '', '+62816124', -1, 'Mohon maaf, nomor anda belum terdaftar atau sudah diblokir.', 43, '', 1, 'SendingOKNoReport', -1, 25, 255, '');

--
-- Triggers `sentitems`
--
DROP TRIGGER IF EXISTS `sentitems_timestamp`;
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `skpi`
--

DROP TABLE IF EXISTS `skpi`;
CREATE TABLE IF NOT EXISTS `skpi` (
  `id_skpi` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `no_skpp` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `unit_no` varchar(200) NOT NULL,
  `start_build` year(4) NOT NULL,
  `start_operation` year(4) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skpi`
--

INSERT INTO `skpi` (`id_skpi`, `unit`, `no_skpp`, `start_date`, `end_date`, `unit_no`, `start_build`, `start_operation`, `remarks`, `status`) VALUES
(3, 'SKPI Existing Balongan', '063/47-2/SKPI/18.01/DJM.T/2014', '2014-06-20', '2015-08-03', '30,32,32,33', 1994, 1995, 'Sertifikat migas telah terbit', 'No OK');

-- --------------------------------------------------------

--
-- Table structure for table `sms_gateaway`
--

DROP TABLE IF EXISTS `sms_gateaway`;
CREATE TABLE IF NOT EXISTS `sms_gateaway` (
  `ID_sga` int(11) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `table_name` varchar(30) NOT NULL,
  `key_field` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `hits_request` int(11) NOT NULL DEFAULT '0',
  `active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

DROP TABLE IF EXISTS `standard`;
CREATE TABLE IF NOT EXISTS `standard` (
  `id_std` int(11) NOT NULL,
  `standard` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id_std`, `standard`, `description`, `tahun`, `ket`, `filename`) VALUES
(1, 'Standard 1', 'Hanya sesuatu ', 1987, 'Sampel data untuk keterangan', 'Standard_133056_ujian_online.zip');

-- --------------------------------------------------------

--
-- Table structure for table `tanki`
--

DROP TABLE IF EXISTS `tanki`;
CREATE TABLE IF NOT EXISTS `tanki` (
  `id_tanki` int(11) NOT NULL,
  `tag_no` varchar(15) NOT NULL,
  `test_date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `diameter` varchar(10) NOT NULL,
  `tinggi` varchar(10) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `ijin_kalibrasi` varchar(50) NOT NULL,
  `kalibrasi_habis` date NOT NULL,
  `dibuat` year(4) NOT NULL,
  `penggunaan_kal` varchar(50) NOT NULL,
  `penggunaan_habis` date NOT NULL,
  `ijin_skkp` varchar(50) NOT NULL,
  `skkp_habis` date NOT NULL,
  `user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanki`
--

INSERT INTO `tanki` (`id_tanki`, `tag_no`, `test_date`, `type`, `diameter`, `tinggi`, `kapasitas`, `ijin_kalibrasi`, `kalibrasi_habis`, `dibuat`, `penggunaan_kal`, `penggunaan_habis`, `ijin_skkp`, `skkp_habis`, `user`) VALUES
(0, 'C42', '2015-06-22', 'Floating Roof', '1689', '18787', '8762992', 'Sn./298-92927-2', '2015-06-17', 2015, 'Sn./298-92927-2', '2015-06-23', 'Sn./298-92927-2', '2015-06-23', 'IBeESNay');

-- --------------------------------------------------------

--
-- Table structure for table `termo_trend`
--

DROP TABLE IF EXISTS `termo_trend`;
CREATE TABLE IF NOT EXISTS `termo_trend` (
  `id_thermo` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `area` varchar(10) NOT NULL,
  `tag_no` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `termo_trend`
--

INSERT INTO `termo_trend` (`id_thermo`, `judul`, `area`, `tag_no`, `tgl`, `user`) VALUES
(8, 'Sampel 1', 'KPC', '87F201', '1905-07-07', 'Ibeesnay'),
(9, 'Sampel 2', 'KPC', '87F202', '1905-07-08', 'Ibeesnay'),
(10, 'Sampel 3', 'KPC', '87F203', '1905-07-09', 'Ibeesnay'),
(11, 'Sampel 4', 'KPC', '87F204', '1905-07-10', 'Ibeesnay'),
(12, 'Sampel 5', 'KPC', '87F205', '1905-07-11', 'Ibeesnay'),
(13, 'Sampel 6', 'KPC', '87F206', '1905-07-12', 'Ibeesnay');

-- --------------------------------------------------------

--
-- Table structure for table `top_issue`
--

DROP TABLE IF EXISTS `top_issue`;
CREATE TABLE IF NOT EXISTS `top_issue` (
  `id_issue` int(11) NOT NULL,
  `tag_no` varchar(20) NOT NULL,
  `problems` text NOT NULL,
  `critic_consq` text NOT NULL,
  `rtl_target` text NOT NULL,
  `status` text NOT NULL,
  `trafic` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_issue`
--

INSERT INTO `top_issue` (`id_issue`, `tag_no`, `problems`, `critic_consq`, `rtl_target`, `status`, `trafic`, `pic`) VALUES
(1, '51-UV-106A', '&lt;p&gt;Disc pecah akibat backpress&lt;/p&gt;\r\n', '&lt;p&gt;STG tidak mengalami Ekstraksi&amp;Acirc&amp;nbsp sehingga MP tidak effisien&lt;/p&gt;\r\n', 'Pembelian 3 buah swing check valve, target Februari 2014', 'Telah dilakukan evaluasi spesifikasi, rekomendasi 1970/E16143/2013-S5 tgl. 02 Agustus 2013PR. 100046536', '1', 'Proc'),
(2, '51-PSV-101E', '&lt;p&gt;Spring patah&lt;/p&gt;\r\n', '&lt;p&gt;Terjadi kerusakan pada peralatan vessel pecah akibat overpressure kegagalan mekanikal safety device tidak bekerja&lt;/p&gt;\r\n', 'Pembelian spring PSV OEM, Maret 2014', 'Telah dilakukan evaluasi spesifikasi, rekomendasi 1365/E16143/2013-S5 tgl. 27 Nop 2013PR. 100039954', '3', 'Proc'),
(3, '58-K-101E', '&lt;p&gt;Layar monitor blank&lt;/p&gt;\r\n', '&lt;p&gt;Tidak dapat melakukan monitoring di Local Panel&lt;/p&gt;\r\n', 'Pemanggilan vendor Petrotech Target: 1 Feb 2013', 'LOI cash &amp; carry sdh siap. tinggal menunggu kesiapan engineer vendor.', '2', 'RP&amp;S'),
(4, '055-A-101A/B', '&lt;p&gt;Banyak Valve yang tidak dapat beroperasi normal&lt;/p&gt;\r\n', '&lt;p&gt;Operation dan Kualitas pemurnian berkurang&lt;/p&gt;\r\n', 'Assessment di Workshop Instrument Target 1 Feb 2013', 'Proses Pelepasan', '4', 'WS MA-4 EIIE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `bio` text COLLATE latin1_general_ci NOT NULL,
  `userpicture` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '2',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_daftar` date NOT NULL,
  `forget_key` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `locktype` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `bio`, `userpicture`, `level`, `blokir`, `id_session`, `tgl_daftar`, `forget_key`, `locktype`) VALUES
(1, 'admin', '5eba9739c38315f64ca22ae147e46e16', 'Administrator', 'ibeesnay@yahoo.com', '08xxxxxxxxxx', '&lt;p&gt;-&lt;/p&gt;\r\n', 'USER_70643_programmer-nay2.jpg', '1', 'N', 'q3mndnju6jejotc0o78akm8ng1', '2015-04-21', NULL, '1'),
(11, 'internal', '8aab63ac5648fc801b3e629bf3a68385', 'Yanto Karno saputra', 'user@yahoo.com', '-', '&lt;p&gt;Biodata sample&lt;/p&gt;\r\n', 'USER_15698_avatar22109_3.gif', '2', 'N', 'n164ftik0ssi4ohe3v0ak9g6h3', '2015-07-05', NULL, '1'),
(13, 'sunardi', '8e1d9d19773c32703504ce458a0b868a', 'Sunardi', 'ibeesnay@yahoo.com', '085290156462', '', 'USER_40860_jasnay1tr.png', '3', 'N', '952f8q17vm5s0dsp77vnbqc0b4', '2015-08-11', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

DROP TABLE IF EXISTS `user_level`;
CREATE TABLE IF NOT EXISTS `user_level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_level`, `level`) VALUES
(1, 'Administrator'),
(2, 'Internal User'),
(3, 'External User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id_role` int(10) NOT NULL,
  `id_level` int(10) NOT NULL,
  `id_module` int(11) NOT NULL,
  `read_access` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `write_access` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `modify_access` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `delete_access` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `id_level`, `id_module`, `read_access`, `write_access`, `modify_access`, `delete_access`) VALUES
(2, 1, 2, 'Y', 'Y', 'Y', 'Y'),
(3, 2, 2, 'Y', 'Y', 'Y', 'Y'),
(5, 2, 3, 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `uu`
--

DROP TABLE IF EXISTS `uu`;
CREATE TABLE IF NOT EXISTS `uu` (
  `id_uu` int(11) NOT NULL,
  `description` text NOT NULL,
  `perihal` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `ket` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `uploader` varchar(3) NOT NULL DEFAULT '1',
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uu`
--

INSERT INTO `uu` (`id_uu`, `description`, `perihal`, `tahun`, `ket`, `filename`, `uploader`, `aktif`) VALUES
(1, 'Sampel data untuk deskripsi UU dan PP', 'Hanya kamu selalu', 1998, 'Sampel data untuk keterangan UU dan PP', 'UU-PP_754913_ujian_online.zip', '1', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `welder`
--

DROP TABLE IF EXISTS `welder`;
CREATE TABLE IF NOT EXISTS `welder` (
  `id_welder` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kualifikasi` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `diameter` varchar(50) NOT NULL,
  `thickness` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `berlaku` date NOT NULL,
  `pengalaman` text NOT NULL,
  `project` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welder`
--

INSERT INTO `welder` (`id_welder`, `nama`, `kualifikasi`, `posisi`, `diameter`, `thickness`, `material`, `berlaku`, `pengalaman`, `project`, `no_hp`, `email`, `no_sertifikat`) VALUES
(1, 'sample data', 'sample data', 'sample data', 'sample data', 'sample data', 'sample data', '2015-07-07', 'sample data', 'sample data', 'sample data', 'agislaksamana46@gmail.com', 'sample data');

-- --------------------------------------------------------

--
-- Table structure for table `wps`
--

DROP TABLE IF EXISTS `wps`;
CREATE TABLE IF NOT EXISTS `wps` (
  `id_wps` int(11) NOT NULL,
  `wps_no` varchar(100) NOT NULL,
  `from_p` varchar(100) NOT NULL,
  `to_p` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wps`
--

INSERT INTO `wps` (`id_wps`, `wps_no`, `from_p`, `to_p`, `keterangan`, `filename`) VALUES
(3, '11111', 'sample data', 'sample data', 'Keterangan', 'WPS_500854_anarchistic_font_6491.zip'),
(4, '983738', 'Sampel data From', 'Sampel data To', 'Keterangan', 'WPS_810424_13052015167.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `alat_ndt`
--
ALTER TABLE `alat_ndt`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id_angg`);

--
-- Indexes for table `around`
--
ALTER TABLE `around`
  ADD PRIMARY KEY (`id_ar`);

--
-- Indexes for table `artikel_pekerja`
--
ALTER TABLE `artikel_pekerja`
  ADD PRIMARY KEY (`id_art`);

--
-- Indexes for table `atk`
--
ALTER TABLE `atk`
  ADD PRIMARY KEY (`id_atk`);

--
-- Indexes for table `bejana`
--
ALTER TABLE `bejana`
  ADD PRIMARY KEY (`id_bejana`);

--
-- Indexes for table `cat_book`
--
ALTER TABLE `cat_book`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`id_cl`);

--
-- Indexes for table `cormon`
--
ALTER TABLE `cormon`
  ADD PRIMARY KEY (`id_cormon`);

--
-- Indexes for table `corner_book`
--
ALTER TABLE `corner_book`
  ADD PRIMARY KEY (`id_eb`);

--
-- Indexes for table `corro_mapp`
--
ALTER TABLE `corro_mapp`
  ADD PRIMARY KEY (`id_cm`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id_css`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`id_draw`);

--
-- Indexes for table `form_ndt`
--
ALTER TABLE `form_ndt`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `foto_rutin`
--
ALTER TABLE `foto_rutin`
  ADD PRIMARY KEY (`id_fr`);

--
-- Indexes for table `foto_ta`
--
ALTER TABLE `foto_ta`
  ADD PRIMARY KEY (`id_fta`);

--
-- Indexes for table `furnace`
--
ALTER TABLE `furnace`
  ADD PRIMARY KEY (`id_furnace`);

--
-- Indexes for table `group_pegawai`
--
ALTER TABLE `group_pegawai`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `ilmiah`
--
ALTER TABLE `ilmiah`
  ADD PRIMARY KEY (`id_ilm`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jadwal_oncall`
--
ALTER TABLE `jadwal_oncall`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jenis_ndt`
--
ALTER TABLE `jenis_ndt`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kurs`);

--
-- Indexes for table `laporan_bulanan`
--
ALTER TABLE `laporan_bulanan`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indexes for table `laporan_ndt`
--
ALTER TABLE `laporan_ndt`
  ADD PRIMARY KEY (`id_ndt`);

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `member_sms`
--
ALTER TABLE `member_sms`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `metering`
--
ALTER TABLE `metering`
  ADD PRIMARY KEY (`id_met`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Indexes for table `ndt_personil`
--
ALTER TABLE `ndt_personil`
  ADD PRIMARY KEY (`id_personil`);

--
-- Indexes for table `onstream`
--
ALTER TABLE `onstream`
  ADD PRIMARY KEY (`id_ons`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pelat_pekerja`
--
ALTER TABLE `pelat_pekerja`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `petugas_oncall`
--
ALTER TABLE `petugas_oncall`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `pink_book`
--
ALTER TABLE `pink_book`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `pipe`
--
ALTER TABLE `pipe`
  ADD PRIMARY KEY (`id_pipe`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indexes for table `quality_plan`
--
ALTER TABLE `quality_plan`
  ADD PRIMARY KEY (`id_qp`);

--
-- Indexes for table `read_coc`
--
ALTER TABLE `read_coc`
  ADD PRIMARY KEY (`id_rcoc`);

--
-- Indexes for table `read_ta`
--
ALTER TABLE `read_ta`
  ADD PRIMARY KEY (`id_rta`);

--
-- Indexes for table `rek_coc`
--
ALTER TABLE `rek_coc`
  ADD PRIMARY KEY (`id_coc`);

--
-- Indexes for table `rek_ta`
--
ALTER TABLE `rek_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `seig`
--
ALTER TABLE `seig`
  ADD PRIMARY KEY (`id_seig`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indexes for table `skpi`
--
ALTER TABLE `skpi`
  ADD PRIMARY KEY (`id_skpi`);

--
-- Indexes for table `sms_gateaway`
--
ALTER TABLE `sms_gateaway`
  ADD PRIMARY KEY (`ID_sga`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id_std`);

--
-- Indexes for table `termo_trend`
--
ALTER TABLE `termo_trend`
  ADD PRIMARY KEY (`id_thermo`);

--
-- Indexes for table `top_issue`
--
ALTER TABLE `top_issue`
  ADD PRIMARY KEY (`id_issue`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `uu`
--
ALTER TABLE `uu`
  ADD PRIMARY KEY (`id_uu`);

--
-- Indexes for table `welder`
--
ALTER TABLE `welder`
  ADD PRIMARY KEY (`id_welder`);

--
-- Indexes for table `wps`
--
ALTER TABLE `wps`
  ADD PRIMARY KEY (`id_wps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `alat_ndt`
--
ALTER TABLE `alat_ndt`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id_angg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `around`
--
ALTER TABLE `around`
  MODIFY `id_ar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel_pekerja`
--
ALTER TABLE `artikel_pekerja`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `atk`
--
ALTER TABLE `atk`
  MODIFY `id_atk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bejana`
--
ALTER TABLE `bejana`
  MODIFY `id_bejana` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cat_book`
--
ALTER TABLE `cat_book`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cleaning`
--
ALTER TABLE `cleaning`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cormon`
--
ALTER TABLE `cormon`
  MODIFY `id_cormon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `corner_book`
--
ALTER TABLE `corner_book`
  MODIFY `id_eb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `corro_mapp`
--
ALTER TABLE `corro_mapp`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id_css` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `id_draw` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_ndt`
--
ALTER TABLE `form_ndt`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `foto_rutin`
--
ALTER TABLE `foto_rutin`
  MODIFY `id_fr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `foto_ta`
--
ALTER TABLE `foto_ta`
  MODIFY `id_fta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `furnace`
--
ALTER TABLE `furnace`
  MODIFY `id_furnace` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `group_pegawai`
--
ALTER TABLE `group_pegawai`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ilmiah`
--
ALTER TABLE `ilmiah`
  MODIFY `id_ilm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal_oncall`
--
ALTER TABLE `jadwal_oncall`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jenis_ndt`
--
ALTER TABLE `jenis_ndt`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id_kurs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `laporan_bulanan`
--
ALTER TABLE `laporan_bulanan`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_sms`
--
ALTER TABLE `member_sms`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ndt_personil`
--
ALTER TABLE `ndt_personil`
  MODIFY `id_personil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `onstream`
--
ALTER TABLE `onstream`
  MODIFY `id_ons` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `pelat_pekerja`
--
ALTER TABLE `pelat_pekerja`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas_oncall`
--
ALTER TABLE `petugas_oncall`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pink_book`
--
ALTER TABLE `pink_book`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pipe`
--
ALTER TABLE `pipe`
  MODIFY `id_pipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quality_plan`
--
ALTER TABLE `quality_plan`
  MODIFY `id_qp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `read_coc`
--
ALTER TABLE `read_coc`
  MODIFY `id_rcoc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `read_ta`
--
ALTER TABLE `read_ta`
  MODIFY `id_rta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rek_coc`
--
ALTER TABLE `rek_coc`
  MODIFY `id_coc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rek_ta`
--
ALTER TABLE `rek_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seig`
--
ALTER TABLE `seig`
  MODIFY `id_seig` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skpi`
--
ALTER TABLE `skpi`
  MODIFY `id_skpi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_gateaway`
--
ALTER TABLE `sms_gateaway`
  MODIFY `ID_sga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id_std` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `termo_trend`
--
ALTER TABLE `termo_trend`
  MODIFY `id_thermo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `top_issue`
--
ALTER TABLE `top_issue`
  MODIFY `id_issue` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `uu`
--
ALTER TABLE `uu`
  MODIFY `id_uu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `welder`
--
ALTER TABLE `welder`
  MODIFY `id_welder` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wps`
--
ALTER TABLE `wps`
  MODIFY `id_wps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
