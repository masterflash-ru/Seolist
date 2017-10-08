-- MySQL dump 10.13  Distrib 5.6.37, for FreeBSD11.0 (i386)
--
-- Host: localhost    Database: simba4
-- ------------------------------------------------------
-- Server version	5.6.37

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

delete from design_tables where table_name='seolist';
delete from design_tables where table_name='seolist_text';

INSERT INTO `design_tables_text_interfase` (`language`, `table_type`, `interface_name`, `item_name`, `text`) VALUES 
  ('ru_RU', 0, 'seolist', 'caption_col_title', 'Заголовок'),
  ('ru_RU', 0, 'seolist', 'caption_col_keywords', 'Ключевые слова'),
  ('ru_RU', 0, 'seolist', 'caption_col_name', 'Имя (описание)'),
  ('ru_RU', 0, 'seolist', 'caption_col_1', 'Операция'),
  ('ru_RU', 0, 'seolist', 'caption_col_description', 'description'),
  ('ru_RU', 0, 'seolist', 'caption0', 'SEO различных списков'),
  ('ru_RU', 0, 'seolist', 'button2', 'Сохранить,Удалить'),
  ('ru_RU', 0, 'seolist', 'button1', 'Добавить'),
  ('ru_RU', 0, 'seolist', 'caption_col_sysname', 'системное имя'),
  ('ru_RU', 0, 'seolist', 'caption_dop_0', 'Locale:');

INSERT INTO `design_tables` (`interface_name`, `table_name`, `table_type`, `col_name`, `caption_style`, `row_type`, `col_por`, `pole_spisok_sql`, `pole_global_const`, `pole_prop`, `pole_type`, `pole_style`, `pole_name`, `default_sql`, `functions_befo`, `functions_after`, `functions_befo_out`, `functions_befo_del`, `properties`, `value`, `validator`, `sort_item_flag`, `col_function_array`) VALUES 
  ('seolist', 'seolist', 0, '', '', 0, 0, 'select * from seolist where locale=''$pole_dop0''', '20', '1,1,0,0', 'seolist', '0', 'id', 'delete from seolist  where id=$id', '', '', '', '', '', 0x613A323A7B733A32343A22666F726D5F656C656D656E74735F6E65775F7265636F7264223B733A313A2230223B733A32343A22666F726D5F656C656D656E74735F6A6D705F7265636F7264223B733A313A2230223B7D, 'seolist', 1, ''),
  ('seolist', 'seolist', 0, '', '', 1, 0, '', '', 'onChange=this.form.submit()', '4', '', '', '', '', '', '\\Seolist\\Lib\\Func\\GetLocales', '', 'a:2:{i:0;s:1:\"0\";i:1;s:1:\"0\";}', '', '', 0, ''),
  ('seolist', 'seolist', 0, 'title', '', 2, 3, '', '', 'cols=40 rows=4', '3', '', 'title', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'title', '', 3, 0, '', '', 'cols=40 rows=4', '3', '2', 'title', '', '', '', '', '', '', '', '', 0, ''),
  ('seolist', 'seolist', 0, 'keywords', '', 2, 4, '', '', 'cols=40 rows=4', '3', '', 'keywords', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'keywords', '', 3, 0, '', '', 'cols=40 rows=4', '3', '2', 'keywords', '', '', '', '', '', '', '', '', 0, ''),
  ('seolist', 'seolist', 0, '1', '', 3, 0, '', '', ',', '17', '', 'save,del', '', '', '', '', '', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"0\";i:2;s:33:\"Сохранить,Удалить\";i:3;s:1:\"0\";}', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, '1', '', 2, 15, '', '', '', '19', '', 'save', '', '', '', '', '', 'a:2:{i:0;s:1:\"1\";i:1;s:16:\"Добавить\";}', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'name', '', 2, 1, '', '', '', '2', '', 'name', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'name', '', 3, 0, '', '', '', '2', '2', 'name', '', '', '', '', '', '', '', 'N;', 0, ''),
  ('seolist', 'seolist', 0, 'locale', '', 2, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'description', '', 2, 5, '', '', 'cols=40 rows=4', '3', '', 'description', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'description', '', 3, 0, '', '', 'cols=40 rows=4', '3', '2', 'description', '', '', '', '', '', '', '', '', 0, ''),
  ('seolist', 'seolist', 0, 'sysname', '', 2, 2, '', '', '', '2', '', 'sysname', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'sysname', '', 3, 0, '', '', '', '2', '', 'sysname', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;'),
  ('seolist', 'seolist', 0, 'locale', '', 3, 0, '', '', '', '0', '', 'pole_dop0', '', '', '', '', '', 'N;', '', 'N;', 0, 'N;');




--
-- Table structure for table `seolist`
--

DROP TABLE IF EXISTS `seolist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` char(20) NOT NULL COMMENT 'Локаль',
  `sysname` char(50) DEFAULT NULL COMMENT 'системное имя',
  `name` varchar(127) NOT NULL DEFAULT '' COMMENT 'имя понятное нам',
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `sysname` (`sysname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Заголовки и ключевые слова';

/*!40101 SET character_set_client = @saved_cs_client */;



--
-- Dumping routines for database 'simba4'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

