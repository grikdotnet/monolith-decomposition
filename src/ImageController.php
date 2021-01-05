<?php

namespace Acme;

use Acme\Image\ImageService;

class ImageController
{
    public function __construct(private ImageService $imageLib)
    {
    }

    public function upload()
    {
        if (empty($_FILES)) {
            header('HTTP/1.0 400 Missing uploaded file');
            return;
        }
        $type = key($_FILES);
        $file = $_FILES[$type]['tmp_name'];
        $this->imageLib->store($type, $file);
    }
}
