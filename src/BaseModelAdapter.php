<?php
declare(strict_types=1);

namespace Acme;

use Acme\Contracts\{BaseModelInterface,FooImplementationInterface};

/**
 * An adapter service for BaseModel to decouple inheritance into composition
 *
 * @package Acme
 */
final class BaseModelAdapter extends \BaseModel implements BaseModelInterface
{
    public function __construct(private FooImplementationInterface $fooInstance)
    {
    }

    public function init():void
    {
        parent::__construct();
    }

    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Required by the interface of the BaseModel abstract class
     */
    public function foo()
    {
        return $this->fooInstance->doFoo($this);
    }

    /**
     * An adapter for a final protected method bar()
     */
    public function callBar()
    {
        //print call trace after decoupling
        foreach (debug_backtrace() as ['function'=>$f,'class'=>$c]) {
            echo "$c::$f()\n";
        }

        return $this->bar();
    }
}
