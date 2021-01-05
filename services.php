<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Acme\{BaseModelAdapter, Helper, ImageController, User};
use Acme\Contracts\{FooImplementationInterface, BaseModelInterface, HelperBridgeInterface, ImageInterface};
use Acme\Image\ImageService;

use Symfony\Component\DependencyInjection\Reference;

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();

    $services->set(ImageController::class);
};
