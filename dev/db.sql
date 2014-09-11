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