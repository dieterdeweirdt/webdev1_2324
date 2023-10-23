
DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `team_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT '',
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `team` (`team_id`, `name`)
VALUES
	(1,'Web Development 1'),
	(2,'Mobile Development 1'),
	(3,'UX Prototyping'),
	(4,'Fundamentals of Graphic & Digital Media'),
	(5,'Intro vormgeving'),
	(6,'UI/UX 1'),
	(7,'UI/UX 2'),
	(8,'UI/UX 3'),
	(9,'Personal & Professional Development'),
	(10,'Web Technology'),
	(11,'Bachelorproef');

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `message` text,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `message` (`message_id`, `user_id`, `team_id`, `message`, `created_on`)
VALUES
	(1,1,1,'Advanced context-sensitive complexity','2023-05-13 23:50:12'),
	(2,2,2,'Re-contextualized contextually-based budgetary management','2023-04-10 20:53:32'),
	(5,10,5,'Ameliorated 3rd generation secured line','2023-07-14 11:27:21'),
	(8,1,3,'Re-contextualized uniform encryption','2023-08-06 05:57:29'),
	(10,1,2,'Visionary bandwidth-monitored analyzer','2019-11-19 21:19:45'),
	(11,6,6,'Streamlined content-based time-frame','2023-09-28 11:57:54'),
	(12,4,1,'Stand-alone executive definition','2023-07-31 03:11:48'),
	(13,9,5,'Multi-layered composite product','2023-01-18 21:31:39'),
	(14,1,3,'Fully-configurable multi-tasking projection','2023-07-16 09:49:17'),
	(15,3,1,'Switchable tertiary adapter','2023-09-29 13:58:37'),
	(16,2,3,'Distributed stable software','2023-09-14 14:57:29'),
	(17,3,3,'Front-line 5th generation moratorium','2023-01-17 05:06:30'),
	(20,2,3,'Up-sized holistic artificial intelligence','2023-05-07 11:29:29'),
	(22,9,4,'Universal human-resource analyzer','2023-10-07 18:58:39'),
	(23,8,5,'Cross-group client-server process improvement','2023-03-17 20:04:07'),
	(25,2,2,'Pre-emptive real-time synergy','2023-04-02 12:01:25'),
	(27,5,6,'Function-based incremental throughput','2023-08-31 00:11:14'),
	(28,8,1,'Monitored tangible superstructure','2023-10-22 04:11:47'),
	(30,1,4,'Ameliorated zero administration groupware','2023-02-13 05:46:13'),
	(31,3,1,'Down-sized incremental database','2023-07-13 15:35:50'),
	(33,7,6,'Reduced dynamic concept','2019-12-10 23:23:55'),
	(34,8,1,'Polarised object-oriented pricing structure','2023-07-04 01:38:42'),
	(37,1,3,'Distributed uniform standardization','2023-03-20 12:28:03'),
	(40,8,5,'Programmable bifurcated moderator','2023-08-15 11:44:23'),
	(41,7,6,'Secured bottom-line throughput','2023-06-06 14:47:44'),
	(42,5,4,'Re-engineered regional alliance','2023-09-09 02:58:11'),
	(43,9,5,'Centralized 4th generation intranet','2023-02-05 18:51:22'),
	(44,6,4,'Centralized zero administration frame','2023-07-15 15:24:06'),
	(46,5,6,'Down-sized analyzing help-desk','2023-02-03 15:37:13'),
	(47,6,6,'Proactive global open architecture','2023-03-19 12:10:00'),
	(50,10,4,'Future-proofed zero administration focus group','2023-09-10 19:03:40'),
	(51,3,3,'Upgradable background archive','2023-07-29 12:13:42'),
	(54,2,3,'Visionary hybrid strategy','2023-06-24 11:47:37'),
	(57,1,3,'Open-architected discrete firmware','2023-01-08 10:27:13'),
	(61,1,1,'Total bifurcated extranet','2023-08-23 15:36:56'),
	(62,8,5,'Open-source disintermediate concept','2023-10-15 00:24:48'),
	(63,9,5,'Quality-focused 24/7 algorithm','2023-03-10 03:21:47'),
	(64,10,5,'Reverse-engineered hybrid utilisation','2023-08-20 14:37:47'),
	(65,10,4,'Exclusive explicit pricing structure','2023-09-09 02:20:31'),
	(68,8,5,'Distributed responsive budgetary management','2023-06-21 08:09:22'),
	(69,5,1,'De-engineered homogeneous interface','2023-02-23 22:53:43'),
	(70,1,1,'Fundamental high-level analyzer','2023-04-16 17:32:01'),
	(72,5,1,'Decentralized system-worthy approach','2023-05-31 07:21:04'),
	(75,8,4,'Persistent mobile focus group','2023-08-05 06:23:51'),
	(76,1,2,'Streamlined client-server budgetary management','2023-07-18 03:08:40'),
	(77,6,4,'Grass-roots non-volatile software','2023-01-27 14:00:13'),
	(80,8,1,'Polarised fresh-thinking extranet','2023-08-14 00:41:25'),
	(81,9,5,'Virtual tertiary extranet','2023-01-02 20:02:49'),
	(82,5,6,'Configurable responsive budgetary management','2019-11-30 12:42:12'),
	(83,3,1,'Managed radical database','2023-06-20 03:59:09'),
	(85,3,3,'Visionary systemic infrastructure','2023-05-06 00:28:32'),
	(86,8,5,'Multi-tiered 5th generation initiative','2023-03-27 16:05:45'),
	(87,6,6,'Sharable optimal software','2023-10-11 00:05:40'),
	(89,2,2,'Secured 24/7 collaboration','2023-06-19 17:00:28'),
	(90,9,5,'Sharable 6th generation neural-net','2023-06-28 02:59:09'),
	(91,3,1,'Re-engineered dedicated forecast','2019-12-08 07:12:18'),
	(92,8,5,'Persevering full-range moratorium','2023-06-14 23:51:07'),
	(93,7,6,'Phased well-modulated secured line','2023-05-28 18:17:19'),
	(94,5,6,'Customizable holistic initiative','2019-12-05 19:22:55'),
	(96,6,6,'Realigned zero administration frame','2023-01-19 02:55:45'),
	(98,9,5,'Switchable cohesive extranet','2023-07-27 16:45:21'),
	(99,8,5,'Business-focused user-facing moderator','2023-08-09 03:53:52'),
	(100,1,2,'Organic empowering instruction set','2023-06-30 09:19:11'),
	(101,7,6,'Balanced motivating knowledge user','2019-11-06 13:46:18'),
	(102,5,6,'Distributed systemic leverage','2023-07-01 20:59:57'),
	(107,1,1,'Front-line radical database','2023-05-18 22:09:02'),
	(108,1,1,'Fundamental holistic neural-net','2023-04-29 16:17:23'),
	(119,9,4,'Quality-focused next generation portal','2023-06-04 03:10:24'),
	(123,2,2,'Right-sized logistical workforce','2023-10-11 17:23:53'),
	(124,6,6,'Upgradable 4th generation task-force','2023-06-14 00:51:11'),
	(126,9,5,'Networked zero tolerance infrastructure','2019-11-02 04:42:08'),
	(127,6,6,'Horizontal optimal framework','2023-02-26 15:49:45'),
	(128,1,2,'Business-focused zero defect Graphic Interface','2023-02-16 03:21:31'),
	(131,8,5,'Digitized leading edge matrices','2023-09-18 09:34:01'),
	(132,2,2,'Enhanced neutral attitude','2019-12-02 20:03:57'),
	(135,1,2,'Programmable reciprocal focus group','2023-06-01 22:08:14'),
	(136,1,3,'Enhanced impactful implementation','2019-11-10 22:08:25'),
	(137,7,6,'Universal responsive architecture','2019-11-08 16:29:28'),
	(138,2,2,'Profound disintermediate conglomeration','2019-11-08 22:00:05'),
	(140,3,4,'Streamlined foreground info-mediaries','2023-02-18 00:56:56'),
	(141,5,6,'Reverse-engineered uniform portal','2023-04-12 09:44:31'),
	(142,1,2,'Universal multi-state productivity','2023-09-24 03:10:27'),
	(143,7,6,'Compatible user-facing firmware','2019-11-21 18:02:08'),
	(144,10,4,'Stand-alone 6th generation project','2023-01-01 20:54:12'),
	(146,7,4,'Cross-group human-resource contingency','2023-06-18 13:02:40'),
	(147,9,5,'Organic even-keeled portal','2023-03-11 14:53:26'),
	(148,3,1,'Balanced zero administration middleware','2023-01-27 09:30:58'),
	(151,8,5,'Ergonomic 24/7 interface','2023-10-05 02:12:05'),
	(152,6,6,'Ameliorated demand-driven task-force','2019-11-12 09:49:05'),
	(153,2,2,'Seamless asymmetric matrices','2023-07-02 12:13:55'),
	(154,2,3,'Configurable systematic frame','2023-06-15 06:12:58'),
	(156,4,4,'Grass-roots neutral parallelism','2023-07-13 13:40:07'),
	(157,3,1,'Distributed 4th generation neural-net','2023-06-02 00:56:20'),
	(158,1,3,'Up-sized global projection','2019-11-22 23:16:25'),
	(159,3,1,'Inverse fresh-thinking benchmark','2023-07-31 04:53:58'),
	(160,1,1,'De-engineered needs-based benchmark','2023-06-24 23:06:37'),
	(163,1,4,'Total radical installation','2023-01-30 12:36:01'),
	(164,1,2,'Monitored next generation projection','2023-07-31 10:19:59'),
	(165,3,1,'Reactive client-driven application','2023-05-09 21:02:47'),
	(168,8,5,'Down-sized didactic moratorium','2019-12-22 12:03:40'),
	(170,5,6,'Up-sized discrete capacity','2023-10-01 09:02:20'),
	(171,6,4,'Re-contextualized intangible infrastructure','2019-12-15 16:54:02'),
	(172,9,4,'Universal coherent infrastructure','2023-10-21 00:59:34'),
	(176,3,3,'Profit-focused motivating methodology','2023-02-27 18:15:48'),
	(178,8,4,'Optimized interactive customer loyalty','2023-03-12 20:10:26'),
	(181,1,3,'Networked zero tolerance system engine','2019-11-02 16:36:16'),
	(182,10,4,'Balanced encompassing flexibility','2023-10-04 10:40:43'),
	(183,2,2,'Reactive regional workforce','2023-10-12 07:42:55'),
	(184,2,3,'Centralized coherent knowledge user','2019-12-25 01:36:25'),
	(186,6,4,'Profound incremental knowledge base','2023-08-27 09:11:55'),
	(188,1,1,'Object-based dynamic framework','2023-09-11 21:47:33'),
	(193,10,5,'Decentralized directional definition','2023-03-23 02:57:49'),
	(194,7,6,'Seamless exuding interface','2023-02-17 12:37:49'),
	(197,1,4,'Exclusive scalable productivity','2019-12-20 10:16:29'),
	(199,3,3,'Team-oriented systematic internet solution','2023-04-24 14:21:36'),
	(201,1,4,'asdf','2023-01-23 15:25:50'),
	(202,1,4,'Nice Idea !!!','2023-01-23 15:26:02'),
	(203,1,1,'OK','2023-01-23 15:26:35'),
	(204,1,15,'Hey Elana','2023-01-23 15:54:43');


DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`, `creation_date`)
VALUES
	(1,'Armando','Rawstron','ar@web.com','testing','2023-01-28 00:00:00'),
	(2,'Dane','McLarty','dmclarty1@senate.gov','07XkRWb','2023-01-14 00:00:00'),
	(3,'Dwain','Nuccii','dnuccii2@xing.com','Vy6ivAHhi8Q0','2019-11-16 00:00:00'),
	(4,'Elana','Westover','ewestover3@marriott.com','aHEeEE35Hdwh','2019-12-09 00:00:00'),
	(5,'Calli','Degenhardt','cdegenhardt4@statcounter.com','a6S7NOw8Dk','2019-12-13 00:00:00'),
	(6,'Dasi','Latan','dlatan5@e-recht24.de','Hp83OxL6','2023-06-28 00:00:00'),
	(7,'Moina','Janecki','mjanecki6@gov.uk','CYQlUW','2023-02-27 00:00:00'),
	(8,'Kelsey','Bernette','kbernette7@indiatimes.com','YVbwSYBKMYRe','2023-07-22 00:00:00'),
	(9,'Brit','Hancock','bhancock8@gravatar.com','JPeUByCqnGEA','2023-01-30 00:00:00'),
	(10,'Hermon','Goseling','hgoseling9@buzzfeed.com','SfbRXy40mL','2023-03-06 00:00:00');

DROP TABLE IF EXISTS `user_team`;

CREATE TABLE `user_team` (
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_team` (`user_id`, `team_id`)
VALUES
	(1,1),
	(1,2),
	(1,3),
	(1,4),
	(1,15),
	(2,2),
	(2,3),
	(2,4),
	(3,1),
	(3,3),
	(3,4),
	(4,4),
	(4,15),
	(5,4),
	(5,6),
	(6,4),
	(6,6),
	(7,4),
	(7,6),
	(8,4),
	(8,5),
	(9,4),
	(9,5),
	(10,4),
	(10,5);
