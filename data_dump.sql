-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gameWeb
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB-1:10.4.14+maria~bionic

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `Name` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `Producer` varchar(255) DEFAULT NULL,
  `Price` double(5,2) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES ('Dota 2','https://cdn.tgdd.vn/2020/04/content/background-800x450-19.jpg','Valve',0.00,'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.',10),('Stardew Valley','https://images-na.ssl-images-amazon.com/images/I/71iqTm9w1QL.jpg','ConcernedApe',14.99,'You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?',1),('Planet Zoo','https://frontier-drupal.s3-eu-west-1.amazonaws.com/production/frontier-corp/s3fs-public/styles/970px_wide/public/press-releases/mastheads/PZ_key_art_1080%28logo%29.jpg?itok=vwjCxz4h','Frontier Developments',44.99,'Build a world for wildlife in Planet Zoo. From the developers of Planet Coaster and Zoo Tycoon comes the ultimate zoo sim. Construct detailed habitats, manage your zoo, and meet authentic living animals who think, feel and explore the world you create around them.',100),('Road Redemption','https://tamquocchien.vn/wp-content/uploads/2020/02/download-game-road-redemption-full-pc.jpg','EQ-Games , Pixel Dash Studios',7.99,'Road Redemption lets you lead a biker gang on an epic journey across the country in this driving combat road rage adventure. Huge campaign, dozens of weapons, full 4-player co-op splitscreen and online multiplayer.',7),('Noel The Mortal Fate','https://pm1.narvii.com/7042/f2ccf7c2097f7c80b61f96c41bb2bbc00ab84261r1-1200-849v2_hq.jpg','Vaka Game Magazine, KANAWO',14.99,'This is a story about the revenge of a girl who lost her arms and legs to a devil... Noel The Mortal Fate is a charismatic adventure game, now available worldwide on Steam in English, Japanese and Simplified Chinese with seasons 1 - 7 available now in one package.',3);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-14  8:57:37
