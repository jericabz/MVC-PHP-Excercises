<?php
    namespace Core;

    use Core\Middleware\Auth;
    use Core\Middleware\Guest;
    use Core\Middleware\Middleware;
    class Router{

        protected $routes=[];

        protected function add($method,$uri,$controller){
            $this->routes[] =[
                'uri'=>$uri,
                'controller'=>$controller,
                'method'=>$method,
                'middleware'=>null
            ];
            // $this->routes[]=compact('method','uri','controller');

            // Step 3 Middleware
            return $this; 
        }
        public function route($uri,$method){
            foreach($this->routes as $route){
                if($route['uri']===$uri && $route['method']===strtoupper($method)){
                    //Step 4 Middleware apply the middleware
                    // if($route['middleware']==='guest'){
                    //     (new Guest)->handle();
                    // }
                    // if($route['middleware']==='auth'){
                    //     (new Auth)->handle();
                    // }

                    // Step 8 
                    Middleware::resolve($route['middleware']);
                    
                    return require base_path($route['controller']);
                }
            }
            $this->abort();
        } 
        public function get($uri, $controller){
            // Step 4 Middleware put return 
            return $this->add('GET',$uri,$controller);
        }

        public function post($uri, $controller){
            return $this->add('POST',$uri,$controller);

        }

        public function delete($uri, $controller){
            return $this->add('DELETE',$uri,$controller);

        }

        public function patch($uri, $controller){
            return $this->add('PATCH',$uri,$controller);

        }

        public function put($uri, $controller){
            $this->add('PUT',$uri,$controller);

        }

        protected function abort($status=404){
            http_response_code($status);
            require base_path("views/{$status}.php");
            die();
        }

        //Step 2 Middleware
        public function only($key){
            $this->routes[array_key_last($this->routes)]['middleware']=$key;
            return $this;
        }
        
    }

    


    // // dd($uri);

    
    // function routeToCotroller($uri,$routes){
    //     if(array_key_exists($uri,$routes)){
    //         require base_path($routes[$uri]);
    //     }else{
    //         abort();
    //     }
    // }

