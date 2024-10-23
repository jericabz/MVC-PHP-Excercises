<?php   

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;
$email = $_POST['email'];
$password = $_POST['password'];

// Validation 

$forms = new LoginForm();

if(!$forms->validate($email,$password)){
    return view('session/create.view.php',[
                'heading'=>"User Login",
                'errors'=>$forms->errors(),
                'returns'=>$forms->returns()
            ]);
}


$db=App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email'=>$email
])->find();


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
        'returns'=>$forms->returns()
    ]);
