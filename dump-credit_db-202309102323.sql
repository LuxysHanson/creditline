-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: credit_db
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan` json DEFAULT NULL,
  `car` json DEFAULT NULL,
  `doc_images` json DEFAULT NULL,
  `client` json DEFAULT NULL,
  `address` json DEFAULT NULL,
  `car_images_1` json DEFAULT NULL,
  `car_images_2` json DEFAULT NULL,
  `photo_car` json DEFAULT NULL,
  `step` int NOT NULL DEFAULT '1',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Toyota',NULL,'2023-09-09 23:17:18','2023-09-09 23:17:18'),(2,'Nissan',NULL,'2023-09-09 23:17:26','2023-09-09 23:17:26'),(3,'Mersedes-Benz',NULL,'2023-09-09 23:17:44','2023-09-09 23:17:44');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Имя',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Пароль',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Токен восстановления',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Дата создания',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Дата обновления',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Аватар',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Роль',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Имя',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Дата создания',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Дата обновления',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Имя',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Дата создания',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Дата обновления',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Отображаемое имя',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Роль',1,1,1,1,1,1,NULL,9),(22,4,'id','text','Id',1,0,0,0,0,0,'{}',1),(24,4,'title','text','Заголовок',1,1,1,1,1,1,'{}',2),(25,4,'excerpt','text_area','Excerpt',0,0,1,1,1,1,'{}',3),(26,4,'body','hidden','Body',0,0,1,1,1,1,'{}',4),(27,4,'image','image','Image',0,1,1,1,1,1,'{}',9),(28,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',5),(29,4,'meta_description','text_area','Meta Description',0,0,1,1,1,1,'{}',6),(30,4,'status','checkbox','Статус',1,1,1,1,1,1,'{\"on\":\"\\u0412\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\",\"off\":\"\\u041e\\u0442\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\",\"checked\":false}',8),(31,4,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',10),(32,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(34,4,'meta_keywords','text','Meta Keywords',0,0,1,1,1,1,'{}',7),(35,4,'author_id','text','Author Id',0,0,0,0,0,1,'{}',12),(36,5,'id','text','Id',1,0,0,0,0,0,'{}',1),(37,5,'page_id','text','Page Id',1,1,1,1,1,1,'{}',2),(38,5,'type','text','Type',1,1,1,1,1,1,'{}',3),(39,5,'path','text','Path',1,1,1,1,1,1,'{}',4),(40,5,'data','text','Data',1,1,1,1,1,1,'{}',5),(41,5,'is_hidden','text','Is Hidden',1,1,1,1,1,1,'{}',6),(42,5,'is_minimized','text','Is Minimized',1,1,1,1,1,1,'{}',7),(43,5,'is_delete_denied','text','Is Delete Denied',1,1,1,1,1,1,'{}',8),(44,5,'cache_ttl','text','Cache Ttl',1,1,1,1,1,1,'{}',9),(45,5,'order','text','Order',1,1,1,1,1,1,'{}',10),(46,5,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',11),(47,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',12),(48,6,'id','text','Id',1,0,0,0,0,0,'{}',1),(49,6,'name','text','Название вопроса',1,1,1,1,1,1,'{}',2),(50,6,'answer','rich_text_box','Ответ к вопросу',1,1,1,1,1,1,'{}',3),(51,6,'sort','number','Сортировка',0,1,1,1,1,1,'{}',4),(52,6,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',5),(53,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(54,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(55,8,'name','text','Название',1,1,1,1,1,1,'{}',2),(56,8,'data','text','Data',0,0,0,0,0,0,'{}',3),(57,8,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(58,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(59,9,'id','text','Id',1,0,0,0,0,0,'{}',1),(60,9,'name','text','Название',1,1,1,1,1,1,'{}',2),(61,9,'data','text','Data',0,0,0,0,0,0,'{}',3),(62,9,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(63,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','Пользователь','Пользователи','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2023-09-01 23:11:14','2023-09-01 23:11:14'),(2,'menus','menus','Меню','Меню','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2023-09-01 23:11:14','2023-09-01 23:11:14'),(3,'roles','roles','Роль','Роли','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2023-09-01 23:11:15','2023-09-01 23:11:15'),(4,'pages','pages','Страница','Страницы',NULL,'App\\Models\\Page',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-09-01 23:15:06','2023-09-08 23:17:16'),(5,'page_blocks','page-blocks','Page Block','Page Blocks','voyager-file-text','App\\Models\\PageBlock',NULL,'App\\Http\\Controllers\\PageBlockController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2023-09-02 00:29:16','2023-09-08 23:18:07'),(6,'questions','questions','Вопрос','Вопросы',NULL,'App\\Models\\Question',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-09-02 08:43:54','2023-09-02 08:43:54'),(8,'models','models','Модель','Модели',NULL,'App\\Models\\Model',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-09-09 23:09:28','2023-09-09 23:09:28'),(9,'brands','brands','Бренд','Бренды',NULL,'App\\Models\\Brand',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-09-09 23:15:17','2023-09-09 23:15:17');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Панель управления','','_self','voyager-boat',NULL,NULL,1,'2023-09-01 23:11:20','2023-09-01 23:11:20','voyager.dashboard',NULL),(2,1,'Медиа','','_self','voyager-images',NULL,NULL,8,'2023-09-01 23:11:20','2023-09-09 23:16:15','voyager.media.index',NULL),(3,1,'Пользователи','','_self','voyager-person',NULL,NULL,7,'2023-09-01 23:11:21','2023-09-09 23:16:22','voyager.users.index',NULL),(4,1,'Роли','','_self','voyager-lock',NULL,NULL,6,'2023-09-01 23:11:21','2023-09-09 23:16:22','voyager.roles.index',NULL),(5,1,'Инструменты','','_self','voyager-tools',NULL,NULL,9,'2023-09-01 23:11:21','2023-09-09 23:16:15',NULL,NULL),(6,1,'Конструктор Меню','','_self','voyager-list',NULL,5,1,'2023-09-01 23:11:21','2023-09-01 23:15:51','voyager.menus.index',NULL),(7,1,'База данных','','_self','voyager-data',NULL,5,2,'2023-09-01 23:11:22','2023-09-01 23:15:52','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2023-09-01 23:11:22','2023-09-01 23:15:52','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2023-09-01 23:11:22','2023-09-01 23:15:53','voyager.bread.index',NULL),(10,1,'Настройки','','_self','voyager-settings',NULL,NULL,10,'2023-09-01 23:11:22','2023-09-09 23:16:16','voyager.settings.index',NULL),(11,1,'Страницы','','_self','voyager-file-text','#000000',NULL,2,'2023-09-01 23:15:06','2023-09-01 23:16:34','voyager.pages.index','null'),(12,1,'Вопросы','','_self','voyager-question','#000000',NULL,3,'2023-09-02 08:43:54','2023-09-02 08:44:59','voyager.questions.index','null'),(13,1,'Модели','','_self','voyager-categories','#000000',NULL,4,'2023-09-09 23:09:28','2023-09-09 23:16:19','voyager.models.index','null'),(14,1,'Бренды','','_self','voyager-categories','#000000',NULL,5,'2023-09-09 23:15:17','2023-09-09 23:16:21','voyager.brands.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2023-09-01 23:11:20','2023-09-01 23:11:20');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_02_11_224531_create_page_blocks_table',1),(21,'2018_03_11_000000_add_user_settings',1),(22,'2018_03_14_000000_add_details_to_data_types_table',1),(23,'2018_03_16_000000_make_settings_value_nullable',1),(24,'2018_04_18_000000_create_blog_posts_table',1),(25,'2018_04_18_000000_create_pages_table',1),(26,'2018_04_19_224316_add_fields_to_pages_table',1),(27,'2018_05_09_000000_create_categories_table',1),(28,'2018_05_11_000000_remove_blog_keywords_field',1),(29,'2018_05_11_000001_remove_pages_keywords_field',1),(30,'2019_08_19_000000_create_failed_jobs_table',1),(31,'2019_12_14_000001_create_personal_access_tokens_table',1),(32,'2023_09_02_143653_create_questions_table',2),(36,'2023_09_09_090031_create_applications_table',3),(37,'2023_09_09_113016_create_send_sms_table',3),(38,'2023_09_09_140906_alter_application_table',4),(39,'2023_09_10_050409_create_brands_table',5),(40,'2023_09_10_050431_create_models_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models`
