-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Nis 2017, 10:47:00
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_sayfalar`
--

CREATE TABLE `alt_sayfalar` (
  `id` int(3) NOT NULL,
  `ust_sayfa_id` int(3) NOT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'aktif',
  `sayfa_basligi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kucuk_resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `galeri_adi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(10) NOT NULL,
  `urun_turu` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `guncelleyen` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_aciklama` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerigi` text COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guncellenme_tarihi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `urun_kodu` varchar(10) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alt_sayfalar`
--

INSERT INTO `alt_sayfalar` (`id`, `ust_sayfa_id`, `durum`, `sayfa_basligi`, `kucuk_resim`, `galeri_adi`, `fiyat`, `urun_turu`, `ekleyen`, `guncelleyen`, `sayfa_aciklama`, `sayfa_icerigi`, `eklenme_tarihi`, `guncellenme_tarihi`, `urun_kodu`) VALUES
(1, 1, 'aktif', 'Beta Maxi Takım', 'beta-maxi.jpg', 'Beta Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 08:29:28', '0000-00-00 00:00:00', '110'),
(2, 2, 'aktif', 'Ayfer Koltuk Takımı', 'ayfer-koltuk-takimi-kucuk-resim.jpg', 'Ayfer Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 08:32:45', '0000-00-00 00:00:00', '314'),
(3, 3, 'aktif', 'Adanus Köşe Takımı', 'adanus-kose.jpg', 'Adanus Köşe Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 08:32:45', '0000-00-00 00:00:00', '501'),
(4, 4, 'aktif', 'Ayfer Kanepe', 'ayfer.jpg', 'Ayfer Kanepe Galeri', 0, '', '', '', '', '', '2017-01-14 08:33:12', '0000-00-00 00:00:00', ''),
(5, 5, 'aktif', 'Cennet 90x190 Jumbo Yaylı Yatak', 'cennet-90-190-jumbo-yayli-yatak.png', 'Cennet 90x190 Jumbo Yaylı Yatak Galeri', 0, '', '', '', '', '', '2017-01-14 08:33:43', '0000-00-00 00:00:00', '704'),
(7, 2, 'aktif', 'Begüm Koltuk Takımı', 'begum-koltuk-takimi-kucuk-resim.jpg', 'Begüm Koltuk Takımı Galeri', 0, '3+3+3+1', '', '', '', 'Rahat koltuk takımı', '2017-01-14 09:15:45', '0000-00-00 00:00:00', '307'),
(8, 2, 'aktif', 'Elfida Koltuk Takımı', 'elfida-koltuk.jpg', 'Elfida Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:16:41', '0000-00-00 00:00:00', '313'),
(9, 2, 'aktif', 'Elif Koltuk Takımı', 'elif-koltuk.jpg', 'Elif Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:16:41', '0000-00-00 00:00:00', '305'),
(10, 2, 'aktif', 'Ezgi Koltuk Takımı', 'ezgi-koltuk.jpg', 'Ezgi Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:21:11', '0000-00-00 00:00:00', '311'),
(11, 2, 'aktif', 'Flora Koltuk Takımı', 'flora-koltuk.jpg', 'Flora Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:21:11', '0000-00-00 00:00:00', '310'),
(12, 2, 'aktif', 'Hanedan Koltuk Takımı', 'hanedan-koltuk.jpg', 'Hanedan Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:22:36', '0000-00-00 00:00:00', '301'),
(13, 2, 'aktif', 'Hürrem Koltuk Takımı', 'hurrem-koltuk.jpg', 'Hürrem Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:22:36', '0000-00-00 00:00:00', '304'),
(14, 2, 'aktif', 'Nergis Koltuk Takımı', 'nergis-koltuk.jpg', 'Nergis Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:23:06', '0000-00-00 00:00:00', '306'),
(15, 2, 'aktif', 'Nila Koltuk Takımı', 'nila-koltuk.jpg', 'Nila Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:23:06', '0000-00-00 00:00:00', '312'),
(16, 2, 'aktif', 'Saray Koltuk Takımı', 'saray-koltuk.jpg', 'Saray Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:23:43', '0000-00-00 00:00:00', '302'),
(17, 2, 'aktif', 'Seran Koltuk Takımı', 'seran-koltuk.jpg', 'Seran Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:23:43', '0000-00-00 00:00:00', '208'),
(18, 2, 'aktif', 'Sultan Koltuk Takımı', 'sultan-koltuk.jpg', 'Sultan Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:24:12', '0000-00-00 00:00:00', '303'),
(19, 2, 'aktif', 'Yağmur Koltuk Takımı', 'yagmur-koltuk.jpg', 'Yağmur Koltuk Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:24:12', '0000-00-00 00:00:00', '209'),
(20, 3, 'aktif', 'Arma Köşe Takımı', 'arma-kose.jpg', 'Arma Köşe Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:50:30', '0000-00-00 00:00:00', '502'),
(21, 3, 'aktif', 'Mina Köşe Takımı', 'mina-kose.jpg', 'Mina Köşe Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:51:04', '0000-00-00 00:00:00', '503'),
(22, 3, 'aktif', 'Palermo Köşe Takımı', 'palermo-kose.jpg', 'Palermo Köşe Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:51:18', '0000-00-00 00:00:00', '505'),
(23, 3, 'aktif', 'Yonca Köşe Takımı', 'yonca-kose.jpg', 'Yonca Köşe Takımı Galeri', 0, '', '', '', '', '', '2017-01-14 09:51:31', '0000-00-00 00:00:00', '504'),
(24, 1, 'aktif', 'Busella Maxi Takım', 'busella-maxi.jpg', 'Busella Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:55:37', '0000-00-00 00:00:00', '111'),
(25, 1, 'aktif', 'Carmen Maxi Takım', 'carmen-maxi.jpg', 'Carmen Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:03', '0000-00-00 00:00:00', '113'),
(26, 1, 'aktif', 'Damla Maxi Takım', 'damla-maxi.jpg', 'Damla Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:15', '0000-00-00 00:00:00', '106'),
(27, 1, 'aktif', 'Delux Maxi Takım', 'delux-maxi.jpg', 'Delux Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:24', '0000-00-00 00:00:00', '115'),
(28, 1, 'aktif', 'Efor Maxi Takım', 'efor-maxi.jpg', 'Efor Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:34', '0000-00-00 00:00:00', '112'),
(29, 1, 'aktif', 'Elenza Maxi Takım', 'elenza-maxi.jpg', 'Elenza Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:42', '0000-00-00 00:00:00', '103'),
(30, 1, 'aktif', 'Hilal Maxi Takım', 'hilal-maxi.jpg', 'Hilal Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:56:57', '0000-00-00 00:00:00', '114'),
(31, 1, 'aktif', 'İnova Maxi Takım', 'inova-maxi.jpg', 'İnova Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:57:08', '0000-00-00 00:00:00', '104'),
(32, 1, 'aktif', 'Lima Maxi Takım', 'lima-maxi.jpg', 'Lima Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:57:15', '0000-00-00 00:00:00', '102'),
(33, 1, 'aktif', 'Nehir Maxi Takım', 'nehir-maxi.jpg', 'Nehir Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:57:24', '0000-00-00 00:00:00', '101'),
(34, 1, 'aktif', 'Nilüfer Maxi Takım', 'nilufer-maxi.jpg', 'Nilüfer Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:57:35', '0000-00-00 00:00:00', '109'),
(35, 1, 'aktif', 'Secem Maxi Takım', 'secem-maxi.jpg', 'Secem Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:58:00', '0000-00-00 00:00:00', '107'),
(36, 1, 'aktif', 'Selen Maxi Takım', 'selen-maxi.jpg', 'Selen Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:58:26', '0000-00-00 00:00:00', '105'),
(37, 1, 'aktif', 'Yasemin Maxi Takım', 'yasemin-maxi.jpg', 'Yasemin Maxi Takım Galeri', 0, '', '', '', '', '', '2017-01-14 09:58:35', '0000-00-00 00:00:00', '108'),
(38, 4, 'aktif', 'Begüm Kanepe', 'begum.jpg', 'Begüm Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:32:47', '0000-00-00 00:00:00', ''),
(39, 4, 'aktif', 'Beta Kanepe', 'beta.jpg', 'Beta Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:33:57', '0000-00-00 00:00:00', ''),
(40, 4, 'aktif', 'Busella Kanepe', 'busella.jpg', 'Busella Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:34:24', '0000-00-00 00:00:00', ''),
(41, 4, 'aktif', 'Carmen Kanepe', 'carmen.jpg', 'Carmen Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:34:40', '0000-00-00 00:00:00', ''),
(42, 4, 'aktif', 'Damla Kanepe', 'damla.jpg', 'Damla Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:34:57', '0000-00-00 00:00:00', ''),
(43, 4, 'aktif', 'Delux Kanepe', 'delux.jpg', 'Delux Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:35:08', '0000-00-00 00:00:00', ''),
(44, 4, 'aktif', 'Efor Kanepe', 'efor.jpg', 'Efor Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:35:20', '0000-00-00 00:00:00', ''),
(45, 4, 'aktif', 'Elenza Kanepe', 'elenza.jpg', 'Elenza Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:35:31', '0000-00-00 00:00:00', ''),
(46, 4, 'aktif', 'Elfida Kanepe', 'elfida.jpg', 'Elfida Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:35:53', '0000-00-00 00:00:00', ''),
(47, 4, 'aktif', 'Elif Kanepe', 'elif.jpg', 'Elif Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:36:09', '0000-00-00 00:00:00', ''),
(48, 4, 'aktif', 'Ezgi Kanepe', 'ezgi.jpg', 'Ezgi Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:36:20', '0000-00-00 00:00:00', ''),
(49, 4, 'aktif', 'Flora Kanepe', 'flora.jpg', 'Flora Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:36:30', '0000-00-00 00:00:00', ''),
(50, 4, 'aktif', 'Hanedan Kanepe', 'hanedan.jpg', 'Hanedan Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:36:41', '0000-00-00 00:00:00', ''),
(51, 4, 'aktif', 'Hilal Kanepe', 'hilal.jpg', 'Hilal Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:36:51', '0000-00-00 00:00:00', ''),
(52, 4, 'aktif', 'Hürrem Kanepe', 'hurrem.jpg', 'Hürrem Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:37:01', '0000-00-00 00:00:00', ''),
(53, 4, 'aktif', 'İnova Kanepe', 'inova.jpg', 'İnova Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:37:11', '0000-00-00 00:00:00', ''),
(54, 4, 'aktif', 'Lima Kanepe', 'lima.jpg', 'Lima Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:37:52', '0000-00-00 00:00:00', ''),
(55, 4, 'aktif', 'Nehir Kanepe', 'nehir.jpg', 'Nehir Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:38:01', '0000-00-00 00:00:00', ''),
(56, 4, 'aktif', 'Nergis Kanepe', 'nergis.jpg', 'Nergis Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:38:10', '0000-00-00 00:00:00', ''),
(57, 4, 'aktif', 'Nila Kanepe', 'nila.jpg', 'Nila Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:38:27', '0000-00-00 00:00:00', ''),
(58, 4, 'aktif', 'Nilüfer Kanepe', 'nilufer.jpg', 'Nilüfer Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:38:38', '0000-00-00 00:00:00', ''),
(59, 4, 'aktif', 'Palermo Kanepe', 'palermo.jpg', 'Palermo Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:38:51', '0000-00-00 00:00:00', ''),
(60, 4, 'aktif', 'Saray Kanepe', 'saray.jpg', 'Saray Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:39:01', '0000-00-00 00:00:00', ''),
(61, 4, 'aktif', 'Secem Kanepe', 'secem.jpg', 'Secem Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:39:10', '0000-00-00 00:00:00', ''),
(62, 4, 'aktif', 'Seran Kanepe', 'seran.jpg', 'Seran Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:39:18', '0000-00-00 00:00:00', ''),
(63, 4, 'aktif', 'Sultan Kanepe', 'sultan.jpg', 'Sultan Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:39:32', '0000-00-00 00:00:00', ''),
(64, 4, 'aktif', 'Yağmur Kanepe', 'yagmur.jpg', 'Yağmur Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:39:42', '0000-00-00 00:00:00', ''),
(65, 4, 'aktif', 'Yasemin Kanepe', 'yasemin.jpg', 'Yasemin Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:40:19', '0000-00-00 00:00:00', ''),
(66, 4, 'aktif', 'Yonca Kanepe', 'yonca.jpg', 'Yonca Kanepe Galeri', 0, '', '', '', '', '', '2017-01-15 18:40:28', '0000-00-00 00:00:00', ''),
(67, 5, 'aktif', 'Gamze 90x190 Jumbo Yaylı Yatak', 'gamze-90-190-jumbo-yayli-yatak.png', 'Gamze 90x190 Jumbo Yaylı Yatak Galeri', 0, '', '', '', '', '', '2017-01-15 18:43:12', '0000-00-00 00:00:00', '702'),
(68, 5, 'aktif', 'Cennet 150x200 Jumbo Yaylı Yatak', 'cennet-150x200-jumbo-yayli-yatak.png', 'Cennet 150x200 Jumbo Yaylı Yatak Galeri', 0, '', '', '', '', '', '2017-01-15 18:44:14', '0000-00-00 00:00:00', '703'),
(69, 5, 'aktif', 'Gamze 150x200 Jumbo Yaylı Yatak', 'gamze-150x200-jumbo-yayli-yatak.png', 'Gamze 150x200 Jumbo Yaylı Yatak Galeri', 0, '', '', '', '', '', '2017-01-15 18:44:25', '0000-00-00 00:00:00', '701'),
(76, 6, 'aktif', 'Vizyon 90x190 Baza', 'vizyon-90-190-baza.png', 'Vizyon 90x190 Baza Galeri', 0, '', '', '', '', '', '2017-01-16 09:58:16', '0000-00-00 00:00:00', '602'),
(72, 6, 'aktif', 'Alara 150x200 Baza', 'alara-150-200-baza.png', 'Alara 150x200 Baza Galeri', 0, '', '', '', '', '', '2017-01-15 18:45:47', '0000-00-00 00:00:00', '403'),
(77, 6, 'aktif', 'Vizyon 150x200 Baza', 'vizyon-150-200-baza.png', 'Vizyon 150x200 Baza Galeri', 0, '', '', '', '', '', '2017-01-16 09:58:16', '0000-00-00 00:00:00', '402'),
(78, 6, 'aktif', 'Yakut 150x200 Baza', 'yakut-150-200-baza.png', 'Yakut 150x200 Baza Galeri', 0, '', '', '', '', '', '2017-01-16 09:58:16', '0000-00-00 00:00:00', '401'),
(81, 6, 'aktif', '	\r\nYakut 90x190 Baza', 'yakut-90-190-baza.png', 'Yakut 90x190 Baza Galeri', 0, '', '', '', '', '', '2017-01-17 10:21:30', '0000-00-00 00:00:00', ''),
(80, 6, 'aktif', 'Alara 90x190 Baza', 'alara-90-190-baza.png', 'Alara 90x190 Baza Galeri', 0, '', '', '', '', '', '2017-01-17 10:18:48', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `degerlerimiz`
--

CREATE TABLE `degerlerimiz` (
  `id` int(2) NOT NULL,
  `sira_no` int(2) NOT NULL,
  `deger1` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `deger2` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `deger3` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `deger4` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE `filmler` (
  `id` int(2) NOT NULL,
  `film_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `oyuncular` varchar(175) COLLATE utf8_turkish_ci NOT NULL,
  `ozet` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `fragman` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `afis` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `seans` int(2) NOT NULL,
  `gosterim_tarihi` date NOT NULL DEFAULT '2017-03-29',
  `gosterim_turu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`id`, `film_adi`, `oyuncular`, `ozet`, `fragman`, `afis`, `seans`, `gosterim_tarihi`, `gosterim_turu`) VALUES
(13, 'Logan', 'Hugh Jackman', ' ', 'https://www.youtube.com/embed/DiTECkLZ8HM', 'logan-dikey.jpg', 3, '2017-03-17', 0),
(14, 'Martian', 'Matt Damon', ' ', '[12:02, 29.3.2017] +90 534 244 32 22: COMING Trailer Teaser (2017) Tom Holland, Robert Downey Jr. Marvel Movie HDSPIDER-MAN: HOMECOMING Trailer Teaser (2017) Tom Holland, Robert Downey Jr. Marvel Movi', 'martian-dikey.jpg', 3, '2017-03-08', 0),
(18, 'Lucy', 'Scarlett, Morgan Freeman', ' ', 'www.youtube.com', 'lucy-dikey2.jpg', 3, '2017-03-29', 0),
(21, 'Spiderman Homecoming', 'Kimler Yok ki?', 'spiderman yeni film', 'https://youtu.be/DYaHetc_h9U', 'skyfall-dikey.jpg', 5, '2017-04-25', 1),
(22, 'Godfather', 'Al Pacino', 'geç', 'link link link', 'godfather.jpg', 2, '2017-04-07', 1),
(23, 'yeşil yol', 'Kimler Yok ki?', 'Hugh\'n son Yolverin filmi', 'www.youtube.com', 'yesilyol-dikey.jpg', 2, '2017-04-13', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeriler`
--

CREATE TABLE `galeriler` (
  `id` int(2) NOT NULL,
  `sira_no` int(4) DEFAULT '333',
  `galeri_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeriler`
--

INSERT INTO `galeriler` (`id`, `sira_no`, `galeri_adi`, `ekleyen`, `eklenme_tarihi`) VALUES
(2, 333, 'Begüm Koltuk Takımı Galeri', '', '2017-01-14 10:54:23'),
(3, 333, 'Ayfer Koltuk Takımı Galeri', '', '2017-01-15 19:41:40'),
(4, 333, 'Elfida Koltuk Takımı Galeri', '', '2017-01-15 20:13:52'),
(5, 333, 'Elif Koltuk Takımı Galeri', '', '2017-01-15 20:13:52'),
(6, 333, 'Ezgi Koltuk Takımı Galeri', '', '2017-01-15 20:14:09'),
(7, 333, 'Flora Koltuk Takımı Galeri', '', '2017-01-15 20:14:09'),
(8, 333, 'Hanedan Koltuk Takımı Galeri', '', '2017-01-15 20:14:27'),
(9, 333, 'Hürrem Koltuk Takımı Galeri', '', '2017-01-15 20:14:27'),
(10, 333, 'Nergis Koltuk Takımı Galeri', '', '2017-01-15 20:15:24'),
(11, 333, 'Nila Koltuk Takımı Galeri', '', '2017-01-15 20:15:24'),
(12, 333, 'Saray Koltuk Takımı Galeri', '', '2017-01-15 20:15:40'),
(13, 333, 'Seran Koltuk Takımı Galeri', '', '2017-01-15 20:15:40'),
(14, 333, 'Sultan Koltuk Takımı Galeri', '', '2017-01-15 20:16:04'),
(15, 333, 'Yağmur Koltuk Takımı Galeri', '', '2017-01-15 20:16:04'),
(16, 333, 'Beta Maxi Takım Galeri', '', '2017-01-16 08:35:13'),
(17, 333, 'Busella Maxi Takım Galeri', '', '2017-01-16 08:37:18'),
(18, 333, 'Carmen Maxi Takım Galeri', '', '2017-01-16 08:37:18'),
(19, 333, 'Damla Maxi Takım Galeri', '', '2017-01-16 08:37:33'),
(20, 333, 'Delux Maxi Takım Galeri', '', '2017-01-16 08:37:33'),
(21, 333, 'Efor Maxi Takım Galeri', '', '2017-01-16 08:37:44'),
(22, 333, 'Elenza Maxi Takım Galeri', '', '2017-01-16 08:37:44'),
(23, 333, 'Hilal Maxi Takım Galeri', '', '2017-01-16 08:37:57'),
(24, 333, 'İnova Maxi Takım Galeri', '', '2017-01-16 08:37:57'),
(25, 333, 'Lima Maxi Takım Galeri', '', '2017-01-16 08:38:14'),
(26, 333, 'Nehir Maxi Takım Galeri', '', '2017-01-16 08:38:14'),
(27, 333, 'Nilüfer Maxi Takım Galeri', '', '2017-01-16 08:38:34'),
(28, 333, 'Secem Maxi Takım Galeri', '', '2017-01-16 08:38:34'),
(29, 333, 'Selen Maxi Takım Galeri', '', '2017-01-16 08:38:52'),
(30, 333, 'Yasemin Maxi Takım Galeri', '', '2017-01-16 08:38:52'),
(31, 333, 'Adanus Köşe Takımı Galeri', '', '2017-01-16 10:30:31'),
(32, 333, 'Arma Köşe Takımı Galeri', '', '2017-01-16 10:30:31'),
(33, 333, 'Mina Köşe Takımı Galeri', '', '2017-01-16 10:30:46'),
(34, 333, 'Plaermo Köşe Takımı Galeri', '', '2017-01-16 10:30:46'),
(35, 333, 'Yonca Köşe Takımı Galeri', '', '2017-01-16 10:30:57'),
(77, 333, 'Alara 90x190 Baza Galeri', '', '2017-01-17 10:01:49'),
(37, 333, 'Vizyon 90x190 Baza Galeri', '', '2017-01-16 10:31:37'),
(38, 333, 'Yakut 90x190 Baza Galeri', '', '2017-01-16 10:31:46'),
(39, 333, 'Alara 150x200 Baza Galeri', '', '2017-01-16 10:32:09'),
(40, 333, 'Vizyon 150x200 Baza Galeri', '', '2017-01-16 10:32:09'),
(41, 333, 'Yakut 150x200 Baza Galeri', '', '2017-01-16 10:32:15'),
(42, 333, 'Ayfer Kanepe Galeri', '', '2017-01-17 08:51:52'),
(43, 333, 'Begüm Kanepe Galeri', '', '2017-01-17 09:00:57'),
(44, 333, 'Beta Kanepe Galeri', '', '2017-01-17 09:00:57'),
(45, 333, 'Busella Kanepe Galeri', '', '2017-01-17 09:02:06'),
(46, 333, 'Carmen Kanepe Galeri', '', '2017-01-17 09:02:06'),
(47, 333, 'Damla Kanepe Galeri', '', '2017-01-17 09:02:18'),
(48, 333, 'Delux Kanepe Galeri', '', '2017-01-17 09:02:18'),
(49, 333, 'Efor Kanepe Galeri', '', '2017-01-17 09:02:31'),
(50, 333, 'Elenza Kanepe Galeri', '', '2017-01-17 09:02:31'),
(51, 333, 'Elfida Kanepe Galeri', '', '2017-01-17 09:02:44'),
(52, 333, 'Elif Kanepe Galeri', '', '2017-01-17 09:02:44'),
(53, 333, 'Ezgi Kanepe Galeri', '', '2017-01-17 09:02:59'),
(54, 333, 'Flora Kanepe Galeri', '', '2017-01-17 09:02:59'),
(55, 333, 'Hanedan Kanepe Galeri', '', '2017-01-17 09:03:15'),
(56, 333, 'Hilal Kanepe Galeri', '', '2017-01-17 09:03:15'),
(57, 333, 'Hürrem Kanepe Galeri', '', '2017-01-17 09:03:28'),
(58, 333, 'İnova Kanepe Galeri', '', '2017-01-17 09:03:28'),
(59, 333, 'Lima Kanepe Galeri', '', '2017-01-17 09:03:40'),
(60, 333, 'Nehir Kanepe Galeri', '', '2017-01-17 09:03:40'),
(61, 333, 'Nergis Kanepe Galeri', '', '2017-01-17 09:03:58'),
(62, 333, 'Nila Kanepe Galeri', '', '2017-01-17 09:03:58'),
(63, 333, 'Nilüfer Kanepe Galeri', '', '2017-01-17 09:04:16'),
(64, 333, 'Palermo Kanepe Galeri', '', '2017-01-17 09:04:16'),
(65, 333, 'Saray Kanepe Galeri', '', '2017-01-17 09:04:27'),
(66, 333, 'Secem Kanepe Galeri', '', '2017-01-17 09:04:27'),
(67, 333, 'Selen Kanepe Galeri', '', '2017-01-17 09:04:39'),
(68, 333, 'Seran Kanepe Galeri', '', '2017-01-17 09:04:39'),
(69, 333, 'Sultan Kanepe Galeri', '', '2017-01-17 09:04:52'),
(70, 333, 'Yağmur Kanepe Galeri', '', '2017-01-17 09:04:52'),
(71, 333, 'Yasemin Kanepe Galeri', '', '2017-01-17 09:05:07'),
(72, 333, 'Yonca Kanepe Galeri', '', '2017-01-17 09:05:07'),
(73, 333, 'Gamze 150x200 Jumbo Yaylı Yatak Galeri', '', '2017-01-17 09:48:46'),
(74, 333, 'Gamze 90x190 Jumbo Yaylı Yatak Galeri', '', '2017-01-17 09:48:46'),
(75, 333, 'Cennet 90x190 Jumbo Yaylı Yatak Galeri', '', '2017-01-17 09:49:15'),
(76, 333, 'Cennet 150x200 Jumbo Yaylı Yatak Galeri', '', '2017-01-17 09:49:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_yazisi` varchar(3000) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resmi` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `harita_src`
--

CREATE TABLE `harita_src` (
  `id` int(11) NOT NULL,
  `src_kodu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_bilgileri`
--

CREATE TABLE `iletisim_bilgileri` (
  `id` int(1) NOT NULL,
  `adres` varchar(700) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(80) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(30) NOT NULL,
  `mail` varchar(80) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `harita_src` varchar(800) NOT NULL,
  `guncellenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `iletisim_bilgileri`
--

INSERT INTO `iletisim_bilgileri` (`id`, `adres`, `telefon`, `fax`, `mail`, `harita_src`, `guncellenme_tarihi`) VALUES
(1, 'Merkez : Kozan yolu Atatürk cad. No : 181  (Buruk Mezarligi civari) Saricam / ADANA  ', '0322 341 41 56    ', '0322 341 28 28', 'info@eraykanepe.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14716.960171059734!2d35.393862635836754!3d37.045167092028215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1528923a46959f69%3A0xf5f5862430683eb0!2sEray+Mobilya!5e0!3m2!1str!2str!4v1484650560985', '2017-02-06 07:50:34');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_formu`
--

CREATE TABLE `iletisim_formu` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_formu`
--

INSERT INTO `iletisim_formu` (`id`, `ad_soyad`, `email`, `telefon`, `konu`, `mesaj`, `tarih`) VALUES
(1, 'yasemin tavşan', 'yasmintvsn@gmail.com', 'Belirtilmed', 'deneme konu', 'deneme mesaj', '2017-01-17 14:05:07'),
(2, 'WDNtcrDm', '', '42601542736', 'sdBcGwsYyA', 'Xk6QYe http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', '2017-02-19 19:08:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koltuklar`
--

CREATE TABLE `koltuklar` (
  `id` int(2) NOT NULL,
  `koltuk_adi` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `koltuklar`
--

INSERT INTO `koltuklar` (`id`, `koltuk_adi`, `durum`) VALUES
(1, 'A1', 0),
(2, 'A2', 0),
(3, 'A3', 0),
(4, 'A4', 0),
(5, 'A5', 1),
(6, 'A6', 1),
(7, 'A7', 1),
(8, 'A8', 1),
(9, 'A9', 1),
(10, 'A9', 1),
(11, 'A10', 1),
(12, 'A11', 0),
(13, 'A12', 1),
(14, 'A13', 1),
(15, 'A14', 1),
(16, 'A15', 1),
(17, 'B1', 1),
(18, 'B2', 1),
(19, 'B3', 1),
(20, 'B4', 1),
(21, 'B5', 1),
(22, 'B6', 0),
(23, 'B7', 0),
(24, 'B8', 1),
(25, 'B9', 1),
(26, 'B10', 0),
(27, 'B11', 1),
(28, 'B12', 1),
(29, 'B13', 0),
(30, 'B14', 0),
(31, 'C1', 1),
(32, 'C2', 1),
(33, 'C3', 1),
(34, 'C4', 1),
(35, 'C5', 0),
(36, 'C6', 0),
(37, 'C7', 1),
(38, 'C8', 1),
(39, 'C9', 1),
(40, 'C10', 1),
(41, 'C11', 1),
(42, 'C12', 1),
(43, 'C13', 1),
(44, 'D1', 1),
(45, 'D2', 1),
(46, 'D3', 1),
(47, 'D4', 1),
(48, 'D5', 1),
(49, 'D6', 1),
(50, 'D7', 1),
(51, 'D8', 1),
(52, 'D9', 1),
(53, 'D10', 1),
(54, 'D11', 0),
(55, 'D12', 1),
(56, 'D13', 1),
(57, 'D14', 1),
(58, 'D15', 1),
(59, 'E14', 1),
(60, 'E13', 1),
(61, 'E12', 1),
(62, 'E11', 1),
(63, 'E10', 0),
(64, 'E9', 0),
(65, 'E8', 1),
(66, 'E7', 0),
(67, 'E6', 1),
(68, 'E5', 0),
(69, 'E4', 0),
(70, 'E3', 1),
(71, 'E2', 1),
(72, 'E1', 1),
(73, 'F13', 1),
(74, 'F12', 1),
(75, 'F11', 1),
(76, 'F10', 1),
(77, 'F9', 1),
(78, 'F8', 1),
(79, 'F7', 1),
(80, 'F6', 1),
(81, 'F5', 1),
(82, 'F4', 1),
(83, 'F3', 1),
(84, 'F2', 1),
(85, 'F1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(2) NOT NULL,
  `uye_statu` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `uye_eposta` varchar(80) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `uye_statu`, `uye_adi`, `uye_soyadi`, `uye_sifre`, `uye_eposta`) VALUES
(1, '1', 'eray', 'kanepe', '123abc', 'kaan@kaan.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL,
  `item` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(400) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '#',
  `ekleyen` varchar(60) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `popup_resmi` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(4) NOT NULL,
  `galeri_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'galerisiyok',
  `resim_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `galeri_adi`, `resim_adi`, `ekleyen`, `eklenme_tarihi`) VALUES
(5, 'Begüm Koltuk Takımı Galeri', 'begum-koltuk-1.jpg', '', '2017-01-14 13:55:41'),
(3, 'Begüm Koltuk Takımı Galeri', 'begum-koltuk-2.png', '', '2017-01-14 11:39:51'),
(4, 'Begüm Koltuk Takımı Galeri', 'begum-koltuk-3.png', '', '2017-01-14 11:39:51'),
(6, 'Ayfer Koltuk Takımı Galeri', 'ayfer-koltuk-1.jpg', '', '2017-01-15 19:44:18'),
(7, 'Ayfer Koltuk Takımı Galeri', 'ayfer-koltuk-2.png', '', '2017-01-15 19:46:33'),
(8, 'Ayfer Koltuk Takımı Galeri', 'ayfer-koltuk-3.png', '', '2017-01-15 19:46:40'),
(9, 'Elfida Koltuk Takımı Galeri', 'elfida-koltuk-1.jpg', '', '2017-01-15 19:49:52'),
(10, 'Elfida Koltuk Takımı Galeri', 'elfida-koltuk-2.png', '', '2017-01-15 19:50:00'),
(11, 'Elfida Koltuk Takımı Galeri', 'elfida-koltuk-3.png', '', '2017-01-15 19:50:06'),
(12, 'Elif Koltuk Takımı Galeri', 'elif-koltuk-1.jpg', '', '2017-01-15 19:51:43'),
(13, 'Elif Koltuk Takımı Galeri', 'elif-koltuk-2.png', '', '2017-01-15 19:51:49'),
(14, 'Elif Koltuk Takımı Galeri', 'elif-koltuk-3.png', '', '2017-01-15 19:51:54'),
(15, 'Ezgi Koltuk Takımı Galeri', 'ezgi-koltuk-3.png', '', '2017-01-15 19:52:13'),
(16, 'Ezgi Koltuk Takımı Galeri', 'ezgi-koltuk-2.png', '', '2017-01-15 19:52:18'),
(17, 'Ezgi Koltuk Takımı Galeri', 'ezgi-koltuk-1.jpg', '', '2017-01-15 19:52:30'),
(18, 'Flora Koltuk Takımı Galeri', 'flora-koltuk-1.jpg', '', '2017-01-15 19:53:00'),
(19, 'Flora Koltuk Takımı Galeri', 'flora-koltuk-2.png', '', '2017-01-15 19:53:06'),
(20, 'Flora Koltuk Takımı Galeri', 'flora-koltuk-3.png', '', '2017-01-15 19:53:15'),
(21, 'Hanedan Koltuk Takımı Galeri', 'hanedan-koltuk-3.png', '', '2017-01-15 19:54:10'),
(22, 'Hanedan Koltuk Takımı Galeri', 'hanedan-koltuk-2.png', '', '2017-01-15 19:54:18'),
(23, 'Hanedan Koltuk Takımı Galeri', 'hanedan-koltuk-1.jpg', '', '2017-01-15 19:54:27'),
(24, 'Hürrem Koltuk Takımı Galeri', 'hurrem-koltuk-1.jpg', '', '2017-01-15 19:55:02'),
(25, 'Hürrem Koltuk Takımı Galeri', 'hurrem-koltuk-2.png', '', '2017-01-15 19:55:08'),
(26, 'Hürrem Koltuk Takımı Galeri', 'hurrem-koltuk-3.png', '', '2017-01-15 19:55:14'),
(27, 'Nergis Koltuk Takımı Galeri', 'nergis-koltuk-2.png', '', '2017-01-15 19:55:48'),
(28, 'Nergis Koltuk Takımı Galeri', 'nergis-koltuk-1.jpg', '', '2017-01-15 19:55:56'),
(29, 'Nila Koltuk Takımı Galeri', 'nila-koltuk-1.jpg', '', '2017-01-15 19:56:20'),
(30, 'Nila Koltuk Takımı Galeri', 'nila-koltuk-2.png', '', '2017-01-15 19:56:25'),
(31, 'Nila Koltuk Takımı Galeri', 'nila-koltuk-3.png', '', '2017-01-15 19:56:29'),
(32, 'Saray Koltuk Takımı Galeri', 'saray-koltuk-3.png', '', '2017-01-15 19:56:47'),
(33, 'Saray Koltuk Takımı Galeri', 'saray-koltuk-2.png', '', '2017-01-15 19:56:51'),
(34, 'Saray Koltuk Takımı Galeri', 'saray-koltuk-1.jpg', '', '2017-01-15 19:56:55'),
(35, 'Seran Koltuk Takımı Galeri', 'seran-koltuk-1.jpg', '', '2017-01-15 19:58:06'),
(36, 'Seran Koltuk Takımı Galeri', 'seran-koltuk-2.png', '', '2017-01-15 19:58:13'),
(37, 'Seran Koltuk Takımı Galeri', 'seran-koltuk-3.png', '', '2017-01-15 19:58:21'),
(38, 'Sultan Koltuk Takımı Galeri', 'sultan-koltuk-3.png', '', '2017-01-15 19:58:51'),
(39, 'Sultan Koltuk Takımı Galeri', 'sultan-koltuk-2.png', '', '2017-01-15 19:58:55'),
(40, 'Sultan Koltuk Takımı Galeri', 'sultan-koltuk-1.jpg', '', '2017-01-15 19:59:04'),
(41, 'Yağmur Koltuk Takımı Galeri', 'yagmur-koltuk-1.jpg', '', '2017-01-15 20:00:06'),
(42, 'Yağmur Koltuk Takımı Galeri', 'yagmur-koltuk-2.png', '', '2017-01-15 20:00:12'),
(43, 'Yağmur Koltuk Takımı Galeri', 'yagmur-koltuk-3.png', '', '2017-01-15 20:00:16'),
(44, 'Beta Maxi Takım Galeri', 'beta-maxi-1.jpg', '', '2017-01-16 08:47:43'),
(45, 'Beta Maxi Takım Galeri', 'beta-maxi-2.png', '', '2017-01-16 08:47:48'),
(46, 'Beta Maxi Takım Galeri', 'beta-maxi-3.png', '', '2017-01-16 08:47:54'),
(47, 'Busella Maxi Takım Galeri', 'busella-maxi-3.png', '', '2017-01-16 08:50:15'),
(48, 'Busella Maxi Takım Galeri', 'busella-maxi-2.png', '', '2017-01-16 08:50:19'),
(49, 'Busella Maxi Takım Galeri', 'busella-maxi-1.jpg', '', '2017-01-16 08:50:25'),
(50, 'Carmen Maxi Takım Galeri', 'carmen-maxi-1.jpg', '', '2017-01-16 08:51:50'),
(51, 'Carmen Maxi Takım Galeri', 'carmen-maxi-2.png', '', '2017-01-16 08:51:54'),
(52, 'Carmen Maxi Takım Galeri', 'carmen-maxi-3.png', '', '2017-01-16 08:51:57'),
(53, 'Damla Maxi Takım Galeri', 'damla-maxi-3.png', '', '2017-01-16 08:53:02'),
(54, 'Damla Maxi Takım Galeri', 'damla-maxi-2.png', '', '2017-01-16 08:53:07'),
(55, 'Damla Maxi Takım Galeri', 'damla-maxi-1.jpg', '', '2017-01-16 08:53:13'),
(56, 'Delux Maxi Takım Galeri', 'delux-maxi-1.jpg', '', '2017-01-16 08:59:54'),
(57, 'Delux Maxi Takım Galeri', 'delux-maxi-2.png', '', '2017-01-16 08:59:59'),
(58, 'Delux Maxi Takım Galeri', 'delux-maxi-3.png', '', '2017-01-16 09:00:04'),
(59, 'Efor Maxi Takım Galeri', 'efor-maxi-3.png', '', '2017-01-16 09:00:14'),
(60, 'Efor Maxi Takım Galeri', 'efor-maxi-2.png', '', '2017-01-16 09:00:20'),
(61, 'Efor Maxi Takım Galeri', 'efor-maxi-1.jpg', '', '2017-01-16 09:00:25'),
(62, 'Elenza Maxi Takım Galeri', 'elenza-maxi-1.png', '', '2017-01-16 09:00:38'),
(63, 'Elenza Maxi Takım Galeri', 'elenza-maxi-2.png', '', '2017-01-16 09:01:14'),
(64, 'Elenza Maxi Takım Galeri', 'elenza-maxi-3.png', '', '2017-01-16 09:01:21'),
(65, 'Hilal Maxi Takım Galeri', 'hilal-maxi-3.png', '', '2017-01-16 09:01:32'),
(66, 'Hilal Maxi Takım Galeri', 'hilal-maxi-2.png', '', '2017-01-16 09:01:35'),
(67, 'Hilal Maxi Takım Galeri', 'hilal-maxi-1.jpg', '', '2017-01-16 09:01:45'),
(68, 'İnova Maxi Takım Galeri', 'inova-maxi-1.png', '', '2017-01-16 09:02:05'),
(69, 'İnova Maxi Takım Galeri', 'inova-maxi-2.png', '', '2017-01-16 09:02:09'),
(70, 'İnova Maxi Takım Galeri', 'inova-maxi-3.png', '', '2017-01-16 09:02:12'),
(71, 'Lima Maxi Takım Galeri', 'lima-maxi-3.png', '', '2017-01-16 09:02:22'),
(72, 'Lima Maxi Takım Galeri', 'lima-maxi-2.png', '', '2017-01-16 09:02:27'),
(73, 'Lima Maxi Takım Galeri', 'lima-maxi-1.jpg', '', '2017-01-16 09:02:39'),
(74, 'Nehir Maxi Takım Galeri', 'nehir-maxi-1.jpg', '', '2017-01-16 09:05:20'),
(75, 'Nehir Maxi Takım Galeri', 'nehir-maxi-2.png', '', '2017-01-16 09:05:26'),
(76, 'Nehir Maxi Takım Galeri', 'nehir-maxi-3.png', '', '2017-01-16 09:05:33'),
(77, 'Nilüfer Maxi Takım Galeri', 'nilufer-maxi-3.png', '', '2017-01-16 09:05:45'),
(78, 'Nilüfer Maxi Takım Galeri', 'nilufer-maxi-2.png', '', '2017-01-16 09:05:49'),
(79, 'Nilüfer Maxi Takım Galeri', 'nilufer-maxi-1.jpg', '', '2017-01-16 09:05:57'),
(80, 'Secem Maxi Takım Galeri', 'secem-maxi-1.jpg', '', '2017-01-16 09:06:09'),
(81, 'Secem Maxi Takım Galeri', 'secem-maxi-2.png', '', '2017-01-16 09:06:14'),
(82, 'Secem Maxi Takım Galeri', 'secem-maxi-3.png', '', '2017-01-16 09:06:40'),
(83, 'Selen Maxi Takım Galeri', 'selen-maxi-3.png', '', '2017-01-16 09:06:54'),
(84, 'Selen Maxi Takım Galeri', 'selen-maxi-2.png', '', '2017-01-16 09:06:59'),
(85, 'Selen Maxi Takım Galeri', 'selen-maxi-1.jpg', '', '2017-01-16 09:07:07'),
(86, 'Yasemin Maxi Takım Galeri', 'yasemin-maxi-1.jpg', '', '2017-01-16 09:07:16'),
(87, 'Yasemin Maxi Takım Galeri', 'yasemin-maxi-2.png', '', '2017-01-16 09:07:20'),
(88, 'Yasemin Maxi Takım Galeri', 'yasemin-maxi-3.png', '', '2017-01-16 09:07:25'),
(89, 'Alara 150x200 Baza Galeri', 'alara-150-200-baza.png', '', '2017-01-16 10:33:08'),
(90, 'Alara 150x200 Baza Galeri', 'alara-150-200-baza-2.png', '', '2017-01-16 10:33:13'),
(91, 'Alara 150x200 Baza Galeri', 'alara-150-200-baza-3.png', '', '2017-01-16 10:33:28'),
(92, 'Yakut 150x200 Baza Galeri', 'yakut-150-200-baza-3.png', '', '2017-01-16 10:33:37'),
(93, 'Yakut 150x200 Baza Galeri', 'yakut-150-200-baza-2.png', '', '2017-01-16 10:33:40'),
(94, 'Yakut 150x200 Baza Galeri', 'yakut-150-200-baza.png', '', '2017-01-16 10:33:50'),
(95, 'Vizyon 150x200 Baza Galeri', 'vizyon-150-200-baza.png', '', '2017-01-16 10:34:00'),
(96, 'Vizyon 150x200 Baza Galeri', 'vizyon-150-200-baza-2.png', '', '2017-01-16 10:34:04'),
(101, 'Vizyon 90x190 Baza Galeri', 'vizyon-90-190-baza-3.png', '', '2017-01-16 10:36:06'),
(107, 'Adanus Köşe Takımı Galeri', 'adanus-kose-1.jpg', '', '2017-01-17 08:09:28'),
(152, 'Alara 90x190 Baza Galeri', 'alara-90-190-baza.png', '', '2017-01-17 10:09:15'),
(153, 'Alara 90x190 Baza Galeri', 'alara-90-190-baza-2.png', '', '2017-01-17 10:09:15'),
(102, 'Vizyon 90x190 Baza Galeri', 'vizyon-90-190-baza-2.png', '', '2017-01-16 10:36:10'),
(103, 'Vizyon 90x190 Baza Galeri', 'vizyon-90-190-baza.png', '', '2017-01-16 10:36:27'),
(104, 'Yakut 90x190 Baza Galeri', 'yakut-90-190-baza.png', '', '2017-01-16 10:40:21'),
(105, 'Yakut 90x190 Baza Galeri', 'yakut-90-190-baza-2.png', '', '2017-01-16 10:40:25'),
(106, 'Yakut 90x190 Baza Galeri', 'yakut-90-190-baza-3.png', '', '2017-01-16 10:40:30'),
(108, 'Adanus Köşe Takımı Galeri', 'adanus-kose-2.png', '', '2017-01-17 08:09:28'),
(109, 'Arma Köşe Takımı Galeri', 'arma-kose-1.jpg', '', '2017-01-17 08:11:20'),
(110, 'Arma Köşe Takımı Galeri', 'arma-kose-2.png', '', '2017-01-17 08:11:20'),
(111, 'Mina Köşe Takımı Galeri', 'mina-kose-1.jpg', '', '2017-01-17 08:12:59'),
(112, 'Mina Köşe Takımı Galeri', 'mina-kose-2.png', '', '2017-01-17 08:12:59'),
(113, 'Palermo Köşe Takımı Galeri', 'palermo-kose-1.jpg', '', '2017-01-17 08:13:31'),
(114, 'Palermo Köşe Takımı Galeri', 'palermo-kose-2.png', '', '2017-01-17 08:13:31'),
(115, 'Yonca Köşe Takımı Galeri', 'yonca-kose-1.jpg', '', '2017-01-17 08:14:40'),
(116, 'Yonca Köşe Takımı Galeri', 'yonca-kose-2.png', '', '2017-01-17 08:14:40'),
(117, 'Ayfer Kanepe Galeri', 'ayfer.jpg', '', '2017-01-17 08:52:24'),
(118, 'Begüm Kanepe Galeri', 'begum.jpg', '', '2017-01-17 09:06:21'),
(119, 'Beta Kanepe Galeri', 'beta.jpg', '', '2017-01-17 09:06:43'),
(120, 'Busella Kanepe Galeri', 'busella.jpg', '', '2017-01-17 09:06:56'),
(121, 'Carmen Kanepe Galeri', 'carmen.jpg', '', '2017-01-17 09:07:04'),
(122, 'Damla Kanepe Galeri', 'damla.jpg', '', '2017-01-17 09:07:14'),
(123, 'Delux Kanepe Galeri', 'delux.jpg', '', '2017-01-17 09:07:23'),
(124, 'Efor Kanepe Galeri', 'efor.jpg', '', '2017-01-17 09:07:32'),
(125, 'Elenza Kanepe Galeri', 'elenza.jpg', '', '2017-01-17 09:07:43'),
(126, 'Elfida Kanepe Galeri', 'elfida.jpg', '', '2017-01-17 09:07:53'),
(127, 'Elif Kanepe Galeri', 'elif.jpg', '', '2017-01-17 09:08:02'),
(128, 'Ezgi Kanepe Galeri', 'ezgi.jpg', '', '2017-01-17 09:08:13'),
(129, 'Flora Kanepe Galeri', 'flora.jpg', '', '2017-01-17 09:08:21'),
(130, 'Hanedan Kanepe Galeri', 'hanedan.jpg', '', '2017-01-17 09:08:34'),
(131, 'Hilal Kanepe Galeri', 'hilal.jpg', '', '2017-01-17 09:08:45'),
(132, 'Hürrem Kanepe Galeri', 'hurrem.jpg', '', '2017-01-17 09:08:56'),
(133, 'İnova Kanepe Galeri', 'inova.jpg', '', '2017-01-17 09:09:09'),
(134, 'Lima Kanepe Galeri', 'lima.jpg', '', '2017-01-17 09:09:20'),
(135, 'Nehir Kanepe Galeri', 'nehir.jpg', '', '2017-01-17 09:09:32'),
(136, 'Nergis Kanepe Galeri', 'nergis.jpg', '', '2017-01-17 09:09:41'),
(137, 'Nila Kanepe Galeri', 'nila.jpg', '', '2017-01-17 09:09:51'),
(138, 'Nilüfer Kanepe Galeri', 'nilufer.jpg', '', '2017-01-17 09:10:08'),
(139, 'Palermo Kanepe Galeri', 'palermo.jpg', '', '2017-01-17 09:10:19'),
(140, 'Saray Kanepe Galeri', 'saray.jpg', '', '2017-01-17 09:10:30'),
(141, 'Secem Kanepe Galeri', 'secem.jpg', '', '2017-01-17 09:10:41'),
(142, 'Selen Kanepe Galeri', 'selen.jpg', '', '2017-01-17 09:10:55'),
(143, 'Seran Kanepe Galeri', 'seran.jpg', '', '2017-01-17 09:11:13'),
(144, 'Sultan Kanepe Galeri', 'sultan.jpg', '', '2017-01-17 09:11:25'),
(145, 'Yağmur Kanepe Galeri', 'yagmur.jpg', '', '2017-01-17 09:11:40'),
(146, 'Yasemin Kanepe Galeri', 'yasemin.jpg', '', '2017-01-17 09:11:49'),
(147, 'Yonca Kanepe Galeri', 'yonca.jpg', '', '2017-01-17 09:17:30'),
(148, 'Cennet 150x200 Jumbo Yaylı Yatak Galeri', 'cennet-150-200-yayli-yatak.png', '', '2017-01-17 09:50:44'),
(149, 'Cennet 90x190 Jumbo Yaylı Yatak Galeri', 'cennet-90-190-yayli-yatak.png', '', '2017-01-17 09:50:44'),
(150, 'Gamze 90x190 Jumbo Yaylı Yatak Galeri', 'gamze-90-190-yayli-yatak.png', '', '2017-01-17 09:58:07'),
(151, 'Gamze 150x200 Jumbo Yaylı Yatak Galeri', 'gamze-150-200-yayli-yatak.png', '', '2017-01-17 09:58:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(2) NOT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'aktif',
  `sayfa_basligi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `guncelleyen` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_aciklama` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerigi` text COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guncellenme_tarihi` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `durum`, `sayfa_basligi`, `ekleyen`, `guncelleyen`, `sayfa_aciklama`, `sayfa_icerigi`, `eklenme_tarihi`, `guncellenme_tarihi`) VALUES
(4, 'aktif', 'KANEPELER', 'Ahmet Nacar', '', '', '', '2017-01-14 08:31:08', '0000-00-00 00:00:00'),
(5, 'aktif', 'YATAK', 'Ahmet Nacar', '', '', '', '2017-01-14 08:31:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(3) NOT NULL,
  `slayt_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slide_resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slide_yazi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slide_linki` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `slide_alt_yazisi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `guncelleyen` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guncellenme_tarihi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `slayt_adi`, `slide_resim`, `slide_yazi`, `slide_linki`, `slide_alt_yazisi`, `ekleyen`, `guncelleyen`, `eklenme_tarihi`, `guncellenme_tarihi`) VALUES
(15, 'Rocky', 'rocky.jpg', 'Rocky', 'link link link', 'das', '', 'eray kanepe', '2017-03-31 08:07:27', '2017-03-31 11:41:16'),
(14, 'Logan', 'logan.png', 'Logan', 'Logan', 'fdgfd', '', 'eray kanepe', '2017-03-31 07:54:14', '2017-03-31 11:35:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_film`
--

CREATE TABLE `slider_film` (
  `id` int(2) NOT NULL,
  `slider_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resmi` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `slider_yazi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `slide_link` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider_film`
--

INSERT INTO `slider_film` (`id`, `slider_adi`, `slider_resmi`, `slider_yazi`, `slide_link`) VALUES
(3, '3uncu', '3resim', '3yazı', '3link'),
(5, '5inci', '', '5yazı', ''),
(6, 'bfdb', '4.JPG', 'df', 'd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedya`
--

CREATE TABLE `sosyalmedya` (
  `id` int(1) NOT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '#',
  `googleplus` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '#',
  `instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '#'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`id`, `facebook`, `googleplus`, `instagram`) VALUES
(1, 'https://www.facebook.com/biletcitest302', 'http://www.plus.google.com/biletci', 'http://www.instagram.com/biletcitest');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alt_sayfalar`
--
ALTER TABLE `alt_sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `degerlerimiz`
--
ALTER TABLE `degerlerimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `filmler`
--
ALTER TABLE `filmler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeriler`
--
ALTER TABLE `galeriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `harita_src`
--
ALTER TABLE `harita_src`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim_formu`
--
ALTER TABLE `iletisim_formu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `koltuklar`
--
ALTER TABLE `koltuklar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slayt_adi` (`slayt_adi`);

--
-- Tablo için indeksler `slider_film`
--
ALTER TABLE `slider_film`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_adi` (`slider_adi`);

--
-- Tablo için indeksler `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alt_sayfalar`
--
ALTER TABLE `alt_sayfalar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- Tablo için AUTO_INCREMENT değeri `degerlerimiz`
--
ALTER TABLE `degerlerimiz`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `filmler`
--
ALTER TABLE `filmler`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Tablo için AUTO_INCREMENT değeri `galeriler`
--
ALTER TABLE `galeriler`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- Tablo için AUTO_INCREMENT değeri `harita_src`
--
ALTER TABLE `harita_src`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim_formu`
--
ALTER TABLE `iletisim_formu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `koltuklar`
--
ALTER TABLE `koltuklar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `slider_film`
--
ALTER TABLE `slider_film`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;