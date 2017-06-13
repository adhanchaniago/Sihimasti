-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 03:19 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sihimastitest`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `judul_pengumuman`, `isi_pengumuman`, `created_date`, `updated_date`, `id_user`) VALUES
(17, 'Sharing Session Berpikir Sistem ', '<p><strong></strong></p><p><strong>Dear Students,.</strong></p><p><strong>Diharapkan kehadirannya untuk mendengarkan sharing session, sumbangan pemikiran mengenai permasalahan di sekitar Toba Samosir dilihat dari sudut pandang berpikir sistem yang akan di adakan pada : </strong></p><p><strong>Hari/Tanggal : Selasa, 6 Juni 2017</strong></p><p><strong>Pukul : 14.00 - 17.00 WIB<br></strong></p><p><strong>Tempat : Auditorium Institut Teknologi Del</strong></p><p><strong>Kegiatan :<em> Sharing session</em> mengenai perilaku berkendaraan di Toba Samosir, Tingginya penderita HIV Aids, Fenomena Malaria, Transportasi di Toba Samosir dll. </strong></p><p><strong>Sharing session ini akan disampaikan dalam bentuk acara yang <em>Fun</em> dan <em>Relax</em>, ditunggu kehadirannya. <br></strong></p>', '2017-06-06 07:06:36', '2017-06-06 10:06:08', 2),
(18, 'Kuliah Umum', '<p>Kuliah Umum dari Universitas Indonesia</p><p>Lokasi: AUDITORIUM</p><p>Waktu: Selasa, 17.00</p><p>Pakaian: Dress Code Almamater</p><p>Salam,</p><p>Mariani Siahaan<br></p>', '2017-06-06 11:06:56', '2017-06-06 11:06:56', 1),
(19, 'Pertemuan Pertama dengan Angkatan 16', '<p>Dear HIMASTI,</p><p><br></p><p>Kami mengundang rekan-rekan sekalian untuk mengadakan pertemuan pertama dengan angkatan 16, yang akan dilaksanakan pada:</p><p>Hari: Sabtu</p><p>Pukul: 17.00</p><p>Tempat: OT</p><p>Kami sangat mengharapkan kehadirannya.</p><p><br></p><p>Jaya HIMASTI!!</p>', '2017-06-07 03:06:20', '2017-06-07 03:06:20', 1),
(20, 'Pengumuman ', '<p>Pemilihan Ketua dan Wakil Ketua HIMASTI 2017/2018</p><p><br><br>Kepada rekan-rekan mahasiswa/i HIMASTI,<br>Selamat siang untuk kita semua.<br>Mohon maaf mengganggu waktunya. Kami dari KPU HIMASTI 2017/2018 memberi tahu kepada seluruh mahasiswa/i sekalian bahwa pemilihan dan kampanye ketua dan wakil ketua HIMASTI 2017/2018 dilaksanakan pada :</p><p><br><br>Hari/Tanggal : Kamis, 11 Juni 2017<br>Pukul : 13.00 WIB - selesai<br>Tempat : Auditorium Institut Teknologi Del</p><p><br><br>SELURUH MAHASISWA WAJIB HADIR DALAM ACARA INI. Kiranya seluruh mahasiswa menggunakan hak nya untuk memilih Ketua dan Wakil Ketua HIMASTI 2017/2018. Suara Abang/Kakak/Teman/Adik menentukan masa depan HIMAPRO kita. Dan kami mengingatkan agar kita tidak GolPut. Diharapkan juga agar informasi ini diberi tahukan kepada mahasiswa/i HIMASTI yang lainnya agar mengikuti acara ini.</p><p><br><br>Atas perhatiannya kami ucapkan terima kasih.</p><p><br><br>--<br>Oktavianti Debora Siahaan (11S15044)<br>Informatics Engineering 2015<br>Panitia KPU HIMASTI 2017/2018</p>', '2017-06-07 03:06:07', '2017-06-07 03:06:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `announcement_file`
--

CREATE TABLE IF NOT EXISTS `announcement_file` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `id_announcement` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_file`
--

