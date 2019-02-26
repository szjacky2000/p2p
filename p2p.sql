-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: p2p
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.10.2

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL COMMENT '账号者的姓名',
  `password` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `referee` varchar(16) DEFAULT NULL COMMENT '推荐人',
  `type` tinyint(1) NOT NULL COMMENT '1:投资客\n2:借款人',
  `status` tinyint(1) NOT NULL COMMENT '1:使用中\n2:被冻结\n3:审核中的',
  `address` varchar(45) DEFAULT NULL COMMENT '地址信息',
  `email` varchar(45) DEFAULT NULL COMMENT '邮箱',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '账号创建日期',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '账号更新日期',
  `qq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'Jacky','123456','51job',1,1,'广东深圳南山','szjacky2000@126.com','2018-11-05 17:37:24','2018-11-05 17:37:24',641098831);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaterals`
--

DROP TABLE IF EXISTS `collaterals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collaterals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaterals`
--

LOCK TABLES `collaterals` WRITE;
/*!40000 ALTER TABLE `collaterals` DISABLE KEYS */;
INSERT INTO `collaterals` VALUES (1,1,'钻石',1,1,NULL,NULL),(2,1,'蓝宝石',1,1,NULL,NULL),(3,1,'宝马5系列',1,2,NULL,NULL);
/*!40000 ALTER TABLE `collaterals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(6) NOT NULL COMMENT '借款金额',
  `period` int(5) NOT NULL COMMENT '借款期限',
  `mortgage` tinyint(1) NOT NULL COMMENT '借款类型（1月/2天)',
  `type` tinyint(1) NOT NULL COMMENT '1:投资客\n2:借款人',
  `status` tinyint(1) NOT NULL COMMENT '1:使用中\n2:审核中的',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建日期',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '更新日期',
  `user_id` int(6) DEFAULT NULL COMMENT '用户ID',
  `remarks` varchar(30) DEFAULT NULL COMMENT '审核状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
INSERT INTO `loans` VALUES (1,25000,1,1,2,3,'2019-02-26 17:57:53','2019-02-26 18:02:38',1,'审核未通过');
/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2016_01_04_173148_create_admin_tables',2),(6,'2014_10_12_000000_create_users_table',3),(7,'2014_10_12_100000_create_password_resets_table',3),(8,'2015_12_21_111514_create_sms_table',4),(9,'2018_12_21_081324_create_collateral_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL COMMENT '模块名称',
  `status` tinyint(1) DEFAULT NULL COMMENT '1被冻结',
  `icon` varchar(45) DEFAULT NULL COMMENT '模块图标',
  `descript` text COMMENT '描述说明',
  `url` varchar(100) DEFAULT NULL,
  `pid` tinyint(2) DEFAULT NULL COMMENT '父级模块',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='网站模块，模块分级';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'关于我们',1,NULL,NULL,'',0),(2,'安全保障',1,NULL,NULL,NULL,0),(3,'法律法规',1,NULL,NULL,NULL,0),(4,'监管部门',1,NULL,NULL,NULL,0),(5,'公司资讯',1,NULL,NULL,NULL,0),(6,'经营信息',1,NULL,NULL,NULL,0),(7,'业务介绍',1,NULL,NULL,NULL,0),(8,'组织信息',1,NULL,NULL,NULL,0),(9,'平台简介',1,NULL,NULL,'about/profile',1),(10,'核心优势',1,NULL,NULL,NULL,1),(11,'企业文化',1,NULL,NULL,NULL,1),(12,'员工风采',1,NULL,NULL,NULL,1),(13,'合作机构',1,NULL,NULL,NULL,1),(14,'联系我们',1,NULL,NULL,NULL,1),(15,'招贤纳士',1,NULL,NULL,NULL,1),(16,'财务审计',1,NULL,NULL,NULL,1),(17,'重点审计',1,NULL,NULL,NULL,1),(18,'合规报告',1,NULL,NULL,NULL,1),(19,'法律法规',1,NULL,NULL,NULL,2),(20,'监管部门',1,NULL,NULL,NULL,2),(21,'公司动态',1,NULL,NULL,NULL,5),(22,'媒体报道',1,NULL,NULL,NULL,5),(23,'平台公告',1,NULL,NULL,NULL,5),(24,'平台数据',1,NULL,NULL,NULL,6),(25,'运营报告',1,NULL,NULL,NULL,6),(26,'收费标准',1,NULL,NULL,NULL,6),(27,'业务种类',1,NULL,NULL,NULL,7),(28,'业务流程',1,NULL,NULL,NULL,7),(29,'工商登记',1,NULL,NULL,NULL,8),(30,'组织架构',1,NULL,NULL,NULL,8),(31,'荣誉资质',1,NULL,NULL,NULL,8),(32,'重大事项',1,NULL,NULL,NULL,8),(33,'变更事项',1,NULL,NULL,NULL,8);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '身份证号码',
  `flag` tinyint(1) DEFAULT '1' COMMENT '1:个人2:企业',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pay_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付密码',
  `addr` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地址',
  `status` tinyint(1) DEFAULT NULL COMMENT '注册用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_phone` (`phone`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'张华明','18948197961','420982197404110075',1,NULL,NULL,'$2y$10$9/96CGgUQHt8MVMLZ612xuU.2P7BDoeatBScvndXcW6M1jOzDLQ3O','9ajsNWOU8y8SQQvtvd9wu605wNScecpp93DZ0ljHKGjcUZ5ZHjm5PqAHq77E','2019-02-26 06:28:33','2019-02-26 06:30:50','$2y$10$CN5v/8gNYd9p8QxosKgoueGEb/bXFPMr9Ig1ksip2UeSY7EKuZ5au','gd',2),(2,'张华明','13700137000',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gd',NULL),(3,'张华明','13714712323',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gd',NULL),(4,'张华明','150015000',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gd',NULL);
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

-- Dump completed on 2019-02-26 18:08:40
