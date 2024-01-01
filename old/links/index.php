<?php 
session_start();

require __DIR__.'/vendor/autoload.php';

use App\Auth;
use App\Images;

if(!(new Auth())->isAuthorized()) {
    header('Location: /links/login.php');
}

$image = new Images();
$base_path = 'https://farawlah.sa/links';

if(isset($_FILES['images'])) {
    $image->upload();
}

$images = $image->all();

include('./views/images.php');