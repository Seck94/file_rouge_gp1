<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAUaozF5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAUaozF5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAUaozF5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAUaozF5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAUaozF5\App_KernelDevDebugContainer([
    'container.build_hash' => 'AUaozF5',
    'container.build_id' => '4e179df3',
    'container.build_time' => 1598142890,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAUaozF5');
