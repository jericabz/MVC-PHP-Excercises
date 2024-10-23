<?php
    // Container a shortcut for this syntax 
    // $config = require(base_path('config.php'));
    // $db = new Database($config['database']);
    namespace Core;

    class Container{
        // Step 1

        protected $bindings = [];
        public function bind($key, $resolver){
        // To bind something in the container 
            $this->bindings[$key] = $resolver;
        }

        public function resolve($key){
        // To grab something out in the container
            if(!array_key_exists($key,$this->bindings) ){
                throw new \Exception("No matching binding found for {$key}");
            }
            
            $resolver =  $this->bindings[$key];
            return call_user_func($resolver);
        }

    }