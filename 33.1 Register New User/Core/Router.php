<?php
    namespace Core;
    class Router{

        protected $routes=[];

        protected function add($method,$uri,$controller){
            // $this->routes[] =[
            //     'uri'=>$uri,
            //     'controller'=>$controller,
            //     'method'=>$method
            // ];
            $this->routes[]=compact('method','uri','controller');
        }
        public function route($uri,$method){
            foreach($this->routes as $route){
                if($route['uri']===$uri && $route['method']===strtoupper($method)){
                    return require base_path($route['controller']);
                }
            }
            $this->abort();
        } 
        public function get($uri, $controller){
            $this->add('GET',$uri,$controller);
        }

        public function post($uri, $controller){
            $this->add('POST',$uri,$controller);

        }

        public function delete($uri, $controller){
            $this->add('DELETE',$uri,$controller);

        }

        public function patch($uri, $controller){
            $this->add('PATCH',$uri,$controller);

        }

        public function put($uri, $controller){
            $this->add('PUT',$uri,$controller);

        }

        protected function abort($status=404){
            http_response_code($status);
            require base_path("views/{$status}.php");
            die();
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

