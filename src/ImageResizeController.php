<?php


namespace Acme;


use Acme\Image\Contracts\ImageInterface;

class ImageResizeController
{
    public function __construct(
        public ImageInterface $image
    ){
    }

    public function action(?string $id)
    {
        $this->image->load($id);
    }
}
