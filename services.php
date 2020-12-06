<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Acme\Image\{Contracts\ImageInterface,ImageService};

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();

    $services->load('Acme\\', './src/*')
        ->exclude('./src/BaseModel.php');

    $services->set(ImageInterface::class, ImageService::class);
};
