<?php
 namespace App;
 use Bulletproof\Image;
class Images {

    private $dir = __DIR__. "/../images";

    public function all()
    {
        return  array_diff(scandir($this->dir, 1), array('..', '.'));
    }

    public function remove()
    {
        return true;
    }

    public function upload()
    {
        $image = new Image($_FILES);
        $image->setMime(array('jpeg', 'gif', 'png', 'jpg'))
            ->setLocation($this->dir);
        if($image["images"]) {
            $upload = $image->upload();
        }
        if($upload){
            header('location: /links/');
        }
    }
}