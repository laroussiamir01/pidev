<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container15Pfueq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container15Pfueq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container15Pfueq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container15Pfueq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container15Pfueq\App_KernelDevDebugContainer([
    'container.build_hash' => '15Pfueq',
    'container.build_id' => 'ad0db666',
    'container.build_time' => 1676759205,
], __DIR__.\DIRECTORY_SEPARATOR.'Container15Pfueq');
