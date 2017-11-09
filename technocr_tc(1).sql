-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2017 at 10:13 PM
-- Server version: 5.5.55-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technocr_tc`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `ket_perusahaan` text NOT NULL,
  `owner1` varchar(200) NOT NULL,
  `owner2` varchar(200) NOT NULL,
  `logo_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `ket_perusahaan`, `owner1`, `owner2`, `logo_perusahaan`) VALUES
(1, 'Trainit merupakan lembaga pendidikan non formal yang didirikan pada awal tahun 2013. Sampai saat ini telah meluluskan lebih dari 200 siswa dan Trainit dipercaya untuk menjadi pembicara seminar atau workshop di Universitas Amikom, STMIK Asia Malang, Dinas Pendidikan Samarinda dan lain lain.', 'Sampai saat ini telah meluluskan lebih dari 200 siswa dan Trainit dipercaya untuk menjadi pembicara seminar atau workshop di Universitas Amikom, STMIK Asia Malang, Dinas Pendidikan Samarinda dan lain ', 'Sampai saat ini telah meluluskan lebih dari 200 siswa dan Trainit dipercaya untuk menjadi pembicara seminar atau workshop di Universitas Amikom, STMIK Asia Malang, Dinas Pendidikan Samarinda dan lain ', 'LOGO-TC.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `ket_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `ket_kategori`) VALUES
(1, 'webdesign', 'Design Visual website'),
(2, 'codeigniter', 'pembahasan tentang codeigniter'),
(3, 'androidAPP', 'Tutorial tentang Aplikasi Android'),
(4, 'design animasi', 'Pembahasan tentang design'),
(5, 'Networking', 'Pembahasan Seputar jaringan komputer'),
(6, 'Artikel', 'Pembahasan Tentang seputar dunia IT'),
(7, 'Tips Dan Trik', 'solusi IT');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `id_komunitas` int(11) NOT NULL,
  `judul_komunitas` varchar(100) NOT NULL,
  `gambar_komunitas` varchar(50) NOT NULL,
  `isi_komunitas` text NOT NULL,
  `url_komunitas` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status_komunitas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id_komunitas`, `judul_komunitas`, `gambar_komunitas`, `isi_komunitas`, `url_komunitas`, `id_kategori`, `status_komunitas`, `tanggal`, `waktu`) VALUES
(1, 'CARA MENINGKATKAN KECEPATAN AKSES WEBISTE', 'website-speed.jpg', 'kecepatan load suatu website merupakan hal yang wajib diperhatikan oleh developer, karna survei membuktikan bahwa pengunjung akan langsung meninggalkan webiste mereka jika load webiste lebih dari 30 detik, banyak sebenarnya cara yang bisa kita lakukan untuk mempercepat akses webiste kita, salah satunya adalah mengcompress file css melalui tools online. tapi bukan itu yang akan kita bahas sekarang.\r\n\r\n \r\n\r\nsekarang kita akan mengaktifkan fitur Optimize Website yang biasanya sudah tersedia di layanan web server anda.\r\n\r\nnah sekarang silahkan akses cpanel server anda dan cari fitur ini, setelah itu lakukan settingan seperti dibawah ini dan jangan lupa klik button setting untuk menyimpan perubahan', 'https://belajarphp.net/cara-meningkatkan-akses-kec', 7, 1, '2017-08-02', '02:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `content_id` varchar(200) NOT NULL,
  `view_type` varchar(150) NOT NULL,
  `urutan` int(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `content_id`, `view_type`, `urutan`, `status`) VALUES
(1, 'HOME', 'home', 0, 'javascript:void(0)', '1', 0, 1),
(2, 'TUTORIAL', 'tutorial', 0, 'javascript:void(0)', '1', 0, 1),
(3, 'Tutorial IT', 'it-tutor', 2, 'it-tutor', '4', 0, 1),
(4, 'Tutorial Codeigniter', 'it-codeigniter', 2, 'it-codeigniter', '4', 0, 1),
(5, 'Tutorial Desain', 'desain-tutor', 2, 'desain-tutor', '4', 0, 1),
(6, 'Tutorial Android', 'android-tutor', 2, 'android-tutor', '4', 0, 1),
(7, 'LAYANAN', 'layanan', 0, 'javascript:void(0)', '1', 0, 1),
(8, 'PRODUK', 'produk', 0, 'javascript:void(0)', '1', 0, 1),
(9, 'Produk Techno Creative', 'produk-tc', 8, 'produk-tc', '4', 0, 1),
(10, 'Produk Komunitas', 'produk-komunitas', 8, 'produk-komunitas', '4', 0, 1),
(11, 'Produk Berbagi', 'produk-sharing', 8, 'produk-sharing', '4', 0, 1),
(12, 'KOMUNITAS', 'komunitas', 0, 'javascript:void(0)', '1', 0, 1),
(13, 'Komunitas Global', 'komunitas-global', 12, 'komunitas-global', '4', 0, 1),
(14, 'Komunitas Lokal', 'komunitas-lokal', 12, 'komunitas-lokal', '4', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `operator_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`operator_id`, `nama_lengkap`, `username`, `password`, `last_login`) VALUES
(1, 'Ilham Julian Efendi', 'ilham', 'b63d204bf086017e34d8bd27ab969f28', '2017-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `ket_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ket_produk`, `foto_produk`, `harga_produk`, `tanggal`) VALUES
(1, 'DESAIN THEMES TOKO ONLINE DENGAN HTML DAN CSS', 'Di era modern ini, dimana sebuah situs Toko Online menjadi sebuah keharusan untuk para pebisnis khus', 'desaintema.jpg', '150000', '0000-00-00 00:00:00'),
(2, 'DVD Kursus Membuat Flat Animation', 'Audio visual adalah salah satu jembatan komunikasi yang efektif untuk menyampaikan pesan kepada audi', 'flat-animasi.jpg', '115000', '0000-00-00 00:00:00'),
(3, 'DVD Tutorial Belajar Desain Grafis Pemula: Langkah', 'COURSE DESCRIPTION\r\n\r\nKebanyakan yang beredar itu lebih kepada bagaimana menguasai software tanpa me', 'belajar-desain.jpg', '150000', '2017-08-15 00:00:00'),
(4, '7 HARI JAGO WEB DESIGN – HTML, CSS DAN JAVASCRIPT ', 'Bagi seorang yang ingin menjadi ahli dalam bidang web desain atau web developer maka menguasai HTML,', 'web-design.jpg', '200000', '2017-08-21 00:00:00'),
(5, 'DVD Tutorial Membangun Aplikasi Mobile Dengan Cord', 'Handphone yang dahulunya hanya sekedar alat komunikasi, kini bertransformasi sebagai sarana hiburan ', 'tutorial-cordova.png', '300000', '2017-08-16 00:00:00'),
(6, 'DVD Tutorial Membuat Aplikasi Video Streaming Deng', 'Android adalah salah satu sistem operasi mobile yang memiliki pengguna no wahid di dunia, sistem ope', 'cover_android.jpg', '100000', '2017-08-16 00:00:00'),
(7, 'DVD Tutorial Panduan Sakti Menguasai laravel 5', 'Tutorial panduan sakti menguasai laravel 5 ini adalah salah satu satunya tutorial  laravel 5 bahasa ', 'laravel5.png', '120000', '2017-08-15 00:00:00'),
(8, 'DVD TUTORIAL TIPS DAN TRIK APLIKATIF MASTER PHP', 'Selama hampir 5 tahun menjadi web developer tentu sangat banyak pengalaman yang saya temui ketika se', 'trik_tips_dp.jpg', '110000', '2017-08-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `judul`, `keterangan`) VALUES
(1, 'banner1.jpg', 'slider1', 'slider1'),
(2, 'banner2.jpg', 'banner2.jpg', 'banner2.jpg'),
(3, 'banner3.jpg', 'banner3.jpg', 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_testimoni` varchar(50) NOT NULL,
  `alamat_testimoni` varchar(50) NOT NULL,
  `email_testimoni` varchar(50) NOT NULL,
  `pesan_testimoni` text NOT NULL,
  `foto_testimoni` varchar(100) NOT NULL,
  `nilai_testimoni` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama_testimoni`, `alamat_testimoni`, `email_testimoni`, `pesan_testimoni`, `foto_testimoni`, `nilai_testimoni`, `tanggal`) VALUES
(1, 'Lukmanul Hakim', 'jogja', 'Bukulokomedia.com', 'Belajar pemrograman melalui Video Tutorial sangat efektif, dimana kita bisa langsung melihat secara ', 'lukmanul.jpg', '12', '2017-08-18 00:00:00'),
(2, 'Desi Handayani', 'semarang', 'Girls Developer', 'Luar Biasa, belajar dari video serasa private langsung dengan pengajarnya. setiap materi disertai dengan studi kasus lagi jadi saya semakin paham, makasi pak Nuris Akbar', 'desi.jpg', '15', '2017-08-21 00:00:00'),
(3, 'Desi Handayani', 'semarang', 'Girls Developer', 'Luar Biasa, belajar dari video serasa private langsung dengan pengajarnya. setiap materi disertai dengan studi kasus lagi jadi saya semakin paham, makasi pak Nuris Akbar', 'desi.jpg', '15', '2017-08-21 00:00:00'),
(4, 'Lukmanul Hakim', 'jogja', 'Bukulokomedia.com', 'Belajar pemrograman melalui Video Tutorial sangat efektif, dimana kita bisa langsung melihat secara ', 'lukmanul.jpg', '12', '2017-08-18 00:00:00'),
(5, 'Lukmanul Hakim', 'jogja', 'Bukulokomedia.com', 'Belajar pemrograman melalui Video Tutorial sangat efektif, dimana kita bisa langsung melihat secara ', 'lukmanul.jpg', '12', '2017-08-18 00:00:00'),
(6, 'Desi Handayani', 'semarang', 'Girls Developer', 'Luar Biasa, belajar dari video serasa private langsung dengan pengajarnya. setiap materi disertai dengan studi kasus lagi jadi saya semakin paham, makasi pak Nuris Akbar', 'desi.jpg', '15', '2017-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id_tutorial` int(11) NOT NULL,
  `judul_tutorial` varchar(100) NOT NULL,
  `gambar_tutorial` varchar(50) NOT NULL,
  `isi_tutorial` text NOT NULL,
  `url_tutorial` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `judul_tutorial`, `gambar_tutorial`, `isi_tutorial`, `url_tutorial`, `id_kategori`, `tanggal`) VALUES
(1, 'PESAN ERROR PHP YANG SERING TERJADI', 'konsep-php-opp.jpg', 'Pesan error merupakan hal yang sering kita temui dalam proses development sebuah software, hal ini bisa terjadi karna kesalahan script yang kita tulis atau karna hal lain. misalnya karna terbatas nya sumber daya hardware yang kita gunakan sehingga program tidak bisa berjalan dengan maximal.\r\n\r\nBerikut ini adalah kumpulan pesan error yang sering terjadi beserta cara menyelesaikan nya.\r\n\r\nAllowed memory size of 33554432 bytes exhausted\r\n\r\nPesan error ini muncul karna penggunaan memory sudah melebihin batas yang ditentukan, solusi nya bisa dengan menambah limit penggunaan memory pada settingan php.ini  atau cara paling gampang  dengan menambahkan script ini pada baris sebelum pesan error itu muncul :\r\n\r\n\r\nini_set(\'memory_limit\', \'-1\');\r\n1\r\nini_set(\'memory_limit\', \'-1\');\r\nSumber : https://stackoverflow.com/questions/415801/allowed-memory-size-of-33554432-bytes-exhausted-tried-to-allocate-43148176-byte', 'https://belajarphp.net/pesan-error-php/', 7, '2017-08-22'),
(2, 'REQUEST MATERI VIDEO TUTORIAL 59 TRIK APLIKATIF MASTER PHP', '130064_22b3_9.jpg', 'Dalam mengerjakan sebuah proyek tentu kita sering bertemu sebuah masalah yang membuat developer pemula memutar otak untuk menyelesaikan masalah tersebut, mungkin masalah tersebut tidaklah terlalu sulit sebenarnya tapi seorang web developer pemula di tuntut untuk mengkolaborasikan beberapa materi yang sebenarnya sudah dikuasai untuk menyelesaikan masalah ini, disini lah masalah utamanya, seorang developer pemula belum terbiasa dengan hal seperti ini.\r\n\r\nsebagai contoh : anda diminta untuk membuat fitur otentifikasi tidak hanya menggunakan email dan password tapi juga akan ada sebuah kode unik yang akan dikirimkan kepada no HP customer sebagai salahs atu input yang digunakan untuk melakukan proses login.', 'https://belajarphp.net/request-materi-video-tutori', 2, '2017-08-16'),
(3, 'VIDEO TUTORIAL KAMU PASTI BISA CODEIGNITER KURANG DARI 1 JAM', '269638_08f4_2.jpg', 'Video Tutorial Codeigniter – Menurut sitepoint.com Codeigniter adalah salah satu framework yang banyak diminati khususnya di indonesia, hal ini dikarenakan banyak software di indonesia yang dikembangkan menggunakan codeigniter jadi para vendor tetap mencari developer yang menguasai codeigniter untuk terus mengembangkan atau memelihara software buatan mereka.\r\n\r\nPada video tutorial codeigniter untuk pemula ini saya akan bagi menjadi 6 topi pembahasan sesuai dengan fungsi nya yaitu  :\r\n\r\nInstalasi dan konfigurasi codeigniter\r\nKonsep MVC\r\nMenampilkan data ke view\r\nInsert Data Ke database\r\nUpdate data\r\nDelete data dan penutup.\r\nContoh scriptnya juga akan saya lampirkan tapi untuk penjelasan scriptnya silahkan menonton video di atas nya. untuk hasil maximal silahkan pilih kualitas HD untuk resolusi video lebih bagus dan jelas.\r\n\r\nBagian 1 – instalasi dan konfigurasi\r\n\r\nPada bagian ini saya akan paparkan apa itu codeigniter, dimana kita bisa mendapatkan codeigniter serta bagaimana proses instalasi dan configurasi framework codeigniter.', 'https://belajarphp.net/video-tutorial-codeigniter/', 2, '2017-08-15'),
(4, 'PREVIEW RACODE + TEMPLAET GANTELELLA', 'preview-o.jpg', 'jika anda sudah sampai pada postingan ini saya yakin anda pasti sudah tau tentang racode, kalau belum tau boleh baca dulu tentang racode sebelum anda melanjutkan menonton video ini.\r\n\r\nBaca Juga :  Racode Tolls Development\r\n\r\nvideo ini dibuat hanya untuk iseng iseng saja sebagai preview racode dengan template gantella yang sedang saya kerjakan sekarang, semoga tools ini cepat selesai dan teman teman bisa menggunakan nya.', 'https://belajarphp.net/preview-racode-templaet-gan', 2, '2017-08-15'),
(5, 'CRUDIGNITER – TOOLS CRUD GENERATOR UNTUK CODEIGNITER', 'CrudBooster_Banner.png', 'CRUD Generator adalah istilah untuk sebuah tools yang membantu developer dalam membuat script untuk proses Creat Read Update Dan Delete secara otomatis dengan bantuan tools tersebut, jika anda adalah pengguna framework Codeigniter maka CRUDIgniter adalah salah satu tools CRUD Generator yang wajib anda coba, karna selain berguna untuk menggenerate CRUD.\r\n\r\nKelebihan CRUDIgniter\r\n\r\nTools ini memiliki beberapa kelebihan yang tidak dimiliki oleh tools generator lain seperti :\r\n\r\nSupport Template AdminLTE, Bootstrap, Gantelella, Startbootstrap, AdminBSB, FlatAdmin, LuminoAdmin, MinimalAdmin Dan HarmoniAdmin.\r\nSupport untuk setting validation rule\r\nSupport Customize penamaan file seperti nama controller dan view\r\nsupport tabel yang berelasi\r\nBaca Juga : RACODE Tools Generator Untuk Framework Codeigniter \r\n\r\nScreenshoot Penggunaan Tolls CRUDIgniter\r\n\r\nProses Setup Rule Dan Asosiation Tabel', 'https://belajarphp.net/crudigniter-crud-crud-gener', 2, '2017-08-07'),
(6, 'CARA INSTALL DAN MENGGUNAKAN COMPOSER', 'cara-install-composer-1.jpg', 'Composer adalah sebuah tools package manager untuk bahasa pemograman PHP yang membantu developer dalam mengelola package yang akan digunakan dalam proyeknya. dengan menggunakan Composer, kita akan dengan mudah mengelola dependency (libraries) yang diperlukan aplikasi php mulai dari download, pengaturan, autoload hingga update dependency, semuanya dengan mudah dapat dilakukan dengan bantuan composer.\r\n\r\nUntuk Pengguna Windows\r\n\r\nuntuk melakukan instalasi composer sangat mudah. silahkan menuju langsung ke situs https://getcomposer.org/ dan pada halaman download anda bisa langsung mendownload installer composer untuk OS windows.', 'https://belajarphp.net/cara-install-dan-menggunaka', 2, '2017-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_tutorial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id_komunitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `operator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id_tutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
