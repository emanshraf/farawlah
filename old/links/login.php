<?php
session_start();

require __DIR__.'/vendor/autoload.php';

use App\Auth;

if((new Auth())->isAuthorized()) {
    header("Location: /links");
}

include('./views/auth.php');