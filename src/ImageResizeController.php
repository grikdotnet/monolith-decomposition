<?php


namespace Acme;


class ImageResizeController
{
    public function __construct(
        public Image $image
    ){
    }

    public function action(?string $id)
    {
        $this->image->load($id);
    }
}
