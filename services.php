<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Reference;

return function(ContainerConfigurator $configurator) {
    /**
     * @see https://symfony.com/doc/current/service_container/autowiring.html
     */
    $services = $configurator->services()->defaults()->autowire()->public();
};
