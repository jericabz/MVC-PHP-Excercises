<?php

    namespace Http\Forms;
    use Core\Validator;

    class LoginForm{
        
        protected $errors =[];
        protected $returns =[];

        public function validate($email,$password){
        
            $this->returns['email']=$email;
            $this->returns['password']=$password;

            if(!Validator::email($email)){
                $this->errors['email']="Please enter a valid email";
            }


            if(!Validator::string($password)){
                $this->errors['password']="Please provide valid password";
                
            }

           return empty($this->errors);
        }

        public function errors(){
            return $this->errors;
        }

        public function returns(){
            return $this->returns;
        }
    }