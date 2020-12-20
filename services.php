<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Acme\{BaseModelAdapter, Helper, ImageResizeController, User};
use Acme\Contracts\{FooImplementationInterface, BaseModelInterface, HelperBridgeInterface, ImageInterface};
use Acme\Image\ImageService;

use Symfony\Component\DependencyInjection\Reference;

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();

    $services->set(ImageResizeController::class);

    $services->set(ImageInterface::class, ImageService::class)
        ->bind('$AVATAR_SIZE',User::AVATAR_SIZE);
    // in YAML it would be
    // array $AVATAR_SIZE: !php/const User::AVATAR_SIZE

    $services->set(User::class);
};
