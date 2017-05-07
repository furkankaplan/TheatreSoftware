-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 May 2017, 13:56:29
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

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
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE `filmler` (
  `id` int(2) NOT NULL,
  `film_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen` text COLLATE utf8_turkish_ci NOT NULL,
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

INSERT INTO `filmler` (`id`, `film_adi`, `yonetmen`, `oyuncular`, `ozet`, `fragman`, `afis`, `seans`, `gosterim_tarihi`, `gosterim_turu`) VALUES
(13, 'Martian', 'şipilberk', 'Hugh Jackman', '  yeni özet  ', 'https://www.youtube.com/embed/DiTECkLZ8HM', 'martian-dikey.jpg', 3, '2017-03-17', 0),
(14, 'Logan', 'yonetmen2', 'Matt Damon', ' ', '[12:02, 29.3.2017] +90 534 244 32 22: COMING Trailer Teaser (2017) Tom Holland, Robert Downey Jr. Marvel Movie HDSPIDER-MAN: HOMECOMING Trailer Teaser (2017) Tom Holland, Robert Downey Jr. Marvel Movi', 'logan-dikey.jpg', 3, '2017-03-08', 0),
(18, 'Lucy', 'yonetmen3', 'Scarlett, Morgan Freeman', ' ', 'www.youtube.com', 'lucy-dikey2.jpg', 3, '2017-03-29', 0),
(21, 'Spiderman Homecoming', 'yonetmen4', 'Kimler Yok ki?', 'spiderman yeni film', 'https://youtu.be/DYaHetc_h9U', 'skyfall-dikey.jpg', 5, '2017-04-25', 1),
(22, 'Godfather', 'yonetmen5', 'Al Pacino', 'geç', 'link link link', 'godfather.jpg', 2, '2017-04-07', 1),
(23, 'yeşil yol', 'yonetmen6', 'Kimler Yok ki?', 'Hugh\'n son Yolverin filmi', 'www.youtube.com', 'yesilyol-dikey.jpg', 2, '2017-04-13', 1);

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
  `ekleyen` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `guncelleyen` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guncellenme_tarihi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `slayt_adi`, `slide_resim`, `slide_yazi`, `slide_linki`, `ekleyen`, `guncelleyen`, `eklenme_tarihi`, `guncellenme_tarihi`) VALUES
(15, 'Rocky', 'rocky.jpg', 'Rocky', 'link link link', '', 'eray kanepe', '2017-03-31 08:07:27', '2017-05-03 20:10:02'),
(14, 'Logan', 'logan.png', 'Logan', 'Logan', '', 'eray kanepe', '2017-03-31 07:54:14', '2017-03-31 11:35:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_film`
--

CREATE TABLE `slider_film` (
  `id` int(2) NOT NULL,
  `slider_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resmi` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `slider_yazi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider_film`
--

INSERT INTO `slider_film` (`id`, `slider_adi`, `slider_resmi`, `slider_yazi`, `slider_link`) VALUES
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tiyatrolar`
--

CREATE TABLE `tiyatrolar` (
  `id` int(2) NOT NULL,
  `tiyatro_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen` text COLLATE utf8_turkish_ci NOT NULL,
  `oyuncular` varchar(175) COLLATE utf8_turkish_ci NOT NULL,
  `ozet` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `afis` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `seans` int(2) NOT NULL,
  `gosterim_tarihi` date NOT NULL DEFAULT '2017-03-29',
  `gosterim_turu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `tiyatrolar`
--

INSERT INTO `tiyatrolar` (`id`, `tiyatro_adi`, `yonetmen`, `oyuncular`, `ozet`, `afis`, `seans`, `gosterim_tarihi`, `gosterim_turu`) VALUES
(1, 'Huysuz', 'Engin Alkan', 'Selim Turgay Deli,Ayşe Sinem Korola', ' Moliere’in Huysuz’u lakabı ile anılan tiyatro oyuncusu Armağan Özcan yaşlılık günlerini bir huzurevinde geçirmektedir. İçinde bulunduğu durumdan sürekli şikayet eden eski oyuncu aksilikleri ile hayatı hem kendine hem de etrafındakilere zehir ederken eski parlak günlerini özlemle anmakta ve bir zamanlar sahnede başarı ile canlandırdığı Moliere karakterleri kafasının içinde dönüp durmaktadır. Bu durum neticesinde de sık sık gerçek dünya ile hayal dünyası arasında gidiş gelişler yaşar.', 'huysuz.jpg', 5, '2017-05-06', 0),
(2, 'Özgürlüğe Kaçış', 'Özer Tunca', 'Abdullah Türkay Uzun,Duygu Dikmen', ' Her yaştan izleyiciye tam bir görsel şölen vaat eden oyunda, bir kafesin içinde sessiz sakin yaşayıp giden bir grup evcil hamsterın özgürlük mücadelesi anlatılıyor. Kafeslerinde oturarak satılmayı bekleyen sevimli hamster ailesi, bir gün peynir çalarken yakalanarak kafese atılan Kocagöz adlı bir fare ile tanışırlar. Çiftliğin gizli köşelerinde özgürce yaşamaya alışmış olan Kocagöz, kafese girdiği andan itibaren kaçış planları yapmaya başlar. Zaman içinde bu planlarına hamsterları da dâhil eder ', 'özgürlüğe kaçış.jpg', 1, '2017-03-17', 0),
(3, 'Küçük Kara Balık', 'Ali Meriç', 'Şebnem Yurttutan,Çağatay Çanta', ' Annesi ile beraber bir derede yaşayan küçük karabalık bir gün yaşadığı yerin dışındaki dünyayı merak eder ve ona engel olmak isteyenlere karşı direnerek uzun bir yolculuğa çıkar. Bu yolculuğunda kurbağalarla, denizatlarıyla ve büyük kepçeli bir balıkçıl kuşuyla maceralara atılır.', 'küçük kara balık.jpg', 2, '2017-03-17', 0),
(4, 'Para', 'Özer Tunca', 'Suser Başaran', 'Üstad Necip Fazıl Kısaürek tarafından 1941-42 yılları arasında yazılan “Para” da bir banka patronu, O’nun ailesi ve yakın çevresinin hayatından bir kesit anlatılmaktadır.', 'para.jpg', 2, '2017-03-08', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

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
-- Tablo için indeksler `tiyatrolar`
--
ALTER TABLE `tiyatrolar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

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
--
-- Tablo için AUTO_INCREMENT değeri `tiyatrolar`
--
ALTER TABLE `tiyatrolar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
