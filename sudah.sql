-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sudah
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pet_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `vet_id` int NOT NULL,
  `schedule_id` int NOT NULL,
  `time_appointment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_id` int NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_reason` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,9,1,5,11,0,'08:00AM - 11:00AM',0,NULL,'Approved',NULL,'2021-12-06 17:09:13','2021-12-06 17:30:42'),(2,9,2,5,11,0,'08:00AM - 11:00AM',0,'deworm','Approved',NULL,'2021-12-06 18:53:55','2021-12-06 18:54:34'),(3,9,1,4,11,0,'08:00AM - 11:00AM',0,NULL,'Pending',NULL,'2021-12-06 22:23:33','2021-12-06 22:23:33'),(4,9,1,8,11,0,'08:00AM - 11:00AM',0,'asd','Pending',NULL,'2021-12-06 22:31:51','2021-12-06 22:31:51'),(5,9,1,5,11,0,'01:00PM - 04:00PM',0,'asdasdasdasd','Approved',NULL,'2021-12-06 22:38:50','2021-12-06 22:39:39'),(6,9,2,5,11,0,'01:00PM - 04:00PM',0,'asdasd','Approved',NULL,'2021-12-06 22:50:12','2021-12-07 06:43:06'),(7,20,5,4,11,0,'01:00PM - 04:00PM',0,'fats','Pending',NULL,'2021-12-07 11:29:23','2021-12-07 11:29:23'),(8,9,2,7,14,0,'08:00AM - 11:00AM',0,'u','Pending',NULL,'2021-12-07 11:45:38','2021-12-07 11:45:38'),(9,9,1,6,24,0,'08:00AM - 11:00AM',0,'mkvvk,','Approved',NULL,'2021-12-07 13:14:25','2022-01-17 02:47:05'),(10,9,1,6,24,0,'08:00AM - 11:00AM',0,'j,jfj','Pending',NULL,'2021-12-07 13:15:31','2021-12-07 13:15:31'),(11,38,7,6,25,0,'08:00AM - 11:00AM',0,'Consulting','Appointment Completed',NULL,'2021-12-07 13:25:31','2021-12-07 13:36:48'),(12,38,7,6,24,0,'08:00AM - 11:00AM',0,'Consulting','Pending',NULL,'2021-12-07 13:27:51','2021-12-07 13:27:51'),(13,39,8,4,24,0,'08:00AM - 11:00AM',0,'vaccination','Pending',NULL,'2021-12-07 13:35:06','2021-12-07 13:35:06'),(14,9,1,4,25,0,'01:00PM - 04:00PM',0,'asas','Pending',NULL,'2021-12-07 14:22:14','2021-12-07 14:22:14'),(15,9,1,10,25,0,'08:00AM - 11:00AM',0,'thank you','Approved',NULL,'2021-12-07 14:35:11','2021-12-07 14:35:44'),(16,9,1,10,25,0,'01:00PM - 04:00PM',0,'thnks','Approved',NULL,'2021-12-07 14:36:38','2021-12-07 14:37:41'),(17,9,1,8,29,0,'01:00PM - 04:00PM',0,'Vaccination','Pending',NULL,'2021-12-22 16:11:26','2021-12-22 16:11:26');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_number` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geolocation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (4,'Sudah Sunset','Friendship Highway Cutcut Angeles Pampanga','09676894144','0,0','Active',1,'2021-12-06 05:35:47','2021-12-06 05:35:47'),(5,'San Fernando',' San Isidro San Fernando Pampanga','09653000490','0,0','Active',1,'2021-12-06 05:36:43','2021-12-06 05:36:43'),(6,'Hensonville','#6 Richtofen St. Hensonville Malabanias Angeles Pampanga','09656378480','0,0','Active',1,'2021-12-06 05:38:13','2021-12-06 05:38:13'),(7,'Bamban','MacArthur Highway Anupul Bamban Tarlac','09676894144','0,0','Active',1,'2021-12-06 05:38:56','2022-01-19 16:56:02'),(8,'Lakandula','717 Lakandula St. Dau Mabalacat Pampanga','09653000490','0,0','Active',1,'2021-12-06 05:39:28','2022-01-19 16:56:13'),(9,'Capas','Villa San Jose Subdivision Cutcut 1 Capas Tarlac','09676014071','0,0','Active',1,'2021-12-06 05:40:21','2021-12-06 05:40:21'),(10,'Magalang','GR Bank Bldg. San Nicolas 1 Magalang Pampanga','09633869717','0,0','Active',1,'2021-12-06 05:41:12','2021-12-06 05:41:12');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breeds`
--

DROP TABLE IF EXISTS `breeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breeds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `species_id` int NOT NULL,
  `breed_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeds`
