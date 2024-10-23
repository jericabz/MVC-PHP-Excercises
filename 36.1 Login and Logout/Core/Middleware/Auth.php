<?php
    namespace Core\Middleware;
    // Step 7 
    class Auth{
        public function handle(){
            if(!$_SESSION['user']??false){
                header('Location:/');
                exit();
            }
        }
    }