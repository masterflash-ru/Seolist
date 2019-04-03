<?php
namespace Mf\Seolist;

use Admin\Service\JqGrid\ColModelHelper;
use Admin\Service\JqGrid\NavGridHelper;
use Zend\Json\Expr;



return [
        /*jqgrid - сетка*/
        "type" => "ijqgrid",
        "description"=>"Редактирование SEO для списков элементов",
        "options" => [
            "container" => "seolist",
            "caption" => "",
            "podval" => "",
            
            
            /*все что касается чтения в таблицу*/
            "read"=>[
                "db"=>[//плагин выборки из базы
                    "sql"=>"select * from seolist",
                    "PrimaryKey"=>"id",
                ],
            ],
            /*редактирование*/
            "edit"=>[
                "cache" =>[
                    "tags"=>["seolist","Seolist"],
                    "keys"=>["seolist","Seolist"],
                ],

                "db"=>[//плагин выборки из базы
                    "sql"=>"select * from seolist",
                    "PrimaryKey"=>"id",
                ],

            ],
            "add"=>[
                "db"=>[//плагин выборки из базы
                    "sql"=>"select * from seolist",
                    "PrimaryKey"=>"id",
                ],
            ],
            //удаление записи
            "del"=>[
                "cache" =>[
                    "tags"=>["seolist","Seolist"],
                    "keys"=>["seolist","Seolist"],
                ],
                "db"=>[//плагин выборки из базы
                    "sql"=>"select * from seolist",
                    "PrimaryKey"=>"id",
                ],
            ],
            /*внешний вид*/
            "layout"=>[
                "caption" => "Редактирование SEO для списков элементов",
                "height" => "auto",
                //"width" => "1100px",
                "rowNum" => 10,
                "rowList" => [10,20,30],
                "sortname" => "name",
                "sortorder" => "asc",
                "viewrecords" => true,
                "autoencode" => false,
                //"autowidth"=>true,
                "hidegrid" => false,
                "toppager" => true,
                "rownumbers" => false,
                "navgrid" => [
                    "button" => NavGridHelper::Button(["search"=>false]),
                    "editOptions"=>NavGridHelper::editOptions(),
                    "addOptions"=>NavGridHelper::addOptions(),
                    "delOptions"=>NavGridHelper::delOptions(),
                ],
                "colModel" => [

                    ColModelHelper::text("name",["label"=>"Имя элемента","width"=>300,"editoptions" => ["size"=>120 ]]),
                    ColModelHelper::select("locale",
                                        ["label"=>"Язык",
                                         "editable"=>true,
                                         "width"=>80,
                                         "plugins"=>[
                                             "colModel"=>[//плагин срабатывает при генерации сетки, вызывается в помощнике сетки
                                                 "Locale"=>[]
                                             ]
                                         ]
                                        ]),
                    
                    
                    ColModelHelper::text("sysname",["label"=>"Системное имя","width"=>200,"editoptions" => ["size"=>120 ]]),

                    ColModelHelper::textarea("title",["label"=>"TITLE","hidden"=>true,"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::textarea("keywords",["label"=>"KEYWORDS","hidden"=>true,"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::textarea("description",["label"=>"DESCRIPTION","hidden"=>true,"editrules"=>["edithidden"=>true]]),

                ColModelHelper::cellActions("myaction",["formatoptions"=>["editformbutton"=>true]]),
                ],
            ],
        ],
];