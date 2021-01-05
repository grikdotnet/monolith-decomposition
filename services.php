<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Acme\Image\ImageService;
use Acme\ImageController;

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();

    $services->set(ImageService::class)->tag('container.service_subscriber');

    $services->set(ImageController::class);

    $services->load('Acme\\Storage\\', './src/Storage/*');
};
