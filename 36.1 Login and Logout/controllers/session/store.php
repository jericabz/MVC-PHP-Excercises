<?php
use Core\App;
use Core\Database;
use Core\Validator;
    // Step 2 

    $db = App::resolve(Database::class);

    $email = $_POST['email'];
    $password = $_POST['password'];

    //validate the form inputs
    $errors = [];
    if(!Validator::email($email)){
        $errors['email']= "Please provide the valid email address";
    }

    if(!Validator::string($password)){
        $errors['password'] = "Please provide valid password";
    }

    if(! empty($errors)){
        return view('session/create.view.php',[
                'header'=>'Login',
                'errors'=> $errors
            ]
        );
    }

    //match the credentials
    $user = $db->query('select * from users where email= :email',[
        'email'=> $email,
    ])->find();


    if($user){
        if(password_verify($password, $user['password'])){
            //Step 3 login function at Core/function
            login([
                "email"=> $email,
            ]);
            header('Location: /');
            exit();
        }   
    }

    // check the password 

    return view('session/create.view.php',[
        'heading'=>'Login',
        'errors'=> [
            'email'=>'No matching account found for that email address and password'
        ]
    ]);