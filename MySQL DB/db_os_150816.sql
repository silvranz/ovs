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
/*Table structure for table `angela_aboutus` */

DROP TABLE IF EXISTS `angela_aboutus`;

CREATE TABLE `angela_aboutus` (
  `aboutus_id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutus_title` varchar(50) DEFAULT NULL,
  `aboutus_desc` longtext,
  `aboutus_date` datetime DEFAULT NULL,
  `aboutus_user_input` int(11) DEFAULT NULL,
  `aboutus_date_edit` datetime DEFAULT NULL,
  `aboutus_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`aboutus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `angela_aboutus` */

/*Table structure for table `angela_contactus` */

DROP TABLE IF EXISTS `angela_contactus`;

CREATE TABLE `angela_contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `contactus_name` varchar(100) DEFAULT NULL,
  `contactus_email` varchar(100) DEFAULT NULL,
  `contactus_message` varchar(2000) DEFAULT NULL,
  `contactus_isread` int(11) DEFAULT NULL,
  `contactus_date` datetime DEFAULT NULL,
  PRIMARY KEY (`contactus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `angela_contactus` */

/*Table structure for table `angela_genset` */

DROP TABLE IF EXISTS `angela_genset`;

CREATE TABLE `angela_genset` (
  `genset_id` int(11) NOT NULL AUTO_INCREMENT,
  `genset_type` varchar(100) DEFAULT NULL,
  `genset_content` varchar(100) DEFAULT NULL,
  `genset_date` datetime DEFAULT NULL,
  `genset_user_input` int(11) DEFAULT NULL,
  `genset_date_edit` datetime DEFAULT NULL,
  `genset_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`genset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `angela_genset` */

/*Table structure for table `angela_prod` */

DROP TABLE IF EXISTS `angela_prod`;

CREATE TABLE `angela_prod` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) DEFAULT NULL,
  `prod_desc` longtext,
  `prod_image` varchar(100) DEFAULT NULL,
  `prod_cat_id` int(11) DEFAULT NULL,
  `prod_date` datetime DEFAULT NULL,
  `prod_user_input` int(11) DEFAULT NULL,
  `prod_date_edit` datetime DEFAULT NULL,
  `prod_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `angela_prod` */

/*Table structure for table `angela_prod_cat` */

DROP TABLE IF EXISTS `angela_prod_cat`;

CREATE TABLE `angela_prod_cat` (
  `prod_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_cat_name` varchar(50) DEFAULT NULL,
  `prod_cat_date` datetime DEFAULT NULL,
  `prod_cat_user_input` int(11) DEFAULT NULL,
  `prod_cat_date_edit` datetime DEFAULT NULL,
  `prod_cat_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `angela_prod_cat` */

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

/*Table structure for table `generateweblog` */

DROP TABLE IF EXISTS `generateweblog`;

CREATE TABLE `generateweblog` (
  `GenerateWebID` int(11) NOT NULL AUTO_INCREMENT,
  `StoreID` int(11) DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL,
  `SPName` varchar(100) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `GenerateDate` datetime DEFAULT NULL,
  `Browser` varchar(100) DEFAULT NULL,
  `BrowserVersion` varchar(100) DEFAULT NULL,
  `IPAddress` varchar(100) DEFAULT NULL,
  `Device` varchar(100) DEFAULT NULL,
  `OS` varchar(50) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`GenerateWebID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `generateweblog` */

insert  into `generateweblog`(`GenerateWebID`,`StoreID`,`TemplateID`,`SPName`,`UserID`,`GenerateDate`,`Browser`,`BrowserVersion`,`IPAddress`,`Device`,`OS`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,1,1,'GenerateTableCompanyProfile',1,'2016-08-10 12:13:23','Chrome','10','10.1.11.11','Windows','Windows 10',1,'2016-08-10 12:13:23','C',NULL,NULL);

/*Table structure for table `mappingsp` */

DROP TABLE IF EXISTS `mappingsp`;

CREATE TABLE `mappingsp` (
  `MappingID` int(11) NOT NULL AUTO_INCREMENT,
  `SPID` int(11) DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`MappingID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mappingsp` */

insert  into `mappingsp`(`MappingID`,`SPID`,`TemplateID`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,1,1,'2016-08-10 11:37:07','C',NULL,NULL);

/*Table structure for table `sp` */

DROP TABLE IF EXISTS `sp`;

CREATE TABLE `sp` (
  `SPID` int(11) NOT NULL AUTO_INCREMENT,
  `SPName` varchar(100) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`SPID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sp` */

insert  into `sp`(`SPID`,`SPName`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'GenerateTableCompanyProfile',1,'2016-08-10 11:36:35','C',NULL,NULL);

/*Table structure for table `store` */

DROP TABLE IF EXISTS `store`;

CREATE TABLE `store` (
  `StoreID` int(11) NOT NULL AUTO_INCREMENT,
  `StoreName` varchar(50) DEFAULT NULL,
  `StoreDomain` varchar(26) DEFAULT NULL,
  `StoreImage` varchar(100) DEFAULT NULL,
  `StoreProjectName` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL,
  `StoreJson` longtext,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`StoreID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `store` */

insert  into `store`(`StoreID`,`StoreName`,`StoreDomain`,`StoreImage`,`StoreProjectName`,`UserID`,`TemplateID`,`StoreJson`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Thelana Shop','thelana.ovslab.com',NULL,'tmp1',5,4,'asdafdfadf',5,'2016-07-24 10:34:40','C',NULL,NULL),(2,'Thelana Shop','thelana','aa.jpg','thelana',5,1,NULL,5,'2016-08-12 14:50:10','C',NULL,NULL);

/*Table structure for table `storetable` */

DROP TABLE IF EXISTS `storetable`;

CREATE TABLE `storetable` (
  `StoreTableID` int(11) NOT NULL AUTO_INCREMENT,
  `StoreTableName` varchar(100) DEFAULT NULL,
  `StoreID` int(11) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`StoreTableID`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

/*Data for the table `storetable` */

insert  into `storetable`(`StoreTableID`,`StoreTableName`,`StoreID`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'tmp1_prod',1,1,'2016-08-10 15:17:45','C',NULL,NULL),(2,'tmp1_prod_cat',1,1,'2016-08-10 15:17:45','C',NULL,NULL),(3,'tmp1_aboutus',1,1,'2016-08-10 15:17:46','C',NULL,NULL),(4,'tmp1_aboutus_cat',1,1,'2016-08-10 15:17:46','C',NULL,NULL),(5,'tmp1_contactus',1,1,'2016-08-10 15:17:46','C',NULL,NULL),(6,'tmp1_genset',1,1,'2016-08-10 15:17:46','C',NULL,NULL),(12,'angela_prod',1,1,'2016-08-11 09:46:37','C',NULL,NULL),(13,'angela_prod_cat',1,1,'2016-08-11 09:46:37','C',NULL,NULL),(14,'angela_aboutus',1,1,'2016-08-11 09:46:37','C',NULL,NULL),(15,'angela_contactus',1,1,'2016-08-11 09:46:37','C',NULL,NULL),(16,'angela_genset',1,1,'2016-08-11 09:46:37','C',NULL,NULL),(17,'angela_prod',1,1,'2016-08-11 09:47:16','C',NULL,NULL),(18,'angela_prod_cat',1,1,'2016-08-11 09:47:17','C',NULL,NULL),(19,'angela_aboutus',1,1,'2016-08-11 09:47:17','C',NULL,NULL),(20,'angela_contactus',1,1,'2016-08-11 09:47:17','C',NULL,NULL),(21,'angela_genset',1,1,'2016-08-11 09:47:17','C',NULL,NULL),(22,'angela_prod',1,1,'2016-08-11 09:48:24','C',NULL,NULL),(23,'angela_prod_cat',1,1,'2016-08-11 09:48:24','C',NULL,NULL),(24,'angela_aboutus',1,1,'2016-08-11 09:48:25','C',NULL,NULL),(25,'angela_contactus',1,1,'2016-08-11 09:48:25','C',NULL,NULL),(26,'angela_genset',1,1,'2016-08-11 09:48:25','C',NULL,NULL),(27,'angela_prod',1,1,'2016-08-11 09:51:51','C',NULL,NULL),(28,'angela_prod_cat',1,1,'2016-08-11 09:51:51','C',NULL,NULL),(29,'angela_aboutus',1,1,'2016-08-11 09:51:51','C',NULL,NULL),(30,'angela_contactus',1,1,'2016-08-11 09:51:51','C',NULL,NULL),(31,'angela_genset',1,1,'2016-08-11 09:51:51','C',NULL,NULL),(32,'angela_prod',1,1,'2016-08-11 09:53:47','C',NULL,NULL),(33,'angela_prod_cat',1,1,'2016-08-11 09:53:47','C',NULL,NULL),(34,'angela_aboutus',1,1,'2016-08-11 09:53:47','C',NULL,NULL),(35,'angela_contactus',1,1,'2016-08-11 09:53:47','C',NULL,NULL),(36,'angela_genset',1,1,'2016-08-11 09:53:47','C',NULL,NULL),(37,'angela_prod',1,1,'2016-08-11 09:54:14','C',NULL,NULL),(38,'angela_prod_cat',1,1,'2016-08-11 09:54:14','C',NULL,NULL),(39,'angela_aboutus',1,1,'2016-08-11 09:54:15','C',NULL,NULL),(40,'angela_contactus',1,1,'2016-08-11 09:54:15','C',NULL,NULL),(41,'angela_genset',1,1,'2016-08-11 09:54:15','C',NULL,NULL),(42,'angela_prod',1,1,'2016-08-11 09:54:33','C',NULL,NULL),(43,'angela_prod_cat',1,1,'2016-08-11 09:54:33','C',NULL,NULL),(44,'angela_aboutus',1,1,'2016-08-11 09:54:33','C',NULL,NULL),(45,'angela_contactus',1,1,'2016-08-11 09:54:33','C',NULL,NULL),(46,'angela_genset',1,1,'2016-08-11 09:54:33','C',NULL,NULL),(47,'angela_prod',1,1,'2016-08-11 09:54:59','C',NULL,NULL),(48,'angela_prod_cat',1,1,'2016-08-11 09:54:59','C',NULL,NULL),(49,'angela_aboutus',1,1,'2016-08-11 09:54:59','C',NULL,NULL),(50,'angela_contactus',1,1,'2016-08-11 09:54:59','C',NULL,NULL),(51,'angela_genset',1,1,'2016-08-11 09:54:59','C',NULL,NULL),(52,'angela_prod',1,1,'2016-08-11 09:56:10','C',NULL,NULL),(53,'angela_prod_cat',1,1,'2016-08-11 09:56:10','C',NULL,NULL),(54,'angela_aboutus',1,1,'2016-08-11 09:56:10','C',NULL,NULL),(55,'angela_contactus',1,1,'2016-08-11 09:56:10','C',NULL,NULL),(56,'angela_genset',1,1,'2016-08-11 09:56:10','C',NULL,NULL),(57,'angela_prod',1,1,'2016-08-11 10:16:15','C',NULL,NULL),(58,'angela_prod_cat',1,1,'2016-08-11 10:16:15','C',NULL,NULL),(59,'angela_aboutus',1,1,'2016-08-11 10:16:15','C',NULL,NULL),(60,'angela_contactus',1,1,'2016-08-11 10:16:15','C',NULL,NULL),(61,'angela_genset',1,1,'2016-08-11 10:16:15','C',NULL,NULL),(62,'angela_prod',1,1,'2016-08-11 10:16:16','C',NULL,NULL),(63,'angela_prod_cat',1,1,'2016-08-11 10:16:16','C',NULL,NULL),(64,'angela_aboutus',1,1,'2016-08-11 10:16:16','C',NULL,NULL),(65,'angela_contactus',1,1,'2016-08-11 10:16:16','C',NULL,NULL),(66,'angela_genset',1,1,'2016-08-11 10:16:16','C',NULL,NULL),(67,'angela_prod',1,1,'2016-08-11 10:16:36','C',NULL,NULL),(68,'angela_prod_cat',1,1,'2016-08-11 10:16:37','C',NULL,NULL),(69,'angela_aboutus',1,1,'2016-08-11 10:16:37','C',NULL,NULL),(70,'angela_contactus',1,1,'2016-08-11 10:16:37','C',NULL,NULL),(71,'angela_genset',1,1,'2016-08-11 10:16:37','C',NULL,NULL),(72,'angela_prod',1,1,'2016-08-11 10:17:00','C',NULL,NULL),(73,'angela_prod_cat',1,1,'2016-08-11 10:17:00','C',NULL,NULL),(74,'angela_aboutus',1,1,'2016-08-11 10:17:00','C',NULL,NULL),(75,'angela_contactus',1,1,'2016-08-11 10:17:00','C',NULL,NULL),(76,'angela_genset',1,1,'2016-08-11 10:17:00','C',NULL,NULL),(77,'angela_prod',1,1,'2016-08-11 10:17:50','C',NULL,NULL),(78,'angela_prod_cat',1,1,'2016-08-11 10:17:50','C',NULL,NULL),(79,'angela_aboutus',1,1,'2016-08-11 10:17:50','C',NULL,NULL),(80,'angela_contactus',1,1,'2016-08-11 10:17:50','C',NULL,NULL),(81,'angela_genset',1,1,'2016-08-11 10:17:50','C',NULL,NULL),(82,'angela_prod',1,1,'2016-08-11 10:18:10','C',NULL,NULL),(83,'angela_prod_cat',1,1,'2016-08-11 10:18:10','C',NULL,NULL),(84,'angela_aboutus',1,1,'2016-08-11 10:18:10','C',NULL,NULL),(85,'angela_contactus',1,1,'2016-08-11 10:18:10','C',NULL,NULL),(86,'angela_genset',1,1,'2016-08-11 10:18:10','C',NULL,NULL),(87,'angela_prod',1,1,'2016-08-11 10:23:52','C',NULL,NULL),(88,'angela_prod_cat',1,1,'2016-08-11 10:23:52','C',NULL,NULL),(89,'angela_aboutus',1,1,'2016-08-11 10:23:52','C',NULL,NULL),(90,'angela_contactus',1,1,'2016-08-11 10:23:52','C',NULL,NULL),(91,'angela_genset',1,1,'2016-08-11 10:23:52','C',NULL,NULL),(92,'angela_prod',1,1,'2016-08-11 10:24:07','C',NULL,NULL),(93,'angela_prod_cat',1,1,'2016-08-11 10:24:07','C',NULL,NULL),(94,'angela_aboutus',1,1,'2016-08-11 10:24:07','C',NULL,NULL),(95,'angela_contactus',1,1,'2016-08-11 10:24:07','C',NULL,NULL),(96,'angela_genset',1,1,'2016-08-11 10:24:07','C',NULL,NULL),(97,'angela_prod',1,1,'2016-08-11 10:29:18','C',NULL,NULL),(98,'angela_prod_cat',1,1,'2016-08-11 10:29:18','C',NULL,NULL),(99,'angela_aboutus',1,1,'2016-08-11 10:29:18','C',NULL,NULL),(100,'angela_contactus',1,1,'2016-08-11 10:29:18','C',NULL,NULL),(101,'angela_genset',1,1,'2016-08-11 10:29:18','C',NULL,NULL),(102,'angela_prod',1,1,'2016-08-11 10:29:29','C',NULL,NULL),(103,'angela_prod_cat',1,1,'2016-08-11 10:29:29','C',NULL,NULL),(104,'angela_aboutus',1,1,'2016-08-11 10:29:29','C',NULL,NULL),(105,'angela_contactus',1,1,'2016-08-11 10:29:29','C',NULL,NULL),(106,'angela_genset',1,1,'2016-08-11 10:29:29','C',NULL,NULL),(107,'angela_prod',1,1,'2016-08-11 10:50:04','C',NULL,NULL),(108,'angela_prod_cat',1,1,'2016-08-11 10:50:04','C',NULL,NULL),(109,'angela_aboutus',1,1,'2016-08-11 10:50:05','C',NULL,NULL),(110,'angela_contactus',1,1,'2016-08-11 10:50:05','C',NULL,NULL),(111,'angela_genset',1,1,'2016-08-11 10:50:05','C',NULL,NULL),(112,'angela_prod',1,1,'2016-08-11 10:50:07','C',NULL,NULL),(113,'angela_prod_cat',1,1,'2016-08-11 10:50:07','C',NULL,NULL),(114,'angela_aboutus',1,1,'2016-08-11 10:50:07','C',NULL,NULL),(115,'angela_contactus',1,1,'2016-08-11 10:50:07','C',NULL,NULL),(116,'angela_genset',1,1,'2016-08-11 10:50:08','C',NULL,NULL),(117,'angela_prod',1,1,'2016-08-11 10:50:11','C',NULL,NULL),(118,'angela_prod_cat',1,1,'2016-08-11 10:50:11','C',NULL,NULL),(119,'angela_aboutus',1,1,'2016-08-11 10:50:11','C',NULL,NULL),(120,'angela_contactus',1,1,'2016-08-11 10:50:11','C',NULL,NULL),(121,'angela_genset',1,1,'2016-08-11 10:50:11','C',NULL,NULL),(122,'angela_prod',1,1,'2016-08-11 10:50:24','C',NULL,NULL),(123,'angela_prod_cat',1,1,'2016-08-11 10:50:24','C',NULL,NULL),(124,'angela_aboutus',1,1,'2016-08-11 10:50:24','C',NULL,NULL),(125,'angela_contactus',1,1,'2016-08-11 10:50:24','C',NULL,NULL),(126,'angela_genset',1,1,'2016-08-11 10:50:24','C',NULL,NULL),(127,'angela_prod',1,1,'2016-08-11 10:50:41','C',NULL,NULL),(128,'angela_prod_cat',1,1,'2016-08-11 10:50:41','C',NULL,NULL),(129,'angela_aboutus',1,1,'2016-08-11 10:50:41','C',NULL,NULL),(130,'angela_contactus',1,1,'2016-08-11 10:50:41','C',NULL,NULL),(131,'angela_genset',1,1,'2016-08-11 10:50:41','C',NULL,NULL),(132,'angela_prod',1,1,'2016-08-11 10:51:57','C',NULL,NULL),(133,'angela_prod_cat',1,1,'2016-08-11 10:51:57','C',NULL,NULL),(134,'angela_aboutus',1,1,'2016-08-11 10:51:57','C',NULL,NULL),(135,'angela_contactus',1,1,'2016-08-11 10:51:57','C',NULL,NULL),(136,'angela_genset',1,1,'2016-08-11 10:51:57','C',NULL,NULL),(137,'angela_prod',1,1,'2016-08-11 10:52:54','C',NULL,NULL),(138,'angela_prod_cat',1,1,'2016-08-11 10:52:54','C',NULL,NULL),(139,'angela_aboutus',1,1,'2016-08-11 10:52:54','C',NULL,NULL),(140,'angela_contactus',1,1,'2016-08-11 10:52:55','C',NULL,NULL),(141,'angela_genset',1,1,'2016-08-11 10:52:55','C',NULL,NULL),(142,'angela_prod',1,1,'2016-08-11 11:22:04','C',NULL,NULL),(143,'angela_prod_cat',1,1,'2016-08-11 11:22:04','C',NULL,NULL),(144,'angela_aboutus',1,1,'2016-08-11 11:22:04','C',NULL,NULL),(145,'angela_contactus',1,1,'2016-08-11 11:22:04','C',NULL,NULL),(146,'angela_genset',1,1,'2016-08-11 11:22:04','C',NULL,NULL),(147,'angela_prod',1,1,'2016-08-11 11:22:16','C',NULL,NULL),(148,'angela_prod_cat',1,1,'2016-08-11 11:22:16','C',NULL,NULL),(149,'angela_aboutus',1,1,'2016-08-11 11:22:16','C',NULL,NULL),(150,'angela_contactus',1,1,'2016-08-11 11:22:16','C',NULL,NULL),(151,'angela_genset',1,1,'2016-08-11 11:22:16','C',NULL,NULL),(152,'tmp1_prod',1,1,'2016-08-11 15:43:06','C',NULL,NULL),(153,'tmp1_prod_cat',1,1,'2016-08-11 15:43:06','C',NULL,NULL),(154,'tmp1_aboutus',1,1,'2016-08-11 15:43:06','C',NULL,NULL),(155,'tmp1_contactus',1,1,'2016-08-11 15:43:06','C',NULL,NULL),(156,'tmp1_genset',1,1,'2016-08-11 15:43:06','C',NULL,NULL);

/*Table structure for table `template` */

DROP TABLE IF EXISTS `template`;

CREATE TABLE `template` (
  `TemplateID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateTitle` varchar(100) DEFAULT NULL,
  `TemplateImage` varchar(100) DEFAULT NULL,
  `TemplateSubCategoryID` int(11) DEFAULT NULL,
  `TemplateProjectName` varchar(50) DEFAULT NULL,
  `TemplateJson` longtext,
  `TemplateType` varchar(10) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`TemplateID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `template` */

insert  into `template`(`TemplateID`,`TemplateTitle`,`TemplateImage`,`TemplateSubCategoryID`,`TemplateProjectName`,`TemplateJson`,`TemplateType`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Company Profile Pink','asd.jpg',2,'template','satu','CC1',1,'2016-07-20 16:22:41','C',NULL,NULL),(2,'Monochrome','asd.jpg',3,NULL,'dua','CC1',1,'2016-07-20 16:23:15','C',NULL,NULL),(3,'Casual Much','asd.jpg',1,NULL,'tiga','CC1',1,'2016-07-20 16:23:49','C',NULL,NULL),(4,'Colourful Dress','asd.jpg',3,NULL,'empat','CC1',1,'2016-07-20 16:24:12','C',NULL,NULL);

/*Table structure for table `templatecategory` */

DROP TABLE IF EXISTS `templatecategory`;

CREATE TABLE `templatecategory` (
  `TemplateCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateCategoryName` varchar(100) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`TemplateCategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `templatecategory` */

insert  into `templatecategory`(`TemplateCategoryID`,`TemplateCategoryName`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Company Profile',1,'2016-07-19 21:10:32','C',NULL,NULL),(2,'E-Commerce',1,'2016-07-19 21:10:50','C',NULL,NULL),(3,'Portfolio',1,'2016-07-19 21:12:23','C',NULL,NULL);

/*Table structure for table `templaterating` */

DROP TABLE IF EXISTS `templaterating`;

CREATE TABLE `templaterating` (
  `TemplateRatingID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL COMMENT '1-5',
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`TemplateRatingID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `templaterating` */

insert  into `templaterating`(`TemplateRatingID`,`TemplateID`,`UserID`,`Rating`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,1,2,3,2,'2016-07-20 21:08:41','C',NULL,NULL),(2,2,2,4,2,'2016-07-20 21:08:59','C',NULL,NULL),(3,2,3,5,3,'2016-07-20 21:09:35','C',NULL,NULL),(4,2,4,1,4,'2016-07-20 21:09:49','C',NULL,NULL),(5,1,1,5,1,'2016-08-05 20:43:03','C',NULL,NULL);

/*Table structure for table `templatesubcategory` */

DROP TABLE IF EXISTS `templatesubcategory`;

CREATE TABLE `templatesubcategory` (
  `TemplateSubCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateSubCategoryName` varchar(100) DEFAULT NULL,
  `TemplateCategoryID` int(11) DEFAULT NULL,
  `CreatedUser` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `AuditedActivity` char(1) DEFAULT NULL,
  `AuditedUser` int(11) DEFAULT NULL,
  `AuditedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`TemplateSubCategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `templatesubcategory` */

insert  into `templatesubcategory`(`TemplateSubCategoryID`,`TemplateSubCategoryName`,`TemplateCategoryID`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Casual',1,1,'2016-07-19 21:14:34','C',NULL,NULL),(2,'Sporty',2,1,'2016-07-19 21:15:04','C',NULL,NULL),(3,'Feminim',2,1,'2016-07-19 21:15:14','C',NULL,NULL),(4,'Fresh',2,1,'2016-07-19 21:15:43','C',NULL,NULL),(5,'Engineer',3,1,'2016-07-19 21:16:09','C',NULL,NULL);

/*Table structure for table `tmp1_aboutus` */

DROP TABLE IF EXISTS `tmp1_aboutus`;

CREATE TABLE `tmp1_aboutus` (
  `aboutus_id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutus_title` varchar(50) DEFAULT NULL,
  `aboutus_desc` longtext,
  `aboutus_date` datetime DEFAULT NULL,
  `aboutus_user_input` int(11) DEFAULT NULL,
  `aboutus_date_edit` datetime DEFAULT NULL,
  `aboutus_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`aboutus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tmp1_aboutus` */

insert  into `tmp1_aboutus`(`aboutus_id`,`aboutus_title`,`aboutus_desc`,`aboutus_date`,`aboutus_user_input`,`aboutus_date_edit`,`aboutus_user_edit`) values (1,'About Me','LALALALAL','2016-08-12 14:00:16',1,NULL,NULL);

/*Table structure for table `tmp1_contactus` */

DROP TABLE IF EXISTS `tmp1_contactus`;

CREATE TABLE `tmp1_contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `contactus_name` varchar(100) DEFAULT NULL,
  `contactus_email` varchar(100) DEFAULT NULL,
  `contactus_message` varchar(2000) DEFAULT NULL,
  `contactus_isread` int(11) DEFAULT NULL,
  `contactus_date` datetime DEFAULT NULL,
  PRIMARY KEY (`contactus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tmp1_contactus` */

/*Table structure for table `tmp1_genset` */

DROP TABLE IF EXISTS `tmp1_genset`;

CREATE TABLE `tmp1_genset` (
  `genset_id` int(11) NOT NULL AUTO_INCREMENT,
  `genset_type` varchar(100) DEFAULT NULL,
  `genset_content` varchar(100) DEFAULT NULL,
  `genset_date` datetime DEFAULT NULL,
  `genset_user_input` int(11) DEFAULT NULL,
  `genset_date_edit` datetime DEFAULT NULL,
  `genset_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`genset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tmp1_genset` */

/*Table structure for table `tmp1_prod` */

DROP TABLE IF EXISTS `tmp1_prod`;

CREATE TABLE `tmp1_prod` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) DEFAULT NULL,
  `prod_desc` longtext,
  `prod_image` varchar(100) DEFAULT NULL,
  `prod_cat_id` int(11) DEFAULT NULL,
  `prod_date` datetime DEFAULT NULL,
  `prod_user_input` int(11) DEFAULT NULL,
  `prod_date_edit` datetime DEFAULT NULL,
  `prod_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tmp1_prod` */

/*Table structure for table `tmp1_prod_cat` */

DROP TABLE IF EXISTS `tmp1_prod_cat`;

CREATE TABLE `tmp1_prod_cat` (
  `prod_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_cat_name` varchar(50) DEFAULT NULL,
  `prod_cat_date` datetime DEFAULT NULL,
  `prod_cat_user_input` int(11) DEFAULT NULL,
  `prod_cat_date_edit` datetime DEFAULT NULL,
  `prod_cat_user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tmp1_prod_cat` */

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`UserID`,`UserFullName`,`UserEmail`,`UserPassword`,`isAdmin`,`UserPhoto`,`Gender`,`CountryID`,`FacebookID`,`GooglePlusID`,`CreatedUser`,`CreatedDate`,`AuditedActivity`,`AuditedUser`,`AuditedTime`) values (1,'Angela Muliawan','amuliawan93@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',1,'angel.jpg','F',98,'asdafsadf','asdafsadf',-1,'2016-07-19 20:05:21','E',1,'2016-07-26 22:22:22'),(2,'Brian Alexandro','alexandrobrian15@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,'asd.jpg','M',98,NULL,NULL,-1,'2016-07-20 21:03:29','C',NULL,NULL),(3,'Nicholas Gani','silvranz@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,'asd.jpg','M',98,NULL,NULL,-1,'2016-07-20 21:03:57','C',NULL,NULL),(4,'Lidya Fransiska','lidyafransiska61@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,'asd.jpg','F',98,NULL,NULL,-1,'2016-07-20 21:04:44','C',NULL,NULL),(5,'Angela Lagi','mythelana@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,'asd.jpg','F',98,NULL,NULL,-1,'2016-07-20 21:05:56','C',NULL,NULL),(6,'Zola','huangzola@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,NULL,'M',227,NULL,NULL,-1,'2016-07-22 08:21:25','C',NULL,NULL),(7,'Hena Wiliaana','hena.wiliana@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,NULL,'F',96,NULL,NULL,-1,'2016-08-03 14:31:58','C',NULL,NULL),(8,'Silver Destiny','silver@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,NULL,'M',1,NULL,NULL,-1,'2016-08-15 21:01:03','C',NULL,NULL),(9,'lalala','lalala','d033e22ae348aeb5660fc2140aec35850c4da997',0,NULL,'M',1,NULL,NULL,-1,'2016-08-15 21:03:35','C',NULL,NULL),(10,'asdf','asdfa','d033e22ae348aeb5660fc2140aec35850c4da997',0,NULL,'M',1,NULL,NULL,-1,'2016-08-15 21:05:37','C',NULL,NULL);

/* Procedure structure for procedure `ChangePassword` */

/*!50003 DROP PROCEDURE IF EXISTS  `ChangePassword` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ChangePassword`(
	IN ParamOldPassword varchar(200),
	in ParamNewPassword varchar(200),
	in ParamUserID int
)
BEGIN
	IF EXISTS (SELECT * FROM `user` WHERE `UserPassword`=ParamOldPassword AND UserID=ParamUserID) THEN
		UPDATE `user`
		SET `UserPassword` = ParamNewPassword,
			AuditedActivity = 'U',
			AuditedUser = ParamUserID,
			AuditedTime = CURRENT_TIMESTAMP()
		WHERE `UserPassword`= ParamOldPassword AND UserID = ParamUserID;
		SELECT ParamUserID AS result;
	ELSE 
		SELECT -1 AS result;
	END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ExecSpTemplate` */

/*!50003 DROP PROCEDURE IF EXISTS  `ExecSpTemplate` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ExecSpTemplate`(
	IN ParamStoreProjectName VARCHAR(50),
	in ParamTemplateID int,
	IN ParamStoreID INT,
	in ParamUserID int,
	in ParamBrowser varchar(100),
	in ParamBrowserVersion varchar(100),
	in ParamIPAddress varchar(100),
	in ParamDevice varchar(100),
	in ParamOS varchar(50)
)
BEGIN
	SET @SPName = (select SPName 
			from sp 
			join mappingsp msp on sp.`SPID`=msp.SPID  and msp.AuditedActivity <> 'D'
			where msp.TemplateID=ParamTemplateID and sp.`AuditedActivity`<>'D'
			limit 1);
	SET @CallSP=CONCAT('CALL ', @SPName, '(\'', ParamStoreProjectName, '\',', ParamUserID, ',', ParamStoreID, ')');
	-- select @CallSP;
	prepare stmt from @CallSP;
	execute stmt;
	DEALLOCATE PREPARE stmt;
	
	-- Log Generate
	insert into generateweblog
	(StoreID, TemplateID, SPName, UserID, GenerateDate, Browser, BrowserVersion, IPAddress, Device, OS,
	CreatedUser, CreatedDate, AuditedActivity)
	values
	(ParamStoreID, ParamTemplateID, @SPName, ParamUserID, CUrrent_timestamp(), ParamBrowser,
	ParamBrowserVersion, ParamIPAddress, ParamDevice, ParamOS, ParamUserID, CURRENT_TIMESTAMP(), 'C');
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GenerateTableCompanyProfile` */

/*!50003 DROP PROCEDURE IF EXISTS  `GenerateTableCompanyProfile` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GenerateTableCompanyProfile`(
	in ParamStoreProjectName varchar(50),
	in ParamUserID int,
	in ParamStoreID int
)
BEGIN
	SET @Domain = LOWER(ParamStoreProjectName);
	
	SET @TableProduct = CONCAT(@Domain, '_prod');
	INSERT INTO storetable
	(StoreTableName, StoreID, CreatedUser, CreatedDate, AuditedActivity)
	VALUES
	(@TableProduct, ParamStoreID, ParamUserID, CURRENT_TIMESTAMP(), 'C');	
	
	SET @TableProductCategory = CONCAT(@Domain, '_prod_cat');
	INSERT INTO storetable
	(StoreTableName, StoreID, CreatedUser, CreatedDate, AuditedActivity)
	VALUES
	(@TableProductCategory, ParamStoreID, ParamUserID, CURRENT_TIMESTAMP(), 'C');
	
	SET @TableAboutUs = CONCAT(@Domain, '_aboutus');
	INSERT INTO storetable
	(StoreTableName, StoreID, CreatedUser, CreatedDate, AuditedActivity)
	VALUES
	(@TableAboutUs, ParamStoreID, ParamUserID, CURRENT_TIMESTAMP(), 'C');
	SET @TableContactUs = CONCAT(@Domain, '_contactus');
	INSERT INTO storetable
	(StoreTableName, StoreID, CreatedUser, CreatedDate, AuditedActivity)
	VALUES
	(@TableContactUs, ParamStoreID, ParamUserID, CURRENT_TIMESTAMP(), 'C');
	
	SET @TableGeneralSetting = CONCAT(@Domain, '_genset');
	INSERT INTO storetable
	(StoreTableName, StoreID, CreatedUser, CreatedDate, AuditedActivity)
	VALUES
	(@TableGeneralSetting, ParamStoreID, ParamUserID, CURRENT_TIMESTAMP(), 'C');
	
	SET @CreateTableProd = 
		concat('CREATE TABLE ', @TableProduct, 
		'( ',
		'prod_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,',
		'prod_name varchar(50), ',
		'prod_desc longtext, ',
		'prod_image varchar(100), ',
		'prod_cat_id int, ',
		'prod_date datetime, ',
		'prod_user_input int, ',
		'prod_date_edit datetime, ',
		'prod_user_edit int ',
		' )'
		);
	SET @CreateTableProdCat = 
		CONCAT('CREATE TABLE ', @TableProductCategory, 
		'( ',
		'prod_cat_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,',
		'prod_cat_name varchar(50), ',
		'prod_cat_date datetime, ',
		'prod_cat_user_input int, ',
		'prod_cat_date_edit datetime, ',
		'prod_cat_user_edit int ',
		' )'
		);
	SET @CreateTableAboutUs = 
		CONCAT('CREATE TABLE ', @TableAboutUs, 
		'( ',
		'aboutus_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,',
		'aboutus_title varchar(50), ',		
		'aboutus_desc longtext, ',
		'aboutus_date datetime, ',
		'aboutus_user_input int, ',
		'aboutus_date_edit datetime, ',
		'aboutus_user_edit int ',
		' )'
		);
	SET @CreateTableContactUs = 
		CONCAT('CREATE TABLE ', @TableContactUs, 
		'( ',
		'contactus_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,',
		'contactus_name varchar(100), ',
		'contactus_email varchar(100), ',
		'contactus_message varchar(2000), ',
		'contactus_isread int, '
		'contactus_date datetime '
		' )'
		);
	SET @CreateTableGenSet = 
		CONCAT('CREATE TABLE ', @TableGeneralSetting, 
		'( ',
		'genset_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,',
		'genset_type varchar(100), ',
		'genset_content varchar(100), ',
		'genset_date datetime, ',
		'genset_user_input int, ',
		'genset_date_edit datetime, ',
		'genset_user_edit int ',
		' )'
		);
	PREPARE stmt_prod FROM @CreateTableProd;
	PREPARE stmt_prod_cat FROM @CreateTableProdCat;
	PREPARE stmt_aboutus FROM @CreateTableAboutUs;
	PREPARE stmt_contactus FROM @CreateTableContactUs;
	PREPARE stmt_genset FROM @CreateTableGenSet;
	EXECUTE stmt_prod;
	EXECUTE stmt_prod_cat;
	EXECUTE stmt_aboutus;
	EXECUTE stmt_contactus;
	EXECUTE stmt_genset;
	DEALLOCATE PREPARE stmt_prod;
	DEALLOCATE PREPARE stmt_prod_cat;
	DEALLOCATE PREPARE stmt_aboutus;
	DEALLOCATE PREPARE stmt_contactus;
	DEALLOCATE PREPARE stmt_genset;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetCountry` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetCountry` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetCountry`()
BEGIN
	SELECT CountryID, CountryName
	From country
	where AuditedActivity <> 'D';
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetMyWebsite` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetMyWebsite` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetMyWebsite`(
	in ParamUserID int,
	IN ParamLimitPage INT, 
	IN ParamOffsetPage INT
)
BEGIN
	SELECT s.StoreID, s.StoreName, s.StoreDomain, s.StoreImage,
	s.CreatedDate
	FROM store s
	WHERE s.AuditedActivity <> 'D' AND 
	s.UserID = ParamUserID
	ORDER BY 
	CreatedDate DESC
	LIMIT ParamLimitPage
	OFFSET ParamOffsetPage;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetTemplateByCategory` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetTemplateByCategory` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTemplateByCategory`(
	in ParamSubCategoryID varchar(100),
	in ParamUserID int,
	in ParamSorting int,
	IN ParamLimitPage INT, 
	IN ParamOffsetPage INT
)
BEGIN
	SELECT distinct xx.*, 
	CASE WHEN s.UserID IS not NULL and tr.UserID is not null THEN 2 -- already rate for the template
		when s.UserID is not null and tr.UserID is null then 1 -- use template but haven't rate
		ELSE 0 END FlagUse
	from
	(
		SELECT t.TemplateID, TemplateTitle, TemplateImage,
		t.TemplateSubCategoryID, tsc.TemplateCategoryID,
		t.CreatedDate, 
		SUM(Rating)/COUNT(TemplateRatingID) AS TemplateRating, COUNT(TemplateRatingID) AS NumberOfUser 
		FROM template t
		LEFT JOIN templaterating tr ON t.TemplateID=tr.TemplateID AND tr.AuditedActivity<>'D'
		join templatesubcategory tsc on tsc.TemplateSubCategoryID=t.TemplateSubCategoryID
		WHERE t.AuditedActivity <> 'D' and 
		(ParamSubCategoryID is null or FIND_IN_SET(tsc.TemplateSubCategoryID, ParamSubCategoryID))
		GROUP BY t.TemplateID, TemplateTitle, TemplateImage
	) as xx
	left join store s on s.TemplateID=xx.TemplateID and s.UserID = ParamUserID and s.AuditedActivity<>'D'
	left join templaterating tr ON s.TemplateID=tr.TemplateID AND tr.UserID = ParamUserID AND tr.AuditedActivity<>'D'
	ORDER BY 
	(CASE WHEN ParamSorting=0 THEN TemplateTitle END) ASC,
	(CASE WHEN ParamSorting=1 THEN UNIX_TIMESTAMP(xx.CreatedDate) END) DESC,
	(CASE WHEN ParamSorting=2 THEN TemplateRating END) DESC
	LIMIT ParamLimitPage
	OFFSET ParamOffsetPage;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetTemplateByTemplateID` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetTemplateByTemplateID` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTemplateByTemplateID`(
	in ParamTemplateID int
)
BEGIN
	select TemplateID, TemplateJson, TemplateProjectName, TemplateImage
	from template
	where AuditedActivity<>'D' and TemplateID=ParamTemplateID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetTemplateCategoryMenu` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetTemplateCategoryMenu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTemplateCategoryMenu`()
BEGIN
	Select * from
	(
		SELECT 
		-1 'TemplateID',
		TemplateCategoryName 'TemplateName',
		TemplateCategoryID as ParentCategoryID,
		1 as Parent 
		from templatecategory
		where AuditedActivity <> 'D'
		union
		select 
		TemplateSubCategoryID 'TemplateID',
		TemplateSubCategoryName 'TemplateName',
		TemplateCategoryID as ParentCategoryID,
		0 as Parent
		from templatesubcategory
		where AuditedActivity <> 'D' and TemplateCategoryID in (SELECT TemplateCategoryID from templatecategory)
	) as tmpl
	order by ParentCategoryID, Parent DESC, TemplateID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetTemplatePreview` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetTemplatePreview` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTemplatePreview`(
	in ParamTemplateID int
)
BEGIN
	select TemplateID, TemplateJson, TemplateProjectName
	from template
	where TemplateID = ParamTemplateID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `GetUserProfile` */

/*!50003 DROP PROCEDURE IF EXISTS  `GetUserProfile` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserProfile`(
	in ParamUserID int
)
BEGIN
	select UserID, UserFullName, UserEmail,
	UserPhoto, Gender, CountryID 
	from `user`
	where AuditedActivity <> 'D' and UserID=ParamUserID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `InsertStore` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertStore` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertStore`(
	in ParamStoreName varchar(50),
	in ParamStoreDomain varchar(25),
	IN ParamStoreImage VARCHAR(100),
	in ParamStoreProjectName varchar(50),
	in ParamUserID int,
	in ParamTemplateID int,
	in ParamStoreJson longtext 
)
BEGIN
	insert into store
	(StoreName, StoreDomain, StoreImage, StoreProjectName, UserID, TemplateID, StoreJson, CreatedUser, CreatedDate, AuditedActivity)
	values
	(ParamStoreName, ParamStoreDomain, ParamStoreImage, ParamStoreProjectName, ParamUserID, ParamTemplateID, ParamStoreJson, ParamUserID, CURRENT_TIMESTAMP(), 'C');
	SELECT LAST_INSERT_ID() as StoreID;
   END */$$
DELIMITER ;

/* Procedure structure for procedure `InsertTemplateRating` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertTemplateRating` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertTemplateRating`(
	in ParamRating int,
	in ParamUserID int,
	in ParamTemplateID int
)
BEGIN
	insert into templaterating
	(TemplateID, UserID, Rating, CreatedUser, CreatedDate, AuditedActivity)
	values
	(ParamTemplateID, ParamUserID, ParamRating, ParamUserID, current_timestamp(), 'C');
    END */$$
DELIMITER ;

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
		(UserFullName, UserEmail, UserPassword, isAdmin, Gender, CountryID, CreatedUser, CreatedDate, 
		AuditedActivity)
		values
		(
		ParamUserFullName,
		ParamUserEmail,
		ParamUserPassword,
		0,
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

/* Procedure structure for procedure `SD_GetAboutUs` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_GetAboutUs` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_GetAboutUs`(
	IN ParamStoreID INT
)
BEGIN
	SET @TemplateType = (SELECT TemplateType 
			FROM template 
			WHERE TemplateID = (SELECT TemplateID FROM store WHERE StoreID = ParamStoreID AND AuditedActivity<>'D')
			AND AuditedActivity <> 'D'
			LIMIT 1);
	SET @StoreDomain = (SELECT LOWER(StoreProjectName)
			FROM store 
			WHERE StoreID = ParamStoreID AND AuditedActivity <> 'D'
			LIMIT 1);
	IF @TemplateType = 'CC1'
	THEN
		SET @query = CONCAT('SELECT aboutus_id, aboutus_title, 
				aboutus_desc
				FROM ', @StoreDomain, '_aboutus',
				' order by aboutus_title desc');
		PREPARE stmt FROM @query;
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	ELSEIF @TemplateType = 'CC2'
	THEN 
		SELECT 'Undefined' AS 'Undefined';
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SD_GetMenu` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_GetMenu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_GetMenu`(
	in ParamStoreID int
)
BEGIN
	SET @TemplateType = (SELECT TemplateType 
			from template 
			where TemplateID = (SELECT TemplateID from store where StoreID = ParamStoreID and AuditedActivity<>'D')
			and AuditedActivity <> 'D'
			limit 1);
	if @TemplateType = 'CC1'
	then
		SELECT 'General Setting' AS 'MenuName'
		UNION 
		select 'Product' AS 'MenuName'
		UNION
		SELECT 'About Us' as 'MenuName'
		union
		select 'Contact Us' AS 'MenuName';
	elseif @TemplateType = 'CC2'
	then 
		SELECT 'Undefined' AS 'MenuName';
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SD_GetProducts` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_GetProducts` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_GetProducts`(
	IN ParamStoreID INT
)
BEGIN
	SET @TemplateType = (SELECT TemplateType 
			FROM template 
			WHERE TemplateID = (SELECT TemplateID FROM store WHERE StoreID = ParamStoreID AND AuditedActivity<>'D')
			AND AuditedActivity <> 'D'
			LIMIT 1);
	SET @StoreDomain = (SELECT LOWER(StoreProjectName)
			FROM store 
			WHERE StoreID = ParamStoreID AND AuditedActivity <> 'D'
			LIMIT 1);
	IF @TemplateType = 'CC1'
	THEN
		SET @query = CONCAT('SELECT prod_id, prod_name, 
				prod_desc, prod_image, p.prod_cat_id, pc.prod_cat_name
				FROM ', @StoreDomain, '_prod p',
				' join ', @StoreDomain, '_prod_cat pc on pc.prod_cat_id=p.prod_cat_id',
				' order by prod_date desc');
		PREPARE stmt FROM @query;
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	ELSEIF @TemplateType = 'CC2'
	THEN 
		SELECT 'Undefined' AS 'Undefined';
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SD_GetStoreContactUs` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_GetStoreContactUs` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_GetStoreContactUs`(
	in ParamStoreID int
)
BEGIN
	SET @StoreDomain = (SELECT LOWER(StoreProjectName)
			from store 
			where StoreID = ParamStoreID and AuditedActivity <> 'D'
			limit 1);
	SET @query = CONCAT('SELECT contactus_id, contactus_name, 
				contactus_email, contactus_message, contactus_isread,
				DATE_FORMAT(contactus_date,\'%d %b %Y %h:%i %p\') AS contactus_date
				FROM ', @StoreDomain, '_contactus
				order by contactus_date desc');
	PREPARE stmt FROM @query;
	EXECUTE stmt;
	DEALLOCATE PREPARE stmt;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SD_InsertAboutUs` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_InsertAboutUs` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_InsertAboutUs`(
	in p_about_us_title varchar(50),
	in p_about_us_desc longtext,
	in ParamUserID int,
	in ParamStoreID int
)
BEGIN
	SET @TemplateType = (SELECT TemplateType 
			FROM template 
			WHERE TemplateID = (SELECT TemplateID FROM store WHERE StoreID = ParamStoreID AND AuditedActivity<>'D')
			AND AuditedActivity <> 'D'
			LIMIT 1);
	SET @StoreDomain = (SELECT LOWER(StoreProjectName)
			FROM store 
			WHERE StoreID = ParamStoreID AND AuditedActivity <> 'D'
			LIMIT 1);
	IF @TemplateType = 'CC1'
	THEN
		SET @query = CONCAT('INSERT INTO ', @StoreDomain, '_aboutus',
				' (aboutus_title, aboutus_desc, aboutus_date, aboutus_user_input) VALUES(',
				'\'', p_about_us_title, '\'', ', ','\'',  p_about_us_desc, '\'', 
				', ','\'',  CURRENT_TIMESTAMP(),'\'',  ', ','\'',  ParamUserID,'\'',  ')');
		PREPARE stmt FROM @query;
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	ELSEIF @TemplateType = 'CC2'
	THEN 
		SELECT 'Undefined' AS 'Undefined';
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SD_InsertProduct` */

/*!50003 DROP PROCEDURE IF EXISTS  `SD_InsertProduct` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SD_InsertProduct`(
	IN prod_name varchar(50),
	in prod_desc longtext,
	in prod_image varchar(100),
	in prod_cat_id int,
	in prod_cat_name varchar(50),
	IN ParamUserID INT,
	IN ParamStoreID INT
)
BEGIN
	SET @TemplateType = (SELECT TemplateType 
			FROM template 
			WHERE TemplateID = (SELECT TemplateID FROM store WHERE StoreID = ParamStoreID AND AuditedActivity<>'D')
			AND AuditedActivity <> 'D'
			LIMIT 1);
	SET @StoreDomain = (SELECT LOWER(StoreProjectName)
			FROM store 
			WHERE StoreID = ParamStoreID AND AuditedActivity <> 'D'
			LIMIT 1);
	IF @TemplateType = 'CC1'
	THEN
		-- if prod_cat_id is null
		-- then
		
		SET @query = CONCAT('INSERT INTO ', @StoreDomain, '_aboutus',
				' (aboutus_title, aboutus_desc, aboutus_date, aboutus_user_input) VALUES(',
				'\'', p_about_us_title, '\'', ', ','\'',  p_about_us_desc, '\'', 
				', ','\'',  CURRENT_TIMESTAMP(),'\'',  ', ','\'',  ParamUserID,'\'',  ')');
		PREPARE stmt FROM @query;
		EXECUTE stmt;
		DEALLOCATE PREPARE stmt;
	ELSEIF @TemplateType = 'CC2'
	THEN 
		SELECT 'Undefined' AS 'Undefined';
	END IF;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `UpdateStore` */

/*!50003 DROP PROCEDURE IF EXISTS  `UpdateStore` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateStore`(
	in ParamStoreID int,
	in ParamStoreImage varchar(100),
	in ParamStoreJson longtext,
	in ParamUserID int
)
BEGIN
	Update store
	set StoreImage = ParamStoreImage,
	StoreJson = ParamStoreJson,
	AuditedActivity = 'E',
	AuditedUser = ParamUserID,
	AuditedTime = CURRENT_TIMESTAMP()
	WHERE StoreID = ParamStoreID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `UpdateUserPhoto` */

/*!50003 DROP PROCEDURE IF EXISTS  `UpdateUserPhoto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateUserPhoto`(
	IN ParamUserID INT,
	in ParamUserPhoto varchar(100)
)
BEGIN	
	UPDATE `user`
	SET UserPhoto = ParamUserPhoto,
	AuditedActivity = 'E',
	AuditedUser = ParamUserID,
	AuditedTime = CURRENT_TIMESTAMP()
	WHERE UserID = ParamUserID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `UpdateUserProfile` */

/*!50003 DROP PROCEDURE IF EXISTS  `UpdateUserProfile` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateUserProfile`(
	in ParamUserID int,
	in ParamUserFullName varchar(100),
	in ParamGender char(1),
	in ParamCountryID int
)
BEGIN
	update `user`
	set UserFullName = ParamUserFullName,
	Gender = ParamGender,
	CountryID = ParamCountryID,
	AuditedActivity = 'E',
	AuditedUser = ParamUserID,
	AuditedTime = Current_timestamp()
	where UserID = ParamUserID;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ValidateStoreDomain` */

/*!50003 DROP PROCEDURE IF EXISTS  `ValidateStoreDomain` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidateStoreDomain`(
	in ParamStoreDomainName varchar(26)
)
BEGIN
	if exists (select StoreDomain from store where StoreDomain = ParamStoreDomainName)
	then
		select -1 as 'Result';
	else 
		select 1 as 'Result';
	end if;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
