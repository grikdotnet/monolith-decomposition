<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Acme\BaseModelAdapter;
use Acme\ImageResizeController;
use Acme\Contracts\{
    FooImplementationInterface,
    BaseModelInterface,
    ImageInterface
};
use Acme\Image\ImageService;

use Symfony\Component\DependencyInjection\Reference;

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();

    $services->set(ImageResizeController::class);

    $services->set(ImageInterface::class, ImageService::class);

    $services->set(BaseModelInterface::class, BaseModelAdapter::class)
        ->bind(FooImplementationInterface::class, service(ImageInterface::class))
        ;
};
