<?php 
    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = "My Note";
    $id=$_GET['id'];
    $note = $db->query('select * from notes where id = :id',['id'=>$id])->fetch();
    if(!$note){
        abort();
    }
    dd($note['user_id']);
    if($note['user_id']!=1){
        abort(403);
    }
    // dd($notes);
    include 'views/note.view.php';