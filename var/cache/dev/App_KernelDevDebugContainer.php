<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZB6kxZv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZB6kxZv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZB6kxZv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZB6kxZv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZB6kxZv\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZB6kxZv',
    'container.build_id' => '1925490c',
    'container.build_time' => 1709730273,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZB6kxZv');
