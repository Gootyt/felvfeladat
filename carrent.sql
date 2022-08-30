-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: db
-- Létrehozás ideje: 2022. Aug 30. 20:36
-- Kiszolgáló verziója: 8.0.30
-- PHP verzió: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `carrent`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cars`
--

CREATE TABLE `cars` (
  `id` int UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `fuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` decimal(2,0) NOT NULL,
  `extras` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `cars`
--

INSERT INTO `cars` (`id`, `brand`, `type`, `price`, `active`, `fuel`, `seat`, `extras`, `created_at`, `updated_at`, `picture`) VALUES
(1, 'Tesla', 'Model 3', '60000', 1, 'Elektromos', '5', 'bőr belső, memóriás utasülés, dönthető utasülések, állófűtés', '2022-08-29 20:21:23', '2022-08-29 20:21:23', 'pictures/Axf8k5EIQ9L0RuOC5I4R7Mo9fEUbG4IH6MWiXBre.jpg'),
(2, 'Volkswagen', 'Passat', '30000', 1, 'Dízel', '5', 'kulcsnélküli nyitórendszer, tolatóradar, ABS, ASR', '2022-08-30 00:22:36', '2022-08-30 00:22:36', 'pictures/Lyv77U0bc9St0qlWWVP06LggWnErlRAlS9KmZrtR.jpg'),
(3, 'Suzuki', 'Swift', '20000', 1, 'Benzin', '5', 'dönthető utasülések, fűthető első ülés, ülésmagasság állítás, multifunkciós kormánykerék', '2022-08-30 20:04:22', '2022-08-30 20:04:22', 'pictures/xPLqWvUj4rxermb8d8jcT9UpSyREbg99KBP6QJNF.jpg'),
(4, 'Bentley', 'Continental GT', '400000', 1, 'Benzin', '4', 'bőr belső, dönthető utasülések, fűthető első ülés, ülésmagasság állítás', '2022-08-30 20:23:17', '2022-08-30 20:23:17', 'pictures/LWfBZ91r5frugs0kUqN45YvymalvQZypJshb55hZ.jpg'),
(5, 'Opel', 'Corsa', '20000', 1, 'Benzin', '5', 'ülésmagasság állítás, multifunkciós kormánykerék, függönylégzsák, ISOFIX rendszer', '2022-08-30 20:28:32', '2022-08-30 20:28:32', 'pictures/D9TV8dQ2wJtpBxlY3n9f22705UBJRTwOzXevxIyo.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rents`
--

CREATE TABLE `rents` (
  `id` int UNSIGNED NOT NULL,
  `carid` decimal(6,0) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickuptime` date NOT NULL,
  `droptime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `rents`
--

INSERT INTO `rents` (`id`, `carid`, `name`, `email`, `address`, `telephone`, `pickuptime`, `droptime`, `created_at`, `updated_at`) VALUES
(2, '2', 'Guti Tamás', 'gootyt@gmail.com', 'Alsósor utca 10A', '+36304842335', '2022-08-03', '2022-08-31', '2022-08-30 02:22:21', '2022-08-30 02:22:21'),
(3, '4', 'Szabó János', 'szabojanos@gmail.com', 'Alsó utca 10.', '30/1234567', '2022-09-01', '2022-08-05', NULL, NULL),
(4, '3', 'Kiss Béla', 'kissbela@gmail.com', 'Felső utca 20.', '70/1234567', '2022-08-06', '2022-08-13', NULL, NULL),
(5, '5', 'Varga Győző', 'vargagyozo@gmail.com', 'Kossuth utca 10.', '+3620-123-45-67', '2022-09-02', '2022-09-08', NULL, NULL),
(6, '1', 'Nagy Szilvia', 'nagyszilvia@gmail.com', 'Köztársaság utca 10.', '06702142142', '2022-09-09', '2022-09-10', NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `rents`
--
ALTER TABLE `rents`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
