<?php
use App\Images;

$image = $_GET['img'];

Images::remove($image);

header('location: /links');

