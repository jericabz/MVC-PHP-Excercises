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

            return $this;
        }
        public function get($uri, $controller){
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
            return $this->add('PUT',$uri,$controller);

        }

        protected function abort($status=404){
            http_response_code($status);
            require base_path("views/{$status}.php");
            die();
        }

        public function route($uri,$method){
            foreach($this->routes as $route){
                if($route['uri']===$uri && $route['method']===strtoupper($method)){

             
                    Middleware::resolve($route['middleware']);
                   

                    // if($route['middleware']==='guest'){
                    //     (new Guest)->handle();
                    // }

                    // if($route['middleware']==='auth'){
                    //     (new Auth)->handle();
                    // }


                    return require base_path($route['controller']);
                }
            }
            $this->abort();
        }
        public function only($key){
            $this->routes[array_key_last($this->routes)]['middleware']=$key;;

            // dd($this->routes);
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

