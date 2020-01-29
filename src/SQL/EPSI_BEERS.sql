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
  PRIMARY KEY (`BEER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table epsi_beer.beer : ~0 rows (environ)
/*!40000 ALTER TABLE `beer` DISABLE KEYS */;
/*!40000 ALTER TABLE `beer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
