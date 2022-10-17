-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Erstellungszeit: 15. Okt 2022 um 08:16
-- Server-Version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP-Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `navitem` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`navitem`, `title`, `content`, `image`) VALUES
('home', 'Dies ist die Titelschrift', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\n                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu\r\n                    fugiat nulla pariatur.</p>\r\n                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\n                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu\r\n                    fugiat nulla pariatur.</p>\r\n                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n            ', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `languages`
--

CREATE TABLE `languages` (
  `Name` varchar(255) NOT NULL,
  `Id` varchar(255) NOT NULL,
  `languageOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `languages`
--

INSERT INTO `languages` (`Name`, `Id`, `languageOrder`) VALUES
('DE', 'de', 0),
('EN', 'en', 1),
('ES', 'es', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `navitem`
--

CREATE TABLE `navitem` (
  `title` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `itemOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `navitem`
--

INSERT INTO `navitem` (`title`, `id`, `itemOrder`) VALUES
('ÜBER UNS', 'about', 1),
('KONTAKT', 'contact', 4),
('HOME', 'index', 0),
('MUSTERMENÜ', 'menu', 2),
('MUSTERMENÜ2', 'menu2', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subMenu`
--

CREATE TABLE `subMenu` (
  `navItem` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `itemOrder` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `subMenu`
--

INSERT INTO `subMenu` (`navItem`, `id`, `name`, `itemOrder`) VALUES
('about', '1', 'Untermenü 1', 1),
('about', '2', 'Untermenü 2', 2),
('about', '3', 'Untermenü 3', 3),
('about', '4', 'Untermenü 4', 4),
('menu', '1', 'Untermenü 1', 1),
('menu', '2', 'Untermenü 2', 2),
('menu', '3', 'Untermenü 3', 3),
('menu', '4', 'Untermenü 4', 4),
('menu2', '1', 'Untermenü 1', 1),
('menu2', '2', 'Untermenü 2', 2),
('menu2', '3', 'Untermenü 3', 3),
('menu2', '4', 'Untermenü 4', 4),
('contact', '1', 'Untermenü 1', 1),
('contact', '2', 'Untermenü 2', 2),
('contact', '3', 'Untermenü 3', 3),
('contact', '4', 'Untermenü 4', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`Id`);

--
-- Indizes für die Tabelle `navitem`
--
ALTER TABLE `navitem`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
