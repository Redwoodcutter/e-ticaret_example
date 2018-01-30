-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 Oca 2018, 14:59:02
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soy` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad_soy`, `email`, `sifre`, `durum`) VALUES
(1, 'Oguz K', 'oguzkumcular@gmail.com', 'deneme', 'aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smtpserver` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smtpport` int(11) NOT NULL,
  `smtpemail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Fax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `Iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`Id`, `Ad`, `Keywords`, `Description`, `smtpserver`, `smtpport`, `smtpemail`, `Password`, `Adres`, `Sehir`, `Tel`, `Fax`, `Email`, `Hakkimizda`, `Iletisim`, `Facebook`, `Twitter`) VALUES
(1, 'Online Alış-veriş', 'Online alış veriş sitesi', 'Ucuz aliş veriş sitesi', 'denemeserver', 1111, 'denemeemail', '123456', '100.yil mah. 1004. cad hat yapi2', 'Karabük', '0506944505', 'sadasdas', 'evritinksamtinkhepin@gmail.com', '<p><img alt=\"\" src=\"https://www.sahibinden.com/images/category_promoter/bilgisayar-lenovo.jpg\" style=\"float:left; height:86px; margin-left:20px; margin-right:20px; width:100px\" />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Feugiat in ante metus dictum at tempor. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus aenean. Viverra suspendisse potenti nullam ac. Et malesuada fames ac turpis egestas integer eget. Et ultrices neque ornare aenean euismod elementum. Viverra ipsum nunc aliquet bibendum. Neque vitae tempus quam pellentesque nec nam. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Enim ut tellus elementum sagittis vitae. Ac odio tempor orci dapibus ultrices in iaculis nunc. Vitae congue eu consequat ac felis donec et. Ut ornare lectus sit amet. Nunc consequat interdum varius sit. Sed libero enim sed faucibus turpis in eu. Nisi vitae suscipit tellus mauris a diam maecenas sed. Velit dignissim sodales ut eu. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem.</p>\r\n\r\n<p>Sodales neque sodales ut etiam sit amet nisl purus. Bibendum at varius vel pharetra vel turpis nunc. Eget sit amet tellus cras adipiscing enim. A condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Id semper risus in hendrerit gravida rutrum quisque non tellus. Libero justo laoreet sit amet cursus sit amet dictum. Varius quam quisque id diam vel quam. Fringilla&nbsp;<img alt=\"\" src=\"https://www.google.com.tr/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=0ahUKEwjlg__v47_YAhVOY1AKHSD3BsYQjRwIBw&amp;url=https%3A%2F%2Fwww.sahibinden.com%2Fkategori%2Fbilgisayar&amp;psig=AOvVaw2O6mRVpXRtmj8xjlGUnCS9&amp;ust=1515205870911570\" style=\"float:left\" /></p>\r\n', '<p>&Ccedil;alişma saatlerimiz 09.00-23.00 arasındadır. 13.00&#39;den &ouml;nce yapilan siparişler aynı g&uuml;n kargoya verilmektedir.</p>\r\n', 'Onlinealisveris', '@alisveris');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Parent_Id` int(50) NOT NULL,
  `Adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Description` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `Parent_Id`, `Adi`, `Description`, `Keywords`, `Resim`, `Durum`, `Tarih`) VALUES
(1, 0, 'Tv & Ses & Görüntü', 'Tv üniteleri', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00'),
(2, 0, 'Telefon', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-12 00:50:46'),
(3, 0, 'Bilgisayar & Tablet', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-12 00:51:31'),
(4, 0, 'Beyaz Eşya ve Ankastre', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-12 00:51:31'),
(5, 0, 'Elektrikli Ev Aleti', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 02:06:43'),
(6, 0, 'Kişisel Bakım', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 02:06:43'),
(7, 0, 'Spor', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 02:06:43'),
(8, 0, 'Foto Kamera', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 02:06:43'),
(9, 0, 'Aksesuar', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 02:06:43'),
(12, 0, 'Uydu Alıcılar', 'NULL', 'NULL', 'NULL', 'NULL', '2017-12-16 06:41:50'),
(13, 1, 'Tv Sehbası', 'Tv Sehbasi kaliteli', 'Tv için özel sehba', 'NULL', 'NULL', '0000-00-00 00:00:00'),
(14, 2, 'İos Telefonlar', '', '', '', '', '2017-12-16 06:42:52'),
(15, 2, 'Android Telefonlar', '', '', '', '', '2017-12-16 06:42:52'),
(16, 3, 'Masaüstü Bilgisayar', '', '', '', '', '2017-12-16 06:43:46'),
(17, 3, 'Laptop', '', '', '', '', '2017-12-16 06:43:46'),
(18, 3, 'Tablet', '', '', '', '', '2017-12-16 06:43:55'),
(19, 4, 'Buzdolabı', '', '', '', '', '2017-12-16 06:45:20'),
(20, 4, 'Çamaşır Makinesi', '', '', '', '', '2017-12-16 06:45:20'),
(21, 4, 'Bulaşık Makinesi', '', '', '', '', '2017-12-16 06:45:20'),
(22, 4, 'Klima', '', '', '', '', '2017-12-16 06:45:20'),
(23, 4, 'Fırın', '', '', '', '', '2017-12-16 06:45:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Ad_soy` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `Eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `Mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `Okundu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`Id`, `Ip`, `Ad_soy`, `Eposta`, `Tel`, `Mesaj`, `Okundu`) VALUES
(4, '::1', 'ebubekir', 'ebubekir@gmail.com', '11112312312321', 'deneme bize yazin list ', 0),
(2, '', 'Oguz Kumcular', 'evritinksamtinkhepin@gmail.com', '05069445054', '123', 0),
(3, '::1', 'Oguz Kumcular', 'evritinksamtinkhepin@gmail.com', '05069445054', ' remote deneme', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

DROP TABLE IF EXISTS `sehirler`;
CREATE TABLE IF NOT EXISTS `sehirler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Adı` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `Alan_Kodu` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`Id`, `Adı`, `Alan_Kodu`) VALUES
(1, 'ADANA', 1000),
(2, 'ADIYAMAN', 2000),
(3, 'AFYON', 3000),
(4, 'AĞRI', 4000),
(5, 'AMASYA', 5000),
(6, 'ANKARA', 6000),
(7, 'ANTALYA', 7000),
(8, 'ARTVİN', 8000),
(9, 'AYDIN', 9000),
(10, 'BALIKESİR', 10000),
(11, 'BİLECİK', 11000),
(12, 'BİNGÖL', 12000),
(42, 'KONYA', 42000),
(51, 'NİĞDE', 51000),
(50, 'NEVŞEHİR', 50000),
(49, 'MUŞ', 49000),
(48, 'MUĞLA', 48000),
(47, 'MARDİN', 47000),
(46, 'MARAŞ', 46000),
(45, 'MANİSA', 45000),
(44, 'MALATYA', 44000),
(43, 'KÜTAHYA', 43000),
(41, 'KOCAELİ', 41000),
(13, 'BİTLİS', 13000),
(14, 'BOLU', 14000),
(15, 'BURDUR', 15000),
(16, 'BURSA', 16000),
(17, 'ÇANAKKALE', 17000),
(18, 'ÇANKIRI', 18000),
(19, 'ÇORUM', 19000),
(20, 'DENİZLİ', 20000),
(21, 'DİYARBAKIR', 21000),
(22, 'EDİRNE', 22000),
(23, 'ELAZIĞ', 23000),
(24, 'ERZİNCAN', 24000),
(25, 'ERZURUM', 25000),
(26, 'ESKİŞEHİR', 26000),
(27, 'GAZİANTEP', 27000),
(28, 'GİRESUN', 28000),
(29, 'GÜMÜŞANE', 29000),
(30, 'HAKKARİ', 30000),
(31, 'HATAY', 31000),
(32, 'ISPARTA', 32000),
(33, 'İÇEL', 33000),
(34, 'İSTANBUL', 34000),
(35, 'İZMİR', 35000),
(36, 'KARS', 36000),
(37, 'KASTAMONU', 37000),
(38, 'KAYSERİ', 38000),
(39, 'KIRKLARELİ', 39000),
(40, 'KIRŞEHİR', 40000),
(52, 'ORDU', 52000),
(53, 'RİZE', 53000),
(54, 'SAKARYA', 54000),
(55, 'SAMSUN', 55000),
(56, 'SİİRT', 56000),
(57, 'SİNOP', 57000),
(58, 'SİVAS', 58000),
(59, 'TEKİRDAĞ', 59000),
(60, 'TOKAT', 60000),
(61, 'TRABZON', 61000),
(62, 'TUNCELİ', 62000),
(63, 'ŞANLIURFA', 63000),
(64, 'UŞAK', 64000),
(65, 'VAN', 65000),
(66, 'YOZGAT', 66000),
(67, 'ZONGULDAK', 67000),
(68, 'AKSARAY', 68000),
(69, 'BAYBURT', 69000),
(70, 'KARAMAN', 70000),
(71, 'KIRIKKALE', 71000),
(72, 'BATMAN', 72000),
(73, 'ŞIRNAK', 73000),
(74, 'BARTIN', 74000),
(75, 'ARDAHAN', 75000),
(76, 'IĞDIR', 76000),
(77, 'YALOVA', 77000),
(78, 'KARABÜK', 78000),
(79, 'KİLİS', 79000),
(80, 'OSMANİYE', 80000),
(81, 'DÜZCE', 81000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE IF NOT EXISTS `sepet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Musteri_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Urun_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Adet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Musteri_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tutar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Odeme_sekli` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Odeme_durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Siparis_durumu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `İlce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Sehir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Ad_Soy` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Kargo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`Id`, `Musteri_id`, `Tarih`, `Ip`, `Tutar`, `Odeme_sekli`, `Odeme_durum`, `Siparis_durumu`, `Adres`, `İlce`, `Sehir`, `Tel`, `Ad_Soy`, `Eposta`, `Kargo`, `Aciklama`) VALUES
(10, '3', '2018-01-13 13:11:37', '::1', '300 TL', '', '', 'Iptal', '100.yil mahallesi', '', 'Karabük', '0506944****', 'Oguz Kumcular', '', 'https://www.araskargo.com.tr/web_18712_1/images/logo.bmp', ''),
(9, '3', '2018-01-13 12:42:57', '::1', '150 TL', '', '', 'Iptal', '100.yil mahallesi', '', 'Karabük', '0506944****', 'Oguz Kumcular', '', 'https://www.araskargo.com.tr/web_18712_1/images/logo.bmp', ''),
(11, '3', '2018-01-13 15:06:42', '::1', '50 TL', '', '', 'Onaylandi', '100.yil mahallesi', '', 'Karabük', '0506944****', 'Oguz Kumcular', '', 'https://www.araskargo.com.tr/web_18712_1/images/logo.bmp', 'naber lan tirrek'),
(12, '3', '2018-01-13 15:09:07', '::1', '350 TL', '', '', 'Tamamlandi', '100.yil mahallesi', '', 'Karabük', '0506944****', 'Oguz Kumcular', '', 'https://www.araskargo.com.tr/web_18712_1/images/logo.bmp', ''),
(13, '3', '2018-01-13 16:41:16', '::1', '562.5 TL', '', '', 'Onaylandi', '100.yil mahallesi', '', 'Karabük', '0506944****', 'Oguz Kumcular', '', 'https://www.araskargo.com.tr/web_18712_1/images/logo.bmp', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

DROP TABLE IF EXISTS `siparis_urunler`;
CREATE TABLE IF NOT EXISTS `siparis_urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Musteri_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Siparis_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Urun_id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Adet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Fiyat` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Tutar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `Musteri_id`, `Siparis_id`, `Urun_id`, `Adet`, `Fiyat`, `Tarih`, `Adi`, `Tutar`) VALUES
(1, '3', '1', '10', '1', '50.000', '2018-01-10 07:15:37', 'Casper X2500', '50'),
(2, '3', '1', '12', '3', '500.00', '2018-01-10 07:15:37', 'Laptop', '1500'),
(3, '3', '1', '14', '1', '512.50', '2018-01-10 07:15:37', 'Aspiratör', '512.5'),
(4, '3', '1', '13', '1', '300.00', '2018-01-10 07:15:37', 'cevdet', '300'),
(5, '3', '1', '13', '3', '300.00', '2018-01-10 07:15:37', 'cevdet', '900'),
(6, '3', '2', '15', '1', '299,99', '2018-01-10 07:18:15', 'Fotoraf Makinesi', '299'),
(7, '3', '2', '14', '2', '512.50', '2018-01-10 07:18:15', 'Aspiratör', '1025'),
(8, '3', '2', '10', '3', '50.000', '2018-01-10 07:18:15', 'Casper X2500', '150'),
(9, '3', '3', '17', '2', '200.00', '2018-01-10 07:23:37', 'Telefon', '400'),
(10, '3', '3', '14', '3', '512.50', '2018-01-10 07:23:37', 'Aspiratör', '1537.5'),
(11, '3', '3', '12', '1', '500.00', '2018-01-10 07:23:37', 'Laptop', '500'),
(12, '3', '4', '16', '1', '999.99', '2018-01-10 07:24:17', 'Buzdolabı', '999.99'),
(13, '3', '4', '14', '1', '512.50', '2018-01-10 07:24:17', 'Aspiratör', '512.5'),
(14, '3', '4', '14', '1', '512.50', '2018-01-10 07:24:17', 'Aspiratör', '512.5'),
(15, '3', '4', '14', '1', '512.50', '2018-01-10 07:24:17', 'Aspiratör', '512.5'),
(16, '3', '5', '12', '1', '500.00', '2018-01-10 10:13:17', 'Laptop', '500'),
(18, '3', '6', '15', '1', '299,99', '2018-01-10 10:51:32', 'Fotoraf Makinesi', '299'),
(21, '3', '8', '10', '1', '50.000', '2018-01-13 12:40:48', 'Casper X2500', '50'),
(23, '3', '9', '10', '2', '50.000', '2018-01-13 12:42:57', 'Casper X2500', '100'),
(25, '3', '11', '10', '1', '50.000', '2018-01-13 15:06:42', 'Casper X2500', '50'),
(26, '3', '12', '10', '1', '50.000', '2018-01-13 15:09:07', 'Casper X2500', '50'),
(27, '3', '12', '13', '1', '300.00', '2018-01-13 15:09:07', 'cevdet', '300'),
(28, '3', '13', '14', '1', '512.50', '2018-01-13 16:41:16', 'Aspiratör', '512.5'),
(29, '3', '13', '10', '1', '50.000', '2018-01-13 16:41:16', 'Casper X2500', '50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Grubu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Fiyat` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Stok` int(50) NOT NULL,
  `Aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Galeri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Id`, `Ad`, `Grubu`, `Fiyat`, `Kategori`, `Stok`, `Aciklama`, `Tarih`, `Resim`, `Galeri`, `Description`, `Keywords`) VALUES
(10, 'Casper X2500', 'kampanya', '50.000', '17', 7, '', '0000-00-00 00:00:00', 'Asus_celeron1.jpg', '', 'dsadas', 'dsadas'),
(11, 'Philips X300', 'kampanya', '200.00', '3', 0, '', '0000-00-00 00:00:00', 'Instalacion-y-Mantenimiento-de-SAI.jpg', '', 'dsadasdas', 'dsadsada'),
(12, 'Laptop', 'kampanya', '500.00', '7', 4, '', '0000-00-00 00:00:00', '170710023904_5.jpg', '', 'dsadasdas', 'sadsadsa'),
(13, 'cevdet', 'kampanya', '300.00', '20', 21, '', '0000-00-00 00:00:00', 'mp-dlp-projectors.png', '', 'dasdasda', 'dsadas'),
(14, 'Aspiratör', 'kampanya', '512.50', '9', 21, '', '0000-00-00 00:00:00', 'Satellite_1575641068.jpg', '', 'dsadas', 'dsadas'),
(15, 'Fotoraf Makinesi', 'kampanya', '299,99', '4', 17, '', '0000-00-00 00:00:00', 'BRFFUK0109_X-T2_BANNERS_950x350.jpg', '', 'sadasda', 'sadsad'),
(16, 'Buzdolabı', 'kampanya', '999.99', '4', 17, '', '0000-00-00 00:00:00', '3105056_orig1.png', '', 'dsadas', 'dsadas'),
(17, 'Telefon', 'kampanya', '200.00', '1', 21, '', '2018-01-09 22:01:14', 'slide1.jpg', '', 'dsadasdas', 'dsadsadsa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_galeri`
--

