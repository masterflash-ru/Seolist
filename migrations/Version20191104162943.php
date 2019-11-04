<?php

namespace Mf\Seolist;

use Mf\Migrations\AbstractMigration;
use Mf\Migrations\MigrationInterface;

class Version20191104162943 extends AbstractMigration implements MigrationInterface
{
    public static $description = "Migration description";

    public function up($schema)
    {
        switch ($this->db_type){
            case "mysql":{
                $this->addSql("CREATE TABLE `seolist` (
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
                ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Заголовки и ключевые слова'");
                break;
            }
            default:{
                throw new \Exception("the database {$this->db_type} is not supported !");
            }
        }
    }

    public function down($schema)
    {
        //throw new \RuntimeException('No way to go down!');
        switch ($this->db_type){
            case "mysql":{
                $this->addSql("CDROP TABLE `seolist`");
                break;
            }
            default:{
                throw new \Exception("the database {$this->db_type} is not supported !");
            }
        }
    }
}
