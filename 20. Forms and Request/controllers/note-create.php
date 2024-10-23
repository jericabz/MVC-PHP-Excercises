<?php 

    $heading = "Create Note";
    // dd($_SERVER);//to look for the request method
    if($_SERVER['REQUEST_METHOD']==="POST"){
        dd($_POST);
    }
    include 'views/note-create.view.php';