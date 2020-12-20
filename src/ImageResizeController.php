<?php

namespace Acme;

use Acme\Contracts\ImageInterface;

class ImageResizeController
{
    public function __construct(public ImageInterface $image, private User $user)
    {
        $this->user->setId((int)$_GET['id']??42);
    }

    public function getAvatar(): string
    {
        return $this->image->getUserAvatar($this->user->getId());
    }
}
