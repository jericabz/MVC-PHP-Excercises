<?php
    $routes = require 'routes.php';
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    // dd($uri);
    function abort($status=404){
        http_response_code($status);
        require "views/{$status}.php";
        die();
    }
    
    function routeToCotroller($uri,$routes){
        if(array_key_exists($uri,$routes)){
            require $routes[$uri];
        }else{
            abort();
        }
    }

    routeToCotroller($uri,$routes);