<?php
namespace Mf\Seolist\View\Helper\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * универсальная фабрика для меню
 * 
 */
class Seolist implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
     $cache = $container->get('DefaultSystemCache');
     $connection=$container->get('DefaultSystemDb');
        return new $requestedName($connection,$cache);
    }
}

