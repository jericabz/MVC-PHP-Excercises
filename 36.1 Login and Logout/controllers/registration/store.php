<?php

use Core\App;
use Core\Database;
use Core\Validator;

    $db = App::resolve(Database::class);

    $email = $_POST['email'];
    $password = $_POST['password'];

    //validate the form inputs
    $errors = [];
    if(!Validator::email($email)){
        $errors['email']= "Please provide the valid email address";
    }

    if(!Validator::string($password,7,255)){
        $errors['password'] = "Please provide 7 to 255 password length";
    }

    if(! empty($errors)){
        return view('registration/create.view.php',[
            'errors'=>$errors,
            'heading'=>'Register'
        ]);
    }

    // check if the account already exist
    $user = $db->query('select * from users where email = :email',[
        'email'=>$email
    ])->find();

    if($user){
        // if user exist 
        // if yes redirect to a login page
        header('Location:/');
        exit();
    }

    // if not, save to the database, log in the user and redirect
    $db->query('INSERT INTO users(email,password) VALUES(:email, :password)',[
        'email'=>$email,
        'password'=>password_hash($password, PASSWORD_BCRYPT),
    ]);

    // mark user is login 
    login($user);

    header('Location: /');
    exit;
