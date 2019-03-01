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
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `num` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行卡号',
  `opening_bank` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户行地址',
  `type` tinyint(1) DEFAULT '1' COMMENT '1借记卡2信用卡',
  PRIMARY KEY (`id`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (1,1,'招商银行',1,'2019-03-01 17:54:00','2019-03-01 17:54:00','61222575','深圳市南山西丽区官龙村',1),(2,1,'工商银行',1,'2019-03-01 17:55:07','2019-03-01 17:55:07','641098831','深圳市南山西丽',1);
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
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
  `mortgage` tinyint(1) DEFAULT NULL COMMENT '借款日期类型',
  `type` tinyint(1) NOT NULL COMMENT '1:投资客 2:借款人',
  `status` tinyint(1) DEFAULT '1' COMMENT '投资申请状态:1未审核,3未能通过,4审核通过',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建日期',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '更新日期',
  `user_id` int(6) DEFAULT NULL COMMENT '用户ID',
  `remarks` varchar(30) DEFAULT NULL COMMENT '审核状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
INSERT INTO `loans` VALUES (1,25000,1,1,2,3,'2019-02-26 17:57:53','2019-02-26 18:02:38',1,'审核未通过'),(2,10000,1,1,2,1,'2019-02-27 11:43:59','2019-02-27 11:43:59',5,'正在审核中...'),(3,5500,2,1,2,1,'2019-02-28 15:17:14','2019-02-28 15:17:14',2,'正在审核中...');
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
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2016_01_04_173148_create_admin_tables',2,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(6,'2014_10_12_000000_create_users_table',3,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(7,'2014_10_12_100000_create_password_resets_table',3,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(8,'2015_12_21_111514_create_sms_table',4,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(9,'2018_12_21_081324_create_collateral_table',5,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(10,'2018_12_26_073833_create_department_table',6,'2019-03-01 11:24:56','2019-03-01 11:25:04'),(11,'2019_02_27_151250_create_articles_table',6,'2019-03-01 11:24:56','2019-03-01 11:25:04');
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='网站模块，模块分级';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'关于我们',1,NULL,NULL,'',0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(2,'安全保障',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(3,'法律法规',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(4,'监管部门',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(5,'公司资讯',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(6,'经营信息',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(7,'业务介绍',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(8,'组织信息',1,NULL,NULL,NULL,0,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(9,'平台简介',1,NULL,NULL,'about/profile',1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(10,'核心优势',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(11,'企业文化',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(12,'员工风采',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(13,'合作机构',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(14,'联系我们',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(15,'招贤纳士',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(16,'财务审计',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(17,'重点审计',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(18,'合规报告',1,NULL,NULL,NULL,1,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(19,'法律法规',1,NULL,NULL,NULL,2,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(20,'监管部门',1,NULL,NULL,NULL,2,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(21,'公司动态',1,NULL,NULL,NULL,5,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(22,'媒体报道',1,NULL,NULL,NULL,5,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(23,'平台公告',1,NULL,NULL,NULL,5,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(24,'平台数据',1,NULL,NULL,NULL,6,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(25,'运营报告',1,NULL,NULL,NULL,6,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(26,'收费标准',1,NULL,NULL,NULL,6,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(27,'业务种类',1,NULL,NULL,NULL,7,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(28,'业务流程',1,NULL,NULL,NULL,7,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(29,'工商登记',1,NULL,NULL,NULL,8,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(30,'组织架构',1,NULL,NULL,NULL,8,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(31,'荣誉资质',1,NULL,NULL,NULL,8,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(32,'重大事项',1,NULL,NULL,NULL,8,'2019-03-01 11:22:49','2019-03-01 11:22:57'),(33,'变更事项',1,NULL,NULL,NULL,8,'2019-03-01 11:22:49','2019-03-01 11:22:57');
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `pay_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付密码',
  `addr` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地址',
  `status` tinyint(1) DEFAULT '3' COMMENT '注册用户状态/1正常用户，2被冻结，3未认证，4从未交易',
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_phone` (`phone`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'张华明','18948197961','420982197404110075',1,NULL,NULL,'$2y$10$UHTQmUviIKBoMm6liPdVM.SuG0b3pkPidvqGxU7ATJ2Fa77jvT.eW','d3QHqx9Ajkp0TpC1cQ25vgAkmrNDy7y3aKqWMCx845wti2gece3VJ3cQntG6','2019-02-28 14:17:44','2019-02-28 14:17:44','$2y$10$ybYhBXGhhmAUhEufqPRcpe83Ay091iw0YKz632bCa/oDy7mrlKrCm',NULL,3),(2,'张华明','13714712323',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3);
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

-- Dump completed on 2019-03-01 17:58:26
