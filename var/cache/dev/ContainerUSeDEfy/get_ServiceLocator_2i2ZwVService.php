<?php

namespace ContainerUSeDEfy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2i2ZwVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2i2ZwV_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2i2ZwV_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.2i2ZwV_.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.2i2ZwV_": it references class "App\\Entity\\Users" but no such service exists.'],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\Users',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
