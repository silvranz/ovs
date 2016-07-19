/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - os
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(100) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=228 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`CountryID`,`CountryName`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Afghanistan',1,'2016-07-17 12:52:58','C',NULL,NULL),(2,'Albania',1,'2016-07-17 12:52:58','C',NULL,NULL),(3,'Algeria',1,'2016-07-17 12:52:58','C',NULL,NULL),(4,'American Samoa',1,'2016-07-17 12:52:58','C',NULL,NULL),(5,'Andorra',1,'2016-07-17 12:52:58','C',NULL,NULL),(6,'Angola',1,'2016-07-17 12:52:58','C',NULL,NULL),(7,'Anguilla',1,'2016-07-17 12:52:58','C',NULL,NULL),(8,'Antigua & Barbuda',1,'2016-07-17 12:52:58','C',NULL,NULL),(9,'Argentina',1,'2016-07-17 12:52:58','C',NULL,NULL),(10,'Armenia',1,'2016-07-17 12:52:58','C',NULL,NULL),(11,'Aruba',1,'2016-07-17 12:52:58','C',NULL,NULL),(12,'Australia',1,'2016-07-17 12:52:58','C',NULL,NULL),(13,'Austria',1,'2016-07-17 12:52:58','C',NULL,NULL),(14,'Azerbaijan',1,'2016-07-17 12:52:58','C',NULL,NULL),(15,'Bahamas, The',1,'2016-07-17 12:52:58','C',NULL,NULL),(16,'Bahrain',1,'2016-07-17 12:52:58','C',NULL,NULL),(17,'Bangladesh',1,'2016-07-17 12:52:58','C',NULL,NULL),(18,'Barbados',1,'2016-07-17 12:52:58','C',NULL,NULL),(19,'Belarus',1,'2016-07-17 12:52:58','C',NULL,NULL),(20,'Belgium',1,'2016-07-17 12:52:58','C',NULL,NULL),(21,'Belize',1,'2016-07-17 12:52:58','C',NULL,NULL),(22,'Benin',1,'2016-07-17 12:52:58','C',NULL,NULL),(23,'Bermuda',1,'2016-07-17 12:52:58','C',NULL,NULL),(24,'Bhutan',1,'2016-07-17 12:52:58','C',NULL,NULL),(25,'Bolivia',1,'2016-07-17 12:52:58','C',NULL,NULL),(26,'Bosnia & Herzegovina',1,'2016-07-17 12:52:58','C',NULL,NULL),(27,'Botswana',1,'2016-07-17 12:52:58','C',NULL,NULL),(28,'Brazil',1,'2016-07-17 12:52:58','C',NULL,NULL),(29,'British Virgin Is.',1,'2016-07-17 12:52:58','C',NULL,NULL),(30,'Brunei',1,'2016-07-17 12:52:58','C',NULL,NULL),(31,'Bulgaria',1,'2016-07-17 12:52:58','C',NULL,NULL),(32,'Burkina Faso',1,'2016-07-17 12:52:58','C',NULL,NULL),(33,'Burma',1,'2016-07-17 12:52:58','C',NULL,NULL),(34,'Burundi',1,'2016-07-17 12:52:58','C',NULL,NULL),(35,'Cambodia',1,'2016-07-17 12:52:58','C',NULL,NULL),(36,'Cameroon',1,'2016-07-17 12:52:58','C',NULL,NULL),(37,'Canada',1,'2016-07-17 12:52:58','C',NULL,NULL),(38,'Cape Verde',1,'2016-07-17 12:52:58','C',NULL,NULL),(39,'Cayman Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(40,'Central African Rep.',1,'2016-07-17 12:52:58','C',NULL,NULL),(41,'Chad',1,'2016-07-17 12:52:58','C',NULL,NULL),(42,'Chile',1,'2016-07-17 12:52:58','C',NULL,NULL),(43,'China',1,'2016-07-17 12:52:58','C',NULL,NULL),(44,'Colombia',1,'2016-07-17 12:52:58','C',NULL,NULL),(45,'Comoros',1,'2016-07-17 12:52:58','C',NULL,NULL),(46,'Congo, Dem. Rep.',1,'2016-07-17 12:52:58','C',NULL,NULL),(47,'Congo, Repub. of the',1,'2016-07-17 12:52:58','C',NULL,NULL),(48,'Cook Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(49,'Costa Rica',1,'2016-07-17 12:52:58','C',NULL,NULL),(50,'Cote d\'Ivoire',1,'2016-07-17 12:52:58','C',NULL,NULL),(51,'Croatia',1,'2016-07-17 12:52:58','C',NULL,NULL),(52,'Cuba',1,'2016-07-17 12:52:58','C',NULL,NULL),(53,'Cyprus',1,'2016-07-17 12:52:58','C',NULL,NULL),(54,'Czech Republic',1,'2016-07-17 12:52:58','C',NULL,NULL),(55,'Denmark',1,'2016-07-17 12:52:58','C',NULL,NULL),(56,'Djibouti',1,'2016-07-17 12:52:58','C',NULL,NULL),(57,'Dominica',1,'2016-07-17 12:52:58','C',NULL,NULL),(58,'Dominican Republic',1,'2016-07-17 12:52:58','C',NULL,NULL),(59,'East Timor',1,'2016-07-17 12:52:58','C',NULL,NULL),(60,'Ecuador',1,'2016-07-17 12:52:58','C',NULL,NULL),(61,'Egypt',1,'2016-07-17 12:52:58','C',NULL,NULL),(62,'El Salvador',1,'2016-07-17 12:52:58','C',NULL,NULL),(63,'Equatorial Guinea',1,'2016-07-17 12:52:58','C',NULL,NULL),(64,'Eritrea',1,'2016-07-17 12:52:58','C',NULL,NULL),(65,'Estonia',1,'2016-07-17 12:52:58','C',NULL,NULL),(66,'Ethiopia',1,'2016-07-17 12:52:58','C',NULL,NULL),(67,'Faroe Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(68,'Fiji',1,'2016-07-17 12:52:58','C',NULL,NULL),(69,'Finland',1,'2016-07-17 12:52:58','C',NULL,NULL),(70,'France',1,'2016-07-17 12:52:58','C',NULL,NULL),(71,'French Guiana',1,'2016-07-17 12:52:58','C',NULL,NULL),(72,'French Polynesia',1,'2016-07-17 12:52:58','C',NULL,NULL),(73,'Gabon',1,'2016-07-17 12:52:58','C',NULL,NULL),(74,'Gambia, The',1,'2016-07-17 12:52:58','C',NULL,NULL),(75,'Gaza Strip',1,'2016-07-17 12:52:58','C',NULL,NULL),(76,'Georgia',1,'2016-07-17 12:52:58','C',NULL,NULL),(77,'Germany',1,'2016-07-17 12:52:58','C',NULL,NULL),(78,'Ghana',1,'2016-07-17 12:52:58','C',NULL,NULL),(79,'Gibraltar',1,'2016-07-17 12:52:58','C',NULL,NULL),(80,'Greece',1,'2016-07-17 12:52:58','C',NULL,NULL),(81,'Greenland',1,'2016-07-17 12:52:58','C',NULL,NULL),(82,'Grenada',1,'2016-07-17 12:52:58','C',NULL,NULL),(83,'Guadeloupe',1,'2016-07-17 12:52:58','C',NULL,NULL),(84,'Guam',1,'2016-07-17 12:52:58','C',NULL,NULL),(85,'Guatemala',1,'2016-07-17 12:52:58','C',NULL,NULL),(86,'Guernsey',1,'2016-07-17 12:52:58','C',NULL,NULL),(87,'Guinea',1,'2016-07-17 12:52:58','C',NULL,NULL),(88,'Guinea-Bissau',1,'2016-07-17 12:52:58','C',NULL,NULL),(89,'Guyana',1,'2016-07-17 12:52:58','C',NULL,NULL),(90,'Haiti',1,'2016-07-17 12:52:58','C',NULL,NULL),(91,'Honduras',1,'2016-07-17 12:52:58','C',NULL,NULL),(92,'Hong Kong',1,'2016-07-17 12:52:58','C',NULL,NULL),(93,'Hungary',1,'2016-07-17 12:52:58','C',NULL,NULL),(94,'Iceland',1,'2016-07-17 12:52:58','C',NULL,NULL),(95,'India',1,'2016-07-17 12:52:58','C',NULL,NULL),(96,'Indonesia',1,'2016-07-17 12:52:58','C',NULL,NULL),(97,'Iran',1,'2016-07-17 12:52:58','C',NULL,NULL),(98,'Iraq',1,'2016-07-17 12:52:58','C',NULL,NULL),(99,'Ireland',1,'2016-07-17 12:52:58','C',NULL,NULL),(100,'Isle of Man',1,'2016-07-17 12:52:58','C',NULL,NULL),(101,'Israel',1,'2016-07-17 12:52:58','C',NULL,NULL),(102,'Italy',1,'2016-07-17 12:52:58','C',NULL,NULL),(103,'Jamaica',1,'2016-07-17 12:52:58','C',NULL,NULL),(104,'Japan',1,'2016-07-17 12:52:58','C',NULL,NULL),(105,'Jersey',1,'2016-07-17 12:52:58','C',NULL,NULL),(106,'Jordan',1,'2016-07-17 12:52:58','C',NULL,NULL),(107,'Kazakhstan',1,'2016-07-17 12:52:58','C',NULL,NULL),(108,'Kenya',1,'2016-07-17 12:52:58','C',NULL,NULL),(109,'Kiribati',1,'2016-07-17 12:52:58','C',NULL,NULL),(110,'Korea, North',1,'2016-07-17 12:52:58','C',NULL,NULL),(111,'Korea, South',1,'2016-07-17 12:52:58','C',NULL,NULL),(112,'Kuwait',1,'2016-07-17 12:52:58','C',NULL,NULL),(113,'Kyrgyzstan',1,'2016-07-17 12:52:58','C',NULL,NULL),(114,'Laos',1,'2016-07-17 12:52:58','C',NULL,NULL),(115,'Latvia',1,'2016-07-17 12:52:58','C',NULL,NULL),(116,'Lebanon',1,'2016-07-17 12:52:58','C',NULL,NULL),(117,'Lesotho',1,'2016-07-17 12:52:58','C',NULL,NULL),(118,'Liberia',1,'2016-07-17 12:52:58','C',NULL,NULL),(119,'Libya',1,'2016-07-17 12:52:58','C',NULL,NULL),(120,'Liechtenstein',1,'2016-07-17 12:52:58','C',NULL,NULL),(121,'Lithuania',1,'2016-07-17 12:52:58','C',NULL,NULL),(122,'Luxembourg',1,'2016-07-17 12:52:58','C',NULL,NULL),(123,'Macau',1,'2016-07-17 12:52:58','C',NULL,NULL),(124,'Macedonia',1,'2016-07-17 12:52:58','C',NULL,NULL),(125,'Madagascar',1,'2016-07-17 12:52:58','C',NULL,NULL),(126,'Malawi',1,'2016-07-17 12:52:58','C',NULL,NULL),(127,'Malaysia',1,'2016-07-17 12:52:58','C',NULL,NULL),(128,'Maldives',1,'2016-07-17 12:52:58','C',NULL,NULL),(129,'Mali',1,'2016-07-17 12:52:58','C',NULL,NULL),(130,'Malta',1,'2016-07-17 12:52:58','C',NULL,NULL),(131,'Marshall Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(132,'Martinique',1,'2016-07-17 12:52:58','C',NULL,NULL),(133,'Mauritania',1,'2016-07-17 12:52:58','C',NULL,NULL),(134,'Mauritius',1,'2016-07-17 12:52:58','C',NULL,NULL),(135,'Mayotte',1,'2016-07-17 12:52:58','C',NULL,NULL),(136,'Mexico',1,'2016-07-17 12:52:58','C',NULL,NULL),(137,'Micronesia, Fed. St.',1,'2016-07-17 12:52:58','C',NULL,NULL),(138,'Moldova',1,'2016-07-17 12:52:58','C',NULL,NULL),(139,'Monaco',1,'2016-07-17 12:52:58','C',NULL,NULL),(140,'Mongolia',1,'2016-07-17 12:52:58','C',NULL,NULL),(141,'Montserrat',1,'2016-07-17 12:52:58','C',NULL,NULL),(142,'Morocco',1,'2016-07-17 12:52:58','C',NULL,NULL),(143,'Mozambique',1,'2016-07-17 12:52:58','C',NULL,NULL),(144,'Namibia',1,'2016-07-17 12:52:58','C',NULL,NULL),(145,'Nauru',1,'2016-07-17 12:52:58','C',NULL,NULL),(146,'Nepal',1,'2016-07-17 12:52:58','C',NULL,NULL),(147,'Netherlands',1,'2016-07-17 12:52:58','C',NULL,NULL),(148,'Netherlands Antilles',1,'2016-07-17 12:52:58','C',NULL,NULL),(149,'New Caledonia',1,'2016-07-17 12:52:58','C',NULL,NULL),(150,'New Zealand',1,'2016-07-17 12:52:58','C',NULL,NULL),(151,'Nicaragua',1,'2016-07-17 12:52:58','C',NULL,NULL),(152,'Niger',1,'2016-07-17 12:52:58','C',NULL,NULL),(153,'Nigeria',1,'2016-07-17 12:52:58','C',NULL,NULL),(154,'N. Mariana Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(155,'Norway',1,'2016-07-17 12:52:58','C',NULL,NULL),(156,'Oman',1,'2016-07-17 12:52:58','C',NULL,NULL),(157,'Pakistan',1,'2016-07-17 12:52:58','C',NULL,NULL),(158,'Palau',1,'2016-07-17 12:52:58','C',NULL,NULL),(159,'Panama',1,'2016-07-17 12:52:58','C',NULL,NULL),(160,'Papua New Guinea',1,'2016-07-17 12:52:58','C',NULL,NULL),(161,'Paraguay',1,'2016-07-17 12:52:58','C',NULL,NULL),(162,'Peru',1,'2016-07-17 12:52:58','C',NULL,NULL),(163,'Philippines',1,'2016-07-17 12:52:58','C',NULL,NULL),(164,'Poland',1,'2016-07-17 12:52:58','C',NULL,NULL),(165,'Portugal',1,'2016-07-17 12:52:58','C',NULL,NULL),(166,'Puerto Rico',1,'2016-07-17 12:52:58','C',NULL,NULL),(167,'Qatar',1,'2016-07-17 12:52:58','C',NULL,NULL),(168,'Reunion',1,'2016-07-17 12:52:58','C',NULL,NULL),(169,'Romania',1,'2016-07-17 12:52:58','C',NULL,NULL),(170,'Russia',1,'2016-07-17 12:52:58','C',NULL,NULL),(171,'Rwanda',1,'2016-07-17 12:52:58','C',NULL,NULL),(172,'Saint Helena',1,'2016-07-17 12:52:58','C',NULL,NULL),(173,'Saint Kitts & Nevis',1,'2016-07-17 12:52:58','C',NULL,NULL),(174,'Saint Lucia',1,'2016-07-17 12:52:58','C',NULL,NULL),(175,'St Pierre & Miquelon',1,'2016-07-17 12:52:58','C',NULL,NULL),(176,'Saint Vincent and the Grenadines',1,'2016-07-17 12:52:58','C',NULL,NULL),(177,'Samoa',1,'2016-07-17 12:52:58','C',NULL,NULL),(178,'San Marino',1,'2016-07-17 12:52:58','C',NULL,NULL),(179,'Sao Tome & Principe',1,'2016-07-17 12:52:58','C',NULL,NULL),(180,'Saudi Arabia',1,'2016-07-17 12:52:58','C',NULL,NULL),(181,'Senegal',1,'2016-07-17 12:52:58','C',NULL,NULL),(182,'Serbia',1,'2016-07-17 12:52:58','C',NULL,NULL),(183,'Seychelles',1,'2016-07-17 12:52:58','C',NULL,NULL),(184,'Sierra Leone',1,'2016-07-17 12:52:58','C',NULL,NULL),(185,'Singapore',1,'2016-07-17 12:52:58','C',NULL,NULL),(186,'Slovakia',1,'2016-07-17 12:52:58','C',NULL,NULL),(187,'Slovenia',1,'2016-07-17 12:52:58','C',NULL,NULL),(188,'Solomon Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(189,'Somalia',1,'2016-07-17 12:52:58','C',NULL,NULL),(190,'South Africa',1,'2016-07-17 12:52:58','C',NULL,NULL),(191,'Spain',1,'2016-07-17 12:52:58','C',NULL,NULL),(192,'Sri Lanka',1,'2016-07-17 12:52:58','C',NULL,NULL),(193,'Sudan',1,'2016-07-17 12:52:58','C',NULL,NULL),(194,'Suriname',1,'2016-07-17 12:52:58','C',NULL,NULL),(195,'Swaziland',1,'2016-07-17 12:52:58','C',NULL,NULL),(196,'Sweden',1,'2016-07-17 12:52:58','C',NULL,NULL),(197,'Switzerland',1,'2016-07-17 12:52:58','C',NULL,NULL),(198,'Syria',1,'2016-07-17 12:52:58','C',NULL,NULL),(199,'Taiwan',1,'2016-07-17 12:52:58','C',NULL,NULL),(200,'Tajikistan',1,'2016-07-17 12:52:58','C',NULL,NULL),(201,'Tanzania',1,'2016-07-17 12:52:58','C',NULL,NULL),(202,'Thailand',1,'2016-07-17 12:52:58','C',NULL,NULL),(203,'Togo',1,'2016-07-17 12:52:58','C',NULL,NULL),(204,'Tonga',1,'2016-07-17 12:52:58','C',NULL,NULL),(205,'Trinidad & Tobago',1,'2016-07-17 12:52:58','C',NULL,NULL),(206,'Tunisia',1,'2016-07-17 12:52:58','C',NULL,NULL),(207,'Turkey',1,'2016-07-17 12:52:58','C',NULL,NULL),(208,'Turkmenistan',1,'2016-07-17 12:52:58','C',NULL,NULL),(209,'Turks & Caicos Is',1,'2016-07-17 12:52:58','C',NULL,NULL),(210,'Tuvalu',1,'2016-07-17 12:52:58','C',NULL,NULL),(211,'Uganda',1,'2016-07-17 12:52:58','C',NULL,NULL),(212,'Ukraine',1,'2016-07-17 12:52:58','C',NULL,NULL),(213,'United Arab Emirates',1,'2016-07-17 12:52:58','C',NULL,NULL),(214,'United Kingdom',1,'2016-07-17 12:52:58','C',NULL,NULL),(215,'United States',1,'2016-07-17 12:52:58','C',NULL,NULL),(216,'Uruguay',1,'2016-07-17 12:52:58','C',NULL,NULL),(217,'Uzbekistan',1,'2016-07-17 12:52:58','C',NULL,NULL),(218,'Vanuatu',1,'2016-07-17 12:52:58','C',NULL,NULL),(219,'Venezuela',1,'2016-07-17 12:52:58','C',NULL,NULL),(220,'Vietnam',1,'2016-07-17 12:52:58','C',NULL,NULL),(221,'Virgin Islands',1,'2016-07-17 12:52:58','C',NULL,NULL),(222,'Wallis and Futuna',1,'2016-07-17 12:52:58','C',NULL,NULL),(223,'West Bank',1,'2016-07-17 12:52:58','C',NULL,NULL),(224,'Western Sahara',1,'2016-07-17 12:52:58','C',NULL,NULL),(225,'Yemen',1,'2016-07-17 12:52:58','C',NULL,NULL),(226,'Zambia',1,'2016-07-17 12:52:58','C',NULL,NULL),(227,'Zimbabwe',1,'2016-07-17 12:52:58','C',NULL,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserFullName` varchar(100) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `UserPassword` varchar(200) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT NULL,
  `UserPhoto` varchar(100) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `FacebookID` varchar(200) DEFAULT NULL,
  `GooglePlusID` varchar(200) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`UserID`,`UserFullName`,`UserEmail`,`UserPassword`,`isAdmin`,`UserPhoto`,`Gender`,`CountryID`,`FacebookID`,`GooglePlusID`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Angela Muliawan','amuliawan93@gmail.com','6da92bae8cb46df959b41cb9cabdd0b69197a794',0,'asd.jpg','F',NULL,'asdafsadf','asdafsadf',-1,'2016-07-19 20:05:21','E',-1,'2016-07-19 20:05:41');

/* Procedure structure for procedure `Login` */

/*!50003 DROP PROCEDURE IF EXISTS  `Login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(
	IN `ParamUserEmail` VARCHAR(100), 
	IN `ParamUserPassword` VARCHAR(200)
)
BEGIN
	IF EXISTS (SELECT * FROM `user` WHERE UserEmail = ParamUserEmail AND UserPassword = ParamUserPassword AND AuditedActivity <> 'D')
	THEN
		SELECT UserID, UserFullName, UserEmail, isAdmin, UserPhoto
		FROM `user`
		WHERE 
		UserEmail = ParamUserEmail 
		AND 
		UserPassword = ParamUserPassword 
		AND 
		AuditedActivity <> 'D';
	ELSE
		SELECT -1 'UserID';
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `RegisterFacebook` */

/*!50003 DROP PROCEDURE IF EXISTS  `RegisterFacebook` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterFacebook`(
	IN `ParamUserFullName` VARCHAR(100), 
	IN `ParamUserEmail` VARCHAR(100), 
	IN `ParamUserPhoto` VARCHAR(200),
	in `ParamGender` char(1),
	IN `ParamFacebookID` VARCHAR(200)
)
BEGIN
	IF EXISTS (SELECT * FROM `user` WHERE UserEmail = ParamUserEmail)
	THEN
		UPDATE `user`
		SET FacebookID = ParamFacebookID,
		AuditedUser = -1,
		AuditedActivity = 'E',
		AuditedTime = CURRENT_TIMESTAMP()
		WHERE UserEmail = ParamUserEmail;
	ELSE 
		insert into `user` 
		(UserFullName, UserEmail, UserPassword, isAdmin, UserPhoto, Gender, CountryID, FacebookID, CreatedUser, CreatedDate, AuditedActivity)
		VALUES
		(ParamUserFullName, ParamUserEmail, NULL, 0, ParamUserPhoto, ParamGender, NULL, ParamFacebookID, -1, CURRENT_TIMESTAMP(), 'C');
	END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `RegisterGooglePlus` */

/*!50003 DROP PROCEDURE IF EXISTS  `RegisterGooglePlus` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterGooglePlus`(
	IN `ParamUserFullName` VARCHAR(100), 
	IN `ParamUserEmail` VARCHAR(100), 
	IN `ParamUserPhoto` VARCHAR(200),
	IN `ParamGooglePlusID` VARCHAR(200)
)
BEGIN
	IF EXISTS (SELECT * FROM `user` WHERE UserEmail = ParamUserEmail)
	THEN
		UPDATE `user`
		SET GooglePlusID = ParamGooglePlusID,
		AuditedUser = -1,
		AuditedActivity = 'E',
		AuditedTime = CURRENT_TIMESTAMP()
		WHERE UserEmail = ParamUserEmail;
	ELSE 
		INSERT INTO `user` 
		(UserFullName, UserEmail, UserPassword, isAdmin, UserPhoto, Gender, 
		CountryID, GooglePlusID, CreatedUser, CreatedDate, AuditedActivity)
		VALUES
		(ParamUserFullName, ParamUserEmail, NULL, 0, ParamUserPhoto, NULL, 
		NULL, ParamGooglePlusID, -1, CURRENT_TIMESTAMP(), 'C');
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `RegisterUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `RegisterUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterUser`(
	IN ParamUserFullName VARCHAR(100),
	IN ParamUserEmail VARCHAR(100),
	IN ParamUserPassword VARCHAR(200),
	IN ParamUserPhoto VARCHAR(100),
	IN ParamGender CHAR(1),
	IN ParamCountryID INT
)
BEGIN
	IF EXISTS 
		(SELECT * FROM `user` WHERE UserEmail = ParamUserEmail)
	THEN 
		SELECT -1 AS 'UserID';
	ELSE 
		insert into `user`
		(UserFullName, UserEmail, UserPassword, isAdmin, UserPhoto, Gender, CountryID, CreatedUser, CreatedDate, 
		AuditedActivity)
		values
		(
		ParamUserFullName,
		ParamUserEmail,
		ParamUserPassword,
		0,
		ParamUserPhoto,
		ParamGender,
		ParamCountryID,
		-1, 
		CURRENT_TIMESTAMP(),
		'C'	
		);
		SELECT LAST_INSERT_ID() AS 'UserID';
	END IF;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