INSERT INTO `announcement_file` (`id`, `nama_file`, `id_announcement`) VALUES
(1, '51421.jpg', 13),
(2, 'background.jpg', 13),
(3, 'bola.png', 13),
(4, 'cobaja.jpg', 13),
(5, 'Study_34591.png', 14),
(6, 'test.jpg', 14),
(7, 'you_win_text.jpg', 14),
(8, 'bola.png', 16),
(9, 'cobaja.jpg', 16),
(10, 'd4da6ca7a5894759bf3e2085acefc00c_makna-gotong-royong-kian-memudar-suara-nusantara-gotong-royong-clipart_714-444.jpeg', 16),
(11, 'Berpikir_Sistem_iklan.jpg', 17),
(13, 'andal_2.pdf', 18),
(14, 'Panitia Pelantikan Anggota Baru HIMASTI.pdf', 20);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', NULL),
('pengurus-1', '4', NULL),
('pengurus-2', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'admin can do everything', NULL, NULL, NULL, NULL),
('pengurus-1', 1, 'ketua dan bendahara', NULL, NULL, NULL, NULL),
('pengurus-2', 1, 'seluruh pengurus beserta kepala prodi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'pengurus-1'),
('pengurus-1', 'pengurus-2');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_gallery`
--

CREATE TABLE IF NOT EXISTS `g_gallery` (
  `gallery_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descr` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_gallery`
--

INSERT INTO `g_gallery` (`gallery_id`, `name`, `descr`, `date`) VALUES
(5, 'Acara Himasti', 'Acara Satu', '2017-06-06 15:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `g_photo`
--

CREATE TABLE IF NOT EXISTS `g_photo` (
  `photo_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_photo`
--

INSERT INTO `g_photo` (`photo_id`, `gallery_id`, `name`) VALUES
(3, 5, 'DSC_511959375c8dbc1e6.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `pemasukan` double NOT NULL,
  `pengeluaran` double NOT NULL,
  `saldo` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id` int(11) NOT NULL,
  `nama_matakuliah` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_matakuliah` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama_matakuliah`, `created_date`, `updated_date`, `id_user`, `kode_matakuliah`) VALUES
(1, 'Sistem Paralel dan Terdisitribusi', '2017-06-07 09:06:13', '2017-06-07 09:06:13', 4, 'NWS3210'),
(2, 'Pengembangan Aplikasi Pada Platform Khusus', '2017-06-07 11:06:00', '2017-06-07 11:06:00', 4, 'IFS3202');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `nim`, `gender`, `angkatan`, `alamat`, `agama`, `telepon`, `id_user`) VALUES
(1, 'Ivan', '11S14030', 'L', '14', 'Jl. Dahlia 5', 'Kristen', '08080808', 1),
(2, 'Betty', '11S14029', 'P', '2014', 'Jl. Dahlia 5', 'Kristen', '08080808', 2),
(3, 'Romasi', '11S14005', 'P', '2014', 'Laguboti', 'Kristen', '08080808', 3),
(4, 'Okta', '11S14004', 'P', '14', 'Jl. Durian, Medan', 'Protestan', '08985467239', 4);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1495827046),
('m130524_201442_init', 1495827068),
('m160406_120743_onmotion_yii2_gallery', 1495827074);

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE IF NOT EXISTS `peraturan` (
  `id` int(11) NOT NULL,
  `nama_peraturan` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan`
--

INSERT INTO `peraturan` (`id`, `nama_peraturan`, `nama_file`, `created_date`, `updated_date`, `id_user`) VALUES
(1, 'Peraturan Akademik dan Kemahasiswaan', 'PERATURAN_Akad_MhsITDel_2015.pdf', '2017-06-07 02:06:36', '2017-06-07 02:06:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(11) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `keterangan` tinytext NOT NULL,
  `id_matakuliah` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `topik`, `tutor`, `lokasi`, `tanggal_pelaksanaan`, `created_date`, `updated_date`, `id_user`, `keterangan`, `id_matakuliah`) VALUES
(1, 'RPC', 'Dapot', 'GD722', '2017-06-07 15:55:00', '2017-06-07 10:06:07', '2017-06-07 10:06:07', 4, 'Jangan telat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_file`
--

CREATE TABLE IF NOT EXISTS `tutorial_file` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `id_tutorial` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial_file`
--

INSERT INTO `tutorial_file` (`id`, `nama_file`, `size`, `id_tutorial`) VALUES
(1, 'fallacies.en.id.pdf', 392421, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sZqaeoWLuRDmp7wMJeUTDBbHHOPy2wmk', '$2y$13$JrwVnOvLK9xeneGMaAqPEubBXI8EYoL1lzAfT5A5VTskDDnKw7teW', NULL, 'test@test.com', 10, 1495844575, 1495844575),
(2, 'betty', 'HKGBHTAKmS4jnY3WCBlzEtnQnZl6IFBC', '$2y$13$dXR.69gbLZ3FWfma2tBT1.kcVhZG1.UcT9m400TLMyG1xfU4CAp3S', NULL, 'betty@betty.com', 10, 1496674412, 1496674412),
(3, 'romasi', '0qlH1xmKO0oI4kOPmWUkAvR1QAmJxjvV', '$2y$13$ylHiwl2fsGojcD/15Pvk9.cQef4SUcNWg8DwceatQapP5T7awUysK', NULL, 'ifs14005@students.del.ac.id', 10, 1496736726, 1496736726),
(4, 'okta', 'rjnp3b0pJODVTmyYmjgwiN29cb22q8ol', '$2y$13$8wr/ZH6kwV.QjvFL8gcC0e4eE9NL9Q1eB2v96pQG1KNiBQh9t3aSq', NULL, 'okta@del.ac.id', 10, 1496742199, 1496742199);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `announcement_file`
--
ALTER TABLE `announcement_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `g_gallery`
--
ALTER TABLE `g_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `g_photo`
--
ALTER TABLE `g_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`), ADD KEY `id_user_2` (`id_user`), ADD KEY `id_user_3` (`id_user`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`), ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `tutorial_file`
--
ALTER TABLE `tutorial_file`
  ADD PRIMARY KEY (`id`), ADD KEY `id_tutorial` (`id_tutorial`), ADD KEY `id_tutorial_2` (`id_tutorial`), ADD KEY `id_tutorial_3` (`id_tutorial`), ADD KEY `id_tutorial_4` (`id_tutorial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `announcement_file`
--
ALTER TABLE `announcement_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `g_gallery`
--
ALTER TABLE `g_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `g_photo`
--
ALTER TABLE `g_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutorial_file`
--
ALTER TABLE `tutorial_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
ADD CONSTRAINT `announcement_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
ADD CONSTRAINT `keuangan_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
ADD CONSTRAINT `member_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `tutorial`
--
ALTER TABLE `tutorial`
ADD CONSTRAINT `tutorial_mk_fk` FOREIGN KEY (`id_matakuliah`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutorial_file`
--
ALTER TABLE `tutorial_file`
ADD CONSTRAINT `file_tutorial_fk` FOREIGN KEY (`id_tutorial`) REFERENCES `tutorial` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
