<?php
declare(strict_types=1);

namespace Acme\Image;

use Acme\Contracts\ImageInterface;
use Acme\Image\lib\Image;

/**
 * Class ImageService provides an API for the application.
 * It is a bridge registered as a service assisting decoupling the module
 * to change it independently from the service API.
 *
 * @package Acme\Image
 * @api
 */
final class ImageService  implements ImageInterface
{
    /**
     * @var Image
     */
    private Image $imageLib;

    private int $avatarWidth, $avatarHeight;

    public function __construct(array $AVATAR_SIZE)
    {
        $this->imageLib = new Image();
        [$this->avatarWidth, $this->avatarHeight] = $AVATAR_SIZE;
    }

    public function getUserAvatar(int $userId): string
    {
        $file = '../storage/'.$userId.'jpg';
        return $this->imageLib->generateThumbnail($file, $this->avatarWidth, $this->avatarHeight);
    }
}
