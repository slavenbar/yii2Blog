-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: post_yii
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Спортивный автомобиль','Спортивный автомобиль или спорткар — условно-обобщённое наименование широкого класса двух-, редко четырёхместных легковых автомобилей, имеющих более высокие скоростные качества и соответственно повышенную мощность мотора и низкую посадку кузова.','7a45ff5307e40000d1b0bafb1512c835.jpg','2022-10-25',1),(3,'Ура каниулы!','Студе́нт — учащийся высшего, в некоторых государствах и странах и среднего учебного заведения. В Древнем Риме и в Средние века студентами назывались любые лица, занятые процессом познания. С основанием в XII веке университетов термин стал употребляться для обозначения обучающихся и преподающих в них лиц; после введения учёных званий для преподавателей — только учащихся.','af0c87db8075883021bdc4b53fe04d3e.jpg','2010-10-10',2),(4,'Природа в горах','Го́ры — сильно расчленённые части суши, значительно, на 500 метров и более, приподнятые над прилегающими равнинами. От равнин горы отделены либо напрямую подножием склона, либо предгорьями. Горы могут быть линейно вытянутыми или дугообразными с параллельным, решётчатым, радиальным, перистым, кулисным или ветвистым рисунком расчленения. Различают высокогорья, среднегорья и низкогорья.','a6e64caf7105d6bfca8e429ab6b4814a.jpg','2022-10-25',3),(5,'Насекомые','Насеко́мые — класс беспозвоночных членистоногих животных. Согласно традиционной классификации, вместе с многоножками относятся к подтипу трахейнодышащих. Название класса происходит от глагола «сечь» и представляет собой кальку с фр. insecte, означающего «животное с насечками».','82d7d5a66c18e667bb6b750d34788feb.jpg','2022-10-25',4),(6,'Дикие животные','Живо́тные — традиционно выделяемая категория организмов, в настоящее время рассматриваемая в качестве биологического царства. Животные являются основным объектом изучения зоологии. Животные относятся к эукариотам. Классическими признаками животных считаются: гетеротрофность и способность активно передвигаться','c5fef370287b6a6465040872c6f89bde.jpg','2022-10-25',5),(7,'Домашние животные','Дома́шние живо́тные — животные, которые были одомашнены человеком разумным и которых он содержит, предоставляя им кров и пищу. Они приносят ему пользу либо как источник материальных благ и услуг, либо как животные-компаньоны, скрашивающие его досуг. Большинство домашних животных легко размножаются. Проводя селекцию, человек может контролировать их размножение и признаки, которые они передают своему потомству.','f064fe36dcfd390c1097f162a2e68155.jpg','2022-10-25',6),(8,'Спорт','Спорт во всех проявлениях, свежие новости российского и мирового спорта, аналитика, интервью спортсменов, статистика, фото и видео. Блоги звездных спортсменов и тренеров, сообщества пользователей.','96e8dfb4aa5ce3653b79541738037aae.jpg','2022-10-25',7);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1667048448),('m221029_093212_create_user_table',1667048451),('m221029_093225_create_article_table',1667048451);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'user2','guest@bk.co','12345',0),(2,NULL,'gh@nm.co','123',0),(3,'user3','fg@mn.ru','123',0),(4,'admin','admin@bk.co','admin',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-01 22:59:24
