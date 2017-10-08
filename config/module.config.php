<?php
/**
работа с просто страницами
 */

namespace Seolist;




return [

	'service_manager' => [
			'factories' => [//сервисы-фабрики
				Service\Statpage::class => Service\Factory\StatpageFactory::class,
				Service\GetControllersInfo::class => Service\Factory\GetControllersInfoFactory::class,
			],
		],

];
