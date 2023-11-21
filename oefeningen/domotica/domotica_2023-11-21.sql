# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.28-MariaDB-1:10.4.28+maria~ubu2004-log)
# Database: domotica
# Generation Time: 2023-11-21 13:46:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table button_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `button_category`;

CREATE TABLE `button_category` (
  `button_id` int(11) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`button_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `button_category` WRITE;
/*!40000 ALTER TABLE `button_category` DISABLE KEYS */;

INSERT INTO `button_category` (`button_id`, `category_id`)
VALUES
	(1,2),
	(2,2),
	(3,2),
	(4,2),
	(5,2),
	(6,3),
	(7,3),
	(8,1),
	(8,3),
	(9,3),
	(10,3),
	(11,1),
	(11,3),
	(12,4),
	(13,4),
	(14,4),
	(15,4),
	(16,4),
	(17,4),
	(18,4),
	(19,4),
	(20,5),
	(21,5),
	(22,5),
	(23,5),
	(24,1),
	(24,6),
	(25,1),
	(25,6);

/*!40000 ALTER TABLE `button_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table button_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `button_types`;

CREATE TABLE `button_types` (
  `button_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`button_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `button_types` WRITE;
/*!40000 ALTER TABLE `button_types` DISABLE KEYS */;

INSERT INTO `button_types` (`button_type_id`, `name`, `icon`)
VALUES
	(1,'light','lightbulb'),
	(2,'garage','garage'),
	(3,'door','door');

/*!40000 ALTER TABLE `button_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table buttons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buttons`;

CREATE TABLE `buttons` (
  `button_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `type_id` int(11) DEFAULT 1,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`button_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `buttons` WRITE;
/*!40000 ALTER TABLE `buttons` DISABLE KEYS */;

INSERT INTO `buttons` (`button_id`, `name`, `type_id`, `status`)
VALUES
	(1,'Keukentafel',1,0),
	(2,'Keuken aanrecht',1,0),
	(3,'Eetplaats',1,0),
	(4,'Salon',1,1),
	(5,'Sfeerverlichting',1,1),
	(6,'Wasplaats',1,0),
	(7,'Berging',1,0),
	(8,'Garage',1,1),
	(9,'Inkom',1,0),
	(10,'Toilet',1,0),
	(11,'Bureel',1,1),
	(12,'Nachthal',1,0),
	(13,'Badkamer',1,1),
	(14,'Badkamer meubel',1,0),
	(15,'Dressing',1,1),
	(16,'Slaapkamer 1',1,0),
	(17,'Slaapkamer 2',1,0),
	(18,'Slaapkamer 3',1,0),
	(19,'Zolder',1,0),
	(20,'Voordeur',1,0),
	(21,'Achterdeur',1,0),
	(22,'Tuinhuis',1,1),
	(23,'Sfeer',1,1),
	(24,'Poort 1',2,0),
	(25,'Poort 2',2,0);

/*!40000 ALTER TABLE `buttons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`category_id`, `name`, `icon`)
VALUES
	(1,'Populair','home'),
	(2,'Living','couch'),
	(3,'Beneden','chair-office'),
	(4,'Boven','bed'),
	(5,'Buiten','tree'),
	(6,'Speciaal','star');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `creation_date`)
VALUES
	(1,'John','Doe','info@doe.com','$2y$10$BnvIZViEAU1bo3KzEabcw.NLc0A8D/9FvOFPQ8RMAGjiZxaQuzG4K','2023-01-28 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
