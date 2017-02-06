-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 05:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `id_ads` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` date NOT NULL,
  PRIMARY KEY (`id_ads`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id_ads`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(3, 'Airlines', 'pegipegi.com', 'sm.jpg', '2016-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tags` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL,
  `sumber` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `id_user`, `judul`, `judul_seo`, `headline`, `isi_artikel`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tags`, `publish`, `sumber`) VALUES
(4, 2, 1, 'Teknik Looping Didalam Looping Disertai Studi Kasusnya', 'teknik-looping-didalam-looping-disertai-studi-kasusnya', 'Y', '<p>Dalam logika pemrograman, looping (perulangan) digunakan untuk mengulang suatu proses. Namun, dalam tutorial kali ini, saya tidak akan membahas dasar-dasar looping (perulangan), jadi saya langsung aja ke permasalahannya mengapa diperlukan looping didalam looping? Dalam kasus tertentu, looping saja tidaklah cukup, misalnya membuat rekap data yang kompleks dari beberapa tabel dan menampilkan masing-masing berita dalam suatu kategori. Dalam kedua kasus tersebut diperlukan looping didalam looping (while didalam while).</p>\r\n<p>Agar tidak tambah bingung, saya akan berikan contohnya secara bertahap, biasanya dalam menampilkan data dalam suatu tabel kategori hanya diperlukan satu looping, contoh skripnya sebagai berikut:</p>\r\n<pre class="language-php"><code>&lt;?php\r\ninclude "koneksi.php";\r\necho "&lt;h3&gt;Daftar Kategori&lt;/h3&gt;";\r\n$kategori=mysql_query("select * from kategori");\r\nwhile($k=mysql_fetch_array($kategori)){\r\n  echo "&lt;li&gt;$k[nama_kategori]&lt;/li&gt;";\r\n}\r\n?&gt;</code></pre>\r\n<p>Apabila dijalankan di browser, maka hasilnya dapat dilihat pada gambar berikut:</p>\r\n<p><img src="/blog/editor/images/image/kategori.jpg" alt="" width="558" height="254" /></p>\r\n<p>Selanjutnya, kita akan menampilkan beberapa berita didalam masing-masing kategori. Logikanya, setelah looping (while) untuk menampilkan kategori, maka perlu diselipkan satu looping lagi untuk menampilkan berita didalam looping kategori. Dan tentu saja, berita yang tampil haruslah berhubungan dengan kategorinya.</p>\r\n<p>Untuk itu, coba perhatikan dulu relasi antara tabel kategori dengan tabel berita pada gambar berikut:</p>\r\n<p><img src="/blog/editor/images/image/tabel.jpg" alt="" width="368" height="181" /></p>\r\n<p>Kemudian baru kita bikin skripnya sebagai berikut:</p>\r\n<p>Sekarang coba jalankan di browser, maka hasilnya dapat dilihat pada gambar berikut:</p>\r\n<p><img src="/blog/editor/images/image/beritadalamkategori.jpg" alt="" width="573" height="662" /></p>\r\n<p>Saya juga telah mengimplementasikan teknik looping didalam looping di CMS Lokomedia pada templates eL jQuery ala Yahoo, silahkan buka file kiri.php pada folder templates/eljquery-yahoo. Hasilnya dapat dilihat pada gambar berikut:</p>\r\n<p><img src="/blog/editor/images/image/beritakategori.jpg" alt="" width="600" height="479" /></p>\r\n<p>Oke, demikianlah sekilas kegunaan teknik looping dalam looping.</p>', 'Minggu', '2017-01-01', '22:41:47', 'art-2.jpg', 5, 'PHP', 'Y', 'bukulokomedia.com'),
(15, 3, 1, 'Siapa Bilang Programmer Tidak Romantis, Ini Puisi Karya Mereka', 'siapa-bilang-programmer-tidak-romantis-ini-puisi-karya-mereka', 'N', '<p style="text-align: center;"><span style="text-decoration: underline;"><span style="font-size: small;"><strong>IF THE LOVE IS PROGRAM</strong></span></span></p>\r\n<p style="text-align: left;"><strong><br /></strong><span style="color: #3366ff;">Jika cinta itu OOP,</span></p>\r\n<p style="text-align: left;">maka, cintaku padamu bagaikan sebuah kelas yang extend ke kelas hati. Dimana kelas itu memiliki properties dengan atribut final dengan prefilages private, tidak akan berubah-ubah valuenya hingga akhir waktu.</p>\r\n<p style="text-align: left;"><span style="color: #3366ff;">&nbsp;Jika cinta itu Tipe Data,</span></p>\r\n<p style="text-align: left;">maka, cintaku padamu adalah boolean yang akan selalu kupertahankan true.</p>\r\n<p style="text-align: left;"><span style="color: #3366ff;">Jika cinta itu Method,</span></p>\r\n<p style="text-align: left;">maka, Method itu adalah Method yang bersifat rekrusif yang tidak akan pernah berhenti di ekseskusi jika status hidupku belum mati.</p>\r\n<p style="text-align: left;"><span style="color: #3366ff;">Jika cinta itu Object,</span></p>\r\n<p>maka, fungsi destroy(); object tidak akan pernah bisa dipakai. karena sdh di override dengan fungsi looping didalamnya.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu array,</span></p>\r\n<p>maka, cintaku padamu tak pernah empty jika di unset().</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu JAVA,</span></p>\r\n<p>maka, kemurnian code cinta ini melebihi kelas manapun yang pernah dibuat. kelas cintaku padamu tidak akan pernah di akses oleh kelas-kelas lain dengan cara apapun.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu PHP,</span></p>\r\n<p>maka, cintaku padamu tidak akan berhenti ketika seseorang asing mencoba menambahkan code die(); karena fungsi itu sudah aku hapus dari core php yang ada.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu Sistem Operasi,</span></p>\r\n<p>maka, tak akan kubiarkan cinta ini terkena virus yang bisa mengganggu stabilitas dan eksistensinya sebagaisistem operasi yang tangguh. kalau perlu akan kugunakan sistem operasi yang kebal virus.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu Sequential,</span></p>\r\n<p>maka tidak akan ada syarat apapun didalam IF..Karena cinta itu buta.</p>\r\n<p><span style="color: #3366ff;">jika cinta itu SQL,</span></p>\r\n<p>maka cintaku tersusun rapi di dalam hati mu&hellip;&hellip;&hellip;</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu router,</span></p>\r\n<p>maka aku akan selalu masuk global conf. mode untuk membuatmu tetap terconfigure.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu file,</span></p>\r\n<p>maka, akan ku chown -R milikku:milikku cintamu.conf kemudian aku chmod 700 cintamu.conf agar yang bisa akses hanya aku seorang.</p>\r\n<p><span style="color: #3366ff;">Jika cinta itu binary,</span></p>\r\n<p>Aku akan jadi angka &ldquo;1&Prime; dan kamu adalah angka &ldquo;0&Prime; Oleh sebab itu ping kan lah hatimu selalu denganku, agar aku selalu menjadi service yang selalu berjalan sehingga tidak ada kode shutdown -s -f -t 0 &ldquo;tidak akan pernah berhenti mencintaimu&rdquo; SELALU UNTUKMU</p>\r\n<p><span style="color: #3366ff;">Seandainya hatimu adalah sebuah system,</span></p>\r\n<p>maka aku akan scan kamu untuk mengetahui port mana yang terbuka Sehingga tidak ada keraguan saat aku c:&gt; nc -l -o -v -e ke hatimu,tapi aku hanya berani ping di belakang anonymouse proxy, inikah rasanya jatuh cinta sehingga membuatku seperti pecundang atau aku memang pecundang sejati whatever!</p>\r\n<p><span style="color: #3366ff;">Seandainya hatimu adalah sebuah system,</span></p>\r\n<p>ingin rasanya aku manfaatkan vulnerabilitiesmu, pake PHP injection Terus aku ls -la; find / -perm 777 -type d,sehingga aku tau kalo di hatimu ada folder yang bisa ditulisi atau adakah free space buat aku?. apa aku harus pasang backdor "Remote Connect-Back Shell"jadi aku tinggal nunggu koneksi dari kamu saja, biar aku tidak merana seperti ini.</p>\r\n<p><span style="color: #3366ff;">Seandainya hatimu adalah sebuah system,</span></p>\r\n<p>saat semua request-ku diterima aku akan nogkrong terus di bugtraq untuk mengetahui bug terbarumu maka aku akan patch n pacth terus,aku akan jaga service-mu jangan sampai crash n aku akan menjadi firewallmu aku akan pasang portsentry, dan menyeting error pagemu " The page cannot be found Coz Has Been Owned by Someone get out!" aku janji gak bakalan ada macelinious program atau service yang hidden, karena aku sangat sayang dan mencintaimu.</p>\r\n<p><span style="color: #3366ff;">Seandainya hatimu adalah sebuah system,</span></p>\r\n<p>jangan ada kata "You dont have permission to access it" untuk aku, kalau ga mau di ping flood Atau DDos Attack jangan ah....! kamu harus menjadi sang bidadari penyelamatku.</p>\r\n<p><span style="color: #3366ff;">Seandainya hatimu adalah sebuah system, ...?</span></p>\r\n<p class="MsoNormal" style="margin-top: 0cm; margin-right: -1.0pt; margin-bottom: .0001pt; margin-left: 0cm; line-height: normal; mso-pagination: none; mso-layout-grid-align: none; text-autospace: none;">Tapi sayang hatimu bukanlah system</p>\r\n<p>kamu adalah sang bidadari impianku, yang telah mengacaukan systemku!</p>\r\n<p>Suatu saat nanti aku akan datang n mengatakan kalau di hatiku sudah terinfeksi virus yang Menghanyutkan,</p>\r\n<p>Ga ada anti virus yang dapat menangkalnya selain ...kamu.</p>', 'Senin', '2017-01-02', '18:54:59', 'img-3.jpg', 3, 'PHP', 'Y', ''),
(17, 1, 1, 'Hebat, Hacker Berhasil Bobol Data 134 Ribu Pasukan Amerika !', 'hebat-hacker-berhasil-bobol-data-134-ribu-pasukan-amerika-', 'Y', '<p><span style="color: #000000;">Benar, terdengar laporan bahwa <strong>134 ribu data</strong> dari USN berhasil di-hack. Data-data ini mencakup email, nomor telepon, panggilan, dan surat-surat. Nah, bagaimana cara hacker tersebut meretas data penting tersebut ?</span></p>\r\n<p><span style="color: #000000;">Salah satu angkatan laut yang menggunakan laptop dengan merek <strong>HP&nbsp;</strong>terkena <span style="color: #0000ff;">hack</span>. Data-data yang berhasil diretas itu berasal dari laptop tersebut. Pihak HP menyadari bahwa penyerangan itu dilakukan pada tanggal 27 Oktober lalu.</span></p>\r\n<p><span style="color: #000000;">Namun, pihak <strong>Navy&nbsp;</strong>mengatakan :</span></p>\r\n<p><span style="color: #000000;">"Setelah analisis yang diberikan oleh <strong>HPES&nbsp;</strong>(Hewlett Packard Enterpise Service) dan penyelidikan yang terus dilakukan oleh <strong>NCIS&nbsp;</strong>(Naval Criminal Investigative Service), ditetapkan bahwa pada anggal 22 November 2016, iformasi sensitif dari 134.386 angkatan laut telah diakses oleh pihka yang tidak dikenal."</span></p>\r\n<p><span style="color: #000000;"><strong>Rober Burke&nbsp;</strong>selaku Chief of Naval Personnel Vice Adm. berujar :</span></p>\r\n<p><span style="color: #000000;">"Pihak Navy benar-benar mengambil insiden ini sebagai kasus yang sangat serius. Sebab, ini adalah masalah kepercayaan untuk para angkatan laut kami." Dia melanjutkan, "Kami masih berada dalam tahap awal penyelidikan, dan tengah bekerja secepat mungkin untuk mengidentifikasi dan menjaga mereka yang menjadi korban dari kasus ini."</span></p>', 'Senin', '2017-01-02', '19:23:33', 'art-1.jpg', 1, 'Hacker', 'Y', 'jalantikus.com'),
(18, 1, 4, 'ANONYMOUS Ajak Semua Orang Nge-Hack ISIS dan Ngasih Tahu Caranya!', 'anonymous-ajak-semua-orang-ngehack-isis-dan-ngasih-tahu-caranya', 'Y', '<p><span style="color: #000000;">Peristiwa terorisme yang terjadi di kota Paris, Perancis memang menjadi perhatian beberapa hari ini. Penyerangan kelompok teroris ini juga mengundang reaksi keras dari Anonymous, sebuah kelompok <em>hacker</em> terbesar di dunia. Anonymous sudah mengibarkan bendera perang terhadap kelompok ISIS, yang diduga sebagai dalang di balik peristiwa terorisme yang terjadi. Nggak hanya sampai di situ, ANONYMOUS Ajak Semua Orang Nge-Hack ISIS dan Ngasih Tahu Caranya!</span></p>\r\n<p><span style="color: #000000;">Kelompok hacker Anonymous telah merilis panduan <em>hacking</em> untuk menyerang kelompok ISIS. Hal ini dilakukan untuk mengajak orang-orang di seluruh dunia untuk terlibat dan bersama-sama menyerang ISIS lewat jalur<em> hacking</em>. Terdapat tiga buah panduan yang disediakan Anonymous, yaitu sebagai berikut:</span></p>\r\n<p><span style="font-size: medium; font-family: arial, helvetica, sans-serif; color: #000000;">3 Panduan Hack ISIS dari Anonymous</span></p>\r\n<ol>\r\n<li><span style="font-size: small;">NoobGuide merupakan panduan bagi orang-orang yang ingin belajar "hacking". Panduan ini berisi dasar-dasar bahasa pemrograman, seperti HTML dan Phyton, setting VPN, serta cracking tools untuk memulai serangan DDoS.</span></li>\r\n<li><span style="font-size: small;">Reporter merupakan panduan membuat Twitterbot untuk mencari dan menemukan informasi penting di akun-akun Twitter milik ISIS.</span></li>\r\n<li><span style="font-size: small;">Searcher merupakan panduan untuk mencari dan menemukan website-website milik ISIS serta berbagai informasi penting di dalamnya.</span></li>\r\n</ol>\r\n<p><span style="color: #000000;">Panduan-panduan tersebut dapat kamu temukan di saluran Internet Relay Chat (IRC) milik Anonymous. Mereka menyimpan teks panduan <em>hacking</em> tersebut dalam Ghostbin, semacam Pastebin.&nbsp;</span></p>', 'Selasa', '2017-01-03', '11:26:43', 'art-4.jpg', 0, 'Hacker', 'Y', 'jalantikus.com'),
(20, 1, 1, 'Inilah 10 Proyek Google yang Mampu Mengubah Dunia', 'inilah-10-proyek-google-yang-mampu-mengubah-dunia', 'Y', '<p class="first-paragraph">Apa yang terlintas dibenak kamu ketika mendengar <a class="ui-link" href="https://jalantikus.com/tips/10-skill-untuk-bekerja-di-google/" target="_blank">kata Google</a>? Raksasa mesin pencari kah, pemilik sistem operasi mobile terbesar kah (Android), atau kamu kenal Google sebagai yang lainnya? Seperti yang kamu ketahui, Google punya banyak sekali proyek yang dikerjakan.</p>\n<p>Salah satu alasan kenapa Google membuat perusahaan induk&nbsp;<span>Alphabet</span>&nbsp;adalah karena terlalu banyaknya proyek yang dikerjakan Google. Ya, Google menghadirkan berbagai&nbsp;<a class="ui-link" href="https://jalantikus.com/news/google-expeditions-virtual-reality/" target="_blank">inovasi</a>yang memberikan banyak manfaat untuk khalayak dan mengubah dunia. Dilansir dari&nbsp;<a class="ui-link" href="http://www.businessinsider.com/" target="_blank">Businessinsider</a>, berikut Jaka ulas 11 proyek Google yang mampu mengubah dunia.</p>\n<h3>1. Project Loon</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/project-loon.jpeg" alt="Project Loon" /></p>\n<p>Penyebaran akses internet di seluruh dunia masih belum merata. Salah satu kendala terbesar yang menghalangi penyebaran internet adalah masalah geografis yang menyulitkan pembangunan infrastrukur. Seperti, hutan, gunung, dan pulau-pulau yang terpisah oleh lautan.</p>\n<p>Itulah permasalahan yang ingin diatasi oleh Google dalam&nbsp;<span>Project Loon</span>. Google ingin meratakan&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/kecepatan-tertinggi-internet-indonesia/" target="_blank">akses internet</a>&nbsp;untuk orang-orang di seluruh dunia, termasuk mereka yang tinggal di daerah-daerah terpencil. Caranya adalah memakai balon udara yang akan terbang 60.000 sampai 90.000 kaki di udara dan akan bertahan sekitar 100 hari setelah mengudara.</p>\n<h3>2. Project Titan</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/project-titan.jpeg" alt="Project Titan" /></p>\n<p>Ambisi Google untuk mencoba menyediakan akses internet di seluruh dunia, dibuktikan melalui&nbsp;<span>Project Titan</span>. Proyek ini mengandalkan pesawat tanpa awak atau yang populer disebut&nbsp;<a class="ui-link" href="https://jalantikus.com/news/drone-yang-bisa-digunakan-di-air/" target="_blank">drone</a>. Pesawat tanpa awak yang menyerupai capung itu diklaim mampu terbang selama 5 tahun tanpa harus turun ke darat dan mengisi bahan bakar. Mereka memanfaatkan tenaga surya sebagai sumber energi, dimana panel-panel surya diletakkan pada bagian sayap dan ekor.</p>\n<p>Ukuran pesawatnya macam-macam, tergantung tipe. Untuk&nbsp;<span>Titan Aerospace Solara 60</span>, bisa mengarungi jarak 4 juta kilometer dengan bergantung pada tenaga surya. Ia mampu bertahan selama 5 tahun di ketinggian 20 kilometer dari permukaan bumi. Dengan kemampuan tersebut, pesawat itu dapat membawa alat kamera dan peralatan komunikasi nirkabel agar dapat memancarkan sinyal internet ke daerah yang masih "<em>offline</em>."</p>\n<h3>3. Project Moonshot Lab</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/project-moonshot-lab.jpeg" alt="Project Moonshot Lab" /></p>\n<p>Google berekspansi kemana-mana, mereka juga mengembangkan&nbsp;<span>pil berteknologi nano</span>&nbsp;untuk membantu dokter mendeteksi tanda-tanda kanker. Pil ini bisa diminum, nantinya akan memasuki aliran darah dan dapat mendeteksi sel kanker. Menurut peneliti, nanopartikel bersifat magnetis sehingga dapat menarik partikel sel kanker.</p>\n<p>Selain itu, Google X juga membuat perangkat yang bisa melawan penyakit kanker. Perangkat yang dimaksud adalah sebuah&nbsp;<em>wearable</em>&nbsp;yang bisa dipakai di tangan, seperti&nbsp;<em>fitness band</em>&nbsp;atau smartwatch yang dapat memberikan sistem peringatan dini untuk kanker.</p>\n<h3>4. Mobil Kemudi Otomatis</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/mobil-kemudi-otomatis.jpeg" alt="Mobil Kemudi Otomatis" /></p>\n<p>Menurut organisasi kesehatan dunia (WHO), ada 1,24 juta orang di seluruh dunia meninggal setiap tahunnya karena tabrakan. Jumlah ini diperkirakan akan meningkat menjadi 2,2 juta pada tahun 2030.</p>\n<p>Nah program mobil dengan&nbsp;<span>mobil kemudi otomatis</span>&nbsp;ini pun diharapkan dapat mengurangi jumlah kecelakaan. Google kini menjadi pemimpin dalam penelitian mobil kemudi otomatis karena perangkat lunak menjadi kunci terwujudnya kendaraan ini. Teknologi itu mencakup robotika, drone, jaringan saraf, kecerdasan buatan, pembelajaran mesin, dan visi mesin.</p>\n<h3>5. Lensa Kontak Pintar</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/lensa-kontak-pintar.jpeg" alt="Lensa Kontak Pintar" /></p>\n<p>Proyek ini merupakan salah satu fokus proyek masa depan Google dalam bidang kesehatan. Untuk mengembangkan kategori produk pintar teranyar ini, Google menggandeng tim peneliti kesehatan Life Science.</p>\n<p><span>Kontak lensa pintar</span>&nbsp;akan mengirimkan informasi tingkat gula darah ke perangkat elektronik pengguna dan juga bisa memonitor kesehatan jantung. Cukup menyematkan lensa tersebut pada mata pengguna dan menghubungkannya ke smartphone, maka pengguna bisa tiap saat mengetahui informasi kesehatan tubuh.</p>\n<h3>6. Sendok Pintar</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/turbin-angin.png" alt="Turbin Angin" /></p>\n<p>Dengan embel-embel pintar itu, sendok ini memang bukan sendok biasa. Sendok yang dikembangkan oleh perusahaan&nbsp;<em>startup</em>&nbsp;bernama Lift Lab yang diakuisisi Google ini ditujukan bagi mereka penderita penyakit&nbsp;<span>parkinson</span>&nbsp;ataupun penyakit lain. Dimana tangan selalu bergetar kalau menggunakan sendok, sehingga kurang nyaman saat makan.</p>\n<p>Sendok dengan sumber daya baterai ini didesain mampu menyesuaikan diri dengan getaran tangan pengguna, sehingga bagian depan tetap akan seimbang. Diklaim, sendok ini mampu menekan tingkat getaran sampai 76%.</p>\n<h3>7. Turbin Angin</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/sendok-pintar.jpeg" alt="Sendok Pintar" /></p>\n<p><span>Turbin angin</span>&nbsp;yang dikembangkan Google ini, dapat diterbangkan di langit seperti layang-layang. Ditambatkan 300 meter di atas tanah dan akan memiliki sayap untuk membantu tetap berada di udara. Mengambang di ketinggian, turbin akan didukung oleh kecepatan angin yang lebih tinggi dan sehingga meningkatkan jumlah energi yang dihasilkan.</p>\n<p>Turbin itu sedang dikembangkan sebagai bagian dari departemen Google X, dengan mengembangkan hasil akuisisi perusahaan bernama Makani. Menurutp para insinyur Google, layang-layang energi itu memiliki potensi untuk menghasilkan 50% lebih banyak energi sementara menghilangkan 90% dari bahan yang digunakan dan untuk setengah biaya dari turbin angin konvensional.</p>\n<h3>8. Project Baseline Study</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/project-baseline-study.jpeg" alt="Project Baseline Study" /></p>\n<p><span>Baseline Study</span>&nbsp;yang dikembangkan oleh tim eksperimen Google X ini didesain untuk membangun database yang nantinya akan menunjukkan kondisi tubuh manusia yang sehat sempurna berdasarkan informasi gen dan molekul dari 175 individu yang dirahasiakan identitasnya.</p>\n<p>Proyek ini akan memungkinkan para dokter untuk mendeteksi dan mengobati penyakit mematikan yang umum ditemukan, seperti penyakit jantung dan kanker. Tidak hanya itu, dokter juga akan mampu mendeteksi tren dan pola penyakit sehingga model kesehatan nantinya akan berfokus pada pencegahan dan bukan lagi pengobatan seperti sekarang ini.</p>\n<h3>9. Project Cure Death</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/project-cure-death.jpeg" alt="Project Cure Death" /></p>\n<p><span>Project Cure Deatch</span>&nbsp;yang dijalankan oleh Calico ini terbilang ambisius, yakni bertujuan untuk memperpanjang hidup manusia. Dapatkah Google memecahkan kematian? Kedengarannya seperti lelucon, tapi Google benar-benar serius.</p>\n<p>Google berusaha mengembangkan teknologi untuk meningkatkan kehidupan masyarakat, dengan memulai dari yang kecil dan fokus sepenuhnya pada meneliti teknologi baru. Proyek ini jangka panjang, untuk sekarang belum diketahui perkembangannya.</p>\n<h3>10. Kecerdasan Buatan</h3>\n<p><img src="file:///C:/Users/user/Downloads/Inilah%2010%20Proyek%20Google%20yang%20Mampu%20Mengubah%20Dunia%20-%20JalanTikus.com_files/kecerdasan-buatan.jpeg" alt="Kecerdasan Buatan" /></p>\n<p>Google juga mengembangkan riset&nbsp;<span><em>artificial intelligence</em></span>&nbsp;atau kecerdasan buatan, dengan menggandeng enam akademikus bidang sains komputer dan teknik mesin dari Oxford University. Google akan memberikan kontribusi yang nyata demi memastikan riset dan pengembangan kecerdasan buatan yang mampu meniru kecerdasan manusia.</p>\n<p>Kerja sama ini bersifat terbuka dengan cara memberikan kesempatan bagi mahasiswa magang untuk terlibat di dalam proyek tersebut. Google juga mengakusisi Deep Mind, sebuah perusahaan&nbsp;<em>startup</em>&nbsp;di bidang pengembangan kecerdasan buatan untuk teknologi simulasi, e-commerce, dan game.</p>\n<p>Itulah 10 proyek Google yang mampu mengubah dunia. Masih banyak proyek-proyek yang dikembangkan oleh Google, belum lagi proyek rahasia. Apa pendapat kamu tentang perkembangan Google?</p>\n<div>&nbsp;</div>\n<p>&nbsp;</p>\n<div class="jt-not-view artikelmenarik">&nbsp;</div>', 'Selasa', '2017-01-03', '21:35:41', 'art-6.jpg', 2, 'Google', 'Y', 'jalantikus.com'),
(21, 1, 1, '8 Fakta Unik Google yang Pasti Kamu Belum Tahu', '8-fakta-unik-google-yang-pasti-kamu-belum-tahu', 'Y', '<p class="first-paragraph">Siapa sih yang tidak tahu <a class="ui-link" href="https://jalantikus.com/tips/game-android-terbaik-versi-google-indie-game/" target="_blank">Google</a>? Perusahaan yang dikenal lewat mesin pencarian ini kemudian berkembang pesat menjadi salah satu perusahaan teknologi terbesar di dunia.</p>\n<p>Di balik namanya yang sering terdengar, seberapa dalam sih kamu mengenal Google? Agar semakin kenal Google, coba deh simak fakta tentang Google berikut ini:</p>\n<h3><span>1. Google Doodle terinspirasi dari Festival Burning Man</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/cc57471e9feca9d9fec79e13e0eda38d.jpeg" alt="masukkan deskripsi gambar disini" /></p>\n<p><span>Google Doodle</span>&nbsp;merupakan gambar atau&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/gif-google-plus/" target="_blank">animasi</a>&nbsp;yang berada di halaman utama Google. Logo ini dimodifikasi sedemikian rupa yang ditampilkan pada waktu adanya peringatan dan&nbsp;<em>event</em>&nbsp;tertentu pada negara-negara yang mendukung Google. Awalnya,&nbsp;<span>Larry Page</span>&nbsp;serta&nbsp;<span>Sergey Brin</span>&nbsp;pada Agustus 1998 pergi ke festival&nbsp;<em>burning man</em>&nbsp;di gurun Nevada, serta ingin berikan semacam notifikasi kepada orang-orang. Setelah itu dibuatlah Google Doodle yang menampilkan logo festival tersebut.</p>\n<h3><span>2. 91% penghasilan Google dari iklan</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/426ec295bc8f028cd5e21f0850a8c1e7.jpeg" alt="masukkan deskripsi gambar disini" /></p>\n<p>Meski tidak mempunyai produk, Google berkembang serta dapat sebesar ini cuma menjual layanan yang hampir seluruhnya&nbsp;<span>gratis</span>. Sumber&nbsp;<a class="ui-link" href="https://jalantikus.com/news/keuntungan-kerja-di-google-/" target="_blank">pendapatan utama Google</a>&nbsp;yaitu iklan. Pada 2013 tercatat 91% pendapatan Google didapat dari iklan, dimana berasal dari&nbsp;<span>Adwords</span>&nbsp;sebesar 70% serta dari&nbsp;<span>Adsense</span>&nbsp;sebesar 30%.</p>\n<h3><span>3. Google membeli domain&nbsp;<em>misspellings</em></span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/c7bd46b8a6ef0f162c724a012d8dbbcc.jpeg" alt="masukkan deskripsi gambar disini" /></p>\n<p>Google diketahui sempat mengamankan nama situs Google supaya penggunanya tidak terpeleset (<em>Misspellings</em>) ke&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/daftar-nama-domain-negara-di-dunia/" target="_blank">domain</a>&nbsp;lainnya layaknya&nbsp;<span>Gooogle.com, Gogle.com, Googlr.com</span>, Bahkan&nbsp;<span>466453.com</span>. Apabila kamu mengetik domain tersebut di website, maka kamu langsung masuk ke halaman Google.</p>\n<p>Yang aneh, apakah kaitan 466453.com dengan Google? Pasti kamu bertanya-tanya deh. Perhatikan keypad handphone kamu, 4 GHI, 6 MNO, 6 MNO, 4 GHI, 5 JKL, 3 DEF; jadi&nbsp;<span>466453 = Google</span>. Itulah sebabnya Google mengamankan situs 466453.com.</p>\n<h3><span>4. Adanya 45000&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/mesin-pencari-paling-aman/" target="_blank">pencarian</a>&nbsp;di Google per detik</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/c78eeac7131738c85360759e8e0d6d56.jpeg" alt="masukkan deskripsi gambar disini" /></p>\n<p>Jumlah pengguna internet meningkat per harinya, begitu pun dengan trafik&nbsp;<a class="ui-link" href="https://jalantikus.com/news/google-dodle-takizo-iwasaki/" target="_blank">pengunjung Google</a>. Berdasarkan data statistik dari Internetlivestats.com,&nbsp;<span>Google dikunjungi 45000 pengguna internet per detiknya</span>.</p>\n<h3><span>5. Google akuisisi 24 perusahaan di tahun 2014</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/perusahaan.jpeg" alt="perusahaan" />Google diketahui menghabiskan&nbsp;<span>puluhan miliar dollar</span>&nbsp;hanya untuk mengakuisisi perusahaan-perusahaan yang menunjang visi serta misi Google tersebut. Langkah ini diambil Google merupakan untuk mengantisipasi munculnya pesaing mereka. Selama 2014, Google sudah mengakuisisi 24 perusahaan. Artinya, ada 3 perusahaan yang dicaplok/diakuisi dalam sebulan.</p>\n<h3><span>6. Google Search Index memiliki ukuran lebih dari 100.000.000 GB</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/7f49158e255c03f8f20cb562f83a361b.png" alt="masukkan deskripsi gambar disini" /></p>\n<p>Menakjubkjan,&nbsp;<a class="ui-link" href="https://jalantikus.com/news/google-search-untuk-indonesia/" target="_blank">Google Search</a>&nbsp;Index yang dimiliki Google yaitu lebih dari 100 juta gigabyte. Ini sama halnya dengan 100 ribu unit personal drive yang berkapasitas 1 terabyte.</p>\n<h3><span>7. Google abadikan 5 juta mil gambar jalan raya untuk Google Street View</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/ca007bf6d12f6e38bd80ccc6da1cec2e.jpeg" alt="masukkan deskripsi gambar disini" /></p>\n<p><a class="ui-link" href="https://jalantikus.com/news/google-maps-untuk-indonesia/" target="_blank">Google Maps</a>&nbsp;adalah salah satu produk Google dalam dunia navigasi.&nbsp;<a class="ui-link" href="https://jalantikus.com/news/menjelajah-dunia-dengan-aplikasi-google-street-view/" target="_blank">Google Street View</a>&nbsp;adalah sebuah fitur yang diperkenalkan pada 2007. Untuk menunjang fitur Google Maps, Google sudah mengabadikan gambar jalan raya lebih dari 5 juta mil.</p>\n<h3><span>8. Lebih dari 6 miliar jam video sudah ditonton di YouTube per bulannya</span></h3>\n<p><img src="file:///C:/Users/user/Downloads/8%20Fakta%20Unik%20Google%20yang%20Pasti%20Kamu%20Belum%20Tahu%20-%20JalanTikus.com_files/youtube.jpeg" alt="Youtube" />Pada November 2006, Youtube Inc. dibeli oleh Google dengan harga 1,65 miliar serta resmi beroperasi sebagai buah hati perusahaan Google. Serta kini lebih dari&nbsp;<span>6 miliar jam</span>&nbsp;video sudah ditonton di&nbsp;<a class="ui-link" href="https://jalantikus.com/news/fakta-terbaru-youtube-di-indonesia/" target="_blank">YouTube</a>&nbsp;per bulannya, ini artinya hampir setara satu jam video untuk setiap orang di semua dunia.</p>', 'Selasa', '2017-01-03', '21:43:45', 'art-9.jpg', 0, 'Google', 'Y', 'jalantikus.com'),
(22, 1, 1, '4 Bahaya yang Perlu Kamu Tahu Sebelum Mengakses Dark Web', '4-bahaya-yang-perlu-kamu-tahu-sebelum-mengakses-dark-web', 'Y', '<p class="first-paragraph">Sama halnya dengan dunia nyata, dunia maya juga memiliki beberapa sisi. Ada dunia permukaan dan dunia bawah tanah yang sering disebut <a class="ui-link" href="https://jalantikus.com/tips/cara-akses-deep-web-atau-dark-net/" target="_blank"><span>dark web</span></a>. Akan tetapi karena kawasan dark web ini sulit dijangkau dengan cara biasa, tak semua orang bisa masuk ke dalamnya.</p>\n<p>Istilah dark web sendiri sebenarnya mengacu pada kawasan internet yang diisi oleh hal-hal yang dengan sengaja dibuat&nbsp;<span>agar tidak mudah diakses oleh sembarang orang</span>. Terkadang&nbsp;<span>dark web</span>&nbsp;juga kerap disandingkan dengan&nbsp;<span>deep web</span>. Akan tetapi dalam beberapa hal,&nbsp;<span>ada perbedaan yang cukup fundamental antara keduanya</span>.</p>\n<p>Dark web sendiri identik dengan&nbsp;<span>situs-situs ilegal</span>&nbsp;seperti black market, narkoba, hacking, dan beberapa hal lain yang tidak sepantasnya diakses. Bahkan tidak jarang ada video-video sadis yang beredar di wilayah dark web ini. Mungkin secara sepintas dark web memang terlihat menarik. Namun sebelum masuk ke dunia bawah tanah ini, ada baiknya kamu tahu 4 bahaya dark web di bawah ini:</p>\n<h2>4 Bahaya yang Perlu Kamu Tahu Sebelum Mengakses Dark Web</h2>\n<h3>1. Konten Ilegal</h3>\n<p><img src="file:///C:/Users/user/Downloads/4%20Bahaya%20yang%20Perlu%20Kamu%20Tahu%20Sebelum%20Mengakses%20Dark%20Web%20-%20JalanTikus.com_files/87777bbf3a9cb851036355c1fc53c2ff.jpeg" alt="konten ilegal" /></p>\n<p>Dark web adalah sarangnya konten-konten ilegal, mulai dari pornografi, prostitusi, narkoba, konten-konten sadis hingga jasa pembunuh bayaran. Bahkan tidak jarang ditemukan gambar, foto, ataupun&nbsp;<a class="ui-link" href="https://jalantikus.com/gokil/video-menyeramkan-deep-web/" target="_blank">video sadis dalam dark web</a>. Karena itu jika kamu ingin mencoba memasuki dark web, pastikan kamu sudah siap mental. Karena melihat hal-hal yang mengerikan bukan hal yang tidak mustahil di dark web.</p>\n<h3>2. Sarang Virus</h3>\n<p><img src="file:///C:/Users/user/Downloads/4%20Bahaya%20yang%20Perlu%20Kamu%20Tahu%20Sebelum%20Mengakses%20Dark%20Web%20-%20JalanTikus.com_files/9525b49f15372015f156963d6dea8382.jpeg" alt="bahaya virus" /></p>\n<p>Jika kamu sering merasa jengkel dengan virus yang menginfeksi komputermu, maka kamu harus siap menghadapi resiko yang lebih besar di dark web. Banyak situs-situs dark web yang menjadi sarang virus. Tak sekedar virus yang hanya berbuat usil saja, di sini juga ada banyak&nbsp;<em><a class="ui-link" href="https://jalantikus.com/tips/tanda-smartphone-terinfeksi-spyware/" target="_blank">spyware</a></em>&nbsp;hingga virus berbahaya lain. Jika kamu tidak berhati-hati, bukan tidak mungkin komputermu terinfeksi virus, malware atau spyware berbahaya.</p>\n<p>Sebenarnya resiko virus ini tidak hanya mengancam data atau perangkat komputermu saja. Aktivitasmu juga bisa dimata-matai oleh sang penyebar virus. Bahkan webcam dan microphone yang ada pada komputermu juga bisa disadap.&nbsp;<em>Malware</em>&nbsp;yang cukup berbahaya dan tersebar di dark web ini beberapa di antaranya adalah&nbsp;<span>Skynet, Vawtrack, dan Nionspy</span>.</p>\n<h3>3. Tempatnya para Penjahat Berkeliaran</h3>\n<p><img src="file:///C:/Users/user/Downloads/4%20Bahaya%20yang%20Perlu%20Kamu%20Tahu%20Sebelum%20Mengakses%20Dark%20Web%20-%20JalanTikus.com_files/6bf08e26cf35b79b6beb24e1f4679aa0.jpeg" alt="penjahat cyber dark web" /></p>\n<p>Dark web bisa disebut sebagai dunia hitamnya internet. Dan sama halnya dengan dunia hitam di dunia nyata, tak sedikit penjahat yang beroperasi di wilayah dark web. Jadi jika kamu tidak berhati-hati, bukan tidak mungkin kamu menjadi&nbsp;<span>korban kejahatan</span>. Tindak kejahatan yang dimaksud di sini memang tidak selalu sama seperti tindak kejahatan di dunia nyata. Akan tetapi tetap saja, hal tersebut akan merugikan sang korbannya.</p>\n<h3>4. Diawasi oleh Penegak Hukum</h3>\n<p><img src="file:///C:/Users/user/Downloads/4%20Bahaya%20yang%20Perlu%20Kamu%20Tahu%20Sebelum%20Mengakses%20Dark%20Web%20-%20JalanTikus.com_files/dbce8f364040904ba4527ec00a77beaf.jpeg" alt="pengawasan dark web oleh penegak hukum" /></p>\n<p>Bahaya dark web yang satu ini memang sedikit berbeda dengan risiko-risiko sebelumnya. Karena bahaya dark web ini baru muncul saat kamu melakukan hal yang tidak layak di dark web, entah itu bertransaksi narkoba atau mengakses konten-konten ilegal lain. Itu karena beberapa situs dark web memang kerap dimonitor oleh penegak hukum.</p>', 'Selasa', '2017-01-03', '21:48:02', 'art-7.jpg', 1, 'Hacker', 'Y', 'jalantikus.com'),
(23, 2, 1, '10 Alasan Kenapa Hacker Memilih Linux daripada Windows', '10-alasan-kenapa-hacker-memilih-linux-daripada-windows', 'Y', '<p class="first-paragraph">Pernah nggak kamu penasaran, kenapa Linux dianggap sebagai sistem operasi terbaik, dan banyak digunakan oleh&nbsp;<em>hacker</em>,&nbsp;<em>programmer</em>,&nbsp;<em>developer</em>,&nbsp;<em>Geeks</em>, dan lainnya? Penggunaan Linux memang tumbuh pada tingkat yang luar biasa dan mampu bersaing dengan sistem operasi populer seperti&nbsp;Windows&nbsp;atau&nbsp;OS X.</p>\r\n<p>Sistem operasi yang 100%&nbsp;<em>open source</em>&nbsp;ini semakin populer karena dapat dimodifikasi tampilannya dengan melakukan kustomisasi baris kode dalam kernel Linux.&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/alasan-hacker-memilih-linux/" target="_blank" rel="noopener noreferrer">Linux</a>&nbsp;memiliki kemampuan grafis yang kuat, begitu juga alat-alat pendukungnya. Hanya dengan menggunakan barisan kode, kamu bahkan bisa membuat Linux melakukan hal-hal yang belum pernah kamu lakukan sebelumnya.</p>\r\n<h2>10 Alasan Kenapa Hacker Memilih Linux Daripada Windows</h2>\r\n<p>Kekuatan dan fleksibilitas dari Linux inilah yang menjadikannya teman bermain bagi&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/alasan-hacker-memilih-linux/" target="_blank" rel="noopener noreferrer">hacker</a>. Mereka menggunakan, mempelajari, dan memahaminya dengan sangat dalam. Alasan mendasar&nbsp;<em>hacker</em>&nbsp;menggunakan Linux adalah karena kemampuan untuk melihat setiap baris kode Linux dan&nbsp;<em>patch</em>&nbsp;ketika masalah muncul. Lebih lanjut, inilah 10 alasan kenapa&nbsp;<em>hacker</em>&nbsp;memilih Linux daripada Windows.</p>\r\n<h3>1. Open Source</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/open-source.jpeg" alt="open source" /></p>\r\n<p>Linux adalah sistem operasi yang 100%&nbsp;<em>open source</em>. Artinya, kode sumber Linux berada di ujung jari kamu. Kamu dapat dengan mudah memodifikasi kode sumber OS ini sesuai dengan kebutuhan. Ditambah lagi, sebagian besar aplikasi yang berjalan di sistem operasi ini juga&nbsp;<em>open source</em>&nbsp;dan sangat menguntungkan. Hampir semua aplikasi yang terdapat di Windows, ada alternatifnya di&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/cara-install-linux-di-android/" target="_blank" rel="noopener noreferrer">Linux</a>.</p>\r\n<h3>2. Kompatibilitas</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/campabilitas.png" alt="campabilitas" /></p>\r\n<p>Sistem operasi ini mendukung banyak perangkat keras komputer dengan persyaratan&nbsp;<em>hardware</em>&nbsp;minimum. Linux juga telah digunakan di berbagai peralatan dari komputer pribadi, super komputer, bahkan&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/cara-install-linux-di-android/" target="_blank" rel="noopener noreferrer">smartphone</a>.</p>\r\n<h3>3. Instalasi Mudah</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/instalasi-muda.png" alt="instalasi mudah" /></p>\r\n<p>Seiring dengan perkembangannya, sekarang sebagian besar distribusi Linux datang dengan program instalasi dan&nbsp;setup user-friendly. Waktu&nbsp;<em>boot</em>&nbsp;dari sistem operasi ini juga lebih cepat daripada beberapa sistem operasi lainnya.</p>\r\n<h3>4. Stabilitas</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/stabil.jpeg" alt="stabil" /></p>\r\n<p>Komputer dengan OS Windows, biasanya membutuhkan&nbsp;<em>reboot</em>&nbsp;secara berkala agar tidak lemot. Namun, di Linux kamu&nbsp;tidak perlu repot-repot melakukan reboot&nbsp;untuk mempertahankan performa. Jadi, nggak perlu takut komputer bakal lemot.</p>\r\n<h3>5. Jaringan Komputer</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/networking-handal.png" alt="networking-handal" /></p>\r\n<p>Pada dasarnya, seorang&nbsp;<em>hacker</em>&nbsp;akan menerobos masuk ke dalam jaringan komputer. Di Linux,&nbsp;<em>hacker</em>&nbsp;bisa lebih efektif mengelola jaringan. Di Linux juga terdapat banyak perintah yang dapat digunakan untuk melakukan penetrasi jaringan. Selain itu, sistem operasi ini lebih andal untuk membuat&nbsp;<em>backup</em>&nbsp;jaringan yang lebih cepat daripada sistem operasi lain.</p>\r\n<h3>6. Multitasking</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/multitasking.png" alt="multitasking" /></p>\r\n<p>Linux dirancang untuk melakukan banyak hal pada saat yang sama. Meskipun kamu membuka banyak aplikasi di latar belakang, hal itu tidak akan memperlambat pekerjaan lain. Ya, jauh lebih banyak pekerjaan yang dapat kamu lakukan di&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/alasan-hacker-memilih-linux/" target="_blank" rel="noopener noreferrer">Linux</a>.</p>\r\n<h3>7. Fleksibilitas dan Nggak Masalah Harddisk Hampir Penuh</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/flexibility.jpeg" alt="flexibility" /></p>\r\n<p>Meskipun&nbsp;<em>harddisk</em>&nbsp;kamu hampir penuh, Linux bisa terus bekerja dengan baik. Hal ini hampir mustahil bisa dilakukan oleh OS lainnya. Fleksibilitas Linux juga menjadi yang terpenting karena dapat digunakan sebagai aplikasi&nbsp;<em>server</em>&nbsp;berkinerja tinggi, aplikasi desktop, dan&nbsp;<em>embedded systems</em>.</p>\r\n<h3>8. Keamanan Lebih Unggul</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/linux-vs-windows.jpeg" alt="Linux vs windows" /></p>\r\n<p>Linux memiliki sistem keamanan yang lebih unggul daripada Windows. Dapat dikatakan, hampir semua pengguna&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/hack-tools-gratis-terbaik-windows-dan-linux/" target="_blank" rel="noopener noreferrer">Windows</a>&nbsp;pasti pernah terkena virus,&nbsp;<em>spyware</em>,&nbsp;<em>trojan</em>,&nbsp;<em>adware</em>, dan lainnya. Hal ini hampir tidak pernah terjadi pada Linux. Sejak awal, Linux didesain multi-<em>user</em>. Apabila ada virus yang menjangkiti user tertentu, akan sangat sulit menjangkiti dan menyebar ke&nbsp;<em>user</em>&nbsp;yang lain. Maka, jika dilihat dari sisi&nbsp;<em>maintenance</em>&nbsp;data maupun perangkat keras tentu akan lebih efisien.</p>\r\n<h3>9. Dukungan Banyak Bahasa Pemrograman</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/programming.jpeg" alt="programming" /></p>\r\n<p>Linux memiliki banyak dukungan untuk&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/hack-tools-gratis-terbaik-windows-dan-linux/" target="_blank" rel="noopener noreferrer">bahasa pemrograman</a>. Mulai dari&nbsp;C/C ++,&nbsp;Java,&nbsp;PHP,&nbsp;Ruby,&nbsp;Python,&nbsp;Perl&nbsp;dan banyak lagi. Jutaan baris kode yang telah ditulis untuk aplikasi Linux, biasanya juga dalam cara yang sangat modular. Hal ini memungkinkan untuk diintegrasikan ke dalam pekerjaan yang sangat beragam.</p>\r\n<h3>10. Tools Hacking yang Lengkap</h3>\r\n<p><img src="file:///C:/Users/user/Downloads/10%20Alasan%20Kenapa%20Hacker%20Memilih%20Linux%20daripada%20Windows%20-%20JalanTikus.com_files/aman.jpeg" alt="aman" /></p>\r\n<p>Sebagai&nbsp;<em>hacker</em>&nbsp;tentunya tak terlepas dari yang namanya kegiatan-kegiatan&nbsp;<em>hacking</em>&nbsp;dan&nbsp;<em>cracking</em>. Linux pun memiliki&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/hack-tools-gratis-terbaik-windows-dan-linux/" target="_blank" rel="noopener noreferrer">tools hacking</a>&nbsp;yang sangat lengkap dan kemampuan aplikasinya juga bisa dibilang setingkat lebih canggih.&nbsp;Tools Hacking&nbsp;tersebut antara lain,&nbsp;John the Ripper,&nbsp;NMAP,&nbsp;Nessus,&nbsp;Wireshark,&nbsp;Etherape,&nbsp;Kismet,&nbsp;TCPDump,&nbsp;Firestarter,&nbsp;THC Hydra, dan&nbsp;Dsniff.</p>', 'Selasa', '2017-01-03', '21:52:44', 'art-8.jpg', 1, 'Hacker', 'Y', 'jalantikus.com'),
(26, 2, 1, 'Robot Kalahkan Manusia! Google DeepMind Baca Gerak Bibir Lebih Akurat', 'robot-kalahkan-manusia-google-deepmind-baca-gerak-bibir-lebih-akurat', 'Y', '<p class="first-paragraph"><strong>Google</strong> dan para peneliti di Oxford University sedang mengembangkan sebuah alat <a class="ui-link" href="https://jalantikus.com/gadgets/teknologi-yang-menjadi-tren-2017/" target="_blank" rel="noopener noreferrer"><strong>AI (Artificial Intelligece)</strong></a> yang secara signifikan dapat membaca gerak bibir dengan akurat untuk membantu tuna rungu. <em>Project</em> yang disebut <strong>LipNet</strong> itu menggunakan teknik <em>deep learning</em>, yakni teknologi dari <strong>Google DeepMind</strong>.</p>\r\n<p>Pada dasarnya, tim melatih AI dengan beragam video yang menunjukkan orang-orang sedang berbicara sehingga AI itu dapat belajar membaca gerak bibir. Menariknya, hasilnya ternyata benar-benar mampu menafsirkan kata-kata bahkan mengalahkan manusia yang ahli dalam membaca gerak bibir.</p>\r\n<p>Google DeepMind sendiri adalah perusahaan yang mengembangkan teknologi kecerdasan buatan. Mereka menciptakan jaringan saraf yang belajar memainkan video layaknya manusia dan jaringan saraf yang dapat mengakses memori eksternal layaknya mesin Turing konvensional. Hasilnya adalah sebuah komputer yang mampu meniru ingatan jangka pendek otak manusia.</p>\r\n<p>Dilansir dari <a class="ui-link" href="http://www.techrepublic.com/" target="_blank" rel="noopener noreferrer">Techrepublic</a>, <em>deep learning</em> memiliki potensi sangat besar. Sebelum ini, AI DeepMind, <strong>AlphaGo</strong> berhasil mengalahkan pemain Go profesional.</p>\r\n<p>Menurut laporan dari <strong>New Scientist</strong>, dalam percobaan yang mereka lakukan, seorang ahli pembaca bibir hanya mampu menguraikan <strong>12,4 persen</strong>. Sedangkan, sistem AI mampu menangkap hingga <strong>46,8 persen</strong>.</p>\r\n<p>Selain itu, teknik <em>deep learning</em> juga telah digunakan untuk menyelesaikan berbagai masalah. Peneliti <a class="ui-link" href="https://jalantikus.com/tips/fakta-unik-tentang-google-yang-jarang-diketahui-orang/" target="_blank" rel="noopener noreferrer">Google</a>juga mencoba melatih AI membuat enkripsi sendiri.</p>\r\n<p>Tim Oxford berhasil membuat peningkatan performa yang signifikan dalam LipNet, hingga tingkat akurasi sebesar <strong>93,4 persen</strong>. Angka ini disebut jauh lebih tinggi dari tingkat akurasi manusia karena seorang ahli pembaca bibir pun hanya dapat memiliki tingkat akurasi <strong>50 persen</strong>.</p>', 'Minggu', '2017-01-08', '22:57:41', 'googledep.jpg', 5, 'Google', 'Y', 'jalantikus.com');
INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `id_user`, `judul`, `judul_seo`, `headline`, `isi_artikel`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tags`, `publish`, `sumber`) VALUES
(24, 1, 1, '10 Fakta Internet yang PASTI Membuat Kamu Tercengang', '10-fakta-internet-yang-pasti-membuat-kamu-tercengang', 'N', '<p class="first-paragraph">Di era teknologi yang canggih seperti sekarang, tampaknya sulit ya apabila ingin kerja cepat tanpa internet. Mulai dari cari sumber untuk tugas kuliah, bahkan hingga cari pacar yang cocok, semuanya kini bisa lebih mudah apabila melalui dunia maya tersebut. Tapi apakah kamu mengetahui&nbsp;fakta-fakta mencengangkan&nbsp;mengenai internet berikut ini.</p>\r\n<p>Berikut ini akan kami suguhkan kepada kamu, 10 fakta internet yang pasti akan membuat kamu tercengang, seperti yang telah disusun oleh&nbsp;Peter Gasca&nbsp;di situs&nbsp;<a class="ui-link" href="http://www.entrepreneur.com/" target="_blank" rel="noopener noreferrer">Enterpreneur</a>&nbsp;dengan beberapa penyesuaian agar lebih mudah dibaca.</p>\r\n<h2>10 Fakta Internet yang PASTI Membuat Kamu Tercengang</h2>\r\n<ol>\r\n<li>\r\n<p>Hari ini di internet, sudah ada lebih dari 47 milyar website, di dalamnya termasuk&nbsp;<a class="ui-link" href="http://info.cern.ch/hypertext/WWW/TheProject.html" target="_blank" rel="noopener noreferrer">website pertama</a>&nbsp;yang pernah dibuat 24 tahun yang lalu oleh&nbsp;CERN.<img src="file:///C:/Users/user/Downloads/10%20Fakta%20Internet%20yang%20PASTI%20Membuat%20Kamu%20Tercengang%20-%20JalanTikus.com_files/10-fakta-internet-1.jpeg" alt="10-fakta-internet-1" /></p>\r\n</li>\r\n<li>\r\n<p>Pengguna internet hari ini telah mencapai&nbsp;3,2 milyar di seluruh dunia&nbsp;(WOW!). Itu meliputi 44% populasi dunia dan lebih dari setengahnya berasal dari benua Asia.</p>\r\n</li>\r\n<li>\r\n<p>Ada 950 juta rumah tangga di seluruh dunia yang memiliki televisi, akan tetapi dua kali lipat dari jumlah tersebut lebih memilih untuk menggunakan internet, terutama melalui perangkat&nbsp;<em>portable</em>.<img src="file:///C:/Users/user/Downloads/10%20Fakta%20Internet%20yang%20PASTI%20Membuat%20Kamu%20Tercengang%20-%20JalanTikus.com_files/10-fakta-internet-2.jpeg" alt="10-fakta-internet-2" /></p>\r\n</li>\r\n<li>\r\n<p>Pengunjung dari situs penyedia video yaitu YouTube total menonton 6 milyar jam video setiap bulannya, dan lebih dari 300 menit video diunggah setiap detik. Hal menariknya adalah,&nbsp;80% dari pengunjung YouTube bahkan berasal dari luar Amerika Serikat.</p>\r\n</li>\r\n<li>\r\n<p>Kini ada&nbsp;1,49 milyar pengguna dari Facebook&nbsp;dan mereka menggunakan situs media sosial terbesar tersebut selama rata-rata 21 menit setiap harinya dan berbagi konten sebanyak 1,3 juta&nbsp;<em>post</em>&nbsp;setiap menit.<img src="file:///C:/Users/user/Downloads/10%20Fakta%20Internet%20yang%20PASTI%20Membuat%20Kamu%20Tercengang%20-%20JalanTikus.com_files/10-fakta-internet-3.jpeg" alt="10-fakta-internet-3" /></p>\r\n</li>\r\n<li>\r\n<p>Aplikasi&nbsp;<em>mobile</em>&nbsp;yang berhasil menyita waktu dari para pengguna smartphone adalah&nbsp;<a class="ui-link" href="https://jalantikus.com/apps/facebook-lite/" target="_blank" rel="noopener noreferrer">Facebook</a>, hingga mencapai angka&nbsp;18%. Jika digabung dengan waktu dari Facebook Messeger dan&nbsp;<a class="ui-link" href="https://jalantikus.com/apps/instagram-downloader/" target="_blank" rel="noopener noreferrer">Instagram</a>, totalnya bahkan mencapai&nbsp;22,4%&nbsp;di seluruh dunia. Aplikasi kedua yang mengumpulkan total penggunaan terbanyak di mobile adalah Pandora, yang mencapai angka&nbsp;10,5%.</p>\r\n</li>\r\n<li>\r\n<p>Ada 5 hingga 10 juta aplikasi&nbsp;<a class="ui-link" href="https://jalantikus.com/tips/fitur-terbaru-ios-9/" target="_blank" rel="noopener noreferrer">iOS</a>&nbsp;yang di-download setiap hari, dan lebih dari 100 milyar total aplikasi yang diunduh hingga bulan Juni 2015.</p>\r\n</li>\r\n<li>\r\n<p>Di tahun 2015, kita akan mengirimkan&nbsp;205,6 milyar email, sayangnya 60% dari semua itu adalah&nbsp;<em>spam</em>&nbsp;atau sampah.<img src="file:///C:/Users/user/Downloads/10%20Fakta%20Internet%20yang%20PASTI%20Membuat%20Kamu%20Tercengang%20-%20JalanTikus.com_files/10-fakta-internet-4.jpeg" alt="10-fakta-internet-4" /></p>\r\n</li>\r\n<li>\r\n<p>Jumlah foto yang diambil di seluruh dunia juga semakin meningkat drastis nih. Untuk tahun ini, estimasi total foto yang akan diambil oleh manusia adalah&nbsp;1 triliun. Angka ini jauh sekali berkembang jika kita melihat jumlah foto yang diambil pada tahun 2000 yang hanya mencapai 86 juta foto.</p>\r\n</li>\r\n<li>\r\n<p>Dari semua poin yang telah kita bahas sebelumnya, mulai dari situs paling pertama, Facebook, Instagram, dan hal-hal berbau lainnya, faktaya semua itu hanya mencakup&nbsp;1%&nbsp;dari semua konten yang dapat diakses melalui internet. Jika kamu mengetahuinya,&nbsp;99%&nbsp;lainnya ada di&nbsp;<a class="ui-link" href="https://jalantikus.com/gokil/memex-search-engine/" target="_blank" rel="noopener noreferrer"><em>deep web</em></a>.&nbsp;1%&nbsp;tersebut adalah website-website yang bisa dijangkau oleh&nbsp;<em>search engine</em>, sedangkan&nbsp;<em>deep web</em>&nbsp;tidak bisa.</p>\r\n</li>\r\n</ol>', 'Selasa', '2017-01-03', '21:57:16', 'art-10.jpg', 10, 'Teknologi', 'Y', 'jalantikus.com'),
(27, 2, 1, 'Internet Explorer Menjadi Sasaran Hacker', 'internet-explorer-menjadi-sasaran-hacker', 'Y', '<p class="first-paragraph">Beberapa perusahaan keamanan di dunia melaporkan adanya celah keamanan dari browser populer saat ini yaitu <strong>Internet Explorer 8 (IE8)</strong>. Celah yang terdapat di dalam Internet Explorer 8 (IE8) ini dilaporkan dapat memberikan kemungkinan para hacker untuk mengeksploitasi komputer di pemerintahan AS, termasuk kasus terbaru yang berhubungan dengan pengembangan senjata nuklir.</p>\r\n<p>Sistem komputer yang dimaksud adalah milik <strong>Departemen Tenaga Kerja dan Departemen Energi AS</strong>, tetapi belum diketahui apakah hacker tersebut berhasil mengakses file-file rahasia atau tidak. Perkembangan dari isu itu terus berlanjut dengan dugaan para hacker ini berasal dari China. Microsoft sebagai pembuat dari Internet Explorer ini memberi konfirmasi bahwa celah tersebut mungkin ada, tetapi Microsoft tidak memberikan keterangan lebih lanjut mengenai efek dari serangan jika dihack oleh hacker.</p>\r\n<p>Dikutip dari <strong>Softpedia, Microsoft</strong> memberi keterangan bahwa pihaknya sedang menyelidiki laporan mengenai celah keamanan di Internet Explorer 8 ini dan Microsoft sudah menyadari mengenai serangan yang sepertinya akan menggunakan celah ini sebagai sasarannya. Microsoft juga memberi peringatan kepada para pengguna browser <strong>Internet Explorer 8</strong> untuk segera mengupdate ke versi terbarunya untuk menutup celah keamanan yang berbahaya ini.</p>\r\n<p>Jika kamu menggunakan smartphone <strong>Android</strong>, kamu sekarang bisa mengakses <strong><a class="bbc_link ui-link" href="https://jalantikus.com/" target="_blank" rel="noopener noreferrer">jalantikus.com</a></strong> dan kamu akan mendapat semua berita terbaru dari Android serta aplikasi-aplikasi terbaik dari android langsung di smartphone kamu.</p>', 'Minggu', '2017-01-08', '23:04:48', 'internetexplore.jpg', 3, 'Teknologi', 'Y', 'jalantikus.com'),
(28, 2, 1, 'Tanpa Diceritakan, Ternyata Facebook Sudah Tahu Banyak Tentang Kamu', 'tanpa-diceritakan-ternyata-facebook-sudah-tahu-banyak-tentang-kamu', 'Y', '<p class="first-paragraph">Facebook masih merupakan <em>platform</em> <a class="ui-link" href="https://jalantikus.com/tips/bahayanya-update-status-sembarangan/" target="_blank" rel="noopener noreferrer">media sosial</a> terbesar di dunia. Membantu kamu terhubung dan berbagi dengan orang-orang yang kamu kenal.</p>\r\n<p><strong>Facebook</strong> bisa digunakan secara gratis dan kita juga mungkin tahu bahwa Facebook menghasilkan pendapatan dari <a class="ui-link" href="https://jalantikus.com/tips/iklan-youtube-paling-populer-sepanjang-2016/" target="_blank" rel="noopener noreferrer">iklan</a> yang tertarget. Dengan melacak apa yang kamu lihat dan klik pada saat menggunakan situsnya.</p>\r\n<h2>Facebook Tahu Banyak Tentang Kamu</h2>\r\n<p><img src="/blog/editor/images/image/facebook.jpeg" alt="" width="560" height="280" /></p>\r\n<p>Facebook juga <strong>mengumpulkan informasi</strong> dari perincian profil kamu, untuk mencari tahu apa yang kamu suka sehingga iklan yang tampil lebih relevan.</p>\r\n<p>Facebook <strong>melacak</strong> apa yang kamu suka, yang kamu bagikan, komentar-komentar kamu, dan apa yang kamu lihat. Itulah <strong>harga yang harus dibayar</strong> oleh pengguna Facebook.</p>\r\n<p>Facebook sendiri mengakui melakukan hal itu. Sejauh ini masih sesuai kebijakan yang ada yakni <strong>hanya untuk menayangkan iklan yang lebih baik</strong>.</p>\r\n<p>Namun, sebuah studi terbaru yang dilakukan oleh <strong>ProPublica</strong> mengungkap bahwa Facebook tahu lebih banyak tentang kamu.</p>\r\n<p>Ternyata <a class="ui-link" href="https://jalantikus.com/tips/cara-mengetahui-jika-akun-facebook-dihack" target="_blank" rel="noopener noreferrer">Facebook</a> mengumpulkan informasi pengguna dari beberapa sumber yang berbeda, termasuk <strong>data pribadi</strong> yang tidak kita cantumkan secara <em>online</em>.</p>\r\n<p>Facebook bekerja sama dengan grup penyedia data pihak ketiga seperti <strong>Acxiom, Datalogix (Oracle Data Cloud), Epsilon, Experian, dan Quantium</strong>.</p>\r\n<p>Artinya, Facebook juga mungkin mengetahui <strong>perincian gaji, restoran favorit, daftar belanja supermarket, lokasi yang kamu kunjungi</strong>, dan lainnya. Yang digunakan untuk menampilkan iklan yang benar-benar relevan.</p>\r\n<p>Facebook tidak memberi tahu pengguna tentang data ini. Singkatnya, Facebook ingin mengumpulkan semua data yang dibutuhkan dari penggunanya.</p>\r\n<p>Setidaknya, <strong>Mark Zuckerberg</strong> tidak mengharuskan membayar untuk menggunakan Facebook. Tapi, mereka memang harus menjalankan perusahaan dan memberikan Facebook tetap <a class="ui-link" href="https://jalantikus.com/tips/bahaya-aplikasi-gratisan/" target="_blank" rel="noopener noreferrer">gratis untuk kamu</a>.</p>', 'Minggu', '2017-01-08', '23:09:26', 'facebookwp.jpg', 2, 'Facebook', 'Y', 'jalantikus.com'),
(29, 3, 1, 'WOW! Ternyata Ini Pesan Rahasia di Logo Microsoft', 'wow-ternyata-ini-pesan-rahasia-di-logo-microsoft', 'Y', '<p class="first-paragraph"><a class="ui-link" href="https://jalantikus.com/gokil/logo-ji-lee-dengan-pesan-tersembunyi/" target="_blank" rel="noopener noreferrer">Sebuah logo</a> akan melambangkan pandangan dan bagaimana sebuah perusahaan bekerja. Tak terkecuali <a class="ui-link" href="https://jalantikus.com/tips/fakta-mencengangkan-microsoft/" target="_blank" rel="noopener noreferrer"><strong>Microsoft</strong></a>, sebuah perusahaan raksasa teknologi dunia. Tanpa kamu sadari, mungkin setiap hari kamu menggunakan produk-produk keluaran Microsoft.</p>\r\n<p>Tapi pernahkah kamu menyadari, apa maksud di balik warna pada logo baru Microsoft? Pada 2012, Microsoft merombak besar-besaran logo mereka. Dalam logo barunya, terdapat 4 persegi seperti jendela, dengan warna khas seperti pada <a class="ui-link" href="https://jalantikus.com/news/microsoft-hentikan-dukungan-skype-windows-phone-8/" target="_blank" rel="noopener noreferrer"><strong>OS Windows</strong></a>.</p>\r\n<p>Microsoft juga menggunakan <strong>font Segoe</strong> yang digunakan pada seluruh produk miliknya, loh! Nah, biar kamu nggak lagi penasaran, yuk simak pembahasan berikut.</p>\r\n<h2>Inilah Arti di Balik Warna Logo Microsoft</h2>\r\n<p>Setelah 25 tahun akhirnya Microsoft memperkenalkan logo barunya. Logo ini tampil baru dengan paduan dua komponen, yakni teks Microsoft dan lambang 4 persegi berwarna-warni. Microsoft menerangkan bahwa lambang 4 persegi berwarna-warni melambangkan produk Microsoft yang beragam, dan masing-masing warna mewakili tiap produknya.</p>\r\n<h3>Biru</h3>\r\n<p><img src="/blog/editor/images/image/microsoft-blue-picture.jpeg" alt="" width="550" height="167" /></p>\r\n<p>Warna biru Microsoft digunakan untuk merepresentasikan produk <em>operating system</em> unggulan mereka, Windows. Selain Windows, produk lain seperti Windows Phone, Microsoft Azure, dan Outlook.com juga memakai skema warna ini. Tidak ketinggalan browser terbaru mereka, <a class="ui-link" href="https://jalantikus.com/tips/microsoft-edge-vs-google-chrome/" target="_blank" rel="noopener noreferrer"><strong>Microsoft Edge</strong></a> yang menggantikan Internet Explorer.</p>\r\n<h3>Merah</h3>\r\n<p><img src="/blog/editor/images/image/microsoft-red-picture.jpeg" alt="" width="550" height="167" /></p>\r\n<p>Siapa di antara kamu yang tidak pernah pakai aplikasi ini dalam mengerjakan tugas? Ya benar, <a class="ui-link" href="https://jalantikus.com/tips/5-software-gratis-alternatif-microsoft-office/" target="_blank" rel="noopener noreferrer"><strong>Microsoft Office</strong></a>. Warna merah dalam logo Microsoft melambangkan <em>software</em> yang satu ini. Aplikasi ini merupakan kumpulan dari banyak aplikasi, misal Microsoft Word sebagai pengolah kata, <a class="ui-link" href="https://jalantikus.com/gokil/karya-seni-yang-dibuat-dengan-microsoft-excel/" target="_blank" rel="noopener noreferrer"><strong>Microsoft Excel</strong></a> sebagai pengolah angka, <strong>Microsoft PowerPoint</strong> untuk presentasi, dan masih banyak lainnya.</p>\r\n<h3>Hijau</h3>\r\n<p><img src="/blog/editor/images/image/microsoft-green-picture.jpeg" alt="" width="550" height="167" /></p>\r\n<p>Ini adalah konsol game yang dibuat oleh Microsoft. Bila kamu menebak, <a class="ui-link" href="https://jalantikus.com/gadgets/perbandingan-grafis-gta-v-di-pc-xbox-one-dan-ps-4/" target="_blank" rel="noopener noreferrer"><strong>Xbox</strong></a>, jawaban kamu tepat banget. Warna hijau melambangkan konsol game besutan Microsoft ini. Sejak diluncurkan pada November 2001 di Amerika Serikat, Xbox mampu menyaingi PlayStation milik Sony atau konsol game Nintendo. Selain itu ada juga <strong>Xbox Live</strong>, yaitu sebuah layanan yang memungkinkan para pemain Xbox terhubung secara <em>online</em>.</p>\r\n<h3>Kuning</h3>\r\n<p><img src="/blog/editor/images/image/microsoft-yellow-picture.jpeg" alt="" width="550" height="167" /></p>\r\n<p>Kuning menjadi warna yang identik dengan situs mesin pencari web yang satu ini, <a class="ui-link" href="https://jalantikus.com/tips/ubah-bing-jadi-google-search-di-cortana-windows-10/" target="_blank" rel="noopener noreferrer"><strong>Bing</strong></a>. Situs pencari web milik Microsoft ini diperkenalkan tahun 2009 oleh CEO Microsoft, <strong>Steve Ballmer</strong> pada konferensi "All Things Digital" di San Diego. Saat ini Bing dan juga Edge digunakan untuk mengoptimalkan asisten digital milik Microsoft, <a class="ui-link" href="https://jalantikus.com/tips/cortana-for-android-vs-google-now-siapa-lebih-wow/" target="_blank" rel="noopener noreferrer"><strong>Cortana</strong></a>.</p>', 'Minggu', '2017-01-08', '23:16:10', 'ms.jpg', 11, 'Microsoft,Windows', 'Y', 'jalantikus.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `judul`, `gambar`) VALUES
(1, 'Hari Ibu', 'gambar-selamat-hari-ibu.png');

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE IF NOT EXISTS `halamanstatis` (
  `id_halaman` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(1, 'Tech News', 'tech-news', 'Y'),
(2, 'Tutorial', 'tutorial', 'Y'),
(3, 'Intermezzo', 'intermezzo', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_artikel` int(5) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `email_komentar` varchar(100) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama_komentar`, `email_komentar`, `isi_komentar`, `tgl_komentar`, `jam_komentar`, `aktif`) VALUES
(8, 20, 'Agis Laksamana', 'agislaksamana46@gmail.com', 'anjing', '2017-01-08', '11:59:41', 'Y'),
(9, 20, 'Agis Rahma Herdiana', 'agis.rahma.herdiana@gmail.com', 'cekkkkkkkkkkkkk', '2017-01-08', '12:01:59', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE IF NOT EXISTS `log_aktivitas` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `aktivitas` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id_log`, `id_user`, `aktivitas`, `tanggal`, `waktu`) VALUES
(1, 1, 'Login ke panel admin', '2017-01-13', '22:54:48'),
(2, 1, 'Menambhakan pengguna baru', '2017-01-13', '22:56:22'),
(3, 1, 'Memblokir seorang pengguna (user)', '2017-01-13', '22:56:51'),
(4, 1, 'Mengaktifkan kembali seorang pengguna yang diblokir', '2017-01-13', '23:16:43'),
(5, 1, 'Meninggalkan halaman admin', '2017-01-13', '23:17:57'),
(6, 5, 'Login ke panel admin', '2017-01-13', '23:18:14'),
(7, 5, 'Meninggalkan halaman admin', '2017-01-13', '23:20:37'),
(8, 1, 'Login ke panel admin', '2017-01-13', '23:20:52'),
(9, 1, 'Meninggalkan halaman admin', '2017-01-13', '23:29:09'),
(10, 1, 'Masuk ke panel admin', '2017-01-15', '17:19:46'),
(11, 1, 'Mengubah sebuah artikel', '2017-01-15', '17:20:49'),
(12, 1, 'Mengubah sebuah artikel', '2017-01-15', '17:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id_main` int(5) NOT NULL AUTO_INCREMENT,
  `nama_main` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_main`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id_main`, `nama_main`, `link`, `aktif`) VALUES
(1, 'Beranda', 'http://localhost/blog', 'Y'),
(2, 'Tech News', 'kategori-1-tech-news.html', 'Y'),
(3, 'Tutorial', 'kategori-2-tutorial.html', 'Y'),
(4, 'Intermezzo', 'kategori-3-intermezzo.html', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(5) NOT NULL AUTO_INCREMENT,
  `parent_id` int(5) NOT NULL,
  `nama_module` char(200) NOT NULL,
  `icon` char(100) NOT NULL,
  `dir` char(200) NOT NULL,
  `url` char(200) NOT NULL,
  `ordering` int(5) NOT NULL,
  `tambah` char(1) NOT NULL DEFAULT 'N',
  `baca` char(1) NOT NULL DEFAULT 'N',
  `edit` char(1) NOT NULL DEFAULT 'N',
  `hapus` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_module`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id_module`, `parent_id`, `nama_module`, `icon`, `dir`, `url`, `ordering`, `tambah`, `baca`, `edit`, `hapus`) VALUES
(1, 0, 'Master', 'icon-book', '', '954746130', 0, 'Y', 'Y', 'Y', 'Y'),
(2, 0, 'Setting', 'icon-cog', '', '305525640', 14, 'Y', 'Y', 'Y', 'Y'),
(3, 1, 'Artikel', 'icon-edit', 'mod_artikel', 'artikel', 1, 'Y', 'Y', 'Y', 'Y'),
(4, 1, 'Kategori', 'icon-bookmark', 'mod_kategori', 'kategori', 2, 'Y', 'Y', 'Y', 'Y'),
(7, 1, 'Tags', 'icon-tags', 'mod_tags', 'tags', 3, 'Y', 'Y', 'Y', 'Y'),
(8, 2, 'Module', 'icon-th-large', 'mod_module', 'module', 17, 'Y', 'Y', 'Y', 'Y'),
(10, 0, 'User', 'icon-user', '#', '892048825', 12, 'Y', 'Y', 'Y', 'Y'),
(11, 10, 'User Role', 'icon-lock', 'mod_role', 'role', 13, 'Y', 'Y', 'Y', 'Y'),
(12, 1, 'Komentar', 'icon-comments-alt', 'mod_komentar', 'komentar', 5, 'Y', 'Y', 'Y', 'Y'),
(13, 1, 'Halaman Statis', 'icon-info-sign', 'mod_halamanstatis', 'halamanstatis', 6, 'Y', 'Y', 'Y', 'Y'),
(14, 1, 'Sensor Kata', 'icon-trash', 'mod_sensor', 'sensor', 4, 'Y', 'Y', 'Y', 'Y'),
(15, 0, 'Media', 'icon-picture', '#', '178452796', 7, 'Y', 'Y', 'Y', 'Y'),
(16, 15, 'Event', 'icon-time', 'mod_event', 'event', 0, 'Y', 'Y', 'Y', 'Y'),
(24, 2, 'Setting Web', 'icon-wrench', 'mod_setting', 'setting', 19, 'Y', 'Y', 'Y', 'Y'),
(25, 2, 'Templates', 'icon-home', 'mod_templates', 'templates', 18, 'Y', 'Y', 'Y', 'Y'),
(26, 2, 'Main Menu', 'icon-th', 'mod_menu', 'mainmenu', 15, 'Y', 'Y', 'Y', 'Y'),
(27, 2, 'Sub Menu', 'icon-th-list', 'mod_menu/mod_submenu', 'submenu', 16, 'Y', 'Y', 'Y', 'Y'),
(29, 15, 'Advertisement', 'icon-flag', 'mod_advertisement', 'advertisement', 8, 'Y', 'Y', 'Y', 'Y'),
(31, 15, 'Partners', 'icon-refresh', 'partners', 'partners', 0, 'Y', 'Y', 'Y', 'Y'),
(32, 10, 'List User', 'icon-user', 'mod_user/mod_users', 'list_user', 0, 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id_partner` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_partner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id_partner`, `judul`, `url`, `gambar`, `tgl_posting`, `aktif`) VALUES
(1, 'Akzo Nobel', 'akzonobel.com', 'partner1.png', '2016-12-04', 'Y'),
(2, 'Alberta Centennial', 'alberta.com', 'partner2.png', '2016-12-04', 'Y'),
(3, 'ASTD', 'astd.com', 'partner4.png', '2016-12-04', 'Y'),
(4, 'Health', 'health.com', 'partner5.png', '2016-12-04', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sensorkata`
--

CREATE TABLE IF NOT EXISTS `sensorkata` (
  `id_kata` int(5) NOT NULL AUTO_INCREMENT,
  `kata` char(100) NOT NULL,
  `ganti` char(100) NOT NULL,
  PRIMARY KEY (`id_kata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sensorkata`
--

INSERT INTO `sensorkata` (`id_kata`, `kata`, `ganti`) VALUES
(1, 'anjing', 'a****g'),
(3, 'bangsat', 'b*****t');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_web` varchar(200) NOT NULL,
  `judul_web` text NOT NULL,
  `email_web` varchar(100) NOT NULL,
  `call_center` varchar(15) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `paging_home` int(5) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_web`, `judul_web`, `email_web`, `call_center`, `meta_deskripsi`, `meta_keyword`, `domain`, `logo`, `paging_home`) VALUES
(1, 'anteng', 'Tempat Asyik Untuk Nongkrong Online', 'support@anteng.com', '085860803101', 'meta_deskripsi', 'meta_keywoard', 'anteng.com', 'anteng.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id_sub` int(5) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `sub_aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id_tag` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(100) NOT NULL,
  `tag_seo` varchar(100) NOT NULL,
  `count` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tag`, `nama_tag`, `tag_seo`, `count`) VALUES
(5, 'PHP', 'php', 0),
(6, 'Hacker', 'hacker', 0),
(7, 'Google', 'google', 0),
(8, 'Teknologi', 'teknologi', 0),
(9, 'Microsoft', 'microsoft', 0),
(10, 'Windows', 'windows', 0),
(11, 'Facebook', 'facebook', 0);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id_templates` int(5) NOT NULL AUTO_INCREMENT,
  `judul` char(100) NOT NULL,
  `pembuat` char(100) NOT NULL,
  `folder` char(200) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_templates`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`) VALUES
(4, 'Motive', 'Agis Laksamana', 'templates/motive', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `level` varchar(15) NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `last_login` datetime NOT NULL,
  `locktype` enum('0','1') NOT NULL DEFAULT '0',
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `user_email`, `user_phone`, `user_image`, `level`, `blokir`, `last_login`, `locktype`, `id_session`) VALUES
(1, 'admin', '7bccfde7714a1ebadf06c5f4cea752c1', 'Agis Laksamana', 'L', 'agislaksamana46@gmail.com', '085860803101', 'avatar17.jpg', 'admin', 'N', '2017-01-15 17:19:46', '1', 'us4d1sjpj03rbls3o4umjgm2i5'),
(5, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Arimbi', 'P', 'user@user.com', '085860803101', 'avatar13.jpg', 'user', 'N', '2017-01-13 23:18:14', '0', 'shkb9649nrh4kjkfhv2p697qq7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
