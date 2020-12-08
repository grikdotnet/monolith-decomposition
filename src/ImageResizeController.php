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
        $answer = Acme\Image\lib\Image::answerUltimateQuestion();
        $this->image->load($id);
    }
}
