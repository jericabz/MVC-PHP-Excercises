<?php 
    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = "Create Note";
    // dd($_SERVER);//to look for the request method
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $db->query("INSERT INTO notes (body,user_id)
        VALUES ( :body,:user_id )",['body'=>$_POST['body'],'user_id'=>1]);
        header('Location: /notes');
    }
    include 'views/note-create.view.php';