<?php
 namespace App;

 class Auth {
     private $username = 'admin';
     private $password = '$2a$08$MTI4NjE4MDU2NjYwZGMzMOhNKh9p35CUXfF4cwYpt5OGPYNnIIT36';
     public function __construct()
     {
        if( isset($_POST['username']) && 
            isset($_POST['password']) && 
            $_POST['username'] == $this->username && 
            Bcrypt::check($_POST['password'], $this->password)
        ){
            $_SESSION['is_authenticated'] = true;
        } else {
            $_SESSION['error']['message'] = 'Incorrect username or password'; 
        }
     }

     public function isAuthorized() {
        return isset($_SESSION['is_authenticated']) && $_SESSION['is_authenticated'] === true;
     } 
 }