<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXDkySC5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXDkySC5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXDkySC5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXDkySC5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXDkySC5\App_KernelDevDebugContainer([
    'container.build_hash' => 'XDkySC5',
    'container.build_id' => '67cc6ed4',
    'container.build_time' => 1676539815,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXDkySC5');
