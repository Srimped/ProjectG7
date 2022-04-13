-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `project`;

-- Dumping structure for table project.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL COMMENT 'hash',
  `Ad_Name` varchar(50) NOT NULL,
  `Ad_Email` varchar(50) NOT NULL COMMENT 'include ''@'' and ''.''',
  `Ad_Phonenumber` varchar(10) NOT NULL COMMENT 'start with 0, 10 characters',
  `Ad_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key and auto increment',
  PRIMARY KEY (`Ad_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`username`, `password`, `Ad_Name`, `Ad_Email`, `Ad_Phonenumber`, `Ad_Id`) VALUES
	('tue', '123456789', 'Vu Nguyen Duc Tue', 'tue@gmail.com', '0393608622', 2);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table project.category
CREATE TABLE IF NOT EXISTS `category` (
  `Cate_Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Cate_Name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Cate_Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.category: ~5 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`Cate_Id`, `Cate_Name`) VALUES
	(1, 'Tablet'),
	(2, 'Smartphonee'),
	(3, 'Laptopp'),
	(4, 'Personal Computer'),
	(5, 'hu');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table project.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `Cus_Name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Cus_Email` varchar(50) NOT NULL COMMENT 'include ''@'' and ''.''',
  `Cus_Phonenumber` varchar(10) NOT NULL COMMENT 'start with 0 and 10 characters',
  `Cus_Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Cus_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.customer: ~2 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`Cus_Name`, `location`, `Cus_Email`, `Cus_Phonenumber`, `Cus_Id`) VALUES
	('Tue', 'HL', 'tue@gmail.com', '0123456789', 1),
	('Vinh', 'HG', 'vinh@gmail.com', '0123456789', 2);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table project.product
CREATE TABLE IF NOT EXISTS `product` (
  `Prod_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Cate_Id` int(11) unsigned DEFAULT NULL,
  `Prod_Name` varchar(100) NOT NULL,
  `price` float unsigned NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `Prod_Image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Prod_Id`) USING BTREE,
  KEY `CategoryID` (`Cate_Id`) USING BTREE,
  CONSTRAINT `CategoryID` FOREIGN KEY (`Cate_ID`) REFERENCES `category` (`Cate_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.product: ~4 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`Prod_Id`, `Cate_Id`, `Prod_Name`, `price`, `description`, `Prod_Image`) VALUES
	(1, 1, 'Dell vostro3000', 15000000, 'fdgds,fnjksfgdghdafsadf', NULL),
	(2, 2, 'Xiaomi', 3000000, 'teeheeee xP', NULL),
	(8, 4, 'MAC', 25000000, 'xịn vl =)))', NULL),
	(9, 3, 'Xiaomi', 3000000, 'dsagbnmbhjgfdsrdghjngfdsfbghy2134567', NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