--

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;
INSERT INTO `breeds` VALUES (1,1,'PERSIAN',NULL,NULL),(2,1,'SIAMESE',NULL,NULL),(3,1,'BRITISH SHORTHAIR',NULL,NULL),(4,1,'AMERICAN SHORTHAIR',NULL,NULL),(5,1,'EXOTIC SHORTHAIR',NULL,NULL),(6,1,'HIMALAYAN',NULL,NULL),(7,1,'PUSPIN',NULL,NULL),(8,1,'AMERICAN CURL',NULL,NULL),(9,1,'BENGAL',NULL,NULL),(10,1,'RUSSIAN BLUE',NULL,NULL),(11,1,'BURMESE',NULL,NULL),(12,1,'MAINE COON',NULL,NULL),(13,1,'SPHYNX',NULL,NULL),(14,1,'RAGDOLL',NULL,NULL),(15,1,'MUNCHKIN',NULL,NULL),(16,1,'SCOTTISH FOLD',NULL,NULL),(17,1,'SIBERIAN',NULL,NULL),(18,1,'BIRMAN',NULL,NULL),(19,1,'ABYSSINIAN',NULL,NULL),(20,1,'CHARTREUX',NULL,NULL),(21,1,'BOMBAY',NULL,NULL),(22,1,'HAVANA BROWN',NULL,NULL),(23,1,'MANX',NULL,NULL),(24,1,'UNKNOWN',NULL,NULL),(25,2,'ASPIN',NULL,NULL),(26,2,'LABRADOR',NULL,NULL),(27,2,'LABRADOR RETRIEVER',NULL,NULL),(28,2,'POTCAKE',NULL,NULL),(29,2,'JACK RUSSEL TERRIER',NULL,NULL),(30,2,'CHIHUAHUA',NULL,NULL),(31,2,'LABRADOR HUSKY',NULL,NULL),(32,2,'SHIH TZU',NULL,NULL),(33,2,'PUG',NULL,NULL),(34,2,'POMERANIAN',NULL,NULL),(35,2,'SIBERIAN HUSKY',NULL,NULL),(36,2,'BEAGLE',NULL,NULL),(37,2,'CHOW CHOW',NULL,NULL),(38,2,'GERMAN SHEPHERD',NULL,NULL),(39,2,'POODLE',NULL,NULL),(40,2,'DALMATIAN',NULL,NULL),(41,2,'DOBBERMAN',NULL,NULL),(42,2,'BULLDOG',NULL,NULL),(43,2,'AMERICAN PITBULL TERRIER',NULL,NULL),(44,2,'SHIBA INU',NULL,NULL),(45,2,'ROTTWEILER',NULL,NULL),(46,2,'DACHSHUND',NULL,NULL),(47,2,'MALTESE',NULL,NULL),(48,2,'CANE CORSO',NULL,NULL),(49,2,'BERNESE MOUNTAIN DOG',NULL,NULL),(50,2,'GREAT DANE',NULL,NULL),(51,2,'SAMOYED',NULL,NULL),(52,2,'CORGI',NULL,NULL),(53,2,'YORKSHIRE TERRIER',NULL,NULL),(54,2,'BOXER',NULL,NULL),(55,2,'ENGLISH COCKER SPANIEL',NULL,NULL),(56,2,'BULL TERRIER',NULL,NULL),(57,2,'AMERICAN BULLY',NULL,NULL),(58,2,'UNKOWN',NULL,NULL),(59,3,'PARROT',NULL,NULL),(60,3,'MACAW',NULL,NULL),(61,3,'LOVEBIRD',NULL,NULL),(62,3,'PIGEON',NULL,NULL),(63,3,'DOVE',NULL,NULL),(64,3,'DUCKS',NULL,NULL),(65,3,'CHICKEN',NULL,NULL),(66,3,'EAGLE',NULL,NULL),(67,3,'PEACOCK',NULL,NULL),(68,3,'COCKATOO',NULL,NULL),(69,3,'STEERE\'S PITTA',NULL,NULL),(70,3,'RUFOUS HORNBILL',NULL,NULL),(71,3,'SCALE-FEATHERED MALKOHA',NULL,NULL),(72,3,'SPOTTED WOOD KINGSFISHER',NULL,NULL),(73,3,'GREEN RACQUET-TAIL',NULL,NULL),(74,3,'APO MYNA',NULL,NULL),(75,3,'WOODPECKER',NULL,NULL),(76,3,'UNKOWN',NULL,NULL),(77,4,'BETTA',NULL,NULL),(78,4,'GOLDFISH',NULL,NULL),(79,4,'FLOWERHORN',NULL,NULL),(80,4,'UNKNOWN',NULL,NULL),(81,5,'AMERICAN',NULL,NULL),(82,5,'CONTINENTAL GIANT',NULL,NULL),(83,5,'ENGLISH SPOT',NULL,NULL),(84,5,'FRENCH LOPS',NULL,NULL),(85,5,'BRITANNIA PETITE',NULL,NULL),(86,5,'DUTCH',NULL,NULL),(87,5,'DWARF HOTOT',NULL,NULL),(88,5,'FLORIDA WHITE',NULL,NULL),(89,5,'HAVANA',NULL,NULL),(90,5,'HIMALAYAN',NULL,NULL),(91,5,'HOLLAND LOP',NULL,NULL),(92,5,'UNKNOWN',NULL,NULL),(93,6,'SYRIAN',NULL,NULL),(94,6,'CAMPBELL\'S DWARF',NULL,NULL),(95,6,'ROBOROVSKI',NULL,NULL),(96,6,'UNKNOWN',NULL,NULL),(97,7,'PERUVIAN',NULL,NULL),(98,7,'AMERICAN',NULL,NULL),(99,7,'ABYSSINIAN',NULL,NULL),(100,7,'SKINNY',NULL,NULL),(101,7,'TEDDY',NULL,NULL),(102,7,'TEXEL',NULL,NULL),(103,7,'SHELTIE',NULL,NULL),(104,7,'REX',NULL,NULL),(105,7,'AMERICAN CRESTED',NULL,NULL),(106,7,'HIMALAYAN',NULL,NULL),(107,7,'ENGLISH CRESTED',NULL,NULL),(108,7,'CUY',NULL,NULL),(109,7,'CORONET',NULL,NULL),(110,7,'UNKNOWN',NULL,NULL),(111,8,'UNKNOWN',NULL,NULL);
/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'BROWN',NULL,NULL),(2,'WHITE',NULL,NULL),(3,'YELLOW',NULL,NULL),(4,'RED',NULL,NULL),(5,'BLACK',NULL,NULL),(6,'BLUE',NULL,NULL),(7,'VIOLET',NULL,NULL),(8,'ORANGE',NULL,NULL),(9,'GREEN',NULL,NULL),(10,'GRAY',NULL,NULL),(11,'PINK',NULL,NULL),(12,'CYAN',NULL,NULL),(13,'PURPLE',NULL,NULL),(14,'MAGENTA',NULL,NULL),(15,'TAN',NULL,NULL),(16,'OLIVE',NULL,NULL),(17,'MAROON',NULL,NULL),(18,'NAVY',NULL,NULL),(19,'AQUAMARINE',NULL,NULL),(20,'TURQOUISE',NULL,NULL),(21,'LIME',NULL,NULL),(22,'TEAL',NULL,NULL),(23,'INDIGO',NULL,NULL),(33,'Other',NULL,NULL),(34,'Tricolor',NULL,NULL);
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_in_outs`
--

DROP TABLE IF EXISTS `inv_in_outs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inv_in_outs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `inventory_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `in` int NOT NULL,
  `out` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_in_outs`
