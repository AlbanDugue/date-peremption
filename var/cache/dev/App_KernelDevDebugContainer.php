<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5otICri\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5otICri/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5otICri.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5otICri\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5otICri\App_KernelDevDebugContainer([
    'container.build_hash' => '5otICri',
    'container.build_id' => '2bd76f0c',
    'container.build_time' => 1607805759,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5otICri');
