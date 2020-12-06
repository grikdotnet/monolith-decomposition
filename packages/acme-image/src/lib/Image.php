<?php

namespace Acme\Image\lib;

/**
 * This class can now be changed without breaking the application
 * because API is fixed in the ImageService class
 *
 * @internal
 * @package Acme\Image
 */
class Image extends BaseModel
{
    public function load($tmp_name)
    {
        // calls to inherited methods
        $this->foo();
        parent::bar();
    }
}
