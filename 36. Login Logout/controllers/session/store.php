<?php   

use Core\Validator;
use Core\App;
use Core\Database;
$email = $_POST['email'];
$password = $_POST['password'];

// Validation 

$errors=[];
$returns = [];

$returns['email']=$email;
$returns['password']=$password;

if(!Validator::email($email)){
    $errors['email']="Please enter a valid email";
}


if(!Validator::string($password)){
    $errors['password']="Please provide valid password";
    
}

if(! empty($errors)){
    return view('session/create.view.php',[
        'heading'=>"User Login",
        'errors'=>$errors,
        'returns'=>$returns
    ]);
} 

$db=App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email'=>$email
])->find();


// dd($user);

if($user){
    //check if password is correct
    if(password_verify($password,$user['password'])){
        login(['email'=>$email]);
    
        header("Location: /");
        exit();
    }
}


return view('session/create.view.php',[
        'heading'=>"User Login",
        'errors'=>[
            'email'=>"No matching found for that email and password."
        ],
        'returns'=>$returns
    ]);
