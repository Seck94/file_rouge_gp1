<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container32Ty0fy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container32Ty0fy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container32Ty0fy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container32Ty0fy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container32Ty0fy\App_KernelDevDebugContainer([
    'container.build_hash' => '32Ty0fy',
    'container.build_id' => 'ad49fd06',
    'container.build_time' => 1596723457,
], __DIR__.\DIRECTORY_SEPARATOR.'Container32Ty0fy');
