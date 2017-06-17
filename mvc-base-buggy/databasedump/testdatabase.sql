SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(10) unsigned NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

TRUNCATE TABLE `address`;
INSERT INTO `address` (`id`, `userId`, `firstname`, `lastname`, `street`, `zip`, `city`) VALUES
(1, 5, 'Anton', 'Himbeer', 'Andreas-Hofer-Straße 7', '6330', 'Kufstein'),
(2, 5, 'Georg', 'Erdbeer', 'Salzburger Straße 32', '6300', 'Wörgl'),
(3, 5, 'Josef', 'Brombeer', 'Oskar Pirlo-Straße 7', '6330', 'Kufstein');

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

TRUNCATE TABLE `user`;
INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Jason', '$2y$10$sbWJ77.MBJXg0ad95GVKgukoz6yHiwOoaL2N4eLR7OaiOOgc/PRNa'),
(2, 'Julia', '$2y$10$j13lwPCSUihW7Z15LVrSGOf5uoZmQhUntLNkNXnBYYidPZSbuC9B2'),
(3, 'Hans', '$2y$10$mkhCAoQYHVcFXYBKPIFTUuvOwu/CDeiFXInX8K0fL9XkDDC9LEqpO'),
(4, 'Dorie', '$2y$10$7lE/IB7FtsLch76Eqzc4Oe/5nfGbZNsKFm1w21eaNlKuGHVi7..Di'),
(5, 'test', '$2y$10$7Z3Iq0Zl.WIiNH7t8bk39OYVp3T6ICb2dF7yYAhhEaUMiFKbh3apq');


ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
