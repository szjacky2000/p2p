-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 192.168.1.104    Database: p2p
-- ------------------------------------------------------
-- Server version	5.7.23-log

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED='ceeaa91c-de5e-11e8-b5a7-507b9d7f42f6:1-694';

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
  PRIMARY KEY (`id`)
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
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '-1删除',
  `user_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaterals`
--

LOCK TABLES `collaterals` WRITE;
/*!40000 ALTER TABLE `collaterals` DISABLE KEYS */;
INSERT INTO `collaterals` VALUES (4,2,'戒指1',1,3,'2018-12-26 01:49:49',NULL),(5,1,'项链1',1,3,'2018-12-26 01:53:05',NULL),(9,0,'啥爱仕达多',-1,3,NULL,'2018-12-26 22:30:06'),(10,9,'123',1,3,'2018-12-26 22:30:40',NULL),(11,0,'123123阿达',1,3,'2018-12-26 22:37:57','2018-12-26 22:46:33'),(12,0,'发送',1,3,'2018-12-26 22:50:01',NULL),(13,0,'123',1,3,'2018-12-26 23:02:15',NULL),(14,0,'房产2',-1,1,'2018-12-27 07:14:20','2018-12-27 07:53:11'),(15,0,'123',1,3,'2018-12-27 08:07:46',NULL);
/*!40000 ALTER TABLE `collaterals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depart`
--

DROP TABLE IF EXISTS `depart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depart` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `depart_name` varchar(255) DEFAULT NULL COMMENT '部门',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depart`
--

LOCK TABLES `depart` WRITE;
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(6) DEFAULT NULL COMMENT '借款金额',
  `period` int(5) DEFAULT NULL COMMENT '借款期限',
  `mortgage` int(5) DEFAULT NULL COMMENT '借款类型（月/天)',
  `type` tinyint(1) DEFAULT NULL COMMENT '1:投资客\\n2:借款人',
  `status` tinyint(1) DEFAULT NULL COMMENT '1:使用中\\\\n2:审核中的\\\\n3:未通过\\\\n4:通过',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建日期',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '更新日期',
  `user_id` int(6) DEFAULT NULL COMMENT '用户ID',
  `msg` varchar(255) DEFAULT NULL COMMENT '备注说明',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
INSERT INTO `loans` VALUES (1,5000,30,1,2,4,'2019-02-20 15:05:25','2019-02-20 15:06:46',1,NULL),(2,900,50,1,2,4,'2019-02-20 17:58:00','2019-02-23 15:10:15',2,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2016_01_04_173148_create_admin_tables',2),(6,'2014_10_12_000000_create_users_table',3),(7,'2014_10_12_100000_create_password_resets_table',3);
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
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` tinyint(1) DEFAULT '1' COMMENT '1:投资客2:借款人',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pay_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付密码',
  `addr` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '用户地址',
  `status` tinyint(1) DEFAULT NULL COMMENT '1已认证，2未认证，3冻结',
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_phone` (`phone`),
  KEY `index_name` (`name`),
  KEY `index_status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'张华明','18948197961',NULL,1,NULL,NULL,NULL,NULL,NULL,'2019-02-20 07:06:35',NULL,'gd',2),(2,'张华明','18948197962',NULL,1,NULL,NULL,NULL,NULL,NULL,'2019-02-20 09:59:11',NULL,'gd',2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-23 16:27:37
