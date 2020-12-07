<?php


namespace Acme\Contracts;

/**
 * Interface ImageInterface
 * @package Acme\Image
 */
interface ImageInterface
{
    public function load(string $id): mixed;
}
