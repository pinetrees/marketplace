-- MySQL dump 10.13  Distrib 5.6.15, for debian6.0 (i686)
--
-- Host: localhost    Database: laravel_marketplace
-- ------------------------------------------------------
-- Server version	5.6.15

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Root',0),(2,'Air',1),(3,'Air Monitoring',2),(4,'Indoor Air Quality',3),(5,'Outdoor Air Quality',3),(6,'Analysis',2),(7,'Carbon Management',2),(8,'Filtration',2),(9,'Green House Gas Management',2),(10,'Health Concerns',2),(11,'Pollution',10),(12,'Ventilation',10),(13,'VOC',10),(14,'Other',2),(15,'Energy',1),(16,'Alternative Energy',15),(17,'Biofuels',15),(18,'Energy Management',15),(19,'Hydro Power',15),(20,'Lighting',15),(21,'Solar Power',15),(22,'Turbines',15),(23,'Wind Power',15),(24,'Finance',15),(25,'Environment',1),(26,'Labs',1),(27,'Sustainability',1),(28,'Health & Safety',1),(29,'Land Use',1),(30,'Waste',1),(31,'Wastewater',1),(32,'Non Profit',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_project`
--

DROP TABLE IF EXISTS `category_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_project`
--

LOCK TABLES `category_project` WRITE;
/*!40000 ALTER TABLE `category_project` DISABLE KEYS */;
INSERT INTO `category_project` VALUES (1,2,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,3,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,2,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,4,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,3,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,2,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,5,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,3,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,2,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,6,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,2,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,7,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,2,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,8,7,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,2,7,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `category_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_service`
--

DROP TABLE IF EXISTS `category_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_service`
--

LOCK TABLES `category_service` WRITE;
/*!40000 ALTER TABLE `category_service` DISABLE KEYS */;
INSERT INTO `category_service` VALUES (1,2,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,3,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,2,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,4,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,3,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,2,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,5,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,3,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,2,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,6,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,2,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,7,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,2,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,8,7,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,2,7,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `category_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_submissions`
--

DROP TABLE IF EXISTS `contact_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_submissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_submissions`
--

LOCK TABLES `contact_submissions` WRITE;
/*!40000 ALTER TABLE `contact_submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,1,'main','ESM','esm',0,'ESM is a marketplace for environmental services. We help individuals and businesses to search for environmental services, compare prices, and choose the best environmental professionals matching their needs. We also assist environmental professionals and firms in promoting their services in ways that are more accessible to their clients, creating a network that allows for greater environmental solutions for sustainable businesses and ecosystems.'),(2,1,'main','Vision','vision',1,'We believe that through collaboration and the exchange of skills and knowledge about our physical environment, we can build a more sustainable planet, not only for ourselves but also for future genera>ons. To that end, we strive to create an ever-growing market for that exchange to take place.'),(3,1,'main','Principles','principles',2,'<ol> \n            <li>Every person can be empowered to improve the quality of their environment.</li> \n            <li>Empowerment requires the sharing of knowledge and skills.</li> \n            <li>Environmental innovation is fundamental to business development.</li> \n            <li>The larger the network of environmental collaborators, the larger the scale of environmental change.</li> \n        	</ol>'),(4,2,'main','Lorem Ipsum','lorem-ipsum',0,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat tincidunt interdum. Proin faucibus turpis vel lobortis luctus. Aliquam et finibus felis, sit amet egestas magna. Vestibulum blandit est at elit gravida, ut vehicula ligula posuere. In vel ornare mauris. In tincidunt consectetur ante, sed bibendum odio molestie a. Pellentesque id tempor arcu. Mauris dignissim facilisis ligula, at porta nulla maximus quis. Pellentesque maximus magna sed tortor vulputate, non tempus nisl cursus. Nulla facilisi. Suspendisse sodales quam sit amet sapien dignissim fermentum quis in enim.');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `copy`
--

DROP TABLE IF EXISTS `copy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `copy_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `copy`
--

LOCK TABLES `copy` WRITE;
/*!40000 ALTER TABLE `copy` DISABLE KEYS */;
INSERT INTO `copy` VALUES (1,'default-copy','This is some default copy'),(2,'home-alert','This is a very important alert to capture the reader\'s attention');
/*!40000 ALTER TABLE `copy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feed`
--

DROP TABLE IF EXISTS `feed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feed` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `feed_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feed`
--

LOCK TABLES `feed` WRITE;
/*!40000 ALTER TABLE `feed` DISABLE KEYS */;
/*!40000 ALTER TABLE `feed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` VALUES (1,1,3,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,1,2,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,2,3,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,2,2,0,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `attachment_id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,1,3,2,'This is a test of the internal messaging system.',0,0,0,'2014-11-14 03:14:18','2014-11-14 03:14:18'),(2,2,3,2,'This is a clone of the test of the internal messaging system.',0,0,0,'2014-11-14 03:14:19','2014-11-14 03:14:19');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_06_26_210733_create_users_table',1),('2014_07_06_060726_create_projects_table',1),('2014_07_06_062607_create_regions_table',1),('2014_07_06_080104_create_roles_table',1),('2014_07_06_085719_create_categories_table',1),('2014_07_22_223559_create_category_project_table',1),('2014_07_31_153521_create_services_table',1),('2014_07_31_155355_create_category_service_table',1),('2014_08_17_161205_create_page_table',1),('2014_08_17_183551_create_content_table',1),('2014_08_30_192442_create_messages_table',1),('2014_08_30_224841_create_settings_table',1),('2014_08_31_233832_create_proposals_table',1),('2014_09_01_030305_create_response_table',1),('2014_09_01_152538_create_thread_table',1),('2014_09_01_174708_create_inbox_table',1),('2014_09_14_030351_project_service',1),('2014_09_14_151757_create_service_bookmarks_table',1),('2014_09_17_032840_create_project_bookmarks_table',1),('2014_09_17_190943_create_user_settings_table',1),('2014_10_04_014022_create_contact_table',1),('2014_10_05_174817_create_copy_table',1),('2014_11_13_215251_create_feeds_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  `header` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (6,'Default','default','A tagline for the default page.',1,0),(7,'About','about','',1,1),(8,'News','news','A tagline for the news.',1,1),(9,'Market','market','A place for searching.',1,1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_bookmarks`
--

DROP TABLE IF EXISTS `project_bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_bookmarks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_bookmarks`
--

LOCK TABLES `project_bookmarks` WRITE;
/*!40000 ALTER TABLE `project_bookmarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_service`
--

DROP TABLE IF EXISTS `project_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_service`
--

LOCK TABLES `project_service` WRITE;
/*!40000 ALTER TABLE `project_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `purpose` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `requirements` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `terms` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `timeline` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `budget` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `resources` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `qualifications` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `evaluation` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `region_id` mediumint(9) NOT NULL,
  `provider_id` mediumint(9) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `public` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Asian Shades Project','Keeping the trees in Asia','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',1,1,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:16','2014-11-14 03:14:16'),(2,'African Deserts Project','Keeping the deserts in Africa','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,2,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(3,'European Countries Project','Keeping the countries in Europe','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,3,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(4,'Australian Kangaroos Project','Keeping the kangaroos in Australia','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,4,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(5,'North American Valley Girls Project','Keeping the valley girls in North America','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,5,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(6,'South American Businesses Project','Keeping the businesses in South America','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,6,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(7,'Antarctican Ice Project','Keeping the ice in Antarctica','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.','','','','','','','','',3,7,0,'2014-11-13','2014-11-13',1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proposals`
--

DROP TABLE IF EXISTS `proposals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proposals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proposals`
--

LOCK TABLES `proposals` WRITE;
/*!40000 ALTER TABLE `proposals` DISABLE KEYS */;
/*!40000 ALTER TABLE `proposals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Asia'),(2,'Africa'),(3,'Europe'),(4,'Australia'),(5,'North America'),(6,'South America'),(7,'Antarctica');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responses`
--

DROP TABLE IF EXISTS `responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `response` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responses`
--

LOCK TABLES `responses` WRITE;
/*!40000 ALTER TABLE `responses` DISABLE KEYS */;
/*!40000 ALTER TABLE `responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Role 1','2014-11-14 03:14:15','2014-11-14 03:14:15'),(2,'Role 2','2014-11-14 03:14:15','2014-11-14 03:14:15'),(3,'Role 3','2014-11-14 03:14:15','2014-11-14 03:14:15');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_bookmarks`
--

DROP TABLE IF EXISTS `service_bookmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_bookmarks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_bookmarks`
--

LOCK TABLES `service_bookmarks` WRITE;
/*!40000 ALTER TABLE `service_bookmarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_bookmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `region_id` mediumint(9) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `public` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Asian Shades Service','Keeping the trees in Asia','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,1,1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(2,'African Deserts Service','Keeping the deserts in Africa','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,2,1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(3,'European Girls Service','Keeping the girls in Europe','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,3,1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(4,'Australian Kangaroos Service','Keeping the kangaroos in Australia','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,4,1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(5,'North American Valley Girls Service','Keeping the valley girls in North America','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,5,1,0,'2014-11-14 03:14:17','2014-11-14 03:14:17'),(6,'South American Babes Service','Keeping the babes in South America','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,6,1,0,'2014-11-14 03:14:18','2014-11-14 03:14:18'),(7,'Antarctican Ice Service','Keeping the ice in Antarctica','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',2,7,1,0,'2014-11-14 03:14:18','2014-11-14 03:14:18');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site-name','Environmental Services Marketplace','2014-11-14 03:14:18','2014-11-14 03:14:18'),(2,'administrative-email-address','joshua@tier27.com','2014-11-14 03:14:18','2014-11-14 03:14:18'),(3,'administrative-email-password','Thepianoman1!8*9(0)','2014-11-14 03:14:18','2014-11-14 03:14:18');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threads`
--

LOCK TABLES `threads` WRITE;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` VALUES (1,1,1,3,2,'Test of the internal messaging system',0,0,'2014-11-14 03:14:18','2014-11-14 03:14:18'),(2,1,1,3,2,'This is a clone of the test of the internal messaging system',0,0,'2014-11-14 03:14:18','2014-11-14 03:14:18');
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_settings`
--

DROP TABLE IF EXISTS `user_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tooltips` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_settings`
--

LOCK TABLES `user_settings` WRITE;
/*!40000 ALTER TABLE `user_settings` DISABLE KEYS */;
INSERT INTO `user_settings` VALUES (1,1,1,'2014-11-14 03:14:16','2014-11-14 03:14:16');
/*!40000 ALTER TABLE `user_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` tinyint(4) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tooltips` tinyint(1) NOT NULL DEFAULT '1',
  `notifications` tinyint(1) NOT NULL DEFAULT '1',
  `hasAvatar` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','','','admin@marketplace.com','admin','$2y$10$A02/hIo1It2SaNbp82FQ7Ohdm.03uuD/eFtTegYSsvkVag0UjpLha','','admin.marketplace.com',1,1,0,NULL,'2014-11-14 03:14:16','2014-11-14 03:14:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-21  1:06:02
