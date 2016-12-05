-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2015 at 09:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig_kab_pbg`
--

-- --------------------------------------------------------

--
-- Table structure for table `sig_album_photo`
--

CREATE TABLE IF NOT EXISTS `sig_album_photo` (
  `id_album` int(15) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `sig_album_photo`
--

INSERT INTO `sig_album_photo` (`id_album`, `nama_album`, `keterangan`) VALUES
(29, 'Agro Wisata Kebun Strawberry', '<p>Agro Wisata Kebun Strawberry</p>\r\n'),
(2, 'Bumi Perkemahan Munjuluhur dan Adventure Zone', '<p>Album Bumi Perkemahan Munjuluhur ccc</p>\r\n'),
(3, 'Objek Wisata Goa Lawa', '<p>Album Goa Lawa</p>\r\n'),
(4, 'Jalur Pendakian Gunung Slamet Pos Bambangan', '<p>Album Jalur Pendakian Gn. Slamet</p>\r\n'),
(5, 'Klawing Rafting Adventure', '<p>Album Klawing Rafting Adventure</p>\r\n'),
(6, 'Masjid Agung Darussalam Purbalingga', '<p>Album Masjid Agung Darussalam Purbalingga</p>\r\n'),
(7, 'Masjid Muhammad Cheng Hoo', '<p>Album Masjid Muhammad Cheng Hoo</p>\r\n'),
(8, 'Monumen Tempat Lahir (MTL) Panglima Besar Soedirman', '<p>Album Monumen Tempat Lahir (MTL) &nbsp;Panglima Besar Soedirman</p>\r\n'),
(9, 'Objek Wisata Air Bojongsari (Owabong)', '<p>Album Objek Wisata Air Bojongsari (Owabong)</p>\r\n'),
(10, 'Pancuran Ciblon Bobotsari', '<p>Album Pancuran Ciblon Bobotsari</p>\r\n'),
(11, 'Pemandian Tirta Asri Walik', '<p>Album Pemandian Tirta Asri Walik</p>\r\n'),
(12, 'Kantor Perpustakaan dan Arsip Daerah', '<p>Kantor Perpustakaan dan Arsip Daerah</p>\r\n'),
(13, 'Petilasan Syekh Jambu Karang', '<p>Petilasan Syekh Jambu Karang</p>\r\n'),
(14, 'Taman Wisata Pendidikan Purbasari Pancuran Mas', '<p>Album Purbasari Pancuran Mas</p>\r\n'),
(15, 'Sanggaluri Education Park', '<p>Album Sanggaluri Education Park</p>\r\n'),
(16, 'Desa Wisata Panusupan', '<p>Album&nbsp;Desa Wisata Panusupan</p>\r\n'),
(17, 'Desa Wisata Tanalum', '<p>Album&nbsp;Desa Wisata Tanalum</p>\r\n'),
(18, 'Desa Wisata Pekiringan', '<p>Album&nbsp;Desa Wisata Pekiringan</p>\r\n'),
(19, 'Desa Wisata Limbasari', '<p>Album&nbsp;Desa Wisata Limbasari</p>\r\n'),
(20, 'Desa Wisata Serang', '<p>Album&nbsp;Desa Wisata Serang</p>\r\n'),
(21, 'Desa Wisata Karangbanjar', '<p>Album Desa Wisata Karangbanjar</p>\r\n'),
(22, 'Desa Wisata Purbayasa', '<p>Album&nbsp;Desa Wisata Purbayasa</p>\r\n'),
(23, 'Sub Terminal Agribisnis (STA) Pratin', '<p>Album&nbsp;Sub Terminal Agribisnis (STA) Pratin</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sig_auth_user`
--

CREATE TABLE IF NOT EXISTS `sig_auth_user` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nama_Lengkap` varchar(255) NOT NULL,
  `Jenis_Kelamin` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `Alamat` text NOT NULL,
  `Hak_Akses` enum('Administrator','Petugas') NOT NULL DEFAULT 'Petugas',
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sig_auth_user`
--

