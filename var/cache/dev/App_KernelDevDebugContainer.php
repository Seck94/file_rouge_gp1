<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFfFCeX5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFfFCeX5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFfFCeX5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFfFCeX5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFfFCeX5\App_KernelDevDebugContainer([
    'container.build_hash' => 'FfFCeX5',
    'container.build_id' => '064a17bf',
    'container.build_time' => 1597842296,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFfFCeX5');
