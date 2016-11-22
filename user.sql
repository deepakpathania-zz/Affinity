-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: userprofile
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_blood_type` varchar(255) DEFAULT NULL,
  `user_organ` varchar(255) DEFAULT NULL,
  `user_organ_condition` varchar(255) DEFAULT NULL,
  `user_waiting_time` varchar(255) DEFAULT NULL,
  `user_blood_type_donor` varchar(255) DEFAULT NULL,
  `user_waiting_time_donor` varchar(255) DEFAULT NULL,
  `user_organ_donor` varchar(255) DEFAULT NULL,
  `user_organ_condition_donor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB AUTO_INCREMENT=1500 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1486,'userone@gmail.com','userone','User','one','default.jpg','I live in Delhi and need a healthy kidney.','userone',NULL,NULL,NULL,'1995-11-23',NULL,NULL,'',NULL,'A +','Kidney','Healthy',NULL,NULL,NULL,NULL,NULL),(1487,'userfour@gmail.com','userfour','USER','four','default.jpg','I am ooking for kidney','userfour','','','','2016-11-04','Male',NULL,'','','A +','Kidney','Healthy',NULL,NULL,NULL,NULL,NULL),(1488,'ssda@gmail.com','newusersadds','ssda','asddsa','default.jpg','test bio','Usersad',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Kidney','Healthy','Urgent','A +',NULL,'Liver','Healthy'),(1489,'testuser@gmail.com','testuser','test','user','default.jpg','short bio','testuser',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Liver','Healthy','Under six months','A +','Urgent','Liver','Healthy'),(1490,'userfive@gmail.com','userfive','user','five','default.jpg','i need an organ','userfive',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Kidney','Renal failure','Urgent','A +','Urgent','Kidney','Healthy'),(1491,'finaluser@gmail.com','finaluser','final','user','default.jpg','final user looking for liver','finaluser',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Liver','Diabetic','Urgent','A +','Urgent','Liver','Healthy'),(1492,'deepak@gmail.com','deepak123','Deepak','Pathania','default.jpg','Looking for liver urgently. ','deepak',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Liver','Diabetic','Urgent','A +','Urgent','Kidney','Healthy'),(1493,'eehe@gmail.com','qwert','qwer','tyuo','default.jpg','short bio','usertyuo',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Kidney','Renal failure','Under a month','B -','Under six months','Kidney','Renal failure'),(1496,'v@gmail.com','videotest','video','test','default.jpg','looking for a kidney urgently','videotest',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Kidney','Diabetic','Urgent','A -','Urgent','Kidney','Healthy'),(1497,'absfinal@gmail.com','absfinal','absolutely','final','default.jpg','short description','absfinal',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Liver','Healthy','Under an year','A +','Under six months','Liver','Healthy'),(1498,'video@gmail.com','video','video','final','default.jpg','I need a healthy kidney urgently and my family member is willing to donate one in return. Take a look at details below.\r\n','videofinal',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Liver','Healthy','Under six months','A +','Under a month','Kidney','Healthy'),(1499,'screen@gmail.com','screentester','screenshot','test','default.jpg','short bio description about user','screentester',NULL,NULL,NULL,'0000-00-00',NULL,NULL,'',NULL,'A +','Kidney','Healthy','Urgent','A +','Urgent','Kidney','Healthy');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-22 15:32:58
