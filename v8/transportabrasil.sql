-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: transportabrasil
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `destinatario`
--

DROP TABLE IF EXISTS `destinatario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinatario` (
  `iddestinatario` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(150) NOT NULL,
  `cpf` bigint(11) unsigned zerofill DEFAULT NULL,
  `cep` int(8) unsigned zerofill DEFAULT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `telefone` bigint(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`iddestinatario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatario`
--

LOCK TABLES `destinatario` WRITE;
/*!40000 ALTER TABLE `destinatario` DISABLE KEYS */;
INSERT INTO `destinatario` VALUES (1,'Estev├úo',32544876511,12345678,'Avenida Sete','324','Centro','Distrito Federal','Bras├¡lia',61998477454,'estevao@email.net'),(2,'Carlos',23423423401,45124456,'Rodovia Bahia','4345','Centro','Roraima','Boa Vista',95985785612,'carlos@email.com'),(3,'Fernando',75315985251,65742645,'Travessa Amazonas','22-b','Centro','Acre','Rio Branco',68956483574,'fernando@email.com'),(4,'Roberto',42569899412,24670912,'Rua 7 de Setembro','232f','Centro','Distrito Federal','Bras├¡lia',61923574012,'roberto@email.com.br'),(5,'Abra├úo',25845675119,32452452,'Rua Raul Seixas','5553','Centro','Bahia','Salvador',71985743257,'abraao@email.edu.br');
/*!40000 ALTER TABLE `destinatario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrega`
--

DROP TABLE IF EXISTS `entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entrega` (
  `identrega` int(11) NOT NULL AUTO_INCREMENT,
  `idenviopk` int(11) NOT NULL,
  `statusenvio` varchar(30) NOT NULL,
  PRIMARY KEY (`identrega`),
  KEY `idenviopk` (`idenviopk`),
  CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`idenviopk`) REFERENCES `envio` (`idenvio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrega`
--

LOCK TABLES `entrega` WRITE;
/*!40000 ALTER TABLE `entrega` DISABLE KEYS */;
INSERT INTO `entrega` VALUES (1,5,'Chegou na unidade de destino'),(2,1,'Entregue'),(3,4,'Postado'),(4,2,'Saiu para a entrega'),(5,3,'Voltando para o remetente');
/*!40000 ALTER TABLE `entrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envio`
--

DROP TABLE IF EXISTS `envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `envio` (
  `idenvio` int(11) NOT NULL AUTO_INCREMENT,
  `idremetentepk` int(11) NOT NULL,
  `idmercadoriapk` int(11) NOT NULL,
  `iddestinatariopk` int(11) NOT NULL,
  `tipoenvio` varchar(10) NOT NULL,
  PRIMARY KEY (`idenvio`),
  KEY `idremetentepk` (`idremetentepk`),
  KEY `idmercadoriapk` (`idmercadoriapk`),
  KEY `iddestinatariopk` (`iddestinatariopk`),
  CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`idremetentepk`) REFERENCES `remetente` (`idremetente`),
  CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`idmercadoriapk`) REFERENCES `mercadoria` (`idmercadoria`),
  CONSTRAINT `envio_ibfk_3` FOREIGN KEY (`iddestinatariopk`) REFERENCES `destinatario` (`iddestinatario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envio`
--

LOCK TABLES `envio` WRITE;
/*!40000 ALTER TABLE `envio` DISABLE KEYS */;
INSERT INTO `envio` VALUES (1,1,1,1,'Normal'),(2,2,2,2,'Expresso'),(3,3,3,3,'Expresso'),(4,4,4,4,'Normal'),(5,5,5,5,'Expresso');
/*!40000 ALTER TABLE `envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupos` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'usuario'),(2,'administrador');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercadoria`
--

DROP TABLE IF EXISTS `mercadoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mercadoria` (
  `idmercadoria` int(11) NOT NULL AUTO_INCREMENT,
  `idremetentepk` int(11) NOT NULL,
  `mercadoria` varchar(150) NOT NULL,
  `peso` float(7,2) DEFAULT NULL,
  `fragil` varchar(4) NOT NULL,
  PRIMARY KEY (`idmercadoria`),
  KEY `idremetentepk` (`idremetentepk`),
  CONSTRAINT `mercadoria_ibfk_1` FOREIGN KEY (`idremetentepk`) REFERENCES `remetente` (`idremetente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercadoria`
--

LOCK TABLES `mercadoria` WRITE;
/*!40000 ALTER TABLE `mercadoria` DISABLE KEYS */;
INSERT INTO `mercadoria` VALUES (1,1,'Espelho',0.60,'Sim'),(2,2,'M4 Mechanical Shock',3.00,'N├úo'),(3,3,'300 Reis FC',0.10,'Sim'),(4,4,'RTX 3090',1.40,'Sim'),(5,5,'Xiaomi Mi 9t Pro',0.20,'Sim');
/*!40000 ALTER TABLE `mercadoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modulos` (
  `idmodulo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `diretorio` varchar(100) NOT NULL,
  PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES (1,'Modulos da categoria Rementente','remetente'),(2,'Modulos da categoria Destinat├írio','destinatario'),(3,'Modulos da categoria Mercadoria','mercadoria'),(4,'Modulos da categoria Envio','envio'),(5,'Modulos da categoria Entrega','entrega'),(6,'Modulos da categoria Permissao','permissao');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operacoes`
--

DROP TABLE IF EXISTS `operacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operacoes` (
  `idoperacao` int(11) NOT NULL AUTO_INCREMENT,
  `idgrupofk` int(11) DEFAULT NULL,
  `idmodulofk` int(11) DEFAULT NULL,
  `idpermissaofk` int(11) DEFAULT NULL,
  PRIMARY KEY (`idoperacao`),
  KEY `idgrupopk` (`idgrupofk`),
  KEY `idmodulopk` (`idmodulofk`),
  KEY `idpermissaopk` (`idpermissaofk`),
  CONSTRAINT `operacoes_ibfk_1` FOREIGN KEY (`idgrupofk`) REFERENCES `grupos` (`idgrupo`),
  CONSTRAINT `operacoes_ibfk_2` FOREIGN KEY (`idmodulofk`) REFERENCES `modulos` (`idmodulo`),
  CONSTRAINT `operacoes_ibfk_3` FOREIGN KEY (`idpermissaofk`) REFERENCES `permissao` (`idpermissao`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operacoes`
--

LOCK TABLES `operacoes` WRITE;
/*!40000 ALTER TABLE `operacoes` DISABLE KEYS */;
INSERT INTO `operacoes` VALUES (1,2,1,1),(2,2,1,2),(3,2,1,3),(4,2,1,4),(5,2,2,1),(6,2,2,2),(7,2,2,3),(8,2,2,4),(9,2,3,1),(10,2,3,2),(11,2,3,3),(12,2,3,4),(13,2,4,1),(14,2,4,2),(15,2,4,3),(16,2,4,4),(17,2,5,1),(18,2,5,2),(19,2,5,3),(20,2,5,4),(22,2,6,1),(23,2,6,2),(24,2,6,3),(25,2,6,4),(26,2,6,4),(27,2,6,4),(28,2,6,4),(29,2,1,1),(30,2,1,2),(31,2,1,3),(32,2,2,1),(33,2,2,2),(34,2,2,3),(35,2,2,4),(36,2,3,1),(37,2,3,2),(38,2,3,3),(39,2,3,4),(40,2,4,1),(41,2,4,2),(42,2,4,3),(43,2,4,4),(44,2,5,1),(45,2,5,2),(46,2,5,3),(47,2,5,4),(48,2,6,1),(49,2,6,2),(50,2,6,3),(51,2,6,4),(52,2,1,1),(53,2,1,2),(54,2,1,3),(55,2,2,1),(56,2,2,2),(57,2,2,3),(58,2,2,4),(59,2,3,1),(60,2,3,2),(61,2,3,3),(62,2,3,4),(63,2,4,1),(64,2,4,2),(65,2,4,3),(66,2,4,4),(67,2,5,1),(68,2,5,2),(69,2,5,3),(70,2,5,4),(71,2,6,1),(72,2,6,2),(73,2,6,3),(74,2,6,4),(75,2,1,1),(76,2,1,2),(77,2,1,3),(78,2,2,1),(79,2,2,2),(80,2,2,3),(81,2,2,4),(82,2,3,1),(83,2,3,2),(84,2,3,3),(85,2,3,4),(86,2,4,1),(87,2,4,2),(88,2,4,3),(89,2,4,4),(90,2,5,1),(91,2,5,2),(92,2,5,3),(93,2,5,4),(94,2,6,1),(95,2,6,2),(96,2,6,3),(97,2,6,4),(98,2,1,1),(99,2,1,2),(100,2,1,3),(101,2,2,1),(102,2,2,2),(103,2,2,3),(104,2,2,4),(105,2,3,1),(106,2,3,2),(107,2,3,3),(108,2,3,4),(109,2,4,1),(110,2,4,2),(111,2,4,3),(112,2,4,4),(113,2,5,1),(114,2,5,2),(115,2,5,3),(116,2,5,4),(117,2,6,1),(118,2,6,2),(119,2,6,3),(120,2,6,4),(121,2,1,1),(122,2,1,2),(123,2,1,3),(124,2,2,1),(125,2,2,2),(126,2,2,3),(127,2,2,4),(128,2,3,1),(129,2,3,2),(130,2,3,3),(131,2,3,4),(132,2,4,1),(133,2,4,2),(134,2,4,3),(135,2,4,4),(136,2,5,1),(137,2,5,2),(138,2,5,3),(139,2,5,4),(140,2,6,1),(141,2,6,2),(142,2,6,3),(143,2,6,4),(144,2,1,1),(145,2,1,2),(146,2,1,3),(147,2,2,1),(148,2,2,2),(149,2,2,3),(150,2,2,4),(151,2,3,1),(152,2,3,2),(153,2,3,3),(154,2,3,4),(155,2,4,1),(156,2,4,2),(157,2,4,3),(158,2,4,4),(159,2,5,1),(160,2,5,2),(161,2,5,3),(162,2,5,4),(163,2,6,1),(164,2,6,2),(165,2,6,3),(166,2,6,4),(167,2,6,4),(168,2,6,4),(169,2,6,4),(170,2,6,4),(171,2,6,4),(172,2,6,4),(173,2,6,4),(174,2,6,4),(175,2,6,4),(176,2,6,4),(177,2,6,4),(178,2,6,4),(179,2,6,4),(180,2,6,4);
/*!40000 ALTER TABLE `operacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissao`
--

DROP TABLE IF EXISTS `permissao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissao` (
  `idpermissao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `acao` varchar(100) NOT NULL,
  PRIMARY KEY (`idpermissao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissao`
--

LOCK TABLES `permissao` WRITE;
/*!40000 ALTER TABLE `permissao` DISABLE KEYS */;
INSERT INTO `permissao` VALUES (1,'Modulo Adicionar','adicionar'),(2,'Modulo Listar','listar'),(3,'Modulo Excluir','excluir'),(4,'Modulo Editar','editar');
/*!40000 ALTER TABLE `permissao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `remetente`
--

DROP TABLE IF EXISTS `remetente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `remetente` (
  `idremetente` int(11) NOT NULL AUTO_INCREMENT,
  `remetente` varchar(150) NOT NULL,
  `cpfcnpj` bigint(14) unsigned zerofill DEFAULT NULL,
  `cep` int(8) unsigned zerofill DEFAULT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `telefone` bigint(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idremetente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remetente`
--

LOCK TABLES `remetente` WRITE;
/*!40000 ALTER TABLE `remetente` DISABLE KEYS */;
INSERT INTO `remetente` VALUES (1,'Eduardo',00012345678910,02458642,'Av. Campos','30','Para├¡so','S├úo Paulo','S├úo Paulo',11993429919,'eduardo@email.com'),(2,'AirGuns',12345678000001,55255444,'Travessa Bela Vista','1456','Horizonte','Paran├í','Curitiba',46984130024,'contato@airguns.com'),(3,'NumisCoin',58956000045851,68903430,'Rua Professor Caramuru','358','Zer├úo','Amap├í','Macap├í',96981425060,'moedas@NumisCoin.com'),(4,'Andr├®',00042569899412,42850000,'Rua Maranh├úo','58-A','Cristo Rei','Bahia','Dias D\'avila',71997020475,'andre@email.com'),(5,'Renan',00065201244801,98547422,'Av. 7 de Setembro','9984','Centro','Rio de Janeiro','Rio de Janeiro',21932542514,'renan@email.com.br');
/*!40000 ALTER TABLE `remetente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `idgrupofk` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idgrupofk` (`idgrupofk`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idgrupofk`) REFERENCES `grupos` (`idgrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','admin',2),(2,'user','user',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-07 21:27:31
