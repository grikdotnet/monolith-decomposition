<?php


/**
 * A sample of coupling through inheritance
 */
abstract class BaseModel
{
    protected int $x;

    abstract protected function foo();

    public function __construct()
    {
        // calling a method defined in an Image class
        $this->foo();
    }

    final protected function bar()
    {
    }
}
