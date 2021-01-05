<?php

namespace Acme;

use Acme\Contracts\ImageInterface;

class ImageController
{
    private ImageLib $imageLib;

    public function __construct()
    {
        $this->imageLib = new ImageLib();
    }

    public function upload(): string
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
