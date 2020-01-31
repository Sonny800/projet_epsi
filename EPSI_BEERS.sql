-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.1.37-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win32
-- HeidiSQL Version:             10.2.0.5723
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour epsi_beer
CREATE DATABASE IF NOT EXISTS `epsi_beer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `epsi_beer`;

-- Listage de la structure de la table epsi_beer. beer
CREATE TABLE IF NOT EXISTS `beer` (
  `BEER_ID` int(11) NOT NULL,
  `BEER_PICTURE` varchar(255) DEFAULT NULL,
  `BEER_NAME` varchar(255) DEFAULT NULL,
  `BEER_DESCRIPTION` varchar(255) DEFAULT NULL,
  `BEER_TAGLINE` varchar(255) DEFAULT NULL,
  `BEER_CREATED_AT` varchar(255) DEFAULT NULL,
  `BEER_PRICE` float DEFAULT NULL,
  PRIMARY KEY (`BEER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table epsi_beer.beer : ~10 rows (environ)
/*!40000 ALTER TABLE `beer` DISABLE KEYS */;
INSERT INTO `beer` (`BEER_ID`, `BEER_PICTURE`, `BEER_NAME`, `BEER_DESCRIPTION`, `BEER_TAGLINE`, `BEER_CREATED_AT`, `BEER_PRICE`) VALUES
	(1, 'https://images.punkapi.com/v2/keg.png', 'Buzz', 'A light, crisp and bitter IPA brewed with English and American hops. A small batch brewed only once', 'A Real Bitter Experience', '09/2007', 4),
	(2, 'https://images.punkapi.com/v2/2.png', 'Trashy Blonde', 'A titillating, neurotic, peroxide punk of a Pale Ale', 'You Know You Shouldn\'t', '04/2008', 3.5),
	(3, 'https://images.punkapi.com/v2/keg.png', 'Berliner Weisse With Yuzu - B-Sides', 'Japanese citrus fruit intensifies the sour nature of this German classic', 'Japanese Citrus Berliner Weisse', '11/2015', 4.2),
	(4, 'https://images.punkapi.com/v2/4.png', 'Pilsen Lager', 'Our Unleash the Yeast series was an epic experiment into the differences in aroma and flavour provided by switching up your yeast', 'Unleash the Yeast Series', '09/2013', 5.5),
	(5, 'https://images.punkapi.com/v2/5.png', 'Avery Brown Dredge', 'An Imperial Pilsner in collaboration with beer writers', 'Bloggers\' Imperial Pilsner', '02/2011', 6.3),
	(6, 'https://images.punkapi.com/v2/6.png', 'Electric India', 'Rebrewed as a spring seasonal beer', 'Vibrant Happy Season', '05/2013', 4),
	(7, 'https://images.punkapi.com/v2/7.png', 'AB12', 'An Imperial Black Belgian Ale aged in old Invergordon Scotch whisky barrels with mountains of raspberries', 'Imperial Black Belgian Ale', '07/2012', 3.95),
	(8, 'https://images.punkapi.com/v2/8.png', 'Fake Lager', 'Fake is the new black', 'Bohemian Pilsner', '03/2013', 4.25),
	(9, 'https://images.punkapi.com/v2/9.png', 'AB07', 'Beer perfect for when the rain is coming sideways', 'Whisky Cask-Aged Scotch Ale', '03/2010', 5.6),
	(10, 'https://images.punkapi.com/v2/10.png', 'Bramling X', 'Good old Bramling Cross, refined', 'Single Hop IPA Series - 2011', '01/2011', 6.55);
/*!40000 ALTER TABLE `beer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