INSERT INTO `sig_auth_user` (`Username`, `Password`, `Nama_Lengkap`, `Jenis_Kelamin`, `Alamat`, `Hak_Akses`) VALUES
('Arief', 'bc80a1e674b7f15ea8c1b8ca90203347', 'Arief Budi Prasetyo zxc', 'Laki - Laki', 'Kertanegara, Purbalingga\r\n', 'Administrator'),
('syifa', '9b20af4a116182c555c3c7f3b4e85f14', 'Amelia Syifa Maharani', 'Perempuan', '&lt;p&gt;Kertanegara&lt;/p&gt;\r\n', 'Petugas'),
('administrator', 'ac053b7b6b7a3df47a1790fc03ac0b36', 'Administrator', 'Laki - Laki', '&lt;p&gt;Yogyakarta&lt;/p&gt;\r\n', 'Administrator'),
('petugas', '0df973cd4a4f2c3570680ea104f081d1', 'Petugas', 'Laki - Laki', '&lt;p&gt;Yogyakarta&lt;/p&gt;\r\n', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `sig_comment`
--

CREATE TABLE IF NOT EXISTS `sig_comment` (
  `id_place` varchar(10) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sig_comment`
--

INSERT INTO `sig_comment` (`id_place`, `comm_name`, `email`, `message`, `time`) VALUES
('11', '1', '1@contoh.com', 'apa yah', '2015-06-27 16:12:29'),
('11', '2', '2@example.com', 'saya ada', '2015-06-27 16:12:49'),
('11', '3', '3@joss.com', 'sundul gan', '2015-06-27 16:13:52'),
('11', 'Dark Magician Girl', 'darkmagician_girls@yahoo.com', 'Dark Magician Girl', '2015-06-27 16:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `sig_data_category`
--

CREATE TABLE IF NOT EXISTS `sig_data_category` (
  `kategori` varchar(75) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sig_data_category`
--

INSERT INTO `sig_data_category` (`kategori`, `keterangan`) VALUES
('Adventure / Wisata Alam', 'Adventure / Wisata Alam'),
('Agro Wisata', 'Agro Wisata'),
('Desa Wisata', 'Desa Wisata'),
('Wisata Alam', 'Wisata Alam'),
('Wisata Buatan', 'Wisata Buatan'),
('Wisata Pendidikan', 'Wisata Pendidikan'),
('Wisata Religi', 'Wisata Religi'),
('Wisata Sejarah', 'Wisata Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `sig_data_photo`
--

CREATE TABLE IF NOT EXISTS `sig_data_photo` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `sig_data_photo`
--

INSERT INTO `sig_data_photo` (`id_foto`, `id_album`, `foto`, `keterangan`) VALUES
(87, 29, 'agrowisata-strawberry.jpg', '<p>Agro wisata kebun strawberry</p>\r\n'),
(89, 29, 'kebun-strawberry.jpg', '<p>Agro Wisata kebun Strawberry</p>\r\n'),
(88, 29, 'Wisata-Agro-Kebun-Strawberry.jpg', '<p>Kebun Strawberry</p>\r\n'),
(19, 2, 'buper munjuluhur 2.JPG', '<p>Buper Munjuluhur</p>\r\n'),
(20, 2, 'buper munjuluhur 3.JPG', '<p>Buper Munjuluhur 2</p>\r\n'),
(21, 3, 'patung goa lawa.jpg', '<p>Patung Goa Lawa</p>\r\n'),
(22, 3, 'goa dalam goa lawa.JPG', '<p>Goa Lawa</p>\r\n'),
(23, 3, 'Goa Lawa.jpg', '<p>Goa Lawa</p>\r\n'),
(24, 4, 'gunung-slamet-gerbang-pendakian.jpg', '<p>Pintu masuk Pos Pendakian Gunung Slamet Jalur Timur</p>\r\n'),
(25, 4, 'gunung_slamet-tutup_sementara.jpg', '<p>Pintu masuk Pos Pendakian Gunung Slamet</p>\r\n'),
(26, 4, 'Pendakian Gunung Slamet.jpg', '<p>Jalur Pendakian Gunung Slamet</p>\r\n'),
(84, 5, 'pintu masuk owabong.jpg', '<p>Basecamp Klawing Rafting Adventure</p>\r\n'),
(28, 6, 'masid agung darusalam.jpg', '<p>Masjid Agung Darussalam Purbalingga</p>\r\n'),
(29, 6, 'masjid_agung_darussalam_purbalingga.jpg', 'Masjid Agung Darussalam Purbalingga'),
(30, 6, 'masjid agung purbalingga.jpg', 'Masjid Agung Darussalam Purbalingga'),
(31, 7, 'masjie cheng hoo.jpg', '<p>Masjid Muhammad Cheng Hoo</p>\r\n'),
(32, 7, 'Masjid Muhammad Cheng Hoo Mrebet Purbalingga-00.jpg', 'Masjid Muhammad Cheng Hoo'),
(33, 8, 'MTL Jenderal Soedirman.jpg', '<p>Monumen Tempat Lahir Jenderal Soedirman</p>\r\n'),
(34, 8, 'MTL Jenderal Soedirman 4.JPG', 'Monumen Tempat Lahir Jenderal Soedirman'),
(35, 8, 'MTL Jenderal Soedirman 2.jpg', 'Monumen Tempat Lahir Jenderal Soedirman'),
(36, 8, 'MTL Jenderal Soedirman 3.JPG', 'Rumah Tempat Lahir Jenderal Soedirman'),
(37, 9, 'owabong-purbalingga-ok.jpg', '<p>Owabong</p>\r\n'),
(38, 9, 'pintu masuk.jpg', 'Pintu Masuk Owabong'),
(39, 9, 'owabong 2.JPG', 'Owabong'),
(40, 9, 'owabong.jpg', 'Owabong'),
(41, 10, 'pancuran-ciblon-bobotsari-purbalingga.jpg', '<p>Pancuran Ciblon Bobotsari</p>\r\n'),
(42, 10, 'kolam 1.JPG', 'Pancuran Ciblon Bobotsari'),
(43, 11, 'Tirto_Walik_Purbalingga_1.gif', '<p>Kolam Renang Tirta Asri Walik</p>\r\n'),
(44, 11, 'Tirto_Walik_Purbalingga_3.jpg', 'Kolam Renang Tirta Asri Walik'),
(45, 11, 'kolam 1.JPG', 'Tirta Asri Walik'),
(46, 12, 'perpus-1.jpg', '<p>Perpustakaan dan Museum Budaya Soegarda Poerbakawatja</p>\r\n'),
(47, 12, 'perpus dan museum budaya.jpg', 'Perpustakaan dan Museum Budaya Soegarda Poerbakawatja'),
(48, 13, 'petilsan-ardi-lawet.jpg', '<p>Gerbang masuk Petilasan Ardilawet</p>\r\n'),
(49, 13, 'makam.jpg', 'Makam di Petilasan Ardilawet'),
(50, 14, 'Purbasari Pancuran Mas.jpg', '<p>Purbasari Pancuran Mas</p>\r\n'),
(51, 14, 'Akuarium-Raksasa-Purbasari-.jpg', 'Purbasari Pancuran Mas'),
(52, 15, 'sanggaluri.JPG', '<p>Sanggaluri Education Park</p>\r\n'),
(80, 20, 'Desa Serang Purbalingga.jpg', '<p>Desa Serang Kecamatan Karangreja</p>\r\n'),
(54, 13, 'P_20150113_140708_LL.jpg', '<p>Gerbang masuk Petilasan Syekh Jambu Karang</p>\r\n'),
(55, 16, 'P_20150113_140659_LL.jpg', '<p>Gerbang masuk Petilasan Syekh Jambu Karang</p>\r\n'),
(79, 16, 'desa panusupan.jpg', '<p>Desa Panusupan</p>\r\n'),
(78, 14, 'taman wisata pendidikan purbasari.jpg', '<p>Pinti masuk Purbasari Pancuran Mas</p>\r\n'),
(77, 23, 'STA Pratin 5.jpg', '<p>STA Pratin</p>\r\n'),
(76, 23, 'STA Pratin 2.jpg', '<p>STA Pratin</p>\r\n'),
(75, 23, 'Pintu masuk STA Pratin.jpg', '<p>Pintu masuk STA Pratin</p>\r\n'),
(62, 21, 'banjar.jpg', '<p>Desa Wisata Karangbanjar</p>\r\n'),
(63, 21, 'banjar1.jpg', '<p>Desa Wisata Karangbanjar</p>\r\n'),
(64, 19, 'limbasari.jpg', '<p>Pintu masuk Desa Limbasari</p>\r\n'),
(65, 24, 'images.jpg', '<p>1</p>\r\n'),
(66, 25, 'images.jpg', '<p>11</p>\r\n'),
(67, 27, 'images.jpg', '<p>yeyy</p>\r\n'),
(68, 21, 'karangbanjar.jpg', '<p>Bumi Perkemahan Munjulluhur di Desa Karangbanjar</p>\r\n'),
(69, 18, 'pekiringan.jpg', '<p>Pintu masuk Desa Pekiringan</p>\r\n'),
(70, 19, 'desa_wisata_limbasari.jpg', '<p>Desa Wisata Limbasari</p>\r\n'),
(71, 19, 'Limbasari.jpg', '<p>Limbasari</p>\r\n'),
(72, 18, 'Kali Karang.jpg', '<p>kali karang di desa pekiringan kecamatan karangmoncol</p>\r\n'),
(73, 22, 'taman wisata pendidikan purbasari.jpg', '<p>Taman wisata pendidikan purbasari pancuran mas di Desa Purbayasa</p>\r\n'),
(74, 22, 'kebun buah naga.jpg', '<p>Kebun Buah Naga</p>\r\n'),
(81, 20, 'STA Pratin 3.jpg', '<p>STA Pratin di Desa Serang</p>\r\n'),
(82, 17, 'curug aul tanalum.jpg', '<p>Curug Aul di Desa Tanalum</p>\r\n'),
(83, 17, 'curug kali karang.jpg', '<p>Curug Kali Karang</p>\r\n'),
(86, 22, 'Purbasari Pancuran Mas.jpg', '<p>Purbasari Pancuran Mas di Desa Purbayasa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sig_data_place`
--

CREATE TABLE IF NOT EXISTS `sig_data_place` (
  `id_place` int(10) NOT NULL AUTO_INCREMENT,
  `id_album` int(7) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sub_district` varchar(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL,
  `description` text NOT NULL,
  `facility` text NOT NULL,
  `pengelola` varchar(255) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  PRIMARY KEY (`id_place`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `sig_data_place`
--

INSERT INTO `sig_data_place` (`id_place`, `id_album`, `name`, `address`, `sub_district`, `lat`, `lon`, `description`, `facility`, `pengelola`, `kategori`) VALUES
(1, 13, 'Petilasan Syekh Jambu Karang', '<p>Desa Panusupan, Kecamatan Rembang, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Rembang', -7.250556, 109.490555, '<p style="text-align:justify">Petilasan ini terletak di Desa Panusupan Kecamatan Rembang &plusmn; 30 km sebelah timur laut kota Purbalingga. Untuk mencapai puncak Petilasan dari Panusupan harus memalui jalan setapak yang mendaki &plusmn; 3 km. Petilasan ini merupakan tempat berkhalwat / tadabbur untuk mendekatkan diri kepada Allah seperti Nabi Muhammad S.A.W berkhalwat di gua Hira. Nama Gunung Lawet berasal dari kata Khalwat,yang berarti gunung untuk semedi mendekatkan diri kepada Tuhan Yang Maha Esa. Disini terdapat petilasan Pangeran Wali Syekh Djambu Karang Putra Prabu Brawijaya,Rja Pajajaran yang semasa mudanya bernama Adipati Mendang (Raden Mundingwangi)</p>\r\n', '<p>-</p>\r\n', 'Desa Setempat dan Masyarakat', 'Wisata Religi'),
(31, 29, 'Agro Wisata Kebun Strawberry', '<p>Desa Kutabawa, Kecamatan Karangreja, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Karangreja', -7.238691, 109.287895, '<p style="text-align: justify;">Agro Wisata Kebun Strawberry berada di dataran tinggi di wilayah Desa Serang Kecamatan Karangreja. Agrowisata strawberry menjadi salah satu daya tarik Pariwisata Kabupaten Purbalingga. Disini para Wisatawan dapat mencoba untuk memetik strawberry segar langsung dari kebunnya. Dikelola oleh para petani trampil binaan Pemkab Purbalingga, Agro wisata ini telah berkembang menjadi salah satu lokawisata yang diandalkan.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Tempat parkir luas</p>\r\n', 'Desa Setempat dan Masyarakat', 'Agro Wisata'),
(3, 3, 'Objek Wisata Goa Lawa', '<p>Desa Siwarak, Kecamatan Karangreja, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Karangreja', -7.229271, 109.317909, '<p style="text-align:justify">Goa yang menyimpan legenda islam kuno ini berada di Desa Siwarak, Kec. Karangreja. Goa alam yang terletak di bawah permukaan tanah di lereng gunung Slamet ini memiliki panjang 1300m. Dengan ornamen interior alami berupa batuan goa, aliran air bawah tanah yang mempesona dan aliran hawa sejuk dalam goa, wisatawan akan disuguhi pengalaman yang menarik. Berikut adalah nama-nama beberapa bagian dalam Goa Lawa ; - Batu Semar - Waringin Seto - Goa Istana Lawa - Goa Dada Lawa - Batu keris - Goa Cepet - Goa Ratu ayu Selain Goa alam,Di kompleks ini terdapat pula taman Lokaria sebagai wahana bermain anak-anak.</p>\r\n', '<p><strong>Fasilitas yang ada:</strong></p>\r\n\r\n<p>- Taman Lokaria</p>\r\n\r\n<p>- Parkir Luas</p>\r\n\r\n<p>- Kebun Binatang Mini</p>\r\n\r\n<p>- Mushola</p>\r\n\r\n<p>- Toilet</p>\r\n', 'Dinbudparpora', 'Wisata Alam'),
(4, 6, 'Masjid Agung Darussalam', '<p>Jl.alun-alun I No.58, Purbalingga, Jawa Tengah</p>\r\n', 'Purbalingga', -7.389368, 109.362648, '<p style="text-align:justify">Masjid kebanggaan masyarakat Purbalingga diresmikan oleh Gubernur Jawa Tengah dan dipugar oleh Bupati Purbalingga,Drs.H.Triyono Budi Sasongko, M.Si. Dengan arsitektur yang mengadopsi Masjid Nabawi di Madinah dan berdaya tampung hingga &plusmn; 2500 orang,masjid ini digunakan oleh masyarakat Purbalingga dan sekitarnya untuk sholat berjama&rsquo;ah juga kegiatan lainnya seperti berbagai pengajian,bazaar hingga sebagai tempat pelaksaan akad nikah. Berada di jantung kota Purbalingga, rancangan masjid yang megah ini direfleksikan sisi religius masyarakat Purbalingga.</p>\r\n', '<p><strong>Fasilitas Yang ada:</strong></p>\r\n\r\n<p>- Tempat Parkir Luas</p>\r\n\r\n<p>- Tempat Wudlu</p>\r\n', 'Desa Setempat dan Masyarakat', 'Wisata Religi'),
(5, 9, 'Objek Wisata Air Bojongsari (Owabong)', '<p>Desa Bojongsari, Kecamatan Bojongsari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Bojongsari', -7.348259, 109.348930, '<p style="text-align:justify">OWABONG atau Obyek Wisata Air Bojongsari merupakan salah satu obyek wisata andalan di Kabupaten Purbalingga. Terletak di Desa Bojongsari dengan mengandalkan aneka wahana air untuk berbagai kelompok usia, baik untuk anak maupun dewasa . Beberapa diantaranya wahana tersebut antara lain :</p>\r\n\r\n<p style="text-align:justify">- Kolam Renang Olympic</p>\r\n\r\n<p style="text-align:justify">- Kolam Waterboom</p>\r\n\r\n<p style="text-align:justify">- Kolam Trampolin, Big pillow &amp; Ember Tumpah Besar</p>\r\n\r\n<p style="text-align:justify">- Kolam Arus</p>\r\n\r\n<p style="text-align:justify">- Pantai Bebas Tsunami dll.</p>\r\n\r\n<p style="text-align:justify">Selain Wahana tersebut, terdapat 4D Theatre, Sirkuit ATV, Wisata Dirgantara,Paint ball dll. Disediakan pula Musholla, Food Court, Areal Parkir serta fasilitas lain. Ajak keluarga dan handai taulan anda berlibur di owabong.</p>\r\n', '<p><strong>Fasilitas yang ada : </strong></p>\r\n\r\n<p>- Tempat Parkir Luas</p>\r\n\r\n<p>- Tersedia Kolam Renang Olympic</p>\r\n\r\n<p>- Kolam untuk Anak - Anak</p>\r\n\r\n<p>- Kolam Arus</p>\r\n\r\n<p>- Loker</p>\r\n\r\n<p>- Penginapan</p>\r\n\r\n<p>- ATV atau Motocross Mini</p>\r\n\r\n<p>- Paint Ball</p>\r\n\r\n<p>- Mushola</p>\r\n\r\n<p>- Tribun</p>\r\n', 'Perusahaan Daerah (Perusda)', 'Wisata Buatan'),
(6, 14, 'Taman Wisata Pendidikan Purbasari Pancuran Mas', '<p>Desa Purbayasa, Kecamatan Padamara, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Padamara', -7.376111, 109.312225, '<p style="text-align:justify">Isi liburan anda dengan menikmati suguhan-suguhan menarik dari Taman Wisata Pendidikan Purbasari Pancuran Mas, sebuah obyek wisata yang memiliki begitu banyak daya tarik seperti :</p>\r\n\r\n<p style="text-align:justify">- Taman Aquarium Air Tawar dengan satwa &lsquo;bongsor&rsquo; Legendarisnya, Arapaima gigas serta ratusan spesies ikan lain.</p>\r\n\r\n<p style="text-align:justify">- Kolam Renang, Kolam bermain anak &amp; Water Boom dengan kesegaran air alaminya.</p>\r\n\r\n<p style="text-align:justify">- Bird Park yang menghadirkan puluhan koleksi aneka Burung dari berbagai belahan dunia.</p>\r\n\r\n<p style="text-align:justify">- Serta wahana terbaru yang ada disini yaitu Wisata Air Telaga Fulus dengan kapal, perahu, speed boat &amp; sepeda air.</p>\r\n\r\n<p style="text-align:justify">Hanya dengan menyewa rompi pelampung maka Wisatawan dapat menikmati Wahana Wisata Air ini secara GRATIS. Didukung dengan beragam fasilitas dan sarana yang lengkap dan representatif, obyek wisata yang satu ini layak anda kunjungi bersama keluarga dan karabat terdekat anda.</p>\r\n', '<p>Beberapa fasilitas pendukung yang ada disini yaitu:</p>\r\n\r\n<p>- 2 (dua) buah ruang pertemuan (hall) dengan daya tampung hingga 350 orang. ( FREE Sound System)</p>\r\n\r\n<p>- Mushala</p>\r\n\r\n<p>- Toilet &amp; Kamar Mandi</p>\r\n\r\n<p>- Areal Parkir luas dalam lokasi</p>\r\n\r\n<p>- Kios souvenir &amp; Snack</p>\r\n', 'Perorangan', 'Wisata Pendidikan'),
(7, 15, 'Sanggaluri Park', '<p>Jl. Raya Kutasari,Dukuh Walik&nbsp;Desa Kutasari, Kecamatan Kutasari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Kutasari', -7.356111, 109.330276, '<p style="text-align:justify">Sanggaluri Education Park adalah sebuah obyek wisata yang menawarkan beraneka wahana pendidikan. Diantaranya yaitu : - Reptile &amp; Insect Fun Park - Rumah Boneka LINTANG - Wahana IPTEK - Museum Uang - Museum Wayang dan Artefak - Kebun Aneka Buah Berada di Jl. Raya Kutasari, Lokawisata ini melengkapi diri dengan ratusan Koleksi reptil baik dari dalam negri maupun mancanegara. Terdapat pula ribuan koleksi specimen serangga seperti Kumbang dan beraneka Kupu-kupu. Koleksi Museum Uang di tempat ini terdiri dari berbagai periode jaman mulai dari th 800 M hingga saat ini.</p>\r\n\r\n<p style="text-align:justify">Terdapat juga koleksi perangko dari berbagai belahan dunia, miniatur perahu layar, miniatur prajurit-prajurit keraton dan buku-buku pengetahuan. Dalam Museum wayang dan artefak, anda akan menjumpai beragam jenis wayang yang ada di Indonesia, baik itu Wayang Kulit, Wayang Beber, wayang Golek, Wayang Suket hingga wayang Bali. Selain itu tempat ini menyimpan pula aneka artefak peninggalan jaman purbakala seperti Fosil,Dolmen dan Menhir, Batu Pipisan dll.</p>\r\n', '<p><strong>Fasilitas yang ada adalah : </strong></p>\r\n\r\n<p>- Koleksi berbagai macam reptil</p>\r\n\r\n<p>- Koleksi berbagai macam serangga</p>\r\n\r\n<p>- dll</p>\r\n', 'Dinbudparpora', 'Wisata Pendidikan'),
(9, 8, 'Monumen Tempat Lahir Panglima Besar Soedirman', '<p>Desa Bantarbarang, Kecamatan Rembang, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Rembang', -7.329123, 109.511749, '<p style="text-align:justify">Monumen tempat Lahir (MTL) Jenderal Soedirman berada di Desa Bantarbarang Kecamatan Rembang yang terletak kurang lebih 26 km sebelah timur Kota Purbalingga. Monumen ini berbentuk duplikat rumah tempat dilahirkannya Jenderal Soedirman lengkap dengan pendopo, masjid, perpustakaan dan relief kegiatan perjuangan Panglima Besar Jenderal Soedirman. Beliau adalah Bapak Tentara Nasional Indonesia dalam memmimpin perjuangan kemerdekaan Indonesia melawan Belanda pada pertengahan tahun 1940. Sedangkan di depan monumen saat ini ditempatkan dua buah meriam dan sebuah tank hadiah dari TNI Angkatan Darat dan diresmikan pada tanggal 21 maret 1979 oleh WaPangab saat itu, Jenderal Soerono. Monumen ini dibangun dengan maksud untuk mengenang dan meghargai jasa - jasa beliau terhadap Nusa dan Bangsa.</p>\r\n', '<p><strong>Fasilitas yang ada :</strong></p>\r\n\r\n<p>- Parkir luas</p>\r\n', 'Dinbudparpora', 'Wisata Sejarah'),
(10, 12, 'Kantor Perpustakaan dan Arsip Daerah', '<p>Jl. Dipokusumo, Kota Purbalingga, Jawa Tengah</p>\r\n', 'Purbalingga', -7.387930, 109.364861, '<p style="text-align:justify">Terletak di pusat Kota Purbalingga, Perpustakaan ini menjadi salah satu sumber ilmu pengetahuan ditengah gempuran teknologi digital. Dilengkapi dengan ribuan buku dari berbagai disiplin ilmu sehingga menjadikan tempat ini sebagai rujukan bagi para penggemar buku. Selain perpustakaan, tempat ini juga memiliki museum budaya yang menyimpan berbagai barang - barang peninggalan para Founding Fathers Purbalingga dan benda bersejarah lainnya.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Tersedia ribuan buku dari berbagai disiplin ilmu</p>\r\n\r\n<p>- Terdapat Museum Budaya</p>\r\n', 'Dinbudparpora', 'Wisata Pendidikan'),
(11, 2, 'Bumi Perkemahan Munjuluhur dan Adventure Zone', '<p>Desa Karangbanjar, Kecamatan Bojongsari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Bojongsari', -7.353243, 109.331367, '<p style="text-align:justify">Berada di Desa Karangbanjar Kecamatan Bojongsari, Bumi Perkemahan (Buper) Munjuluhur telah lama menjadi tujuan berkemah bagi masyarakat luas. Memiliki lahan seluas kurang lebih 14 Ha, Buper Munjuluhur dapat menampung pesert kemah kurang lebih 10. 000 orang (kurang lebih 2500 tenda). Sering digunakan untuk kegiatan baik tingkat lokal, Propinsi Jateng bahkan tingkat Nasional (Jambore). Pengguna Terdiri dari Pelajar (OSIS), Mahasiswa, Lembaga Pemerintahan / Swasta, Lembaga Kemasyarakatan, Partai Politik, dll yang berasal dari Propinsi Jawa Tengah, Jawa Barat dan DIY. Dilengkapi dengan Hall (Aula) yang mampu menampung hingga kurang lebih 500 orang, camping ground yang terawat serta beberapa fasilitas Outbound. Pada tahun 2007, Buper ini meraih Juara 1 Buper Terbaik Tingkat Propinsi Jawa Tengah.</p>\r\n', '<p><strong>Fasilitas yang ada:</strong></p>\r\n\r\n<p>- Hall yang luas</p>\r\n\r\n<p>- MCK</p>\r\n', 'Dinbudparpora', 'Wisata Buatan'),
(12, 11, 'Pemandian Tirta Asri Walik', '<p>Dusun Walik, Desa Kutasari ,Kecamatan Kutasari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Kutasari', -7.354117, 109.327217, '<p style="text-align:justify">Pemandian ini merupakan salah satu yang tertua di Kabupaten Purbalingga. Memiliki 1 (satu) buah kolam renang berukuran 20 x 40 meter dan sebuah kolam renang khusus anak, pemandian ini telah menjadi salah satu tempat favorit bagi banyak warga Purbalingga sejak bertahun silam. Terletak di Dusun Walik, Desa Kutasari, pemandian ini diairi dengan mata air alami yang sejuk dan menyegarkan. Tak hanya pemandian, objek wisata ini juga memiliki perbukitan yang disulap menjadi tempat bersantai yang rindang. Dengan taman yang asri dan gazebo - gazebo yang tertata, menjadikan objek wisata ini sebagai tempat yang tepat untuk bersantai. Hanya dengan Rp.6000,- (Harga tiket hari biasa) atau Rp.7500,- (pada hari libur) pengunjung telah dapat menikmati kesegaran air di pemandian dan sejuknya udara perbukitan.</p>\r\n', '<p>Fasilitas :</p>\r\n\r\n<p>- Ruang Ganti</p>\r\n\r\n<p>- Kolam Anak</p>\r\n\r\n<p>- Tempat istirahat yang rindang dan sejuk</p>\r\n\r\n<p>- Dekat dengan Sanggaluri Park serta Bumi Perkemahan Munjuluhur</p>\r\n', 'Perorangan', 'Wisata Buatan'),
(13, 4, 'Jalur Pendakian Gunung Slamet Pos Bambangan', '<p>Dukuh Bambangan Desa Kutabawa, Kecamatan Karangreja, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Karangreja', -7.226111, 109.265831, '<p style="text-align:justify">Tempat ini berada kurang lebih 30 km Barat Laut Kota Purbalingga. Setiap tahun pada Bulan Juni sampai dengan September para pecinta alam datang untuk mendaki gunung. Pendakian dengan berjalan kaki mulai dari Dukuh Gunung Malang Desa Serang dan Dukuh Bambangan Desa Kutabawa. Jarak dari Dukuh Bambangan ke puncak Gunung Slamet dapat ditempuh kurang lebih selama 6 jam perjalanan kaki dan sebagai petunjuk arah adalah warga masyarakat atau Linmas setempat. Dari Purbalingga sampai ke Dukuh Bambangan dapat dicapai dengan kendaraan dan dilengkapi fasilitas Pondok Pemuda untuk menampung para pendaki yang akan / telah mendaki ke Puncak Gunung Slamet.</p>\r\n', '<p><strong>Fasilitas yang ada:</strong></p>\r\n\r\n<p>- Pondok Pemuda sebagai tempat istirahat</p>\r\n', 'Desa Setempat dan Masyarakat', 'Adventure / Wisata Alam'),
(16, 7, 'Masjid Muhammad Cheng Hoo', '<p>Desa Selaganggeng ,Kecamatan Mrebet, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Mrebet', -7.317596, 109.361961, '<p style="text-align:justify">Berdirinya Masjid Jami Cheng Hoo ini merupakan prakarsa dari PITI (Persatuan Islam Tionghoa Indonesia). Masjid ini merupakan akulturasi arsitektur bergaya China/Tiongkok dan Jawa. Bentuknya mirip kelenteng dan tidak ada kubah bulat dibagian atapnya seperti masjid kebanyakan. Masjid Jami Muhammad Cheng Hoo ini mulai dibangun pada tahun 2005. Setelah sempat terhenti pada tahun 2006, pembangunan dilanjutkan pada tahun 2010 dan diresmikan pada tanggal 5 Juli 2011. Masjid Jami PITI Muhammad Cheng Hoo menjadi suatu bukti terdapat keberagaman agama, suku maupun ras dalam kehidupan bermasyarakat di Purbalingga. Hal ini menjadi suatu kekuatan yang luar biasa. Pada Muslim Tionghoa memanfaatkan masjid ini sebagai sarana tempat berkumpul mereka untuk menyiarkan dakwah dan pendidikan islam.</p>\r\n', '<p><strong>Fasilitas yang ada :</strong></p>\r\n\r\n<p>- Tempat Wudhu</p>\r\n\r\n<p>- Parkir</p>\r\n', 'Desa Setempat dan Masyarakat', 'Wisata Religi'),
(17, 10, 'Pancuran Ciblon Bobotsari', '<p>Jl. Pasukan Pelajar Imam (Jl. PP Imam) Bobotsari, Kecamatan Bobotsari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Bobotsari', -7.306518, 109.365181, '<p style="text-align:justify">Di Kota Bobotsari Kabupaten Purbalingga kini telah memiliki objek wisata kolam renang yang diberi nama &quot;Pancuran Ciblon&quot;. Objek wisata ini tepatnya berada di sebelah barat Terminal Bobotsari, kurang lebih sekitar 200 meter. Tempatnya sangat strategis karena berada di jalur angkutan umum Purbalingga - Pemalang. Pancuran Ciblon ini menurut berbagai sumber merupakan kolam renang yang telah lama tidak terpakai. Kemudian pada tahun 2010, kolam renang ini dibenahi kembali dan saat ini hasil pembangunannya sudah dapat dinikmati wisatawan. Pancuran Ciblon juga dilengkapi dengan fasilitas tempat istirahat (panggok) dan juga taman bermain serta fasilitas lainnya seperti kamar mandi dan wc. Udara disekitarnya juga sejuk. Air kolam renang Pancuran Ciblon sangat jernih dan dingin karena berasal dari sumber mata air.</p>\r\n\r\n<p style="text-align:justify">Dengah hadirnya kolam renang Pancuran Ciblon ini, diharapkan masyarakat sekitar dan juga daerah lain dapat memanfaatkannya sebagai sarana rekreasi uang menyenangkan bersama keluarga. Disamping itu, keberadaan Pancuran Ciblon ini akan sangat bermanfaat dan membantu anak - anak sekolah baik TK, SD, SMP, SMA dan SMK dalam belajar berenang.</p>\r\n', '<p><strong>Fasilitas yang ada :</strong></p>\r\n\r\n<p>- Tempat istirahat (panggok)</p>\r\n\r\n<p>- Kamar mandi</p>\r\n\r\n<p>- Ruang Ganti</p>\r\n\r\n<p>- Lokasi strategis</p>\r\n', 'Perorangan', 'Wisata Buatan'),
(18, 5, 'Klawing River Rafting', '<p>Desa Bojongsari, Kecamatan Bojongsari, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Bojongsari', -7.348259, 109.348930, '<p style="text-align:justify">Tak kalah dengan sungai - sungai besar lain di Jawa Tengah, Sungai Klawing yeng membelah wilayah Purbalingga sangat menantang untuk kegiatan arung jeram (rafting) dan riverboarding. Paket wisata arung jeram yang dikemas dalam &quot;Owabong Klawing Rafting Adventure&quot; dikelola oleh manajemen Owabong. Untuk kegiatan riverboarding, Sungai Klawing dinilai sangat layak oleh Asosiasi Riverboarding Indonesia yang bermarkas di Bandung. Sejumlah penggiat riverboarding telah melakukan uji coba dan menyatakan sangat layak.</p>\r\n\r\n<p style="text-align:justify">Sebelum melakukan rafting, wisatawan mendapat pembekalan ringan di sekitar Owabong Cottage. Wisatawan kemudian menuju Sungai Klawing di bagian hulu tepatnya di Banjarsari, Kecamatan Bobotsari, sekitar 4 km dari Owabong. Sebelum terjun ke sungai, wisatawan mempersiapkan diri di basecamp yang berada di tepi sungai. Keindahan alam persawahan dan udara yang sejuk semakin membangkitkan wisatawan untuk menikmati suasananya. Trip arung jeram kurang lebih menempuh jarak perjalanan 7 kilometer dengan jeram - jeram dengan tingkat kesulitan (difficulty grade) 2 hingga 3. Grade ini relatif kecil jadi aman untuk wisata arung jeram keluarga karena arusnya yang menantang tapi tetap bersahabat. Kendati menyuguhkan ketegangan yang meluapkan adrenalin, paket wisata arung jeram ini memiliki kelebihan yang khas, diantaranya adalah alam yang eksotik dengan latar belakang Gunung Slamet. Terdapat beberapa canyon (tebing tepi sungai), batuan andesit di tepian sungai dan yang paling penting air sungai yang bening, tanpa pencemaran.</p>\r\n\r\n<p style="text-align:justify">Setelah menikmati perjalanan sungai yang mengesankan, di lokasi finish di desa Onje Kecamatan Mrebet wisatawan akan disuguhi kelapa muda yang baru dipetik dari pohon atau bisa juga memesan minuman hangat seperti teh atau kopi. Sajian yang tak kalah unik yakni cimplung ketela, talas dan mendoan hangat. Usai beristirahat, wisatawan kemudian kembali ke Owabong.</p>\r\n', '<p><strong>Fasilitas yang ada:</strong></p>\r\n\r\n<p>- Peralatan keamanan untuk rafting</p>\r\n\r\n<p>- Perahu</p>\r\n\r\n<p>- Transportasi dari Owabong ke tempat rafting</p>\r\n', 'Perusahaan Daerah (Perusda)', 'Adventure / Wisata Alam'),
(19, 16, 'Desa Wisata Panusupan', '<p>Desa panusupan Kecamatan Rembang Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Rembang', -7.251610, 109.490402, '<p style="text-align:justify">Desa Panusupan yang terletak di Kecamatan Rembang, Kabupaten Purbalingga ini terletak di dataran tinggi sehingga hawa di desa ini selalu sejuk walau disiang hari sekalipun. Di Desa Panusupan ini terdapat beberapa objek wisata yang dapat dikunjungi, diantaranya adalah Petilasan Syekh Jambu Karang, Curug Pesantren dan objek wisata lainnya. Curug atau air terjun di desa ini terdapat lebih dari satu sehingga para wisatawan dapat memilih curug atau air terjun mana yang ingin dikunjungi.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Terdapat Objek Wisata&nbsp;Petilasan Syekh Jambu Karang</p>\r\n\r\n<p>- Banyak terdapat curug atau air terjun yang dapat dikunjungi</p>\r\n\r\n<p>- udara yang segar dan sejuk</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(20, 17, 'Desa Wisata Tanalum', '<p>Desa Tanalum Kecamatan Rembang Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Rembang', -7.289444, 109.534164, '<p style="text-align:justify">Desa Tanalum merupakan desa yang terletak di dataran tinggi yang masuk dalam wilayah Kecamatan Rembang. Desa Tanalum juga merupakan desa penghasil cengkih di Kabupaten Purbalingga. Karena terletak di daerah dataran tinggi&nbsp;desa ini terdapat curug&nbsp;atau air terjun. Disana terdapat&nbsp;sedikitnya enam curug. Curug tersebut adalah&nbsp;Curug Kali Karang, Curug Aul, Curug Karang, Curug Sendang, Curug Gogot, Curug Panyatan, Curug Nagasari dan Curug Lempeng. Hawa di Desa Panalum sejuk walaupun disiang hari sehingga membuat betah wisatawan yang berkunjung.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Terdapat banyak objek wisata</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(21, 18, 'Desa Wisata Pekiringan', '<p style="text-align:justify">Desa Pekiringan Kecamatan Karangmoncol Kabupaten Purbalingga, Jawa Tengah.&nbsp;</p>\r\n', 'Karangmoncol', -7.317508, 109.473511, '<p style="text-align:justify">Desa Pekiringan terletak bersebelahan selatan Desa Tajug di Kecamatan Karangmoncol .&nbsp;Di desa ini terdapat Makam Wali Perkasa. Konon Makam Wali Perkasa merupakan makam peninggalan wali yang merupakan tempat peristirahatan terakhir seorang penyebar agama islam yang berada di Desa Pekiringan.Wali Perkasa mempunyai nama lain yaitu Makdum Perkasa,yang merupakan nama pemberian dari Sunan Kali jaga, karena beliau yang mampu merubah arah kiblat masjid Demak yang konon dalam pembangunan masjid tersebut kurang sempurna arah kiblatnya. Tentunya proses perubahan arah kiblat tersebut dengan cara meminta kepada Allah SWT agar diberi kekuatan yang bisa merubah arah kiblat tersebut. Awalnya yang berdoa adalah Sunan Kali Jaga dan murid-muridnya yang mengamini,tetapi tetap saja tidak mampu merubah arah kiblat. Selanjutnya seorang murid minta diberi kesempatan memimpin doa,dan Sunan Kali Jaga yang mengamini bersama murid murid lainnya. Atas izin Allah arah Kiblat masjid Demak bergeser pada posisi yang sempurna.Sejak saat itulah beliau mendapat julukan nama PERKASA. Di Makam Wali Perkasa juga telah di sediakan pemandu demi kelancaran para peziarah.&nbsp;</p>\r\n', '<p>-</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(22, 20, 'Desa Wisata Serang', '<p>Desa&nbsp;Serang,&nbsp;Kecamatan Karangreja Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Karangreja', -7.228808, 109.286507, '<p style="text-align:justify">Lokasi Desa Wisata Serang yang ada di Kecamatan Karangreja dan berada di lereng Gunung Slamet ini menjadikan desa yang berhawa dingin dan sejuk ini mempunyai banyak sekali keistimewaan. Wisatawan akan dengan mudah mendapatkan sayur mayur dan buah Strawbery yang murah.juga Hom Stay yang sudah banyak didesa ini memudahkan wisatawan yang ingin merasakan dinginya hawa pegunungan di malam hari.Selain itu di desa ini juga ada wahana Out Bound yang dikelola oleh para pemuda yang tergabung dalam SAD (Serang Adventure) dimana Wahana Outbound ini menyuguhkan berbagai permainan menarik dan menantang Adrenalin Anda.</p>\r\n', '<p>Fasilitas yang ada :<br />\r\n- Sentra sayur mayur segar</p>\r\n\r\n<p>- Agrowisata kebun Strawberry</p>\r\n\r\n<p>- Home Stay</p>\r\n\r\n<p>- Outbond</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(23, 21, 'Desa Wisata Karangbanjar', '<p>Desa Karangbanjar Kecamatan Bojongsari Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Bojongsari', -7.354544, 109.338837, '<p style="text-align:justify">Desa wisata Karangbanjar terletak di kabupaten Purbalingga, propinsi Jawa Tengah. Desa Wisata Karangbanjar berada sekitar 2 km dari ibukota kecamatan Bojongsari atau sekitar 5 km dari arah sebelah utara ibukota kabupaten Purbalingga. Di sebelah utara, berbatasan dengan desa Sumingkir dan Beji, di sebelah selatan, dengan desa Munjul, di sebelah timur dengan desa Bojongsori dan Kajongan, serta di sebelah barat dengan desa Kutasari.</p>\r\n\r\n<p style="text-align:justify">Desa Karangbanjar memiliki luas 148,35 hektar yang terdiri atas wilayah persawahan seluas 110,16 hektar, areal pekarangan seluas 271,35 hektar, dan lainnya seluas 10,85 hektar. Jumlah penduduk desa Karangbanjar adalah 3731 jiwa (per tahun 2006). &nbsp;Dengan penduduk yang sebagian besarnya bermata pencaharian sebagai petani, menunjukkan bahwa desa Karangbanjar layak sebagai desa wisata yang kental dengan kultur masyarakat jawa.</p>\r\n\r\n<p style="text-align:justify">Desa wisata Karangbanjar ini menonjolkan kerajinan yang beranekaragam yang bisa membuat para pelancong wisata alam gemar untuk menjadikan cinderamata yang sangat berharga. Karena kerajinan dari desa ini rata-rata dibuat dengan tangan (handmade).</p>\r\n\r\n<p style="text-align:justify">Pelancong yang datang ke Desa ini dapat menikmati aneka hiburan yang tersedia secara alam maupun dibuat oleh masyarakat setempat untuk memanjakan wisatawan yang datang ke desa. Beberapa hiburan yang tersedia semisal kolam pemancingan, yang tersedia ikan yang dapat dimasak langsung dan disediakan gazebo sebagai tempat santai keluarga atau pelancong yang memamcing disana.</p>\r\n\r\n<p style="text-align:justify">Ada juga berbagai kebun sayur dan buah-buahan beraneka macam. Dengan landscape yang indah karena ada gunung Slamet nan eksotis dan menawan. Pelancong dapat menikmati pemandangan dan berfoto ria dengan keluarga. Apabila tertarik untuk memetik sekaligus membeli aneka sayur dan buah disawah bisa langsung membeli di tempat.</p>\r\n\r\n<p style="text-align:justify">Dengan pemandangan yang indah, Desa Karangbanjar juga menyediakan camping land yang bersih dan nyaman. Dengan pemandangan yang sangat indah serta menyejukan setiap mata yang memandang. Dikelilingi oleh sungai-sungai kecil yang memiliki sumber mata air di sekitarnya, menambah elok camping land. Untuk berbagai pertemuan di camping land disediakan sebuah gedung pertemuan yang terletak di puncak bukit sekitar camping land.</p>\r\n\r\n<p style="text-align:justify">Sebagai tambahan wisata desa, Karangbanjar juga memberikan sebuah fenomena yang menarik yaitu peternakan sapi yang dilakukan secara modern. Pelancong dapat langsung melihat proses pemeliharaan sapi dengan teknik terpadu. Tentunya ini akan menambah wawasan para pelancong tentang memelihara sapi.</p>\r\n\r\n<p style="text-align:justify">Pelancong juga bisa menikmati langsung pembuatan kerajinan yang merupakan andalan masyarakat Karangbanjar seperti pembuatan rambut palsu, aneka macam sapu seperti sapu dari bunga glagah, sapu lidi, sapu ijuk, sapu hamada dan kemoceng. Juga kerajinan dari tempurung kelapa seperti gayung, centong, sapu, sendok, asabak dan hiasan lainnya.</p>\r\n\r\n<p style="text-align:justify">Aneka kerajinan yang berasal dari kayu seperti pembubutan kayu, kerajinan rotan, cinderamata perkawinan, dan pembuatan cat tembok. Bermacam-macam olahan pangan seperti jenang, wajik, roti satu koyah, rengginang, buntul caran manggang, kripik ikan, badeg (legen), keripik ketela/pisang, onde-onde, cenil dan gurame bakar khas Karangbanjar. Kesemuanya dibuat untuk memanjakan pelancong disana dan juga untuk menemani pulang penacong sebagai oleh-oleh. Ingin memiliki salah satu, pelancong bisa juga membeli disana.</p>\r\n\r\n<p style="text-align:justify">Belum sepenuhnya puas dengan Desa Wisata Karangbanjar, pelancong dapat berpergian di sekitar desa yang letaknya tidak sangat jauh. Beberapa tempat yang layak dikunjungi adalah Owabong, Museum Uang dan Taman buah. Owabong merupakan obyek wisata air yang mirip seperti Waterboom. Selain dapat bermain air sepuasnya, pelancong juga disuguhkan dengan berbagai satwa yang menarik untuk dilihat. Selain itu terdapat akuarium ikan yang lokasinya terletak di desa Purbayasa, kecamatan Padamara, kabupaten Purbalingga.</p>\r\n\r\n<p style="text-align:justify">Tak lengkap rasanya pergi ke Desa Wisata tanpa mengenal budaya dan kesenia yang menjadi ciri khas masyarakat disekitarnya. Dan, Desa Karangbanjar ini menyediakan petualangan budaya seperti upacara penyambutan pelancong yang datang kesana. Juga dalam waktu tertentu pelancong bisa menikmati aneka budaya yang mamu memukau hati dan mata yang memandannya seperti kesenian&nbsp;Calung Banyumasan ( Calung : memukul bambu wulung, dipukul dengan berulang-ulang) yaitu seperangkat musik&nbsp;khas Banyumasan yang dibuat dari bambu wulung (bambu coklat) yang mirip dengan alat musik gamelan Jawa Timur.</p>\r\n\r\n<p style="text-align:justify">Calung Banyumasan memiliki alunan musik seperti gambang barung, gambang penerus, dhendhem, kenong, gong dan kendang. Ritme musik Calung Banyumasan dilagukan secara dinamis namun cepat, dengan diiringi lagu yang penyanyinya disebut dengan Pesinden. Tarian Calung Banyumasan namanya Jalungmas (Jaipong Calung Banyumasan).</p>\r\n\r\n<p style="text-align:justify">Selain Calung ada juga kesenian Kuda Lumping (Ebeg/Lenggeran) yaitu sebuah tarian dengan penarinya menaiki kuda mainan yang terbuat dari anyaman bambu disertai dengan alunan musik gamelan (gamelan bendhe) yang menyatu. &nbsp;Dalam penyajian biasanya memiliki cerita yang saling berkaitan seperti&nbsp;babak lenggeran (perkenalan), babak badhutan (permasalahan awal dengan tokoh protagonis), babak jaran calung (permasalahan ) terus terakhir babak baladewan (penyelesaian/keputusan).</p>\r\n\r\n<p style="text-align:justify">Desa wisata Karangbanjar juga memiliki kesenian tradisional yang dalam bahasa jawa disebut Kothekan Lesung (gejog), dimana para ibu memukul lesung (penumbuk padi) dengan irama yang sangat indah dan membahana di sekitarnnya.&nbsp;Kothekan Lesung ini dilakukan sebagai ungkapan syukur kepada Alloh swt karena hasil pertanian yang melimpah dan tidak banyak musibah yang melanda Desa.</p>\r\n\r\n<p style="text-align:justify">Desa Wisata Karangbanjar juga memiliki kesenian yang disebut dengan Genjring/Samproh. Merupakan sebuah kesenian bernuansa islam yang dilakukan dengan alat musik terbangan dipadu dengan lagu yang bernuasa kental dengan islam. Kesenian ini bisanya dilakukan apabila ada hajatan seperti sunatan.</p>\r\n\r\n<p style="text-align:justify">Berbagai kesenian yang terdapat di Desa Karangbanjar masih banyak, seperti berbagai tari-tarian Jawa dan Sanggar Tari tradisional, Wayang Kulit Banyumasan, Rebana (genjring), Padepokan Seni tradisional, serta Karawitan.</p>\r\n\r\n<p style="text-align:justify">Sebagai sarana akomodasi dan transportasi, pelancong tidak usah panik. Desa ini&nbsp;menyediakan pelayanan terhadap para pengunjung yang ingin menginap di desa wisata Karangbanjar, masyarakat telah menyiapkan kediamannya untuk dijadikan kamar pondokan (home stay). Kamar-kamar pondokan ini telah memenuhi syarat dan layak huni serta sehat. Masalah tarif tidak masalah, karena harga pondokan terbilang cukup murah.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Dekat dengan Objek Wisata Air Bojongsari (Owabong)</p>\r\n\r\n<p>- Dekat dengan Bumu Perkemahan Munjuluhur dan Adventure Zone</p>\r\n\r\n<p>- Dekat dengan Sanggaluri Park dan Taman Reptil</p>\r\n\r\n<p>- Terdapat banyak kolam pemancingan</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(24, 22, 'Desa Wisata Purbayasa', '<p>Desa Purbayasa Kecamatan Padamara Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Padamara', -7.375034, 109.310646, '<p style="text-align:justify">Desa Purbayasa memiliki satu objek wisata air yaitu Purbasari Pancuran Mas. Memiliki&nbsp;akuarium&nbsp;air tawar dengan koleksi utamanya Ikan Raksasa dari Amazon yaitu&nbsp;Arapaima&nbsp;Gigas. Koleksi tersebut kini telah berukuran Panjang 2 meter, Berat 150 Kg. Disamping akuarium juga terdapat&nbsp;kolam renang&nbsp;dan&nbsp;waterboom. Mulai tahun 2007 juga telah dibuka taman&nbsp;unggas.</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Dekat dengan Objek Wisata&nbsp;Purbasari Pancuran Mas</p>\r\n\r\n<p>- Hawa Sejuk</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata'),
(25, 23, 'Sub Terminal Agribisnis (STA) Pratin', '<p>Desa Pratin Kecamatan Karangngreja, Kabupaten Purbalingga, Jawa Tengah</p>\r\n', 'Karangreja', -7.218815, 109.292992, '<p style="text-align:justify">Pasar sayur Sub Terminal Agribisnis (STA) Kutabawa, Kecamatan Karangreja, Purbalingga (Jateng), menjadi pasar asal pasokan kentang dan cabe ke berbagai indusstri terkemuka seperti Indofood. Selain itu, pasar yang berada di perbatasan Purbalingga &ndash; Pemalang ini juga memasok kebutuhan sayuran ke Jawa Barat, jakarta, Kuningan, Kota Banjar, Cirebon, Wonosobo, Purwokerto dan Purbalingga.</p>\r\n\r\n<p style="text-align:justify"><br />\r\n&ldquo;Pasar sayur Kutabawa semula merupakan pasar desa dengan luas 3.482 meter persegi. Namun, seiring dengan banyaknya pasokan sayur dan bertambahnya jumlah pedagang, Pemkab Purbalingga memperluas areal pasar hingga menjadi 8.000 meter persegi. Dari luas ini, hampir 80 persen lahan sudah digunakan untuk bangunan kios, los, gudang dan tempat parkir,</p>\r\n\r\n<p style="text-align:justify"><br />\r\nBangunan yang diresmikan merupakan pekerjaan proyek tahun 2009 senilai Rp 1 milyar. Dari dana ini dipergunakan untuk membangun fisik kios dan los yang terinci 22 unit kios ukuran 4 x 3 meter, los sebanyak 2 unit ukuran 8 x 24 meter, dan toilet sebanyak 2 unit ukuran 2 x 3 meter.<br />\r\nkeberadaan pasar STA Kutabawa telah menjadi gantungan hidup ratusan pedagang dan petani. Jumlah pedagang los tercatat 60 orang, pedagang kios 26 orang yang menempati 30 kios. Kemudian kantor koperasi menempati 2 unit kios, dan total kios yang ada 40 buah kios.<br />\r\n<br />\r\n&ldquo;Petani pemasok sayuran ke STA Kutabawa berasal dari daerah Karangreja sebanyak 80 petani pengepul, dari kecamatan Bobotsari 32 petani, dan dari Kabupaten pemalang sebanyak 25 petani. Untuk komoditas yang dijual seperti berbagai macam sayuran seperti kol, cesim, luncang, bawang daun, buncis, petsay, seledri, sawi, kentang, cabe, tomat, wortel, dan komoditas hortikultura lainnya</p>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Parkir Luas</p>\r\n\r\n<p>- Dapat membeli sayur dan buah - buahan segar secara langsung</p>\r\n\r\n<p>- Tempat mudah ditemukan</p>\r\n', 'Desa Setempat dan Masyarakat', 'Agro Wisata'),
(26, 19, 'Desa Wisata Limbasari', '<p>Desa Limbasari Kecamatan Bobotsari, Kabupaten Purbaligga, Jawa Tengah</p>\r\n', 'Bobotsari', -7.268225, 109.378197, '<div>Desa Limbasari adalah salah satu wilayah kecamatan bobotsari kabupaten Purbalingga Propinsi jawa tengah,yang keberadaannya dideretan pegunungan beser,(tepatnya di kaki gunung plana),atau sebelah utara ibu kota kabupaten Purbalingga dengan jarak kurang lebih 15 Km.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>Dengan keberadaan desa yang berada di daerah pegunungn sehingga desa limbasari memiliki panorama yang sangat indah..desa ini juga memiliki tempat legenda Putri Ayu Limbasari yang namanya tersohor sampai sekarang dan memiliki budaya maupun kesenian tradisional yang beraneka ragam.sedangkan objek wisata alam yang ada di desa limbasari yaitu Pertapaan tunggul wulungyang berada di puncak gunung tukung dan patra wisa yang terletak diantara kaki gunung tukung dan gunung plana</div>\r\n', '<p>Fasilitas yang ada :</p>\r\n\r\n<p>- Terdapat banyak objek wisata</p>\r\n\r\n<p>- Terdapat homestay</p>\r\n\r\n<p>- Terdapat Paket Tisata Tubing</p>\r\n', 'Desa Setempat dan Masyarakat', 'Desa Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `sig_guestbook`
--

CREATE TABLE IF NOT EXISTS `sig_guestbook` (
  `id_guestbook` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_guestbook`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sig_guestbook`
--

INSERT INTO `sig_guestbook` (`id_guestbook`, `nama_lengkap`, `jenis_kelamin`, `email`, `pesan`, `waktu`) VALUES
(1, 'Tamu 1', 'Laki - Laki', 'tamu1@gmail.com', 'pesan guestbook 1', '2014-12-10 11:54:58'),
(2, 'Tamu 2', 'Laki - Laki', 'tamu2@yahoo.com', 'pesan guestbook 2', '2014-12-10 11:55:23'),
(3, 'Tamu 3', 'Laki - Laki', 'tamu3@rocketmail.com', 'pesan guestbook 3', '2014-12-10 11:55:54'),
(4, 'Tamu 4', 'Laki - Laki', 'tamu4@plasa.com', 'pesan guestbook 4', '2014-12-10 11:56:24'),
(5, 'Tamu 5', 'Perempuan', 'tamu5@hackermail.com', 'pesan guestbook 5', '2014-12-10 11:56:56'),
(6, 'Tamu 6', 'Laki - Laki', 'tamu6@aol.com', 'pesan guestbook 6', '2014-12-10 11:57:44'),
(18, 'tamu 7', 'Laki - Laki', 'tamu7@google.com', 'pesan guestbook ke 7', '2015-06-30 01:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `sig_hotel`
--

CREATE TABLE IF NOT EXISTS `sig_hotel` (
  `id_place` int(11) NOT NULL,
  `tourism_attr` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `status` enum('Approve','Pending','','') NOT NULL DEFAULT 'Pending',
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sig_hotel`
--

INSERT INTO `sig_hotel` (`id_place`, `tourism_attr`, `name`, `address`, `telp`, `status`) VALUES
(5, 'Objek Wisata Air Bojongsari (Owabong)', 'Hotel Owabong Cottage ', 'Bojongsari, Purbalingga', '0281-6597010', 'Approve'),
(22, 'Desa Wisata Serang', 'Hotel Pondok Cemara ', 'Desa Wisata Serang, Karangreja, Purbalingga', '0281-7657568', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sig_manager`
--

CREATE TABLE IF NOT EXISTS `sig_manager` (
  `id_pengelola` int(3) NOT NULL AUTO_INCREMENT,
  `Pengelola` varchar(255) NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`id_pengelola`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sig_manager`
--

INSERT INTO `sig_manager` (`id_pengelola`, `Pengelola`, `Keterangan`) VALUES
(1, 'Desa Setempat dan Masyarakat', 'Dikelola Desa Setempat dan Masyarakat'),
(2, 'Perorangan', 'Dikelola Perorangan'),
(3, 'Perusahaan Daerah (Perusda)', 'Dikelola Perusahaan Daerah (Perusda)'),
(4, 'Dinbudparpora', 'Dikelola Dinbudparpora');

-- --------------------------------------------------------

--
-- Table structure for table `sig_polling`
--

CREATE TABLE IF NOT EXISTS `sig_polling` (
  `id_polling` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`id_polling`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sig_polling`
--

INSERT INTO `sig_polling` (`id_polling`, `name`, `mark`) VALUES
(1, 'Bumi Perkemahan Munjuluhur dan Adventure Zone', 2),
(2, 'Desa Wisata Karangbanjar', 0),
(3, 'Desa Wisata Limbasari', 0),
(4, 'Desa Wisata Panusupan', 0),
(5, 'Desa Wisata Pekiringan', 0),
(6, 'Desa Wisata Purbayasa', 0),
(7, 'Desa Wisata Serang', 0),
(8, 'Desa Wisata Tanalum', 0),
(9, 'Jalur Pendakian Gunung Slamet Pos Bambangan', 0),
(10, 'Kantor Perpustakaan dan Arsip Daerah', 0),
(11, 'Klawing River Rafting', 0),
(12, 'Masjid Agung Darussalam', 0),
(13, 'Masjid Muhammad Cheng Hoo', 1),
(14, 'Monumen Tempat Lahir Panglima Besar Soedirman', 1),
(15, 'Objek Wisata Air Bojongsari (Owabong)', 4),
(16, 'Objek Wisata Goa Lawa', 0),
(17, 'Pancuran Ciblon Bobotsari', 0),
(18, 'Pemandian Tirta Asri Walik', 0),
(19, 'Petilasan Syekh Jambu Karang', 0),
(20, 'Sanggaluri Park', 0),
(21, 'Sub Terminal Agribisnis (STA) Pratin', 0),
(22, 'Taman Wisata Pendidikan Purbasari Pancuran Mas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sig_sub_district`
--

CREATE TABLE IF NOT EXISTS `sig_sub_district` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sig_sub_district`
--

INSERT INTO `sig_sub_district` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Bobotsari'),
(2, 'Bojongsari'),
(3, 'Bukateja'),
(4, 'kaligondang'),
(5, 'Kalimanah'),
(6, 'Karanganyar'),
(7, 'Karangjambu'),
(8, 'Karangmoncol'),
(9, 'Karangreja'),
(10, 'Kejobong'),
(11, 'Kemangkon'),
(12, 'Kertanegara'),
(13, 'Kutasari'),
(14, 'Mrebet'),
(15, 'Padamara'),
(16, 'Pengadegan'),
(17, 'Purbalingga'),
(18, 'Rembang');

-- --------------------------------------------------------

--
-- Table structure for table `sig_visitor`
--

CREATE TABLE IF NOT EXISTS `sig_visitor` (
  `ip` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sig_visitor`
--

INSERT INTO `sig_visitor` (`ip`, `date`, `hits`, `online`) VALUES
('120.174.78.20', '2015-02-26', 1, '1424963903'),
('202.67.40.50', '2015-02-26', 1, '1424963525'),
('203.30.237.146', '2015-02-16', 1, '1424095667'),
('203.30.237.150', '2015-02-16', 1, '1424094073'),
('103.19.183.67', '2015-02-16', 1, '1424087390'),
('103.19.180.9', '2015-02-16', 1, '1424068016'),
('::1', '2015-02-28', 1, '1425114488'),
('::1', '2015-03-05', 1, '1425520234'),
('::1', '2015-04-06', 1, '1428299966'),
('::1', '2015-04-28', 1, '1430191760'),
('::1', '2015-04-29', 1, '1430314456'),
('::1', '2015-05-01', 1, '1430491378'),
('::1', '2015-05-02', 1, '1430547399'),
('::1', '2015-05-03', 1, '1430637668'),
('::1', '2015-05-08', 1, '1431098894'),
('::1', '2015-05-11', 1, '1431363485'),
('::1', '2015-05-17', 1, '1431873373'),
('::1', '2015-05-19', 1, '1432032420'),
('::1', '2015-05-24', 1, '1432434272'),
('::1', '2015-05-25', 1, '1432513605'),
('::1', '2015-05-27', 1, '1432694324'),
('::1', '2015-05-28', 1, '1432790308'),
('::1', '2015-06-17', 1, '1434566474'),
('::1', '2015-06-18', 1, '1434635887'),
('::1', '2015-06-29', 1, '1435610740'),
('::1', '2015-06-30', 1, '1435616248'),
('::1', '2015-07-01', 1, '1435710894'),
('::1', '2015-07-03', 1, '1435905956'),
('::1', '2015-07-05', 1, '1436131593'),
('::1', '2015-07-07', 1, '1436221518'),
('::1', '2015-07-09', 1, '1436414256'),
('::1', '2015-07-14', 1, '1436827025'),
('::1', '2015-07-15', 1, '1436912484'),
('::1', '2015-08-04', 1, '1438697523'),
('::1', '2015-08-10', 1, '1439190052');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
