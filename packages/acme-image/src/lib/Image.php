<?php

namespace Acme\Image\lib;

/**
 * This class is the code is not coupled with a \BaseModel class anymore
 *
 * @internal
 * @package Acme\Image
 */
class Image
{
    public function __construct(){
    }

    public function generateThumbnail(string $file, int $width, int $height): string
    {
        //imagine an Imagick class here
        $image = new ImagickFake($file);
        return $image->thumbnailImage($width, $height);
    }

}
