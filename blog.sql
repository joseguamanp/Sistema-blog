CREATE DATABASE  IF NOT EXISTS `db_blog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_blog`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_blog
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias_user_idx` (`id_usuario`),
  CONSTRAINT `fk_categorias_user` FOREIGN KEY (`id_usuario`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'LIBROS','2019-08-18','2019-08-18','2019-08-18',1),(2,'REVISTAS','2019-08-18','2019-08-18',NULL,1),(3,'HISTORIETAS','2019-08-18','2019-08-18','2019-08-18',1);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_entradas` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'gracias por la sinopsis del libro. me agrado. buen argumento.',2,'admin',NULL,'admin@admin.com',NULL,'2019-08-18','2019-08-18',NULL),(2,'gracias compañero.',2,'practica',NULL,'admin@admin.com',NULL,'2019-08-18','2019-08-18',NULL),(3,'me gusto',4,'LIBRO',NULL,'admin@admin.com',NULL,'2019-08-31','2019-08-31',NULL),(4,'me gusto',4,'LIBRO',NULL,'admin@admin.com',NULL,'2019-08-31','2019-08-31',NULL),(5,'gracias',2,'LIBRO',NULL,'admin@admin.com',NULL,'2019-08-31','2019-08-31',NULL);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entradas`
--

DROP TABLE IF EXISTS `entradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_entrada` varchar(45) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `imagen_destacada` mediumtext DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entradas`
--

