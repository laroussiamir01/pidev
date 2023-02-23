<?php

namespace ContainerUSeDEfy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H6HtL7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h6_htL7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h6_htL7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored.auPkGv0', NULL, 'Cannot determine controller argument for "App\\Controller\\UserController::edit()": the $user argument is type-hinted with the non-existent class or interface: "App\\Entity\\User".'],
            'userRepository' => ['privates', '.errored.N8iGKo.', NULL, 'Cannot determine controller argument for "App\\Controller\\UserController::edit()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\UserRepository".'],
        ], [
            'user' => '?',
            'userRepository' => '?',
        ]);
    }
}