DROP TABLE IF EXISTS `urun_galeri`;
CREATE TABLE IF NOT EXISTS `urun_galeri` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Urun_Id` int(50) NOT NULL,
  `Resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_galeri`
--

INSERT INTO `urun_galeri` (`Id`, `Urun_Id`, `Resim`) VALUES
(14, 10, 'Satellite_15756410682.jpg'),
(15, 10, '3105056_orig3.png'),
(5, 11, 'IMG_1661.JPG'),
(7, 11, 'IMG_13161.JPG'),
(16, 10, '170710023904_53.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soy` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `ad_soy`, `email`, `sifre`, `durum`, `yetki`, `Adres`, `Sehir`, `Tel`) VALUES
(3, 'Oguz Kumcular', 'oguzkumcular@gmail.com', 'deneme', 'aktif', 'admin', '100.yil mahallesi', 'Karabük', '0506944****'),
(14, 'cevdet aksoy', 'cevdet@gmail.com', '1234', 'aktif', 'normal', 'osman yilmaz mah.', 'izmit', '8524654'),
(15, 'oguz m', 'denemekaydol@gmail.com', '1234', 'aktif', '', '', '', '123456'),
(16, 'mahmut b', 'mahmut@gmail.com', '1234', 'pasif', '', '', '', '123456'),
(17, 'mert k', 'mertk@gmail.com', '12345', 'pasif', '', '', '', '123456'),
(18, 'mert k', 'mertk@gmail.com', '12345', 'pasif', '', '', '', '123456'),
(19, 'oğuz kumcular', 'evritinksamtinkhepin@gmail.com', '1234', 'pasif', '', '', '', '21312421512'),
(20, 'oğuz kumcular3213321', 'evritinksamtinkhepin@gmail.com', '1234', 'pasif', '', '', '', '21312421512'),
(21, 'oğuz kumcular3213321', 'evritinksamtinkhepin@gmail.com', '12341231321', 'pasif', '', '', '', '21312421512'),
(22, 'oğuz kumcular3213321', 'evritinksamtinkhepin@gmail.com', '12341231321', 'pasif', '', '', '', '21312421512'),
(23, 'oğuz kumcular3213321', 'evritinksamtinkhepin@gmail.com', '12341231321', 'pasif', '', '', '', '21312421512'),
(24, 'oğuz kumcular', 'evritinksamtinkhepin@gmail.com', '1234', 'pasif', '', '', '', 'dsadsad21321321');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uye_Id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Urun_Id` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Ad_soy` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`Id`, `Uye_Id`, `Urun_Id`, `Mesaj`, `Tarih`, `Durum`, `Ad_soy`, `Aciklama`) VALUES
(6, '3', '10', '', '2018-01-14 05:41:06', 'yeni', 'Oguz Kumcular', ''),
(7, '3', '12', 'güzel laptop', '2018-01-14 05:41:21', 'Iptal', 'Oguz Kumcular', 'begenmedik'),
(8, '3', '11', 'ne zaman gelir', '2018-01-14 05:41:29', 'Iptal', 'Oguz Kumcular', 'gelmez'),
(9, '3', '13', 'cevdet abi iyimiş', '2018-01-14 05:42:01', 'yeni', 'Oguz Kumcular', ''),
(10, '3', '11', 'deneme 2. mesaj', '2018-01-14 06:52:01', 'Onaylandi', 'Oguz Kumcular', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
