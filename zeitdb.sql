-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 21. Okt 2022 um 07:48
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
  `zeit_out` datetime DEFAULT NULL,
  `zeit_diff` time NOT NULL,
  `zeit_mittag` time NOT NULL,
  `tag` tinytext NOT NULL,
  `zeit_us` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `zeitdb`
--

INSERT INTO `zeitdb` (`id`, `zeit_in`, `zeit_out`, `zeit_diff`, `zeit_mittag`, `tag`, `zeit_us`) VALUES
(3, '2022-08-31 07:53:05', '2022-08-31 16:57:01', '09:03:56', '08:03:56', 'Mittwoch', '00:03:56'),
(4, '2022-09-01 08:10:49', '2022-09-01 17:08:50', '08:58:01', '07:58:01', 'Donnerstag', '-00:01:59'),
(1, '2022-08-29 07:28:03', '2022-08-29 18:00:49', '10:32:46', '09:32:46', 'Montag', '01:32:46');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
