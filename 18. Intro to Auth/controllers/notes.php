<?php 
    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = "My Notes";

    $notes = $db->query('select * from notes where user_id = 1')->fetchAll();
    // dd($notes);
    include 'views/notes.view.php';