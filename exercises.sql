/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.6.21 : Database - exercises
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`exercises` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `exercises`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `users` */

insert  into `users`(id,user_name,contact,email) values (1,'soyon','07111111','abdurrob.soyon@yahoo.com'),(2,'Yves','07000000','yves@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
