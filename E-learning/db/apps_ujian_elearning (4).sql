-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2015 at 10:02 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apps_ujian_elearning`
--
CREATE DATABASE IF NOT EXISTS `apps_ujian_elearning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `apps_ujian_elearning`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT 'administrator',
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'admin',
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `level`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `email`, `website`, `foto`, `blokir`, `id_session`) VALUES
(1, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', 'admin', 'jl.kenari no 145.B ', '', '0000-00-00', 'P', '', '085228482669', 'almazari@ymail.com', '', '', 'N', 'knvestbu496no3vt27cgqc1us0'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'SunardI', 'admin', 'Depoan Kg 2 No.0 Rt 0 Rw 2 Yogyakarta', '', '0000-00-00', 'P', '', '085228482669', 'almazary@gmail.com', '', '', 'N', 'et8r3t4sqafn28mcrirvl9c2v5');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `file_materi`
--

DROP TABLE IF EXISTS `file_materi`;
CREATE TABLE IF NOT EXISTS `file_materi` (
  `id_file` int(7) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_matapelajaran` varchar(5) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_posting` date NOT NULL,
  `pembuat` varchar(50) NOT NULL,
  `hits` int(3) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE IF NOT EXISTS `jawaban` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_tq` int(50) NOT NULL,
  `id_quiz` int(50) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `jawaban` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_tq`, `id_quiz`, `id_siswa`, `jawaban`) VALUES
(36, 70, 100, 14, 'server'),
(37, 70, 101, 14, 'client'),
(38, 70, 102, 14, 'WAMP'),
(39, 70, 103, 14, '?'),
(40, 70, 104, 14, 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pilganda`
--

DROP TABLE IF EXISTS `jawaban_pilganda`;
CREATE TABLE IF NOT EXISTS `jawaban_pilganda` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_quiz` char(7) NOT NULL,
  `jawaban` text NOT NULL,
  `status` enum('S','B') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `jawaban_pilganda`
--

INSERT INTO `jawaban_pilganda` (`id_jawaban`, `id_quiz`, `jawaban`, `status`) VALUES
(1, 'PG_001', 'Bahasa Pemrogramman', 'S'),
(2, 'PG_001', 'Bahasa Sunda', 'B'),
(3, 'PG_001', 'Bahasa Indnesia', 'S'),
(4, 'PG_002', '1', 'S'),
(5, 'PG_002', '2', 'B'),
(6, 'PG_002', '3', 'S'),
(7, 'PG_003', 'IPS', 'B'),
(8, 'PG_003', 'IPA', 'S'),
(9, 'PG_003', 'MTK', 'S'),
(10, 'PG_004', 'Iya', 'B'),
(11, 'PG_004', 'Bukan', 'S'),
(12, 'PG_004', 'Tidak', 'S'),
(13, 'PG_005', '1', 'S'),
(14, 'PG_005', '2', 'S'),
(15, 'PG_005', '3', 'B'),
(16, 'PG_006', 'Latin', 'B'),
(17, 'PG_006', 'Yunani', 'S'),
(18, 'PG_006', 'Inggris', 'S'),
(19, 'PG_007', 'Diskusi pleno', 'B'),
(20, 'PG_007', 'Diskusi pribadi', 'S'),
(21, 'PG_007', 'Diskusi mandiri', 'S'),
(22, 'PG_008', 'Ketua kelas', 'B'),
(23, 'PG_008', 'Ketua diskusi', 'S'),
(24, 'PG_008', 'Anggota peserta', 'S'),
(25, 'PG_009', 'Tanggapan sementara', 'S'),
(26, 'PG_009', 'Tanggapan langsung', 'B'),
(27, 'PG_009', 'Tanggapan lampau', 'S'),
(28, 'PG_010', 'mempersiapkan diri sebaik-baiknya', 'S'),
(29, 'PG_010', 'berbicara melalui moderator', 'S'),
(30, 'PG_010', 'berbahasa semau kita', 'B'),
(31, 'PG_011', 'Teiliti', 'B'),
(32, 'PG_011', 'Ceroboh', 'S'),
(33, 'PG_011', 'Egois', 'S'),
(34, 'PG_012', 'Persiapan bahan', 'S'),
(35, 'PG_012', 'Persiapan personal', 'S'),
(36, 'PG_012', 'Persiapan uang', 'B'),
(37, 'PG_013', 'memberikan masalah', 'S'),
(38, 'PG_013', 'membeberkan masalah', 'B'),
(39, 'PG_013', 'menambahkan masalah', 'S'),
(40, 'PG_014', 'Penyaji', 'S'),
(41, 'PG_014', 'Moderator', 'B'),
(42, 'PG_014', 'Peserta', 'S'),
(43, 'PG_015', 'Diskusi fakultatif', 'B'),
(44, 'PG_015', 'Diskusi kelompok', 'S'),
(45, 'PG_015', 'Diskusi mandiri', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_pengajar` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `id_kelas`, `nama`, `id_pengajar`, `id_siswa`, `aktif`) VALUES
(59, '9c', 'XI C', 27, 14, 'Y'),
(58, '9b', 'XI B', 29, 14, 'Y'),
(57, '9a', 'XI A', 27, 14, 'Y'),
(56, '8c', 'VIII C', 29, 14, 'Y'),
(55, '8b', 'VIII B', 29, 14, 'Y'),
(51, '7a', 'VII A', 29, 14, 'Y'),
(52, '7b', 'VII B', 27, 14, 'Y'),
(53, '7c', 'VII C', 29, 14, 'Y'),
(54, '8a', 'VIII A', 29, 14, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

DROP TABLE IF EXISTS `mata_pelajaran`;
CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_matapelajaran` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `id_pengajar` int(9) NOT NULL,
  `deskripsi` text NOT NULL,
  `kkm` varchar(5) NOT NULL DEFAULT '75',
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `id_matapelajaran`, `nama`, `id_kelas`, `id_pengajar`, `deskripsi`, `kkm`) VALUES
(24, 'BI1', 'Bahasa Indonesia - 1', '7a,7b,7c', 29, '&lt;p&gt;Bahasa Indoensia Untuk Kelas 7(VII)&lt;/p&gt;\r\n', '75'),
(29, 'IPS1', 'Bahasa Indonesia - 2', '8a,8b,8c', 29, '', '75'),
(30, 'IPS3', 'TIK - 3', '9a,9b,9c', 27, '', '80');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_tq` int(50) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `benar` int(10) NOT NULL,
  `salah` int(10) NOT NULL,
  `tidak_dikerjakan` int(50) NOT NULL,
  `persentase` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `id_tq`, `id_siswa`, `benar`, `salah`, `tidak_dikerjakan`, `persentase`) VALUES
(1, 71, 16, 8, 2, 0, 80);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_soal_esay`
--

DROP TABLE IF EXISTS `nilai_soal_esay`;
CREATE TABLE IF NOT EXISTS `nilai_soal_esay` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_tq` int(50) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE IF NOT EXISTS `online` (
  `ip` varchar(20) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `online` varchar(1) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`ip`, `id_siswa`, `tanggal`, `online`) VALUES
('127.0.0.1', 7, '2015-05-27', 'T'),
('127.0.0.1', 5, '2011-07-14', 'T'),
('::1', 9, '2011-12-28', 'T'),
('127.0.0.1', 14, '2015-06-03', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

DROP TABLE IF EXISTS `pengajar`;
CREATE TABLE IF NOT EXISTS `pengajar` (
  `id_pengajar` int(9) NOT NULL AUTO_INCREMENT,
  `nip` char(12) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username_login` varchar(100) NOT NULL,
  `password_login` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'pengajar',
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `jabatan` varchar(200) NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengajar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nip`, `nama_lengkap`, `username_login`, `password_login`, `level`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `email`, `foto`, `website`, `jabatan`, `blokir`, `id_session`) VALUES
(27, '12345678', 'SunardI', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'pengajar', 'Tarikolot', 'Majalengka', '1996-01-07', 'L', 'Islam', '085989787654', 'ibeesnay@yahoo.com', 'pengajar_jasnay.png', 'http://ibeesnay.com', 'Kepala Sekolah', 'N', '123456'),
(29, '12345690', 'IBeESNay', 'ibeesnay', 'bc3c90520f4d689e8391dcede37cb249', 'pengajar', 'Ibs', 'Majalengka', '1998-05-03', 'L', 'Islam', '0989878987987', 'ibeesnay@gmail.com', 'guru_159362_jasnay1tr.png', '-', 'guru', 'N', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

DROP TABLE IF EXISTS `pengaturan`;
CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id_setelan` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `kepala_sekolah` varchar(50) NOT NULL,
  `favicon` char(100) NOT NULL,
  PRIMARY KEY (`id_setelan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_setelan`, `nama_sekolah`, `kepala_sekolah`, `favicon`) VALUES
(1, 'IBeESNay', 'Ir. Sunardi, s.kom', 'esay_356109_favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_esay`
--

DROP TABLE IF EXISTS `quiz_esay`;
CREATE TABLE IF NOT EXISTS `quiz_esay` (
  `id_quiz` int(9) NOT NULL AUTO_INCREMENT,
  `id_tq` int(9) NOT NULL,
  `pertanyaan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `jenis_soal` varchar(50) NOT NULL DEFAULT 'esay',
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_quiz`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `quiz_esay`
--

INSERT INTO `quiz_esay` (`id_quiz`, `id_tq`, `pertanyaan`, `gambar`, `tgl_buat`, `jenis_soal`, `aktif`) VALUES
(100, 70, '&lt;p&gt;PHP merupakan bahasa pemrograman berbasis&amp;nbsp;?&lt;/p&gt;\r\n', '', '2015-06-04', 'esay', 'Y'),
(101, 70, '&lt;p&gt;JavaScript merupakan bahasa pemrogramman disisi ?&lt;/p&gt;\r\n', '', '2015-06-05', 'esay', 'Y'),
(102, 70, '&lt;p&gt;Sebutkan 3 aplikasi web server ?&lt;/p&gt;\r\n', '', '2015-06-05', 'esay', 'Y'),
(103, 70, '&lt;p&gt;Jelaskan perbedaan bahasa pemrogramman disisi client dan disisi server ?&lt;/p&gt;\r\n', '', '2015-06-05', 'esay', 'Y'),
(104, 70, '&lt;p&gt;WAMP merupakan aplikasi web server dan merupakan singkatan dari apa ?&lt;/p&gt;\r\n', '', '2015-06-05', 'esay', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_pilganda`
--

DROP TABLE IF EXISTS `quiz_pilganda`;
CREATE TABLE IF NOT EXISTS `quiz_pilganda` (
  `id_quiz` char(7) NOT NULL,
  `id_tq` int(9) NOT NULL,
  `pertanyaan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `jenis_soal` varchar(50) NOT NULL DEFAULT 'pilganda',
  PRIMARY KEY (`id_quiz`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_pilganda`
--

INSERT INTO `quiz_pilganda` (`id_quiz`, `id_tq`, `pertanyaan`, `gambar`, `tgl_buat`, `jenis_soal`) VALUES
('PG_010', 71, '&lt;p&gt;Etika peserta diskusi antara lain adlah sebagai berikut,&amp;nbsp;&lt;strong&gt;kecuali&amp;nbsp;&lt;/strong&gt;...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_009', 71, '&lt;p&gt;Arti dari persepsi adalah ..&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_008', 71, '&lt;p&gt;Unsur-unsur diskusi diantaranya adalah sebagai berikut,&amp;nbsp;&lt;strong&gt;kecuali&amp;nbsp;&lt;/strong&gt;..&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_007', 71, '&lt;p&gt;Bentuk-bentuk diskusi diantaranya adalah ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_006', 71, '&lt;p&gt;&lt;strong&gt;Diskusi&amp;nbsp;&lt;/strong&gt;berasal dari bahasa ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_011', 71, '&lt;p&gt;Etika sekretaris adalah sebagai berikut antara lain ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_012', 71, '&lt;p&gt;Berikut merupakan persiapan dalam diskusi kecuali ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_013', 71, '&lt;p&gt;Arti dari kata&amp;nbsp;&lt;strong&gt;discutere&amp;nbsp;&lt;/strong&gt;adalah ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_014', 71, '&lt;p&gt;Membuka dan menutup diskusi adalah tugas ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda'),
('PG_015', 71, '&lt;p&gt;Diskusi yang mengacu pada terbatasnya jumlah peserta disebut ...&lt;/p&gt;\r\n', '', '2015-06-07', 'pilganda');

--
-- Triggers `quiz_pilganda`
--
DROP TRIGGER IF EXISTS `hps_jawaban_pg`;
DELIMITER //
CREATE TRIGGER `hps_jawaban_pg` AFTER DELETE ON `quiz_pilganda`
 FOR EACH ROW DELETE FROM jawaban_pilganda WHERE id_quiz='OLD.id_quiz'
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_siswa`
--

DROP TABLE IF EXISTS `registrasi_siswa`;
CREATE TABLE IF NOT EXISTS `registrasi_siswa` (
  `id_registrasi` int(9) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username_login` varchar(50) NOT NULL,
  `password_login` varchar(50) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `th_masuk` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `id_session_soal` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'siswa',
  PRIMARY KEY (`id_registrasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(9) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username_login` varchar(50) NOT NULL,
  `password_login` varchar(50) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `th_masuk` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `id_session_soal` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'siswa',
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_lengkap`, `username_login`, `password_login`, `id_kelas`, `jabatan`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `nama_ayah`, `nama_ibu`, `th_masuk`, `email`, `no_telp`, `foto`, `blokir`, `id_session`, `id_session_soal`, `level`) VALUES
(14, '12131807', 'SunardI', 'ibeesnay', 'bc3c90520f4d689e8391dcede37cb249', '9a', '1', 'Tarikolot', 'Majalengka', '0000-00-00', 'L', 'Islam', 'Jumhali', 'Juyah', '2013', 'ibeesnay@yahoo.com', '085290156462a', 'siswa_690582_B612-2015-02-21-10-10-22.jpg', 'N', '12131807', '12131807', 'siswa'),
(15, '123456', 'Surya Pradana', '123456', 'e10adc3949ba59abbe56e057f20f883e', '7b', '1', 'Batujurung', '', '0000-00-00', 'L', 'Islam', '', '', '', '', '', '', 'N', '123456', '123456', 'siswa'),
(16, '1135', 'Sampel 1', '1135', 'fd2c5e4680d9a01dba3aada5ece22270', '7a', '1', 'IBS', 'IBS', '0000-00-00', 'L', 'Islam', '', '', '', '', '', '', 'N', '1135', '1135', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_sudah_mengerjakan`
--

DROP TABLE IF EXISTS `siswa_sudah_mengerjakan`;
CREATE TABLE IF NOT EXISTS `siswa_sudah_mengerjakan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_tq` int(20) NOT NULL,
  `id_siswa` varchar(200) NOT NULL,
  `koreksi` enum('S','B') NOT NULL DEFAULT 'B',
  `hits` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `siswa_sudah_mengerjakan`
--

INSERT INTO `siswa_sudah_mengerjakan` (`id`, `id_tq`, `id_siswa`, `koreksi`, `hits`) VALUES
(62, 71, '15', 'B', 1),
(63, 71, '15', 'B', 1),
(64, 71, '15', 'B', 1),
(65, 71, '15', 'B', 1),
(66, 71, '15', 'B', 1),
(67, 71, '15', 'B', 1),
(68, 71, '15', 'B', 1),
(69, 71, '15', 'B', 1),
(70, 71, '15', 'B', 1),
(71, 71, '15', 'B', 1),
(72, 71, '16', 'B', 1),
(73, 71, '16', 'B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topik_quiz`
--

DROP TABLE IF EXISTS `topik_quiz`;
CREATE TABLE IF NOT EXISTS `topik_quiz` (
  `id_tq` int(9) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `id_matapelajaran` varchar(10) NOT NULL,
  `tgl_buat` date NOT NULL,
  `pembuat` varchar(100) NOT NULL,
  `waktu_pengerjaan` int(50) NOT NULL,
  `info` text NOT NULL,
  `terbit` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_tq`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `topik_quiz`
--

INSERT INTO `topik_quiz` (`id_tq`, `judul`, `id_kelas`, `id_matapelajaran`, `tgl_buat`, `pembuat`, `waktu_pengerjaan`, `info`, `terbit`) VALUES
(70, 'BAB 1 - Web programming', '9a,9b,9c', 'IPS3', '2015-06-04', '27', 1200, '', 'Y'),
(71, 'BAB 1 - KEUANGAN', '7a,7b,7c', 'BI1', '2015-06-07', '29', 1200, '-', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
