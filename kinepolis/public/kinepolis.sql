
DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `movie_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT '',
  `description` text,
  `yt_trailer` varchar(256) DEFAULT NULL,
  `photo` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `movies` (`movie_id`, `title`, `description`, `yt_trailer`, `photo`)
VALUES
	(1,'Hunger Games: The Ballad of Songbirds & Snakes','De jonge Coriolanus (Tom Blyth) is de laatste hoop van de familie Snow. Ooit waren ze oppermachtig maar in het na-oorlogse Capitool vielen ze in ongenade... en enkel hij kan de familienaam in ere herstellen. Met de jaarlijkse Hongerspelen in aantocht, wordt hij aangeduid als mentor van Lucy Gray Baird (Rachel Zegler), een tribuut uit het verguisde District 12. Wanneer Lucy met haar charme het publiek van Panem verovert, ziet Snow een kans om zijn lot te keren. Hij overtuigt haar om hun krachten te verenigen.Verscheurd tussen het goede en het kwade in zichzelf, zet Snow alles op alles om te overleven. Is hij een zangvogel... of toch een slang?','NxW_X4kzeus','https://cdn.kinepolis.be/images/BE/65459BAD-CA99-4711-A97B-E049A5FA94D2/HO00008954/0000022237/Hunger_Games:_The_Ballad_of_Songbirds_&_Snakes.jpg'),
	(2,'Napoleon','Zin in nog meer Napoleon? Ontdek ons speciaal event: "Napoleon: Film en Facts met Johan Op De Beeck", een unieke lezing over de Franse staatsman door Napoleon-kenner en meesterverteller Johan Op de Beeck gevolgd door de vertoning van de epische film Napoleon.','OAZWXUkrjPc','https://cdn.kinepolis.be/images/BE/65459BAD-CA99-4711-A97B-E049A5FA94D2/HO00009534/0000022681/Napoleon.jpg');

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `orders` (`order_id`, `firstname`, `lastname`, `email`, `date`)
VALUES
	(1,'Dieter','De Weirdt','dieter@deweirdt.be','2023-12-05 21:00:00'),
	(2,'Bram','Braem','bram@bream.be','2023-12-05 21:07:00'),
	(3,'Me','Myself','me@myself.i','2023-12-05 20:47:30'),
	(4,'Pol','Pottie','pol@pottie.be','2023-12-05 20:48:44');


DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `order_detail_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `seat` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `order_details` (`order_detail_id`, `order_id`, `schedule_id`, `seat`)
VALUES
	(1,1,1,'01;01'),
	(2,1,1,'01;02'),
	(3,1,1,'01;03'),
	(4,1,1,'01;04'),
	(5,2,3,'03;12'),
	(6,2,3,'03;13'),
	(7,3,1,'03;05'),
	(8,3,1,'03;06'),
	(9,3,1,'03;07'),
	(10,4,1,'10;06'),
	(11,4,1,'10;07'),
	(12,4,1,'10;08'),
	(13,4,1,'10;09'),
	(48,26,3,'10;06'),
	(49,26,3,'10;07'),
	(50,26,3,'10;08'),
	(51,27,2,'15;08'),
	(52,28,1,'05;05'),
	(53,28,1,'05;06'),
	(54,28,1,'05;07'),
	(55,28,1,'05;08');


DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `room_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `rooms` (`room_id`, `name`, `rows`, `seats`)
VALUES
	(1,'Kortrijk Zaal 1',10,15),
	(2,'Kortrijk Zaal 2',15,15),
	(3,'Gent Zaal 1',12,20),
	(4,'Gent Zaal 2',15,21);


DROP TABLE IF EXISTS `schedules`;

CREATE TABLE `schedules` (
  `schedule_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `schedules` (`schedule_id`, `movie_id`, `room_id`, `start_date`)
VALUES
	(1,1,1,'2023-12-12 20:00:00'),
	(2,1,2,'2023-12-12 22:00:00'),
	(3,2,1,'2023-12-13 14:00:00');


