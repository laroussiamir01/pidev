<?php

namespace ContainerUSeDEfy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3Lz30htService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3Lz30ht' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3Lz30ht'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored.c5sSAeI', NULL, 'Cannot determine controller argument for "App\\Controller\\UserController::delete()": the $user argument is type-hinted with the non-existent class or interface: "App\\Entity\\User".'],
            'userRepository' => ['privates', '.errored.kS6dGet', NULL, 'Cannot determine controller argument for "App\\Controller\\UserController::delete()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\UserRepository".'],
        ], [
            'user' => '?',
            'userRepository' => '?',
        ]);
    }
}
