<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIYXdo2B\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIYXdo2B/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIYXdo2B.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIYXdo2B\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIYXdo2B\App_KernelDevDebugContainer([
    'container.build_hash' => 'IYXdo2B',
    'container.build_id' => '969ebce5',
    'container.build_time' => 1595726743,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIYXdo2B');
