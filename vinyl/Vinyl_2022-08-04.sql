# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: Vinyl
# Generation Time: 2022-08-04 10:51:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table records
# ------------------------------------------------------------

DROP TABLE IF EXISTS `records`;

CREATE TABLE `records` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `record-name` varchar(100) NOT NULL DEFAULT '',
  `artist-name` varchar(100) NOT NULL DEFAULT '',
  `record-size` enum('7 inch','10 inch','12 inch') DEFAULT NULL,
  `delete` tinyint(1) NOT NULL DEFAULT 0,
  `images` varchar(1000) NOT NULL DEFAULT 'https://i.imgur.com/tIS8gME.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;

INSERT INTO `records` (`id`, `record-name`, `artist-name`, `record-size`, `delete`, `images`)
VALUES
	(1,'Soul Mining','THE THE','12 inch',0,'https://i.imgur.com/gA9ECmX.jpg'),
	(2,'AM','Arctic Monkeys','12 inch',0,'https://i.imgur.com/RkzdGot.jpg'),
	(3,'Dark Side Of The Moon','Pink Floyd','12 inch',0,'https://i.imgur.com/mfQT4b1.jpg'),
	(4,'Albatross','Fleetwood Mac','7 inch',0,'https://i.imgur.com/QhhkzIq.jpg'),
	(5,'Highway To Hell','AC/DC','12 inch',0,'https://i.imgur.com/H07LuKf.jpg'),
	(6,'Bat Out Of Hell','Meat Loaf','7 inch',0,'https://i.imgur.com/Nk4zbdh.jpg'),
	(7,'Fleetwood machine','test','10 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(8,'Back to Black','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(9,'Rehab','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(10,'Rehab','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(11,'Rehab','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(12,'Rehab','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(13,'Back to Black','Amy Winehouse','7 inch',0,'https://i.imgur.com/6ueyCmg.jpg'),
	(14,'Back to Black','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(15,'Back to Black','Amy Winehouse','7 inch',1,'https://i.imgur.com/tIS8gME.jpg'),
	(16,'Kasabian','Kasabian','12 inch',0,'https://i.imgur.com/lm5L8EE.jpg');

/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
