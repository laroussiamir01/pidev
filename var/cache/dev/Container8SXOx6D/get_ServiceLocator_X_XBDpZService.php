<?php

namespace Container8SXOx6D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X_XBDpZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x.XBDpZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x.XBDpZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'materielRepository' => ['privates', 'App\\Repository\\MaterielRepository', 'getMaterielRepositoryService', true],
        ], [
            'materielRepository' => 'App\\Repository\\MaterielRepository',
        ]);
    }
}
