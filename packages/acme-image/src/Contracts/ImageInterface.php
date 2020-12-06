<?php


namespace Acme\Image\Contracts;

/**
 * Interface ImageInterface
 * @package Acme\Image
 */
interface ImageInterface
{
    public function load(string $tmp_name): mixed;
}
