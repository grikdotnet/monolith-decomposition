<?php

namespace Acme\Image\lib;

/**
 * This class is tightly coupled with \BaseModel
 *
 * @internal
 * @package Acme\Image
 */
class Image extends \BaseModel
{

    /**
     * called from the \BaseModel
     */
    protected function foo()
    {
        //an inherited final method
        $this->bar();
    }

    public function load($tmp_name)
    {
    }
}
