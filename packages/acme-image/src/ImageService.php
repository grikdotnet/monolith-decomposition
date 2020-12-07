<?php
declare(strict_types=1);

namespace Acme\Image;

use Acme\Contracts\{
    FooImplementationInterface,
    BaseModelInterface,
    ImageInterface
};
use Acme\Image\lib\Image;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * Class ImageService provides an API for the application.
 * It is a bridge registered as a service assisting decoupling the module
 * to change it independently from the service API.
 *
 * @package Acme\Image
 * @api
 */
final class ImageService  implements ImageInterface, FooImplementationInterface
{

    /**
     * @var Image
     */
    private Image $imageLib;

    /**
     * @param string $id
     * @return mixed
     */
    public function load(string $id): mixed
    {
        return $this->imageLib->load($id);
    }

    #[Required]
    public function withBaseModel(BaseModelInterface $baseModel): void
    {
        $this->imageLib = new Image($baseModel);
        $baseModel->init();
    }

    public function doFoo(): mixed
    {
        return $this->imageLib->foo();
    }

}
