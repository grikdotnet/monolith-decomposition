<?php

namespace Acme;

use Acme\Contracts\ImageInterface;

class ImageController
{
    public function __construct()
    {

    }

    public function upload(): string
    {
        $tmp_name = $_FILES["pictures"]["tmp_name"][''];
        $file = move_uploaded_file();
    }
}
