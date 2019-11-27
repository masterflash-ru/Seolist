<?php

namespace Mf\Seolist;

use Mf\Migrations\AbstractMigration;
use Mf\Migrations\MigrationInterface;
use Zend\Db\Sql\Ddl;

class Version20191104162943 extends AbstractMigration implements MigrationInterface
{
    public static $description = "SEO list module";

    public function up($schema, $adapter)
    {
        $this->mysql_add_create_table=" ENGINE=MyIsam DEFAULT CHARSET=utf8";
        $table = new Ddl\CreateTable("seolist");
        $table->addColumn(new Ddl\Column\Integer('id',false,null,["AUTO_INCREMENT"=>true]));
        $table->addColumn(new Ddl\Column\Char('locale', 20,false,null,["COMMENT"=>"Локаль"]));
        $table->addColumn(new Ddl\Column\Char('sysname', 50,false,null,["COMMENT"=>"Системное имя элемента"]));
        $table->addColumn(new Ddl\Column\Char('name', 50,false,null,["COMMENT"=>"Имя элемента в админке"]));
        $table->addColumn(new Ddl\Column\Char('label', 255,false,null,["COMMENT"=>"Текст элемента"]));
        $table->addColumn(new Ddl\Column\Char('title', 255,false));
        $table->addColumn(new Ddl\Column\Char('keywords', 255,false));
        $table->addColumn(new Ddl\Column\Text('description', null,false));

        $table->addConstraint(
            new Ddl\Constraint\PrimaryKey(['id'])
        );
        $table->addConstraint(
            new Ddl\Index\Index(['locale'],'locale')
        )->addConstraint(
            new Ddl\Index\Index(['sysname'],'sysname')
        );
        $this->addSql($table);
    }

    public function down($schema, $adapter)
    {
        $drop = new Ddl\DropTable('seolist');
        $this->addSql($drop);
    }
}
