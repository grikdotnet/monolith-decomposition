<?php


namespace Acme;


class ImageUploadController
{
    public function __construct()
    {
        $Image = new Image($_FILES['input_name']['tmp_name']);
        // other code skipped ...
    }
}
