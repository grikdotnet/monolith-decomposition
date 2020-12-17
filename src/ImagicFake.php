<?php
namespace Acme;

/**
 * A stub to make the demo work without image magic extension
 * @package Acme
 */
class ImagicFake
{
    public function __construct(private $file)
    {
    }

    public function thumbnailImage($x,$y): string
    {
        return '';
    }
}
