-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Okt 2016 pada 04.56
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_regub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator_m`
--

CREATE TABLE IF NOT EXISTS `administrator_m` (
  `id_user` int(11) unsigned NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `id_asosiasi` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator_m`
--

INSERT INTO `administrator_m` (`id_user`, `admin_name`, `id_asosiasi`, `jenis_kelamin`, `jabatan`, `no_telp`, `photo`, `mdb`, `mdd`) VALUES
(1, 'Super Admin', 100, 'L', 'Admin Utama', '089766565639', '1_9045580LOGO_DMSI.jpg', 1, '2016-09-06 06:10:30'),
(3, 'Dewi', 100, 'P', 'Sekretaris', '0987654', NULL, 1, '2016-09-28 00:24:08'),
(4, 'Niken Larasati', 100, 'P', 'Sekretaris', '0987654765421', NULL, 1, '2016-09-18 19:38:07'),
(5, 'Saepul', 8, 'L', 'Admin Anggota', '0987654765421', NULL, 1, '2016-09-18 20:54:13'),
(6, 'roy', 6, 'L', '-', '-', NULL, 1, '2016-09-22 04:44:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_m`
--

CREATE TABLE IF NOT EXISTS `agenda_m` (
`id_agenda` int(10) unsigned NOT NULL,
  `id_asosiasi` int(11) NOT NULL,
  `judul_agenda` varchar(200) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `lokasi` varchar(150) DEFAULT NULL,
  `keterangan` text,
  `image_agenda` varchar(200) DEFAULT NULL,
  `file_agenda` varchar(200) DEFAULT NULL,
  `judul_english` varchar(255) NOT NULL,
  `keterangan_english` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `agenda_m`
--

INSERT INTO `agenda_m` (`id_agenda`, `id_asosiasi`, `judul_agenda`, `tanggal_mulai`, `tanggal_selesai`, `lokasi`, `keterangan`, `image_agenda`, `file_agenda`, `judul_english`, `keterangan_english`) VALUES
(3, 100, 'agenda dmsi', '2016-09-01', '2016-09-02', 'Bogor', 'Ayo Datang', '3_unduhan.jpg', NULL, 'tes', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album_m`
--

CREATE TABLE IF NOT EXISTS `album_m` (
`id_album` int(11) NOT NULL,
  `nama_album` varchar(200) NOT NULL,
  `image_album` varchar(200) NOT NULL,
  `nama_english` varchar(100) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `album_m`
--

INSERT INTO `album_m` (`id_album`, `nama_album`, `image_album`, `nama_english`, `tanggal`) VALUES
(9, 'Kelapa Sawit', '9_palm-1464653_1920.jpg', 'Palm Oil', '03-10-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi_m`
--

CREATE TABLE IF NOT EXISTS `aspirasi_m` (
`id_aspirasi` int(11) NOT NULL,
  `id_asosiasi` int(11) NOT NULL,
  `nama_pengirim` varchar(250) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi_aspirasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `publish` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `jawaban` text NOT NULL,
  `status_jawab` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aspirasi_m`
--

INSERT INTO `aspirasi_m` (`id_aspirasi`, `id_asosiasi`, `nama_pengirim`, `pekerjaan`, `email`, `judul`, `isi_aspirasi`, `tanggal`, `publish`, `jawaban`, `status_jawab`, `foto`) VALUES
(11, 100, 'M. Saepul Bahri', 'Programmer', 'bachrisaiful6@gmail.com', 'Sangat Membantu', 'Web DMSI ini sangat membantu', '0000-00-00', 'ya', '', 'tidak', '11_13445764_1053371498084095_2065887088560297463_n.jpg'),
(13, 100, 'M. Saepul Bahri', 'Programmer', 'bachrisaiful6@gmail.com', 'Perbaiki Bug ', 'Tolong perbaiki bug yang terjadi pada halaman page home utama', '2016-07-01', 'ya', 'ok sip', 'ya', '13_13445764_1053371498084095_2065887088560297463_n.jpg'),
(16, 100, 'b', 'b', 'b', 'b', 'b', '2016-07-02', 'tidak', '', 'tidak', '16_117752.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagan_m`
--

CREATE TABLE IF NOT EXISTS `bagan_m` (
`id_bagan` int(11) NOT NULL,
  `judul_bagan` varchar(250) NOT NULL,
  `image` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_english` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bagan_m`
--

INSERT INTO `bagan_m` (`id_bagan`, `judul_bagan`, `image`, `tanggal`, `judul_english`, `keterangan`) VALUES
(1, 'Sturktur Organisasi DMSI', 'struktur.png', '2016-12-05', 'Organizational Structure DMSI', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_m`
--

CREATE TABLE IF NOT EXISTS `banner_m` (
`id_banner` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_english` varchar(200) NOT NULL,
  `banner` varchar(300) NOT NULL,
  `banner_english` varchar(300) NOT NULL,
  `masa_aktif` enum('sementara','tetap') NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `urutan` int(11) NOT NULL,
  `status` enum('active','nonactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `banner_m`
--

INSERT INTO `banner_m` (`id_banner`, `nama`, `nama_english`, `banner`, `banner_english`, `masa_aktif`, `tanggal_mulai`, `tanggal_berakhir`, `urutan`, `status`) VALUES
(8, 'b', 'b', '8_baner-2.jpg', '8_baner-2_english.jpg', 'tetap', '2000-01-01', '9999-12-31', 1, 'active'),
(9, 'cd', 'cd', '9_baner-3.jpg', '9_baner-3_english.jpg', 'tetap', '2000-01-01', '9999-12-31', 2, 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantas_m`
--

CREATE TABLE IF NOT EXISTS `bantas_m` (
  `id_bantas` int(11) NOT NULL,
  `bantas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantas_m`
--

INSERT INTO `bantas_m` (`id_bantas`, `bantas`) VALUES
(1, 'baner-4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_m`
--

CREATE TABLE IF NOT EXISTS `berita_m` (
`id_berita` int(11) unsigned NOT NULL,
  `id_relawan` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keterangan_gambar` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_m`
--

INSERT INTO `berita_m` (`id_berita`, `id_relawan`, `judul`, `content`, `tanggal`, `image`, `keterangan_gambar`) VALUES
(52, 2, 'Relawan Agus-Sylvi: Kita Dukung Ahok, untuk....', '<p><strong>JAKARTA, KOMPAS.com</strong></p>\r\n<div class="fb-quote fb_iframe_widget">&nbsp;</div>\r\n<p>- Warga Jakarta yang menamakan diri Barisan Teman Agus-Sylvi atau Batas mendeklarasikan dukungan untuk pasangan bakal calon gubernur DKI Jakarta, Agur Harimurti Yudhoyono-Slyviana Murni, Minggu (16/10/2016).&nbsp;</p>\r\n<p>Deklarasi berlangsung di Let''s Eat Culinary, Jagakarsa, Jakarta Selatan. &nbsp;(16/10/2016).</p>\r\n<p>Ketua Batas, Jaenudin menyatakan bahwa Batas merupakan komunitas dibentuk setelah Agus-Sylvi memutuskan untuk maju di <a class="inner-link" href="http://nasional.kompas.com/tag/Pilkada%20DKI%20Jakarta" target="_blank">Pilkada DKI Jakarta</a> 2017.</p>\r\n<p>"Mungkin sebagian sudah mengenal Batas, tapi sebagian belum. Nama batas merupakan ide dari bapak dewan pembina kita, Pak James Setiawan. Kami organ yang baru lahir seperti lahirnya calon gubernur yang baru, masih muda dan berkualitas," kata Jaenudin.</p>\r\n<p>Jaenudin menyatakan pihaknya akan berupaya membantu Agus untuk memenangkan Pilkada. "Kita dukung Ahok (<a class="inner-link" href="http://nasional.kompas.com/tag/Basuki%20Tjahaja%20Purnama" target="_blank">Basuki Tjahaja Purnama</a>) untuk menyelesaikan tugasnya sampai 2017. Setelah itu kita ganti dengan Mas Agus," ujar dia.</p>\r\n<p>Relawan pendukung Agus dari kelompok Batas mengenakan seragam kemeja biru dengan lambang bendera merah putih di bagian lengan kanan.</p>\r\n<p>Agus-Sylvi kemungkinan besar akan menghadapi dua pasangan lain, yakni <a class="inner-link" href="http://nasional.kompas.com/tag/Basuki%20Tjahaja%20Purnama" target="_blank">Basuki Tjahaja Purnama</a> (Ahok) - <a class="inner-link" href="http://nasional.kompas.com/tag/Djarot%20Saiful%20Hidayat" target="_blank">Djarot Saiful Hidayat</a> dan <a class="inner-link" href="http://nasional.kompas.com/tag/Anies%20Baswedan" target="_blank">Anies Baswedan</a>-<a class="inner-link" href="http://nasional.kompas.com/tag/Sandiaga%20Uno" target="_blank">Sandiaga Uno</a>.&nbsp;</p>', '2016-10-02', '52_relawan.jpg', 'Bakal calon gubernur DKI Jakarta Agus Harimurti Yudhoyono saat hadir dalam deklarasi kelompok relawan Barisan Teman Agus Sylvi di Let’s Eat Culinary Jagakarsa, Jakarta Selatan, Minggu (16/10/2016).'),
(53, 1, '4 Pesan untuk Agus Harimurti-Sylviana dari Relawan', '<p><strong>Liputan6.com, Jakarta -</strong> Barisan Teman Agus-Sylvi (<a title="BATAS" href="http://pilkada.liputan6.com/read/2627254/relawan-agus-sylvi-masuk-tim-pemenangan-laskar-asli">BATAS</a>) mendeklarasikan dukungan kepada pasangan Agus Harimurti Yudhoyono dan Sylviana Murni. Agus yang hadir dalam acara tersebut pun merasa kalau dirinya terhormat dan terharu karena mendapat sambutan yang sebegitu meriahnya.</p>\r\n<p>"Kita perlu bersyukur karena kita bersatu untuk satu tujuan. Untuk satu cita-cita dilandasi dengan niat dan tujuan yang baik yaitu Jakarta yang semakin maju, aman, adil, dan sejahtera," ungkap Agus di Let''s Eat, Jagakarsa, Jakarta Selatan, Minggu (16/10/2016).</p>\r\n<div class="baca-juga">\r\n<p class="baca-juga__header">BACA JUGA</p>\r\n<ul class="baca-juga__list">\r\n<li><a href="https://pilkada.liputan6.com/read/2627571/anies-baswedan-ketimpangan-makin-melebar-di-ibu-kota" target="_blank">Anies Baswedan: Ketimpangan Makin Melebar di Ibu Kota</a></li>\r\n<li><a href="https://photo.liputan6.com/news/deklarasi-dukungan-batas-untuk-agus-sylvi-2627564" target="_blank">Deklarasi Dukungan BATAS untuk Agus-Sylvi</a></li>\r\n<li><a href="https://pilkada.liputan6.com/read/2627471/anies-pilkada-tak-hanya-menangkan-jakarta-tapi-rebut-hati-warga" target="_blank">Anies: Pilkada Tak Hanya Menangkan Jakarta, Tapi Rebut Hati Warga</a></li>\r\n</ul>\r\n</div>\r\n<p>Agus menyebut ada empat pesan dari para relawan yang dititipkan kepada dirinya dan&nbsp;<a title="Sylvi" href="http://pilkada.liputan6.com/read/2626729/sylviana-kami-berdua-pasangan-normal-laki-laki-dan-perempuan">Sylvi</a>jika memenangkan Pilkada DKI Jakarta 2017 mendatang. Salah satunya adalah memerangi kemiskinan.</p>\r\n<p>"Teman-teman menitipkan empat pesan yaitu perangi kemiskinan, perangi kebodohan, perangi narkoba, dan korupsi. Itu menjadi isu sentral saya dan Sylvi," tegas anak pertama mantan Presiden SBY ini.</p>\r\n<p>Mantan anggota TNI berujar, jika narkoba adalah musuh bersama sehingga semua pihak harus memberantasnya. Tak hanya itu, Agus pun juga berjanji memperbaiki fasilitas umum dengan memperhatikan penyandang disabilitas.</p>\r\n<p>"Menegakkan hukum yang adil dan tidak tebang pilih. Kita selesaikan akar masalah&nbsp;Narkoba, korupsi juga. Kita tata kelola pemerintahan yang baik. Karena kita ingin Jakarta itu pertumbuhan ekonominya maksimal dan penggunaan APBD-nya juga maksimal,"&nbsp;<a title="Agus" href="http://pilkada.liputan6.com/read/2626868/agus-yudhoyono-persilakan-ppp-jika-ingin-alihkan-dukungan-ke-ahok">Agus</a> menutup.</p>', '2016-10-18', '53_berita.jpg', 'Cagub DKI Jakarta, Agus Harimurti Yudhoyono disalami warga saat menghadiri deklarasi BATAS, Jakarta, Minggu (16/10). BATAS mengaku siap memenangkan Agus-Sylvi dalam Pilkada DKI 2017. (Liputan6.com/Yop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan_m`
--

CREATE TABLE IF NOT EXISTS `bulan_m` (
`id_bulan` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bulan_m`
--

INSERT INTO `bulan_m` (`id_bulan`, `bulan`, `lengkap`) VALUES
(1, 'Jan', 'Januari'),
(2, 'Feb', 'Februari'),
(3, 'Mar', 'Maret'),
(4, 'Apr', 'April'),
(5, 'Mei', 'Mei'),
(6, 'Jun', 'Juni'),
(7, 'Jul', 'Juli'),
(8, 'Agu', 'Agustus'),
(9, 'Sep', 'Sepetember'),
(10, 'Okt', 'Oktober'),
(11, 'Nov', 'November'),
(12, 'Des', 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_m`
--

CREATE TABLE IF NOT EXISTS `download_m` (
`id_download` int(10) unsigned NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `file_download` varchar(255) DEFAULT NULL,
  `judul_english` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download_m`
--

INSERT INTO `download_m` (`id_download`, `judul`, `file_download`, `judul_english`) VALUES
(1, 'PROGRAM DAN STRATEGY MAP DMSI', 'DMSI.pdf', 'PROGRAM AND STRATEGY MAP DMSI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_m`
--

CREATE TABLE IF NOT EXISTS `foto_m` (
`id_foto` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `judul_foto` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `urutan` int(11) NOT NULL,
  `judul_english` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `foto_m`
--

INSERT INTO `foto_m` (`id_foto`, `id_album`, `judul_foto`, `foto`, `urutan`, `judul_english`) VALUES
(10, 9, 'Kelapa Sawit 1', '10_palm-1464653_1920.jpg', 1, 'Palm Oil 1'),
(11, 9, 'Kelapa Sawit 2', '11_palm-1464655_1920.jpg', 2, 'Palm Oil 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_m`
--

CREATE TABLE IF NOT EXISTS `harga_m` (
`id_harga` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_bulan` varchar(50) NOT NULL,
  `id_katharga` int(11) NOT NULL,
  `id_sub_katharga` int(11) NOT NULL,
  `harga_rupiah` varchar(100) NOT NULL,
  `harga_dolar` varchar(100) NOT NULL,
  `sumber` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `harga_m`
--

INSERT INTO `harga_m` (`id_harga`, `tahun`, `id_bulan`, `id_katharga`, `id_sub_katharga`, `harga_rupiah`, `harga_dolar`, `sumber`) VALUES
(0, 2016, '3', 2, 0, '4000', '0.30', 'dmsi'),
(26, 2016, '1', 1, 1, '10000', '0.75', 'dmsi'),
(30, 2016, '2', 1, 1, '4000', '0.30', 'dmsi'),
(31, 2016, '3', 1, 1, '7000', '0.52', 'dmsi'),
(32, 2016, '4', 1, 1, '20000', '1.50', 'dmsi'),
(33, 2016, '1', 1, 2, '10000', '0.75', 'dmsi'),
(34, 2016, '2', 1, 2, '7000', '0.52', 'dmsi'),
(35, 2016, '3', 1, 2, '30000', '2.25', 'dmsi'),
(36, 2016, '4', 1, 2, '20000', '1.50', 'dmsi'),
(38, 2016, '2', 1, 3, '7000', '0.52', 'dmsi'),
(39, 2016, '3', 1, 3, '20000', '1.50', 'dmsi'),
(40, 2016, '4', 1, 3, '30000', '2.25', 'dmsi'),
(41, 2016, '5', 1, 1, '20000', '1.50', 'dmsi'),
(42, 2016, '6', 1, 1, '4000', '0.30', 'dmsi'),
(43, 2016, '7', 1, 1, '7000', '0.52', 'dmsi'),
(44, 2016, '8', 1, 1, '10000', '0.75', 'dmsi'),
(45, 2016, '9', 1, 1, '12000', '0.90', 'dmsi'),
(46, 2016, '10', 1, 1, '10000', '0.75', 'dmsi'),
(47, 2016, '11', 1, 1, '4000', '0.30', 'dmsi'),
(48, 2016, '12', 1, 1, '10000', '0.75', 'dmsi'),
(49, 2016, '5', 1, 2, '4000', '0.30', 'dmsi'),
(50, 2016, '6', 1, 2, '4000', '0.30', 'dmsi'),
(51, 2016, '8', 1, 2, '20000', '1.50', 'dmsi'),
(52, 2016, '9', 1, 2, '30000', '2.25', 'dmsi'),
(53, 2016, '10', 1, 2, '10000', '0.75', 'dmsi'),
(54, 2016, '11', 1, 2, '10000', '0.75', 'dmsi'),
(55, 2016, '7', 1, 2, '4000', '0.30', 'dmsi'),
(56, 2016, '12', 1, 2, '7000', '0.52', 'dmsi'),
(57, 2016, '5', 1, 3, '10000', '0.75', 'dmsi'),
(58, 2016, '6', 1, 3, '20000', '1.50', 'dmsi'),
(59, 2016, '7', 1, 3, '7000', '0.52', 'dmsi'),
(60, 2016, '8', 1, 3, '9500', '0.71', 'dmsi'),
(61, 2016, '9', 1, 3, '20000', '1.50', 'dmsi'),
(62, 2016, '10', 1, 3, '4000', '0.30', 'dmsi'),
(63, 2016, '11', 1, 3, '30000', '2.25', 'dmsi'),
(64, 2016, '12', 1, 3, '4000', '0.30', 'dmsi'),
(65, 2016, '1', 2, 0, '10000', '0.75', 'dmsi'),
(66, 2016, '2', 2, 0, '20000', '1.50', 'dmsi'),
(68, 2016, '5', 2, 0, '30000', '2.25', 'dmsi'),
(69, 2016, '6', 2, 0, '7000', '0.52', 'dmsi'),
(70, 2016, '4', 2, 0, '9500', '0.71', 'dmsi'),
(71, 2016, '8', 2, 0, '4000', '0.30', 'dmsi'),
(72, 2016, '9', 2, 0, '20000', '1.50', 'dmsi'),
(73, 2016, '10', 2, 0, '10000', '0.75', 'dmsi'),
(74, 2016, '11', 2, 0, '7000', '0.52', 'dmsi'),
(75, 2016, '12', 2, 0, '7000', '0.52', 'dmsi'),
(76, 2016, '7', 2, 0, '20000', '1.50', 'dmsi'),
(77, 2016, '1', 3, 4, '10000', '0.75', 'dmsi'),
(78, 2016, '2', 3, 4, '20000', '1.50', 'dmsi'),
(79, 2016, '3', 3, 4, '4000', '0.30', 'dmsi'),
(80, 2016, '4', 3, 4, '10000', '0.75', 'dmsi'),
(81, 2016, '5', 3, 4, '10000', '0.75', 'dmsi'),
(82, 2016, '6', 3, 4, '7000', '0.52', 'dmsi'),
(83, 2016, '7', 3, 4, '20000', '1.50', 'dmsi'),
(84, 2016, '8', 3, 4, '30000', '2.25', 'dmsi'),
(85, 2016, '9', 3, 4, '4000', '0.30', 'dmsi'),
(86, 2016, '10', 3, 4, '9500', '0.71', 'dmsi'),
(87, 2016, '11', 3, 4, '7000', '0.52', 'dmsi'),
(88, 2016, '12', 3, 4, '30000', '2.25', 'dmsi'),
(89, 2016, '1', 3, 5, '10000', '0.75', 'dmsi'),
(90, 2016, '2', 3, 5, '20000', '1.50', 'dmsi'),
(91, 2016, '3', 3, 5, '4000', '0.30', 'dmsi'),
(92, 2016, '4', 3, 5, '7000', '0.52', 'dmsi'),
(93, 2016, '5', 3, 5, '9500', '0.71', 'dmsi'),
(94, 2016, '6', 3, 5, '9500', '0.71', 'dmsi'),
(95, 2016, '7', 3, 5, '7500', '0.56', 'dmsi'),
(96, 2016, '8', 3, 5, '7000', '0.52', 'dmsi'),
(97, 2016, '9', 3, 5, '10000', '0.75', 'dmsi'),
(98, 2016, '10', 3, 5, '7000', '0.52', 'dmsi'),
(99, 2016, '11', 3, 5, '9500', '0.71', 'dmsi'),
(100, 2016, '12', 3, 5, '7000', '0.52', 'dmsi'),
(101, 2016, '1', 3, 6, '9500', '0.71', 'dmsi'),
(102, 2016, '2', 3, 6, '6000', '0.45', 'dmsi'),
(103, 2016, '3', 3, 6, '4500', '0.34', 'dmsi'),
(104, 2016, '5', 3, 6, '7000', '0.52', 'dmsi'),
(105, 2016, '6', 3, 6, '3500', '0.26', 'dmsi'),
(106, 2016, '7', 3, 6, '30000', '2.25', 'dmsi'),
(107, 2016, '8', 3, 6, '7000', '0.52', 'dmsi'),
(108, 2016, '9', 3, 6, '4000', '0.30', 'dmsi'),
(109, 2016, '10', 3, 6, '10000', '0.75', 'dmsi'),
(110, 2016, '11', 3, 6, '10000', '0.75', 'dmsi'),
(111, 2016, '12', 3, 6, '10000', '0.75', 'dmsi'),
(112, 2016, '4', 3, 6, '7000', '0.52', 'dmsi'),
(113, 2012, '1', 3, 4, '23423', '1.75', 'dfdsf'),
(114, 2016, '1', 1, 3, '13000', '1', 'dmsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan_m`
--

CREATE TABLE IF NOT EXISTS `iklan_m` (
`id_iklan` int(11) NOT NULL,
  `id_sponsor` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_english` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_english` varchar(200) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan_m`
--

INSERT INTO `iklan_m` (`id_iklan`, `id_sponsor`, `judul`, `judul_english`, `image`, `image_english`, `status`) VALUES
(8, 29, '', '', '', '', 'nonaktif'),
(10, 29, 'Iklan Musimmas', 'Musimas Advertisment', '10_musimas.jpg', '10_musimas.jpg', 'aktif'),
(12, 31, '', '', '', '', 'nonaktif'),
(13, 31, 'Iklan Sinarmas', 'Sinarmas  advertisement', '13_iklansinarmas.jpg', '13_iklansinarmas.jpg', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_m`
--

CREATE TABLE IF NOT EXISTS `informasi_m` (
`id_informasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(500) NOT NULL,
  `keterangan_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `informasi_m`
--

INSERT INTO `informasi_m` (`id_informasi`, `judul`, `content`, `tanggal`, `image`, `keterangan_gambar`) VALUES
(31, 'Perangi Isu SARA, Timses Agus-Sylvi: Kita Rutin Patroli Cyber', '<p><strong>Jakarta</strong> - Tim sukses bakal cagub dan cawagub DKI Jakarta Agus Harimurti Yudhoyono-Sylviana Murni berkomitmen untuk memerangi isu SARA. Mereka ingin berkompetisi secara sehat dan damai selama masa Pilgub DKI Jakarta 2017.<br /><br />"Memang itu komitmen utama dari Mas Agus dan Mpok Sylvi. Mas Anies dan Sandi atau Pak Ahok kami juga berharap demikian. Apalagi Mas Agus menyatakan untuk apa menggunakan isu SARA toh kita semua saling kenal," kata Ketua Bidang Informasi dan Teknologi Timses Agus-Sylvi Roy Suryo ketika dihubungi detikcom, Minggu (16/10/2016) malam.<br /><br />Menurut Roy, timnnya akan terus melakukan patroli di media sosial untuk mengantisipasi permainan isu SARA. Trik awalnya dilakukan dengan mendata seluruh akun resmi yang menyatakan mendukung Agus-Sylvi ke KPUD DKI dengan domain yang seragam.<br /><br />"Kita seluruh tim patroli cyber. Kalau ada yang menggunakan isu SARA itu akan dievaluasi. Saya sudah berulang kali mengingatkan, kita sesama aktivis dunia maya pendukung Agus-Sylvi juga sudah bertemu di atas 5 kali. Kita komit, misalnya kita daftarkan nama akun ke KPUD domainnya belakangnya ".id". Namanya apa kita cantumkan," paparnya.<br /><br />Roy mengatakan alasan mereka melakukan itu untuk meminimalisir adanya tindakan tidak terpuji dari orang yang tidak bertanggung jawab. Sempat ada beberapa pihak yang mengklaim mendukung Agus-Sylvi namun kenyataannya sebaliknya. <br /><br />"Tim menjaring nama-nama siapa kami, kita tahu. Ini menjelaskan ke publik ada yang seolah olah mendukung tapi mendiskreditkan Mas Agus dan Mpok Sylvi di media sosial. Publik harus cermat dan hati-hati dengan pihak yang mengatasnamakan Agus-Sylvi. Jangan cepet percaya," ungkapnya.<br /><br />"Ini kan suasananya "hangat" bukan panas lho ya. Tapi saya tetap berpendapat kalau tim resmi kedua kandidat lain juga tidak akan melakukan itu. Saya husnudzon (berbaik sangka) saja sama mereka," imbuhnya.<br /><br /><br /><strong>(wsn/fdn)</strong></p>', '2016-10-17', '31_berita.jpg', 'Agus Harimurti Yudhoyono-Sylviana Murni (Foto: Hasan Alhabsy/detikcom)'),
(33, 'Ketum PPP Kenalkan Agus-Sylvi Sebagai Cagub-Cawagub DKI, Wiranto Tepuk Tangan', '<p><strong>Jakarta</strong> - Pasangan Cagub dan Cawagub Agus Harimurti dan Sylviana Murni diperkenalkan oleh Ketua Umum PPP Romahurmuziy pada pembukaan Mukernas PPP di depan ratusan kader PPP yang hadir. Saat nama Agus dan Sylvi disebut, para kader serentak bertepuk tangan.<br /><br />"Saya mengundang Pak Rano, Mas Agus Harimurti dan Sylviana Murni," kata Romahurmuziy di Hotel Mercure Ancol, Jakarta Pusat, Senin (3/10/2016).<br /><br />Pernyataan pria yang akrab disapa Rommy ini pun membuat ratusan kader yang mengikuti Mukernas tersebut bertepuk tangan riuh. Hadir dalam acara tersebut Menko Polhukam Wiranto yang juga ikut bertepuk tangan.<br /><br />"Kalau melihat sambutan meriah, Pak Wiranto, tampaknya tak salah PPP mendukung mereka," kata Rommy yang diiringi tawa para peserta yang kembali bertepuk tangan.<br /><br />"Semoga tepuk tangan itu terus membuat kader untuk bergerak memenangkan," lanjutnya.<br /><br />Dia pun sempat menyapa istri Sekretaris Dewan Pembina Golkar Fadel Muhammad, Hana Fadel Muhammad. Hana saat ini dicalonkan dalam Pilkada Gorontalo.<br /><br />"Ibu Hana, Cawagub Gorontalo, meskipun dulu kuning, sekarang sudah hijau," kata Rommy yang kembali disusul dengan tepuk tangan peserta yang hadir.<br /><br />Selain para cagub, hadir pula Menag Lukman Hakim Saifudin dan Wakil Ketua DPD GKR Hemas. <br /><strong>(bag/bag)</strong></p>', '2016-10-03', '33_berita2.jpg', 'Foto: Agus dan Sylvi hadiri Mukernas PPP/Michico/detikcom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katharga_m`
--

CREATE TABLE IF NOT EXISTS `katharga_m` (
`id_katharga` int(11) NOT NULL,
  `katharga` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `katharga_m`
--

INSERT INTO `katharga_m` (`id_katharga`, `katharga`) VALUES
(1, 'Harga Tandan Buah SEGAR (TBS)'),
(2, 'Harga CPO Domestik (KPB dan Astra)'),
(3, 'Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_m`
--

CREATE TABLE IF NOT EXISTS `kontak_m` (
`id_kontak` int(11) unsigned NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak_m`
--

INSERT INTO `kontak_m` (`id_kontak`, `email`, `alamat`, `telp`, `fax`, `website`) VALUES
(1, 'ipob@dmsi.or.id / dm.sawit@gmail.com', '<p>Pusat Bisnis Thamrin City Lt.7 No.729-730 Jl. Thamrin Boulevard Jakarta Pusat 10230 Indonesia</p>', '+62 21 29625788', '+62 21 29625789', 'http://www.dmsi.or.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo_sosmed_m`
--

CREATE TABLE IF NOT EXISTS `logo_sosmed_m` (
`id_logo` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `logo_sosmed_m`
--

INSERT INTO `logo_sosmed_m` (`id_logo`, `logo`) VALUES
(2, 'icon-twitter\r\n'),
(8, 'icon-facebook');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_m`
--

CREATE TABLE IF NOT EXISTS `log_m` (
`id_log` bigint(20) unsigned NOT NULL,
  `nama_data` varchar(100) DEFAULT NULL,
  `aksi` enum('add','edit','delete','upload') DEFAULT NULL,
  `id_instansi` int(11) DEFAULT NULL,
  `id_data` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_m`
--

INSERT INTO `log_m` (`id_log`, `nama_data`, `aksi`, `id_instansi`, `id_data`, `id_user`, `nama_user`, `tanggal`, `keterangan`) VALUES
(1, 'berita', 'add', NULL, '9', 1, 'Super Administrator', '2016-05-31 02:25:47', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : ab;'),
(2, 'berita', 'delete', NULL, '9', 1, 'Super Administrator', '2016-05-31 02:25:59', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : ;'),
(3, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-05-31 09:14:41', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : a;'),
(4, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-05-31 09:16:12', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : a;'),
(5, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-05-31 09:29:03', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : a;'),
(6, 'informasi', 'add', NULL, '11', 1, 'Super Administrator', '2016-05-31 10:33:02', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : Amazing post with all the goodies;'),
(7, 'informasi', 'add', NULL, '12', 1, 'Super Administrator', '2016-05-31 11:10:46', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : Amazing post with all the goodies;'),
(8, 'berita', 'add', NULL, '9', 1, 'Super Administrator', '2016-05-31 14:24:20', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : Lorem ipsum;'),
(9, 'berita', 'add', NULL, '10', 1, 'Super Administrator', '2016-05-31 15:38:39', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : a;'),
(10, 'berita', 'add', NULL, '4', 1, 'Super Administrator', '2016-05-31 15:40:24', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 4; Nama Judul : b;'),
(11, 'berita', 'add', NULL, '5', 1, 'Super Administrator', '2016-05-31 15:41:41', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 5; Nama Judul : c;'),
(12, 'berita', 'add', NULL, '6', 1, 'Super Administrator', '2016-05-31 15:42:57', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 6; Nama Judul : e;'),
(13, 'berita', 'add', NULL, '7', 1, 'Super Administrator', '2016-05-31 15:55:35', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : g;'),
(14, 'berita', 'add', NULL, '11', 1, 'Super Administrator', '2016-05-31 15:56:49', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : g;'),
(15, 'berita', 'add', NULL, '8', 1, 'Super Administrator', '2016-05-31 15:59:12', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : a;'),
(16, 'berita', 'delete', NULL, '1', 1, 'Super Administrator', '2016-05-31 16:17:42', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 1; Nama Judul : a;'),
(17, 'berita', 'delete', NULL, '2', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 2; Nama Judul : a;'),
(18, 'berita', 'delete', NULL, '3', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 3; Nama Judul : b;'),
(19, 'berita', 'delete', NULL, '4', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 4; Nama Judul : b;'),
(20, 'berita', 'delete', NULL, '5', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 5; Nama Judul : c;'),
(21, 'berita', 'delete', NULL, '6', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 6; Nama Judul : e;'),
(22, 'berita', 'delete', NULL, '7', 1, 'Super Administrator', '2016-05-31 16:17:54', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : g;'),
(23, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-05-31 17:01:13', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ab;'),
(24, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-05-31 17:03:14', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ab;'),
(25, 'berita', 'delete', NULL, '9', 1, 'Super Administrator', '2016-05-31 17:03:37', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : ;'),
(26, 'berita', 'delete', NULL, '10', 1, 'Super Administrator', '2016-05-31 17:03:37', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : ;'),
(27, 'berita', 'delete', NULL, '11', 1, 'Super Administrator', '2016-05-31 17:03:37', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : ;'),
(28, 'berita', 'delete', NULL, '8', 1, 'Super Administrator', '2016-05-31 17:03:37', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : ;'),
(29, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-05-31 17:03:50', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ab;'),
(30, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:28:19', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ab;'),
(31, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:32:36', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : a;'),
(32, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:34:42', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ab;'),
(33, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:40:12', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : a;'),
(34, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:41:25', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : a;'),
(35, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:41:46', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : a;'),
(36, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:44:29', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : c;'),
(37, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 04:45:31', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : b;'),
(38, 'berita', 'edit', NULL, NULL, 1, 'Super Administrator', '2016-06-01 05:06:35', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : d;'),
(39, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-01 05:08:03', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : d;'),
(40, 'berita', 'add', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:10:16', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 1; Nama Judul : b;'),
(41, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:10:34', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : c;'),
(42, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:10:54', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : b;'),
(43, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-01 05:18:39', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : d;'),
(44, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-01 05:23:12', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : d;'),
(45, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-01 05:23:39', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : d;'),
(46, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:24:13', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : opini;'),
(47, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:25:22', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : opinia;'),
(48, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:25:34', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : opinia;'),
(49, 'berita', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:27:11', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : opiniav;'),
(50, 'berita', 'delete', NULL, '8', 1, 'Super Administrator', '2016-06-01 05:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : d;'),
(51, 'berita', 'delete', NULL, '1', 1, 'Super Administrator', '2016-06-01 05:30:28', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 1; Nama Judul : ;'),
(52, 'berita', 'add', NULL, '2', 1, 'Super Administrator', '2016-06-01 05:31:02', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 2; Nama Judul : a;'),
(53, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-01 05:32:24', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : ab;'),
(54, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-01 05:38:13', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : ab;'),
(55, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-01 05:39:03', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : ab;'),
(56, 'berita', 'add', NULL, '9', 1, 'Super Administrator', '2016-06-01 05:40:55', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : b;'),
(57, 'berita', 'edit', NULL, '9', 1, 'Super Administrator', '2016-06-01 05:46:45', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 9; Judul : bc;'),
(58, 'berita', 'edit', NULL, '9', 1, 'Super Administrator', '2016-06-01 05:46:58', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 9; Judul : bc;'),
(59, 'berita', 'edit', NULL, '9', 1, 'Super Administrator', '2016-06-01 05:50:32', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 9; Judul : bcd;'),
(60, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-01 09:47:22', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : ab;'),
(61, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-01 09:51:31', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : Kenapa Produk Turunan Kelapa Sawit Kita Mandeg?;'),
(62, 'berita', 'add', NULL, '3', 1, 'Super Administrator', '2016-06-01 09:54:14', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 3; Nama Judul : Kelapa Sawit, Kisah Tanpa Akhir;'),
(63, 'berita', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-01 09:54:50', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 3; Judul : Kelapa Sawit, Kisah Tanpa Akhir;'),
(64, 'berita', 'edit', NULL, '9', 1, 'Super Administrator', '2016-06-01 13:42:39', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 9; Judul : Budi Daya Kelapa Sawit;'),
(65, 'berita', 'add', NULL, '10', 1, 'Super Administrator', '2016-06-01 13:51:24', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : Ingin Membeli Kebun Sawit, Baca Tips Ini Agar Tidak Nyesal !;'),
(66, 'video', 'add', NULL, '2', 1, 'Super Administrator', '2016-06-01 14:47:08', 'Tambah Data Video Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Video : DMSI;'),
(67, 'informasi', 'add', NULL, '10', 1, 'Super Administrator', '2016-06-02 06:39:10', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : ;'),
(68, 'informasi', 'add', NULL, '11', 1, 'Super Administrator', '2016-06-02 07:00:36', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : ;'),
(69, 'informasi', 'add', NULL, '12', 1, 'Super Administrator', '2016-06-02 07:01:36', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : ;'),
(70, 'informasi', 'add', NULL, '13', 1, 'Super Administrator', '2016-06-02 07:05:59', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 13; Nama Judul : ;'),
(71, 'informasi', 'add', NULL, '14', 1, 'Super Administrator', '2016-06-02 09:38:55', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 14; Nama Judul : ;'),
(72, 'informasi', 'add', NULL, '15', 1, 'Super Administrator', '2016-06-02 09:50:35', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 15; Nama Judul : ;'),
(73, 'informasi', 'add', NULL, '16', 1, 'Super Administrator', '2016-06-02 10:14:04', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : ;'),
(74, 'berita', 'delete', NULL, '10', 1, 'Super Administrator', '2016-06-02 10:28:50', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : ;'),
(75, 'berita', 'delete', NULL, '11', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : ;'),
(76, 'berita', 'delete', NULL, '12', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : ;'),
(77, 'berita', 'delete', NULL, '13', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 13; Nama Judul : ;'),
(78, 'berita', 'delete', NULL, '14', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 14; Nama Judul : ;'),
(79, 'berita', 'delete', NULL, '15', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 15; Nama Judul : ;'),
(80, 'berita', 'delete', NULL, '16', 1, 'Super Administrator', '2016-06-02 10:30:16', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : ;'),
(81, 'informasi', 'add', NULL, '17', 1, 'Super Administrator', '2016-06-02 10:30:42', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 17; Nama Judul : ;'),
(82, 'informasi', 'add', NULL, '18', 1, 'Super Administrator', '2016-06-02 16:32:45', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 18; Nama Judul : ;'),
(83, 'informasi', 'edit', NULL, '0', 1, 'Super Administrator', '2016-06-02 18:15:04', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ;'),
(84, 'informasi', 'edit', NULL, '0', 1, 'Super Administrator', '2016-06-02 18:16:03', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ;'),
(85, 'informasi', 'edit', NULL, '0', 1, 'Super Administrator', '2016-06-02 18:53:55', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : ;'),
(86, 'informasi', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-02 18:55:32', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : ;'),
(87, 'informasi', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-02 18:56:19', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : ;'),
(88, 'informasi', 'add', NULL, '19', 1, 'Super Administrator', '2016-06-02 18:58:19', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 19; Nama Judul : ;'),
(89, 'informasi', 'add', NULL, '20', 1, 'Super Administrator', '2016-06-02 19:03:05', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 20; Nama Judul : ;'),
(90, 'berita', 'delete', NULL, '17', 1, 'Super Administrator', '2016-06-02 20:07:36', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 17; Nama Judul : ;'),
(91, 'berita', 'delete', NULL, '18', 1, 'Super Administrator', '2016-06-02 20:07:36', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 18; Nama Judul : ;'),
(92, 'berita', 'delete', NULL, '19', 1, 'Super Administrator', '2016-06-02 20:07:36', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 19; Nama Judul : ;'),
(93, 'berita', 'delete', NULL, '20', 1, 'Super Administrator', '2016-06-02 20:07:36', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 20; Nama Judul : ;'),
(94, 'informasi', 'add', NULL, '21', 1, 'Super Administrator', '2016-06-02 20:08:01', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 21; Nama Judul : ;'),
(95, 'informasi', 'edit', NULL, '21', 1, 'Super Administrator', '2016-06-03 05:48:45', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 21; Judul : ;'),
(96, 'berita', 'delete', NULL, '21', 1, 'Super Administrator', '2016-06-03 05:50:00', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 21; Nama Judul : ;'),
(97, 'informasi', 'add', NULL, '22', 1, 'Super Administrator', '2016-06-03 05:54:36', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 22; Nama Judul : ;'),
(98, 'berita', 'delete', NULL, '22', 1, 'Super Administrator', '2016-06-03 05:59:32', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 22; Nama Judul : ;'),
(99, 'informasi', 'add', NULL, '23', 1, 'Super Administrator', '2016-06-03 06:02:13', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 23; Nama Judul : ;'),
(100, 'informasi', 'edit', NULL, '23', 1, 'Super Administrator', '2016-06-03 07:30:53', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 23; Judul : ;'),
(101, 'video', 'add', NULL, '1', 1, 'Super Administrator', '2016-06-03 09:45:22', 'Tambah Data Video Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Video : Coba;'),
(102, 'video', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-03 09:45:36', 'Edit Data Video Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Video : Coba;'),
(103, 'informasi', 'edit', NULL, '11', 1, 'Super Administrator', '2016-06-03 10:37:37', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 11; Judul : Amazing post with all the goodies;'),
(104, 'informasi', 'edit', NULL, '12', 1, 'Super Administrator', '2016-06-03 10:38:04', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 12; Judul : Amazing post with all the goodies;'),
(105, 'agenda', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-03 11:00:37', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2016;'),
(106, 'informasi', 'add', NULL, '24', 1, 'Super Administrator', '2016-06-03 23:52:38', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 24; Nama Judul : ;'),
(107, 'informasi', 'edit', NULL, '24', 1, 'Super Administrator', '2016-06-03 23:53:18', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 24; Judul : ;'),
(108, 'berita', 'add', NULL, '10', 1, 'Super Administrator', '2016-06-07 17:36:17', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : TES;'),
(109, 'berita', 'edit', NULL, '10', 1, 'Super Administrator', '2016-06-07 17:38:13', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 10; Judul : TES;'),
(110, 'berita', 'edit', NULL, '10', 1, 'Super Administrator', '2016-06-07 17:39:15', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 10; Judul : TES EDIT;'),
(111, 'berita', 'delete', NULL, '10', 1, 'Super Administrator', '2016-06-07 17:39:32', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : TES EDIT;'),
(112, 'agenda', 'add', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:02:00', 'Tambah Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES;'),
(113, 'agenda', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:02:37', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES;'),
(114, 'agenda', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:02:51', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES;'),
(115, 'agenda', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:03:05', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES;'),
(116, 'agenda', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:04:13', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES;'),
(117, 'agenda', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-07 19:04:37', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Kegiatan : TES EDIT;'),
(118, 'agenda', 'delete', NULL, '', 1, 'Super Administrator', '2016-06-07 19:04:51', 'Hapus Data Kegiatan Oleh Super Administrator dengan rincian, ID : ; Nama Judul Kegiatan : ;'),
(119, 'agenda', 'delete', NULL, '', 1, 'Super Administrator', '2016-06-07 19:04:59', 'Hapus Data Kegiatan Oleh Super Administrator dengan rincian, ID : ; Nama Judul Kegiatan : ;'),
(120, 'agenda', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-07 21:32:04', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2016;'),
(121, 'agenda', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-07 21:32:37', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2015;'),
(122, 'agenda', 'add', NULL, '4', 1, 'Super Administrator', '2016-06-07 21:33:35', 'Tambah Data Kegiatan Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Kegiatan : TES;'),
(123, 'berita', 'delete', NULL, '13', 1, 'Super Administrator', '2016-06-07 21:36:51', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 13; Nama Judul : a;'),
(124, 'berita', 'delete', NULL, '14', 1, 'Super Administrator', '2016-06-07 21:36:51', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 14; Nama Judul : g;'),
(125, 'informasi', 'add', NULL, '15', 1, 'Super Administrator', '2016-06-07 21:55:12', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 15; Nama Judul : TES;'),
(126, 'agenda', 'add', NULL, '5', 1, 'Super Administrator', '2016-06-07 22:15:51', 'Tambah Data Kegiatan Oleh Super Administrator dengan rincian, ID : 5; Nama Judul Kegiatan : a;'),
(127, 'agenda', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-07 22:33:16', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Kegiatan : TES;'),
(128, 'agenda', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-07 22:33:34', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2016;'),
(129, 'agenda', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-07 22:38:49', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2016;'),
(130, 'agenda', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-07 22:39:02', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2015;'),
(131, 'agenda', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-07 22:39:22', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Kegiatan : TES;'),
(132, 'agenda', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-07 22:44:46', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Kegiatan : TES;'),
(133, 'agenda', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-07 22:46:26', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Kegiatan : TES;'),
(134, 'berita', 'add', NULL, '11', 1, 'Super Administrator', '2016-06-07 23:11:50', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : TES;'),
(135, 'berita', 'delete', NULL, '11', 1, 'Super Administrator', '2016-06-07 23:14:29', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : TES;'),
(136, 'berita', 'add', NULL, '12', 1, 'Super Administrator', '2016-06-07 23:14:53', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : TES;'),
(137, 'berita', 'delete', NULL, '12', 1, 'Super Administrator', '2016-06-07 23:15:36', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : TES;'),
(138, 'berita', 'add', NULL, '13', 1, 'Super Administrator', '2016-06-07 23:15:58', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 13; Nama Judul : TES;'),
(139, 'berita', 'edit', NULL, '13', 1, 'Super Administrator', '2016-06-07 23:20:43', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 13; Judul : TES;'),
(140, 'berita', 'edit', NULL, '9', 1, 'Super Administrator', '2016-06-07 23:21:02', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 9; Judul : Mengenal Lebih Dekat dengan Kalimantan Utara;'),
(141, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-07 23:21:28', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : 2016, Goncangan Sawit Semakin Dasyat;'),
(142, 'berita', 'edit', NULL, '13', 1, 'Super Administrator', '2016-06-07 23:28:03', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 13; Judul : TES;'),
(143, 'informasi', 'edit', NULL, '15', 1, 'Super Administrator', '2016-06-07 23:35:14', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 15; Judul : TES;'),
(144, 'informasi', 'edit', NULL, '15', 1, 'Super Administrator', '2016-06-07 23:37:42', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 15; Judul : TES;'),
(145, 'informasi', 'add', NULL, '16', 1, 'Super Administrator', '2016-06-08 04:36:58', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : a;'),
(146, 'berita', 'delete', NULL, '16', 1, 'Super Administrator', '2016-06-08 04:37:11', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : a;'),
(147, 'berita', 'add', NULL, '4', 1, 'Super Administrator', '2016-06-08 05:16:51', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 4; Nama Judul : TES;'),
(148, 'berita', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-08 05:17:59', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 4; Judul : TES;'),
(149, 'berita', 'delete', NULL, '4', 1, 'Super Administrator', '2016-06-08 05:18:12', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 4; Nama Judul : ;'),
(150, 'berita', 'add', NULL, '5', 1, 'Super Administrator', '2016-06-08 05:33:05', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 5; Nama Judul : TES;'),
(151, 'berita', 'delete', NULL, '5', 1, 'Super Administrator', '2016-06-08 05:40:43', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 5; Nama Judul : ;'),
(152, 'berita', 'add', NULL, '6', 1, 'Super Administrator', '2016-06-08 05:41:14', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 6; Nama Judul : TES;'),
(153, 'berita', 'delete', NULL, '6', 1, 'Super Administrator', '2016-06-08 05:41:27', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 6; Nama Judul : ;'),
(154, 'berita', 'add', NULL, '7', 1, 'Super Administrator', '2016-06-08 05:41:57', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : TES;'),
(155, 'berita', 'edit', NULL, '7', 1, 'Super Administrator', '2016-06-08 05:42:33', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 7; Judul : TES;'),
(156, 'berita', 'edit', NULL, '7', 1, 'Super Administrator', '2016-06-08 05:42:52', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 7; Judul : TES EDIT;'),
(157, 'berita', 'edit', NULL, '7', 1, 'Super Administrator', '2016-06-08 05:43:09', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 7; Judul : TES EDIT;'),
(158, 'berita', 'edit', NULL, '7', 1, 'Super Administrator', '2016-06-08 05:43:24', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 7; Judul : TES EDIT;'),
(159, 'informasi', 'edit', NULL, '25', 1, 'Super Administrator', '2016-06-08 06:00:06', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 25; Judul : ;'),
(160, 'berita', 'delete', NULL, '13', 1, 'Super Administrator', '2016-06-08 06:32:41', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 13; Nama Judul : TES;'),
(161, 'download', 'delete', NULL, '2', 1, 'Super Administrator', '2016-06-13 09:57:42', 'Hapus Data File Download Oleh Super Administrator dengan rincian, ID : 2; Nama Judul : coba;'),
(162, 'berita', 'delete', NULL, '23', 1, 'Super Administrator', '2016-06-13 10:04:06', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 23; Nama Judul : ;'),
(163, 'berita', 'delete', NULL, '24', 1, 'Super Administrator', '2016-06-13 10:04:06', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 24; Nama Judul : ;'),
(164, 'berita', 'delete', NULL, '25', 1, 'Super Administrator', '2016-06-13 10:04:06', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 25; Nama Judul : ;'),
(165, 'agenda', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-13 11:50:35', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 1; Nama Judul Kegiatan : Palm Oil Industry Development Conference (POIDEC) 2016;'),
(166, 'berita', 'edit', NULL, '0', 1, 'Super Administrator', '2016-06-14 15:21:52', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : Berita Terbaru 2;'),
(167, 'berita', 'edit', NULL, '0', 1, 'Super Administrator', '2016-06-14 15:25:14', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : ; Judul : Berita Terbaru 2;'),
(168, 'berita', 'edit', NULL, '14', 1, 'Super Administrator', '2016-06-14 15:29:26', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 14; Judul : Berita Terbaru 2;'),
(169, 'berita', 'edit', NULL, '14', 1, 'Super Administrator', '2016-06-15 09:08:17', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 14; Judul : Berita Terbaru 2;'),
(170, 'agenda', 'edit', NULL, '6', 1, 'Super Administrator', '2016-06-15 09:46:38', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 6; Nama Judul Kegiatan : Sesuatu banget;'),
(171, 'informasi', 'add', NULL, '16', 1, 'Super Administrator', '2016-06-15 10:31:41', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : Sesuatu;'),
(172, 'berita', 'add', NULL, '8', 1, 'Super Administrator', '2016-06-15 11:53:22', 'Tambah Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : coba;'),
(173, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-15 12:13:13', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : coba lagi;'),
(174, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-15 12:15:02', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : coba lagi;'),
(175, 'berita', 'edit', NULL, '8', 1, 'Super Administrator', '2016-06-15 12:15:53', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 8; Judul : coba lagi;'),
(176, 'berita', 'delete', NULL, '7', 1, 'Super Administrator', '2016-06-15 12:18:02', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : ;'),
(177, 'berita', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-15 12:19:26', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 3; Judul : Kelapa Sawit, Kisah Tanpa Akhir;'),
(178, 'berita', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-15 12:20:38', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 2; Judul : Kenapa Produk Turunan Kelapa Sawit Kita Mandeg?;'),
(179, 'berita', 'delete', NULL, '11', 1, 'Super Administrator', '2016-06-15 12:21:43', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : TES;'),
(180, 'informasi', 'edit', NULL, '27', 1, 'Super Administrator', '2016-06-16 09:25:58', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 27; Judul : ;'),
(181, 'informasi', 'edit', NULL, '26', 1, 'Super Administrator', '2016-06-16 09:36:01', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 26; Judul : ;'),
(182, 'berita', 'delete', NULL, '26', 1, 'Super Administrator', '2016-06-16 09:57:08', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 26; Nama Judul : ;'),
(183, 'berita', 'delete', NULL, '27', 1, 'Super Administrator', '2016-06-16 09:57:08', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 27; Nama Judul : ;'),
(184, 'berita', 'delete', NULL, '28', 1, 'Super Administrator', '2016-06-16 10:01:49', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 28; Nama Judul : ;'),
(185, 'berita', 'delete', NULL, '29', 1, 'Super Administrator', '2016-06-16 10:04:41', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 29; Nama Judul : ;'),
(186, 'video', 'add', NULL, '2', 1, 'Super Administrator', '2016-06-16 12:36:27', 'Tambah Data Video Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Video : tes;'),
(187, 'video', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-16 13:30:39', 'Edit Data Video Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Video : tes;'),
(188, 'video', 'edit', NULL, '2', 1, 'Super Administrator', '2016-06-16 13:31:14', 'Edit Data Video Oleh Super Administrator dengan rincian, ID : 2; Nama Judul Video : tes 2;'),
(189, 'video', 'add', NULL, '3', 1, 'Super Administrator', '2016-06-16 13:53:42', 'Tambah Data Video Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Video : tes 2;'),
(190, 'video', 'edit', NULL, '3', 1, 'Super Administrator', '2016-06-16 13:55:56', 'Edit Data Video Oleh Super Administrator dengan rincian, ID : 3; Nama Judul Video : tes 2;'),
(191, 'berita', 'delete', NULL, '14', 1, 'Super Administrator', '2016-06-27 21:53:32', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 14; Nama Judul : Berita Terbaru 2;'),
(192, 'berita', 'delete', NULL, '15', 1, 'Super Administrator', '2016-06-27 22:01:35', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 15; Nama Judul : TES;'),
(193, 'berita', 'delete', NULL, '16', 1, 'Super Administrator', '2016-06-27 22:01:35', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 16; Nama Judul : Sesuatu yang lain;'),
(194, 'berita', 'delete', NULL, '8', 1, 'Super Administrator', '2016-06-27 22:03:41', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : Teknologi Pengolahan Limbah Pabrik Kelapa Sawit;'),
(195, 'berita', 'delete', NULL, '12', 1, 'Super Administrator', '2016-06-27 22:03:57', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : Amazing post with all the goodies;'),
(196, 'berita', 'delete', NULL, '9', 1, 'Super Administrator', '2016-06-27 22:03:57', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : Mandiri Layani Pembayaran Elekronik Pungutan Kelapa Sawit;'),
(197, 'berita', 'delete', NULL, '10', 1, 'Super Administrator', '2016-06-27 22:03:57', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 10; Nama Judul : Investor: KERJASAMA PEMBANGUNAN PABRIK KELAPA SAWIT POLA;'),
(198, 'berita', 'delete', NULL, '11', 1, 'Super Administrator', '2016-06-27 22:03:57', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 11; Nama Judul : Amazing post with all the goodies;'),
(199, 'berita', 'delete', NULL, '7', 1, 'Super Administrator', '2016-06-27 22:03:57', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : Masalah Sawit Indonesia: Lingkungan, Ketahanan Pangan dan Konflik Agraria;'),
(200, 'berita', 'delete', NULL, '5', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 5; Nama Judul : Biodiesel Sawit Efektif Mengurangi Emisi Gas Rumah Kaca dari Mesin Diesel;'),
(201, 'berita', 'delete', NULL, '9', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 9; Nama Judul : Mengenal Lebih Dekat dengan Kalimantan Utara;'),
(202, 'berita', 'delete', NULL, '6', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 6; Nama Judul : Kebun Sawit “Pabrik” Minyak Nabati Paling Hemat Lahan;'),
(203, 'berita', 'delete', NULL, '2', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 2; Nama Judul : 2016, Goncangan Sawit Semakin Dasyat;'),
(204, 'berita', 'delete', NULL, '3', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 3; Nama Judul : DMSI Khawatir Pengenaan Pajak Progresif Impor Minyak Sawit;'),
(205, 'berita', 'delete', NULL, '1', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 1; Nama Judul : Harga Sawit Diprediksi Melorot Tahun Ini  aaa;'),
(206, 'berita', 'delete', NULL, '4', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 4; Nama Judul : Ekspor Minyak Sawit Indonesia Akan Jatuh karena Program Biodiesel;'),
(207, 'berita', 'delete', NULL, '7', 1, 'Super Administrator', '2016-06-27 22:04:24', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 7; Nama Judul : PRESIDEN DUKUNG PENUH PENGEMBANGAN SAWIT NASIONAL;'),
(208, 'berita', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-28 12:39:42', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : Petualangan Buronan Polda Riau Berakhir di Tangan Teman;'),
(209, 'berita', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-28 12:40:07', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : Petualangan Buronan Polda Riau Berakhir di Tangan Teman;'),
(210, 'berita', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-28 12:42:35', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : Petualangan Buronan Polda Riau Berakhir di Tangan Teman;'),
(211, 'berita', 'edit', NULL, '17', 1, 'Super Administrator', '2016-06-28 12:42:39', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 17; Judul : Petualangan Buronan Polda Riau Berakhir di Tangan Teman;'),
(212, 'berita', 'delete', NULL, '17', 1, 'Super Administrator', '2016-06-28 12:55:25', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 17; Nama Judul : Petualangan Buronan Polda Riau Berakhir di Tangan Teman;'),
(213, 'berita', 'delete', NULL, '17', 1, 'Super Administrator', '2016-06-28 15:09:56', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 17; Nama Judul : a;'),
(214, 'berita', 'delete', NULL, '8', 1, 'Super Administrator', '2016-06-28 16:13:19', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 8; Nama Judul : ;'),
(215, 'agenda', 'edit', NULL, '6', 1, 'Super Administrator', '2016-06-28 16:51:36', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 6; Nama Judul Kegiatan : Sesuatu banget;'),
(216, 'agenda', 'edit', NULL, '6', 1, 'Super Administrator', '2016-06-28 16:52:23', 'Edit Data Kegiatan Oleh Super Administrator dengan rincian, ID : 6; Nama Judul Kegiatan : Sesuatu banget;'),
(217, 'download', 'delete', NULL, '2', 1, 'Super Administrator', '2016-06-29 10:31:54', 'Hapus Data File Download Oleh Super Administrator dengan rincian, ID : 2; Nama Judul : abc;'),
(218, 'video', 'edit', NULL, '4', 1, 'Super Administrator', '2016-06-29 12:49:55', 'Edit Data Video Oleh Super Administrator dengan rincian, ID : 4; Nama Judul Video : Video Clip Lagu DMSI - Ari Lasso Feat Audy;'),
(219, 'informasi', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-29 13:00:07', 'Edit Data Berita Oleh Super Administrator dengan rincian, ID : 1; Judul : ;'),
(220, 'profil', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-30 09:52:40', 'Update Foto Profil User Oleh Super Administrator dengan rincian, ID : 1; Nama  : Super Administrator;'),
(221, 'profil', 'edit', NULL, '1', 1, 'Super Administrator', '2016-06-30 09:54:27', 'Update Foto Profil User Oleh Super Administrator dengan rincian, ID : 1; Nama  : Super Administrator;'),
(222, 'berita', 'delete', NULL, '12', 1, 'Super Administrator', '2016-07-14 16:02:03', 'Hapus Data Berita Oleh Super Administrator dengan rincian, ID : 12; Nama Judul : Sesuatu yang lain;'),
(223, 'provinsi', 'add', NULL, '93', 1, 'Developer Web', '2016-07-28 06:13:40', 'Tambah Data Propinsi Oleh Developer Web dengan rincian, ID : 93; Nama Provinsi : a;'),
(224, 'provinsi', 'edit', NULL, '93', 1, 'Developer Web', '2016-07-28 06:14:17', 'Update Data Negara Oleh Developer Web dengan rincian, ID : 93; Nama Provinsi : ab;'),
(225, 'provinsi', 'add', NULL, '94', 1, 'Developer Web', '2016-07-28 06:17:11', 'Tambah Data Propinsi Oleh Developer Web dengan rincian, ID : 94; Nama Provinsi : a;'),
(226, 'kota', 'add', NULL, '16720', 1, 'Developer Web', '2016-07-28 06:18:33', 'Tambah Data Kota Oleh Developer Web dengan rincian, ID : 16720; Nama Kota : ab;'),
(227, 'kota', 'edit', NULL, '16720', 1, 'Developer Web', '2016-07-28 06:19:10', 'Update Data Kota Oleh Developer Web dengan rincian, ID : 16720; Nama Kota : abv;'),
(228, 'kota', 'delete', NULL, '16720', 1, 'Developer Web', '2016-07-28 06:19:26', 'Hapus Data Kota Oleh Developer Web dengan rincian, ID : 16720; Nama Kota : ;'),
(229, 'kota', 'edit', NULL, '1101', 1, 'Developer Web', '2016-08-09 07:29:31', 'Update Data Kota Oleh Developer Web dengan rincian, ID : 1101; Nama Kota : Kab. Aceh Selatan;'),
(230, 'kota', 'edit', NULL, '1101', 1, 'Developer Web', '2016-08-09 07:30:15', 'Update Data Kota Oleh Developer Web dengan rincian, ID : 1101; Nama Kota : Kab. Aceh Selatan 2;'),
(231, 'kota', 'edit', NULL, '1101', 1, 'Developer Web', '2016-08-09 07:30:25', 'Update Data Kota Oleh Developer Web dengan rincian, ID : 1101; Nama Kota : Kab. Aceh Selatan;'),
(232, 'kota', 'add', NULL, '5436', 1, 'Developer Web', '2016-08-09 07:31:40', 'Tambah Data Kota Oleh Developer Web dengan rincian, ID : 5436; Nama Kota : tes;'),
(233, 'kota', 'delete', NULL, '5436', 1, 'Developer Web', '2016-08-09 07:31:51', 'Hapus Data Kota Oleh Developer Web dengan rincian, ID : 5436; Nama Kota : ;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opini_m`
--

CREATE TABLE IF NOT EXISTS `opini_m` (
`id_opini` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `keterangan_gambar` varchar(200) NOT NULL,
  `file_lampiran` varchar(200) NOT NULL,
  `judul_english` varchar(255) NOT NULL,
  `content_english` text NOT NULL,
  `caption_picture` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `opini_m`
--

INSERT INTO `opini_m` (`id_opini`, `judul`, `content`, `tanggal`, `image`, `keterangan_gambar`, `file_lampiran`, `judul_english`, `content_english`, `caption_picture`) VALUES
(2, 'Kenapa Produk Turunan Kelapa Sawit Kita Mandeg?', '<p>Kelapa sawit adalah tanaman perkebunan penting di dunia yang dapat menghasilkan berbagai produk industri makanan, kimia, kosmetik, bahan dasar industri berat dan ringan, biodiesel, dan lain-lain. Tanaman sawit yang diduga berasal dari Afrika didatangkan ke Indonesia oleh pemerintah Hindia Belanda pada tahun 1848. Beberapa bijinya ditanam di Kebun Raya Bogor, sementara sisa benihnya ditanam di tepi-tepi jalan sebagai tanaman hias di Deli Sumatera Utara pada tahun 1870-an. Berkembangnya perkebunan&nbsp; sawit di dunia bersamaan meningkatnya permintaan minyak nabati akibat Revolusi Industri pertengahan abad ke-19.</p><p>Di Indonesia pengembangan perkebunan sawit dimulai &nbsp;di pulau Sumatera yaitu di Deli dan Aceh, bahkan di zaman pendudukan Hindia Belanda sekitar pada 1940 pernah menjadi daerah pemasok utama minyak sawit dunia. Akan tetapi pada masa pendudukan Jepang terjadi berbagai kekacauan yang menyebabkan terbengkalainya pemeliharan kebun sawit dan akhirnya produksi sawit mengalami penurunan yang drastis. Pada saat yang sama di Malaya (Malaysia) perkebunan sawit sudah berkembang dengan baik sehingga pemasok utama minyak sawit dunia diambil alih oleh Malaysia</p><p>Kelapa sawit merupakan tanaman penghasil minyak nabati yang dapat diandalkan karena minyak yang dihasilkan memiliki berbagai keunggulan dibandingkan dengan minyak yang dihasilkan oleh tanaman lain. Salah satu keunggulannya adalah memiliki kadar kolesterol rendah, bahkan tanpa kolesterol. Minyak kelapa sawit mengandung kadar kolesterol yang rendah, yaitu sekitar 3 mg/kg. Sementara, lemak hewani mengandung kadar kolesterol lebih tinggi, 50-100 kali dari minyak kelapa sawit.</p><p>Pengolahan kelapa sawit pada dasarnya merupakan suatu proses pengolahan terhadap tandan buah segar (TBS) menjadi minyak kelapa sawit (CPO) dan minyak inti sawit (KPO). Minyak nabati yang dihasilkan dari pengolahan buah kelapa sawit berupa minyak sawit mentah (CPO) yang berwarna kuning dan minyak inti sawit (PKO) yang tidak berwarna (jernih). CPO atau PKO banyak digunakan sebagai bahan industri pangan (minyak goreng dan margarin), industry sabun (bahan penghasil busa), industri baja (bahan pelumas), industri tekstil, kosmetik, dan sebagai bahan bakar alternatif (biodisel). Pada dasarnya, CPO dapat diolah menjadi tiga macam bahan kimia, yaitu methyl ester, asam lemak (fatty acid), dan gliserin (glycerine).</p><p>Bangkitnya kembali perkebunan sawit di Indonesia dimulai sejak era 1970-an dengan luas&nbsp; 250 ribu hektar, dan pada tahun 2008 telah meningkat menjadi 7,0 juta hektar, tahun 2009 meningkat menjadi 7,3 juta hektar dan pada tahun 2010 luas kebun sawit di Indonesia sudah mencapai 7,9 juta hektar dan menyebar hampir di seluruh wilayah Indonesia. Menurut data Ditjen Perkebunan, areal perkebunan kelapa sawit tersebar di 17 provinsi meliputi wilayah Sumatera, Jawa, Kalimantan, Sulawesi, Maluku dan Papua. Meningkatnya luas perkebunan sawit juga diikuti dengan naiknya produksi CPO, dimana pada tahun 2008 produksinya 19,2 juta ton, pada tahun 2009 produksinya 19,4 juta ton, dan menurut Oil World tahun 2010 produksi CPO Indonesia sebesar 21,8 juta ton, tumbuh sebesar 3,8 persen, sedangkan produksi CPO Malaysia di 2010 mengalami penurunan sebesar 3,3 persen, yaitu dari 17,6 juta ton di 2009 menjadi 17 juta ton. Pada tahun 2011 ini menurut Kementerian Pertanian&nbsp; Indonesia dapat memproduksi CPO mencapai 22-23 juta ton.</p><p>Secara internasional kebangkitan Indonesia sebagai produsen utama dunia cukup lama pulihnya, sejak pendudukan Jepang, maka baru pada tahun 2006 Indonesia sebagai negara produsen kelapa sawit nomor satu di dunia. dimana memberikan kontribusi sebanyak 47 persen dari produksi minyak kelapa sawit yang dihasilkan oleh perkebunan kelapa sawit di seluruh dunia. Di dalam negeri, industri kelapa sawit nasional berkontribusi sebesar 10% terhadap pendapatan pemerintah dari sektor non migas, dan sebagai menyerap tenaga kerja. Namun sayangnya industri pengolahan produk turunan CPO Indonesia belum berkembang dengan baik, dimana Indonesia masih tetap mengandalkan ekspor minyak sawit mentah ke pasar dunia dan mengandalkan penjualan Tandan Buah Segar (TBS) yang nilainya relatif kecil dibandingkan nilai tambah penjualan produk turunan CPO.</p>', '2016-06-02', '2_13936337821293320679.jpg', 'abf', '13936337821293320679.jpg', 'Why Palm Oil Derivative Products We stagnant?', '<div>Oil palm plantations are an important crop in the world that can produce a variety of food industry, chemicals, cosmetics, basic materials industry and light weight, biodiesel, and others. Palm plants thought to have come from Africa were brought to Indonesia by the Dutch in 1848. Some of the seeds planted in the Bogor Botanical Gardens, while the rest of the seeds planted by the roadside as an ornamental plant in North Sumatra Deli in the 1870s. The development of oil palm plantations in the world simultaneously increased demand for vegetable oils as a result of the Industrial Revolution mid-19th century.</div><div><br></div><div>In Indonesia the development of oil palm plantations in Sumatra which started in Deli and Aceh, even in the days of the occupation of the Dutch East Indies around in 1940 was once a major supplier of the world''s palm oil. But during the Japanese occupation occurred chaos that led to the abandonment of the maintenance of oil palm plantations and palm oil production finally experienced a drastic decline. At the same time in Malaya (Malaysia) oil palm plantations is already well developed so that the main supplier of the world''s palm oil is taken over by Malaysia</div><div><br></div><div>Coconut oil is a vegetable oil crops that can be relied upon because of the oil produced has many advantages compared to oil produced by other plants. One advantage is to have lower cholesterol levels, even without cholesterol. Palm oil contains cholesterol levels are low, around 3 mg / kg. Meanwhile, animal fats containing higher cholesterol levels, 50-100 times of palm oil.</div><div><br></div><div>Palm oil processing is basically a process of the processing of fresh fruit bunches (FFB) into crude palm oil (CPO) and palm kernel oil (KPO). Vegetable oil produced from oil palm fruit processing in the form of crude palm oil (CPO) and yellow palm kernel oil (PKO) colorless (clear). CPO or PKO widely used as food industry (cooking oil and margarine), industry soap (foam-producing material), the steel industry (lubricants), textiles, cosmetics, and as an alternative fuel (biodiesel). Basically, the CPO can be processed into three kinds of chemicals, ie methyl esters, fatty acids (FAs), and glycerol (glycerine).</div><div><br></div><div>The revival of oil palm plantations in Indonesia began in the 1970s with an area of ​​250 thousand hectares, and in 2008 has increased to 7.0 million hectares in 2009 increased to 7.3 million hectares and in 2010 the area of ​​oil palm plantations in Indonesia has been 7.9 million hectares and spread almost all over Indonesia. According to data from the Directorate General of plantations, oil palm plantations are scattered in 17 provinces covering an area of ​​Sumatra, Java, Kalimantan, Sulawesi, Maluku and Papua. Increased oil palm plantation area is also followed by the increase in CPO production, which in 2008 production of 19.2 million tons, in 2009 production of 19.4 million tons, according to Oil World 2010. Indonesia''s CPO production at 21.8 million tons, growing by 3.8 percent, while Malaysia''s CPO production in 2010 decreased by 3.3 percent, from 17.6 million tons in 2009 to 17 million tons. In 2011, according to the Ministry of Agriculture of Indonesia can produce 22-23 million tons of CPO reached.</div><div><br></div><div>Internationally resurrection Indonesia as the world''s top producer for a long time recovery, since the Japanese occupation, it is only in 2006 that Indonesia as the country''s number one palm oil producer in the world. which contributes as much as 47 percent of the production of palm oil produced by oil palm plantations around the world. Domestically, the national oil palm industry accounted for 10% of government revenues from non-oil sector, and as to absorb labor. But unfortunately derivative products processing industry Indonesia is not well developed, of which Indonesia is still relying on crude palm oil exports to the world market and relying on the sale of fresh fruit bunches (FFB) is relatively small compared to the value-added sales of derivative products.</div>', 'Why Palm Oil Derivative Products We stagnant?'),
(3, 'Kelapa Sawit, Kisah Tanpa Akhir', 'Mentawai adalah bagian dari serangkaian Non-Vulkanik yang membentuk gugusan menjadi puncak-puncak dari suatu punggung pegunungan bawah Laut. Letaknya sekitar 100 km dari sebelah Barat pantai pulau Sumatera dan terdiri dari 40 pulau kecil &amp; besar serta dikelilingi oleh Samudera Hindia(Laut Lepas). Luas Kepulauan Mentawai hanya 6.700 km2. Kepulauan Mentawai tak bergunung, tapi berbukit sekitar 500 meter tingginya. Tipologi orang Mentawai umumnya berbadan kuat, kekar, sehat. Sifat orang Mentawai baik, ramah, kreatif, berjiwa seni dan mampu menciptakan sesuatu yang berdaya guna, lepas dari itu semua orang Mentawai adalah Pribadi yang sangat Religi terhadap alam. Hidup mati mereka berasal dari alam (mone). Makanan khas mentawai adalah sagu, talas/keladi dan sejenisnya, pisang, ubi kayu/ubi jalar yang semuanya itu berasal dari ladang, menu tambahan lainnya dari laut dan sungai.', '2016-06-01', '3_13936337821293320679.jpg', 'Kelapa Sawit, Kisah Tanpa Akhir', '13936337821293320679.jpg', 'Palm Oil, Story Without End', 'Mentawai is part of a series of Non-Volcanic form a cluster into the tops of the ridges of an Under the Sea. It is located about 100 km from the west coast of Sumatra island and consists of 40 small and large islands and surrounded by the Indian Ocean (the high seas). Size Mentawai Islands only 6,700 km2. Mentawai Islands is not mountainous, but the hilly approximately 500 meters in height. The typology of the Mentawai generally strong bodied, muscular, healthy. The nature of the Mentawai nice, friendly, creative, artistic and capable of creating something useful, apart from that everyone is a private Mentawai highly Religion of nature. They lived or died of natural origin (mone). Mentawai typical food is sago, taro / taro and the like, bananas, cassava / sweet potato, all of which came from the field, other additional menu of sea and river.', 'Palm Oil, Story Without End');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_m`
--

CREATE TABLE IF NOT EXISTS `pengumuman_m` (
`id_pengumuman` int(11) unsigned NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file_pengumuman` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman_m`
--

INSERT INTO `pengumuman_m` (`id_pengumuman`, `judul`, `content`, `tanggal`, `image`, `file_pengumuman`) VALUES
(37, 'Perubahan Jadwal Workshop Sistem Registrasi Koleksi Museum', 'Sehubungan dengan adanya pekan budaya nasional, maka jadwal workshop Sistem Registrasi Koleksi Museum yang  seharusnya di laksanakan pada tanggal 18 April 2015 di undur menjadi tanggal 27 April 2015 di tempat yang sama.<br><br>Untuk informasi lebih lanjut mengenai kegiatan ini harap&nbsp; hubungi langsung panitia kegiatan.<br><br><br>', '2015-04-15', '37_workshops_147488846.jpg', 'Jadwal_Kegiatan_Workshop_Resertifikasi_2015.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_m`
--

CREATE TABLE IF NOT EXISTS `profil_m` (
`id_info` int(11) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `deskripsi` text NOT NULL,
  `pendidikan` text NOT NULL,
  `riwayat` text NOT NULL,
  `penghargaan` text NOT NULL,
  `order_num` int(4) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_m`
--

INSERT INTO `profil_m` (`id_info`, `nama`, `jabatan`, `foto`, `content`, `deskripsi`, `pendidikan`, `riwayat`, `penghargaan`, `order_num`) VALUES
(8, 'Agus Harimurti Yudhoyono', 'Calon Gubernur DKI Jakarta', '8_agus.png', '<ul>\r\n<li>Nama Lengkap : Agus Harimurti Yudhoyono</li>\r\n<li>Tanggal Lahir : 10 Agustus 1978</li>\r\n<li>Tempat Lahir : Bandung, Jawa Barat</li>\r\n<li>Dinas/cabang : Lambang TNI AD.png TNI Angkatan Darat</li>\r\n<li>Lama dinas : 2000&ndash;sekarang</li>\r\n<li>Pangkat : Letko</li>\r\n<li>Kesatuan : Infanteri, Kostrad</li>\r\n<li>Penghargaan : Adhi Makayasa &ndash; Tri Sakti Wiratama 2000</li>\r\n<li>Istri : Annisa Pohan</li>\r\n<li>Anak : Almira Tunggadewi Yudhoyono</li>\r\n<li>Relasi : Susilo Bambang Yudhoyono (Ayah), Kristiani Herawati (Ibu) dan Edhie Baskoro Yudhoyono (Saudara)</li>\r\n</ul>', '<p>Agus menikahi Annisa Larasati Pohan pada Juli 2005. Beberapa bulan setelah ia menikah, Agus meninggalkan istrinya untuk dapat bertugas sebagai pasukan PBB ke Afghanistan selama kurang lebih setahun. Dan Pada tanggal 17 Agustus 2008, tepat di Hari Kemerdekaan Republik Indonesia ke-63, istrinya melahirkan seorang anak perempuan yang diberi nama Almira Tungga dewi Yudhoyono.</p>\r\n<p>Agus berhasil menyelesaikan pendidikan SMA-nya pada tahun 1997 di Taruna Nusantara &amp; Akademi Militer pada tahun 2000. Dan Agus kemudian mengambil gelar Master di bidang Strategic Studies di Institute of Defence and Strategic Studies, Nanyang Technological University (NTU), Singapura pada tahun 2006. Dan pada Mei 2010, ia berhasil meraih gelar Master of Public Administration pada John F. Kennedy School of Government, Harvard University, Massachusetts AS.</p>\r\n<p>Dan tepat pada Maret 2012, Kapten Infanteri Agus Harimurti Yudhoyono, putra sulung dari mantan Presiden RI <em><a href="http://www.profillengkap.com/profil-dan-biografi-susilo-bambang/" target="_blank">Susilo Bambang Yudhoyono</a></em>, meraih 3 penghargaan, yaitu Distinguish International Honour Graduated, Medali The Order of Saint Maurice , &amp; The Commandants List dari sekolah militer Angkatan Darat di Fort Benning, Georgia, Amerika Serikat (AS).</p>', '<ul>\r\n<li>Master of Public Administration, John Kennedy School of Goverment, Mei 2010</li>\r\n<li>Master Strategic Studies di Institute of Defence and Strategic Studies Nanyang Technological University (NTU), Singapura 2006</li>\r\n<li>Akademi Militer 2000</li>\r\n<li>SMA Taruna Nusantara 1997</li>\r\n</ul>', '<ul>\r\n<li>Wadan Yonif Mekanis 201/Jaya Yudha</li>\r\n<li>Batalyon Infanteri (Yonif) Mekanis</li>\r\n<li>Kepala Operasi Infanteri 17 Brigade Airbone Kostrad TNI AD</li>\r\n</ul>', '<ul>\r\n<li>Distinguish International Honour Graduated</li>\r\n<li>Medali The Order of Saint Maurice</li>\r\n<li>The Commandants List</li>\r\n</ul>', 1),
(9, 'Sylviana Murni', 'Cawagub DKI Jakarta', '9_sylviana-murni.jpg', '<ul>\r\n<li><strong>Nama Lengkap</strong> : Sylviana Murni</li>\r\n<li><strong>Alias</strong> : No Alias</li>\r\n<li><strong>Profesi</strong> : Birokrat</li>\r\n<li><strong>Agama</strong> : Islam</li>\r\n<li><strong>Tempat Lahir</strong> : Jakarta</li>\r\n<li><strong>Tanggal Lahir</strong> : Sabtu, 11 Oktober 1958</li>\r\n<li><strong>Zodiac</strong> : Balance</li>\r\n<li><strong>Warga Negara</strong> : Indonesia</li>\r\n<li><strong>Ayah</strong> : Kol (Purn) Drs. HD Moerdjani</li>\r\n<li><strong>Ibu</strong> : Hj. Ni''mah</li>\r\n<li><strong>Suami</strong> : H. Gde Sardjana, Dipl. Ing, SE, MM</li>\r\n<li><strong>Anak</strong> : Shandy Aditya , Monica Andalusia</li>\r\n</ul>', '<p>Dr. Hj. Sylviana Murni ,SH,M.Si, merupakan sosok wanita indonesia asli betawi yang tegas,lugas dan disiplin. Lahir dari keluarga religius dan disiplin yang menjadikan sosok Sylvi yang sukses. Didikan seorang Ibu yang menjadikan Sylvi menjadi sosok seorang wanita yang religi,sedangkan kedisiplinan Sylvi merupakan ajaran sang Ayah karena dari latar belakang tentara.</p>\r\n<p>Sosok wanita tegas ini sudah menunjukkan jiwa kepemimpinannya sejak kecil, karena semua ajaran rendah hati dan tegas turun langsung dari kedua orang tuanya. Tak heran jika Sylvi terlihat beda dibanding teman teman sebayanya. Sylvi merupakan sosok yang suka bergaul dan bersosialisasi, tak heran jika Sylvi pernah ditunjuk untuk menjabat dalam organisasi tertentu di sekolah dan karang taruna. Tak cukup sampai di sekolah, bahkan ketika di kampus pun, Sylvi tak lepas dari sistem keorganisasian, mulai dari organisasi kebetawian, wanita dan sosial. Bagi Sylvi sistem organisasi merupakan the first university daripada pendidikan formal.</p>\r\n<p>Mengawali karir sebagai pegawai negeri sipil sebagai staf penatar di Badan Pembinaan Pendidikan dan Pelaksanaan Pedoman Penghayatan dan Pengamalan Pancasila ( BP7). Selama menduduki posisi ini, Sylvi tercatat sebagai pegawai teladan yang hampir tidak cacat dan banyak prestasi di mata negara.</p>\r\n<p>Pernah cuti dari PNS karena terpilih sebagai anggota DPRD dari Golkar hingga akhirnya kembali lagi ke posisi lama di PNS.</p>\r\n<p>Sylvi menduduki jabatan Kepala Dinas Pendidikan Dasar DKI pada tanggal 19 Oktober 2004 dengan prinsip dasar, dengan pendidikan,seseorang memiliki kesempatan untuk memperbaiki hidup.Perjuangan Sylvi benar benar terwujud, di antaranya program BOS ( Bantuan Operasional Sekolah ) dan BOP ( Bantuan Operasional Pendidikan ) yang telah di setujui anggota dewan.<br />Silvy tercatat sebagai walikota Jakarta Pusat tertanggal 21 April 2008 hingga periode 2013 atas ajakan Gubernur DKI Jakarta Fauzi Bowo yang sebelumnya dilantik pada tanggal 01 April 2008. &nbsp;</p>\r\n<p>Pada masa kepemimpinan Gubernur Basuki Tjahaja Purnama, Sylviana Murni didapuk sebagai Deputi Gubernur Bidang Pariwisata dan kebudayaan DKI Jakarta. Diangkat pada tahun 2015, dan hanya setahun menjabat, Sylvi memutuskan untuk mengundurkan diri.</p>\r\n<p>Pengunduran diri tersebut dilakukan karena Sylvi akan ikut bertarung di Pilkada DKI 2017 nanti. Partai Demokrat, PAN, PKB dan PPP mengusung Sylvi sebagai cawagub mereka. Sebagai pasangan dari Agus Harimurti Yudhoyono, putra sulung presiden RI ke-6, Susilo Bambang Yudhoyono.</p>\r\n<p>Last update: 1 Oktober 2016 - 12.40 PM<br />Riset dan analisa oleh Eko Setiawan - Ovan Zaihnudin</p>', '<ul>\r\n<li>SD Baluel Jakarta Timur</li>\r\n<li>SMP 44 Jakarta Timur</li>\r\n<li>SMA 12 Jakarta Timur</li>\r\n<li>S1 Hukum Administrasi Negara Fakultas Hukum Universitas Jayabaya Jakarta</li>\r\n<li>S2 Manajemen Kependudukan Fakultas Ekonomi Universitas Indonesia Jakarta 1999</li>\r\n<li>S3 Manajemen Pendidikan Fakultas Kependidikan Universitas Negeri Jakarta 2005</li>\r\n<li>Kursus Singkat Demografi di Australian National University Australia 2003</li>\r\n</ul>', '<ul>\r\n<li>Staf Penatar BP-7 DKI 1985-1987</li>\r\n<li>Staf Biro Pembinaan Mental (Bintal) DKI 1987-1989</li>\r\n<li>Kepala Sub Bagian Pendidikan Luar Sekolah Biro Bintal DKI 1989-1991</li>\r\n<li>Kepala Sub Bagian Seni Budaya Biro Bintal DKI 1991-1995&nbsp;</li>\r\n<li>Kepala Bagian Kebudayaan Biro Bintal DKI 1995-1997</li>\r\n<li>Anggota DPRD DKI 1997-1999&nbsp;</li>\r\n<li>Kepala Biro Bina Sosial DKI 1999-2001</li>\r\n<li>Kepala Dinas Kependudukan dan Catatan Sipil (DKCS) DKI 2001-2004</li>\r\n<li>Kepala Dinas Pendidikan Dasar DKI 2004-2008</li>\r\n<li>Walikota Jakarta Pusat 2008-2013</li>\r\n<li>Deputi Gubernur DKI Bidang Kebudayaan dan Pariwisata (2015-2016)</li>\r\n</ul>', '<p>-</p>', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_m`
--

CREATE TABLE IF NOT EXISTS `program_m` (
`id_program` int(11) NOT NULL,
  `judul_program` varchar(250) NOT NULL,
  `image` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_english` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `program_m`
--

INSERT INTO `program_m` (`id_program`, `judul_program`, `image`, `tanggal`, `judul_english`) VALUES
(1, 'sesuatu ', 'Lighthouse.jpg', '2016-06-02', 'Something ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi_m`
--

CREATE TABLE IF NOT EXISTS `registrasi_m` (
`id_registrasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `id_relawan` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `web` varchar(200) NOT NULL,
  `id_propinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `no_ktp` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user_key` varchar(100) NOT NULL,
  `user_status` varchar(100) NOT NULL,
  `disetujui` enum('ya','tidak') NOT NULL DEFAULT 'tidak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `regulasi_m`
--

CREATE TABLE IF NOT EXISTS `regulasi_m` (
`id_regulasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file_regulasi` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `judul_english` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `regulasi_m`
--

INSERT INTO `regulasi_m` (`id_regulasi`, `judul`, `file_regulasi`, `tahun`, `judul_english`) VALUES
(3, 'TSC Regulasi 2014-2016', 'tsc-regulasi-2016-21042016.pdf', ' 2016', 'TSC Regulation 2014-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relawan_m`
--

CREATE TABLE IF NOT EXISTS `relawan_m` (
`id_relawan` int(11) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `deskripsi` text NOT NULL,
  `pendidikan` text NOT NULL,
  `riwayat` text NOT NULL,
  `penghargaan` text NOT NULL,
  `order_num` int(4) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relawan_m`
--

INSERT INTO `relawan_m` (`id_relawan`, `nama`, `jabatan`, `foto`, `content`, `deskripsi`, `pendidikan`, `riwayat`, `penghargaan`, `order_num`) VALUES
(1, 'Rahmad Sumut', 'Relawan Utama', '2_117752.jpg', '<p>Profil</p>', '<p>Deskripsi</p>', '<p>Pendidikan</p>', '<p>Relawan Utama</p>', '<p>Penghargaan</p>', 2),
(2, 'Susno Sumsel', 'Relawan Anggota', '3__MG_1810.JPG', '<p>profil</p>', '<p>deskripsi</p>', '<p>pendidikan</p>', '<p>jabatan</p>', '<p>penghargaan</p>', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `serbaserbi_m`
--

CREATE TABLE IF NOT EXISTS `serbaserbi_m` (
`id_sesebi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `keterangan_gambar` varchar(200) NOT NULL,
  `file_lampiran` varchar(200) NOT NULL,
  `judul_english` varchar(255) NOT NULL,
  `content_english` text NOT NULL,
  `caption_picture` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `serbaserbi_m`
--

INSERT INTO `serbaserbi_m` (`id_sesebi`, `judul`, `content`, `tanggal`, `image`, `keterangan_gambar`, `file_lampiran`, `judul_english`, `content_english`, `caption_picture`) VALUES
(9, 'Budi Daya Kelapa Sawit', '<span>dalam artikel kali ini akan dibahas tetang cara menanam kelapa sawit&nbsp;secara efisien sehingga biaya yang diperlukan akan semakin rendah. Saat ini agribisnis kelapa sawit (Elaeis guineensis Jacq.), baik yang berorientasi pasar lokal maupun global akan berhadapan dengan tuntutan kualitas produk dan kelestarian lingkungan selain tentunya kuantitas produksi.&nbsp;<br></span><div>Untuk dapat tumbuh dengan baik maka sawit membutuhkan Lama penyinaran matahari rata-rata 5-7 jam/hari. Curah hujan tahunan 1.500-4.000 mm. Temperatur optimal 24-280C. Ketinggian tempat yang ideal antara 1-500 m dpl. Kecepatan angin 5-6 km/jam untuk membantu proses penyerbukan.</div><div><br></div><div>Tanah yang baik mengandung banyak lempung, beraerasi baik dan subur. Berdrainase baik, permukaan air tanah cukup dalam, solum cukup dalam (80 cm), pH tanah 4-6, dan tanah tidak berbatu. Tanah Latosol, Ultisol dan Aluvial, tanah gambut saprik, dataran pantai dan muara sungai dapat dijadikan perkebunan kelapa sawit.</div><div><br></div><div>Berikut akan diuraikan cara menanam kelapa sawit yang efektif.</div><div><br></div><div>Pertama yang harus kita ketahui adalah&nbsp;<u><span>jenis - jenis bibit&nbsp;<a target="_blank" rel="nofollow" href="http://www.blogger.com/goog_61660133">kelapa sawi</a></span><a target="_blank" rel="nofollow" href="http://konsultasisawit.blogspot.com/2012/01/jenis-kelapa-sawit-unggul.html">t</a></u>&nbsp;yang unggul dimana sudah di ulas dalam artikel sebelumnya karena kita akan bergantung pada&nbsp;<a target="_blank" rel="nofollow" href="http://konsultasisawit.blogspot.com/2011/08/produksi-kelapa-sawit.html">produksi kelapa sawit</a>&nbsp;tersebut selama 25 tahun sehingga jika bibit tidak baik maka kita akan merugi selama 25 tahun tersebut</div><div><br></div><div>Kedua adalah sistem&nbsp;<a target="_blank" rel="nofollow" href="http://konsultasisawit.blogspot.com/2011/07/pembibitan-kelapa-sawit.html">pembersihan lahan kelapa sawit</a>&nbsp;atau sering disebut dengan istilah land clearing anda juga dapat membacanya dalam artikel sebelumnya</div><div><br></div><div>Ketiga adalah bagaimana cara&nbsp;<a target="_blank" rel="nofollow" href="http://konsultasisawit.blogspot.com/2011/07/pembibitan-kelapa-sawit.html">membibibitkan kelapa sawit</a>&nbsp;yang benar sebab jika di pembibitan tidak baik maka bibit yang di tanam akan kurang bagus sebab akan lama stagnan.</div>', '2016-06-02', '9_13936337821293320679.jpg', 'bcd', 'as.jpg', 'Oil Palm Cultivation', '<div>in this article will discuss how to plant oil palm neighbor efficiently so that the cost required would be lower. Nowadays agribusiness palm (Elaeis guineensis Jacq.), Both oriented local and global markets will be faced with the demands of product quality and environmental sustainability in addition to the quantity of production.</div><div>To grow well, the oil requires Lama sun shines an average of 5-7 hours / day. Annual rainfall of 1500-4000 mm. Optimal temperature 24-280C. The ideal altitude between 1-500 m above sea level. The wind speed of 5-6 km / h to help the process of pollination.</div><div><br></div><div>Good soil contains a lot of clay, aerated and fertile. Well drained, the water table deep enough, solum enough in (80 cm), soil pH 4-6, and the soil is not rocky. Latosol soil, Ultisol and alluvial, peat soil sapric, coastal plains and river estuaries can be used as oil palm plantations.</div><div><br></div><div>The following will describe how to plant oil palm effective.</div><div><br></div><div>First we need to know is the kind - the kind of superior oil palm seedlings which are already in a pillowcase in a previous article because we will rely on palm oil production for 25 years so if the seed is not good then we will lose money for 25 years</div><div><br></div><div>The second is the cleaning system of oil palm land or often referred to as land clearing you can also read it in a previous article</div><div><br></div><div>The third is how membibibitkan right palm in the nursery because if not better then the seeds being planted will be less good because it will be a long stagnant.</div>', 'Oil Palm Cultivation'),
(10, 'Ingin Membeli Kebun Sawit, Baca Tips Ini Agar Tidak Nyesal !', '<p>Bagi sebagian besar masyarakat Sumatera tentunya sudah tidak asing lagi dengan bisnis perkebunan kelapa sawit. Bisnis budidaya kelapa sawit sudah dikenal luas dan menjadi primadona bagi sebagian besar masyarakat Sumatera khususnya di Riau. Bagaimana tidak, jika harga komoditi ini sedang baik petani bisa mendapatkan hasil panen kotor sebesar 2 juta rupiah/bulan dari setiap hektarnya untuk tanaman yang sudah berproduksi.</p><p>Dari waktu ke waktu pertumbuhan lahan kelapa sawit di Riau semakin tinggi sehingga banyak lahan yang terkonversi menjadi perkebunan kelapa sawit. Hal ini tentunya membuat ketersediaan lahan semakin menipis sehingga bagi anda yang baru ingin memulai tentunya harus menyiapkan dana lebih untuk membeli lahan kosong.</p><p>Saat ini untuk memulai bisnis perkebunan kelapa sawit setidaknya anda membutuhkan waktu kurang lebih empat tahun sebelum tanaman kelapa sawit anda berproduksi dan dapat dipanen atau sering disebut TM (tanaman menghasilkan), selama masa tanaman belum menghasilkan (TBM) anda tentunya harus terus memberikan perawatan yang baik agar hasilnya baik.</p><p>Beruntungnya bagi anda yang tidak suka menunggu terlalu lama dimulai dari penanaman sampai dengan panen anda dapat membeli kebun sawit yang telah menghasilkan. Ada cukup banyak kebun sawit di jual dipasaran oleh pemiliknya, dan harganya pun bervariasi tergantung lokasi dan jenis tanahnya.</p>', '2016-06-01', '10_12662666_970663963021516_716918815545948865_n.jpg', 'Ingin Membeli Kebun Sawit, Baca Tips Ini Agar Tidak Nyesal !', '77panensawit-yus.jpg', 'Want to Buy Oil Palm Plantations, Read Tips For THIS IS NOT sorry!', '<div>For most people of Sumatra course, already familiar with the business of oil palm plantations. The business of oil palm cultivation is already widely known and to be excellent for the majority of the people of Sumatra, especially in Riau. How not, if the price of this commodity were both farmers can earn gross yield of 2 million rupiah / month from each hectare of crops already in production.</div><div><br></div><div>From time to time the growth of oil palm plantations in Riau is getting high so much land is converted into oil palm plantations. This obviously makes dwindling availability of land so that those of you who want to start a new course must be set aside for the purchase of vacant land.</div><div><br></div><div>This time to launch palm oil business at least you took less than four years before the oil palm crop you produce and can be harvested or often called TM (crop yield), during the period of immature plants (TBM) you certainly have to continue to provide good care so that the results are good.</div><div><br></div><div>Fortunately for those of you who do not like to wait too long starting from planting to harvest, you can buy oil palm plantations have produced. There are quite a lot of oil palm plantations in sold in the market by its owner, and the price varies depending on the location and type of soil.</div>', 'Want to Buy Oil Palm Plantations, Read Tips For THIS IS NOT sorry!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed_m`
--

CREATE TABLE IF NOT EXISTS `sosmed_m` (
`id_sosmed` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_logo` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `urutan` int(11) NOT NULL,
  `status` enum('active','nonactive') NOT NULL,
  `pengikut` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sosmed_m`
--

INSERT INTO `sosmed_m` (`id_sosmed`, `nama`, `id_logo`, `link`, `urutan`, `status`, `pengikut`) VALUES
(2, 'Twitter', 2, 'https://twitter.com/sylvi_agus', 2, 'active', '26'),
(6, 'Facebook', 8, 'https://www.facebook.com/relawanagus/?fref=ts', 1, 'active', '172');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor_m`
--

CREATE TABLE IF NOT EXISTS `sponsor_m` (
`id_sponsor` int(11) NOT NULL,
  `nama_sponsor` varchar(255) NOT NULL,
  `image_sponsor` varchar(200) NOT NULL,
  `awal_kontrak` date NOT NULL,
  `akhir_kontrak` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `urutan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sponsor_m`
--

INSERT INTO `sponsor_m` (`id_sponsor`, `nama_sponsor`, `image_sponsor`, `awal_kontrak`, `akhir_kontrak`, `status`, `urutan`) VALUES
(29, 'Musim Mas', '29_musimaslogo.png', '2016-10-01', '2016-10-07', 'aktif', '1'),
(31, 'Bank Sinarmas', '31_logo-sinarmas-bank.png', '2016-10-01', '2016-10-07', 'aktif', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_kota_m`
--

CREATE TABLE IF NOT EXISTS `spt_kota_m` (
  `id_kota` int(11) unsigned NOT NULL,
  `id_propinsi` int(11) unsigned NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spt_kota_m`
--

INSERT INTO `spt_kota_m` (`id_kota`, `id_propinsi`, `nama_kota`, `mdb`, `mdd`) VALUES
(1101, 11, 'Kab. Aceh Selatan', 1, '2016-08-09 07:30:25'),
(1102, 11, 'Kab. Aceh Tenggara', 1, '2010-07-04 18:45:27'),
(1103, 11, 'Kab. Aceh Timur', 1, '2010-07-04 18:45:27'),
(1104, 11, 'Kab. Aceh Tengah', 1, '2010-07-04 18:45:27'),
(1107, 11, 'Kab. Pidie', 1, '2010-07-04 18:45:27'),
(1108, 11, 'Kab. Aceh Utara', 1, '2010-07-04 18:45:27'),
(1109, 11, 'Kab. Simeulue', 1, '2010-07-04 18:45:27'),
(1110, 11, 'Kab. Aceh Singkil', 1, '2010-07-04 18:45:27'),
(1111, 11, 'Kab. Bireuen', 1, '2010-07-04 18:45:27'),
(1113, 11, 'Kab. Gayo Lues', 1, '2010-07-04 18:45:27'),
(1114, 11, 'Kab. Aceh Jaya', 1, '2010-07-04 18:45:27'),
(1115, 11, 'Kab. Nagan Raya', 1, '2010-07-04 18:45:27'),
(1116, 11, 'Kab. Aceh Tamiang', 1, '2010-07-04 18:45:27'),
(1117, 11, 'Kab. Bener Meriah', 1, '2010-07-04 18:45:27'),
(1171, 11, 'Kota Banda Aceh', 1, '2010-07-04 18:45:27'),
(1172, 11, 'Kota Sabang', 1, '2010-07-04 18:45:27'),
(1173, 11, 'Kota Lhokseumawe', 1, '2010-07-04 18:45:27'),
(1174, 11, 'Kota Langsa', 1, '2010-07-04 18:45:27'),
(1201, 12, 'Kab. Tapanuli Tengah', 1, '2010-07-04 18:45:27'),
(1202, 12, 'Kab. Tapanuli Utara', 1, '2010-07-04 18:45:27'),
(1203, 12, 'Kab. Tapanuli Selatan', 1, '2010-07-04 18:45:27'),
(1204, 12, 'Kab. Nias', 1, '2010-07-04 18:45:27'),
(1205, 12, 'Kab. Langkat', 1, '2010-07-04 18:45:27'),
(1206, 12, 'Kab. Karo', 1, '2010-07-04 18:45:27'),
(1207, 12, 'Kab. Deli Serdang', 1, '2010-07-04 18:45:27'),
(1208, 12, 'Kab. Simalungun', 1, '2010-07-04 18:45:27'),
(1209, 12, 'Kab. Asahan', 1, '2010-07-04 18:45:27'),
(1210, 12, 'Kab. Labuhan Batu', 1, '2010-07-04 18:45:27'),
(1211, 12, 'Kab. Dairi', 1, '2010-07-04 18:45:27'),
(1212, 12, 'Kab. Toba Samosir', 1, '2010-07-04 18:45:27'),
(1213, 12, 'Kab. Mandailing Natal', 1, '2010-07-04 18:45:27'),
(1214, 12, 'Kab. Nias Selatan', 1, '2010-07-04 18:45:27'),
(1215, 12, 'Kab. Pakpak Barat', 1, '2010-07-04 18:45:27'),
(1216, 12, 'Kab. Humbang Hasundutan', 1, '2010-07-04 18:45:27'),
(1217, 12, 'Kab. Samosir', 1, '2010-07-04 18:45:27'),
(1218, 12, 'Kab. Serdang Begadai', 1, '2010-07-04 18:45:27'),
(1271, 12, 'Kota Medan', 1, '2010-07-04 18:45:27'),
(1272, 12, 'Kota Pematang Siantar', 1, '2010-07-04 18:45:27'),
(1273, 12, 'Kota Sibolga', 1, '2010-07-04 18:45:27'),
(1274, 12, 'Kota Tanjung Balai', 1, '2010-07-04 18:45:27'),
(1275, 12, 'Kota Binjai', 1, '2010-07-04 18:45:27'),
(1276, 12, 'Kota Tebing Tinggi', 1, '2010-07-04 18:45:27'),
(1277, 12, 'Kota Padang Sidempuan', 1, '2010-07-04 18:45:27'),
(1301, 13, 'Kab. Pesisir Selatan', 1, '2010-07-04 18:45:27'),
(1302, 13, 'Kab. Solok', 1, '2010-07-04 18:45:27'),
(1303, 13, 'Kab. Sawah Lunto Sijunjung', 1, '2010-07-04 18:45:27'),
(1304, 13, 'Kab. Tanah Datar', 1, '2010-07-04 18:45:27'),
(1305, 13, 'Kab. Padang Pariaman', 1, '2010-07-04 18:45:27'),
(1306, 13, 'Kab. Agam', 1, '2010-07-04 18:45:27'),
(1307, 13, 'Kab. Limapuluh Kota', 1, '2010-07-04 18:45:27'),
(1308, 13, 'Kab. Pasaman', 1, '2010-07-04 18:45:27'),
(1309, 13, 'Kab. Kepulauan Mentawi', 1, '2010-07-04 18:45:27'),
(1310, 13, 'Kab. Dharmasraya', 1, '2010-07-04 18:45:27'),
(1311, 13, 'Kab. Solok Selatan', 1, '2010-07-04 18:45:27'),
(1312, 13, 'Kab. Pasaman Barat', 1, '2010-07-04 18:45:27'),
(1371, 13, 'Kota Padang', 1, '2010-07-04 18:45:27'),
(1372, 13, 'Kota Solok', 1, '2010-07-04 18:45:27'),
(1373, 13, 'Kota Sawah Lunto', 1, '2010-07-04 18:45:27'),
(1374, 13, 'Kota Padang Panjang', 1, '2010-07-04 18:45:27'),
(1375, 13, 'Kota Bukit Tinggi', 1, '2010-07-04 18:45:27'),
(1376, 13, 'Kota Payakumbuh', 1, '2010-07-04 18:45:27'),
(1377, 13, 'Kota Pariaman', 1, '2010-07-04 18:45:27'),
(1401, 14, 'Kab. Kampar', 1, '2010-07-04 18:45:27'),
(1402, 14, 'Kab. Indragiri Ulu', 1, '2010-07-04 18:45:27'),
(1403, 14, 'Kab. Bengkalis', 1, '2010-07-04 18:45:27'),
(1404, 14, 'Kab. Indragiri Hilir', 1, '2010-07-04 18:45:27'),
(1405, 14, 'Kab. Pelalawan', 1, '2010-07-04 18:45:27'),
(1406, 14, 'Kab. Rokan Hulu', 1, '2010-07-04 18:45:27'),
(1407, 14, 'Kab. Rokan Hilir', 1, '2010-07-04 18:45:27'),
(1408, 14, 'Kab. Siak', 1, '2010-07-04 18:45:27'),
(1409, 14, 'Kab. Kuantan Singingi', 1, '2010-07-04 18:45:27'),
(1471, 14, 'Kota Pekanbaru', 1, '2010-07-04 18:45:27'),
(1472, 14, 'Kota Dumai', 1, '2010-07-04 18:45:27'),
(1501, 15, 'Kab. Kerinci', 1, '2010-07-04 18:45:27'),
(1502, 15, 'Kab. Merangin', 1, '2010-07-04 18:45:27'),
(1503, 15, 'Kab. Sarolangun', 1, '2010-07-04 18:45:27'),
(1504, 15, 'Kab. Batanghari', 1, '2010-07-04 18:45:27'),
(1505, 15, 'Kab. Muaro Jambi', 1, '2010-07-04 18:45:27'),
(1506, 15, 'Kab. Tanjung Jabung Barat', 1, '2010-07-04 18:45:27'),
(1507, 15, 'Kab. Tanjung Jabung Timur', 1, '2010-07-04 18:45:27'),
(1508, 15, 'Kab. Bungo', 1, '2010-07-04 18:45:27'),
(1509, 15, 'Kab. Tebo', 1, '2010-07-04 18:45:27'),
(1571, 15, 'Kota Jambi', 1, '2010-07-04 18:45:27'),
(1601, 16, 'Kab. Ogan Komering Ulu', 1, '2010-07-04 18:45:27'),
(1602, 16, 'Kab. Ogan Komering Ilir', 1, '2010-07-04 18:45:27'),
(1603, 16, 'Kab. Muara Enim', 1, '2010-07-04 18:45:27'),
(1604, 16, 'Kab. Lahat', 1, '2010-07-04 18:45:27'),
(1605, 16, 'Kab. Musi Rawas', 1, '2010-07-04 18:45:27'),
(1606, 16, 'Kab. Musi Banyuasin', 1, '2010-07-04 18:45:27'),
(1607, 16, 'Kab. Banyuasin', 1, '2010-07-04 18:45:27'),
(1608, 16, 'Kab. Oku Timur', 1, '2010-07-04 18:45:27'),
(1609, 16, 'Kab. Oku Selatan', 1, '2010-07-04 18:45:27'),
(1610, 16, 'Kab. Ogan Ilir', 1, '2010-07-04 18:45:27'),
(1671, 16, 'Kota Palembang', 1, '2010-07-04 18:45:27'),
(1672, 16, 'Kota Pagaralam', 1, '2010-07-04 18:45:27'),
(1673, 16, 'Kota Lubuklinggau', 1, '2010-07-04 18:45:27'),
(1674, 16, 'Kota Prabumulih', 1, '2010-07-04 18:45:27'),
(1701, 17, 'Kab. Bengkulu Selatan', 1, '2010-07-04 18:45:27'),
(1702, 17, 'Kab. Rejanglebong', 1, '2010-07-04 18:45:27'),
(1703, 17, 'Kab. Bengkulu Utara', 1, '2010-07-04 18:45:27'),
(1704, 17, 'Kab. Kaur', 1, '2010-07-04 18:45:27'),
(1705, 17, 'Kab. Seluma', 1, '2010-07-04 18:45:27'),
(1706, 17, 'Kab. Muko Muko', 1, '2010-07-04 18:45:27'),
(1707, 17, 'Kab. Lebong', 1, '2010-07-04 18:45:27'),
(1708, 17, 'Kab. Kepahiang', 1, '2010-07-04 18:45:27'),
(1771, 17, 'Kota Bengkulu', 1, '2010-07-04 18:45:27'),
(1801, 18, 'Kab. Lampung Selatan', 1, '2010-07-04 18:45:27'),
(1802, 18, 'Kab. Lampung Tengah', 1, '2010-07-04 18:45:27'),
(1803, 18, 'Kab. Lampung Utara', 1, '2010-07-04 18:45:27'),
(1804, 18, 'Kab. Lampung Barat', 1, '2010-07-04 18:45:27'),
(1805, 18, 'Kab. Tulang Bawang', 1, '2010-07-04 18:45:27'),
(1806, 18, 'Kab. Tanggamus', 1, '2010-07-04 18:45:27'),
(1807, 18, 'Kab. Lampung Timur', 1, '2010-07-04 18:45:27'),
(1808, 18, 'Kab. Way Kanan', 1, '2010-07-04 18:45:27'),
(1871, 18, 'Kota Bandar Lampung', 1, '2010-07-04 18:45:27'),
(1872, 18, 'Kota Metro', 1, '2010-07-04 18:45:27'),
(1901, 19, 'Kab. Bangka', 1, '2010-07-04 18:45:27'),
(1902, 19, 'Kab. Belitung', 1, '2010-07-04 18:45:27'),
(1903, 19, 'Kab. Bangka Selatan', 1, '2010-07-04 18:45:27'),
(1904, 19, 'Kab. Bangka Tengah', 1, '2010-07-04 18:45:27'),
(1905, 19, 'Kab. Bangka Barat', 1, '2010-07-04 18:45:27'),
(1906, 19, 'Kab. Bangka Timur', 1, '2010-07-04 18:45:27'),
(1971, 19, 'Kota Pangkal Pinang', 1, '2010-07-04 18:45:27'),
(2101, 21, 'Kab. Kepulauan Anamas', 1, '2010-07-04 18:45:27'),
(2102, 21, 'Kab. Karimun', 1, '2010-07-04 18:45:27'),
(2103, 21, 'Kab. Natuna', 1, '2010-07-04 18:45:27'),
(2104, 21, 'Kab. Lingga', 1, '2010-07-04 18:45:27'),
(2105, 21, 'Kota Batam', 1, '2010-07-04 18:45:27'),
(2106, 21, 'Kota Tanjung Pinang', 1, '2010-07-04 18:45:27'),
(3101, 31, 'Kab. Adm', 1, '2010-07-04 18:45:27'),
(3171, 31, 'Jakarta Pusat', 1, '2010-07-04 18:45:27'),
(3172, 31, 'Jakarta Utara', 1, '2010-07-04 18:45:27'),
(3173, 31, 'Jakarta Barat', 1, '2010-07-04 18:45:27'),
(3174, 31, 'Jakarta Selatan', 1, '2010-07-04 18:45:27'),
(3175, 31, 'Jakarta Timur', 1, '2010-07-04 18:45:27'),
(3201, 32, 'Kab. Bogor', 1, '2010-07-04 18:45:27'),
(3202, 32, 'Kab. Sukabumi', 1, '2010-07-04 18:45:27'),
(3203, 32, 'Kab. Cianjur', 1, '2010-07-04 18:45:27'),
(3204, 32, 'Kab. Bandung', 1, '2010-07-04 18:45:27'),
(3205, 32, 'Kab. Garut', 1, '2010-07-04 18:45:27'),
(3206, 32, 'Kab. Tasikmalaya', 1, '2010-07-04 18:45:27'),
(3207, 32, 'Kab. Ciamis', 1, '2010-07-04 18:45:27'),
(3208, 32, 'Kab. Kuningan', 1, '2010-07-04 18:45:27'),
(3209, 32, 'Kab. Cirebon', 1, '2010-07-04 18:45:27'),
(3210, 32, 'Kab. Majalengka', 1, '2010-07-04 18:45:27'),
(3211, 32, 'Kab. Sumedang', 1, '2010-07-04 18:45:27'),
(3212, 32, 'Kab. Indramayu', 1, '2010-07-04 18:45:27'),
(3213, 32, 'Kab. Subang', 1, '2010-07-04 18:45:27'),
(3214, 32, 'Kab. Purwakarta', 1, '2010-07-04 18:45:27'),
(3215, 32, 'Kab. Karawang', 1, '2010-07-04 18:45:27'),
(3216, 32, 'Kab. Bekasi', 1, '2010-07-04 18:45:27'),
(3271, 32, 'Kota Bogor', 1, '2010-07-04 18:45:27'),
(3272, 32, 'Kota Sukabumi', 1, '2010-07-04 18:45:27'),
(3273, 32, 'Kota Bandung', 1, '2010-07-04 18:45:27'),
(3274, 32, 'Kota Cirebon', 1, '2010-07-04 18:45:27'),
(3275, 32, 'Kota Bekasi', 1, '2010-07-04 18:45:27'),
(3276, 32, 'Kota Depok', 1, '2010-07-04 18:45:27'),
(3277, 32, 'Kota Cimahi', 1, '2010-07-04 18:45:27'),
(3278, 32, 'Kota Tasikmalaya', 1, '2010-07-04 18:45:27'),
(3279, 32, 'Kota Banjar', 1, '2010-07-04 18:45:27'),
(3301, 33, 'Kab. Cilacap', 1, '2010-07-04 18:45:27'),
(3302, 33, 'Kab. Banyumas', 1, '2010-07-04 18:45:27'),
(3303, 33, 'Kab. Purbalingga', 1, '2010-07-04 18:45:27'),
(3304, 33, 'Kab. Banjarnegara', 1, '2010-07-04 18:45:27'),
(3305, 33, 'Kab. Kebumen', 1, '2010-07-04 18:45:27'),
(3306, 33, 'Kab. Purworejo', 1, '2010-07-04 18:45:27'),
(3307, 33, 'Kab. Wonosobo', 1, '2010-07-04 18:45:27'),
(3308, 33, 'Kab. Magelang', 1, '2010-07-04 18:45:27'),
(3309, 33, 'Kab. Boyolali', 1, '2010-07-04 18:45:27'),
(3310, 33, 'Kab. Klaten', 1, '2010-07-04 18:45:27'),
(3311, 33, 'Kab. Sukoharjo', 1, '2010-07-04 18:45:27'),
(3312, 33, 'Kab. Wonogiri', 1, '2010-07-04 18:45:27'),
(3313, 33, 'Kab. Karanganyar', 1, '2010-07-04 18:45:27'),
(3314, 33, 'Kab. Sragen', 1, '2010-07-04 18:45:27'),
(3315, 33, 'Kab. Grobogan', 1, '2010-07-04 18:45:27'),
(3316, 33, 'Kab. Blora', 1, '2010-07-04 18:45:27'),
(3317, 33, 'Kab. Rembang', 1, '2010-07-04 18:45:27'),
(3318, 33, 'Kab. Pati', 1, '2010-07-04 18:45:27'),
(3319, 33, 'Kab. Kudus', 1, '2010-07-04 18:45:27'),
(3320, 33, 'Kab. Jepara', 1, '2010-07-04 18:45:27'),
(3321, 33, 'Kab. Demak', 1, '2010-07-04 18:45:27'),
(3322, 33, 'Kab. Semarang', 1, '2010-07-04 18:45:27'),
(3323, 33, 'Kab. Temanggung', 1, '2010-07-04 18:45:27'),
(3324, 33, 'Kab. Kendal', 1, '2010-07-04 18:45:27'),
(3325, 33, 'Kab. Batang', 1, '2010-07-04 18:45:27'),
(3326, 33, 'Kab. Pekalongan', 1, '2010-07-04 18:45:27'),
(3327, 33, 'Kab. Pemalang', 1, '2010-07-04 18:45:27'),
(3328, 33, 'Kab. Tegal', 1, '2010-07-04 18:45:27'),
(3329, 33, 'Kab. Brebes', 1, '2010-07-04 18:45:27'),
(3371, 33, 'Kota Magelang', 1, '2010-07-04 18:45:27'),
(3372, 33, 'Kota Surakarta', 1, '2010-07-04 18:45:27'),
(3373, 33, 'Kota Salatiga', 1, '2010-07-04 18:45:27'),
(3374, 33, 'Kota Semarang', 1, '2010-07-04 18:45:27'),
(3375, 33, 'Kota Pekalongan', 1, '2010-07-04 18:45:27'),
(3376, 33, 'Kota Tegal', 1, '2010-07-04 18:45:27'),
(3401, 34, 'Kab. Kulon Progo', 1, '2010-07-04 18:45:27'),
(3402, 34, 'Kab. Bantul', 1, '2010-07-04 18:45:27'),
(3403, 34, 'Kab. Gunung Kidul', 1, '2010-07-04 18:45:27'),
(3404, 34, 'Kab. Sleman', 1, '2010-07-04 18:45:27'),
(3471, 34, 'Kota Yogyakarta', 1, '2010-07-04 18:45:27'),
(3501, 35, 'Kab. Pacitan', 1, '2010-07-04 18:45:27'),
(3502, 35, 'Kab. Ponorogo', 1, '2010-07-04 18:45:27'),
(3503, 35, 'Kab. Trenggalek', 1, '2010-07-04 18:45:27'),
(3504, 35, 'Kab. Tulungagung', 1, '2010-07-04 18:45:27'),
(3505, 35, 'Kab. Blitar', 1, '2010-07-04 18:45:27'),
(3506, 35, 'Kab. Kediri', 1, '2010-07-04 18:45:27'),
(3507, 35, 'Kab. Malang', 1, '2010-07-04 18:45:27'),
(3508, 35, 'Kab. Lumajang', 1, '2010-07-04 18:45:27'),
(3509, 35, 'Kab. Jember', 1, '2010-07-04 18:45:27'),
(3510, 35, 'Kab. Banyuwangi', 1, '2010-07-04 18:45:27'),
(3511, 35, 'Kab. Bondowoso', 1, '2010-07-04 18:45:27'),
(3512, 35, 'Kab. Situbondo', 1, '2010-07-04 18:45:27'),
(3513, 35, 'Kab. Probolinggo', 1, '2010-07-04 18:45:27'),
(3514, 35, 'Kab. Pasuruan', 1, '2010-07-04 18:45:27'),
(3515, 35, 'Kab. Sidoarjo', 1, '2010-07-04 18:45:27'),
(3516, 35, 'Kab. Mojokerto', 1, '2010-07-04 18:45:27'),
(3517, 35, 'Kab. Jombang', 1, '2010-07-04 18:45:27'),
(3518, 35, 'Kab. Nganjuk', 1, '2010-07-04 18:45:27'),
(3519, 35, 'Kab. Madiun', 1, '2010-07-04 18:45:27'),
(3520, 35, 'Kab. Magetan', 1, '2010-07-04 18:45:27'),
(3521, 35, 'Kab. Ngawi', 1, '2010-07-04 18:45:27'),
(3522, 35, 'Kab. Bojonegoro', 1, '2010-07-04 18:45:27'),
(3523, 35, 'Kab. Tuban', 1, '2010-07-04 18:45:27'),
(3524, 35, 'Kab. Lamongan', 1, '2010-07-04 18:45:27'),
(3525, 35, 'Kab. Gresik', 1, '2010-07-04 18:45:27'),
(3526, 35, 'Kab. Bangkalan', 1, '2010-07-04 18:45:27'),
(3527, 35, 'Kab. Sampang', 1, '2010-07-04 18:45:27'),
(3528, 35, 'Kab. Pamekasan', 1, '2010-07-04 18:45:27'),
(3529, 35, 'Kab. Sumenep', 1, '2010-07-04 18:45:27'),
(3571, 35, 'Kota Kediri', 1, '2010-07-04 18:45:27'),
(3572, 35, 'Kota Blitar', 1, '2010-07-04 18:45:27'),
(3573, 35, 'Kota Malang', 1, '2010-07-04 18:45:27'),
(3574, 35, 'Kota Probolinggo', 1, '2010-07-04 18:45:27'),
(3575, 35, 'Kota Pasuruan', 1, '2010-07-04 18:45:27'),
(3576, 35, 'Kota Mojokerto', 1, '2010-07-04 18:45:27'),
(3577, 35, 'Kota Madiun', 1, '2010-07-04 18:45:27'),
(3578, 35, 'Kota Surabaya', 1, '2010-07-04 18:45:27'),
(3579, 35, 'Kota Batu', 1, '2010-07-04 18:45:27'),
(3601, 36, 'Kab. Pandeglang', 1, '2010-07-04 18:45:27'),
(3602, 36, 'Kab. Lebak', 1, '2010-07-04 18:45:27'),
(3603, 36, 'Kab. Tangerang', 1, '2010-07-04 18:45:27'),
(3604, 36, 'Kab. Serang', 1, '2010-07-04 18:45:27'),
(3671, 36, 'Kota Tangerang', 1, '2010-07-04 18:45:27'),
(3672, 36, 'Kota Cilegon', 1, '2010-07-04 18:45:27'),
(5101, 51, 'Kab. Jembrana', 1, '2010-07-04 18:45:27'),
(5102, 51, 'Kab. Tabanan', 1, '2010-07-04 18:45:27'),
(5103, 51, 'Kab. Badung', 1, '2010-07-04 18:45:27'),
(5104, 51, 'Kab. Gianyar', 1, '2010-07-04 18:45:27'),
(5105, 51, 'Kab. Klungkung', 1, '2010-07-04 18:45:27'),
(5106, 51, 'Kab. Bangli', 1, '2010-07-04 18:45:27'),
(5107, 51, 'Kab. Karangasem', 1, '2010-07-04 18:45:27'),
(5108, 51, 'Kab. Buleleng', 1, '2010-07-04 18:45:27'),
(5171, 51, 'Kota Denpasar', 1, '2010-07-04 18:45:27'),
(5201, 52, 'Kab. Lombok Barat', 1, '2010-07-04 18:45:27'),
(5202, 16, 'Kab. Empat Lawang', 1, '2010-07-04 18:45:27'),
(5203, 18, 'Kab. Mesuji', 1, '2010-07-04 18:45:27'),
(5204, 18, 'Kab. Pesawaran', 1, '2010-07-04 18:45:27'),
(5205, 18, 'Kab. Pringsewu', 1, '2010-07-04 18:45:27'),
(5206, 18, 'Kab. Tulang Bawang Barat', 1, '2010-07-04 18:45:27'),
(5208, 21, 'Kab. Bintan', 1, '2010-07-04 18:45:27'),
(5209, 32, 'Kab. Bandung Barat', 1, '2010-07-04 18:45:27'),
(5210, 36, 'Kota Serang', 1, '2010-07-04 18:45:27'),
(5211, 36, 'Kota Tangerang Selatan', 1, '2010-07-04 18:45:27'),
(5212, 52, 'Kab. Bima', 1, '2010-07-04 18:45:27'),
(5213, 52, 'Kab. Dompu', 1, '2010-07-04 18:45:27'),
(5214, 52, 'Kab. Lombok Tengah', 1, '2010-07-04 18:45:27'),
(5215, 52, 'Kab. Lombok Timur', 1, '2010-07-04 18:45:27'),
(5216, 52, 'Kab. Sumbawa', 1, '2010-07-04 18:45:27'),
(5217, 52, 'Kab. Sumbawa Barat', 1, '2010-07-04 18:45:27'),
(5218, 52, 'Kota Mataram', 1, '2010-07-04 18:45:27'),
(5219, 52, 'Kota Bima', 1, '2010-07-04 18:45:27'),
(5220, 53, 'Kab. Alor', 1, '2010-07-04 18:45:27'),
(5221, 53, 'Kab. Belu', 1, '2010-07-04 18:45:27'),
(5222, 53, 'Kab. Ende', 1, '2010-07-04 18:45:27'),
(5223, 53, 'Kab. Flores Timur', 1, '2010-07-04 18:45:27'),
(5224, 53, 'Kab. Kupang', 1, '2010-07-04 18:45:27'),
(5225, 53, 'Kab. Lembata', 1, '2010-07-04 18:45:27'),
(5226, 53, 'Kab. Manggarai', 1, '2010-07-04 18:45:27'),
(5227, 53, 'Kab. Manggarai Barat', 1, '2010-07-04 18:45:27'),
(5228, 53, 'Kab. Ngada', 1, '2010-07-04 18:45:27'),
(5229, 53, 'Kab. Rote Ndao', 1, '2010-07-04 18:45:27'),
(5230, 53, 'Kab. Sikka', 1, '2010-07-04 18:45:27'),
(5231, 53, 'Kab. Sumba Barat', 1, '2010-07-04 18:45:27'),
(5232, 53, 'Kab. Sumba Timur', 1, '2010-07-04 18:45:27'),
(5233, 53, 'Kab. Timor Tengah Selatan', 1, '2010-07-04 18:45:27'),
(5234, 53, 'Kab. Timor Tengah Utara', 1, '2010-07-04 18:45:27'),
(5235, 53, 'Kota Kupang', 1, '2010-07-04 18:45:27'),
(5236, 61, 'Kab. Bengkayang', 1, '2010-07-04 18:45:27'),
(5237, 61, 'Kab. Kapuas Hulu', 1, '2010-07-04 18:45:27'),
(5238, 61, 'Kab. Kayong Utara', 1, '2010-07-04 18:45:27'),
(5239, 61, 'Kab. Kubu Raya', 1, '2010-07-04 18:45:27'),
(5240, 61, 'Kab. Landak', 1, '2010-07-04 18:45:27'),
(5241, 61, 'Kab. Melawi', 1, '2010-07-04 18:45:27'),
(5242, 61, 'Kab. Pontianak', 1, '2010-07-04 18:45:27'),
(5243, 61, 'Kab. Sambas', 1, '2010-07-04 18:45:27'),
(5244, 61, 'Kab. Sanggau', 1, '2010-07-04 18:45:27'),
(5245, 61, 'Kab. Sekadau', 1, '2010-07-04 18:45:27'),
(5246, 61, 'Kab. Sintang', 1, '2010-07-04 18:45:27'),
(5247, 61, 'Kota Pontianak', 1, '2010-07-04 18:45:27'),
(5248, 61, 'Kota Singkawang', 1, '2010-07-04 18:45:27'),
(5249, 61, 'Kab. Ketapang', 1, '2010-07-04 18:45:27'),
(5250, 62, 'Kab. Barito Selatan', 1, '2010-07-04 18:45:27'),
(5251, 62, 'Kab. Barito Timur', 1, '2010-07-04 18:45:27'),
(5252, 62, 'Kab. Barito Utara', 1, '2010-07-04 18:45:27'),
(5253, 62, 'Kab. Gunung Mas', 1, '2010-07-04 18:45:27'),
(5254, 62, 'Kab. Kapuas', 1, '2010-07-04 18:45:27'),
(5255, 62, 'Kab. Katingan', 1, '2010-07-04 18:45:27'),
(5256, 62, 'Kab. Kotawaringin Barat', 1, '2010-07-04 18:45:27'),
(5257, 62, 'Kab. Kotawaringin Timur', 1, '2010-07-04 18:45:27'),
(5258, 62, 'Kab. Lamandau', 1, '2010-07-04 18:45:27'),
(5259, 62, 'Kab. Murung Raya', 1, '2010-07-04 18:45:27'),
(5260, 62, 'Kab. Pulang Pisau', 1, '2010-07-04 18:45:27'),
(5261, 62, 'Kab. Sukamara', 1, '2010-07-04 18:45:27'),
(5262, 62, 'Kab. Seruyan', 1, '2010-07-04 18:45:27'),
(5263, 62, 'Kota Palangka Raya', 1, '2010-07-04 18:45:27'),
(5264, 63, 'Kab. Balangan', 1, '2010-07-04 18:45:27'),
(5265, 63, 'Kab. Banjar', 1, '2010-07-04 18:45:27'),
(5266, 63, 'Kab. Barito Kuala', 1, '2010-07-04 18:45:27'),
(5267, 63, 'Kab. Hulu Sungai Selatan', 1, '2010-07-04 18:45:27'),
(5268, 63, 'Kab. Hulu Sungai Tengah', 1, '2010-07-04 18:45:27'),
(5269, 63, 'Kab. Hulu Sungai Utara', 1, '2010-07-04 18:45:27'),
(5270, 63, 'Kab. Kotabaru', 1, '2010-07-04 18:45:27'),
(5271, 63, 'Kab. Tabalong', 1, '2010-07-04 18:45:27'),
(5272, 63, 'Kab. Tanah Bumbu', 1, '2010-07-04 18:45:27'),
(5273, 63, 'Kab. Tanah Laut', 1, '2010-07-04 18:45:27'),
(5274, 63, 'Kab. Tapin', 1, '2010-07-04 18:45:27'),
(5275, 63, 'Kota Banjarbaru', 1, '2010-07-04 18:45:27'),
(5276, 63, 'Kota Banjarmasin', 1, '2010-07-04 18:45:27'),
(5277, 64, 'Kab. Berau', 1, '2010-07-04 18:45:27'),
(5278, 64, 'Kab. Bulungan', 1, '2010-07-04 18:45:27'),
(5279, 64, 'Kab. Kutai Barat', 1, '2010-07-04 18:45:27'),
(5280, 64, 'Kab. Kutai Kartanegara', 1, '2010-07-04 18:45:27'),
(5281, 64, 'Kab. Kutai Timur', 1, '2010-07-04 18:45:27'),
(5282, 64, 'Kab. Malinau', 1, '2010-07-04 18:45:27'),
(5283, 64, 'Kab. Nunukan', 1, '2010-07-04 18:45:27'),
(5284, 64, 'Kab. Paser', 1, '2010-07-04 18:45:27'),
(5285, 64, 'Kab. Penajam Paser Utara', 1, '2010-07-04 18:45:27'),
(5286, 64, 'Kab. Tana Tidung', 1, '2010-07-04 18:45:27'),
(5287, 64, 'Kota Balikpapan', 1, '2010-07-04 18:45:27'),
(5288, 64, 'Kota Bontang', 1, '2010-07-04 18:45:27'),
(5289, 64, 'Kota Samarinda', 1, '2010-07-04 18:45:27'),
(5290, 64, 'Kota Tarakan', 1, '2010-07-04 18:45:27'),
(5291, 71, 'Kab. Bolaang Mongondow', 1, '2010-07-04 18:45:27'),
(5292, 71, 'Kab. Bolaang Mongondow Selatan', 1, '2010-07-04 18:45:27'),
(5293, 71, 'Kab. Bolaang Mongondow Timur', 1, '2010-07-04 18:45:27'),
(5294, 71, 'Kab. Bolaang Mongondow Utara', 1, '2010-07-04 18:45:27'),
(5295, 71, 'Kab. Kepulauan Sangihe', 1, '2010-07-04 18:45:27'),
(5296, 71, 'Kab. Kepulauan Siau Tagulandan', 1, '2010-07-04 18:45:27'),
(5297, 71, 'Kab. Kepulauan Talaud', 1, '2010-07-04 18:45:27'),
(5298, 71, 'Kab. Minahasa', 1, '2010-07-04 18:45:27'),
(5299, 71, 'Kab. Minahasa Selatan', 1, '2010-07-04 18:45:27'),
(5300, 71, 'Kab. Minahasa Tenggara', 1, '2010-07-04 18:45:27'),
(5301, 71, 'Kab. Minahasa Utara', 1, '2010-07-04 18:45:27'),
(5302, 71, 'Kota Bitung', 1, '2010-07-04 18:45:27'),
(5303, 71, 'Kota Kotamobagu', 1, '2010-07-04 18:45:27'),
(5304, 71, 'Kota Manado', 1, '2010-07-04 18:45:27'),
(5305, 71, 'Kota Tomohon', 1, '2010-07-04 18:45:27'),
(5306, 72, 'Kab. Banggai', 1, '2010-07-04 18:45:27'),
(5307, 72, 'Kab. Banggai Kepulauan', 1, '2010-07-04 18:45:27'),
(5308, 72, 'Kab. Buol', 1, '2010-07-04 18:45:27'),
(5309, 72, 'Kab. Donggala', 1, '2010-07-04 18:45:27'),
(5310, 72, 'Kab. Morowali', 1, '2010-07-04 18:45:27'),
(5311, 72, 'Kab. Parigi Moutong', 1, '2010-07-04 18:45:27'),
(5312, 72, 'Kab. Poso', 1, '2010-07-04 18:45:27'),
(5313, 72, 'Kab. Tojo Una-Una', 1, '2010-07-04 18:45:27'),
(5314, 72, 'Kab. Toli-Toli', 1, '2010-07-04 18:45:27'),
(5315, 72, 'Kab. Sigi', 1, '2010-07-04 18:45:27'),
(5316, 72, 'Kota Palu', 1, '2010-07-04 18:45:27'),
(5317, 73, 'Kab. Bantaeng', 1, '2010-07-04 18:45:27'),
(5318, 73, 'Kab. Barru', 1, '2010-07-04 18:45:27'),
(5319, 73, 'Kab. Bone', 1, '2010-07-04 18:45:27'),
(5320, 73, 'Kab. Bulukumba', 1, '2010-07-04 18:45:27'),
(5321, 73, 'Kab. Enrekang', 1, '2010-07-04 18:45:27'),
(5322, 73, 'Kab. Gowa', 1, '2010-07-04 18:45:27'),
(5323, 73, 'Kab. Jeneponto', 1, '2010-07-04 18:45:27'),
(5324, 73, 'Kab. Kepulauan Selayar', 1, '2010-07-04 18:45:27'),
(5325, 73, 'Kab. Luwu', 1, '2010-07-04 18:45:27'),
(5326, 73, 'Kab. Luwu Timur', 1, '2010-07-04 18:45:27'),
(5327, 73, 'Kab. Luwu Utara', 1, '2010-07-04 18:45:27'),
(5328, 73, 'Kab. Maros', 1, '2010-07-04 18:45:27'),
(5329, 73, 'Kab. Pangkajene dan Kepulauan', 1, '2010-07-04 18:45:27'),
(5330, 73, 'Kab. Pinrang', 1, '2010-07-04 18:45:27'),
(5331, 73, 'Kab. Sidenreng Rappang', 1, '2010-07-04 18:45:27'),
(5332, 73, 'Kab. Sinjai', 1, '2010-07-04 18:45:27'),
(5333, 73, 'Kab. Soppeng', 1, '2010-07-04 18:45:27'),
(5334, 73, 'Kab. Takalar', 1, '2010-07-04 18:45:27'),
(5335, 73, 'Kab. Tana Toraja', 1, '2010-07-04 18:45:27'),
(5336, 73, 'Kab. Toraja Utara', 1, '2010-07-04 18:45:27'),
(5337, 73, 'Kab. Wajo', 1, '2010-07-04 18:45:27'),
(5338, 73, 'Kota Makassar', 1, '2010-07-04 18:45:27'),
(5339, 73, 'Kota Palopo', 1, '2010-07-04 18:45:27'),
(5340, 73, 'Kota Pare-Pare', 1, '2010-07-04 18:45:27'),
(5341, 74, 'Kab. Bombana', 1, '2010-07-04 18:45:27'),
(5342, 74, 'Kab. Buton', 1, '2010-07-04 18:45:27'),
(5343, 74, 'Kab. Buton Utara', 1, '2010-07-04 18:45:27'),
(5344, 74, 'Kab. Kolaka', 1, '2010-07-04 18:45:27'),
(5345, 74, 'Kab. Kolaka Utara', 1, '2010-07-04 18:45:27'),
(5346, 74, 'Kab. Konawe', 1, '2010-07-04 18:45:27'),
(5347, 74, 'Kab. Konawe Selatan', 1, '2010-07-04 18:45:27'),
(5348, 74, 'Kab. Konawe Utara', 1, '2010-07-04 18:45:27'),
(5349, 74, 'Kab. Muna', 1, '2010-07-04 18:45:27'),
(5350, 74, 'Kab. Wakatobi', 1, '2010-07-04 18:45:27'),
(5351, 74, 'Kota Bau-Bau', 1, '2010-07-04 18:45:27'),
(5352, 74, 'Kota Kendari', 1, '2010-07-04 18:45:27'),
(5353, 75, 'Kab. Boalemo', 1, '2010-07-04 18:45:27'),
(5354, 75, 'Kab. Bone Bolango', 1, '2010-07-04 18:45:27'),
(5355, 75, 'Kab. Gorontalo', 1, '2010-07-04 18:45:27'),
(5356, 75, 'Kab. Gorontalo Utara', 1, '2010-07-04 18:45:27'),
(5357, 75, 'Kab. Pohuwato', 1, '2010-07-04 18:45:27'),
(5358, 75, 'Kota Gorontalo', 1, '2010-07-04 18:45:27'),
(5359, 76, 'Kab. Majene', 1, '2010-07-04 18:45:27'),
(5360, 76, 'Kab. Mamasa', 1, '2010-07-04 18:45:27'),
(5361, 76, 'Kab. Mamuju', 1, '2010-07-04 18:45:27'),
(5362, 76, 'Kab. Mamuju Utara', 1, '2010-07-04 18:45:27'),
(5363, 76, 'Kab. Polewali Mandar', 1, '2010-07-04 18:45:27'),
(5364, 81, 'Kab. Buru', 1, '2010-07-04 18:45:27'),
(5365, 81, 'Kab. Buru Selatan', 1, '2010-07-04 18:45:27'),
(5366, 81, 'Kab. Kepulauan Aru', 1, '2010-07-04 18:45:27'),
(5367, 81, 'Kab. Maluku Barat Daya', 1, '2010-07-04 18:45:27'),
(5368, 81, 'Kab. Maluku Tengah', 1, '2010-07-04 18:45:27'),
(5369, 81, 'Kab. Maluku Tenggara', 1, '2010-07-04 18:45:27'),
(5370, 81, 'Kab. Maluku Tenggara Barat', 1, '2010-07-04 18:45:27'),
(5371, 81, 'Kab. Seram Bagian Barat', 1, '2010-07-04 18:45:27'),
(5372, 81, 'Kab. Seram Bagian Timur', 1, '2010-07-04 18:45:27'),
(5373, 81, 'Kota Ambon', 1, '2010-07-04 18:45:27'),
(5374, 81, 'Kota Tual', 1, '2010-07-04 18:45:27'),
(5375, 82, 'Kab. Halmahera Barat', 1, '2010-07-04 18:45:27'),
(5376, 82, 'Kab. Halmahera Tengah', 1, '2010-07-04 18:45:27'),
(5377, 82, 'Kab. Halmahera Utara', 1, '2010-07-04 18:45:27'),
(5378, 82, 'Kab. Halmahera Selatan', 1, '2010-07-04 18:45:27'),
(5379, 82, 'Kab. Kepulauan Sula', 1, '2010-07-04 18:45:27'),
(5380, 82, 'Kab. Halmahera Timur', 1, '2010-07-04 18:45:27'),
(5381, 82, 'Kab. Pulau Morotai', 1, '2010-07-04 18:45:27'),
(5382, 82, 'Kota Ternate', 1, '2010-07-04 18:45:27'),
(5383, 82, 'Kota Tidore Kepulauan', 1, '2010-07-04 18:45:27'),
(5384, 92, 'Kab. Fakfak', 1, '2010-07-04 18:45:27'),
(5385, 92, 'Kab. Kaimana', 1, '2010-07-04 18:45:27'),
(5386, 92, 'Kab. Manokwari', 1, '2010-07-04 18:45:27'),
(5387, 92, 'Kab. Maybrat', 1, '2010-07-04 18:45:27'),
(5388, 92, 'Kab. Raja Ampat', 1, '2010-07-04 18:45:27'),
(5389, 92, 'Kab. Sorong', 1, '2010-07-04 18:45:27'),
(5390, 92, 'Kab. Sorong Selatan', 1, '2010-07-04 18:45:27'),
(5391, 92, 'Kab. Tambrauw', 1, '2010-07-04 18:45:27'),
(5392, 92, 'Kab. Teluk Bintuni', 1, '2010-07-04 18:45:27'),
(5393, 92, 'Kab. Teluk Wondama', 1, '2010-07-04 18:45:27'),
(5394, 92, 'Kota Sorong', 1, '2010-07-04 18:45:27'),
(5395, 91, 'Kab. Asmat', 1, '2010-07-04 18:45:27'),
(5396, 91, 'Kab. Biak Numfor', 1, '2010-07-04 18:45:27'),
(5397, 91, 'Kab. Boven Digoel', 1, '2010-07-04 18:45:27'),
(5398, 91, 'Kab. Deiyai', 1, '2010-07-04 18:45:27'),
(5399, 91, 'Kab. Dogiyai', 1, '2010-07-04 18:45:27'),
(5400, 91, 'Kab. Intan Jaya', 1, '2010-07-04 18:45:27'),
(5401, 91, 'Kab. Jayapura', 1, '2010-07-04 18:45:27'),
(5402, 91, 'Kab. Jayawijaya', 1, '2010-07-04 18:45:27'),
(5403, 91, 'Kab. Keerom', 1, '2010-07-04 18:45:27'),
(5404, 91, 'Kab. Kepulauan Yapen', 1, '2010-07-04 18:45:27'),
(5405, 91, 'Kab. Lanny Jaya', 1, '2010-07-04 18:45:27'),
(5406, 91, 'Kab. Mamberamo Raya', 1, '2010-07-04 18:45:27'),
(5407, 91, 'Kab. Mamberamo Tengah', 1, '2010-07-04 18:45:27'),
(5408, 91, 'Kab. Mappi', 1, '2010-07-04 18:45:27'),
(5409, 91, 'Kab. Merauke', 1, '2010-07-04 18:45:27'),
(5410, 91, 'Kab. Mimika', 1, '2010-07-04 18:45:27'),
(5411, 91, 'Kab. Nabire', 1, '2010-07-04 18:45:27'),
(5412, 91, 'Kab. Nduga', 1, '2010-07-04 18:45:27'),
(5413, 91, 'Kab. Paniai', 1, '2010-07-04 18:45:27'),
(5414, 91, 'Kab. Pegunungan Bintang', 1, '2010-07-04 18:45:27'),
(5415, 91, 'Kab. Puncak', 1, '2010-07-04 18:45:27'),
(5416, 91, 'Kab. Puncak Jaya', 1, '2010-07-04 18:45:27'),
(5417, 91, 'Kab. Sarmi', 1, '2010-07-04 18:45:27'),
(5418, 91, 'Kab. Supiori', 1, '2010-07-04 18:45:27'),
(5419, 91, 'Kab. Tolikara', 1, '2010-07-04 18:45:27'),
(5420, 91, 'Kab. Waropen', 1, '2010-07-04 18:45:27'),
(5421, 91, 'Kab. Yahukimo', 1, '2010-07-04 18:45:27'),
(5422, 91, 'Kab. Yalimo', 1, '2010-07-04 18:45:27'),
(5423, 91, 'Kota Jayapura', 1, '2010-07-04 18:45:27'),
(5424, 11, 'Kab. Aceh Barat', 1, '2010-07-04 18:45:27'),
(5425, 11, 'Kab. Aceh Barat Daya', 1, '2010-07-04 18:45:27'),
(5426, 11, 'Kab. Aceh Besar', 1, '2010-07-04 18:45:27'),
(5427, 11, 'Kab. Pidie Jaya', 1, '2010-07-04 18:45:27'),
(5428, 11, 'Kab. Subulussalam', 1, '2010-07-04 18:45:27'),
(5430, 12, 'Kota Gunung Sitoli', 1, '2010-07-04 18:45:27'),
(5431, 15, 'Kota Sungai Penuh', 1, '2010-07-04 18:45:27'),
(5432, 14, 'Kab. Kepulauan Meranti', 1, '2010-07-04 18:45:27'),
(5433, 17, 'Kab. Bengkulu Tengah', 1, '2010-07-04 18:45:27'),
(5434, 12, 'Kab. Batu Bara', 1, '2010-07-04 18:45:27'),
(5435, 52, 'Kab. Lombok Utara', 1, '2010-07-04 18:45:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_negara_m`
--

CREATE TABLE IF NOT EXISTS `spt_negara_m` (
`id_negara` int(11) unsigned NOT NULL,
  `nama_negara` varchar(50) NOT NULL DEFAULT '',
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=897 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spt_negara_m`
--

INSERT INTO `spt_negara_m` (`id_negara`, `nama_negara`, `mdb`, `mdd`) VALUES
(4, 'Afghanistan', 1, '2010-07-04 18:45:39'),
(8, 'Albania', 1, '2010-07-04 18:45:39'),
(10, 'Antarctica', 1, '2010-07-04 18:45:39'),
(12, 'Algeria', 1, '2010-07-04 18:45:39'),
(16, 'American Samoa', 1, '2010-07-04 18:45:39'),
(20, 'Andorra', 1, '2010-07-04 18:45:39'),
(24, 'Angola', 1, '2010-07-04 18:45:39'),
(28, 'Antigua and Barbuda', 1, '2010-07-04 18:45:39'),
(31, 'Azerbaijan', 1, '2010-07-04 18:45:39'),
(32, 'Argentina', 1, '2010-07-04 18:45:39'),
(36, 'Australia', 1, '2010-07-04 18:45:39'),
(40, 'Austria', 1, '2010-07-04 18:45:39'),
(44, 'Bahamas', 1, '2010-07-04 18:45:39'),
(48, 'Bahrain', 1, '2010-07-04 18:45:39'),
(50, 'Bangladesh', 1, '2010-07-04 18:45:39'),
(51, 'Armenia', 1, '2010-07-04 18:45:39'),
(52, 'Barbados', 1, '2010-07-04 18:45:39'),
(56, 'Belgium', 1, '2010-07-04 18:45:39'),
(60, 'Bermuda', 1, '2010-07-04 18:45:39'),
(64, 'Bhutan', 1, '2010-07-04 18:45:39'),
(68, 'Bolivia', 1, '2010-07-04 18:45:39'),
(70, 'Bosnia and Herzegovina', 1, '2010-07-04 18:45:39'),
(72, 'Botswana', 1, '2010-07-04 18:45:39'),
(74, 'Bouvet Island', 1, '2010-07-04 18:45:39'),
(76, 'Brazil', 1, '2010-07-04 18:45:39'),
(84, 'Belize', 1, '2010-07-04 18:45:39'),
(86, 'British Indian Ocean Territory', 1, '2010-07-04 18:45:39'),
(90, 'Solomon Islands', 1, '2010-07-04 18:45:39'),
(92, 'Virgin Islands, British', 1, '2010-07-04 18:45:39'),
(96, 'Brunei Darussalam', 1, '2010-07-04 18:45:39'),
(100, 'Bulgaria', 1, '2010-07-04 18:45:39'),
(104, 'Myanmar', 1, '2010-07-04 18:45:39'),
(108, 'Burundi', 1, '2010-07-04 18:45:39'),
(112, 'Belarus', 1, '2010-07-04 18:45:39'),
(116, 'Cambodia', 1, '2010-07-04 18:45:39'),
(120, 'Cameroon', 1, '2010-07-04 18:45:39'),
(124, 'Canada', 1, '2010-07-04 18:45:39'),
(132, 'Cape Verde', 1, '2010-07-04 18:45:39'),
(136, 'Cayman Islands', 1, '2010-07-04 18:45:39'),
(140, 'Central African Republic', 1, '2010-07-04 18:45:39'),
(144, 'Sri Lanka', 1, '2010-07-04 18:45:39'),
(148, 'Chad', 1, '2010-07-04 18:45:39'),
(152, 'Chile', 1, '2010-07-04 18:45:39'),
(156, 'China', 1, '2010-07-04 18:45:39'),
(158, 'Taiwan, Province of China', 1, '2010-07-04 18:45:39'),
(162, 'Christmas Island', 1, '2010-07-04 18:45:39'),
(166, 'Cocos (Keeling) Islands', 1, '2010-07-04 18:45:39'),
(170, 'Colombia', 1, '2010-07-04 18:45:39'),
(174, 'Comoros', 1, '2010-07-04 18:45:39'),
(175, 'Mayotte', 1, '2010-07-04 18:45:39'),
(178, 'Congo', 1, '2010-07-04 18:45:39'),
(180, 'Congo, the Democratic Republic of the', 1, '2010-07-04 18:45:39'),
(184, 'Cook Islands', 1, '2010-07-04 18:45:39'),
(188, 'Costa Rica', 1, '2010-07-04 18:45:39'),
(191, 'Croatia', 1, '2010-07-04 18:45:39'),
(192, 'Cuba', 1, '2010-07-04 18:45:39'),
(196, 'Cyprus', 1, '2010-07-04 18:45:39'),
(203, 'Czech Republic', 1, '2010-07-04 18:45:39'),
(204, 'Benin', 1, '2010-07-04 18:45:39'),
(208, 'Denmark', 1, '2010-07-04 18:45:39'),
(212, 'Dominica', 1, '2010-07-04 18:45:39'),
(214, 'Dominican Republic', 1, '2010-07-04 18:45:39'),
(218, 'Ecuador', 1, '2010-07-04 18:45:39'),
(222, 'El Salvador', 1, '2010-07-04 18:45:39'),
(226, 'Equatorial Guinea', 1, '2010-07-04 18:45:39'),
(231, 'Ethiopia', 1, '2010-07-04 18:45:39'),
(232, 'Eritrea', 1, '2010-07-04 18:45:39'),
(233, 'Estonia', 1, '2010-07-04 18:45:39'),
(234, 'Faroe Islands', 1, '2010-07-04 18:45:39'),
(238, 'Falkland Islands (Malvinas)', 1, '2010-07-04 18:45:39'),
(239, 'South Georgia and the South Sandwich Islands', 1, '2010-07-04 18:45:39'),
(242, 'Fiji', 1, '2010-07-04 18:45:39'),
(246, 'Finland', 1, '2010-07-04 18:45:39'),
(248, 'Faroe Islands', 1, '2010-07-04 18:45:39'),
(250, 'France', 1, '2010-07-04 18:45:39'),
(254, 'French Guiana', 1, '2010-07-04 18:45:39'),
(258, 'French Polynesia', 1, '2010-07-04 18:45:39'),
(260, 'French Southern Territories', 1, '2010-07-04 18:45:39'),
(262, 'Djibouti', 1, '2010-07-04 18:45:39'),
(266, 'Gabon', 1, '2010-07-04 18:45:39'),
(268, 'Georgia', 1, '2010-07-04 18:45:39'),
(270, 'Gambia', 1, '2010-07-04 18:45:39'),
(275, 'Palestinian Territory, Occupied', 1, '2010-07-04 18:45:39'),
(276, 'Germany', 1, '2010-07-04 18:45:39'),
(288, 'Ghana', 1, '2010-07-04 18:45:39'),
(292, 'Gibraltar', 1, '2010-07-04 18:45:39'),
(296, 'Kiribati', 1, '2010-07-04 18:45:39'),
(300, 'Greece', 1, '2010-07-04 18:45:39'),
(304, 'Greenland', 1, '2010-07-04 18:45:39'),
(308, 'Grenada', 1, '2010-07-04 18:45:39'),
(312, 'Guadeloupe', 1, '2010-07-04 18:45:39'),
(316, 'Guam', 1, '2010-07-04 18:45:39'),
(320, 'Guatemala', 1, '2010-07-04 18:45:39'),
(324, 'Guinea', 1, '2010-07-04 18:45:39'),
(328, 'Guyana', 1, '2010-07-04 18:45:39'),
(332, 'Haiti', 1, '2010-07-04 18:45:39'),
(334, 'Heard Island and McDonald Islands', 1, '2010-07-04 18:45:39'),
(336, 'Holy See (Vatican City State)', 1, '2010-07-04 18:45:39'),
(340, 'Honduras', 1, '2010-07-04 18:45:39'),
(344, 'Hong Kong', 1, '2010-07-04 18:45:39'),
(348, 'Hungary', 1, '2010-07-04 18:45:39'),
(352, 'Iceland', 1, '2010-07-04 18:45:39'),
(356, 'India', 1, '2010-07-04 18:45:39'),
(360, 'Indonesia', 1, '2010-07-04 18:45:39'),
(364, 'Iran, Islamic Republic of', 1, '2010-07-04 18:45:39'),
(368, 'Iraq', 1, '2010-07-04 18:45:39'),
(372, 'Ireland', 1, '2010-07-04 18:45:39'),
(376, 'Israel', 1, '2010-07-04 18:45:39'),
(380, 'Italy', 1, '2010-07-04 18:45:39'),
(384, 'Cote d''Ivoire', 1, '2010-07-04 18:45:39'),
(388, 'Jamaica', 1, '2010-07-04 18:45:39'),
(392, 'Japan', 1, '2010-07-04 18:45:39'),
(398, 'Kazakhstan', 1, '2010-07-04 18:45:39'),
(400, 'Jordan', 1, '2010-07-04 18:45:39'),
(404, 'Kenya', 1, '2010-07-04 18:45:39'),
(408, 'Korea, Democratic People''s Republic of', 1, '2010-07-04 18:45:39'),
(410, 'Korea, Republic of', 1, '2010-07-04 18:45:39'),
(414, 'Kuwait', 1, '2010-07-04 18:45:39'),
(417, 'Kyrgyzstan', 1, '2010-07-04 18:45:39'),
(418, 'Lao People''s Democratic Republic', 1, '2010-07-04 18:45:39'),
(422, 'Lebanon', 1, '2010-07-04 18:45:39'),
(426, 'Lesotho', 1, '2010-07-04 18:45:39'),
(428, 'Latvia', 1, '2010-07-04 18:45:39'),
(430, 'Liberia', 1, '2010-07-04 18:45:39'),
(434, 'Libyan Arab Jamahiriya', 1, '2010-07-04 18:45:39'),
(438, 'Liechtenstein', 1, '2010-07-04 18:45:39'),
(440, 'Lithuania', 1, '2010-07-04 18:45:39'),
(442, 'Luxembourg', 1, '2010-07-04 18:45:39'),
(446, 'Macao', 1, '2010-07-04 18:45:39'),
(450, 'Madagascar', 1, '2010-07-04 18:45:39'),
(454, 'Malawi', 1, '2010-07-04 18:45:39'),
(458, 'Malaysia', 1, '2010-07-04 18:45:39'),
(462, 'Maldives', 1, '2010-07-04 18:45:39'),
(466, 'Mali', 1, '2010-07-04 18:45:39'),
(470, 'Malta', 1, '2010-07-04 18:45:39'),
(474, 'Martinique', 1, '2010-07-04 18:45:39'),
(478, 'Mauritania', 1, '2010-07-04 18:45:39'),
(480, 'Mauritius', 1, '2010-07-04 18:45:39'),
(484, 'Mexico', 1, '2010-07-04 18:45:39'),
(492, 'Monaco', 1, '2010-07-04 18:45:39'),
(496, 'Mongolia', 1, '2010-07-04 18:45:39'),
(498, 'Moldova', 1, '2010-07-04 18:45:39'),
(499, 'Montenegro', 1, '2010-07-04 18:45:39'),
(500, 'Montserrat', 1, '2010-07-04 18:45:39'),
(504, 'Morocco', 1, '2010-07-04 18:45:39'),
(508, 'Mozambique', 1, '2010-07-04 18:45:39'),
(512, 'Oman', 1, '2010-07-04 18:45:39'),
(516, 'Namibia', 1, '2010-07-04 18:45:39'),
(520, 'Nauru', 1, '2010-07-04 18:45:39'),
(524, 'Nepal', 1, '2010-07-04 18:45:39'),
(528, 'Netherlands', 1, '2010-07-04 18:45:39'),
(530, 'Netherlands Antilles', 1, '2010-07-04 18:45:39'),
(533, 'Aruba', 1, '2010-07-04 18:45:39'),
(540, 'New Caledonia', 1, '2010-07-04 18:45:39'),
(548, 'Vanuatu', 1, '2010-07-04 18:45:39'),
(554, 'New Zealand', 1, '2010-07-04 18:45:39'),
(558, 'Nicaragua', 1, '2010-07-04 18:45:39'),
(562, 'Niger', 1, '2010-07-04 18:45:39'),
(566, 'Nigeria', 1, '2010-07-04 18:45:39'),
(570, 'Niue', 1, '2010-07-04 18:45:39'),
(574, 'Norfolk Island', 1, '2010-07-04 18:45:39'),
(578, 'Norway', 1, '2010-07-04 18:45:39'),
(580, 'Northern Mariana Islands', 1, '2010-07-04 18:45:39'),
(581, 'United States Minor Outlying Islands', 1, '2010-07-04 18:45:39'),
(583, 'Micronesia, Federated States of', 1, '2010-07-04 18:45:39'),
(584, 'Marshall Islands', 1, '2010-07-04 18:45:39'),
(585, 'Palau', 1, '2010-07-04 18:45:39'),
(586, 'Pakistan', 1, '2010-07-04 18:45:39'),
(591, 'Panama', 1, '2010-07-04 18:45:39'),
(598, 'Papua New Guinea', 1, '2010-07-04 18:45:39'),
(600, 'Paraguay', 1, '2010-07-04 18:45:39'),
(604, 'Peru', 1, '2010-07-04 18:45:39'),
(608, 'Philippines', 1, '2010-07-04 18:45:39'),
(612, 'Pitcairn', 1, '2010-07-04 18:45:39'),
(616, 'Poland', 1, '2010-07-04 18:45:39'),
(620, 'Portugal', 1, '2010-07-04 18:45:39'),
(624, 'Guinea-Bissau', 1, '2010-07-04 18:45:39'),
(626, 'Timor-Leste', 1, '2010-07-04 18:45:39'),
(630, 'Puerto Rico', 1, '2010-07-04 18:45:39'),
(634, 'Qatar', 1, '2010-07-04 18:45:39'),
(638, 'RÃƒÆ’Ã‚Â©union', 1, '2010-07-04 18:45:39'),
(642, 'Romania', 1, '2010-07-04 18:45:39'),
(643, 'Russian Federation', 1, '2010-07-04 18:45:39'),
(646, 'Rwanda', 1, '2010-07-04 18:45:39'),
(652, 'Saint BarthÃƒÆ’Ã‚Â©lemy', 1, '2010-07-04 18:45:39'),
(654, 'Saint Helena', 1, '2010-07-04 18:45:39'),
(659, 'Saint Kitts and Nevis', 1, '2010-07-04 18:45:39'),
(660, 'Anguilla', 1, '2010-07-04 18:45:39'),
(662, 'Saint Lucia', 1, '2010-07-04 18:45:39'),
(663, 'Saint Martin (French part)', 1, '2010-07-04 18:45:39'),
(666, 'Saint Pierre and Miquelon', 1, '2010-07-04 18:45:39'),
(670, 'Saint Vincent and the Grenadines', 1, '2010-07-04 18:45:39'),
(674, 'San Marino', 1, '2010-07-04 18:45:39'),
(678, 'Sao Tome and Principe', 1, '2010-07-04 18:45:39'),
(682, 'Saudi Arabia', 1, '2010-07-04 18:45:39'),
(686, 'Senegal', 1, '2010-07-04 18:45:39'),
(688, 'Serbia', 1, '2010-07-04 18:45:39'),
(690, 'Seychelles', 1, '2010-07-04 18:45:39'),
(694, 'Sierra Leone', 1, '2010-07-04 18:45:39'),
(702, 'Singapore', 1, '2010-07-04 18:45:39'),
(703, 'Slovakia', 1, '2010-07-04 18:45:39'),
(704, 'Viet Nam', 1, '2010-07-04 18:45:39'),
(705, 'Slovenia', 1, '2010-07-04 18:45:39'),
(706, 'Somalia', 1, '2010-07-04 18:45:39'),
(710, 'South Africa', 1, '2010-07-04 18:45:39'),
(716, 'Zimbabwe', 1, '2010-07-04 18:45:39'),
(724, 'Spain', 1, '2010-07-04 18:45:39'),
(732, 'Western Sahara', 1, '2010-07-04 18:45:39'),
(736, 'Sudan', 1, '2010-07-04 18:45:39'),
(740, 'Suriname', 1, '2010-07-04 18:45:39'),
(744, 'Svalbard and Jan Mayen', 1, '2010-07-04 18:45:39'),
(748, 'Swaziland', 1, '2010-07-04 18:45:39'),
(752, 'Sweden', 1, '2010-07-04 18:45:39'),
(756, 'Switzerland', 1, '2010-07-04 18:45:39'),
(760, 'Syrian Arab Republic', 1, '2010-07-04 18:45:39'),
(762, 'Tajikistan', 1, '2010-07-04 18:45:39'),
(764, 'Thailand', 1, '2010-07-04 18:45:39'),
(768, 'Togo', 1, '2010-07-04 18:45:39'),
(772, 'Tokelau', 1, '2010-07-04 18:45:39'),
(776, 'Tonga', 1, '2010-07-04 18:45:39'),
(780, 'Trinidad and Tobago', 1, '2010-07-04 18:45:39'),
(784, 'United Arab Emirates', 1, '2010-07-04 18:45:39'),
(788, 'Tunisia', 1, '2010-07-04 18:45:39'),
(792, 'Turkey', 1, '2010-07-04 18:45:39'),
(795, 'Turkmenistan', 1, '2010-07-04 18:45:39'),
(796, 'Turks and Caicos Islands', 1, '2010-07-04 18:45:39'),
(798, 'Tuvalu', 1, '2010-07-04 18:45:39'),
(800, 'Uganda', 1, '2010-07-04 18:45:39'),
(804, 'Ukraine', 1, '2010-07-04 18:45:39'),
(807, 'Macedonia, the former Yugoslav Republic of', 1, '2010-07-04 18:45:39'),
(818, 'Egypt', 1, '2010-07-04 18:45:39'),
(826, 'United Kingdom', 1, '2010-07-04 18:45:39'),
(831, 'Guernsey', 1, '2010-07-04 18:45:39'),
(832, 'Jersey', 1, '2010-07-04 18:45:39'),
(833, 'Isle of Man', 1, '2010-07-04 18:45:39'),
(834, 'Tanzania, United Republic of', 1, '2010-07-04 18:45:39'),
(840, 'United States', 1, '2010-07-04 18:45:39'),
(850, 'Virgin Islands, U.S.', 1, '2010-07-04 18:45:39'),
(854, 'Burkina Faso', 1, '2010-07-04 18:45:39'),
(858, 'Uruguay', 1, '2010-07-04 18:45:39'),
(860, 'Uzbekistan', 1, '2010-07-04 18:45:39'),
(862, 'Venezuela', 1, '2010-07-04 18:45:39'),
(876, 'Wallis and Futuna', 1, '2010-07-04 18:45:39'),
(882, 'Samoa', 1, '2010-07-04 18:45:39'),
(887, 'Yemen', 1, '2010-07-04 18:45:39'),
(894, 'Zambia', 1, '2010-07-04 18:45:39'),
(895, 'xxxxxooo', 1, '2015-04-08 10:50:55'),
(896, 'Perancis', 1, '2015-04-29 09:59:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt_propinsi_m`
--

CREATE TABLE IF NOT EXISTS `spt_propinsi_m` (
`id_propinsi` int(11) unsigned NOT NULL,
  `id_negara` int(11) unsigned NOT NULL,
  `nama_propinsi` varchar(50) NOT NULL DEFAULT '',
  `wilayah` enum('barat','tengah','timur') DEFAULT 'barat',
  `shape` varchar(50) DEFAULT NULL,
  `coords` varchar(50) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `id_internal` char(2) DEFAULT NULL,
  `id_map` char(2) DEFAULT NULL,
  `nama_singkat` varchar(50) DEFAULT NULL,
  `mdb` varchar(50) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spt_propinsi_m`
--

INSERT INTO `spt_propinsi_m` (`id_propinsi`, `id_negara`, `nama_propinsi`, `wilayah`, `shape`, `coords`, `x`, `y`, `id_internal`, `id_map`, `nama_singkat`, `mdb`, `mdd`) VALUES
(11, 360, 'Nanggroe Aceh Darussalam', 'barat', 'rect', '7,12,136,36', 114.51, 114.51, '01', 'AC', 'NAD', NULL, NULL),
(12, 360, 'Sumatera Utara', 'barat', 'circle', '48,64,19', NULL, NULL, '26', 'SU', 'SUMUT', NULL, NULL),
(13, 360, 'Sumatera Barat', 'barat', 'rect', '28,86,76,109', NULL, NULL, '24', 'SB', 'SUMBAR', NULL, NULL),
(14, 360, 'Riau', 'barat', 'circle', '93,75,19', NULL, NULL, '37', 'RI', 'RIAU', NULL, NULL),
(15, 360, 'Jambi', 'barat', 'rect', '95,97,147,111', NULL, NULL, '05', 'JA', 'JAMBI', NULL, NULL),
(16, 360, 'Sumatera Selatan', 'barat', 'rect', '103,123,151,142', NULL, NULL, '32', 'SL', 'SUMSEL', NULL, NULL),
(17, 360, 'Bengkulu', 'barat', 'rect', '43,123,98,148', NULL, NULL, '03', 'BE', 'BENGKULU', NULL, NULL),
(18, 360, 'Lampung', 'barat', 'rect', '79,149,129,171', NULL, NULL, '15', 'LA', 'LAMPUNG', NULL, NULL),
(19, 360, 'Kepulauan Bangka Belitung', 'barat', 'rect', '128,111,175,123', NULL, NULL, '35', 'BB', 'BANGKA BELITUNG', NULL, NULL),
(21, 360, 'Kepulauan Riau', 'barat', 'rect', '108,83,147,96', NULL, NULL, '40', 'KR', 'KEP. RIAU', NULL, NULL),
(31, 360, 'DKI Jakarta', 'barat', 'rect', '152,142,206,154', NULL, NULL, '04', 'JK', 'DKI JAKARTA', NULL, NULL),
(32, 360, 'Jawa Barat', 'barat', 'rect', '122,172,153,191', NULL, NULL, '30', 'JR', 'JABAR', NULL, NULL),
(33, 360, 'Jawa Tengah', 'barat', 'rect', '165,166,197,182', NULL, NULL, '07', 'JT', 'JATENG', NULL, NULL),
(34, 360, 'D.I. Yogyakarta', 'barat', 'rect', '153,183,195,205', NULL, NULL, '10', 'YO', 'DIY', NULL, NULL),
(35, 360, 'Jawa Timur', 'barat', 'rect', '203,167,240,188', NULL, NULL, '08', 'JI', 'JATIM', NULL, NULL),
(36, 360, 'Banten', 'barat', 'rect', '130,155,169,166', NULL, NULL, '33', 'BT', 'BANTEN', NULL, NULL),
(51, 360, 'Bali', 'tengah', '', '', NULL, NULL, '02', 'BA', 'BALI', '20080222-1', '2010-01-07 16:19:40'),
(52, 360, 'Nusa Tenggara Barat', 'tengah', 'rect', '254,189,292,221', NULL, NULL, '17', 'NB', 'NTB', NULL, NULL),
(53, 360, 'Nusa Tenggara Timur', 'tengah', 'rect', '310,199,352,228', NULL, NULL, '18', 'NT', 'NTT', NULL, NULL),
(61, 360, 'Kalimantan Barat', 'barat', 'rect', '156,72,209,99', NULL, NULL, '11', 'KB', 'KALBAR', NULL, NULL),
(62, 360, 'Kalimantan Tengah', 'barat', 'rect', '198,101,239,126', NULL, NULL, '13', 'KT', 'KALTENG', NULL, NULL),
(63, 360, 'Kalimantan Selatan', 'tengah', 'rect', '230,126,263,154', NULL, NULL, '12', 'KS', 'KALSEL', NULL, NULL),
(64, 360, 'Kalimantan Timur', 'tengah', 'rect', '241,49,289,93', NULL, NULL, '14', 'KI', 'KALTIM', NULL, NULL),
(71, 360, 'Sulawesi Utara', 'tengah', 'rect', '327,70,360,85', NULL, NULL, '31', 'SA', 'SULUT', NULL, NULL),
(72, 360, 'Sulawesi Tengah', 'tengah', 'rect', '307,110,356,126', NULL, NULL, '21', 'ST', 'SULTENG', NULL, NULL),
(73, 360, 'Sulawesi Selatan', 'tengah', 'rect', '265,126,294,147', NULL, NULL, '38', 'SN', 'SULSEL', NULL, NULL),
(74, 360, 'Sulawesi Tenggara', 'tengah', 'rect', '314,137,376,156', NULL, NULL, '22', 'SG', 'SULTENG', NULL, NULL),
(75, 360, 'Gorontalo', 'tengah', 'rect', '318,85,374,99', NULL, NULL, '34', 'GO', 'GORONTALO', NULL, NULL),
(76, 360, 'Sulawesi Barat', 'tengah', 'rect', '269,107,299,118', NULL, NULL, '41', 'SR', 'SULBAR', NULL, NULL),
(81, 360, 'Maluku', 'timur', 'rect', '377,119,428,157', NULL, NULL, '28', 'MA', 'MALUKU', NULL, NULL),
(82, 360, 'Maluku Utara', 'timur', 'rect', '383,82,456,101', NULL, NULL, '29', 'MU', 'MAL. UTARA', NULL, NULL),
(91, 360, 'Papua', 'timur', 'rect', '507,107,548,213', NULL, NULL, '36', 'PA', 'PAPUA', NULL, NULL),
(92, 360, 'Irian Jaya Barat', 'timur', 'rect', '434,102,504,155', NULL, NULL, '39', 'IB', 'IRJA BARAT', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_katharga_m`
--

CREATE TABLE IF NOT EXISTS `sub_katharga_m` (
`id_sub_katharga` int(11) NOT NULL,
  `id_katharga` int(11) NOT NULL,
  `sub_katharga` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_katharga_m`
--

INSERT INTO `sub_katharga_m` (`id_sub_katharga`, `id_katharga`, `sub_katharga`) VALUES
(1, 1, 'Provinsi Kalimantan Barat'),
(2, 1, 'Provinsi Sumatera Utara'),
(3, 1, 'Provinsi Riau'),
(4, 3, 'CPO'),
(5, 3, 'Soybean Oil'),
(6, 3, 'Rapeseed Oil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_authority_m`
--

CREATE TABLE IF NOT EXISTS `sys_authority_m` (
`id_auth` int(11) unsigned NOT NULL,
  `id_group` int(4) unsigned NOT NULL,
  `auth_name` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `deskripsi` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `mdb` bigint(20) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sys_authority_m`
--

INSERT INTO `sys_authority_m` (`id_auth`, `id_group`, `auth_name`, `deskripsi`, `mdb`, `mdd`) VALUES
(1, 2, 'Super Admin', 'Admin Pengolah Data Admin', NULL, '2016-10-13 12:53:33'),
(3, 2, 'Administrator', 'Admin Pengolah Data', 1, '2016-10-13 12:52:46'),
(4, 2, 'Admininstrator Anggota', 'Admin yang di tambahkan oleh admin utama', 1, '2016-07-21 05:16:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_build_menu_m`
--

CREATE TABLE IF NOT EXISTS `sys_build_menu_m` (
`id_nav` int(11) unsigned NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `group` varchar(50) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL,
  `displayed` enum('yes','no') DEFAULT 'yes'
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_build_menu_m`
--

INSERT INTO `sys_build_menu_m` (`id_nav`, `id_parent`, `judul`, `group`, `module`, `page`, `displayed`) VALUES
(1, 0, 'Homepage', 'build', 'welcome', 'index', 'no'),
(2, 0, 'Application', 'build', 'aplikasi', 'update', 'yes'),
(3, 0, 'Site', 'build', 'portal', 'index', 'yes'),
(4, 0, 'Authority', 'build', 'authority', 'index', 'yes'),
(5, 0, 'Navigation', 'build', 'menu', 'index', 'yes'),
(6, 0, 'Features Permission', 'build', 'map', 'index', 'yes'),
(7, 0, 'Generate Application', 'build', 'aplikasi', 'index', 'no'),
(8, 0, 'Administrator', 'build', 'admin', 'setting', 'yes'),
(21, 2, 'Process', 'build', 'aplikasi', 'process', 'no'),
(41, 4, 'Process', 'build', 'authority', 'process', 'no'),
(51, 5, 'Navigation Add', 'build', 'menu', 'add', 'no'),
(52, 5, 'Navigation Edit', 'build', 'menu', 'edit', 'no'),
(53, 5, 'Navigation Delete', 'build', 'menu', 'delete', 'no'),
(54, 5, 'Process', 'build', 'menu', 'process', 'no'),
(62, 6, 'Features Settings', 'build', 'map', 'roles', 'no'),
(63, 6, 'Process', 'build', 'map', 'process', 'no'),
(71, 7, 'Build System', 'build', 'aplikasi', 'build', 'no'),
(81, 8, 'Process', 'build', 'admin', 'process', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_group_m`
--

CREATE TABLE IF NOT EXISTS `sys_group_m` (
`id_group` int(4) unsigned NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `judul_site` varchar(100) NOT NULL DEFAULT '',
  `meta_desc` varchar(255) DEFAULT '',
  `meta_key` varchar(255) DEFAULT '',
  `mdb` varchar(50) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_group_m`
--

INSERT INTO `sys_group_m` (`id_group`, `nama`, `deskripsi`, `judul_site`, `meta_desc`, `meta_key`, `mdb`, `mdd`) VALUES
(2, 'Admin Console', 'Administrator Console', 'Administrator Console', 'Museum seni dan budaya di Indonesia', 'museum, seni, budaya, indonesia, koleksi', '1', '2016-05-24 06:01:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_menu_authority_t`
--

CREATE TABLE IF NOT EXISTS `sys_menu_authority_t` (
  `id_auth` int(11) unsigned NOT NULL,
  `id_nav` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_menu_authority_t`
--

INSERT INTO `sys_menu_authority_t` (`id_auth`, `id_nav`) VALUES
(1, 17),
(1, 18),
(1, 132),
(1, 135),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 149),
(1, 268),
(1, 273),
(1, 274),
(3, 18),
(3, 132),
(3, 135),
(3, 144),
(3, 149),
(3, 150),
(3, 156),
(3, 157),
(3, 160),
(3, 176),
(3, 177),
(3, 178),
(3, 179),
(3, 183),
(3, 184),
(3, 185),
(3, 186),
(3, 268),
(3, 273),
(3, 274),
(3, 277),
(3, 280),
(3, 281),
(3, 282),
(3, 293),
(3, 294),
(3, 295),
(3, 296),
(3, 297),
(3, 298),
(3, 299),
(3, 300),
(3, 301),
(3, 304),
(3, 305),
(3, 306),
(3, 315),
(3, 316),
(3, 317),
(3, 318),
(3, 319),
(3, 320),
(3, 322),
(3, 346),
(3, 347),
(3, 348),
(3, 349),
(3, 350),
(3, 351),
(3, 352),
(3, 353),
(3, 354),
(3, 355),
(3, 356),
(4, 18),
(4, 132),
(4, 135),
(4, 149),
(4, 156),
(4, 268),
(4, 273),
(4, 274),
(4, 277),
(4, 279),
(4, 280),
(4, 281),
(4, 282),
(4, 286),
(4, 287),
(4, 288);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_menu_m`
--

CREATE TABLE IF NOT EXISTS `sys_menu_m` (
`id_nav` int(11) unsigned NOT NULL,
  `id_group` int(4) unsigned NOT NULL,
  `id_parent` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `app_path` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `module_path` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `page_path` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `order_num` int(4) unsigned DEFAULT '1',
  `uses` enum('1','0') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `displayed` enum('1','0') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `page_type` enum('view','process') COLLATE latin1_general_ci NOT NULL DEFAULT 'view',
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=363 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sys_menu_m`
--

INSERT INTO `sys_menu_m` (`id_nav`, `id_group`, `id_parent`, `title`, `description`, `app_path`, `module_path`, `page_path`, `order_num`, `uses`, `displayed`, `page_type`, `mdb`, `mdd`) VALUES
(10, 3, 0, 'Dashboard', 'Dashboard features', 'cpanel', 'product', 'statistik', 1, '1', '1', 'view', NULL, '2010-04-08 23:30:36'),
(11, 3, 28, 'My Account', 'Edit Account', 'cpanel', 'info', 'terbaru', 11, '1', '1', 'view', NULL, '2010-04-09 22:17:29'),
(12, 3, 11, 'Process', 'Process', 'cpanel', 'account', 'process', 13, '1', '0', 'process', NULL, '2010-04-09 22:17:43'),
(17, 2, 0, 'System', 'Halaman depan', 'private', 'sistem', 'settings', 3, '1', '1', 'view', 1, '2015-04-22 09:33:14'),
(18, 2, 0, 'My Account', 'Fasilitas pengaturan user account pribadi', 'private', 'account', 'status', 2, '1', '1', 'view', 1, '2015-04-22 09:32:50'),
(26, 3, 0, 'Products', 'Management Product', 'cpanel', 'info', 'terbaru', 2, '1', '1', 'view', NULL, '2010-04-08 22:43:59'),
(27, 3, 0, 'Website', 'Website', 'cpanel', 'profil', 'list', 5, '1', '1', 'view', NULL, '2010-04-18 22:40:37'),
(28, 3, 0, 'Settings', 'System', 'cpanel', 'info', 'terbaru', 6, '1', '1', 'view', NULL, '2010-04-08 23:10:16'),
(29, 3, 28, 'Applications', 'Halaman pengaturan aplikasi', 'cpanel', 'aplikasi', 'edit', 12, '1', '1', 'view', NULL, '2010-04-08 23:35:24'),
(30, 3, 29, 'Process', 'Halaman proses pengaturan aplikasi', 'cpanel', 'aplikasi', 'process', 1, '1', '0', 'process', NULL, '2010-04-08 00:11:59'),
(31, 3, 45, 'User Authority', 'Halaman pengaturan hak akses', 'cpanel', 'authority', 'list', 15, '1', '1', 'view', NULL, '2010-04-10 22:21:10'),
(32, 3, 45, 'Administrator', 'Halaman pengaturan administrator', 'cpanel', 'administrator', 'list', 13, '1', '1', 'view', NULL, '2010-04-08 23:34:10'),
(33, 3, 31, 'Process', 'Halaman proses', 'cpanel', 'authority', 'process', 22, '1', '0', 'process', NULL, '2010-04-10 22:21:37'),
(34, 3, 31, 'Authority Roles', 'Halaman pengaturan fasilitas', 'cpanel', 'authority', 'roles', 21, '1', '0', 'view', NULL, '2010-04-13 20:44:16'),
(35, 3, 32, 'Process', 'Halaman proses administrator', 'cpanel', 'administrator', 'process', 1, '1', '0', 'process', NULL, '2010-04-08 23:14:21'),
(38, 3, 27, 'Help and Info', 'Fasilitas pengelolaan informasi website', 'cpanel', 'profil', 'list', 11, '1', '1', 'view', NULL, '2010-04-25 21:28:48'),
(39, 3, 27, 'Articles', 'Halaman pengelolaan data news &amp; articles', 'cpanel', 'news', 'list', 12, '1', '1', 'view', NULL, '2010-04-25 21:28:28'),
(40, 3, 27, 'Forum', 'Fasilitas manajemen forum', 'cpanel', 'forum', 'list', 13, '1', '1', 'view', NULL, '2010-04-08 23:34:51'),
(41, 3, 0, 'Orders', 'Halaman pengelolaan orders product', 'cpanel', 'info', 'terbaru', 3, '1', '1', 'view', NULL, '2010-04-08 21:39:00'),
(42, 3, 41, 'New Order', 'Halaman pemesanan terbaru', 'cpanel', 'info', 'terbaru', 11, '1', '1', 'view', NULL, '2010-04-08 23:32:17'),
(43, 3, 41, 'Shipments', 'Halaman pemesanan yang di antarkan', 'cpanel', 'shipments', 'list', 12, '1', '1', 'view', NULL, '2010-04-08 23:32:22'),
(44, 3, 41, 'Invoices', 'Halaman pemesanan tanda terima', 'cpanel', 'invoices', 'list', 13, '1', '1', 'view', NULL, '2010-04-08 23:32:30'),
(45, 3, 0, 'Users', 'Halaman pengelolaan user', 'cpanel', 'member', 'terbaru', 4, '1', '1', 'view', NULL, '2010-04-18 22:39:50'),
(46, 3, 26, 'Overview', 'Halaman produk terbaru', 'cpanel', 'info', 'terbaru', 11, '1', '1', 'view', NULL, '2010-05-13 19:11:32'),
(47, 3, 26, 'Kategori', 'Halaman produk kategori', 'cpanel', 'kategori', 'list', 12, '1', '1', 'view', NULL, '2010-04-21 20:01:32'),
(48, 3, 26, 'Kain', 'Halaman pengelolaan data product', 'cpanel', 'kain', 'list', 13, '1', '1', 'view', NULL, '2010-04-19 22:12:40'),
(49, 3, 26, 'Baju', 'Halaman pengelolaan data clothing', 'cpanel', 'baju', 'list', 14, '1', '1', 'view', NULL, '2010-04-19 23:18:56'),
(50, 3, 26, 'Aksesoris', 'Halaman pengelolaan data aksesoris', 'cpanel', 'aksesoris', 'list', 15, '1', '1', 'view', NULL, '2010-04-19 23:19:04'),
(51, 3, 26, 'Editing &amp; Publishing', 'Halaman pengelolaan data product yg ditampilkan', 'cpanel', 'publishing', 'list', 30, '1', '1', 'view', NULL, '2010-05-13 13:38:35'),
(52, 3, 45, 'New Member', 'Halaman user terbaru', 'cpanel', 'member', 'terbaru', 11, '1', '1', 'view', NULL, '2010-04-18 21:01:32'),
(53, 3, 45, 'Members', 'Halaman pengelolaan data member', 'cpanel', 'member', 'list', 12, '1', '1', 'view', NULL, '2010-05-04 06:56:52'),
(55, 3, 10, 'Product &amp; Sales', 'Halaman dashboard product', 'cpanel', 'product', 'statistik', 11, '1', '1', 'view', NULL, '2010-04-08 23:29:54'),
(56, 3, 10, 'Orders', 'Halaman dashboard orders', 'cpanel', 'orders', 'statistik', 12, '1', '1', 'view', NULL, '2010-04-08 23:29:09'),
(57, 3, 10, 'Membership', 'Halaman dashboard member', 'cpanel', 'membership', 'statistik', 13, '1', '1', 'view', NULL, '2010-04-08 23:30:12'),
(58, 3, 10, 'Website', 'Halaman dashboard website', 'cpanel', 'web', 'statistik', 14, '1', '1', 'view', NULL, '2010-04-08 23:29:30'),
(59, 3, 11, 'Edit Account', 'Halaman edit account', 'cpanel', 'account', 'settings', 12, '1', '0', 'view', NULL, '2010-04-09 22:17:35'),
(60, 3, 38, 'Tambah Konten', 'Halaman tambah konten profil / info', 'cpanel', 'profil', 'add', 21, '1', '0', 'view', NULL, '2010-04-11 01:34:37'),
(61, 3, 38, 'Edit Konten', 'Halaman edit konten', 'cpanel', 'profil', 'edit', 22, '1', '0', 'view', NULL, '2010-04-11 01:34:31'),
(62, 3, 38, 'Hapus Konten', 'Halaman hapus data konten', 'cpanel', 'profil', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-11 01:46:53'),
(63, 3, 38, 'Process', 'Halaman proses', 'cpanel', 'profil', 'process', 25, '1', '0', 'process', NULL, '2010-04-11 01:36:57'),
(64, 3, 39, 'Tambah Data', 'Halaman tambah data', 'cpanel', 'news', 'add', 21, '1', '0', 'view', NULL, '2010-04-11 13:18:08'),
(65, 3, 39, 'Edit Data', 'Halaman edit data', 'cpanel', 'news', 'edit', 22, '1', '0', 'view', NULL, '2010-04-11 13:18:51'),
(66, 3, 39, 'Hapus Data', 'Halaman hapus data', 'cpanel', 'news', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-11 13:19:24'),
(67, 3, 39, 'Process', 'Halaman proses data', 'cpanel', 'news', 'process', 30, '1', '0', 'process', NULL, '2010-04-11 14:06:15'),
(68, 3, 39, 'Komentar', 'Halaman hapus komentar', 'cpanel', 'news', 'komentar', 24, '1', '0', 'view', NULL, '2010-04-11 14:06:09'),
(69, 3, 32, 'Tambah Data', 'Halaman tambah data administrator', 'cpanel', 'administrator', 'add', 21, '1', '0', 'view', NULL, '2010-04-13 22:02:03'),
(70, 3, 32, 'Edit Administrator', 'Halaman edit administrato', 'cpanel', 'administrator', 'edit', 22, '1', '0', 'view', NULL, '2010-04-13 22:01:54'),
(71, 3, 32, 'Hapus Data', 'Halaman hapus data administrator', 'cpanel', 'administrator', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-13 22:02:42'),
(75, 3, 40, 'Forum Topik', 'Halaman editing topik pada forum yang terpilih', 'cpanel', 'forum', 'thread', 2, '1', '0', 'view', NULL, '2010-04-18 14:22:58'),
(76, 3, 40, 'Forum Kategori', 'Halaman editing forum kategori', 'cpanel', 'forum', 'list', 1, '1', '0', 'view', NULL, '2010-04-18 14:22:49'),
(77, 3, 40, 'Forum Reply', 'Halaman editing reply thread', 'cpanel', 'forum', 'reply', 3, '1', '0', 'view', NULL, '2010-04-18 14:24:21'),
(78, 3, 76, 'Process', 'Halaman proses forum', 'cpanel', 'forum', 'process', 1, '1', '0', 'process', NULL, '2010-04-18 14:25:04'),
(79, 3, 75, 'Process', 'Halaman proses forum thread', 'cpanel', 'forum', 'process-thread', 1, '1', '0', 'process', NULL, '2010-04-18 14:25:38'),
(80, 3, 77, 'Process', 'Halaman proses forum reply', 'cpanel', 'forum', 'process-reply', 1, '1', '0', 'process', NULL, '2010-04-18 14:26:06'),
(81, 3, 82, 'Process Kain', 'Halaman proses kategori kain', 'cpanel', 'kategori', 'process-kain', 30, '1', '0', 'process', NULL, '2010-04-18 22:11:56'),
(82, 3, 47, 'Kain', 'Halaman produk kategori kain', 'cpanel', 'kategori', 'kain-list', 21, '1', '0', 'view', NULL, '2010-04-18 21:20:23'),
(83, 3, 47, 'Baju', 'Halaman produk kategori baju', 'cpanel', 'kategori', 'baju-list', 22, '1', '0', 'view', NULL, '2010-04-18 21:19:15'),
(84, 3, 47, 'Aksesoris', 'Halaman produk kategori aksesoris', 'cpanel', 'kategori', 'aksesoris-list', 23, '1', '0', 'view', NULL, '2010-04-18 21:19:49'),
(85, 3, 83, 'Process Baju', 'Halaman proses kategori baju', 'cpanel', 'kategori', 'process-baju', 30, '1', '0', 'process', NULL, '2010-04-18 22:10:36'),
(86, 3, 84, 'Process Aksesoris', 'Halaman proses kategori aksesoris', 'cpanel', 'kategori', 'process-aksesoris', 30, '1', '0', 'process', NULL, '2010-04-18 22:12:15'),
(87, 3, 48, 'Process', 'Halaman proses', 'cpanel', 'kain', 'process', 30, '1', '0', 'process', NULL, '2010-04-19 22:40:23'),
(88, 3, 49, 'Process', 'halaman proses baju', 'cpanel', 'baju', 'process', 30, '1', '0', 'process', NULL, '2010-04-19 23:19:34'),
(89, 3, 50, 'Process', 'halaman proses aksesoris', 'cpanel', 'aksesoris', 'process', 30, '1', '0', 'process', NULL, '2010-04-19 23:20:04'),
(90, 3, 48, 'Tambah Data Kain', 'Halaman tambah data kain', 'cpanel', 'kain', 'add', 21, '1', '0', 'view', NULL, '2010-04-20 23:28:37'),
(91, 3, 48, 'Edit Data Kain', 'Halaman edit data kain', 'cpanel', 'kain', 'edit', 22, '1', '0', 'view', NULL, '2010-04-20 23:29:30'),
(92, 3, 48, 'Hapus Data Kain', 'Halaman hapus data kain', 'cpanel', 'kain', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-22 21:46:36'),
(93, 3, 49, 'Tambah Data Baju', 'Halaman tambah data baju', 'cpanel', 'baju', 'add', 21, '1', '0', 'view', NULL, '2010-04-21 01:21:20'),
(94, 3, 49, 'Edit Data Baju', 'Halaman edit data baju', 'cpanel', 'baju', 'edit', 22, '1', '0', 'view', NULL, '2010-04-21 01:21:54'),
(95, 3, 49, 'Hapus Data Baju', 'Halaman hapus data baju', 'cpanel', 'baju', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-22 23:05:31'),
(96, 3, 50, 'Tambah Data Aksesoris', 'Halaman tambah data aksesoris', 'cpanel', 'aksesoris', 'add', 21, '1', '0', 'view', NULL, '2010-04-21 01:23:06'),
(97, 3, 50, 'Edit Data Aksesoris', 'Halaman edit data aksesoris', 'cpanel', 'aksesoris', 'edit', 22, '1', '0', 'view', NULL, '2010-04-21 01:23:32'),
(98, 3, 50, 'Hapus Data Aksesoris', 'Halaman hapus data aksesoris', 'cpanel', 'aksesoris', 'hapus', 23, '1', '0', 'view', NULL, '2010-04-22 23:05:37'),
(99, 3, 48, 'Edit Images', 'Halaman edit images produk', 'cpanel', 'kain', 'images', 26, '1', '0', 'view', NULL, '2010-04-21 20:28:09'),
(100, 3, 49, 'Edit Images', 'Halaman images editing', 'cpanel', 'baju', 'images', 26, '1', '0', 'view', NULL, '2010-04-22 23:06:17'),
(101, 3, 50, 'Edit Images', 'Halaman images editing', 'cpanel', 'aksesoris', 'images', 26, '1', '0', 'view', NULL, '2010-04-22 23:06:59'),
(106, 3, 53, 'Edit Member', 'Halaman edit data member', 'cpanel', 'member', 'edit', 21, '1', '0', 'view', NULL, '2010-05-04 06:41:30'),
(107, 3, 53, 'Hapus Member', 'Halaman hapus data member', 'cpanel', 'member', 'delete', 22, '1', '0', 'view', NULL, '2010-05-04 06:42:19'),
(108, 3, 53, 'Detail Member', 'Halaman detail data member', 'cpanel', 'member', 'detail', 20, '1', '0', 'view', NULL, '2010-05-04 06:42:57'),
(109, 3, 53, 'Process', 'Halaman Proses data member', 'cpanel', 'member', 'process', 25, '1', '0', 'process', NULL, '2010-05-04 06:43:29'),
(110, 1, 0, 'Museum Nusantara', 'Halaman informasi museum di indonesia', 'web', 'museum', 'nusantara', 3, '1', '1', 'view', 1, '2010-07-18 12:06:28'),
(115, 3, 51, 'Process', 'Halaman proses editing dan publishing', 'cpanel', 'publishing', 'process', 59, '1', '0', 'process', NULL, '2010-05-16 09:20:08'),
(116, 3, 51, 'Edit Produk', 'Edit produk', 'cpanel', 'publishing', 'edit', 31, '1', '0', 'view', NULL, '2010-05-13 13:40:30'),
(117, 3, 51, 'Hapus Produk', 'Halaman hapus produk', 'cpanel', 'publishing', 'hapus', 32, '1', '0', 'view', NULL, '2010-05-13 19:12:24'),
(118, 3, 51, 'Deskripsi Produk', 'Halaman deskripsi produk', 'cpanel', 'publishing', 'description', 33, '1', '0', 'view', NULL, '2010-05-16 09:21:00'),
(119, 3, 51, 'Images Produk', 'Halaman management gambar produk', 'cpanel', 'publishing', 'images', 34, '1', '0', 'view', NULL, '2010-05-16 09:22:01'),
(120, 3, 51, 'Stok Produk', 'Halaman management stok produk', 'cpanel', 'publishing', 'stok', 35, '1', '0', 'view', NULL, '2010-05-16 09:22:51'),
(121, 3, 51, 'Harga Produk', 'Halaman management harga produk', 'cpanel', 'publishing', 'price', 36, '1', '0', 'view', NULL, '2010-05-16 09:23:15'),
(125, 1, 0, 'Program Unggulan', 'Halaman depan', 'web', 'welcome', 'index', 1, '1', '1', 'view', 1, '2010-07-18 12:05:29'),
(126, 1, 0, 'Koleksi Museum', 'Halaman informasi koleksi di indonesia', 'web', 'koleksi', 'index', 2, '1', '1', 'view', 1, '2010-07-18 12:06:32'),
(132, 2, 18, 'Update Akun Login', 'Halaman Update Akun Login', 'private', 'account', 'login', 3, '1', '1', 'view', 1, '2015-04-04 09:38:10'),
(135, 2, 18, 'Profil User', 'Halaman Profil User', 'private', 'account', 'status', 2, '1', '1', 'view', 1, '2015-04-23 03:19:12'),
(137, 2, 17, 'Pengaturan Aplikasi', 'Halaman pengaturan data aplikasi', 'private', 'sistem', 'settings', 4, '0', '0', 'view', 1, '2015-04-04 10:01:57'),
(138, 2, 17, 'Administrator', 'Halaman pengaturan administrator', 'private', 'administrator', 'index', 5, '1', '1', 'view', 1, '2010-07-11 11:42:54'),
(139, 2, 138, 'Tambah Administrator', 'Halaman tambah data administrator', 'private', 'administrator', 'add', 7, '1', '0', 'view', 1, '2010-07-11 11:43:10'),
(140, 2, 138, 'Edit Administrator', 'Halaman edit data administrator', 'private', 'administrator', 'edit', 8, '1', '0', 'view', 1, '2010-07-11 11:43:14'),
(141, 2, 138, 'Hapus Administrator', 'Halaman hapus data administrator', 'private', 'administrator', 'hapus', 9, '1', '0', 'view', 1, '2010-07-11 11:43:19'),
(142, 2, 138, 'Proses Data Administrator', 'Halaman proses data administrator', 'private', 'administrator', 'process', 10, '1', '0', 'process', 1, '2010-07-11 11:43:23'),
(143, 2, 137, 'Proses Data Aplikasi', 'Halaman proses data aplikasi', 'private', 'sistem', 'process_settings', 6, '1', '0', 'process', 1, '2010-07-11 11:43:00'),
(144, 2, 0, 'Data Pendukung', 'Group master data pendukung', 'private', 'penyelenggara', 'index', 4, '1', '1', 'view', 1, '2015-04-22 09:33:25'),
(149, 2, 18, 'Process', 'Halaman proses', 'private', 'account', 'process', 6, '1', '0', 'process', 1, '2010-07-11 11:42:33'),
(150, 2, 0, 'Data Relawan', 'Data Relawan', 'private', 'asosiasi', 'overview', 5, '1', '1', 'view', 1, '2016-10-13 12:54:59'),
(154, 2, 144, 'Provinsi', 'Halaman pengelolaan data provinsi', 'private', 'propinsi', 'index', 1, '1', '1', 'view', 1, '2016-07-26 05:58:04'),
(155, 2, 144, 'Kota', 'Halaman pengelolaan data kota', 'private', 'kota', 'index', 2, '1', '1', 'view', 1, '2016-07-26 05:58:10'),
(156, 2, 0, 'Website', 'Group fasilitas pengelolaan data website', 'private', 'profil', 'index', 6, '1', '1', 'view', 1, '2015-04-22 09:33:40'),
(157, 2, 150, 'Relawan', 'Halaman pengelolaan data Relawan', 'private', 'relawan', 'index', 11, '1', '1', 'view', 1, '2016-10-16 09:29:10'),
(160, 2, 156, 'Profil Cagub-Cawagub', 'Halaman pengelolaan profil Cagub-Cawagub', 'private', 'profil', 'index', 1, '1', '1', 'view', 1, '2016-10-13 13:00:57'),
(170, 2, 154, 'Tambah Data Propinsi', 'Halaman tambah data propinsi', 'private', 'propinsi', 'add', 21, '1', '0', 'view', 1, '2010-07-11 11:44:46'),
(171, 2, 154, 'Edit Data Propinsi', 'Halaman edit data propinsi', 'private', 'propinsi', 'edit', 22, '1', '0', 'view', 1, '2010-07-11 11:44:50'),
(172, 2, 154, 'Process Data', 'Halaman proses data propinsi', 'private', 'propinsi', 'process', 23, '1', '0', 'process', 1, '2010-07-11 11:44:54'),
(173, 2, 155, 'Tambah Data Kota', 'Halaman tambah data kota', 'private', 'kota', 'add', 21, '1', '0', 'view', 1, '2010-07-11 11:45:00'),
(174, 2, 155, 'Edit Data Kota', 'Halaman edit data kota', 'private', 'kota', 'edit', 22, '1', '0', 'view', 1, '2010-07-11 11:45:04'),
(175, 2, 155, 'Process Data', 'Halaman proses data kota', 'private', 'kota', 'process', 23, '1', '0', 'view', 1, '2010-07-11 11:45:09'),
(176, 2, 160, 'Tambah Data Profil', 'Halaman tambah data profil', 'private', 'profil', 'add', 21, '1', '0', 'view', 1, '2010-07-11 11:46:23'),
(177, 2, 160, 'Edit Data Profil', 'Halaman edit data profil', 'private', 'profil', 'edit', 22, '1', '0', 'view', 1, '2010-07-11 11:46:54'),
(178, 2, 160, 'Hapus Data Profil', 'Halaman hapus data profil', 'private', 'profil', 'hapus', 23, '1', '0', 'view', 1, '2010-07-11 11:47:19'),
(179, 2, 160, 'Process Data Profil', 'Halaman proses data profil', 'private', 'profil', 'process', 24, '1', '0', 'process', 1, '2010-07-11 11:48:09'),
(183, 2, 157, 'Tambah Data Relawan', 'Halaman tambah data relawan', 'private', 'relawan', 'add', 21, '1', '0', 'view', 1, '2016-10-16 10:19:41'),
(184, 2, 157, 'Edit Data Relawan', 'Halaman edit data relawan', 'private', 'relawan', 'edit', 22, '1', '0', 'view', 1, '2016-10-16 10:20:05'),
(185, 2, 157, 'Hapus Data Asosiasi', 'Halaman hapus data asosiasi', 'private', 'relawan', 'hapus', 23, '1', '0', 'view', 1, '2016-10-17 05:39:48'),
(186, 2, 157, 'Process Data', 'Halaman proses data relawan', 'private', 'relawan', 'process', 24, '1', '0', 'process', 1, '2016-10-16 10:20:26'),
(205, 1, 110, 'Museum Propinsi', 'Halaman informasi museum propinsi', 'web', 'museum', 'propinsi', 11, '1', '0', 'view', 1, '2010-07-11 14:19:51'),
(206, 1, 110, 'Museum Detail', 'Halaman detail data museum', 'web', 'museum', 'detail', 12, '1', '0', 'view', 1, '2010-07-11 14:20:38'),
(207, 1, 110, 'Koleksi Museum', 'Halaman koleksi museum', 'web', 'museum', 'koleksi', 13, '1', '0', 'view', 1, '2010-07-11 14:23:04'),
(208, 1, 126, 'Process Data', 'Halaman proses data koleksi', 'web', 'koleksi', 'process', 11, '1', '0', 'process', 1, '2010-07-11 14:35:09'),
(209, 1, 207, 'Detail Koleksi', 'Halaman detail Koleksi', 'web', 'museum', 'koleksi_detail', 21, '1', '0', 'view', 1, '2010-07-11 15:03:53'),
(210, 1, 207, 'Manfaat Koleksi', 'Halaman detail manfaat koleksi', 'web', 'museum', 'koleksi_manfaat', 22, '1', '0', 'view', 1, '2010-07-11 14:59:38'),
(211, 1, 207, 'Perolehan Koleksi', 'Halaman detail perolehan koleksi', 'web', 'museum', 'koleksi_perolehan', 23, '1', '0', 'view', 1, '2010-07-11 15:04:00'),
(212, 1, 207, 'Penyimpanan Koleksi', 'Halaman detail koleksi penyimpanan', 'web', 'museum', 'koleksi_simpan', 24, '1', '0', 'view', 1, '2010-08-13 04:18:23'),
(213, 1, 207, 'Fisik Koleksi', 'Halaman detail koleksi fisik', 'web', 'museum', 'koleksi_fisik', 25, '1', '0', 'view', 1, '2010-07-11 15:04:13'),
(214, 1, 207, 'Fisik Koleksi - Keris', 'Halaman detail data koleksi khusus keris', 'web', 'museum', 'koleksi_keris', 26, '1', '0', 'view', 1, '2010-07-11 15:04:29'),
(215, 1, 126, 'Detail Koleksi', 'Halaman detail Koleksi', 'web', 'koleksi', 'detail', 11, '1', '0', 'view', 1, '2010-07-11 15:04:38'),
(216, 1, 126, 'Manfaat Koleksi', 'Halaman detail manfaat koleksi', 'web', 'koleksi', 'manfaat', 12, '1', '0', 'view', 1, '2010-07-11 15:03:43'),
(217, 1, 126, 'Perolehan Koleksi', 'Halaman detail perolehan koleksi', 'web', 'koleksi', 'perolehan', 13, '1', '0', 'view', 1, '2010-07-11 15:05:11'),
(218, 1, 126, 'Penyimpanan Koleksi', 'Halaman detail koleksi penyimpanan', 'web', 'koleksi', 'penyimpanan', 15, '1', '0', 'view', 1, '2010-07-11 15:05:42'),
(219, 1, 126, 'Fisik Koleksi', 'Halaman detail koleksi fisik', 'web', 'koleksi', 'fisik', 16, '1', '0', 'view', 1, '2010-07-11 15:06:19'),
(220, 1, 126, 'Fisik Koleksi - Keris', 'Halaman detail koleksi fisik khusus keris', 'web', 'koleksi', 'keris', 17, '1', '0', 'view', 1, '2010-07-11 15:06:52'),
(221, 1, 0, 'Museum Board', 'Halaman statistik', 'web', 'dashboard', 'index', 4, '1', '1', 'view', 1, '2010-07-18 12:05:52'),
(223, 1, 0, 'Fusion Chart', 'Halaman testing fusion chart', 'web', 'testing', 'fusionchart', 11, '1', '0', 'view', 1, '2010-07-18 11:59:52'),
(224, 1, 0, 'Pagination', 'Halaman testing paging', 'web', 'testing', 'pagination', 12, '1', '0', 'view', 1, '2010-07-18 11:59:57'),
(225, 1, 0, 'Uploader', 'Halaman testing upload file and images', 'web', 'testing', 'uploader', 13, '1', '0', 'view', 1, '2010-07-18 12:00:05'),
(226, 1, 225, 'Process Data', 'Halaman proses data upload', 'web', 'testing', 'process_upload', 14, '1', '0', 'view', 1, '2010-07-15 08:16:31'),
(227, 1, 0, 'Write excel', 'Halaman testing write excel', 'web', 'testing', 'excel', 15, '1', '0', 'view', 1, '2010-07-18 12:00:09'),
(228, 1, 0, 'Write PDF', 'Halaman testing write PDF', 'web', 'testing', 'pdfwriter', 15, '1', '0', 'view', 1, '2010-07-18 12:00:13'),
(229, 1, 0, 'Informasi dan Profil', 'Halaman informasi ', 'web', 'profil', 'detail', 5, '1', '0', 'view', 1, '2010-07-18 12:22:36'),
(253, 1, 207, 'Jenis Koleksi', 'Halaman jenis koleksi', 'web', 'museum', 'koleksi_jenis', 20, '1', '0', 'view', 1, '2010-08-07 21:46:28'),
(255, 1, 221, 'Museum Dashboard Propinsi', 'Halaman dashboard list propinsi', 'web', 'dashboard', 'propinsi', 21, '1', '0', 'view', 1, '2010-08-11 23:32:32'),
(265, 2, 154, 'Hapus Provinsi', 'Halaman Hapus Provinsi', 'private', 'propinsi', 'hapus', 4, '1', '0', 'view', 1, '2015-04-08 09:28:28'),
(266, 2, 155, 'Hapus Kota', 'Halaman Hapus Kota', 'private', 'kota', 'hapus', 4, '1', '0', 'view', 1, '2015-04-08 09:29:06'),
(268, 2, 0, 'Dashboard', 'Dashboard', 'private', 'dashboard', 'index', 1, '1', '1', 'view', 1, '2015-04-22 09:33:47'),
(273, 2, 268, 'Grafik Data', 'Grafik Data', 'private', 'dashboard', 'display_data_grafik', 1, '1', '0', 'view', 1, '2015-05-12 08:03:04'),
(274, 2, 268, 'Grafik Data Museum', 'Grafik Data Museum', 'private', 'dashboard', 'display_data_grafik_museum', 2, '1', '0', 'view', 1, '2015-05-12 08:04:00'),
(277, 2, 156, 'Berita Relawan', 'Berita Relawan', 'private', 'berita', 'index', 3, '1', '1', 'view', 1, '2016-10-13 13:02:17'),
(279, 2, 156, 'Kegiatan', 'Jadwal Kegiatan', 'private', 'agenda', 'index', 3, '1', '1', 'view', 1, '2016-06-03 05:49:48'),
(280, 2, 277, 'Tambah Berita', 'Tambah Berita', 'private', 'berita', 'add', 1, '1', '0', 'view', 1, '2015-06-03 09:13:02'),
(281, 2, 277, 'Edit Berita', 'Edit Berita', 'private', 'berita', 'edit', 2, '1', '0', 'view', 1, '2015-06-03 09:13:23'),
(282, 2, 277, 'Process Berita', 'Process Berita', 'private', 'berita', 'process', 3, '1', '0', 'process', 1, '2015-06-03 09:13:51'),
(286, 2, 279, 'Tambah Kegiatan', 'Tambah Kegiatan', 'private', 'agenda', 'add', 1, '1', '0', 'view', 1, '2015-06-03 09:15:52'),
(287, 2, 279, 'Edit Kegiatan', 'Edit Kegiatan', 'private', 'agenda', 'edit', 2, '1', '0', 'view', 1, '2015-06-03 09:16:18'),
(288, 2, 279, 'Process Kegiatan', 'Process Kegiatan', 'private', 'agenda', 'process', 3, '1', '0', 'process', 1, '2015-06-03 09:17:04'),
(289, 2, 156, 'Download', 'Download', 'private', 'download', 'index', 10, '1', '1', 'view', 1, '2016-07-22 09:47:25'),
(290, 2, 289, 'Tambah File', 'Tambah File', 'private', 'download', 'add', 1, '1', '0', 'view', 1, '2015-06-03 09:19:04'),
(291, 2, 289, 'Edit Download File', 'Edit Download File', 'private', 'download', 'edit', 2, '1', '0', 'view', 1, '2015-06-03 09:19:50'),
(292, 2, 289, 'Process Download', 'Process Download', 'private', 'download', 'process', 3, '1', '0', 'process', 1, '2015-06-03 09:20:20'),
(293, 2, 156, 'Video ', 'Video ', 'private', 'video', 'index', 9, '1', '1', 'view', 1, '2016-06-03 06:03:40'),
(294, 2, 293, 'Tambah Video', 'Tambah Video', 'private', 'video', 'add', 1, '1', '0', 'view', 1, '2015-06-03 09:21:15'),
(295, 2, 293, 'Edit Video', 'Edit Video', 'private', 'video', 'edit', 2, '1', '0', 'view', 1, '2015-06-03 09:22:58'),
(296, 2, 293, 'Display Video', 'Display Video', 'private', 'video', 'display', 3, '1', '0', 'view', 1, '2015-06-03 09:23:48'),
(297, 2, 293, 'Video Form', 'Video Form', 'private', 'video', 'form', 4, '1', '0', 'view', 1, '2015-06-03 09:24:20'),
(298, 2, 293, 'Process Video', 'Process Video', 'private', 'video', 'process', 5, '1', '0', 'view', 1, '2015-06-03 09:25:15'),
(299, 2, 156, 'Kontak Info', 'Kontak Info', 'private', 'kontak', 'index', 12, '1', '1', 'view', 1, '2016-05-20 05:23:14'),
(300, 2, 299, 'Process Kontak', 'Process Kontak', 'private', 'kontak', 'process', 1, '1', '0', 'process', 1, '2016-05-20 05:23:43'),
(301, 2, 156, 'Berita Cagub-Cawagub', 'Berita Cagub-Cawagub', 'private', 'informasi', 'index', 2, '1', '1', 'view', 1, '2016-10-13 13:02:02'),
(304, 2, 301, 'Tambah Informasi', 'Tambah Informasi', 'private', 'informasi', 'add', 1, '1', '1', 'view', 1, '2016-05-27 08:49:45'),
(305, 2, 301, 'Process Informasi', 'Process Informasi', 'private', 'informasi', 'process', 2, '1', '1', 'process', 1, '2016-05-30 06:59:18'),
(306, 2, 301, 'Edit Informasi', 'Edit Informasi', 'private', 'informasi', 'edit', 3, '1', '1', 'view', 1, '2016-05-27 10:32:10'),
(307, 2, 156, 'Opini', 'Opini', 'private', 'opini', 'index', 5, '1', '1', 'view', 1, '2016-06-03 05:50:31'),
(308, 2, 307, 'Tambah Opini', 'Tambah Opini', 'private', 'opini', 'add', 1, '1', '1', 'view', 1, '2016-05-30 06:14:40'),
(309, 2, 307, 'Process Opini', 'Opini', 'private', 'opini', 'process', 2, '1', '1', 'process', 1, '2016-05-30 07:00:30'),
(310, 2, 307, 'Edit Opini', 'Edit Opini', 'private', 'opini', 'edit', 3, '1', '1', 'view', 1, '2016-05-30 21:27:45'),
(311, 2, 156, 'Serba Serbi', 'Serba Serbi', 'private', 'sesebi', 'index', 6, '1', '1', 'view', 1, '2016-06-03 05:50:49'),
(312, 2, 311, 'Tambah Serba Serbi', 'Tambah Serba Serbi', 'private', 'sesebi', 'add', 1, '1', '1', 'view', 1, '2016-06-01 00:13:18'),
(313, 2, 311, 'Proses Serba Serbi', 'Proses Serba Serbi', 'private', 'sesebi', 'process', 2, '1', '1', 'process', 1, '2016-06-01 00:13:25'),
(314, 2, 311, 'Edit Serba Serbi', 'Edit Serba Serbi', 'private', 'sesebi', 'edit', 3, '1', '1', 'view', 1, '2016-06-01 00:13:31'),
(315, 2, 156, 'Foto', 'Foto', 'private', 'foto', 'index', 8, '1', '1', 'view', 1, '2016-06-03 06:03:26'),
(316, 2, 315, 'Tambah Album', 'Tambah Album', 'private', 'foto', 'add', 1, '1', '1', 'view', 1, '2016-06-02 05:31:59'),
(317, 2, 315, 'Process Album', 'Process Album', 'private', 'foto', 'process', 2, '1', '1', 'process', 1, '2016-06-02 05:32:22'),
(318, 2, 315, 'Edit Album', 'Edit Album', 'private', 'foto', 'edit', 3, '1', '1', 'view', 1, '2016-06-02 05:32:34'),
(319, 2, 315, 'Tambah Foto', 'Tambah Foto', 'private', 'foto', 'add_foto', 4, '1', '1', 'view', 1, '2016-06-02 05:33:17'),
(320, 2, 315, 'List Foto', 'List Foto', 'private', 'foto', 'list_foto', 5, '1', '1', 'view', 1, '2016-06-02 11:04:41'),
(322, 2, 315, 'Edit Foto', 'Edit Foto', 'private', 'foto', 'edit_foto', 6, '1', '1', 'view', 1, '2016-06-02 12:28:50'),
(323, 2, 156, 'Program', 'Program Aksi DMSI', 'private', 'program', 'index', 6, '1', '1', 'view', 1, '2016-06-03 06:01:48'),
(324, 2, 156, 'Bagan', 'Bagan', 'private', 'bagan', 'index', 7, '1', '1', 'view', 1, '2016-06-03 06:03:03'),
(325, 2, 323, 'Process Program', 'Process Program', 'private', 'program', 'process', 1, '1', '1', 'process', 1, '2016-06-03 08:20:01'),
(326, 2, 324, 'Process Bagan', 'Process Bagan', 'private', 'bagan', 'process', 1, '1', '1', 'process', 1, '2016-06-03 11:02:13'),
(327, 2, 156, 'Aspirasi', 'Aspirasi', 'private', 'aspirasi', 'index', 13, '1', '0', 'view', 1, '2016-06-09 16:00:28'),
(328, 2, 327, 'Read', 'read', 'private', 'aspirasi', 'read', 1, '1', '0', 'view', 1, '2016-07-27 14:48:47'),
(329, 2, 327, 'Process Aspirasi', 'Process Aspirasi', 'private', 'aspirasi', 'process', 2, '1', '0', 'process', 1, '2016-06-10 04:47:01'),
(330, 2, 327, 'Verifikasi Aspirasi', 'Verifikasi Aspirasi', 'private', 'aspirasi', 'verifikasi', 3, '1', '0', 'view', 1, '2016-06-10 05:38:08'),
(331, 2, 327, 'Jawaban', 'Jawaban', 'private', 'aspirasi', 'jawaban', 4, '1', '0', 'view', 1, '2016-06-10 08:11:19'),
(332, 2, 156, 'Regulasi', 'Regulasi', 'private', 'regulasi', 'index', 14, '1', '1', 'view', 1, '2016-06-13 04:40:44'),
(333, 2, 332, 'Tambah File', 'Tambah File', 'private', 'regulasi', 'add', 1, '1', '0', 'view', 1, '2016-06-13 05:17:33'),
(334, 2, 332, 'Process Regulasi', 'Process Regulasi', 'private', 'regulasi', 'process', 2, '1', '0', 'process', 1, '2016-06-13 05:59:48'),
(335, 2, 332, 'Edit Regulasi', 'Edit Regulasi', 'private', 'regulasi', 'edit', 3, '1', '1', 'view', 1, '2016-06-13 06:31:57'),
(336, 2, 156, 'Sponsorship', 'Sponsorship', 'private', 'sponsor', 'index', 15, '1', '1', 'view', 1, '2016-06-13 10:01:55'),
(337, 2, 336, 'Tambah Sponsor', 'Tambah Sponsor', 'private', 'sponsor', 'add', 1, '1', '1', 'view', 1, '2016-06-13 10:32:38'),
(338, 2, 336, 'Process Sponsor', 'Process Sponsor', 'private', 'sponsor', 'process', 2, '1', '1', 'process', 1, '2016-06-13 10:44:07'),
(339, 2, 336, 'Edit Sponsor', 'Edit Sponsor', 'private', 'sponsor', 'edit', 3, '1', '1', 'view', 1, '2016-06-14 04:27:50'),
(340, 2, 156, 'Harga', 'Harga', 'private', 'harga', 'index', 16, '1', '1', 'view', 1, '2016-06-17 05:08:09'),
(341, 2, 340, 'Tambah Harga', 'Tambah Harga', 'private', 'harga', 'add', 1, '1', '1', 'view', 1, '2016-06-20 09:27:18'),
(342, 2, 340, 'Process Harga', 'Process Harga', 'private', 'harga', 'process', 2, '1', '0', 'process', 1, '2016-06-21 05:12:14'),
(343, 2, 340, 'Edit Harga', 'Edit Harga', 'private', 'harga', 'edit', 3, '1', '1', 'view', 1, '2016-06-21 05:58:58'),
(344, 2, 340, 'Grafik Harga', 'Grafik Harga', 'private', 'harga', 'grafik', 4, '1', '1', 'view', 1, '2016-06-21 06:45:06'),
(345, 2, 340, 'Display Data Grafik', 'Display Data Grafik', 'private', 'harga', 'display_data_grafik', 5, '1', '1', 'view', 1, '2016-06-22 06:13:27'),
(346, 2, 144, 'Banner', 'Banner Home', 'private', 'banner', 'index', 3, '1', '1', 'view', 1, '2016-07-26 05:57:45'),
(347, 2, 346, 'Tambah Banner', 'Tambah Banner', 'private', 'banner', 'add', 1, '1', '1', 'view', 1, '2016-07-26 06:25:45'),
(348, 2, 346, 'Process Banner', 'Process Banner', 'private', 'banner', 'process', 2, '1', '1', 'process', 1, '2016-07-26 09:31:04'),
(349, 2, 346, 'Edit Banner', 'Edit Banner', 'private', 'banner', 'edit', 3, '1', '1', 'view', 1, '2016-07-26 09:59:07'),
(350, 2, 144, 'Sosial Media', 'Sosial Media', 'private', 'sosmed', 'index', 4, '1', '1', 'view', 1, '2016-08-16 09:26:57'),
(351, 2, 350, 'Tambah Sosmed', 'Tambah Sosmed', 'private', 'sosmed', 'add', 1, '1', '1', 'view', 1, '2016-07-27 06:25:05'),
(352, 2, 350, 'Process Sosmed', 'Process Sosmed', 'private', 'sosmed', 'process', 2, '1', '1', 'process', 1, '2016-07-27 07:12:32'),
(353, 2, 350, 'Edit Sosmed', 'Edit Sosmed', 'private', 'sosmed', 'edit', 3, '1', '1', 'view', 1, '2016-07-27 07:30:06'),
(354, 2, 144, 'Banner Atas', 'Banner Atas', 'private', 'bantas', 'index', 5, '1', '1', 'view', 1, '2016-08-16 09:32:54'),
(355, 2, 354, 'Process Bantas', 'Process Bantas', 'private', 'bantas', 'process', 1, '1', '0', 'process', 1, '2016-08-16 09:47:09'),
(356, 2, 157, 'List Anggota', 'List Anggota', 'private', 'relawan', 'anggota', 5, '1', '0', 'view', 1, '2016-10-16 10:18:23'),
(357, 2, 156, 'Registrasi', 'Registrasi', 'private', 'registrasi', 'index', 17, '1', '0', 'view', 1, '2016-08-23 11:46:57'),
(358, 2, 357, 'Process Registrasi', 'Process Registrasi', 'private', 'registrasi', 'process', 1, '1', '0', 'process', 1, '2016-08-24 06:17:52'),
(359, 2, 357, 'List Anggota Disetujui', 'List Anggota Disetujui', 'private', 'registrasi', 'disetujui', 2, '1', '0', 'view', 1, '2016-08-25 05:28:25'),
(360, 2, 336, 'List Iklan', 'List Iklan', 'private', 'sponsor', 'list_iklan', 4, '1', '1', 'view', 1, '2016-09-14 12:00:56'),
(361, 2, 336, 'Tambah Iklan', 'Tambah Iklan', 'private', 'sponsor', 'add_iklan', 5, '1', '0', 'view', 1, '2016-09-15 05:56:53'),
(362, 2, 336, 'Edit Iklan', 'Edit Iklan', 'private', 'sponsor', 'edit_iklan', 6, '1', '0', 'view', 1, '2016-09-15 10:47:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_settings_m`
--

CREATE TABLE IF NOT EXISTS `sys_settings_m` (
  `site_name` varchar(50) NOT NULL DEFAULT '',
  `site_description` text NOT NULL,
  `site_url` varchar(50) NOT NULL DEFAULT '',
  `site_email` varchar(50) NOT NULL DEFAULT '',
  `smtp_name` varchar(50) DEFAULT NULL,
  `smtp_host` varchar(50) NOT NULL DEFAULT '',
  `smtp_port` varchar(10) NOT NULL,
  `smtp_username` varchar(50) NOT NULL DEFAULT '',
  `smtp_password` varchar(50) NOT NULL DEFAULT '',
  `regnas_url` varchar(255) DEFAULT NULL,
  `maintenance` enum('yes','no') NOT NULL DEFAULT 'no',
  `maintenance_message` text NOT NULL,
  `version` varchar(10) NOT NULL DEFAULT '7.00',
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_settings_m`
--

INSERT INTO `sys_settings_m` (`site_name`, `site_description`, `site_url`, `site_email`, `smtp_name`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `regnas_url`, `maintenance`, `maintenance_message`, `version`, `mdb`, `mdd`) VALUES
('Dewan Minyak Sawit Indonesia', 'Dewan Minyak Sawit Indonesia - DMSI', 'http://dmsi.taa.co.id', 'dewan.sawit@dmsi.or.id', 'Gmail Smtp', 'mail.dmsi.or.id', '465', 'dewan.sawit@dmsi.or.id', 'dewan2006', 'http://localhost/siteregnas', 'no', '', '1.1', 1, '2016-05-19 10:26:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_user_authority_t`
--

CREATE TABLE IF NOT EXISTS `sys_user_authority_t` (
  `id_user` int(11) unsigned NOT NULL,
  `id_auth` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_user_authority_t`
--

INSERT INTO `sys_user_authority_t` (`id_user`, `id_auth`) VALUES
(1, 1),
(3, 3),
(4, 3),
(5, 4),
(6, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_user_login_t`
--

CREATE TABLE IF NOT EXISTS `sys_user_login_t` (
`id` bigint(20) unsigned NOT NULL,
  `id_user` int(11) unsigned NOT NULL,
  `login_date` datetime NOT NULL,
  `remote_ip` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1335 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_user_login_t`
--

INSERT INTO `sys_user_login_t` (`id`, `id_user`, `login_date`, `remote_ip`) VALUES
(1245, 5, '2016-09-26 03:09:33', '223.255.230.11'),
(1267, 6, '2016-09-27 10:41:10', '61.94.217.193'),
(1320, 1, '2016-10-06 06:01:52', '36.78.12.6'),
(1334, 3, '2016-10-18 06:45:53', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_user_m`
--

CREATE TABLE IF NOT EXISTS `sys_user_m` (
`id_user` int(11) unsigned NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_key` varchar(50) DEFAULT '123456789',
  `user_status` enum('active','blocked') DEFAULT 'active',
  `user_mail` varchar(100) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_user_m`
--

INSERT INTO `sys_user_m` (`id_user`, `user_name`, `user_pass`, `user_key`, `user_status`, `user_mail`, `mdb`, `mdd`) VALUES
(1, 'superadmin', 'Ojw/MT4wMjg2NQ==', '991441253', 'active', 'dm.sawit@gmail.com', 1, '2016-09-06 06:10:30'),
(3, 'dewi95', 'My0+NA==', '1895006130', 'active', 'dewi@gmail.com', 1, '2016-09-28 00:24:08'),
(4, 'nikenlarasati', 'PDU1LTI9PEM0QDA+NS01Lw==', '1054986050', 'active', 'niken.dmsi@gmail.com', 1, '2016-09-18 19:38:07'),
(5, 'saepul', 'PSgtP0I4', '698134640', 'active', 'bachrisaiful12@gmail.com', 1, '2016-09-18 20:54:13'),
(6, 'royan12345', 'WFpfYlxeZmQ=', '873187034', 'active', 'roy@yahoo.com', 1, '2016-09-22 04:44:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video_m`
--

CREATE TABLE IF NOT EXISTS `video_m` (
`id_video` int(10) unsigned NOT NULL,
  `judul_video` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` text COLLATE latin1_general_ci,
  `sumber` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `video_file` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `video_image` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `video_embed` text COLLATE latin1_general_ci,
  `tipe` enum('upload','embed') COLLATE latin1_general_ci DEFAULT NULL,
  `judul_english` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan_english` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `video_m`
--

INSERT INTO `video_m` (`id_video`, `judul_video`, `keterangan`, `sumber`, `video_file`, `video_image`, `video_embed`, `tipe`, `judul_english`, `keterangan_english`) VALUES
(24, ' VIDEO PRESENTASI POIDEC 2015', '<p>Selamat datang di Konferensi Pengembangan Industri Minyak Sawit (Palm Oil Industri Develompent Conference/POIDEC).</p>', 'Youtube', NULL, '24.jpg', '<p><iframe src="https://www.youtube.com/embed/Ol7lnK36HMU" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>', 'embed', 'POIDEC 2015 VIDEO PRESENTATION', '<p><span id="ouHighlight__0_16TO0_13">Welcome to the</span><span id="noHighlight_0.2221469010359629"> </span><span id="ouHighlight__51_62TO15_22">palm oil</span><span id="noHighlight_0.8497165496950454"> </span><span id="ouHighlight__29_49TO24_43">industry development</span><span id="noHighlight_0.8937584944249048"> </span><span id="ouHighlight__18_27TO45_54">Conference</span><span id="noHighlight_0.8466316346424103"> </span><span id="ouHighlight__64_64TO56_56">(</span><span id="ouHighlight__65_72TO57_64">Palm Oil</span><span id="noHighlight_0.04647544326937347"> </span><span id="ouHighlight__74_81TO66_73">Industry</span><span id="noHighlight_0.0040461244581666556"> </span><span id="ouHighlight__83_93TO75_85" class="">Develompent</span><span id="noHighlight_0.1611702181077148"> </span><span id="ouHighlight__95_104TO87_96" class="">Conference</span><span id="ouHighlight__105_105TO97_97" class="">/</span><span id="ouHighlight__106_111TO98_103" class="">POIDEC</span><span id="ouHighlight__112_113TO104_105" class="">).</span></p>'),
(31, 'MINYAK SAWIT INDONESIA - ARI LASSO FEAT AUDY SAWIT ', '<p>MINYAK SAWIT INDONESIA - ARI LASSO FEAT AUDY SAWIT&nbsp;</p>', 'Youtube', NULL, '31.jpg', '<p><iframe src="https://www.youtube.com/embed/7SipSK6Ff7E" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>', 'embed', 'PALM OIL INDONESIA - ARI LASSO FEAT AUDY SAWIT ', '<p>PALM OIL INDONESIA - ARI LASSO FEAT AUDY SAWIT</p>'),
(26, 'Mandatory Biofuel Dongkrak CPO', '<p>Dalam rangka mengurangi impor BBM, pemerintah meningkatkan penggunaan biofuel untuk sektor transportasi. Membahas persoalan ini bersama Ketua Umum Dewan Minyak Sawit Indonesia (DMSI) Derom Bangun.</p>', 'Youtube', NULL, '26.png', '<p><iframe src="https://www.youtube.com/embed/_KZEcdFX0Wc" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>', 'embed', 'Mandatory Biofuel Dongkrak CPO', '<p><span id="ouHighlight__0_22TO0_17" class="highlighted">In order to reduce</span><span id="noHighlight_0.48772869894840043"> </span><span id="ouHighlight__30_32TO19_22">FUEL</span><span id="noHighlight_0.5856512520912605"> </span><span id="ouHighlight__24_28TO24_30" class="">imports</span><span id="ouHighlight__33_44TO31_49">, the Government is</span><span id="noHighlight_0.9242125731745972"> </span><span id="ouHighlight__46_68TO51_71">increasing the use of</span><span id="noHighlight_0.5891031941365643"> </span><span id="ouHighlight__70_76TO73_80">biofuels</span><span id="noHighlight_0.11602717417226183"> </span><span id="ouHighlight__78_82TO82_84">for</span><span id="noHighlight_0.24605665169250734"> </span><span id="ouHighlight__91_102TO86_98" class="">the transport</span><span id="noHighlight_0.55145723623012"> </span><span id="ouHighlight__84_89TO100_105" class="">sector</span><span id="noHighlight_0.7838376188525678">.</span><span id="noHighlight_0.4624602993096334"> </span><span id="ouHighlight__105_112TO108_114" class="">Discuss</span><span id="noHighlight_0.4680186596376579"> </span><span id="ouHighlight__114_126TO116_125" class="">this issue</span><span id="noHighlight_0.04070327469221513"> </span><span id="ouHighlight__128_134TO127_139">together with</span><span id="noHighlight_0.8042389907217058"> </span><span id="ouHighlight__136_145TO141_155">the Chairman of</span><span id="noHighlight_0.6028644755769303"> the </span><span id="ouHighlight__166_174TO161_169">Indonesia</span><span id="noHighlight_0.40657205659684736"> </span><span id="ouHighlight__153_164TO171_178" class="">palm oil</span><span id="noHighlight_0.1602280688505513"> </span><span id="ouHighlight__147_151TO180_184" class="">Board</span><span id="noHighlight_0.09275078434844852"> </span><span id="ouHighlight__176_176TO186_186" class="">(</span><span id="ouHighlight__177_180TO187_190" class="">DMSI</span><span id="ouHighlight__181_181TO191_191" class="">)</span><span id="noHighlight_0.0647632035732697"> </span><span id="ouHighlight__183_187TO193_197" class="">Derom</span><span id="noHighlight_0.9970233418602803"> </span><span id="ouHighlight__189_195TO199_203" class="">wake.</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator_m`
--
ALTER TABLE `administrator_m`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `agenda_m`
--
ALTER TABLE `agenda_m`
 ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album_m`
--
ALTER TABLE `album_m`
 ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `aspirasi_m`
--
ALTER TABLE `aspirasi_m`
 ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indexes for table `bagan_m`
--
ALTER TABLE `bagan_m`
 ADD PRIMARY KEY (`id_bagan`);

--
-- Indexes for table `banner_m`
--
ALTER TABLE `banner_m`
 ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `bantas_m`
--
ALTER TABLE `bantas_m`
 ADD PRIMARY KEY (`id_bantas`);

--
-- Indexes for table `berita_m`
--
ALTER TABLE `berita_m`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bulan_m`
--
ALTER TABLE `bulan_m`
 ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `download_m`
--
ALTER TABLE `download_m`
 ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `foto_m`
--
ALTER TABLE `foto_m`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `harga_m`
--
ALTER TABLE `harga_m`
 ADD PRIMARY KEY (`id_harga`), ADD KEY `di_katharga` (`id_katharga`), ADD KEY `di_katharga_2` (`id_katharga`);

--
-- Indexes for table `iklan_m`
--
ALTER TABLE `iklan_m`
 ADD PRIMARY KEY (`id_iklan`), ADD KEY `id_sponsor` (`id_sponsor`);

--
-- Indexes for table `informasi_m`
--
ALTER TABLE `informasi_m`
 ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `katharga_m`
--
ALTER TABLE `katharga_m`
 ADD PRIMARY KEY (`id_katharga`);

--
-- Indexes for table `kontak_m`
--
ALTER TABLE `kontak_m`
 ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `logo_sosmed_m`
--
ALTER TABLE `logo_sosmed_m`
 ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `log_m`
--
ALTER TABLE `log_m`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `opini_m`
--
ALTER TABLE `opini_m`
 ADD PRIMARY KEY (`id_opini`);

--
-- Indexes for table `pengumuman_m`
--
ALTER TABLE `pengumuman_m`
 ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `profil_m`
--
ALTER TABLE `profil_m`
 ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `program_m`
--
ALTER TABLE `program_m`
 ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `registrasi_m`
--
ALTER TABLE `registrasi_m`
 ADD PRIMARY KEY (`id_registrasi`), ADD KEY `id_asosiasi` (`id_relawan`), ADD KEY `id_kota` (`id_kota`), ADD KEY `id_negara` (`id_negara`);

--
-- Indexes for table `regulasi_m`
--
ALTER TABLE `regulasi_m`
 ADD PRIMARY KEY (`id_regulasi`);

--
-- Indexes for table `relawan_m`
--
ALTER TABLE `relawan_m`
 ADD PRIMARY KEY (`id_relawan`);

--
-- Indexes for table `serbaserbi_m`
--
ALTER TABLE `serbaserbi_m`
 ADD PRIMARY KEY (`id_sesebi`);

--
-- Indexes for table `sosmed_m`
--
ALTER TABLE `sosmed_m`
 ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `sponsor_m`
--
ALTER TABLE `sponsor_m`
 ADD PRIMARY KEY (`id_sponsor`);

--
-- Indexes for table `spt_kota_m`
--
ALTER TABLE `spt_kota_m`
 ADD PRIMARY KEY (`id_kota`), ADD KEY `FK_city_m` (`id_propinsi`);

--
-- Indexes for table `spt_negara_m`
--
ALTER TABLE `spt_negara_m`
 ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `spt_propinsi_m`
--
ALTER TABLE `spt_propinsi_m`
 ADD PRIMARY KEY (`id_propinsi`), ADD KEY `FK_spt_propinsi_m` (`id_negara`);

--
-- Indexes for table `sub_katharga_m`
--
ALTER TABLE `sub_katharga_m`
 ADD PRIMARY KEY (`id_sub_katharga`), ADD KEY `id_katharga` (`id_katharga`), ADD KEY `id_katharga_2` (`id_katharga`), ADD KEY `id_katharga_3` (`id_katharga`);

--
-- Indexes for table `sys_authority_m`
--
ALTER TABLE `sys_authority_m`
 ADD PRIMARY KEY (`id_auth`);

--
-- Indexes for table `sys_build_menu_m`
--
ALTER TABLE `sys_build_menu_m`
 ADD PRIMARY KEY (`id_nav`);

--
-- Indexes for table `sys_group_m`
--
ALTER TABLE `sys_group_m`
 ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `sys_menu_authority_t`
--
ALTER TABLE `sys_menu_authority_t`
 ADD PRIMARY KEY (`id_nav`,`id_auth`), ADD KEY `FK_sys_menu_authority_t_2` (`id_auth`);

--
-- Indexes for table `sys_menu_m`
--
ALTER TABLE `sys_menu_m`
 ADD PRIMARY KEY (`id_nav`), ADD KEY `FK_frendmed_menu_m` (`id_group`);

--
-- Indexes for table `sys_user_authority_t`
--
ALTER TABLE `sys_user_authority_t`
 ADD PRIMARY KEY (`id_user`,`id_auth`), ADD KEY `FK_sys_user_authority_t` (`id_auth`);

--
-- Indexes for table `sys_user_login_t`
--
ALTER TABLE `sys_user_login_t`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_sys_user_login_t` (`id_user`);

--
-- Indexes for table `sys_user_m`
--
ALTER TABLE `sys_user_m`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video_m`
--
ALTER TABLE `video_m`
 ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_m`
--
ALTER TABLE `agenda_m`
MODIFY `id_agenda` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `album_m`
--
ALTER TABLE `album_m`
MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `aspirasi_m`
--
ALTER TABLE `aspirasi_m`
MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `bagan_m`
--
ALTER TABLE `bagan_m`
MODIFY `id_bagan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner_m`
--
ALTER TABLE `banner_m`
MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `berita_m`
--
ALTER TABLE `berita_m`
MODIFY `id_berita` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `bulan_m`
--
ALTER TABLE `bulan_m`
MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `download_m`
--
ALTER TABLE `download_m`
MODIFY `id_download` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `foto_m`
--
ALTER TABLE `foto_m`
MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `harga_m`
--
ALTER TABLE `harga_m`
MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `iklan_m`
--
ALTER TABLE `iklan_m`
MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `informasi_m`
--
ALTER TABLE `informasi_m`
MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `katharga_m`
--
ALTER TABLE `katharga_m`
MODIFY `id_katharga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kontak_m`
--
ALTER TABLE `kontak_m`
MODIFY `id_kontak` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logo_sosmed_m`
--
ALTER TABLE `logo_sosmed_m`
MODIFY `id_logo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `log_m`
--
ALTER TABLE `log_m`
MODIFY `id_log` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT for table `opini_m`
--
ALTER TABLE `opini_m`
MODIFY `id_opini` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman_m`
--
ALTER TABLE `pengumuman_m`
MODIFY `id_pengumuman` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `profil_m`
--
ALTER TABLE `profil_m`
MODIFY `id_info` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `program_m`
--
ALTER TABLE `program_m`
MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrasi_m`
--
ALTER TABLE `registrasi_m`
MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regulasi_m`
--
ALTER TABLE `regulasi_m`
MODIFY `id_regulasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `relawan_m`
--
ALTER TABLE `relawan_m`
MODIFY `id_relawan` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `serbaserbi_m`
--
ALTER TABLE `serbaserbi_m`
MODIFY `id_sesebi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sosmed_m`
--
ALTER TABLE `sosmed_m`
MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sponsor_m`
--
ALTER TABLE `sponsor_m`
MODIFY `id_sponsor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `spt_negara_m`
--
ALTER TABLE `spt_negara_m`
MODIFY `id_negara` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=897;
--
-- AUTO_INCREMENT for table `spt_propinsi_m`
--
ALTER TABLE `spt_propinsi_m`
MODIFY `id_propinsi` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `sub_katharga_m`
--
ALTER TABLE `sub_katharga_m`
MODIFY `id_sub_katharga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sys_authority_m`
--
ALTER TABLE `sys_authority_m`
MODIFY `id_auth` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sys_build_menu_m`
--
ALTER TABLE `sys_build_menu_m`
MODIFY `id_nav` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `sys_group_m`
--
ALTER TABLE `sys_group_m`
MODIFY `id_group` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sys_menu_m`
--
ALTER TABLE `sys_menu_m`
MODIFY `id_nav` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=363;
--
-- AUTO_INCREMENT for table `sys_user_login_t`
--
ALTER TABLE `sys_user_login_t`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1335;
--
-- AUTO_INCREMENT for table `sys_user_m`
--
ALTER TABLE `sys_user_m`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `video_m`
--
ALTER TABLE `video_m`
MODIFY `id_video` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `iklan_m`
--
ALTER TABLE `iklan_m`
ADD CONSTRAINT `iklan_m_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsor_m` (`id_sponsor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spt_propinsi_m`
--
ALTER TABLE `spt_propinsi_m`
ADD CONSTRAINT `FK_spt_propinsi_m` FOREIGN KEY (`id_negara`) REFERENCES `spt_negara_m` (`id_negara`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_katharga_m`
--
ALTER TABLE `sub_katharga_m`
ADD CONSTRAINT `sub_katharga_m_ibfk_1` FOREIGN KEY (`id_katharga`) REFERENCES `katharga_m` (`id_katharga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sys_menu_authority_t`
--
ALTER TABLE `sys_menu_authority_t`
ADD CONSTRAINT `FK_sys_menu_authority_t` FOREIGN KEY (`id_auth`) REFERENCES `sys_authority_m` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_sys_menu_authority_t_2` FOREIGN KEY (`id_nav`) REFERENCES `sys_menu_m` (`id_nav`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sys_user_authority_t`
--
ALTER TABLE `sys_user_authority_t`
ADD CONSTRAINT `FK_sys_user_authority_t` FOREIGN KEY (`id_auth`) REFERENCES `sys_authority_m` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_sys_user_authority_t_2` FOREIGN KEY (`id_user`) REFERENCES `sys_user_m` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sys_user_login_t`
--
ALTER TABLE `sys_user_login_t`
ADD CONSTRAINT `FK_sys_user_login_t` FOREIGN KEY (`id_user`) REFERENCES `sys_user_m` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
