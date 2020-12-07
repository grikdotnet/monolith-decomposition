<?php

namespace Acme\Contracts;

/**
 * An interface for a callback injected to the BaseModelAdapter
 *
 * @package Acme\Contracts
 */
interface FooImplementationInterface
{
    public function withBaseModel(BaseModelInterface $baseModel): void;

    public function doFoo(): mixed;
}
