<?php


namespace Acme;

/**
 * A heir class to show inheritance decomposition
 */
class Image extends \BaseModel
{

    public function load(mixed $tmp_name)
    {
        // calls to inherited methods
        $this->foo();
        parent::bar();
    }
}
