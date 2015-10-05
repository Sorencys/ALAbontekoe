-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 05 okt 2015 om 11:31
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `bontekoe`
--
CREATE DATABASE IF NOT EXISTS `bontekoe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bontekoe`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` text NOT NULL,
  `index` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `description`, `index`) VALUES
(1, 'Soep van de Dag', '6.00', 'Vraag bij de Ober naar de Soep van de Dag.', 1),
(2, 'Biefstuk met Roomsaus', '16.00', 'Biefstuk met een Roomsaus. Kies uit Rare, Medium Rare of Medium.', 2),
(3, 'Dame Blance', '5.00', '3 Bolletjes Vanille ijs en 1 Bolletje chocolade ijs, met een warme chocolade saus.', 3),
(4, 'Bier', '2.00', 'Lekker biertje (0,4 ML)', 4),
(5, 'Salade', '14.00', 'Salade met lekkere dressing, croutons en kip.', 2),
(6, 'Knoflook brood', '4.00', 'Knoflook brood met Aolie en een andere Tapas saus naar keuze', 1),
(7, 'Water', '1.00', 'Water van Chaufontaine.', 4),
(8, 'Sorbet', '3.00', 'Vanille ijs, Vers fruit', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `menus`
--

INSERT INTO `menus` (`id`, `name`) VALUES
(1, 'Voorgerecht'),
(2, 'Hoofdgerecht'),
(3, 'Nagerecht'),
(4, 'Dranken');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `time` time NOT NULL,
  `personcount` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `reservations`
--

INSERT INTO `reservations` (`id`, `datum`, `time`, `personcount`, `name`, `email`, `comments`) VALUES
(7, '2015-11-20', '12:30:00', 2, 'Aranka', 'rankie32@hotmail.com', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
