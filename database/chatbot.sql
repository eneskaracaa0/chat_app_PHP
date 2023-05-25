-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2023, 14:18:44
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `chatbot`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `chat`
--

INSERT INTO `chat` (`id`, `question`, `answer`) VALUES
(1, 'hi|hello|hy|Merhaba|', 'Merhaba'),
(2, 'What is your name|what is your name?|Adın Ne|Sen kimsin', 'Benim Adım ChatBot'),
(3, 'where are you from|wher are you from?|Nerelisin', 'Türkiyeliyim'),
(4, 'bye|by|good|good|by|görüşürüz', 'Ok by.See you');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
