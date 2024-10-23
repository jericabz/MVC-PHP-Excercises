<?php
use Core\Authenticator;
    //log the user out
    (new Authenticator)->logout();

    header("Location: /");
    exit();