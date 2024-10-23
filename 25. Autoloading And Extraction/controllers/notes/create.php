<?php 
    $config = require(base_path('config.php'));
    // require(base_path('Validator.php'));
    $db = new Database($config['database']);

    
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $errors=[];    

        if(! Validator::string($_POST['body'],1,250)){
            $errors['body']= "A body of no more than 250 characters is required";
        }

        // dd($errors);
        if(empty($errors)){
            $db->query("INSERT INTO notes (body,user_id)
            VALUES ( :body,:user_id )",['body'=>$_POST['body'],'user_id'=>1]);
            header('Location: /notes');
        }
    }

    view('notes/create.view.php',[
            'heading'=>'My Note',
            'errors'=>$errors??''
        ]    
    );