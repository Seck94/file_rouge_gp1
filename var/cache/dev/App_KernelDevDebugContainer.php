<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4pR7FOy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4pR7FOy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4pR7FOy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4pR7FOy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4pR7FOy\App_KernelDevDebugContainer([
    'container.build_hash' => '4pR7FOy',
    'container.build_id' => 'e25e8c28',
    'container.build_time' => 1597011293,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4pR7FOy');
