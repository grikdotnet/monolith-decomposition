<?php
declare(strict_types=1);

namespace Acme\Image;

use Acme\Storage\{Cloudinary,File,S3};
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

/**
 * Class ImageService provides an API for the application.
 * It is a bridge registered as a service assisting decoupling the module
 * to change it independently from the service API.
 *
 * @package Acme\Image
 * @api
 */
final class ImageService  implements ServiceSubscriberInterface
{
    public function __construct(private ContainerInterface $locator)
    {
    }

    /**
     * @see https://symfony.com/doc/current/service_container/service_subscribers_locators.html
     * @return string[]
     */
    public static function getSubscribedServices(): array
    {
        return [ File::class, S3::class, Cloudinary::class ];
    }

    public function store($type,$file)
    {
        //Select a storage solutions based on purpose
        $storage = match ($type) {
            'avatar' => $this->locator->get(File::class),
            'post' => $this->locator->get(S3::class),
            default => $this->locator->get(Cloudinary::class),
        };
        $storage->store($file);
    }
}
