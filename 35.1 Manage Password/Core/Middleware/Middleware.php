<?php
    // Step 5 Middleware 
    namespace Core\Middleware;

    class Middleware{
        public const MAP = [
            'guest'=>Guest::class,
            'auth'=>Auth::class
        ];

        public static function resolve($key){
            if(!$key) {
                return;
            }

            $middleware = static::MAP[$key];

            // if no middleware class 
            if(!$middleware){
                throw new \Exception("No matching middleware found for key {$key}.");
            }
            //Call the handle function of Auth and Guest
            (new $middleware)->handle();
        }
    }