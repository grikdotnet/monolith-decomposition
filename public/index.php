<?php

include '../vendor/autoload.php';
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

// Usually an application kernel creates
// an IoC-container, routing, middleware, controllers,
// but for the demo I'll create a container and a controller.

$containerBuilder = new ContainerBuilder();
$loader = new PhpFileLoader($containerBuilder, new FileLocator('..'));
$loader->load('services.php');
$containerBuilder->compile();
// in a real project there will be some cacheing of the compiled container

try {
    /**
     * @var \Acme\ImageController $controller
     */
    $controller = $containerBuilder->get(\Acme\ImageController::class);
} catch (Exception $e) {
    echo $e->getMessage(),"\n",$e->getTraceAsString();
    exit;
}

$controller->upload();