LOCK TABLES `entradas` WRITE;
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
INSERT INTO `entradas` VALUES (1,'MI PRIMER BLOG','<h2>&iquest;Qu&eacute; es Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>',NULL,NULL,'2019-08-18','2019-08-18','2019-08-18',1),(2,'DAR Y RECIBIR','<h1>Libro de dar y recibir</h1>\r\n<p>Editorial:&nbsp;<a href=\"https://www.planetadelibros.com/editorial/gestion-2000/13\">Gesti&oacute;n 2000</a></p>\r\n<p>Tem&aacute;tica:&nbsp;<a href=\"https://www.planetadelibros.com/libros/libros-de-empresa/00004\">Empresa</a>&nbsp;|&nbsp;<a href=\"https://www.planetadelibros.com/libros/gestion-y-liderazgo-management/00004/00033\">Gesti&oacute;n y liderazgo / Management</a></p>\r\n<div class=\"coleccions\">Colecci&oacute;n:&nbsp;<a href=\"https://www.planetadelibros.com/coleccion-marketing-y-ventas/GMKT_VENTA\">MARKETING Y VENTAS</a></div>\r\n<div class=\"traductor\">Traductor: Isabel Murillo Fort</div>\r\n<div id=\"num_pagines\">N&uacute;mero de p&aacute;ginas: 400</div>\r\n<div>Dicen que la gente de &eacute;xito tiene tres cosas en com&uacute;n: motivaci&oacute;n, capacidad y oportunidad. Si queremos alcanzar el &eacute;xito, necesitaremos adem&aacute;s trabajo, talento y suerte. Hay, sin embargo, un cuarto ingrediente, un ingrediente cr&iacute;tico pero que a menudo pasa desapercibido: el &eacute;xito depende en gran parte de c&oacute;mo interactuamos con los dem&aacute;s.</div>',NULL,NULL,'2019-08-18','2019-08-18',NULL,1),(3,'GOOGLE','<p><img src=\"data:image/png;base64,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\" alt=\"\" width=\"684\" height=\"266\" /></p>\r\n<h1 style=\"text-align: center;\"><strong>Google LLC</strong>&nbsp;</h1>\r\n<p style=\"text-align: justify;\">es una compa&ntilde;&iacute;a principal subsidiaria de la multinacional estadounidense&nbsp;<a title=\"Alphabet Inc.\" href=\"https://es.wikipedia.org/wiki/Alphabet_Inc.\">Alphabet Inc.</a>, cuya especializaci&oacute;n son los productos y servicios relacionados con&nbsp;<a title=\"Internet\" href=\"https://es.wikipedia.org/wiki/Internet\">Internet</a>,&nbsp;<a title=\"Software\" href=\"https://es.wikipedia.org/wiki/Software\">software</a>,&nbsp;<a title=\"Electr&oacute;nica de consumo\" href=\"https://es.wikipedia.org/wiki/Electr%C3%B3nica_de_consumo\">dispositivos electr&oacute;nicos</a>&nbsp;y otras tecnolog&iacute;as. El principal producto de Google es el&nbsp;<a title=\"Buscador de Google\" href=\"https://es.wikipedia.org/wiki/Buscador_de_Google\">motor de b&uacute;squeda</a>&nbsp;de contenido en Internet, del mismo nombre, aunque ofrece tambi&eacute;n otros productos y servicios como el&nbsp;<a title=\"Correo electr&oacute;nico\" href=\"https://es.wikipedia.org/wiki/Correo_electr%C3%B3nico\">correo electr&oacute;nico</a>&nbsp;llamado&nbsp;<a title=\"Gmail\" href=\"https://es.wikipedia.org/wiki/Gmail\">Gmail</a>, sus servicios de mapas&nbsp;<a title=\"Google Maps\" href=\"https://es.wikipedia.org/wiki/Google_Maps\">Google Maps</a>,&nbsp;<a title=\"Google Street View\" href=\"https://es.wikipedia.org/wiki/Google_Street_View\">Google Street View</a>&nbsp;y&nbsp;<a title=\"Google Earth\" href=\"https://es.wikipedia.org/wiki/Google_Earth\">Google Earth</a>, el sitio web de v&iacute;deos&nbsp;<a title=\"YouTube\" href=\"https://es.wikipedia.org/wiki/YouTube\">YouTube</a>&nbsp;y otras utilidades web como&nbsp;<a title=\"Google Libros\" href=\"https://es.wikipedia.org/wiki/Google_Libros\">Google Libros</a>&nbsp;o&nbsp;<a title=\"Google Noticias\" href=\"https://es.wikipedia.org/wiki/Google_Noticias\">Google Noticias</a>,&nbsp;<a title=\"Google Chrome\" href=\"https://es.wikipedia.org/wiki/Google_Chrome\">Google Chrome</a>&nbsp;y la&nbsp;<a title=\"Red social\" href=\"https://es.wikipedia.org/wiki/Red_social\">red social</a>&nbsp;<a title=\"Google+\" href=\"https://es.wikipedia.org/wiki/Google%2B\">Google+</a>&nbsp;este &uacute;ltimo sacado fuera de l&iacute;nea en el primer trimestre de 2019.</p>',NULL,NULL,'2019-08-21','2019-08-21',NULL,1),(4,'MI PRIMERA ENTRADA','<p><img src=\"https://ugc.kn3.net/i/760x/http://4.bp.blogspot.com/-5RfuHZIKGoM/UAo2wayORQI/AAAAAAAAEdI/ni74NB5KnT0/s1600/n5.jpg\" alt=\"naruto \" width=\"759\" height=\"281\" /></p>\r\n<h2>&iquest;Qu&eacute; es Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen</p>',NULL,NULL,'2019-08-31','2019-08-31',NULL,2),(5,'NARUTO','<p><img src=\"https://ugc.kn3.net/i/760x/http://4.bp.blogspot.com/-_YF8o_tvHt4/UAo2vpv5ScI/AAAAAAAAEcw/aXciNsH3nBE/s1600/n3.jpg\" alt=\"\" width=\"759\" height=\"281\" /></p>\r\n<h2>Por qu&eacute; lo usamos?</h2>\r\n<p>Es un hecho establecido hace demasiado tiempo que un lector se distraer&aacute; con el contenido del texto de un sitio mientras que mira su dise&ntilde;o. El punto de usar Lorem Ipsum es que tiene una distribuci&oacute;n&nbsp;</p>',NULL,NULL,'2019-08-31','2019-08-31',NULL,2),(6,'DETECTIVE CONAN','<p><img src=\"http://3.bp.blogspot.com/-kkkxLaebh3A/Ue9GSkhvs3I/AAAAAAAABE0/FRBFHNHs0qM/s1600/F46.Conan.jpeg\" alt=\"\" width=\"1173\" height=\"437\" /></p>\r\n<h2>&iquest;D&oacute;nde puedo conseguirlo?</h2>\r\n<p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayor&iacute;a sufri&oacute; alteraciones en alguna manera, ya sea porque se le agreg&oacute; humor, o palabras aleatorias que no parecen ni un poco cre&iacute;bles</p>',NULL,NULL,'2019-08-31','2019-08-31','2019-08-31',2);
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'joseguaman','arturoguaman96@gmail.com',NULL,'$2y$10$Bac2SmtuLqX7oZnDfKngv.fGXWFYVfJM9ND8SZYyEB3p5P29WZoXu',NULL,'2019-08-18 10:23:47','2019-08-18 10:23:47'),(2,'usuario1','usuario@usuario.com',NULL,'$2y$10$qbrOpvkbbNoUuqWCPkrzjeXwoQrJIlKnqBhyN/lHLsYdm2o29jUGu',NULL,'2019-08-31 19:22:51','2019-08-31 19:22:51');
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

-- Dump completed on 2019-08-31 10:11:23
