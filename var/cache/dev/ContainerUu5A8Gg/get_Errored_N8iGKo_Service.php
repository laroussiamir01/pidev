<?php

namespace ContainerUu5A8Gg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_N8iGKo_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.N8iGKo.' shared service.
     *
     * @return \App\Repository\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\UserController::edit()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\UserRepository".');
    }
}
