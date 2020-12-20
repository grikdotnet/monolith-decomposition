<?php

namespace Acme\Contracts;

/**
 * Interface ImageInterface
 * @package Acme\Image
 */
interface ImageInterface
{
    public function __construct(array $AVATAR_SIZE);
    public function getUserAvatar(int $userId): string;
}
