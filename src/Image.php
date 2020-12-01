<?php


namespace Acme;

/**
 * A heir class to show inheritance decomposition
 */
class Image extends \BaseModel
{
    public function __construct($filename)
    {
        // calls to inherited methods
        $this->foo();
        parent::bar();
    }
}
