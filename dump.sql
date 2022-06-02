-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: uni
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220402162729','2022-04-02 19:27:54',20),('DoctrineMigrations\\Version20220402210540','2022-04-03 00:05:46',141),('DoctrineMigrations\\Version20220403151938','2022-04-03 18:19:49',425),('DoctrineMigrations\\Version20220426174459','2022-04-26 20:45:07',44),('DoctrineMigrations\\Version20220426181518','2022-04-26 21:15:22',31),('DoctrineMigrations\\Version20220426183734','2022-04-26 21:37:37',64),('DoctrineMigrations\\Version20220426183811','2022-04-26 21:38:14',76),('DoctrineMigrations\\Version20220426184007','2022-04-26 21:40:08',37),('DoctrineMigrations\\Version20220426205233','2022-04-26 23:52:41',38),('DoctrineMigrations\\Version20220426210919','2022-04-27 00:09:26',28),('DoctrineMigrations\\Version20220426221231','2022-04-27 01:12:38',47),('DoctrineMigrations\\Version20220426222112','2022-04-27 01:21:15',21),('DoctrineMigrations\\Version20220508233747','2022-05-09 02:37:54',25),('DoctrineMigrations\\Version20220510231551','2022-05-11 02:15:55',31),('DoctrineMigrations\\Version20220510232629','2022-05-11 02:26:33',85),('DoctrineMigrations\\Version20220511002001','2022-05-11 04:45:20',112),('DoctrineMigrations\\Version20220511010050','2022-05-11 04:00:55',50),('DoctrineMigrations\\Version20220511012210','2022-05-11 04:22:13',237),('DoctrineMigrations\\Version20220511012948','2022-05-11 04:29:52',23),('DoctrineMigrations\\Version20220511013432','2022-05-11 04:34:35',74),('DoctrineMigrations\\Version20220511013557','2022-05-11 04:36:28',85),('DoctrineMigrations\\Version20220511014554','2022-05-11 04:46:02',13),('DoctrineMigrations\\Version20220511014700','2022-05-11 04:47:05',35),('DoctrineMigrations\\Version20220511014730','2022-05-11 04:47:33',14),('DoctrineMigrations\\Version20220511014915','2022-05-11 04:49:18',58),('DoctrineMigrations\\Version20220511222018','2022-05-12 01:20:23',40);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation_date` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` double NOT NULL,
  `lan` double NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'уацуац','уцауца','2017-01-01','','','','',0,0,'','','0000-00-00 00:00:00',0),(2,'Інститут адміністрування та післядипломної освіти','Інститут адміністрування та післядипломної освіти — це навчально-структурний підрозділ Національного університету «Львівська політехніка», якій здійснює підготовку бакалаврів, спеціалістів та магістрів, перепідготовку спеціалістів, які отримають другу вищу освіту, та підвищення кваліфікації фахівців за всіма напрямами та спеціальностями, ліцензованими в Національному університеті.','2017-07-04','ipdo@lp.edu.ua','http://wiki.lp.edu.ua/wiki/%D0%86%D0%BD%D1%81%D1%82%D0%B8%D1%82%D1%83%D1%82_%D0%B0%D0%B4%D0%BC%D1%96%D0%BD%D1%96%D1%81%D1%82%D1%80%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F_%D1%82%D0%B0_%D0%BF%D1%96%D1%81%D0%BB%D1%8F%D0%B4%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC%D0%BD%D0%BE%D1%97_%D0%BE%D1%81%D0%B2%D1%96%D1%82%D0%B8','вул. Митрополита Андрея 5, 4-й н.к., кім. 10','(032) 258-22-06',24.010578,49.836176,'','','0000-00-00 00:00:00',0),(3,'Інститут адміністрування та післядипломної освіти','Інститут адміністрування та післядипломної освіти — це навчально-структурний підрозділ Національного університету «Львівська політехніка», якій здійснює підготовку бакалаврів, спеціалістів та магістрів, перепідготовку спеціалістів, які отримають другу вищу освіту, та підвищення кваліфікації фахівців за всіма напрямами та спеціальностями, ліцензованими в Національному університеті.','2017-07-04','ipdo@lp.edu.ua','https://lpnu.ua/iapo','вул. Митрополита Андрея 5, 4-й н.к., кім. 10','(032) 258-22-06',24.012,49.837,'ІАПО','logo-faculty-geography.png','2022-04-27 01:28:10',1),(4,'Інститут архітектури та дизайну','Інститут архітектури — це є навчальний структурний підрозділ університету, створений в 2001 році шляхом реорганізації факультету архітектури Львівської політехники.','2017-01-01','IARX.dept@lpnu.ua','https://lpnu.ua/iard','вул. С. Бандери 12, Головний корпус, кім. 328','(032) 258-22-39',24.016,49.835,'ІАРД','logo-faculty-philology.png','2022-04-27 00:27:01',1),(5,'Інститут будівництва та інженерних систем','Інститут будівництва та інженерних систем — це навчально-структурний підрозділ Національного університету «Львівська політехніка», створений в 2001 р. на базі інженерно-будівельного факультету — одного з найстаріших у Львівській політехніці. Інститут структурно складається з двох навчальних відділень: деканату базової вищої освіти, який випускає бакалаврів, та деканату повної вищої освіти, який випускає магістрів та спеціалістів.','2017-01-01','ibid.dept@lpnu.ua','https://lpnu.ua/ibis','вул. Карпінського 6, 2-й н.к., кім. 223','(032) 258-26-50',24.012,49.836,'ІБІС','logo-faculty-lingua.png','2022-04-27 00:25:13',1),(6,'Інститут геодезії','Інститут геодезії — це навчальний структурний підрозділ університету, утворений у 2001 р. на базі геодезичного факультету Національного університету «Львівська політехніка».','2017-01-01','ig.dept@lpnu.ua','https://lpnu.ua/igdg','вул. Карпінського 6, 2-й н.к., кім. 501, 601','(032) 258-26-98',24.012,49.836,'ІГДГ','logo-faculty-geology.png','2022-04-27 00:25:26',1),(7,'Інститут гуманітарних та соціальних наук','Інститут гуманітарних і соціальних наук — це навчально-науковий структурний підрозділ Національного університету «Львівська політехніка».\r\n\r\nІнститут забезпечує створення системи викладання та вивчення гуманітарних дисциплін, які допомогли б студентам оволодіти ґрунтовними знаннями з історії української державності, української та зарубіжної культури, української мови, філософії, політології, соціології та соціальної роботи, релігієзнавства, найпоширеніших мов світу.','2017-01-01','ihsn.dept@lpnu.ua','https://lpnu.ua/ihsn','вул. Митрополита Андрея 5, 4-й н.к., кім. 208-211','(032) 258-23-31',24.012,49.837,'ІГСН','logo-faculty-clio.png','2022-04-27 00:25:37',1),(8,'Інститут комп\'ютерних технологій, автоматики та метрології','Інститут комп’ютерних технологій, автоматики та метрології - це навчально-науковий інститут заснований у 2001 році на базі факультету автоматики.','2017-01-01','ikta.dept@lpnu.ua','https://lpnu.ua/ikta','вул. С. Бандери, 28а, 5-й н.к., кім.612','(032) 258-25-59',24.008,49.835,'ІКТА','unnamed.png','2022-04-27 00:25:47',1),(9,'Інститут гуманітарних та соціальних наук','Інститут гуманітарних і соціальних наук — це навчально-науковий структурний підрозділ Національного університету «Львівська політехніка».\r\n\r\nІнститут забезпечує створення системи викладання та вивчення гуманітарних дисциплін, які допомогли б студентам оволодіти ґрунтовними знаннями з історії української державності, української та зарубіжної культури, української мови, філософії, політології, соціології та соціальної роботи, релігієзнавства, найпоширеніших мов світу.','2017-01-01','ihsn.dept@lpnu.ua','https://lpnu.ua/ihsn','вул. Митрополита Андрея 5, 4-й н.к., кім. 208-211','(032) 258-23-31',24.012,49.837,'ІГСН','logo-faculty-kultart.png','2022-04-27 00:26:01',0),(10,'Інститут економіки і менеджменту','Інститут економіки і менеджменту (ІНЕМ) Національного університету «Львівська політехніка» уже понад 70 років здійснює підготовку висококваліфікованих економічних кадрів. Інститут сьогодні – один із лідерів економічної та менеджерської бізнес-освіти не тільки західного регіону, а й усієї України.','2017-01-01','inem.dept@lpnu.ua','https://lpnu.ua/inem','вул. Митрополита Андрея 5, 4 -й н.к., кім. 428а','(032) 258-22-10',24.012,49.837,'ІНЕМ','logo-faculty-econom.png','2022-04-27 00:26:17',1),(11,'Інститут телекомунікацій, радіоелектроніки та електронної техніки','Інститут телекомунікацій, радіоелектроніки та електронної техніки (абревіатура — ІТРЕ) — навчально-науковий інститут у складі Національного університету «Львівська політехніка». Створений в 2001 р. на базі радіотехнічного та електрофізичного факультетів, створених відповідно у 1952 та 1964 рр.','2017-01-01','itre.dept@lpnu.ua','https://lpnu.ua/itre','вул. Професорська 2, 11-й н. к., кім. 209','(032) 258-25-55',24.016,49.836,'ІТРЕ','logo-faculty-ami.png','2022-04-27 00:26:25',1),(12,'Інститут хімії та хімічних технологій','Інститут хімії та хімічних технологій створений у жовтні 2001 р. на базі хіміко-технологічного факультету та факультету технології органічних речовин.','2017-01-01','IXXT.dept@lpnu.ua','https://lpnu.ua/ikhkht','Святого Юра. 9, 9-й н.к., кім.121','(032) 258-23-10',24.014,49.836,'ІХХТ','logo-faculty-chem.png','2022-04-27 00:26:30',1),(13,'Інститут комп\'ютерних наук та інформаційних технологій','Інститут комп’ютерних наук та інформаційних технологій (ІКНІ) утворено 19 жовтня 2001 р. на базі факультету комп\'ютерної техніки та інформаційних технологій. Сьогодні він є провідним науково-освітнім центром України у галузі комп\'ютерних наук.','2017-01-01','ikni.dept@lpnu.ua','https://lpnu.ua/ikni','вул.С. Бандери 28а, 5-й н.к., кім. 513','(032) 258-26-63',24.0083702,49.8351586,'ІКНІ','logo-faculty-mechmat.png','2022-04-27 01:06:03',1),(14,'frefre','wrfew','2017-01-01','wefw','fwefeew','wfrwfr','f',3213,321,'fwerf','logo-faculty-biology.png','2022-04-27 01:22:27',0),(15,'Інститут підприємництва та перспективних технологій','Інститут підприємництва та перспективних технологій — це навчально-науковий підрозділ університету утворений наказом Львівської політехніки від 28.05.2010 р. № 83-10.','2017-01-01','ippt.dept@lpnu.ua','https://lpnu.ua/ippt','вул. Горбачевського 18, 32-й н.к., кім. 205','(032) 258-20-27',24.0092416,49.8285246,'ІППТ','logo-faculty-biology.png','2022-04-27 19:47:04',1);
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `IDX_6DC044C53B5A08D7` (`speciality_id`),
  CONSTRAINT `FK_6DC044C53B5A08D7` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,'KB-29',NULL,1),(2,'ergger',NULL,0);
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) NOT NULL,
  `coeff` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark`
--

LOCK TABLES `mark` WRITE;
/*!40000 ALTER TABLE `mark` DISABLE KEYS */;
INSERT INTO `mark` VALUES (1,'8',100123,0),(2,'123',123,0),(3,'123',321,0),(4,'123',213,0),(5,'1',123123,0),(6,'1',123123213,0),(7,'1',12,0),(8,'1',312321312,0),(9,'1',21123123,0),(10,'1',213,0),(11,'1',12,0),(12,'1',12,12321),(13,'1',12,12312),(14,'1',3,1),(15,'Українська мова',100,0.35),(16,'Метматика',115,0.4),(17,'Англійська мова',100,0.25),(18,'Українська мова',100,0.35),(19,'Метматика',115,0.45),(20,'Німецька мова',100,0.25),(21,'Хімія',100,0.1);
/*!40000 ALTER TABLE `mark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speciality`
--

DROP TABLE IF EXISTS `speciality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speciality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `IDX_F3D7A08E680CAB68` (`faculty_id`),
  CONSTRAINT `FK_F3D7A08E680CAB68` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speciality`
--

LOCK TABLES `speciality` WRITE;
/*!40000 ALTER TABLE `speciality` DISABLE KEYS */;
INSERT INTO `speciality` VALUES (1,3,'4ewtt','t433t','ij',0),(2,3,'31','123','123',0),(3,3,'31','123','123',0),(4,3,'123','123','123',0),(5,3,'123','213','321',0),(6,7,'123','213','321',0),(7,3,'123','123','123',0),(8,3,'123','123','321',0),(9,3,'Кібербезека','За час навчання наші студенти активно займаються науковою діяльністю, при кафедрах діє Студентське науково-технічне Товариство захисту інформації, студенти беруть участь у міжнародних програмах співпраці...','125',1),(10,13,'Комп\'ютерні науки','За час навчання наші студенти активно займаються науковою діяльністю, при кафедрах діє Студентське науково-технічне Товариство захисту інформації, студенти беруть участь у міжнародних програмах співпраці...','122',1);
/*!40000 ALTER TABLE `speciality` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speciality_mark`
--

