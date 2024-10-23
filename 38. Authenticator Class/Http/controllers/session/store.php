<?php   

use Core\Authenticator;
use Http\Forms\LoginForm;


$email = $_POST['email'];
$password = $_POST['password'];

// Validation 

$forms = new LoginForm();

$forms->setReturns([
    'email'=>$email,
    'password'=>$password
]);

if($forms->validate($email,$password)){

    if((new Authenticator)->attempt($email,$password)){
        redirect("/");
    }
}
$forms->error('email',"No matching found for that email and password.");

return view('session/create.view.php',[
    'heading'=>"User Login",
    'errors'=>$forms->errors(),
    'returns'=>$forms->returns()
]);





