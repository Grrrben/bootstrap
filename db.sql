-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 28 okt 2014 om 21:31
-- Serverversie: 5.5.37
-- PHP-Versie: 5.4.6-1ubuntu1.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `bootstrap`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user ID, loopt automatisch op',
  `username` varchar(100) NOT NULL COMMENT 'naam, string, max. 100 chars',
  `password` varchar(255) NOT NULL COMMENT 'pass, string, max. 255 chars',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