--

LOCK TABLES `models` WRITE;
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` VALUES (1,'Prado',NULL,'2023-09-09 23:16:51','2023-09-09 23:16:51'),(2,'test456',NULL,'2023-09-09 23:17:03','2023-09-09 23:17:03');
/*!40000 ALTER TABLE `models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_blocks`
--

DROP TABLE IF EXISTS `page_blocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_blocks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int NOT NULL,
  `type` enum('template','include') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'include',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `is_minimized` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete_denied` tinyint(1) NOT NULL DEFAULT '0',
  `cache_ttl` int NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '10000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page_blocks_page_id_index` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_blocks`
--

LOCK TABLES `page_blocks` WRITE;
/*!40000 ALTER TABLE `page_blocks` DISABLE KEYS */;
INSERT INTO `page_blocks` VALUES (2,1,'template','block1','{\"title\":\"\\u041e\\u043d\\u043b\\u0430\\u0439\\u043d-\\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442 \\u043f\\u043e\\u0434 \\u0437\\u0430\\u043b\\u043e\\u0433 \\u0430\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u044f \\u0441 \\u043f\\u0440\\u0430\\u0432\\u043e\\u043c \\u0432\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u044f\",\"amount_from\":\"400 000\",\"amount_to\":\"3 000 000\",\"desc\":\"<div class=\\\"block1_text\\\">\\n<p>\\u0411\\u0435\\u0437 \\u043a\\u043e\\u043c\\u0438\\u0441\\u0441\\u0438\\u0439<\\/p>\\n<p>\\u0414\\u043b\\u044f \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u043e\\u0432 \\u0441 \\u0430\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u0435\\u043c \\u043d\\u0435 \\u0441\\u0442\\u0430\\u0440\\u0435\\u0435 2010 \\u0433\\u043e\\u0434\\u0430 \\u0432\\u044b\\u043f\\u0443\\u0441\\u043a\\u0430<\\/p>\\n<\\/div>\",\"btn_text1\":\"\\u041e\\u0444\\u043e\\u0440\\u043c\\u0438\\u0442\\u044c \\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\",\"btn_text2\":\"\\u0420\\u0430\\u0441\\u0441\\u0447\\u0438\\u0442\\u0430\\u0442\\u044c \\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\",\"image\":\"blocks\\/September2023\\/2kiLzGjROWyACiE5FprJ.png\",\"image_car1\":\"blocks\\/September2023\\/6A5kR75CilDiRMRPKDpg.png\",\"image_car2\":\"blocks\\/September2023\\/d0BhycU5l3JMzDrjflDr.png\"}',0,1,0,0,1,'2023-09-02 02:37:02','2023-09-08 23:50:48'),(3,1,'template','block2','{\"title\":\"\\u041f\\u043e\\u0447\\u0435\\u043c\\u0443 \\u043c\\u044b?\",\"icon_1\":\"blocks\\/September2023\\/hVMbMazUYYaZUf8f6sJ0.svg\",\"name_1\":\"\\u0410\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u044c \\u043e\\u0441\\u0442\\u0430\\u0451\\u0442\\u0441\\u044f \\u0443 \\u0432\\u0430\\u0441\",\"desc_1\":\"\\u041f\\u043e\\u043b\\u0443\\u0447\\u0438\\u0442\\u0435 \\u0434\\u0435\\u043d\\u044c\\u0433\\u0438 \\u0438 \\u043f\\u0440\\u043e\\u0434\\u043e\\u043b\\u0436\\u0430\\u0439\\u0442\\u0435 \\u043f\\u043e\\u043b\\u044c\\u0437\\u043e\\u0432\\u0430\\u0442\\u044c\\u0441\\u044f \\u0441\\u0432\\u043e\\u0438\\u043c \\u0430\\u0432\\u0442\\u043e\",\"icon_2\":\"blocks\\/September2023\\/hfBbT5GQLMP8J5gUCCaE.svg\",\"name_2\":\"\\u041f\\u043e\\u043b\\u043d\\u043e\\u0441\\u0442\\u044c\\u044e \\u043e\\u043d\\u043b\\u0430\\u0439\\u043d\",\"desc_2\":\"\\u041e\\u0446\\u0435\\u043d\\u043a\\u0430 \\u043e\\u043d\\u043b\\u0430\\u0439\\u043d, \\u041e\\u0444\\u043e\\u0440\\u043c\\u043b\\u0435\\u043d\\u0438\\u0435 \\u043e\\u043d\\u043b\\u0430\\u0439\\u043d, \\u0412\\u044b\\u043f\\u043b\\u0430\\u0442\\u0430 \\u043e\\u043d\\u043b\\u0430\\u0439\\u043d.\",\"icon_3\":\"blocks\\/September2023\\/9a0hcXev6Ql9LznozZ2B.svg\",\"name_3\":\"\\u0411\\u044b\\u0441\\u0442\\u0440\\u043e\\u0435 \\u043e\\u0444\\u043e\\u0440\\u043c\\u043b\\u0435\\u043d\\u0438\\u0435\",\"desc_3\":\"\\u0421\\u0440\\u0435\\u0434\\u043d\\u0435\\u0435 \\u0432\\u0440\\u0435\\u043c\\u044f \\u043f\\u043e\\u043b\\u0443\\u0447\\u0435\\u043d\\u0438\\u044f \\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u0430 30 \\u043c\\u0438\\u043d\\u0443\\u0442\",\"spaces\":\"0\",\"animate\":\"on\"}',0,1,0,0,2,'2023-09-02 07:54:13','2023-09-08 23:52:20'),(4,1,'template','block5','{\"title\":\"3 \\u043f\\u0440\\u043e\\u0441\\u0442\\u044b\\u0445 \\u0448\\u0430\\u0433\\u0430 \\u0434\\u043b\\u044f \\u043f\\u043e\\u043b\\u0443\\u0447\\u0435\\u043d\\u0438\\u044f \\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u0430 \\u043f\\u043e\\u0434 \\u0437\\u0430\\u043b\\u043e\\u0433 \\u0430\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u044f \\u0441 \\u043f\\u0440\\u0430\\u0432\\u043e\\u043c \\u0432\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u044f\",\"btn_text\":\"\\u041e\\u0444\\u043e\\u0440\\u043c\\u0438\\u0442\\u044c \\u0437\\u0430\\u0439\\u043c\",\"name_1\":\"\\u0417\\u0430\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u044c \\u041e\\u043d\\u043b\\u0430\\u0439\\u043d \\u0437\\u0430\\u044f\\u0432\\u043a\\u0443\",\"name_2\":\"\\u0421\\u0434\\u0435\\u043b\\u0430\\u0442\\u044c \\u0444\\u043e\\u0442\\u043e \\u0434\\u043e\\u043a\\u0443\\u043c\\u0435\\u043d\\u0442\\u043e\\u0432 \\u0438 \\u0430\\u0432\\u0442\\u043e\",\"name_3\":\"\\u041f\\u043e\\u043b\\u0443\\u0447\\u0438\\u0442\\u044c \\u0434\\u0435\\u043d\\u044c\\u0433\\u0438 \\u043d\\u0430 \\u0441\\u0432\\u043e\\u0439 \\u0441\\u0447\\u0435\\u0442\",\"spaces\":\"0\",\"animate\":null}',0,1,0,0,4,'2023-09-02 08:14:11','2023-09-08 23:54:44'),(5,1,'template','block6','{\"title\":\"\\u041c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442 \\u043f\\u043e\\u0434 \\u0437\\u0430\\u043b\\u043e\\u0433 \\u0430\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u044f \\u043c\\u043e\\u0436\\u043d\\u043e \\u043f\\u043e\\u043b\\u0443\\u0447\\u0438\\u0442\\u044c \\u043f\\u0440\\u0438 \\u0443\\u0441\\u043b\\u043e\\u0432\\u0438\\u0438:\",\"photo\":\"blocks\\/September2023\\/y3f9GB7Z1ROldLvVC85m.png\",\"name_1\":\"\\u0413\\u0440\\u0430\\u0436\\u0434\\u0430\\u043d\\u0438\\u043d \\u0420\\u0435\\u0441\\u043f\\u0443\\u0431\\u043b\\u0438\\u043a\\u0438 \\u041a\\u0430\\u0437\\u0430\\u0445\\u0441\\u0442\\u0430\\u043d\",\"name_2\":\"\\u0424\\u0438\\u0437\\u0438\\u0447\\u0435\\u0441\\u043a\\u043e\\u0435 \\u043b\\u0438\\u0446\\u043e \\u0432 \\u0432\\u043e\\u0437\\u0440\\u0430\\u0441\\u0442\\u0435 \\u043e\\u0442 18 \\u043b\\u0435\\u0442\",\"name_3\":\"\\u0421\\u043e\\u0431\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u0438\\u043a \\u043b\\u0435\\u0433\\u043a\\u043e\\u0432\\u043e\\u0433\\u043e \\u0430\\u0432\\u0442\\u043e\\u043c\\u043e\\u0431\\u0438\\u043b\\u044f \\u043d\\u0435 \\u0441\\u0442\\u0430\\u0440\\u0435\\u0435 2010 \\u0433\\u043e\\u0434\\u0430 \\u0432\\u044b\\u043f\\u0443\\u0441\\u043a\\u0430\",\"spaces\":\"0\",\"animate\":\"on\"}',0,0,0,0,5,'2023-09-02 08:21:04','2023-09-08 23:55:39'),(6,1,'include','App\\Http\\Controllers\\PageController::getQuestions()','[]',0,1,0,0,6,'2023-09-02 08:40:03','2023-09-03 00:08:14'),(7,1,'template','block3','{\"title\":\"\\u041a\\u0430\\u043b\\u044c\\u043a\\u0443\\u043b\\u044f\\u0442\\u043e\\u0440 \\u043c\\u0438\\u043a\\u0440\\u043e\\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u0430\",\"image\":\"blocks\\/September2023\\/hs4YCiQqXnKiK1VgYzM3.png\",\"cost\":\"2050000\",\"cost_min\":\"400000\",\"cost_avg\":\"1500000\",\"cost_max\":\"3000000\",\"deadline\":\"12\",\"deadline_min\":\"1 \\u043c\\u0435\\u0441.\",\"deadline_avg\":\"6 \\u043c\\u0435\\u0441.\",\"deadline_max\":\"12 \\u043c\\u0435\\u0441.\",\"payment\":\"239 167\",\"percent\":\"3,72\"}',0,1,0,0,3,'2023-09-03 00:05:21','2023-09-08 23:53:40');
/*!40000 ALTER TABLE `page_blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `author_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Главная страница',NULL,NULL,NULL,'home',NULL,'ACTIVE','2023-09-01 23:37:06','2023-09-08 23:55:39',NULL,1),(2,'Получить деньги','','',NULL,'form','','ACTIVE','2023-09-09 01:14:02','2023-09-09 01:14:02','',1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2023-09-01 23:11:23','2023-09-01 23:11:23'),(2,'browse_bread',NULL,'2023-09-01 23:11:23','2023-09-01 23:11:23'),(3,'browse_database',NULL,'2023-09-01 23:11:23','2023-09-01 23:11:23'),(4,'browse_media',NULL,'2023-09-01 23:11:23','2023-09-01 23:11:23'),(5,'browse_compass',NULL,'2023-09-01 23:11:24','2023-09-01 23:11:24'),(6,'browse_menus','menus','2023-09-01 23:11:24','2023-09-01 23:11:24'),(7,'read_menus','menus','2023-09-01 23:11:24','2023-09-01 23:11:24'),(8,'edit_menus','menus','2023-09-01 23:11:24','2023-09-01 23:11:24'),(9,'add_menus','menus','2023-09-01 23:11:24','2023-09-01 23:11:24'),(10,'delete_menus','menus','2023-09-01 23:11:24','2023-09-01 23:11:24'),(11,'browse_roles','roles','2023-09-01 23:11:25','2023-09-01 23:11:25'),(12,'read_roles','roles','2023-09-01 23:11:25','2023-09-01 23:11:25'),(13,'edit_roles','roles','2023-09-01 23:11:25','2023-09-01 23:11:25'),(14,'add_roles','roles','2023-09-01 23:11:25','2023-09-01 23:11:25'),(15,'delete_roles','roles','2023-09-01 23:11:25','2023-09-01 23:11:25'),(16,'browse_users','users','2023-09-01 23:11:25','2023-09-01 23:11:25'),(17,'read_users','users','2023-09-01 23:11:26','2023-09-01 23:11:26'),(18,'edit_users','users','2023-09-01 23:11:26','2023-09-01 23:11:26'),(19,'add_users','users','2023-09-01 23:11:26','2023-09-01 23:11:26'),(20,'delete_users','users','2023-09-01 23:11:26','2023-09-01 23:11:26'),(21,'browse_settings','settings','2023-09-01 23:11:27','2023-09-01 23:11:27'),(22,'read_settings','settings','2023-09-01 23:11:28','2023-09-01 23:11:28'),(23,'edit_settings','settings','2023-09-01 23:11:28','2023-09-01 23:11:28'),(24,'add_settings','settings','2023-09-01 23:11:28','2023-09-01 23:11:28'),(25,'delete_settings','settings','2023-09-01 23:11:28','2023-09-01 23:11:28'),(26,'browse_pages','pages','2023-09-01 23:15:06','2023-09-01 23:15:06'),(27,'read_pages','pages','2023-09-01 23:15:06','2023-09-01 23:15:06'),(28,'edit_pages','pages','2023-09-01 23:15:06','2023-09-01 23:15:06'),(29,'add_pages','pages','2023-09-01 23:15:06','2023-09-01 23:15:06'),(30,'delete_pages','pages','2023-09-01 23:15:06','2023-09-01 23:15:06'),(31,'browse_page_blocks','page_blocks','2023-09-02 00:29:17','2023-09-02 00:29:17'),(32,'read_page_blocks','page_blocks','2023-09-02 00:29:17','2023-09-02 00:29:17'),(33,'edit_page_blocks','page_blocks','2023-09-02 00:29:17','2023-09-02 00:29:17'),(34,'add_page_blocks','page_blocks','2023-09-02 00:29:18','2023-09-02 00:29:18'),(35,'delete_page_blocks','page_blocks','2023-09-02 00:29:18','2023-09-02 00:29:18'),(36,'browse_questions','questions','2023-09-02 08:43:54','2023-09-02 08:43:54'),(37,'read_questions','questions','2023-09-02 08:43:54','2023-09-02 08:43:54'),(38,'edit_questions','questions','2023-09-02 08:43:54','2023-09-02 08:43:54'),(39,'add_questions','questions','2023-09-02 08:43:54','2023-09-02 08:43:54'),(40,'delete_questions','questions','2023-09-02 08:43:54','2023-09-02 08:43:54'),(41,'browse_models','models','2023-09-09 23:09:28','2023-09-09 23:09:28'),(42,'read_models','models','2023-09-09 23:09:28','2023-09-09 23:09:28'),(43,'edit_models','models','2023-09-09 23:09:28','2023-09-09 23:09:28'),(44,'add_models','models','2023-09-09 23:09:28','2023-09-09 23:09:28'),(45,'delete_models','models','2023-09-09 23:09:28','2023-09-09 23:09:28'),(46,'browse_brands','brands','2023-09-09 23:15:17','2023-09-09 23:15:17'),(47,'read_brands','brands','2023-09-09 23:15:17','2023-09-09 23:15:17'),(48,'edit_brands','brands','2023-09-09 23:15:17','2023-09-09 23:15:17'),(49,'add_brands','brands','2023-09-09 23:15:17','2023-09-09 23:15:17'),(50,'delete_brands','brands','2023-09-09 23:15:17','2023-09-09 23:15:17');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Какие документы нужны для получения кредита?','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>',2,'2023-09-02 08:46:00','2023-09-09 00:00:27'),(2,'Какие требования к автомобилю?','<p>Стоимость квартир от 350 000 тг./кв.м.</p>',1,'2023-09-02 08:46:00','2023-09-09 00:00:49'),(3,'У меня плохая кредитная история. Могу ли я получить кредит?','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>',3,'2023-09-02 08:47:00','2023-09-08 23:59:28'),(4,'Когда можно подать повторную заявку, если пришёл отказ?','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>',4,'2023-09-02 08:47:00','2023-09-08 23:59:00'),(5,'Можно ли сделать рефинансирование текущего займа? Что для этого надо?','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>',5,'2023-09-02 08:48:00','2023-09-08 23:58:26'),(6,'Почему мне могут отказать в кредите?','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>',6,'2023-09-02 08:48:00','2023-09-08 23:56:25');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Администратор','2023-09-01 23:11:22','2023-09-01 23:11:22'),(2,'user','Обычный Пользователь','2023-09-01 23:11:23','2023-09-01 23:11:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `send_sms`
--

DROP TABLE IF EXISTS `send_sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `send_sms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `application_id` bigint unsigned NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json DEFAULT NULL,
  `state` smallint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `send_sms_application_id_foreign` (`application_id`),
  CONSTRAINT `send_sms_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `send_sms`
