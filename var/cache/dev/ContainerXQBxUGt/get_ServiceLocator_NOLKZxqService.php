<?php

namespace ContainerXQBxUGt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NOLKZxqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NOLKZxq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NOLKZxq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fournisseur' => ['privates', '.errored..service_locator.NOLKZxq.App\\Entity\\Fournisseur', NULL, 'Cannot autowire service ".service_locator.NOLKZxq": it references class "App\\Entity\\Fournisseur" but no such service exists.'],
        ], [
            'fournisseur' => 'App\\Entity\\Fournisseur',
        ]);
    }
}
