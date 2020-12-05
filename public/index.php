<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

include '../vendor/autoload.php';

// Usually an application kernel creates
// an IoC-container, routing, some middleware, and controllers,
// but I'll just create a container and a controller drectly.

$containerBuilder = new ContainerBuilder();
$loader = new PhpFileLoader($containerBuilder, new FileLocator('..'));
$loader->load('services.php');
$containerBuilder->compile();
// in a real project there will be some cacheing of the container
// file_put_contents($file, (new PhpDumper($containerBuilder))->dump());

try {
    $controller = $containerBuilder->get(\Acme\ImageResizeController::class);
} catch (Exception $e) {
    echo $e->getMessage(),"\n",$e->getTraceAsString();
    exit;
}

$controller->action($_GET['id']?:null);
