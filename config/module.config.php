<?php
/**
помощник вывода СЕО из таблицы seolist
*используется для вывода СЕО на страницах с разными списками, например, новостей
 */

namespace Seolist;


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

];
