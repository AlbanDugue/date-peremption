<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGy9IolY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGy9IolY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGy9IolY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGy9IolY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGy9IolY\App_KernelDevDebugContainer([
    'container.build_hash' => 'Gy9IolY',
    'container.build_id' => '093d7999',
    'container.build_time' => 1607808212,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGy9IolY');
