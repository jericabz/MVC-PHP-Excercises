<?php 
    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = "My Note";
    $currentUserId = 1;
    $id=$_GET['id'];

    $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

    authorize($note['user_id']==$currentUserId);
    

    include 'views/notes/show.view.php';