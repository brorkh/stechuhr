-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 31. Aug 2022 um 11:06
-- Server-Version: 5.7.37-nmm1-log
-- PHP-Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_name`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zeitdb`
--

CREATE TABLE `zeitdb` (
  `id` int(6) UNSIGNED NOT NULL,
  `zeit_in` datetime DEFAULT NULL,
  `zeit_out` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `zeitdb`
--

INSERT INTO `zeitdb` (`id`, `zeit_in`, `zeit_out`) VALUES
(37, '2022-08-31 07:53:05', '0000-00-00 00:00:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `zeitdb`
--
ALTER TABLE `zeitdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `zeitdb`
--
ALTER TABLE `zeitdb`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
