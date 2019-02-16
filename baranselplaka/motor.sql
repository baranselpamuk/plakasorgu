-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eki 2018, 23:59:09
-- Sunucu sürümü: 5.6.15-log
-- PHP Sürümü: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `baransel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac_kayitlari`
--

CREATE TABLE IF NOT EXISTS `arac_kayitlari` (
  `w_id` int(10) NOT NULL AUTO_INCREMENT,
  `w_sahip` varchar(50) NOT NULL,
  `w_plaka` varchar(50) NOT NULL,
  `w_iletisim` varchar(50) NOT NULL,
  `w_durumu` varchar(40) NOT NULL,
  `w_marka` varchar(50) NOT NULL,
  `w_model` varchar(50) NOT NULL,
  `w_model_yili` varchar(30) NOT NULL,
  `w_kayit_tarihi` datetime NOT NULL,
  `w_aracsasi` varchar(60) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `arac_kayitlari`
--

INSERT INTO `arac_kayitlari` (`w_id`, `w_sahip`, `w_plaka`, `w_iletisim`, `w_durumu`, `w_marka`, `w_model`, `w_model_yili`, `w_kayit_tarihi`, `w_aracsasi`) VALUES
(12, 'webkartali.com', '49ç49', '0505 123 45 67', 'Çalıntı', 'Renault', 'Toros', '1970', '2017-02-28 09:41:15', 'TRE5678 890 456 347'),
(13, 'Serhat Yorulmaz', '49d49', '0505 123 45 67', 'Diğer', 'Mercedes', 'CL300', '2005', '2017-02-28 09:42:47', 'TYR 456 789 367 874 234'),
(14, 'Mehmet Hanifi', '49as194', '0505 123 45 67', 'Çalıntı', 'Honda', 'Civic', '2016', '2018-10-06 23:58:02', 'Tr454 876 876654 764 '),
(11, 'Ahmet Yılmaz', '49b49', '0505 123 45 67', 'Bulundu', 'BMW', 'M4', '2016', '2017-02-28 09:39:47', 'S4537 8866 7890');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
