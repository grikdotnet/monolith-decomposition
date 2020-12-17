<?php

namespace Acme;

/**
 * A demo of code cohesion due to the constant reference
 *
 * @package Acme
 */
class ImageResizer
{
    /**
     * @var ImagicFake|\Imagick
     */
    private $image;

    public function getUserAvatar(User $user)
    {
        $file = '../storage/'.$user->getId().'jpg';
        $this->image = new ImagicFake($file);

        //The code will break without the User class
        return $this->image->thumbnailImage(User::AVATAR_SIZE[0], User::AVATAR_SIZE[1]);
    }

}
