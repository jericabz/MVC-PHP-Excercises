<?php
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [
        "/"=>"controllers/index.php",
        "/about"=>"controllers/about.php",
        "/notes"=>"controllers/notes.php",
        "/note"=>"controllers/note.php",
        "/contact"=>"controllers/contact.php"
    ];
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