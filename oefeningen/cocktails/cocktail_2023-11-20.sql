# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.28)
# Database: cocktail
# Generation Time: 2023-11-20 11:47:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cocktail_ingredient
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cocktail_ingredient`;

CREATE TABLE `cocktail_ingredient` (
  `cocktail_id` int NOT NULL,
  `ingredient_id` int NOT NULL,
  `quantity` decimal(10,1) DEFAULT NULL,
  PRIMARY KEY (`cocktail_id`,`ingredient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `cocktail_ingredient` WRITE;
/*!40000 ALTER TABLE `cocktail_ingredient` DISABLE KEYS */;

INSERT INTO `cocktail_ingredient` (`cocktail_id`, `ingredient_id`, `quantity`)
VALUES
	(1,1,2.0),
	(1,2,20.0),
	(1,3,16.0),
	(1,4,90.0),
	(1,5,45.0),
	(1,6,4.0),
	(2,7,30.0),
	(2,8,30.0),
	(2,9,30.0),
	(2,10,30.0),
	(2,11,20.0),
	(2,12,20.0),
	(3,5,50.0),
	(3,12,100.0);

/*!40000 ALTER TABLE `cocktail_ingredient` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cocktails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cocktails`;

CREATE TABLE `cocktails` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(512) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recipe` text COLLATE utf8mb4_general_ci,
  `alcohol_pct` decimal(3,1) DEFAULT NULL,
  `photo` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ref_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `cocktails` WRITE;
/*!40000 ALTER TABLE `cocktails` DISABLE KEYS */;

INSERT INTO `cocktails` (`id`, `name`, `description`, `recipe`, `alcohol_pct`, `photo`, `ref_id`)
VALUES
	(1,'Mojito','De Mojito wordt gemaakt van witte rum, een halve limoen in partjes, rietsuiker en muntblaadjes en wordt afgetopt met bruiswater. Crushed ice mag bij deze cocktail niet ontbreken. Met een Mojito haal je de zomerse sfeer van Cuba in huis.','Doe de suiker, limoensap, muntblaadjes en bruiswater in een hoog glas (of cocktailshaker) en kneus met een muddler. Voeg de rum en de ijsblokjes toe en schud goed. Enjoy je mojito!',NULL,'mojito.png',NULL),
	(2,'Long Island Iced Tea','De Long Island Iced Tea bevat verschillende alcoholische dranken, namelijk wodka, witte rum, gin, tequila, en triple sec. Deze worden vervolgens aangevuld met limoensap en afgetopt met cola. Het zal je daarom niet verbazen dat deze bekende cocktail een hoger alcoholpercentage heeft dan gemiddeld.','Vul het glas volledig met ijs en voeg de gin, de tequila, de rum, de wodka, de Cointreau en het citroensap toe. Deze combinatie krijgt de kleur door af te toppen met cola.\n\nRoer even door, garneer met een citroenpartje en serveer met een rietje.',22.0,'long-island-iced-tea.jpeg',NULL),
	(3,'Bacardi Cola',NULL,NULL,NULL,'BacardiCola.webp',NULL),
	(6,'Gin Tonic','Dat is gin met tonic',NULL,NULL,'638df00d5446e.jpeg',NULL);

/*!40000 ALTER TABLE `cocktails` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ingredients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ingredients`;

CREATE TABLE `ingredients` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alcohol_pct` decimal(3,1) DEFAULT NULL,
  `unit` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;

INSERT INTO `ingredients` (`id`, `name`, `photo`, `alcohol_pct`, `unit`)
VALUES
	(1,'rietsuiker',NULL,0.0,'theelepel'),
	(2,'limoensap',NULL,0.0,'ml'),
	(3,'verse munt',NULL,0.0,'blaadjes'),
	(4,'bruiswater',NULL,0.0,'ml'),
	(5,'witte rum',NULL,29.0,'ml'),
	(6,'ijsblokjes',NULL,0.0,''),
	(7,'gin',NULL,28.0,'ml'),
	(8,'tequila',NULL,22.0,'ml'),
	(9,'wodka',NULL,35.0,'ml'),
	(10,'cointreau',NULL,26.5,'ml'),
	(11,'citroensap',NULL,0.0,'ml'),
	(12,'cola',NULL,0.0,'ml');

/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ratings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `cocktail_id` int DEFAULT NULL,
  `name` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` varchar(512) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
