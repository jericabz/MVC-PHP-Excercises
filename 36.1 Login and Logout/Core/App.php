<?php
    // Step 4 of container continuation
    namespace Core;

    class App{
        protected static $container;
        public static function setContainer($container){
            static::$container = $container;
        }

        public static function container(){
            return static::$container;
        }

        public static function bind($key,$resolver){

            static::container()->bind($key,$resolver);
        }
        public static function resolve($key){
            // Converted from $db = App::container()->resolve(Database::class);
            return static::container()->resolve($key);
        }
    }