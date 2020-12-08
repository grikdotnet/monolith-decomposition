<?php


namespace Acme;


use Acme\Contracts\ImageInterface;

class ImageResizeController
{
    public function __construct(public ImageInterface $image)
    {
    }

    public function action(?string $id)
    {
        //now the code is not bound to the Acme\Image\lib\Image class
        $answer = $this->image::answerUltimateQuestion();
        $this->image->load($id);
    }
}