DROP TABLE IF EXISTS `speciality_mark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speciality_mark` (
  `speciality_id` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL,
  PRIMARY KEY (`speciality_id`,`mark_id`),
  KEY `IDX_CFBB04573B5A08D7` (`speciality_id`),
  KEY `IDX_CFBB04574290F12B` (`mark_id`),
  CONSTRAINT `FK_CFBB04573B5A08D7` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CFBB04574290F12B` FOREIGN KEY (`mark_id`) REFERENCES `mark` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speciality_mark`
--

LOCK TABLES `speciality_mark` WRITE;
/*!40000 ALTER TABLE `speciality_mark` DISABLE KEYS */;
INSERT INTO `speciality_mark` VALUES (2,1),(2,7),(3,2),(3,3),(3,4),(7,5),(7,6),(7,8),(7,9),(7,10),(7,11),(8,12),(8,13),(8,14),(9,15),(9,16),(9,17),(9,21),(10,18),(10,19),(10,20);
/*!40000 ALTER TABLE `speciality_mark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `family_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_group_id` int(11) DEFAULT NULL,
  `mid_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `IDX_B723AF334DDF95DC` (`student_group_id`),
  CONSTRAINT `FK_B723AF334DDF95DC` FOREIGN KEY (`student_group_id`) REFERENCES `group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Хевпа','Дмитро','khevpa.dmytro@gmail.com','Львів','2017-10-07','В',1,'Ярославович',1),(2,'Dima','Xalva','','','2022-04-03','',NULL,'',0),(3,'erg','greg','regergre','regrege','2018-01-01','ergergerg',NULL,'',0),(4,'erg','greg','regergre','regrege','2018-01-01','ergergerg',NULL,'',0),(5,'frew','fwefewf','ewfw','efwfwef','2019-03-04','werfwefr',NULL,'',0),(6,'frew','fwefewf','ewfw','efwfwef','2019-03-04','werfwefr',NULL,'',0),(7,'frew','fwefewf','ewfw','efwfwef','2019-03-04','werfwefr',NULL,'',0),(8,'frew','fwefewf','ewfw','efwfwef','2019-03-04','werfwefr',NULL,'',0);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-26 11:43:50
