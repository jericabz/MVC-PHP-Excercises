<?php 
    $config = require('config.php');
    require('Validator.php');
    $db = new Database($config['database']);

    $heading = "Create Note";
    // dd($_SERVER);//to look for the request method

    //  curl -X POST http://localhost:8000/notes/create -d 'body=' Sending a post request

    
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
    include 'views/notes/create.view.php';