<?php

namespace ContainerS59mGiD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_5O4iSmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.5_o4iSm' shared service.
     *
     * @return \App\Repository\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\UserController::new()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\UserRepository".');
    }
}
