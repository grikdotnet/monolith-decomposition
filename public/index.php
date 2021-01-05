<?php

include '../vendor/autoload.php';


try {
    $controller = new \Acme\ImageController;
} catch (Exception $e) {
    echo $e->getMessage(),"\n",$e->getTraceAsString();
    exit;
}

$controller->upload();
