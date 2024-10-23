<?php
    use Core\Response;
    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }
    // dd($_SERVER);

    function isUrl($value){
        return parse_url($_SERVER["REQUEST_URI"])["path"]===$value;
    }

    function authorize($condition,$status = Response::FORBIDDEN){
        if(!$condition){
            abort($status);
        }   
    }

    function base_path($path){
        return BASE_PATH.$path;
    }

    function view($path, $attributes=[]){
        extract($attributes);
        require base_path('views/'. $path);
    }

    function abort($status=404){
        http_response_code($status);
        require base_path("views/{$status}.php");
        die();
    }
    
    function redirect($uri){
        header("Location: {$uri}");
        exit();
    }