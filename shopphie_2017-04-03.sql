# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Database: shopphie
# Generation Time: 2017-04-02 22:42:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cart
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cart_orderID` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_orderID` (`cart_orderID`),
  CONSTRAINT `cart_orderID` FOREIGN KEY (`cart_orderID`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catName` varchar(45) DEFAULT NULL,
  `catDescription` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table orderDetails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orderDetails`;

CREATE TABLE `orderDetails` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orderID` int(11) unsigned NOT NULL,
  `productID` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orderID` (`orderID`),
  KEY `productID` (`productID`),
  CONSTRAINT `orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`),
  CONSTRAINT `productID` FOREIGN KEY (`productID`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) unsigned NOT NULL,
  `orderNumber` int(50) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productName` varchar(45) DEFAULT NULL,
  `productPrice` decimal(10,2) DEFAULT NULL,
  `productDescription` varchar(250) DEFAULT NULL,
  `categoryID` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoryID` (`categoryID`),
  CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
