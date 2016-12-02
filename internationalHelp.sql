# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.5.42)
# Base de données: internationalhelp
# Temps de génération: 2016-12-02 02:47:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table besoin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `besoin`;

CREATE TABLE `besoin` (
  `IDbesoin` int(30) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `langue` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `vue` int(15) NOT NULL,
  `IDtypebesoin` int(30) NOT NULL,
  `IDuser` int(30) NOT NULL,
  PRIMARY KEY (`IDbesoin`),
  KEY `IDtypebesoin` (`IDtypebesoin`),
  KEY `IDuser` (`IDuser`),
  CONSTRAINT `besoin_ibfk_1` FOREIGN KEY (`IDtypebesoin`) REFERENCES `typebesoin` (`IDtypebesoin`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `besoin_ibfk_2` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Affichage de la table recompense
# ------------------------------------------------------------

DROP TABLE IF EXISTS `recompense`;

CREATE TABLE `recompense` (
  `IDrecompense` int(30) NOT NULL AUTO_INCREMENT,
  `score` int(30) NOT NULL,
  `badge` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `IDuser` int(30) NOT NULL,
  PRIMARY KEY (`IDrecompense`),
  KEY `IDuser` (`IDuser`),
  CONSTRAINT `recompense_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Affichage de la table reponse
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reponse`;

CREATE TABLE `reponse` (
  `IDreponse` int(30) NOT NULL AUTO_INCREMENT,
  `note` int(30) NOT NULL,
  `texte` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `IDuser` int(30) NOT NULL,
  PRIMARY KEY (`IDreponse`),
  KEY `IDuser` (`IDuser`),
  CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Affichage de la table traduction
# ------------------------------------------------------------

DROP TABLE IF EXISTS `traduction`;

CREATE TABLE `traduction` (
  `IDtraduction` int(30) NOT NULL AUTO_INCREMENT,
  `texte` varchar(500) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `langue` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `note` int(10) NOT NULL,
  `IDbesoin` int(30) NOT NULL,
  `IDreponse` int(30) NOT NULL,
  PRIMARY KEY (`IDtraduction`),
  KEY `IDbesoin` (`IDbesoin`),
  KEY `IDbesoin_2` (`IDbesoin`,`IDreponse`),
  KEY `IDreponse` (`IDreponse`),
  CONSTRAINT `traduction_ibfk_1` FOREIGN KEY (`IDbesoin`) REFERENCES `besoin` (`IDbesoin`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Affichage de la table typebesoin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `typebesoin`;

CREATE TABLE `typebesoin` (
  `IDtypebesoin` int(30) NOT NULL AUTO_INCREMENT,
  `label` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`IDtypebesoin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Affichage de la table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `IDuser` int(30) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `prenom` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `dat_nais` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nationalite` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mp` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`IDuser`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