--

LOCK TABLES `inv_in_outs` WRITE;
/*!40000 ALTER TABLE `inv_in_outs` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_in_outs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inventories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventories`
--

LOCK TABLES `inventories` WRITE;
/*!40000 ALTER TABLE `inventories` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicals`
--

DROP TABLE IF EXISTS `medicals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pet_id` int NOT NULL,
  `appointment_id` int NOT NULL,
  `assessment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicals`
--

LOCK TABLES `medicals` WRITE;
/*!40000 ALTER TABLE `medicals` DISABLE KEYS */;
INSERT INTO `medicals` VALUES (1,5,5,'test','2021-12-06 00:31:40','2021-12-06 00:31:40'),(2,7,11,'Finished','2021-12-07 13:36:48','2021-12-07 13:36:48');
/*!40000 ALTER TABLE `medicals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_10_11_151450_create_roles_table',1),(5,'2021_10_11_151513_create_profiles_table',1),(6,'2021_10_11_151530_create_branches_table',1),(7,'2021_10_11_151552_create_pets_table',1),(8,'2021_10_11_151605_create_appointments_table',1),(9,'2021_10_11_151732_create_services_table',1),(10,'2021_10_12_190005_create_breeds_table',2),(11,'2021_10_12_190153_create_species_table',2),(12,'2021_10_12_190210_create_colors_table',2),(13,'2021_10_18_200343_add_species_id_to_breeds_table',3),(14,'2021_12_05_233443_create_medicals_table',4),(15,'2021_12_07_092553_create_inventories_table',5),(16,'2021_12_07_092957_create_inv_in_outs_table',5),(17,'2021_12_07_093150_create_categories_table',5),(18,'2022_01_20_013929_create_schedules_table',6),(19,'2022_01_20_015938_create_activity_log_table',7),(20,'2022_01_20_020157_create_user_log_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `breed_id` int DEFAULT NULL,
  `species_id` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `gender` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pets`
--

LOCK TABLES `pets` WRITE;
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
INSERT INTO `pets` VALUES (1,9,2,1,1,'cloud','0.3','2021-09-13','Male','1638766230.webp','2021-12-06 04:50:30','2021-12-06 04:50:30'),(2,9,7,1,5,'twilight','0.3','2021-09-17','Male','1638768293.jpg','2021-12-06 05:24:53','2021-12-06 05:24:53'),(3,10,110,1,2,'moonstar','0.3','2020-03-05','Female','1638770534.jpg','2021-12-06 06:02:14','2021-12-06 06:02:14'),(4,12,1,1,2,'GrizPandaIce','2kg','2020-08-08','Female','1638781785.jpg','2021-12-06 17:09:45','2021-12-06 17:09:45'),(5,20,7,1,8,'Bigboss','50','2021-10-05','Unkown','1638847681.jpg','2021-12-07 11:28:01','2021-12-07 11:28:01'),(6,21,32,2,5,'panpan','2.4','2021-09-09','Female','1638849459.jpg','2021-12-07 11:57:39','2021-12-07 11:57:39'),(7,38,39,2,5,'panther','2.5','2021-10-07','Male','1638854452.jpg','2021-12-07 13:20:52','2021-12-07 13:20:52'),(8,39,26,2,1,'sanmig','2','2012-02-10','Male','1638855094.jpg','2021-12-07 13:31:34','2021-12-07 13:31:34');
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `suffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'x','x','x',NULL,'x','1','x','x','x','x',' ','Active',0,'2021-10-18 09:13:00','2021-10-18 09:13:00'),(3,'last','first',NULL,NULL,NULL,'09123456789','234','Barangday','Mavalacat','Pampanga','2010','Active',0,NULL,NULL),(10,'Valencia','Girlie','Lopez',NULL,NULL,'09123456789','House','Barangay','City','Province',' ','Active',0,'2021-10-25 03:56:55','2021-10-25 03:56:55'),(14,'v','v','v',NULL,NULL,'09123456789','v','v','v','v',' ','Active',0,'2021-10-25 23:04:45','2021-10-25 23:04:45'),(16,'Lucena','Lailah Jane','Reli',NULL,NULL,'09675377453','Airmens Village','Mabiga','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 04:47:13','2021-12-06 04:47:13'),(17,'Test','Client','Account',NULL,NULL,'09675377453','1234','Mabiga','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 06:01:15','2021-12-06 06:01:15'),(18,'Duran','Kevin','Reli',NULL,NULL,'09675377453','0452','Dau','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:00:33','2021-12-06 17:00:33'),(19,'Ice','Griz','Pan',NULL,NULL,'09123456789','143','Airmens','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:05:08','2021-12-06 17:05:08'),(20,'Edquiban','Rob','L',NULL,'Ms.','09124512587','1134 Magiliw','Dapdap','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:06:35','2021-12-06 17:06:35'),(21,'Dollente','John','Marquez',NULL,'Mr.','09354512687','721 Marikit','Cacutud','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:07:57','2021-12-06 17:07:57'),(22,'Castro','Daniel','Lagua',NULL,'Mr.','09854612687','212 A.Santos','Balibago','Angeles','Pampanga',' ','Active',0,'2021-12-06 17:10:26','2021-12-06 17:10:26'),(23,'Cuevas','Froyd','Gomez',NULL,'Mr.','0994512587','5612 Lorenz','Mamatitang','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:12:51','2021-12-06 17:12:51'),(24,'Pandong','Irma','Mahusay',NULL,NULL,'09653000490','0452','Dau','Mabalacat','Pampanga',' ','Active',0,'2021-12-06 17:45:39','2021-12-06 17:45:39'),(25,'Dizon','Jud','Sotto',NULL,NULL,'09369501492','531 acacia rd dona belen','Sto Cristo','Angeles City','Pampanga',' ','Active',0,'2021-12-06 17:49:38','2021-12-06 17:49:38'),(26,'Lopez','Freya',NULL,NULL,NULL,'1','Peach','SanFrancisco','MAbalacat','pampanga',' ','Active',0,'2021-12-07 07:13:55','2021-12-07 07:13:55'),(27,'Dizon','Jose','Sotto',NULL,NULL,'09369501492','2000 fp rodriguez','mabiga','mabalacat city','pampanga',' ','Active',0,'2021-12-07 11:26:00','2021-12-07 11:26:00'),(28,'santos','fred','diko alam',NULL,NULL,'09123456789','1','c','m','p',' ','Active',0,'2021-12-07 11:31:17','2021-12-07 11:31:17'),(29,'bal','ric','sando',NULL,NULL,'09123456789','3','c','m','p',' ','Active',0,'2021-12-07 11:35:37','2021-12-07 11:35:37'),(30,'jw','jr','j',NULL,NULL,'h','hhh','hh','j','j',' ','Active',0,'2021-12-07 11:38:39','2021-12-07 11:38:39'),(31,'Cuevas','Arvin',NULL,'2021-09-08',NULL,'09351248795','Guava','Malino','San Fernando','Pampanga','2010','Active',0,'2021-12-07 12:05:20','2022-01-18 16:41:32'),(32,'Castro','Ryan',NULL,'2022-01-19',NULL,'09398756782','Extension','Sta. Lucia','Magalang','Pampanga',' ','Active',0,'2021-12-07 12:07:23','2022-01-19 02:43:14'),(33,'Edquiban','Robin Alexis',NULL,NULL,NULL,'09270935461','7th','San Isidro','Magalang','Pampanga',' ','Active',0,'2021-12-07 12:10:14','2021-12-07 12:10:14'),(34,'Punzalan','Lou',NULL,NULL,NULL,'09786545314','Strawberry','Lakandula','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 12:12:03','2021-12-07 12:12:03'),(35,'Estacio','Kevin',NULL,NULL,NULL,'09994543601','Makisig','Tabun','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 12:14:39','2021-12-07 12:14:39'),(36,'Dollente','Jirah Lyn',NULL,NULL,NULL,'09278709809','Anupul','Dela Cruz','Bamban','Tarlac',' ','Active',0,'2021-12-07 12:16:18','2021-12-07 12:16:18'),(37,'Abarra','Charlene','Reli',NULL,NULL,'09679128912','64','San Francisco','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 12:22:30','2021-12-07 12:22:30'),(38,'Manalese','Atam',NULL,NULL,NULL,'09956478371','Malingap','Aguas','Porac','Pampanga',' ','Active',0,'2021-12-07 12:29:52','2021-12-07 12:29:52'),(39,'Santiago','Alelie','M',NULL,NULL,'09674374626','maning','Sta.Lucia','Magalang','Pampanga',' ','Active',0,'2021-12-07 12:32:22','2021-12-07 12:32:22'),(40,'Borito','Noah',NULL,NULL,NULL,'09674536450','Oil','Anupul','Bamban','Tarlac',' ','Active',0,'2021-12-07 12:34:47','2021-12-07 12:34:47'),(41,'Condino','Kineza','Y',NULL,NULL,'09257609824','Orange','San Francisco','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 12:36:28','2021-12-07 12:36:28'),(42,'Pandong','Irma','M',NULL,NULL,'09354576012','Casa','Amsic','a','Angeles',' ','Active',0,'2021-12-07 12:38:24','2021-12-07 12:38:24'),(43,'Torres','Angela',NULL,NULL,NULL,'09358767019','Apple','Mamatitang','MAbalacat','Pampanga',' ','Active',0,'2021-12-07 12:40:25','2021-12-07 12:40:25'),(44,'Demoto','Charmaine','Wage',NULL,NULL,'09981324321','Sikatuna','Poblacion','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 12:42:34','2021-12-07 12:42:34'),(45,'Lucena','Jan Lenard','Reli',NULL,NULL,'09675377453','0452','Mabiga','Mabalacat','Pampanga',' ','Active',0,'2021-12-07 13:18:39','2021-12-07 13:18:39'),(46,'de castro1','dessa lyn','232',NULL,NULL,'dsdsdsdsd','6023 araw malansik st.','santa teresita','angeles','pampanga',' ','Active',0,'2021-12-07 13:26:32','2021-12-07 13:26:32'),(47,'Macam','Lorenzo','C.',NULL,NULL,'099756gyjh','D15','Pandacaqui','Mexico','Pampanga',' ','Active',0,'2021-12-07 13:43:42','2021-12-07 13:43:42'),(48,'Macam','Lorenzo','C.',NULL,NULL,'1212','Pandacaqui, Mexico','Pa','Pampanga','Pampanga',' ','Active',0,'2021-12-07 13:57:41','2021-12-07 13:57:41'),(49,'s','s','s',NULL,'s','s','s','s','s','s',' ','Active',0,'2021-12-10 02:58:16','2021-12-10 02:58:16'),(50,'v','v','v',NULL,NULL,'09676894144','0452','Mabiga','Mabalacat','Pampanga',' ','Active',0,'2021-12-10 02:58:53','2021-12-10 02:58:53'),(51,';l;;l;l','kklk','lklk',NULL,'lk','lk','lk','lk','lk','lk',' ','Active',0,'2022-01-10 21:24:47','2022-01-10 21:24:47'),(52,'asdasd','adadasd','dasasd',NULL,'adsasdadsads','213123213','asdasdasd','asdasdasd','asdasd','adsadsd',' ','Active',0,'2022-01-16 05:35:44','2022-01-16 05:35:44'),(53,'asdasd','asdasdasd','asdasd',NULL,'a','213213','ads','asd','asd','asd',' ','Active',0,'2022-01-16 05:37:02','2022-01-16 05:37:02'),(54,'jjhe','fff23','dfeee',NULL,NULL,'3344444','199 Peach St, San Francisco','s2','Mabalacat City','Region III (Central Luzon)',' ','Active',0,'2022-01-17 02:42:36','2022-01-17 02:42:36'),(55,'test','test','test','1996-03-19','test','09653000490','test','test','test','test',' ','Active',0,'2022-01-19 01:31:33','2022-01-19 01:31:33'),(56,'test','test','test','2022-01-14','test','09653000490','test','test','test','test',' ','Active',0,'2022-01-19 01:35:52','2022-01-19 01:35:52');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Client','Active',0,NULL,NULL),(2,'Vet','Active',0,NULL,NULL),(3,'Secretary','Active',0,NULL,NULL),(4,'Admin','Active',0,NULL,NULL),(99,'Super Admin','Active',0,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int NOT NULL,
  `vet_id` int NOT NULL,
  `am_max` int NOT NULL,
  `pm_max` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedules`
--

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Consultation','100',NULL,NULL,NULL,NULL),(2,'Vaccination','350',NULL,NULL,NULL,NULL),(3,'Deworning','100',NULL,NULL,NULL,NULL),(4,'Pet Grooming','300',NULL,NULL,NULL,NULL),(5,'Vet Dental Care',NULL,NULL,NULL,NULL,NULL),(6,'Test',NULL,NULL,NULL,NULL,NULL),(7,'Surgery',NULL,NULL,NULL,NULL,NULL),(8,'Confinement','1200',NULL,NULL,NULL,NULL),(9,'X-ray','900',NULL,NULL,NULL,NULL),(10,'Pet Lodging',NULL,NULL,NULL,NULL,NULL),(11,'Pet Wellnes',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `species`
--

DROP TABLE IF EXISTS `species`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `species` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `species_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `species`
--

LOCK TABLES `species` WRITE;
/*!40000 ALTER TABLE `species` DISABLE KEYS */;
INSERT INTO `species` VALUES (1,'CAT',NULL,NULL),(2,'DOG',NULL,NULL),(3,'BIRD',NULL,NULL),(4,'FISH',NULL,NULL),(5,'RABBIT',NULL,NULL),(6,'HAMSTER',NULL,NULL),(7,'GUINEA PIG',NULL,NULL),(8,'OTHERS',NULL,NULL);
/*!40000 ALTER TABLE `species` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `login_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logout_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_log`
--

LOCK TABLES `user_log` WRITE;
/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `profile_id` int NOT NULL,
  `branch_id` int DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,4,1,NULL,'root','root@admin.com','9dd4e461268c8034f5c8564e155c67a6','Active',1,NULL,'2022-01-18 17:15:18'),(3,3,10,5,'secretary','secretary@sudah.com','889b2b111b4bc3adb722f0fcff480901',NULL,1,'2021-10-25 03:56:55','2021-12-07 13:46:45'),(9,1,16,NULL,'lj','laijanelucena@gmail.com','c4ca4238a0b923820dcc509a6f75849b',NULL,1,'2021-12-06 04:47:16','2021-12-06 04:47:16'),(10,1,17,NULL,'Test-Client','test_client@client.com','9dd4e461268c8034f5c8564e155c67a6',NULL,1,'2021-12-06 06:01:15','2021-12-06 06:01:15'),(12,1,19,NULL,'webarebears','webarebears@gmail.com','1a1dc91c907325c69271ddf0c944bc72',NULL,1,'2021-12-06 17:05:08','2021-12-06 17:05:08'),(17,1,24,NULL,'irma','irmapandong@gmail.com','9dd4e461268c8034f5c8564e155c67a6',NULL,1,'2021-12-06 17:45:39','2021-12-06 17:45:39'),(18,1,25,NULL,'Bigboss24','dizonjud@gmail.com','48ca672fe338192a6deb2c095d05b6ec',NULL,1,'2021-12-06 17:49:38','2021-12-06 17:49:38'),(19,1,26,NULL,'freya','freya@gmail.com','595d3ec87df596df2fab5d10f54c7563',NULL,1,'2021-12-07 07:13:55','2021-12-07 07:13:55'),(20,1,27,NULL,'bigboss123','dizonjud@gmail.com','6308fb1c12b999c8b6e2cd4f221d7632',NULL,1,'2021-12-07 11:26:00','2021-12-07 11:26:00'),(21,1,28,NULL,'Uno','1@gmail.com','823da4223e46ec671a10ea13d7823534',NULL,1,'2021-12-07 11:31:17','2021-12-07 11:31:17'),(22,1,29,NULL,'123','1@gmail.com','31e6ea6d6c3df7a2b56bf2fd03998cd6',NULL,1,'2021-12-07 11:35:37','2021-12-07 11:35:37'),(23,1,30,NULL,'q','q@sjsj','51c65a5b41c10c0e12815f931d656bd9',NULL,0,'2021-12-07 11:38:39','2022-01-19 01:16:58'),(24,2,31,4,'acuevas','arvinc@gmail.com','9dd4e461268c8034f5c8564e155c67a6',NULL,1,'2021-12-07 12:05:20','2022-01-19 14:24:14'),(25,2,32,5,'rcastro','ryanc@gmail.com','848ffd503f98d2368d47abceb4821465',NULL,1,'2021-12-07 12:07:23','2022-01-18 17:49:32'),(26,2,33,4,'raedquiban','robine@gmail.com','2e45d702c9441f8469683f9900762dc3',NULL,1,'2021-12-07 12:10:14','2021-12-07 12:23:27'),(27,2,34,9,'lpunzalan','loup@gmail.com','ad42340810a7141681de01b2762a1ef6',NULL,1,'2021-12-07 12:12:03','2021-12-07 12:23:43'),(28,2,35,5,'kestacio','kevin@gmail.com','7b2e3a539b3d09e314b4394e4f512390',NULL,0,'2021-12-07 12:14:39','2022-01-19 14:21:58'),(29,2,36,7,'jldollente','jirahd@gmail.com','abfc11b090d8d7a5c9c82ec69dab8e20',NULL,NULL,'2021-12-07 12:16:18','2022-01-18 02:56:34'),(30,1,37,NULL,'Charlene','charlene@gmail.com','22b9b3a2802bdc3b2ce31060281f8635',NULL,NULL,'2021-12-07 12:22:30','2021-12-07 12:22:30'),(31,2,38,6,'amanalese','atam@gmail.com','4825fa2289bbc7ecd723c9cd730dc99d',NULL,NULL,'2021-12-07 12:29:52','2021-12-10 12:59:25'),(32,3,39,6,'asantiago','alelie@gmail.com','a6f30815a43f38ec6de95b9a9d74da37',NULL,NULL,'2021-12-07 12:32:22','2021-12-10 12:52:25'),(33,3,40,5,'nborito','noah@gmail.com','9290aeeb7af48fe656d025f8630716de',NULL,NULL,'2021-12-07 12:34:47','2021-12-07 13:46:57'),(34,3,41,7,'kcondino','kineza@gmail.com','103c90a4a8de7c13e2368e34fc369610',NULL,NULL,'2021-12-07 12:36:28','2021-12-07 12:36:41'),(35,3,42,8,'ipandong','irma@gmail.com','c25639e4e4db69e2e0d8a64d2c2aba0c',NULL,NULL,'2021-12-07 12:38:24','2021-12-07 12:38:35'),(36,3,43,8,'atorres','angela@gmail.com','b50ac41ec20631c7b6be72f070d8ff67',NULL,NULL,'2021-12-07 12:40:25','2022-01-18 02:28:10'),(37,3,44,6,'cdemoto','charmaine@gmail.com','696d025750a9f8e1f0a86ed0be704085',NULL,NULL,'2021-12-07 12:42:34','2021-12-10 12:24:39'),(38,1,45,NULL,'Janly','janlenardlucena@gmail.com','b767126235087604e3bf2821e47f35cd',NULL,NULL,'2021-12-07 13:18:39','2021-12-07 13:18:39'),(39,1,46,NULL,'YELO23','dessalynjimenez@gmail.com','144d26bdd315273477a0bd849e68fd95',NULL,NULL,'2021-12-07 13:26:32','2021-12-07 13:26:32'),(40,1,47,NULL,'Lorenzomacam13','lorenzomacam031396@gmail.com','340115279d3d8223c27fffc56927386e',NULL,NULL,'2021-12-07 13:43:42','2021-12-07 13:43:42'),(41,2,48,5,'Lorenzomacam13','lorenzomacam031396@gmail.com','534ce5fb34005ab0f98bd16ba4572a68',NULL,NULL,'2021-12-07 13:57:41','2021-12-07 13:59:46'),(42,2,49,NULL,'s','d@df','03c7c0ace395d80182db07ae2c30f034',NULL,NULL,'2021-12-10 02:58:16','2021-12-10 02:58:16'),(43,2,50,NULL,'vtest','vtest@gmail.com','8a4d315acd8d73790674b97b3ff49f4d',NULL,NULL,'2021-12-10 02:58:53','2021-12-10 02:58:53'),(44,1,51,NULL,'ghiemnlmmlllmlmlmlmlllml','lll@dsds.kjk','38a440abf0d6da2d86b21126a192662d',NULL,NULL,'2022-01-10 21:24:48','2022-01-10 21:24:48'),(45,1,52,NULL,'test','test@gmail.com','2785dfe320505bd9d1a4302db8c3a945',NULL,NULL,'2022-01-16 05:35:44','2022-01-16 05:35:44'),(46,1,53,NULL,'asdasdasd','test@gmail.com','906a2fb4755ac0b49837ec205e8f36a0',NULL,NULL,'2022-01-16 05:37:02','2022-01-16 05:37:02'),(47,1,54,NULL,'12344_','freya@gmail.com','98e216f9bff4cac8e1c5163ec8d89dd5',NULL,NULL,'2022-01-17 02:42:36','2022-01-17 02:42:36'),(49,2,56,4,'test','test@gmail.com','098f6bcd4621d373cade4e832627b4f6',NULL,1,'2022-01-19 01:35:52','2022-01-19 01:35:52');
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

-- Dump completed on 2022-01-20  2:03:57
