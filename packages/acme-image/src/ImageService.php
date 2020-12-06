<?php
declare(strict_types=1);

namespace Acme\Image;

use Acme\Image\Contracts\ImageInterface;
use Acme\Image\lib\Image;

/**
 * Class ImageService provides an API for the application.
 * It is a bridge registered as a service assisting decoupling the module
 * to change it independently from the service API.
 *
 * @package Acme\Image
 * @api
 */
class ImageService  implements ImageInterface
{

    /**
     * @var Image
     */
    private Image $imageLib;

    public function __construct()
    {
        $this->imageLib = new Image();
    }

    /**
     * @param string $tmp_name
     */
    public function load(string $tmp_name): mixed
    {
        return $this->imageLib->load($tmp_name);
    }
}
