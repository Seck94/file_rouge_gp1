<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtPj1tp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtPj1tp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXtPj1tp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXtPj1tp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXtPj1tp\App_KernelDevDebugContainer([
    'container.build_hash' => 'XtPj1tp',
    'container.build_id' => 'b68defcd',
    'container.build_time' => 1597881876,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXtPj1tp');
