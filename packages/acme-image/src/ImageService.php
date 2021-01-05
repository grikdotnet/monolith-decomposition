<?php
declare(strict_types=1);

namespace Acme\Image;

use Acme\Contracts\ImageInterface;

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
    public function __construct()
    {
    }
}
