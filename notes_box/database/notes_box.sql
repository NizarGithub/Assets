-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 02:13 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notes_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `box_acount`
--

CREATE TABLE IF NOT EXISTS `box_acount` (
`id_acount` int(11) NOT NULL,
  `id_k_acount` int(11) NOT NULL,
  `nama_acount` varchar(50) NOT NULL,
  `username_acount` varchar(30) NOT NULL,
  `password_acount` varchar(30) NOT NULL,
  `aktif` enum('Y','N','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `box_acount`
--

INSERT INTO `box_acount` (`id_acount`, `id_k_acount`, `nama_acount`, `username_acount`, `password_acount`, `aktif`) VALUES
(1, 1, 'Facebook', 'ghies_r@yahoo.com', 'laksamana4615', 'Y'),
(2, 2, 'Google Mail', 'agislaksamana46@gmail.com', 'laksamana4615', 'Y'),
(6, 2, 'Yahoo Mail', 'agis_laksamana@yahoo.com', 'laksamana4615', 'Y'),
(7, 6, 'Xampp', 'agis', 'laksamana4615', 'Y'),
(8, 5, 'PC', 'Agis Laksamana', 'raptor', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kata_mutiara`
--

CREATE TABLE IF NOT EXISTS `kata_mutiara` (
`id_kamut` int(11) NOT NULL,
  `id_k_kamut` int(11) NOT NULL,
  `kamut` text NOT NULL,
  `pengutip` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kata_mutiara`
--

INSERT INTO `kata_mutiara` (`id_kamut`, `id_k_kamut`, `kamut`, `pengutip`) VALUES
(1, 4, '<p>Tidak ada yang mudah...</p>\r\n\r\n<p>tapi tidak ada yang tidak mungkin !</p>\r\n', 'Napoleon'),
(2, 4, '<p>kau bisa bersembunyi dari kesalahanmu</p>\r\n\r\n<p>tapi tidak dari penyesalanmu...</p>\r\n\r\n<p>kau bisa bermain dengan dramamu</p>\r\n\r\n<p>tapi tidak dengan karmamu...</p>\r\n', 'Anonymous'),
(3, 4, '<p>kadang lebih baik diam daripada menceritakan masalahmu...</p>\r\n\r\n<p>karena kamu tahu, sebagian orang hanya penasaran bukan karena mereka peduli.</p>\r\n', 'Anonymous'),
(4, 5, '<p>jika boleh memilih...</p>\r\n\r\n<p>aku lebih memilih tidak pernah mengenal kamu</p>\r\n\r\n<p>daripada harus melupakan kamu...</p>\r\n', 'Anonymous'),
(5, 5, '<p>cara terbaik untuk menghindari rasa kecewa adalah dengan tak terlalu berharap apapun dan dari siapapun...</p>\r\n', 'Anonymous'),
(6, 4, '<p>lebih baik menunggu orang yang tepat</p>\r\n\r\n<p>daripada menghabiskan waktu dengan orang yang salah...</p>\r\n', 'Anonymous'),
(7, 5, '<p>ketika aku sudah mulai<strong> DIAM</strong></p>\r\n\r\n<p>itu karena aku sudah mulai <strong>KECEWA</strong> dengan keadaan !</p>\r\n', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_acount`
--

CREATE TABLE IF NOT EXISTS `kategori_acount` (
`id_k_acount` int(11) NOT NULL,
  `nama_k_acount` varchar(50) NOT NULL,
  `keterangan_k_acount` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori_acount`
--

INSERT INTO `kategori_acount` (`id_k_acount`, `nama_k_acount`, `keterangan_k_acount`) VALUES
(1, 'Sosial Media', 'Media massa di dunia maya'),
(2, 'Email', 'Surat Elektronik'),
(5, 'PC (Personal Computer)', 'Alat Elektronik'),
(6, 'Aplikasi', 'Aplikasi (software)');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kamut`
--

CREATE TABLE IF NOT EXISTS `kategori_kamut` (
`id_k_kamut` int(11) NOT NULL,
  `nama_k_kamut` varchar(50) NOT NULL,
  `ket_k_kamut` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori_kamut`
--

INSERT INTO `kategori_kamut` (`id_k_kamut`, `nama_k_kamut`, `ket_k_kamut`) VALUES
(1, 'Cinta', 'Kata Mutiara Tentang Cinta'),
(4, 'Bijak', 'Kata Mutiara Bijaksana'),
(5, 'Sedih', 'Kata Mutiara Sedih'),
(6, 'Romantis', 'Kata Mutiara Romantis'),
(7, 'Lucu', 'Kata Mutiara Lucu');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_puisi`
--

CREATE TABLE IF NOT EXISTS `kategori_puisi` (
`id_k_puisi` int(11) NOT NULL,
  `nama_k_puisi` varchar(50) NOT NULL,
  `ket_k_puisi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori_puisi`
--

INSERT INTO `kategori_puisi` (`id_k_puisi`, `nama_k_puisi`, `ket_k_puisi`) VALUES
(4, 'Romantis', 'Bersifat mesra'),
(5, 'Cinta', '(no defined)');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktifitas`
--

CREATE TABLE IF NOT EXISTS `log_aktifitas` (
`id_log` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `aktifitas` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`id_log`, `id_user`, `aktifitas`, `tanggal`, `waktu`) VALUES
(1, 1, 'Menambah data akun baru', '2015-08-31', '09:08:37'),
(2, 1, 'Mengubah data akun', '2015-08-31', '09:08:37'),
(3, 1, 'Menghapus data akun', '2015-08-31', '09:08:37'),
(4, 1, 'Mengakses aplikasi', '2015-08-31', '09:46:44'),
(5, 1, 'Keluar dari akses aplikasi', '2015-08-31', '09:46:44'),
(6, 14, 'Mengakses aplikasi', '2015-08-31', '09:47:39'),
(7, 14, 'Keluar dari akses aplikasi', '2015-08-31', '09:47:39'),
(8, 1, 'Mengakses aplikasi', '2015-08-31', '11:37:31'),
(9, 1, 'Keluar dari akses aplikasi', '2015-08-31', '11:37:31'),
(10, 1, 'Mengakses aplikasi', '2015-08-31', '14:03:12'),
(11, 1, 'Menambah data kata mutiara baru', '2015-08-31', '14:03:12'),
(12, 1, 'Menambah data kata mutiara baru', '2015-08-31', '14:03:12'),
(13, 1, 'Keluar dari akses aplikasi', '2015-08-31', '14:03:12'),
(14, 1, 'Mengakses aplikasi', '2015-08-31', '18:19:33'),
(15, 1, 'Mengakses aplikasi', '2015-08-31', '21:30:32'),
(16, 1, 'Keluar dari akses aplikasi', '2015-08-31', '21:30:32'),
(17, 1, 'Mengakses aplikasi', '2015-09-01', '17:22:03'),
(18, 1, 'Keluar dari akses aplikasi', '2015-09-01', '17:22:03'),
(19, 14, 'Mengakses aplikasi', '2015-09-01', '17:48:20'),
(20, 14, 'Keluar dari akses aplikasi', '2015-09-01', '17:48:20'),
(21, 1, 'Mengakses aplikasi', '2015-09-01', '18:08:03'),
(22, 1, 'Keluar dari akses aplikasi', '2015-09-01', '18:08:03'),
(23, 1, 'Mengakses aplikasi', '2015-09-01', '19:04:57'),
(24, 1, 'Menambah data kata mutiara baru', '2015-09-01', '19:04:57'),
(25, 1, 'Menambah data kata mutiara baru', '2015-09-01', '19:04:57'),
(26, 1, 'Menambah data kata mutiara baru', '2015-09-01', '19:04:57'),
(27, 1, 'Menambah data kata mutiara baru', '2015-09-01', '19:04:57'),
(28, 1, 'Keluar dari akses aplikasi', '2015-09-01', '19:04:57'),
(29, 1, 'Mengakses aplikasi', '2015-09-02', '09:03:12'),
(30, 1, 'Melengkapi Profil', '2015-09-02', '09:03:12'),
(31, 1, 'Melengkapi Profil', '2015-09-02', '09:03:12'),
(32, 1, 'Mengakses aplikasi', '2015-09-03', '14:00:52'),
(33, 1, 'Keluar dari akses aplikasi', '2015-09-03', '14:00:52'),
(34, 1, 'Mengakses aplikasi', '2015-09-03', '18:24:44'),
(35, 1, 'Mengakses aplikasi', '2015-09-04', '08:51:02'),
(36, 1, 'Menambah data box account baru', '2015-09-04', '08:51:02'),
(37, 1, 'Menghapus data box account', '2015-09-04', '08:51:02'),
(38, 1, 'Menghapus data box account', '2015-09-04', '08:51:02'),
(39, 1, 'Menambah data kata mutiara (english) baru', '2015-09-04', '08:51:02'),
(40, 1, 'Keluar dari akses aplikasi', '2015-09-04', '08:51:02'),
(41, 14, 'Mengakses aplikasi', '2015-09-04', '09:40:02'),
(42, 14, 'Keluar dari akses aplikasi', '2015-09-04', '09:40:02'),
(43, 1, 'Mengakses aplikasi', '2015-09-04', '10:11:50'),
(44, 1, 'Keluar dari akses aplikasi', '2015-09-04', '10:11:50'),
(45, 14, 'Mengakses aplikasi', '2015-09-04', '10:12:56'),
(46, 14, 'Melengkapi Profil', '2015-09-04', '10:12:56'),
(47, 14, 'Melengkapi Profil', '2015-09-04', '10:12:56'),
(48, 14, 'Melengkapi Profil', '2015-09-04', '10:12:56'),
(49, 14, 'Melengkapi Profil', '2015-09-04', '10:12:56'),
(50, 14, 'Melengkapi Profil', '2015-09-04', '10:12:56'),
(51, 14, 'Keluar dari akses aplikasi', '2015-09-04', '10:12:56'),
(52, 1, 'Mengakses aplikasi', '2015-09-04', '11:04:22'),
(53, 1, 'Keluar dari akses aplikasi', '2015-09-04', '11:04:22'),
(54, 14, 'Mengakses aplikasi', '2015-09-04', '12:54:23'),
(55, 14, 'Keluar dari akses aplikasi', '2015-09-04', '12:54:23'),
(56, 1, 'Mengakses aplikasi', '2015-09-04', '13:04:01'),
(57, 1, 'Mengakses aplikasi', '2015-09-04', '15:36:29'),
(58, 1, 'Keluar dari akses aplikasi', '2015-09-04', '15:36:29'),
(59, 14, 'Mengakses aplikasi', '2015-09-04', '18:24:41'),
(60, 14, 'Keluar dari akses aplikasi', '2015-09-04', '18:24:41'),
(61, 1, 'Mengakses aplikasi', '2015-09-04', '18:35:21'),
(62, 1, 'Mengubah foto Profil', '2015-09-04', '18:35:21'),
(63, 1, 'Mengubah foto Profil', '2015-09-04', '18:35:21'),
(64, 1, 'Keluar dari akses aplikasi', '2015-09-04', '18:35:21'),
(65, 14, 'Mengakses aplikasi', '2015-09-04', '23:38:57'),
(66, 14, 'Melengkapi Profil', '2015-09-04', '23:38:57'),
(67, 14, 'Mengubah biodata diri sendiri', '2015-09-04', '23:38:57'),
(68, 14, 'Mengubah biodata diri sendiri', '2015-09-04', '23:38:57'),
(69, 14, 'Mengubah biodata diri sendiri', '2015-09-04', '23:38:57'),
(70, 14, 'Mengubah biodata diri sendiri', '2015-09-04', '23:38:57'),
(71, 14, 'Mengubah biodata diri sendiri', '2015-09-05', '00:45:58'),
(72, 14, 'Mengubah biodata diri sendiri', '2015-09-05', '00:46:26'),
(73, 14, 'Keluar dari akses aplikasi', '2015-09-04', '23:38:57'),
(74, 1, 'Mengakses aplikasi', '2015-09-05', '18:32:55'),
(75, 1, 'Mengubah biodata diri sendiri', '2015-09-05', '19:25:14'),
(76, 1, 'Membaca puisi', '2015-09-08', '23:55:32'),
(77, 1, 'Mengubah foto Profil', '2015-09-08', '23:58:13'),
(78, 1, 'Mengubah foto Profil', '2015-09-08', '23:59:06'),
(79, 1, 'Menambah data persatuan baru', '2015-09-29', '08:10:11'),
(80, 1, 'Menambah data persatuan baru', '2015-09-29', '08:10:48'),
(81, 1, 'Menambah data persatuan baru', '2015-09-29', '08:11:27'),
(82, 1, 'Mengubah password', '2015-09-29', '08:09:20'),
(83, 1, 'Menambah data persatuan baru', '2015-10-11', '15:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `mantan`
--

CREATE TABLE IF NOT EXISTS `mantan` (
`id_mantan` int(11) NOT NULL,
  `nama_mantan` varchar(30) NOT NULL,
  `alamat_mantan` text NOT NULL,
  `tl_mantan` varchar(30) NOT NULL,
  `tgl_lahir_mantan` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `foto_mantan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mutiara_en`
--

CREATE TABLE IF NOT EXISTS `mutiara_en` (
`id_kamut_en` int(11) NOT NULL,
  `id_k_kamut` int(11) NOT NULL,
  `kamut_en` text NOT NULL,
  `arti` text NOT NULL,
  `pengutip` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mutiara_en`
--

INSERT INTO `mutiara_en` (`id_kamut_en`, `id_k_kamut`, `kamut_en`, `arti`, `pengutip`) VALUES
(1, 1, '<p>is not about how much you say i love you...</p>\r\n\r\n<p>but how much you prove that it&#39;s true !</p>\r\n', '<p>ini bukan tentang seberapa banyak kamu bilang cinta...</p>\r\n\r\n<p>tapi seberapa banyak kamu meyakinkan bahwa itu semua memang benar !</p>\r\n', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `persatuan`
--

CREATE TABLE IF NOT EXISTS `persatuan` (
`id_persatuan` int(11) NOT NULL,
  `kategori_persatuan` varchar(30) NOT NULL,
  `nama_persatuan` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `tgl_persatuan` date NOT NULL,
  `alamat_persatuan` text NOT NULL,
  `kembali` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `persatuan`
--

INSERT INTO `persatuan` (`id_persatuan`, `kategori_persatuan`, `nama_persatuan`, `jumlah`, `tgl_persatuan`, `alamat_persatuan`, `kembali`) VALUES
(1, 'Pernikahan', 'A Unang', '50.000', '2013-08-13', 'Godabaya, Sukajaya RT.08', '-'),
(2, 'Pernikahan', 'Iqbal', '35.000', '2014-10-14', 'Godabaya, Simpangsari RT.01', '-'),
(3, 'Pernikahan', 'Ihin', '30.000', '2014-03-19', 'Godabaya, Sukajaya RT.07', '-'),
(4, 'Pernikahan', 'Yogi', '30.000', '2014-02-05', 'Godabaya, RT.06', '-'),
(5, 'Pernikahan', 'Amir (Agus)', '25.000', '2014-09-12', 'Godabaya, RT.05', '-'),
(6, 'Pernikahan', 'Rido', '30.000', '2015-05-21', 'Godabaya, RT.02', '-'),
(7, 'Pernikahan', 'Tiana', '20.000', '2015-07-30', 'Godabaya, RT.05', '-'),
(8, 'Pernikahan', 'Wahid', '30.000', '2015-09-27', 'Godabya, RT.03', '-'),
(9, 'Pernikahan', 'Apin', '30.000', '2015-09-27', 'Godabya, Blok Cisampih', '-'),
(10, 'Sunatan', 'Bp Lena', '30.000', '2015-09-27', 'Godabaya, RT.05', '-'),
(11, 'Pernikahan', 'Lasmana', '100.000', '2015-10-01', 'Godabaya, RT.06', '-');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
`id_profil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` longtext NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `berat_badan` varchar(4) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `id_user`, `alamat`, `tgl_lahir`, `tempat_lahir`, `tempat_tinggal`, `jenis_kelamin`, `agama`, `pekerjaan`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `foto`) VALUES
(1, 1, 'Blok Godabaya\r\nDs. Sukadana\r\nKec. Malausma\r\nKab. Majalengka', '1996-06-14', 'Majalengka', 'Godabaya, Majalengka', 'L', 'Islam', 'Software Engineer', '165', '51', '-', 'music.png'),
(2, 14, 'Godabaya', '1996-06-14', 'Majalengka', 'Godabaya', 'L', 'Islam', 'Software Enggineer', '162', '52', 'AB', 'ismey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `puisi`
--

CREATE TABLE IF NOT EXISTS `puisi` (
`id_puisi` int(11) NOT NULL,
  `id_k_puisi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `puisi` text NOT NULL,
  `pencipta` varchar(30) NOT NULL,
  `tgl_ditulis` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `puisi`
--

INSERT INTO `puisi` (`id_puisi`, `id_k_puisi`, `judul`, `puisi`, `pencipta`, `tgl_ditulis`) VALUES
(2, 5, 'U & Me Raptors', '<p>Mentari yangg indah<br />\r\nmenyinari alam semesta<br />\r\nhingga senja<br />\r\nmenjemput sang surya</p>\r\n\r\n<p><br />\r\nber&igrave;bu rangkaian bintang<br />\r\nmenghiasi malam<br />\r\nbayangan sinar rembulan<br />\r\nmembuat hati sangat tentram</p>\r\n\r\n<p><br />\r\nhembusan angin malam<br />\r\nseakan mengingatkan ku pada drimu...<br />\r\nkau slalu hadir di&nbsp;dalam pikiranku<br />\r\ndan memaksa jiwa ini untuk membelenggu...</p>\r\n\r\n<p><br />\r\ntetesan air seakan menggambarkan ketenangan hatiku<br />\r\nkala berjumpa denganmu<br />\r\nmenghiasi hari-hariku...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nEVERYTHING BEAUTIFUL<br />\r\nRemind Me Of You<br />\r\nthnks you 4 coming into my life<br />\r\ni luph u<br />\r\nRA<br />\r\nforever</p>\r\n', 'Agis Laksamana', '2012-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(10) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '2',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `forget_key` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `locktype` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `level`, `blokir`, `id_session`, `last_login`, `forget_key`, `locktype`) VALUES
(1, 'raptors', '4438fc033f8aef433f9db5348b70e8e5', 'Agis Laksamana', 'agislaksamana46@gmail.com', '1', 'N', '0gbr0ghhjq54qkmn17rpmcl2g2', '2015-10-11 15:30:53', NULL, '1'),
(14, 'agis', '10c150b123d042a768fa3188e7bd2e1c', 'Agis Rahma Herdiana', 'agislaksamana46@gmail.com', '2', 'N', 'tr2mnskspv5cf6rr717ivh2645', '2015-09-04 23:38:57', NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box_acount`
--
ALTER TABLE `box_acount`
 ADD PRIMARY KEY (`id_acount`);

--
-- Indexes for table `kata_mutiara`
--
ALTER TABLE `kata_mutiara`
 ADD PRIMARY KEY (`id_kamut`);

--
-- Indexes for table `kategori_acount`
--
ALTER TABLE `kategori_acount`
 ADD PRIMARY KEY (`id_k_acount`);

--
-- Indexes for table `kategori_kamut`
--
ALTER TABLE `kategori_kamut`
 ADD PRIMARY KEY (`id_k_kamut`);

--
-- Indexes for table `kategori_puisi`
--
ALTER TABLE `kategori_puisi`
 ADD PRIMARY KEY (`id_k_puisi`);

--
-- Indexes for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mantan`
--
ALTER TABLE `mantan`
 ADD PRIMARY KEY (`id_mantan`);

--
-- Indexes for table `mutiara_en`
--
ALTER TABLE `mutiara_en`
 ADD PRIMARY KEY (`id_kamut_en`);

--
-- Indexes for table `persatuan`
--
ALTER TABLE `persatuan`
 ADD PRIMARY KEY (`id_persatuan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `puisi`
--
ALTER TABLE `puisi`
 ADD PRIMARY KEY (`id_puisi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box_acount`
--
ALTER TABLE `box_acount`
MODIFY `id_acount` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kata_mutiara`
--
ALTER TABLE `kata_mutiara`
MODIFY `id_kamut` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_acount`
--
ALTER TABLE `kategori_acount`
MODIFY `id_k_acount` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori_kamut`
--
ALTER TABLE `kategori_kamut`
MODIFY `id_k_kamut` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_puisi`
--
ALTER TABLE `kategori_puisi`
MODIFY `id_k_puisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `mantan`
--
ALTER TABLE `mantan`
MODIFY `id_mantan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mutiara_en`
--
ALTER TABLE `mutiara_en`
MODIFY `id_kamut_en` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `persatuan`
--
ALTER TABLE `persatuan`
MODIFY `id_persatuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `puisi`
--
ALTER TABLE `puisi`
MODIFY `id_puisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
