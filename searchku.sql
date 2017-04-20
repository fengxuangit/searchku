-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: searchku
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `sk_admin`
--

DROP TABLE IF EXISTS `sk_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `privilege` int(11) DEFAULT NULL,
  `lastip` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_admin`
--

LOCK TABLES `sk_admin` WRITE;
/*!40000 ALTER TABLE `sk_admin` DISABLE KEYS */;
INSERT INTO `sk_admin` VALUES (1,'admin','99754106633f94d350db34d548d6091a',1,'127.0.0.1',1461051096);
/*!40000 ALTER TABLE `sk_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_data`
--

DROP TABLE IF EXISTS `sk_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `done` int(11) DEFAULT NULL,
  `referer` varchar(45) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `md5` char(32) DEFAULT NULL,
  `downsche` int(11) DEFAULT NULL,
  `downpath` varchar(100) DEFAULT NULL,
  `filecolumns` varchar(60) DEFAULT NULL,
  `split` varchar(45) DEFAULT NULL,
  `lock` int(11) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_data`
--

LOCK TABLES `sk_data` WRITE;
/*!40000 ALTER TABLE `sk_data` DISABLE KEYS */;
INSERT INTO `sk_data` VALUES (7,'163',0,'wangyi',1461988459,NULL,100,'/tmp/163.88',NULL,NULL,NULL,'http://search.evalshell.com/people_info2.txt');
/*!40000 ALTER TABLE `sk_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sk_task`
--

DROP TABLE IF EXISTS `sk_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sk_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `downpath` varchar(100) DEFAULT NULL,
  `filecolumns` tinytext,
  `split` varchar(20) DEFAULT NULL,
  `lock` int(11) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sk_task`
--

LOCK TABLES `sk_task` WRITE;
/*!40000 ALTER TABLE `sk_task` DISABLE KEYS */;
INSERT INTO `sk_task` VALUES (1,1,'/Users/apple/Downloads/people_info2.txt','','',0,'http://nj02.poms.baidupcs.com/file/cd72ce04a87b20ae266293065193f267?bkt=p3-0000a66b57fc9bbb96eb3776896b494d376e&fid=352952186-250528-772959389512558&time=1461069467&sign=FDTAXGERLBH-DCb740ccc5511e5e8fedcff06b081203-Af8qQCYT0WHNmqo4qDLUFDXhFnM%3D&to=n2b&fm=Nan,B,T,th&sta_dx=5&sta_cs=0&sta_ft=csv&sta_ct=5&fm2=Nanjing02,B,T,th&newver=1&newfm=1&secfm=1&flow_ver=3&pkey=0000a66b57fc9bbb96eb3776896b494d376e&sl=81789007&expires=8h&rt=sh&r=584195211&mlogid=2547953640114927993&vuk=352952186&vbdid=4029699856&fin=result.csv&fn=result.csv&slt=pm&uta=0&rtype=1&iv=0&isw=0&dp-logid=2547953640114927993&dp-callid=0.1.1');
/*!40000 ALTER TABLE `sk_task` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-20  9:43:55
