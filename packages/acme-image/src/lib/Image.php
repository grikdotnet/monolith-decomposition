<?php

namespace Acme\Image\lib;

use Acme\Contracts\BaseModelInterface;
use Acme\Helper;

/**
 * This class is the code is not coupled with a \BaseModel class anymore
 *
 * @internal
 * @package Acme\Image
 */
class Image
{
    public function __construct(private BaseModelInterface $baseModel)
    {
    }

    /**
     * called from the \BaseModel through adapters
     */
    public function foo()
    {
        Helper::bar();
    }

    public function load($id)
    {
    }

    public static function answerUltimateQuestion(): int
    {
        return 42;
    }
}
