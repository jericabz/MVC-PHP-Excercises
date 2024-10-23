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

    
    if(!Validator::string($password,7,250)){
        $errors['password']="Please provide at least seven characters";
        
    }

    if(! empty($errors)){
        return view('registration/create.view.php',[
            'heading'=>"User Registration",
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
        //if exist
        header("Location: /");
        exit();
    }else{
        $db->query("INSERT INTO users (email, password,admin)
        VALUES (:email, :password,0);",[
            'email'=>$email,
            'password'=>$password,
        ]);


        $_SESSION['user']=[
            'email'=>$email
        ];
        
        header("Location: /");
        exit();

    }



    

