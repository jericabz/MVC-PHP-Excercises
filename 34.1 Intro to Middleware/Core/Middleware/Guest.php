<?php
    namespace Core\Middleware;
    // Step 6
    class Guest{
        public function handle(){
            if($_SESSION['user']??false){
                header('Location:/');
                exit();
            }
        }
    }