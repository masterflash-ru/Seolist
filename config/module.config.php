<?php
/**
помощник вывода СЕО из таблицы seolist
*используется для вывода СЕО на страницах с разными списками, например, новостей
 */

namespace Mf\Seolist;

use Laminas\Cache\Storage\Plugin\Serializer;
use Laminas\Cache\Storage\Adapter\Filesystem;

return [

    'view_helpers' => [
        'factories' => [
            View\Helper\Seolist::class => View\Helper\Factory\Seolist::class,
        ],
        'aliases' => [
            'Seolist' => View\Helper\Seolist::class,
            'seolist' => View\Helper\Seolist::class,
        ],
    ],
    /*сетка для админки*/
    "interface"=>[
        "seolist"=>__DIR__."/admin.seolist.php",
    ],
    /*доступ к панели управления*/
    "permission"=>[
        "objects" =>[
            "interface/seolist" => [1,1,0760],
        ],
    ],

];
