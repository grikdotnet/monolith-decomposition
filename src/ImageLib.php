<?php

namespace Acme;

/**
 * This class is coupled with storage classes
 *
 */
class ImageLib
{
    public function store($type,$file)
    {
        //Select a storage solutions based on purpose
        switch ($type) {
            case 'avatar':
                $storage = new Storage\File();
                break;
            case 'post':
                $storage = new Storage\S3();
                break;
            default:
                $storage = new Storage\Cloudinary();
                break;
        }
        $storage->store($file);
    }
}
