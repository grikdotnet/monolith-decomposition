<?php
namespace Acme\Image\lib;

/**
 * A stub to make the demo work without image magic extension
 * @package Acme
 */
class ImagickFake
{
    public function __construct(private $file)
    {
    }

    public function thumbnailImage($x,$y): string
    {
        return '';
    }
}
