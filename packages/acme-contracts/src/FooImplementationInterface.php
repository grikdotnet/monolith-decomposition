<?php

namespace Acme\Contracts;

interface FooImplementationInterface
{
    public function withBaseModel(BaseModelInterface $baseModel): void;

    public function doFoo(): mixed;
}
