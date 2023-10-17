# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.28-MariaDB-1:10.4.28+maria~ubu2004-log)
# Database: db
# Generation Time: 2023-10-17 11:27:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artists`;

CREATE TABLE `artists` (
  `artist_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;

INSERT INTO `artists` (`artist_id`, `name`)
VALUES
	(1,'Madonna'),
	(2,'Studio 100'),
	(3,'Queens Of The Stone Age'),
	(4,'Metejoor'),
	(5,'André Rieu'),
	(6,'Regi');

/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table concerts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `concerts`;

CREATE TABLE `concerts` (
  `concert_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `concerts` WRITE;
/*!40000 ALTER TABLE `concerts` DISABLE KEYS */;

INSERT INTO `concerts` (`concert_id`, `artist_id`, `location_id`, `title`, `description`, `date`, `price`)
VALUES
	(1,2,3,'De grote Sinterklaasshow','De Sint heeft vanuit Spanje aangekondigd dat hij op 2 en 3 december samen met zijn roetpieten het Antwerpse Sportpaleis op stelten zal zetten.\n\nHet wordt een onvergetelijk feest! Ten minste, als jij alle Studio 100 & Sinterklaas hits kent om mee te zingen & dansen in het Sportpaleis…','2023-12-06',87),
	(2,1,2,'The celebration tour','Madonna kondigde eerder deze week Madonna: The Celebration Tour aan. Dat deed ze via een nu al iconische viral video met een knipoog naar haar baanbrekende film ‘Truth or Dare’. Opmerkelijke namen zoals Diplo, Judd Apatow, Jack Black, Lil Wayne, Bob The Drag Queen, Kate Berlant, Larry Owens, Meg Stalter en Eric Andre maken hun opwachting in de video die tot een hoogtepunt komt als Amy Schumer de superster uitdaagt om op tournee te gaan en uit vier decennia carrière mega hits te brengen. Madonna, de meest succesvolle vrouwelijke solo artieste ooit, gaat de uitdaging aan en kondigt The Celebration Tour aan die haar ongeëvenaarde catalogus aan hits van de afgelopen 40 jaar zal belichten.','2023-10-21',160),
	(3,6,1,'Regi the return','Stomverbaasd! Zo keek Team Regi naar het verloop van de ticketverkoop voor het ‘Regi – The Return’-concert van zaterdag 14 oktober 2023. Anderhalve week na zijn succesvolle ‘Zwaartekracht’-concert zijn er nauwelijks nog tickets te bekomen. Een tweede concert is de logica zelve, een artiest wil immers al zijn fans kunnen bereiken.','2023-10-27',80),
	(4,4,4,'Metejoor in concert','Metejoor zorgt vandaag opnieuw voor enkele verrassingen van formaat. Twee zelfs. Niet alleen brengt hij de pakkende song ‘Wat wil je van mij’ uit, een duet met Hannah Mae. Maar de ticketverkoop voor zijn eerste grote Sportpaleisconcert verloopt zo voorspoedig dat hij op vrijdag 3 november 2023 een tweede concert aankondigt! Tickets zijn meteen beschikbaar.\n\nDe aankondiging van zijn eerste concert in het Sportpaleis vond exact een jaar na de release van zijn debuutalbum plaats. \"Mijn familie is niet groot genoeg om het Sportpaleis te vullen, dus ik hoop dat mijn fans massaal aanwezig zullen zijn\", grapte Metejoor toen op de nationale radio. En dat zijn ze! De belangstelling is zelfs zo groot dat Metejoor vandaag een tweede concert op vrijdag 3 november in het Sportpaleis bekendmaakt.\n\nMetejoor reageert enthousiast. \"Ik had al wel het gevoel dat de fans van Metejoor loyaal zijn, maar dit hadden we niet durven dromen. De druk om er nu twee fantastische avonden van te maken, wordt alleen maar groter. Maar eerlijk: ik wou dat ik er morgen al aan kon beginnen\". \n\nMaar eerst heeft Metejoor nog wat andere katten te geselen: hij werkt in het voorjaar van 2023 nog een tournee langs de grootste theaters af en is ook te zien in het televisieprogramma ‘Liefde voor Muziek’.','2023-11-02',110),
	(5,3,5,'The End Is Nero','Het wachten is bijna voorbij. De langverwachte nieuwe plaat van Queens Of The Stone Age is uit. \'In Times New Roman\' is het eerste album van de legendarische rockgroep sinds 2017. Bij hun terugkeer hoort een nieuwe grootse tournee. De \'The End Is Nero\' Tour krijgt na een reeks data in Noord-Amerika nu ook een Europees luik en er staat een Belgische stop op het programma!\n\nMet een onberispelijke live reputatie, bergen artistiek talent, een verzameling aan wereldhits en fantastisch nieuw werk, trekt de band op zondag 12 november naar het Antwerps Sportpaleis voor een avondje stevig rocken! ','2023-11-10',120),
	(6,5,1,'André Rieu in Antwerpen','André Rieu, Koning van de Wals, zorgde samen met zijn Johann Strauss Orkest voor een wereldwijde heropleving van de walsmuziek. Elk jaar viert hij dit met zijn traditioneel Nieuwjaarsconcert.\n\nAndré Rieu kondigt met veel plezier nieuwe data aan voor zijn traditionele Nieuwjaarsconcerten in Amsterdam en Antwerpen in januari 2024. De concerten, waarmee zijn wereldtournee 2024 begint, vinden plaats in de Ziggo Dome Amsterdam op 6 januari en in Sportpaleis Antwerpen op 7 januari. \n\nDe concerten in Amsterdam en Antwerpen zijn de perfecte start voor het nieuwe jaar. Fans kunnen een avond vol walsen, opera- en operettemelodieën, musical, romantiek, plezier en heel veel verrassingen verwachten.\n\nAndré Rieu, bij miljoenen over de hele wereld bekend als de Koning van de Wals, is een muzikaal fenomeen als geen ander, een echte Koning van de Romantiek, met maar liefst 40 miljoen verkochte cd\'s en dvd\'s en 30 nummer 1-posities in de hitlijsten over de hele wereld. Samen met zijn 60-koppige Johann Strauss Orkest (het grootste privé-orkest ter wereld) heeft André een wereldwijde heropleving van de walsmuziek gecreëerd, met spectaculaire acts die ongeëvenaard zijn.\n\nAndré Rieu en zijn orkest zijn momenteel op tournee in Duitsland en zullen vervolgens optreden in Spanje, Bahrein, het Verenigd Koninkrijk, Ierland, Polen, Denemarken, de VS, Canada en Oost-Europa. Bijzondere hoogtepunten in 2023 zijn zijn allereerste concerten op Malta in september 2023 en natuurlijk de zomerse openluchtconcerten op het Vrijthof in juli.','2024-01-06',99);

/*!40000 ALTER TABLE `concerts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `location_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;

INSERT INTO `locations` (`location_id`, `name`)
VALUES
	(1,'Sportpaleis'),
	(2,'AB'),
	(3,'Plopsaland'),
	(4,'Lotto arena'),
	(5,'Vorst nationaal');

/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
