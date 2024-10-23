<?php 
    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = "Create Note";
    // dd($_SERVER);//to look for the request method

    //  curl -X POST http://localhost:8000/notes/create -d 'body=' Sending a post request


    if($_SERVER['REQUEST_METHOD']==="POST"){
        $errors=[];

        if(strlen($_POST['body'])===0){
            $errors['body']= "A body is required";
        }

        if(strlen($_POST['body'])>250){
            $errors['body']= "The body cant be more then 250 characters";
        }
        // dd($errors);
        if(empty($errors)){
            $db->query("INSERT INTO notes (body,user_id)
            VALUES ( :body,:user_id )",['body'=>$_POST['body'],'user_id'=>1]);
            header('Location: /notes');
        }
    }
    include 'views/note-create.view.php';