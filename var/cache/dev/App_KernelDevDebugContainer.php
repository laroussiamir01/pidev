<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRnrmN34\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRnrmN34/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRnrmN34.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRnrmN34\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRnrmN34\App_KernelDevDebugContainer([
    'container.build_hash' => 'RnrmN34',
    'container.build_id' => 'a730bacd',
    'container.build_time' => 1677691391,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRnrmN34');
