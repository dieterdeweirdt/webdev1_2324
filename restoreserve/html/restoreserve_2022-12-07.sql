# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.28)
# Database: restoreserve
# Generation Time: 2022-12-07 06:52:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  `number_of_people` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



# Dump of table restaurants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurants`;

CREATE TABLE `restaurants` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `stars` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;

INSERT INTO `restaurants` (`id`, `name`, `city`, `image`, `stars`)
VALUES
	(1,'Zilte','Antwerpen','zilte.jpg\r',3),
	(2,'Hof van Cleve','Kruishoutem','hofvancleve.jpg\r',3),
	(3,'Bon bon','Sint-Pieters-Woluwe','bonbon.jpeg\r',2),
	(4,'Le Chalet de la Forêt','Ukkel','restaurant.jpg\r',2),
	(5,'Comme Chez Soi','Brussel','Comme_chez_Soi.jpeg\r',2),
	(6,'La Paix','Anderlecht','Lepaix.jpg\r',2),
	(7,'The Jane','Antwerpen','thejane.jpg\r',2),
	(8,'Castor','Beveren-Leie','restaurant.jpg\r',2),
	(9,'Nuance','Duffel','restaurant.jpg\r',2),
	(10,'Hostellerie St-Nicolas','Elverdinge','restaurant.jpg\r',2),
	(11,'Vrijmoed','Gent','restaurant.jpg\r',2),
	(12,'La Durée','Izegem','restaurant.jpg\r',2),
	(13,'Bartholomeus','Knokke-Heist','restaurant.jpg\r',2),
	(14,'Cuchara','Lommel','restaurant.jpg\r',2),
	(15,'La Source','Neerharen','restaurant.jpg\r',2),
	(16,'Slagmolen','Opglabbeek','restaurant.jpg\r',2),
	(17,'Hostellerie Le Fox','De Panne','restaurant.jpg\r',2),
	(18,'Pastorale','Reet','restaurant.jpg\r',2),
	(19,'Boury','Roeselare','restaurant.jpg\r',2),
	(20,'De Jonkman','Sint-Kruis','restaurant.jpg\r',2),
	(21,'Bozar Restaurant','Brussel','restaurant.jpg\r',2),
	(22,'La Canne en Ville','Elsene','restaurant.jpg\r',2),
	(23,'Da Mimmo','Sint-Lambrechts-Woluwe','restaurant.jpg\r',2),
	(24,'Kamo','Elsene','restaurant.jpg\r',2),
	(25,'Le Pigeon Noir','Ukkel','restaurant.jpg\r',2),
	(26,'San Daniele','Ganshoren','restaurant.jpg\r',2),
	(27,'senzanome','Brussel','restaurant.jpg\r',2),
	(28,'La Truffe Noire','Brussel','restaurant.jpg\r',2),
	(29,'La Villa Emily','Brussel','restaurant.jpg\r',2),
	(30,'La Villa in the sky','Elsene','restaurant.jpg\r',2),
	(31,'Wine in the City','Jette','restaurant.jpg\r',2),
	(32,'Kelderman','Aalst','restaurant.jpg\r',1),
	(33,'\'t Overhamme','Aalst','restaurant.jpg\r',1),
	(34,'Bistrot du Nord','Antwerpen','restaurant.jpg\r',1),
	(35,'The Butcher\'s son','Antwerpen','restaurant.jpg\r',1),
	(36,'Dôme','Antwerpen','restaurant.jpg\r',1),
	(37,'\'t Fornuis','Antwerpen','restaurant.jpg\r',1),
	(38,'FRANQ','Antwerpen','restaurant.jpg\r',1),
	(39,'Het Gebaar','Antwerpen','restaurant.jpg\r',1),
	(40,'Kommilfoo','Antwerpen','restaurant.jpg\r',1),
	(41,'Nathan','Antwerpen','restaurant.jpg\r',1),
	(42,'Le Pristine','Antwerpen','restaurant.jpg\r',1),
	(43,'Colette - De Vijvers','Averbode','restaurant.jpg\r',1),
	(44,'Hofke van Bazel','Bazel','restaurant.jpg\r',1),
	(45,'Eyckerhof','Bornem','restaurant.jpg\r',1),
	(46,'Den Gouden Harynck','Brugge','restaurant.jpg\r',1),
	(47,'L.E.S.S.','Brugge','restaurant.jpg\r',1),
	(48,'Sans Cravate','Brugge','restaurant.jpg\r',1),
	(49,'Zet\'Joe by Geert Van Hecke','Brugge','restaurant.jpg\r',1),
	(50,'De Zuidkant','Damme','restaurant.jpg\r',1),
	(51,'Marcus','Deerlijk','restaurant.jpg\r',1),
	(52,'\'t Truffeltje','Dendermonde','restaurant.jpg\r',1),
	(53,'Hostellerie Vivendum','Dilsen','restaurant.jpg\r',1),
	(54,'Libertine','Erpe','restaurant.jpg\r',1),
	(55,'La Belle','Geel','restaurant.jpg\r',1),
	(56,'De Kristalijn','Genk','restaurant.jpg\r',1),
	(57,'Horseele','Gent','restaurant.jpg\r',1),
	(58,'OAK','Gent','restaurant.jpg\r',1),
	(59,'Publiek','Gent','restaurant.jpg\r',1),
	(60,'Souvenir','Gent','restaurant.jpg\r',1),
	(61,'dEssensi','\'s-Gravenwezel','restaurant.jpg\r',1),
	(62,'Michel','Groot-Bijgaarden','restaurant.jpg\r',1),
	(63,'JER','Hasselt','restaurant.jpg\r',1),
	(64,'Ogst','Hasselt','restaurant.jpg\r',1),
	(65,'De Vork van Luc Bellings','Hasselt','restaurant.jpg\r',1),
	(66,'Arenberg','Heverlee','restaurant.jpg\r',1),
	(67,'Couvert couvert','Heverlee','restaurant.jpg\r',1),
	(68,'Innesto','Houthalen','restaurant.jpg\r',1),
	(69,'Hof Ter Hulst','Hulshout','restaurant.jpg\r',1),
	(70,'Boo Raan','Knokke-Heist','restaurant.jpg\r',1),
	(71,'Cuines,33','Knokke-Heist','restaurant.jpg\r',1),
	(72,'Sel Gris','Knokke-Heist','restaurant.jpg\r',1),
	(73,'Willem Hiele','Koksijde','restaurant.jpg\r',1),
	(74,'EED','Leuven','restaurant.jpg\r',1),
	(75,'EssenCiel','Leuven','restaurant.jpg\r',1),
	(76,'De Pastorie','Lichtaart','restaurant.jpg\r',1),
	(77,'Vol-Ver','Marke','restaurant.jpg\r',1),
	(78,'\'t Korennaer','Nieuwkerken-Waas','restaurant.jpg\r',1),
	(79,'M-Bistro','Nieuwpoort','restaurant.jpg\r',1),
	(80,'Benoit en Bernard Dewitte','Ouwegem','restaurant.jpg\r',1),
	(81,'Alain Bianchin','Overijse','restaurant.jpg\r',1),
	(82,'Auberge de Herborist','Sint-Andries','restaurant.jpg\r',1),
	(83,'L\'Envie','Sint-Denijs','restaurant.jpg\r',1),
	(84,'Carcasse','Sint-Idesbald','restaurant.jpg\r',1),
	(85,'Centpourcent','Sint-Katelijne-Waver','restaurant.jpg\r',1),
	(86,'Goffin','Sint-Kruis','restaurant.jpg\r',1),
	(87,'Sir Kwinten','Sint-Kwintens-Lennik','restaurant.jpg\r',1),
	(88,'Brasserie Julie','Sint-Martens-Bodegem','restaurant.jpg\r',1),
	(89,'Bar Bulot','Sint-Michiels','restaurant.jpg\r',1),
	(90,'\'t Stoveke','Strombeek-Bever','restaurant.jpg\r',1),
	(91,'Melchior','Tienen','restaurant.jpg\r',1),
	(92,'Altermezzo','Tongeren','restaurant.jpg\r',1),
	(93,'Magis','Tongeren','restaurant.jpg\r',1),
	(94,'De Mijlpaal','Tongeren','restaurant.jpg',1);

/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
