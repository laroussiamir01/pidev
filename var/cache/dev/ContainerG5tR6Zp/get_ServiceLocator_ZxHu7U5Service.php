<?php

namespace ContainerG5tR6Zp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZxHu7U5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zxHu7U5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zxHu7U5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'session' => ['privates', '.errored..service_locator.zxHu7U5.Symfony\\Component\\HttpFoundation\\Session\\Session', NULL, 'Cannot autowire service ".service_locator.zxHu7U5": it references class "Symfony\\Component\\HttpFoundation\\Session\\Session" but no such service exists. Try changing the type-hint to "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface" instead.'],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'session' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
