<?php


namespace Acme;


class ImageResizeController
{
    public function __construct()
    {
        $Image = new Image($_GET['id']?:null);
        // other code skipped ...
    }
}