--

LOCK TABLES `send_sms` WRITE;
/*!40000 ALTER TABLE `send_sms` DISABLE KEYS */;
/*!40000 ALTER TABLE `send_sms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Название Сайта','Название Сайта','','text',1,'Site'),(2,'site.description','Описание Сайта','Описание Сайта','','text',2,'Site'),(3,'site.logo','Логотип Сайта','settings/September2023/qbOrRhuirru5dZ6BNTJV.svg','','image',7,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',9,'Site'),(5,'admin.bg_image','Фоновое Изображение для Админки','','','image',5,'Admin'),(6,'admin.title','Название Админки','Voyager','','text',1,'Admin'),(7,'admin.description','Описание Админки','Добро пожаловать в Voyager. Пропавшую Админку для Laravel','','text',2,'Admin'),(8,'admin.loader','Загрузчик Админки','','','image',3,'Admin'),(9,'admin.icon_image','Иконка Админки','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (используется для панели администратора)',NULL,'','text',1,'Admin'),(11,'site.footer_logo','Логотип Сайта (в футере)','settings/September2023/Wa7bhQxasShZtjDsYPNN.svg',NULL,'image',8,'Site'),(12,'site.address_ru','Адрес сайта','Казахстан, г.Алматы ул.Ауэзова 163А, офис 207',NULL,'text',3,'Site'),(13,'site.phone','Номер телефона','+7 (702) 222 33 19',NULL,'text',6,'Site'),(15,'site.footer_text_ru','Текст в футере','<div class=\"footer_desc\">\r\n<p>Лицензия № 02.21.0074.L.</p>\r\n<p>Выдано АРРФР от 01.04.2021 года</p>\r\n<p>ГЭСВ до 56%</p>\r\n</div>',NULL,'rich_text_box',10,'Site'),(16,'site.address_kz','Адрес сайта (kz)','Қазақстан, Алматы қ. Әуезов к-сі, 163а, 207 кеңсе',NULL,'text',4,'Site'),(17,'site.footer_text_kz','Текст в футере (kz)','<p>Лицензия № 02.21.0074.L.</p>\r\n<p>01.04.2021 ж. ЖРРФ берілген</p>\r\n<p>ГЭСВ 56 дейін%</p>',NULL,'rich_text_box',11,'Site');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'page_blocks','title',2,'kz','Көлік жүргізу құқығымен онлайн-микрокредит','2023-09-08 23:42:43','2023-09-08 23:42:43'),(2,'page_blocks','amount_from',2,'kz','400 000','2023-09-08 23:42:43','2023-09-08 23:42:43'),(3,'page_blocks','amount_to',2,'kz','3 000 000','2023-09-08 23:42:43','2023-09-08 23:42:43'),(4,'page_blocks','desc',2,'kz','<div class=\"block1_text\">\n<p>Комиссиялар жоқ</p>\n<p>Автокөлігі бар клиенттер үшін 2010 жылдан кем емес</p>\n</div>','2023-09-08 23:42:44','2023-09-08 23:50:37'),(5,'page_blocks','btn_text1',2,'kz','Микрокредит ресімдеу','2023-09-08 23:42:44','2023-09-08 23:50:37'),(6,'page_blocks','btn_text2',2,'kz','Микрокредитті есептеңіз','2023-09-08 23:42:44','2023-09-08 23:50:38'),(7,'page_blocks','title',3,'kz','Неге біз?','2023-09-08 23:52:14','2023-09-08 23:52:14'),(8,'page_blocks','name_1',3,'kz','Көлік сізде қалады','2023-09-08 23:52:14','2023-09-08 23:52:14'),(9,'page_blocks','desc_1',3,'kz','Ақша алыңыз және көлігіңізді пайдалануды жалғастырыңыз','2023-09-08 23:52:15','2023-09-08 23:52:15'),(10,'page_blocks','name_2',3,'kz','Толығымен онлайн','2023-09-08 23:52:15','2023-09-08 23:52:15'),(11,'page_blocks','desc_2',3,'kz','Онлайн бағалау, онлайн ресімдеу, онлайн төлеу.','2023-09-08 23:52:15','2023-09-08 23:52:15'),(12,'page_blocks','name_3',3,'kz','Жылдам безендіру','2023-09-08 23:52:16','2023-09-08 23:52:16'),(13,'page_blocks','desc_3',3,'kz','Микрокредит алудың орташа уақыты 30 минут','2023-09-08 23:52:16','2023-09-08 23:52:16'),(14,'page_blocks','spaces',3,'kz','0','2023-09-08 23:52:16','2023-09-08 23:52:16'),(15,'page_blocks','icon_1',3,'kz','','2023-09-08 23:52:16','2023-09-08 23:52:16'),(16,'page_blocks','icon_2',3,'kz','','2023-09-08 23:52:16','2023-09-08 23:52:16'),(17,'page_blocks','icon_3',3,'kz','','2023-09-08 23:52:17','2023-09-08 23:52:17'),(18,'page_blocks','title',7,'kz','Микрокредит калькуляторы','2023-09-08 23:53:25','2023-09-08 23:53:25'),(19,'page_blocks','cost',7,'kz','2050000','2023-09-08 23:53:25','2023-09-08 23:53:25'),(20,'page_blocks','cost_min',7,'kz','400000','2023-09-08 23:53:26','2023-09-08 23:53:26'),(21,'page_blocks','cost_avg',7,'kz','1500000','2023-09-08 23:53:26','2023-09-08 23:53:26'),(22,'page_blocks','cost_max',7,'kz','3000000','2023-09-08 23:53:26','2023-09-08 23:53:26'),(23,'page_blocks','deadline',7,'kz','12','2023-09-08 23:53:26','2023-09-08 23:53:26'),(24,'page_blocks','deadline_min',7,'kz','1 ай','2023-09-08 23:53:26','2023-09-08 23:53:26'),(25,'page_blocks','deadline_avg',7,'kz','6 ай','2023-09-08 23:53:27','2023-09-08 23:53:27'),(26,'page_blocks','deadline_max',7,'kz','12 ай','2023-09-08 23:53:27','2023-09-08 23:53:27'),(27,'page_blocks','payment',7,'kz','239 167','2023-09-08 23:53:27','2023-09-08 23:53:27'),(28,'page_blocks','percent',7,'kz','3,72','2023-09-08 23:53:27','2023-09-08 23:53:27'),(29,'page_blocks','title',4,'kz','Көлік жүргізу құқығымен шағын несие алудың 3 қарапайым қадамы','2023-09-08 23:54:33','2023-09-08 23:54:33'),(30,'page_blocks','btn_text',4,'kz','Қарызды рәсімдеу','2023-09-08 23:54:34','2023-09-08 23:54:34'),(31,'page_blocks','name_1',4,'kz','Онлайн өтінімді толтыру','2023-09-08 23:54:34','2023-09-08 23:54:34'),(32,'page_blocks','name_2',4,'kz','Құжаттар мен көліктердің суретін түсіріңіз','2023-09-08 23:54:34','2023-09-08 23:54:34'),(33,'page_blocks','name_3',4,'kz','Өз шотыңызға ақша алыңыз','2023-09-08 23:54:34','2023-09-08 23:54:34'),(34,'page_blocks','title',5,'kz','Автокөліктің кепілімен микрокредит алуға болады:','2023-09-08 23:55:39','2023-09-08 23:55:39'),(35,'page_blocks','name_1',5,'kz','Қазақстан Республикасының Азаматы','2023-09-08 23:55:39','2023-09-08 23:55:39'),(36,'page_blocks','name_2',5,'kz','18 жастан асқан жеке тұлға','2023-09-08 23:55:40','2023-09-08 23:55:40'),(37,'page_blocks','name_3',5,'kz','Жеңіл автомобильдің иесі 2010 жылдан асқан емес','2023-09-08 23:55:40','2023-09-08 23:55:40'),(38,'page_blocks','spaces',5,'kz','0','2023-09-08 23:55:40','2023-09-08 23:55:40'),(39,'questions','name',6,'kz','Неліктен олар маған несие беруден бас тартуы мүмкін?','2023-09-08 23:56:25','2023-09-08 23:56:25'),(40,'questions','answer',6,'kz','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>','2023-09-08 23:56:25','2023-09-08 23:56:25'),(41,'questions','name',5,'kz','Ағымдағы қарызды қайта қаржыландыруға бола ма? Ол үшін не қажет?','2023-09-08 23:58:26','2023-09-08 23:58:26'),(42,'questions','answer',5,'kz','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>','2023-09-08 23:58:26','2023-09-08 23:58:26'),(43,'questions','name',4,'kz','Егер бас тарту пайда болса, қашан қайта өтініш беруге болады?','2023-09-08 23:59:00','2023-09-08 23:59:00'),(44,'questions','answer',4,'kz','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>','2023-09-08 23:59:00','2023-09-08 23:59:00'),(45,'questions','name',3,'kz','Менің несие тарихым нашар. Мен несие ала аламын ба?','2023-09-08 23:59:28','2023-09-08 23:59:28'),(46,'questions','answer',3,'kz','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>','2023-09-08 23:59:28','2023-09-08 23:59:28'),(47,'questions','name',1,'kz','Несие алу үшін қандай құжаттар қажет?','2023-09-09 00:00:28','2023-09-09 00:00:28'),(48,'questions','answer',1,'kz','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi?</p>','2023-09-09 00:00:28','2023-09-09 00:00:28'),(49,'questions','name',2,'kz','Автокөлікке қойылатын талаптар қандай?','2023-09-09 00:00:49','2023-09-09 00:00:49'),(50,'questions','answer',2,'kz','<p>Стоимость квартир от 350 000 тг./кв.м.</p>','2023-09-09 00:00:49','2023-09-09 00:00:49'),(51,'menu_items','title',13,'kz','Модели','2023-09-09 23:15:54','2023-09-09 23:15:54'),(52,'menu_items','title',14,'kz','Бренды','2023-09-09 23:16:02','2023-09-09 23:16:02');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$wQ2z7HEKSd1yaDKe3.DDJehLWt/QLihrdDmmDg9o56EWxugPiQsM6',NULL,NULL,'2023-09-01 23:13:27','2023-09-01 23:13:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'credit_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-10 23:23:57
